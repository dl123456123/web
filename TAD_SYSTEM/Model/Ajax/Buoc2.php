<?php

require_once __DIR__."/../../Database/Class_Controller.php";	

   
    $taikhoan = $tad->tad_ham($_POST['username']);
    $matkhau = $tad->tad_ham($_POST['pass']);
    $matkhau2 = $tad->tad_ham($_POST['password']);

    
if( $taikhoan == '' || $matkhau == '' || $matkhau2 == ''):
    die('<script>Swal.fire("Thất Bại", "Vui Lòng Nhập Đầy Đủ Thông Tin", "info");</script>');
endif;
if( $matkhau != $matkhau2){
    die('<script>Swal.fire("Thất Bại", "2 Mật Khẩu Không Giống Nhau", "error");</script>');

}



$check = mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM nguoidung WHERE id = '1'"));
if($check > 0):
    die('<script>Swal.fire("Thất Bại", "Trang Web Này Đã Có Tài Khoản Admin!", "error");</script>');
endif;   
            

mysqli_query($tad->tad_db(),"INSERT INTO `nguoidung` (`id`,  `username`, `password`, `level`, `money`, `time`, `day`, `month`, `year`) VALUES (NULL,  '$taikhoan', '$matkhau', 'admin', '5000000', '$thoigian', '".date('d')."',  '".date('m')."', '".date('Y')."')");
                            

echo '<script>Swal.fire("Thành Công", "Tạo Tài Khoản Admin Thành Công!", "success");</script>';
echo '<meta http-equiv="refresh" content="0;URL=/" />';
                $_SESSION['user'] = $taikhoan;

  
    

    
       
