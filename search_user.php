<?php
// Include the config file
include 'config.php';

// Select all users from the "users" table
$result = $db->query("SELECT * FROM users");

// Check for errors
if (!$result) {
die('Error: ' . $db->error);
}

// Fetch all users as an associative array
$users = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title> M&M's Blog</title>
</head>
<body>
<header>
    <nav>
        <a href="/">Home</a>
    </nav>
    <h1>M&M's Blog</h1>
  </header>
<main>
    <nav>
    </nav>
    <form action="login.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Submit">
    </form>
</main>
</body>
</html>