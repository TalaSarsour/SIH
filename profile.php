<!DOCTYPE html>
<?php
session_start();
$title = "الملف الشخصي";

include "./head.php";
?>
<head>
    <link rel="stylesheet" href="./assets/css/Custom/home.css"/>
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
  ?>
  <!--Main layout-->
  <main>
    <!-- Section: Main Search -->
    <section class="container pt-4 pb-5">


      <div class="container-fluid">
        <!--Section:  cards-->
        <section>
          <div class="container">
            <div class="row justify-content-between">

              <div class="col-md-3">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="./assets/img/profile-picture-female-1.png" class="img-fluid" style="height: 100%; width: 100%;"/>
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
                            <form class="needs-validation"  method="post">

                              <!--Avatar-->
                              <div>
                                <div class="d-flex justify-content-start d-inline-flex position-relative mb-4">
                                  <span class="position-absolute bottom-0 start-100 translate-middle border border-light rounded-circle text-light" style="background-color: #BF9874;">
                                    <label class="form-label text-white mt-2 mx-3" for="customFile2"><i class="fas fa-pen fa-xs"></i>
                                    </label>
                                    <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                  </span>
                                    <img id="selectedAvatar" src="./assets/img/avatar-female-profile-picture-1.png"
                                    class="rounded-circle" style="width: 200px; height: 200px;" alt="example placeholder" />
                                </div>
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
                              <!--
                              <div class="d-inline-flex position-relative">
                                <span class="position-absolute bottom-0 start-100 translate-middle px-2 border border-light rounded-circle text-light" style="background-color: #BF9874;">
                                    <i class="fas fa-pen fa-xs"></i>
                                </span>
                                <img class="rounded-circle shadow-4" src="./assets/img/avatar-female-profile-picture-1.png" alt="Avatar" style="width: 70px; height: 70px;">
                              </div>-->
                                <p class="text-dark mt-2">الاسم الكامل : <span class="text-secondary">علا خالد المصعبي</span></p>
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <input type="text" id="NewFullName" name="NewFullName" placeholder="ادخل الاسم الكامل الجديد" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="NewFullName">الاسم الكامل الجديد</label>
                                </div>
                                <p class="text-dark mt-2">البريد الالكتروني : <span class="text-secondary">Hala.salahqu20@gmail.com</span></p>
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <input type="email" id="NewEmail" name="NewEmail" placeholder="ادخل البريد الالكتروني الجديد" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="NewEmail">البريد الالكتروني الجديد</label>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                </div>

                                </form>
                            </div>
                            <div class="modal-footer">

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bottom-0 d-flex align-items-end h-100 text-start justify-content-start">
                        <div>
                          <p class="fw-bold text-white">علا خالد المصعبي</p>
                          <p class="text-white">Hala.salahqu20@gmail.com</p>
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
                            <input type="password" id="OldPassword" name="OldPassword" placeholder="أدخل كلمة المرور  القديمة"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                            <label class="form-label" for="OldPassword">كلمة المرور القديمة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="NewPassword" name="NewPassword" placeholder="أدخل كلمة المرور  الجديدة"  data-mdb-showcounter="true" maxlength="20" class="form-control form-control-lg" required/>
                            <label class="form-label" for="NewPassword">كلمة المرور الجديدة</label>
                            <div class="form-helper"></div>
                            <div class="invalid-feedback">كلمة المرور ضعيفة يجب ان تحتوي على ارقام  و احرف كبيرة@!$</div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>إعادة تعيين</button>
                          </div>

                          </form>
                      </div>
                      <div class="modal-footer">

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card pb-5 mt-4">
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
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold" id="staticBackdropLabel">تحديث المعلومات الاخرى</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body text-start">
                                <form class="needs-validation"  method="post">
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
                                  </div>

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
                                  <p class="text-dark mt-2">نطاق الاستثمار : <span class="text-secondary">12000$</span></p>
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

                                  <p class="text-dark mt-2">مراحل عمل الشركة : <span class="text-secondary">ربحية</span></p>
                                  <div class="text-start mb-2">
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
                                </div>
                              </div>
                                  <p class="text-dark mt-2">لينكدان : <span class="text-secondary">علا خالد</span></p>
                                  <div data-mdb-input-init class="form-outline text-start mb-2">
                                    <input type="text" name="NewLinkedIn" id="NewLinkedIn" placeholder="لينكدان الجديد" class="form-control form-control-lg"/>
                                    <label class="form-label" for="NewLinkedIn">لينكدان الجديد</label>
                                  </div>
                                  <p class="text-dark mt-2">فيس بوك : <span class="text-secondary">علا خالد</span></p>

                                  <div data-mdb-input-init class="form-outline text-start mb-2">
                                    <input type="text" name="NewFacebook" id="NewFacebook" placeholder="فيس بوك الجديد" class="form-control form-control-lg"/>
                                    <label class="form-label" for="NewFacebook">فيس بوك الجديد</label>
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                  </div>
                                  </form>
                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-text text-dark mt-2">
                      الدولة: <span class="text-secondary">مصر</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      المدينة: <span class="text-secondary">اسيوط</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      نطاق الاستثمار : <span class="text-secondary">12000$</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      مراحل عمل الشركة : <span class="text-secondary">ربحية</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      لينكدان : <span class="text-secondary">علا خالد</span>
                    </p>
                    <p class="card-text text-dark mt-2">
                      فيس بوك : <span class="text-secondary">علا خالد</span>
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
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title modal-dialog-centered fw-bold text-center" style="text-align: center;" id="staticBackdropLabel">تحديث المعلومات</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation"  method="post">
                                <div class="form-outline text-start mb-4" data-mdb-input-init >
                                        <label class="form-label text-dark" for="NewAboutMe">نبذة عني<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="NewAboutMe" id="NewAboutMe" placeholder="نبذة عني" rows="2" required></textarea>
                                        <div class="invalid-feedback">هذه الخانة مطلوبة</div>

                                      </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                  </form>
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
                      أنا متحمسة لعالم الموضة والأناقة، حيث اكتشف الإلهام في التصاميم الجديدة والاتجاهات الحالية. بخبرتي وشغفي بالأزياء، قمت بالعمل في مجال الموضة بكثرة وعدد كبير، حيث يلزم في تنظيم وتنسيق العروض الأزيائية والفعاليات الخاصة.
                      أخذ مساعدة الناس على التعبير عن أنفسهم من خلال ملابسهم، من خلال توفير الإرشادات والإرشادات حول كيفية اختيار المسؤول الرئيسي ومظهرهم.
                      بفضل ما تمتلكه من عالم ما بعدي، أتمكن من معرفة الاتجاهات الحالية والحديثة لمصممي الأزياء العالمية، مما يمكنني من تقديم نصائح فعالة وإلهامية للأشخاص الذين يرغبون في التميز في أسلوبهم الشخصي.
                    </p>
                  </div>
                </div>
                <div class="card mt-3">
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
                                      <label class="form-label select-label text-dark" for="NewSelectAreasOfExp">مجالات الخبرة<span class="text-danger">*</span></label>
                                      <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="مجالات الخبرة" class="form-select" name="NewSelectAreasOfExp" id="SelectAreasOfExp" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                      </select>
                                  </div>
                                  <div class="form-outline text-start mb-2">
                                    <label class="form-label select-label text-dark" for="SelectExpYears">سنوات الخبرة<span class="text-danger">*</span></label>
                                    <select data-mdb-select-init data-mdb-filter="true" data-mdb-clear-button="true" data-mdb-placeholder="سنوات الخبرة" class="form-select" name="SelectExpYears" id="SelectExpYears" required>
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
                                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                  </form>
                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-text text-secondary">
                      عالم الموضة
                    </p>
                    <h5 class="card-title fw-bold">
                      سنوات الخبرة
                    </h5>
                    <p class="card-text text-secondary">
                      ٤ سنوات
                    </p>
                  </div>
                </div>
                <div class="card mt-3">
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
                                    </div>
                                  </div>  
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
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                  </form>
                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-start">
                      <p class="card-text text-secondary me-3">
                        التكنولوجيا
                      </p>
                      <p class="card-text text-secondary">
                        خدمات الأعمال
                      </p>
                    </div>
                    <h5 class="card-title fw-bold">
                    المواقع المهتم بها
                    </h5>
                    <p class="card-text text-secondary">
                      موقع1
                    </p>
                  </div>
                </div>
                <div class="card mt-3">
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
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>حفظ</button>
                                  </div>

                                  </form>
                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-text text-secondary">
                      عربية
                    </p>
                  </div>
                </div>
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
include "./script-umd.php"; 
?>

</html>