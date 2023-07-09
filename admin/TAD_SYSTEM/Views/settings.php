
<style> 
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
<div class="row">
   
    <div class="col-lg-12">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Cài Đặt Website</h3>
            </div>
            <div class="block-content">
            <div class="form-group">
                        <label>Thông báo POPUP</label><br>
                        <textarea rows="10" name="nofication_home" id="nofication_home"><?= $tad->settings('thongbao'); ?></textarea>
                        
                    </div>
                  
                    <div class="form-group">
                        <label>Logo Web</label>
                        <input class="form-control" name="logo" value="<?= $tad->settings('logo'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Banner Shop</label>
                        <input class="form-control" name="banner" value="<?= $tad->settings('banner'); ?>">
                        <img src="<?= $tad->settings('banner'); ?>" class="">
                    </div>
                    <div class="form-group">
                        <label>Image Chơi Ngay</label>
                        <input class="form-control" name="choingay" value="<?= $tad->settings('choingay'); ?>">
                        <img src="<?= $tad->settings('choingay'); ?>" class="">
                    </div>
                    <div class="form-group">
                        <label>Image Mua Ngay </label>
                        <input class="form-control" name="muangay" value="<?= $tad->settings('muangay'); ?>">
                        <img src="<?= $tad->settings('muangay'); ?>" class="">
                    </div>
                    <div class="form-group">
                        <label>Image Quay ( Nút Quay Của Vòng Quay )</label>
                        <input class="form-control" name="quay" value="<?= $tad->settings('quay'); ?>">
                        <img src="<?= $tad->settings('quay'); ?>" class="">
                    </div>
                    <div class="form-group">
                        <label>Kim Cương Nhận Được Khi Đạt Được 100 Năng Lượng</label>
                        <input class="form-control" name="nohu" value="<?= $tad->settings('nohu'); ?>">
                     
                    </div>
                   
                  
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" id="luu">Lưu thay đổi</button>
                    </div>
                
            </div>
        </div>
    </div>
</div>

<div id="result"></div>
<script type="text/javascript">
 
    $(document).ready(function() {
        
    
    $('#luu').click(function() {
        document.getElementById("luu").disabled = true;
        document.getElementById('luu').innerHTML = "Đang xử lý...";
        

    $.ajax({
        type: "POST",
        url: '/admin/TAD_SYSTEM/Model/Ajax/settings.php',
        data: {
           
			thongbao: $('textarea[name=nofication_home]').val(),
            logo: $('input[name=logo]').val(),
            banner: $('input[name=banner]').val(),
            choingay: $('input[name=choingay]').val(),
            muangay: $('input[name=muangay]').val(),
            quay: $('input[name=quay]').val(),
            nohu: $('input[name=nohu]').val()
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

$(document).on('1',function(e) {
    if(e.which == 13) {
        $('#luu').click();
    }
});

</script>
<script>
    $(document).ready(function() {
        $('#nofication_home').summernote();
      
    });
    
</script>
</script>