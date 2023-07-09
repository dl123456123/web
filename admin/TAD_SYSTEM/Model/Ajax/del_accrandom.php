<?php

error_reporting(1);

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
$id = $_GET['id'];
if($user['level'] == 'admin'){
   
    mysqli_query($tad->tad_db(), "DELETE FROM `nick_random_ff` WHERE `id`='".$_GET['id']."' AND `trangthai`='true'");

	

	echo '<script>location.href="/admin/list/goirandom";</script>';
}
	

 	




