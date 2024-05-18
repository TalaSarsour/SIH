<?php
if (!isset($_SESSION['user_type'])) {
    header("location: ./index.php");
    exit;
  }
?>