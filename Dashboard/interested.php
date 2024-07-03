<!DOCTYPE html>
<?php
//session_start();
$title = "اهتماماتي";

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
      <!--Section:  cards-->
      <section>
      <div class="row row-cols-3 mt-4 mb-4">
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
              $projects_interested = "projects_interested";
              $Project_Interested_Status = "Project_Interested_Status";
              $users = "users";
              $User_ID = "User_ID";
              $ID = $_SESSION['User_ID'];

              // Write the SQL query
              $sql = "SELECT $projects.*, $users.*,$projects_interested.*,$project_categories.*
              FROM 
                $projects 
              INNER JOIN 
                $project_categories ON $project_categories.$Project_Categories_ID = $projects.$Project_Category 
              INNER JOIN 
                $projects_interested ON $projects_interested.$Project_ID = $projects.$Project_ID 
              INNER JOIN 
                $users ON $projects_interested.$User_ID = $users.$User_ID 
              WHERE $projects_interested.$User_ID LIKE $ID
              ORDER BY 
                $projects.$Project_ID ASC;";
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
/*
                  echo $Project_Name;
                  echo $Project_Description;
                  echo $Project_Target_Value;
                  echo $Project_Minimum_Value;
                  echo $Project_Location;
                  echo $Project_Details;
                  echo $Project_Picture_Path;
                  echo $Project_Categories_Name;
                  echo "end";*/

                echo ' 
                <div class="col-lg-4 col-md-12 mb-4">
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
                          <i class="fas fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
                        </div>
                      </div>
    
                    </div>
                    <a href="#!">
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
                        <p>الهدف: '.$Project_Target_Value.'</p>
                      </div>
                  
                      <div class="col-md-6">
                        <p>الحد الأدنى: '.$Project_Minimum_Value.'$</p>
                      </div>
                    </div>
                
                      <div class="text-start">

                      <button type="button" class="btn btn-primary" data-mdb-ripple-init onclick="'.$location.'">اكتشف المزيد</button>
                      <button type="button" class="btn btn-danger" data-mdb-ripple-init onclick="deleteFromDatabase('.$Project_ID.');">حذف من اهتماماتي</button>
                      </div>
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
                /*function addToDatabase(id) {
                  fetch('add_favorite_to_database.php?id=' + id)                
                  //fetch('add_favorite_to_database.php?id=<?php //echo $_SESSION['Project_ID']; ?>')
                  .then(response => response.text())
                  .then(data => {
                      alert(data);
                  })
                  .catch(error => {
                      console.error('Error:', error);
                  });
                }*/
                function deleteFromDatabase(id) {
                  <?php if($_SESSION["User_Type_ID"] == 1) :?>
                    fetch('delete_favorite_from_database.php?id=' + id)      
                  <?php elseif($_SESSION["User_Type_ID"] == 2) :?>  
                    fetch('delete_interested_from_database.php?id=' + id)      
                  <?php endif?>         
                  //fetch('delete_favorite_from_database.php?id=<?php //echo $_SESSION['Project_ID']; ?>')
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
                      <i class="fas fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
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
                      <i class="fas fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
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
                      <i class="fas fa-heart" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%;"></i>
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