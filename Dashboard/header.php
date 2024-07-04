<?php
/*if (!isset($_SESSION['user_type'])) {
  header("location: ./index.php");
  exit;

}*/
  // Set default profile picture if the specific one doesn't exist
  /*if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $_SESSION['User_Profile_Picture_Path'] ) || empty($_SESSION['User_Profile_Picture_Path'] )) {
    //echo '<script>alert("path : '.$_SESSION['User_Profile_Picture_Path'] .'")</script>';

    if($_SESSION['User_Gender_ID'] == "1"){
      $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Male_Avatar.png";
      $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
    }elseif($_SESSION['User_Gender_ID'] == "2"){
      $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Female_Avatar.png";
      $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
    }
    // Refresh the current page
    echo "<script>window.location.replace('".$_SERVER['PHP_SELF']."');</script>";

    //header("Location: " . $_SERVER['PHP_SELF']);
    //exit;

  }*/

    //$users = "users";
  //$users_information = "users_information";
  $User_Email_Address = $_SESSION['User_Email_Address'];
  //$User_ID = "User_ID";
  //$User_Email = "User_Email";
  if(isset($_GET['view_user_id'])){
    //echo '<script>alert("view user id : '.$_GET['view_user_id'] .'")</script>';
    $View_User_ID = $_GET['view_user_id'];
    $View_User_Type_ID = $_GET['view_user_type_id'];

    if($View_User_ID >0){
      /*if($_SESSION['User_Type_ID'] == 1){
        if($_SESSION['User_Type_ID'] == 1){
          $type = 1;
        }else{
          $type = 2;
        }
      }elseif($_SESSION['User_Type_ID'] == 2){
        $type = 2;
      }*/
      $SqlCheckEmail = "SELECT * FROM users 
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
    
      WHERE users.User_ID LIKE '$View_User_ID' AND users.User_Type_ID LIKE $View_User_Type_ID AND users.User_Status_ID LIKE 1";
    }else{
      if($_SESSION['User_Type_ID'] == 1){
        $_SESSION['error'] = 'هذا الريادي غير موجود!.';
        echo "<script>window.location.replace('home.php');</script>";
        exit;
      }elseif($_SESSION['User_Type_ID'] == 2){
        $_SESSION['error'] = 'هذا المستثمر غير موجود!.';
        echo "<script>window.location.replace('projects.php');</script>";
        exit;
      }
    }

    }/*elseif (isset($_POST['search'])) {
      $search = $_POST['search'];
      $sql = "SELECT * FROM users 
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
    }*/
    else{
    $SqlCheckEmail = "SELECT * FROM users 
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
  
    WHERE users.User_Email LIKE '$User_Email_Address'";
  }

  $User_Email_Query = mysqli_query($conn, $SqlCheckEmail);
  if(mysqli_num_rows($User_Email_Query) > 0){
      while($row = mysqli_fetch_array($User_Email_Query)) {
          $User_ID = $row['User_ID'];
          $User_Full_Name = $row['User_Full_Name'];
          //$User_Email_Address = $row['User_Email_Address'];   
          $User_Email = $row['User_Email'];
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
      }
    }else{
      if($_SESSION['User_Type_ID'] == 1){
        $_SESSION['error'] = 'هذا الريادي غير موجود!.';
        echo "<script>window.location.replace('home.php');</script>";
        exit;
      }elseif($_SESSION['User_Type_ID'] == 2){
        $_SESSION['error'] = 'هذا المستثمر غير موجود!.';
        echo "<script>window.location.replace('projects.php');</script>";
        exit;
      }

    }
    
    //echo '<script>alert("path : '.$User_Profile_Picture_Path .'")</script>';
    //echo '<script>alert("gender : '.$Gender_ID .'")</script>';

    
