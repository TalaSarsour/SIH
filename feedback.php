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
  <div class="container-fluid">
    <!--Section: Content-->
    <section class="text-center">
      <div class="container-fluid">
        <h1 class="mb-5"><strong>ما يقوله عملاؤنا عن تجربتهم معنا</strong></h1>
        <div class="row mb-4" style="padding-left:169px; padding-right: 157px;">
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
            $Users_Feedback_User_ID ASC";
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
                /*
                echo '
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-start h-100">
                  <div class="card-body">
                    <p class="card-text text-secondary">
                      '.$text.'
                    </p>
                  </div>
                  <div class="card-footer" style="display: inline-block;">
                    <img src="'.$path.'" class="img-fluid me-3" style="width: 50px; height: 50px;"/>
                    
                    <span class="text-dark">
                    '.$full_name.' 
                    </span>

                    <span class="badge badge-light ms-1 mb-4">'.$Investor_Type.'</span>

                  </div>
                </div>
              </div>';*/
              echo '
              <div class="row mb-4">

              <div class="col-lg-12 col-md-6 mb-4">
              <div class="card text-start h-100 w-100">
                <div class="card-body">
                  <div class="card-header mb-3 w-100" style="display: inline-block;">
                    <img src="'.$path.'" class="img-fluid me-3" style="width: 80px; height: 80px;"/>
                    
                    <span class="text-dark">
                    '.$full_name.' 
                    </span>

                    <span class="badge badge-light ms-1 mb-4">'.$Investor_Type.'</span>

                  </div>
                  <p class="card-text text-secondary">
                    '.$text.'
                  </p>
                </div>

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