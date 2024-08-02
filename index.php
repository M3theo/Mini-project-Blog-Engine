<?php

// Include the config file
include 'config.php';

session_start();
print_r($_SESSION);
// Select all posts from the "posts" table, ordered by the "date" column
$result = $db->query("SELECT * FROM posts ORDER BY date DESC");

// Check for errors
if (!$result) {
  die('Error: ' . $db->error);
}

// Fetch all posts as an associative array
$posts = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
 <html>
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
      <a href="admin.php">Admin Area</a>
      <a href="registration.php">Register</a>
    </nav>
    <h1>M&M's Blog</h1>
  </header>
  <main>
    <?php foreach ($posts as $post): ?>
      <h2><?php echo $post['title']; ?></h2>
      <p><?php echo $post['content']; ?></p>
      <p>Posted on <?php echo $post['date']; ?></p>
    <?php endforeach; ?>
  </main>
  </body>
  <footer>
    <p>M&M's Blog</p>
  </footer>
</html>

