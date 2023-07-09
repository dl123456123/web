<?php 
$title = 'Đăng Nhập';
if(!empty($_SESSION['user'])){
    die ('<meta http-equiv="refresh" content="0;URL=/" />');
}
?>
<section id="main">				
				
				

		
	
	
                <div class="flex justify-center items-center px-4 py-8 md:px-0 md:py-0" style="height: calc(100vh - 80px)">
                <div class="w-full max-w-sm">
                    <div class="w-full border border-gray-400 shadow rounded bg-white py-4 px-6" >
                        <div class="text-gray-800 text-center text-2xl font-extrabold">
                            ĐĂNG NHẬP TÀI KHOẢN
                        </div>
                        <div class="border-t border-gray-600 w-32 mx-auto mt-1"></div>
                        
                        <span>
                            <div class="mt-4">
                                <label class="block text-gray-800 text-sm font-semibold mb-1">Tên tài khoản</label> 
                                <input type="text" placeholder="Nhập tài khoản" id="taikhoan" value="" class="border border-gray-400 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none"> 
                                <span class="mt-1 flex items-center font-semibold tracking-wide text-red-500 text-xs"></span>
                            </div>
                        </span>
                        
                        <span>
                            <div class="my-2">
                                <label class="block text-gray-800 text-sm font-semibold mb-1">Mật khẩu</label>
                                <input autocomplete="" type="password" id="matkhau" placeholder="Nhập mật khẩu" value="" class="border border-gray-400 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                <span class="mt-1 flex items-center font-semibold tracking-wide text-red-500 text-xs"></span>
                            </div>
                        </span>
                        
                        <div class="mt-4 mb-2 flex justify-center flex-col">
                            <button type="submit" id="dangnhap" class="focus:outline-none h-10 bg-red-600 text-white flex items-center justify-center rounded w-full p-1 px-8 text-xl">
                                Đăng nhập
                            </button>
                            <a href="/signup" class="mt-2 py-1 rounded border border-gray-400 bg-white text-gray-800 text-xl flex items-center justify-center relative"><i class="absolute bx bxs-user-plus" style="left: 10px; top: 9px;"></i> Tạo tài khoản</a>
                        </div>
</div>
                </div>
            </div>
                


<div id="result"></div>


        <!-- END: PAGE CONTENT -->
    </DIV><!-- END: PAGE CONTAINER -->
    <script type="text/javascript">
    $(document).ready(function() {

    $('#dangnhap').click(function() {
        document.getElementById("dangnhap").disabled = true;
        document.getElementById('dangnhap').innerHTML = "<i class=\"fas fa-circle-notch fa-spin\"></i>  Đang xử lý...";
        
		
    $.ajax({
        type: "POST",
        url: '/TAD_SYSTEM/Model/Account/Login.php',
        data: {
            
			
            taikhoan: $("#taikhoan").val(),
            matkhau: $("#matkhau").val()
        },
		
        success: function(result)
        {
                    document.getElementById("dangnhap").disabled = false;
            document.getElementById('dangnhap').innerHTML = "Đăng Nhập";

           $("#result").html(result);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#dangnhap').click();
    }
});

</script>