<?php 
	//require '../vendors/autoload.php';
	date_default_timezone_set("Asia/Bangkok");
	
	include "../config/koneksi.php";
	include "../mail/mailgun_with_swiftmailer.php";

	$suhu = preg_replace('/\s+/', '', $_GET['suhu']);
	$waktu = date('Y-m-d H:i:s');

	$min = 25;
	$max = 30;

	$result = array();
	// 
	$query = "INSERT INTO monitoring_suhu VALUES('','$suhu','$waktu')";
	$sql = mysqli_query($koneksi, $query);

	// Notification EMail
	send_email_notification($suhu);
	
	// Query Relay Device
	if($suhu <= $min){
		$query = "SELECT * FROM relay_device WHERE type='heater'";
		$sql = mysqli_query($koneksi, $query);

		$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);

		if($data['auto'] == 1){

			$query = "UPDATE relay_device SET status='1' WHERE type='heater'";
			$sql = mysqli_query($koneksi, $query);

			$query = "SELECT * FROM relay_device WHERE type='kipas'";
			$sql = mysqli_query($koneksi, $query);

			$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);

			if($data['auto'] == 1){
				$query = "UPDATE relay_device SET status='0' WHERE type='kipas'";
				$sql = mysqli_query($koneksi, $query);
			}

		}

	}else if($suhu >= $max){

		$query = "SELECT * FROM relay_device WHERE type='kipas'";
		$sql = mysqli_query($koneksi, $query);

		$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);

		if($data['auto'] == 1){

			$query = "SELECT * FROM relay_device WHERE type='heater'";
			$sql = mysqli_query($koneksi, $query);

			$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);

			if($data['auto']==1){
				$query = "UPDATE relay_device SET status='0' WHERE type='heater'";
				$sql = mysqli_query($koneksi, $query);
			}			

			$query = "UPDATE relay_device SET status='1' WHERE type='kipas'";
			$sql = mysqli_query($koneksi, $query);
		}

	}else{



		$query = "SELECT * FROM relay_device ORDER BY type asc";
		$sql = mysqli_query($koneksi, $query);


		$data = array();
		while($fetch =  mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			array_push($data, $fetch);
		};

		if($data[0]['auto'] == 1){
			$query = "UPDATE relay_device SET status = '0' WHERE type='heater'";
			$sql = mysqli_query($koneksi, $query);
		}

		if($data[1]['auto'] == 1){
			$query = "UPDATE relay_device SET status = '0' WHERE type='kipas'";
			$sql = mysqli_query($koneksi, $query);

		}

	}

	$query = "SELECT * FROM relay_device ORDER BY type asc";
	$sql = mysqli_query($koneksi, $query);

	$data = array();
	while($fetch =  mysqli_fetch_array($sql, MYSQLI_ASSOC)){
		array_push($data, $fetch);
	};


	$result = array(
		'suhu'			=> $suhu,
		'stHeater'		=> $data[0]['status'],
		'autoHeater'	=> $data[0]['auto'],
		'stFan'			=> $data[1]['status'],
		'autoFan'		=> $data[1]['auto'],
	);

		 

	// header('Content-type:application/json');
	echo json_encode($result);
?>
