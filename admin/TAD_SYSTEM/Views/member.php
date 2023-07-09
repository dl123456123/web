<div class="row">
    <?php if(!isset($_GET['detail'])) { ?>
    <div class="col-lg-12">
        <div class="block block-rounded">
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>USER</th>
                                <th>SỐ DƯ</th>
                               
                                <th>Chức Vụ</th>
                                <th>Ngày Tạo</th>
                                
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = $tad->db_query("SELECT * FROM `nguoidung` ORDER BY `id` DESC ");
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td style="font-weight: bold;">
                                    <span class="text-danger"><?= $row['id']; ?></span>
                                </td>
                                <td>
                                   
                                    <span class="text-muted"><?= $row['username']; ?></span>
                                </td>
                                <td>
                                    <?= number_format($row['money']); ?>đ
                                </td>
                               
                             
                                <td>
                                    <?php
                                        if($row['level'] == 'member') {
                                            echo 'Thành viên';
                                        }else{
                                            echo 'Admin';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?= $row['time']; ?>
                                </td>
                               

                                <td>
                                    <a class="btn btn-primary btn-sm" href="?detail=<?= $row['id']; ?>"><i class="fas fa-eye"></i> CHI TIẾT</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php 
        } else { 
            require_once __DIR__."/editmember.php";
        }
    ?>
</div>