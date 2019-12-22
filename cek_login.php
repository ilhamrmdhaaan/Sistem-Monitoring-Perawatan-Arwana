<?php

include 'config/koneksi.php';



function register($data) {
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

	// Cek Username Sudah Ada Atau Belum
	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");


	if ( mysqli_fetch_assoc($result) ) {
		
		echo 
			     "<script>
					alert('Username Yang Dipilih Sudah Terdaftar!');
				 </script>";

		return false;
	}


	// Cek Konfrimasi Password
	if ( $password !== $password2 ) {

		echo    "<script>
				alert('Konfrimasi Tidak Sesuai!');
				</script>";

		return false;
	}

	// Enkripsi Password
	$password = password_hash($password, PASSWORD_DEFAULT);


	// Tambahkan Userbaru Ke database
	mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($koneksi);

}
