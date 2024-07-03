<!DOCTYPE html>

<?php
$title = "Social Investment Hub (SIH) - الاسئلة الشائعة";
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
          <h1 class="card-title mb-3 h1 fw-bold text-center" style="font-size: 40px;">الاسئلة الشائعة</h1>

          <!--Section: Content-->
          <section class="text-center">
            <div class="container-fluid text-start">
              <h3 class="mb-3 fw-bold"  style="font-size: 25px;">المستثمرين</h3>      
              <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      <strong>
                      كيف يمكنني إنشاء حساب كمستثمر؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body d-flex justify-content-between align-items-center">
                    <p>
                     لإنشاء حساب كمستثمر، انتقل إلى صفحة التسجيل، وحدد "مستثمر" كنوع المستخدم. ثم أدخل معلوماتك الأساسية مثل الاسم الكامل، البريد الإلكتروني، وكلمة المرور. بعد الموافقة على سياسة الخصوصية والأحكام، اضغط على "إنشاء الحساب".
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
                      ما هي المعلومات التي أحتاج لإدخالها في ملفي الشخصي؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                      <p>
                      في ملفك الشخصي، ستحتاج إلى إدخال المعلومات التالية: اسمك الكامل، البريد الإلكتروني، صورة شخصية، الجنس، رقم الهاتف، الدولة، المدينة، روابط حساباتك على لينكد إن وفيسبوك، نبذة عنك، مجالات خبرتك، سنوات الخبرة، القطاعات التي تهتم بها، المواقع التي تهتم بها، واللغات التي تتحدثها.
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
                      كيف يمكنني البحث عن مشاريع للاستثمار فيها؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                      <p>بعد تسجيل الدخول، انتقل إلى الصفحة الرئيسية حيث ستجد قائمة بالمشاريع الريادية. يمكنك استخدام خيارات الفلترة والبحث للعثور على المشاريع التي تتناسب مع اهتماماتك ومعاييرك الاستثمارية.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseFour">
                      <strong>
                      كيف يمكنني التواصل مع رواد الأعمال؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                    <div class="accordion-body">
                      <p>
                      يمكنك التواصل مع رواد الأعمال من خلال الدردشة المدمجة في الموقع. ببساطة انتقل إلى صفحة المشروع الذي تهتم به واضغط على زر "تواصل مع رائد الأعمال" لبدء محادثة.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseFive">
                      <strong>
                      هل يمكنني تعطيل حسابي مؤقتاً؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                    <div class="accordion-body">
                      <p>
                      نعم، يمكنك تعطيل حسابك مؤقتاً من خلال إعدادات الحساب. اختر "تعطيل الحساب" من القائمة المنسدلة وسيتم تعطيل حسابك حتى تقرر إعادة تفعيله.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseSix">
                      <strong>
                      كيف يمكنني حذف حسابي بشكل دائم؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                    <div class="accordion-body">
                      <p>
                      لحذف حسابك بشكل دائم، انتقل إلى إعدادات الحساب واختر "حذف الحساب" من القائمة المنسدلة. يرجى ملاحظة أن هذه العملية لا يمكن التراجع عنها وستفقد جميع بياناتك.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseSeven">
                      <strong>
                      كيف يمكنني إضافة المشاريع إلى قائمة المفضلة؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
                    <div class="accordion-body">
                      <p>
                      لإضافة مشروع إلى قائمة المفضلة، ببساطة انتقل إلى صفحة المشروع واضغط على زر "إضافة إلى المفضلة". يمكنك الوصول إلى قائمة المفضلة من خلال صفحتك الشخصية.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseEight">
                      <strong>
                      ما هي المعايير التي يجب أن أبحث عنها عند تقييم مشروع للاستثمار؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
                    <div class="accordion-body">
                      <p>
                      عند تقييم مشروع للاستثمار، يجب النظر إلى عدة معايير مثل جدوى الفكرة، خبرة الفريق المؤسس، السوق المستهدف، الاستراتيجية المالية، خطة العمل، والنمو المتوقع. قد تكون هناك عوامل إضافية تعتمد على نوع المشروع والقطاع الذي ينتمي إليه.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <h3 class="mb-3 fw-bold"  style="font-size: 25px;">رواد الأعمال</h3>      

              <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button data-mdb-collapse-init class="accordion-button" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      <strong>
                      كيف يمكنني إنشاء حساب كرائد أعمال؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body d-flex justify-content-between align-items-center">
                    <p>
                    لإنشاء حساب كرائد أعمال، انتقل إلى صفحة التسجيل، وحدد "ريادي" كنوع المستخدم. ثم أدخل معلوماتك الأساسية مثل الاسم الكامل، البريد الإلكتروني، وكلمة المرور. بعد الموافقة على سياسة الخصوصية والأحكام، اضغط على "إنشاء الحساب".
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
                      ما هي المعلومات التي أحتاج لإدخالها في ملفي الشخصي؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                      <p>
                      في ملفك الشخصي، ستحتاج إلى إدخال المعلومات التالية: اسمك الكامل، البريد الإلكتروني، صورة شخصية، الجنس، رقم الهاتف، الدولة، المدينة، روابط حساباتك على لينكد إن وفيسبوك، نبذة عنك، مجالات خبرتك، سنوات الخبرة، القطاعات التي تهتم بها، المواقع التي تهتم بها، اللغات التي تتحدثها، نوع المستثمر الذي تهتم به، استراتيجية النمو، ونطاق الاستثمار الذي تفضله.
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
                      كيف يمكنني إضافة مشروعي الجديد؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                      <p>
                      لإضافة مشروع جديد، انتقل إلى صفحتك الشخصية واضغط على "مشاريعي". هناك ستجد خيار "إضافة مشروع جديد". املأ تفاصيل المشروع مثل اسم المشروع، الوصف، الهدف، والفئة المستهدفة.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseFour">
                      <strong>
                      كيف يمكنني متابعة المستثمرين المهتمين بمشروعي؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                    <div class="accordion-body">
                      <p>
                      يمكنك متابعة المستثمرين المهتمين بمشروعك من خلال صفحة "مشاريعي". ستظهر قائمة بالمستثمرين الذين أبدوا اهتماماً بمشروعك. يمكنك النقر على أسمائهم لعرض ملفاتهم الشخصية والتواصل معهم.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseFive">
                      <strong>
                      كيف يمكنني التواصل مع المستثمرين؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                    <div class="accordion-body">
                      <p>
                      يمكنك التواصل مع المستثمرين من خلال الدردشة المدمجة في الموقع. ببساطة انتقل إلى صفحة المستثمر الذي تهتم به واضغط على زر "تواصل مع المستثمر" لبدء محادثة.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseSix">
                      <strong>
                      هل يمكنني تعطيل حسابي مؤقتاً؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                    <div class="accordion-body">
                      <p>
                      نعم، يمكنك تعطيل حسابك مؤقتاً من خلال إعدادات الحساب. اختر "تعطيل الحساب" من القائمة المنسدلة وسيتم تعطيل حسابك حتى تقرر إعادة تفعيله.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseSeven">
                      <strong>
                      كيف يمكنني حذف حسابي بشكل دائم؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
                    <div class="accordion-body">
                      <p>
                      لحذف حسابك بشكل دائم، انتقل إلى إعدادات الحساب واختر "حذف الحساب" من القائمة المنسدلة. يرجى ملاحظة أن هذه العملية لا يمكن التراجع عنها وستفقد جميع بياناتك.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseEight">
                      <strong>
                      كيف يمكنني تعديل معلوماتي الشخصية؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
                    <div class="accordion-body">
                      <p>
                      لتعديل معلوماتك الشخصية، انتقل إلى صفحتك الشخصية واضغط على "تحديث الملف الشخصي". يمكنك تعديل الاسم الكامل، البريد الإلكتروني، الصورة الشخصية، وغيرها من المعلومات المدرجة.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headinNine">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseNine">
                      <strong>
                      كيف يمكنني جذب المستثمرين لمشروعي؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="headinNine">
                    <div class="accordion-body">
                      <p>
                      لجذب المستثمرين لمشروعك، تأكد من تقديم وصف واضح وجذاب للمشروع، تحديد السوق المستهدف، عرض خطة عمل مفصلة، وإبراز الجوانب المالية والتوقعات المستقبلية. من المهم أيضاً بناء شبكة علاقات جيدة والمشاركة في فعاليات ريادة الأعمال.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTen">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTen">
                      <strong>
                      ما هي المعلومات المهمة التي يجب تضمينها في صفحة مشروعي؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen">
                    <div class="accordion-body">
                      <p>
                      يجب تضمين اسم المشروع، فئة المشروع، الهدف من المشروع، التفاصيل، السوق المستهدف، فئة المشروع، الجوانب المالية كالحد الأدنى، الموقع، وأي تفاصيل أخرى. 
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEleven">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseEleven">
                      <strong>
                      كيف يمكنني التأكد من أن رائد الأعمال سيرد علي؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven">
                    <div class="accordion-body">
                      <p>
                      من المرجح أن يضع رواد الأعمال المهنية أعلى أولوية، لذا تأكد من أنك قمت بملء جميع الأقسام ذات الصلة. تخيل نفسك كرائد أعمال وما الذي سيثير انتباهك في موقفهم. طريقة أخرى هي إرسال رسالة شخصية إلى رائد الأعمال عندما تعرب عن اهتمامك بمشروعهم.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwelve">
                    <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwelve">
                      <strong>
                      هل يجب علي الاستثمار من خلال الموقع؟
                      </strong>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve">
                    <div class="accordion-body">
                      <p>
                      هذا ليس موقعًا للتمويل الجماعي. الغرض من هذا الموقع هو تيسير الاتصال بين الشركات الناشئة العظيمة والمستثمرين الذين يبحثون عن التواصل معهم. بمجرد أن يتم إنشاء الاتصال الأولي، يتم إجراء المعاملة الاستثمارية اللاحقة مباشرة بينك وبين رائد الأعمال (وليس عبر موقعنا على الويب).
                      </p>
                    </div>
                  </div>
                </div>
              </div>
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