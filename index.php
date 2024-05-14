<!DOCTYPE html>

<?php
$title = "Social Investment Hub (SIH)";

include "./head.php";
?>

<body>
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

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="padding-left: 120px; padding-right: 115px;">
    <div class="container-fluid">
      <!-- Navbar brand -->

      <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0">
          <a class="navbar-brand me-5" target="_blank" href="./home.php">
            <img src="./assets/img/logo-v2-1.svg" height="50" width="155.68" alt="" loading="lazy"
                 style="margin-top: -3px;"/>
          </a>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 70px;">
          <li class="nav-item active">
            <a class="nav-link text-primary" aria-current="page" href="#intro">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us" rel="nofollow"
               target="_blank">عنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" rel="nofollow"
               target="_blank">خدماتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#partners" rel="nofollow"
               target="_blank">شركاؤنا</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row ">
 
          <button data-mdb-ripple-init type="button" class="btn btn-primary" onclick="location.href='./login.php'">
            تسجيل الدخول
          </button>
          <!--
            for add under line to text add this class
            text-decoration-underline
          -->
          <button data-mdb-ripple-init type="button" text class="btn btn-link px-3 me-5" onclick="location.href='./user-type.php'">
            تسجيل
          </button>

        </ul>
      </div>

    </div>
  </nav>
  <!-- Navbar -->

</header>
<!--Main Navigation-->

<!--Main layout-->

