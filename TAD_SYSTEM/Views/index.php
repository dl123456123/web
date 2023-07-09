<?php 
require_once __DIR__."/../Database/Class_Controller.php";

$loadshop = 'active';
?>
<?php $title = 'Trang Chủ'; ?>



<section id="main">
<div class="my-6">
        <div class="w-full border-4 border-trueGray-800 bg-trueGray-800 max-w-6xl mx-auto relative">
            <div class="flex md:flex-row-reverse flex-wrap">
                <div class="w-full md:w-4/6 pb-0">
                    <div class="ml-0 border-2 border-trueGray-800">
                        <div class="carousel carousel--left carousel--slidable">
                            <ul class="carousel__list">
                                <li data-index="1" class="carousel__item carousel__item--active">
                                    <span>
                                        <div><img class="object-center object-fill h-full w-full" src="<?php echo $tad->settings('banner'); ?>"></div>
                                    </span>
                                </li>
                            </ul>
                            <ol class="carousel__indicators carousel__indicators--disc">
                                <li data-slide-to="0" class="carousel__indicator carousel__indicator--active"></li>
                            </ol>
                            <button type="button" data-slide="prev" class="carousel__control carousel__control--prev"></button>
                            <button type="button" data-slide="next" class="carousel__control carousel__control--next"></button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-2/6">
                    <div class="bg-trueGray-800 w-full" style="min-height: 338px;">
                        <div class="flex color-grant font-bold">
                            <div class="cursor-pointer bg-trueGray-800 tablinks active" onclick="Tab('nap')">
                                <h2 class="py-1 px-2 w-32 text-center title-grant font-extrabold text-xl md:text-2xl">
                                    NẠP THẺ
                                </h2>
                            </div>
                            <div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('top')">
                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">
                                    TOP NẠP                               </h2>
                            </div> 
							<div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('phanthuong')">
                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">
                                    PHẦN QUÀ                           </h2>
                            </div> 
                        </div>
                        <span class="tabcontent" id="nap" style="display: block;">
                            <div class="w-full form-header" >
                                <div class="py-3 px-5">
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
										<select id="loaithe" class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                                <option selected>Chọn Loại Thẻ</option>
												<option value="VIETTEL">Viettel</option>
								<option value="MOBIFONE">Mobifone</option>
								<option value="VINAPHONE">Vinaphone</option>
								<option value="VNMOBI">Vietnammobi</option>
								<option value="GATE">Gate</option>
								<option value="ZING">Zing</option></select>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current h-4 w-4"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                                            </div>
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
										<select id="menhgia" class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
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
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current h-4 w-4"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                                            </div>
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <input type="number" id="code" placeholder="Mã số thẻ" class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <input type="number" id="serial" placeholder="Số serial" class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                        </div>
                                    </span>
                                    <div class="mt-4">
                                        <button type="submit" id="napthe" class="homepayin uppercase flex items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl rounded focus:outline-none px-4 text-center btn-inner" style="color: rgb(51, 51, 51);">
										Nạp thẻ
                                        </button>
                                    </div>
                                    <div class="text-center mt-2 text-white font-semibold text-sm">
                                        Hãy chọn đúng mệnh giá. Sai sẽ mất thẻ
                                    </div>
                                </div>
