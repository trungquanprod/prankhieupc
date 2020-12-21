
<?php 

session_start();define("DATABASE", "sellfb24_ntmt");define("USERNAME", "sellfb24_ntmt");define("PASSWORD", "sellfb24_ntmt");define("LOCALHOST", "localhost");
$ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);mysqli_query($ketnoi,"set names 'utf8'");  date_default_timezone_set("Asia/Ho_Chi_Minh");$username = $_SESSION['username'];$data = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM `account` WHERE `username`='$username'"));
$day = date('d',time());$month = date('m',time());$year = date('Y',time());



$momo = "0372862149"; 
$tcsr = "Hackerduy"; 
$tsr = "0372862149"; 

$admin="lequocanhadm13";
$account = mysqli_num_rows(mysqli_query($ketnoi,"SELECT id FROM account"));

$loai1 = "Yahoo Cổ Việt Random";
$loai2 = "Yahoo Cổ Via";
$loai3 = "Yahoo Bangladesh";
$loai4 = "Yahoo Bangladesh Via";
$loai5 = "Acc Cổ Việt Random";
$loai6 = "Thử Vận May (Cộng Tiền Tài Khoản)";
$gia1 = 500; 
$gia2 = 1000;
$gia3 = 2500;
$gia4 = 3000;
$gia5 = 10000;
$gia6 = 5000;
$trangthai = mysqli_num_rows(mysqli_query($ketnoi,"SELECT hotline FROM account"));
$tinhtrang = "Bật";
$data2 = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM `hethong_quantri` WHERE `id`='1'"));

$productions1 = 500; 
$productions2 = 1000;
$productions3 = 2500;
$productions4 = 3000;
$productions5 = 10000;
$productions6 = 5000;



$login="Chào Mừng Đến Hệ Thống Bán Mail";
$by="By Nguyễn Phạm Duy";
$signup="Xin Chào! Bạn Vui Lòng Theo Yêu Cầu";
$linkfb="https://www.facebook.com/4";
$zalo="https://zalo.me/0888848704";
$tile="SellFb24h.Tk | SHOP BÁN MAIL CỔ GIÁ RẺ UY TÍN NHẤT VIỆT NAM";

$hethong = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM `hethong_quantri` WHERE `id` = '1'"));
$hethong1= mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM `api` WHERE `id` = '1'"));


$ip = $_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['WWW_HTTP_CLIENT_IP']))
{
    $ip = $SERVER['WWW_HTTP_CLIENT_IP'];
} else if
(!empty($_SERVER['WWW_HTTP_X_FORWARDED_FOR'])){
    $ip =
    $_SERVER['WWW_HTTP_X-FORWARDED_FOR'];
}

?>