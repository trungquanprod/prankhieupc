<?php
session_start();
require("config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
if(empty($_POST['username']) || empty($_POST['password'])){
exit();
}
$time = time();
$fullname = addslashes($_POST['fullname']);
$mobile = addslashes($_POST['mobile']);
$facebook = addslashes($_POST['facebook']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$repassword = addslashes($_POST['repassword']);
if(strlen($password) < 6 || strlen($password) > 32 || strlen($username) < 6 || strlen($username) > 32)
{
	die('<script type="text/javascript">swal("Thông Báo","Bạn Nhập Quá Ngắn...","warning");</script>');
}
   if (strcmp($_POST['password'], $_POST['repassword']) != 0) {
   die('<script type="text/javascript">swal("Thông Báo","2 Mật Khẩu Không Trùng Nhau Kìa ?","warning");</script>');
}
$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `account` WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."'"));
if($dem == 1){
	$_SESSION['username'] = $username;
die('<script type="text/javascript">swal("Thông Báo","Tài Khoản Này Đã Có Trong Hệ Thống","error"); setTimeout(function(){ location.href = "/thoat.php" },1);</script>');
}
else
{
$_SESSION['username'] = $username;
mysqli_query($ketnoi,"INSERT INTO account SET `fullname` = '".mysqli_real_escape_string($ketnoi,$fullname)."',`mobile` = '".mysqli_real_escape_string($ketnoi,$mobile)."',`facebook` = '".mysqli_real_escape_string($ketnoi,$facebook)."',`username` = '".mysqli_real_escape_string($ketnoi,$username)."',`password` = '".mysqli_real_escape_string($ketnoi,$password)."',`VND` = '0',`ip` = '$ip',`time` = '".date("H:i Y-m-d")."'");
mysqli_query($ketnoi,"INSERT INTO `hoatdong` SET `note` = '<b> Tài khoản ".$username."</b> vừa gia nhập Hệ Thống thành công.',`time` = '".date("H:i Y-m-d")."'");

die('<script type="text/javascript">swal("Thông Báo","Đăng Ký Thành Công...","success"); setTimeout(function(){ location.href = "/home.php" },1);</script>');
}
}
?>