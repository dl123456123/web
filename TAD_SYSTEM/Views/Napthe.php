<?php
require_once __DIR__."/../Model/Main/Menuprofile.php";
?>
 <div id="VScrollRecharge" class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">
            <div class="w-full mb-2">
                <div class="rounded w-full">
                    <span>
                    <div class="w-full">
                            <h2 class="v-title border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                                KHU NẠP THẺ
                            </h2>
                            <div class="py-3 px-5">
                                <span class="mb-2 block">
                                    <div class="flex items-center relative">
                                    <select id="loaithe" class="border border-gray-500 rounded bg-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                    <option selected>Chọn Loại Thẻ</option>
												<option value="VIETTEL">Viettel</option>
								<option value="MOBIFONE">Mobifone</option>
								<option value="VINAPHONE">Vinaphone</option>
								<option value="VNMOBI">Vietnammobi</option>
								<option value="GATE">Gate</option>
								<option value="ZING">Zing</option></select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current h-4 w-4"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                                        </div>
                                    </div>
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative">
                                        <select id="menhgia" class="border border-gray-500 rounded bg-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                        <option>Chọn Mệnh Giá</option>
                                                <option value="10000">10.000</option>
                                                <option value="20000">20.000</option>
                                                <option value="30000">30.000</option>
                                                <option value="50000">50.000</option>
                                                <option value="100000">100.000</option>
                                                <option value="200000">200.000</option>
                                                <option value="300000">300.000</option>
                                                <option value="500000">500.000</option>
                                                <option value="1000000">1.000.000</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current h-4 w-4"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                                        </div>
                                    </div>
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative"><input type="number" id="code" placeholder="Mã số thẻ" class="border border-gray-500 rounded bg-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none"></div>
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative"><input type="number" id="serial" placeholder="Số serial" class="border border-gray-500 rounded bg-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none"></div>
                                </span>
                                <div class="mt-4 text-center">
                                    <button type="submit" id="napthe" class="homepayin uppercase flex w-40 font-semibold rounded items-center justify-center h-10 text-white text-xl rounded-none focus:outline-none px-4 text-center bg-red-500 hover:bg-red-600">
                                        Nạp thẻ
                                    </button>
                                </div>
                                <div class="mt-2 text-red-500 font-semibold text-sm">
                            
                                </div>
                            </div>
</div>
                    </span>
                    <!---->
                </div>
            </div>
            <div class="v-bg w-full mb-2 px-2">
                <h2 class="v-title border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                    THẺ NẠP GẦN NHẤT
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
    <div id="result"></div>


<!-- END: PAGE CONTENT -->

<script type="text/javascript">

$(document).ready(function() {

$('#napthe').click(function() {
document.getElementById("napthe").disabled = true;
document.getElementById('napthe').innerHTML = "<iconify-icon icon=\"line-md:loading-twotone-loop\"></iconify-icon>";

   

$.ajax({
type: "POST",
url: '/TAD_SYSTEM/Model/Ajax/Napthe.php',
data: {
	
	loaithe: $("#loaithe").val(),
	menhgia: $("#menhgia").val(),
	code: $("#code").val(),
	seri: $("#serial").val()
},


success: function(result)
{
			document.getElementById("napthe").disabled = false;
	document.getElementById('napthe').innerHTML = "Nạp Thẻ";

   $("#result").html(result);
}
});

});

});

$(document).ready(function() {
        $("napthe").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });
    });
</script>
</section>