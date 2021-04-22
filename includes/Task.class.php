<?php 

/******************************************
1902370 - Hendi Yahya
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_dauroh
		$query = "SELECT * FROM tb_dauroh";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function insert($data){
		$tnama = $data['tnama'];
		$tjkel = $data['tjkel'];
		$tkontak = $data['tkontak'];
		$alamat = $data['talamat'];
		$ttingkat = $data['ttingkat'];
		$tstatus = "Draft";

		// Query mysql insert ke db
		$query = "INSERT INTO tb_dauroh (nama_td,jkel_td,kontak_td,alamat_td,tingkat_td,status_td) VALUES ('$tnama','$tjkel','$tkontak','$alamat','$ttingkat','$tstatus')";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function delete($data){
		$id = $data['id_hapus'];

		// Query mysql insert ke db
		$query = "DELETE FROM tb_dauroh WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function status($data){
		$id = $data['id_status'];

		// Query mysql insert ke db
		$query = "UPDATE tb_dauroh SET status_td='Final' WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

}



?>
