<!DOCTYPE html>
<?php
session_start();
$title = "Social Investment Hub (SIH) - Signup Page";

include "./head.php";
?>

<body>
<header>
  <!-- Intro settings -->

</header>
<!--Main layout-->

<main>
  <div class="container-fluid bg-image" style="background-image: url(./assets/img/Background-Gradient-100.png);">

    <!--Section: Content-->
    <section class="vh-100 pb-5">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body my-1 p-md-5 mx-md-auto w-responsive text-center">
                <img src="./assets/img/logo-v2-1.svg"
                style="width: 218px; height: 70;" alt="logo">

                <h5>إنشاء حساب</h5>
                <p class="text-secondary mb-4">أدخل المعلومات التالية لإنشاء حساب خاص بك</p>
                <form class="needs-validation" action="" method="post">
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="FullName" name="FullName" placeholder="ادخل الاسم الكامل" class="form-control form-control-lg" required/>
                    <label class="form-label" for="FullName">الاسم كامل</label>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="Email" name="Email" placeholder="ادخل البريد الالكتروني" class="form-control form-control-lg" required/>
                    <label class="form-label" for="Email">البريد الالكتروني</label>
                  </div>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="Password" name="Password" placeholder="كلمة المرور"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                    <label class="form-label" for="Password">كلمة المرور</label>
                    <div class="form-helper"></div>
                    <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>

                  </div>
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="TermsAndConditions" required />
                    <label class="form-check-label" for="TermsAndConditions"> اوافق على الشروط والاحكام </label>
                  </div>                  
      
                  <button data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-4" type="submit">إنشاء حساب</button>
      
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>لديك حساب ؟ <a class="text-primary" href="./login.php">تسجيل الدخول</a></p>
                  </div>
                  <?php
                  /*
                  if(isset($_POST[$_session['user_type']])){
                    echo $_SESSION['user_type'];
                  }*/
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