<?php

//Database configuration
$db_host = 'localhost';
$db_user = 'lkuser';
$db_pass = 'lkpassword';
$db_name = 'blog';

//Connect to the Database
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Check for errors
if ($db->connect_error) {
  die('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error);
}
