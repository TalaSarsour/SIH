<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();
echo "<script> alert('You have successfully logged out. You are being redirected to the login page');</script>";

// Redirect to login page (or any other desired page)
header("Location: ../index.php");
exit;

?>
