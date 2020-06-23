<?php

  $bFoodAdd = $_POST["bFoodAdd"];
  $bCalAdd = $_POST["bCalAdd"];

  $servername = "localhost";
  $username = "muchen";
  $password = "0zXLUTjMC2wUz88P";
  $dbname = "Calories";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  }

  $sql = "INSERT INTO breakfastFood (food, calories) VALUES ('$bFoodAdd', '$bCalAdd')";
  if(!mysqli_query($conn, $sql)){
    echo "Not inserted";
  }
  else{
    echo "Successfully inserted";
  }

  header("refresh:1; url=../index.php");

?>
