<?php
require_once __DIR__."/Head.php";
$exec = $_SERVER['REQUEST_URI'];
$exec_shop= substr($exec ,0,-2);



?>
	<body>

	<div class="select-none" style="height: auto;min-height: 100vh;">
            <div class="sticky top-0 z-100">
                <div class="shadow" style="background: rgba(0, 0, 0, 0.7);">
                    <header class="mx-auto w-full max-w-6xl px-2 flex flex-wrap items-center py-2">
                        <div class="flex  flex justify-between items-center">
                            <a href="/"><img style="max-width: 250px;" src="<?php echo $tad->settings('logo'); ?>" class="v-logo"></a>
                        </div>
						<?php
                                        if(empty($_SESSION['user'])){
                                    ?>
						 
						                        <a href="/login" class="lg:hidden flex border mx-1 px-2 h-8 border-gray-400 rounded items-center text-gray-800 font-bold justify-center pointer-cursor button-header">
                            <span class="block"><i class="relative bx bxs-user mr-2"></i>Đăng nhập</span>
                        </a>
                        <a href="/signup" class="lg:hidden flex border mx-1 px-2 h-8 border-gray-400 rounded items-center text-gray-800 font-bold justify-center pointer-cursor button-header">
                            <span class="block"><i class="relative bx bxs-user-plus mr-2"></i>Đăng ký</span>
                        </a>
												<?php }else { ?>
                        <a href="/user" class="lg:hidden flex border mx-1 px-3 h-8 border-gray-400 rounded items-center text-gray-800 font-bold justify-center pointer-cursor button-header">
                            <span class="block"><i class="relative bx bxs-user mr-1"></i><?php echo $tad->user('username');?></span>
                        </a>
                        <a  Onclick = "dangxuat123()" class="lg:hidden flex border mx-1 px-3 h-8 border-gray-400 rounded items-center text-gray-800 font-bold justify-center pointer-cursor button-header">
                            <span class="block"><i class="relative bx bxs-log-out mr-2"></i>Thoát</span>
                        </a>
						<?php } ?>
						                                                <label for="menu-toggle" id="toggle" class="pointer-cursor text-gray-800 text-2xl lg:hidden block">
                            <span class="h-8 w-8 border border-gray-400 justify-center items-center inline-flex rounded"><i class="bx bx-menu" style="color:#fff;"></i></span>
                        </label>
                        <!--div class="hidden md:mt-0 lg:flex lg:items-center lg:w-auto w-full" id="menu-toggle"-->
                        <div class="flex-1 flex justify-between items-center hidden md:mt-0 lg:flex lg:items-center lg:w-auto w-full" id="menu-toggle">
                            <nav class="font-bold lg:text-lg">
                                <ul class="lg:flex items-center justify-between text-base text-gray-700 lg:pt-0">
                                    <li><a href="/index.html" class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block text-header">TRANG CHỦ</a></li>
                                    <li><a href="/nap-tien.html" class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block text-header">NẠP THẺ CÀO</a></li>
                                    <li><a href="/user/draw-diamond" class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block text-header">Rút Kim Cương</a></li>
                                    <?php
                                    if($tad->user('level') == 'admin'){
                                        ?>
                                        <li><a href="/admin" class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block text-header">ADMIN</a></li>
                                        <?php
                                    }else{
                                    }?>
                         </div>           
									
						<div class="hidden md:mt-0 lg:flex lg:items-center lg:w-auto w-full">
						<?php
                                        if(empty($_SESSION['user'])){
                                    ?>			
                            <a href="/login" class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-gray-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor button-header"><span class="block"><i class="relative bx bxs-user mr-2"></i>Đăng nhập</span></a>
                            <a href="/signup" class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-gray-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor button-header"><span class="block"><i class="relative bx bxs-user-plus mr-2"></i> Đăng ký</span></a>
													<?php }else{ ?>
							<a href="/user" class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-gray-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor button-header">
							<span class="block"><i class="relative bx bxs-user mr-1"></i><?php echo $tad->user('username');?> - <?=number_format($tad->user('money'))?> $</span>
							</a>
							<button Onclick="dangxuat()" class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-gray-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor button-header"><i class="relative bx bxs-log-out mr-2"></i>Đăng xuất</span></button>
														<?php } ?>
						</div>
                    </header>
					<script>
                                                    function sleep(ms) {
                                        return new Promise(resolve => setTimeout(resolve, ms));
                                                    }
                                                    function dangxuat(){
                                                        Swal.fire("Thông Báo", "Đăng Xuất Thành Công", "success");
                                                        sleep(3);
                                                        location.href = '/TAD_SYSTEM/Model/Account/Sigout.php';
                                                       
                                                    }
													function dangxuat123(){
                                                        Swal.fire("Thông Báo", "Đăng Xuất Thành Công", "success");
                                                        sleep(3);
                                                        location.href = '/TAD_SYSTEM/Model/Account/Sigout.php';
                                                       
                                                    }
													
                                                </script>
                </div>
            </div>
			<script>
                var theToggle = document.getElementById('toggle');
                function hasClass(elem, className) {
                	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
                }
                function addClass(elem, className) {
                    if (!hasClass(elem, className)) {
                    	elem.className += ' ' + className;
                    }
                }
                
                function removeClass(elem, className) {
                	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
                	if (hasClass(elem, className)) {
                        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
                            newClass = newClass.replace(' ' + className + ' ', ' ');
                        }
                        elem.className = newClass.replace(/^\s+|\s+$/g, '');
                    }
                }
                
                function toggleClass(elem, className) {
                	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
                    if (hasClass(elem, className)) {
                        while (newClass.indexOf(" " + className + " ") >= 0 ) {
                            newClass = newClass.replace( " " + className + " " , " " );
                        }
                        elem.className = newClass.replace(/^\s+|\s+$/g, '');
                    } else {
                        elem.className += ' ' + className;
                    }
                }
                
                theToggle.onclick = function() {
                   toggleClass(document.getElementById('menu-toggle'), 'hidden');
                   return false;
                }
            </script>
