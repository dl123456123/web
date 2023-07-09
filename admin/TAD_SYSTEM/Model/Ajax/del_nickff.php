<?php

error_reporting(1);

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
$id = $_GET['id'];
if($user['level'] == 'admin'){
   
    mysqli_query($tad->tad_db(), "DELETE FROM `nickff` WHERE `id`='".$_GET['id']."' AND `status`='1'");

	

	echo '<script>location.href="/admin/list/nickff";</script>';
}
	

 	




