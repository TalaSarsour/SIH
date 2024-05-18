<?
/*if (!isset($_SESSION['user_type'])) {
  header("location: ./index.php");
  exit;

}*/

?>
<!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mt-0">
        <!-- Brand -->
          <a href="#home" class="py-2 navbar-brand mx-3" data-mdb-ripple-init aria-current="true">
            <img src="./assets/img/logo-v2-1.svg"
            style="width: 120px; height: 70;" alt="logo">
          </a>

        <?php
            //echo $_SESSION['user_type'];
            if(isset($_SESSION["user_type"])) :
            if($_SESSION["user_type"] == "user1") : ?>
              <a href="./home.php" class="list-group-item list-group-item-action py-2 mt-3 text-secondary" data-mdb-ripple-init>
                  <i class="fas fa-house fa-fw me-3"></i><span>الرئيسية</span>
              </a>
        <?php
            elseif($_SESSION["user_type"] == "user2") : ?>
              <a href="./projects.php" class="list-group-item list-group-item-action py-2 mt-3 text-secondary" data-mdb-ripple-init>
                  <i class="fas fa-briefcase fa-fw me-3"></i><span>مشاريعي</span>
              </a>
                
        <?php 
            endif; 
            endif; ?>
        

        <?php
            //echo $_SESSION['user_type'];
            if(isset($_SESSION["user_type"])) :
              if($_SESSION["user_type"] == "user1") : ?>
                <a href="./favorite.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                    <i class="far fa-heart fa-fw me-3"></i><span>المفضلة</span>
                </a>
        <?php
              elseif($_SESSION["user_type"] == "user2"): ?>
                <a href="./Investors.php" class="list-group-item list-group-item-action py-2 text-secondary" data-mdb-ripple-init>
                    <i class="fa-regular fa-circle-dollar fa-fw me-3"></i><span>المستثمرين</span>
                </a>
        <?php 
            endif; 
            endif; ?>
            
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
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>
            </ul>
          </li>

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center text-dark" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-dropdown-init aria-expanded="false">
              <img src="./assets/img/avatar-female-2.svg" class="rounded-circle" height="40"
                alt="" loading="lazy" />
                <span class="dropdown-toggle mx-2">علا ابو خضر</span>
                
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