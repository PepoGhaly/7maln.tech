<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type:application/json");
 include('connection.php');
 if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['date']) && isset($_GET['from']) && isset($_GET['to']) && isset($_GET['manger_id']) && isset($_GET['place']) && isset($_GET['isNextWeekGenerated'])) {
$query2 = "UPDATE `shows` SET `showName`='".$_GET['name']."' , `datee`='".$_GET['date']."' , `From`='".$_GET['from']."', `To`='".$_GET['to']."' ,  `mangerid`='".$_GET['manger_id']."' , `place`='".$_GET['place']."' ,`isNextWeekGenerated`=".$_GET['isNextWeekGenerated']." WHERE showID='".$_GET['id']."'";
mysqli_query($con, "SET NAMES utf8;");
mysqli_query($con, "SET CHARACTER SET utf8");
mysqli_set_charset($con, "utf8");
$result2 = mysqli_query($con, $query2) or die("Error in Selecting " . mysqli_error($con));
//create an array
$slotsarr = array();

}
echo json_encode($slotsarr);

?>
