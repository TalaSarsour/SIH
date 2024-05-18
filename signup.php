<!DOCTYPE html>
<?php
//session_start();
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
    <section class="vh-100 pb-5 justify-content-center">
      <div class="container py-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body p-md-3 mx-md-auto w-responsive text-center">
                <img src="./assets/img/logo-v2-1.svg"
                style="width: 218px; height: 70;" alt="logo">

                <h5>إنشاء حساب</h5>
                <p class="text-secondary mb-4">أدخل المعلومات التالية لإنشاء حساب خاص بك</p>
                <form class="needs-validation" action="" method="post">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="text" id="FullName" name="FullName" placeholder="ادخل الاسم الكامل" class="form-control form-control-lg" required/>
                      <label class="form-label" for="FullName">الاسم كامل</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>

                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="email" id="Email" name="Email" placeholder="ادخل البريد الالكتروني" class="form-control form-control-lg" required/>
                      <label class="form-label" for="Email">البريد الالكتروني</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="Password" name="Password" placeholder="كلمة المرور"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                      <label class="form-label" for="Password">كلمة المرور</label>
                      <div class="form-helper"></div>
                      <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="RepeatPassword" name="RepeatPassword" placeholder="أعد كتابة كلمة المرور"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                      <label class="form-label" for="RepeatPassword">أعد كتابة كلمة المرور</label>
                      <div class="form-helper"></div>
                      <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                    </div>
                  </div>
                  <!--
                  <div class="row">
                    <div class="col-md-6 text-start">
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <h6 class="mb-0 me-4">الجنس: </h6>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Gender" id="maleGender"
                              value="option2" />
                            <label class="form-check-label" for="maleGender">ذكر</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Gender" id="femaleGender"
                              value="option1" checked />
                            <label class="form-check-label" for="femaleGender">انثى</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-1">
                      <div class="d-flex flex-row align-items-center mb-4 ">
                        <i class="fas fa-phone-flip fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <input type="tel" id="PhoneNumber" class="form-control" />
                          <label class="form-label" for="PhoneNumber">رقم الهاتف</label>
                        </div>
                      </div>
                    </div>
                  </div>-->
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="TermsAndConditions" required />
                    <label class="form-check-label" for="TermsAndConditions"> اوافق على <a href="#!">الشروط والاحكام</a></label>
                  </div>                  
      
                  <button data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-3" type="submit">إنشاء حساب</button>
      
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