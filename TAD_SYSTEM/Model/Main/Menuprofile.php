<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();
$title = 'Profile User';
if(!$_SESSION['user']){
    die ('<meta http-equiv="refresh" content="0;URL=/" />');
}
?>
<section id="main">				
				
				



                <div class="w-full max-w-6xl mx-auto pt-6 md:pt-8 pb-8">
                <div class="mb-4 py-4 md:p-4" style=" background: #fff; ">
                    <div class="grid grid-cols-8 gap-4">
                    
                <div class="col-span-8 mb-4">
                    <div class="v-infomation relative h-40 lg:h-48" style="margin: 0px 0.15rem;">
                        <div class="w-full relative text-center">
                            <img class="mx-auto shadow border-2 border-gray-800 w-32 h-32 object-cover object-center" src="https://i.imgur.com/5QoYen1.png" alt="">
                            <h4 class="my-1 font-bold text-lg lg:text-2xl flex justify-center px-5 text-gray-800">
                                <span class="inline-block truncate mr-1" style="max-width: 9.5rem;"><i class="bx bxs-user-circle"></i> <?php echo $user['username'];?> </span>
                
                                <div class="user">
                                    <a title="" target="_blank" rel="nofollow">
                                        <img alt="" style="height: 24px;width:auto;display: initial;padding-bottom: 5px;" src="">
                                    </a>
                                </div>
                
                            </h4>
                        </div>
                    </div>
                    <div class="my-1"><span class="block mx-auto w-1/5 border-b border-gray-200"></span></div>
                </div>
                    
                    
                <div class="col-span-8 sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-2 lg:px-0 px-2">
                        <div class="mb-4 v-menu-account">
                        <h2 class="mb-2 border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">Tài khoản</h2>
                        <ul class="pl-2 text-gray-800">
                            <li class="py-1 border-b border-gray-200"><a href="/user" class=""><span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-user-circle"></i></span>Thông tin tài khoản</a></li>
                           
                        </ul>
                    </div>
                
                    
                    <div class="my-4 v-menu-account">
                        <h2 class="mb-2 border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                            TRÒ CHƠI
                        </h2>
                        <ul class="pl-2 text-gray-800 font-medium">
                            <li class="py-1 border-b border-gray-200">
                                <a href="/user/history-game" class="">
                                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-joystick"></i></span> Lịch sử mua nick
                                </a>
                            </li>

                            <li class="py-1 border-b border-gray-200">
                                <a href="/user/history-random" class="">
                                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-joystick"></i></span> Lịch sử mua nick random
                                </a>
                            </li>
                            
                            
                            <li class="py-1 border-b border-gray-200">
                                <a href="/user/history-vongquay" class="">
                                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-dollar-circle"></i></span> Lịch sử vòng quay
                                </a>
                            </li>			
                           
                
                            <li class="py-1 border-b border-gray-200">
                                <a href="/user/draw-diamond" class="">
                                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxl-unsplash"></i></span> Rút Kim Cương
                                </a>
                            </li>
                        </ul>
                    </div>    
                    <div class="my-4 v-menu-account">
                        <h2 class="mb-2 border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                            GIAO DỊCH
                        </h2>
                        <ul class="pl-2 text-gray-800 font-medium">
                            <li class="py-1 border-b border-gray-200">
                                <a href="/nap-tien.html" class="">
                                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-star"></i></span>Nạp thẻ cào tự động
                                </a>
                            </li>
                            <li class="py-1 border-b border-gray-200">
                                <a href="/recharge" class=""><span class="relative mr-2 text-lg" style="top: 1.5px;">
                                    <i class="bx bxs-dollar-circle"></i></span>Lịch sử nạp thẻ
                                </a>
                            </li>
                        </ul>
                    </div></div>       