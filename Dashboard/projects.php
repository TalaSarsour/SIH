<!DOCTYPE html>
<?php
//session_start();
$title = "مشاريعي";

include "../head.php";
include "./session.php";

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
}
</style>
</head>
<body>
<?php
  include "./header.php";
  if($_SESSION["User_Type_ID"] == "1"){
    $nameButton = "اضافة الى المفضلة";
    echo "<script>window.location.replace('home.php');</script>";
  }
  ?>
  <!--Main layout-->
  <main>
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
    /*echo '
    <!-- Section: Main Search -->
    <section class="container mt-5 pt-5 ps-4">
      
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
    </section>';
    <div class="container-fluid pt-4 ps-4" style="padding-left: 130px;">
*/
    ?>

    <div class="container-fluid mt-5 pt-5 ps-4" style="padding-left: 130px;">
      <!--Section:  cards-->
      <section>
        <h4 class="text-dark fw-bold">جميع المشاريع</h4>
        <div class="row row-cols-3 mb-4">
        <?php
            // Define your table and column names (change as needed)
              $projects = "projects";
              $Project_ID = "Project_ID";
              $Project_Name = "Project_Name";
              $Project_Description = "Project_Description";
              $Project_Target_Value = "Project_Target_Value";
              $Project_Minimum_Value = "Project_Minimum_Value";
              $Project_Location = "Project_Location";
              $Project_Details = "Project_Details";
              $Project_Picture_Path = "Project_Picture_Path";
              $Project_Category = "Project_Category";
              $project_categories  = "project_categories";
              $Project_Categories_ID = "Project_Categories_ID";
              $Project_Categories_Name = "Project_Categories_Name";

              $Project_User_Type_ID = $_SESSION["User_Type_ID"]; 


              // Write the SQL query
              $sql = "SELECT *
              FROM 
                $projects 
              INNER JOIN 
                $project_categories ON $project_categories.$Project_Categories_ID = $projects.$Project_Category 
              WHERE Project_User_ID LIKE $User_ID AND Project_User_Type_ID LIKE $Project_User_Type_ID
              ORDER BY 
                  $Project_ID ASC";
              $result = mysqli_query($conn, $sql);

              // Check query execution
              if (mysqli_num_rows($result) > 0) {
              // echo "<select>";
                
                // Loop through each row in the result
                while($row = mysqli_fetch_assoc($result)) {
                  $Project_ID = $row['Project_ID'];
                  $Project_Name = $row['Project_Name'];
                  $Project_Description = $row['Project_Description'];
                  $Project_Target_Value = $row['Project_Target_Value'];
                  $Project_Minimum_Value = $row['Project_Minimum_Value'];
                  $Project_Location = $row['Project_Location'];
                  $Project_Details = $row['Project_Details'];
                  $Project_Picture_Path = $row['Project_Picture_Path'];
                  $Project_Categories_Name = $row['Project_Categories_Name'];
                  $_SESSION['Project_ID'] = $Project_ID;
                  $_SESSION['Project_Name'] = $Project_Name;
                  //echo "id = ".$_SESSION['Project_ID'];
                  $location="location.href='./details.php?id=".$_SESSION['Project_ID']."'";

                echo ' 
                <div class="col-lg-4 col-md-12 pt-4">
                <div class="card h-100">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="'.$Project_Picture_Path.'" class="img-fluid" />
                    <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                      <div class="row d-flex justify-content-between">
                        <div class="col-md-3 col-sm-3 text-center text-light">
                          <p class="card-text " style="background-color: rgba(0, 0, 0, 0.5)">
                            '.$Project_Categories_Name.'
                          </p>
                        </div>
                    
                        <div class="col-md-3 text-end text-light">
                          <i class="far fa-heart" id="heart-icon-'.$Project_ID.'" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                        </div>
                      </div>
    
                    </div>
                      <a href="javascript:void(0);" onclick="addToDatabase('.$Project_ID.');">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                  </div>
                
                  <div class="card-body">
                    <h5 class="card-title">'.$Project_Name.'</h5>
                    <p class="card-text text-secondary">
                      '.$Project_Description.'
                    </p>
                    <div class="row mt-5">
                      <div class="col-md-6">
                        <p>الهدف: '.$Project_Target_Value.'$</p>
                      </div>
                  
                      <div class="col-md-6">
                        <p>الحد الأدنى: '.$Project_Minimum_Value.'$</p>
                      </div>
                    </div>
                
                      <button type="button" class="btn btn-primary" data-mdb-ripple-init onclick="'.$location.'">اكتشف المزيد</button>
                  </div>
                </div>
              </div>
                ';
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
                    <script type="text/javascript">
            function addToDatabase(id) {
              <?php if($_SESSION["User_Type_ID"] == 1) :?>
                fetch('add_favorite_to_database.php?id=' + id)      
              <?php elseif($_SESSION["User_Type_ID"] == 2) :?>  
                fetch('add_interested_to_database.php?id=' + id)      
              <?php endif?>
              //fetch('add_favorite_to_database.php?id=<?php //echo $_SESSION['Project_ID']; ?>')
              .then(response => response.text())
              .then(data => {
                  alert(data);
                  window.location.reload();
              })
              .catch(error => {
                  console.error('Error:', error);
                  alert(error);
                  window.location.reload();
              });
            }
            /*function deleteFromDatabase(id) {
              fetch('delete_favorite_from_database.php?id=' + id)                
              //fetch('delete_favorite_from_database.php?id=<?php //echo $_SESSION['Project_ID']; ?>')
              .then(response => response.text())
              .then(data => {
                  alert(data);
              })
              .catch(error => {
                  console.error('Error:', error);
              });
            }*/
          </script>
          <script>
          // JavaScript to handle hover effect
          document.addEventListener('DOMContentLoaded', function() {
                // Loop through each heart icon
                <?php for ($i = 1; $i <= $count; $i++) { ?>

                    const heartIcon<?php echo $i; ?> = document.getElementById('heart-icon-<?php echo $i; ?>');
                    //heartIcon<?php echo $i; ?>.addEventListener('click', function() {

                    heartIcon<?php echo $i; ?>.addEventListener('mouseover', function() {
                      alert("Hello World!");
                      heartIcon<?php echo $i; ?>.classList.remove('far');
                      heartIcon<?php echo $i; ?>.classList.add('fas');
                    });

                      heartIcon<?php echo $i; ?>.addEventListener('mouseout', function() {
                      heartIcon<?php echo $i; ?>.classList.remove('fas');
                      heartIcon<?php echo $i; ?>.classList.add('far');
                    });
                <?php } ?>
            });

            /*
            const heartIcon = document.getElementById('heart-icon');

            heartIcon.addEventListener('mouseover', function() {
                heartIcon.classList.remove('far');
                heartIcon.classList.add('fas');
            });

            heartIcon.addEventListener('mouseout', function() {
                heartIcon.classList.remove('fas');
                heartIcon.classList.add('far');
            });*/


            /*
            const heartIcon = document.getElementsByName('fa-heart');
            Array.from(heartIcons).forEach(heartIcon => {

            heartIcon.addEventListener('mouseover', function() {
                heartIcon.classList.remove('far');
                heartIcon.classList.add('fas');
            });

            heartIcon.addEventListener('mouseout', function() {
                heartIcon.classList.remove('fas');
                heartIcon.classList.add('far');
            });
          });*/

          </script>
        <!--
        <div class="row mt-4">
          <div class="col-lg-4 col-md-12">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/SIH/assets/img/card-image-1.png" class="img-fluid" />
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
                <img src="/SIH/assets/img/card-image-2.png" class="img-fluid" />
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
                <img src="/SIH/assets/img/card-image-3.png" class="img-fluid" />
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
                <img src="/SIH/assets/img/card-image-1.png" class="img-fluid" />
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
                <img src="/SIH/assets/img/card-image-2.png" class="img-fluid" />
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
                <img src="/SIH/assets/img/card-image-3.png" class="img-fluid" />
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
        </div>-->
      </section>
      <!--Section: Statistics with subtitles-->
      <!-- Button trigger modal -->
       <div class="text-center">
        <button type="button" class="btn btn-primary mt-4 pb-3" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Add_New_Project_Modal">إضافة مشروع جديد</button>
       </div>
      <!-- Modal -->
      <div
      class="modal fade"
      id="Add_New_Project_Modal"
      data-mdb-backdrop="static"
      data-mdb-keyboard="false"
      tabindex="-1"
      aria-labelledby="Add_New_Project_ModalLabel"
      aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title modal-dialog-centered fw-bold" id="staticBackdropLabel">إضافة مشروع جديد</h5>
              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
              <form class="needs-validation"  method="post">

                <div class="row mb-2">
                  <div class="col-md-6">
                  <label class="form-label text-dark" for="Project_Name">اسم المشروع<span class="text-danger">*</span><span class="text-secondary"></span></label>

                    <div class="form-outline text-start mb-2" data-mdb-input-init>
                      <input type="text" name="Project_Name" id="Project_Name" placeholder="اسم المشروع" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-outline text-start mb-2">
                        <label class="form-label select-label text-dark" for="SelectProjectCategory">فئة المشروع<span class="text-danger">*</span><span class="text-secondary"></label>
                        <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="فئة المشروع" data-mdb-container="#Add_New_Project_Modal" class="form-select" name="SelectProjectCategory" id="SelectProjectCategory" required>
                        <?php
                        /*
                        // Database connection details (replace with your actual details)
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "sih";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        // Check connection
                        if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                        }
                        */
                        // Define your table and column names (change as needed)
                        /*$Country = "countries";
                        $ID = "id";
                        $Country_ID = "country_id";
                        $Country_Name = "native";
                        $States = "states";*/

                        // Write the SQL query                                               INNER JOIN $States ON $Country.$ID = $States.$Country_ID 

                        $sql = "SELECT * FROM project_categories 
                                ORDER BY Project_Categories_Name ASC";
                        $result = mysqli_query($conn, $sql);

                        // Check query execution
                        if (mysqli_num_rows($result) > 0) {
                        // echo "<select>";
                          
                          // Loop through each row in the result
                          $firstOption = true;

                          while($row = mysqli_fetch_assoc($result)) {
                            $value = $row['Project_Categories_ID'];
                            $text = $row['Project_Categories_Name'];
                            
                            // Display option element with value and text
                            if ($firstOption) {
                              echo "<option value='$value' selected>$text</option>";
                              // Set the flag to false after the first iteration
                              $firstOption = false;
                            }else{
                              echo "<option value='$value'>$text</option>";

                            }
                          }
                          
                          echo "</select>";
                        } else {
                          echo "No records found";
                        }

                        // Close connection
                        //mysqli_close($conn);

                        ?>
                      
                      </div>
                  </div>  
                </div>   
                <div class="row mb-2">
                  <div class="col-md-6">
                    <label class="form-label text-dark" for="Project_Target_Value">الهدف<span class="text-danger">*</span><span class="text-secondary"></span></label>
                    <div class="form-outline text-start mb-2" data-mdb-input-init>
                      <input type="number" name="Project_Target_Value" id="Project_Target_Value" placeholder="الهدف" min="1" max="100000" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label text-dark" for="Project_Minimum_Value">الحد الادنى<span class="text-danger">*</span><span class="text-secondary"></label>
                    <div class="form-outline text-start mb-2" data-mdb-input-init>
                      <input type="number" name="Project_Minimum_Value" id="Project_Minimum_Value" placeholder="الحد الادنى" min="1" max="100000" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                </div>   
                <div class="row mb-2">
                  <div class="col-md-6">
                    <label class="form-label text-dark" for="Project_Description">وصف المشروع<span class="text-danger">*</span><span class="text-secondary"></span></label>
                    <div class="form-outline text-start mb-2" data-mdb-input-init>
                      <textarea class="form-control" name="Project_Description" id="Project_Description" placeholder="وصف المشروع" rows="3" maxlength="206" required></textarea>
                      <div class="invalid-feedback">هذه الخانة مطلوبة</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <label class="form-label text-dark" for="Project_Location">الموقع<span class="text-danger">*</span><span class="text-secondary"></span></label>
                    <div class="form-outline text-start mb-2" data-mdb-input-init>
                      <textarea class="form-control" name="Project_Location" id="Project_Location" placeholder="الموقع" rows="3" maxlength="90" required></textarea>
                      <div class="invalid-feedback">هذه الخانة مطلوبة</div>
                    </div>
                  </div>
                </div>  

                <div class="row mb-2">
                  <div class="col-md-12">
                    <label class="form-label text-dark" for="Project_Details">التفاصيل<span class="text-danger">*</span><span class="text-secondary"></span></label>
                    <div class="form-outline text-start mb-2" data-mdb-input-init>
                      <textarea class="form-control" name="Project_Details" id="Project_Details" placeholder="التفاصيل" rows="4" maxlength="1533" required></textarea>
                      <div class="invalid-feedback">هذه الخانة مطلوبة</div>
                    </div>
                  </div>
                </div>  
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="Submit-Add-New-Project" data-mdb-ripple-init>إضافة مشروع جديد</button>
                </div>
              </form> 
              <?php
                  if(isset($_POST['Submit-Add-New-Project'])){
                    $Project_Name = $_POST['Project_Name'];
                    $Project_Category = $_POST['SelectProjectCategory'];
                    $Project_Target_Value = $_POST['Project_Target_Value'];
                    $Project_Minimum_Value = $_POST['Project_Minimum_Value'];
                    $Project_Description = $_POST['Project_Description'];
                    $Project_Location = $_POST['Project_Location'];
                    $Project_Details = $_POST['Project_Details'];
                    if($Project_Category == 1){
                      $Project_Picture_Path = "/SIH/assets/img/card-image-1.png";
                    }elseif($Project_Category == 2){
                      $Project_Picture_Path = "/SIH/assets/img/card-image-2.png";
                    }elseif($Project_Category == 3){
                      $Project_Picture_Path = "/SIH/assets/img/card-image-3.png";
                    }
                    if($Project_Minimum_Value > $Project_Target_Value){
                      $_SESSION['error'] = 'الحد الادنى يجب ان يكون اقل من الهدف!.';       
                      /*header('location: ./profile.php');
                      exit;   */    
                      echo "<script>window.location.replace('./projects.php');</script>";

                    }

                    if($conn){
                      $SqlInsertNewProject = "INSERT INTO projects (Project_Name, Project_Description, Project_Target_Value, Project_Minimum_Value, Project_Location, Project_Details, Project_Picture_Path, Project_Category, Project_User_ID, Project_User_Type_ID)
                      VALUES ('" . $Project_Name . "', '" . $Project_Description. "', '" . $Project_Target_Value. "', '" . $Project_Minimum_Value. "', '" . $Project_Location. "', '" . $Project_Details. "', '" . $Project_Picture_Path. "', '" . $Project_Category. "', '" . $User_ID. "', '" . $Project_User_Type_ID. "')";

                      $Insert_New_Project_Query = mysqli_query($conn, $SqlInsertNewProject);
                      if($Insert_New_Project_Query){
                          $_SESSION['success'] = 'تمت عملية إضافة المشروع بنجاح!.';
                          //echo '<script>window.location.reload();</script>';
                          /*header('location: ./projects.php');
                          exit;*/
                          echo "<script>window.location.replace('./projects.php');</script>";

                      }else{
                          $_SESSION['error'] = 'فشلت عملية إضافة المشروع!.';       
                          /*header('location: ./profile.php');
                          exit;   */    
                          echo "<script>window.location.replace('./projects.php');</script>";

                      }
                    }
                    else{
                      //echo '<script>alert("Connection Error.");</script>'; 
                      $_SESSION['error'] =  'Connection Error.';  
                      echo "<script>window.location.replace('./projects.php');</script>";
                    }
                    // Close connection
                    mysqli_close($conn);
                  }
                ?>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>

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
include "../script-umd.php"; 
?>

</html>