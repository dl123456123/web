<?php
require_once __DIR__."/../../Database/Class_Controller.php";
$user = $tad->users();
$stt = 0;
$result = mysqli_query($tad->tad_db(), "SELECT * FROM napthe WHERE nguoinap = '".$user['username']."' ORDER BY id DESC   LIMIT 5");
while($row = mysqli_fetch_assoc($result)){
$stt++;
?>
<tr>
<th scope="row" class="text-center"><?php echo $row['id']; ?></th>
<td class="text-center"><?php echo $row['seri']; ?> </td> 
<td class="text-center"><?php echo $row['mathe']; ?> </td> 
<td class="text-center"><?php echo $row['loaithe']; ?> </td>
<td class="text-center"><?php echo $row['menhgia']; ?> </td>
<td class="text-center"><?php echo $row['time']; ?> </td> 
<td class="text-center"> <?php echo $tad->trangthaithe($row['trangthai']); ?> </td>


<tr>
<?php
}
?>