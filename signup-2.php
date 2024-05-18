<!DOCTYPE html>
<?php
session_start();
$title = "Social Investment Hub (SIH) - Signup Page";

include "./head.php";
?>

<body>
<header>
  <!-- Intro settings -->

</header>
<!--Main layout-->

<main>
  <div class="container-fluid bg-image" style="background-image: url(./assets/img/Background-Gradient-100.png);">

    <!--Section: Content-->
    <section class="vh-100 pb-5 justify-content-center">
      <div class="container py-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-8 col-xl-8">
            <div class="card shadow-2-strong rounded" style="border-radius: 1rem;">
              <div class="card-body text-center">
                <img src="./assets/img/logo-v2-1.svg"
                style="width: 218px; height: 70;" alt="logo">

                <h5>إكمال إنشاء حساب</h5>
                <p class="text-secondary mb-2">أكمل المعلومات التالية</p>
                
                <!--
                <form action="" method="post">-->
                  <div class="container-fluid">

                    <section id="custom-validation" class="justify-content-center text-center w-100">
                      <div>

                      <ul class="stepper" id="stepper-buttons" data-mdb-stepper-init data-mdb-stepper-linear="true">
                        <form class="needs-validation stepper-form" action="" method="post">
                          <li class="stepper-step stepper-active">
                            <div class="stepper-head">
                              <span class="stepper-head-icon"> 1 </span>
                              <span class="stepper-head-text">  </span>
                            </div>
                            <div class="stepper-content">
                              <div class="row scroll">
                                <div class="col-md-6">
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectCountry">الدولة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الدولة" class="form-select" name="SelectCountry" id="SelectCountry" required>
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

                                    </select>-->
                                  </div>
                                  <input type="hidden" id="selected-value" name="selected-value">

                                </div>
                                <div class="col-md-6">
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectCity">المدينة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المدينة" class="form-select" name="SelectCity" id="SelectCity" required>
                                    <?php
                                    /*
                                    if (isset($_POST["SelectCountry"])) {
                                      $Search_City_ID = $_POST["SelectCountry"];
                                    }
                                    if (isset($_POST["selected-value"])) {
                                      $selected_value = $_POST["selected-value"];
                                    }
                                    $selected_value = $_POST["selected-value"];

                                    echo '                            <script>alert("id = "'.$Search_City_ID.'");</script>
                                    ';
                                    echo "select = ".$Search_City_ID;
*/


                                   // $Search_City_ID = $_POST["SelectCountry"];
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
                                      // Define your table and column names (change as needed)
                                      $City = "states";
                                      $City_ID = "id";
                                      $Country_ID = "country_id";
                                      $City_Name = "name_ar";


                                      // Write the SQL query
                                      $sql2 = "SELECT $City_ID, $City_Name FROM $City WHERE $Country_ID LIKE '1' ORDER BY $City_Name ASC";
                                      $result = mysqli_query($conn, $sql2);

                                      // Check query execution
                                      if (mysqli_num_rows($result) > 0) {
                                       // echo "<select>";
                                        
                                        // Loop through each row in the result
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $value = $row[$City_ID];
                                          $text = $row[$City_Name];
                                          
                                          // Display option element with value and text
                                          echo "<option value='$value'>$text</option>";
                                        }
                                        
                                        echo "</select>";
                                      } else {
                                        echo "No records found";
                                      }

                                      // Close connection
                                      mysqli_close($conn);
                                      */

                                      ?>
                                      <!--
                                    <option value="East Jerusalem">East Jerusalem</option>
                                    <option value="Hebron">Hebron</option>
                                    <option value="Nablus">Nablus</option>
                                    <option value="Gaza City">Gaza City</option>
                                    <option value="Jenin">Jenin</option>
                                    <option value="Ramallah">Ramallah</option>
                                    <option value="Bethlehem">Bethlehem</option>
                                    <option value="Khan Yunis">Khan Yunis</option>
                                    <option value="Rafah">Rafah</option>
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
                                </div>
                              </div>
                              <div class="row mb-2">
                            
                                <div class="col-md-6">
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectAreasOfExp">مجالات الخبرة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="مجالات الخبرة" class="form-select" name="SelectAreasOfExp" id="SelectAreasOfExp" required>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                    </select>
                                  </div>
                                </div>
                            
                                <div class="col-md-6">
                                  <div class="text-start mt-2">

                                <label class="form-label text-dark" for="SelectExpYears">سنوات الخبرة<span class="text-danger">*</span></label>

                                  <div class="form-outline text-start mb-2" data-mdb-input-init>
                                    <input type="number" id="SelectExpYears" name="SelectExpYears" class="form-control" value="1"/>
                                  </div>
                                </div>
