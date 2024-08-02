<?php

// Include the config file
include 'config.php';

// Check if the form was submitted
if (isset($_POST['username']) &&
isset($_POST['password'])) {

// Escape the input to prevent SQL injection attacks
$username = ($_POST['username']);
$password = ($_POST['password']);

//Hash password to securate it
$hash_password = password_hash($password, PASSWORD_DEFAULT);

echo "$username\n";
echo "$password\n";
echo "$hash_password\n";
// Insert the post into the "posts" table
// $result = $db->query("SELECT * from users where username='$username' && password='$hash_password'");
$result = $db->query("SELECT COUNT(*) from users where username='$username' && password='$hash_password'");

print_r($result);
print_r(boolval($result));

// Check for errors
// if (!$result) {
//     // header('Location: admin.php');
//     echo "User not found";
// // die('Error: ' . $db->error);
// }
// }


// Redirect to the homepage
// header('Location: index.php');
}