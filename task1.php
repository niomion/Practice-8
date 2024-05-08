<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/task1.css">
    <title>Practice 5 - Task 1</title>
</head>
<?php 
    $foo = "Global Variable";
    $_POSTD = "This was send by POST";
    $_REQUESTD = "This was send by REQUEST";
    $sessiontest = $_SESSION['test'] = 'This was created by session';
    $custom_variable = "This is created by ENV";
    putenv("custom_variable=$custom_variable");
    $envtest = getenv('custom_variable');
    setcookie('cktest', 'This was created by Cookies', time() + 3600, '/');
    $cktest = $_COOKIE['cktest'];
?>
<body class="gradient-animation">
    <div class="loading2"></div>
    <div class="loading22"></div>
    <button class="menu" onclick="Change('index.php')">> Menu</button>
    <h1>PHP Superglobal Variables</h1>
    <table>
        <tr>
            <th>Variable</th>
            <th>Meaning</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>$GLOBALS</td>
            <td>References all variables available in global scope</td>
            <td><?php echo($GLOBALS["foo"]);?></td>
        </tr>
        <tr>
            <td>$_SERVER: Server Protocol</td>
            <td>An array containing information such as headers, paths, and script locations</td>
            <td><?php echo($_SERVER['SERVER_PROTOCOL']);?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>An associative array of variables passed to the current script via the URL parameters</td>
            <td><?php echo($_GET['word']); ?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>An associative array of variables passed to the current script via the HTTP POST method</td>
            <td><?php echo($_POSTD);?></td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>An associative array of items uploaded to the current script via the HTTP POST method</td>
            <td><?php echo("File downloaded");?></td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.</td>
            <td><?php echo($_REQUESTD);?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>An associative array containing session variables available to the current script</td>
            <td><?php echo("$sessiontest");?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>An associative array of variables passed to the current script via the environment method</td>
            <td><?php echo("$envtest");?></td>
        </tr>
        <tr>
            <td>$_COOKIE</td>
            <td>An associative array of variables passed to the current script via HTTP Cookies</td>
            <td><?php echo($cktest);?></td>
        </tr>
    </table>
    <script src="js/task1.js"></script>
</body>
</html>
