<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BSI</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('/vendors/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/feather/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/base/vendor.bundle.base.css') ?>">

  <link rel="stylesheet" href="<?= base_url('/vendors/base/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/jquery-bar-rating/fontawesome-stars-o.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/jquery-bar-rating/fontawesome-stars.css') ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('/images/faces/logo1.png') ?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background: #18978F;">
        <img style="width: 70%;" src="<?= base_url('/images/faces/logo1.png') ?>" alt="logo" />
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        </ul>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Bank_Syariah_Indonesia.svg/1200px-Bank_Syariah_Indonesia.svg.png" alt="" width="50px" style="margin-left: 370px; margin-top: -30px;">
        <h2 style="color: #18978F;"><strong>BSI NET BANKING</strong></h2>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">
                <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item" href="<?= base_url('/login/logout') ?>">
                <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #18978F;">
        <ul class="nav">
          <?php
          if (session('userData')['level_user'] == 'superadmin' || session('userData')['level_user'] == 1) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">
                <i class="icon-square-check menu-icon"></i>
                <span class="menu-title">Buka Rekening</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">
                <i class="icon-ribbon menu-icon"></i>
                <span class="menu-title">Info Rekening</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">
                <i class="icon-globe menu-icon"></i>
                <span class="menu-title">QRIS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">
                <i class="icon-flag menu-icon"></i>
                <span class="menu-title">Informasi Link</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">
                <i class="icon-help menu-icon"></i>
                <span class="menu-title">FAQ</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-inbox menu-icon"></i>
                <span class="menu-title">Inbox</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="docs/documentation.html">
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-disc menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->

          <?php
          }
          ?>
        </ul>
        <ul class="nav">
          <?php
          if (session('userData')['level_user'] == 'pendaftar' || session('userData')['level_user'] == 1) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/informasipembayaran') ?>">
                <i class="icon-bar-graph-2 menu-icon"></i>
                <span class="menu-title">Informasi Pembayaran</span>
              </a>
            </li>

          <?php
          }
          ?>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <?= $this->renderSection('content') ?>
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <img src="<?= base_url('/images/faces/foter1.png') ?>" alt="" width="120px">
              <img src="<?= base_url('/images/faces/foter2.png') ?>" alt="" width="120px">
              <img src="<?= base_url('/images/faces/foter4.png') ?>" alt="" width="120px">
            </div> <br>
            <h7>PT.Bank Syariah Indonesia, Tbk. Adalah Pelaku jasa keuangan</h7><br>
            <h7> terdaftar dan diawasi oleh Otoritas Jasa Keuangan</h7>
          </div>
          <h7 style="margin-left: 88%;"><strong>Media Sosial</strong></h7>
          <div style="margin-left: 85%;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" alt="" width="25px">
            <img src="https://www.logo.wine/a/logo/YouTube/YouTube-Icon-Full-Color-Logo.wine.svg" alt="" width="45px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="" width="25px">
            <img src="https://cdn.icon-icons.com/icons2/2972/PNG/512/twitter_logo_icon_186891.png" alt="" width="25px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/479px-WhatsApp.svg.png" alt="" width="35px">
          </div>
        </footer>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="<?= base_url('/vendors/base/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url('/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('/js/template.js') ?>"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= base_url('/vendors/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('/vendors/jquery-bar-rating/jquery.barrating.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('/js/dashboard.js') ?>"></script>
  <!-- End custom js for this page-->
</body>

</html>