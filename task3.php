<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/task3.css">
    <link rel="stylesheet" href="css/task2.css">
    <title>Practice 5 - Task 1</title>
</head>
<body class="gradient-animation">
    <div class="loading4"></div>
    <div class="loading44"></div>
    <button class="menu" onclick="Change('index.php')">> Menu <br></button>
    <h1>Task 3 (POST)</h1>
    <div class = "formg">
  <form action="data2.php" method="POST">
    <label for="fname">First integer</label>
    <input type="number" name="first">

    <label for="lname">Second integer</label>
    <input type="number" name="second">

    <input type="submit" value="Submit">
  </form>
</div>
    <script src="js/task3.js"></script>
</body>
</html>