<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();
    if(!$_SESSION['user']) {
        $text = "Bạn Chưa Đăng Nhập!";
        $status = "error";
       
    }else {

      
        
            $result = mysqli_query($tad->tad_db(), "SELECT * FROM `nhanqua` WHERE `username`='".$user['username']."'");
            $row = mysqli_num_rows($result);
    
            if($row > 0) {
                $text = "Xin Lỗi Bạn Đã Nhận Quà Rồi!";
            $status = "error";
            
    
        
          
        }else {

            $money = 49000;
            $text = "Chúc Mừng Bạn Đã Nhận Được ".number_format($money)." VNĐ Vào Tài Khoản";
            $status = "success";
            $truoc_gd = $user['money'];
            $sau_gd = $truoc_gd + $money;
            $text = 'Nhận Quà Khai Trương +'.number_format($money).'đ Vào Tài Khoản!';
            $username = $user['username'];
$sql = mysqli_query($tad->tad_db(),"INSERT INTO `history` (`id`, `username`, `text`, `truoc_gd`, `sau_gd`, `time`) VALUES (NULL, '$username', '$text', '$truoc_gd', '$sau_gd', '$thoigian')");
if($sql){

            //UPDATE money vào acc
            mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `money` = `money` + '".$money."' WHERE `username` = '".$user["username"]."'");
            //UPDATE table
            mysqli_query($tad->tad_db(),"INSERT INTO `nhanqua` (`id`, `username`) VALUES (NULL, '".$user['username']."')");
            
}        
            
        }
    }
?>
<!-- MODAL NOTIFY -->
<script>
    Swal.fire("Thông Báo", "<?php echo $text;?>", "<?php echo $status;?>");
</script>