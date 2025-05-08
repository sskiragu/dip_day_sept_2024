<?php

// connect to the database using mysqli_connect
$conn = mysqli_connect("localhost", "root", "", "hrdb");
// var_dump($conn);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>