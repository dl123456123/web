<?php


$id = $_GET['id'];



 $sql1 = mysqli_query($tad->tad_db(), "SELECT * FROM `nick_random_ff` WHERE `id_random`='".$id."' AND `trangthai`='true' ORDER BY `id` DESC");



 $sql2 = mysqli_query($tad->tad_db(), "SELECT * FROM `nick_random_ff` WHERE `id_random`='".$id."' AND `trangthai`='false' ORDER BY `id` DESC");



?>









<div class="row">





      <div class="col-md-6 col-lg-6 col-xs-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">DANH SÁCH ACC RANDOM FREEFIRE ĐANG BÁN</h4>

                            </div>

                            <div class="table-responsive">

                                <table class="table">

                                    <thead class="thead-light">

                                        <tr>

                                         <th>STT</th>

                                         <th>Username</th>

                                         <th>Password</th>

                                         <th>Thời Gian</th>

                                         <th>Thao Tác</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                          <?php 



                            while ($row = mysqli_fetch_array($sql1)) {

                                ?>

<tr>

   <th scope="row">#<?php echo $row['id'];?></th>

   <td><?php echo $row['taikhoan'];?></td>

   <td><?php echo $row['matkhau'];?></td>

   <td><?php echo $row['time'];?></td>

   <td>

               <button onclick="del(<?php echo $row['id'];?>)" type="button" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-trash"></i></button>

    </td>

</tr> 





                            <?php

                                }

                            ?>







                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>





















      <div class="col-md-6 col-lg-6 col-xs-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">DANH SÁCH ACC RANDOM FREEFIRE ĐÃ BÁN</h4>

                            </div>

                            <div class="table-responsive">

                                <table class="table">

                                    <thead class="thead-light">

                                        <tr>

                                           <th>STT</th>

                                           <th>Username</th>

                                           <th>Password</th>

                                           <th>Thời Gian</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                            <?php 



                            while ($row2 = mysqli_fetch_array($sql2)) {

                                ?>

                                <tr>

                                   <th scope="row">#<?php echo $row2['id'];?></th>

                                   <td><?php echo $row2['taikhoan'];?></td>

                                   <td><?php echo $row2['matkhau'];?></td>

                                   <td><?php echo  $row2['time'];?></td>

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













<script type="text/javascript">

function del(id) {

     if (confirm('Bạn có chắc muốn xóa acc random này?')) {

            location.href = '/admin/TAD_SYSTEM/Model/Ajax/del_accrandom.php?id='+id;

        } else {

            alert('Hãy suy nghĩ kĩ trước khi xóa gì đó nhé!');

        }

}

</script>