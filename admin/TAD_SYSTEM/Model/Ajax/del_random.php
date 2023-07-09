<?php

error_reporting(1);

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
$id = $_GET['id'];
if($user['level'] == 'admin'){
    $row = mysqli_fetch_assoc(mysqli_query($tad->tad_db(), "SELECT * FROM `random_ff` WHERE `id`='".$_GET['id']."'"));	

	mysqli_query($tad->tad_db(), "DELETE FROM `nick_random_ff` WHERE `id_random`='".$row['id']."'");	

	mysqli_query($tad->tad_db(), "DELETE FROM `random_ff` WHERE `id`='".$_GET['id']."'");
   

	

	echo '<script>location.href="/admin/list/goirandom";</script>';
}
	

 	




