<?php
$servername = "localhost";
$username = "muchen";
$password = "0zXLUTjMC2wUz88P";
$dbname = "Calories";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}

$bFoodDe = $_POST["bFoodDe"];
$sql = "DELETE from breakfastFood where food = '$bFoodDe'";
if(!mysqli_query($conn, $sql)){
  echo "Not deleted";
}
else{
  echo "Successfully deleted";
}

header("refresh:1; url=../index.php");

?>
