<?php
  
   

    $title = "Bảng điều khiển";
    $chart = true; 

    
   
?>

<style>
    .j_text {
        font-size: 25px;
        font-weight: 700;
    }
    .fw-semibold {
        font-weight: 600!important;
    }
    .fs-5 {
        font-size: 1.125rem!important;
    }
    .mb-3 {
        margin-bottom: 1rem!important;
    }
    .fw-bold {
        font-weight: 700!important;
    }
    .fs-2 {
        font-size: calc(1.3125rem + .75vw)!important;
    }
    .highcharts-figure, .highcharts-data-table table {
        min-width: 360px; 
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }
    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }
    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }
    .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
        padding: 0.5em;
    }
    .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }
    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>

<?php 
    // THỐNG KÊ THÔNG TIN

    # TỔNG THÀNH VIÊN
   
    $total_member = $tad->db_num_rows("SELECT * FROM `nguoidung`");
    $tongdonshop = 0;
    $tongdonshopdatao = 0;
    $tongdonshopchuatao = 0;
    $tongdonshopdahuy = 0;
    // $tongdonshop = $tad->db_num_rows("SELECT * FROM `lichsutaoshop`");
    // $tongdonshopdatao = $tad->db_num_rows("SELECT * FROM `lichsutaoshop` WHERE `trangthai` = '1'");
    // $tongdonshopchuatao = $tad->db_num_rows("SELECT * FROM `lichsutaoshop` WHERE `trangthai` = '0'");
    // $tongdonshopdahuy = $tad->db_num_rows("SELECT * FROM `lichsutaoshop` WHERE `trangthai` = '2'");
    $total_cash_member = mysqli_fetch_assoc($tad->db_query("SELECT SUM(`money`) FROM `nguoidung` "))['SUM(`money`)'];
    $total_ex_card = $tad->db_num_rows("SELECT * FROM `napthe` ");
    $total_amount_card = mysqli_fetch_assoc($tad->db_query("SELECT SUM(`menhgia`) FROM `napthe` WHERE `trangthai` = '1' "))['SUM(`menhgia`)'];
    $money_today = mysqli_fetch_assoc($tad->db_query("SELECT SUM(`menhgia`) FROM `napthe` WHERE `day` = '".date('d')."' AND `month` = '".date('m')."' AND `year` = '".date('Y')."' AND `trangthai` = '1' "))['SUM(`menhgia`)'];
    $dangky_today = $tad->db_num_rows("SELECT * FROM `nguoidung` WHERE `day` = '".date('d')."' AND `month` = '".date('m')."' AND `year` = '".date('Y')."'");
      
  
?>

<div class="d-flex justify-content-between align-items-center py-3">
    <h2 class="h3 font-w400 mb-0">Bảng điều khiển</h2>
</div>
<div class="row">
    <div class="col-md-4 d-flex flex-column">
        <div class="block block-rounded">
            <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                <div class="me-3">
                    <p class="fs-3 fw-bold mb-0 j_text">
                        <?= number_format($total_member); ?>
                    </p>
                    <p class="text-muted mb-0">
                        Tổng thành viên
                    </p>
                </div>
                <div class="item rounded-circle bg-body">
                    <i class="fa fa-users fa-lg text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 d-flex flex-column">
        <div class="block block-rounded">
            <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                <div class="me-3">
                    <p class="fs-3 fw-bold mb-0 j_text">
                        <?= number_format($total_cash_member); ?>
                    </p>
                    <p class="text-muted mb-0">
                        Tổng số dư thành viên
                    </p>
                </div>
                <div class="item rounded-circle bg-body">
                    <i class="fa fa-dollar-sign fa-lg text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    

    <div class="col-md-3 d-flex flex-column">
        <div class="block block-rounded">
            <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                <div class="me-3">
                    <p class="fs-3 fw-bold mb-0 j_text">
                        <?= number_format($total_ex_card); ?>
                    </p>
                    <p class="text-muted mb-0">
                        Số thẻ đổi
                    </p>
                </div>
                <div class="item rounded-circle bg-body">
                    <i class="fa fa-asterisk fa-lg text-secondary"></i>
                </div>
            </div>
        </div>
    </div>

  

    <div class="col-6 col-lg-4" style="margin-bottom: 10px;">
        <a class="block block-rounded block-fx-pop h-100 mb-0" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="fs-5 fw-semibold text-muted mb-3">Tổng Tiền Nạp Thành Công</div>
                <div class="fs-2 fw-bold"><?= number_format($total_amount_card); ?></div>
            </div>
        </a>
    </div>
    
     <div class="col-6 col-lg-4" style="margin-bottom: 10px;">
        <a class="block block-rounded block-fx-pop h-100 mb-0" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="fs-5 fw-semibold text-muted mb-3">Doanh Thu Hôm Nay</div>
                <div class="fs-2 fw-bold"><?= number_format($money_today); ?></div>
            </div>
        </a>
    </div>
    <div class="col-6 col-lg-4" style="margin-bottom: 10px;">
        <a class="block block-rounded block-fx-pop h-100 mb-0" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="fs-5 fw-semibold text-muted mb-3">Người Đăng Ký Mới Hôm Nay</div>
                <div class="fs-2 fw-bold"><?= number_format($dangky_today); ?></div>
            </div>
        </a>
    </div>
    

   

   

</div>


