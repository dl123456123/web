<?php
sleep(1);
require_once __DIR__."/../../Database/Class_Controller.php";	

  
    $taikhoan = $tad->tad_ham($_POST['taikhoan']);
    $matkhau = $tad->tad_ham($_POST['matkhau']);
    
if( $taikhoan == '' || $matkhau == ''):
    die('<script>Swal.fire("Thất Bại", "Vui Lòng Nhập Đầy Đủ Thông Tin", "info");</script>');
endif;
   
$check = mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM nguoidung WHERE username = '$taikhoan' AND `password` = '$matkhau'"));
if($check <= 0):
    die('<script>Swal.fire("Thất Bại", "Sai Tài Khoản Hoặc Mật Khẩu", "error");</script>');
endif;   
            


                            

echo '<script>Swal.fire("Thành Công", "Đăng Nhập Tài Khoản Thành Công!", "success");</script>';
echo '<meta http-equiv="refresh" content="0;URL=/" />';
                $_SESSION['user'] = $taikhoan;
