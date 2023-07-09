<?php


if(isset($_POST['submit'])) {

    if($_POST['goi']) {



        if($_POST['listacc']) {



            $exp = explode("\n", $_POST['listacc']);



            $i = 1;

            foreach ($exp as $key) {

                $data = explode("|", $key);



                if(!$data[0]) {

                    echo '<div class="alert alert-danger alert-highlighted" role="alert">Lỗi! Acc '.$i.' thiếu Tên Nick</div>';   

                }else if(!$data[1]) {

                    echo '<div class="alert alert-danger alert-highlighted" role="alert">Lỗi! Acc '.$i.' thiếu Mật Khẩu Nick</div>';   

                }else {







        mysqli_query($tad->tad_db(), "INSERT INTO `nick_random_ff` (`id`, `id_random`, `taikhoan`, `matkhau`, `2fa`, `trangthai`, `nguoimua`, `time`) VALUES (NULL, '".$_POST['goi']."', '".$data[0]."', '".$data[1]."', '".$data[2]."', 'true', 'NULL', '$thoigian')");





        echo '<div class="alert alert-success alert-highlighted" role="alert">Đăng Bán Nick <b>"'.$i.'"</b> Thành Công!</div>';

                }



                $i++;

            }





        }else {

            echo '<div class="alert alert-danger alert-highlighted" role="alert">Vui lòng nhập vào list account!</div>';

        }





    }else {

        echo '<div class="alert alert-danger alert-highlighted" role="alert">Vui lòng chọn một gói random!</div>';

    }

}

?>



                            <form action="" method="post">

<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h3 class="card-title">THÊM NICK FREEFIRE RANDOM</h3>



<div class="row">



                                            <div class="col-md-4 col-lg-4 col-xs-12">

                                                <label>Chọn Gói RANDOM</label>

                                                <div class="form-group">

                                                     <select name="goi" class="form-control show-tick" tabindex="-98">

                                        <option value="">-- Vui Lòng Lựa Chọn Gói Random  --</option>

    <?php

        $sql = mysqli_query($tad->tad_db(), "SELECT * FROM `random_ff` ORDER BY `id` DESC");

        while ($row = mysqli_fetch_array($sql)) { ?> 

                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?> (<?php echo number_format($row['giatien']);?>đ/nick)</option>

                            <?php } ?>



                                    </select>

                                                </div>

                                            </div>





                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                <label>Nhập List Account</label>

                                                <div class="form-group">

                                                      <textarea name="listacc" rows="8" class="form-control no-resize" placeholder="Tài Khoản|Mật Khẩu|2FA"></textarea>

                                                </div>

                                            </div>







                            <div class="col-md-12"> 

                                <center><button type="submit" name="submit" class="btn btn-info">ĐĂNG RANDOM</button></center>

                            </div>





</div>





                            </div>

                        </div>

                    </div>

</div>







</form>

