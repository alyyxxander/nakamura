<?php
    require "include.inc";
    session_start();
    HTMLStart("Sign Up", true);
    HTMLNavigation();
    HTMLDecor();
?>

<main class="signup-wrapper panel">

    <div class="signup-form">

        <h1>SIGN UP HERE!</h1> <br>

        <form action="includes/signup-inc.php" method="post">
            <!-- placeholder is the temporary text that tells the user what to input -->
            <input type="text" name="name" placeholder="Full Name"> <br>
            <input type="text" name="email" placeholder="Email"> <br>
            <input type="text" name="username" placeholder="Username"> <br>
            <input type="password" name="password" placeholder="Password"> <br>
            <input type="password" name="passwordRepeat" placeholder="Repeat Password"> <br>
            <button type="submit" name="submit" class="submit">~ Sign Up ~</button>
        </form>

        <?php
        //if theres an error code in the current page URL...
        if (isset($_GET["error"])) {

            //error due to empty input
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='error-message'>Error! Fill in all fields!</p>";
            }
            //error due to invalid username
            else if ($_GET["error"] == "invalidusername") {
                echo "<div class='error-message'> <p>Error! Invalid username!</p>";
                echo "<p>Usernames may only contain the following characters: </p>";
                echo "<p>any lowercase letter, any uppercase letter, numbers from 0-9</p> </div>";
            }
            //error due to invalid email
            else if ($_GET["error"] == "invalidemail") {
                echo "<p class='error-message'>Error! Please enter a valid email!</p>";
            }
            //error due to password mismatch
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p class='error-message'>Error! Passwords do not match!</p>";
            }
            //error due to username being takenn
            else if ($_GET["error"] == "usernametaken") {
                echo "<p class='error-message'>Error! Username is already taken!</p>";
            }
            //error due to sql statement failing
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='error-message'>Error! Something went wrong!</p>";
            }
            //no errors detected
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
        ?>

        <p>Already have an account? Log in <a href="login.php">here</a>!</p>
    </div>

</main>

<?php
    HTMLFooter();
    HTMLEnd();
?>