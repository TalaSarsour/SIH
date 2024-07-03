<!DOCTYPE html>
<?php
//session_start();
$title = "الرئيسية";

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
 //echo "id = ".$_SESSION['Project_ID'];
  echo $_GET['id'];
  ?>
  <!--Main layout-->
  <main>
    <!-- Section: Main Search -->
    <section class="container pt-5 mt-4">
      <div class="container-fluid">
      <?php
      /*echo '<script>alert("success: "'.$_SESSION['success'].');</script>'; 
      echo '<script>alert("error: "'.$_SESSION['error'].');</script>'; */

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

        // Define your table and column names (change as needed)
          $id = $_GET['id'];
          /*$projects = "projects";
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
          $Project_Categories_Name = "Project_Categories_Name";*/
          //$location="location.href='./details.php'";


          // Write the SQL query
          $sql = "SELECT *
          FROM 
            projects 
          INNER JOIN 
            project_categories ON project_categories.Project_Categories_ID = projects.Project_Category 
          WHERE Project_ID LIKE $id
          ORDER BY 
            Project_ID ASC";
          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);
          if($_SESSION["User_Type_ID"] == "1"){
            $nameButton = "اضافة الى المفضلة";

          }elseif($_SESSION["User_Type_ID"] == "2") {
            $nameButton = "اضافة الى اهتماماتي";
          }
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
        <!--Section:  cards-->
        <section class="pb-4">
          <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <!--
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>-->
                <li class="breadcrumb-item">الرئيسية</li>
          

                <li class="breadcrumb-item active" aria-current="page"><a href="#">'.$Project_Name.'</a></li>
              </ol>
            </nav>
          </div>
        </section>
        <section class="pb-4">
          <div class="container">
            <div class="card px-3">
              <div class="d-flex align-items-center">

                <div class="image">
                  <img src="/SIH/assets/img/logo-details.png" class="rounded" width="120" >
                </div>

                <div class="ml-3 w-100">
                    
                  <div class="card-body justify-content-start">
                    <h4 class="card-title">'.$Project_Name.'</h4>
                    <div class="d-flex flex-row justify-content-between">
                      <p class="card-text text-secondary">
                        <i class="fa-regular fa-location-dot fa-fw me-1"></i>'.$Project_Location.'
                      </p>
                      <div>
                        <!--<button type="button" class="btn btn-primary"> انا مهتم </button>
                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="#000000">اضافة الى المفضلة</button>-->
                        <button type="button" class="btn btn-primary" onclick="addToDatabase('.$Project_ID.');" data-mdb-ripple-color="#000000">'.$nameButton.'</button>

                      </div>


                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-start">
                      <p class="card-text text-dark me-5">
                        <i class="fa-regular fa-circle-dollar fa-fw me-1 text-secondary"></i> الهدف: <span class="text-secondary">'.$Project_Target_Value.' دولار
                        </span>
                      </p>
                      <p class="card-text text-dark">
                        الحد الأدنى: <span class="text-secondary">'.$Project_Minimum_Value.' دولار
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section:  cards-->
        <section class="pb-4">
          <div class="container">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title fw-bold">التفاصيل</h5>
                <p class="card-text text-secondary">
                '.$Project_Details.'
                </p>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content for expand ariea set aria-expanded="true" 
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
-->
        <!--
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
        </section>-->
        <!--Section: Content-->    
        <!--
        <section class="pb-4">
          <div class="container-fluid">
            <h5 class="fw-bold">الفريق</h5>
            <div class="row row-cols-3 g-3">
              <div class="col">
                <div class="card px-3">
                  <div class="d-flex align-items-center">

                    <div class="image">
                      <img src="/SIH/assets/img/avatar-female-details-1.png" class="rounded" width="100" >
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
                      <img src="/SIH/assets/img/avatar-female-details-2.png" class="rounded" width="100" >
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
                      <img src="/SIH/assets/img/avatar-male-details-1.png" class="rounded" width="100" >
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
        </section>-->

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
            $_SESSION['error'] =  'No records found.';  
            if($_SESSION["User_Type_ID"] == "1") {
              echo "<script>window.location.replace('./home.php');</script>";

            }else
            if($_SESSION["User_Type_ID"] == "2") {
              echo "<script>window.location.replace('./projects.php');</script>";
            }

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