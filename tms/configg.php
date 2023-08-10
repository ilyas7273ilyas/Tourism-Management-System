<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "packag";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Could not connect to the database: " . mysqli_error($conn));
}

// Now you can use the $conn variable to perform database operations.

?>
