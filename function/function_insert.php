<?php 

include '../config/koneksi.php';

// Cek Apakah Tombol Insert Sudah Di Tekan Atau Belum
if (isset($_POST['insert'])) {


// Ambil Data Dari Setiap Elemen Form
$hari 		= $_POST["hari"];
// $tanggal    = date('Y-m-d', strtotime($_POST["tanggal"]));
$waktu 		= date('H:i', strtotime($_POST["waktu"]));



// Query Insert Data
$query = "INSERT INTO penjadwalan (hari, waktu) VALUES ('$hari', '$waktu')
";

mysqli_query($koneksi, $query);



// Cek Keberhasilan Data
if ( mysqli_affected_rows($koneksi) > 0) {

	echo "<script>
		alert('Data Berhasil Ditambahkan!');
		window.location='./../module/index.php?page=jadwal'
		 </script>";
   } else {

   	 echo "<script>
   	 	  alert('Data Gagal Ditambahkan!');
   	 	  window.location='./../module/index.php?page=jadwal'
   	       </script>";
   } 
   return mysqli_affected_rows($koneksi, $query);
}  