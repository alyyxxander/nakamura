<?php
// the second argumment decides whether to add the <script> tag or not
function HTMLStart($Title, $addScript) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $Title; ?></title>

        <?php
        /* check if we need to link our javascript file */
        if ($addScript) {
            echo "<script src='script.js' defer></script>";
        }

        $pageName = basename($_SERVER['PHP_SELF']); /* this is the current page name */

        /* if the current page is "index.php", add the script tag that links an icon pack */
        if ($pageName == "index.php") {
            echo "<!-- this is for an icon pack (used for image carousel) -->
                        <script src='https://kit.fontawesome.com/78f9737a32.js' crossorigin='anonymous'></script>";
        }
        ?>
        <link href="style.css" type="text/css" rel="Stylesheet" />
    </head>

    <body>

        <div class="primary-wrapper">
<?php
}
?>



<?php
function HTMLEnd() {
?>
        </div> <!-- end of primary wrapper -->
    </body>

    </html>
<?php
}
?>



<?php
function HTMLNavigation() {
?>
    <!-- NAV PANEL -->
    <nav class="nav-panel panel">
        <nav class="button"><a href="index.php">HOME</a></nav>

        <nav class="button"><a href="map.php">MAP</a></nav>

        <nav class="button"><a href="contact.php">CONTACT</a></nav>

        <nav class="button"><a href="about.php">ABOUT</a></nav>

        <nav class="button"><a href="menu.php">MENU</a></nav>

        <nav class="button"><a href="takeout.php">ORDER</a></nav>
        
        <?php
            //if a user is logged in, show the "Log Out" button
            if (isset($_SESSION["useruid"])) {
                echo "<nav class='button'><a href='includes/logout-inc.php'>LOG OUT</a></nav>";
            } 
            //if a user is NOT logged in, show the "Log In" button
            else {
                echo "<nav class='button'><a href='login.php'>LOG IN</a></nav>";
            }
        ?>

    </nav>
<?php
}
?>


<?php
function HTMLDecor() {
?>
    <aside class="left panel decor"></aside>
    <aside class="right panel decor"></aside>
<?php
}
?>



<?php
function HTMLFooter() {
?>
    <footer class="panel">

        <?php
            //if a user is logged in, show a welcome message in the footer
            if (isset($_SESSION["useruid"])) {
                echo "<span> </span>";
                echo "<span>What's up, ".$_SESSION["userfirstname"]." ".$_SESSION["userlastname"];
                echo "!</span>";
                echo "<span> </span>";
            } 
            //if a user is NOT logged in, show the default footer
            else {
                echo "<span>COMP-205: Web-Based Application Development</span>";
                echo "<span>Spring 2022</span>";
                echo "<span>Group 5</span>";
            }
        ?>

    </footer>
<?php
}
?>


