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
          <h1 class="card-title mb-3 h1 fw-bold text-center" style="font-size: 40px;">عنا</h1>

          <!--Section: Content-->
          <section class="text-center">
            <div class="container-fluid text-start">
              <h3 class="mb-3 fw-bold"  style="font-size: 25px;">رؤيتنا وأهدافنا</h3>      
              <p class="card-text text-secondary" >
              نحن نؤمن بأن الأفكار الكبيرة تستحق فرصة للنمو والازدهار. رؤيتنا هي أن نكون الوجهة الأولى التي يلجأ إليها المستثمرون ورواد الأعمال لبدء رحلتهم نحو النجاح المشترك، وجعل الابتكار والتعاون أساسًا لنمو الأعمال والمشاريع.
              </p>
              <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      <strong>
                        من نحن؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body d-flex justify-content-between align-items-center">
                    <p>
                    Social Investment Hub هي منصة مبتكرة تهدف إلى بناء جسر يربط بين المستثمرين ورواد الأعمال، مما يوفر بيئة تعاونية حيث يمكن للأفكار الرائدة ورأس المال أن يجتمعا لتحقيق النجاح. سواء كنت مستثمرًا يبحث عن فرص استثمارية مثيرة أو رائد أعمال يتطلع إلى تمويل مشروعه الجديد، نحن هنا لنساعدك على تحقيق أهدافك.
                    </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwo">
                      <strong>
                      رؤيتنا
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                      <p>
                      نحن نؤمن بأن الأفكار الكبيرة تستحق فرصة للنمو والازدهار. رؤيتنا هي أن نكون الوجهة الأولى التي يلجأ إليها المستثمرون ورواد الأعمال لبدء رحلتهم نحو النجاح المشترك، وجعل الابتكار والتعاون أساسًا لنمو الأعمال والمشاريع.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseThree">
                      <strong>
                      قيمنا
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                      <ul>
                        <li>
                          <strong>
                            <span class="text-dark">
                            الابتكار:
                            </span>
                          </strong>
                          نسعى دائمًا لتقديم حلول جديدة ومبتكرة لتلبية احتياجات المستخدمين
                        </li>
                        <li>
                          <strong>
                            <span class="text-dark">
                            التعاون:
                            </span>
                          </strong>
                          نؤمن بأن التعاون هو المفتاح لتحقيق النجاح، ونعمل على تعزيز روح الشراكة بين جميع مستخدمينا.
                        </li>
                        <li>
                          <strong>
                            <span class="text-dark">
                            الشفافية:
                            </span>
                          </strong>
                          نحن نلتزم بتوفير معلومات دقيقة وواضحة لمستخدمينا، مما يساعدهم على اتخاذ قرارات مستنيرة.
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
                      مهمتنا
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                    <div class="accordion-body">
                      <ul>
                        <li>
                          <strong>
                            <span class="text-dark">
                            توفير منصة شاملة:
                            </span>
                          </strong>
                          نقدم بيئة شاملة تتيح للمستثمرين ورواد الأعمال التواصل بسهولة وتبادل الأفكار والمشاريع.
                        </li>
                        <li>
                          <strong>
                            <span class="text-dark">
                            دعم الابتكار: 
                            </span>
                          </strong>
                          نساعد في تحقيق الأفكار المبتكرة من خلال توفير الموارد والدعم اللازمين لتحويلها إلى مشاريع ناجحة.
                        </li>
                        <li>
                          <strong>
                            <span class="text-dark">
                            تعزيز التعاون:
                            </span>
                          </strong>
                          نؤمن بأهمية التعاون والشراكة في تحقيق النجاح، ونسعى لتسهيل التواصل وبناء العلاقات بين مستخدمينا.
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
                      خدماتنا
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                    <div class="accordion-body">
                    <ul>
                      <li>
                        <strong>
                          <span class="text-dark">
                            حسابات مخصصة:
                          </span>
                        </strong>
                        يمكن للمستثمرين ورواد الأعمال إنشاء حسابات مخصصة تحتوي على معلومات شخصية مثل الاسم الكامل، البريد الإلكتروني، والصورة الشخصية، بالإضافة إلى معلومات إضافية مثل الجنس، رقم الهاتف، الدولة، المدينة، روابط لينكد إن وفيسبوك، والمعلومات الأساسية.
                      </li>
                      <li>
                        <strong>
                          <span class="text-dark">
                            إدارة المشاريع:
                          </span>
                        </strong>
                        يمكن لرواد الأعمال إنشاء مشاريع جديدة على المنصة، تتبع تقدمها، والتفاعل مع المستثمرين المهتمين بها.
                      </li>
                      <li>
                        <strong>
                          <span class="text-dark">
                            المفضلة:
                          </span>
                        </strong>
                        يمكن للمستثمرين حفظ المشاريع التي يهتمون بها للوصول إليها بسهولة فيما بعد، مما يتيح لهم متابعة المشاريع التي تتوافق مع اهتماماتهم الاستثمارية.
                      </li>
                      <li>
                        <strong>
                          <span class="text-dark">
                            اهتماماتي:
                          </span>
                        </strong>
                        يمكن لرواد الأعمال إضافة المشاريع التي يهتمون بها إلى قائمة "اهتماماتي" للوصول إليها بسرعة فيما بعد والتفاعل معها بمرونة أكبر.
                      </li>
                      <li>
                        <strong>
                          <span class="text-dark">
                            المستثمرون ورواد الأعمال:
                          </span>
                        </strong>
                        يتضمن الموقع صفحتين مخصصتين لاستعراض حسابات المستثمرين ورواد الأعمال. يمكن للمستخدمين مشاهدة الحسابات الشخصية والتواصل مع الآخرين من خلال خيارين: عرض الحساب الشخصي ومراسلة المستخدم مباشرة.
                      </li>
                      <li>
                        <strong>
                          <span class="text-dark">
                            الدردشة والتواصل:
                          </span>
                        </strong>
                        نوفر وسائل اتصال مدمجة لتسهيل التواصل المباشر بين المستثمرين ورواد الأعمال، مما يساعد على تبادل الأفكار والمعلومات بسرعة وكفاءة.
                      </li>
                      <li>
                        <strong>
                          <span class="text-dark">
                            إعدادات الحساب:
                          </span>
                        </strong>
                        يمكن للمستخدمين إدارة حساباتهم بسهولة، بما في ذلك تحديث المعلومات الشخصية، وتعطيل أو حذف الحساب.
                      </li>
                    </ul>

                    </div>
                  </div>
                </div>
              </div>
              <h3 class="mb-3 fw-bold"  style="font-size: 25px;">انضم إلينا</h3>      

              <p class="card-text text-secondary" >
              نحن في مركز الاستثمار الاجتماعي نتطلع إلى مساعدتك في رحلتك نحو النجاح والابتكار. انضم إلينا اليوم واكتشف كيف يمكننا معًا تحقيق أهدافك وطموحاتك.
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