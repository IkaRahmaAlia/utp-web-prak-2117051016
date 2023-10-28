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
        <form class="container" action=<?= base_url('/kelas/store') ?> method="POST" enctype="multipart/form-data">
            <div class="row">
                    <div class="col-25">
                        <label for="fname">Kelas</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
                        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('nama_kelas'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
            </div>
                    <div class="row">
                    <input type="submit" name="tambah_data" value="Tambah Kelas" class="btn btn-primary">
                    </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>