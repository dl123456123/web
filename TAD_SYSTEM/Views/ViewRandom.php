<?php
$id = $get_data[0];


if( mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM random_ff WHERE id = '$id' AND trangthai = 'true'")) < 1 ){
    die ('<meta http-equiv="refresh" content="0;URL=/" />');
}

$randomff = mysqli_fetch_array(mysqli_query($tad->tad_db(), "SELECT * FROM random_ff WHERE id = '$id' AND trangthai = 'true' LIMIT 1"));
$nickrandom = mysqli_query($tad->tad_db(),"SELECT * FROM nick_random_ff WHERE id_random = '".$randomff['id']."' AND trangthai = 'true' ORDER BY id DESC LIMIT 10");
$title = $randomff['name'];
?>
<section id="main">				
				
				
<div>
    <br>
    <div class="w-full max-w-6xl mx-auto v-layout-item text-gray-800 py-4 md:py-12 px-4 md:px-2" style="background: #345;color: #fff;padding: 5px;border-radius:11px">
       <div class="md:ml-0 mb-4 w-full text-center inline-block uppercase py-1 text-gray-800 md:text-3xl text-2xl font-extrabold">
       <b style="color: #fff;padding: 5px;border-radius:11px"><?=$randomff['name']?>  </b> </div>
    <div class="text-xl bg-blue-100 p-2 text-gray-900 px-3 rounded mb-4">
        <div class="relative">
            <p><?=$randomff['name']?>  (<?=number_format($randomff['giatien'])?>đ) </p>
            <p>100% Nhận Được Nick Đúng Mật Khẩu</p>
            <p>30% Nhận Được Nick VIP</p>
            <p>20% Nhận Được Nick Cực VIP</p>
            <p>40% Nhận Được Nick Bình Thường</p>
            <p>10% Nhận Được Nick Cùi</p>
            </p>
            <p>Tỷ lệ nhận được gói kim cương vip cực cao &lt;3</p>
        </div>
    </div>
        <div class="my-2"></div>
        <div class="my-6 v-item-account">
            <div class="grid grid-cols-8 gap-2 md:gap-4">
            <?php
		
		while($row = mysqli_fetch_assoc($nickrandom)){
			?>
			                <div class="fade-in col-span-8 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 border border-gray-300 relative" style="padding: 1px;">
                    <div>
                        <div class="relative">
                            <a>
                                <div class="relative">
                                    <img class="h-56 md:h-40 w-full object-fill object-center lazyLoad" data-src="<?=$randomff['thumb_random']?>" src="<?=$randomff['thumb_random']?>">
                                    <span class="absolute v-text-1 bg-red-700 text-white font-bold text-sm inline-block px-2 rounded-sm" style="right: 5px; top: 5px;"><?=$row['id']?></span>
                                </div>
                            </a>
                            <div class="py-2 bg-gray-200 px-2"></div>
                            <div class="my-2 py-2 px-2 relative">
                                <div class="grid grid-cols-12 gap-3 text-white-700 font-medium">
                                
                                    <div class="col-span-6 text-center">
                                    
                                        <div class="text-center "><b>100%</b>: Nick đúng mk</div>
                                    </div>
                                    <div class="col-span-6 text-center">
                                        <div class="text-center"><b>30%</b>: Nick VIP</div>
                                    </div>
                                    <div class="col-span-6 text-center">
                                        <div class="text-center"><b>20%</b>: Nick Cực VIP</div>
                                    </div>
                                    <div class="col-span-6 text-center">
                                        <div class="text-center"><b>40%</b>: Có Thông Tin</div>
                                    </div>
                                    <div class="col-span-6 text-center">
                                        <div class="text-center"><b>10%</b>: Nick cùi</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 rounded-b-sm grid grid-cols-12 gap-5 p-2">
                                <div class="col-span-6">
                                    <ul class="v-text-1 rounded-sm w-full font-medium" style="font-weight: 500;">
                                        <p class="w-full border border-red-600 text-center rounded text-red-600 block px-3 py-1">
                                        <?=number_format($randomff['giatien'])?> đ
                                        </p>
                                    </ul>
                                </div>
                                <div class="col-span-6">
                                    <div class="w-full">
									                                        <a href="#" onclick="muarandom(<?=$row['id']?>)" class="cursor-pointer border rounded w-full text-center cursor-pointer border-red-500 hover:border-yellow-500 bg-red-500 transition duration-200 hover:bg-yellow-500 text-white uppercase inline-block font-semibold py-1 px-3">
                                            THỬ NGAY
                                        </a>
									                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
				             
				            </div>
		
    </div>
</div>
<div id="thongbao"></div>
<br>
<script type="text/javascript">
 function muarandom(id) {
   

    Swal.fire({
        title: 'Xác Nhận Thanh Toán',
        text: "Bạn có đồng ý mua nick random này không ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Mua ngay'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/TAD_SYSTEM/Model/Ajax/MuaNickRandom.php",
                method: "POST",
                data: {
                    id: id                },
                success: function(response) {
                    $("#thongbao").html(response);
                  
                }
            });
        } else {
            
        }
    })



}
</script>