<main class="my-5">
  <div class="container-fluid">
    <!--Section: Content-->
    <section class="text-center mb-8 mt-10">

      <div class="row d-flex justify-content-between align-items-center" style="padding-left: 105px; padding-right: 120px;">


        <div class="col-lg-5 col-md-6 mb-4 mx-auto text-start">
          <h1 h1 fw-bold class="card-title mb-3 h1 fw-bold">ربط رواد الأعمال حول
            <br>
            العالم
            <span class="gradient-custom">بالمستثمرين</span>
          </h1>
          <p class="card-text text-secondary">
            حيث تلتقي الشركات العظيمة والأشخاص العظماء. نحن نجمع بين الشركات التي تبحث عن الاستثمار والمستثمرين الذين
            لديهم رأس المال والاتصالات والمعرفة لمساعدتهم على النجاح.
          </p>
          <button data-mdb-ripple-init type="button" class="btn btn-primary" style="float: right;">
            قراءة المزيد
          </button>
        </div>
        
        <div class="col-lg-5 col-md-12 mb-4 mx-auto" style="width: 532px; height: 699;">
          <!-- <div class="col-md-6" style="width: 532px; height: 699;">-->

         <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
           <img src="./assets/img/banner_img_1.png" class="img-fluid"/>
           <a href="#!">
             <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
           </a>
         </div>

       </div>
      </div>
    </section>
  </div>
  <div class="mb-5">
    <img src="./assets/img/Logos.png" class="img-fluid" style="width: 100%; height: auto; "/>
  </div>

  <div class="container-fluid mb-5 me-12">
    <!--Section: Content-->
    <section class="text-center">

      <div class="row d-flex justify-content-between align-items-center" id="about-us" style="padding-left: 80px; padding-right: 120px;">

        <div class="col-lg-5 col-md-6 mb-4 mx-auto text-start">
          <h1 class="card-title mb-3 h1 fw-bold"  style="font-size: 60px;">عنا
          </h1>
          <p class="card-text text-secondary" >
            مركز استثمار الأعمال ، بوابتك إلى عالم من فرص الاستثمار. تم تصميم منصتنا لخطوات الاستثمار البسيطة، وربط رواد
            الأعمال الطموحين بالمستثمرين الأذكياء. سواء كنت تبحث عن تمويل لمشروعك التالي أو تتطلع إلى تنويع محفظتك،
            "يوفر مركز استثمار الموارد المؤسسية التي تحتاجها لتزدهر في التنافس التنافسي اليوم. نحن نستعد لتعريف طريقة
            القيام بالاستثمارات وإقامة الشراكات. مرحبًا بكم في عصر جديد من النمو المشترك.
          </p>
        </div>
        <div class="col-lg-5 col-md-12 mb-4 mx-auto">
          <img src="./assets/img/banner_img_2.png" class="img-fluid"/>
        </div>
      </div>
    </section>


  </div>

  <div class="container-fluid mb-5">

  <!--Section: Content-->
  <section class="text-center">
    <div class="container-fluid">
      <h1 class="mb-5"><strong>مميزاتنا</strong></h1>
      <div class="row gx-3" style="padding-left:168px; padding-right: 152px;">

        <div class="col-lg-4 col-md-6">
          <div class="card text-start border border-secondary shadow-0 " style="height: 19rem;">
            <div class="card-body">
              <h5 class="card-title" style="display: inline-block;">  
                <img src="./assets/img/icon-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                لوحة معلومات الاستثمار الشاملة
              </h5>
              <p class="card-text text-secondary">
                تزويد المستثمرين بلوحة تحكم مركزية توفر نظرة شاملة لمحفظتهم الاستثمارية. يجب أن تتضمن لوحة المعلومات هذه تحديثات في الوقت الفعلي حول أداء الأصول، ومقاييس تنويع المحفظة، وتحليل البيانات التاريخية، وخيارات إعداد التقارير القابلة للتخصيص. إن وجود جميع المعلومات ذات الصلة في مكان واحد يساعد المستثمرين على اتخاذ قرارات مستنيرة وإدارة استثماراتهم بفعالية.            
              </p>
            </div>
          </div>
        </div>
    
        <div class="col-lg-4 col-md-6">
          <div class="card text-start border border-secondary shadow-0 " style="height: 19rem;">
            <div class="card-body">
              <h5 class="card-title" style="display: inline-block;">  
                <img src="./assets/img/icon-2.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                تحليلات بيانات الدراسة المتقدمة
              </h5>
              <p class="card-text text-secondary">
                تقديم تحليلات بيانات أدوات بحث متطورة لمساعدة المستثمرين على تحديد فرص الاستثمار المحتملة واتجاهات السوق. ويمكن أن يشمل ذلك الوصول إلى التقارير المالية، وتحليل الصناعة، والتعرف على الشركة، وتوقعات السوق، وتقييمات العديد من الأجهزة. إن تزويد المستثمرين بقدرات تحليلية قوية يمكّنهم من القيام بالحماية الشاملة باعتبارها استثمارًا استراتيجيًا.            
              </p>
            </div>
          </div>
        </div>
    
        <div class="col-lg-4 col-md-12">
          <div class="card text-start border border-secondary shadow-0 " style="height: 19rem;">
            <div class="card-body">
              <h5 class="card-title" style="display: inline-block;">  
                <img src="./assets/img/icon-3.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                  الشفافية والتوازن الاقتصادي 
              </h5>
              <p class="card-text text-secondary">
                يوفر الموقع معلومات كافية وشفافة عن الفرص الاستثمارية المتاحة  بما في ذلك التوقعات المالية والمخاطر المحتملة. قم بكتابة ما يكفي لجذب اهتمام المستثمرين في مشروعك دون الكشف عن أي معلومات مهمة.
              </p>
              <br>
              
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--Section: Content-->
  </div>
  <div class="container-fluid mb-5">

    <!--Section: Content-->
    <section class="text-center">
      <div class="container-fluid" style="padding-left: 180px; padding-right: 170px;">
        <h1><strong>الأسئلة والأجوبة المتداولة</strong></h1>
        <p class="text-secondary">نحن هنا للمساعدة في جميع الأسئلة والإجابة عليها في مكان واحد.</p>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                هل مشروعي مناسب؟
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
              <div class="accordion-body d-flex justify-content-between align-items-center">
              <p>
                إذا كنت تبحث عن تمويل وتهدف إلى تحقيق عائد على الاستثمار فأنت ملائم. ينظر مستثمرونا إلى جميع مراحل الأعمال وعبر جميع القطاعات من الشركات الناشئة الحقيقية إلى الشركات المعمرة. ننظر إلى جميع أنواع المشاريع المختلفة بما في ذلك صفقات الدين، الامتيازات، العقارات، الأسهم، إلخ. لدينا حالياً 339,943 مستثمر خاص، وصناديق عائلية، وصناديق رأس المال الاستثماري حول العالم يبحثون عن الاستثمار، وهذا العدد ينمو بسرعة.
              </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                هل يمكنني استخدام هذا الشبكة إذا لم أكن مقيمًا في فلسطين؟
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
              <div class="accordion-body">
                <p>

                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree">
                كيف يمكنني تقديم مشروعي للاستثمار ؟
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
              <div class="accordion-body">
                <p>

                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFour">
                ما المعلومات التي يجب أن أضعها في مشروعي ؟
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
              <div class="accordion-body">
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFive">
                هل يمكنني تحميل خطة العمل الخاصه بي؟
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
              <div class="accordion-body">
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSix">
                كيف يمكنني حماية سرية فكرتي؟
              </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
              <div class="accordion-body">
                <p>
                  
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--Section: Content-->
    </div>
    <div class="container-fluid mb-5">

      <!--Section: Content-->
      <section class="text-center">
        <div class="container-fluid">
          <h1 class="mb-5"><strong>ماذا يقول عملاؤنا</strong></h1>
          <div class="row" style="padding-left:169px; padding-right: 157px;">
    
            <div class="col-lg-4 col-md-6">
              <div class="card text-start">
                <div class="card-body">
                  <p class="card-text text-secondary">
                    لقد مر شهر واحد فقط منذ أن استخدمت Social Investment Hub لإدارة نفقات أعمالي، ولكن النتيجة مرضية للغاية! أصبح تمويل أعمالي الآن أكثر تنظيماً من ذي قبل، وذلك Social Investment Hub                  </p>
                </div>
                <div class="card-footer" style="display: inline-block;">
                  <img src="./assets/img/avatar-male-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                  علي احمد
                </div>
              </div>
            </div>
        
            <div class="col-lg-4 col-md-6">
              <div class="card text-start">
                <div class="card-body">
                  <p class="card-text text-secondary">
                    لقد مر شهر واحد فقط منذ أن استخدمت Social Investment Hub لإدارة نفقات أعمالي، ولكن النتيجة مرضية للغاية! أصبح تمويل أعمالي الآن أكثر تنظيماً من ذي قبل، وذلك Social Investment Hub                  </p>
                </div>
                <div class="card-footer" style="display: inline-block;">
                  <img src="./assets/img/avatar-female-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                  حلا صلاح
                </div>
              </div>
            </div>
        
            <div class="col-lg-4 col-md-12">
              <div class="card text-start">
                <div class="card-body">
                  <p class="card-text text-secondary">
                    لقد مر شهر واحد فقط منذ أن استخدمت Social Investment Hub لإدارة نفقات أعمالي، ولكن النتيجة مرضية للغاية! أصبح تمويل أعمالي الآن أكثر تنظيماً من ذي قبل، وذلك Social Investment Hub                  </p>
                </div>
                <div class="card-footer" style="display: inline-block;">
                  <img src="./assets/img/avatar-male-2.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                  علي احمد
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

