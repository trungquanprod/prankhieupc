
 <?php
 include('config.php');
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$data1 = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM `api` WHERE `id`='1'"));

set_time_limit(0);
$seri = isset($_POST['dSeri']) ? $_POST['dSeri'] : '';
$sopin = isset($_POST['dPin']) ? $_POST['dPin'] : '';
$card_value = isset($_POST['dCount']) ? $_POST['dCount'] : '';
//Loai the cao (VINA, MOBI, VIETEL, VTC, GATE)
$mang = isset($_POST['dCategory']) ? $_POST['dCategory'] : '';
$user = $_SESSION['username'];
if($user){
if($mang==2){
        $ten = "Mobifone";
    }
else if($mang==1){
        $ten = "Vietel";
    }
else $ten ="Vinaphone"; //id = 3 la mang VINA

$merchant_id = $data1['merchat'];
//Api email, email tai khoan dang ky tren napthengay.com
$api_email = $data1['email'];
//mat khau di kem ma website dang kí trên  napthengay.com
$secure_code = $data1['securekey'];
//mã giao dịch
$trans_id = time();  //mã giao dịch do bạn gửi lên, Napthengay.com sẽ trả về 
$api_url = 'http://api.napthengay.com/v2/';


$arrayPost = array(
    'merchant_id'=>intval($merchant_id),
    'api_email'=>trim($api_email),
    'trans_id'=>trim($trans_id),
    'card_id'=>trim($mang),
    'card_value'=> intval($card_value),
    'pin_field'=>trim($sopin),
    'seri_field'=>trim($seri),
    'algo_mode'=>'hmac'
);


$data_sign = hash_hmac('SHA1',implode('',$arrayPost),$secure_code);

$arrayPost['data_sign'] = $data_sign;

$curl = curl_init($api_url);

curl_setopt_array($curl, array(
    CURLOPT_POST=>true,
    CURLOPT_HEADER=>false,
    CURLINFO_HEADER_OUT=>true,
    CURLOPT_TIMEOUT=>120,
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POSTFIELDS=>http_build_query($arrayPost)
));

$data = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

$result = json_decode($data,true);

$time = time();

if($status==200){
    $amount = $result['amount'];
    switch($amount) {
        case 10000: $xu = 10000; break;
        case 20000: $xu = 10000; break;
        case 50000: $xu= 50000; break;
        case 100000: $xu = 100000; break;
        case 200000: $xu = 200000; break;
        case 500000: $xu = 500000; break;
    }
    
    if($result['code'] == 100){
        $dbhost="localhost";
    $dbuser="sellfb24_ntmt";
    $dbpass="sellfb24_ntmt";
    $dbname="sellfb24_ntmt";
    $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "UPDATE account SET VND = `VND` + '$xu' WHERE username='$user'";
    $i = mysqli_query($db, $sql);
    $ii = mysqli_query($db, "INSERT INTO napthe (username, count_card, status_card, pin_card, seri_card, time) VALUES ('$user', '$card_value', '1', '$sopin', '$seri', $time)");
         $success = $result['msg'];
        echo json_encode(array("status" => "success","code"=>$result['code'],"msg"=>"Nạp Thẻ Thành Công Được Cộng $xu"));
    }else{
        $error = $result['msg'];
        if($result['code']=="108"){
            $error = "Nạp Thẻ Thất Bại, Thẻ Sai Hoặc Đã Sử Dụng";
        }
        mysqli_query($ketnoi, "INSERT INTO napthe (username, count_card, status_card, pin_card, seri_card, time) VALUES ('$user', '$card_value', '0', '$sopin', '$seri', $time)");
        echo json_encode(array("status" => "error","code"=>$result['code'],"msg"=>$error));
    }
}
else{ 
    echo json_encode(array("status" => "waring","code"=>$status,"msg"=>"Máy Chủ Gặp Sự Cố"));
}
}else{ echo json_encode(array("status" => "waring","code"=>null,"msg"=>"Vui Lòng Đăng Nhập Lại")); }

?>
