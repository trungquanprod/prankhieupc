<?php
session_start();
require("config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
if(empty($_POST['fullname']) || empty($_POST['facebook'])){
exit();
}
$fullname = addslashes($_POST['fullname']);
$mobile = addslashes($_POST['mobile']);
$facebook = addslashes($_POST['facebook']);
mysqli_query($ketnoi,"UPDATE account SET `fullname` = '".mysqli_real_escape_string($ketnoi,$fullname)."',`mobile` = '".mysqli_real_escape_string($ketnoi,$mobile)."',`facebook` = '".mysqli_real_escape_string($ketnoi,$facebook)."' WHERE `username`='$username'");
mysqli_query($ketnoi,"INSERT INTO `hoatdong` SET `note` = '<b>".$username."</b> vừa cập nhập thông tin tài khoản của mình. Họ Và Tên: <b>$fullname</b>, SĐT: <b>$mobile</b>, Facebook: <b>$facebook</b>',`time` = '".date("H:i Y-m-d")."'");
die('<script type="text/javascript">swal("Thông Báo","Cập Nhập Thông Tin Thành Công","success"); setTimeout(function(){ location.href = "/home.php" },2000);</script>');
}
?>