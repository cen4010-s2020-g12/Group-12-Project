<?php
// Chat Simple, from: http://coursesweb.net/php-mysq/

class ChatSimple {
  public $obsql = false;  // stores the object with connection to mysql
  public $tbpre ='chat_';  //prefix for tables with chat rooms
  public $maxrows = 30;
  public $chatrooms = [];  // for chat rooms
  public $chatroomcnt ='';  // store chat room content

  protected $lsite = [];  // will contains the texts in the defined language
  protected $chatdir = 'chattxt';  // directory that store TXT files for chat
  protected $fileroom;  // store the file of current chat room
  protected $chatuser ='';  // store user name
  protected $chatadd = 0; // if not 1, the user must be logged in
  protected $adchat =''; // chat text to save
  public $time =0;

  // constructor (receives the array with chat rooms)
  public function __construct($chatrooms) {
    // set properties value
    $this->lsite = $GLOBALS['lsite'];
    $this->chatrooms = $chatrooms;
    if(defined('CHATADD')) $this->chatadd = CHATADD;
    if(defined('CHATDIR')) $this->chatdir = (basename(dirname($_SERVER['PHP_SELF'])) == 'chatfiles') ? '../'.CHATDIR : CHATDIR;
    if(defined('MAXROWS')) $this->maxrows = MAXROWS;
    $this->time = time();

    //current chatroom
    $this->fileroom = isset($_POST['chatroom']) ? trim(strip_tags($_POST['chatroom'])) : $this->chatrooms[0];

    //set to use file storage or mysql
    if(STORAGE =='file') $this->fileroom = $this->chatdir.'/'. $this->fileroom .'.json';
    else {
      include('class.pdo_mysqli.php');
      $this->obsql = new pdo_mysqli($GLOBALS['mysql']);
    }

    // if access to add new chat text, set $adchat
    if(isset($_POST['adchat']) && isset($_SESSION['canchat']) && $_SESSION['canchat'] <($this->time -2)){
      $this->adchat = trim(htmlentities(trim($_POST['adchat']), ENT_NOQUOTES, 'utf-8'));  // Transform HTML characters, and delete external whitespace
      if(get_magic_quotes_gpc()) $this->adchat = stripslashes($this->adchat);  // Removes slashes added by get_magic_quotes_gpc
      if(strlen($this->adchat)<2 || strlen($this->adchat)>230 || (isset($_SESSION['chat_txt']) && $_SESSION['chat_txt'] ==$this->adchat)) $this->adchat ='';
      else $_SESSION['chat_txt'] = $this->adchat;  //store current chat-text to compare with next one
      $_SESSION['canchat'] = $this->time;  //allow add chat over 3 sec.
    }

    //get/add chat
    if(isset($_POST['isajax']) && isset($_SESSION['canchat']) && !isset($_POST['chatarea'])){
      $this->chatuser = trim(htmlentities($_POST['chatuser'], ENT_NOQUOTES, 'utf-8'));

      //set $chatroomcnt with data from file or mysql
      $this->chatroomcnt = (STORAGE =='file') ? $this->setChatRoomFile() : $this->setChatRoomDb();
    }

    //if ajax request, output chat area data, or room content
    if(isset($_POST['chatarea'])) echo $this->chatArea();
    else if(isset($_POST['isajax'])) echo $this->chatroomcnt;
  }