<!--
                                    <div class="form-outline text-start mb-2">

                                    <label class="form-label select-label text-dark" for="SelectExpYears">سنوات الخبرة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="سنوات الخبرة" class="form-select" name="SelectExpYears" id="SelectExpYears" required>
                                    <?php /*
                                        for ($i = 1; $i <= 10; $i++) {
                                          echo '<option value="'.$i.'">'.$i.'سنوات</option>';
                                        }*/
                                      ?>  
                                    <!--
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                    </select>
                                  </div>-->
                                </div>
                              </div>
                              <div class="form-outline text-start mb-4" data-mdb-input-init >
                                <label class="form-label text-dark" for="AboutMe">نبذة عني<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="AboutMe" id="AboutMe" placeholder="نبذة عني" rows="2" required></textarea>
                                <div class="invalid-feedback">هذه الخانة مطلوبة</div>

                              </div>
                              <div class="row mb-2">
                                <div class="col-md-6">
                                  <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-linkedin fa-lg me-3 fa-fw"></i>
                                    <div data-mdb-input-init class="form-outline text-start mb-2">
                                      <input type="text" name="LinkedIn" id="LinkedIn" placeholder="لينكدان" class="form-control form-control-lg"/>
                                      <label class="form-label" for="LinkedIn">لينكدان</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-facebook-f fa-lg me-3 fa-fw"></i>
                                    <div data-mdb-input-init class="form-outline flex-fill text-start mb-2">
                                      <input type="text" name="Facebook" id="Facebook" placeholder="فيس بوك" class="form-control form-control-lg"/>
                                      <label class="form-label" for="Facebook">فيس بوك</label>
                                  </div>
                                </div>
                              </div>  
                              </div>                            
                              <!-- Buttons -->
                              <div class="d-flex justify-content-end pt-2">
                                <button id="first-next-step" class="btn btn-primary" data-mdb-ripple-init>التالي</button>
                              </div>
                              <!-- Buttons -->
                            </div>
                          </li>
                          <li class="stepper-step">
                            <div class="stepper-head">
                              <span class="stepper-head-icon"> 2 </span>
                              <span class="stepper-head-text">  </span>
                            </div>
                            <div class="stepper-content">
                              <?php
                              if($_SESSION['user_type']=="user1") : ?> 
                              <div class="row mb-2">
                              <div class="multi-range-slider" data-mdb-multi-range-slider-init></div>
                                <div class="col-md-6">
                                <div class="form-outline mb-2">
                                  <label class="form-label text-dark" for="SelectInvestmentScope">نطاق الاستثمار<span class="text-danger">*</span></label>

                                  <div class="mt-3 multi-range-slider multi-ranges-basic" name="SelectInvestmentScope" data-mdb-multi-range-slider-init data-mdb-tooltip="true" data-mdb-min="100" data-mdb-max="10000" data-mdb-steps="100" data-mdb-startValues="[20,100]"></div>


                                <!--
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
                                <div class="form-outline text-start mb-2">
                                  <label class="form-label select-label text-dark" for="SelectLocation">أي المواقع تهمك؟<span class="text-danger">*</span></label>
                                  <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المواقع" class="form-select" name="SelectLocation" id="SelectLocation">
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
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label class="form-label text-dark text-start">مراحل عمل الشركة</label>
          
                              <div class="text-start mb-2">
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox1" value="option1" required />
                                  <label class="form-check-label" for="inlineCheckbox1">منتج النموذج الأولي/المنتج النهائي</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox2" value="option2" />
                                  <label class="form-check-label" for="inlineCheckbox2">غير ذلك</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox3" value="option3" />
                                  <label class="form-check-label" for="inlineCheckbox3">الربحية</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox4" value="option4" />
                                  <label class="form-check-label" for="inlineCheckbox4">التحقيق في الربح</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox5" value="option5" />
                                  <label class="form-check-label" for="inlineCheckbox5">تحقيق المبيعات</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox6" value="option6" />
                                  <label class="form-check-label" for="inlineCheckbox6">قبل بدء العمل/البحث والتطوير</label>
                                </div>
                              </div>

                              <?php elseif($_SESSION['user_type']=="user2") : ?>
                                <div class="row mb-2">
                                  <div class="col-md-6">
                                  <div class="form-outline text-start mb-2">
                                  <label class="form-label select-label text-dark" for="SelectLocation">أي المواقع تهمك؟<span class="text-danger">*</span></label>
                                  <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المواقع" class="form-select" name="SelectLocation" id="SelectLocation">
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
                                  </select>
                                </div>      
                                </div>
                          
                              <div class="col-md-6">
                                <div class="form-outline text-start mb-2">
                                  <label class="form-label select-label text-dark" for="SelectGrowthStrategy">ما هي استراتيجية النمو الخاص بك؟<span class="text-danger">*</span></label>
                                  <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المواقع" class="form-select" name="SelectGrowthStrategy" id="SelectGrowthStrategy">
                                    <option value="1">تمويل بدء العمل (الشركات الناشئة)</option>
                                    <option value="2">التوسع الجغرافي</option>
                                    <option value="3">تطوير منتجات جديدة</option>
                                    <option value="4">توسيع قاعدة العملاء</option>
                                    <option value="5">استحواذ على شركات أخرى</option>
                                    <option value="6">غير ذلك</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="form-outline text-start mb-2">
                                  <label class="form-label select-label text-dark" for="SelectGrowthStrategy">ما هي خبرتك في مجال ريادة الأعمال؟<span class="text-danger">*</span></label>
                                  <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الخبرة" class="form-select" name="SelectExperience" id="SelectExperience">
                                    <option value="1">مبتدئ</option>
                                    <option value="2">متوسط</option>
                                    <option value="3">متقدم</option>
                                  </select>
                                </div>
                            </div>
                              <?php endif; ?>
                            <div class="row">
                              <label class="form-label text-dark text-start">أي من القطاعات الصناعية تهمك</label>

                              <div class="text-start mb-2">

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
                                  <label class="form-check-label" for="2ndinlineCheckbox8">الضيافة، المطاعم</label>
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
                                </div>
                              </div>  
                            </div>                            
                              <!-- Buttons -->
                              <div class="d-flex justify-content-between">
                                <button id="first-prev-step" class="btn btn-primary" data-mdb-ripple-init>
                                  السابق
                                </button>
                                <button id="next-step" class="btn btn-primary" data-mdb-ripple-init>التالي</button>
                              </div>
                              <!-- Buttons -->
                            </div>
                          </li>
                          <li class="stepper-step">
                            <div class="stepper-head">
                              <span class="stepper-head-icon"> 3 </span>
                              <span class="stepper-head-text">  </span>
                            </div>
                            <div class="stepper-content py-3">
                              <div class="row mb-2">
                                <label class="form-label text-dark text-start">اللغات</label>
          
                                <div class="text-start mb-2">
                                  
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
                                  </div>
                                </div>
                                <?php
                                if($_SESSION['user_type']=="user1") : ?> 

                                <label class="form-label text-dark text-start">أي نوع من المستثمرين أنت؟</label>
                                <?php elseif($_SESSION['user_type']=="user2") : ?>
                                <label class="form-label text-dark text-start">أي نوع من المستثمرين تبحث عنه؟</label>
                                <?php endif; ?>

                                <div class="text-start mb-2">
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
                                  </div>
                                </div>   
                              <!-- Buttons -->
                              <div class="d-flex justify-content-between">
                                <button id="prev-step" class="btn btn-primary" data-mdb-ripple-init>
                                  السابق
                                </button>
                                <button class="btn btn-primary" type="submit" data-mdb-ripple-init>تم</button>
                              </div>
                              <!-- Buttons -->                                
                              <!-- Buttons - ->
                              <div class="d-flex justify-content-end">
                              <button class="btn btn-primary" type="submit" data-mdb-ripple-init>تم</button>
                              </div>
                              <!-- Buttons -->
                            </div>
                          </li>
                        </form>
                      </ul>
                      <!-- Buttons -- >
                      <div class="d-flex justify-content-center">
                        <button id="prev-step" class="btn btn-primary w-100 me-2" data-mdb-ripple-init>
                          السابق
                        </button>
                        <button id="next-step" class="btn btn-primary w-100" data-mdb-ripple-init>التالي</button>
                      </div>-->
                      <!-- Buttons -->
                      </div>

                    </section>
                  
                    <!-- step 1 -->
                    <!--
                    <div class="row ">
                      <div class="col-md-6">
                        <div class="form-outline text-start mb-4">
                          <label class="form-label select-label text-dark" for="SelectCountry">الدولة<span class="text-danger">*</span></label>
                          <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="الدولة" class="form-select" name="SelectCountry" id="SelectCountry" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                          </select>
                        </div>
                      </div>
                  
                      <div class="col-md-6">
                        <div class="form-outline text-start mb-4">
                          <label class="form-label select-label text-dark" for="SelectCity">المدينة<span class="text-danger">*</span></label>
                          <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المدينة" class="form-select" name="SelectCity" id="SelectCity" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row ">
                  
                      <div class="col-md-6">
                        <div class="form-outline text-start mb-4">
                          <label class="form-label select-label text-dark" for="SelectAreasOfExp">مجالات الخبرة<span class="text-danger">*</span></label>
                          <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="مجالات الخبرة" class="form-select" name="SelectAreasOfExp" id="SelectAreasOfExp" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                          </select>
                        </div>
                      </div>
                  
                      <div class="col-md-6">
                        <div class="form-outline text-start mb-4">
                          <label class="form-label select-label text-dark" for="SelectExpYears">سنوات الخبرة<span class="text-danger">*</span></label>
                          <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="سنوات الخبرة" class="form-select" name="SelectExpYears" id="SelectExpYears" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-outline text-start mb-4" data-mdb-input-init >
                      <label class="form-label text-dark" for="AboutMe">نبذة عني<span class="text-danger">*</span></label>
                      <textarea class="form-control" name="AboutMe" id="AboutMe" placeholder="نبذة عني" rows="3" required></textarea>
                    </div>
                    <div class="row ">
                      <div class="col-md-6">
                        <div data-mdb-input-init class="form-outline text-start mb-4">
                          <input type="text" name="LinkedIn" id="LinkedIn" placeholder="لينكدان" class="form-control form-control-lg"/>
                          <label class="form-label" for="LinkedIn">لينكدان</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div data-mdb-input-init class="form-outline text-start mb-4">
                          <input type="text" name="Facebook" id="Facebook" placeholder="فيس بوك" class="form-control form-control-lg"/>
                          <label class="form-label" for="Facebook">فيس بوك</label>
                        </div>
                      </div>
                    </div>
                    <div class="text-end">
                      <button data-mdb-ripple-init class="btn btn-primary" type="submit">التالي</button>
                    </div>-->

                    <!-- step 2 -->
                    <!--
                      <div class="row ">
                      <div class="col-md-6">

                        <div class="form-outline text-start mb-4">
                          <label class="form-label text-dark" for="SelectInvestmentScope">نطاق الاستثمار<span class="text-danger">*</span></label>
                          <div class="mt-3 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope"></div>
                          <!--<input type="range" class="form-range mt-4 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope" id="SelectInvestmentScope">
                          <div class="mt-3 multi-range-slider" data-mdb-multi-range-slider-init data-mdb-tooltip="true" name="SelectInvestmentScope"></div>
                        -- >
                      </div>
                    </div>
                
                    <div class="col-md-6">
                      <div class="form-outline text-start mb-4">
                        <label class="form-label select-label text-dark" for="SelectLocation">أي المواقع تهمك؟<span class="text-danger">*</span></label>
                        <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="المواقع" class="form-select" name="SelectLocation" id="SelectLocation" required>
                          <option value="1">موقع 1</option>
                          <option value="2">موقع 2</option>
                          <option value="3">موقع 3</option>
                          <option value="4">موقع 4</option>
                          <option value="5">موقع 5</option>
                          <option value="6">موقع 6</option>
                          <option value="7">موقع 7</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <label class="form-label text-dark text-start">مراحل عمل الشركة</label>

                    <div class="text-start mb-4">
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox1" value="option1" />
                        <label class="form-check-label" for="inlineCheckbox1">منتج النموذج الأولي/المنتج النهائي</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox2" value="option2" />
                        <label class="form-check-label" for="inlineCheckbox2">غير ذلك</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox3" value="option3" />
                        <label class="form-check-label" for="inlineCheckbox3">الربحية</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox4" value="option4" />
                        <label class="form-check-label" for="inlineCheckbox4">التحقيق في الربح</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox5" value="option5" />
                        <label class="form-check-label" for="inlineCheckbox5">تحقيق المبيعات</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkboxvar[]" id="inlineCheckbox6" value="option6" />
                        <label class="form-check-label" for="inlineCheckbox6">قبل بدء العمل/البحث والتطوير</label>
                      </div>
                    </div>

                    <label class="form-label text-dark text-start">أي من القطاعات الصناعية تهمك</label>

                    <div class="text-start mb-4">
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="checkbox" name="checkboxvar2[]" id="2ndinlineCheckbox1" value="option1" />
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
                        <label class="form-check-label" for="2ndinlineCheckbox8">الضيافة، المطاعم</label>
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
                      </div>
                    </div>
                    -->

                    <!-- Step 3 -->
                    <!--
                    <div class="row ">
                      <label class="form-label text-dark text-start">اللغات</label>

                      <div class="text-start mb-4">
                        <!--
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="checkboxvar3[]" id="3rdinlineCheckbox1" value="Arabic" />
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
                        </div>
                      </div>

                      <label class="form-label text-dark text-start">أي نوع من المستثمرين أنت؟</label>

                      <div class="text-start mb-4">
                        <div class="form-check form-check-inline ">
                          <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox1" value="option1" />
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
                        </div>
                      </div>   
                    -->

                  </div>

                  <?php

                  if (isset($_POST['SelectInvestmentScope'])) 
                  {
                    echo "range = ";
                      echo($_POST['SelectInvestmentScope']); 
                  }
                  if (isset($_POST['SelectExpYears'])){
                    $SelectExpYears = $_POST['SelectExpYears'];
                    echo "SelectExpYears = ".$SelectExpYears;
                  }
                  
                    //echo $_SESSION['user_type'];
                    /*
                      if (isset($_POST['checkboxvar'])) 
                      {
                        echo "array 1 = ";
                          print_r($_POST['checkboxvar']); 
                      }
                      if (isset($_POST['checkboxvar2'])) 
                      {
                          echo "array 2 = ";
                          print_r($_POST['checkboxvar2']); 
                      }
                      if (isset($_POST['checkboxvar3'])) 
                      {
                          echo "array 3 = ";
                          print_r($_POST['checkboxvar3']); 
                      }
                      if (isset($_POST['checkboxvar4'])) 
                      {
                          echo "array 4 = ";
                          print_r($_POST['checkboxvar4']); 
                      }*/
                  ?>
              <!--</form>-->

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!--Section: Content-->
      </div>
  </div>
</main>
<!--Main layout-->
<!-- MDB -->
</body>

<?php
include "./script-umd.php"; 
?>
<script>
  /*
  const selectElement = document.getElementById('SelectCountry');
  const selectedValueSpan = document.getElementById('selected-value'); // Optional for displaying value
  //alert("select span = ".$selectedValueSpan);

  selectElement.addEventListener('change', (event) => {
    const selectedValue = event.target.value;

    console.log('Selected value:', selectedValue);
    selectedValueSpan.value = selectedValue;
*/
    //alert("select = ".$selectedValue);

    // Optional: Update a span element with the selected value
    /*
    if (selectedValueSpan) {
      selectedValueSpan.textContent = `Selected value: ${selectedValue}`;
    }*/
 // });
    //alert(document.getElementById("SelectCountry").value);
  </script>

</html>