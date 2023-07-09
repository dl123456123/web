<?php
require_once __DIR__."/../Model/Main/Menuprofile.php";
?>
<div id="VScrollRecharge" class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">


            <div class="v-bg w-full mb-2 px-2">
                <h2 class="v-title border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                    LỊCH SỬ NẠP THẺ
                </h2>
                <div class="v-table-content select-text">
                    <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
                        <table class="table-auto w-full scrolling-touch min-w-850">
                            <thead>
                                <tr class="v-border-hr select-none border-b-2 border-gray-300">
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">STT</th>
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Mã Thẻ</th>
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Serial Thẻ</th>
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Loại thẻ</th>
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Mệnh giá</th>
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Thời gian</th>
									   <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Tình Trạng</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-semibold">
                            <?php
                                               $user = $tad->users();
                                               $stt = 0;
                                               $result = mysqli_query($tad->tad_db(), "SELECT * FROM napthe WHERE nguoinap = '".$user['username']."' ORDER BY id DESC   ");
                                               while($row = mysqli_fetch_assoc($result)){
                                               $stt++;
                                               ?>
                                               <tr>
                                               <th ><?php echo $stt; ?></th>
                                               <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1" ><?php echo $row['mathe']; ?> </td> 
                                               <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1" ><?php echo $row['seri']; ?> </td> 
                                               <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1" ><?php echo $row['loaithe']; ?> </td>
                                               
                                               <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1" ><?php echo number_format($row['menhgia']); ?> đ</td>
                                               <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1" ><?php echo $row['time']; ?> </td> 
                                               <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1" > <?php echo $tad->trangthaithe($row['trangthai']); ?> </td>
                                              
                                               
                                               
                                               
                                               </tr>
                                               <?php
                                               }
                                               ?>
								                            </tbody>
                        </table>
						                    </div>
                    <div class="v-table-note mt-1 py-1 font-semibold text-gray-800 text-sm">
                        Dùng điện thoại <i class="bx bxs-mobile"></i>, hãy vuốt bảng từ phải qua trái (<i class="bx bxs-arrow-from-right"></i>) để xem đầy đủ thông tin!
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</div>
</div>