?>
<!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mt-0">
        <!-- Brand -->
          <a href="#home" class="py-2 navbar-brand mx-3" data-mdb-ripple-init aria-current="true">
            <img src="/SIH/assets/img/logo-v2-1.svg"
            style="width: 120px; height: 70;" alt="logo">
          </a>

        <?php
            //echo $_SESSION['user_type'];
            
            /*if(isset($_SESSION["user_type"])) :
            if($_SESSION["user_type"] == "user1") : ?>*/
            if(isset($_SESSION["User_Type_ID"])) :
            if($_SESSION["User_Type_ID"] == "1") : ?>
              <a href="./home.php" class="list-group-item list-group-item-action py-2 mt-3 text-secondary" data-mdb-ripple-init>
                  <i class="fas fa-house fa-fw me-3"></i><span>الرئيسية</span>
              </a>
        <?php
            /*elseif($_SESSION["user_type"] == "user2") : ?>*/

            elseif($_SESSION["User_Type_ID"] == "2") : ?>
              <a href="./home.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                  <i class="fas fa-house fa-fw me-3"></i><span>الرئيسية</span>
              </a>
              <a href="./projects.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                  <i class="fas fa-briefcase fa-fw me-3"></i><span>مشاريعي</span>
              </a>
                
        <?php 
            endif; 
            endif; ?>
        

        <?php
            //echo $_SESSION['user_type'];
            
            /*if(isset($_SESSION["user_type"])) :
            if($_SESSION["user_type"] == "user1") : ?>*/
            if(isset($_SESSION["User_Type_ID"])) :
              if($_SESSION["User_Type_ID"] == "1") : ?>
                <a href="./favorite.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                    <i class="far fa-heart fa-fw me-3"></i><span>المفضلة</span>
                </a>
                <!--<a href="./Entrepreneurs.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                    <i class="fa-regular fa-circle-dollar fa-fw me-3"></i><span>رواد الاعمال</span>
                </a>-->
        <?php
            /*elseif($_SESSION["user_type"] == "user2") : ?>*/

              elseif($_SESSION["User_Type_ID"] == "2") : ?>
                <a href="./interested.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                    <i class="far fa-heart fa-fw me-3"></i><span>اهتمامتي</span>
                </a>
                <!--<a href="./Investors.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                    <i class="fa-regular fa-circle-dollar fa-fw me-3"></i><span>المستثمرين</span>
                </a>-->
        <?php 
            endif; 
            endif; ?>
          <a href="./Investors.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
            <i class="fa-regular fa-circle-dollar fa-fw me-3"></i><span>المستثمرين</span>
          </a>
          <a href="./Entrepreneurs.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
              <i class="fa-regular fa-circle-dollar fa-fw me-3"></i><span>رواد الاعمال</span>
          </a>
          <a href="./profile.php" class="list-group-item list-group-item-action py-2 text-secondary"  data-mdb-ripple-init><i
              class="far fa-user fa-fw me-3"></i><span>تحديث الملف الشخصي</span></a>
          <a href="./chat.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init><i 
              class="fa-light fa-message-dots me-3"></i><span>الدردشة</span>
          </a>
          <!--
          <a href="./sign-out.php" class="list-group-item list-group-item-action py-2 text-secondary sign-out" data-mdb-ripple-init><i
              class="fas fa-arrow-right-from-bracket fa-fw me-3"></i><span>تسجيل خروج</span></a>-->

         </div>

        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-circle-arrow-left"></i>
        </button>
        <!-- Brand -->
        <a class="navbar-brand text-dark fw-bold" href="#">
        <?php echo $title;?>
            <!--
          الرئيسية-->
        </a>


        <!-- Left links -->
        <ul class="navbar-nav ms-auto d-flex flex-row text-dark">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-2 me-lg-0 mt-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-dropdown-init aria-expanded="false">
              <i class="fas fa-bell fa-pull-left text-dark"></i>
              <?php 
              $count_notifaction = 0;
              if(isset($_SESSION['success']) || isset($_SESSION['error'])){
                $count_notifaction++;
              }

              if($count_notifaction > 0){
                echo '<span class="badge rounded-pill badge-notification bg-danger">'.$count_notifaction.'</span>';
              }?>
            </a>
            <ul class="dropdown-menu dropdown-menu-xxl-end" aria-labelledby="navbarDropdownMenuLink">
              <?php 
                if(isset($_SESSION['success'])){
                  echo'
                  <li>
                    <a class="dropdown-item text-success text-xxl-start" href="#"><i class="fas fa-check-circle me-3"></i>
                      '.$_SESSION['success'].'</a>
                  </li>';
                  //$count_notifaction +=1;
                  }
                  if(isset($_SESSION['error'])){
                  echo'
                  <li>
                    <a class="dropdown-item" href="#"><i class="fas fa-check-circle me-3"></i>
                      '.$_SESSION['error'].'</a>
                  </li>';
                  //$count_notifaction +=1;

                  }
              ?>
              <!--<li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>-->
            </ul>
          </li>

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center text-dark" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-dropdown-init aria-expanded="false">
              <img src="<?php echo $_SESSION['User_Profile_Picture_Path'] ;?>" class="rounded-circle" width="50" height="50"
              alt="" loading="lazy" />

                <!--<img src="/SIH/assets/img/avatar-female-2.svg" class="rounded-circle" height="40"
                alt="" loading="lazy" />-->
                
                <!--<span class="dropdown-toggle mx-2">علا ابو خضر</span>-->
                <div class="h-100 d-flex flex-column justify-content-center align-items-center mt-2">

                  <span class="dropdown-toggle mx-2"><?php echo $_SESSION['User_Full_Name'];?></span>
                  <span class="badge badge-light mx-2"><?php echo $_SESSION['User_Type_Name']; ?></span>

                </div>
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="./profile.php">تحديث الملف الشخصي</a></li>
              <li><a class="dropdown-item" href="#">اعدادات الحساب</a></li>
              <li><a class="dropdown-item" href="./sign-out.php">تسجيل الخروج</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->