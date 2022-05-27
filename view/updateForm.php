<?php
include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("../presenter/ProsesPasien.php");

$id = $_GET['id'];

$tblPasien = new ProsesPasien();
// $tblPasien->getPasien($id);

$pas = $tblPasien->getPasien($id);

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Update Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div class="container mt-5 border rounded bg-white py-4 px-5 mb-5">

    <section>
      <h2 class="mb-3">Update Data Pasien</h2>
      <form action="../routes/route_update_submit.php" method="post" class="form">
        <div class="mb-3">
          <label for="nik" class="form-label">NIK</label>
          <input type="text" name="nik" id="nik" class="form-control" value="<?= $pas->getNik() ?>"
            placeholder="Contoh: 1234567">
          <span class="text-muted">(18 digit angka)</span>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?= $pas->getNama() ?>"
            placeholder="Masukkan Nama Kamu">
        </div>
        <div class="mb-3">
          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
            value="<?= $pas->getTempat() ?>" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $pas->getTl() ?>">
        </div>
        <div class="mb-3">
          <div>
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" <?php echo $pas->getGender() === "Laki-laki" ?  "checked" : ""; ?>>
            <label class="form-check-label" for="laki-laki">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" <?php echo $pas->getGender() === "Perempuan" ?  "checked" : ""; ?>>
            <label class="form-check-label" for="perempuan">Perempuan</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" name="email" id="email" class="form-control" value="<?= $pas->getEmail() ?>"
            placeholder="Masukkan email">
        </div>
        <div class="mb-3">
          <label for="telp" class="form-label">Telepon</label>
          <input type="text" name="telp" id="telp" class="form-control" value="<?= $pas->getTelepon() ?>"
            placeholder="Masukkan telp">
        </div>
        <br>
        <div class="mb-3">
            <input type="hidden" name="id" value="<?= $id ?>">
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </div>
      </form>
    </section>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>