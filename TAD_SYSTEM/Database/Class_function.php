<?php
$root = $_SERVER['DOCUMENT_ROOT'];
class TAD_VN{
    public function so($number){
        $num = $number / 1000;
        return $num.'K';
    }
  public function tad_ham($var){
        $dulieu = trim(addslashes(htmlspecialchars($var)));
        return $dulieu;    
    }
    public function hotline($number){
        $tad_1 = substr($number, 0,-6);
        $tad_2 = substr($number, 4,-3); 
        $tad_3 = substr($number, -3);  
        return $tad_1.'.'.$tad_2.'.'.$tad_3;
    }
    


    public function __construct() {
        $this->tad_db();
        
    }
    public function tad_db() {
        global $config;
    $tad = mysqli_connect(
        'localhost',
        $config['username'],
        $config['pass'],
        $config['database']
    ) or die("Không Có Kết Nối");
    $tad->set_charset("utf8");
    return $tad;
    }
    
    public function db_row($query) {
        $result = mysqli_query($this->tad_db(), $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
    }

    public function db_num_rows($query) {
        $result = mysqli_query($this->tad_db(), $query);
        $num = mysqli_num_rows($result);
        return $num;
    }

    public function db_query($query) {
        $result = mysqli_query($this->tad_db(), $query);
        return $result;
    }
    
    public function users() {
        
        if(empty($_SESSION['user'])){

        }else{
            $account = $_SESSION['user'];
        $result = mysqli_query($this->tad_db(), "SELECT * FROM `nguoidung` WHERE `username`='".$account."'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $row;
        }
    }

    public function user($hoho) {
        $account = $_SESSION['user'];
        if(empty($account)){
            
        }else{
            $result = mysqli_query($this->tad_db(), "SELECT * FROM `nguoidung` WHERE `username`='".$account."'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $row[$hoho];
        }
        
    }

    function get_thumb_freefire($id) {
        $index = glob($_SERVER["DOCUMENT_ROOT"]."/upload/nickff/thumb/".$id.".*");
        $_DOMAIN = "https://".$_SERVER["SERVER_NAME"]."/";
        if ($index) {
            $arr = explode("/", $index[0]);
            $last = array_pop($arr);
            return $_DOMAIN."upload/nickff/thumb/".$last;
        } else {
                return $_DOMAIN."upload/nickff/banner.jpg";
        }
        }

    public function count_acc_ff($type) {

        switch ($type) {
            case 'conlai':
        $result = mysqli_query($this->tad_db(), "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ");
        $row = mysqli_num_rows($result);
                break;

            case 'daban':
        $result = mysqli_query($this->tad_db(), "SELECT * FROM `nickff` WHERE `status`='0'");
        $row = mysqli_num_rows($result);
                break;
        }

        return $row;
  
    }
    
    public function settings($data) {
        
        $result = mysqli_query($this->tad_db(), "SELECT * FROM `settings` WHERE `id`='1'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $row[$data];
    }

    public function setting() {
        
        $result = mysqli_query($this->tad_db(), "SELECT * FROM `settings` WHERE `id`='1'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $row;
    }

    public function maushop($data) {
        
        $result = mysqli_query($this->tad_db(), "SELECT * FROM `maushop` WHERE `status`='1'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $row[$data];
    }


    public function vongquaykimcuong_gift($id, $item, $type=null) {

        $res = mysqli_fetch_assoc(mysqli_query($this->tad_db(), "SELECT * FROM `vongquay_kimcuong_gift` WHERE `id_vongquay`='".$id."'"));
        $prefix = 'item_';
        $json = json_decode($res[$prefix.$item], true);
 
        if ($type == 'text')  {
             return $json['text'];
        }else if ($type == 'kimcuong') {
             return $json['kimcuong'];
        }else if ($type == 'tyle') {
             return $json['tyle'];
        }else {
             return $json;
        }
 
     }

    public function trangthai($tt,$text) {
        if($tt == 0 && $text == 'Đang Tạo Miền'){
            return '<span class="badge badge-info">Đang Tạo Tên Miền</span>';
        }
        
        if($tt == 0 && $text == 'Đang Upload Code'){
            return '<span class="badge badge-info">Đang Upload Code</span>';
        }
        
        if($tt == 0 && $text == 'Đang Tạo Database'){
            return '<span class="badge badge-info">Đang Tạo Database</span>';
        }
        
        if($tt == 0 && $text == 'Đã Xong'){
            return '<span class="badge badge-info">Đang Check Tên Miền</span>';
        }
    
        if($tt == 1){
            return '<span class="badge badge-danger">Tạo Thất Bại</span>';
        }
    
        if($tt == 2){
            return '<span class="badge badge-success">Đang Hoạt Động</span>';
        }
       
    }

    public function trangthaishop($data) {
        if($data == 0){
            echo '<button class="text-light btn btn-danger">Đăng Tắt</button>';
        }else if($data == 1){
            echo '<button class="text-light btn btn-success">Đang Bật</button>';
        }
       
    }

    public function trangthaithe($data) {
        if($data == 0){
            echo '<span class="py-1 px-3 bg-yellow-400 text-white rounded">Chờ Duyệt</span>';
        }else if($data == 1){
            echo '<span class="py-1 px-3 bg-green-600 text-white rounded">Thẻ Đúng</span>';
        }else{
            echo '<span class="py-1 px-3 bg-red-600 text-white rounded">Thẻ Sai</span>';
        }
       
    }

    public function chucvu($data) {
        if($data == 'member'){
            echo 'Thành Viên';
        }else if($data == 'admin'){
            echo 'Quản Trị Viên';
        }else{
            echo 'Hacker Lỏd';
        }
       
    }

    public function send_card($request_id, $telco, $pin, $serial, $amount) {

        $data = array(
       'telco' => $telco,
       'code' => $pin,
       'serial' => $serial,
       'amount' => $amount,
       'request_id' => $request_id,
       'partner_id' => '5898897661',
       'sign' => md5('3aee9a10372d2e8fd2c7d39e5803a7d4' . $pin . $serial),
       'command' => 'charging'
   );
       
   $curl = curl_init();

   curl_setopt_array($curl, [
       CURLOPT_URL => 'https://doithe1s.vn/chargingws/v2?'.http_build_query($data),
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => '',
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 0,
       CURLOPT_FOLLOWLOCATION => true,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => 'GET',
       CURLOPT_HTTPHEADER => [
           'Content-Type: application/json',
       ],
   ]);

   $response = curl_exec($curl);

   curl_close($curl);
   return json_decode($response, true);
   }
    
       
    
}
?>