<?php 
require_once __DIR__."/../Database/Class_Controller.php";


function create_image() 
{ 

    // $md5_hash = md5(rand(0,999)); 
    // $security_code = substr($md5_hash, 15, 5); 
     $min_number = 1;
     $max_number = 15;
                        
    $random_number1 = mt_rand($min_number, $max_number);
    $random_number2 = mt_rand($min_number, $max_number);
    $random_number3 = $random_number1 + $random_number2;
    $security_code = $random_number1.'+'.$random_number2.'=';
    $_SESSION["security_code"] = $random_number3;
    $width = 100; 
    $height = 30;  
    $image = ImageCreate($width, $height);  
    $white = ImageColorAllocate($image, 255, 255, 255); 
    $black = ImageColorAllocate($image, 0, 0, 0); 
    ImageFill($image, 0, 0, $black); 
    ImageString($image, 5, 30, 6, $security_code, $white); 
    header("Content-Type: image/jpeg"); 
    ImageJpeg($image); 
    ImageDestroy($image); 
} 

create_image(); 
exit(); 
?>