<!DOCTYPE html>
<?php
//session_start();
$title = "الملف الشخصي";
include "../head.php";

include "./session.php";
/*echo '<script>alert("session path : '.$_SESSION['User_Profile_Picture_Path'] .'")</script>';
echo '<script>alert("session gender : '.$_SESSION['User_Gender_ID'] .'")</script>';*/

?>
<head>
    <link rel="stylesheet" href="/SIH/assets/css/Custom/home.css"/>
<style>
@media (min-width: 1400px) {
    main,
    header,
    #main-navbar {
        padding-right: 240px;
    }
    main{
      padding-top: 80px;
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
            <div class="row justify-content-between">

              <div class="col-md-3">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  
                  <!--
                    <img src="/SIH/assets/img/profile-picture-female-1.png" class="img-fluid" style="height: 100%; width: 100%;"/>-->

                    <img src="<?php echo $User_Profile_Picture_Path;?>" class="img-fluid" style="height: 100%; width: 100%;"/>
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                    <div class="card-img-overlay" >
                      <div class="bottom-0 mt-4 d-flex align-items-end h-100 text-start justify-content-start">
                        <div>
                          <p class="fw-bold text-white">

                            <!--
                              علا خالد المصعبي-->
                              <?php 
                            //echo $User_Full_Name;
                            ?>
                            <span class="badge badge-light mx-2 text-dark"><?php echo $User_Full_Name; ?></span>

                            </p>
                          <p class="text-white">
                            <!--
                              Hala.salahqu20@gmail.com-->
                              <?php 
                            //echo $User_Email_Address;
                            ?>
                            <span class="badge badge-light mx-2 text-dark"><?php echo $User_Email; ?></span>

                            
                          </p>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                </div>
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-8">
                        <h5 class="card-title fw-bold">
                          معلومات اخرى
                        </h5>
                      </div>
                    </div>

                    <p class="card-text text-dark mt-2">
                      الجنس: <span class="text-secondary">
                      <!--
                       انثى-->
                        <?php 
                        echo $Gender_Name;
                        ?>  
                      </span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      رقم الهاتف: <span class="text-secondary">
                      <!--
                      0595143841-->
                      <?php 
                      echo $User_Phone_Number;
                      ?> </span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      الدولة: <span class="text-secondary">
                        <!--
                        مصر-->
                        <?php 
                        echo $Country_Name_Native;
                        ?>
                      </span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      المدينة: <span class="text-secondary">
                        <!--
                        اسيوط-->
                        <?php 
                        echo $City_Name_Native;
                        ?>
                      </span>
                    </p>
                    <?php
                        $View_User_Type_ID = $_GET['view_user_type_id'];

                    if($View_User_Type_ID=="1") : ?> 
<?php /*
                      <p class="card-text text-dark mt-2">
                        نوع المستثمر: <span class="text-secondary">
                        <!--
                        مستثمر ملاك-->
                        <?php 
                        echo $Investor_Type_Name;
                        ?>
                        </span>
                      </p>*/?>
                      <p class="card-text text-dark mt-2">
                        نطاق الاستثمار : <span class="text-secondary">
                        <!--
                        12000$-->
                        <?php 
                        echo $Investment_Range_Name . "$";
                        ?>
                        </span>
                      </p>
                      <?php endif; ?>

                      <?php /*
                      <p class="card-text text-dark mt-2">
                        مراحل عمل الشركة : 
                        <!--
                        <span class="text-secondary">
                          
                        <! --
                        ربحية- ->
                        <?php 
                        //echo $Stages_Of_Business_Operations_Name;
                        ?>
                        </span>-->?>
                        <?php
                          if(mysqli_num_rows($sql_User_Stages_Of_Business_Operations_IDs_Query) > 0){
                            while($row = mysqli_fetch_array($sql_User_Stages_Of_Business_Operations_IDs_Query)) {
                              echo '
                              <span class="text-secondary me-2">
                              '.$row['Stages_Of_Business_Operations_Name'].'
                            </span>
                              ';
                            }
                          }
                        ?>
                      </p>
                      <?php elseif($View_User_Type_ID=="2") : ?>

                      */
                    if($View_User_Type_ID=="2") : ?>
                      <p class="card-text text-dark mt-2">
                        مستوى الخبرة : <span class="text-secondary">
                          <!--  
                          مبتدء-->
                          <?php 
                          echo $Experience_Level_Name;
                          ?>
                          </span>
                      </p>
                      <p class="card-text text-dark mt-2">
                        نطاق الاستثمار المهتم به :
                        <span class="text-secondary">
                        <!--
                        12000$-->
                        <?php 
                        echo $Investment_Range_Name." $";
                        ?>
                        </span>
                      </p>

                      <p class="card-text text-dark mt-2">
                       استراتيجية النمو : <span class="text-secondary">
                        <!--
                          توسيع قاعدة العملاء-->
                        <?php 
                        echo $Growth_Strategy_Name;
                        ?>
                      </span>
                      </p>  
                    <?php endif; ?>

                    <p class="card-text text-dark mt-2">
                      لينكدان : <span class="text-secondary">
                        <!--
                        علا خالد-->
                        <?php 
                        echo $User_LinkedIn_ID;
                        ?>
                      </span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      فيس بوك : <span class="text-secondary">
                        <!--
                        علا خالد-->
                        <?php 
                        echo $User_Facebook_ID;
                        ?>
                        </span>
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
                    </div>
                    <!--
                    <h5 class="card-title">
                      نبذة عني</h5>-->
                    <p class="card-text text-secondary">
                      <?php
                      echo $User_About_Me;
                      ?>
                      <!--
                      أنا متحمسة لعالم الموضة والأناقة، حيث اكتشف الإلهام في التصاميم الجديدة والاتجاهات الحالية. بخبرتي وشغفي بالأزياء، قمت بالعمل في مجال الموضة بكثرة وعدد كبير، حيث يلزم في تنظيم وتنسيق العروض الأزيائية والفعاليات الخاصة.
                      أخذ مساعدة الناس على التعبير عن أنفسهم من خلال ملابسهم، من خلال توفير الإرشادات والإرشادات حول كيفية اختيار المسؤول الرئيسي ومظهرهم.
                      بفضل ما تمتلكه من عالم ما بعدي، أتمكن من معرفة الاتجاهات الحالية والحديثة لمصممي الأزياء العالمية، مما يمكنني من تقديم نصائح فعالة وإلهامية للأشخاص الذين يرغبون في التميز في أسلوبهم الشخصي.-->
                    </p>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          مجالات الخبرة
                        </h5>
                      </div>
                    </div>
                    <p class="card-text text-secondary">
                      <!--
                       عالم الموضة-->
                        <?php 
                        echo $Areas_Of_Experience_Name;
                        ?>
                      
                    </p>
                    <h5 class="card-title fw-bold">
                      سنوات الخبرة
                    </h5>
                    <p class="card-text text-secondary">
                    <!--
                    ٤ سنوات-->
                    <?php 
                    if($User_Years_Of_Experience <= 0){
                      echo 'لا يوجد سنوات خبرة';
                    }
                    elseif($User_Years_Of_Experience == 1){
                      echo 'سنة واحدة';
                    }elseif($User_Years_Of_Experience > 1 && $User_Years_Of_Experience <= 10){
                      echo $User_Years_Of_Experience.' سنوات';
                    }elseif($User_Years_Of_Experience > 10){
                      echo $User_Years_Of_Experience.' سنة';
                    }
                    
                    ?>
                      
                    </p>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          القطاعات المهتم بها
                        </h5>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-start">
                    <?php
                    if(mysqli_num_rows($industrial_sectors_Query) > 0){
                      while($row = mysqli_fetch_array($industrial_sectors_Query)) {
                        echo '
                        <p class="card-text text-secondary me-3">
                        '.$row['Industrial_Sectors_Name'].'
                      </p>
                        ';
                      }
                    }
                        ?>
                        <!--
                      <p class="card-text text-secondary me-3">
                        التكنولوجيا
                      </p>
                      <p class="card-text text-secondary">
                        خدمات الأعمال
                      </p>-->
                    </div>
                    <h5 class="card-title fw-bold">
                    المواقع المهتم بها
                    </h5>
                    <p class="card-text text-secondary">
                        <!--
                        موقع1-->
                        <?php 
                        echo $User_Location_Native;
                        ?>
                      
                    </p>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          اللغات
                        </h5>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-start">                      
                      <?php
                    if(mysqli_num_rows($Language_IDs_Query) > 0){
                      while($row = mysqli_fetch_array($Language_IDs_Query)) {
                        echo '
                        <p class="card-text text-secondary me-3">
                        '.$row['Language_Name'].'
                      </p>
                        ';
                      }
                    }
                        ?>
                        <!--
                    <p class="card-text text-secondary">
                    عربية
                    </p>-->
                    </div>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                          <?php 
                        if($View_User_Type_ID=="1"){
                          echo 'نوع المستثمر';

                        }elseif($View_User_Type_ID=="2"){
                          echo 'نوع المستثمر المهتم به';
                        }
                         
                        ?>
                        </h5>
                      </div>
                    </div>

                    <div class="d-flex flex-row justify-content-start align-items-start">

                    <?php
                    if(mysqli_num_rows($sql_User_Investor_Type_IDs_Query) > 0){
                      while($row = mysqli_fetch_array($sql_User_Investor_Type_IDs_Query)) {
                        echo '
                        <p class="card-text text-secondary me-3">
                        '.$row['Investor_Type_Name'].'
                      </p>
                        ';
                        //echo "<script>alert('Stages_Of_Business_Operations_Name =  ".$row['Stages_Of_Business_Operations_Name']."');</script>";

                      }
                    }
                    ?>




                        <!--
                      <p class="card-text text-secondary me-3">
                        التكنولوجيا
                      </p>
                      <p class="card-text text-secondary">
                        خدمات الأعمال
                      </p>-->
                    </div>

                  </div>
                </div>
                <?php
                if($View_User_Type_ID=="1") : ?> 
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                        مراحل عمل الشركة
                        </h5>
                      </div>
                    </div>

                    <div class="d-flex flex-row justify-content-start align-items-start">

                    <?php
                        if(mysqli_num_rows($sql_User_Stages_Of_Business_Operations_IDs_Query) > 0){
                          while($row = mysqli_fetch_array($sql_User_Stages_Of_Business_Operations_IDs_Query)) {
                            echo '
                            <p class="card-text text-secondary me-3">
                            '.$row['Stages_Of_Business_Operations_Name'].'
                          </p>
                            ';
                            //echo "<script>alert('Stages_Of_Business_Operations_Name =  ".$row['Stages_Of_Business_Operations_Name']."');</script>";
  
                          }
                        }
                    ?>




                        <!--
                      <p class="card-text text-secondary me-3">
                        التكنولوجيا
                      </p>
                      <p class="card-text text-secondary">
                        خدمات الأعمال
                      </p>-->
                    </div>

                  </div>
                </div>
                <?php endif;?>
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
include "../script-umd.php"; 
?>

</html>