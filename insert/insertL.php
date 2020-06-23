<?php

  $lFoodAdd = $_POST["lFoodAdd"];
  $lCalAdd = $_POST["lCalAdd"];

  $servername = "localhost";
  $username = "muchen";
  $password = "0zXLUTjMC2wUz88P";
  $dbname = "Calories";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  }

  $sql = "INSERT INTO lunchFood (food, calories) VALUES ('$lFoodAdd', '$lCalAdd')";
  if(!mysqli_query($conn, $sql)){
    echo "Not inserted";
  }
  else{
    echo "Successfully inserted";
  }

  header("refresh:1; url=../index.php");

?>
