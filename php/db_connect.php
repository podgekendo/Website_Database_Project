<!--Php code for connecting to the images database--> 
<?php
  $host='localhost';
  
  $user='r561250_images';
  $pass='team_vermin';
  $dbname='r561250_images';
  $link=mysql_connect($host,$user,$pass) or die(mysql_error( ));
  $db=mysql_select_db($dbname) or die(mysql_error());
?>