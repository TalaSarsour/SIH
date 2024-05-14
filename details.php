<!DOCTYPE html>
<?php
session_start();
$title = "الرئيسية";

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
        <section class="pb-4">
          <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <!--
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>-->
                <li class="breadcrumb-item">الرئيسية</li>

                <li class="breadcrumb-item active" aria-current="page"><a href="#">لوكس لوك</a></li>
              </ol>
            </nav>
          </div>
        </section>
        <section class="pb-4">
          <div class="container">
            <div class="card px-3">
              <div class="d-flex align-items-center">

                <div class="image">
                  <img src="./assets/img/logo-details.png" class="rounded" width="120" >
                </div>

                <div class="ml-3 w-100">
                    
                  <div class="card-body justify-content-start">
                    <h4 class="card-title">لوكس لوك </h4>
                    <div class="d-flex flex-row justify-content-between">
                      <p class="card-text text-secondary">
                        <i class="fa-regular fa-location-dot fa-fw me-1"></i> 24 شارع صالح المحمود ,أمام عيادة بوابة الرافدين,ظهرة البديعة ,ينبع
                      </p>
                      <div>
                        <button type="button" class="btn btn-primary"> انا مهتم </button>
                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="#000000">اضافة الى المفضلة</button>

                      </div>


                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-start">
                      <p class="card-text text-secondary me-5">
                        <i class="fa-regular fa-circle-dollar fa-fw me-1"></i> الهدف 4,000,000 دولار
                      </p>
                      <p class="card-text text-secondary">
                        الحد الأدنى 450.000 دولار
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section:  cards-->
        <section>
          <div class="container">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title fw-bold">التفاصيل</h5>
                <p class="card-text text-secondary">
                تأسست بواسطة رئيستي تحرير سابقتين في مجلة فوغ، تقدم "كولاجري" أكثر المنتجات المرغوبة في مجال الأزياء وأسلوب الحياة والجمال من العلامات التجارية المعروفة من الشوارع الرئيسية إلى الفاخرة. تقوم الشركة بتحطيم المشهد الأزيائي المتشعب للمستهلكين والعلامات التجارية من خلال تقديم خدمة تعتمد نموذجًا جديدًا للإيرادات يربط بين الإعلام والتجارة.
تستفيد المؤسسات من سنوات خبرة كبار في عالم الأزياء لتقديم منصة تسوق عبر الإنترنت تلهم المستهلكين وتمكّنهم من الاكتشاف عبر جميع الفئات السعرية والجغرافيات، بينما تمنح العلامات التجارية إمكانية الوصول إلى سياقات تسويقية جديدة وعملاء جدد. بالنسبة للمستهلك، تمثل "كولاجري" منزلًا للأزياء والجمال مع مجموعة منتقاة وموثوقة ومريحة من المنتجات للتسوق منها. في هذه الأثناء، يمكن للعلامات التجارية التعاون مع "كولاجري" لتقديم قنوات تسويقية قابلة للتوسيع تستهدف مجموعات مستهدفة ذات صلة.
                </p>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content for expand ariea set aria-expanded="true" 
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
-->
        <section class="pt-4 pb-4">
          <div class="container-fluid">
            <h5 class="fw-bold">الأسئلة والأجوبة المتداولة</h5>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    هل يمكنني استخدام هذا الشبكة إذا لم أكن مقيمًا في فلسطين؟
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
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
                    كيف يمكنني تقديم مشروعي للاستثمار ؟
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
                    ما المعلومات التي يجب أن أضعها في مشروعي ؟
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
                    هل يمكنني تحميل خطة العمل الخاصه بي؟
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                  <div class="accordion-body">
                    <p>
                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!--Section: Content-->    
        <section class="pb-4">
          <div class="container-fluid">
            <h5 class="fw-bold">الفريق</h5>
            <div class="row row-cols-3 g-3">
              <div class="col">
                <div class="card px-3">
                  <div class="d-flex align-items-center">

                    <div class="image">
                      <img src="./assets/img/avatar-female-details-1.png" class="rounded" width="100" >
                    </div>

                    <div class="ml-3 w-100">
                        
                      <div class="card-body justify-content-start">
                        <h6 class="card-title">إكرام أسعد أبو ضهير</h6>

                        <p class="card-text text-secondary">
                          <small>
                            شريك مؤسس ورئيسة المبيعات والتسويق
                            <br>
                            25 عامًا كمديرة أزياء في فوغ البريطانية مستشارة إبداعية لعلامات عالمية معروفة من برادا إلى H&M.
                          </small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card px-3">
                  <div class="d-flex align-items-center">

                    <div class="image">
                      <img src="./assets/img/avatar-female-details-2.png" class="rounded" width="100" >
                    </div>

                    <div class="ml-3 w-100">
                        
                      <div class="card-body justify-content-start">
                        <h6 class="card-title">نهال زكريا الأفندي</h6>

                        <p class="card-text text-secondary">
                          <small>
                            شريك مؤسس ورئيسة المبيعات والتسويق
                            <br>
                            25 عامًا كمديرة أزياء في فوغ البريطانية مستشارة إبداعية لعلامات عالمية معروفة من برادا إلى H&M.
                          </small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card px-3">
                  <div class="d-flex align-items-center">

                    <div class="image">
                      <img src="./assets/img/avatar-male-details-1.png" class="rounded" width="100" >
                    </div>

                    <div class="ml-3 w-100">
                        
                      <div class="card-body justify-content-start">
                        <h6 class="card-title">عبدالكريم بن سليمان العليان</h6>

                        <p class="card-text text-secondary">
                          <small>
                            شريك مؤسس ورئيسة المبيعات والتسويق
                            <br>
                            25 عامًا كمديرة أزياء في فوغ البريطانية مستشارة إبداعية لعلامات عالمية معروفة من برادا إلى H&M.
                          </small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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