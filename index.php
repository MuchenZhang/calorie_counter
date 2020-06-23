<html>

<head>
  <title> Calorie Counter </title>
  <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div id="title">
    <h2>Calorie Counter</h2>
  </div>

  <div id="box">

   <div id="breakfast">
     <h2>Breakfast</h2>

     <form action="insert/insert.php" method="POST">
       ADD breakfast food <input type="text" name="bFoodAdd"><br>
       ADD calorie <input type="number" name="bCalAdd">
       <input type="submit" value="Go">
     </form>

     <form action="delete/deleteB.php" method="POST">
       DELETE breakfast food
       <select name="bFoodDe">
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
       </select>

       <input type="submit" value="Delete">

     </form>

   </div>

   <div id="lunch">
     <h2>Lunch</h2>
     <form action="insert/insertL.php" method="POST">
       ADD lunch food <input type="text" name="lFoodAdd"><br>
       ADD calorie <input type="number" name="lCalAdd">
       <input type="submit" value="Go">
     </form>

     <form action="delete/deleteL.php" method="POST">
       DELETE lunch food
       <select name="lFoodDe">
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
       </select>

       <input type="submit" value="Delete">

     </form>
   </div>

   <div id="dinner">
     <h2>Dinner</h2>
     <form action="insert/insertD.php" method="POST">
       ADD dinner food <input type="text" name="dFoodAdd"><br>
       ADD calorie <input type="number" name="dCalAdd">
       <input type="submit" value="Go">
     </form>


     <form action="delete/deleteD.php" method="POST">
       DELETE dinner food
       <select name="dFoodDe">
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
       </select>

       <input type="submit" value="Delete">

     </form>
   </div>

   <div id="button">
     <a href="selectPage.php">Skip</a>
   </div>
  </div>
</body>



</html>
