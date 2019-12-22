<?php
	
	include "../config/koneksi.php";

	$query = "SELECT * FROM relay_device ORDER BY type asc";
	$sql = mysqli_query($koneksi, $query);

	$data = array();
	while($fetch =  mysqli_fetch_array($sql, MYSQLI_ASSOC)){
		array_push($data, $fetch);
	};


	$result = array(
		'stHeater'		=> $data[0]['status'],
		'autoHeater'	=> $data[0]['auto'],
		'stFan'			=> $data[1]['status'],
		'autoFan'		=> $data[1]['auto'],
	);

		 

	// header('Content-type:application/json');
	echo json_encode($result);

?>