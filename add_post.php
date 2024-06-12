<?php

// Include the config file
include 'config.php';

// Check if the form was submitted
if (isset($_POST['title']) &&
isset($_POST['content'])) {

// Escape the input to prevent SQL injection attacks
$title = $db->real_escape_string($_POST['title']);
$content = $db->real_escape_string($_POST['content']);

// Insert the post into the "posts" table
$result = $db->query("INSERT INTO posts (title, content, date) VALUES ('$title', '$content', NOW())");

// Check for errors
if (!$result) {
die('Error: ' . $db->error);
}
}

// Redirect to the homepage
header('Location: index.php');
