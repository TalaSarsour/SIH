<!DOCTYPE html>
<?php
//session_start();
$title = "رواد الاعمال";

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
  if($_SESSION["User_Type_ID"] == "2"){
    $nameButton = "اضافة الى المفضلة";
    //echo "<script>window.location.replace('projects.php');</script>";
  }
  ?>
  <!--Main layout-->
  <main>
<?php
/* echo '
    <!-- Section: Main Search -->
    <section class="container mt-5 pt-5 ps-4">
      
      <div class="row justify-content-between">
        <div class="col-md-3">
        <form method="post">
          <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
              <input id="search-focus" type="search" id="search"  class="form-control" />

              <label class="form-label" for="search">
                <span class="input-group-text border-0 pb-3 text-secondary"> <i class="fas fa-search me-2" id="mdb-5-search-icon" >  </i>بحث</span>

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
        </form>';?>
        <!--<div id="result"></div>-->
        <script>
          /*
        $(document).ready(function(){
            $("#search").on("keyup", function() {
                var search = $(this).val();
                if (search.length > 0) {
                    $.ajax({
                        url: '',
                        method: 'POST',
                        data: {search: search},
                        success: function(data) {
                            $("#result").html(data);
                        }
                    });
                } else {
                    $("#result").html('');
                }
            });
        });* /
    </script>
        </div>
        <!--
        <div class="col-md-2">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-outline-link text-secondary" data-mdb-ripple-color="#000000"><i class="fa-light fa-filter"></i> تنقية</button>
          </div>
        </div>-->
      </div>
    </section>';  ?>
    <?php /*
    <div class="container-fluid pt-4 ps-4" style="padding-left: 130px;">
*/
    ?>

    <div class="container-fluid mt-5 pt-5 ps-4" style="padding-left: 130px;">
      <!--Section:  cards-->
      <section>
        <h4 class="text-dark fw-bold">جميع رواد الاعمال</h4>
        <div class="row row-cols-3 mb-4">

        <?php

        /*if (isset($_POST['search'])) {
          $search = $_POST['search'];
          echo '<script>alert("search : '.$search .'")</script>';

          $SqlShowAllInvestors = "SELECT * FROM users 
            INNER JOIN users_information ON users.User_ID = users_information.User_ID 
            INNER JOIN user_gender ON users_information.User_Gender_ID = user_gender.Gender_ID 
            INNER JOIN countries ON users_information.User_Country_ID = countries.id 
            INNER JOIN states ON users_information.User_City_ID = states.id 
            INNER JOIN areas_of_experience ON users_information.User_Areas_Of_Experience_ID = areas_of_experience.Areas_Of_Experience_ID 
            INNER JOIN experience_level ON users_information.User_Experience_Level_ID = experience_level.Experience_Level_ID 
            INNER JOIN growth_strategy ON users_information.User_Growth_Strategy_ID = growth_strategy.Growth_Strategy_ID 
            INNER JOIN investor_type ON users_information.User_Investor_Type_IDs = investor_type.Investor_Type_ID 
            INNER JOIN investment_range ON users_information.User_Investment_Range_ID = investment_range.Investment_Range_ID 
            INNER JOIN stages_of_business_operations ON users_information.User_Stages_Of_Business_Operations_IDs = stages_of_business_operations.Stages_Of_Business_Operations_ID 
            INNER JOIN teams ON users_information.User_Team_ID = teams.Team_ID 
              
            WHERE users.User_Type_ID = 2 AND users.User_Status_ID = 1 AND User_Full_Name LIKE '%$search%'";
        }else*/ if($_SESSION["User_Type_ID"] == "1") {
          $SqlShowAllInvestors = "SELECT * FROM users 
          INNER JOIN users_information ON users.User_ID = users_information.User_ID 
          INNER JOIN user_gender ON users_information.User_Gender_ID = user_gender.Gender_ID 
          INNER JOIN countries ON users_information.User_Country_ID = countries.id 
          INNER JOIN states ON users_information.User_City_ID = states.id 
          INNER JOIN areas_of_experience ON users_information.User_Areas_Of_Experience_ID = areas_of_experience.Areas_Of_Experience_ID 
          INNER JOIN experience_level ON users_information.User_Experience_Level_ID = experience_level.Experience_Level_ID 
          INNER JOIN growth_strategy ON users_information.User_Growth_Strategy_ID = growth_strategy.Growth_Strategy_ID 
          INNER JOIN investor_type ON users_information.User_Investor_Type_IDs = investor_type.Investor_Type_ID 
          INNER JOIN investment_range ON users_information.User_Investment_Range_ID = investment_range.Investment_Range_ID 
          INNER JOIN stages_of_business_operations ON users_information.User_Stages_Of_Business_Operations_IDs = stages_of_business_operations.Stages_Of_Business_Operations_ID 
          INNER JOIN teams ON users_information.User_Team_ID = teams.Team_ID 
        
          WHERE users.User_Type_ID = 2 AND users.User_Status_ID = 1";
        }elseif($_SESSION["User_Type_ID"] == "2") {
          $SqlShowAllInvestors = "SELECT * FROM users 
          INNER JOIN users_information ON users.User_ID = users_information.User_ID 
          INNER JOIN user_gender ON users_information.User_Gender_ID = user_gender.Gender_ID 
          INNER JOIN countries ON users_information.User_Country_ID = countries.id 
          INNER JOIN states ON users_information.User_City_ID = states.id 
          INNER JOIN areas_of_experience ON users_information.User_Areas_Of_Experience_ID = areas_of_experience.Areas_Of_Experience_ID 
          INNER JOIN experience_level ON users_information.User_Experience_Level_ID = experience_level.Experience_Level_ID 
          INNER JOIN growth_strategy ON users_information.User_Growth_Strategy_ID = growth_strategy.Growth_Strategy_ID 
          INNER JOIN investor_type ON users_information.User_Investor_Type_IDs = investor_type.Investor_Type_ID 
          INNER JOIN investment_range ON users_information.User_Investment_Range_ID = investment_range.Investment_Range_ID 
          INNER JOIN stages_of_business_operations ON users_information.User_Stages_Of_Business_Operations_IDs = stages_of_business_operations.Stages_Of_Business_Operations_ID 
          INNER JOIN teams ON users_information.User_Team_ID = teams.Team_ID 
        
          WHERE users.User_Type_ID = 2 AND users.User_Status_ID = 1 AND users.User_ID != $User_ID";
        }
          $Show_All_Investors_Query = mysqli_query($conn, $SqlShowAllInvestors);
          if(mysqli_num_rows($Show_All_Investors_Query) > 0){
              while($row = mysqli_fetch_array($Show_All_Investors_Query)) {
                  $User_ID = $row['User_ID'];
                  $User_Full_Name = $row['User_Full_Name'];
                  //$User_Email_Address = $row['User_Email_Address'];    
                  $User_Password = $row['User_Password'];
                  $User_Type_ID = $row['User_Type_ID'];
                  $User_Status_ID = $row['User_Status_ID'];
                  $User_Profile_Picture_Path = $row['User_Profile_Picture_Path'];
                  $User_About_Me = $row['User_About_Me'];
                  $User_Phone_Number = $row['User_Phone_Number'];
                  $Gender_ID = $row['Gender_ID'];
                  $Gender_Name = $row['Gender_Name'];
                  $Experience_Level_Name = $row['Experience_Level_Name'];
                  $Areas_Of_Experience_Name = $row['Areas_Of_Experience_Name'];
                  $Investment_Range_Name = $row['Investment_Range_Name'];
                  $Investor_Type_Name = $row['Investor_Type_Name'];
                  $User_Investor_Type_IDs = $row['User_Investor_Type_IDs'];
                  $Growth_Strategy_Name = $row['Growth_Strategy_Name'];
                  //$Stages_Of_Business_Operations_Name = $row['Stages_Of_Business_Operations_Name'];
                  $User_Stages_Of_Business_Operations_IDs = $row['User_Stages_Of_Business_Operations_IDs'];
                  $User_LinkedIn_ID = $row['User_LinkedIn_ID'];
                  $User_Facebook_ID = $row['User_Facebook_ID'];
                  $Country_Name_Native = $row['native'];
                  $City_Name_Native = $row['name_ar'];
                  $User_Location = $row['User_Location'];
                  $User_Industrial_Sectors_IDs = $row['User_Industrial_Sectors_IDs'];
                  $User_Language_IDs = $row['User_Language_IDs'];
                  $User_Years_Of_Experience = $row['User_Years_Of_Experience'];
        
                  /*$Industrial_Sectors_ids = [$User_Industrial_Sectors_IDs];
                  $Industrial_Sectors_id_list = implode(',', $Industrial_Sectors_ids); // Convert array to a comma-separated string
                  $sql_industrial_sectors = "SELECT * FROM industrial_sectors WHERE Industrial_Sectors_ID IN ($Industrial_Sectors_id_list)";*/
                  $sql_industrial_sectors = "SELECT * FROM industrial_sectors WHERE Industrial_Sectors_ID IN ($User_Industrial_Sectors_IDs)";
                  $industrial_sectors_Query = mysqli_query($conn, $sql_industrial_sectors);
        
                  /*$Language_ids = [$User_Language_IDs];
                  $Language_ids_list = implode(',', $Language_ids); // Convert array to a comma-separated string
                  $sql_Languages = "SELECT * FROM languages WHERE id IN ($Language_ids_list)";*/
                  $sql_Languages = "SELECT * FROM languages WHERE id IN ($User_Language_IDs)";
                  $Language_IDs_Query = mysqli_query($conn, $sql_Languages);
        
                  $SqlCheckLocation = "SELECT * FROM countries WHERE id LIKE '$User_Location'";
                  $User_Location_Query = mysqli_query($conn, $SqlCheckLocation);
                  if(mysqli_num_rows($User_Location_Query) > 0){
                    while($row = mysqli_fetch_array($User_Location_Query)) {
                      $User_Location_Native = $row['native'];
                    }
                  }
        
                  $sql_User_Stages_Of_Business_Operations_IDs = "SELECT * FROM stages_of_business_operations WHERE Stages_Of_Business_Operations_ID IN ($User_Stages_Of_Business_Operations_IDs)";
                  $sql_User_Stages_Of_Business_Operations_IDs_Query = mysqli_query($conn, $sql_User_Stages_Of_Business_Operations_IDs);
        
                  $sql_User_Investor_Type_IDs = "SELECT * FROM investor_type WHERE Investor_Type_ID IN ($User_Investor_Type_IDs)";
                  $sql_User_Investor_Type_IDs_Query = mysqli_query($conn, $sql_User_Investor_Type_IDs);
        
                  // Set default profile picture if the specific one doesn't exist
                  if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $User_Profile_Picture_Path) || empty($User_Profile_Picture_Path)) {
                    if($Gender_ID == "1"){
                      $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Male_Avatar.png";
                      $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                    }elseif($Gender_ID == "2"){
                        $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Female_Avatar.png";
                        $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                    }
        
                  }
                  $location="location.href='./view_profile.php?view_user_id=".$User_ID."&view_user_type_id=".$User_Type_ID."'";
                  $location2="location.href='./chat.php?user_id=".$User_ID."&user_type_id=".$User_Type_ID."'";

                  echo ' 
                <div class="col-lg-4 col-md-12 pt-4">
                <form method="post">

                <div class="card h-100 text-center">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="'.$User_Profile_Picture_Path.'" class="img-fluid" style="height: 200px;" />
                  </div>
                
                  <div class="card-body text-start">
                    <p class="card-text">
                      الاسم: <span class="text-secondary">'.$User_Full_Name.'</span>
                    </p>
                    <p class="card-text">
                      نبذة عني: <span class="text-secondary">'.$User_About_Me.'</span>
                    </p>
                    <p class="card-text">
                      الجنس: <span class="text-secondary">'.$Gender_Name.'</span>
                    </p>
                    <p class="card-text">
                      الدولة: <span class="text-secondary">'.$Country_Name_Native.'</span>
                    </p>
                    <p class="card-text">
                      لينكدان: <span class="text-secondary">'.$User_LinkedIn_ID.'</span>
                    </p>     
                    <p class="card-text">
                      فيس بوك: <span class="text-secondary">'.$User_Facebook_ID.'</span>
                    </p>
                                            

                    <div class="text-center">

                    <button type="button" class="btn btn-primary" data-mdb-ripple-init onclick="'.$location.'">عرض المزيد</button>
                    <button type="button" class="btn btn-primary" data-mdb-ripple-init onclick="'.$location2.'">مراسلة</button>
                    <!--<button type="button" class="btn btn-danger" data-mdb-ripple-init onclick="deleteFromDatabase('.$User_ID.');">حذف من المفضلة</button>-->
                    </div>
                  </div>
                </div>
                </form>

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

        </div>
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
        </div>
      </section>-->
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