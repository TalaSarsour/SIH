<!DOCTYPE html>
<?php
session_start();
$title = "الدردشة";

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

                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <div>
                                    <img
                                      src="./assets/img/abeer.svg"
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
                                      src="./assets/img/Mohamed.svg"
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
                                      src="./assets/img/Ali.svg"
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
                                      src="./assets/img/Kolood.svg"
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
                                      src="./assets/img/Ayd.svg"
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
                                      src="./assets/img/Maha.svg"
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
                                      src="./assets/img/Mousa.svg"
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
                                      src="./assets/img/Ahed.svg"
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
                                      src="./assets/img/Nadia.svg"
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
                            </li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-8">
                      <div class="d-flex flex-row justify-content-between">
                        <h4>علي احمد</h4>
                        <div>
                          <button type="button" class="btn btn-primary btn-sm"> <i class="fa-regular fa-video"></i></button>
                          <button type="button" class="btn btn-primary btn-sm"> <i class="fa-regular fa-phone"></i> </button>
                        </div>
                    </div>
                      <div class="pt-3 pe-3 border-top" data-mdb-perfect-scrollbar="true"
                        style="position: relative; height: 100%">
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
                        </div>
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
include "./script-umd.php"; 
?>

</html>