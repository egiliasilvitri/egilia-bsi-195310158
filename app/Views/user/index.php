<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- PAGE CONTENT WRAPPER -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<div class="page-content-wrap">
    <div style="margin-top: 30px;" class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="text-align: center;" class="panel-title"><?= $judul ?></h4>
                <a href="<?= base_url('/user/tambah') ?>" class="btn btn-primary"> Tambah User</a>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="50" style="background-color: #5F6F94; color: white; text-align: center;">No</th>
                                    <th style="background-color: #5F6F94; color: white; text-align: center;">Username</th>
                                    <th style="background-color: #5F6F94; color: white; text-align: center;">Nama</th>
                                    <th style="background-color: #5F6F94; color: white; text-align: center;">Level Akses</th>
                                    <th style="background-color: #5F6F94; color: white; text-align: center;">Akses</th>
                                    <th width="190" style="background-color: #5F6F94; color: white; text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;

                                foreach ($User as $v) {
                                    $no++;
                                    $start = strtotime($v['tanggal_akses']);
                                    $end   = strtotime(date('Y-m-d H:i:s'));
                                    $diff  = $end - $start;
                                    $a = floor($diff / (60 * 60 * 24));
                                    if ($a <= 0) {
                                        $akses = true;
                                    } else {
                                        $akses = false;
                                    }
                                ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td style="text-align: center;"><?= $v['username'] ?></td>
                                        <td style="text-align: center;"><?= $v['nama_user'] ?></td>
                                        <td style="text-align: center;"><?= $v['level_user'] ?></td>
                                        <td style="text-align: center;"><?= $akses ? 'Akses' : '-' ?></td>
                                        <td style="text-align: center;">
                                            <?php if ($akses) : ?>
                                                <a href="<?= base_url() ?>/user/akses/<?= $v['id_user'] ?>/2021-01-01" class="btn btn-danger btn-rounded btn-condensed btn-sm">Batal</a>
                                            <?php else : ?>
                                                <a href="<?= base_url() ?>/user/akses/<?= $v['id_user'] ?>/<?= date('Y-m-d') ?>" class="btn btn-default btn-rounded btn-condensed btn-sm">Akses</a>
                                            <?php endif; ?>

                                            <a href="<?= base_url() ?>/user/ubah/<?= $v['id_user'] ?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>


                                            <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url() ?>/user/hapus/<?= $v['id_user'] ?>" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>