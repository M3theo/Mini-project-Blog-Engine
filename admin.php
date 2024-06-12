<?php
// Include the config file
include 'config.php';

// Select all posts from the "posts" table
$result = $db->query("SELECT * FROM posts ORDER BY date DESC");

// Check for errors
if (!$result) {
die('Error: ' . $db->error);
}

// Fetch all posts as an associative array
$posts = $result->fetch_all(MYSQLI_ASSOC);

print_r($posts);

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
  <h2>Add a new post</h2>
  <form action="add_post.php" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content"></textarea><br><br>
    <input type="submit" value="Submit">
  </form>
  <?php if(!empty($posts)){ ?>
  <table>
    <tr>
     <th>Title</th>
     <th>Content</th>
     <th>Date</th>
     <th>Actions</th>
    </tr>
    <?php foreach ($posts as $post): ?>
    <tr>
     <td><?php echo $post['title']; ?></td>
     <td><?php echo $post['content']; ?></td>
     <td><?php echo $post['date']; ?></td>
     <td>
       <a href="modify.php?id=<?php echo $post['id'];?>">Edit</a>
       <a href="delete_post.php?id=<?php echo $post['id']; ?>">Delete</a>
     </td>
    </tr>
    <?php endforeach; ?>
  </table>
  <?php } ?>
  </main>
</body>
<footer>
  <p>M&M's Blog</p>
</footer>
</html>
