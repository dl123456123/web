<?php

	/*
					INFO Tác Giả
		------------------------------------
		Tên: Đạt Light (TADVN)
		Sinh năm: 2K5
		FB: https://facebook.com/dat.lightdzz

		
	*/
	if (!(file_exists('TAD_SYSTEM/Database/System_Config.php'))) {   
		header("Location: /install");            
		}else{
			require_once __DIR__."/TAD_SYSTEM/Model/Class_Router.php";
		}
	
	
?>