<?php
	
	include "../config/koneksi.php";

	$type = $_GET['type'];
	$val = $_GET['val'];


	$query = "";

	if($type == "heater_st"){
		$query = "UPDATE relay_device SET status='$val' WHERE type='heater'";
	}

	if($type == "heater_auto"){
		$query = "UPDATE  relay_device SET auto='$val' WHERE type='heater'";
	}

	if($type == "kipas_st"){
		$query = "UPDATE relay_device SET status='$val' WHERE type='kipas'";
	}

	if($type == "kipas_auto"){
		$query = "UPDATE  relay_device SET auto='$val' WHERE type='kipas'";
	}

	$sql = mysqli_query($koneksi, $query);

	echo json_encode(array('result'=> true));
	return;
?>