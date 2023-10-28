<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- Navbar -->
<div class="sidenav" >
  <a href="#">UTP Web</a>
  <a href="<?= base_url('/user') ?>">User</a>
  <a href="<?= base_url('/kelas') ?>">Kelas</a>
</div>
<br>
<br>

<!-- judul -->
<div class="main">
    <div class="container">
        <form class="container" action=<?= base_url('kelas/' . $kelas['id']) ?> method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
            <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('nama_kelas'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
            </div>
                <div class="row">
                    <input type="submit" name="tambah_data" value="Update Kelas" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
