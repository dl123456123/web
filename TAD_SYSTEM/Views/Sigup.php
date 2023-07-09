<?php 
$title = 'Đăng Ký';
if(!empty($_SESSION['user'])){
    die ('<meta http-equiv="refresh" content="0;URL=/" />');
}
?>
<section id="main">				
				
				
    
	
				<div class="flex justify-center items-center px-4 py-8 md:px-0 md:py-0" style="height: calc(100vh - 80px)">
					<div class="w-full max-w-sm">
						<div class="w-full border border-gray-400 shadow rounded bg-white py-4 px-6">
							<div class="text-gray-800 text-center text-2xl font-extrabold">
								ĐĂNG KÝ TÀI KHOẢN
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
							
							<span>
								<div class="my-2">
									<label class="block text-gray-800 text-sm font-semibold mb-1">Nhập lại mật khẩu</label>
									<input autocomplete="" type="password" id="nhaplaimk" placeholder="Nhập lại mật khẩu" value="" class="border border-gray-400 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
									<span class="mt-1 flex items-center font-semibold tracking-wide text-red-500 text-xs"></span>
								</div>
							</span>
							
							<div class="mt-4 mb-2 flex justify-center flex-col">
								<button type="submit" class="focus:outline-none h-10 bg-red-600 text-white flex items-center justify-center rounded w-full p-1 px-8 text-xl" id="dangky">
									Đăng ký
								</button>
								<a href="/login" class="mt-2 py-1 rounded border border-gray-400 bg-white text-gray-800 text-xl flex items-center justify-center relative"><i class="absolute bx bxs-user-plus" style="left: 10px; top: 9px;"></i> Đăng nhập</a>
							</div>
</div>
					</div>
				</div>		
</section>



<div id="result"></div>


        <!-- END: PAGE CONTENT -->
    </DIV><!-- END: PAGE CONTAINER -->
    <script type="text/javascript">
    $(document).ready(function() {

    $('#dangky').click(function() {
        document.getElementById("dangky").disabled = true;
        document.getElementById('dangky').innerHTML = "<i class=\"fas fa-circle-notch fa-spin\"></i> Đang Xử Lý";
        
		
    $.ajax({
        type: "POST",
        url: '/TAD_SYSTEM/Model/Account/Sigup.php',
        data: {
            
            taikhoan: $("#taikhoan").val(),
            matkhau: $("#matkhau").val(),
			matkhau2: $("#nhaplaimk").val()
        },
		
        success: function(result)
        {
                    document.getElementById("dangky").disabled = false;
            document.getElementById('dangky').innerHTML = "Tạo tài khoản";

           $("#result").html(result);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#dangky').click();
    }
});

</script>