<?php 
session_start();
include('config.php');
include('head.php');
    ?>
     <div class="col-md-12">
          <div class="card-box">
                <div class="block">
                  <div class="title"><strong class="d-block">Lịch Sử Mua</strong><span class="d-block">Bấm Copy Để Copy :v</span></div>
			<div class="panel-body">
	<div class="form-group">
					<textarea rows="20" cols="200" type="text"  id="mail" class="form-control"  v><?php
session_start();
if (isset($_SESSION['username']) && isset($_GET['time'])){
	$time = $_GET['time'];
	$username = $_SESSION['username'];
	if($time == 'all'){
	$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `hotmail` FROM `hotmail_sell` WHERE `username` = '".$username."'"));
		if($dem > 0){
	$get = mysqli_query($ketnoi,"SELECT `hotmail` FROM `hotmail_sell` WHERE `username` = '".$username."' ");
		if($get)
		{
			while($row = mysqli_fetch_assoc($get))
			{
			$hotmail = $row['hotmail'];
			echo $hotmail."\n";
			}
		}
		exit();
		}
	}else{
	$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `time` FROM `hotmail_sell` WHERE `time` = '".$time."' AND `username` = '".$username."'"));
	if($dem > 0){
	$get = mysqli_query($ketnoi,"SELECT `hotmail` FROM `hotmail_sell` WHERE `time` = '".$time."' AND `username` = '".$username."' ");
		if($get)
		{
			while($row = mysqli_fetch_assoc($get))
			{
			$hotmail = $row['hotmail'];
			echo $hotmail."\n";
			}
		}
	}else{
		header('location: /');
	}
}
}else{
	header('location: /');
}
?></textarea>
					</div>
<br>
<center><button class="btn btn-success" onclick="coppy()">COPPY ALL</button></center>
<script>
var _0xe91f=["\x6D\x61\x69\x6C","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x73\x65\x6C\x65\x63\x74","\x73\x65\x74\x53\x65\x6C\x65\x63\x74\x69\x6F\x6E\x52\x61\x6E\x67\x65","\x63\x6F\x70\x79","\x65\x78\x65\x63\x43\x6F\x6D\x6D\x61\x6E\x64","\x54\x68\xF4\x6E\x67\x20\x42\xE1\x6F","\u0110\xE3\x20\x43\x6F\x70\x70\x79\x20\x54\x68\xE0\x6E\x68\x20\x43\xF4\x6E\x67","\x73\x75\x63\x63\x65\x73\x73"];var _0x5e6d=[_0xe91f[0],_0xe91f[1],_0xe91f[2],_0xe91f[3],_0xe91f[4],_0xe91f[5],_0xe91f[6],_0xe91f[7],_0xe91f[8]];function coppy(){var _0xc706x3=document[_0x5e6d[1]](_0x5e6d[0]);_0xc706x3[_0x5e6d[2]]();_0xc706x3[_0x5e6d[3]](0,99999);document[_0x5e6d[5]](_0x5e6d[4]);swal(_0x5e6d[6],_0x5e6d[7],_0x5e6d[8])}
</script>

</div>
	  