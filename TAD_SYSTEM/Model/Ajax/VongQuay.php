<?php
sleep(1);
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();

$id = $_POST['csrf'];
$type = $_POST['type'];
$amount = $_POST['amount'];

$vongquay = mysqli_fetch_assoc(mysqli_query($tad->tad_db(), "SELECT * FROM `vongquay_kimcuong` WHERE `id`='".$id."'"));
if(!$vongquay) die(json_encode(array('status' => false,'item' => '','location' => '', 'msg' => 'Lỗi hệ thống!')));

switch ($type) {
	case 'play':
// xử lí rút gọn giá //
$giatien = $vongquay['giatien']; // giá tiền gốc rút gọn 3 số 0
if($amount == 1){
$gia = $giatien;
} else if($amount == 3){
    $gia = $giatien*3;
} else if($amount == 5){
    $gia = $giatien*5;
}else if($amount == 7){
    $gia = $giatien*7;
} else if($amount == 10){
    $gia = $giatien*10;
} else {
 $gia = $giatien*$amount;
}
$price = $gia;//giá thật
if(empty($_SESSION['user'])){
die(json_encode(array('status' => 3,'msg' => 'Vui lòng đăng nhập để chơi!')));
}else if($user['money'] < $price){
die(json_encode(array('status' => 4,'msg' => 'Vui lòng nạp thêm tiền để chơi!')));
}else{

	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Element.php';
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Randomizer.php';
	$totalfull = 0;
	    for ($i = 0; $i < $amount; $i++) {
	  $randomizer = new Randomizer();
  
	  $randomizer          ->add( new Element('1', $tad->vongquaykimcuong_gift($id, 1, 'tyle'))) 
	                       ->add( new Element('2', $tad->vongquaykimcuong_gift($id, 2, 'tyle'))) 
	                       ->add( new Element('3', $tad->vongquaykimcuong_gift($id, 3, 'tyle')))
	                       ->add( new Element('4', $tad->vongquaykimcuong_gift($id, 4, 'tyle'))) 
	                       ->add( new Element('5', $tad->vongquaykimcuong_gift($id, 5, 'tyle')))
	                       ->add( new Element('6', $tad->vongquaykimcuong_gift($id, 6, 'tyle'))) 
	                       ->add( new Element('7', $tad->vongquaykimcuong_gift($id, 7, 'tyle'))) 
	                       ->add( new Element('8', $tad->vongquaykimcuong_gift($id, 8, 'tyle'))) 
	                          ;
      	$tadvn = $randomizer->get();       
          $location = "";
		switch ($tadvn) {
		    case '1':
		    $location = 360;
		        break;
		    case '2':
		    $location = 320;        
		        break;
		    case '3':
		    $location = 270;        
		        break;
		    case '4':
		    $location = 230;        
		        break;
		    case '5':
		    $location = 180;       
		        break;
		    case '6':
		    $location = 130;        
		        break;
		    case '7':
		    $location = 85;        
		        break;
		    case '8':
		    $location = 44;        
		        break;
		    default:
		    $location = "";   
		        break;
		}

	$status = 1; // true

    $msg = $tad->vongquaykimcuong_gift($id, $tadvn, 'text');
    if($vongquay['type'] == 'kc'){
    	//UPDATE Kimcuong vào acc
    	 mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `kimcuong` = `kimcuong` + '".$tad->vongquaykimcuong_gift($id, $tadvn, 'kimcuong')."' WHERE `username` = '".$user["username"]."'");
    	 $action = 'FreeFire';
    	 $his = '5';
    	 $vp = 'KC';
    	 $vp_r = 'Kim Cương';
    }else{

    	//UPDATE Kimcuong vào acc
    	//  mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `quanhuy` = `quanhuy` + '".$tad->vongquaykimcuong_gift($id, $tadvn, 'kimcuong')."' WHERE `username` = '".$user["username"]."'");
    	//  $action = 'Liên Quân';
    	//  $his = '6';
        //   $vp = 'QH';
        //   $vp_r = 'Quân Huy';
    }
   
    	// Update Lần sử dụng vòng quay
    mysqli_query($tad->tad_db(), "UPDATE `vongquay_kimcuong` SET `sudung` = `sudung` + 1 WHERE `id` = '".$id."'");
    	// Update vào lịch sử user
    mysqli_query($tad->tad_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`, `hisnick`) VALUES ('".$user['username']."', 'Vòng Quay ".$action."', '".$vongquay['name']."', '-".number_format($vongquay['giatien'])."đ', 'Nhận được ".$tad->vongquaykimcuong_gift($id, $tadvn, 'kimcuong')." ".$vp_r."', '".time()."', '', '".$his."')");
    

$hp[$i] = array('status' => 1, 'item' => $tadvn,'location' => $location,'msg' => $msg);
$total = $tad->vongquaykimcuong_gift($id, $tadvn, 'kimcuong');
$totalfull += $total;
}
	// Update Tiền User
    mysqli_query($tad->tad_db(),"UPDATE `nguoidung` SET `money` = `money` - '$price' WHERE `username` = '".$user["username"]."'"); 
	$hi = mysqli_query($tad->tad_db(), "UPDATE nguoidung SET `pow` = `pow` + '$amount' WHERE `id` = '".$tad->user('id')."'");
	$nohu = 0;
	if($hi == true){
		
		$powcuaban = $user['pow'];
		$tadvnpow = $powcuaban+$amount;
		if($powcuaban+$amount >= 100){
			require_once __DIR__."/../../../assets/Pusher/Pusher.php";
$options = array(
    'encrypted' => true
);
$pusher = new Pusher(
        '10d5ea7e7b632db09c72', 'a496a6f084ba9c65fffb', '234217', $options
);
            $phanqua = $tad->settings('nohu');
            
            $hi22 = mysqli_query($tad->tad_db(), "UPDATE nguoidung SET `kimcuong` = `kimcuong` + '$phanqua', `pow` = 0 WHERE `id` = '".$tad->user('id')."'");
            if($hi22 == true){
                $powcuaban222 = $user['pow'];
				$tadvnpow = 0;
                $data['type'] = 'success';
        $data['title'] = 'Thông Báo!';
        $data['message'] = 'Bạn Vừa Nổ Hũ '.number_format($phanqua).' Kim Cương Vì Đã Đạt Mốc 100 Năng Lượng';
        $pusher->trigger($user['username'], 'realtime', $data);
                $nohu = 1;
            }
        }
	}
$huy = array('status' => 1, 'amount' => $amount,'location' => $location,'msg' => $msg,'total' => number_format($totalfull).' '.$vp.'','type' => 'Thật', 'price'=> $gia, 'pow' => $tadvnpow, 'nohu' => $nohu);

echo json_encode($huy+$hp);


}
break;

	case 'test':
	    
	   
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Element.php';
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Randomizer.php';

$n = $amount;
for ($i = 0; $i < $n; $i++) {
  

	  $randomizer = new Randomizer();
  
	  $randomizer          ->add( new Element('1', $tad->vongquaykimcuong_gift($id, 1, 'tyle'))) 
	                       ->add( new Element('2', $tad->vongquaykimcuong_gift($id, 2, 'tyle'))) 
	                       ->add( new Element('3', $tad->vongquaykimcuong_gift($id, 3, 'tyle')))
	                       ->add( new Element('4', $tad->vongquaykimcuong_gift($id, 4, 'tyle'))) 
	                       ->add( new Element('5', $tad->vongquaykimcuong_gift($id, 5, 'tyle')))
	                       ->add( new Element('6', $tad->vongquaykimcuong_gift($id, 6, 'tyle'))) 
	                       ->add( new Element('7', $tad->vongquaykimcuong_gift($id, 7, 'tyle'))) 
	                       ->add( new Element('8', $tad->vongquaykimcuong_gift($id, 8, 'tyle'))) 
	                          ;
      	$hihihi = $randomizer->get();       
 	
		switch ($hihihi) {
		    case '1':
		    $location = 360;
		        break;
		    case '2':
		    $location = 320;        
		        break;
		    case '3':
		    $location = 270;        
		        break;
		    case '4':
		    $location = 230;        
		        break;
		    case '5':
		    $location = 180;       
		        break;
		    case '6':
		    $location = 130;        
		        break;
		    case '7':
		    $location = 85;        
		        break;
		    case '8':
		    $location = 44;        
		        break;
		    default:
		    $location = "";   
		        break;
		}

	$status = 1; // true

    $msg = $tad->vongquaykimcuong_gift($id, $hihihi, 'text');
    	// Play Try Don't Update Service!
 if($vongquay['type'] == 'kc'){
    	
    	 $vp = 'KC';
    }else{
    	
          $vp = 'QH';
    }
$hp[$i] = array('status' => 1, 'item' => $hihihi,'location' => $location,'msg' => $msg);
$total = $tad->vongquaykimcuong_gift($id, $hihihi, 'kimcuong');
$totalfull += $total;
}

$huy = array('status' => 1, 'amount' => $amount,'location' => $location,'type' => 'Thử', 'price' => '0','msg' => $msg,'total' => $totalfull.' '.$vp.'');


echo json_encode($huy+$hp);



	    	break;
			
	default:
		die(json_encode(array('status' => false,'item' => '','location' => '', 'msg' => 'Lỗi hệ thống!')));
		break;
}
?>
