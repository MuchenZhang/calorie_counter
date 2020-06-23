<html>

<head>
  <title> Calorie Counter </title>
  <link href="selectPage.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div id="title">
    <h2>Calorie Counter</h2>
  </div>

  <div id="box">
    <form action="resultPage.php" method="POST">
      See result from the last
      <select name="days">
        <option>Select</option>
        <option>1</option>
        <option>3</option>
        <option>7</option>
        <option>10</option>
        <option>30</option>
      </select>
      days:
      <input type="submit" value="Go">
    </form><br><br>

    <?php
    $servername = "localhost";
    $username = "muchen";
    $password = "0zXLUTjMC2wUz88P";
    $dbname = "Calories";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
      die("Connection failed: ". $conn->connect_error);
    }

    $days = $_POST["days"];

    $sql = "SELECT * FROM Backend WHERE day >= DATE_ADD(CURDATE(),INTERVAL -'$days' DAY);";
    if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Date</th>";
                echo "<th>Total Calorie</th>";
                echo "<th>Weight</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['day'] . "</td>";
                echo "<td>" . $row['totalCal'] . "</td>";
                echo "<td>" . $row['weight'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
     ?>

     <br><br>
     <div id="button">
       <a href="index.php">Return to main page</a>
     </div>

     <br><br>
     <div id="button">
       <a href="chartjs/linegraph.html">View graph</a>
     </div>
  </div>
 </div>

</body>
</html>
