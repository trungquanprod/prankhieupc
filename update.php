<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include('config.php');
include('head.php');
date_default_timezone_set("Asia/Ho_Chi_Minh");

?>
<?php if($data['facebook'] != ''){
    exit('<script type="text/javascript">swal("Thông Báo","Bạn Đã Cập Nhật Rồi!!!","error"); setTimeout(function(){ location.href = "/" },2000);</script>');
} ?>
<div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
   
                <div class="block">
                  <div class="title"><strong class="d-block">Cập Nhật Thông Tin</strong><span class="d-block">Vui Lòng Cập Nhật Thông Tin Của Bạn</span></div>
                  <div class="block-body">
                    <form>
                        <div class="form-group">
                        <label class="form-control-label">Họ Và Tên</label>
                        <input id="fullname" type="text"  name="fullname" placeholder="Họ Và Tên" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">ID Facebook</label>
                        <input type="url"  name="facebook" id="facebook" placeholder="ID FACEBOOK" class="form-control">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Phone Number</label>
                        <input type="number"  name="mobile" id="mobile" placeholder="Số Điện Thoại" class="form-control">
                      </div>
                      <div class="form-group">       
                        <button id="submit" onclick="submit()"  class="btn btn-primary">Cập Nhập</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
         $('#submit').click(function(){
            	
            var facebook = $('#facebook').val();
            var mobile = $('#mobile').val();
             var fullname = $('#fullname').val();
		
				if ( facebook == '' || mobile == '' ||fullname == '') {
					swal("Thông Báo","Vui Lòng Điền Thông Tin Yêu Cầu !","warning");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('thongtin1.php', {
				mobile: mobile,
				fullname: fullname,
			
				facebook: facebook,
				
				}, function(data, status) {
					$("#trave").html(data);
					$('#submit').prop('disabled', false);
				});
			});
</script>
<div id="trave" style="display: none;">
	</div>
		<script type="text/javascript">
            function toarst(status, msg, title) {
         Command: toastr[status](msg, title)
            toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
        }
    }
</script>
<div id="trave" style="display: none;">
	</div>
		<script type="text/javascript">
            function toarst(status, msg, title) {
         Command: toastr[status](msg, title)
            toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
        }
    }
</script>