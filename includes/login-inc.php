<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    require_once 'dbHandler-inc.php';
    require_once 'functions-inc.php';

    //check for errors. we cann add as manny error handlers as we want here,
    //but im only checking for empty inputs rn
    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($connection, $username, $password);
} else {
    header("location: ../login.php");
    exit();
}