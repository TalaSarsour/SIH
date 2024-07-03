<!DOCTYPE html>

<?php
$title = "Social Investment Hub (SIH) - About-US";
include "./session.php";
include "./head.php";
//echo '<script alert( "'.$_SESSION['user_type'].'");"</script>';
/*
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'user1') {
  header("Location: ./Dashboard/home.php");
}
else{
  if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'user2') {
    header("Location: ./Dashboard/projects.php");
  }
}*/
?>
<!--
  <script>

    alert(" user type : <?php echo $_SESSION['user_type']; ?>"); // Inject PHP variable into JS

  </script>-->
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

<?php
  include "./header.php";
?>

</header>
<!--Main Navigation-->

<!--Main layout-->

<main class="my-5">
  <div class="container-fluid">
    <!--Section: Content-->
    <section class="text-start mb-8 mt-10">

      <div class="row d-flex justify-content-between align-items-center" style="padding-left: 105px; padding-right: 120px;">
        <div class="card  ">
          <div class="card-body">
            <h1 class="card-title mb-3 h1 fw-bold text-center" style="font-size: 40px;">شركاؤنا</h1>

            <!--Section: Content-->
            <section class="text-center">
              <div class="container-fluid text-start">
                <h3 class="mb-3 fw-bold"  style="font-size: 25px;">شركاؤنا: معًا نحو النجاح</h3>      
                <p class="card-text" >
                  <strong class="text-dark">
                  نؤمن في مركز الاستثمار الاجتماعي بأهمية العمل الجماعي لتحقيق النجاح
                  </strong>
                  لذلك، نفخر بشركائنا الذين ساهموا في نموّنا وتطورنا وازدهار قطاع الاستثمار الجريء وريادة الأعمال في منطقة الشرق الأوسط.
                </p>
                <h3 class="mb-3 fw-bold"  style="font-size: 20px;">شركاؤنا الاستراتيجيون:</h3>      
                <section class="pb-4">
                  <div class="border rounded-5">
                  
                  <section class="p-4 d-flex justify-content-center w-100">

                    <div class="multi-carousel carousel-dark" data-mdb-multi-carousel-init data-mdb-interval="2000" data-mdb-items="3">
                      <div class="multi-carousel-inner text-center">
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/AAUP.png" alt="AAUP" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/An-Najah.png" alt="An-Najah University" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/ArabBank-2.png" alt="Arab Bank" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Asal.png" alt="Asal" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Bank-of-Palestine.png" alt="Bank of Palestine" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Bozoor.png" alt="Bozoor" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Cystack.png" alt="Cystack" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Exalt.png" alt="Exalt" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Innopark-Najah.png" alt="Innopark-Najah" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Paltel.png" alt="Paltel" class="w-50">
                        </div>
                        <div class="multi-carousel-item" style="width: 33.3333%;">
                          <img src="./assets/img/Logos/Pmof.png" alt="Pmof" class="w-50">
                        </div>
                      </div>
                      <button
                        class="carousel-control-prev"
                        type="button"
                        tabindex="0"
                        data-mdb-slide="prev"
                      >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      </button>
                      <button
                        class="carousel-control-next"
                        type="button"
                        tabindex="0"
                        data-mdb-slide="next"
                      >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </button>
                    </div>
                  </section>
                <!-- Carousel wrapper -->
                </section>
                <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <strong>
                        المؤسسات المالية
                        </strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                      <div class="accordion-body d-flex justify-content-between align-items-center">
                        <ul>
                          <li>
                            بنوك وشركات تمويل توفر حلولاً مالية مخصصة.
                          </li>
                          <li>
                            مستثمرون مؤسسون وصناديق استثمارية تدعم المشاريع الواعدة.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        <strong>
                        الشركات التكنولوجية
                        </strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                      <div class="accordion-body">
                        <ul>
                          <li>
                          مزودو حلول تقنية مبتكرة تدعم العمليات الريادية.
                          </li>
                          <li>
                          منصات رقمية تسهل إدارة المشاريع والتواصل.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        <strong>
                        الجامعات والمراكز البحثية
                        </strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                      <div class="accordion-body">
                        <ul>
                          <li>
                          تعاون مع مؤسسات أكاديمية لتوفير أبحاث ودراسات متقدمة.
                          </li>
                          <li>
                          برامج تدريب وتطوير مهني بالتعاون مع مراكز تعليمية مرموقة.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        <strong>
                        المؤسسات الحكومية والمنظمات غير الربحية
                        </strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                      <div class="accordion-body">
                        <ul>
                          <li>
                          دعم من جهات حكومية لتسهيل الإجراءات وتقديم التسهيلات.
                          </li>
                          <li>
                          شراكة مع منظمات غير ربحية تهدف إلى دعم المجتمع الريادي.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        <strong>
                        الشركات الاستشارية
                        </strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                      <div class="accordion-body">
                        <ul>
                          <li>
                            شركات استشارية تقدم خدمات استشارية في مجالات متعددة مثل الإدارة، التسويق، وتطوير الأعمال.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="card-text" >
                نتطلع دائماً لتعزيز شراكاتنا وتوسيع شبكة علاقاتنا لنضمن تقديم أفضل دعم وخدمات لمستخدمينا. شركاؤنا هم جزء أساسي من رحلتنا نحو الابتكار والتميز.
              </p>
              <p class="card-text" >
              معًا، نستطيع بناء مستقبل أفضل للاستثمار وريادة الأعمال في منطقتنا!
              </p>
            </section>
            <!--Section: Content-->
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<!--Main layout-->

<?php 
include "./footer.php"; 
?>

<!-- MDB -->
</body>

<?php
include "./script-umd.php"; 
?>

</html>