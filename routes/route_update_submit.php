<?php

include("../model/Template.class.php");
include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("../view/InputForm.php");
include("../presenter/ProsesPasien.php");

$pasien1 = new Pasien();

if(isset($_POST['submit'])){
    $pasien1->setNik($_POST['nik']);
    $pasien1->setNama($_POST['nama']);
    $pasien1->setTempat($_POST['tempat_lahir']);
    $pasien1->setTl($_POST['tanggal_lahir']);
    $pasien1->setGender($_POST['jenis_kelamin']);
    $pasien1->setEmail($_POST['email']);
    $pasien1->setTelepon($_POST['telp']);
    $pasien1->setId($_POST['id']);

    $prosespasien = new ProsesPasien();
    $prosespasien->updatePasien($pasien1);

    header("location: ../index.php");

}

// $tp = new InputForm();
// $data = $tp->tampil();