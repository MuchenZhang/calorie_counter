<?php
$servername = "localhost";
$username = "muchen";
$password = "0zXLUTjMC2wUz88P";
$dbname = "Calories";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}

$dFoodDe = $_POST["dFoodDe"];
$sql = "DELETE from dinnerFood where food = '$dFoodDe'";
if(!mysqli_query($conn, $sql)){
  echo "Not deleted";
}
else{
  echo "Successfully deleted";
}

header("refresh:1; url=../index.php");

?>
