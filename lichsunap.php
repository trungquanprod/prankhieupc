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
                                     kết quả</label>
                                     </select>
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
        <?php
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
				?>
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