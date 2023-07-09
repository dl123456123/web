<?php
require_once __DIR__."/../../Database/Class_Controller.php";

$user = $tad->users();

# Đối số status là trạng thái của thẻ sau khi được xử lý. 
# Status == 200 -> thẻ đúng
# Status == 201 -> thẻ sai mệnh giá
# Status == 100 -> thẻ sai
# Quý khách lưu ý dựa vào status để trả lại kết quả cho khách
$status = $_GET['status']; 

# Đối số pricesvalue là mệnh giá thẻ cào lúc quý khách gửi thẻ
$pricesvalue = $_GET['amount'];

# Đối số value_receive là mệnh giá thực của thẻ, quý khách chỉ quan tâm đối số này khi status nhận giá trị 200 hoặc 201
$value_receive = $_GET['amount_real'];

# Đối số card_code là mã thẻ cào quý khách gửi
// $card_code = $_GET['card_code'];

// # Đối số card_seri là serial cào quý khách gửi
// $card_seri = $_GET['card_seri'];

# Đối số value_customer_receive là mệnh giá mà quý khách nhận được sau khi đã trừ chiết khấu, mệnh giá này là mệnh giá được cộng vào tài khoản CARDVIP
$value_customer_receive = $_GET['amount'];

# Đối số requestid là mã đơn thẻ cào mà quý khách đã gửi sang
$requestid = $_GET['request_id'];


# Quý khách check thẻ cào có tồn tại trong hệ thống hoặc thẻ cào đó đã xử lý chưa thông qua các điều kiện như card_code, card_seri, requestid, trạng thái xử lý của thẻ
# Sau đó sẽ check trạng thái của biến $status để cập nhật trạng thái của thẻ theo hướng dẫn trên.
$tad_check = mysqli_fetch_array(mysqli_query($tad->tad_db(), "SELECT * FROM napthe WHERE tranid = '$requestid'  LIMIT 1"));

if($status == 1) {

$username = $user['username'];

    mysqli_query($tad->tad_db(), "UPDATE napthe SET trangthai = '1' WHERE tranid = '$requestid'");
     mysqli_query($tad->tad_db(), "UPDATE nguoidung SET `money` = `money` + '$value_receive' WHERE username = '".$tad_check['nguoinap']."'");
    

} else {
    
    mysqli_query($tad->tad_db(), "UPDATE napthe SET trangthai = '2' WHERE tranid = '$requestid'");
    
}
