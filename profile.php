<!DOCTYPE html>
<?php
session_start();
$title = "الملف الشخصي";

include "./head.php";
?>
<head>
    <link rel="stylesheet" href="./assets/css/Custom/home.css"/>
<style>
@media (min-width: 1400px) {
    main,
    header,
    #main-navbar {
        padding-right: 240px;
    }
}
</style>
</head>
<body>
<?php
  include "./header.php";
  ?>
  <!--Main layout-->
  <main>
    <!-- Section: Main Search -->
    <section class="container pt-4 pb-5">


      <div class="container-fluid">
        <!--Section:  cards-->
        <section>
          <div class="container">
            <div class="row justify-content-between">

              <div class="col-md-3">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="./assets/img/profile-picture-female-1.png" class="img-fluid" style="height: 100%; width: 100%;"/>
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                    <div class="card-img-overlay" >
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm bg-light" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#edit_user_information_modal"><i class="fas fa-pen"></i></button>
                      <!-- Button trigger modal -->
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="edit_user_information_modal"
                        data-mdb-backdrop="static"
                        data-mdb-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="EditUserInformationModalLabel"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="EditUserInformationModalLabel">إختيار صورة الملف الشخصي</h5>
                              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!--Avatar-->
                              <div>
                                <div class="d-flex justify-content-start d-inline-flex position-relative mb-4">
                                  <span class="position-absolute bottom-0 start-100 translate-middle border border-light rounded-circle text-light" style="background-color: #BF9874;">
                                    <label class="form-label text-white mt-2 mx-3" for="customFile2"><i class="fas fa-pen fa-xs"></i>
                                    </label>
                                    <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                  </span>
                                    <img id="selectedAvatar" src="./assets/img/avatar-female-profile-picture-1.png"
                                    class="rounded-circle" style="width: 200px; height: 200px;" alt="example placeholder" />
                                </div>
                                <!--
                                <div class="d-flex justify-content-start">
                                    <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white" for="customFile2">اختيار صورة جديدة</i>
                                        </label>
                                        <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                    </div>
                                </div>
                              -->
                              </div>
                              <!--
                              <div class="d-inline-flex position-relative">
                                <span class="position-absolute bottom-0 start-100 translate-middle px-2 border border-light rounded-circle text-light" style="background-color: #BF9874;">
                                    <i class="fas fa-pen fa-xs"></i>
                                </span>
                                <img class="rounded-circle shadow-4" src="./assets/img/avatar-female-profile-picture-1.png" alt="Avatar" style="width: 70px; height: 70px;">
                              </div>-->
                              <p class="text-dark mt-2">الاسم الكامل : <span class="text-secondary">علا خالد المصعبي</span></p>
                              <form class="needs-validation"  method="post">
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <input type="text" id="typeNameX-2" placeholder="ادخل الاسم الكامل الجديد" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="typeNameX-2">الاسم الكامل الجديد</label>
                                </div>
                                <p class="text-dark mt-2">البريد الالكتروني : <span class="text-secondary">Hala.salahqu20@gmail.com</span></p>
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <input type="email" id="typeEmailX-2" placeholder="ادخل البريد الالكتروني الجديد" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="typeEmailX-2">البريد الالكتروني الجديد</label>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                </div>

                                </form>
                            </div>
                            <div class="modal-footer">

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bottom-0 d-flex align-items-end h-100 text-start justify-content-start">
                        <div>
                          <p class="fw-bold text-white">علا خالد المصعبي</p>
                          <p class="text-white">Hala.salahqu20@gmail.com</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <button type="button" class="btn btn-primary btn-block mt-4 pb-3" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#staticBackdrop"> إعادة تعيين كلمة المرور </button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-mdb-backdrop="static"
                  data-mdb-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">إعادة تعين كلمة المرور</h5>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="needs-validation"  method="post">
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="typePasswordX-2" placeholder="أدخل كلمة المرور  القديمة"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                            <label class="form-label" for="typePasswordX-2">كلمة المرور القديمة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="typePasswordX-2" placeholder="أدخل كلمة المرور  الجديدة"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                            <label class="form-label" for="typePasswordX-2">كلمة المرور الجديدة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>إعادة تعيين</button>
                          </div>

                          </form>
                      </div>
                      <div class="modal-footer">

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card pb-5 mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-8">
                        <h5 class="card-title fw-bold">
                          معلومات اخرى
                        </h5>
                      </div>
                  
                      <div class="col-md-3 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" ><i class="fas fa-pen"></i></button>
                      </div>
                    </div>
                    <p class="card-text text-dark mt-2">
                      الدولة: <span class="text-secondary">مصر</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      نطاق الاستثمار : <span class="text-secondary">12000$</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      مراحل عمل الشركة : <span class="text-secondary">ربحية</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      لينكدان : <span class="text-secondary">علا خالد</span>
                    </p>
                  </div>

                </div>
              </div>

              <div class="col-md-9">
                <div class="row d-flex justify-content-between">

                <div class="card">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          نبذة عني
                        </h5>
                      </div>
                  
                      <div class="col-md-4 text-end">
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm" ><i class="fas fa-pen"></i></button>
                      </div>
                    </div>
                    <!--
                    <h5 class="card-title">
                      نبذة عني</h5>-->
                    <p class="card-text text-secondary">
                      أنا متحمسة لعالم الموضة والأناقة، حيث اكتشف الإلهام في التصاميم الجديدة والاتجاهات الحالية. بخبرتي وشغفي بالأزياء، قمت بالعمل في مجال الموضة بكثرة وعدد كبير، حيث يلزم في تنظيم وتنسيق العروض الأزيائية والفعاليات الخاصة.
                      أخذ مساعدة الناس على التعبير عن أنفسهم من خلال ملابسهم، من خلال توفير الإرشادات والإرشادات حول كيفية اختيار المسؤول الرئيسي ومظهرهم.
                      بفضل ما تمتلكه من عالم ما بعدي، أتمكن من معرفة الاتجاهات الحالية والحديثة لمصممي الأزياء العالمية، مما يمكنني من تقديم نصائح فعالة وإلهامية للأشخاص الذين يرغبون في التميز في أسلوبهم الشخصي.
                    </p>

                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          مجالات الخبرة
                        </h5>
                      </div>
                      <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" ><i class="fas fa-pen"></i></button>
                      </div>
                    </div>
                    <p class="card-text text-secondary">
                      عالم الموضة
                    </p>
                    <h5 class="card-title fw-bold">
                      سنوات الخبرة
                    </h5>
                    <p class="card-text text-secondary">
                      ٤ سنوات
                    </p>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          القطاعات المهتم بها
                        </h5>
                      </div>
                      <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" ><i class="fas fa-pen"></i></button>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-start">
                      <p class="card-text text-secondary me-3">
                        التكنولوجيا
                      </p>
                      <p class="card-text text-secondary">
                        خدمات الأعمال
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          اللغات
                        </h5>
                      </div>
                      <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" ><i class="fas fa-pen"></i></button>
                      </div>
                    </div>
                    <p class="card-text text-secondary">
                      عربية
                    </p>
                  </div>
                </div>
                </div>
              </div>
            </div>


          </div>
        </section>
        <!--Section: Statistics with subtitles-->
      </div>
    </section>

  </main>
  <!--Main layout-->
<!-- MDB -->
</body>

<?php
include "./script-umd.php"; 
?>

</html>