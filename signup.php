<!DOCTYPE html>
<?php
//session_start();
$title = "Social Investment Hub (SIH) - Signup Page";
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
    <section class="vh-100 pb-5 justify-content-center">
      <div class="container py-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body p-md-3 mx-md-auto w-responsive text-center">
                <img src="/SIH/assets/img/logo-v2-1.svg"
                style="width: 218px; height: 70;" alt="logo">

                <h5>إنشاء حساب</h5>
                <p class="text-secondary mb-4">أدخل المعلومات التالية لإنشاء حساب خاص بك</p>
                <form class="needs-validation" action="./signup-db.php" method="post">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="text" id="Full_Name" name="Full_Name" placeholder="ادخل الاسم الكامل" class="form-control form-control-lg" required/>
                      <label class="form-label" for="Full_Name">الاسم كامل</label>
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
                      <input type="password" id="Password" name="Password" placeholder="كلمة المرور"  data-mdb-showcounter="true" minlength="6" maxlength="20" class="form-control form-control-lg" required/>
                      <label class="form-label" for="Password">كلمة المرور</label>
                      <div class="form-helper"></div>
                      <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="RepeatPassword" name="RepeatPassword" placeholder="أعد كتابة كلمة المرور"  data-mdb-showcounter="true" minlength="6" maxlength="20" class="form-control form-control-lg" required/>
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
                    <label class="form-check-label text-start" for="TermsAndConditions"> أوافق على <a href="./privacy-policy.php">سياسة الخصوصية</a> و <a href="./terms-and-conditions.php">الشروط والأحكام</a> الخاصة بالموقع.</label>
                  </div>                  
      
                  <button data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-3" name="Signup-Submit" type="submit">إنشاء حساب</button>
      
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>لديك حساب ؟ <a class="text-primary" href="./login.php">تسجيل الدخول</a></p>
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