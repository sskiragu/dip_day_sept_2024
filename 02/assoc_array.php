<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Signup Form</title>
</head>
<body>
    <section>
        <h1>Signup Form</h1>
        <form action="assoc_array.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
<?php
var_dump($_POST);
?>