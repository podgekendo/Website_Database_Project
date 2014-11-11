<!-- The 1st error line is important as it reports any errors in the php code when run-->
<!--This php code enters data from the form page into the player_database-->
<?php 
 error_reporting(-1);
        error_reporting(E_ALL ^ E_STRICT);
  $family_name=$_POST['family_name']; 
 $first_name=$_POST['first_name']; 
 $email=$_POST['email']; 
 $mobile=$_POST['mobile']; 
 $area=$_POST['area']; 
 $days_available=$_POST['days_available'];
 $time=$_POST['time'];
 $competency=$_POST['competency']; 
 $field_position=$_POST['field_position']; 
 mysql_connect("localhost", "r561250_rat", "team_vermin") or die ("could not connect to mysql"); 
 mysql_select_db("r561250_player_details") or die ("no database");  
 mysql_query("INSERT INTO `Player_Database` (family_name, first_name, email, mobile, area, days_available, time, competency, field_position)  VALUES ('$family_name', '$first_name', '$email', '$mobile', '$area', '$days_available', '$time', '$competency', '$field_position')"); 
 

header( "Location: http://www.rat.ie/successful.html" );
  ?> 

