<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AIRPAB</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('../../vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('../../vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('../../vendors/base/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('../../css/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('images/faces/airpab1.png') ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0" style="background: #18978F;">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <img style="width: 300px; margin-top: -120px;" src="<?= base_url('/images/faces/logo1.png') ?>" alt="logo">
                        <div class="auth-form-light text-left py-3 px-2 px-sm-5" style="background-color: #ffffff;">
                            <div class="brand-logo">
                            </div>
                            <h4><strong>Selamat Datang Di Sistem <br>BSI NET BANKING</strong></h4>
                            <form class="pt-3" method="post" action="<?= base_url('/login/submit') ?>">
                                <label for="exampleInputEmail">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Masukkan Email / Nomor Hp">
                                </div>
                                <label style="  margin-top: 5%;" for="exampleInputPassword">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <?php if (session()->getFlashdata('error') !== NULL) : ?>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <?php echo session()->getFlashdata('error'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <input style="width: 100%; color: white;" type="submit" value="SIGN IN" class="btn btn-warning">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            <h7>Keep me signed in</h7>
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="<?= base_url('/daftar') ?>" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
</body>

</html>