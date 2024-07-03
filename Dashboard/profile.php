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

                    <img src="<?php echo $_SESSION['User_Profile_Picture_Path'];?>" class="img-fluid" style="height: 100%; width: 100%;"/>
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                    <div class="card-img-overlay" >
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm bg-light" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#edit_user_information_modal"><i class="fas fa-pen"></i></button>
                      <!-- Button trigger modal -->
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="edit_user_information_modal"
                        data-mdb-backdrop="static"
                        data-mdb-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="EditUserInformationModalLabel"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="EditUserInformationModalLabel">إختيار صورة الملف الشخصي</h5>
                              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="needs-validation" method="post" enctype="multipart/form-data">

                              <!--Avatar-->
                              <div class="justify-content-center text-center">
                                <div class="d-flex justify-content-start d-inline-flex position-relative mb-4">
                                  <span class="position-absolute bottom-0 start-100 translate-middle border border-light rounded-circle text-light" style="background-color: #BF9874;">
                                    <label class="form-label text-white mt-2 mx-3" for="NewProfilePicture"><i class="fas fa-pen fa-xs"></i>
                                    </label>
                                    <input type="file" class="form-control d-none" id="NewProfilePicture" name="NewProfilePicture" onchange="displaySelectedImage(event, 'selectedAvatar')" required/>
                                  </span>
                                  
                                  <!--
                                    <img id="selectedAvatar" src="/SIH/assets/img/avatar-female-profile-picture-1.png"
                                    class="rounded-circle" style="width: 200px; height: 200px;" alt="example placeholder"echo $User_Profile_Picture_Path />-->
                                    <?php //echo '<script>alert("new $User_Profile_Picture_Path path : '.$User_Profile_Picture_Path .'")</script>';?>

                                    <img id="selectedAvatar" src="<?php echo $User_Profile_Picture_Path;?>"
                                    class="rounded-circle" style="width: 200px; height: 200px;" alt="example placeholder" />

                                </div>
                                <!--
                                <div class="small text-muted mb-2">Upload your profile picuture. Max file
                                size 50 MB</div>-->
                                <!--
                                <div class="d-flex justify-content-start">
                                    <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white" for="customFile2">اختيار صورة جديدة</i>
                                        </label>
                                        <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                    </div>
                                </div>
                              -->
                                
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-primary" name="Submit-Change-User-Profile-Picture" data-mdb-ripple-init onclick="setRequiredInput('Submit-Change-User-Profile-Picture')">تغيير الصورة الشخصية</button>
                                  <button type="submit" class="btn btn-danger" name="Submit-Delete-User-Profile-Picture" data-mdb-ripple-init onclick="setRequiredInput('Submit-Delete-User-Email-Address')">حذف الصورة الشخصية</button>
                                </div>
                              <!--
                              <div class="d-inline-flex position-relative">
                                <span class="position-absolute bottom-0 start-100 translate-middle px-2 border border-light rounded-circle text-light" style="background-color: #BF9874;">
                                    <i class="fas fa-pen fa-xs"></i>
                                </span>
                                <img class="rounded-circle shadow-4" src="/SIH/assets/img/avatar-female-profile-picture-1.png" alt="Avatar" style="width: 70px; height: 70px;">
                              </div>-->
                                <p class="text-dark mt-2">الاسم الكامل : <span class="badge badge-light text-dark">
                                  <!--
                                    علا خالد المصعبي-->
                                  <?php 
                                  echo $User_Full_Name;
                                  ?>
                                 
                                </span></p>
                                <div data-mdb-input-init class="form-outline mb-2">
                                  <input type="text" id="NewFullName" name="NewFullName" placeholder="ادخل الاسم الكامل الجديد" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="NewFullName">الاسم الكامل الجديد</label>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary" name="Submit-Change-User-Full-Name" data-mdb-ripple-init onclick="setRequiredInput('Submit-Change-User-Full-Name')">تغيير الاسم الكامل</button>
                                </div>

                                <p class="text-dark mt-2">البريد الالكتروني : <span class="badge badge-light text-dark">
                                  <!--
                                    Hala.salahqu20@gmail.com-->
                                    <?php 
                                  echo $User_Email_Address;
                                  ?>
                                  </span></p>
                                <div data-mdb-input-init class="form-outline mb-2">
                                  <input type="email" id="NewEmail" name="NewEmail" placeholder="ادخل البريد الالكتروني الجديد" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="NewEmail">البريد الالكتروني الجديد</label>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary" name="Submit-Change-User-Email-Address" data-mdb-ripple-init onclick="setRequiredInput('Submit-Change-User-Email-Address')">تغيير البريد الالكتروني</button>
                                </div>

                                </form>
                                <script>
                                  function setRequiredInput(buttonName) {
                                      document.getElementById('NewProfilePicture').removeAttribute('required');
                                      document.getElementById('NewFullName').removeAttribute('required');
                                      document.getElementById('NewEmail').removeAttribute('required');

                                      if (buttonName === 'Submit-Change-User-Profile-Picture') {
                                          document.getElementById('NewProfilePicture').setAttribute('required', 'required');
                                      } else if (buttonName === 'Submit-Change-User-Full-Name') {
                                          document.getElementById('NewFullName').setAttribute('required', 'required');
                                      } else if (buttonName === 'Submit-Change-User-Email-Address') {
                                          document.getElementById('NewEmail').setAttribute('required', 'required');
                                      } else if (buttonName === 'Submit-Delete-User-Profile-Picture') {
                                          document.getElementById('NewProfilePicture').setAttribute('required', 'required');
                                      }
                                  }
                                </script>
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                  // Check which submit button was clicked and update the corresponding input
                                  if (isset($_POST['Submit-Change-User-Profile-Picture'])) {
                                    // $New_Profile_Picture_Path = $_POST['NewProfilePicture'];
                                    $FileNameCheck = basename($_FILES["NewProfilePicture"]["name"]);
                                    $targetDir = "";
                                
                                    if($User_Type_ID == 1){
                                        $targetDir = "/SIH/assets/img/Profile_Pictures/Users/Investors/";
                                    } else if($User_Type_ID == 2){
                                        $targetDir = "/SIH/assets/img/Profile_Pictures/Users/Entrepreneurs/";
                                    }
                                
                                    // Ensure the directory exists, create it if it doesn't
                                    if (!is_dir($_SERVER['DOCUMENT_ROOT'] . $targetDir)) {
                                        mkdir($_SERVER['DOCUMENT_ROOT'] . $targetDir, 0777, true);
                                    }
                                
                                    $FileNameCheck_Path = $targetDir . $FileNameCheck;
                                    $fileType = pathinfo($FileNameCheck_Path, PATHINFO_EXTENSION);
                                    date_default_timezone_set("Asia/Jerusalem");
                                    $fileName = $User_Full_Name . "-IMG-" . date('Y-m-d-h-i-s-a') . ".jpg"; //.rand()
                                    $filename_path = $targetDir . $fileName;
                                
                                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                                    if (in_array($fileType, $allowTypes)) {
                                        // Upload file to server
                                        if (move_uploaded_file($_FILES["NewProfilePicture"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $filename_path)) {
                                            // Insert image file name into database
                                            $sql = "UPDATE users_information SET User_Profile_Picture_Path = '$filename_path' WHERE User_ID = '$User_ID'";
                                            if ($conn->query($sql)) {
                                                $_SESSION['User_Profile_Picture_Path'] = $filename_path;
                                                $_SESSION['success'] = 'تمت عملية تحديث الصورة الشخصية بنجاح.';
                                                echo "<script>window.location.replace('profile.php');</script>";
                                            } else {
                                                $_SESSION['error'] = 'حدث خطأ ما أثناء تحديث الصورة الشخصية.';
                                                echo "<script>window.location.replace('profile.php');</script>";
                                            }
                                        } else {
                                            $_SESSION['error'] = 'عذراً، حدث خطأ أثناء تحميل ملفك.';
                                            echo "<script>window.location.replace('profile.php');</script>";
                                        }
                                    } else {
                                        $_SESSION['error'] = 'عذراً، يُسمح فقط بتحميل الملفات بصيغة (JPG، JPEG، PNG، GIF).';
                                        echo "<script>window.location.replace('profile.php');</script>";

                                    }
                                }else if (isset($_POST['Submit-Delete-User-Profile-Picture'])) {
                                  if($Gender_ID == "1"){
                                    $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Male_Avatar.png";
                                    $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;

                                  }elseif($Gender_ID == "2"){
                                      $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Female_Avatar.png";
                                      $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                                  }
                                  $sql = "UPDATE users_information SET User_Profile_Picture_Path = '$User_Profile_Picture_Path' WHERE User_ID = '$User_ID'";
                                  if ($conn->query($sql)) {
                                      $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                                      $_SESSION['success'] = 'تمت عملية حذف الصورة الشخصية بنجاح.';
                                      echo "<script>window.location.replace('profile.php');</script>";
                                  } else {
                                      $_SESSION['error'] = 'حدث خطأ ما أثناء حذف الصورة الشخصية.';
                                      echo "<script>window.location.replace('profile.php');</script>";
                                  }
                                }
                                
                                  /*
                                  if (isset($_POST['Submit-Change-User-Profile-Picture'])) {
                                     // $New_Profile_Picture_Path = $_POST['NewProfilePicture'];

                                      $FileNameCheck = basename($_FILES["NewProfilePicture"]["name"]);
                                      $targetDir = "";

                                      if($User_Type_ID == 1){
                                        $FileNameCheck_Path = "/SIH/assets/img/Profile_Pictures/Users/Investors/".$FileNameCheck;
                                      }else
                                      if($User_Type_ID == 2){
                                        $FileNameCheck_Path = "/SIH/assets/img/Profile_Pictures/Users/Entrepreneurs/".$FileNameCheck;
                                      }
                                      $fileType = pathinfo($FileNameCheck_Path,PATHINFO_EXTENSION);
                                      date_default_timezone_set("Asia/Jerusalem");
                                      $fileName=$User_Full_Name."-IMG-".date('Y-m-d-h-i-s-a').".jpg";//.rand()
                                      if($User_Type_ID == 1){
                                        $filename_path = "/SIH/assets/img/Profile_Pictures/Users/Investors/".$fileName;
                                      }else
                                      if($User_Type_ID == 2){
                                        $filename_path = "/SIH/assets/img/Profile_Pictures/Users/Entrepreneurs/".$fileName;
                                      }
                                      $allowTypes = array('jpg','png','jpeg','gif');
                                      if(in_array($fileType, $allowTypes)){
                                        // Upload file to server
                                        if(move_uploaded_file($_FILES["NewProfilePicture"]["tmp_name"], $filename_path)){
                                          // Insert image file name into database
                                          $sql = "UPDATE users_information SET User_Profile_Picture_Path = '$filename_path' WHERE User_ID = '$User_ID'";//$filename_path //$fileName
                                          if($conn->query($sql)){
                                            $_SESSION['success'] = 'Seller Profile Picture updated successfully. with seller photo '.$fileName;//$filename_path;//$fileName;//$Seller_Profile_Picuture;
                                          }else{
                                            $_SESSION['error'] = 'Something went wrong in updating Seller Profile Picture.';
                                          }
                                        }else{
                                          $_SESSION['error'] = 'Sorry, there was an error uploading your file.';
                                        }
                                      }else{
                                        $_SESSION['error'] = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                                      }

                                  }*/
                                   elseif (isset($_POST['Submit-Change-User-Full-Name'])) {
                                      $New_Full_Name = $_POST['NewFullName'];
                                      if($New_Full_Name != $User_Full_Name)
                                      {
                                        $SqlUpdateFullName = "UPDATE users SET User_Full_Name = '$New_Full_Name' WHERE User_ID LIKE $User_ID";
                                        $User_Update_Full_Name_Query = mysqli_query($conn, $SqlUpdateFullName);
  
                                        if($User_Update_Full_Name_Query){
                                          $_SESSION['User_Full_Name'] = $New_Full_Name;
                                          $_SESSION['success'] = 'تمت عملية تغيير الاسم الكامل بنجاح.';
                                          echo "<script>window.location.replace('profile.php');</script>";
                                        }else{
                                            $_SESSION['error'] = 'فشلت عملية تغيير الاسم الكامل.';
                                            echo "<script>window.location.replace('profile.php');</script>";
                    
                                        }
                                      }else{
                                      $_SESSION['error'] = 'الاسم الكامل الجديد مكرر يرجى ادخال اسم اخر';
                                      echo "<script>window.location.replace('profile.php');</script>";
                                      }
 
                                  } elseif (isset($_POST['Submit-Change-User-Email-Address'])) {
                                      $New_Email_Address = $_POST['NewEmail'];
                                      if($New_Email_Address != $User_Email_Address)
                                      {
                                        $SqlUpdateEmailAddress = "UPDATE users SET User_Email = '$New_Email_Address' WHERE User_ID LIKE $User_ID";
                                        $User_Update_Email_Address_Query = mysqli_query($conn, $SqlUpdateEmailAddress);
  
                                        if($User_Update_Email_Address_Query){
                                          $_SESSION['User_Email_Address'] = $New_Email_Address;
                                          $_SESSION['success'] = 'تمت عملية تغيير البريد الالكتروني بنجاح.';
                                          echo "<script>window.location.replace('profile.php');</script>";
                                        }else{
                                            $_SESSION['error'] = 'فشلت عملية تغيير البريد الالكتروني.';
                                            echo "<script>window.location.replace('profile.php');</script>";
                    
                                        }
                                      }else{
                                      $_SESSION['error'] = 'البريد الالكتروني الجديد مكرر يرجى ادخال بريد الكتروني اخر';
                                      echo "<script>window.location.replace('profile.php');</script>";
                                      }
                                  }
                              }
                            if(isset($_POST['Submit-Change-Password'])){
                              $OldPassword = $_POST['OldPassword'];
                              $NewPassword = $_POST['NewPassword'];
                              $RepeatNewPassword = $_POST['RepeatNewPassword'];
                              if($conn){
                                if(strlen($OldPassword) > 20 || strlen($OldPassword) < 6 || strlen($NewPassword) > 20 || strlen($NewPassword) < 6|| strlen($RepeatNewPassword) > 20 || strlen($RepeatNewPassword) < 6){
                                  //echo '<script>alert("Password length must be more than 6 and less than 20.")</script>';
                                  $_SESSION['error'] = 'كلمة المرور يجب ان تكون على الاقل بين 6 و 20 خانة.';
                                  echo "<script>window.location.replace('profile.php');</script>";
                                  exit;
                                }else{
                                  if(password_verify($OldPassword, $User_Password)){
                                    if($NewPassword == $RepeatNewPassword)
                                    {

                                      $Password = password_hash($NewPassword, PASSWORD_BCRYPT);
                                      $SqlUpdatePassword = "UPDATE users SET User_Password = '$Password' WHERE User_ID LIKE $User_ID";
                                      $User_Update_Password_Query = mysqli_query($conn, $SqlUpdatePassword);

                                      if($User_Update_Password_Query){

                                        $_SESSION['success'] = 'تمت عملية تغيير كلمة المرور بنجاح.';
                                        echo "<script>window.location.replace('profile.php');</script>";
                                      }else{
                                          $_SESSION['error'] = 'فشلت عملية تغيير كلمة المرور.';
                                          echo "<script>window.location.replace('profile.php');</script>";
                  
                                      }
                                    }else{
                                    $_SESSION['error'] = 'كلمات المرور غير متطابقة.';
                                    echo "<script>window.location.replace('profile.php');</script>";
                                    }
                                  }else{
                                    $_SESSION['error'] = 'كلمات المرور السابقة غير صحيحة.';
                                    echo "<script>window.location.replace('profile.php');</script>";
                                  }

                                }
                                $SqlUpdateLocation = "UPDATE users_information SET User_Industrial_Sectors_IDs = '$Newcheckboxvar2', User_Location ='$SelectNewLocation' WHERE User_ID LIKE $User_ID";
                                $User_Update_Location_Query = mysqli_query($conn, $SqlUpdateLocation);
                                if($User_Update_Location_Query){
                                    $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                    //echo '<script>window.location.reload();</script>';
                                    /*header('location: ./projects.php');
                                    exit;*/
                                    echo "<script>window.location.replace('./profile.php');</script>";

                                }else{
                                    $_SESSION['error'] = 'فشل تحديث المعلومات!.';       
                                    /*header('location: ./profile.php');
                                    exit;   */    
                                    echo "<script>window.location.replace('./profile.php');</script>";

                                }
                              }
                              else{
                                //echo '<script>alert("Connection Error.");</script>'; 
                                $_SESSION['error'] =  'Connection Error.';  
                                echo "<script>window.location.replace('./profile.php');</script>";
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
                      <div class="bottom-0 d-flex align-items-end h-100 text-start justify-content-start">
                        <div>
                          <p class="fw-bold text-white">

                            <!--
                              علا خالد المصعبي-->
                              <?php 
                            //echo $User_Full_Name;
                            ?>
                            <span class="badge badge-light mx-2 text-dark"><?php echo $_SESSION['User_Full_Name']; ?></span>

                            </p>
                          <p class="text-white">
                            <!--
                              Hala.salahqu20@gmail.com-->
                              <?php 
                            //echo $User_Email_Address;
                            ?>
                            <span class="badge badge-light mx-2 text-dark"><?php echo $_SESSION['User_Email_Address']; ?></span>

                            
                          </p>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                </div>
                <button type="button" class="btn btn-primary btn-block mt-4 pb-3" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_Password_Modal"> إعادة تعيين كلمة المرور </button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="Edit_Password_Modal"
                  data-mdb-backdrop="static"
                  data-mdb-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="EditPasswordModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">إعادة تعين كلمة المرور</h5>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="needs-validation"  method="post">
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="OldPassword" name="OldPassword" placeholder="أدخل كلمة المرور القديمة"  data-mdb-showcounter="true" minlength="6" maxlength="20" autocomplete="current-password" class="form-control form-control-lg" required/>
                            <label class="form-label" for="OldPassword">كلمة المرور القديمة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="NewPassword" name="NewPassword" placeholder="أدخل كلمة المرور الجديدة"  data-mdb-showcounter="true" minlength="6" maxlength="20" autocomplete="new-password" class="form-control form-control-lg" required/>
                            <label class="form-label" for="NewPassword">كلمة المرور الجديدة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="RepeatNewPassword" name="RepeatNewPassword" placeholder="أعد كتابة كلمة المرور الجديدة"  data-mdb-showcounter="true" minlength="6" maxlength="20" autocomplete="new-password" class="form-control form-control-lg" required/>
                            <label class="form-label" for="RepeatNewPassword">أعد كتابة كلمة المرور الجديدة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="Submit-Change-Password" data-mdb-ripple-init>إعادة تعيين</button>
                          </div>
                          </form>
                          <?php
                            if(isset($_POST['Submit-Change-Password'])){
                              $OldPassword = $_POST['OldPassword'];
                              $NewPassword = $_POST['NewPassword'];
                              $RepeatNewPassword = $_POST['RepeatNewPassword'];
                              if($conn){
                                if(strlen($OldPassword) > 20 || strlen($OldPassword) < 6 || strlen($NewPassword) > 20 || strlen($NewPassword) < 6|| strlen($RepeatNewPassword) > 20 || strlen($RepeatNewPassword) < 6){
                                  //echo '<script>alert("Password length must be more than 6 and less than 20.")</script>';
                                  $_SESSION['error'] = 'كلمة المرور يجب ان تكون على الاقل بين 6 و 20 خانة.';
                                  echo "<script>window.location.replace('profile.php');</script>";
                                  exit;
                                }else{
                                  if(password_verify($OldPassword, $User_Password)){
                                    if($NewPassword == $RepeatNewPassword)
                                    {

                                      $Password = password_hash($NewPassword, PASSWORD_BCRYPT);
                                      $SqlUpdatePassword = "UPDATE users SET User_Password = '$Password' WHERE User_ID LIKE $User_ID";
                                      $User_Update_Password_Query = mysqli_query($conn, $SqlUpdatePassword);

                                      if($User_Update_Password_Query){

                                        $_SESSION['success'] = 'تمت عملية تغيير كلمة المرور بنجاح.';
                                        echo "<script>window.location.replace('profile.php');</script>";
                                      }else{
                                          $_SESSION['error'] = 'فشلت عملية تغيير كلمة المرور.';
                                          echo "<script>window.location.replace('profile.php');</script>";
                  
                                      }
                                    }else{
                                    $_SESSION['error'] = 'كلمات المرور غير متطابقة.';
                                    echo "<script>window.location.replace('profile.php');</script>";
                                    }
                                  }else{
                                    $_SESSION['error'] = 'كلمات المرور السابقة غير صحيحة.';
                                    echo "<script>window.location.replace('profile.php');</script>";
                                  }

                                }
                                $SqlUpdateLocation = "UPDATE users_information SET User_Industrial_Sectors_IDs = '$Newcheckboxvar2', User_Location ='$SelectNewLocation' WHERE User_ID LIKE $User_ID";
                                $User_Update_Location_Query = mysqli_query($conn, $SqlUpdateLocation);
                                if($User_Update_Location_Query){
                                    $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                    //echo '<script>window.location.reload();</script>';
                                    /*header('location: ./projects.php');
                                    exit;*/
                                    echo "<script>window.location.replace('./profile.php');</script>";

                                }else{
                                    $_SESSION['error'] = 'فشل تحديث المعلومات!.';       
                                    /*header('location: ./profile.php');
                                    exit;   */    
                                    echo "<script>window.location.replace('./profile.php');</script>";

                                }
                              }
                              else{
                                //echo '<script>alert("Connection Error.");</script>'; 
                                $_SESSION['error'] =  'Connection Error.';  
                                echo "<script>window.location.replace('./profile.php');</script>";
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
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-8">
                        <h5 class="card-title fw-bold">
                          معلومات اخرى
                        </h5>
                      </div>
                  
                      <div class="col-md-3 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#edit_other_user_information_modal"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                        class="modal fade"
                        id="edit_other_user_information_modal"
                        data-mdb-backdrop="static"
                        data-mdb-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="EditOtherUserInformationModalLabel"
                        aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold" id="staticBackdropLabel">تحديث المعلومات الاخرى</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body text-start">
                                <form class="needs-validation"  method="post">
                                  <div class="row">
                                    <div class="col-md-6 text-start">
                                    <p class="text-dark mt-2">الجنس : <span class="text-secondary">
                                      <!--
                                      انثى-->
                                      <?php 
                                        echo $Gender_Name;
                                      ?>  
                                    </span></p>

                                      <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                                        <div data-mdb-input-init class="form-outline flex-fill mb-2">
                                          <!--
                                          <h6 class="mb-0 me-4 text-start">الجنس:</h6>-->

                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="NewGender" id="maleGender"
                                              value="1"
                                            <?php 
                                            if($Gender_ID == 1){
                                              echo "checked";
                                            }
                                          ?> 
                                          />
                                            <label class="form-check-label" for="maleGender">ذكر</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="NewGender" id="femaleGender"
                                              value="2"
                                            <?php 
                                            if($Gender_ID == 2){
                                              echo "checked";
                                            }
                                          ?>
                                          required 
                                          />
                                            <label class="form-check-label" for="femaleGender">انثى</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-outline text-start mb-2">
                                      <label class="form-label select-label text-dark" for="SelectNewCountry">الدولة<span class="text-danger">*</span><span class="text-secondary">: 
                                      <!--
                                      مصر-->
                                      <?php 
                                      echo $Country_Name_Native;
                                      ?>
                                      </span></label>
                                      <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الدولة" data-mdb-container="#edit_other_user_information_modal" class="form-select SelectCountry" name="SelectNewCountry" id="SelectCountry" required>
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

                                      $sql = "SELECT id, native FROM countries 
                                              WHERE id IN (SELECT country_id FROM states GROUP BY country_id)
                                              ORDER BY native ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        $firstOption = true;

                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['id'];
                                          $text = $row['native'];
                                          
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
                                      <?php
                                        /*
                                        // Define your table and column names (change as needed)
                                        $Country = "countries";
                                        $Country_ID = "id";
                                        $Country_Name = "native";

                                        // Write the SQL query
                                        $sql = "SELECT $Country_ID, $Country_Name FROM $Country ORDER BY $Country_Name ASC";
                                        $result = mysqli_query($conn, $sql);

                                        // Check query execution
                                        if (mysqli_num_rows($result) > 0) {
                                        // echo "<select>";
                                          
                                          // Loop through each row in the result
                                          while($row = mysqli_fetch_assoc($result)) {
                                            $value = $row[$Country_ID];
                                            $text = $row[$Country_Name];
                                            
                                            // Display option element with value and text
                                            echo "<option value='$value'>$text</option>";
                                          }
                                          
                                          echo "</select>";
                                        } else {
                                          echo "No records found";
                                        }

                                        // Close connection
                                        //mysqli_close($conn);*/

                                        ?>

                                       
                                        <!--
                                      </select>-->
                                    </div>
                                    <input type="hidden" id="selected-value" name="selected-value">

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-outline text-start mb-2">
                                      <label class="form-label select-label text-dark" for="SelectNewCity">المدينة<span class="text-danger">*</span><span class="text-secondary">: 
                                      <!--
                                      اسيوط-->
                                      <?php 
                                      echo $City_Name_Native;
                                      ?>
                                      </span></label>
                                      <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المدينة" data-mdb-container="#edit_other_user_information_modal" class="form-select SelectCity" name="SelectNewCity" id="SelectCity" required>
                                      <option value="">اختر مدينة</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!--
                                  <p class="text-dark mt-2">الدولة : <span class="text-secondary">مصر</span></p>
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectNewCountry">الدولة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الدولة" class="form-select" name="SelectNewCountry" id="SelectNewCountry" required>
                                      <option value="Afghanistan">Afghanistan</option>
                                      <option value="Åland Islands">Åland Islands</option>
                                      <option value="Albania">Albania</option>
                                      <option value="Algeria">Algeria</option>
                                      <option value="American Samoa">American Samoa</option>
                                      <option value="Andorra">Andorra</option>
                                      <option value="Angola">Angola</option>
                                      <option value="Anguilla">Anguilla</option>
                                      <option value="Antarctica">Antarctica</option>
                                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                      <option value="Argentina">Argentina</option>
                                      <option value="Armenia">Armenia</option>
                                      <option value="Aruba">Aruba</option>
                                      <option value="Australia">Australia</option>
                                      <option value="Austria">Austria</option>
                                      <option value="Azerbaijan">Azerbaijan</option>
                                      <option value="Bahamas">Bahamas</option>
                                      <option value="Bahrain">Bahrain</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="Barbados">Barbados</option>
                                      <option value="Belarus">Belarus</option>
                                      <option value="Belgium">Belgium</option>
                                      <option value="Belize">Belize</option>
                                      <option value="Benin">Benin</option>
                                      <option value="Bermuda">Bermuda</option>
                                      <option value="Bhutan">Bhutan</option>
                                      <option value="Bolivia">Bolivia</option>
                                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                      <option value="Botswana">Botswana</option>
                                      <option value="Bouvet Island">Bouvet Island</option>
                                      <option value="Brazil">Brazil</option>
                                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                      <option value="Brunei Darussalam">Brunei Darussalam</option>
                                      <option value="Bulgaria">Bulgaria</option>
                                      <option value="Burkina Faso">Burkina Faso</option>
                                      <option value="Burundi">Burundi</option>
                                      <option value="Cambodia">Cambodia</option>
                                      <option value="Cameroon">Cameroon</option>
                                      <option value="Canada">Canada</option>
                                      <option value="Cape Verde">Cape Verde</option>
                                      <option value="Cayman Islands">Cayman Islands</option>
                                      <option value="Central African Republic">Central African Republic</option>
                                      <option value="Chad">Chad</option>
                                      <option value="Chile">Chile</option>
                                      <option value="China">China</option>
                                      <option value="Christmas Island">Christmas Island</option>
                                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                      <option value="Colombia">Colombia</option>
                                      <option value="Comoros">Comoros</option>
                                      <option value="Congo">Congo</option>
                                      <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                      <option value="Cook Islands">Cook Islands</option>
                                      <option value="Costa Rica">Costa Rica</option>
                                      <option value="Cote D'ivoire">Cote D'ivoire</option>
                                      <option value="Croatia">Croatia</option>
                                      <option value="Cuba">Cuba</option>
                                      <option value="Cyprus">Cyprus</option>
                                      <option value="Czech Republic">Czech Republic</option>
                                      <option value="Denmark">Denmark</option>
                                      <option value="Djibouti">Djibouti</option>
                                      <option value="Dominica">Dominica</option>
                                      <option value="Dominican Republic">Dominican Republic</option>
                                      <option value="Ecuador">Ecuador</option>
                                      <option value="Egypt">Egypt</option>
                                      <option value="El Salvador">El Salvador</option>
                                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                                      <option value="Eritrea">Eritrea</option>
                                      <option value="Estonia">Estonia</option>
                                      <option value="Ethiopia">Ethiopia</option>
                                      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                      <option value="Faroe Islands">Faroe Islands</option>
                                      <option value="Fiji">Fiji</option>
                                      <option value="Finland">Finland</option>
                                      <option value="France">France</option>
                                      <option value="French Guiana">French Guiana</option>
                                      <option value="French Polynesia">French Polynesia</option>
                                      <option value="French Southern Territories">French Southern Territories</option>
                                      <option value="Gabon">Gabon</option>
                                      <option value="Gambia">Gambia</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Germany">Germany</option>
                                      <option value="Ghana">Ghana</option>
                                      <option value="Gibraltar">Gibraltar</option>
                                      <option value="Greece">Greece</option>
                                      <option value="Greenland">Greenland</option>
                                      <option value="Grenada">Grenada</option>
                                      <option value="Guadeloupe">Guadeloupe</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Guatemala">Guatemala</option>
                                      <option value="Guernsey">Guernsey</option>
                                      <option value="Guinea">Guinea</option>
                                      <option value="Guinea-bissau">Guinea-bissau</option>
                                      <option value="Guyana">Guyana</option>
                                      <option value="Haiti">Haiti</option>
                                      <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                      <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                      <option value="Honduras">Honduras</option>
                                      <option value="Hong Kong">Hong Kong</option>
                                      <option value="Hungary">Hungary</option>
                                      <option value="Iceland">Iceland</option>
                                      <option value="India">India</option>
                                      <option value="Indonesia">Indonesia</option>
                                      <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                      <option value="Iraq">Iraq</option>
                                      <option value="Ireland">Ireland</option>
                                      <option value="Isle of Man">Isle of Man</option>
                                      <option value="Israel">Israel</option>
                                      <option value="Italy">Italy</option>
                                      <option value="Jamaica">Jamaica</option>
                                      <option value="Japan">Japan</option>
                                      <option value="Jersey">Jersey</option>
                                      <option value="Jordan">Jordan</option>
                                      <option value="Kazakhstan">Kazakhstan</option>
                                      <option value="Kenya">Kenya</option>
                                      <option value="Kiribati">Kiribati</option>
                                      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                      <option value="Korea, Republic of">Korea, Republic of</option>
                                      <option value="Kuwait">Kuwait</option>
                                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                                      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                      <option value="Latvia">Latvia</option>
                                      <option value="Lebanon">Lebanon</option>
                                      <option value="Lesotho">Lesotho</option>
                                      <option value="Liberia">Liberia</option>
                                      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                      <option value="Liechtenstein">Liechtenstein</option>
                                      <option value="Lithuania">Lithuania</option>
                                      <option value="Luxembourg">Luxembourg</option>
                                      <option value="Macao">Macao</option>
                                      <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                      <option value="Madagascar">Madagascar</option>
                                      <option value="Malawi">Malawi</option>
                                      <option value="Malaysia">Malaysia</option>
                                      <option value="Maldives">Maldives</option>
                                      <option value="Mali">Mali</option>
                                      <option value="Malta">Malta</option>
                                      <option value="Marshall Islands">Marshall Islands</option>
                                      <option value="Martinique">Martinique</option>
                                      <option value="Mauritania">Mauritania</option>
                                      <option value="Mauritius">Mauritius</option>
                                      <option value="Mayotte">Mayotte</option>
                                      <option value="Mexico">Mexico</option>
                                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                      <option value="Moldova, Republic of">Moldova, Republic of</option>
                                      <option value="Monaco">Monaco</option>
                                      <option value="Mongolia">Mongolia</option>
                                      <option value="Montenegro">Montenegro</option>
                                      <option value="Montserrat">Montserrat</option>
                                      <option value="Morocco">Morocco</option>
                                      <option value="Mozambique">Mozambique</option>
                                      <option value="Myanmar">Myanmar</option>
                                      <option value="Namibia">Namibia</option>
                                      <option value="Nauru">Nauru</option>
                                      <option value="Nepal">Nepal</option>
                                      <option value="Netherlands">Netherlands</option>
                                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                                      <option value="New Caledonia">New Caledonia</option>
                                      <option value="New Zealand">New Zealand</option>
                                      <option value="Nicaragua">Nicaragua</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Nigeria">Nigeria</option>
                                      <option value="Niue">Niue</option>
                                      <option value="Norfolk Island">Norfolk Island</option>
                                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                      <option value="Norway">Norway</option>
                                      <option value="Oman">Oman</option>
                                      <option value="Pakistan">Pakistan</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Palestinian Territory, Occupied" selected>Palestinian Territory, Occupied</option>
                                      <option value="Panama">Panama</option>
                                      <option value="Papua New Guinea">Papua New Guinea</option>
                                      <option value="Paraguay">Paraguay</option>
                                      <option value="Peru">Peru</option>
                                      <option value="Philippines">Philippines</option>
                                      <option value="Pitcairn">Pitcairn</option>
                                      <option value="Poland">Poland</option>
                                      <option value="Portugal">Portugal</option>
                                      <option value="Puerto Rico">Puerto Rico</option>
                                      <option value="Qatar">Qatar</option>
                                      <option value="Reunion">Reunion</option>
                                      <option value="Romania">Romania</option>
                                      <option value="Russian Federation">Russian Federation</option>
                                      <option value="Rwanda">Rwanda</option>
                                      <option value="Saint Helena">Saint Helena</option>
                                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                      <option value="Saint Lucia">Saint Lucia</option>
                                      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                      <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                      <option value="Samoa">Samoa</option>
                                      <option value="San Marino">San Marino</option>
                                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                      <option value="Saudi Arabia">Saudi Arabia</option>
                                      <option value="Senegal">Senegal</option>
                                      <option value="Serbia">Serbia</option>
                                      <option value="Seychelles">Seychelles</option>
                                      <option value="Sierra Leone">Sierra Leone</option>
                                      <option value="Singapore">Singapore</option>
                                      <option value="Slovakia">Slovakia</option>
                                      <option value="Slovenia">Slovenia</option>
                                      <option value="Solomon Islands">Solomon Islands</option>
                                      <option value="Somalia">Somalia</option>
                                      <option value="South Africa">South Africa</option>
                                      <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                      <option value="Spain">Spain</option>
                                      <option value="Sri Lanka">Sri Lanka</option>
                                      <option value="Sudan">Sudan</option>
                                      <option value="Suriname">Suriname</option>
                                      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                      <option value="Swaziland">Swaziland</option>
                                      <option value="Sweden">Sweden</option>
                                      <option value="Switzerland">Switzerland</option>
                                      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                      <option value="Taiwan">Taiwan</option>
                                      <option value="Tajikistan">Tajikistan</option>
                                      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                      <option value="Thailand">Thailand</option>
                                      <option value="Timor-leste">Timor-leste</option>
                                      <option value="Togo">Togo</option>
                                      <option value="Tokelau">Tokelau</option>
                                      <option value="Tonga">Tonga</option>
                                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                      <option value="Tunisia">Tunisia</option>
                                      <option value="Turkey">Turkey</option>
                                      <option value="Turkmenistan">Turkmenistan</option>
                                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                      <option value="Tuvalu">Tuvalu</option>
                                      <option value="Uganda">Uganda</option>
                                      <option value="Ukraine">Ukraine</option>
                                      <option value="United Arab Emirates">United Arab Emirates</option>
                                      <option value="United Kingdom">United Kingdom</option>
                                      <option value="United States">United States</option>
                                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                      <option value="Uruguay">Uruguay</option>
                                      <option value="Uzbekistan">Uzbekistan</option>
                                      <option value="Vanuatu">Vanuatu</option>
                                      <option value="Venezuela">Venezuela</option>
                                      <option value="Viet Nam">Viet Nam</option>
                                      <option value="Virgin Islands, British">Virgin Islands, British</option>
                                      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                                      <option value="Western Sahara">Western Sahara</option>
                                      <option value="Yemen">Yemen</option>
                                      <option value="Zambia">Zambia</option>
                                      <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                  </div>-->
                                  <!--

                                  <p class="text-dark mt-2">المدينة : <span class="text-secondary">مصر</span></p>
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectNewCity">المدينة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المدينة" class="form-select" name="SelectNewCity" id="SelectNewCity" required>
                                    <option value="East Jerusalem">East Jerusalem</option>
                                    <option value="Hebron">Hebron</option>
                                    <option value="Nablus">Nablus</option>
                                    <option value="Gaza City">Gaza City</option>
                                    <option value="Jenin">Jenin</option>
                                    <option value="Ramallah">Ramallah</option>
                                    <option value="Bethlehem">Bethlehem</option>
                                    <option value="Khan Yunis">Khan Yunis</option>
                                    <option value="Rafah">Rafah</option>-->
                                      <!--
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>-->
                                    <!--</select>
                                  </div>-->
                                  <?php /*
                                    if($_SESSION['User_Type_ID']=="1") : ?> 
                                      <p class="text-dark mt-2">مراحل عمل الشركة : 
                                        <!--
                                        <span class="text-secondary">
                                      <! --
                                      ربحية- ->
                                      <?php 
                                     // echo $Stages_Of_Business_Operations_Name;
                                      ?>
                                      </span>-->
                                      <?php
                                      if(mysqli_num_rows($sql_User_Stages_Of_Business_Operations_IDs_Query) > 0){
                                        while($row = mysqli_fetch_array($sql_User_Stages_Of_Business_Operations_IDs_Query)) {
                                          echo '
                                          <span class="text-secondary me-2">
                                          '.$row['Stages_Of_Business_Operations_Name'].'
                                        </span>
                                          ';
                                          //echo "<script>alert('Stages_Of_Business_Operations_Name =  ".$row['Stages_Of_Business_Operations_Name']."');</script>";

                                        }
                                      }*/
                                      ?>
                                    <!--</p>
                                      <div class="text-start mb-2">-->
                                      <?php
                                  // Define your table and column names (change as needed)
                                  /*
                                      $stages_of_business_operations = "stages_of_business_operations";
                                      $Stages_Of_Business_Operations_ID  = "Stages_Of_Business_Operations_ID";
                                      $Stages_Of_Business_Operations_Name = "Stages_Of_Business_Operations_Name";*/
/*
                                      // Write the SQL query
                                      $sql = "SELECT Stages_Of_Business_Operations_ID, Stages_Of_Business_Operations_Name FROM stages_of_business_operations ORDER BY Stages_Of_Business_Operations_ID ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['Stages_Of_Business_Operations_ID'];
                                          $text = $row['Stages_Of_Business_Operations_Name'];
                                          
                                          // Display option element with value and text
                                          //echo "<option value='$value'>$text</option>";
                                          echo '<div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="checkbox" name="Newcheckboxvar[]" id="NewinlineCheckbox'.$value.'" value="'.$value.'" />
                                          <label class="form-check-label" for="NewinlineCheckbox'.$value.'">'.$text.'</label>
                                        </div>';
                                        }
                                        
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);
*/
                                      ?>
                                      <!--
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="checkbox" name="CheckBoxNewCompanyStages[]" id="inlineCheckbox1" value="option1" required />
                                          <label class="form-check-label" for="inlineCheckbox1">منتج النموذج الأولي/المنتج النهائي</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="CheckBoxNewCompanyStages[]" id="inlineCheckbox2" value="option2" />
                                          <label class="form-check-label" for="inlineCheckbox2">غير ذلك</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="CheckBoxNewCompanyStages[]" id="inlineCheckbox3" value="option3" />
                                          <label class="form-check-label" for="inlineCheckbox3">الربحية</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="CheckBoxNewCompanyStages[]" id="inlineCheckbox4" value="option4" />
                                          <label class="form-check-label" for="inlineCheckbox4">التحقيق في الربح</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="CheckBoxNewCompanyStages[]" id="inlineCheckbox5" value="option5" />
                                          <label class="form-check-label" for="inlineCheckbox5">تحقيق المبيعات</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="CheckBoxNewCompanyStages[]" id="inlineCheckbox6" value="option6" />
                                          <label class="form-check-label" for="inlineCheckbox6">قبل بدء العمل/البحث والتطوير</label>
                                        </div>-->
                                      <!--</div>
                                      <?php //elseif($_SESSION['User_Type_ID']=="2") : ?>
                                        -->
                                    <?php if($_SESSION['User_Type_ID']=="2") : ?>

                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-outline text-start mb-2">
                                              <label class="form-label select-label text-dark" for="SelectNewGrowthStrategy">ما هي استراتيجية النمو الخاص بك؟<span class="text-danger">*</span></label>
                                              <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="استراتيجية النمو" data-mdb-container="#edit_other_user_information_modal" class="form-select" name="SelectNewGrowthStrategy" id="SelectNewGrowthStrategy" required>
                                              <?php
                                                // Define your table and column names (change as needed)
                                                /*$growth_strategy = "growth_strategy";
                                                $Growth_Strategy_ID = "Growth_Strategy_ID";
                                                $Growth_Strategy_Name = "Growth_Strategy_Name";*/

                                                // Write the SQL query
                                                $sql = "SELECT Growth_Strategy_ID, Growth_Strategy_Name FROM growth_strategy ORDER BY Growth_Strategy_Name ASC";
                                                $result = mysqli_query($conn, $sql);

                                                // Check query execution
                                                if (mysqli_num_rows($result) > 0) {
                                                // echo "<select>";
                                                  
                                                  // Loop through each row in the result
                                                  while($row = mysqli_fetch_assoc($result)) {
                                                    $value = $row['Growth_Strategy_ID'];
                                                    $text = $row['Growth_Strategy_Name'];
                                                    
                                                    // Display option element with value and text
                                                    echo "<option value='$value'>$text</option>";
                                                  }
                                                  
                                                  echo "</select>";
                                                } else {
                                                  echo "No records found";
                                                }

                                                // Close connection
                                                //mysqli_close($conn);

                                                ?>

                                              <!--
                                                <option value="1">تمويل بدء العمل (الشركات الناشئة)</option>
                                                <option value="2">التوسع الجغرافي</option>
                                                <option value="3">تطوير منتجات جديدة</option>
                                                <option value="4">توسيع قاعدة العملاء</option>
                                                <option value="5">استحواذ على شركات أخرى</option>
                                                <option value="6">غير ذلك</option>
                                              </select>-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-outline text-start mb-2">
                                              <label class="form-label select-label text-dark" for="SelectNewExperience">ما هو مستوى خبرتك في مجال ريادة الأعمال؟<span class="text-danger">*</span></label>
                                              <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الخبرة" data-mdb-container="#edit_other_user_information_modal" class="form-select" name="SelectNewExperience" id="SelectNewExperience" required>
                                              <?php
                                                // Define your table and column names (change as needed)
                                                /*$experience_level = "experience_level";
                                                $Experience_Level_ID  = "Experience_Level_ID";
                                                $Experience_Level_Name = "Experience_Level_Name";*/

                                                // Write the SQL query
                                                $sql = "SELECT Experience_Level_ID, Experience_Level_Name FROM experience_level ORDER BY Experience_Level_ID ASC";
                                                $result = mysqli_query($conn, $sql);

                                                // Check query execution
                                                if (mysqli_num_rows($result) > 0) {
                                                // echo "<select>";
                                                  
                                                  // Loop through each row in the result
                                                  while($row = mysqli_fetch_assoc($result)) {
                                                    $value = $row['Experience_Level_ID'];
                                                    $text = $row['Experience_Level_Name'];
                                                    
                                                    // Display option element with value and text
                                                    echo "<option value='$value'>$text</option>";
                                                  }
                                                  
                                                  echo "</select>";
                                                } else {
                                                  echo "No records found";
                                                }

                                                // Close connection
                                                //mysqli_close($conn);

                                                ?>
                                                <!--<option value="1">مبتدئ</option>
                                                <option value="2">متوسط</option>
                                                <option value="3">متقدم</option>
                                              </select>-->
                                          </div>
                                        </div>
                                      </div>
                                    <?php endif; ?>



                                <?php
                                //if($_SESSION['user_type']=="user1") :
/*
                                if($_SESSION['User_Type_ID']=="1") : ?> 
<!--
                                <label class="form-label text-dark text-start">أي نوع من المستثمرين أنت؟</label>
                                <?php elseif($_SESSION['User_Type_ID']=="2") : ?>
                                <label class="form-label text-dark text-start">أي نوع من المستثمرين تبحث عنه؟</label>
                                <?php endif; ?>

                                <div class="text-start mb-2">
                                <?php
                                  // Define your table and column names (change as needed)
                                  /*
                                      $investor_type = "investor_type";
                                      $Investor_Type_ID = "Investor_Type_ID";
                                      $Investor_Type_Name = "Investor_Type_Name";*/

                                      // Write the SQL query
                                      /*
                                      $sql = "SELECT Investor_Type_ID, Investor_Type_Name FROM investor_type ORDER BY Investor_Type_ID ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['Investor_Type_ID'];
                                          $text = $row['Investor_Type_Name'];
                                          
                                          //echo "<option value='$value'>$text</option>";
                                          echo '<div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="checkbox" name="Newcheckboxvar4[]" id="New4thinlineCheckbox'.$value.'" value="'.$value.'" />
                                          <label class="form-check-label" for="New4thinlineCheckbox'.$value.'">'.$text.'</label>
                                        </div>';
                                        }
                                        
                                        //echo "</select>";
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);*/

                                      ?>
                                      <!--
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox1" value="option1" required/>
                                    <label class="form-check-label" for="4thinlineCheckbox1">مجموعة ملاك</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox2" value="option2" />
                                    <label class="form-check-label" for="4thinlineCheckbox2">مستثمر ملاك</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox3" value="option3" />
                                    <label class="form-check-label" for="4thinlineCheckbox3">مستشار / مرشد</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox4" value="option4" />
                                    <label class="form-check-label" for="4thinlineCheckbox4">حاضنة / مسرعة</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox5" value="option5" />
                                    <label class="form-check-label" for="4thinlineCheckbox5">محترف استثمار</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox6" value="option6" />
                                    <label class="form-check-label" for="4thinlineCheckbox6">مقدم خدمة</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox7" value="option7" />
                                    <label class="form-check-label" for="4thinlineCheckbox7">صندوق رأس المال الاستثماري</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox8" value="option8" />
                                    <label class="form-check-label" for="4thinlineCheckbox8">آخر</label>
                                  </div>-->
                                <!--</div> -->  
                                <!--
                                <p class="text-dark mt-2">نطاق الاستثمار : <span class="text-secondary">
                                    <!--
                                    12000$- ->
                                    <?php 
                                    //echo $Investment_Range_Name;
                                    ?>
                                  
                                </span></p>-->

                                    <!--
                                    <section class="w-100 d-flex justify-content-center pb-4 flex-column">
                                    <div id="multi-ranges-basic" class="multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-min="1000" data-mdb-max="25000" data-mdb-steps="2000" data-mdb-startValues="[1000,25000]" style="direction: ltr;"></div>
                                          <div id="multi-ranges-basic-value" class="mt-3">
                                            Value:
                                            <span class="d-flex flex-column">
                                              <div>First:</div>
                                              <div>Second:</div>
                                            </span>
                                          </div>
                                      </section>-->
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                        <?php
                                    if($_SESSION['User_Type_ID']=="1") : ?> 
                                      <label class="form-label text-dark" for="SelectNewInvestmentRange">نطاق الاستثمار<span class="text-danger">*</span><span class="text-secondary"> : <?php echo $Investment_Range_Name;?> $</span></label>

                                    <?php elseif($_SESSION['User_Type_ID']=="2") : ?>
                                      <label class="form-label text-dark" for="SelectNewInvestmentRange">ما هو نطاق الاستثمار الذي تهتم فيه<span class="text-danger">*</span><span class="text-secondary"> : <?php echo $Investment_Range_Name;?> $</span></label>

                                    <?php endif; ?>
                                          <div class="form-outline text-start mt-2">
                                            <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="نطاق الاستثمار" data-mdb-container="#edit_other_user_information_modal" class="form-select" name="SelectNewInvestmentRange" id="SelectNewInvestmentRange" required>

                                      <?php
                                                // Define your table and column names (change as needed)
                                                /*$experience_level = "experience_level";
                                                $Experience_Level_ID  = "Experience_Level_ID";
                                                $Experience_Level_Name = "Experience_Level_Name";*/

                                                // Write the SQL query
                                                $sql = "SELECT Investment_Range_ID, Investment_Range_Name FROM investment_range ORDER BY Investment_Range_ID ASC";
                                                $result = mysqli_query($conn, $sql);

                                                // Check query execution
                                                if (mysqli_num_rows($result) > 0) {
                                                // echo "<select>";
                                                  
                                                  // Loop through each row in the result
                                                  while($row = mysqli_fetch_assoc($result)) {
                                                    $value = $row['Investment_Range_ID'];
                                                    $text = $row['Investment_Range_Name'];
                                                    
                                                    // Display option element with value and text
                                                    echo "<option value='$value'>$text $</option>";
                                                  }
                                                  
                                                  echo "</select>";
                                                } else {
                                                  echo "No records found";
                                                }

                                                // Close connection
                                                //mysqli_close($conn);

                                                ?>
                                                <!--<option value="1">مبتدئ</option>
                                                <option value="2">متوسط</option>
                                                <option value="3">متقدم</option>
                                              </select>-->
                                        <!--
                                      <div class="multi-ranges-basic"></div>
<div id="multi-ranges-basic-value" class="mt-3 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true">
  Value:
  <span class="d-flex flex-column">
    <div>First:</div>
    <div>Second:</div>
  </span>
</div>
<!--
<div class="mt-3 multi-ranges-start-values  multi-range-slider multi-range-slider-horizontal" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-multi-range-slider-initialized="true" data-mdb-min="1000" data-mdb-max="25000" data-mdb-steps="1000" data-mdb-startValues="[1000,25000]">
</div>-->

                                        <!--
                                        <div class="mt-3 multi-range-slider multi-ranges-basic" name="SelectInvestmentScope" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-min="100" data-mdb-max="10000" data-mdb-steps="100" data-mdb-startValues="[20,100]"></div>

                                        <div class="form-outline mb-2">
                                          <label class="form-label text-dark" for="SelectInvestmentScope">نطاق الاستثمار<span class="text-danger">*</span></label>
                                          <div class="mt-3 multi-range-slider multi-ranges-basic" name="SelectInvestmentScope" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-min="100" data-mdb-max="10000" data-mdb-steps="100" data-mdb-startValues="[20,100]"></div>

                                          <!--
                                          <div class="multi-range-slider multi-ranges-basic" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-min="100" data-mdb-max="10000" data-mdb-steps="100" data-mdb-startValues="[20,100]"></div>
                                          <input type="range" class="form-range mt-4 multi-range-slider multi-ranges-basic" name="SelectInvestmentScope" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-min="100" data-mdb-max="10000" data-mdb-steps="100" data-mdb-startValues="[20,100]">-->

                                        <!--
                                          <div class="range-value" id="rangeV"></div>

                                          <input type="range" class="form-range mt-4 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope" min="100" max="10000000" value="1000" id="SelectInvestmentScope">
                                          <!--<div id="multi-ranges-tooltips" class="mt-3 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope"></div>
                                          <input type="range" class="form-range mt-4 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope" id="SelectInvestmentScope">
                                          <div class="mt-3 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope"></div>
                                        -->
                                        </div> 
                                      </div>
                                      <div class="col-md-6">
                                    <p class="text-dark">رقم الهاتف : <span class="text-secondary">
                                      <!--
                                    0595143841-->
                                    <?php 
                                    echo $User_Phone_Number;
                                    ?>
                                  </span></p>
                                    <div class="d-flex flex-row align-items-center">
                                      <i class="fas fa-phone-flip fa-lg me-3 fa-fw"></i>
                                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                        <input type="tel" id="NewPhoneNumber" name="NewPhoneNumber" class="form-control" data-mdb-showcounter="true" pattern="[0-9]*" minlength="10" maxlength="10" required/>
                                        <label class="form-label" for="NewPhoneNumber">رقم الهاتف الجديد</label>
                                        <div class="form-helper"></div>
                                      </div>
                                    </div>
                                    </div>
                                    </div>

                              <div class="row mb-2">
                                <div class="col-md-6">
                                <p class="text-dark mt-2">لينكدان : <span class="text-secondary">
                                  <!--
                                  علا خالد-->
                                  <?php 
                                  echo $User_LinkedIn_ID;
                                  ?>

                                </span></p>
                                  <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-linkedin fa-lg me-3 fa-fw"></i>
                                    <div data-mdb-input-init class="form-outline text-start mb-2">
                                      <input type="text" name="NewLinkedIn" id="NewLinkedIn" placeholder="لينكدان الجديد" class="form-control form-control-lg" required/>
                                      <label class="form-label" for="NewLinkedIn">لينكدان الجديد</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                <p class="text-dark mt-2">فيس بوك : <span class="text-secondary">
                                  <!--
                                  علا خالد-->
                                  <?php 
                                  echo $User_Facebook_ID;
                                  ?>

                                </span></p>
                                  <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-facebook-f fa-lg me-3 fa-fw"></i>
                                    <div data-mdb-input-init class="form-outline flex-fill text-start mb-2">
                                      <input type="text" name="NewFacebook" id="NewFacebook" placeholder="فيس بوك الجديد" class="form-control form-control-lg" required/>
                                      <label class="form-label" for="NewFacebook">فيس بوك الجديد</label>
                                  </div>
                                </div>
                              </div>  
                              </div>   
                              <!--
                                  <p class="text-dark mt-2">لينكدان : <span class="text-secondary">علا خالد</span></p>
                                  <div data-mdb-input-init class="form-outline text-start mb-2">
                                    <input type="text" name="NewLinkedIn" id="NewLinkedIn" placeholder="لينكدان الجديد" class="form-control form-control-lg"/>
                                    <label class="form-label" for="NewLinkedIn">لينكدان الجديد</label>
                                  </div>
                                  <p class="text-dark mt-2">فيس بوك : <span class="text-secondary">علا خالد</span></p>

                                  <div data-mdb-input-init class="form-outline text-start mb-2">
                                    <input type="text" name="NewFacebook" id="NewFacebook" placeholder="فيس بوك الجديد" class="form-control form-control-lg"/>
                                    <label class="form-label" for="NewFacebook">فيس بوك الجديد</label>
                                  </div>-->
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="Submit-Change-Other-Information" data-mdb-ripple-init>حفظ</button>
                                  </div>
                                  </form>
                                  <script>
                                      document.getElementById('NewPhoneNumber').addEventListener('input', function (e) {
                                          var x = e.target.value.replace(/\D/g, '');
                                          e.target.value = x;
                                      });
                                  </script>
                                  <?php
                                    if(isset($_POST['Submit-Change-Other-Information'])){
                                      $New_Gender = $_POST['NewGender'];
                                      $New_Phone_Number = $_POST['NewPhoneNumber'];
                                      $Select_New_Country = $_POST['SelectNewCountry'];
                                      $Select_New_City = $_POST['SelectNewCity'];
                                      //echo "<script>alert('Gender ".$New_Gender."');</script>";

                                      /*if($User_Type_ID == 1){
                                        //$Newcheckboxvar = implode(',', $_POST['Newcheckboxvar']); 
                                        $Newcheckboxvar = print_r($_POST['Newcheckboxvar']); 
                                        //echo "<script>alert('phone number".$New_Phone_Number."');</script>";

                                        //echo "<script>alert('".$Newcheckboxvar."');</script>";

                                      }else*/
                                      if($User_Type_ID == 2){
                                        $Select_New_Growth_Strategy = $_POST['SelectNewGrowthStrategy'];
                                        $Select_New_Experience = $_POST['SelectNewExperience'];
                                      }
                                      //$Newcheckboxvar4 = implode(',', $_POST['Newcheckboxvar4']); 

                                      //this is used $Newcheckboxvar4 = print_r($_POST['Newcheckboxvar4']); 

                                      $Select_New_Investment_Range = $_POST['SelectNewInvestmentRange'];
                                      $New_Linked_In = $_POST['NewLinkedIn'];
                                      $New_Facebook = $_POST['NewFacebook'];


                                      if($conn){
                                        if($User_Type_ID == 1){
                                          $SqlUpdateOtherInformation = "UPDATE users_information
                                          SET
                                            User_Gender_ID = '$New_Gender',
                                            User_Phone_Number = '$New_Phone_Number',
                                            User_Country_ID = '$Select_New_Country',
                                            User_City_ID = '$Select_New_City',
                                            User_LinkedIn_ID = '$New_Linked_In',
                                            User_Facebook_ID = '$New_Facebook',
                                            User_Investment_Range_ID = '$Select_New_Investment_Range'
                                          WHERE User_ID LIKE $User_ID";
                                        }else
                                        if($User_Type_ID == 2){
                                          $SqlUpdateOtherInformation = "UPDATE users_information
                                          SET
                                            User_Gender_ID = '$New_Gender',
                                            User_Phone_Number = '$New_Phone_Number',
                                            User_Country_ID = '$Select_New_Country',
                                            User_City_ID = '$Select_New_City',
                                            User_LinkedIn_ID = '$New_Linked_In',
                                            User_Facebook_ID = '$New_Facebook',
                                            User_Investment_Range_ID = '$Select_New_Investment_Range',
                                            User_Experience_Level_ID = '$Select_New_Experience',
                                            User_Growth_Strategy_ID = '$Select_New_Growth_Strategy'
                                          WHERE User_ID LIKE $User_ID";
                                        }


                                          /*
                                        $SqlUpdateOtherInformation = "UPDATE users_information
                                        SET
                                          User_Gender_ID = '$New_Gender',
                                          User_Phone_Number = '$New_Phone_Number',
                                          User_Country_ID = '$Select_New_Country',
                                          User_City_ID = '$Select_New_City',
                                          User_LinkedIn_ID = '$New_Linked_In',
                                          User_Facebook_ID = '$New_Facebook',
                                          User_Investment_Range_ID = '$Select_New_Investment_Range',
                                          User_Stages_Of_Business_Operations_IDs = '$Newcheckboxvar',
                                          User_Investor_Type_IDs = '$Newcheckboxvar4',
                                          User_Experience_Level_ID = '$Select_New_Experience',
                                          User_Growth_Strategy_ID = '$Select_New_Growth_Strategy',
                                        WHERE User_ID LIKE $User_ID";*/

                                        $User_Update_Other_Information_Query = mysqli_query($conn, $SqlUpdateOtherInformation);
                                        if($User_Update_Other_Information_Query){
                                            $_SESSION['User_Gender_ID'] = $New_Gender;
                                            if($New_Gender == "1"){
                                              $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Male_Avatar.png";
                                              $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                                            }elseif($New_Gender == "2"){
                                              $User_Profile_Picture_Path = "/SIH/assets/img/Profile_Pictures/Avatars/Female_Avatar.png";
                                              $_SESSION['User_Profile_Picture_Path'] = $User_Profile_Picture_Path;
                                            }
                                            $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                            //echo '<script>window.location.reload();</script>';
                                            /*header('location: ./projects.php');
                                            exit;*/
                                            echo "<script>window.location.replace('./profile.php');</script>";
    
                                        }else{
                                            $_SESSION['error'] = 'فشل تحديث المعلومات!.';       
                                            /*header('location: ./profile.php');
                                            exit;   */    
                                            echo "<script>window.location.replace('./profile.php');</script>";
    
                                        }
                                      }
                                      else{
                                        //echo '<script>alert("Connection Error.");</script>'; 
                                        $_SESSION['error'] =  'Connection Error.';  
                                        echo "<script>window.location.replace('./profile.php');</script>";
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
                    
                    if($_SESSION['User_Type_ID']=="1") : ?> 
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
                      <?php elseif($_SESSION['User_Type_ID']=="2") : ?>

                      */
                    if($_SESSION['User_Type_ID']=="2") : ?>
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
                  
                      <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_About_Me_Modal"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="Edit_About_Me_Modal"
                          data-mdb-backdrop="static"
                          data-mdb-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="Edit_About_Me_Modal_Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation" method="post">
                                <div class="form-outline text-start mb-4" data-mdb-input-init >
                                        <label class="form-label text-dark" for="NewAboutMe">نبذة عني<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="NewAboutMe" id="NewAboutMe" placeholder="نبذة عني" rows="2" required></textarea>
                                        <div class="invalid-feedback">هذه الخانة مطلوبة</div>

                                      </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit-About-Me" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                </form>
                                <?php
                                if(isset($_POST['submit-About-Me'])){
                                  $NewAboutMe = $_POST['NewAboutMe'];
                                  if($conn){
                                    $SqlUpdateAboutMe = "UPDATE users_information SET User_About_Me = '$NewAboutMe' WHERE User_ID LIKE $User_ID";
                                    $User_Update_AboutMe_Query = mysqli_query($conn, $SqlUpdateAboutMe);
                                    if($User_Update_AboutMe_Query){
                                        $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                        //echo '<script>window.location.reload();</script>';
                                        /*header('location: ./profile.php');
                                        exit;*/
                                    }else{
                                        $_SESSION['error'] = 'فشل تحديث المعلومات!.'; 
                                        echo "<script>window.location.replace('./profile.php');</script>";
      
                                        /*header('location: ./profile.php');
                                        exit;   */    
                                    }
                                  }
                                  else{
                                    //echo '<script>alert("Connection Error.");</script>'; 
                                    $_SESSION['error'] =  'Connection Error.';  
                                    echo "<script>window.location.replace('./profile.php');</script>";

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
                      <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_AreasOfExp_Modal"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="Edit_AreasOfExp_Modal"
                          data-mdb-backdrop="static"
                          data-mdb-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="Edit_AreasOfExp_Modal_Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation"  method="post">
                                  <div class="form-outline text-start mb-2">
                                      <label class="form-label select-label text-dark" for="SelectNewAreasOfExp">مجالات الخبرة<span class="text-danger">*</span></label>
                                      <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="مجالات الخبرة" data-mdb-container="#Edit_AreasOfExp_Modal" class="form-select" name="SelectNewAreasOfExp" id="SelectAreasOfExp" required>
                                      <?php
                                    // Define your table and column names (change as needed)
                                    /*
                                      $areas_of_experience = "areas_of_experience";
                                      $Areas_Of_Experience_ID = "Areas_Of_Experience_ID";
                                      $Areas_Of_Experience_Name = "Areas_Of_Experience_Name";*/

                                      // Write the SQL query
                                      $sql = "SELECT * FROM areas_of_experience ORDER BY Areas_Of_Experience_Name ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['Areas_Of_Experience_ID'];
                                          $text = $row['Areas_Of_Experience_Name'];
                                          
                                          // Display option element with value and text
                                          echo "<option value='$value'>$text</option>";
                                        }
                                        
                                        echo "</select>";
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);

                                      ?>  
                                      <!--
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                      </select>-->
                                  </div>
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectNewExpYears">سنوات الخبرة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="سنوات الخبرة" data-mdb-container="#Edit_AreasOfExp_Modal" class="form-select" name="SelectNewExpYears" id="SelectExpYears" required>
                                    <?php 
                                        for ($i = 1; $i <= 10; $i++) {
                                          echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                      ?>  
                                    <!--
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>-->
                                    </select>
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit-Area-Of-Experience" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                </form>
                                <?php
                                if(isset($_POST['submit-Area-Of-Experience'])){
                                  $SelectNewAreasOfExp = $_POST['SelectNewAreasOfExp'];
                                  $SelectNewExpYears = $_POST['SelectNewExpYears'];
                                  if($conn){
                                    $SqlUpdateAreaOfExp = "UPDATE users_information SET User_Areas_Of_Experience_ID = '$SelectNewAreasOfExp', User_Years_Of_Experience ='$SelectNewExpYears' WHERE User_ID LIKE $User_ID";
                                    $User_Update_AreaOfExp_Query = mysqli_query($conn, $SqlUpdateAreaOfExp);
                                    if($User_Update_AreaOfExp_Query){
                                        $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                        //echo '<script>window.location.reload();</script>';
                                        /*header('location: ./projects.php');
                                        exit;*/
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }else{
                                        $_SESSION['error'] = 'فشل تحديث المعلومات!.';       
                                        /*header('location: ./profile.php');
                                        exit;   */    
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }
                                  }
                                  else{
                                    //echo '<script>alert("Connection Error.");</script>'; 
                                    $_SESSION['error'] =  'Connection Error.';  
                                    echo "<script>window.location.replace('./profile.php');</script>";
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
                      <div class="col-md-4 text-end">
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_Sectors_Interested_Modal"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="Edit_Sectors_Interested_Modal"
                          data-mdb-backdrop="static"
                          data-mdb-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="Edit_Sectors_Interested_Modal_Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation"  method="post">
                                  <div class="text-start mb-2">
                                    <label class="form-label text-dark">أي من القطاعات الصناعية تهمك</label>
                                  </div>
                                  <div class="text-start mb-2">
                                  <?php
                                  // Define your table and column names (change as needed)
                                      /*$industrial_sectors = "industrial_sectors";
                                      $Industrial_Sectors_ID = "Industrial_Sectors_ID";
                                      $Industrial_Sectors_Name = "Industrial_Sectors_Name";*/

                                      // Write the SQL query
                                      $sql = "SELECT Industrial_Sectors_ID, Industrial_Sectors_Name FROM industrial_sectors ORDER BY Industrial_Sectors_Name ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                        // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['Industrial_Sectors_ID'];
                                          $text = $row['Industrial_Sectors_Name'];
                                          
                                          // Display option element with value and text
                                          //echo "<option value='$value'>$text</option>";
                                          echo '<div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="checkbox" name="Newcheckboxvar2[]" id="New2ndinlineCheckbox'.$value.'" value="'.$value.'"/>
                                          <label class="form-check-label" for="New2ndinlineCheckbox'.$value.'">'.$text.'</label>
                                        </div>';
                                        }
                                        
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);

                                      ?>
                                      <!--
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox1" value="option1" required/>
                                      <label class="form-check-label" for="2ndinlineCheckbox1">التعليم والتدريب</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox2" value="option2" />
                                      <label class="form-check-label" for="2ndinlineCheckbox2">الزراعة</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox3" value="option3" />
                                      <label class="form-check-label" for="2ndinlineCheckbox3">خدمات الأعمال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox4" value="option4" />
                                      <label class="form-check-label" for="2ndinlineCheckbox4">الطاقة والموارد الطبيعية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox5" value="option5" />
                                      <label class="form-check-label" for="2ndinlineCheckbox5">الترفيه والتسلية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox6" value="option6" />
                                      <label class="form-check-label" for="2ndinlineCheckbox6">الشؤون المالية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox7" value="option7" />
                                      <label class="form-check-label" for="2ndinlineCheckbox7">الطعام والمشروبات</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox8" value="option8" />
                                      <label class="form-check-label" for="2ndinlineCheckbox8">الضيافة، المطاعم والحانات</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox9" value="option9" />
                                      <label class="form-check-label" for="2ndinlineCheckbox9">التصنيع والهندسة</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox10" value="option10" />
                                      <label class="form-check-label" for="2ndinlineCheckbox10">الإعلام</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox11" value="option11" />
                                      <label class="form-check-label" for="2ndinlineCheckbox11">الطب والعلوم</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox12" value="option12" />
                                      <label class="form-check-label" for="2ndinlineCheckbox12">الخدمات الشخصية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox13" value="option13" />
                                      <label class="form-check-label" for="2ndinlineCheckbox13">المنتجات والاختراعات</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox14" value="option14" />
                                      <label class="form-check-label" for="2ndinlineCheckbox14">العقارات</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox15" value="option15" />
                                      <label class="form-check-label" for="2ndinlineCheckbox15">التجزئة</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox16" value="option16" />
                                      <label class="form-check-label" for="2ndinlineCheckbox16">المبيعات والتسويق</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox17" value="option17" />
                                      <label class="form-check-label" for="2ndinlineCheckbox17">البرمجيات</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox18" value="option18" />
                                      <label class="form-check-label" for="2ndinlineCheckbox18">التكنولوجيا</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox19" value="option19" />
                                      <label class="form-check-label" for="2ndinlineCheckbox19">النقل</label>
                                    </div>-->
                                  </div>  
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectNewLocation">أي المواقع تهمك؟<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المواقع" data-mdb-container="#Edit_Sectors_Interested_Modal" class="form-select" name="SelectNewLocation" id="SelectLocation">
                                    <?php 
                                      $Country = "countries";
                                      $Country_ID = "id";
                                      $Country_Name = "native";
                                    
                                      // Write the SQL query
                                      $sql = "SELECT $Country_ID, $Country_Name FROM $Country ORDER BY $Country_Name ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row[$Country_ID];
                                          $text = $row[$Country_Name];
                                          
                                          // Display option element with value and text
                                          echo "<option value='$value'>$text</option>";
                                        }
                                        
                                        echo "</select>";
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);

                                      ?>
                                      <!--
                                      <option value="1">الإمارات</option>
                                      <option value="2">البحرين</option>
                                      <option value="3">مصر</option>
                                      <option value="4">إيران</option>
                                      <option value="5">الأردن</option>
                                      <option value="6">الكويت</option>
                                      <option value="7">لبنان</option>
                                      <option value="8">عُمان</option>
                                      <option value="9" selected>فلسطين</option>
                                      <option value="10">قطر</option>
                                      <option value="11">السعودية</option>
                                      <option value="12">سوريا</option>
                                      <option value="13">اليمن</option>
                                    </select>-->
                                  </div>  
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit-Location" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                </form>
                                <?php
                                if(isset($_POST['submit-Location'])){
                                  //$Newcheckboxvar2 = print_r($_POST['Newcheckboxvar2']); 
                                  $Newcheckboxvar2 = implode(',', $_POST['Newcheckboxvar2']); 
                                  $SelectNewLocation = $_POST['SelectNewLocation'];
                                  //echo $checkboxvar2;
                                  //echo "<script>alert('".$Newcheckboxvar2."');</script>";

                                  if($conn){
                                    $SqlUpdateLocation = "UPDATE users_information SET User_Industrial_Sectors_IDs = '$Newcheckboxvar2', User_Location ='$SelectNewLocation' WHERE User_ID LIKE $User_ID";
                                    $User_Update_Location_Query = mysqli_query($conn, $SqlUpdateLocation);
                                    if($User_Update_Location_Query){
                                        $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                        //echo '<script>window.location.reload();</script>';
                                        /*header('location: ./projects.php');
                                        exit;*/
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }else{
                                        $_SESSION['error'] = 'فشل تحديث المعلومات!.';       
                                        /*header('location: ./profile.php');
                                        exit;   */    
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }
                                  }
                                  else{
                                    //echo '<script>alert("Connection Error.");</script>'; 
                                    $_SESSION['error'] =  'Connection Error.';  
                                    echo "<script>window.location.replace('./profile.php');</script>";
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
                      <div class="col-md-4 text-end">
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_Languages_Modal"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="Edit_Languages_Modal"
                          data-mdb-backdrop="static"
                          data-mdb-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="Edit_Languages_Modal_Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation"  method="post">
                                  <div class="text-start mb-2">
                                    <label class="form-label text-dark">أي من اللغات التالية تهمك</label>
                                  </div>
          
                                  <div class="text-start mb-2">
                                    <?php
                                  $sql = "SELECT * FROM languages ORDER BY Language_Name ASC";
                                    $result = mysqli_query($conn, $sql);

                                    // Check query execution
                                    if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                      
                                      // Loop through each row in the result
                                      while($row = mysqli_fetch_assoc($result)) {
                                        //$value = $row['Language_ID'];
                                        $value = $row['id'];
                                        $text = $row['Language_Name'];
                                        
                                        // Display option element with value and text
                                        //echo "<option value='$value'>$text</option>";
                                        echo '<div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="checkbox" name="Newcheckboxvar3[]" id="New3rdinlineCheckbox'.$value.'" value="'.$value.'" />
                                        <label class="form-check-label" for="New3rdinlineCheckbox'.$value.'">'.$text.'</label>
                                      </div>';
                                      }
                                      
                                    } else {
                                      echo "No records found";
                                    }
                                    ?>
                                    <!--
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar3[]" id="3rdinlineCheckbox1" value="Arabic" required/>
                                      <label class="form-check-label" for="3rdinlineCheckbox1">العربية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar3[]" id="3rdinlineCheckbox2" value="English" />
                                      <label class="form-check-label" for="3rdinlineCheckbox2">الإنجليزية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar3[]" id="3rdinlineCheckbox3" value="French" />
                                      <label class="form-check-label" for="3rdinlineCheckbo3">الفرنسية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar3[]" id="3rdinlineCheckbox4" value="Italian" />
                                      <label class="form-check-label" for="3rdinlineCheckbox4">الإيطالية</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="checkboxvar3[]" id="3rdinlineCheckbox5" value="Russian" />
                                      <label class="form-check-label" for="3rdinlineCheckbox5">الروسية</label>
                                    </div>-->
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="Submit-Languages" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                  </form>
                                  <?php
                                if(isset($_POST['Submit-Languages'])){
                                  //$Newcheckboxvar3 = print_r($_POST['Newcheckboxvar3']); 
                                  $Newcheckboxvar3 = implode(',', $_POST['Newcheckboxvar3']); 
                                  //$Newcheckboxvar3 = array_values($_POST['Newcheckboxvar3']);
                                  //echo $checkboxvar2;
                                  //echo "<script>alert('languages : ".$Newcheckboxvar3."');</script>";

                                  if($conn){
                                    $SqlUpdateLanguages = "UPDATE users_information SET User_Language_IDs = '$Newcheckboxvar3' WHERE User_ID LIKE $User_ID";
                                    $User_Update_Languages_Query = mysqli_query($conn, $SqlUpdateLanguages);
                                    if($User_Update_Languages_Query){
                                        $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                        //echo '<script>window.location.reload();</script>';
                                        /*header('location: ./projects.php');
                                        exit;*/
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }else{
                                        $_SESSION['error'] = 'فشل تحديث المعلومات!.';       
                                        /*header('location: ./profile.php');
                                        exit;   */    
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }
                                  }
                                  else{
                                    //echo '<script>alert("Connection Error.");</script>'; 
                                    $_SESSION['error'] =  'Connection Error.';  
                                    echo "<script>window.location.replace('./profile.php');</script>";
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
                          نوع المستثمر
                        </h5>
                      </div>
                      <div class="col-md-4 text-end">
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_Investor_Type_Modal_Label"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="Edit_Investor_Type_Modal_Label"
                          data-mdb-backdrop="static"
                          data-mdb-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="Edit_Investor_Type_Modal_Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation"  method="post">


                                  <div class="text-start mb-2">
                                    <?php
                                      //if($_SESSION['user_type']=="user1") :

                                      if($_SESSION['User_Type_ID']=="1") : ?> 

                                      <label class="form-label text-dark text-start">أي نوع من المستثمرين أنت؟</label>
                                      <?php elseif($_SESSION['User_Type_ID']=="2") : ?>
                                      <label class="form-label text-dark text-start">أي نوع من المستثمرين تبحث عنه؟</label>
                                      <?php endif; ?>
                                  </div>


                                <div class="text-start mb-2">
                                <?php
                                  // Define your table and column names (change as needed)
                                  /*
                                      $investor_type = "investor_type";
                                      $Investor_Type_ID = "Investor_Type_ID";
                                      $Investor_Type_Name = "Investor_Type_Name";*/

                                      // Write the SQL query
                                      $sql = "SELECT Investor_Type_ID, Investor_Type_Name FROM investor_type ORDER BY Investor_Type_ID ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['Investor_Type_ID'];
                                          $text = $row['Investor_Type_Name'];
                                          
                                          //echo "<option value='$value'>$text</option>";
                                          echo '<div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="checkbox" name="Newcheckboxvar4[]" id="New4thinlineCheckbox'.$value.'" value="'.$value.'" />
                                          <label class="form-check-label" for="New4thinlineCheckbox'.$value.'">'.$text.'</label>
                                        </div>';
                                        }
                                        
                                        //echo "</select>";
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);*/

                                      ?>
                                      
                                  </div>  
                                  
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit-Investor-Type" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                </form>
                                <?php
                                if(isset($_POST['submit-Investor-Type'])){
                                  
                                  if(isset($_POST['Newcheckboxvar4'])){

                                    //$Newcheckboxvar4 = print_r($_POST['Newcheckboxvar4']); 
                                    $Newcheckboxvar4 = implode(',', $_POST['Newcheckboxvar4']); 
                                    //echo "<script>alert('".$Newcheckboxvar4."');</script>";
                                  }
                                  if($conn){

                                    $sqlUserInvestorTypeIDs= "UPDATE users_information SET User_Investor_Type_IDs = '$Newcheckboxvar4' WHERE User_ID LIKE $User_ID";
                                    $User_Update_Investor_Type_IDs = mysqli_query($conn, $sqlUserInvestorTypeIDs);
                                    //echo "<script>alert('query = ".$User_Update_Stages_Of_Business_Operations_Query."');</script>";

                                    if($User_Update_Investor_Type_IDs){
                                        //echo "<script>alert('تمت العملية بنجاح');</script>";
                                        $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                        //echo '<script>window.location.reload();</script>';
                                        /*header('location: ./projects.php');
                                        exit;*/
                                        echo "<script>window.location.replace('./profile.php');</script>";
                                        //echo "<script>window.location.replace('".$_SERVER['PHP_SELF']."');</script>";


                                    }else{
                                        $_SESSION['error'] = 'فشل تحديث المعلومات!.';    
                                        echo "<script>alert('فشلت العملية ');</script>";
   
                                        /*header('location: ./profile.php');
                                        exit;   */    
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }
                                  }
                                  else{
                                    //echo '<script>alert("Connection Error.");</script>'; 
                                    $_SESSION['error'] =  'Connection Error.';  
                                    echo "<script>window.location.replace('./profile.php');</script>";
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
                if($_SESSION['User_Type_ID']=="1") : ?> 
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-4">
                        <h5 class="card-title fw-bold">
                        مراحل عمل الشركة
                        </h5>
                      </div>
                      <div class="col-md-4 text-end">
                      <button type="button" class="btn btn-outline-secondary text-dark btn-sm" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#Edit_Stages_Of_Business_Operations_Modal_Label"><i class="fas fa-pen"></i></button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="Edit_Stages_Of_Business_Operations_Modal_Label"
                          data-mdb-backdrop="static"
                          data-mdb-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="Edit_Stages_Of_Business_Operations_Modal_Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation"  method="post">

                                  <div class="text-start mb-2">
                                    <label class="form-label text-dark">أي من مراحل عمل الشركة التي تفضلها؟</label>
                                  </div>
                                  <div class="text-start mb-2">
                                  <?php
                                  // Define your table and column names (change as needed)
                                      /*$industrial_sectors = "industrial_sectors";
                                      $Industrial_Sectors_ID = "Industrial_Sectors_ID";
                                      $Industrial_Sectors_Name = "Industrial_Sectors_Name";*/

                                      // Write the SQL query
                                      $sql = "SELECT Stages_Of_Business_Operations_ID, Stages_Of_Business_Operations_Name FROM stages_of_business_operations ORDER BY Stages_Of_Business_Operations_ID ASC";
                                      $result = mysqli_query($conn, $sql);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                      // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row['Stages_Of_Business_Operations_ID'];
                                          $text = $row['Stages_Of_Business_Operations_Name'];
                                          
                                          // Display option element with value and text
                                          //echo "<option value='$value'>$text</option>";
                                          echo '<div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="checkbox" name="Newcheckboxvar[]" id="NewinlineCheckbox'.$value.'" value="'.$value.'" />
                                          <label class="form-check-label" for="NewinlineCheckbox'.$value.'">'.$text.'</label>
                                        </div>';
                                        }
                                        
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      //mysqli_close($conn);

                                      ?>
                                      
                                  </div>  
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit-Stages-Of-Business-Operations" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                </form>
                                <?php
                                if(isset($_POST['submit-Stages-Of-Business-Operations'])){
                                  

                                  if($User_Type_ID == 1){
                                    if(isset($_POST['Newcheckboxvar'])){
                                      $Newcheckboxvar = implode(',', $_POST['Newcheckboxvar']); 
                                      //$Newcheckboxvar = print_r($_POST['Newcheckboxvar']); 
                                      //echo "<script>alert('phone number".$New_Phone_Number."');</script>";
                                    }
                                    //echo "<script>alert('".$Newcheckboxvar."');</script>";
                                  }
                                  if($conn){

                                    $SqlStagesOfBusinessOperations = "UPDATE users_information SET User_Stages_Of_Business_Operations_IDs = '$Newcheckboxvar' WHERE User_ID LIKE $User_ID";
                                    $User_Update_Stages_Of_Business_Operations_Query = mysqli_query($conn, $SqlStagesOfBusinessOperations);
                                    //echo "<script>alert('query = ".$User_Update_Stages_Of_Business_Operations_Query."');</script>";

                                    if($User_Update_Stages_Of_Business_Operations_Query){
                                        //echo "<script>alert('تمت العملية بنجاح');</script>";
                                        $_SESSION['success'] = 'تم تحديث المعلومات بنجاح!.';
                                        //echo '<script>window.location.reload();</script>';
                                        /*header('location: ./projects.php');
                                        exit;*/
                                        echo "<script>window.location.replace('./profile.php');</script>";
                                        //echo "<script>window.location.replace('".$_SERVER['PHP_SELF']."');</script>";


                                    }else{
                                        $_SESSION['error'] = 'فشل تحديث المعلومات!.';    
                                        echo "<script>alert('فشلت العملية ');</script>";
   
                                        /*header('location: ./profile.php');
                                        exit;   */    
                                        echo "<script>window.location.replace('./profile.php');</script>";

                                    }
                                  }
                                  else{
                                    //echo '<script>alert("Connection Error.");</script>'; 
                                    $_SESSION['error'] =  'Connection Error.';  
                                    echo "<script>window.location.replace('./profile.php');</script>";
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