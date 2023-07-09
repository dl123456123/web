<?php
sleep(1);
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();
$domain = "https://".$_SERVER["SERVER_NAME"]."/";
$page = isset($_POST['page']) ? $_POST['page'] : "";
$id = isset($_POST['id']) ? $_POST['id'] : "";
$sapxep = isset($_POST['sapxep']) ? $_POST['sapxep'] : "";
$price = isset($_POST['price']) ? $_POST['price'] : "";


if($id){
    $sql_id = " AND id = '{$id}'";
}else {
    $sql_id = '';
}

if($sapxep == ""){
    $sql_sapxep = "id DESC";
}elseif($sapxep == 1){
	$sql_sapxep = "giatien ASC";
}elseif($sapxep == 2){
	$sql_sapxep = "giatien DESC";
}

if($price == 1) {
	$sql_price = "AND `giatien` < 100000 ";
}elseif($price == 2) {
	$sql_price = "AND `giatien` BETWEEN 100000 AND 400000 ";
}elseif($price == 3) {
	$sql_price = "AND `giatien` BETWEEN 400000 AND 800000 ";
}elseif($price == 4) {
	$sql_price = "AND `giatien` BETWEEN 800000 AND 1000000 ";
}elseif($price == 5) {
	$sql_price = "AND `giatien` >= 10000000 ";
}else{
	$sql_price = '';
}
// $total_records = mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM list_accounts WHERE  status = '0' $sql_id $sql_price"));
// $total_records = mysqli_num_rows(mysqli_query($tad->tad_db(), "SELECT * FROM list_accounts WHERE `status` = '0' $sql_id $sql_price")) ;
// $config = array(
//     "current_page" => $page,
//     "total_record" => $total_records,
//     "limit" => "16",
//     "range" => "5",
//     "link_first" => "",
//     "link_full" => "?page={page}"
// );
    
    // $paging = new Pagination;
    // $paging->init($config);
    $get = mysqli_query($tad->tad_db(),"SELECT * FROM nickff WHERE status = '1' $sql_id $sql_price ORDER BY $sql_sapxep ");
   

?>
   <div class="grid grid-cols-8 gap-2 md:gap-4">
<?php    
    if(mysqli_num_rows($get) > 0) {
    while($data = mysqli_fetch_array($get)) {
       
?>
    <div class="fade-in col-span-8 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 border border-gray-300 relative"
                                        style="padding: 1px;">
                                        <div>
                                            <div class="relative">
                                                <a href="<?php echo $domain."view/".$data["id"]?>">
                                                    <div class="relative">
                                                        <img class="h-56 md:h-40 w-full object-fill object-center "
                                                            src="<?php echo $tad->get_thumb_freefire($data['id']);?>" />
                                                        <span
                                                            class="absolute v-text-1 bg-red-700 text-white font-bold text-sm inline-block px-2 rounded-sm"
                                                            style="right: 5px; top: 5px;">#<?php echo $data["id"]?></span>
                                                    </div>
                                                </a>
                                                <div class="py-2 bg-gray-200 px-2"></div>
                                                <div class="my-2 py-2 px-2 relative">
                                                                                                        <div class="grid grid-cols-12 gap-3 text-white font-medium text-sm">
                                                                                                                <div class="col-span-6 text-center">
                                                            <p>
                                                            Đăng Ký:
                                                                <b class="text-white-800"> <?php echo $data["dangky"]?> 
 </b>
                                                            </p>
                                                        </div>
                                                                                                                <div class="col-span-6 text-center">
                                                            <p>
                                                                Rank:
                                                                <b class="text-white-800"> <?php echo $data["rank"]?>
 </b>       
                                                            </p>
                                                        </div>
                                                                                                                <div class="col-span-6 text-center">
                                                            <p>
                                                                PET:
                                                                <b class="text-white-800"> <?php echo $data["pet"]?>
 </b>
                                                            </p>
                                                        </div>
                                                                                                                <div class="col-span-6 text-center">
                                                            <p>
                                                                Loại Nick:
                                                                <b class="text-white-800">Free Fire </b>
                                                            </p>
                                                        </div>
                                                                                                                <div class="col-span-6 text-center">
                                                        </div>
                                                    </div>
                                                                                                    </div>
                                                <div class="mt-4 rounded-b-sm grid grid-cols-12 gap-5 p-2">
                                                    <div class="col-span-6">
                                                        <ul class="v-text-1 rounded-sm w-full font-medium"
                                                            style="font-weight: 500;">
                                                            <p
                                                                class="w-full border border-red-600 text-center rounded text-white block px-3 py-1">
                                                                <?php echo number_format($data["giatien"])?> đ
                                                            </p>
                                                        </ul>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <div class="w-full">
                                                            <a href="<?php echo $domain."view/".$data["id"]?>"
                                                                class="cursor-pointer border rounded w-full text-center cursor-pointer border-red-500 hover:border-yellow-500 bg-red-500 transition duration-200 hover:bg-yellow-500 text-white uppercase inline-block font-semibold py-1 px-3">
                                                                Chi tiết
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php }?>
   </div>
<?php

}else { ?>

<b style="color: #fff;padding: 3px;border-radius:11px"> Không Tìm Thấy Dữ Liệu !</b>
<?php } ?>
    
    

    
   

