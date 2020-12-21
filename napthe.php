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
$data1 = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM `api` WHERE `id`='1'"));
if($data1['facebook_chushop'] == '1'){
?>
<script>
  function submit() {
    if (!$('#dCategory')['val']()) {
        swal('', 'B\u1EA1n Ch\u01B0a Ch\u1ECDn Lo\u1EA1i Th\u1EBB', 'error')
    } else {
        if (!$('#dCount')['val']()) {
            swal('', 'B\u1EA1n Ch\u01B0a Nh\u1EADp M\u1EC7nh Gi\xE1', 'error')
        } else {
            if (!$('#dSeri')['val']()) {
                swal('', 'B\u1EA1n Ch\u01B0a Nh\u1EADp Seri', 'error')
            } else {
                if (!$('#dPin')['val']()) {
                    swal('', 'B\u1EA1n Ch\u01B0a Nh\u1EADp M\xE3 Th\u1EBB', 'error')
                } else {
                    mua()
                }
            }
        }
    }
}

function mua() {
    $('#submit')['html']('<i class="fa fa-spinner fa-spin"></i> Đang Xử Lý Không F5');
    $['post']('the.php', {
        dCategory: $('#dCategory')['val'](),
        dCount: $('#dCount')['val'](),
        dSeri: $('#dSeri')['val'](),
        dPin: $('#dPin')['val']()
    }, function(_0xb982x3) {
        swal('', _0xb982x3['msg'], _0xb982x3['status']);
        $('#submit')['html']('Nạp Tiền')
    }, 'json')
}

</script>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0"><i class="fa fa-dollar-sign"></i> Nạp thẻ cào</h4>
                        <br>
                       
                          
                            <div class="form-group">
 <label>Loại thẻ :</label>
                  <select id="dCategory" name="dCategory" class="form-control">
 <option value="">Chọn loại thẻ</option>
                        <option value="1">Viettel</option>
                        <option value="2">Mobifone</option>
                        <option value="3">Vinaphone</option>
</select>
                </div>
                <div class="form-group">
                    <label>Mệnh giá :</label>
                    <select id="dCount" name="dCount" class="form-control">
<option value="">Chọn Mệnh Giá</option>
<option value="10000">10.000</option>
<option value="20000">20.000</option>
<option value="50000">50.000</option>
<option value="100000">100.000</option>
<option value="200000">200.000</option>
<option value="500000">500.000</option>
</select>
                </div>
                <div class="form-group">
                    <label>Nhập Serial :</label>
                      <input type="text" placeholder="Nhập Mã Seri"  id="dSeri" name="dSeri" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nhập PinCode :</label>
                    <input type="text" placeholder="Nhập Mã Thẻ" id="dPin" name="dPin" class="form-control">
                </div>
                <center>
                   <button onclick="submit();" id="submit" type="submit" class="btn btn-success ">Nạp Thẻ</button>
                            </center>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0"><i class="fa fa-dollar-sign"></i> Thông tin chuyển khoản</h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Ngân hàng & Ví điện tử</th>
                                        <th>Thông tin chuyển khoản</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="https://thesieure.com/storage/userfiles/images/logo_thesieurecom.png" height="60" alt="">
                                        </td>
                                        <td style="white-space:pre-wrap">Tài Khoản : <?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong1['tukhoa'].''; ?>
                                            <br/>Nội dung : Nạp tiền vào tài khoản <a href="#"><?php echo $data['username']; ?></a> trên tanglike.ga</td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://thecaosieure.com/images/logo.png" height="60" alt="">
                                        </td>
                                        <td style="white-space:pre-wrap">Tài Khoản : <?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong1['chushop'].''; ?>
                                            <br/>Nội dung : Nạp tiền vào tài khoản <a href="#"><?php echo $data['username']; ?></a> trên tanglike.ga
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://tailieudoc.vn/uploads/2652745704/image/logomobile.png" height="60" alt="">
                                        </td>
                                        <td style="white-space:pre-wrap">Tài Khoản :<?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong1['tenmien'].''; ?>
                                            <br/>Nội dung : Nạp tiền vào tài khoản <a href="#"><?php echo $data['username']; ?></a> trên tanglike.ga</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
     <div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mt-0"><i class="fa fa-list"></i> Lịch sử nạp thẻ</h4>
            <br>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                <label>Hiển thị
                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="500">500</option>
                                        <option value="1000">1,000</option>
                                        <option value="-1">Tất cả</option>
                                    </select> kết quả</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label>Tìm kiếm :
                                    <input type="search" class="form-control form-control-sm" placeholder="Từ khóa..." aria-controls="DataTables_Table_0">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="dataTables table table-bordered table-hover text-center dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>UID</th>
       	<th>Mệnh giá</th>
       	<th>Số seri</th>	
       	<th>Mã thẻ</th>	
       	<th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td valign="top" colspan="7" class="dataTables_empty"><?php
				$result = mysqli_query($ketnoi,"SELECT * FROM `napthe` WHERE `username` = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 0,5 ");
				if($result)
				{
				while($row = mysqli_fetch_assoc($result))
				{
				?>
               <tr>
                <td><?php echo $row['id']; ?></td>
                 <td><?php echo $row['count_card']; ?></td>
                 <td><?php echo $row['seri_card']; ?></td>
                 <td><?php echo $row['pin_card']; ?></td>
                 <td><?php 
                 if($row['status_card'] == '1'){
                    echo '<p style="color:#00ff00";><b>Thành Công</b></p>';
                 }elseif($row['status_card'] == '0')
                  echo '<p style="color:#FF0000";><b>Thất Bại</b></p>';
                 ?></td>
                 <?php
				}
				}
				?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Không tìm thấy kết quả...</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"> 2020 - &copy; <a href="#" title="">Lê Quốc Anh</a>
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
</body>
<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$vnd = $_POST['vnd'];
mysqli_query($ketnoi, "UPDATE `account` SET `VND`=`VND`+'$vnd' WHERE `username`='$username'");
echo '<script type="text/javascript">swal("Thành Công","Đã Thêm '.$vnd.' VNĐ Cho '.$username.'","success");setTimeout(function(){ location.href = "/" },1000);</script>'; 
}
}
else{?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mt-0"><i class="fa fa-dollar-sign"></i> Thông tin chuyển khoản</h4>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Ngân hàng &amp; Ví điện tử</th>
                            <th>Thông tin chuyển khoản</th>
                        </tr>
                    </thead>
                    <tbody>
                                    <tr>
                                        <td><img src="https://thesieure.com/storage/userfiles/images/logo_thesieurecom.png" height="60" alt="">
                                        </td>
                                        <td style="white-space:pre-wrap">Tài Khoản : <?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong1['tukhoa'].''; ?>
                                            <br/>Nội dung : Nạp tiền vào tài khoản <a href="#"><?php echo $data['username']; ?></a> trên tanglike.ga</td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://thecaosieure.com/images/logo.png" height="60" alt="">
                                        </td>
                                        <td style="white-space:pre-wrap">Tài Khoản : <?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong1['chushop'].''; ?>
                                            <br/>Nội dung : Nạp tiền vào tài khoản <a href="#"><?php echo $data['username']; ?></a> trên tanglike.ga
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://tailieudoc.vn/uploads/2652745704/image/logomobile.png" height="60" alt="">
                                        </td>
                                        <td style="white-space:pre-wrap">Tài Khoản :<?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong1['tenmien'].''; ?>
                                            <br/>Nội dung : Nạp tiền vào tài khoản <a href="#"><?php echo $data['username']; ?></a> trên tanglike.ga</td>
                                    </tr>
                                   
                                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
?>
<?php
}
?>
</div>
</div>