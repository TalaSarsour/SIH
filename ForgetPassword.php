<!DOCTYPE html>
<?php
$title = "Social Investment Hub (SIH) - Reset Password Page";
include "./session.php";
include "./head.php";
?>

<body>
<header>
  <!-- Intro settings -->

</header>
<!--Main layout-->

<main>
  <div class="container-fluid bg-image" style="background-image: url(/SIH/assets/img/Background-Gradient-100.png);">

    <!--Section: Content-->
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body my-5 p-md-5 mx-md-auto w-responsive text-center">
                <img src="/SIH/assets/img/logo-v2-1.svg"
                style="width: 218px; height: 70;" alt="logo">

                <h5>إعادة تعيين كلمة المرور</h5>
                <p class="text-secondary mb-4">أدخل بريدك الإلكتروني لإعادة تعيين كلمة مرور حسابك</p>
                <form action="./ForgetPassword-db.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>

                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="email" id="Email" name="Email" placeholder="ادخل البريد الالكتروني" class="form-control form-control-lg" required/>
                      <label class="form-label" for="Email">البريد الالكتروني</label>
                    </div>
                  </div>
                  
                    <button class="btn btn-primary" type="submit" name="Forget-Password-Submit" data-mdb-ripple-init>إعادة تعيين كلمة المرور</button>
                <div class="text-center mt-4">
                    <p>لديك حساب ؟ <a class="text-primary" href="./login.php">سجل الدخول الى حسابك</a></p>
                  </div>
                  <!-- Register buttons -->
                  <div class="text-center mt-4">
                    <p>ليس لديك حساب ؟ <a class="text-primary" href="./user-type.php">إنشاء حساب</a></p>
                  </div>
                  <?php
                    if(isset($_SESSION['error'])){
                    echo
                    "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <i class='fas fa-times'></i>
                        ".$_SESSION['error']."
                        <button type='button' class='btn-close alert-dismissible' data-mdb-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
                    unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                    echo
                    "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <i class='fas fa-check-circle'></i>
                        ".$_SESSION['success']."
                        <button type='button' class='btn-close alert-dismissible' data-mdb-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
                    unset($_SESSION['success']);
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