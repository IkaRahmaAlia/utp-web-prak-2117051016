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
    <figure>
            <center>
                <h1>WEB LANJUT</h1>
                <blockquote class="blockquote">
                    <p>Data Kelas</p>
                </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Praktikum</cite>
                    </figcaption>
            </center>
        </figure>
        
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?= base_url('/kelas/create') ?>" type="button" class="btn btn-primary">Tambah Data</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-success">
                <thead>
                <tr>
                    <th>No.</th>
                    <th style="text-align: center; vertical-align: middle;">Kelas</th>
                    <th style="text-align: center; vertical-align: middle;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?= $user['nama_kelas'] ?></td>
                        <td class="d-flex justify-content-center">
                        <!-- <a class="btn btn-primary" href="<?= base_url('user/' . $user['id']) ?>" style="margin-right: 5px;">Detail</a> -->
                        <a href="<?= base_url('/kelas/' . $user['id'] . '/edit') ?>" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                        <form action="<?=base_url('kelas/' . $user['id'])?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger" value="Delete" style="width: 80px; height: 40px; padding: 5px;">Delete</button>
                        </form>
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
<?= $this->endSection() ?>