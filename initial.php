<?php
    // display errors (when needed)
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // define path constants
    define("PUBLIC_HTML_PATH", dirname(__FILE__));
    define("SDEV305_PATH", PUBLIC_HTML_PATH . "/305");
    define("PHP_PATH", SDEV305_PATH . "/php");
    define("LAYOUTS_PATH", PHP_PATH . "/layouts");

    // define cookie keys
    define("NAME_KEY", "user-name");

    // provide DB credentials and connect/disconnect functions
    require_once('/home/thezalma/db-connect-guestbook.php');
    
    // include all PHP helper functions
    require_once("helpers.php");
?>