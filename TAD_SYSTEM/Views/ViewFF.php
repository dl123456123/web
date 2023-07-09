<?php
$id = $get_data[0];


if( mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM nickff WHERE status = '1' AND id = '$id'")) < 1 ){
    die ('<meta http-equiv="refresh" content="0;URL=/" />');
}

$nickff = mysqli_fetch_array(mysqli_query($tad->tad_db(), "SELECT * FROM nickff WHERE status = '1' AND id = '$id' LIMIT 1"));
$title = 'Chi Tiết Nick Free Fire #'.$nickff['id'];
?>
<br>
<div class="v-theme" >
    <div class="pb-10" >
        <div class="v-card w-full max-w-6xl mx-auto" style="background: #345;color: #fff;padding: 5px;border-radius:11px">
            <div class="md:mx-0">
                <div class="py-6">
                    <div class="mb-16">
                        <div class="mb-4 py-4 md:p-4 bg-box-dark">
                            <div
                                class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
                               Chi Tiết:
                                Nick Free Fire #<?=$nickff['id']?>                            </div>
                            <div class="sticky col-span-12 grid grid-cols-10 gap-2 select-none py-2 px-2 color-grant text-xl font-bold rounded"
                                style="background: rgb(37 37 37); top: 60px; z-index: 98;">
                                <div class="col-span-10 md:col-span-5">
                                    <div class="flex items-center flex-wrap text-yellow-500 pt-3">
                                        <div class="relative">
                                            <?=number_format($nickff['giatien'])?> đ
                                            <span class="absolute" style="top: -18px; left: 1px; font-size: 0.8rem;">
                                                GIÁ BÁN
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="v-skull-top col-span-10 md:col-span-5 text-yellow-500 flex justify-end items-center flex-wrap">
                                    <button
                                        class="ml-4 flex bg-red-500 text-white items-center justify-center h-10 text-2xl rounded focus:outline-none px-4 text-center"
                                        id="btnThanhToan">
                                        THANH TOÁN
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="v-account-detail p-2 md:px-0 mt-5">
                                    <div class="v-infomations border-t border-b border-gray-700 py-4 mb-10">
                                        <div class="w-full grid grid-cols-12 gap-4"> 
                                               <div
                                                class="uppercase col-span-6 md:col-span-3 text-base md:text-xl font-semibold text-center">
                                                <span class="text-white">Nổi Bật:</span> <b class="text-yellow-600">
                                                <?=$nickff['noibat']?> </b>
                                            </div>

                                                                               
                                                                                        <div
                                                class="uppercase col-span-6 md:col-span-3 text-base md:text-xl font-semibold text-center">
                                                <span class="text-white">Đăng Ký:</span> <b class="text-yellow-600">
                                                <?=$nickff['dangky']?> 
</b>
                                            </div>

                                                                                        <div
                                                class="uppercase col-span-6 md:col-span-3 text-base md:text-xl font-semibold text-center">
                                                <span class="text-white">Rank:</span> <b class="text-yellow-600">
                                                <?=$nickff['rank']?> 
</b>
                                            </div>

                                                                                        <div
                                                class="uppercase col-span-6 md:col-span-3 text-base md:text-xl font-semibold text-center">
                                                <span class="text-white">Pet:</span> <b class="text-yellow-600">
                                                <?=$nickff['pet']?> 
</b>
                                            </div>

                                                                                    
                                    </div>
                                </div>
                                <li class="text-center">
                            <b>Hình Ảnh Thông Tin Của Nick : #<?=$id?></b>
                            <p><b><font color="red">Lưu ý : Zoom Toàn Màn Hình Để Xem Rõ Nét Hơn Nhé !</font></b></p>
						</li>
						<br>
                                <?php 
        $path = $_SERVER["DOCUMENT_ROOT"]."/upload/nickff/";
        $dir = $path.'info/'.$id;

                  if ($opendirectory = opendir($dir)){
                    while (($file = readdir($opendirectory)) !== false){

                        if ($file != "." && $file != "..") {
                        echo '<p><img data-sizes="auto" class="border border-gray-400 mb-2 w-full zoom" src="/upload/nickff/info/'.$id.'/'.$file.'"></p>';
        				}
                  	}

                    closedir($opendirectory);
                  }
    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thongbao"></div>
<script type="text/javascript">
$("#btnThanhToan").on("click", function() {
    $('#btnThanhToan').html('<iconify-icon icon=\"line-md:loading-twotone-loop\"></iconify-icon>').prop('disabled',
        true);

    Swal.fire({
        title: 'Xác Nhận Thanh Toán',
        text: "Bạn có đồng ý mua nick này không ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Mua ngay'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/TAD_SYSTEM/Model/Ajax/MuaNickFF.php",
                method: "POST",
                data: {
                    id: <?=$id?>                },
                success: function(response) {
                    $("#thongbao").html(response);
                    $('#btnThanhToan').html(
                            'THANH TOÁN')
                        .prop('disabled', false);
                }
            });
        } else {
            $('#btnThanhToan').html(
                    'THANH TOÁN')
                .prop('disabled', false);
        }
    })



});
</script>