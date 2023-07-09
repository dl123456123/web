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



<div id="result"></div>
<div class="col-md-6">
    <div class="block block-rounded">
        <div class="block-content">
            <h2 class="content-heading pt-0"><i class="fa fa-fw fa-user-circle text-muted me-1"></i> Thêm Mẫu Shop</h2>
            
                <input type="hidden" value="<?= $info['id']; ?>" name="id" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tên:</label>
                            <input type="text" class="form-control" value="" id="ten" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mô Tả:</label>
                            <input type="text" class="form-control" value="" id="mota" />
                        </div>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="">Giá Tiền:</label>
                    <input type="text" class="form-control" value="" name="giatien" />
                </div>
                <div class="form-group">
                    <label for="">Link Demo:</label>
                    <input type="text" class="form-control" value="" name="linkdemo" />
                </div>
               
                <div class="form-group">
                    <label for=""> Ảnh:</label>
                    <input class="form-control" accept="image/*" id="avt_picture" onchange="fileChange()" type="file">
                    <input type="hidden" name="linkanh" id="tad" value="" >
                    
                </div>
                <div class="row" style="display: none;" id="img_row"></div>
                <img style="width: 50%;"  id="avt" class="img-profile rounded-circle" src="">
                <br>
           
                <div class="form-group">
                    <button type="submit" id="luu" class="btn btn-hero-primary btn-block">Thêm Ngay</button>
                </div>
         
        </div>
    </div>
</div>
<script>
      var avt_url = "";
                    function fileChange(){
                        var file = document.getElementById('avt_picture');
                        var form = new FormData();
                        form.append("image", file.files[0])
                        var settings = {
                            "url": "https://api.imgbb.com/1/upload?key=08b74821394fdd413aedff8ee602e1ff",
                            "type": "POST",
                            "dataType": "JSON",
                            "timeout": 0,
                            "processData": false,
                            "mimeType": "multipart/form-data",
                            "contentType": false,
                            "data": form
                        };
                        
                        $.ajax(settings).done(function (res) {
                            $("#avt").attr("src",res.data.url);
                            $("#tad").attr("value",res.data.url);

                            $("#img_row").show();
                            avt_url = res.data.url;
                        });
                    }
                    function avt_update(){
                        var file = document.getElementById('avt_picture_update');
                        var form = new FormData();
                        form.append("image", file.files[0])
                        var settings = {
                            "url": "https://api.imgbb.com/1/upload?key=08b74821394fdd413aedff8ee602e1ff",
                            "type": "POST",
                            "dataType": "JSON",
                            "timeout": 0,
                            "processData": false,
                            "mimeType": "multipart/form-data",
                            "contentType": false,
                            "data": form
                        };
                        
                        $.ajax(settings).done(function (res) {
                            $("#avt_update").attr("src",res.data.url);
                            $("#avt_update_url").attr("value",res.data.url);
                            avt_update_url = res.data.url;
                        });
                    }
                    function cover_update(){
                        var file = document.getElementById('cover_picture_update');
                        var form = new FormData();
                        form.append("image", file.files[0])
                        var settings = {
                            "url": "https://api.imgbb.com/1/upload?key=08b74821394fdd413aedff8ee602e1ff",
                            "type": "POST",
                            "dataType": "JSON",
                            "timeout": 0,
                            "processData": false,
                            "mimeType": "multipart/form-data",
                            "contentType": false,
                            "data": form
                        };
                        
                        $.ajax(settings).done(function (res) {
                            $("#cover_update").attr("src",res.data.url);
                            $("#cover_update_url").attr("value",res.data.url);
                            cover_update_url = res.data.url;
                        });
                    }
                    </script>

    <script type="text/javascript">
    $(document).ready(function() {
   
    
    $('#luu').click(function() {
        document.getElementById("luu").disabled = true;
        document.getElementById('luu').innerHTML = "Đang xử lý...";
        

    $.ajax({
        type: "POST",
        url: '/admin/TAD_SYSTEM/Model/Ajax/addshop.php',
        data: {
           
			ten: $('input[id=ten]').val(),
            mota: $('input[id=mota]').val(),
            giatien: $('input[name=giatien]').val(),
            linkdemo: $('input[name=linkdemo]').val(),
            linkanh: $('input[name=linkanh]').val()
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


<script>

    $(function(){
        $("#<?= $info['level']; ?>").trigger('click');
       
    })

   

  

</script>
