
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title><?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong['tieude'].''; ?></title>
    <link rel="preconnect" href="//facebook.com/" crossorigin>
    <link rel="dns-prefetch" href="//facebook.com/">
    <link rel="shortcut icon" href="https://sieusub.tk/assets/images/icon.png">
    <meta content="" name="description" />
    <link href="/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
     
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/libs/sweet-alert/sweetalert2.all.js"></script>
</head>

<body>
    <script type="text/javascript">

var _0xfee2=["\x5F\x75\x73\x65\x72\x64\x61\x74\x61","\x70\x61\x67\x65\x5F\x64\x65\x73\x6B\x74\x6F\x70","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x6B\x65\x79\x64\x6F\x77\x6E","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x74\x61\x72\x67\x65\x74","\x73\x74\x72\x69\x6E\x67","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x74\x6F\x4C\x6F\x77\x65\x72\x43\x61\x73\x65","\x65\x76\x65\x6E\x74","\x64\x69\x73\x61\x62\x6C\x65\x5F\x69\x6E\x5F\x69\x6E\x70\x75\x74","\x73\x72\x63\x45\x6C\x65\x6D\x65\x6E\x74","\x6E\x6F\x64\x65\x54\x79\x70\x65","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65","\x49\x4E\x50\x55\x54","\x74\x61\x67\x4E\x61\x6D\x65","\x54\x45\x58\x54\x41\x52\x45\x41","\x6B\x65\x79\x43\x6F\x64\x65","\x77\x68\x69\x63\x68","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x2C","\x2E","\x2B","\x73\x70\x6C\x69\x74","\x7E","\x21","\x40","\x23","\x24","\x25","\x5E","\x26","\x2A","\x28","\x29","\x5F","\x3A","\x22","\x3C","\x3E","\x3F","\x7C","\x63\x74\x72\x6C\x4B\x65\x79","\x73\x68\x69\x66\x74\x4B\x65\x79","\x61\x6C\x74\x4B\x65\x79","\x6D\x65\x74\x61\x4B\x65\x79","\x6C\x65\x6E\x67\x74\x68","\x63\x74\x72\x6C","\x63\x6F\x6E\x74\x72\x6F\x6C","\x73\x68\x69\x66\x74","\x61\x6C\x74","\x6D\x65\x74\x61","\x6B\x65\x79\x63\x6F\x64\x65","\x70\x72\x6F\x70\x61\x67\x61\x74\x65","\x63\x61\x6E\x63\x65\x6C\x42\x75\x62\x62\x6C\x65","\x72\x65\x74\x75\x72\x6E\x56\x61\x6C\x75\x65","\x73\x74\x6F\x70\x50\x72\x6F\x70\x61\x67\x61\x74\x69\x6F\x6E","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x61\x6C\x6C\x5F\x73\x68\x6F\x72\x74\x63\x75\x74\x73","\x74\x79\x70\x65","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x61\x74\x74\x61\x63\x68\x45\x76\x65\x6E\x74","\x6F\x6E","\x63\x61\x6C\x6C\x62\x61\x63\x6B","\x64\x65\x74\x61\x63\x68\x45\x76\x65\x6E\x74","\x72\x65\x6D\x6F\x76\x65\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x43\x74\x72\x6C\x2B\x55","\x41\x6E\x68\x20\x43\x6F\x64\x65\x72","\x46\x61\x6B\x65\x20\x43\xE1\x69\x20\x4C\u1ED3\x6E\x20\x42\xE0\x20\x4D\xE0\x79\x20\x3A\x29\x29","\x65\x72\x72\x6F\x72","\x61\x64\x64","\x46\x31\x32","\x43\x74\x72\x6C\x2B\x53\x68\x69\x66\x74\x2B\x4A","\x59\x61\x6E\x54\x65\x61\x6D"];$(function(){if(window[_0xfee2[0]]&& _userdata[_0xfee2[1]]){window[_0xfee2[2]]= _userdata[_0xfee2[1]]}});shortcut= {all_shortcuts:{},add:function(_0x417dx1,_0x417dx2,_0x417dx3){var _0x417dx4={type:_0xfee2[3],propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(_0x417dx3){for(var _0x417dx5 in _0x417dx4){_0xfee2[4]==  typeof _0x417dx3[_0x417dx5]&& (_0x417dx3[_0x417dx5]= _0x417dx4[_0x417dx5])}}else {_0x417dx3= _0x417dx4};_0x417dx4= _0x417dx3[_0xfee2[5]],_0xfee2[6]==  typeof _0x417dx3[_0xfee2[5]]&& (_0x417dx4= document[_0xfee2[7]](_0x417dx3[_0xfee2[5]])),_0x417dx1= _0x417dx1[_0xfee2[8]](),_0x417dx5= function(_0x417dx4){_0x417dx4= _0x417dx4|| window[_0xfee2[9]];if(_0x417dx3[_0xfee2[10]]){var _0x417dx5;_0x417dx4[_0xfee2[5]]?_0x417dx5= _0x417dx4[_0xfee2[5]]:_0x417dx4[_0xfee2[11]]&& (_0x417dx5=
_0x417dx4[_0xfee2[11]]),3== _0x417dx5[_0xfee2[12]]&& (_0x417dx5= _0x417dx5[_0xfee2[13]]);if(_0xfee2[14]== _0x417dx5[_0xfee2[15]]|| _0xfee2[16]== _0x417dx5[_0xfee2[15]]){return}};_0x417dx4[_0xfee2[17]]?code= _0x417dx4[_0xfee2[17]]:_0x417dx4[_0xfee2[18]]&& (code= _0x417dx4[_0xfee2[18]]),_0x417dx5= String[_0xfee2[19]](code)[_0xfee2[8]](),188== code&& (_0x417dx5= _0xfee2[20]),190== code&& (_0x417dx5= _0xfee2[21]);var _0x417dx6=_0x417dx1[_0xfee2[23]](_0xfee2[22]),_0x417dx7=0,_0x417dx8={"\x60":_0xfee2[24],1:_0xfee2[25],2:_0xfee2[26],3:_0xfee2[27],4:_0xfee2[28],5:_0xfee2[29],6:_0xfee2[30],7:_0xfee2[31],8:_0xfee2[32],9:_0xfee2[33],0:_0xfee2[34],"\x2D":_0xfee2[35],"\x3D":_0xfee2[22],"\x3B":_0xfee2[36],"\x27":_0xfee2[37],"\x2C":_0xfee2[38],"\x2E":_0xfee2[39],"\x2F":_0xfee2[40],"":_0xfee2[41]},_0x417dx9={esc:27,escape:27,tab:9,space:32,"\x72\x65\x74\x75\x72\x6E":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"\x62\x72\x65\x61\x6B":19,insert:45,home:36,"\x64\x65\x6C\x65\x74\x65":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},_0x417dxa=!1,_0x417dxb=!1,_0x417dxc=!1,_0x417dxd=!1,_0x417dxe=!1,_0x417dxf=!1,_0x417dx10=!1,_0x417dx11=!1;_0x417dx4[_0xfee2[42]]&& (_0x417dxd=  !0),_0x417dx4[_0xfee2[43]]&& (_0x417dxb=  !0),_0x417dx4[_0xfee2[44]]&& (_0x417dxf=  !0),_0x417dx4[_0xfee2[45]]&& (_0x417dx11=  !0);for(var _0x417dx12=0;k= _0x417dx6[_0x417dx12],_0x417dx12< _0x417dx6[_0xfee2[46]];_0x417dx12++){_0xfee2[47]== k|| _0xfee2[48]== k?(_0x417dx7++,_0x417dxc=  !0):_0xfee2[49]== k?(_0x417dx7++,_0x417dxa=  !0):_0xfee2[50]== k?(_0x417dx7++,_0x417dxe=  !0):_0xfee2[51]== k?(_0x417dx7++,_0x417dx10=  !0):1< k[_0xfee2[46]]?_0x417dx9[k]== code&& _0x417dx7++:_0x417dx3[_0xfee2[52]]?_0x417dx3[_0xfee2[52]]== code&& _0x417dx7++:_0x417dx5== k?_0x417dx7++:_0x417dx8[_0x417dx5]&& _0x417dx4[_0xfee2[43]]&& (_0x417dx5= _0x417dx8[_0x417dx5],_0x417dx5== k&& _0x417dx7++)};if(_0x417dx7== _0x417dx6[_0xfee2[46]]&& _0x417dxd== _0x417dxc&& _0x417dxb== _0x417dxa&& _0x417dxf== _0x417dxe&& _0x417dx11== _0x417dx10&& (_0x417dx2(_0x417dx4),!_0x417dx3[_0xfee2[53]])){return _0x417dx4[_0xfee2[54]]=  !0,_0x417dx4[_0xfee2[55]]=  !1,_0x417dx4[_0xfee2[56]]&& (_0x417dx4[_0xfee2[56]](),_0x417dx4[_0xfee2[57]]()),!1}},this[_0xfee2[58]][_0x417dx1]= {callback:_0x417dx5,target:_0x417dx4,event:_0x417dx3[_0xfee2[59]]},_0x417dx4[_0xfee2[60]]?_0x417dx4[_0xfee2[60]](_0x417dx3[_0xfee2[59]],_0x417dx5,!1):_0x417dx4[_0xfee2[61]]?_0x417dx4[_0xfee2[61]](_0xfee2[62]+ _0x417dx3[_0xfee2[59]],_0x417dx5):_0x417dx4[_0xfee2[62]+ _0x417dx3[_0xfee2[59]]]= _0x417dx5},remove:function(_0x417dx1){var _0x417dx1=_0x417dx1[_0xfee2[8]](),_0x417dx2=this[_0xfee2[58]][_0x417dx1];delete this[_0xfee2[58]][_0x417dx1];if(_0x417dx2){var
_0x417dx1=_0x417dx2[_0xfee2[9]],_0x417dx3=_0x417dx2[_0xfee2[5]],_0x417dx2=_0x417dx2[_0xfee2[63]];_0x417dx3[_0xfee2[64]]?_0x417dx3[_0xfee2[64]](_0xfee2[62]+ _0x417dx1,_0x417dx2):_0x417dx3[_0xfee2[65]]?_0x417dx3[_0xfee2[65]](_0x417dx1,_0x417dx2,!1):_0x417dx3[_0xfee2[62]+ _0x417dx1]=  !1}}},shortcut[_0xfee2[70]](_0xfee2[66],function(){swal(_0xfee2[67],_0xfee2[68],_0xfee2[69]);return false}),shortcut[_0xfee2[70]](_0xfee2[71],function(){swal(_0xfee2[67],_0xfee2[68],_0xfee2[69]);return false}),shortcut[_0xfee2[70]](_0xfee2[72],function(){swal(_0xfee2[73],_0xfee2[68],_0xfee2[69]);return false})
</script>
    <script>
        ;
        const author = 'hoanghjx',
            base_domain = 'https://viplike14.tk/',
            currency = 'VND',
            swalCancelColor = '#e03838';
        $(function() {
            getPrice()
        });
    </script>
    <header id="topnav">
        <div class="navbar-custom" style="background-color:<?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong['logo'].''; ?>">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="navbar-toggle nav-link">
                            <div class="lines"><span></span><span></span><span></span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="https://graph.fb.me/<?php echo $data['facebook']; ?>/picture?type=large" alt="user-image" class="rounded-circle"><span class="pro-user-name ml-1"><font color="white"><?php echo $data['username']; ?></font> - <font color="white" style="font-weight:bold"> <?php echo $data['VND']; ?> VND</font><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div><a href="thongtin.php" class="dropdown-item notify-item"><i class="fe-user"></i><span>Thông tin</span></a><a href="napthe.php" class="dropdown-item notify-item"><i class="fe-dollar-sign"></i><span>Nạp tiền</span></a>
                            <div class="dropdown-divider"></div><a href="/thoat.php" class="dropdown-item notify-item"><i class="fe-log-out"></i><span>Đăng xuất</span></a>
                        </div>
                    </li>
                </ul>
                <div class="logo-box"><a href="/" class="logo text-center"><span class="logo-lg"><span class="logo-lg-text-light"><img src="/assets/images/icon.png" alt="" height="27"> <?php echo isset($tieudetrang) ? ''.$tieudetrang.'' : ''.$hethong['logosite'].''; ?> </span></span><span class="logo-sm"><img src="/assets/images/icon.png" alt="" height="24"></span></a>
                </div>
            </div>
        </div>
        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <ul class="navigation-menu">
                        <li class="has-submenu"><a href="/"><i class="mdi mdi-home"></i>Trang chủ</a>
                        </li>
                        <li class="has-submenu"><a href="thongtin.php"><i class="mdi mdi-account"></i> Thông tin</a>
                        </li>
                        <li class="has-submenu"><a href="ls1.php"><i class="fa fa-history"></i> Lịch sử <sup><span class="badge badge-success" style="font-size:10px">1</span></sup></a>
                        </li>
                        <li class="has-submenu"><a href="napthe.php"><i class="fa fa-money-bill-alt"></i> Nạp tiền</a>
                        </li>
                        <? if($_SESSION['username'] == 'lequocanhadm13'){?>
                        <li class="has-submenu"><a href="#"><i class="mdi mdi-account-box"></i>Admin Area <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li><a href="/admin/thanhvien.php">Thành viên <sup style="font-size:13px"><label class="badge badge-purple"><?php echo $account ;?></label></sup></a>
                                </li>
                                <li><a href="/admin/chuyentien.php">Chuyển tiền</a>
                                </li>
                                <li><a href="/admin/themmail.php">Thêm Mail</a>
                                </li>
                                <li><a href="/admin/tvnd.php">Trừ Tiền</a>
                                </li>
                                <li><a href="/admin/macdich.php">Cài Đặt Hệ Thống</a>
                                </li>
                                <li><a href="/admin/hoatdong.php">Hoạt Động Thành Viên</a>
                                </li>
                                <li><a href="/admin/api.php">Thiết Lập Api</a>
                                </li>
                                
                          <? } ?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="container-fluid" style="padding-top:15px">
            <style>
                .box-service img {
                    height: 40px
                }
                
                .box-service font.text-service {
                    font-size: 20px
                }
                
                .box-service-panel {
                    border: 2px solid #098dff
                }
                
                .box-service-panel a {
                    color: inherit;
                    font-weight: 500
                }
                
                .box-service-panel:hover {
                    cursor: pointer;
                    box-shadow: 0 0 0 1.5px rgba(11, 142, 255, 1)
                }
                
                .box-service-panel .panel-body a {
                    text-decoration: none;
                    color: inherit
                }
                
                .collapse-text {
                    font-size: 15px;
                    text-transform: uppercase
                }
            </style>