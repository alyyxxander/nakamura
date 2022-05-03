<?php 

session_start();
session_unset();
session_destroy();

//send the user back to the homepage
header("location: ../index.php");
exit();