<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include('config.php');
include('head.php');
date_default_timezone_set("Asia/Ho_Chi_Minh");
if($data['facebook'] == ''){
    exit('<script type="text/javascript">swal("Thông Báo","Vui Lồng Cập Nhập Thông Tin!!!","warning"); setTimeout(function(){ location.href = "/update.php" },2000);</script>');
}
if($data['ban'] == '1'){
    exit('<script type="text/javascript">swal("Thông Báo","Tài Khoản Của Bạn Đã Bị Khóa!!!","error"); setTimeout(function(){ location.href = "/thoat.php" },1);</script>');
}
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="header-title mt-0"><i class="fa fa-thumbs-up"></i> <?php echo $loai1 ;?></h4>
                        <br>
                        <form action="" id="" data-price="" method="" accept-charset="utf-8">
                            <input type="hidden" name="t" value="vip_like_clone">
                           <div class="form-group">
                                <label>IP Máy: </label>
                               <input type="text" class="form-control" maxlength="25" disabled="sdadasdsa" placeholder="<?php echo $ip ;?>" data-toggle="maxlength">
                            </div>
                           <div class="form-group">
                                <label>Tên Tài Khoàn: </label>
                               <input type="text" class="form-control" maxlength="25" disabled="sdadasdsa" placeholder="<?php echo $data['fullname'] ;?>" data-toggle="maxlength">
                            </div>
                            <div class="form-group">
                                <label>Hiện Còn: </label>
                                <input type="text" class="form-control"  value="<?php $hotmail1 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '1' "));  echo $hotmail1; ?> Mail" >
                            </div>
                           
     <div class="form-group" style="display: none;">
    <label for="user_name" class="col-sm-4 control-label">Loại :</label>
    <div class="col-sm-8">
        <div class="form-group has-error has-feedback">
            <select id="loai" class="form-control">
 <option value="1"> <b><?php echo $loai1; ?> | <?php echo $gia1; ?>  VNĐ|Còn <?php $hotmail1 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '1' "));  echo $hotmail1;?> Cái</option>                                </select>
                            </div>
                            	   
        </div>
    </div>

                            <div class="form-group">
                                <label>Số lượng :</label>
                                 <input onkeyup="tinhtien();"type="number" class="form-control" placeholder="Nhập Số Lượng" min="1" id="soluong">  
                            </div>
                            <div class="box-price">
                                <div class="price-content"><b id="tongthanhtoan" class="price-text"> VND</b>
                                    <br><span class="price-over-text">Giá <?php echo $loai1 ;?> <span class="quantity"></span><span class="type"></span> với giá mỗi <span class="type"></span>cái là <span class="price"></span> <?php echo $productions1 ;?> VND / 1  </span>
                                </div>
                            </div>
                            <center>
                               <button id="mua" onclick="mua();" type="button" class="btn btn-w-md btn-success" style="color:#ffffff;"><b><i class="fa fa-shopping-cart"></i> Thanh Toán</b></button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"> 2020 - &copy; <a href="#" title="">VIPLIKE14.TK</a>
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
    <div class="form-group" id = "mess"></div>

            <script>
$('#mua').click(function(){
				var soluong = $('#soluong').val();
				var loai = $('#loai').val();
				if(soluong < 0){
					swal("Thông Báo","BUG CÁI LỒN MÀ BUG ĐỊT CON MẸ MÀY BIẾN NHÉ OK !!!","Thông Báo");
					return;
				}
					if(soluong <= 0){
				swal("Thông Báo","BUG CÁI LỒN MẸ M OK !!!","error");
				return;
			}
				if (soluong == '') {
					swal("warning","Vui Lòng Nhập Đầy Đủ Thông Tin","warning");
					return false;
				}
				if (soluong == '') {
					swal("Thông Báo","Số Lượng Phải Lớn Hơn 1","error");
					return false;
				}
				$('#submit').prop('disabled', true);
				    $('#mua').addClass('btn btn-info').html('Vui Lòng Đợi ...').attr('disabled','disabled');
				   
				$.post('mua.php', {
					soluong: soluong,
					loai:loai
				}, function(data, status) {
					$("#mess").html(data);
					$('#submit').prop('disabled', false);
					$('#mua').removeClass('btn btn-info').addClass('btn btn-primary').html('Mua Tiếp').removeAttr('disabled');
				});
			});


$('#soluong').keyup(function(){
			var soluong = $('#soluong').val();
			var loai = $('#loai').val();
			if(soluong < 0){
				swal("Thông Báo","BUG CÁI LỒN MẸ M OK !!!","error");
				return;
			}
	
			if(loai == 1 && soluong > 999999){
				swal("Thông Báo","Số Lượng Không Được Lớn Hơn  ở Hệ Thống","error");
				return;
			}
			if(loai == 2 && soluong > 999999){
				swal("Thông Báo","Số Lượng Không Được Lớn Hơn  ở Hệ Thống","error");
				return;
			}
				if(loai == 3 && soluong > 999999){
				swal("Thông Báo","Số Lượng Không Được Lớn Hơn  ở Hệ Thống","error");
				return;
			}
				if(loai == 4 && soluong > 999999){
				swal("Thông Báo","Số Lượng Không Được Lớn Hơn  ở Hệ Thống","error");
				return;
			}
                        if(loai == 1){
			var productions = "<? echo $productions1 ?>";
                        }
                        if(loai == 2){
			var productions = "<? echo $productions2 ?>";
                        }
                        if(loai == 3){
			var productions = "<? echo $productions3 ?>";
                        }
                         if(loai == 4){
			var productions = "<? echo $productions4 ?>";
                        }
                        if(loai == 5){
			var productions = "<? echo $productions5 ?>";
			}
			if(loai == 6){
			var productions = "<? echo $productions6 ?>";
			}
			var tien = productions * soluong;
			var vnd = 0; // số tiền khi tạo tài khoản mới
			if(tien < vnd){
				swal("Thông Báo","Bạn Không Đủ Tiền Để Mua","error");
			}
			$('#tongthanhtoan').html(tien.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
			});
</script>  
</body>

</html>