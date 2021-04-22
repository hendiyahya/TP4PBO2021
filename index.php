<?php

/******************************************
1902370 - Hendi Yahya
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$taskbaru = new Task($db_host, $db_user, $db_password, $db_name);
$taskbaru->open();

// Memanggil method getTask di kelas Task
$taskbaru->getTask();

// Proses mengisi tabel dengan data
$data = null;
$no = 1;

if(isset($_POST['add'])){
	$taskbaru->insert($_POST);

	//refresh
	header("Location: index.php");
}

if(isset($_GET['id_hapus'])){
	
	$taskbaru->delete($_GET);

	// Unset GET
    unset($_GET['id_hapus']);

    // refresh
    header("Location: index.php");
}

if(isset($_GET['id_status'])){
	
	$taskbaru->status($_GET);

	// Unset GET
    unset($_GET['id_status']);

    // refresh
    header("Location: index.php");
}

while (list($id, $tnama, $tjkel, $tkontak, $talamat, $ttingkat, $tstatus) = $taskbaru->getResult()) {
	// Tampilan jika status task nya sudah dikerjakan
	if($tstatus == "Final"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tnama . "</td>
		<td>" . $tjkel . "</td>
		<td>" . $tkontak . "</td>
		<td>" . $talamat . "</td>
		<td>" . $ttingkat . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}

	// Tampilan jika status task nya belum dikerjakan
	else{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tnama . "</td>
		<td>" . $tjkel . "</td>
		<td>" . $tkontak . "</td>
		<td>" . $talamat . "</td>
		<td>" . $ttingkat . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Finalize</a></button>
		</td>
		</tr>";
		$no++;
	}
}

// Menutup koneksi database
$taskbaru->close();

// Membaca template skin.html
$tempbaru = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tempbaru->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tempbaru->write();