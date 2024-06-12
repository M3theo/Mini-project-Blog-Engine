<?php
// Include the config file
include 'config.php';

// Select all users from the "users" table
$result = $db->query("SELECT * FROM posts");

// Check for errors
if (!$result) {
die('Error: ' . $db->error);
}

// Fetch all users as an associative array
$posts = $result->fetch_all(MYSQLI_ASSOC);

// Get the post ID from the query string
$id = (int)$_GET['id'];

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
    <form action="edit_post.php?id=<?php echo $post['id'];?>" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Content:</label><br>
    <input type="text" id="content" name="content"><br>
    <input type="submit" value="Submit">
    </form>
</main>
</body>
</html>