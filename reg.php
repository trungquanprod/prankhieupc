<?php
session_start();
if(isset($_SESSION['username'])){
  header('location: /home.php');
  die();
}
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hệ Thống Dịch Vụ VIP Facebook</title>
    <link rel="preconnect" href="//facebook.com/" crossorigin>
    <link rel="dns-prefetch" href="//facebook.com/">
    <link rel="shortcut icon" href="https://viplike14.tk/assets/images/icon.png">
    <meta content="" name="description" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/libs/sweet-alert/sweetalert2.all.js"></script>
    <script src="assets/js/base.js"></script>
</head>

<body class="authentication-bg">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mb-4"><img src="https://image.flaticon.com/icons/png/512/145/145867.png" height="70" alt="" style="border:1px solid gray;border-radius:80px;margin:5px">
                                <h4 class="text-uppercase mt-0">REGISTER ACCOUNT</h4>
                            </div>
                            <form action="" method="POST" accept-charset="utf-8">
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Tài khoản :</label>
                                    <input class="form-control" type="text" type="username"  name="username" id="user" required="" placeholder="Nhập tài khoản" autofocus="">
                                </div>
                               
                                <div class="form-group mb-3">
                                    <label for="password">Mật khẩu :</label>
                                    <input class="form-control" type="password" name="password"  id="pass" placeholder="Nhập mật khẩu" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Nhập lại mật khẩu :</label>
                                    <input class="form-control"type="password" name="repassword" type="password"  id="repassword" placeholder="Nhập lại mật khẩu" required="">
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button id="submit" onclick="submit();" type="submit" class="btn btn-purple btn-block"><i class="mdi mdi-login"></i> ĐĂNG KÝ </button>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p><a href="pages-recoverpw.html" class="text-muted ml-1"><i class="fa fa-lock mr-1"></i>Forgot your password?</a>
                                    </p>
                                    <p class="text-muted">Bạn đã tài khoản? <a href="index.php" class="text-dark ml-1"><b>Đăng nhập ngay!</b></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
         $('#submit').click(function(){
            	var fullname = $('#fullname').val();
			var username = $('#user').val();
			var password = $('#pass').val();
			var repassword = $('#repassword').val();
				if ( username == '' || password == '' || repassword == '') {
					swal("Thông Báo","Vui Lòng Điền Thông Tin Yêu Cầu !","warning");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('w_dangky.php', {
			
				repassword: repassword,
				fullname: fullname,
			
					username: username,
					password: password
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
</body>

</html>
