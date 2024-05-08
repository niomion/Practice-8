<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/task3.css">
    <title>Practice 5 - Task 1</title>
</head>
<?php 
$c = $_POST['first'];
$d = $_POST['second'];
?>
<body class="gradient-animation">
    <div class="loading4"></div>
    <div class="loading44"></div>
    <button onclick="Change('task3.php')">> Menu <br></button>
    <h1>Task 3. Result</h1>
    <p>Sum: <?php echo "$c + $d = " . ($c + $d); ?></p>
    <p>Product: <?php echo "$c * $d = " . ($c * $d); ?></p>
    <p>Difference: <?php echo "$c - $d = " . ($c - $d); ?></p>
    <p>Fraction: <?php echo "$c / $d = " . ($c / $d); ?></p>
    <script src="js/task3.js"></script>
</body>
</html>