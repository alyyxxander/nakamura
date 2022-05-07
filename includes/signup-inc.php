<?php

//this if-statement checks that the user accessed this page *properly*
//      proper access: redirected to this page after submitting the sign up form
//      inproper access: directly typed in this pages url
if (isset($_POST["submit"])) {

    //get the variables from the submitted form
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipCode = $_POST["zipCode"];


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
    if (emptyInputSignup($firstName, $lastName, $email, $username, $password, $passwordRepeat, $address, $city, $state, $zipCode) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    //check if the user submitted a valid username
    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
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

    //check if the user submitted a valid zip code
    if (invalidZip($zipCode) !== false) {
        header("location: ../signup.php?error=invalidZip");
        exit();
    }


    //if none of the errors were thrown, the info should all be valid and we can create a new user
    createUser($connection, $firstName, $lastName, $email, $username, $password, $address, $city, $state, $zipCode);

} else {
    //send the user back to the signup page
    header("location: ../signup.php");

    //stop this script from runnning
    exit();
}