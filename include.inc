<?php
// function for the start of an html page
// the second argumment decides whether to add the <script> tag or not
function HTMLStart($Title, $addScript)
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $Title ?></title>

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
        // function for the end of an html page
        function HTMLEnd()
        {
        ?>
        </div> <!-- end of primary wrapper -->
    </body>

    </html>
<?php
        }
?>



<?php
// function for the Navigation Bar
function HTMLNavigation()
{
?>
    <!-- NAV PANEL -->
    <nav class="nav-panel panel">
        <nav class="button"><a href="index.php">HOME</a></nav>

        <nav class="button"><a href="map.php">MAP</a></nav>

        <nav class="button"><a href="contact.php">CONTACT</a></nav>

        <nav class="button"><a href="about.php">ABOUT</a></nav>

        <nav class="button"><a href="menu.php">MENU</a></nav>

        <nav class="button"><a href="takeout.php">ORDER</a></nav>
    </nav>
<?php
}
?>


<?php
// function for side decor
function HTMLDecor()
{
?>
    <aside class="left panel decor"></aside>
    <aside class="right panel decor"></aside>
<?php
}
?>



<?php
// function for footer
function HTMLFooter()
{
?>
    <footer class="panel">
        <span>COMP-205: Web-Based Application Development</span>
        <span>Spring 2022</span>
        <span>Group 5</span>
    </footer>
<?php
}
?>


<?php
function connectToDatabase() {
    // set the connection information
    $Server = "localhost";
    $UserName = "root";
    $Password = "root";
    $Database = "menu_items";

    // connect to the database
    //      create a new instance of a mysqli object. this
    //      object contains the connection to the mysql server
    $Connection = new mysqli($Server, $UserName, $Password, $Database);

    // check for a successful connection
    //      connect_error will evaluate to true if there is an error
    if ($Connection->connect_error) {
        // stop the script and echo an error message
        echo "<h2>Database Error</h2>\n";
        die("MySQLi Connection Error: " . $Connection->connect_error . "\n");
    }
}
?>