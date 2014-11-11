<?php
    // just so we know it is broken
    error_reporting(E_ALL);
    // some basic sanity checks
    if(isset($_GET['image_id']) && is_numeric($_GET['image_id'])) {
        //connect to the db
        $host='localhost';
  
  $user='r561250_images';
  $pass='team_vermin';
  $dbname='r561250_images';
  $link=mysql_connect($host,$user,$pass) or die(mysql_error());
  $db=mysql_select_db($dbname) or die(mysql_error());
 
        // get the image from the db
        $sql = "SELECT image FROM images WHERE image_id=0";
 
        // the result of the query
        $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
 
        // set the header for the image
        header("Content-type: image/jpeg");
        echo mysql_result($result, 0);
 
        // close the db link
        mysql_close($link);
    }
    else {
        echo 'Please use a real id number';
    }
?>