<!--Footer-->
<footer class="justify-content-center text-center text-lg-start" style="background-color: #162E3A;">
    <!-- Section: Copyright -->
    <section class="ms-5" style="padding-left:190px; padding-right: 135px;">
      <div class="row d-flex align-items-between">
        <!-- Grid column -->
        <div class="col-md-8">
          <div class="mt-5 text-start">
            <!-- footer text -->
            <img src="./assets/img/footer-logo-v2-1.svg"  alt="" loading="lazy" class="mb-3"/>
            <!-- footer text -->
          </div>
        </div>
        <!-- Grid column -->
      </div>

      <div class="row d-flex align-items-beteen">
        <!-- Grid column -->
        <div class="col-md-8 text-start">
          <p class="text-secondary">
            مركز استثمار الأعمال ، بوابتك إلى عالم من فرص الاستثمار. تم تصميم منصتنا لخطوات الاستثمار الصغيرة، وربط رواد الأعمال الطموحين بالمستثمرين الأذكياء.
          </p>
        </div>
        <div class="col-md-4 text-end">
          <!-- Google -->
          <a
              class="text-white m-2"
              role="button"
              ><i class="fab fa-google"></i
          ></a>
          <!-- LinkedIn -->
          <a
            class="text-white m-2"
            role="button"
            ><i class="fab fa-linkedin"></i
          ></a>          
          <!-- Twitter -->
          <a
            class="text-white m-2"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>
          <!-- Facebook -->
          <a
            class="text-white"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
        </div>
        <!-- Grid column -->
      </div>
      <hr class="border-3 text-secondary mt-0">

      <div class="row d-flex align-items-beteen">
        <!-- Grid column -->
        <div class="col-md-8 text-start">
          <a class="text-white" aria-current="page" href="#intro">الرئيسية</a>
          <a class="text-secondary m-4" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
          target="_blank">عنا</a>
          <a class="text-secondary m-4" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
          target="_blank">شركاؤنا</a>
          <a class="text-secondary m-4" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
          target="_blank">خدماتنا</a>
        </div>
        <div class="col-md-4 text-end mb-5">
          <!-- Copyright -->
          <div class="text-secondary">
            Copy Right Adel 2024 © 
          </div>
          <!-- Copyright -->
        </div>
        <!-- Grid column -->
      </div>

    </section>
    
</footer>
<!--Footer-->
<!-- MDB -->
</body>

<?php
include "./script-umd.php"; 
?>

</html>