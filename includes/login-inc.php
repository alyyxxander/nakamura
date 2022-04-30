<?php

if (isset($_POST["submit"])) {

    $userID = $_POST["userID"];
    $password = $_POST["password"];
    
    require_once 'dbHandler-inc.php';
    require_once 'functions-inc.php';

    //check for errors. we cann add as manny error handlers as we want here,
    //but im only checking for empty inputs rn
    if (emptyInputLogin($userID, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($connection, $userID, $password);
} else {
    header("location: ../login.php");
    exit();
}