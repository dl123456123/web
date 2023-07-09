<div class="row">
    <?php if(!isset($_GET['edit'])) { ?>
       
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



<th scope="col">Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = $tad->db_query("SELECT * FROM `rutkimcuong` ORDER BY `id` DESC ");
                                while($row = mysqli_fetch_assoc($query)){
                                   if($row['trangthai'] == 0){ }else if( $row['trangthai'] == 1 || $row['trangthai'] == 2 ){
                                    if($row['trangthai'] == 1){
                                        $hihi = '<button class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger" disabled="true"><i class="fa fa-solid fa-xmark"></i></button>';
                                    }else if($row['trangthai'] == 2){
                                        $hihi = '<button class="btn btn-success btn-outline btn-xs m-r-5 tooltip-danger" disabled="true"><i class="fa fa-check"></i></button>';
                                    }
                                    
                                   
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
                                <?=$hihi?>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   

    <?php 
        } else { 
            require_once __DIR__."/edit_vq.php";
        }
    ?>
</div>