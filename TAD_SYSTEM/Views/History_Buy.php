<?php
$title = 'Biến Động SỐ Dư';
if(empty($_SESSION['user'])){
    die ('
	<script>alert("Bạn Phải Đăng Nhập Để Sử Dụng Tính Năng Này!");</script>
	<meta http-equiv="refresh" content="0;URL=/login" />');
}
?>
<section class="main-content">
	<div class="container-xl">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
				    <div class="col-lg-12">
				        <div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Biến Động SỐ Dư</h3>
								<img src="https://<?php echo $_SERVER['SERVER_NAME'];?>/assets/images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
                           <div class="row">
						    <div class="col-12 col-md-12 mt-5">
							    <table class="display" id="table_id" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                            
                                            <th  class="text-center">Nội Dung</th>
                                            <th  class="text-center">Trước Giao Dịch</th>
                                            <th  class="text-center">Sau Giao Dịch</th>
                                            <th  class="text-center">Thời Gian</th>
                                        </tr>
                                            </thead>
                                                 <tbody>
                                    <?php
                                                $user = $tad->users();
                                                $stt = 0;
                                                $result = mysqli_query($tad->tad_db(), "SELECT * FROM history WHERE `username` = '".$user['username']."' ORDER BY `id` DESC ");
                                                while($row = mysqli_fetch_assoc($result)){
                                                $stt++;
                                                ?>
                                                <tr>
                                                <td class="text-center"><?php echo $row['id']; ?></td>
                                                
                                                <td class="text-center"><h5><?php echo $row['text']; ?> </h5></td>
                                                <td class="text-center"><?php echo number_format($row['truoc_gd']); ?>đ </td>
                                                <td class="text-center"><?php echo number_format($row['sau_gd']); ?>đ </td>
                                                <td class="text-center"><?php echo $row['time']; ?> </td> 
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                                            </tbody>
                                </table>
							</div>
								</div>
							</div>		
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
} );
</script>
    