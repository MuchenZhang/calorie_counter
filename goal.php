<?php
$servername = "localhost";
$username = "muchen";
$password = "0zXLUTjMC2wUz88P";
$dbname = "Calories";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}

$goal = $_POST["goal"];
$date = date("Y-m-d");

$query = "SELECT * FROM Backend WHERE day='$date' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$totalCal = $row[10];

if($totalCal > $goal){
  echo "<div style='Color:red; font-size:200%; font-weight: bold; text-align: center; top: 50%; position: relative'>
  Your calorie intake today is ".$totalCal.", try to eat less tomorrow...</div>";
}
else{
  echo "<div style='Color:green; font-size:200%; font-weight: bold; text-align: center; top: 50%; position: relative'>
  Congratulations! Your calorie intake today is ".$totalCal.", you've reached your goal!</div>";
}

header("refresh:2; url=resultPage.php");
?>
