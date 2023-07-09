<?php

error_reporting(1);

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
if($user['level'] == 'admin'){
    if($_POST['id'] && $_POST['status']) {

 		mysqli_query($tad->tad_db(), "UPDATE `vongquay_kimcuong` SET `status`='".$_POST['status']."' WHERE `id`='".$_POST['id']."'");

 	}

}
	

 	


