<?php
session_start();
require("config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
if(empty($_POST['password']) || empty($_POST['repassword'])){
exit();
}
$password = addslashes($_POST['password']);
$repassword = addslashes($_POST['repassword']);
$passold = addslashes($_POST['passold']);

if(strlen($password) < 6 || strlen($password) > 32)
    {
	die(' <script type="text/javascript">swal("Thông Báo","Bạn Nhập Qúa Ngắn...","warning");</script>');
}
   if (strcmp($_POST['password'], $_POST['repassword']) != 0) {
   die('<script type="text/javascript">swal("Thông Báo","2 Mật Khẩu Không Trùng Nhau Kìa ?","warning");</script>');
}
  if (strcmp($_POST['password'], $_POST['passold']) != 0) {
mysqli_query($ketnoi,"UPDATE account SET `password` = '".mysqli_real_escape_string($ketnoi,$password)."' WHERE `username`='$username'");
mysqli_query($ketnoi,"INSERT INTO `hoatdong` SET `note` = '<b>".$username."</b> vừa thay đổi mật khẩu của mình thành <b>$password</b>',`time` = '".date("H:i Y-m-d")."'");
die('<script type="text/javascript">swal("Thông Báo","Thay Đổi Mật Khẩu Thành Công","success"); setTimeout(function(){ location.href = "/thoat.php" },10);</script>');
	}else{
	    
die('<script type="text/javascript">swal("Thông Báo","Mật Khẩu Mới Và Mật Khẩu Cũ Không Được Trùng Nhau","warning");</script>');
  }	
}
?>