<?php
// PHP Script Chat - http://coursesweb.net/

// HERE create the rooms for chat (Maximum 30 characters)
$chatrooms = ['English', 'Nature'];

//Data for connecting to mysql database (mysql server, username, password, database name)
$mysql = [ 'host'=>'localhost', 'user'=>'root', 'pass'=>'password', 'bdname'=>'db_name' ];

define('STORAGE', 'file');  //sets storage: 'mysql' or 'file'
define('MAXROWS', 40);  // Maximum number of rows registered for chat
define('CHATLINK', 1);  // allows links in texts (1), not allow (0)


// PASSWORD used to empty chat rooms when this page is accessed with ?mod=admin
define('CADMPASS', 'adminpass');
/* For example, access in your browser
    http://domain/chatfiles/setchat.php?mod=admin
*/

$c_subdir ='';  //Here add the name of subfolder you want to use in "chattxt/" directory

// If you want than only the logged users to can add texts in chat, sets CHATADD to 0
// And sets $_SESSION['username'] with the session that your script uses to keep logged users
define('CHATADD', 1);
if(!isset($_SESSION)) session_start();
if(CHATADD !== 1){
  if(isset($_SESSION['username'])) define('CHATUSER', $_SESSION['username']);
}

// Name of the directory in which are stored the TXT files for chat rooms
define('CHATDIR', 'chattxt/'. ($c_subdir == '' ? '' : $c_subdir .'/'));

// create the subfolder if is set and not exists
if($c_subdir != '' && !file_exists(CHATDIR)) mkdir(CHATDIR, 0755);

include('texts.php');  // file with the texts for different languages
$lsite = $en_site;  // Gets the language for site

if(!headers_sent()) header('Content-type: text/html; charset=utf-8');  // header for utf-8

// include the class ChatSimple, and create objet from it
include('class.ChatSimple.php');
$obc = new ChatSimple($chatrooms);

// if this page is accessed with mod=admin in URL, calls emptyChatRooms() method
if(isset($_GET['mod']) && $_GET['mod'] == 'admin') $obc->emptyChatRooms();