<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'init.php';

    fetchData();

    if (!isset($_SESSION['user'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signed In</title>
</head>
<body>
    <div>
        <?php var_dump($_SESSION['payload']); ?>
        <a href="logout.php">Log Out</a>
    </div>
</body>
</html>
