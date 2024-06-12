<?php
// Include the config file
include 'config.php';

// Check if the form was submitted
if (isset($_POST['title']) && isset($_POST['content'])) {

// Escape the input to prevent SQL injection attacks
  $title = $db->real_escape_string($_POST['title']);
  $content = $db->real_escape_string($_POST['content']);
  $id = (int)$_POST['id'];

  // Update the post in the "posts" table
  $result = $db->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");


    // Check for errors
    if (!$result) {
        die('Error: ' . $db->error);
    }
}

// Redirect to the admin page
header('Location: admin.php');
