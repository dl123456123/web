<?php
require_once __DIR__."/../Model/Main/Menuprofile.php";
?>
<div id="VScrollRecharge" class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">
<div class="v-bg w-full mb-5">
                <h2 class="v-title border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold text-sm">THÔNG TIN TÀI KHOẢN</h2>
                <div class="v-table-content-2">
                    <div class="py-3 px-4">
                        <table class="table-auto w-full">
                            <tbody class="text-sm select-text">
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-gray-800">ID TÀI KHOẢN</td>
                                    <td class="v-table-title font-bold px-2 py-2 text-gray-800 uppercase"><span class="py-1 px-3 bg-red-600 text-white rounded"><?=$user['id'];?></span></td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-gray-800">TÊN HIỂN THỊ</td>
                                    <td class="v-table-title px-2 py-2 text-gray-800"><?=$user['username'];?></td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-gray-800">TÊN TÀI KHOẢN</td>
                                    <td class="v-table-title px-2 py-2 text-gray-800"><?=$user['username'];?></td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-gray-800">SỐ DƯ</td>
                                    <td class="px-2 py-2 text-gray-800"><b class="text-red-500"><?=number_format($user['money']);?> VNĐ</b></td>
                                </tr>

                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-gray-800">NHÓM TÀI KHOẢN</td>
                                    <td class="v-table-title px-2 py-2 text-gray-800"><?php echo $tad->chucvu($user['level']);?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
    </div>
</div>
</div>