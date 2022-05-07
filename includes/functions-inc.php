<?php

//====================================== SIGN UP FUNCTIONS
function emptyInputSignup($firstName, $lastName, $email, $username, $password, $passwordRepeat, $address, $city, $state, $zipCode) {
    $result = false;

    if (empty($firstName) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)
        || empty($lastName) || empty($address) || empty($city) || empty($state) || empty($zipCode)) {
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



function invalidZip($zipCode) {
    $result = false;

    //checks if $zipCode is a 5 digit number in the 12345 format. 
    //Note that this simply checks to see if $zipCode is a 5 digit
    //number, not necessarily a valid U.S. Zip Code
    if (!preg_match('#[0-9]{5}#', $zipCode)) {
        $result = true;   }

    return $result;
}




function usernameTaken($connection, $username, $email) {

    //select all values from the table "users" where the usersUid or usersEmail equals "?"
    //      the question mark is just a placeholder
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    $statement = mysqli_stmt_init($connection);

    //run the sql statement inside the DB and see if it throws an error
    if (!mysqli_stmt_prepare($statement, $sql)) {
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

function createUser($connection, $firstName, $lastName, $email, $username, $password, $address, $city, $state, $zipCode) {

    //the question marks are just placeholders
    $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersUid, usersPwd, userAddress, userCity, userState, userZip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    
    $statement = mysqli_stmt_init($connection);

    //runn the sql statement innside the db annd see if it throws any kind of error
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    } 

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    //the 2nd parameter is asking what kind of data you're submitting
    //      4 strings being submitted ==> "ssss" 
    //the 3rd/4th/etc parameters are the actual data submitted by the user
    mysqli_stmt_bind_param($statement, "ssssssssi", $firstName, $lastName, $email, $username, $hashedPwd, $address, $city, $state, $zipCode);

    //now we can execute the statement
    mysqli_stmt_execute($statement);

    mysqli_stmt_close($statement);

    header("location: ../signup.php?error=none");
    exit();
}



//====================================== LOG IN FUNCTIONS
function emptyInputLogin($username, $password) {
    $result = false;

    if (empty($username) || empty($password)) {
        $result = true;  }
        
    return $result;
}

function logInUser($connection, $username, $password) {

    //usernameTaken will return "false" if no user exists in the DB with the given username or email
    //if a user DOES exists with said innfo, it'll return a string array with the users info
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
        $_SESSION["userfirstname"] = $uidExists["usersFirstName"];
        $_SESSION["userlastname"] = $uidExists["usersLastName"];

        //send the user back to the home page
        header("location: ../index.php");
        exit();

    }
}