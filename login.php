<?php
require "include.inc";
HTMLStart("Log In", true);
HTMLNavigation();
HTMLDecor();
?>

<main class="login-wrapper panel">

    <h1>LOG IN HERE!</h1> <br>

    <div class="login-form">
        <form action="includes/login-inc.php" method="post">
        
            <input type="text" name="userID" placeholder="Username or Email"> <br>

            <input type="password" name="password" placeholder="Password"> <br>

            <button type="submit" name="submit">Log In</button>
        </form>
    </div> 

    Don't have an account? Sign up <a href="signup.php">here</a>!


</main>

<?php
HTMLFooter();
HTMLEnd();
?>