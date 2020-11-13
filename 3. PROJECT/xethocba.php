<?php
include('includes/config.php');
error_reporting(0);
$message = "";
if (isset($_POST['btn-submit'])) {
    $hoten = $_POST['HoTen'];
    $gioitinh = $_POST['GioiTinh'];
    $ngaysinh = $_POST['NgaySinh'];
    $dantoc = $_POST['DanToc'];
    $tongiao = $_POST['TonGiao'];
    $noisinh = $_POST['NoiSinh'];
    $namtotnghiep = $_POST['NamTotNghiep'];
    $hocluc = $_POST['HocLuc'];
    $hanhkiem = $_POST['HanhKIem'];
    $cmnd = $_POST['CMND'];
    $ngaycap = $_POST['NgayCap'];
    $noicap = $_POST['NoiCap'];
    $hokhau = $_POST['HoKhau'];
    $matinh10 = $_POST['MaTinh10'];
    $tentinh10 = $_POST['TenTinh10'];
    $matruong10 = $_POST['MaTruong10'];
    $tentruong10 = $_POST['TenTruong10'];
    $matinh11 = $_POST['MaTinh11'];
    $tentinh11 = $_POST['TenTinh11'];
    $matruong11 = $_POST['MaTruong11'];
    $tentruong11 = $_POST['TenTruong11'];
    $matinh12 = $_POST['MaTinh12'];
    $tentinh12 = $_POST['TenTinh12'];
    $matruong12 = $_POST['MaTruong12'];
    $tentruong12 = $_POST['TenTruong12'];
    $dtut = $_POST['DTUT'];
    $kvut = $_POST['KVUT'];
    $diachi = $_POST['DiaChi'];
    $dtts = $_POST['DTTS'];
    $dtph = $_POST['DTPH'];
    $optradio = $_POST['optradio'];
    $sql = "INSERT INTO hocba (HoTen, GioiTinh, NgaySinh, DanToc, TonGiao, NoiSinh, NamTotNghiep, HocLuc, HanhKiem, CMND, NgayCap, NoiCap, HoKhau, MaTinh10, TenTinh10, MaTruong10, TenTruong10, MaTinh11, TenTinh11, MaTruong11, TenTruong11, MaTinh12, TenTinh12, MaTruong12, TenTruong12, DTUT, KVUT, DiaChi, DTTS, DTPH, optradio) VALUES ('$hoten', '$gioitinh', '$ngaysinh', '$dantoc', '$tongiao', '$noisinh', '$namtotnghiep', '$hocluc', '$hanhkiem', '$cmnd', '$ngaycap', '$noicap', '$hokhau', '$matinh10', '$tentinh10', '$matruong10', '$tentruong10', '$matinh11', '$tentinh11', '$matruong11', '$tentruong11', '$matinh12', '$tentinh12', '$matruong12', '$tentruong12', '$dtut', '$kvut', '$dtts', '$dtph', '$optradio' )";
  
    $query = $dbh->prepare($sql);
    $query->bindParam(':HoTen', $hoten, PDO::PARAM_STR);
    $query->bindParam(':GioiTinh', $gioitinh, PDO::PARAM_STR);
    $query->bindParam(':NgaySinh', $ngaysinh, PDO::PARAM_STR);
    $query->bindParam(':DanToc', $dantoc, PDO::PARAM_STR);
    $query->bindParam(':TonGiao', $tongiao, PDO::PARAM_STR);
    $query->bindParam(':NoiSinh', $noisinh, PDO::PARAM_STR);
    $query->bindParam(':NamTotNghiep', $namtotnghiep, PDO::PARAM_STR);
    $query->bindParam(':HocLuc', $hocluc, PDO::PARAM_STR);
    $query->bindParam(':HanhKiem', $hanhkiem, PDO::PARAM_STR);
    $query->bindParam(':CMND', $cmnd, PDO::PARAM_STR);
    $query->bindParam(':NgayCap', $ngaycap, PDO::PARAM_STR);
    $query->bindParam(':NoiCap', $noicap, PDO::PARAM_STR);
    $query->bindParam(':HoKhau', $hokhau, PDO::PARAM_STR);
    $query->bindParam(':MaTinh10', $matinh10, PDO::PARAM_STR);
    $query->bindParam(':TenTinh10', $tentinh10, PDO::PARAM_STR);
    $query->bindParam(':MaTruong10', $matruong10, PDO::PARAM_STR);
    $query->bindParam(':TenTruong10', $tentruong10, PDO::PARAM_STR);
    $query->bindParam(':MaTinh11', $matinh11, PDO::PARAM_STR);
    $query->bindParam(':TenTinh11', $tentinh11, PDO::PARAM_STR);
    $query->bindParam(':MaTruong11', $matruong11, PDO::PARAM_STR);
    $query->bindParam(':TenTruong11', $tentruong11, PDO::PARAM_STR);
    $query->bindParam(':MaTinh12', $matinh12, PDO::PARAM_STR);
    $query->bindParam(':TenTinh12', $tentinh12, PDO::PARAM_STR);
    $query->bindParam(':MaTruong12', $matruong12, PDO::PARAM_STR);
    $query->bindParam(':TenTruong12', $tentruong12, PDO::PARAM_STR);
    $query->bindParam(':DTUT', $dtut, PDO::PARAM_STR);
    $query->bindParam(':KVUT', $kvut, PDO::PARAM_STR);
    $query->bindParam(':DiaChi', $diachi, PDO::PARAM_STR);
    $query->bindParam(':DTTS', $dtts, PDO::PARAM_STR);
    $query->bindParam(':DTPH', $dtph, PDO::PARAM_STR);
    $query->bindParam(':optradio', $optradio, PDO::PARAM_STR);
    $query->execute();
    
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $message = "<font color=\"blue\">Nộp hồ sơ thành công!</font>";
    } else {
        $error = "<font color=\"red\">Có lỗi xảy ra, vui lòng thử lại!</font>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Đăng ký xét tuyển theo học bạ</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
</head>
<body>
    <!-- Header của trang -->
    <?php include('includes/header.php'); ?>

    <!-- Body của trang -->
    <div class="content-wrapper">
        <div>
            <form action="" method="post">
                <div class="container">
                    <div class="mb-24">
                        <!-- Tiêu đề -->
                        <div class="card p-10">
                            <div class="header-center">
                                <span>
                                    <h2 class="header-title">Đăng ký xét tuyển theo học bạ</h2>
                                </span>
                            </div>
                        </div>
                        <?php if ($error) { ?><div class="errorWrap"><strong>LỖI</strong>: <?php echo ($error); ?>
                        </div><?php } else if ($message) { ?><div class="succWrap">
                            <strong>THÀNH CÔNG</strong>: <?php echo ($message); ?>
                        </div><?php } ?>
                        <!-- Thân phần 1-->
                        <div class="card p-20 pb-0">
                            <!-- Tiêu đề con phần 1 -->
                            <div class="header-child style-1">
                                <div class="number">
                                    <span>1</span>
                                </div>
                                <div class="content-header">
                                    <h2 class="header-title-child">Thông tin hồ sơ</h2>
                                </div>
                            </div>

                            <!-- Nội dung form -->
                            <div class="form-field">
                                <!-- Hàng 1 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-4">
                                                <label for="HoTen">Họ và tên:</label>
                                                <input class="form-control" type="text" name="HoTen" id="HoTen" placeholder="Nhập tên" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="GioiTinh">Giới tính:</label>
                                                <select class="form-control" name="GioiTinh" id="GioiTinh">
                                                    <option value="0">- Chọn giới tính</option>
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nu">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 2 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-4">
                                                <label for="NgaySinh">Ngày sinh:</label>
                                                <input class="form-control" type="date" name="NgaySinh" id="NgaySinh" placeholder="Nhập ngày sinh" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="DanToc">Dân tộc:</label>
                                                <input class="form-control" type="text" name="DanToc" id="DanToc" placeholder="Nhập tên" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="TonGiao">Tôn giáo:</label>
                                                <input class="form-control" type="text" name="TonGiao" id="TonGiao" placeholder="Nhập tên" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 3 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-4">
                                                <label for="NoiSinh">Nơi sinh:</label>
                                                <select class="form-control" name="NoiSinh" id="NoiSinh">
                                                    <option value="0">Tỉnh/TP</option>
                                                    <option value="51">An Giang</option>
                                                    <option value="52">Bà Rịa - Vũng Tàu</option>
                                                    <option value="18">Bắc Giang</option>
                                                    <option value="11">Bắc Kạn</option>
                                                    <option value="60">Bạc Liêu</option>
                                                    <option value="19">Bắc Ninh</option>
                                                    <option value="56">Bến Tre</option>
                                                    <option value="37">Bình Định</option>
                                                    <option value="44">Bình Dương</option>
                                                    <option value="43">Bình Phước</option>
                                                    <option value="47">Bình Thuận</option>
                                                    <option value="61">Cà Mau</option>
                                                    <option value="55">Cần Thơ</option>
                                                    <option value="06">Cao Bằng</option>
                                                    <option value="04">Đà Nẵng</option>
                                                    <option value="40">Đắk Lắk</option>
                                                    <option value="63">Đăk Nông</option>
                                                    <option value="62">Điện Biên</option>
                                                    <option value="48">Đồng Nai</option>
                                                    <option value="50">Đồng Tháp</option>
                                                    <option value="38">Gia Lai</option>
                                                    <option value="05">Hà Giang</option>
                                                    <option value="24">Hà Nam</option>
                                                    <option value="01">Hà Nội</option>
                                                    <option value="30">Hà Tĩnh</option>
                                                    <option value="21">Hải Dương</option>
                                                    <option value="03">Hải Phòng</option>
                                                    <option value="64">Hậu Giang</option>
                                                    <option value="23">Hoà Bình</option>
                                                    <option value="22">Hưng Yên</option>
                                                    <option value="41">Khánh Hoà</option>
                                                    <option value="54">Kiên Giang</option>
                                                    <option value="36">Kon Tum</option>
                                                    <option value="07">Lai Châu</option>
                                                    <option value="42">Lâm Đồng</option>
                                                    <option value="10">Lạng Sơn</option>
                                                    <option value="08">Lào Cai</option>
                                                    <option value="49">Long An</option>
                                                    <option value="25">Nam Định</option>
                                                    <option value="29">Nghệ An</option>
                                                    <option value="27">Ninh Bình</option>
                                                    <option value="45">Ninh Thuận</option>
                                                    <option value="15">Phú Thọ</option>
                                                    <option value="39">Phú Yên</option>
                                                    <option value="31">Quảng Bình</option>
                                                    <option value="34">Quảng Nam</option>
                                                    <option value="35">Quảng Ngãi</option>
                                                    <option value="17">Quảng Ninh</option>
                                                    <option value="32">Quảng Trị</option>
                                                    <option value="59">Sóc Trăng</option>
                                                    <option value="14">Sơn La</option>
                                                    <option value="46">Tây Ninh</option>
                                                    <option value="26">Thái Bình</option>
                                                    <option value="12">Thái Nguyên</option>
                                                    <option value="28">Thanh Hoá</option>
                                                    <option value="33">Thừa Thiên Huế</option>
                                                    <option value="53">Tiền Giang</option>
                                                    <option value="02">Tp. Hồ Chí Minh</option>
                                                    <option value="58">Trà Vinh</option>
                                                    <option value="09">Tuyên Quang</option>
                                                    <option value="57">Vĩnh Long</option>
                                                    <option value="16">Vĩnh Phúc</option>
                                                    <option value="13">Yên Bái</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-5">
                                                <label for="NamTotNghiep">Năm tốt nghiệp:</label>
                                                <select class="form-control" name="NamTotNghiep" id="NamTotNghiep">
                                                    <option value="0">- Chọn năm tốt nghiệp</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 4 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-4">
                                                <label for="HocLuc">Học lực lớp 12:</label>
                                                <select class="form-control" name="HocLuc" id="HocLuc">
                                                    <option value="0">- Chọn học lực</option>
                                                    <option value="XuatSac">Xuất sắc</option>
                                                    <option value="Gioi">Giỏi</option>
                                                    <option value="Kha">Khá</option>
                                                    <option value="TrungBinh">Trung bình</option>
                                                    <option value="Yeu">Yếu</option>
                                                </select>                                            
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="HanhKiem">Hạnh kiểm lớp 12:</label>
                                                <select class="form-control" name="HanhKiem" id="HanhKiem">
                                                    <option value="chon">- Chọn</option>
                                                    <option value="Tot">Tốt</option>
                                                    <option value="Kha">Khá</option>
                                                    <option value="TrungBinh">Trung bình</option>
                                                    <option value="Yeu">Yếu</option>
                                                </select>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 5 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-4">
                                                <label for="CMND">Số CMND:</label>
                                                <input class="form-control" type="text" name="CMND" id="CMND" placeholder="Nhập số CMND" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="NgayCap">Ngày cấp:</label>
                                                <input class="form-control" type="date" name="NgayCap" id="NgayCap" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="NoiCap">Nơi cấp:</label>
                                                <select class="form-control" name="NoiCap" id="NoiCap">
                                                    <option value="0">Tỉnh/TP</option>
                                                    <option value="51">An Giang</option>
                                                    <option value="52">Bà Rịa - Vũng Tàu</option>
                                                    <option value="18">Bắc Giang</option>
                                                    <option value="11">Bắc Kạn</option>
                                                    <option value="60">Bạc Liêu</option>
                                                    <option value="19">Bắc Ninh</option>
                                                    <option value="56">Bến Tre</option>
                                                    <option value="37">Bình Định</option>
                                                    <option value="44">Bình Dương</option>
                                                    <option value="43">Bình Phước</option>
                                                    <option value="47">Bình Thuận</option>
                                                    <option value="61">Cà Mau</option>
                                                    <option value="55">Cần Thơ</option>
                                                    <option value="06">Cao Bằng</option>
                                                    <option value="04">Đà Nẵng</option>
                                                    <option value="40">Đắk Lắk</option>
                                                    <option value="63">Đăk Nông</option>
                                                    <option value="62">Điện Biên</option>
                                                    <option value="48">Đồng Nai</option>
                                                    <option value="50">Đồng Tháp</option>
                                                    <option value="38">Gia Lai</option>
                                                    <option value="05">Hà Giang</option>
                                                    <option value="24">Hà Nam</option>
                                                    <option value="01">Hà Nội</option>
                                                    <option value="30">Hà Tĩnh</option>
                                                    <option value="21">Hải Dương</option>
                                                    <option value="03">Hải Phòng</option>
                                                    <option value="64">Hậu Giang</option>
                                                    <option value="23">Hoà Bình</option>
                                                    <option value="22">Hưng Yên</option>
                                                    <option value="41">Khánh Hoà</option>
                                                    <option value="54">Kiên Giang</option>
                                                    <option value="36">Kon Tum</option>
                                                    <option value="07">Lai Châu</option>
                                                    <option value="42">Lâm Đồng</option>
                                                    <option value="10">Lạng Sơn</option>
                                                    <option value="08">Lào Cai</option>
                                                    <option value="49">Long An</option>
                                                    <option value="25">Nam Định</option>
                                                    <option value="29">Nghệ An</option>
                                                    <option value="27">Ninh Bình</option>
                                                    <option value="45">Ninh Thuận</option>
                                                    <option value="15">Phú Thọ</option>
                                                    <option value="39">Phú Yên</option>
                                                    <option value="31">Quảng Bình</option>
                                                    <option value="34">Quảng Nam</option>
                                                    <option value="35">Quảng Ngãi</option>
                                                    <option value="17">Quảng Ninh</option>
                                                    <option value="32">Quảng Trị</option>
                                                    <option value="59">Sóc Trăng</option>
                                                    <option value="14">Sơn La</option>
                                                    <option value="46">Tây Ninh</option>
                                                    <option value="26">Thái Bình</option>
                                                    <option value="12">Thái Nguyên</option>
                                                    <option value="28">Thanh Hoá</option>
                                                    <option value="33">Thừa Thiên Huế</option>
                                                    <option value="53">Tiền Giang</option>
                                                    <option value="02">Tp. Hồ Chí Minh</option>
                                                    <option value="58">Trà Vinh</option>
                                                    <option value="09">Tuyên Quang</option>
                                                    <option value="57">Vĩnh Long</option>
                                                    <option value="16">Vĩnh Phúc</option>
                                                    <option value="13">Yên Bái</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 6 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                        <div class="col-sm-12">
                                                <label for="HoKhau">Hộ khẩu thường trú:</label>
                                                <input class="form-control" type="text" name="HoKhau" id="HoKhau" placeholder="Nhập hộ khẩu thường trú" size="104" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <i class="note1">Ghi rõ tên tỉnh (thành phố), huyện (quận), xã (phường) vào ô Hộ khẩu thường trú</i><br><br>
                                <i class="note2">Nơi học THPT hoặc tương đương (ghi tên trường và nơi trường đóng: huyện(quận), tỉnh(thành phố)):</i>

                                <!-- Hàng 7 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-6">
                                                    <label for="">Năm lớp 10:</label>
                                                    <input type="text" name="" id="" placeholder="Mã tỉnh" required>
                                                    <select name="" id="">
                                                        <option value="">- Chọn tỉnh/thành phố</option>
                                                        <option value="51">An Giang</option>
                                                        <option value="52">Bà Rịa - Vũng Tàu</option>
                                                        <option value="18">Bắc Giang</option>
                                                        <option value="11">Bắc Kạn</option>
                                                        <option value="60">Bạc Liêu</option>
                                                        <option value="19">Bắc Ninh</option>
                                                        <option value="56">Bến Tre</option>
                                                        <option value="37">Bình Định</option>
                                                        <option value="44">Bình Dương</option>
                                                        <option value="43">Bình Phước</option>
                                                        <option value="47">Bình Thuận</option>
                                                        <option value="61">Cà Mau</option>
                                                        <option value="55">Cần Thơ</option>
                                                        <option value="06">Cao Bằng</option>
                                                        <option value="04">Đà Nẵng</option>
                                                        <option value="40">Đắk Lắk</option>
                                                        <option value="63">Đăk Nông</option>
                                                        <option value="62">Điện Biên</option>
                                                        <option value="48">Đồng Nai</option>
                                                        <option value="50">Đồng Tháp</option>
                                                        <option value="38">Gia Lai</option>
                                                        <option value="05">Hà Giang</option>
                                                        <option value="24">Hà Nam</option>
                                                        <option value="01">Hà Nội</option>
                                                        <option value="30">Hà Tĩnh</option>
                                                        <option value="21">Hải Dương</option>
                                                        <option value="03">Hải Phòng</option>
                                                        <option value="64">Hậu Giang</option>
                                                        <option value="23">Hoà Bình</option>
                                                        <option value="22">Hưng Yên</option>
                                                        <option value="41">Khánh Hoà</option>
                                                        <option value="54">Kiên Giang</option>
                                                        <option value="36">Kon Tum</option>
                                                        <option value="07">Lai Châu</option>
                                                        <option value="42">Lâm Đồng</option>
                                                        <option value="10">Lạng Sơn</option>
                                                        <option value="08">Lào Cai</option>
                                                        <option value="49">Long An</option>
                                                        <option value="25">Nam Định</option>
                                                        <option value="29">Nghệ An</option>
                                                        <option value="27">Ninh Bình</option>
                                                        <option value="45">Ninh Thuận</option>
                                                        <option value="15">Phú Thọ</option>
                                                        <option value="39">Phú Yên</option>
                                                        <option value="31">Quảng Bình</option>
                                                        <option value="34">Quảng Nam</option>
                                                        <option value="35">Quảng Ngãi</option>
                                                        <option value="17">Quảng Ninh</option>
                                                        <option value="32">Quảng Trị</option>
                                                        <option value="59">Sóc Trăng</option>
                                                        <option value="14">Sơn La</option>
                                                        <option value="46">Tây Ninh</option>
                                                        <option value="26">Thái Bình</option>
                                                        <option value="12">Thái Nguyên</option>
                                                        <option value="28">Thanh Hoá</option>
                                                        <option value="33">Thừa Thiên Huế</option>
                                                        <option value="53">Tiền Giang</option>
                                                        <option value="02">Tp. Hồ Chí Minh</option>
                                                        <option value="58">Trà Vinh</option>
                                                        <option value="09">Tuyên Quang</option>
                                                        <option value="57">Vĩnh Long</option>
                                                        <option value="16">Vĩnh Phúc</option>
                                                        <option value="13">Yên Bái</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="" id="" placeholder="Mã trường" required>
                                                <input type="text" name="" id="" placeholder="Tên trường" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 8 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-6">
                                                    <label for="">Năm lớp 11: </label>
                                                    <input type="text" name="" id="" placeholder="Mã tỉnh" required>
                                                    <select name="" id="">
                                                        <option value="">- Chọn tỉnh/thành phố</option>
                                                        <option value="51">An Giang</option>
                                                        <option value="52">Bà Rịa - Vũng Tàu</option>
                                                        <option value="18">Bắc Giang</option>
                                                        <option value="11">Bắc Kạn</option>
                                                        <option value="60">Bạc Liêu</option>
                                                        <option value="19">Bắc Ninh</option>
                                                        <option value="56">Bến Tre</option>
                                                        <option value="37">Bình Định</option>
                                                        <option value="44">Bình Dương</option>
                                                        <option value="43">Bình Phước</option>
                                                        <option value="47">Bình Thuận</option>
                                                        <option value="61">Cà Mau</option>
                                                        <option value="55">Cần Thơ</option>
                                                        <option value="06">Cao Bằng</option>
                                                        <option value="04">Đà Nẵng</option>
                                                        <option value="40">Đắk Lắk</option>
                                                        <option value="63">Đăk Nông</option>
                                                        <option value="62">Điện Biên</option>
                                                        <option value="48">Đồng Nai</option>
                                                        <option value="50">Đồng Tháp</option>
                                                        <option value="38">Gia Lai</option>
                                                        <option value="05">Hà Giang</option>
                                                        <option value="24">Hà Nam</option>
                                                        <option value="01">Hà Nội</option>
                                                        <option value="30">Hà Tĩnh</option>
                                                        <option value="21">Hải Dương</option>
                                                        <option value="03">Hải Phòng</option>
                                                        <option value="64">Hậu Giang</option>
                                                        <option value="23">Hoà Bình</option>
                                                        <option value="22">Hưng Yên</option>
                                                        <option value="41">Khánh Hoà</option>
                                                        <option value="54">Kiên Giang</option>
                                                        <option value="36">Kon Tum</option>
                                                        <option value="07">Lai Châu</option>
                                                        <option value="42">Lâm Đồng</option>
                                                        <option value="10">Lạng Sơn</option>
                                                        <option value="08">Lào Cai</option>
                                                        <option value="49">Long An</option>
                                                        <option value="25">Nam Định</option>
                                                        <option value="29">Nghệ An</option>
                                                        <option value="27">Ninh Bình</option>
                                                        <option value="45">Ninh Thuận</option>
                                                        <option value="15">Phú Thọ</option>
                                                        <option value="39">Phú Yên</option>
                                                        <option value="31">Quảng Bình</option>
                                                        <option value="34">Quảng Nam</option>
                                                        <option value="35">Quảng Ngãi</option>
                                                        <option value="17">Quảng Ninh</option>
                                                        <option value="32">Quảng Trị</option>
                                                        <option value="59">Sóc Trăng</option>
                                                        <option value="14">Sơn La</option>
                                                        <option value="46">Tây Ninh</option>
                                                        <option value="26">Thái Bình</option>
                                                        <option value="12">Thái Nguyên</option>
                                                        <option value="28">Thanh Hoá</option>
                                                        <option value="33">Thừa Thiên Huế</option>
                                                        <option value="53">Tiền Giang</option>
                                                        <option value="02">Tp. Hồ Chí Minh</option>
                                                        <option value="58">Trà Vinh</option>
                                                        <option value="09">Tuyên Quang</option>
                                                        <option value="57">Vĩnh Long</option>
                                                        <option value="16">Vĩnh Phúc</option>
                                                        <option value="13">Yên Bái</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="" id="" placeholder="Mã trường" required>
                                                <input type="text" name="" id="" placeholder="Tên trường" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 9 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-6">
                                                    <label for="">Năm lớp 12:</label>
                                                    <input type="text" name="" id="" placeholder="Mã tỉnh" required>
                                                    <select name="" id="">
                                                        <option value="">- Chọn tỉnh/thành phố</option>
                                                        <option value="51">An Giang</option>
                                                        <option value="52">Bà Rịa - Vũng Tàu</option>
                                                        <option value="18">Bắc Giang</option>
                                                        <option value="11">Bắc Kạn</option>
                                                        <option value="60">Bạc Liêu</option>
                                                        <option value="19">Bắc Ninh</option>
                                                        <option value="56">Bến Tre</option>
                                                        <option value="37">Bình Định</option>
                                                        <option value="44">Bình Dương</option>
                                                        <option value="43">Bình Phước</option>
                                                        <option value="47">Bình Thuận</option>
                                                        <option value="61">Cà Mau</option>
                                                        <option value="55">Cần Thơ</option>
                                                        <option value="06">Cao Bằng</option>
                                                        <option value="04">Đà Nẵng</option>
                                                        <option value="40">Đắk Lắk</option>
                                                        <option value="63">Đăk Nông</option>
                                                        <option value="62">Điện Biên</option>
                                                        <option value="48">Đồng Nai</option>
                                                        <option value="50">Đồng Tháp</option>
                                                        <option value="38">Gia Lai</option>
                                                        <option value="05">Hà Giang</option>
                                                        <option value="24">Hà Nam</option>
                                                        <option value="01">Hà Nội</option>
                                                        <option value="30">Hà Tĩnh</option>
                                                        <option value="21">Hải Dương</option>
                                                        <option value="03">Hải Phòng</option>
                                                        <option value="64">Hậu Giang</option>
                                                        <option value="23">Hoà Bình</option>
                                                        <option value="22">Hưng Yên</option>
                                                        <option value="41">Khánh Hoà</option>
                                                        <option value="54">Kiên Giang</option>
                                                        <option value="36">Kon Tum</option>
                                                        <option value="07">Lai Châu</option>
                                                        <option value="42">Lâm Đồng</option>
                                                        <option value="10">Lạng Sơn</option>
                                                        <option value="08">Lào Cai</option>
                                                        <option value="49">Long An</option>
                                                        <option value="25">Nam Định</option>
                                                        <option value="29">Nghệ An</option>
                                                        <option value="27">Ninh Bình</option>
                                                        <option value="45">Ninh Thuận</option>
                                                        <option value="15">Phú Thọ</option>
                                                        <option value="39">Phú Yên</option>
                                                        <option value="31">Quảng Bình</option>
                                                        <option value="34">Quảng Nam</option>
                                                        <option value="35">Quảng Ngãi</option>
                                                        <option value="17">Quảng Ninh</option>
                                                        <option value="32">Quảng Trị</option>
                                                        <option value="59">Sóc Trăng</option>
                                                        <option value="14">Sơn La</option>
                                                        <option value="46">Tây Ninh</option>
                                                        <option value="26">Thái Bình</option>
                                                        <option value="12">Thái Nguyên</option>
                                                        <option value="28">Thanh Hoá</option>
                                                        <option value="33">Thừa Thiên Huế</option>
                                                        <option value="53">Tiền Giang</option>
                                                        <option value="02">Tp. Hồ Chí Minh</option>
                                                        <option value="58">Trà Vinh</option>
                                                        <option value="09">Tuyên Quang</option>
                                                        <option value="57">Vĩnh Long</option>
                                                        <option value="16">Vĩnh Phúc</option>
                                                        <option value="13">Yên Bái</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="" id="" placeholder="Mã trường" required>
                                                <input type="text" name="" id="" placeholder="Tên trường" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 10 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-8">
                                                <i class="note3">Đối tượng ưu tiên tuyển sinh (Thuộc đối tượng nào thì chọn đối tượng bên phải)</i>
                                            </div>
                                            <div class="col-sm-4">
                                                <select name="" id="">
                                                    <option value="0">- Chọn</option>
                                                    <option value="1">Không</option>
                                                    <option value="2">UT1</option>
                                                    <option value="3">UT2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hàng 11 -->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-8">
                                                <i class="note4">Khu vực ưu tiên tuyển sinh: Thuộc khu vực nào thì chọn ký hiệu của khu vực đó (KV1,KV2,KV3,KV4) ở ô bên phải</i>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="KVUT" id="KVUT">
                                                    <option value="">- Chọn</option>
                                                    <option value="0">Không</option> 
                                                    <option value="KV1">KV1</option>
                                                    <option value="KV2">KV2</option>
                                                    <option value="KV3">KV3</option>
                                                    <option value="KV4">KV4</option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Hàng 12-->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-12">
                                                <label for="HoKhau">Địa chỉ liên hệ:</label>
                                                <input class="form-control" type="text" name="Diachi" id="Diachi" placeholder="Nhập địa chỉ" size="109" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Hàng 13-->
                                <div class="form-field-row">
                                    <div class="col-sm-12">
                                        <div class="form-field-group">
                                            <div class="col-sm-6">
                                                <label for="DT">Điện thoại thí sinh:</label>
                                                <input class="form-control" type="text" name="DTTS" id="DTTS" placeholder="Nhập số điện thoại" size="40" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="CMND">Điện thoại phụ huynh:</label>
                                                <input class="form-control" type="text" name="DTPH" id="DTPH" placeholder="Nhập số điện thoại" size="35" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        <!-- Thân phần 2-->
                        <div class="card p-20 pb-0">
                            <!-- Tiêu đề con phần 2 -->
                            <div class="header-child style-1">
                                <div class="number">
                                    <span>2</span>
                                </div>
                                <div class="content-header">
                                    <h2 class="header-title-child">Thông tin đăng ký</h2>
                                </div>
                            </div>
                            <i class="note5">Sau khi đã đọc và hiểu rõ các quy định về tiêu chí và điều kiện xét tuyển của Nhà trường, tôi đồng ý xét tuyển học bạ vào trình độ Đại học như sau (Chọn phương thức xét tuyển):</i>
                        
                            <label class="radio-inline1"><input type="radio" name="optradio">Xét tuyển bằng Tổng điểm Trung bình lớp 12 theo tổ hợp 3 môn</label>
                            <label class="radio-inline2"><input type="radio" name="optradio">Xét tuyển bằng Tổng điểm Trung bình 3 học kỳ (HK1, HK2 lớp 11, HK1 năm lớp 12)</label>
                        </div>
                    </div>
                    <button type="submit" name="btn-submit">Xác nhận</button>
                    <button type="reset">Nhập lại thông tin</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer của trang -->
    <?php include('includes/footer.php'); ?>

    <!-- Đặt script ở cuối trang để load nhanh hơn -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>