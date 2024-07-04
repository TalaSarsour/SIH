<!DOCTYPE html>

<?php
$title = "Social Investment Hub (SIH)";
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
<?php 
    if(isset($_SESSION['success'])){
      echo'
        <div class="alert alert-success fade show" id="success" data-mdb-alert-init data-mdb-autohide="true" data-mdb-position="top-left" data-mdb-delay="4000" role="alert">
          <i class="fas fa-check-circle me-3"></i>
          '.$_SESSION['success'].'
        </div>';
        unset($_SESSION['success']);
      }
      if(isset($_SESSION['error'])){
      echo'
        <div class="alert alert-danger fade show" id="error" data-mdb-alert-init data-mdb-autohide="true" data-mdb-position="top-left" data-mdb-delay="4000" role="alert">
          <i class="fas fa-times-circle me-3"></i>
          '.$_SESSION['error'].'
        </div>';
        unset($_SESSION['error']);      
    }
  ?>
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
          نحن هنا لنبتكر المستقبل ونجمع العقول المبدعة والطموحة في مكان واحد. سواء كنت مستثمراً يبحث عن الفرص الواعدة أو رائد أعمال يسعى لتحقيق رؤيته وتحويل أفكاره إلى واقع ملموس، فإن مركز الإستثمار الاجتماعي هو المنصة المثالية التي تجمع بين الطموح والإبداع والموارد.
          </p>
          <!--
          <button data-mdb-ripple-init type="button" class="btn btn-primary" style="float: right;">
            قراءة المزيد
          </button>-->
        </div>
        
        <div class="col-lg-5 col-md-12 mb-4 mx-auto" style="width: 532px; height: 699;">
          <!-- <div class="col-md-6" style="width: 532px; height: 699;">-->

         <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
           <img src="/SIH/assets/img/banner_img_1.png" class="img-fluid"/>
           <a href="#!">
             <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
           </a>
         </div>

       </div>
      </div>
    </section>
  </div>
  <div class="mb-5">
    <img src="/SIH/assets/img/Logos.png" class="img-fluid" style="width: 100%; height: auto; "/>
  </div>

  <div class="container-fluid mb-5 me-12">
    <!--Section: Content-->
    <section class="text-center">

      <div class="row d-flex justify-content-between align-items-center" id="about-us" style="padding-left: 80px; padding-right: 120px;">

        <div class="col-lg-5 col-md-6 mb-4 mx-auto text-start">
          <h1 class="card-title mb-3 h1 fw-bold"  style="font-size: 60px;">عنا
          </h1>
          <p class="card-text text-secondary" >
            مركز الاستثمار الاجتماعي، بوابتك إلى عالم من فرص الاستثمار. تم تصميم منصتنا لخطوات الاستثمار البسيطة، وربط رواد
            الأعمال الطموحين بالمستثمرين الأذكياء. سواء كنت تبحث عن تمويل لمشروعك التالي أو تتطلع إلى تنويع محفظتك،
            "يوفر مركز استثمار الموارد المؤسسية التي تحتاجها لتزدهر في التنافس التنافسي اليوم". نحن نستعد لتعريف طريقة
            القيام بالاستثمارات وإقامة الشراكات. مرحبًا بكم في عصر جديد من النمو المشترك.
          </p>
          <button data-mdb-ripple-init type="button" onclick="location.href='./about-us.php'" class="btn btn-primary" style="float: right;">
            قراءة المزيد
          </button>
        </div>
        <div class="col-lg-5 col-md-12 mb-4 mx-auto">
          <img src="/SIH/assets/img/banner_img_2.png" class="img-fluid"/>
        </div>
      </div>
    </section>
  </div>

  <div class="container-fluid mb-5">

  <!--Section: Content-->
  <section class="text-center">
    <div class="container-fluid">
      <h1 class="mb-5"><strong>مميزاتنا</strong></h1>
      <div class="row row-cols-3 mb-4" style="padding-left:169px; padding-right: 157px;">
          <?php
            // Define your table and column names (change as needed)

              // Write the SQL query
              $sql = "SELECT * FROM features ORDER BY Feature_ID ASC LIMIT 3";

              $result = mysqli_query($conn, $sql);

              // Check query execution
              if (mysqli_num_rows($result) > 0) {
              // echo "<select>";
                
                // Loop through each row in the result
                while($row = mysqli_fetch_assoc($result)) {
                  $value = $row['Feature_ID'];
                  $text = $row['Feature_Name'];
                  $Description = $row['Feature_Description'];
                  $path = $row['Feature_Picture_Path'];
                  echo '
                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card text-start border border-secondary shadow-0 h-100" style="height: 19rem;">
                        <div class="card-body">
                          <h5 class="card-title" style="display: inline-block;">  
                            <img src="'.$path.'" class="img-fluid" style="width: 50px; height: 50px;"/>
                          '.$text.'
                          </h5>
                          <p class="card-text text-secondary">
                           '.$Description.'
                          </p>
                        </div>
                      </div>
                    </div>';
                  /*echo "id = ".$value;
                  echo "description = ".$text;
                  echo "user id = ".$id;*/
                  
                  // Display option element with value and text
                 // echo "<option value='$value'>$text</option>";
                }
                
                //echo "</select>";
              } else {
                echo "No records found";
              }

              // Close connection
              //mysqli_close($conn);

              ?>
              <!--
      <div class="row gx-3" style="padding-left:168px; padding-right: 152px;">

        <div class="col-lg-4 col-md-6">
          <div class="card text-start border border-secondary shadow-0 " style="height: 19rem;">
            <div class="card-body">
              <h5 class="card-title" style="display: inline-block;">  
                <img src="/SIH/assets/img/icon-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
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
                <img src="/SIH/assets/img/icon-2.png" class="img-fluid" style="width: 50px; height: 50px;"/>
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
                <img src="/SIH/assets/img/icon-3.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                  الشفافية والتوازن الاقتصادي 
              </h5>
              <p class="card-text text-secondary">
                يوفر الموقع معلومات كافية وشفافة عن الفرص الاستثمارية المتاحة  بما في ذلك التوقعات المالية والمخاطر المحتملة. قم بكتابة ما يكفي لجذب اهتمام المستثمرين في مشروعك دون الكشف عن أي معلومات مهمة.
              </p>
              <br>
              
            </div>
          </div>
        </div>

      </div>-->
    </div>
    <button data-mdb-ripple-init type="button" text class="btn btn-primary px-3 me-5 text-center" onclick="location.href='./features.php'">
      رؤية المزيد
    </button>
  </section>
  <!--Section: Content-->
  </div>
  <div class="container-fluid mb-5">

    <!--Section: Content-->
    <section class="text-start">
      <div class="container-fluid" style="padding-left: 180px; padding-right: 170px;">
        <h1 class="text-center"><strong>الأسئلة والأجوبة المتداولة</strong></h1>
        <p class="text-center text-secondary">نحن هنا للمساعدة في جميع الأسئلة والإجابة عليها في مكان واحد.</p>
        <div class="accordion" id="accordionPanelsStayOpenExample">
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

        </div>
        <div class="text-center mt-4">
        <button data-mdb-ripple-init type="button" text class="btn btn-primary px-3 me-5 text-center" onclick="location.href='./common-questions.php'">
            رؤية المزيد
          </button>
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
          <div class="row row-cols-3 mb-4" style="padding-left:169px; padding-right: 157px;">
          <?php
            // Define your table and column names (change as needed)
              $users_information = "users_information";
              $users = "users";
              $User_ID = "User_ID";
              $users_feedback = "users_feedback";
              $Users_Feedback_ID = "Users_Feedback_ID";
              $Users_Feedback_Description = "Users_Feedback_Description";
              $Users_Feedback_User_ID = "Users_Feedback_User_ID";
              $User_Full_Name = "User_Full_Name";
              $User_Profile_Picture_Path = "User_Profile_Picture_Path";
              $investor_type = "investor_type";
              $User_Investor_Type_IDs  = "User_Investor_Type_IDs";
              $Investor_Type_ID = "Investor_Type_ID";
              $Investor_Type_Name = "Investor_Type_Name";


              // Write the SQL query
              //$sql = "SELECT $Users_Feedback_ID, $Users_Feedback_Description, $Users_Feedback_User_ID, $User_Profile_Picture_Path, $User_Full_Name, $Investor_Type_Name FROM $users_feedback INNER JOIN $users_information ON $users_feedback.$Users_Feedback_User_ID = $users_information.$User_ID INNER JOIN $users ON $users_feedback.$Users_Feedback_User_ID = $users.$User_ID INNER JOIN $users_information ON $users_information.$User_Investor_Type_IDs = $investor_type.$Investor_Type_ID WHERE $Users_Feedback_User_ID LIKE $User_ID ORDER BY $Users_Feedback_User_ID ASC LIMIT 3";
              $sql = "SELECT 
              $Users_Feedback_ID, 
              $Users_Feedback_Description, 
              $Users_Feedback_User_ID, 
              $User_Profile_Picture_Path, 
              $User_Full_Name, 
              $Investor_Type_Name 
          FROM 
              $users_feedback 
          INNER JOIN 
              $users_information ON $users_feedback.$Users_Feedback_User_ID = $users_information.$User_ID 
          INNER JOIN 
              $users ON $users_feedback.$Users_Feedback_User_ID = $users.$User_ID 
          INNER JOIN 
              $investor_type ON $users_information.$User_Investor_Type_IDs = $investor_type.$Investor_Type_ID 
          WHERE 
              $users_feedback.$Users_Feedback_User_ID LIKE $users.$User_ID 
          ORDER BY 
              $Users_Feedback_User_ID ASC 
          LIMIT 3";
              $result = mysqli_query($conn, $sql);

              // Check query execution
              if (mysqli_num_rows($result) > 0) {
              // echo "<select>";
                
                // Loop through each row in the result
                while($row = mysqli_fetch_assoc($result)) {
                  $value = $row[$Users_Feedback_ID];
                  $text = $row[$Users_Feedback_Description];
                  $path = $row[$User_Profile_Picture_Path];
                  $full_name = $row[$User_Full_Name];
                  $Investor_Type = $row[$Investor_Type_Name];
                  echo '
                  <div class="col-lg-4 col-md-6">
                  <div class="card text-start">
                    <div class="card-body">
                      <p class="card-text text-secondary">
                        '.$text.'
                      </p>
                    </div>
                    <div class="card-footer" style="display: inline-block;">
                      <img src="'.$path.'" class="img-fluid me-2" style="width: 50px; height: 50px;"/>
                      
                      <span class="text-dark">
                      '.$full_name.' 
                      </span>

                      <span class="badge badge-light">'.$Investor_Type.'</span>

                    </div>
                  </div>
                </div>';
                  /*echo "id = ".$value;
                  echo "description = ".$text;
                  echo "user id = ".$id;*/
                  
                  // Display option element with value and text
                 // echo "<option value='$value'>$text</option>";
                }
                
                //echo "</select>";
              } else {
                echo "No records found";
              }

              // Close connection
              //mysqli_close($conn);

              ?>
          <?php
          /*
           for ($i=0; $i < 3; $i++) :?>
            <div class="col-lg-4 col-md-6">
                <div class="card text-start">
                  <div class="card-body">
                    <p class="card-text text-secondary">

                      لقد مر شهر واحد فقط منذ أن استخدمت Social Investment Hub لإدارة نفقات أعمالي، ولكن النتيجة مرضية للغاية! أصبح تمويل أعمالي الآن أكثر تنظيماً من ذي قبل، وذلك Social Investment Hub                  </p>
                  </div>
                  <div class="card-footer" style="display: inline-block;">
                    <img src="/SIH/assets/img/avatar-male-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                    علي احمد
                  </div>
                </div>
              </div>
           <?php endfor*/
          ?>

          </div>
          <button data-mdb-ripple-init type="button" text class="btn btn-primary px-3 me-5 text-center" onclick="location.href='./feedback.php'">
            رؤية المزيد
          </button>
