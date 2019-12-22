<?php 

include '../config/koneksi.php';

// Update
if (isset($_POST['edit'])) { 

 
// menangkap data yang di kirim dari form
$id 		= $_POST['id_jadwal'];
$hari	 	= $_POST['hari'];
// $tanggal	=date('Y-m-d', strtotime($_POST['tanggal']));
$waktu 		= date('H:i', strtotime($_POST['waktu']));


// update data ke database
$input 		= mysqli_query($koneksi, "UPDATE penjadwalan SET hari = '$hari', waktu = '$waktu' WHERE id = '$id'");

$sql   		= mysqli_query($koneksi, $input);


if ( $input) {
	
	 echo "<script>
		  alert('Data Berhasil Diedit');
		  window.location='./../module/index.php?page=jadwal'
		  </script>";
  } else {
	
	 echo 'update gagal';

  }
}
// Akhir Update