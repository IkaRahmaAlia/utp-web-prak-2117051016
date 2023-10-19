<?= $this -> extend('layouts/app') ?>
<?= $this -> section('content') ?>

    <br>
    <div class="container">
        <form action="<?=base_url('user/store')?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Nama</label>
                </div>
                <div class="col-75">
                    <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
                    <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('nama'); ?>
                        </div>
                            <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">NPM</label>
                </div>
                <div class="col-75">
                    <input type="text" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>"><label for="floatingNpm"></label>
                    <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('npm'); ?>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Kelas</label>
                </div>
                <div class="col-75">
                    <select name="kelas"  id ="kelas" placeholder="Kelas">
                        <?php
                        foreach ($kelas as $item){
                            ?>
                            <option value ="<?= $item['id'] ?>">
                                <?= $item ['nama_kelas'] ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <label> Choose the File to upload: </label>
            <input type="file" id="foto" name="foto" /> <br /><br />
            <br>
            <div class="row">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

<?=$this->endSection() ?>
