<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_table = "code-showcase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_table);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
return;