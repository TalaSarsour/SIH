<?php
include 'assets/Common/connection.inc.php';
/*
if (!isset($_SESSION['User_Type_ID'])) {
  header("location: ./index.php");
  exit;
}else{
  if (isset($_SESSION['User_Type_ID']) == '1') {
    header("Location: /SIH/Dashboard/home.php");
  }elseif (isset($_SESSION['User_Type_ID']) == '2') {
    header("Location: /SIH/Dashboard/projects.php");
  }
}
/*else{
  //header("Location: ./index.php");

}
if (!isset($_SESSION['user_type'])) {
  //header("location: ./index.php");
  //exit;

}
//$currentPageURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//echo '<script>alert("this page is'.$currentPageURL.' ");</script>';

/*
if (isset($_SESSION['user_type']) == 'user1') {
  header("Location: home.php");
}elseif (isset($_SESSION['user_type']) == 'user2') {
  header("Location: projects.php");
}*/
?>
<!--<html lang="en">-->
    <html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title><?php echo $title?></title>
    <!-- MDB icon -->
    <link rel="icon" href="/SIH/assets/img/logo-v2-1.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Font Awesome Pro -->

    <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">

<!--    
      <link rel="stylesheet" href="/SIH/assets/Font-Awesome/css/all.css"/>

    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.css" rel="stylesheet">

      <link rel="stylesheet" href="/SIH/assets/Font-Awesome/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>-->
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- MDB ESSENTIAL -->
     <!--<link rel="stylesheet" href="css/mdb.min.css"/>
    -->
    <link rel="stylesheet" href="/SIH/assets/mdb/css/mdb.rtl.min.css"/>
    <link rel="stylesheet" href="/SIH/assets/css/Custom/style.css"/>

    <link rel="stylesheet" href="/SIH/assets/css/PrismJS/prism.css"/>

    <!-- MDB PLUGINS -->
    <link rel="stylesheet" href="/SIH/assets/mdb/plugins/css/all.min.css"/>

    <!--
    <link rel="stylesheet" href="./pages/landingPage.css"/>
    <link href="https://cdn.jsdelivr.net/npm/nouislider@16.8.0/distribute/nouislider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/nouislider@16.8.0/distribute/nouislider.min.js"></script>-->


  </head>