<?php

  $dFoodAdd = $_POST["dFoodAdd"];
  $dCalAdd = $_POST["dCalAdd"];

  $servername = "localhost";
  $username = "muchen";
  $password = "0zXLUTjMC2wUz88P";
  $dbname = "Calories";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  }

  $sql = "INSERT INTO dinnerFood (food, calories) VALUES ('$dFoodAdd', '$dCalAdd')";
  if(!mysqli_query($conn, $sql)){
    echo "Not inserted";
  }
  else{
    echo "Successfully inserted";
  }

  header("refresh:1; url=../index.php");

?>
