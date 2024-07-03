<?php
//if (!isset($_SESSION['user_type'])) {

if (!isset($_SESSION['User_Type_ID'])) {
    header("location: ../index.php");
    exit;
  }
?>