<?php 

include '../../config/koneksi.php';


$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM penjadwalan WHERE id = '$id'")
		
		 or die (mysqli_error($koneksi));

if ( $query) {
    
    echo    "<script>
    		alert('Data berhasil dihapus!'); 
		    window.location='../index.php?page=jadwal'
		    </script>";
  } else {
    
    echo    "<script>
    		alert('Data gagal dihapus'); 
		    window.location='../index.php?page=jadwal'
		    </script>";
}

?>