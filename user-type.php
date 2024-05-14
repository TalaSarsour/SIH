<!DOCTYPE html>
<?php
session_start();
$title = "Social Investment Hub (SIH) - User Type Page";

include "./head.php";
?>

<body>
<header>
  <!-- Intro settings -->
  <style>

  </style>
</header>
<!--Main layout-->

<main>
  <div class="container-fluid bg-image" style="background-image: url(./assets/img/Background-Gradient-100.png);">

    <!--Section: Content-->
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body my-1 p-md-5 mx-md-auto w-responsive text-center">
                <img src="./assets/img/logo-v2-1.svg"
                class="mb-5"
                style="width: 218px; height: 70;" alt="logo">

                <strong>
                  <h3 class="mb-5 text-dark">حدد نوع المستخدم</h3>
                </strong>
                <form  method="post">  
                  <div class="h-100 d-flex flex-row justify-content-around align-items-center mb-5">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center hover-shadow">
                      <label class="border border-primary rounded border-2 p-4" id="user-type1-label" style="background-color: #3e84a8; color: white;">
                        <input type="radio" name="user-type" value="user1" onclick="changeColor1()" checked required hidden>
                        <i><img id="icon-1" src="./assets/img/user1.png" class="px-3" alt=""></i>
                        <!--
                        <svg width="48" id="icon-1" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M42.4187 9.73105L43.2437 7.61231H39.3812L40.075 9.73105H42.4187ZM43.2437 10.4248L39.3812 10.4061V10.4248C38.0312 11.1186 37.1125 12.5248 37.1125 14.1373C37.1125 16.4623 38.9875 18.3186 41.2937 18.3186C43.6187 18.3186 45.475 16.4436 45.475 14.1373C45.5125 12.5248 44.5937 11.1186 43.2437 10.4248ZM41.575 16.1623V16.7623H40.9937V16.2186C40.6 16.1998 40.225 16.0873 40 15.9748L40.1687 15.2811C40.4125 15.4123 40.7687 15.5248 41.1437 15.5248C41.4625 15.5248 41.725 15.3936 41.725 15.1498C41.725 14.9248 41.5187 14.7748 41.1062 14.6436C40.4875 14.4373 40.0562 14.1373 40.0562 13.5748C40.0562 13.0498 40.4312 12.6561 41.05 12.5248V11.9811H41.6312V12.5061C42.025 12.5248 42.2875 12.5998 42.475 12.7123L42.3062 13.3873C42.1562 13.3123 41.875 13.1811 41.4625 13.1811C41.0875 13.1811 40.9562 13.3498 40.9562 13.4998C40.9562 13.7061 41.1625 13.8186 41.65 14.0061C42.3437 14.2498 42.625 14.5873 42.625 15.0936C42.625 15.5811 42.25 16.0311 41.575 16.1623ZM8.64999 4.36855L9.94375 0.937304H3.71875L4.80624 4.36855H8.64999ZM9.94375 5.49355V5.4748H3.68124V5.49355C1.48749 6.61855 0.0249939 8.90605 0.0249939 11.5311C0.0249939 15.2998 3.0625 18.3373 6.83125 18.3373C10.6 18.3373 13.6375 15.2998 13.6375 11.5311C13.6375 8.90605 12.1375 6.61855 9.94375 5.49355ZM7.2625 14.8123V15.7873H6.34375V14.8873C5.6875 14.8686 5.10625 14.6811 4.73125 14.4936L5.0125 13.3686C5.40625 13.5936 5.98749 13.7998 6.58749 13.7998C7.13124 13.7998 7.50625 13.5936 7.50625 13.1998C7.50625 12.8436 7.20624 12.5998 6.5125 12.3748C5.48125 12.0186 4.7875 11.5498 4.7875 10.6311C4.7875 9.7873 5.38749 9.13105 6.39999 8.94355V8.04355H7.31875V8.8873C7.975 8.90605 8.3875 9.03731 8.6875 9.20606L8.40625 10.2748C8.1625 10.1811 7.7125 9.95606 7.0375 9.95606C6.41875 9.95606 6.21249 10.2373 6.21249 10.4811C6.21249 10.7998 6.53125 11.0061 7.35625 11.3061C8.48125 11.6998 8.95 12.2248 8.95 13.0686C8.95 13.8936 8.34999 14.6061 7.2625 14.8123ZM24.3812 10.0686C27.1187 10.0686 29.3125 7.8748 29.3125 5.1373C29.3125 2.3998 27.1187 0.206055 24.3812 0.206055C21.6437 0.206055 19.45 2.3998 19.45 5.1373C19.45 7.8748 21.6437 10.0686 24.3812 10.0686ZM12.9437 24.3936H4.075C1.1875 24.3936 1.0375 20.0061 4.13125 20.0061H11.7812L16.225 13.5186C17.5187 11.7186 19.0187 10.8748 21.1187 10.8748H27.7C29.8 10.8748 31.2812 11.6811 32.5937 13.5186L37.0375 20.0061H44.7625C47.8562 20.0061 47.65 24.3936 44.8562 24.3936H35.9875C35.2937 24.3936 34.45 24.1498 33.9437 23.3998L30.55 18.5623L30.5312 31.1811H18.4L18.3812 18.5623L15.025 23.3998C14.4812 24.1311 13.6375 24.3936 12.9437 24.3936Z" fill="white"/>
                          </svg>-->
                          
                        <!--
                        <i class="far fa-circle-user fa-3x" id="icon-1" data-src="./assets/img/user1.png" style="color: white"></i>
                        -->
                        <br>
                        <span id="user-type1">مستثمر</span>
                      </label>
                    </div>
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center hover-shadow">
                      <label class="border border-primary rounded border-2 p-4" id="user-type2-label" style="color: black;">
                        <input type="radio" name="user-type" value="user2" onclick="changeColor2()" required hidden>
                        <i><img id="icon-2" src="./assets/img/user2-blue.png" alt=""></i>
                        <!--<i class="far fa-3x" style="background: url(./assets/img/user1.png);" id="icon-2" style="color: #3e84a8"></i>
                        <i class="far fa-circle-user fa-3x" id="icon-2" style="color: #3e84a8"></i>-->
                        <br>
                        <span id="user-type2">ريادي اعمال</span>
                      </label>
                    </div>
                    <!--
                    <label class="border border-primary rounded border-2 align-content-around vertical">
                      <input type="radio" name="type" value="small" required hidden>
                      <i class="far fa-circle-user fa-3x m-4" style="color: #3e84a8"></i>
                      <strong>
                        <span>مستثمر</span>
                      </strong>
                    </label>
                    
                    <label>
                      <input type="radio" name="type" value="big" hidden>
                      <img src="./assets/img/user-type2.png" alt="Option 2">
                    </label>-->

                  </div>        
                  <button data-mdb-ripple-init class="btn btn-primary btn-lg mb-4" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" type="submit">استمرار</button>
                  <?php 

                  if (isset($_POST['submit'])){
                   if(isset($_POST['user-type'])){
                    $user_type = $_POST['user-type'];
                    $host  = $_SERVER['HTTP_HOST'];
                    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $user1 = 'signup1.php';
                    $user2 = 'signup2.php';
                    $signup = 'signup.php';
                    $location1 = 'http://'.$host.$uri.'/'.$user1;
                    $location2 = 'http://'.$host.$uri.'/'.$user2;
                    $location = 'http://'.$host.$uri.'/'.$signup;



                    if($user_type == 'user1'){
                      $_SESSION['user_type'] = $user_type;
                      echo '<script type="text/javascript">window.location.href = "'.$location.'"</script>';
                      //header("Location:http://$host$uri/$user1");
                      exit();
                    }
                    else{
                      if($user_type == 'user2'){
                        $_SESSION['user_type'] = $user_type;
                        echo '<script type="text/javascript">window.location.href = "'.$location.'"</script>';
                        //echo '<script type="text/javascript">window.location.href = "somepage.php"</script>';
                        //header("Location: http://$host$uri/$user2");
                        exit();
                      }
                    }
                   }
                  }

                  ?>
              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!--Section: Content-->
      </div>
  </div>
</main>
<!--Main layout-->
<!-- MDB -->
</body>

<?php
include "./script-umd.php";
?>

</html>