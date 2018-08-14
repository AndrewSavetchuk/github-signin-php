<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'init.php';

if(isset($_SESSION['user'])) {
    header('location: callback.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in with GitHub</title>
</head>
<body>
    <a href="login.php">Sign in with GitHub</a>
</body>
</html>
