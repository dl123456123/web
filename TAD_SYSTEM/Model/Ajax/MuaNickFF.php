<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$id = $_POST['id'];
$user = $tad->users();
    if(!$_SESSION['user']) {
        $text = "Bạn Chưa Đăng Nhập!";
        $status = "error";
       
    }else {

      
        
            $result = mysqli_query($tad->tad_db(), "SELECT * FROM `nickff` WHERE status = '1' AND `id` = '$id'");
            $row = mysqli_num_rows($result);
    
            if($row < 1) {
            $text = "Nick Free Fire Này Không Tồn Tại!";
            $status = "error";
            
                
        
          
        }else {
            $get = mysqli_fetch_array($result);
            if($get['giatien'] > $user['money']){
                $text = "Bạn Không Đủ Tiền Để Mua Nick Free Fire Này!";
            $status = "error";
            }else{
                
                $text = "Mua Nick Free Fire Thành Công!";
                $status = "success";
                $truoc_gd = $user['money'];
                $money = $get['giatien'];
                $sau_gd = $truoc_gd - $money;
               
                $username = $user['username'];
    $sql = mysqli_query($tad->tad_db(),"INSERT INTO `history` (`id`, `username`, `text`, `truoc_gd`, `sau_gd`, `time`) VALUES (NULL, '$username', '$text', '$truoc_gd', '$sau_gd', '$thoigian')");
    if($sql){
    
                //UPDATE money vào acc
                mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `money` = `money` - '".$money."' WHERE `username` = '".$user["username"]."'");
                mysqli_query($tad->tad_db(),"UPDATE `nickff` SET `status` = '0' WHERE `id` = '".$get['id']."'");
                //UPDATE table
                mysqli_query($tad->tad_db(),"INSERT INTO `history_ff` (`id`, `taikhoan`, `matkhau`, `2fa`, `dangky`, `nguoimua`, `giatien`, `time`) VALUES (NULL, '".$get['taikhoan']."', '".$get['matkhau']."', '".$get['2fa']."', '".$get['dangky']."', '$username', '".$get['giatien']."', '$thoigian')");
                
    }    
            }
               
            
        }
    }
?>
<!-- MODAL NOTIFY -->
<script>
    Swal.fire("Thông Báo", "<?php echo $text;?>", "<?php echo $status;?>");
</script>