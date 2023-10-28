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
        <p>Data User</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        <cite title="Source Title">Praktikum</cite>
    </center>
    </figcaption>
    </figure>

    <!-- <a href="<?=base_url('/user/create') ?>" type="button" class="btn btn-primary">tambah data</a> -->

    <div class= "container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?=base_url('/user/create') ?>" type="button" class="btn btn-primary">tambah data</a>
        </div>
        <br>
        <table class="table table-success">
            <thead class="table-light">
                <tr>
                    <th> No. </th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $no = 1;
                foreach ($users as $user){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td>
                            <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info"> Detail</a>
                            <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>"class="btn btn-warning"> Edit </a>
                            <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                        </td>
                        <td>
                            <img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="" style="width: 70px;">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>