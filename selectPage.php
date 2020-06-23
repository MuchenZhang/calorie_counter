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
    <div id="forms">

    <div id="bSelect">
      <form action="select.php" method="POST">
        What did you have for breakfast?
        <select name="bFoodSelect">
          <option>Select</option>

          <?php
          //conn
          $servername = "localhost";
          $username = "muchen";
          $password = "0zXLUTjMC2wUz88P";
          $dbname = "Calories";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
          }

          $sqli = "SELECT * FROM breakfastFood";
          $result = mysqli_query($conn, $sqli);
          while($row = mysqli_fetch_array($result)){
            echo '<option>'.$row['food'].'</option>';
          }
           ?>
        </select><br><br>

        Breakfast Quantity:
        <input type="number" name="bq"><br><br>

        What did you have for lunch?
        <select name="lFoodSelect">
          <option>Select</option>

          <?php
          //conn
          $servername = "localhost";
          $username = "muchen";
          $password = "0zXLUTjMC2wUz88P";
          $dbname = "Calories";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
          }

          $sqli = "SELECT * FROM lunchFood";
          $result = mysqli_query($conn, $sqli);
          while($row = mysqli_fetch_array($result)){
            echo '<option>'.$row['food'].'</option>';
          }
           ?>
        </select><br><br>

        Lunch Quantity:
        <input type="number" name="lq"><br><br>

        What did you have for dinner?
        <select name="dFoodSelect">
          <option>Select</option>

          <?php
          //conn
          $servername = "localhost";
          $username = "muchen";
          $password = "0zXLUTjMC2wUz88P";
          $dbname = "Calories";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
          }

          $sqli = "SELECT * FROM dinnerFood";
          $result = mysqli_query($conn, $sqli);
          while($row = mysqli_fetch_array($result)){
            echo '<option>'.$row['food'].'</option>';
          }
           ?>
        </select><br><br>

        Dinner Quantity:
        <input type="number" name="dq"><br><br>

        Add a reason:
        <select name="reasons">
          <option>Select</option>
          <option>None</option>
          <option>Holiday</option>
          <option>I'm feeling unwell</option>
          <option>Too much stress</option>
        </select><br><br>

        Your weight today:
        <input type="number" step="0.01" name="weight"><br><br>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
  <div id="button">
    <a href="goalPage.php">Next</a>
  </div>
 </div>

</body>
</html>
