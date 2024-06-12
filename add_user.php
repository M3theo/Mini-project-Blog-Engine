<?php

// Include the config file
include 'config.php';

// Check if the form was submitted
if (isset($_POST['username']) &&
isset($_POST['password'])) {

// Escape the input to prevent SQL injection attacks
$username = $db->real_escape_string($_POST['username']);
$password = $db->real_escape_string($_POST['password']);

//Hash password 
$password = password_hash($password, PASSWORD_DEFAULT);

// Insert the post into the "users" table
$result = $db->query("INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')");

// Check for errors
if (!$result) {
die('Error: ' . $db->error);
}
}

// Redirect to the homepage
header('Location: index.php');
