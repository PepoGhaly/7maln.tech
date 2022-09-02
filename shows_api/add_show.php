<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type:application/json");
 include('connection.php');
 if (isset($_GET['name']) && isset($_GET['date']) && isset($_GET['from']) && isset($_GET['to']) && isset($_GET['manger_id']) && isset($_GET['place']) && isset($_GET['isNextWeekGenerated'])) {
$query = "INSERT INTO shows (showName,datee,`From`,`To`,place,mangerID,`isNextWeekGenerated`) VALUES ( '" .$_GET['name']. "', '" .$_GET['date']. "' , '" .$_GET['from']. "' , '" .$_GET['to']. "' , '" .$_GET['place']. "' , '" .$_GET['manger_id']. "' , " .$_GET['isNextWeekGenerated']. ")";
mysqli_query($con, "SET NAMES utf8;");
mysqli_query($con, "SET CHARACTER SET utf8");
mysqli_set_charset($con, "utf8");
$result = mysqli_query($con, $query) or die("Error in Selecting " . mysqli_error($con));
//create an array
$slotsarr = array();

}

?>