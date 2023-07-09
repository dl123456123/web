<?php
//Cho phép file xuất khi truy cập đúng
$main = True;

//gọi url -> file
require_once __DIR__."/../Controller/Request_url.php";


//xác định url
if(isset($_GET['url'])){
	$request = $_GET['url'];
} else {
	$request = '/';
}

require_once __DIR__."/../Views/head.php";
	//path page
$path = __DIR__.'/../Views/';

$type_load = 1;

	//truyền file
if(isset($url[$request])){
   
	if(file_exists(__DIR__.'/../Views/'.$url[$request])){
		$load = $path.$url[$request];
	} else {
		$load = $path.'index.php';
        
	}
    
} else {
	if(isset($url2[explode('/', $request)[0]])){

		$file = explode('|', $url2[explode('/', $request)[0]])[1];
		
		if(file_exists(__DIR__.'/../Views/'.$file)){
			$leach = (int) explode('|', $url2[explode('/', $request)[0]])[0];
			$get_data = [];

			for($i = 1; $i <= $leach; $i ++){
				if(isset(explode('/', $request)[$i])){
					$get_data[$i - 1] = explode('/', $request)[$i];
				}
			}

			$load = $path.explode('|', $url2[explode('/', $request)[0]])[1];
			$type_load = 2;
            
		} else {
			$load = $path.'index.php';
		}

	} else {
		$load = $path.'index.php';
	}
    

}

    
	//gọi file
if($type_load == 1){
	require $load;
} else {
	require $load;
}
require_once __DIR__."/../Views/foot.php";
?>