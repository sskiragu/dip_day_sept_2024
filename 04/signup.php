<?php
// set error reporting level
error_reporting(E_ALL);
ini_set('display_errors', 1);


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//include the db_connection.php file
include 'db_connection.php';

// sql query to insert data into the emp table
$sql = "INSERT INTO emp (username, email, password) VALUES('$username', '$email', '$password')";
// execute the query
$result = mysqli_query($conn, $sql);
// var_dump($result);
if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>