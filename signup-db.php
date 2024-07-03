<?php
include_once "./assets/Common/connection.inc.php";

if(isset($_POST['Signup-Submit'])){
    $Full_Name = $_POST['Full_Name'];
    $Email_Address = $_POST['Email'];
    $Password = $_POST['Password'];
    $RepeatPassword = $_POST['RepeatPassword'];
    //echo "Password: ".$Password;
    //echo "RepeatPassword: ".$RepeatPassword;

    $users = "users";
    $User_Full_Name = "User_Full_Name";
    $User_Email = "User_Email";
    $User_Password = "User_Password";
    $User_Type_ID = "User_Type_ID";
    $User_Status_ID = "User_Status_ID";
    //$User_Type = $_SESSION['user_type'];
    if($_SESSION['user_type'] == "user1"){
        $User_Type = "1";
    }elseif($_SESSION['user_type'] == "user2"){
        $User_Type = "2";
    }
    $isValidEmail = filter_var($Email_Address , FILTER_VALIDATE_EMAIL);
    if($conn){
        if(strlen($Password) > 40 || strlen($Password) < 6){
            //echo '<script>alert("Password length must be more than 6 and less than 40.")</script>';
            $_SESSION['error'] = 'Password length must be more than 6 and less than 40.';

        }
        else if($isValidEmail === false){
            //echo '<script>alert("This Email is not valid.")</script>';
            $_SESSION['error'] = 'This Email is not valid.';

        }else
        //if(password_verify($Password,$RepeatPassword)){
        if($Password == $RepeatPassword){
            $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
            $SqlCheckEmail = "SELECT * FROM $users WHERE $User_Email LIKE '$Email_Address'";
            $Seller_Email_Query = mysqli_query($conn, $SqlCheckEmail);
            if(mysqli_num_rows($Seller_Email_Query) > 0){
                //echo '<script>alert("This Email is allready registered.")</script>';
                $_SESSION['error'] = 'This Email is allready registered.';
                header('location: ./signup.php');
                exit;
            }else{
            // Write the SQL query
            //echo "user type: ".$User_Type;
            $sql = "INSERT INTO $users ($User_Full_Name, $User_Email, $User_Password, $User_Type_ID, $User_Status_ID)
            VALUES ('" . $Full_Name . "', '" . $Email_Address . "', '" . $Password . "', '" . $User_Type . "', '2')";

            $result = mysqli_query($conn, $sql);
            // Check query execution
            if ($result) {
                echo '<script>alert("You are registered successfully. You need to verify your account before login. You are being redirected to the Verification page.")</script>';
                unset($_SESSION['Email_Address']);
                unset($_SESSION['Full_Name']);
                unset($_SESSION['Send_Email_Type']);

                if(!isset($_SESSION['Email_Address'])){
                    $_SESSION['Email_Address'] = $Email_Address;
                }
                if(!isset($_SESSION['Full_Name'])){
                    $_SESSION['Full_Name'] = $Full_Name;
                }
                if(!isset($_SESSION['Send_Email_Type'])){
                    $_SESSION['Send_Email_Type'] = "Register & Send OTP Code";
                }
                include('Send_Email_OTP.php');
                /*echo '<script>
                alert("The account has been created successfully. A message confirming your account has been sent to your email. Please check your email!.");
                </script>';*/
                //echo "Data inserted successfully!";
            } else {
                //echo "Error inserting data: " . mysqli_error($conn);
                /*echo '<script>
                alert("Error inserting data: '.mysqli_error($conn).'");
                </script>';*/
                $_SESSION['error'] = 'Failed to register you account.';
                }
            }

        }else
        {
            //echo "the passwords not match!";
            $_SESSION['error'] =  'The password does not match the repeat password, please enter them with the same password.';
            header('location: ./signup.php');
            exit;

        }

    }else{
        //echo '<script>alert("Connection Error.");</script>'; 
        $_SESSION['error'] =  'Connection Error.'; 
    }
    // Close connection
    mysqli_close($conn);
    }else{
    header('location: ./signup.php');
    exit;
    }



  //echo $_SESSION['user_type'];

?>