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
require_once __DIR__."/../Database/Class_Controller.php";

$tadvn = mysqli_fetch_array(mysqli_query($tad->tad_db(), "SELECT * FROM `nguoidung` WHERE `id` > 0"));
if(!$tadvn){
if (isset($_GET['i'])) {
    echo '<script>alert("'.$_GET['i'].'");</script>';
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cài Đặt Tài Khoản</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat
}

input,
textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.card {
    border-radius: 0;
    border: none
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

#logo {
    width: 70px;
    height: 60px
}

.heading {
    margin-bottom: 60px !important
}

::placeholder {
    color: #000 !important;
    opacity: 1
}

:-ms-input-placeholder {
    color: #000 !important
}

::-ms-input-placeholder {
    color: #000 !important
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #D500F9, #FFD54F)
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

a {
    color: #000
}

a:hover {
    color: #000
}

.bottom {
    width: 100%;
    margin-top: 50px !important
}

.sm-text {
    font-size: 15px
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 100%
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important
    }

    .card2 {
        padding: 50px
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
    }
}</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
 </head>

<body oncontextmenu="return false" class="snippet-body">
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <h3 class="mb-5 text-center heading">Bước 2</h3>
                        <h6 class="msg-info">Vui Lòng Nhập Tài Khoản Mật Khẩu Muốn Làm Admin</h6>
                       
                        <div class="form-group"> <label class="form-control-label text-muted">Tài Khoản</label> 
                            <input type="text" id="username" placeholder="Nhập Tài Khoản" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Mật Khẩu</label> 
                            <input type="password" id="pass" placeholder="Mật Khẩu" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Nhập Lại Mật Khẩu</label> 
                            <input type="password" id="password" placeholder="Nhập Lại Mật Khẩu" class="form-control"> </div>
                        
                        <div class="row justify-content-center my-3 px-3"> 
                            <button type="submit" id="submit" class="btn-block btn-color">Cài Đặt</button> 
                        </div>
                        
                    </div>
                </div>

            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">Trang cài đặt Tài Khoản Mật Khẩu Cho Admin!</h3> <small class="text-white">Chúng tôi sẽ tạo 1 tài khoản mật khẩu của bạn đã nhập ở trên thành admin shop!<br>
                       </small>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="result"></div>
<script src="/assets/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang thực hiện...";

    $.ajax({
        type: "POST",
        url: '/TAD_SYSTEM/Model/Ajax/Buoc2.php',
        data: {
            username: $("#username").val(),         
            pass: $("#pass").val(),
            password: $("#password").val()
           
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Cài Đặt";

           $("#result").html(result);
        }
    });

});

});

    $(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#submit').click();
    }
});
</script>
                            
                        </body></html>
						<?php } else { 
require_once __DIR__."/../Views/Header.php";
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
require_once __DIR__."/../Views/Footer.php";
						}
?>
<?php 


// 	 function try_cURL($url) {
// 		$curl = curl_init();
// 		curl_setopt_array($curl, array(
// 		    CURLOPT_RETURNTRANSFER => true,
// 		    CURLOPT_URL => $url,
// 		    CURLOPT_SSL_VERIFYPEER => false
// 		));
// 		$resp = curl_exec($curl);
// 		curl_close($curl);
// 		return $resp;
// 	}

// $data = 'domain='.$_SERVER['SERVER_NAME'];
// $url = 'https://datlight.vn/ttshop/savetaoshop.php?'.$data;
//  try_cURL($url);
?>