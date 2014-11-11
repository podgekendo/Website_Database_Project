<?php

$checkbox1 = $_POST['days_available'];
if($_POST["Submit"]=="Submit")
{
for ($i=0; $i<sizeof($checkbox1);$i++) {
$query="INSERT INTO Player_Database (days_available) VALUES ('".$checkbox1[$i]."')";
mysql_query($query) or die(mysql_error());
}

}
?>
 
