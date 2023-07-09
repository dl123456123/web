<?php
$loai = $get_data[0];


if( mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM vongquay_kimcuong WHERE id = '$loai'")) < 1 ){
    die ('<meta http-equiv="refresh" content="0;URL=/" />');
}

$vongquay = mysqli_fetch_array(mysqli_query($tad->tad_db(), "SELECT * FROM vongquay_kimcuong WHERE id = '$loai' LIMIT 1"));
$title = $vongquay['name'];
?>
 
<section id="main">				
				
				
<!-- The Modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
     
      <h3>Thông Báo</h3>
    </div>
    <div class="modal-body">
      <p><?php echo $vongquay['name'];?> vừa tăng tỉ lệ ra kim cương cực cao lên đến 80% mọi người nhanh tay quay kẻo hết nhé!</p>
    </div>
    <div class="modal-footer">
       <center><button class="close btn btn-danger">Đóng Thông Báo</button></center>
    </div>
  </div>

</div>                <div class="w-full max-w-6xl mx-auto text-gray-800 px-3 md:p-0 mt-12 mb-5">
                <div class="md:ml-0 mb-4 w-full text-center inline-block uppercase py-1 text-gray-800 md:text-3xl text-2xl font-extrabold">
       <b style="background: #256;color: #fff;padding: 5px;border-radius:11px"> <?php echo $vongquay['name'];?></b> </div>
                    
                    <div class="pb-8 pt-4 md:pt-8 rounded grid grid-cols-12 gap-4" >
                        <div class="col-span-12 lg:col-span-8 px-0 md:px-3 mb-0 sm:mb-20 lg:mb-0" style="background: #345;color: #fff;padding: 5px;border-radius:11px">
                            <div class="w-full lg:flex justify-center items-center">
                                <div class="w-full">
                                    <div class="w-full">
                                        <div class="v-luckywheel flex justify-center relative">
                                            <div class="wheel-wrapper">
                                                <a id="start-played" class="wheel-pointer cursor-pointer">
                                                <img src="<?php echo $tad->settings('quay');?>" alt="Play Center">
                                                </a>
                                               
                                                    <img class="rotate-play" alt="Play" src="<?php echo $vongquay['image'];?>" >
                                              
                                                
                                            </div>
                                        </div>
                
                                        <div class="my-2 flex justify-center items-center">
                                                 <div class="text-center">
                                                
                                    <select style="width:100%;color: black;margin: auto;padding:5px 10px;border: 1px solid #144ed7;" id="numrolllop">
                                        <option value="1">Mua X1 - <?php echo number_format($vongquay['giatien']);?> / 1 Lần Quay </option>
                                        <option value="3">Mua X3 - <?php echo number_format($vongquay['giatien'] * 3);?> / 3 Lần Quay </option>
                                        <option value="5">Mua X5 - <?php echo number_format($vongquay['giatien'] * 5);?> / 5 Lần Quay </option>
                                        <option value="7">Mua X7 - <?php echo number_format($vongquay['giatien'] * 7);?> / 7 Lần Quay </option>
                                        <option value="10">Mua X10 - <?php echo number_format($vongquay['giatien'] * 10);?> / 10 Lần Quay </option>
                                    </select>
                                                 
                                                
                                        <div class="progress" style="margin-bottom:0;position:relative;z-index:1" title="Nổ hũ - khi đạt 100% sẽ có quà">
                                                <div class="bar shadow bubbles " style="width:100%"></div>
                                                <div class="persion_ppt" style="position: absolute;top: 0;left: 0;width: 100%;font-size: 12px;color: #423dea;line-height: 30px;">
                                                <b id="nangluong"><?php echo $tad->users()['pow'];?></b>/100 Năng Lượng</div>
                                            </div> 
                                            <span style="font-size: 15px;text-align: center;color: #fff;margin-bottom: 15px;display: block;margin-top: 5px;" >Tích đủ 100 năng lượng sẽ nổ hũ kim cương</span>
                                            
                                                  <h3 class="num-play">Mỗi Lượt Quay cần <b style="color:red"><?php echo number_format($vongquay['giatien']);?> VNĐ</b></h3>
                                                  <p style="color:fff;">(Nhanh tay kẻo hết sự kiện nhé mọi người)</p>
                                                </div>
                                        </div>
                                        <div>
                                            <style scoped="">
                                                .wheel-pointer {
                                                    background-image: url(/upload/1S.png) !important;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4 mt-4 md:mt-0 px-3" >
                            <div class="w-full" >
                                <div class="mt-2 w-full grid grid-cols-12 gap-2" >
                                    <div class="col-span-12">
                                        <a href="/user/draw-diamond" class="block text-white v-text text-center focus:outline-none lg:max-w-sm text-lg md:text-xl py-3 lg:py-2 px-3 w-full font-bold rounded" style="background: rgb(1, 162, 1);">
                                            <span class="relative block"> RÚT Kim Cương </span>
                                        </a>
                                    </div>
                                    <div class="col-span-12">
                                        <a href="/user/history-vongquay" class="block text-white v-text text-center focus:outline-none lg:max-w-sm text-lg md:text-xl py-3 lg:py-2 px-3 w-full font-bold rounded" style="background: rgb(1, 162, 1);">
                                            <span class="relative block"> LỊCH SỬ CHƠI </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-4 w-full rounded"  style="background: #3456;color: #fff;padding: 5px;border-radius:11px">
                    <h3 id="modal-headline" class="block text-white v-text text-center focus:outline-none lg:max-w-sm text-lg md:text-xl py-3 lg:py-2 px-3 w-full font-bold rounded" style="background: rgb(0 18 0);">LƯỢT CHƠI GẦN ĐÂY</b> </p></h3>
                    <div class="py-1 overflow-y-auto scrolling-touch max-h-400">
                        <div class="scrolling-touch min-h-650">
                            <table class="table-auto w-full bg-white">
                                <thead>
                                    <tr class="border-b-2 border-gray-400">
                                        <th class="py-2 text-sm font-bold text-red-600 text-left">
                                            TÀI KHOẢN
                                        </th>
                                        <th class="py-2 text-sm font-bold text-red-600 text-left">
                                            GIẢI THƯỞNG
                                        </th>
                                        <th class="py-2 text-sm font-bold text-red-600 text-left" style="width: 5.2rem;">
                                            THỜI GIAN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm font-semibold">
									
                                                <?php 
                                    $i = '1';
                        $res = mysqli_query($tad->tad_db(), "SELECT * FROM `user_history_system` WHERE `action` LIKE  'Vòng Quay%' AND `action_name`='".$vongquay['name']."' ORDER BY `time` DESC LIMIT 0, 10");
                        while ($row = mysqli_fetch_array($res)) {  
                                    ?>
                                                    <tr class="rounded-none border-b border-gray-400 py-8">
                                                            <td class="py-1 text-sm text-gray-800"><?php echo $row['username'];?></td>
                                                            <th class="py-1 text-sm text-gray-800"><?php echo $row['mota'];?></th>
                                                            <th class="py-1 text-sm text-gray-800"><?php echo date('d/m - H:i:s',$row['time']);?></th>
                                                        </tr>
                                                        <?php } ?>					
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <script type="text/javascript">
                  
    $(document).ready(function(e){
		var angle_gift = '';
		var num_gift = $("#numgift").val();
        var quay = true;
        var vong_lap = 4;
        var deg = ''; // tọa độ
        var soqua = 8;
        var phanqua = "";
        var goc = 0;
        //Click nút quay
        $('#start-played').click(function(){
            if(quay){
                quay = false;
                $.ajax({
                    url: '/tom_xoay5',
                    type: 'post',
                    dataType: 'JSON',
                    data: {limit: $("#limit").val()},
                    success: function (data) {
                        if(data.status=='error'){
                            quay = true;
                            $('#rotate-play').css({"transform": "rotate(0deg)"});
                                swal("Thông Báo!",  data.msg, "error");
                        } else if(data.status=='login') {
                            location.href='/login';
                        } else {
                            $('#rotate-play').css({"transform": "rotate(0deg)"});
							
							angles = 0;
							angle_gift = data.pos*(360/num_gift);
							
							
							$(".progress .bar").css("width",data.phantram+"%");
							$("#nangluong").html(data.phantram);
							$("#thieu").html(100 - data.phantram);
							
                            goc = 0;
                            phanqua = data.phanqua;
                            deg = data.pos *(360/8);
                            loop();
                        }
                    }
                });
            }
        });
        // function quay
        function loop() {
            $('#rotate-play').css({"transform": "rotate("+goc+"deg)"});
            
            if((parseInt(goc)-10) <= -(((vong_lap*360)+deg))){
                goc = parseInt(goc) - 2;
            }else{
                goc = parseInt(goc) - 10;
            }
            if(goc >= -((vong_lap*360)+deg)){
                requestAnimationFrame(loop);
            } else {
                quay = true;
                swal("Thành công!",  '' + phanqua, "success");
               
            }
        }
    });
</script> -->
<!-- <script type="text/javascript">

$( document ).ready(function() {
 var bRotate = false;
 function rotateFn(angles, txt, type,data){
        bRotate = !bRotate;
        $('#rotate-play').stopRotate();
        $('#rotate-play').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:2500, // tốc độ quay tay
            callback:function (){
              var $html = "";

              $html += "<p>Kết quả quay <span class='text-red-600'>(" + data.type + "):</span> Quay " + data.amount + " lần - giá " + data.price + "k</p>";
                    $html += "<div><b>Mua X" + data.amount + ": Tổng Trúng</br><p class='text-md uppercase inline-block rounded border-2 border-red-500 px-2 text-red-500 mr-1'>" + data.total + "</p></b></div>";
                    $html += "<div class='h-2'></div>";
                    for ($i = 0; $i < data.amount; $i++) {
                        $html += "<p class='text-md'>- Quay lần " + ($i + 1) + ": " + data[$i]["msg"];
                    }

             $('.content-popup').html($html);
             $('#noticeModal').modal('show');
             var modal = document.getElementById("noticeModal");
                modal.style.display = "block";
                bRotate = !bRotate;
            }
        })
    }
 $('body').delegate('#start-played', 'click', function() {

        if(bRotate)return;
 


  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/TAD_SYSTEM/Model/Ajax/VongQuay.php', 
        data: {
              amount: $("#numrolllop").val(),
               type: 'play',
                csrf: '<?=$vongquay['id'];?>'
        }, 
        success: function (data) {
            if(data.status == 3) {
    Swal.fire("s","Hãy đăng nhập để chơi!","success");
            }else if(data.status == 4) {
     $('.content-popup').text('Vui lòng nạp thêm tiền để chơi!');
                  $('#noticeModal').modal('show');
                  var modal = document.getElementById("noticeModal");
                modal.style.display = "block";
                 
            }else if(data.status == 1) {
                if(data.amount > 0 && data.amount < 11) {
            
   rotateFn(data.location, data.msg, "success",data);
}else {
    $('.content-popup').text('Lỗi hệ thống!');
                $('#noticeModal').modal('show');
                var modal = document.getElementById("noticeModal");
                modal.style.display = "block";
}

            }else {
   $('.content-popup').text('Lỗi hệ thống!');
    $('#noticeModal').modal('show');
    var modal = document.getElementById("noticeModal");
                modal.style.display = "block";
            }

    }
});

    });

 

});

