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
   $daquay = $_POST['daquay'];
    if( empty($_SESSION['user'])){
        die(json_encode(array('status' => 3)));
    }else{
     
             if($daquay == 1){
            $pow = 1;
        }else if($daquay == 3){
            $pow = 3;
        }else if($daquay == 5){
            $pow = 5;
        }else if($daquay == 7){
            $pow = 7;
        }else if($daquay == 10){
            $pow = 10;
        }else{
            $pow = 0;
        }
        $hi = mysqli_query($tad->tad_db(), "UPDATE nguoidung SET `pow` = `pow` + '$pow' WHERE `id` = '".$tad->user('id')."'");
        if($hi == true){
            $powcuaban = $user['pow'];
           
            echo json_encode(array('status' => 1,'pow' => $powcuaban));
        }
        }
       
    
    
    

    
   
?>
