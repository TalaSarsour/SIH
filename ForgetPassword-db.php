<?php
include_once "./assets/Common/connection.inc.php";

if(isset($_POST['Forget-Password-Submit'])){
    $User_Email_Address = $_POST['Email'];

    $users = "users";
    $User_ID = "User_ID";
    $User_Full_Name = "User_Full_Name";
    $User_Email = "User_Email";
    $User_Type_ID = "User_Type_ID";
    $User_Status_ID = "User_Status_ID";
    $users_information = "users_information";

    $isValidEmail = filter_var($User_Email_Address , FILTER_VALIDATE_EMAIL);
    if($conn){

         if($isValidEmail === false){
            //echo '<script>alert("This Email is not valid.")</script>';
            $_SESSION['error'] = 'This Email is not valid.';

            header('location: ./ForgetPassword.php');

            exit;

        }else{

            $SqlCheckEmail = "SELECT * FROM $users INNER JOIN $users_information ON $users.$User_ID = $users_information.$User_ID  WHERE $User_Email LIKE '$User_Email_Address'";
            $User_Email_Query = mysqli_query($conn, $SqlCheckEmail);
            if(mysqli_num_rows($User_Email_Query) > 0){
                while($row = mysqli_fetch_array($User_Email_Query)) {
                    $User_Full_Name = $row['User_Full_Name'];    
                    $User_Type_ID = $row['User_Type_ID'];
                    $User_Status_ID = $row['User_Status_ID'];
                }
                echo "status id = ".$User_Status_ID;
                if($User_Status_ID == '1'){
                    echo '<script>alert("Your Reset Password OTP Send successfully. You need to verify your Reset Password account OTP before continue. You are being redirected to the Verification page.")</script>';
                    unset($_SESSION['Email_Address']);
                    unset($_SESSION['Full_Name']);
                    unset($_SESSION['Send_Email_Type']);
        
                    if(!isset($_SESSION['Email_Address'])){
                        $_SESSION['Email_Address'] = $User_Email_Address;
                    }
                    if(!isset($_SESSION['Full_Name'])){
                        $_SESSION['Full_Name'] = $User_Full_Name;
                    }
                    if(!isset($_SESSION['Send_Email_Type'])){
                        $_SESSION['Send_Email_Type'] = "Reset Password & Send OTP Code";
                    }
                    echo '<script>alert("email: '.$_SESSION['Email_Address'].'")</script>';

                    include('Send_Email_OTP.php');
                }else
                if($User_Status_ID == '2'){
                    $_SESSION['error'] = 'This Email is Deactivated please reactivate your account.';
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;

                    header('location: ./ForgetPassword.php');
                    exit;
                }
                else
                if($User_Status_ID == '3'){
                    $_SESSION['error'] = 'This Email is Deleted please Register New account.';
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;

                    header('location: ./ForgetPassword.php');
                    exit;   
                }
            }else{
                $_SESSION['error'] = 'Reset Password failed account not registered.';
                header('location: ./ForgetPassword.php');
                exit;
            }
        }

    }else{
        //echo '<script>alert("Connection Error.");</script>'; 
        $_SESSION['error'] =  'Connection Error.'; 
    }
    // Close connection
    mysqli_close($conn);
    }else{
    header('location: ./ForgetPassword.php');
    exit;
    }


?>