  //return html with data added in #chatarea with JS, and texts for JS
  protected function chatArea(){
    $_SESSION['canchat'] = $this->time;  //allow get /add chat 
    return json_encode([
'html'=> '<div id="chatrooms">'. $this->chatRooms() .'</div>
<div id="chatwindow" data-subdir="'. CHATDIR .'"><div id="chats"></div><div id="chatusers"></div></div>
<div id="playchatbeep"><img src="chatex/playbeep2.png" width="25" height="25" alt="chat beep" id="playbeep" onclick="setPlayBeep(this)" /><span id="chatbeep"></span></div>'. $this->chatForm(),
'texts'=> [
 'online'=> $this->lsite['online'],
 'no1online'=> $this->lsite['no1online'],
 'notchat'=> $this->lsite['notchat'],
 'err_name'=> $this->lsite['err_name'],
 'err_nameused'=> $this->lsite['err_nameused'],
 'err_vcode'=> $this->lsite['err_vcode'],
 'err_textchat'=> $this->lsite['err_textchat'],
 'err_addurl'=> $this->lsite['err_addurl'],
 'loadroom'=> $this->lsite['loadroom'],
 'addurl'=> $this->lsite['addurl']
 ]
]);
  }

  // returns the HTML code with chat rooms
  public function chatRooms() {
    $nrooms = count($this->chatrooms);
    $chatrooms = '';
    if($nrooms > 0) {
      for($i=0; $i<$nrooms; $i++) {
        $id = ($i==0) ? 'id="s_room"' : '';
        $chatrooms .= '<span class="chatroom" '.$id.' onclick="setChatRoom(this)">'.$this->chatrooms[$i].'</span>';
      }
    }
    else $chatrooms = '<span><b> &nbsp; &nbsp; - Chat</span>';

    return $chatrooms;
  }


  // include the form to add text in chat room, or messaje to Logg in (if $chatuser false, and $chatadd not 1)
  public function chatForm() {
    ob_start();
    if($this->chatadd !== 1) {
      if(defined('CHATUSER')) include('chat_form.php');
      else echo $this->lsite['chatlogged'];
    }
    else include('chat_form.php');
    return ob_get_clean();
  }

  //return table name
  public function setTabName($str){
    $str = str_replace(['-', ' '], '_', trim(strtolower($str)));
    return $this->tbpre . preg_replace('/[^A-z0-9_]+/i', '', $str);
  }

  // returns array with online users in chat stored in mysql, in last 7 sec.
  protected function chatUsersDb() {
    $re = [];
    $table = $this->setTabName('users');
    //insert current user, select all users
    if($this->chatuser !=''){
      $sql ="INSERT INTO $table (user, room, d_t) VALUES (:user, :room, $this->time) ON DUPLICATE KEY UPDATE room=:room2, d_t =$this->time";
      $this->obsql->sqlExec($sql, ['user'=>$this->chatuser, 'room'=>$this->fileroom, 'room2'=>$this->fileroom]);
    }
    $sql ="SELECT user, d_t FROM $table WHERE room =:room ORDER BY d_t";
    $resql = $this->obsql->sqlExec($sql, ['room'=>$this->fileroom]);

    if(isset($resql[0]) && $resql[0]['d_t'] < ($this->time-7)){ //delete users older than 7 sec.
      $sql ='DELETE FROM '. $table .' WHERE d_t < '. ($this->time -7);
      $this->obsql->sqlExec($sql);
    }

    // If returned rows, adds data in $re
    $nr = $this->obsql->num_rows;
    if($nr >0){
      for($i=0; $i<$nr; $i++) $re[$resql[$i]['d_t']] = $resql[$i]['user'];
    }
    return $re;
  }

  // returns array with chat stored in mysql
  protected function getChatDb($table) {
    $re = [];
    $sql ='(SELECT user, chat, d_t FROM `'. $this->setTabName($table) .'` ORDER BY id DESC LIMIT '. $this->maxrows .') ORDER BY d_t';
    $resql = $this->obsql->sqlExec($sql);

    return ($this->obsql->num_rows >0) ? $resql : [['user'=>'', 'd_t'=>1, 'chat'=>'']];
  }

