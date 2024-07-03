<!DOCTYPE html>
<?php
$title = "Social Investment Hub (SIH) - Login Page";
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
                <p class="text-secondary mb-4">أدخل كلمة المرور الجديدة الخاصة بحسابك</p>
                <form action="./ResetPassword-db.php" method="post">

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="NewPassword" name="NewPassword" placeholder="كلمة المرور الجديدة"  data-mdb-showcounter="true" minlength="6" maxlength="20" class="form-control form-control-lg" required/>
                      <label class="form-label" for="NewPassword">كلمة المرور الجديدة</label>
                      <div class="form-helper"></div>
                      <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="RepeatNewPassword" name="RepeatNewPassword" placeholder="أعد كتابة كلمة المرور الجديدة"  data-mdb-showcounter="true" minlength="6" maxlength="20" class="form-control form-control-lg" required/>
                      <label class="form-label" for="RepeatNewPassword">أعد كتابة كلمة المرور الجديدة</label>
                      <div class="form-helper"></div>
                      <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                    </div>
                  </div>
                  
                    <button class="btn btn-primary" type="submit" name="Reset-Password-Submit" data-mdb-ripple-init>إعادة تعيين كلمة المرور</button>

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