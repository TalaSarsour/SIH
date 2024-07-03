<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }


    if(!@include("./assets/Common/connection.inc.php")){
        require "./assets/Common/connection.inc.php";
    }

//    session_start();
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //include('OTP_Random.php');
    /*
    if(empty($random_otp)){
        //$otp =  $_SESSION['random_otp'];
        $otp =  $random_otp;
    }else{
        $
    }
    if(!empty($_SESSION['random_otp']))
    {
    }
    else
    {
        echo "Session not set yet.";
    }
    //$otp = $random_otp;
    //session_register('otp');
    /*$cookie_name = "otp";
    $cookie_value = $otp;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    */
    
    $otp = rand(100000,999999);
    $_SESSION['otp'] = $otp;
    
    //echo $_SESSION['otp'];
    
    /*
    $From_Email = "qusai.a.sarsour@gmail.com";
    $From_Password = "yxnhqroiejclreqq";*/
    $From_Email = "social.investment.hub.ps@gmail.com";
    $From_Password = "bhldskosobfydgdt";
    

    //require "Mail/phpmailer/PHPMailerAutoload.php";
    //Load Composer's autoloader
    //require 'vendor/autoload.php';
    require './vendor/Send-OTP-Email/autoload.php';
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer;
    //Server settings
    $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $From_Email;                     //SMTP username
    $mail->Password   = $From_Password;                               //SMTP password
    $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;//465;   
    $mail->CharSet = 'UTF-8';
    //Recipients

    $mail->setFrom($From_Email, 'Social Investment Hub PHP Mailer - OTP Verification');//('from@example.com', 'Mailer');
    if(isset($_SESSION['Email_Address'])){
        $mail->addAddress($_SESSION['Email_Address']);
    }
    //$mail->addAddress($Email_Address);//('joe@example.net', 'Joe User');     //Add a recipient
    /*$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/
    //Content

    $mail->isHTML(true);
    if(isset($_SESSION['Send_Email_Type'])){
        if($_SESSION['Send_Email_Type'] == "Register & Send OTP Code"){ //&& $_SESSION['Number_Of_Attempts'] < 3){
            $mail->Subject="Your verify code";
            $mail->Body="<p>مرحبا $_SESSION[Full_Name], 
            </p> 
            <h3> أهلاً بك في منصة Social Investment Hub للاستثمار وطرح الأفكار
            </h3>
            <br>
            
            <p> : شكرًا لتسجيلك في موقعنا. لإكمال عملية التسجيل، يرجى تأكيد عنوان بريدك الإلكتروني عن طريق ادخال الرمز التالي </p>
            <p> رمز تفعيل حسابك هو <b> $otp </b></p>
            <b> برمجة فريق عمل Social Investment Hub <3 </b>";
            /*            <p> : شكرًا لتسجيلك في موقعنا. لإكمال عملية التسجيل، يرجى تأكيد عنوان بريدك الإلكتروني بالنقر على الرابط التالي [رابط التأكيد] او عن طريق ادخال الرمز التالي </p>

            $mail->Body="<p>Dear $_SESSION[Full_Name], </p> <h3>Your verify OTP code is $otp <br></h3>
            <br><br>
            <p>With regrads,</p>
            <b>Programming with Social Investment Hub Team <3 </b>";*/

            if(!$mail->send()){
                echo '<script>alert("Register Failed, Invalid Email or no Internet Connction.")</script>';
                echo "<script>window.location.replace('./signup.php');</script>";

                //echo "Register Failed, Invalid Email ";
            }else
            if($mail->send()){
                $sql_modify_save_otp = "UPDATE otp_code SET OTP_Code = '$otp' WHERE OTP_ID = '0'";
                if(mysqli_query($conn,$sql_modify_save_otp)){
                    /*
                $sql_save_otp = "INSERT INTO otp_code (OTP_Code) VALUES ('$otp')";
                if(mysqli_query($conn,$sql_save_otp)){
                    */
                    echo '<script>alert("Register Verification OTP sent to '.$_SESSION['Email_Address'].'")</script>'; //$_SESSION['Email_Address'] // $Email_Address
                    echo "<script>window.location.replace('./SignupVerification.php');</script>";


                // echo "Register Successfully, OTP sent to " . $Email_Address;
                }
                else{
                    echo '<script>alert("Register Failed, Invalid Email.")</script>';
                    echo "<script>window.location.replace('./signup.php');</script>";

                    //echo "Failed to register you account";
                }
            }
        }else
        if($_SESSION['Send_Email_Type'] == "Reset Password & Send OTP Code"){// && $_SESSION['Number_Of_Attempts'] < 3){
            $mail->Subject="Recover & Reset Your Password with verify code";
            $mail->Body="<p>مرحبا $_SESSION[Full_Name], 
            </p> 
            <h3> لقد تلقينا طلبًا لإعادة تعيين كلمة المرور الخاصة بك
            </h3>
            <br>
            
            <p> رمز التحقق OTP الخاص بإعادة تعيين كلمة المرور الخاصة بك هو <b> $otp </b></p>
            <b> برمجة فريق عمل Social Investment Hub <3 </b>";

            if(!$mail->send()){
                echo '<script>alert("Register Failed, Invalid Email or no Internet Connction.")</script>';
                echo "<script>window.location.replace('ForgetPassword.php');</script>";


                //echo "Register Failed, Invalid Email ";
            }else
            if($mail->send()){
                $sql_modify_save_otp = "UPDATE otp_code SET OTP_Code = '$otp' WHERE OTP_ID = '0'";
                if(mysqli_query($conn,$sql_modify_save_otp)){
                    /*
                $sql_save_otp = "INSERT INTO otp_code (OTP_Code) VALUES ('$otp')";
                if(mysqli_query($conn,$sql_save_otp)){
                    */
                    echo '<script>alert("Reset Password OTP sent to '.$_SESSION['Email_Address'].'")</script>';
                    echo "<script>window.location.replace('ResetPasswordVerification.php');</script>";
                    $_SESSION['Number_Of_Attempts'] ++;



                    //echo "Reset Password OTP sent to " . $Email_Address;
                }
                else{
                    echo '<script>alert("Failed to reset your password.")</script>';

                    //echo "Failed to reset your password";
                }
            }
        }/*else
        if($_SESSION['Send_Email_Type'] == "Reset Password & Send OTP Code" ){//&& $_SESSION['Number_Of_Attempts'] >= 3){
            date_default_timezone_set("Asia/Jerusalem");*/

            /*
            if(!isset($_SESSION['Check_Time'])){
                $chktime = strtotime($timestamp);
                $_SESSION['Check_Time'] = $chktime;
                $timenow = time();
                echo "<script> alert('the time now is ".date ( "i:s" , $timenow)."');</script>";

            }*/
            /*
            if (isset($_COOKIE["start"]) and $_COOKIE["start"]+3600<time()){
                echo "<script> alert('".(time()-$_COOKIE["start"])/60 . " minutes left');</script>";  
            }else{
                echo "<script> alert('times up!');</script>";  

            }*/
