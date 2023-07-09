<?php
sleep(1);
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();
require_once __DIR__."/../../../assets/Pusher/Pusher.php";
$options = array(
    'encrypted' => true
);
$pusher = new Pusher(
        '10d5ea7e7b632db09c72', 'a496a6f084ba9c65fffb', '234217', $options
);

    if( empty($_SESSION['user'])){
        die(json_encode(array('status' => 3)));
    }else{
        $powcuaban = $user['pow'];
        if($powcuaban >= 100){
            $phanqua = $tad->settings('nohu');
            
            $hi22 = mysqli_query($tad->tad_db(), "UPDATE nguoidung SET `kimcuong` = `kimcuong` + '$phanqua', `pow` = 0 WHERE `id` = '".$tad->user('id')."'");
            if($hi22 == true){
                $powcuaban222 = $user['pow'];
                $data['type'] = 'success';
        $data['title'] = 'Thông Báo!';
        $data['message'] = 'Bạn Vừa Nổ Hũ '.number_format($phanqua).' Kim Cương Vì Đã Đạt Mốc 100 Năng Lượng';
        $pusher->trigger($user['username'], 'realtime', $data);
                
                echo json_encode(array('status' => 1,'pow' => $powcuaban222));
            }
        }else{
            
            echo json_encode(array('status' => 1,'pow' => $powcuaban));
        }
     
            
    
    }
    
    

    
   
?>
