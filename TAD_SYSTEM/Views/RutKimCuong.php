<?php
require_once __DIR__."/../Model/Main/Menuprofile.php";
?>
<div id="VScrollRecharge" class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">


<div class="v-bg w-full mb-2 px-2">
    <h2 class="v-title border-l-4 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
       Rút Kim Cương
    </h2>
    <div class="v-table-content select-text">
        <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
            
               

                <b>Bạn đang có <font color="blue"><?=number_format($user['kimcuong'])?> Kim Cương</font></b>
                <br/>
                                            
                
                
                <div class="form-group">
                    <label class="mT-5 py-1 rounded-sm text-gray-700 focus:outline-none font-semibold">ID Game <span class="text-danger">*</span></label>
                    <input type="text" id="idgame"  class="border border-gray-500 rounded bg-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none" placeholder="Số ID..." value="" required="required">
                </div>
                <div class="form-group">
                <label class="mT-5 py-1 rounded-sm text-gray-700 focus:outline-none font-semibold">Gói Kim Cương <span class="text-danger">*</span></label>
                    <select name="goi" class="border border-gray-500 rounded bg-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none" id="goi">
                            <option value="1190">1.190 Kim Cương</option>
                            <option value="3050">3.050 Kim Cương</option>
                            <option value="9999">9.999 Kim Cương</option>
                            <option value="20000">20.000 Kim Cương</option>
                            <option value="50000">50.000 Kim Cương</option>
                            <option value="100000">100.000 Kim Cương</option>
                    </select>
                </div>
                
        
                <div class="mess"></div>
                 <div Style="margin-top:15px">
                <button type="submit" id="rutkc" class="md:w-32 w-full bg-red-500 text-white font-bold inline-flex items-center justify-center h-8 text-md rounded focus:outline-none px-3 text-center submit" >Rút Kim Cương</button>
            </div>

       
        </div>
    </div>



        <div class="v-table-content select-text">
        <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
            <table class="table-auto w-full scrolling-touch min-w-850">
                <thead>
                    <tr class="v-border-hr select-none border-b-2 border-gray-300">
                         <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Mã Đơn</th>
                         <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">ID Nhận</th>
                         <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Số Kc</th>
                         <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Thời Gian</th>
                         <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">Trạng thái</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-semibold">
                <?php
$stt = 0;
$username = $user['username'];
$result = mysqli_query($tad->tad_db(), "SELECT * FROM rutkimcuong WHERE nguoirut = '$username'  ORDER BY id DESC LIMIT 15");
while($row = mysqli_fetch_assoc($result)){
$stt++;
if($row['trangthai'] == 0){
    $html = 'yellow-400';
    $trangthai = 'Đang Xử Lý';
}else if($row['trangthai'] == 1){
    $html = 'red-600';
    $trangthai = 'Đã Hủy Đơn';
}else{
    $html = 'green-600';
    $trangthai = 'Thành Công';
}
?>
                                                    <tr>
                                <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=$stt?></td>
                                <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=$row['idgame']?></td>
                                <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=number_format($row['goirut'])?> Kim Cương</td>
                                <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><?=$row['time']?></td>
                                <td class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1"><span class="py-1 px-3 bg-<?=$html?> text-white rounded"><?=$trangthai?></span></td>
                              
                    </tr>
                    <?php } ?>
                                                  
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
<div id="thongbao"></div>
<script type="text/javascript">
    $(document).ready(function() {

    $('#rutkc').click(function() {
        document.getElementById("rutkc").disabled = true;
        document.getElementById('rutkc').innerHTML = "<i class=\"fas fa-circle-notch fa-spin\"></i>";
        
		
    $.ajax({
        type: "POST",
        url: '/TAD_SYSTEM/Model/Ajax/RutKimCuong.php',
        data: {
            
			
            idgame: $("#idgame").val(),
            goi: $("#goi").val()
        },
		
        success: function(thongbao)
        {
                    document.getElementById("rutkc").disabled = false;
            document.getElementById('rutkc').innerHTML = "Rút Kim Cương";

           $("#thongbao").html(thongbao);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#rutkc').click();
    }
});

</script>