<!--
          <div class="row" style="padding-left:169px; padding-right: 157px;">
    
            <div class="col-lg-4 col-md-6">
              <div class="card text-start">
                <div class="card-body">
                  <p class="card-text text-secondary">
                    لقد مر شهر واحد فقط منذ أن استخدمت Social Investment Hub لإدارة نفقات أعمالي، ولكن النتيجة مرضية للغاية! أصبح تمويل أعمالي الآن أكثر تنظيماً من ذي قبل، وذلك Social Investment Hub                  </p>
                </div>
                <div class="card-footer" style="display: inline-block;">
                  <img src="/SIH/assets/img/avatar-male-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
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
                  <img src="/SIH/assets/img/avatar-female-1.png" class="img-fluid" style="width: 50px; height: 50px;"/>
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
                  <img src="/SIH/assets/img/avatar-male-2.png" class="img-fluid" style="width: 50px; height: 50px;"/>
                  علي احمد
                </div>
              </div>
            </div>
    
          </div>
           -->
        </div>
      </section>
      <!--Section: Content-->
    </div>
    <div class="container-fluid mb-5">
      <!--Section: Content-->
      <section class="text-center">
        <div class="container-fluid" style="padding-left: 180px; padding-right: 170px;">

          <div class="card text-center">
            <div class="card-body">
              <form class="text-center mx-5 needs-validation" method="post">
                <div class="row justify-content-center">
                  <h1 class="mb-5"><strong>تواصل معنا</strong></h1>

                  <div class="col-12">
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

                    <div class="d-flex flex-row align-items-center mb-4 ">
                      <i class="fas fa-phone-flip fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="tel" id="Phone_Number" name="Phone_Number" class="form-control text-start" maxlength="10" required/>
                        <label class="form-label" for="Phone_Number">رقم الهاتف</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <!-- Message input -->

                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <textarea class="form-control" id="Message" name="Message" rows="4" style="height: 98px;" required></textarea>
                        <label class="form-label" for="Message">الرسالة</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 mt-5 fa-fw"></i>

                      <div data-mdb-input-init class="form-outline flex-fill text-start mb-0">
                        <label class="form-label select-label text-dark" for="SelectPurpose">الغرض<span class="text-danger">*</span></label>
                        <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الغرض" class="form-select" name="SelectPurpose" id="SelectPurpose" required>
                          <option value="1">استفسارات المستثمرين</option>
                          <option value="2">استفسارات رواد الأعمال والشركات الريادية</option>
                          <option value="3">التدريب والتوظيف</option>
                          <option value="4">الاقتراحات والشراكات</option>
                          <option value="5">التواصل</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" name="Contact-Submit" id="Contact-Submit" class="btn btn-primary mb-4">إرسال</button>
              </form>
            </div>
          </div>
          <?php
            // Define your table and column names (change as needed)
            if(isset($_POST['Contact-Submit']))
            {
              $Full_Name = $_POST['Full_Name'];
              $Email = $_POST['Email'];
              $Phone_Number = $_POST['Phone_Number'];
              $Message = $_POST['Message'];
              $SelectPurpose = $_POST['SelectPurpose'];

              $contact_us = "contact_us";
              $Contact_US_ID = "Contact_US_ID";
              $Contact_US_Full_Name = "Contact_US_Full_Name";
              $Contact_US_Email = "Contact_US_Email";
              $Contact_US_Phone_Number = "Contact_US_Phone_Number";
              $Contact_US_Message = "Contact_US_Message";
              $Contact_US_Purpose = "Contact_US_Purpose";
  
              // Write the SQL query
              $sql = "INSERT INTO $contact_us ($Contact_US_Full_Name, $Contact_US_Email, $Contact_US_Phone_Number, $Contact_US_Message, $Contact_US_Purpose)
               VALUES ('" . $Full_Name . "', '" . $Email . "', '" . $Phone_Number . "', '" . $Message . "', '" . $SelectPurpose . "')";

              $result = mysqli_query($conn, $sql);
              // Check query execution
              if ($result) {
                /*echo '<script>
                alert("Data inserted successfully!");
              </script>';*/
              $_SESSION['success'] = 'تم ارسال الطلب الخاص بك الى مركز استمثار الاجتماعي بنجاح سيتم التواصل معك باقرب وقت ممكن على بريدك الالكتروني.';
              //echo '<script>window.location.reload();</script>';
              /*header('location: ./projects.php');
              exit;*/
              echo "<script>window.location.replace('./index.php');</script>";
                //echo "Data inserted successfully!";
              } else {
                //echo "Error inserting data: " . mysqli_error($conn);
                /*echo '<script>
                alert("Error inserting data: '.mysqli_error($conn).'");
              </script>';*/
              $_SESSION['error'] = 'يتعذر ارسال طلبك بالوقت الحالي يرجى المحاولة لاحفاً.';
              echo "<script>window.location.replace('./index.php');</script>";

              }
            }


            // Close connection
            mysqli_close($conn);
          
          ?>

        </div>
      </section>
      <!--Section: Content-->
    </div>
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