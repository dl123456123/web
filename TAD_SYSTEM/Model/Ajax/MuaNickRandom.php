<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$id = $_POST['id'];
$user = $tad->users();
    if(!$_SESSION['user']) {
        $text = "Bạn Chưa Đăng Nhập!";
        $status = "error";
       
    }else {

      
        
            $result = mysqli_query($tad->tad_db(), "SELECT * FROM `nick_random_ff` WHERE trangthai = 'true' AND `id` = '$id'");
            $get = mysqli_fetch_array($result);
            
            $row = mysqli_num_rows($result);
    
            if($row < 1) {
            $text = "Nick RanDom Này Không Tồn Tại!";
            $status = "error";
            
                
        
          
        }else {
            $result_goi = mysqli_query($tad->tad_db(), "SELECT * FROM `random_ff` WHERE `id` = '".$get['id_random']."' AND `trangthai` = 'true'");
            $get_goi = mysqli_fetch_array($result_goi);
            if($get_goi['giatien'] > $user['money']){
                $text = "Bạn Không Đủ Tiền Để Mua Nick Random Này!";
            $status = "error";
            }else{
                
                $text = "Mua Nick Random Thành Công!";
                $status = "success";
                $truoc_gd = $user['money'];
                $money = $get_goi['giatien'];
                $sau_gd = $truoc_gd - $money;
               
                $username = $user['username'];
    $sql = mysqli_query($tad->tad_db(),"INSERT INTO `history` (`id`, `username`, `text`, `truoc_gd`, `sau_gd`, `time`) VALUES (NULL, '$username', '$text', '$truoc_gd', '$sau_gd', '$thoigian')");
    if($sql){
    
                //UPDATE money vào acc
                mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `money` = `money` - '".$money."' WHERE `username` = '".$user["username"]."'");
                mysqli_query($tad->tad_db(),"UPDATE `nick_random_ff` SET `trangthai` = 'false', `nguoimua` = '$username' WHERE `id` = '".$get['id']."'");
                //UPDATE table
                
                
    }    
            }
               
            
        }
    }
?>
<!-- MODAL NOTIFY -->
<script>
    Swal.fire("Thông Báo", "<?php echo $text;?>", "<?php echo $status;?>");
</script>