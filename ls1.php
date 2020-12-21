<?php 
session_start();
include('config.php');
include('head.php');
    ?>
<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$num_rec_per_page=5;
$start_from = ($page-1) * $num_rec_per_page;
$total_records = mysqli_num_rows(mysqli_query($ketnoi, "SELECT * FROM `lich_su_mua` WHERE `username` = '".$_SESSION['username']."'"));
$total_pages = ceil($total_records / $num_rec_per_page);?>
<div class="row">
<div class="col-lg-12">
                               
                                    <div class="card-box">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Liên Hệ Báo Lỗi</a>
                                                <!-- item-->
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">#Lịch Sử Mua</h4>
                        <div class="panel-body">
                      
                            <div id="tableExample3_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-4"><div class="dataTables_length" id="tableExample3_length"></div></div><div class="col-sm-4 text-center"><div class="dt-buttons btn-group"></div></div></div><table id="tableExample3" class="table table-striped table-hover table-responsive-sm dataTable no-footer" role="grid">
                                <thead>
                          <tr>
                            <th>
                              </div>
                            </th>
                            <th>Ngày</th>
                            <th>Tài Khoản</th>
                            <th> Full Name </th>
                            <th> Ip </th>
                            <th></th>
                            <th>Số Lượng Mua</th>
                            <th>Link Tài khoản</th>
                          </tr>
                        </thead>
                        <tbody>
                              <?php
$wos = mysqli_query($ketnoi,"SELECT * FROM `lich_su_mua` WHERE `username` = '".$_SESSION['username']."' order by id desc LIMIT $start_from, $num_rec_per_page ");
if (mysqli_num_rows($wos) == 0):
?>	 
<tr><td colspan="8" class="text-center"><p>Chưa mua tài khoản nào cả </p></td></tr>
<?php else: while ($row = mysqli_fetch_array($wos, MYSQLI_ASSOC)):?>

                          <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><span class="badge badge-info"><?php echo date('d-m-Y',$row['time']); ?></span></td>
                                            <td><span class="badge badge-success"><?php echo $row['username']; ?></span></td>
                                            <td><span class="badge badge-warning"><?php echo $data['fullname']; ?></span></td>
                                            <td><span class="badge badge-danger"><?php echo $data['ip']; ?></span></td>
                                            <td>
                                            <?php if($row['loai'] == 1){?><span class="badge badge-danger"><?php echo $ten1 ?></span>
                                            <?php }else if($row['loai'] == 2){?><span class="badge badge-danger"><?php echo $ten2 ?></span>
                                            <?php }else if($row['loai'] == 3){?><span class="badge badge-danger"><?php echo $ten3 ?></span>
                                            <?php }else if($row['loai'] == 4){?><span class="badge badge-danger"><?php echo $ten4 ?></span>
                                            <?php }else if($row['loai'] == 5){?><span class="badge badge-danger"><?php echo $ten5 ?></span>
                                            <? } ?>
                                            </td>
                                            <td><span class="badge badge-primary"><?php echo $row['count_mail']; ?></span></td>
                                           <td><a class="btn btn-secondary btn-sm" href="/lichsu-2.php?time=<?php echo $row['time']; ?>">Xem</a></td>
                                             
                          </tr>
                                           	<?php $i++; endwhile; endif; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
				 
				
