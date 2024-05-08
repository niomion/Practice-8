<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/task4.css">
    <title>Practice 5 - Task 1</title>
</head>
<?php 
$e = $_POST['first'];
$f = $_POST['second'];
?>
<body class="gradient-animation">
    <div class="loading5"></div>
    <div class="loading55"></div>
    <button onclick="Change('task4.php')">> Menu <br></button>
    <h1>Task 4. Result</h1>
    <p>First: <?php echo("$e $f"); ?></p>
    <p>Second: <?php echo("$f $e"); ?></p>
    <script src="js/task4.js"></script>
</body>
</html>