<?= $this -> extend('layouts/app') ?>
<?= $this -> section('content') ?>
   
   <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">
   <img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="..." width="160" height="190">
    <table class="mx-auto">
      <tr>
        <td>
          <button type="button" class="btn btn-secondary" style="width: 320px"><?= $user['nama'] ?></button>
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          <button type="button" class="btn btn-secondary" style="width: 320px"><?= $user ['npm']?></button>
        </td>
      </tr>
      <tr>
        <td>
        <button type="button" class="btn btn-secondary" style="width: 320px"><?= $user['nama_kelas'] ?></button>
        </td>
      </tr>
  
    </table>

<?=$this->endSection() ?>
