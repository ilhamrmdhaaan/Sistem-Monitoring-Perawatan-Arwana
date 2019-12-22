<?php

	date_default_timezone_set("Asia/Bangkok");
	include "../config/koneksi.php";

	$hari = ['','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];

	$now  = date('Y-m-d H:i');
	$day = date('N');
	$time = date('H:i');

	// echo $now;

	$response = 0;

	$query = "SELECT  * FROM log_pakan WHERE log_time LIKE '$now%'";
	$sql = mysqli_query($koneksi, $query);

	// echo $query;

	$count = mysqli_num_rows($sql);

	if($count > 0 ){

		$response = 0;

	}else{

		$query = "SELECT * FROM penjadwalan WHERE hari='".$hari[$day]."' AND waktu LIKE '$time%'";
		$sql = mysqli_query($koneksi, $query);

		// echo $query;

		$count = mysqli_num_rows($sql);

		if($count > 0){
			$query = "INSERT INTO log_pakan (log_time, status) VALUE ('$now','1')";
			$sql = mysqli_query($koneksi, $query);
			$response = 1;
		}

	}

	$result = array(
		'result'	=> true,
		'response'	=> $response
	);

	header('Content-type:application/json');
	echo json_encode($result);
	return;

?>