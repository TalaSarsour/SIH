<!DOCTYPE html>
<!-- <html lang="ar" dir="rtl">
<html lang="en" dir="ltr">
    <head>-->
    <?php

        //require "./assets/Connection/Connect_Database.php";
        //$_SESSION['Number_Of_Attempts'] = 0;
        /*
        if(!isset($_SESSION['Number_Of_Attempts'])){
            $_SESSION['Number_Of_Attempts'] = 0 ;
        }else
        */
        $title = "Reset Password Verification Page";
        include "./session.php";
        include('head.php');
        if(!isset($_SESSION['Email_Address'])){
            //echo "<script> alert('Please login first to your account to access admin panel dashboard');</script>";  
        }/*else{
            header('location: index.php');
            exit();  
        }*/
    ?>
<!--
    <link rel="stylesheet" href="./assets/css/Seller/Verification/style.css" />
    </head>-->


   <body>
        <!--Main Navigation-->
        <header>
              <!-- Intro settings -->
  <style>
    body {
      padding-top: 70px;
    }

    #intro {
      /* Margin to fix overlapping fixed navbar */
      margin-top: 58px;
    }

    @media (max-width: 991px) {
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 45px;
      }
    }

    @media (max-width: 640px) {
      html {
        margin-bottom: 50px
      }
    }

  </style>
            <!--
            <style>
            #intro {
                background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
                height: 100vh;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #intro {
                margin-top: -58.59px;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
            
            
            /* Coded with love by Mutiullah Samim */
            /*
            body,
            html {
                margin: 0;
                padding: 0;
                height: 100%;
                background: #60a3bc !important;
            }
            .user_card {
                height: 400px;
                width: 350px;
                margin-top: auto;
                margin-bottom: auto;
                background: #f39c12;
                position: relative;
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                border-radius: 5px;

            }
            .brand_logo_container {
                position: absolute;
                height: 150px;
                width: 150px;
                top: -75px;
                border-radius: 50%;
                background: #60a3bc;
                padding: 10px;
                text-align: center;
            }
            .brand_logo {
                height: 130px;
                width: 130px;
                border-radius: 50%;
                border: 2px solid white;
            }
            .form_container {
                margin-top: 100px;
            }
            .login_btn {
                width: 100%;
                background: #c0392b !important;
                color: white !important;
            }
            .login_btn:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }
            .login_container {
                padding: 0 2rem;
            }
            .input-group-text {
                background: #c0392b !important;
                color: white !important;
                border: 0 !important;
                border-radius: 0.25rem 0 0 0.25rem !important;
            }
            .input_user,
            .input_pass:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }
            .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
                background-color: #c0392b !important;
            }
            */
                #regiration_form fieldset:not(:first-of-type) {
                    display: none;
                }
            </style>-->
<?php
 include "./header.php";
 /*
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="./login.php">
                <strong>Fingerprint-Cash</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--<li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="#intro">Home</a>
                    </li>-->
                    <!--
                    <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                        target="_blank">Learn Bootstrap 5</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
                    </li>
                    -->
                </ul>

                <ul class="navbar-nav d-flex flex-row">
                    <!-- Icons -->
                    <!--
                    <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                        target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    </li>
                     
                    <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    
                    <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    </li>-->
                </ul>
                </div>
            </div>
            </nav>
            <!-- Navbar -->
*/?>
            <section class="h-100 h-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <!--
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                        class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                        alt="Sample photo">-->
                    <div class="card-body">
                        <h3 class="mb-4 pb-2 pb-md-0 px-md-2">يرجى ادخال رمز إعادة تعيين كلمة مرور حسابك.</h3>
                        <hr>

                        <form class="px-md-2 needs-validation" id="regiration_form" method="POST" onsubmit="return check();" >

                        <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                            <div class="col-md-10 mx-5">
                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input type="text" name="User_OTP_Code" id="User_OTP_Code" class="form-control" data-mdb-showcounter="true" placeholder="ادخل رمز تفعيل الحساب" minlength="6" maxlength="6" required />
                                    <label class="form-label" for="User_OTP_Code">رمز تفعيل الحساب</label>
                                    <div class="form-helper"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div id="otp_timer" style="display:none;">
                                <p>Your New OTP Code resend again in <span id="timer" class="text-primary">10</span> seconds...</p>
                            </div>
                            <div class="text-center mb-2">
                            <input type="submit" name="submit" id= "signup" class="btn btn-success mb-1 mx-4" value="إعادة تعيين كلمة مرور" />

                            </div>
                            <div id="otp_link" style="display:none;">
                                <p>Didn't get the OTP Code? </p><!--<a href="Send_Email_OTP.php">Resend a new OTP Code</a></p>-->
                            </div>
                            <!--<div class="text-center">

                            <input type="button" name="resend_otp" id= "resend_otp" class="btn btn-primary mb-1 mx-4" value="إعادة ارسال رمز التحقق" />
                            </div>-->
                        </div>

                        </form>

                        <?php
                        //echo $_SESSION['Email_Address'];
                            if(isset($_POST['submit']))
                            {
                                /*
                                $User_OTP_Code = $_POST['User_OTP_Code'];
                                */                         
                                if(!empty($_POST['User_OTP_Code']) ){
                                    $User_OTP_Code = $_POST['User_OTP_Code'];
                                    //$Send_Email_Type = "Register";
                                    //$_SESSION['Send_Email_Type'] = "Register & Send OTP Code";
                                    if(!isset($_SESSION['Send_Email_Type'])){
                                        //$_SESSION['Send_Email_Type'] = "Register";
                                        $_SESSION['Send_Email_Type'] = "Register & Send OTP Code";
                                    }

                                    if($conn){
                                        $SqlCheckOTP = "SELECT * FROM otp_code WHERE OTP_ID = '0' ";
                                        $SelerLoginOTP = mysqli_query($conn,$SqlCheckOTP);
                                        if(mysqli_num_rows($SelerLoginOTP) > 0){
                                            while($row = mysqli_fetch_array($SelerLoginOTP)) {
                                                $otp = $row['OTP_Code'];
                                            }
                                        }
                                        $email = $_SESSION['Email_Address'];
                                        //$email = $_POST['Customer_Email_Address'];
                                        $otp_code = $_POST['User_OTP_Code'];
                            
                                        if($otp != $otp_code){
                                            echo '<script>alert("Invalid OTP code.");</script>'; 

                                            //echo "Invalid OTP code";
                                        }else
                                        if($otp == $otp_code){
                                            echo '<script>alert("Verfiy Reset Password account done, you may continue Reset Password now. You are being redirected to the Reset Password page.");</script>'; 
                                            echo "<script>window.location.replace('ResetPassword.php');</script>";
                                        }
                                            
                                    }
                                    else{
                                        echo '<script>alert("Connection Error.");</script>'; 
                                    }

                                }else{
                                    echo '<script>alert("Verification OTP Code field is required, please enter them correctly.")</script>';

                                }
                                //echo '<script>alert("Seller Password is:'. $Seller_Password.'")</script>';

                                //header('Location: index.php');


                            }

                        ?>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

            <!-- Section: Design Block 
    <script src="./assets/js/Seller/Verification/script.js"></script>-->

    <?php
        include('script-umd.php');
        include('footer.php');
    ?>
   </body>
</html>