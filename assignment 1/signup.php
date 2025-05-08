<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// connect to the database using mysqli_connect
$conn = mysqli_connect("localhost", "root", "", "hrdb");
// var_dump($conn);

// sql query to insert data into the emp table
$sql = "INSERT INTO emp (username, email, password) VALUES('$username', '$email', '$password')";
// execute the query
mysqli_query($conn, $sql);
?>