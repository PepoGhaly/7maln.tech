<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type:application/json");
 include('connection.php');
 if (isset($_GET['from']) && isset($_GET['to'])) {
$query = "SELECT * from shows,mangers where datee >= '".$_GET['from']."' and datee <= '".$_GET['to']."' and mangers.mangerID = shows.mangerID order by shows.From";
mysqli_query($con, "SET NAMES utf8;");
mysqli_query($con, "SET CHARACTER SET utf8");
mysqli_set_charset($con, "utf8");
$result = mysqli_query($con, $query) or die("Error in Selecting " . mysqli_error($con));
//create an array
$slotsarr = array();
while($row =mysqli_fetch_assoc($result))
{
    $slotsarr[] = $row;
     // set response code - 404 Not found
     http_response_code(200);
}
}
echo json_encode($slotsarr);

?>
