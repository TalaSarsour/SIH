<?php
include_once "./assets/Common/connection.inc.php";

if(isset($_POST['Signup-2-Submit'])){
    $Gender = $_POST['Gender'];
    $Phone_Number = $_POST['Phone_Number'];
    $SelectCountry = $_POST['SelectCountry'];
    $SelectCity = $_POST['SelectCity'];
    $AboutMe = $_POST['AboutMe'];
    $LinkedIn = $_POST['LinkedIn'];
    $Facebook = $_POST['Facebook'];
    $SelectAreasOfExp = $_POST['SelectAreasOfExp'];
    $ExpYears = $_POST['ExpYears'];
    $SelectLocation = $_POST['SelectLocation'];
    $SelectInvestmentRange = $_POST['SelectInvestmentRange'];
    /*$checkboxvar2 = $_POST['checkboxvar2'];
    $checkboxvar3 = $_POST['checkboxvar3'];
    $checkboxvar4 = $_POST['checkboxvar4'];*/
    $checkboxvar2 = print_r($_POST['checkboxvar2']); 
    $checkboxvar3 = print_r($_POST['checkboxvar3']); 
    $checkboxvar4 = print_r($_POST['checkboxvar4']); 
    /*
    $checkboxvar = "1";
    $checkboxvar2 = "1";
    $checkboxvar3 = "1";
    $checkboxvar4 = "1";*/
    /*echo '<script>
    alert("SelectInvestmentRange:'.$SelectInvestmentRange.'");
    </script>';*/
    if($Gender == "1"){
        $Profile_Picture_Path = "./assets/img/Profile_Pictures/Avatars/Male_Avatar.png";
    }elseif($Gender == "2"){
        $Profile_Picture_Path = "./assets/img/Profile_Pictures/Avatars/Female_Avatar.png";
    }

    if($_SESSION['user_type']=="user1"){
        //$checkboxvar = $_POST['checkboxvar'];
        $checkboxvar = print_r($_POST['checkboxvar']); 
        //$checkboxvar = "1";
        $SelectGrowthStrategy = "0";
        $SelectExperienceLevel = "0";
        /*echo '<script>
        alert("checkboxvar:'.$checkboxvar.'");
        </script>';
        echo '<script>
        alert("User Type: 1");
        </script>';*/
    }elseif($_SESSION['user_type']=="user2"){
        $checkboxvar = "0";
        $SelectGrowthStrategy = $_POST['SelectGrowthStrategy'];
        $SelectExperienceLevel = $_POST['SelectExperienceLevel'];
        /*echo '<script>
        alert("User Type: 2");
        </script>';*/
    }else{
        echo '<script>
        alert("User Type Session is not exist.");
        </script>';
    }
    $Team_ID = "1";
    //echo "Password: ".$Password;
    //echo "RepeatPassword: ".$RepeatPassword;

    $users = "users";
    $users_information = "users_information";
    $User_ID = "User_ID";
    $User_Email = "User_Email";
    $User_Gender_ID  = "User_Gender_ID";
    $User_Phone_Number = "User_Phone_Number";
    $User_Country_ID = "User_Country_ID";
    $User_City_ID = "User_City_ID";
    $User_About_Me = "User_About_Me";
    $User_LinkedIn_ID = "User_LinkedIn_ID";
    $User_Facebook_ID = "User_Facebook_ID";
    $User_Areas_Of_Experience_ID = "User_Areas_Of_Experience_ID";
    $User_Years_Of_Experience = "User_Years_Of_Experience";
    $User_Investment_Range_ID = "User_Investment_Range_ID";
    $User_Location = "User_Location";
    $User_Stages_Of_Business_Operations_IDs  = "User_Stages_Of_Business_Operations_IDs";
    $User_Industrial_Sectors_IDs = "User_Industrial_Sectors_IDs";
    $User_Language_IDs = "User_Language_IDs";
    $User_Investor_Type_IDs = "User_Investor_Type_IDs";
    $User_Experience_Level_ID = "User_Experience_Level_ID";
    $User_Growth_Strategy_ID = "User_Growth_Strategy_ID";
    $User_Team_ID = "User_Team_ID ";
    $User_Profile_Picture_Path = "User_Profile_Picture_Path";
    if(isset($_SESSION['Email_Address'])){
        $Email_Address = $_SESSION['Email_Address'];
    }
    //$User_Type = $_SESSION['user_type'];
    if($_SESSION['user_type'] == "user1"){
        $User_Type = "1";
    }elseif($_SESSION['user_type'] == "user2"){
        $User_Type = "2";
    }
    if($conn){

        // Write the SQL query
        $sqlSelectUsers = "SELECT * FROM $users WHERE $User_Email LIKE '$Email_Address' ORDER BY $User_ID ASC";
        $resultSelectUsers = mysqli_query($conn, $sqlSelectUsers);

        // Check query execution
        if (mysqli_num_rows($resultSelectUsers) > 0) {
        // echo "<select>";

        // Loop through each row in the result
        while($row1 = mysqli_fetch_assoc($resultSelectUsers)) {
            $ID = $row1[$User_ID];
            $EMAIL = $row1[$User_Email];
            
            // Display option element with value and text
            //echo "<option value='$value'>$text</option>";
        }

        //echo "</select>";
        } else {
        echo "No records found";
        }
                // Write the SQL query
        $sqlSelectUsers = "SELECT * FROM $users WHERE $User_Email LIKE '$Email_Address' ORDER BY $User_ID ASC";
        $resultSelectUsers = mysqli_query($conn, $sqlSelectUsers);

        // Check query execution
        if (mysqli_num_rows($resultSelectUsers) > 0) {
        // echo "<select>";

        // Loop through each row in the result
        while($row1 = mysqli_fetch_assoc($resultSelectUsers)) {
            $ID = $row1[$User_ID];
            $EMAIL = $row1[$User_Email];
            
            // Display option element with value and text
            //echo "<option value='$value'>$text</option>";
        }

        //echo "</select>";
        } else {
        echo "No records found";
        }

        // Write the SQL query
        $sqlSelectUsersInformation = "SELECT * FROM $users_information WHERE $User_ID LIKE $ID ORDER BY $User_ID ASC";
        $resultSelectUsersInformation = mysqli_query($conn, $sqlSelectUsersInformation);

        // Check query execution
        if (mysqli_num_rows($resultSelectUsersInformation) > 0) {
        // echo "<select>";
        $_SESSION['error'] = 'Failed to continue register your account data inserted previously.';
        header('location: ./signup-2.php');
        exit;

        //echo "</select>";
        } else {
        // Write the SQL query
        $sql = "INSERT IGNORE INTO $users_information ($User_ID, $User_Gender_ID, $User_Phone_Number, $User_Country_ID, $User_City_ID, $User_About_Me, $User_LinkedIn_ID, $User_Facebook_ID, $User_Areas_Of_Experience_ID, $User_Years_Of_Experience, $User_Investment_Range_ID, $User_Location, $User_Stages_Of_Business_Operations_IDs, $User_Industrial_Sectors_IDs, $User_Language_IDs, $User_Investor_Type_IDs, $User_Experience_Level_ID, $User_Growth_Strategy_ID, $User_Team_ID, $User_Profile_Picture_Path) VALUES ('" . $ID . "', '" . $Gender . "', '" . $Phone_Number . "', '" . $SelectCountry . "', '" . $SelectCity . "', '" . $AboutMe . "', '" . $LinkedIn . "', '" . $Facebook . "', '" . $SelectAreasOfExp . "', '" . $ExpYears . "', '" . $SelectInvestmentRange . "', '" . $SelectLocation . "', '" . $checkboxvar . "', '" . $checkboxvar2 . "', '" . $checkboxvar3 . "', '" . $checkboxvar4 . "', '" . $SelectExperienceLevel . "', '" . $SelectGrowthStrategy . "', '" . $Team_ID . "', '" . $Profile_Picture_Path . "')";
         
         /*$sql = "INSERT INTO $users_information ($User_Gender_ID, $User_Phone_Number, $User_Country_ID, $User_City_ID, $User_About_Me, $User_LinkedIn_ID, $User_Facebook_ID,
         $User_Areas_Of_Experience_ID, $User_Years_Of_Experience, $User_Investment_Range_ID, $User_Location, $User_Stages_Of_Business_Operations_IDs, $User_Industrial_Sectors_IDs, $User_Language_IDs
         $User_Investor_Type_IDs, $User_Experience_Level_ID, $User_Growth_Strategy_ID,/* $User_Team_ID,* / $User_Profile_Picture_Path)
         VALUES ('" . $Gender . "', '" . $Phone_Number . "', '" . $SelectCountry . "', '" . $SelectCity . "', '" . $AboutMe . "', '" . $LinkedIn . "', '" . $Facebook . "', '" . $SelectAreasOfExp .
          "', '" . $ExpYears . "', '" . $SelectInvestmentRange . "', '" . $SelectLocation . "', '" . $checkboxvar . "', '" . $checkboxvar2 . "', '" . $checkboxvar3 . "', '" . $checkboxvar4 . "', '" . $SelectExperienceLevel . 
          "', '" . $SelectGrowthStrategy . /*"', '" . $Team_ID . * /"', '" . $Profile_Picture_Path . "')";*/

        $result = mysqli_query($conn, $sql);
        // Check query execution
        if ($result) {
            echo '<script>alert("You are registered successfully. and your account was activated successfully You are being redirected to the Login page.");</script>';
            echo "<script>window.location.replace('./login.php');</script>";
            //header('location: ./login.php');
            //exit;
            /*echo '<script>
            alert("The account has been created successfully. A message confirming your account has been sent to your email. Please check your email!.");
            </script>';*/
            //echo "Data inserted successfully!";
        } else {
            //echo "Error inserting data: " . mysqli_error($conn);
            /*echo '<script>
            alert("Error inserting data: '.mysqli_error($conn).'");
            </script>';*/
            $_SESSION['error'] = 'Failed to register you account.';
            /*echo '<script>
            alert("checkboxvar:'.$sql.'");
            </script>';*/
            }
        }

    }else{
        //echo '<script>alert("Connection Error.");</script>'; 
        $_SESSION['error'] =  'Connection Error.'; 
        header('location: ./signup-2.php');
        exit;

    }
    // Close connection
    mysqli_close($conn);
    }else{
        header('location: ./signup-2.php');
        exit;
    }



  //echo $_SESSION['user_type'];

?>