<?php

require_once 'includes/dbHandler-inc.php';
require_once 'includes/functions-inc.php';

// make a select statement to get data from the database
$SQL = "select id, itemId, price, itemName from menu_items where category = '" . $_POST['Category'] . "';";

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
        echo "    " . $Row[3] . " - $" . $Row[2] . "\n";
        echo "</div>";
    }
    
    echo "</div>";



} else {
    // no results returned
    echo "<p>No results returned from the query</p>\n";
}

// close the connection
$Connection->close();
