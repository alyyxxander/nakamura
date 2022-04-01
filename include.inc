
// Start + Title of program
<?php
    // function for the start of an html page
    function HTMLStart( $Title )
    {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title><?php echo $Title ?></title>
            <link href="style.css" type="text/css" rel="Stylesheet" />    
        </head>
        <body>
<?php
    }
?>

// End of Program
<?php
    // function for the end of an html page
    function HTMLEnd()
    {
?>
        </body>
        </html>
<?php
    }
?>

// Nav Bar
<?php
    // function for the Navigation Bar
    function HTMLNavigation()
    {
?>
        <div class="primary-wrapper">
        <!-- NAV PANEL -->
        <nav class="nav-panel panel">
            <nav class="button"><a href="index.html">HOME</a></nav>

            <nav class="button"><a href="map.html">MAP</a></nav>

            <nav class="button"><a href="contact.html">CONTACT</a></nav>

            <nav class="button"><a href="about.html">ABOUT</a></nav>

            <nav class="button"><a href="menu.html">MENU</a></nav>

            <nav class="button"><a href="takeout.html">ORDER</a></nav>
        </nav>
<?php
    }
?>

// Aside Decor
<?php
    // function for decor
    function HTMLDecor()
    {
?>
        <aside class="left panel decor"></aside>
        <aside class="right panel decor"></aside>
<?php
    }
?>

// Footer
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

// Primary Wrapper Start
<?php
    // function for start of primary wrapper
    function WrapperStart()
    {
?>
        <div class="primary-wrapper">
<?php
    }
?>

// Primary Wrapper End
<?php
    // function for end of primary wrapper
    function WrapperEnd()
    {
?>
        </div>
<?php
    }
?>