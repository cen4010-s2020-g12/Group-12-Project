<?php
include 'setchat.php';
           /* Define /$sqlc array with SQL queries to create tables */
$re_cnt ='';
if(isset($obc->obsql)) {
  // The users table - store online users
  $sqlc[$obc->tbpre .'users'] = "CREATE TABLE ". $obc->tbpre ."users (user VARCHAR(20) PRIMARY KEY NOT NULL, room VARCHAR(30) NOT NULL, d_t INT NOT NULL DEFAULT 1) CHARACTER SET utf8 COLLATE utf8_general_ci";

  // Table for chats data
  $nr = count($obc->chatrooms);
  for($i=0; $i<$nr; $i++){
    $table = $obc->setTabName($obc->chatrooms[$i]);
    $sqlc[$table] = "CREATE TABLE $table (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, user VARCHAR(20) NOT NULL, chat VARCHAR(250) NOT NULL, d_t INT NOT NULL DEFAULT 1) CHARACTER SET utf8 COLLATE utf8_general_ci";
  }

  // traverse the $sqlc array, and calls the method to create the tables
  foreach($sqlc as $tab=>$sql) {
    $re_cnt .= '<h4>'. ($obc->obsql->sqlExec($sql) ? sprintf('Table %s succesfully created.', $tab) : $obc->obsql->error) .'</h4>';
  }
}
echo $re_cnt;