</div>
							
                        </span>
                        <div class="tabcontent" id="top" style="display: none;">
                            <div class="v-list-top-card py-1 mt-2 md:py-2 px-1 md:px-3">
                            <?php
                                               $user = $tad->users();
                                               $stt = 0;
                                               $result = mysqli_query($tad->tad_db(), "SELECT * FROM nguoidung ORDER BY sum_money DESC  LIMIT 8");
                                               while($row = mysqli_fetch_assoc($result)){
                                               $stt++;
                                               ?>
							
                                <div class="flex items-center justify-between px-2 py-1">
                                    <div class="flex items-center">
                                        <div class="v-star relative">
                                            <i class="bx text-3xl text-red-500 bxs-star"></i>
                                            <span class="absolute font-bold text-white" style="top: 4px; left: 11px;"><?=$stt?></span>
                                        </div>
                                        <span class="ml-1 text-white w-full font-bold truncate" style="max-width: 8rem;">
                                        <?=$row['username']?>                                                                                            
                                        </span>
                                    </div>
                                    <div class="font-bold text-lg">
                                        <span class="bg-red-600 w-32 text-white rounded-sm text-center inline-block"> 
                                        <?=number_format($row['sum_money'])?>    <span class="text-xs"><small>VND</small>
										</span>
                                        </span>
                                    </div>
                                </div>
								<?php } ?>
							
                                
								
                            </div>
                        </div>

                        <div class="tabcontent" id="phanthuong" style="display: none;">
                            <div class="v-list-top-card py-1 mt-2 md:py-2 px-1 md:px-3">
                                    <div class="font-bold text-lg" style="color:white">
											<div class="sa-bntabbox">
  <p style="text-align: center;"><strong><span style="font-size: 20px;">ĐUA TOP NẠP THẺ HÀNG THÁNG</span></strong></p>
<p style="text-align: center;"><strong>NHẬN NGAY QUÀ CỰC KHỦNG</strong></p>
<p style="text-align: center;"><strong>TOP 1: 25.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP 2: 20.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP 3: 15.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP 4: 10.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP5: 5.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>NGOÀI RA SHOP CHỌN RA 10 BẠN&nbsp;</strong></p>
<p style="text-align: center;"><strong>NẠP TRÊN 500K NHẬN ĐƯỢC: 2000 KC</strong></p>
<p style="text-align: center;"><strong>NẠP TRÊN 200K NHẬN ĐƯỢC: 1000 KC</strong></p></div>                                    </div>
                            </div>
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
document.getElementById('napthe').innerHTML = "<iconify-icon icon=\"line-md:loading-twotone-loop\"></iconify-icon>VUI LÒNG CHỜ";

   

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
<section class="main-content">
<div class="container-xl">

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
     
      <h3>Thông Báo</h3>
    </div>
    <div class="modal-body">
      <!-- <p><img src=""></p> -->
      <p><?php echo $tad->settings('thongbao');?></p>
    </div>
    <div class="modal-footer">
       <center><button class="close btn btn-danger">Đóng Thông Báo</button></center>
    </div>
  </div>

</div>
<div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto" style="background-color: rgba(0,0,0,0.8);padding: 10px;">
            <div class="md:mx-0">
                <div class="py-2">

