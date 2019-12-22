<?php

	include '../../config/koneksi.php';

	$temperature = isset($_POST['temperature']);
	$waktu = isset($_POST['waktu']);

	$query = "SELECT waktu as 'date', temperature as 'value' FROM monitoring_suhu  ORDER BY waktu ASC";
	                        
	$result = mysqli_query($koneksi,$query);

	$data [] = array (
		
		'temperature' =>  array(),
		'waktu'		  =>  array(),
		
	);


	$ct = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				//date('D M d Y H:i:s O', $row['date']);
	           $sql[$ct]['date'] = $row['date'];
	           $sql[$ct]['value'] = (int)$row['value'];
        	$ct++;
	}
	echo json_encode($sql);
