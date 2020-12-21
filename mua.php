<?php
session_start();
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_SESSION['username']) && isset($_POST['soluong']) && $_POST['soluong'] > 0 && is_numeric($_POST['soluong'])){
	include('config.php');
	$soluong = $_POST['soluong'];
	$loai = $_POST['loai'];
	if($loai == 1){
		$productions = $productions1;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '1'"));
	}else if($loai == 2){
		$productions = $productions2;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '2'"));
    }
    else if($loai == 3){
		$productions = $productions3;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '3'"));
    }
    else if($loai == 4){
		$productions = $productions4;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '4'"));
    }
    else if($loai == 5){
		$productions = $productions5;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '5'"));
    }
    else if($loai == 6){
		$productions = $productions6;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '6'"));
		}
	if($soluong > $tonghotmail){
		exit('<script type="text/javascript">swal("","Hệ thống đã hết","error")');
		}else{
	if($soluong < 0){
		exit('<script type="text/javascript">swal("","No Spam One Mail !! Số Lượng Phải Lớn Hơn 2","error"); setTimeout(function(){ location.href = "/Lich-Su" },1);</script>');
	}
	}
		$username = $_SESSION['username'];
		$vnd = mysqli_fetch_assoc(mysqli_query($ketnoi,"SELECT `VND` FROM `account` WHERE `username` = '".$_SESSION['username']."'"))['VND'];
		$thanhtien = $soluong * $productions;

	if($thanhtien > $vnd){
	    		exit ('<script type="text/javascript">swal("","Bạn Không Đủ Tiền Để Mua Số Lượng Này Vui Lòng Nạp Thêm !!!","error"); setTimeout(function(){ location.href = "/" },1111);</script>');
	}
		$time = time();
	mysqli_query($ketnoi,"UPDATE `account` SET `VND` = `VND` - ".$thanhtien." WHERE `username` = '".$username."'");
		if($loai == 1){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '1' ORDER BY RAND() LIMIT 0, {$soluong}");
		}else if($loai == 2){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '2' ORDER BY RAND() LIMIT 0, {$soluong}");
    	}else if($loai == 3){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '3' ORDER BY RAND() LIMIT 0, {$soluong}");
    	}else if($loai == 4){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '4' ORDER BY RAND() LIMIT 0, {$soluong}");
    	}else if($loai == 5){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '5' ORDER BY RAND() LIMIT 0, {$soluong}");
    	}else if($loai == 6){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '6' ORDER BY RAND() LIMIT 0, {$soluong}");
    	}
    	
		if($get)
		{
			
			$fail = 0;
			while($row = mysqli_fetch_assoc($get))
			{
			$hotmail = $row['hotmail'];
			mysqli_query($ketnoi,"DELETE FROM `hotmail` WHERE `hotmail` ='".$hotmail."'");
		if($hotmail != NULL){
			mysqli_query($ketnoi,"INSERT INTO `hotmail_sell` SET `hotmail` = '".$hotmail."',`time` = '".$time."',`username` = '".$username."'");
		}else{
			$fail = $fail + 1;
		}
			}
				$hoantien  = $productions * $fail;
				mysqli_query($ketnoi,"UPDATE `account` SET `VND` = `VND` + ".$hoantien." WHERE `username` = '".$username."'");

	$success = $soluong - $fail;
		mysqli_query($ketnoi,"INSERT INTO `lich_su_mua` SET `count_mail` = '".$success."',`time` = '".$time."',`username` = '".$username."'");

	$tienmua = $productions * $success;

	
		}
		mysqli_query($ketnoi,"INSERT INTO `hoatdong` SET `note` = 'Tài Khoản <b>".$username."</b> Vừa Mua Thành Công <b>".$success." #1 Trừ ".$tienmua." VNĐ.</b>',`time` = '".date("H:i Y-m-d")."'");
				exit('<script type="text/javascript">swal("","Successfully purchase","success"); setTimeout(function(){ location.href = "/lichsu-2.php?time='.$time.'" },1500);</script>');
}

?>
			 <script type="text/javascript">
       toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}			</script>