<div class="mb-16">
			<div class="mb-6 block">
				<div class="fade-in text-center uppercase py-1 text-gray-700 text-3xl font-extrabold my-2">
					<center><img src="https://shopgow.xyz/tep-tin/615270danh%20m%E1%BB%A5c%20ff%201a.png" style="max-width:100%"></center>
				</div>
				<div class="mb-2"></div>
			</div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                        <?php
		$result = mysqli_query($tad->tad_db(), "SELECT * FROM vongquay_kimcuong WHERE `status` = 'true' ORDER BY id DESC ");
		while($row = mysqli_fetch_assoc($result)){
			?>
                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300" style="padding: 1px; background: #1f2228; border: 1px solid #30343c;">
                                <!-- VÒNG QUAY GIỜ VÀNG -->
                                <a href="/minigame/<?php echo $row['id'];?>">				
							<img style="position: absolute;max-width: 30%;height: auto;top: -5px;right: -5px;z-index: 10;" src="https://khonickff.com/upload-usr/images/Nujy1KViLA_1655307198.png">
                                    <img class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" data-src="/uploads/lazyload.jpg" data-srcset="<?php echo $row['thumb'];?>" >
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase" style="color: rgb(247, 176, 60);background: rgba(0,0,0,0.5); margin-bottom: 8px;">
                                        <?php echo $row['name'];?>                  </div>
                                        <ul class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <!---->
                                                        <li style="color: #fff;"><?php echo $row['mota'];?></li>

                                        </ul>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <button type="button" class="border-2 text-center px-1 w-20 h-8 py-1 rounded font-semibold text-sm ml-1 focus:outline-none cursor-default" style="color: red; border-color: red; color: red;text-decoration: line-through;color: #919191;border: 2px solid;font-weight: bold;">
                                                <b><?php echo number_format($row['giatien'] * 2);?> đ </b>
                                            </button>
                                            <button type="button" class="border-2 text-center px-1 w-20 h-8 py-1 rounded font-semibold text-sm ml-1 focus:outline-none cursor-default" style="color: yellow; border-color: yellow;">
                                                <b><?php echo number_format($row['giatien']);?> đ </b>
                                            </button>
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center">
										
                                                <img src="<?php echo $tad->settings('choingay');?>" style="max-width: 100px; margin-top: 10px;">
                                        </div>
                                    </div>
                                </a>
                            </div>
            <?php } ?>
							
							
							
            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300" style="padding: 1px; background: #1f2228; border: 1px solid #30343c;">
                                <!-- VÒNG QUAY GIỜ VÀNG -->
                                <a href="/nickff">
                                    <img style="position: absolute;max-width: 30%;height: auto;top: -5px;right: -5px;z-index: 10;" src="https://khonickff.com/upload-usr/images/ui5bVK4PbC_1655307175.png">
                                    <img class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" data-src="/upload/nickff.gif" src="/upload/nickff.gif">
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase" style="color: rgb(247, 176, 60);background: rgba(0,0,0,0.5); margin-bottom: 8px;">
                                            NICK FREEFIRE GIÁ RẺ                               </div>
                                        <ul class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <!---->
                                            <p>
                                                <span style="color:#fff">
                                                    Nick đang bán:
                                                    <b><?php echo $tad->count_acc_ff('conlai');?> Acc </b>
                                                </span>
                                            </p>
                                        </ul>
										
                                        <div class="flex px-2 mt-2 justify-center">
                                            <button type="button" class="border-2 text-center px-1 w-20 h-8 py-1 rounded font-semibold text-sm ml-1 focus:outline-none cursor-default" style="color: yellow; border-color: yellow;">
                                                <b>KHO NICK</b>
                                            </button>                                            
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center">
                                                <img src="<?php echo $tad->settings('muangay');?>" style="max-width: 100px; margin-top: 10px;">
                                        </div>
                                    </div>
                                </a>
                            </div>	
                            <?php
		$result2 = mysqli_query($tad->tad_db(), "SELECT * FROM random_ff WHERE `trangthai` = 'true' ORDER BY id DESC ");
		while($row2 = mysqli_fetch_assoc($result2)){
			?>
                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300" style="padding: 1px; background: #1f2228; border: 1px solid #30343c;">
                                <!-- VÒNG QUAY GIỜ VÀNG -->
                                <a href="/random/<?php echo $row2['id'];?>">
							<img style="position: absolute;max-width: 30%;height: auto;top: -5px;right: -5px;z-index: 10;" src="https://khonickff.com/upload-usr/images/ui5bVK4PbC_1655307175.png">
                                    <img class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" data-src="/uploads/lazyload.jpg" data-srcset="<?php echo $row2['thumb'];?>" >
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase" style="color: rgb(247, 176, 60);background: rgba(0,0,0,0.5); margin-bottom: 8px;">
                                        <?php echo $row2['name'];?>                  </div>
                                        <ul class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <!---->
                                                        <li style="color: #fff;"><?php echo $row2['mota'];?></li>

                                        </ul>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            
                                            <button type="button" class="border-2 text-center px-1 w-20 h-8 py-1 rounded font-semibold text-sm ml-1 focus:outline-none cursor-default" style="color: yellow; border-color: yellow;">
                                                <b><?php echo number_format($row2['giatien']);?> đ </b>
                                            </button>
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center">
										
                                                <img src="<?php echo $tad->settings('choingay');?>" style="max-width: 100px; margin-top: 10px;">
                                        </div>
                                    </div>
                                </a>
                            </div>
            <?php } ?>
										

						</div>
	</div>











	</div>
    </div>
		</div>
	</div>
</div>
