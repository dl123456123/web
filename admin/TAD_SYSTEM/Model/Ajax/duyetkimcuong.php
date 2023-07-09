<?php

error_reporting(1);

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();

if($user['level'] == 'admin'){
   if(isset($_GET['duyet']) && !isset($_GET['huy'])){
    $save = $tad->db_query("UPDATE `rutkimcuong` SET
    `trangthai` = '2'
    WHERE `id` = '".$_GET['duyet']."'
    ");
    if($save){
        echo '<script>Swal.fire("Thông Báo","Duyệt Đơn Kim Cương Thành Công","success");</script>';
	echo '<script>location.href="/admin/list/rutkimcuong";</script>';
    }
    
   }else{
    $savehuy = $tad->db_query("UPDATE `rutkimcuong` SET
    `trangthai` = '1'
    WHERE `id` = '".$_GET['duyet']."'
    ");
    if($savehuy){
    echo '<script>Swal.fire("Thông Báo","Hủy Đơn Kim Cương Thành Công","success");</script>';
	echo '<script>location.href="/admin/list/rutkimcuong";</script>';
    }
   }
    
}
	

 	




