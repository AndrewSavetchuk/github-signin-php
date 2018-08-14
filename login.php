<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'init.php';

    // This will redirect user to GitHub authorization page
    goToAuthUrl();

    // If no redirection occur then following shows
    echo 'Operation failed.';

?>
