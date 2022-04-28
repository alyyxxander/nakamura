<?php

//====================================== SIGN UP FUNCTIONS
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result = false;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;  }
        
    return $result;
}

function invalidUsername($username) {
    $result = false;

    //username can only contain the characters: 
    //   any lowercase letter, any uppercase letter, numbers from 0-9
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;  }
        
    return $result;
}

function invalidEmail($email) {
    $result = false;

    //FILTER_VALIDATE_EMAIL is a premade function thats build into PHP. it does exactly what it says
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;  }

    return $result;
}

function passwordMatch($password, $passwordRepeat) {
    $result = false;

    if ($password !== $passwordRepeat) {
        $result = true;  }

    return $result;
}

function usernameTaken($connection, $username, $email) {

    //select all values from the table "users" where the usersUid or usersEmail equals "?"
    //      the question mark is just a placeholder
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    $statement = mysqli_stmt_init($connection);

    //run the sql statement inside the DB and see if it throws an error
    if (!mysql_stmt_prepare($statement, $sql)) {
        //if it does throw an error...
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //the second parameter is asking what kind of data you're submitting
    //since we're submitting just two strings (the username and email) we'll put "ss"
    //if we were submiitting 3 strings, it'd be "sss"
    //the thrid/fourth parameters are the actual data submitted by the user
    mysqli_stmt_bind_param($statement, "ss", $username, $email);

    //now we can execute the statement
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);

    //if you DO get some data from the database this will return true,
    //if not, it'll return false
    if ($row = mysqli_fetch_assoc($resultData)) {
        //return all the data from db if this user exits
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
}

function createUser($connection, $name, $email, $username, $pwd) {

    //the question marks are just placeholders
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    
    $statement = mysqli_stmt_init($connection);

    //runn the sql statement innside the db annd see if it throws any kind of error
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    } 

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //the 2nd parameter is asking what kind of data you're submitting
    //      4 strings being submitted ==> "ssss" 
    //the 3rd/4th/etc parameters are the actual data submitted by the user
    mysqli_stmt_bind_param($statement, "ssss", $name, $email, $username, $hashedPwd);

    //now we can execute the statement
    mysqli_stmt_execute($statement);

    mysqli_stmt_close($statement);

    header("location: ../signup.php?error=none");
    exit();
}



//====================================== LOG IN FUNCTIONS
function emptyInputLogin($username, $pwd) {
    $result = false;

    if (empty($username) || empty($pwd)) {
        $result = true;  }
        
    return $result;
}

function logInUser($connection, $username, $password) {
    $uidExists = usernameTaken($connection, $username, $username);

    //check if a user exists in the DB with the given username or email
    if ($uidExists === false) {
        header("location: ../login.php?error=userdne");
        exit();
    }

    //get the hashed version of the passwword from the DB
    $hashedPassword = $uidExists["usersPwd"];
    
    //check if the users password input is correct
    $checkPassword = password_verify($password, $hashedPassword);

    //if password is incorrect
    if ($checkPassword === false) {
        header("location: ../login.php?error=incorrectpassword");
        exit();
    }
    //if the password is correct 
    else if ($checkPassword === true) {

        //start a new session
        session_start();

        //create session variables
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];

        //send the user back to the home page
        header("location: ../index.php");
        exit();

    }
}