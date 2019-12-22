<?php 
// koneksi database
include '../../config/koneksi.php';


if (isset($_POST['edit'])) { 

 
// menangkap data yang di kirim dari form
$id 	= $_POST['id'];
$hari 	= $_POST['hari'];
$waktu 	= date('H:i', strtotime($_POST['waktu']));


// update data ke database
$input = mysqli_query($koneksi, "UPDATE penjadwalan SET hari = '$hari', waktu = '$waktu' WHERE id = '".$id."'");

$sql   = mysqli_query($koneksi, $input);


if ($input) {
	
	 echo "<script>
		  alert('Data Berhasil Diedit');
		  window.location='../index.php?page=jadwal'
		  </script>";
  } else {
	
	 echo 'update gagal';

  }

}

?>