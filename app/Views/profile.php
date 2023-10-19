<?= $this -> extend('layouts/app') ?>
<?= $this -> section('content') ?>

    <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">
    <img src="<?= base_url("assets/img/saya.jpg") ?>" class="rounded-circle mx-auto d-block py-3" alt="..." width="160" height="190">

    <table class="mx-auto">
      <tr>
        <td>
          <button type="button" class="btn btn-secondary" style="width: 320px"><?= $nama ?></button>
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          <button type="button" class="btn btn-secondary" style="width: 320px"><?= $npm?></button>
        </td>
      </tr>
      <tr>
        <td>
        <button type="button" class="btn btn-secondary" style="width: 320px"><?= $kelas ?></button>
        </td>
      </tr>

<?=$this->endSection() ?>