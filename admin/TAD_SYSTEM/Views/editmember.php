<style>
    .text-end{
        text-align: right!important;
    }
    .fw-medium {
        font-weight: 500!important;
    }
    .fs-3 {
        font-size: calc(1.275rem + .3vw)!important;
    }
</style>

<?php
    $id = intval($_GET['detail']);
    $info = mysqli_fetch_assoc($tad->db_query("SELECT * FROM `nguoidung` WHERE `id` = '$id' "));
    if(!$info) {
        echo '<h1 style="margin: 0 auto;" class="text-danger">Không tìm thấy thành viên</h1>';
    }else{
       
        # TỔNG THỰC NHẬN THÀNH CÔNG HOẶC SAI MỆNH GIÁ
        $total_recieve_success = mysqli_fetch_assoc($tad->db_query("SELECT SUM(`menhgia`) FROM `napthe` WHERE `nguoinap` = '".$info['username']."' AND `trangthai` = '1' "))['SUM(`menhgia`)'];

        # TỔNG THẺ ĐÚNG
        $total_success_card = $tad->db_num_rows("SELECT * FROM `napthe` WHERE `trangthai` = '1' AND `nguoinap` = '".$info['username']."' ");
        # TỔNG THẺ SAI
        $total_fail_card = $tad->db_num_rows("SELECT * FROM `napthe` WHERE `trangthai` = '2' AND `nguoinap` = '".$info['username']."' ");
        
      

?>
<div class="col-md-3">
    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
                <i class="fas fa-2x fa-money-bill text-success"></i>
            </div>
            <div class="ms-3 text-end">
                <p class="fs-3 fw-medium mb-0">
                    <?= number_format($info['money']); ?>đ
                </p>
                <p class="text-muted mb-0">
                    Số dư hiện tại
                </p>
            </div>
        </div>
    </a>
</div>
<div class="col-md-3">
    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
                <i class="fas fa-2x fa-code-branch text-info"></i>
            </div>
            <div class="ms-3 text-end">
                <p class="fs-3 fw-medium mb-0">
                    <?php
                        if($info['level'] == 'member') {
                            echo 'Thành viên';
                        }else{
                            echo 'Admin';
                        }
                    ?>
                </p>
                <p class="text-muted mb-0">
                    Cấp bậc
                </p>
            </div>
        </div>
    </a>
</div>



<div class="col-md-3">
    <a class="block block-rounded block-link-shadow bg-secondary" href="javascript:void(0)">
        <div class="block-content block-content-full align-items-center">
            <div class="ms-3 text-center">
                <p class="text-white fs-3 fw-medium mb-0">
                    <?= number_format($total_recieve_success); ?>đ
                </p>
                <p class="text-white-75 mb-0">
                    Tổng tiền nạp thành công
                </p>
            </div>
        </div>
    </a>
</div>
<div class="col-md-3">
    <a class="block block-rounded block-link-shadow bg-success" href="javascript:void(0)">
        <div class="block-content block-content-full align-items-center">
            <div class="ms-3 text-center">
                <p class="text-white fs-3 fw-medium mb-0">
                    <?= number_format($total_success_card); ?>
                </p>
                <p class="text-white-75 mb-0">
                    Số thẻ thành công
                </p>
            </div>
        </div>
    </a>
</div>


<div id="result"></div>
<div class="col-md-6">
    <div class="block block-rounded">
        <div class="block-content">
            <h2 class="content-heading pt-0"><i class="fa fa-fw fa-user-circle text-muted me-1"></i> Thông tin tài khoản</h2>
            
                <input type="hidden" value="<?= $info['id']; ?>" name="id" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tên đăng nhập:</label>
                            <input type="text" class="form-control" value="<?= $info['username']; ?>" id="username" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mật Khẩu:</label>
                            <input type="text" class="form-control" value="<?= $info['password']; ?>" id="password" />
                        </div>
                    </div>
                </div>
              
                
                <div class="form-group">
                    <label for="">Số dư:</label>
                    <input type="text" class="form-control" value="<?= $info['money']; ?>" name="cash" />
                </div>
                <div class="form-group">
                    <label for="">Số Kim Cương:</label>
                    <input type="text" class="form-control" value="<?= $info['kimcuong']; ?>" name="kimcuong" />
                </div>
               
                <div class="form-group">
                <label for="">Cấp Bậc:</label>
                    <select class="form-control" name="level">
                    <?php
                    if($info['level'] == 'admin'){
                ?>
                        <option value="admin">Admin</option>
                        <option value="member">Thành Viên</option>
                        <?php }else{ ?>
                            <option value="member">Thành Viên</option>
                        <option value="admin">Admin</option>
                        <?php } ?>
                    </select>
                </div>
              
           
                <div class="form-group">
                    <button type="submit" id="luu" class="btn btn-hero-primary btn-block">LƯU THAY ĐỔI</button>
                </div>
         
        </div>
    </div>
</div>

    <script type="text/javascript">
    $(document).ready(function() {
    var username = $('input[id=username]').val();
    var password = $('input[id=password]').val();
    
    var cash = $('input[name=cash]').val();
    var level = $('select[name=level]').val();
    var id = $('input[name=id]').val();
    
    $('#luu').click(function() {
        document.getElementById("luu").disabled = true;
        document.getElementById('luu').innerHTML = "Đang xử lý...";
        

    $.ajax({
        type: "POST",
        url: '/admin/TAD_SYSTEM/Model/Ajax/member.php',
        data: {
            id : $('input[name=id]').val(),
			username: $('input[id=username]').val(),
            password: $('input[id=password]').val(),
      
            cash: $('input[name=cash]').val(),
            kimcuong: $('input[name=kimcuong]').val(),
            level: $('select[name=level]').val()
        },
		
        success: function(result)
        {
                    document.getElementById("luu").disabled = false;
            document.getElementById('luu').innerHTML = "LƯU THAY ĐỔI";

           $("#result").html(result);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#luu').click();
    }
});

</script>
<div class="col-md-12">
    <div class="block block-rounded">
        <div class="block-content">
            <h2 class="content-heading pt-0"><i class="fa fa-fw fa-history text-muted me-1"></i> Lịch sử đổi thẻ</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>TRẠNG THÁI</th>
                            <th>NHÀ MẠNG</th>
                            <th>MÃ THẺ</th>
                            <th>SERIAL</th>
                            <th>MỆNH GIÁ</th>
                          
                            <th>THỜI GIAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            $card_query = $tad->db_query("SELECT * FROM `napthe` WHERE `nguoinap` = '".$info['username']."' ORDER BY `id` DESC ");
                            while($card = mysqli_fetch_assoc($card_query)) {
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td>
                                <?= $tad->trangthaithe($card['trangthai']); ?>
                            </td>
                            <td>
                                <?= $card['loaithe']; ?>
                            </td>
                            <td>
                                <?= $card['mathe']; ?>
                            </td>
                            <td>
                                <?= $card['seri']; ?>
                            </td>
                            <td>
                                <?= number_format($card['menhgia']); ?>đ
                            </td>
                           
                            <td>
                                <?= $card['time']; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    $(function(){
        $("#<?= $info['level']; ?>").trigger('click');
       
    })

   

  

</script>
<?php } ?>