<?php
require "include.inc";
HTMLStart("Sign Up", true);
HTMLNavigation();
HTMLDecor();
?>

<main class="signup-wrapper panel">

    <h1>SIGN UP HERE!</h1> <br>

    <div class="signup-form">
        <form action="includes/signup-inc.php" method="post">

            <input type="text" name="name" placeholder="Full Name"> <br>
            <input type="text" name="email" placeholder="Email"> <br>
            <input type="text" name="username" placeholder="Username"> <br>
            <input type="password" name="password" placeholder="Password"> <br>
            <input type="password" name="passwordRepeat" placeholder="Repeat Password"> <br>
            <button type="submit">Sign Up!</button>
            
        </form>
    </div> 

    Already have an account? Log in <a href="login.php">here</a>!

    <?php
    //if theres an error code in the current page URL...
    if (isset($_GET["error"])) {

        //error due to empty input
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Error! Fill in all fields!</p>";
        } 
        //error due to invalid username
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Error! Invalid username!</p>";
        }
        //error due to invalid email
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Error! Invalid email!</p>";
        }
        //error due to password mismatch
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Error! Passwords do not match!</p>";
        }
        //error due to username being takenn
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Error! Username is already taken!</p>";
        }
        //error due to statement failing
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Error! Something went wrong!</p>";
        }
        //no errors detected
        else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?> 

</main>

<?php
HTMLFooter();
HTMLEnd();
?>