</script> -->
<script src="/assets/Scripts/client_0x2165x1.js"></script>    



<script type="text/javascript">
   
   $( document ).ready(function() {
 var bRotate = false;
 function rotateFn(angles, txt, type,data){
//     $.ajax({ 
//         type: 'post', 
//         dataType: "JSON",
//         url: '/TAD_SYSTEM/Model/Ajax/GetNangLuong.php', 
//         data: {
//             daquay: $("#numrolllop").val()
//         }, 
//         success: function (data3) {
//             if(data3.status == 1) {
//                 $('#nangluong').html(data3.pow);
//                 $(".progress .bar").css("width",data3.pow+"%");
               
//             }else{
                
//             }

//     }
// });
        bRotate = !bRotate;
        
        // $('.rotate-play').stopRotate(); // hàm này như mẹ r
       
        $('.rotate-play').rotate({

            angle:0,
            animateTo:angles+1800,
            duration:2500, // tốc độ quay tay
            callback:function (){
              var $html = "";
            
              $html += "<p>Kết quả quay <span class='text-red-600'>(" + data.type + "):</span> Quay " + data.amount + " lần - giá " + data.price + "k</p>";
       
                $html += "<div><b>Mua X" + data.amount + ": Tổng Trúng</br><p class='text-md uppercase inline-block rounded border-2 border-red-500 px-2 text-red-500 mr-1'>" + data.total + "</p></b></div>";
            
                   
                    $html += "<div class='h-2'></div>";
                    for ($i = 0; $i < data.amount; $i++) {
                        $html += "<p class='text-md'>- Quay lần " + ($i + 1) + ": " + data[$i]["msg"];
                    }
                    if(data.nohu == 1){
                        $html += "<div><b>Chúc Mừng Bạn Đã Nổ Hũ</br><p class='text-md uppercase inline-block rounded border-2 border-red-500 px-2 text-red-500 mr-1'><?php echo number_format($tad->settings('nohu'));?> KC</p><br>Vì Đã Đạt Mốc 100 Năng Lượng</b></div>";
                    }
            //  $('.content-popup').html($html);
          
             Swal.fire("Thông Báo",$html,"success");
            
                bRotate = !bRotate;
            }
            
        })
    }
    $('#start-played').click(function (){

        if(bRotate)return;
 


  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/TAD_SYSTEM/Model/Ajax/VongQuay.php', 
        data: {
              amount: $("#numrolllop").val(),
               type: 'play',
                csrf: '<?=$vongquay['id'];?>'
        }, 
        success: function (data) {
            if(data.status == 3) {
    Swal.fire("Thông Báo","Hãy đăng nhập để quay!","error");
            }else if(data.status == 4) {
                Swal.fire("Thông Báo","Bạn Không Đủ Tiền Để Quay!","error");
                 
            }else if(data.status == 1) {
                
//                 $.ajax({ 
//         type: 'post', 
//         dataType: "JSON",
//         url: '/TAD_SYSTEM/Model/Ajax/NangLuong.php', 
//         data: {
//             daquay: $("#numrolllop").val()
//         }, 
//         success: function (data2) {
//             if(data2.status == 1) {
              
              
//             }else{
                
//             }

//     }
// });
rotateFn(data.location, data.msg, "success",data);
$('#nangluong').html(data.pow);
$(".progress .bar").css("width",data.pow+"%");


            }else {
                Swal.fire("Thông Báo","Có Lỗi Xảy Ra Vui Lòng Thử Lại!","success");
            }

    }
});

    });
    
 

});
</script>