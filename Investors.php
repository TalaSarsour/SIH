<!DOCTYPE html>
<?php
//session_start();
$title = "المستثمرين";

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
    <section class="container pt-4 ps-4">
      
      <div class="row justify-content-between">
        <div class="col-md-3">
          <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
              <input id="search-focus" type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">
                <span class="input-group-text border-0 pb-3 text-secondary"> <i class="fas fa-search me-2" id="mdb-5-search-icon" > بحث </i></span>
              </label>
              <!--
              <label class="form-label" for="form1">Search</label>
              <span class="input-group-text border-0"><i class="fas fa-search" id="mdb-5-search-icon"></i></span>-->

            </div>
            <!--
            <button type="button" class="btn btn-primary" data-mdb-ripple-init>
              <i class="fas fa-search"></i>
            </button>
            -->

          </div>
        </div>
        <div class="col-md-2">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-outline-link text-secondary" data-mdb-ripple-color="#000000"><i class="fa-light fa-filter"></i> تنقية</button>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid pt-4 ps-4" style="padding-left: 130px;">
      <!--Section:  cards-->
      <section>
        <h4 class="text-dark fw-bold">جميع المستثمرين</h4>

        <div class="row mt-4">
          <div class="col-lg-4 col-md-12">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="./assets/img/card-image-1.png" class="img-fluid" />
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-3 col-sm-3 text-center text-light">
                      <p class="card-text " style="background-color: rgba(0, 0, 0, 0.5)">
                        فاشن
                      </p>
                    </div>
                
                    <div class="col-md-3 text-end text-light">
                      <i class="far fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                    </div>
                  </div>

                </div>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">لوكس لوك</h5>
                <p class="card-text text-secondary">
                  هل سبق لك أن أردت الاستثمار في الملابس؟
                  الآن انت تستطيع!
                  العلامة التجارية لوكس لوك  هي ملابس عصرية فاخرة تحتوي على الحب والقلب والإمكانات للجيل الجديد من الرفاهية.
                  دعنا نخبرك بطريقتنا المحدودة في الفكرة.
                </p>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <p>الهدف 4,000,000$</p>
                  </div>
              
                  <div class="col-md-6">
                    <p>الحد الأدنى 450.000$</p>
                  </div>
                </div>
            
                <button type="button" class="btn btn-primary">اكتشف المزيد</button>
              </div>
            </div>
          </div>
      
          <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="./assets/img/card-image-2.png" class="img-fluid" />
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-4 col-sm-3 text-center text-light">
                      <p class="card-text " style="background-color: rgba(0, 0, 0, 0.5)">
                        تكنولوجي
                      </p>
                    </div>
                
                    <div class="col-md-3 text-end text-light">
                      <i class="far fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                    </div>
                  </div>

                </div>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">تيك ويف</h5>
                <p class="card-text text-secondary">
                  Instagram متخصص في ميزة الصورة فقط وأصبح ناجحًا على الرغم من أن FB كان لديه بالفعل ميزة الصورة هذه.
                  تخصصت TikTok في ميزة الفيديو فقط وحققت نجاحًا على الرغم من أن Instagram كان لديه بالفعل ميزة الفيديو.
                </p>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <p>الهدف 4,000,000$</p>
                  </div>
              
                  <div class="col-md-6">
                    <p>الحد الأدنى 450.000$</p>
                  </div>
                </div>
            
                <button type="button" class="btn btn-primary">اكتشف المزيد</button>
              </div>
            </div>
          </div>
      
          <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="./assets/img/card-image-3.png" class="img-fluid" />
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-3 col-sm-3 text-center text-light">
                      <p class="card-text " style="background-color: rgba(0, 0, 0, 0.5)">
                        طعام
                      </p>
                    </div>
                
                    <div class="col-md-3 text-end text-light">
                      <i class="far fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                    </div>
                  </div>

                </div>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">فود فيفور</h5>
                <p class="card-text text-secondary">
                  تتمثل رؤيتنا في تحديد نوع جديد من مطاحن القهوة الرقمية بالكامل والمتوافقة مع الذكاء الاصطناعي.
                  نجح الفريق في تصميم ونموذج أولي لمطحنة قهوة هي الأولى من نوعها، رقمية بالكامل، أحادية الجرعة، منخفضة الاحتفاظ، وجاهزة للذكاء الاصطناعي.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <p>الهدف 4,000,000$</p>
                  </div>
              
                  <div class="col-md-6">
                    <p>الحد الأدنى 450.000$</p>
                  </div>
                </div>
            
                <button type="button" class="btn btn-primary">اكتشف المزيد</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-4">
          
          <div class="col-lg-4 col-md-12">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="./assets/img/card-image-1.png" class="img-fluid" />
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-3 col-sm-3 text-center text-light">
                      <p class="card-text " style="background-color: rgba(0, 0, 0, 0.5)">
                        فاشن
                      </p>
                    </div>
                
                    <div class="col-md-3 text-end text-light">
                      <i class="far fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                    </div>
                  </div>

                </div>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">لوكس لوك</h5>
                <p class="card-text text-secondary">
                  هل سبق لك أن أردت الاستثمار في الملابس؟
                  الآن انت تستطيع!
                  العلامة التجارية لوكس لوك  هي ملابس عصرية فاخرة تحتوي على الحب والقلب والإمكانات للجيل الجديد من الرفاهية.
                  دعنا نخبرك بطريقتنا المحدودة في الفكرة.
                </p>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <p>الهدف 4,000,000$</p>
                  </div>
              
                  <div class="col-md-6">
                    <p>الحد الأدنى 450.000$</p>
                  </div>
                </div>
            
                <button type="button" class="btn btn-primary">اكتشف المزيد</button>
              </div>
            </div>
          </div>
      
          <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="./assets/img/card-image-2.png" class="img-fluid" />
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-4 col-sm-3 text-center text-light">
                      <p class="card-text" style="background-color: rgba(0, 0, 0, 0.5)">
                        تكنولوجي
                      </p>
                    </div>
                
                    <div class="col-md-3 text-end text-light">
                      <i class="far fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                    </div>
                  </div>

                </div>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">تيك ويف</h5>
                <p class="card-text text-secondary">
                  Instagram متخصص في ميزة الصورة فقط وأصبح ناجحًا على الرغم من أن FB كان لديه بالفعل ميزة الصورة هذه.
                  تخصصت TikTok في ميزة الفيديو فقط وحققت نجاحًا على الرغم من أن Instagram كان لديه بالفعل ميزة الفيديو.
                </p>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <p>الهدف 4,000,000$</p>
                  </div>
              
                  <div class="col-md-6">
                    <p>الحد الأدنى 450.000$</p>
                  </div>
                </div>
            
                <button type="button" class="btn btn-primary">اكتشف المزيد</button>
              </div>
            </div>
          </div>
      
          <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="./assets/img/card-image-3.png" class="img-fluid" />
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-3 col-sm-3 text-center text-light">
                      <p class="card-text " style="background-color: rgba(0, 0, 0, 0.5)">
                        طعام
                      </p>
                    </div>
                
                    <div class="col-md-3 text-end text-light">
                      <i class="far fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                    </div>
                  </div>

                </div>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">فود فيفور</h5>
                <p class="card-text text-secondary">
                  تتمثل رؤيتنا في تحديد نوع جديد من مطاحن القهوة الرقمية بالكامل والمتوافقة مع الذكاء الاصطناعي.
                  نجح الفريق في تصميم ونموذج أولي لمطحنة قهوة هي الأولى من نوعها، رقمية بالكامل، أحادية الجرعة، منخفضة الاحتفاظ، وجاهزة للذكاء الاصطناعي.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <p>الهدف 4,000,000$</p>
                  </div>
              
                  <div class="col-md-6">
                    <p>الحد الأدنى 450.000$</p>
                  </div>
                </div>
            
                <button type="button" class="btn btn-primary">اكتشف المزيد</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Statistics with subtitles-->
    </div>
    <div class="container d-flex justify-content-center pt-4">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item" aria-current="page">
            <a class="page-link" href="#1">
              1
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link disabled" href="#">2</a></li>
          <li class="page-item"><a class="page-link disabled" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&ctdot;</span>
            </a>
          </li>    
          <li class="page-item"><a class="page-link disabled" href="#">99</a></li>
      
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

  </main>
  <!--Main layout-->
<!-- MDB -->
</body>

<?php
include "./script-umd.php"; 
?>

</html>