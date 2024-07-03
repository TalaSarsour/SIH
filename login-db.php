<?php
include_once "./assets/Common/connection.inc.php";

if(isset($_POST['login-Submit'])){
    $User_Email_Address = $_POST['Email'];
    $Password = $_POST['Password'];

    $users = "users";
    $users_information = "users_information";
    $User_ID = "User_ID";
    $User_Email = "User_Email";
    /*
    $User_Full_Name = "User_Full_Name";
    $User_Password = "User_Password";
    $User_Type_ID = "User_Type_ID";
    $User_Status_ID = "User_Status_ID";*/
    //$User_Type = $_SESSION['user_type'];

    $isValidEmail = filter_var($User_Email_Address , FILTER_VALIDATE_EMAIL);
    if($conn){
        if(strlen($Password) > 20 || strlen($Password) < 6){
            //echo '<script>alert("Password length must be more than 6 and less than 20.")</script>';
            $_SESSION['error'] = 'Password length must be more than 6 and less than 20.';
            header('location: ./login.php');
            exit;
        }
        else if($isValidEmail === false){
            //echo '<script>alert("This Email is not valid.")</script>';
            $_SESSION['error'] = 'This Email is not valid.';
            header('location: ./login.php');
            exit;
        }else{

            //$Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
            //echo $Password;
            $SqlCheckEmail = "SELECT * FROM $users INNER JOIN $users_information ON $users.$User_ID = $users_information.$User_ID
              INNER JOIN user_type ON users.User_Type_ID = user_type.User_Type_ID 
              WHERE $User_Email LIKE '$User_Email_Address'";
            $User_Email_Query = mysqli_query($conn, $SqlCheckEmail);
            if(mysqli_num_rows($User_Email_Query) > 0){
                while($row = mysqli_fetch_array($User_Email_Query)) {
                    $User_ID = $row['User_ID'];
                    $User_Full_Name = $row['User_Full_Name'];    
                    $User_Password = $row['User_Password'];
                    $User_Type_ID = $row['User_Type_ID'];
                    $User_Type_Name = $row['User_Type_Name'];
                    $User_Status_ID = $row['User_Status_ID'];
                    $User_Profile_Picture_Path = $row['User_Profile_Picture_Path'];
                    $User_Gender_ID = $row['User_Gender_ID'];
                    
                    /*//echo '<script>alert("This Email is allready registered.")</script>';
                    $_SESSION['success'] = 'login successfully.';
                    header('location: ./Dashboard/home.php');
                    exit;*/
                }
                //echo '<script>alert("User_Status_ID ='.$User_Status_ID .'")</script>';

                if($User_Status_ID == '1'){
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;
                    if(password_verify($Password, $User_Password)){
                        $_SESSION['User_Email_Address'] = $User_Email_Address;
                        $_SESSION['User_ID'] = $User_ID;
                        $_SESSION['User_Full_Name'] = $User_Full_Name; 
                        $_SESSION['User_Type_ID'] = $User_Type_ID;
                        $_SESSION['User_Status_ID'] = $User_Status_ID;
                        $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                        $_SESSION['User_Type_Name'] = $User_Type_Name;
                        $_SESSION['User_Gender_ID'] = $User_Gender_ID;

                        echo '<script>alert("You are Login successfully. You are being redirected to the Home Page page.")</script>';
                        if($_SESSION['User_Type_ID'] == 1){
                            echo "<script>window.location.replace('./Dashboard/home.php');</script>";
                        }else if($_SESSION['User_Type_ID'] == 2){
                            echo "<script>window.location.replace('./Dashboard/projects.php');</script>";
                        }
                    }else{
                        //echo '<script>alert("Wrong User Password.")</script>';
                        $_SESSION['error'] = 'Wrong User Password.';
                        header('location: ./login.php');
                        exit;
                    }
                }else
                if($User_Status_ID == '2'){
                    $_SESSION['error'] = 'This Email is Deactivated please reactivate your account.';
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;

                    header('location: ./login.php');
                    exit;
                }
                else
                if($User_Status_ID == '3'){
                    $_SESSION['error'] = 'This Email is Deleted please Register New account.';
                    //$_SESSION['error'] = 'User_Status_ID = '.$User_Status_ID;

                    header('location: ./login.php');
                    exit;   
                }
            }else{
                $_SESSION['error'] = 'login failed account not registered.';
                header('location: ./login.php');
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