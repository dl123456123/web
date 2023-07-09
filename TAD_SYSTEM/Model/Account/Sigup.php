<?php
sleep(1);
require_once __DIR__."/../../Database/Class_Controller.php";	

   
    $taikhoan = $tad->tad_ham($_POST['taikhoan']);
    $matkhau = $tad->tad_ham($_POST['matkhau']);
    $matkhau2 = $tad->tad_ham($_POST['matkhau2']);

    
if( $taikhoan == '' || $matkhau == '' || $matkhau2 == ''):
    die('<script>Swal.fire("Thất Bại", "Vui Lòng Nhập Đầy Đủ Thông Tin", "info");</script>');
endif;
if( $matkhau != $matkhau2){
    die('<script>Swal.fire("Thất Bại", "2 Mật Khẩu Không Giống Nhau", "error");</script>');

}



$check = mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM nguoidung WHERE username = '$taikhoan'"));
if($check > 0):
    die('<script>Swal.fire("Thất Bại", "Tài Khoản Của Bạn Đã Tồn Tại Trên Hệ Thống!", "error");</script>');
endif;   
            

mysqli_query($tad->tad_db(),"INSERT INTO `nguoidung` (`id`,  `username`, `password`, `level`, `money`, `time`, `day`, `month`, `year`) VALUES (NULL,  '$taikhoan', '$matkhau', 'member', '0', '$thoigian', '".date('d')."',  '".date('m')."', '".date('Y')."')");
                            

echo '<script>Swal.fire("Thành Công", "Đăng Ký Tài Khoản Thành Công!", "success");</script>';
echo '<meta http-equiv="refresh" content="0;URL=/" />';
                $_SESSION['user'] = $taikhoan;

  
    

    
       
