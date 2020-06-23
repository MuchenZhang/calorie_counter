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
    <div id="goal">
      <form  action="goal.php" method="POST">
        <h2>Goal: </h2><input type="number" name="goal">
        <input type="submit" value="Go">
      </form>

      <div id="button">
        <a href="resultPage.php">Next</a>
      </div>

    </div>
  </div>
</body>
</html>