  //set chat room data from mysql
  protected function setChatRoomDb() {
    $re = ['time'=>'', 'users'=>[], 'chats'=>[['user'=>'', 'd_t'=>1, 'chat'=>'']]];  //chat room data

      // if text added, add the new chat data
      if($this->adchat !=''){
        $sql ="INSERT INTO `". $this->setTabName($this->fileroom) ."` (user, chat, d_t) VALUES (:user, :chat, $this->time)";
        $this->obsql->sqlExec($sql, ['user'=>$this->chatuser, 'chat'=>$this->adchat]);
      }

      //set time of last chat and formats date
      $re['chats'] = $this->getChatDb($this->fileroom);
      $nr = count($re['chats']);
      $re['time'] = $re['chats'][$nr-1]['d_t'];
      for($i=0; $i<$nr; $i++) $re['chats'][$i]['d_t'] = date('j M H:i', $re['chats'][$i]['d_t']);
      $re['users'] = $this->chatUsersDb();  // get the list with online users

    return json_encode($re);
  }

  // returns array with online users in chat stored in text file, in last 7 sec.
  protected function chatUsersTxt($users) {
    $re = [];

    // if users, traverses the arrsy and stores the users in last 7 sec.
    if(count($users) > 0) {
      foreach($users as $t=>$usr) {
        if($usr == $this->chatuser) continue;
        else if(intval($t) > ($this->time -8)) $re[$t] = $usr;
      }
    }

    // adds current user in list
    if($this->chatuser !== '') $re[$this->time] = $this->chatuser;

    return array_unique($re);
  }

  // adds HTML code with chat text in TXT file
  protected function setChatRoomFile() {
    $chatrows = ['time'=>'', 'users'=>[], 'chats'=>[['user'=>'', 'd_t'=>1, 'chat'=>'']]];  // stores chat room data

    // if file for current chat room exists, gets its content, else, display 'no chat', and current user
    if(file_exists($this->fileroom)){
      $getchats = file_get_contents($this->fileroom);
      if(strlen($getchats) > 11) $chatrows = json_decode($getchats, true);
      $chatrows['users'] = $this->chatUsersTxt($chatrows['users']);   // get the list with online users

      // if text added, keep the last $maxrows rows, add the new chat data
      if($this->adchat !=''){
        if(is_array($chatrows['chats'])) $chatrows['chats'] = array_slice($chatrows['chats'], -($this->maxrows));
        $chatrows['chats'][] = ['user'=>$this->chatuser, 'd_t'=>date('j M H:i'), 'chat'=>$this->adchat];

        // if chat in 1st line is empty, remove 1st array with chat line data
        if($chatrows['chats'][0]['chat'] =='') array_shift($chatrows['chats']);
        $chatrows['time'] = $this->time;
      }
    }

    // write the chat content in text file, returns $chatroomcnt, or message error
    $rechat = json_encode($chatrows);
    if(file_put_contents($this->fileroom, $rechat)) return $rechat;
    else return json_encode(['error'=>sprintf($this->lsite['err_savechat'], $this->fileroom)]);
  }

  // to empty chatrooms, include the form with chatrooms to empty
  // if request to empty room, and "cadmpass" is correct, write 'notchat' in that room
  public function emptyChatRooms(){
    if(isset($_POST['emptyroom'])){
      $re ='';
      if($_POST['cadmpass'] == CADMPASS){
        if(STORAGE =='file'){
          $fileroom = $this->chatdir.'/'.trim(strip_tags($_POST['emptyroom'].'.json'));
          if(!file_put_contents($fileroom, ' ')) $re = $this->lsite['err_emptedroom']. $_POST['emptyroom'];
        }
        else {
          $this->obsql->sqlExec('TRUNCATE '. $this->setTabName($_POST['emptyroom']));
          if($this->obsql->error !== false) $re = $this->obsql->error;
        }
        if($re =='') $re = sprintf($this->lsite['emptedroom'], $_POST['emptyroom']) ;
        echo '<center>'. $re .'</center>';
      }
      else echo $this->lsite['err_adminpass'];
    }
    include('emptychat_form.php');
  }
}