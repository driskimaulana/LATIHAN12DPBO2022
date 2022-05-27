<?php


include("KontrakView.php");

class InputForm implements KontrakView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function InputForm()
	{
		
	}

	function tampil()
	{
		// Membaca template skin.html
		$this->tpl = new Template("../templates/addForm.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		// $this->tpl->replace("DATA_TABEL", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}
	
	function tampilUpdate($id){
		header("location: ../view/updateForm.php?id=$id");
	}
}
