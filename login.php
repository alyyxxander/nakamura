<?php
    require "include.inc";
    session_start();
    HTMLStart("Log In", true);
    HTMLNavigation();
    HTMLDecor();
?>

<main class="login-wrapper panel">

    <div class="login-form">

        <h1>LOG IN HERE!</h1> <br>

        <form action="includes/login-inc.php" method="post">
            <input type="text" name="userID" placeholder="Username or Email"> <br>
            <input type="password" name="password" placeholder="Password"> <br>
            <button type="submit" name="submit" class="submit">~ Log In ~</button>
        </form> <br>

        <?php
        //if theres an error code in the current page URL...
        if (isset($_GET["error"])) {

            //error due to user not being found in DB
            if ($_GET["error"] == "userdne") {
                echo "<p class='error-message'>No such user found!</p>";
            } 
            //error due to empty input
            else if ($_GET["error"] == "emptyinput") {
                echo "<p class='error-message'>Error! Fill in all fields!</p>";
            }
            //error due to sql statement failing
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='error-message'>Error! Something went wrong!</p>";
            }
            //no errors detected
            else if ($_GET["error"] == "none") {
                echo "<p class='error-message'>-----------</p>";
            }
        }
        ?> 

        <p>Don't have an account? Sign up <a href="signup.php">here</a>!</p>
    </div> 

</main>

<?php
    HTMLFooter();
    HTMLEnd();
?>