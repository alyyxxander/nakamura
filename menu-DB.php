<?php

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
} else {
    //echo "<p class=\"debug\">Successfully connected to DB! . . .</p>\n";
}

// make a select statement to get data from the database
$SQL = "select id, itemId, price, itemName from menu_items where category = '" . $_POST['Category'] . "';";


//print current SQL statement
//echo "<p class=\"debug\">SQL statement being run: ".$SQL."</p>\n";


// execute the query
$Results = $Connection->query($SQL);

// check for results
//    $Results will evaluate to true if there data is returned from the database, false if no data is returned
if ($Results) {

    // loop through the results
    //      the fecth_row method returns an array of the column
    //      data - one item in the array for each column in the
    //      select statement.
    //
    //      the statement in the while loop will evaluate to false 
    //      when there are no more rows


    echo "<div class='takeout-panel'>\n";

    //id = $Row[1], price = $Row[2], itemName = $Row[3]
    while ($Row = $Results->fetch_row()) {
        echo "<div id='" . $Row[1] . "' draggable='true' class='item' data-price='" . $Row[2] . "'>\n";
        echo "    " . $Row[3] . " - " . $Row[2] . "\n";
        echo "</div>";
    }
    
    echo "</div>";



} else {
    // no results returned
    echo "<p>No results returned from the query</p>\n";
}

// close the connection
$Connection->close();
