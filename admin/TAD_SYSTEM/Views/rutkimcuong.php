<div class="row">
    <?php if(!isset($_GET['edit'])) { ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="col-lg-12">
        
        <div class="block block-rounded">
            
            <div class="block-content">
                
                <div class="table-responsive">
              
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                            <th scope="col">ID #</th>

<th scope="col">Người Rút </th>

<th scope="col">ID GAME</th>

<th scope="col">Gói Rút</th>



<th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = $tad->db_query("SELECT * FROM `rutkimcuong` WHERE trangthai = '0' ORDER BY `id` DESC ");
                                while($row = mysqli_fetch_assoc($query)){
                                   
                            ?>
                            <tr>
                                <td style="font-weight: bold;">
                                    <span class="text-danger"><?= $row['id']; ?></span>
                                </td>
                                <td>
                                   
                                    <span class="text-muted"><?= $row['nguoirut']; ?></span>
                                </td>
                                <td>
                                   
                                   <span class="text-muted"><?= $row['idgame']; ?></span>
                               </td>
                              
                                <td>
                                    <?= number_format($row['goirut']); ?> Kim Cương
                                </td>
                               
                              
                              
                               
                               

                                <td>
                                <button onclick="duyet(<?php echo $row['id'];?>)" type="button" class="btn btn-success btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-check"></i></button>
                                    <button onclick="huy(<?php echo $row['id'];?>)" type="button" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-solid fa-xmark"></i></button>
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

function huy(id) {



	 		location.href = '/admin/TAD_SYSTEM/Model/Ajax/duyetkimcuong.php?huy='+id;

		

}


function duyet(id) {



        location.href = '/admin/TAD_SYSTEM/Model/Ajax/duyetkimcuong.php?duyet='+id;

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