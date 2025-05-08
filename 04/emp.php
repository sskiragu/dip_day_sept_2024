<?php
// style the table
echo "<style>
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:hover {
    background-color: #f1f1f1;
}
th {
    background-color: #f2f2f2;
}
</style>";
//include the db_connection.php file
include 'db_connection.php';
// sql query to select all data from the emp table
$sql = "SELECT * FROM emp";
// execute the query
$result = mysqli_query($conn, $sql);
// check if there are any results and display them in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
    <tr>
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th colspan='2'>Action</th>
    </tr>";
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["username"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>Edit</td>
        <td>Delete</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
// close the database connection
mysqli_close($conn);

?>