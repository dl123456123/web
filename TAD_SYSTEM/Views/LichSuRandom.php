<?php
require_once __DIR__."/../Model/Main/Menuprofile.php";
?>
<div id="VScrollRecharge" class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">


<div class="v-bg w-full mb-2 px-2">
    <h2 class="v-title border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
        LỊCH SỬ MUA NICK RANDOM
    </h2>
    <div class="v-table-content select-text">
        <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
            <table class="table-auto w-full scrolling-touch min-w-850">
                <thead>
                    <tr class="v-border-hr select-none border-b-2 border-gray-300">
                           <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">STT</th>
                           <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Tài khoản/Mật Khẩu</th>
                           <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">2Fa </th>
                           <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Tình Trạng</th>
                           <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Thành Tiền</th>
                           <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Thời Gian</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-semibold">
                <?php
$stt = 0;
$username = $user['username'];
$result = mysqli_query($tad->tad_db(), "SELECT * FROM nick_random_ff WHERE nguoimua = '$username' AND trangthai = 'false' ORDER BY id DESC ");
while($row = mysqli_fetch_assoc($result)){
  $nickrandom =  mysqli_fetch_assoc(mysqli_query($tad->tad_db(), "SELECT * FROM random_ff WHERE id = '".$row['id_random']."' "));
$stt++;
?>
                                                    <tr>
                       <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">#<?=$stt?></th>
                       <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=$row['taikhoan']?>/<?=$row['matkhau']?></td>
                       <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=$row['2fa']?></td>
                       <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><span class="bg-green-600 text-white h-6 px-2">Mua Thành Công</span></td>
                       <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=number_format($nickrandom['giatien'])?> <sup>VNĐ</sup></td>
                       <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=$row['time']?></td>
                    </tr> 
                                                   <?php } ?>
                                                </tbody>
            </table>
                                    <div class="mt-3 md:mt-6 w-full flex justify-center items-center"><nav class="relative z-0 inline-flex v-pagination mx-auto v-text-1 v-light-theme"><li><a><button class="border mx-1 w-8 md:w-10 h-8 md:h-10 text-md md:text-lg select-none rounded inline-flex justify-center items-center px-4 py-2 focus:outline-none text-white border-red-600 text-white bg-red-600">1</button></a></li></nav></div>						                    </div>
        <div class="v-table-note mt-1 py-1 font-semibold text-gray-800 text-sm">
            Dùng điện thoại <i class="bx bxs-mobile"></i>, hãy vuốt bảng từ phải qua trái (<i class="bx bxs-arrow-from-right"></i>) để xem đầy đủ thông tin!
        </div>
                        </div>
</div>
</div>
</div>
</div>
</div>