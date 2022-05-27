<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

//  include("DB.class.php");

class TabelPasien extends DB
{
	function getPasien($id = null)
	{
		if($id != null){
			// Query mysql select data pasien
			$query = "SELECT * FROM pasien WHERE id=$id";
			// Mengeksekusi query
			return $this->execute($query);
		}

		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function createPasien($data)
	{
		// query mysql insert data
		$query = "INSERT INTO pasien (nik, nama, tempat, tl, gender, email, telp) VALUES ('".$data->getNik() ."', '".$data->getNama()."', '".$data->getTempat()."', '".$data->getTl()."', '".$data->getGender()."', '".$data->getEmail()."', '".$data->getTelepon()."')";
		// eksekusi query
		return $this->execute($query);
	}

	function updatePasien($data)
	{
		// var_dump($data);
		// query mysql insert data
		$query = "update pasien set nik='".$data->getNik() ."', nama='".$data->getNama() ."', tempat='".$data->getTempat() ."', tl='".$data->getTl() ."', gender='".$data->getGender() ."', email='".$data->getEmail() ."', telp='".$data->getTelepon() ."' WHERE id=".$data->getId() ."";
		// eksekusi query
		return $this->execute($query);
	}

	function deletePasien($id)
	{
		$query = "delete from pasien where id=". $id;

		return $this->execute($query);
	}
}
