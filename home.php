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
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="header-title m-t-0 m-b-30"><i class="mdi mdi-view-dashboard"></i> Dashboard</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <center><img src="https://graph.fb.me/<?php echo $data['facebook']; ?>/picture?type=large" alt="" style="border-radius:100px;height:70px">
                                        </center>
                                    </div>
                                    <div class="list-group-item">
                                        <p class="list-group-item-text"> Tài khoản : <span class="btn btn-danger btn-rounded btn-sm float-right"><i class="mdi mdi-account-edit"></i> <?php echo $data['username']; ?>  </span>
                                        </p>
                                    </div>
                                    <div class="list-group-item">
                                        <p class="list-group-item-text"> Số dư : <span class="btn btn-success btn-rounded btn-sm float-right"><i class="fa fa-dollar-sign"></i> <?php echo $data['VND']; ?> VND </span>
                                        </p>
                                    </div>
                                    <div class="list-group-item">
                                        <p class="list-group-item-text"> Loại tài khoản : <span class="btn btn-primary btn-rounded btn-sm float-right"><i class="mdi mdi-account"></i><?php 
		
                 if($data['admin'] == '1'){
                    echo '<b style="color:";>Adminstrator</b>';
                 }else if($data['admin'] == ''){
                  echo '<b style="color:#";>Member !</b>';	}
				
                 ?> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="collapse" data-target="#vip_like_clone">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/vip_like.png" height="50" alt=""><font class="text-service"> <?php echo $loai1; ?><span class="badge badge-pill badge-primary"><?php $hotmail1 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '1' "));  echo $hotmail1; ?></span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="vip_like_clone" class="collapse">
                                    <hr><a href="mail.php" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ls1.php" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="collapse" data-target="#buff_like">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/like.png" height="50" alt=""><font class="text-service"> <?php echo $loai2; ?> <span class="badge badge-pill badge-primary"><?php $hotmail2 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '2' "));  echo $hotmail2; ?></span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_like" class="collapse">
                                    <hr><a href="mail1.php" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ls1.php" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="collapse" data-target="#buff_cmt">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/cmt.png" height="50" alt=""><font class="text-service"> <?php echo $loai3; ?> <span class="badge badge-pill badge-primary"><?php $hotmail3 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '3' "));  echo $hotmail3; ?></span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_cmt" class="collapse">
                                    <hr><a href="mail2.php" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ls1.php" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="collapse" data-target="#buff_share">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/share.png" height="50" alt=""><font class="text-service"> <?php echo $loai4; ?><span class="badge badge-pill badge-primary"><?php $hotmail4 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '4' "));  echo $hotmail4; ?></span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_share" class="collapse">
                                    <hr><a href="mail3.php" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ls1.php" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="collapse" data-target="#buff_sub">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/sub.png" height="50" alt=""><font class="text-service"> <?php echo $loai5; ?> <span class="badge badge-pill badge-primary"><?php $hotmail5 = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '5' "));  echo $hotmail5; ?></span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_sub" class="collapse">
                                    <hr><a href="mail4.php" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ls1.php" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="tooltip" title="Sắp ra mắt">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/like_page.png" height="50" alt=""><font class="text-service"> Tăng Like Fanpage <span class="badge badge-pill badge-primary">0</span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_like_page" class="collapse">
                                    <hr><a href="fb/buff_like_page" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="fb/manage_buff_like_page" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" data-toggle="tooltip" title="Sắp ra mắt">
                            <div class="card-box box-service-panel" data-toggle="collapse" data-target="#vip_eye_live_stream">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/vip_eye.png" height="50" alt=""><font class="text-service"> VIP Mắt Live Stream <span class="badge badge-pill badge-primary">0</span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="vip_eye_live_streamx" class="collapse">
                                    <hr><a href="fb/vip_eye_live_stream" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="fb/manage_vip_eye_live_stream" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="tooltip" title="Sắp ra mắt">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/eye.png" height="50" alt=""><font class="text-service"> Tăng Mắt Live Stream <span class="badge badge-pill badge-primary">0</span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_live_stream" data-toggle="tooltip" title="Sắp ra mắt" class="collapse">
                                    <hr><a href="fb/buff_live_stream" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="fb/manage_buff_live_stream" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="tooltip" title="Sắp ra mắt">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/ig_like.png" height="50" alt=""><font class="text-service"> Tăng Like Instagram <span class="badge badge-pill badge-primary">0</span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_like_instagram" class="collapse">
                                    <hr><a href="ig/buff_like" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ig/manage_buff_like" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box box-service-panel" data-toggle="tooltip" title="Sắp ra mắt">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="box-service"><img src="/assets/images/icon-service/ig_follow.png" height="50" alt=""><font class="text-service"> Tăng Follow Instagram <span class="badge badge-pill badge-primary">0</span></font>
                                        </div>
                                    </div>
                                </div>
                                <div id="buff_follow_instagram" class="collapse">
                                    <hr><a href="ig/buff_follow" class="collapse-text" title=""> Mua dịch vụ <i class="fa fa-chevron-right"></i></a>
                                    <hr><a href="ig/manage_buff_follow" class="collapse-text" title=""> Quản lý dịch vụ <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php  if($data2['hotline'] == '1'){
?>
            <div id="modalNotify" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel"><i class="fa fa-bell"></i> Thông báo</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div><div class="modal-body"><p style="white-space:pre-wrap;word-wrap:break-word"><?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong['anhmota'].''; ?></p></div><div class="modal-footer"><button data-dismiss="modal" class="btn btn-danger" onclick="dismiss_notification();"><i class="fa fa-times"></i> Đóng</button></div></div>
                </div>
                </div>
                ?>
<?php
}
?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
            <script>
                ;
                $(function() {
                    if ($.cookie('diss_notification') != 0) {
                        $('#modalNotify').modal('show')
                    }
                });

                function dismiss_notification() {
                    $.cookie('diss_notification', 0, {
                        expires: 5 / 1440
                    })
                };
            </script>
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
    <script>
        ;
        $(document).ready(function() {
            $('[name="like_type"], [name="sub_type"], [name="share_type"], [name="cmt_type"], [name="like_page_type"]').prop('selectedIndex', 1).change().keyup()
        });
    </script>