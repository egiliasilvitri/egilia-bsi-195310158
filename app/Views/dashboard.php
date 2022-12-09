<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

  <!-- START WIDGETS -->
  <?= $this->extend('layout/main') ?>
  <?= $this->section('content') ?>
  <!-- PAGE CONTENT WRAPPER -->
  <div class="page-content-wrap">

    <!-- START WIDGETS -->
    <div style="background-color: #FFC54D; color: white;">
      <div class="card-body">
        <h3 class="panel-title"><strong><?= $judul ?></strong></h3>
        <h4><?= date('d-M-Y') ?></h4>
      </div>
    </div>
    <div style="margin-top: -100px; color: white;margin-left: 30px;" class="row">
      <div class="col-sm-12">
        <img style="border-radius: 10px; width: 97%; margin-top: 10%;" src="https://connect-assets.prosple.com/cdn/ff/TdKM3WgfPiIS93w-GAHgdZm6nnlV3yED02ulmWTElLk/1630550153/public/styles/scale_and_crop_center_890x320/public/2021-09/Banner%20Bank%20Syariah%20Indonesia.jpg?itok=j4M-UISj" alt="">
      </div>
    </div>
    <div style="margin-top: -100px; color: white;margin-left: 30px;" class="row">
      <div class="col-sm-12">
        <img style="border-radius: 10px; width: 97%; margin-top: 10%;" src="<?= base_url('/images/faces/foto3.jpeg') ?>" alt="">
      </div>
    </div>
    <div class="col-md-12 pull-left" style="margin-top:3% ;">
      <div style="background-color: #FFC54D;" class="card" width="200px">
        <div class="card-body">
        </div>
      </div>
    </div>
    <div class="col-md-12 pull-left" style="margin-top: -1%;">
      <div style="background-color: #18978F;" class="card" style="padding:2%;" width="200px">
        <div class="card-body">
          <div class="row">
            <img style="width: 200px;" src="<?= base_url('/images/faces/logo1.png') ?>" alt="">
            <div class="col-md-9" style="padding: 1%;">
            </div>
            <p style="color: white;">Kantor Pusat Gedung The Tower, Jl. Gatot Subroto No.27 Kelurahan Karet Semanggi, Kecamatan Setiabudi, Jakarta Selatan 12930</p>
          </div>
          <div style="color: white;">
            <p>
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="" width="15px">
              <img src="https://cdn.icon-icons.com/icons2/2972/PNG/512/twitter_logo_icon_186891.png" alt="" width="15px">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/479px-WhatsApp.svg.png" alt="" width="15px">
              MEDIA SOSIAL
            </p>
            <p style="margin-top: -1%; color: #FFC54D ;">
              ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </p>
            <p>
              HUBUNGI KAMI
            </p>
            <p style="margin-top: -1%; color: #FFC54D ;">
              ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </p>
            <p>
              INFORMASI PERUSAHAAN
            </p>
            <p style="margin-top: -1%; color: #FFC54D ;">
              ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </p>
            <p>
              PRODUK & LAYANAN
            </p>
            <p style="margin-top: -1%; color: #FFC54D ;">
              ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </p>
            <p>
              BERITA & PEMBARUAN
            </p>
            <p style="margin-top: -1%; color: #FFC54D ;">
              ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </p>
            <p>
              LAINNYA
            </p>
            <p style="margin-top: -1%; color: #FFC54D ;">
              ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection() ?>
  <?= $this->endSection() ?>