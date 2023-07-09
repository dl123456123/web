<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();
$result = mysqli_query($tad->tad_db(), "SELECT * FROM `nhanqua` WHERE `username`='".$user['username']."'");
$row = mysqli_num_rows($result);
if($row > 0) {




}else{
?>

	
	    	    <div class="row">
			<div class="col-lg-12">
			    <div class="widget rounded mb-3">
					<div class="widget-header text-center">
						<h3 class="widget-title">Nhận Quà Khai Trương</h3>
						<img src="https://<?php echo $_SERVER['SERVER_NAME'];?>/assets/images/wave.svg" class="wave" alt="wave" />
					</div>
					<div class="widget-content">
						<div class="row">
						    <div class="col-lg-4"></div>
						                                <div class="col-lg-4">
                                <p class="text-center">Ấn Vào Nút "Nhận Quà Ngay" Để Nhận Quà</p>
                                <button class="btn btn-default btn-full" id="nhanqua"><i class="fas fa-gift"></i> Nhận Quà Ngay</button>
                            </div>
                            						</div>
					</div>		
				</div>
			</div>
		</div>
		<div id="modal_nhanqua"></div>
<script type="text/javascript">
        
    $(document).ready(function() {
        $('#nhanqua').click(function() {
            

            $("#modal_nhanqua").load("/TAD_SYSTEM/Model/Ajax/nhanqua.php");

        });
    });


</script>
<?php } ?>