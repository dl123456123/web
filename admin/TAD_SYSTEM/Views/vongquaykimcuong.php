<div class="row">
    <?php if(!isset($_GET['edit'])) { ?>
    <div class="col-lg-12">
        
        <div class="block block-rounded">
            
            <div class="block-content">
                
                <div class="table-responsive">
                <a class="btn btn-primary btn-sm" href="/admin/list/vongquaykimcuong/add"><i class="fas fa-eye"></i> Thêm Vòng Quay</a>
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                            <th scope="col">ID #</th>

<th scope="col">Tên </th>

<th scope="col">Mô Tả</th>

<th scope="col">Trạng Thái</th>

<th scope="col">Giá Tiền</th>


<th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = $tad->db_query("SELECT * FROM `vongquay_kimcuong` ORDER BY `id` DESC ");
                                while($row = mysqli_fetch_assoc($query)){
                                    if($row['status'] == 'false')$check='';else $check='checked';
                            ?>
                            <tr>
                                <td style="font-weight: bold;">
                                    <span class="text-danger"><?= $row['id']; ?></span>
                                </td>
                                <td>
                                   
                                    <span class="text-muted"><?= $row['name']; ?></span>
                                </td>
                                <td>
                                   
                                   <span class="text-muted"><?= $row['mota']; ?></span>
                               </td>
                               <td>
                               <div class="form-check form-switch">

<input onclick="options(<?php echo $row['id'];?>, 'vq_<?php echo $row['id'];?>')" class="form-check-input"id="vq_<?php echo $row['id'];?>" type="checkbox" <?php echo $check;?>>

<label class="form-check-label" for="flexSwitchCheckChecked"></label>

</div>
                               </td>
                                <td>
                                    <?= number_format($row['giatien']); ?>đ
                                </td>
                               
                              
                              
                               
                               

                                <td>
                                    <a class="" href="?edit=<?= $row['id']; ?>"> <button type="button" class="btn btn-info btn-outline btn-xs m-r-5 tooltip-info"><i class="fa fa-edit"></i></button></a>
                                    <button onclick="del(<?php echo $row['id'];?>, '<?php echo $row['name'];?>')" type="button" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

function del(id, name) {

	 if (confirm('Bạn có chắc muốn xóa '+name+'?')) {

	 		location.href = '/admin/TAD_SYSTEM/Model/Ajax/del_vongquay.php?id='+id;

		} 

}



function options(id, element) {



		var checkbox = $('#'+element);



		if(checkbox.prop("checked") == true){

	 			$.ajax({url: '/admin/TAD_SYSTEM/Model/Ajax/status_vongquay.php',

	                type: 'POST',

	                dataType: 'text',

	                data: {

	                    id: id,

	                    status: checkbox.prop("checked")

	                }

	            }).done(function(res) {});

            }else if(checkbox.prop("checked") == false){

				$.ajax({url: '/admin/TAD_SYSTEM/Model/Ajax/status_vongquay.php',

	                type: 'POST',

	                dataType: 'text',

	                data: {

	                    id: id,

	                    status: checkbox.prop("checked")

	                }

	            }).done(function(res) {});

            }

}



</script>

    <?php 
        } else { 
            require_once __DIR__."/edit_vq.php";
        }
    ?>
</div>