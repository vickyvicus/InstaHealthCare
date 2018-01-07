
<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $mysql_db = 'mp';
  $conn_err = 'could not connect';

  if(!@mysql_connect($host,$user,$password) || !@mysql_select_db($mysql_db))
  {
    die($conn_err);
  }
  
?>
