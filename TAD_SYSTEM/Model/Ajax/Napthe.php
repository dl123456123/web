<?php
sleep(1);
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();

    $loaithe = $tad->tad_ham($_POST['loaithe']);
    $menhgia = $tad->tad_ham($_POST['menhgia']);
    $code = $tad->tad_ham($_POST['code']);
    $seri = $tad->tad_ham($_POST['seri']);
    if(empty($_SESSION['user'])):
        die('<script>Swal.fire("Lỗi", "Vui Lòng Đăng Nhập!", "error");</script>');
    endif;
    if($loaithe == '' || $menhgia == '' || $code == '' || $seri == '' ):
        die('<script>Swal.fire("Lỗi", "Vui Lòng Nhập Đầy Đủ Thông Tin","info");</script>');
    endif;
   
        $check = mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM napthe WHERE  `mathe` = '$code' AND `seri` = '$seri'"));
        if($check > 0):
            die('<script>Swal.fire("Thất Bại", "Thẻ Đã Tồn Tại Trên Hệ Thống", "error");</script>');
        endif;   
        // $apikey = '70202153-0F44-4C35-9B19-9210D39349C1';
        global $config;               
        $apikey = $config['apikey'];
        $urlCallback = 'https://'.$_SERVER['HTTP_HOST'].'/TAD_SYSTEM/Model/Ajax/Callback.php';
        $requestId = rand(1000,99999999);
    
        $data = $tad->send_card($requestId, $loaithe, $code, $seri, $menhgia);

    
            if($data['status'] == 99){
                mysqli_query($tad->tad_db(), "INSERT INTO `napthe` (`id`, `loaithe`, `menhgia`, `mathe`, `seri`, `tranid`, `day`, `month`, `year`, `nguoinap`, `time`, `trangthai`) VALUES (NULL, '$loaithe', '$menhgia', '$code', '$seri', '$requestId', '".date('d')."',  '".date('m')."', '".date('Y')."', '".$user['username']."', '$thoigian', '0')");
                echo '<script>Swal.fire("Thành Công", "Bạn Đã Nạp Thành Công '.number_format($menhgia).'đ, Vui Lòng Chờ Từ 1 - 5p Hệ Thống Duyệt Thẻ!","success");</script>';
            }

            else{
                // Trả lại kết quả phát sinh lỗi trong quá trình đẩy API
                echo '<script>Swal.fire("Lỗi", "'.$data['message'].'!","error");</script>';
            }
        
    
   

?>