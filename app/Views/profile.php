<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css") ?>">
</head>
<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>