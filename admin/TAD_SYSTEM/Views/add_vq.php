<?php 



$getvq = array("Kim Cương", "Quân Huy");







        if(isset($_POST['addwheel'])) {











                $name = $_POST['name'];



                $type = $_POST['type'];



                $giatien = $_POST['giatien'];



                $mota = $_POST['mota'];


                $thumb = $_POST['thumb'];



                $image = $_POST['image'];




                $item = 'text_';



                $kimcuong = 'kimcuong_';



                $tyle = 'tyle_';











                for($i=1;$i<=8;$i++) {



                    $data[] = array(



                        'text' => $_POST[$item.$i],



                        'kimcuong' => $_POST[$kimcuong.$i],



                        'tyle' => $_POST[$tyle.$i]



                    );



                }











                $time = time();



                mysqli_query($tad->tad_db(), "INSERT INTO `vongquay_kimcuong` (`id`, `name`, `type`, `thumb`, `image`,`mota`, `giatien`, `sudung`,`status`, `time`) VALUES (NULL, '".$name."', '".$type."','".$thumb."', '".$image."', '".$mota."', '".$giatien."','0', 'true', '".$time."')");







                $last_id = mysqli_fetch_assoc(mysqli_query($tad->tad_db(), "SELECT * FROM `vongquay_kimcuong` order by `id` desc limit 1"));







                mysqli_query($tad->tad_db(), "INSERT INTO `vongquay_kimcuong_gift` (`id_vongquay`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`) VALUES ('".$last_id['id']."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[0]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[1]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[2]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[3]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[4]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[5]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[6]))."', '".mysqli_real_escape_string($tad->tad_db(), json_encode($data[7]))."')");


                    echo '<div class="alert alert-info bg-info text-white border-0" role="alert">Thêm Vòng Quay <b>"'.$name.'" Thành Công!</b></div><script>location.href="/admin/list/vongquaykimcuong";</script>';


        }



        ?>  

<form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">


<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h3 class="card-title">THÊM VÒNG QUAY</h3>

                                
<div class="row">





                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                                                <label>Tên Vòng Quay</label>

                                                <div class="form-group">

                                                      <input type="text" id="name" name="name" placeholder="Nhập Tên Cho Vòng Quay" class="form-control">

                                                </div>

                                            </div>



                                            



                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                                                <label>Giá tiền mỗi lần quay</label>

                                                <div class="form-group">

                                                      <input type="text" id="giatien" name="giatien" placeholder="Nhập giá mỗi lần quay cho vòng quay" class="form-control">

                                                </div>

                                            </div>






                                            <div class="col-md-4 col-lg-4 col-xs-12">

                                                <label>Chọn Loại</label>

                                                <div class="form-group">

                                                     <select name="type" class="form-control show-tick" tabindex="-98">
                                        
                                        <option value="kc">Kim Cương</option>

                            


                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                                                <label>Ảnh Thumbnail (hiện ở index)</label>

                                                <div class="form-group">

                                                      <input type="thumb" id="thumb" name="name" placeholder="Nhập link ảnh thumbnail" class="form-control">

                                                </div>

                                            </div>



                                            



                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                                                <label>Ảnh Vòng Quay (8 phần quà)</label>

                                                <div class="form-group">

                                                      <input type="text" id="image" name="image" placeholder="Nhập link ảnh vòng quay " class="form-control">

                                                </div>

                                            </div>



                                            



<?php 



$item = 'item_';

for($x=1;$x<=8;$x++) {





 ?>                                            
                                            <div class="col-sm-12 col-md-3 col-lg-3">

                        <div class="card">

                            <div class="card-body">

                                <center><h4 class="card-title">Thông Số Phần Quà <?php echo $x;?></h4></center>

                                <h4 class="card-title">Text hiện khi quay trúng</h4>

                                    <div class="form-group">

                                        <input type="text" id="text_<?php echo $x;?>" name="text_<?php echo $x;?>" class="form-control" placeholder="Text Hiện Khi Quay Trúng">

                                    </div>

                                <h4 class="card-title">Giá Trị(Kim Cương)</h4>

                                    <div class="form-group">

                                        <input type="number" id="kimcuong_<?php echo $x;?>" name="kimcuong_<?php echo $x;?>" min="0" class="form-control" placeholder="Kim Cương Trúng" value="0" required="">

                                    </div>

                                <h4 class="card-title">Tỷ Lệ Trúng(%)</h4>

                                    <div class="form-group">

                                        <input type="number" id="tyle_<?php echo $x;?>" name="tyle_<?php echo $x;?>" min="0" max="100" class="form-control" placeholder="Tỷ Lệ Trúng" value="0" required="">

                                    </div>



                            </div>

                        </div>

                    </div>



 <?php } ?>



                                            



                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                 <label>Mô Tả Cho Vòng Quay</label>

                                                <div class="form-group">

                                                      <textarea class="form-control" rows="6" name="mota" placeholder="Nhập mô tả"></textarea>

                                                </div>

                                            </div>

                <script>

                        CKEDITOR.replace( 'mota' );

                </script>





                            <div class="col-md-12"> 

                                <center><button type="submit" name="addwheel" class="btn btn-info"><i class="fa fa-plus"></i>THÊM VÒNG QUAY</button></center>

                            </div>





</div>





                            </div>

                        </div>

                    </div>

</div>







</form>





                                    
<script type="text/javascript">

    

function validate(){



  valid = true;



     if($("#name").val() == ''){

        valid = false;

        alert('Thiếu Tên!');

     }else if($("#giatien").val() == '') {

        valid = false;

        alert('Thiếu Giá Tiền!');

     }else if ($("#thumb").val() == '') {

        valid = false;

        alert('Thiếu Ảnh Thumbnail!');

     }else if($("#image").val() == '') {

        valid = false;

        alert('Thiếu Ảnh Vòng Quay!');

     }else {

        



         if($("#text_1").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 1!');

         }else if($("#kimcuong_1").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 1!');

         }else if ($("#tyle_1").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 1!');

         }else if($("#text_2").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 2!');

         }else if($("#kimcuong_2").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 2!');

         }else if ($("#tyle_2").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 2!');

         }else if($("#text_3").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 3!');

         }else if($("#kimcuong_3").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 3!');

         }else if ($("#tyle_3").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 3!');

         }else if($("#text_4").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 4!');

         }else if($("#kimcuong_4").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 4');

         }else if ($("#tyle_4").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 4!');

         }else if($("#text_5").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 5!');

         }else if($("#kimcuong_5").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 5!');

         }else if ($("#tyle_5").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 5!');

         }else if($("#text_6").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 6!');

         }else if($("#kimcuong_6").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 6!');

         }else if ($("#tyle_6").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 6!');

         }else if($("#text_7").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 7!');

         }else if($("#kimcuong_7").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 7!');

         }else if ($("#tyle_7").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 7!');

         }else if($("#text_8").val() == ''){

            valid = false;

            alert('Thiếu Text Phần Quà 8!');

         }else if($("#kimcuong_8").val() == '') {

            valid = false;

            alert('Thiếu Giá Trị 8!');

         }else if ($("#tyle_8").val() == '') {

            valid = false;

            alert('Thiếu Tỷ Lệ 8!');

         }else {

             valid = true;

         }







     }



    return valid //true or false

}



</script>