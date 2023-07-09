<?php

error_reporting(1);

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
$id = $_GET['id'];
if($user['level'] == 'admin'){
   
    mysqli_query($tad->tad_db(), "DELETE FROM `vongquay_kimcuong` WHERE `id`='".$_GET['id']."'");

	mysqli_query($tad->tad_db(), "DELETE FROM `vongquay_kimcuong_gift` WHERE `id_vongquay`='".$_GET['id']."'");

	echo '<script>location.href="/admin/list/vongquaykimcuong";</script>';
}
	

 	




