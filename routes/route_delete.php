<?php



/******************************************
Asisten Pemrogaman 11
 ******************************************/

include("../model/Template.class.php");
include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("../presenter/ProsesPasien.php");
include("../view/InputForm.php");

// get id from url
$id = $_GET['id'];


// echo "nama " .  $pas->getNama();

$prosespasien = new ProsesPasien();
$prosespasien->deletePasien($id);

header("location: ../index.php");

?>