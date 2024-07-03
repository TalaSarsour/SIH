<?php
if (session_status() === PHP_SESSION_NONE) {
    //header("Location: ./index.php");
  
    session_start();
  }
// Database connection details (replace with your actual details)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sih";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>