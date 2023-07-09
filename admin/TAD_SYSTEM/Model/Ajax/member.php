<?php

require_once __DIR__."/../../../../TAD_SYSTEM/Database/Class_Controller.php";
$user = $tad->users();
if($user['level'] == 'admin'):
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kimcuong = $_POST['kimcuong'];
    $money = $_POST['cash'];
    $level = $_POST['level'];
    if($username == '' || $password == '' || $level == '' || $kimcuong == ''):
        die('<script>Swal.fire("Lỗi", "Vui Lòng Nhập Đầy Đủ Thông Tin","info");</script>');
    endif;
  
    $save = $tad->db_query("UPDATE `nguoidung` SET
    `username` = '$username',
    `password` = '$password',
   
    `money` = '$money',
    `kimcuong` = '$kimcuong',
    `level` = '$level'
    WHERE `id` = '$id'
    ");

    if($save):
        die('<script>Swal.fire("Thành Công", "Cập Nhật Thông Tin Thành Viên Thành Công","success");</script>');
    endif;
else:
    exit;
endif;
  

    

   
    
   

?>