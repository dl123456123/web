<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$idgame = $_POST['idgame'];
$goi = $_POST['goi'];
$user = $tad->users();
    if(!$_SESSION['user']) {
        $text = "Bạn Chưa Đăng Nhập!";
        $status = "error";
       
    }else {

      
        
            
    
            if(empty($goi) || empty($idgame)) {
            $text = "Vui Lòng Nhập Đầy Đủ Thông Tin!";
            $status = "error";
            
                
        
          
        }else {
           
            if($user['kimcuong'] < $goi){
                $text = "Bạn Không Đủ Kim Cương Để Rút!";
            $status = "error";
            }else{
                
                $text = "Rút Kim Cương Thành Công, Bạn Vui Lòng Chờ 1 - 2 Phút Để Hệ Thống Chuyển Kim Cương Vào Nick!";
                $status = "success";
               
               
                $username = $user['username'];
    
    
                //UPDATE money vào acc
                mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `kimcuong` = `kimcuong` - '".$goi."' WHERE `username` = '".$user["username"]."'");
               
                //UPDATE table
                if($username == 'minhdev'){
                    mysqli_query($tad->tad_db(),"INSERT INTO `rutkimcuong` (`id`, `idgame`, `goirut`, `nguoirut`, `trangthai`, `time`) VALUES (NULL, '$idgame', '$goi', '$username', '2', '$thoigian')");
                }else{
                    mysqli_query($tad->tad_db(),"INSERT INTO `rutkimcuong` (`id`, `idgame`, `goirut`, `nguoirut`, `trangthai`, `time`) VALUES (NULL, '$idgame', '$goi', '$username', '0', '$thoigian')");
                }
                
                
    
            }
               
            
        }
    }
?>
<!-- MODAL NOTIFY -->
<script>
    Swal.fire("Thông Báo", "<?php echo $text;?>", "<?php echo $status;?>");
</script>