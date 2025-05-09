<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App | Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">

       <?php
        // Include the navigation bar
        include_once 'navbar.php';
        ?>

        <!-- Main section -->
        <main>
            <h1>Welcome to the Home Page</h1>
            <p>This is the main content of the home page.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </main>
        <!-- Footer -->
        <?php
        // Include the footer
        include_once 'footer.php';
        ?>
    </div>
</body>
</html>