<?php
// Include the config file
include 'config.php';

// Get the post ID from the query string
$id = (int)$_GET['id'];

// Delete the post from the "posts" table
$result = $db->query("DELETE FROM posts WHERE id=$id");

// Check for errors
if (!$result) {
die('Error: ' . $db->error);
}

// Redirect to the admin page
header('Location: admin.php');
