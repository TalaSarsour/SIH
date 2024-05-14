<!DOCTYPE html>
<?php
$title = "Social Investment Hub (SIH) - Login Page";

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
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body my-5 p-md-5 mx-md-auto w-responsive text-center">
                <img src="./assets/img/logo-v2-1.svg"
                style="width: 218px; height: 70;" alt="logo">

                <h5>تسجيل الدخول الى حسابك</h5>
                <p class="text-secondary mb-4">أدخل بريدك الإلكتروني وكلمة المرور للوصول إلى حسابك</p>
                <form action="./home.php" method="post">

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="typeEmailX-2" placeholder="ادخل البريد الالكتروني" class="form-control form-control-lg" required/>
                    <label class="form-label" for="typeEmailX-2">البريد الالكتروني</label>
                  </div>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" placeholder="كلمة المرور"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                    <label class="form-label" for="typePasswordX-2">كلمة المرور</label>
                    <div class="form-helper"></div>
                  </div>
                  
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <a href="#!" class="text-body">نسيت كلمة المرور ؟</a>
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                      <label class="form-check-label" for="form2Example3">
                        تذكرني
                      </label>
                    </div>
                  </div>
      
                  <button data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-4" type="submit">تسجيل الدخول</button>
      
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>ليس لديك حساب ؟ <a class="text-primary" href="./user-type.php">إنشاء حساب</a></p>
                  </div>
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