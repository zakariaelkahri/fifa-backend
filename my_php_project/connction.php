<?php
$servername = 'mysql';
$username = 'root';
$password = 'root_password';
$dbname = 'fifa_team';

// Create connection
$conn = mysqli_connect( $servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

