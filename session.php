<?php 
if (session_status() === PHP_SESSION_NONE) {
    //header("Location: ./index.php");
  
    session_start();
  }
if (!isset($_SESSION['User_Type_ID'])) {
  //header("location: ./index.php");
  //header("location: ./Dashboard/sign-out.php");
  //exit;
}else{
  if (isset($_SESSION['User_Type_ID']) == '1') {
    header("Location: /SIH/Dashboard/home.php");
  }elseif (isset($_SESSION['User_Type_ID']) == '2') {
    header("Location: /SIH/Dashboard/projects.php");
  }
}
?>