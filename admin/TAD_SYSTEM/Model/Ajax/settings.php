<?php

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
if($user['level'] == 'admin'):
    
    $thongbao = $_POST['thongbao'];
    $logo = $_POST['logo'];
    $choingay = $_POST['choingay'];
    $muangay = $_POST['muangay'];
    $quay = $_POST['quay'];
    $nohu = $_POST['nohu'];
    $banner = $_POST['banner'];
    
  
   
  
    $save = $tad->db_query("UPDATE `settings` SET
    `thongbao` = '$thongbao',
    `logo` = '$logo',
    `banner` = '$banner',
    `choingay` = '$choingay',
    `muangay` = '$muangay',
    `quay` = '$quay',
    `nohu` = '$nohu'
    WHERE `id` = '1'
    ");

    if($save):
        die('<script>Swal.fire("Thành Công", "Cập Nhật Website Thành Công","success");</script>');
    endif;
else:
    exit;
endif;
  

    

   
    
   

?>