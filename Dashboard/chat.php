<!DOCTYPE html>
<?php
//session_start();
$title = "الدردشة";

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
    <section class="container mt-5 pb-5">
      <div class="container-fluid">
        <!--Section:  cards-->
        <section style="background-color: #F9FAFB;">

          <div class="row">
            <div class="col-md-12">

              <div class="card" id="chat3" style="border-radius: 15px;">
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0 border-end">
                    <h4>الرسائل</h4>
                      <div class="p-3 border-top">
                        <div class="input-group rounded mb-3">
                          <input type="search" class="form-control rounded text-bg-light border-0" style="font-family: FontAwesome;" placeholder="&#xf002; البحث" aria-label="Search"
                            aria-describedby="search-addon" />
                            <!--
                          <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                          </span>-->
                        </div>

                        <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                          <ul class="list-unstyled mb-0">
                            <?php 
                                $SqlShowAllUsers = "SELECT
                                    *
                                FROM
                                    users
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
                                INNER JOIN messages AS sent_messages ON users.User_ID = sent_messages.sender_id

                                WHERE
                                    (users.User_Type_ID = 1 OR users.User_Type_ID = 2)
                                    AND users.User_Status_ID = 1";

                                $Show_All_Users_Query = mysqli_query($conn, $SqlShowAllUsers);
                                if(mysqli_num_rows($Show_All_Users_Query) > 0){
                                    while($row = mysqli_fetch_array($Show_All_Users_Query)) {
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
                                        $message = $row['message'];


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
                                        $location2="location.href='./chat.php?user_id=".$User_ID."&user_type_id=".$User_Type_ID."'";

                                        echo ' 
                                            <li class="p-2 border-bottom">
                                              <a href="onclick="'.$location2.'" class="d-flex justify-content-between">
                                                <div class="d-flex flex-row">
                                                  <div>
                                                    <img
                                                      src="'.$User_Profile_Picture_Path.'"
                                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                                    <span class="badge bg-success badge-dot"></span>
                                                  </div>
                                                  <div class="pt-1">
                                                    <p class="fw-bold mb-0">'.$User_Full_Name.'</p>
                                                    <p class="small text-muted">'.$message.'</p>
                                                  </div>
                                                </div>
                                                <div class="pt-1">
                                                <p class="small text-muted mb-1">12m</p>
                                                  <span class="badge bg-danger rounded-pill float-end">3</span>
                                                </div>
                                              </a>
                                            </li>

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
                            <!--

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/abeer.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-success badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">عبير ماجد بن عبد العزيز</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                  <span class="badge bg-danger rounded-pill float-end">3</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Mohamed.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-warning badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">محمد حمدال سويدان</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                  <span class="badge bg-danger rounded-pill float-end">2</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Ali.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-success badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">علي احمد</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                <span class="badge bg-danger rounded-pill float-end">8</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Kolood.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-danger badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">خلود ثروت التلهوني</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                <span class="badge bg-danger rounded-pill float-end">1</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Ayd.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-warning badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">عايض الاثلي الشهري</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                <span class="badge bg-danger rounded-pill float-end">6</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Maha.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-warning badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">مها احمد ضياء الدين</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                <span class="badge bg-danger rounded-pill float-end">2</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Mousa.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-warning badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">موسى ال كردم القحطاني</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                <span class="badge bg-danger rounded-pill float-end">7</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Ahed.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-warning badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">عهد بنت محمد خليل</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                <p class="small text-muted mb-1">12m</p>
                                <span class="badge bg-danger rounded-pill float-end">9</span>
                                </div>
                              </a>
                            </li>

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="/SIH/assets/img/Nadia.svg"
                                      alt="avatar" class="d-flex align-self-center me-3" width="60">
                                    <span class="badge bg-warning badge-dot"></span>
                                  </div>
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">نادية عبد القادر جلولي</p>
                                    <p class="small text-muted">مرحبا</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">12m</p>
                                  <span class="badge bg-danger rounded-pill float-end">1</span>
                                </div>
                              </a>
                            </li>-->

                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-8">
                      <!--<div class="d-flex flex-row justify-content-between">
                        <h4>علي احمد</h4>
                        <div>
                          <!--<button type="button" class="btn btn-primary btn-sm"> <i class="fa-regular fa-video"></i></button>
                          <button type="button" class="btn btn-primary btn-sm"> <i class="fa-regular fa-phone"></i> </button>- ->
                        </div>
                    </div>
                      <div class="pt-3 pe-3 border-top" data-mdb-perfect-scrollbar="true"
                        style="position: relative; height: 100%">-->
      <!--

                        <div class="d-flex flex-row justify-content-start">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                            alt="avatar 1" style="width: 45px; height: 100%;">
                          <div>
                            <p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">السلام عليكم</p>
                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                          <div>
                            <p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;">وعليكم السلام</p>
                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                          </div>
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>
      -->
      <?php
$user1_id = $_SESSION['User_ID']; //for sender
if(isset($_GET['user_type_id'])){
  $Chat_User_Type_ID = $_GET['user_type_id'];
}

$user2_id = $Chat_User_Type_ID; //$_SESSION['User_ID']; for reciever

$sql = "SELECT
            messages.id,
            messages.sender_id,
            messages.receiver_id,
            messages.message,
            messages.timestamp,
            users.User_Full_Name
        FROM
            messages
        INNER JOIN users ON messages.receiver_id = users.User_ID
        WHERE
            (messages.sender_id = $user1_id AND messages.receiver_id = $user2_id)
            OR (messages.sender_id = $user2_id AND messages.receiver_id = $user1_id)
        ORDER BY
            messages.timestamp ASC"; // Change to DESC if you want the latest messages first

$sql2 = "SELECT
            messages.id,
            messages.sender_id,
            messages.receiver_id,
            messages.message,
            messages.timestamp,
            users.User_Full_Name
        FROM
            messages
        INNER JOIN users ON messages.receiver_id = users.User_ID
        WHERE
           messages.sender_id = $user1_id AND messages.receiver_id = $user2_id
        ORDER BY
            messages.timestamp ASC"; // Change to DESC if you want the latest messages first

// Execute the query
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

// Check if any results were returned
if ($result && mysqli_num_rows($result) > 0) {
    // Initialize $receiver_name variable
    $receiver_name = '';

    // Fetch the first row to get the receiver's name
    if ($result2 && mysqli_num_rows($result2) > 0) {

    if ($row2 = mysqli_fetch_assoc($result2)) {
        $receiver_name = $row2['User_Full_Name'];
        //echo '<script>alert("user : '.$receiver_name .'")</script>';

    }
    /*echo '<script>alert("user : '.$_SESSION['User_ID'] .'")</script>';
    //echo '<script>alert("user : '.$receiver_name .'")</script>';*/

    echo '<div class="d-flex flex-row justify-content-between">
              <h4>'.$receiver_name.'</h4>
              <div>
                <!--<button type="button" class="btn btn-primary btn-sm"> <i class="fa-regular fa-video"></i></button>
                <button type="button" class="btn btn-primary btn-sm"> <i class="fa-regular fa-phone"></i> </button>-->
              </div>
          </div>
          <div class="pt-3 pe-3 border-top" data-mdb-perfect-scrollbar="true"
              style="position: relative; height: 100%;">';
    }

    // Reset the data pointer to iterate over the messages again
    mysqli_data_seek($result, 0);

    // Loop through the messages
    while ($row = mysqli_fetch_assoc($result)) {
        $sender_id = $row['sender_id'];
        $receiver_id = $row['receiver_id'];
        $message = $row['message'];
        $timestamp = $row['timestamp'];
        $date = new DateTime($timestamp);
        $formatted_date = $date->format('d M Y, H:i | A'); // e.g., 02 Jul 2023, 03:45 PM

        // Determine the message alignment and display logic based on sender and receiver
        if ($sender_id == $user1_id && $receiver_id == $user2_id) {
            // User1 sent a message to User2
            echo '<div class="d-flex flex-row justify-content-start">';
            echo '<div>';
            echo '<p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">'.$message.'</p>';
            echo '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">'.$formatted_date.'</p>';
            echo '</div>';
            echo '</div>';
        } elseif ($sender_id == $user2_id && $receiver_id == $user1_id) {
            // User2 sent a message to User1
            echo '<div class="d-flex flex-row justify-content-end">';
            echo '<div>';
            echo '<p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;">'.$message.'</p>';
            echo '<p class="small me-3 mb-3 rounded-3 text-muted">'.$formatted_date.'</p>';
            echo '</div>';
            echo '</div>';
        }
    }

    echo "</div>"; // Close message-container
} else {
    echo "No messages found between user $user1_id and user $user2_id.";
}

// Close the result set and the database connection
mysqli_free_result($result);
mysqli_close($conn);
?>



                      <!--
                        <div class="d-flex flex-row justify-content-start">
                          <div>
                            <p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">السلام عليكم</p>
                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                          <div>
                            <p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;">وعليكم السلام</p>
                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                      <div class="d-flex flex-row justify-content-start">
                          <div>
                            <p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">السلام عليكم</p>
                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                          </div>
                        </div>
                  
                      <div class="d-flex flex-row justify-content-end">
                          <div>
                            <p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;">وعليكم السلام</p>
                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
        
                        <div class="d-flex flex-row justify-content-start">
                          <div>
                            <p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">السلام عليكم</p>
                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                          <div>
                            <p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;">وعليكم السلام</p>
                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                        <div class="d-flex flex-row justify-content-start">
                          <div>
                            <p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">السلام عليكم</p>
                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                          <div>
                            <p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;">وعليكم السلام</p>
                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>

                        <div class="d-flex flex-row justify-content-start">
                          <div>
                            <p class="small p-2 ms-3 mb-1 text-white rounded-3" style="background-color: #3E84A8;">السلام عليكم</p>
                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                          </div>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-end">
                          <div>
                            <p class="small p-2 me-3 mb-1 text-white rounded-3 " style="background-color: #878B93;" >وعليكم السلام</p>
                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>-->
                                                <!--
                        <div>
                            <textarea id="tiny"></textarea>
                          </div>-->
                        <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3">
                          <!--
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                            alt="avatar 3" style="width: 40px; height: 100%;">-->
                            <div class="input-group mb-3">
                              <button class="btn btn-outline-secondary text-bg-light" type="button" id="button-addon2"><i class="fa-regular fa-face-grin"></i></button>
                              <input type="text" class="form-control form-control-lg text-bg-light" id="exampleFormControlInput22"
                                placeholder="اكتب الرسالة">
                                <button class="btn btn-outline-secondary text-bg-light" type="button" id="button-addon2"><i class="fa-regular fa-paperclip-vertical"></i></button>
                                <button class="btn btn-outline-secondary text-bg-light" type="button" id="button-addon2"><span class="material-symbols-outlined small">
                                  linked_camera
                                  </span></button>
                                <!--
                                  <div id="picker">

                                  </div>-->
                            </div>
                            <button type="button" class="btn btn-primary btn-rounded rounded-circle px-3 py-3 ms-3 mb-3"> <i class="fa-solid fa-paper-plane-top fa-rotate-180"></i></button>
                            <!--
                          <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                          <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                          <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>-->
                        </div>
                      </div>



                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

        </section>
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