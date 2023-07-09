<?php
session_start();
$domain = explode(".", $_SERVER['SERVER_NAME']);

$config = array(
    'localhost' => 'localhost',
    'username' => "ventvcyl_ducminhs", // username
    'database' => "ventvcyl_ducminhs", // password
    'pass' => "ventvcyl_ducminhs", // database name
    'Admin' => 'Đạt Light', //Vui Lòng Không Sửa Phần Này Để Tôn Trọng Người Làm
    
);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$thoigian = date('d/m/Y - H:i:s');
?>
