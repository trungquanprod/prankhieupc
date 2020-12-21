<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include('config.php');
include('head.php');
?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0"><i class="mdi mdi-account"></i> Info</h4>
                        <br>
                        <form action="" id="" method="" accept-charset="utf-8">
                            <input type="hidden" name="t" value="info">
                            <div class="form-group">
                        <label>Họ Và Tên</label>
                        <input id="fullname" type="text"  name="fullname" value="<?php echo $data["fullname"]; ?>" class="form-control">
                      </div>
                           <div class="form-group">
                        <label>ID Facebook</label>
                        <input type="url"  name="facebook" id="facebook" value="<?php echo $data["facebook"]; ?>" class="form-control">
                      </div>
                            <div class="form-group">       
                        <label>Phone Number</label>
                        <input type="number"  name="mobile" id="mobile" value="<?php echo $data["mobile"]; ?>" class="form-control">
                      </div>
                            <button id="submit" onclick="submit()" class="btn btn-info btn-rounded btn-block"><i class="fa fa-info"></i> Lưu thông tin</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0"><i class="mdi mdi-lock"></i> Password</h4>
                        <br>
                        <form action="" id="info" method="" accept-charset="utf-8">
                            <input type="hidden" name="t" value="">
                            <div class="form-group">
                                <label>Mật khẩu hiện tại :</label>
                                <input type="password" class="form-control" id="passold" placeholder="Nhập mật khẩu cũ" value="" required="">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu mới :</label>
                                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu mới" value="" required="">
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu mới :</label> 
                                <input type="password" class="form-control" id="repassword" placeholder="Nhập lại mật khẩu mới" value="" required="">
                            </div>
                            <button id="submitone" type="submitone" name="submitone" class="btn btn-danger btn-rounded btn-block"><i class="fa fa-lock"></i> Đổi mật khẩu</button>
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
				$.post('xuly_thongtin.php', {
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
 <script type="text/javascript">

            $('#submitone').click(function(){
            	var password = $('#password').val();	
            		var passold = $('#passold').val();
			var repassword = $('#repassword').val();
				if (password == '' || repassword == '' || passold == '') {
					swal("Thông Báo","Vui Lòng Nhập Đầy Đủ Thông Tin","warning");
					return false;
				}
				$('#submitone').prop('disabled', true)
				$.post('xuli_pass.php', {
					password: password,
					passold: passold,
					repassword: repassword
				}, function(data, status) {
					$("#trave").html(data);
					$('#submitone').prop('disabled', false);
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
      
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"> 2020 - &copy; <a href="#" title="">Lê Quốc Anh</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </footer>
    <div class="rightbar-overlay"></div>
    <script src="/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/base.js"></script>
    <script>
        ;
        $(document).ready(function() {
            $('[name="like_type"], [name="sub_type"], [name="share_type"], [name="cmt_type"], [name="like_page_type"]').prop('selectedIndex', 1).change().keyup()
        });
    </script>
</body>

</html>