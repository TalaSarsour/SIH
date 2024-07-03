
<?php
include_once "../assets/Common/connection.inc.php";

if (isset($_POST['search'])) {
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
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
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
                  $location="location.href='./view_profile.php?view_user_id=".$User_ID."'";

            echo ' 
            <div class="col-lg-4 col-md-12  pt-4">
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
                <button type="button" class="btn btn-primary" data-mdb-ripple-init onclick="'.$User_About_Me.'">مراسلة</button>
                <!--<button type="button" class="btn btn-danger" data-mdb-ripple-init onclick="deleteFromDatabase('.$User_ID.');">حذف من المفضلة</button>-->
                </div>
              </div>
            </div>
            </form>

          </div>

            ';        }

    } else {
        echo "<p>No results found</p>";
    }

    $conn->close();
}
?>
