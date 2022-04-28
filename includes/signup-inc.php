<?php

//this if-statement checks that the user accessed this page *properly*
//      proper access: redirected to this page after submitting the sign up form
//      inproper access: directly typed in this pages url
if (isset($_POST["submit"])) {

    //get the variables from the submitted form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    require_once 'dbHandler-inc.php';
    require_once 'functions-inc.php';


    /*  STRUCTURE OF THE ERROR CHECKS:
    
        if (some-condition) {
            //if this function returns anything besides "false", it'll throw an error
            
            //send the user to the following page, which contains an error code in the URL
            header("location: .....");

            //stop this script from running
            exit();
        }
     */

    

    //check if all fields are filled out
    if (emptyInputSignup($name, $email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    //check if the user submitted a valid username
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    //check if the user submitted a valid email
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    //check if the submitted passwords match
    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    //check if the submitted username already exists
    if (usernameTaken($connection, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    //if none of the errors were thrown, the info should all be valid and we can create a new user
    createUser($connection, $name, $email, $username, $password);

} else {
    //send the user back to the signup page
    header("location: ../signup.php");

    //stop this script from runnning
    exit();
}