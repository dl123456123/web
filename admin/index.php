<?php

	/*
					INFO Tác Giả
		------------------------------------
		Tên: Đạt Light (TADVN)
		Sinh năm: 2K5
		FB: https://facebook.com/dat.lightdzz

		
	*/

	require_once __DIR__."/../TAD_SYSTEM/Database/Class_Controller.php";
    $user = $tad->users();
    if($user['level'] != 'admin'){
        exit;
    }
	require_once __DIR__."/TAD_SYSTEM/Model/Class_Router.php";
?>