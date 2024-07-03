<?php
include_once "./assets/Common/connection.inc.php";

if(isset($_POST['Reset-Password-Submit'])){
    $NewPassword = $_POST['NewPassword'];
    $RepeatNewPassword = $_POST['RepeatNewPassword'];
    $User_Email_Address = $_SESSION['Email_Address'];
    $users = "users";
    $users_information = "users_information";
    $User_ID = "User_ID";
    $User_Email = "User_Email";
    $User_Password = "User_Password";

    /*
    $User_Full_Name = "User_Full_Name";
    $User_Type_ID = "User_Type_ID";
    $User_Status_ID = "User_Status_ID";*/
    //$User_Type = $_SESSION['user_type'];

    $isValidEmail = filter_var($User_Email_Address , FILTER_VALIDATE_EMAIL);
    if($conn){
        if(strlen($NewPassword) > 20 || strlen($NewPassword) < 6 || strlen($RepeatNewPassword) > 20 || strlen($RepeatNewPassword) < 6){
            //echo '<script>alert("Password length must be more than 6 and less than 20.")</script>';
            $_SESSION['error'] = 'Password length must be more than 6 and less than 20.';
            header('location: ./ResetPassword.php');
            exit;
        }
        else if($isValidEmail === false){
            //echo '<script>alert("This Email is not valid.")</script>';
            $_SESSION['error'] = 'This Email is not valid.';
            header('location: ./ResetPassword.php');
            exit;
        }else{
            if($NewPassword == $RepeatNewPassword)
            {
            $Password = password_hash($NewPassword, PASSWORD_BCRYPT);
            //echo $Password;
            $SqlCheckEmail = "SELECT * FROM $users INNER JOIN $users_information ON $users.$User_ID = $users_information.$User_ID  WHERE $User_Email LIKE '$User_Email_Address'";
            $User_Email_Query = mysqli_query($conn, $SqlCheckEmail);
            if(mysqli_num_rows($User_Email_Query) > 0){
                while($row = mysqli_fetch_array($User_Email_Query)) {
                    $ID = $row['User_ID'];
                    $User_Type_ID = $row['User_Type_ID'];
                    $User_Status_ID = $row['User_Status_ID'];
                }
                if($User_Status_ID == '1'){
                    $SqlUpdatePassword = "UPDATE $users SET $User_Password = '$Password' WHERE $User_ID LIKE $ID";
                    $User_Update_Password_Query = mysqli_query($conn, $SqlUpdatePassword);
                    if($User_Update_Password_Query){
                        echo '<script>alert("The password has been reset, you may sign in now. You are being redirected to the Login Page.")</script>';
                        echo "<script>window.location.replace('login.php');</script>";
                    }else{
                        $_SESSION['error'] = 'Failed to reset password your seller account.';
                        header('location: ./ResetPassword.php');

                    }
                }else
                if($User_Status_ID == '2'){
                    $_SESSION['error'] = 'This Email is Deactivated please reactivate your account.';
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;

                    header('location: ./ResetPassword.php');
                    exit;
                }
                else
                if($User_Status_ID == '3'){
                    $_SESSION['error'] = 'This Email is Deleted please Register New account.';
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;

                    header('location: ./ResetPassword.php');
                    exit;   
                }
            }else{
                $_SESSION['error'] = 'login failed account not registered.';
                header('location: ./ResetPassword.php');
                exit;
            }
            }else{
                $_SESSION['error'] = 'Passwords not match.';
                header('location: ./ResetPassword.php');
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
    header('location: ./login.php');
    exit;
    }



  //echo $_SESSION['user_type'];

?>