/*
            if($_SESSION['Number_Of_Attempts'] == 3){

                if(!isset($_SESSION['Time_Start']))
                {
                    $_SESSION['Time_Start'] = time();

                }else
                if(isset($_SESSION['Time_Start']))
                {
                    $time = (time() - $_SESSION['Time_Start'])/60;
                    echo "<script> alert('It's been ".$time." minutes');</script>";

                    $Remaining_Time = 0.5 - $time;

                    //echo "<script> alert(' ISSET the time now is ".$_SESSION['Time_Start']."');</script>";

                    //echo "<script> alert('the remaining time is ".$time."');</script>";

                    if($time > 0.5)
                    {
                        session_reset();
                        $_SESSION['Number_Of_Attempts'] = 0;
                        $_SESSION['Time_Start'] = time();
                        echo "<script> alert('You can now resend the OTP Code');</script>";
    
                        // fail!
                    }else
                    if($time < 30){
                        echo '<script>alert("You have exceeded the daily allowed limit ('.$_SESSION['Number_Of_Attempts'].' attempts) to resend your account activation code, please try again later.")</script>';
                        echo "<script> alert('the remaining time is ".$Remaining_Time."');</script>";
                    }
                }


/*
                $timenow = time();
                $time_diff = $timenow - $_SESSION['Check_Time'];
                if( $time_diff >= 1800) {
                    echo "<script> alert('Yay! It has been 30 minutes!');</script>";  
                    echo "<script> alert('the check time is ".date ( "i:s" ,  $_SESSION['Check_Time'])."');</script>";
                    echo "<script> alert('the time now is ".date ( "i:s" , $timenow)."');</script>";
          
                } else {
                    $remaining = (1800 - $time_diff);
                    echo "<script> alert('Wait! Its not been 30 minutes');</script>";
                    echo "<script> alert('please come back in ".date ( "i:s" , $remaining)." minutes');</script>";
                }* /
              }*/
           // echo "<script>window.location.replace('login.php');</script>";
        }/*else
        if($_SESSION['Send_Email_Type'] == "Reset Password & Send OTP Code"){// && $_SESSION['Number_Of_Attempts'] > 3){
           // echo '<script>alert("You have exceeded the daily allowed limit ('.$_SESSION['Number_Of_Attempts'].' attempts) to resend your account password reset code, please try again later.")</script>';
            echo "<script>window.location.replace('LoginPage.php');</script>";
        }*/
    //}



?>