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