 <?php
 
require('Pusher.php');
$options = array(
    'encrypted' => true
);
$pusher = new Pusher(
        '10d5ea7e7b632db09c72', 'a496a6f084ba9c65fffb', '234217', $options
);



$data['type'] = 'success';
$data['title'] = 'Thành Công!';
$data['message'] = 'Nạp Thẻ Thành Công!';
$pusher->trigger('datlai', 'notice', $data);
?>
 