<?php
//require "conn.php";
require "./assets/Common/connection.inc.php";
//echo $_Get['save-otp'];
//include("Send_Email_OTP.php")
//echo $_COOKIE['otp'];
//require_once( $_SERVER['DOCUMENT_ROOT'] . "/Send_Email_OTP.php" );

//require_once( "Send_Email_OTP.php" );
//include('print.php');

//session_start();
//include('Send_Email_OTP.php');
//echo $_SESSION['otp'];

/*
if(!empty($_SESSION['otp'])
{
    echo $_SESSION['otp'];
}
else
{
    echo "Session not set yet.";
}*/

$SqlCheckOTP = "SELECT * FROM otp_code WHERE OTP_ID = '0' ";
$UserLoginOTP = mysqli_query($conn,$SqlCheckOTP);
if(mysqli_num_rows($UserLoginOTP) > 0){
    while($row = mysqli_fetch_array($UserLoginOTP)) {
        $otp = $row['OTP_Code'];
    }
}
  //  if(isset($_SESSION['otp'])){
        //$otp = $_SESSION['otp'];
        //$otp = $_COOKIE['otp'];

            //$otp = "332874";
            //$email = $_SESSION['mail'];
            //echo $otp;
            $email = $_POST['Customer_Email_Address'];
            $otp_code = $_POST['Customer_OTP_Code'];

            if($otp != $otp_code){
                echo "Invalid OTP code";
            }else
            if($otp == $otp_code){
                $sql_user_activate = "UPDATE users SET User_Status_ID = '1' WHERE User_Email = '$email'";
                if(mysqli_query($conn,$sql_user_activate)){
                    echo "Verfiy account done, you may sign in now";
                }
                else{
                    echo "Failed to verify you account";
                }
            }
   /* }
    else {
        echo "otp is empty!";
    }*/

?>