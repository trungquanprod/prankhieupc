<?php
session_start();
require("config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
if(empty($_POST['username']) || empty($_POST['password'])){
exit();
}
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
if(strlen($password) < 6 || strlen($password) > 32 || strlen($username) < 6 || strlen($username) > 32)
{
	die('<script type="text/javascript">swal("Thông Báo","Bạn Nhập Qúa Ngắn...","warning");</script>');
}
$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `account` WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."'"));
if($dem == 1){
	$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `account` WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."' AND `password` = '".mysqli_real_escape_string($ketnoi,$password)."'"));
	if($dem == 1){
	$_SESSION['username'] = $username;
	mysqli_query($ketnoi,"UPDATE account SET `ip` = '".mysqli_real_escape_string($ketnoi,$ip)."' WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."'");
	mysqli_query($ketnoi,"UPDATE account SET `trangthai` = '1' WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."'");
	die('<script type="text/javascript">swal("Thông Báo","Đăng Nhập Thành Công...","success"); setTimeout(function(){ location.href = "/home.php" },2000);</script>');
	}else{
		die('<script type="text/javascript">swal("Thông Báo Lỗi","Tài Khoản Hoặc Mật Khẩu Của Bạn Chưa Chính Xác","error");</script>');
	}
}
else
{
	$_SESSION['username'] != $username;
die('<script type="text/javascript">swal("Thông Báo Lỗi","Xin Lỗi! Tài Khoản Này Không Tồn Tại","error");</script>');
}
}
?>