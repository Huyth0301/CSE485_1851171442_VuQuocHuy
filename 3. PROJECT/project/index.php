<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Công nghệ thông tin - Trường ĐH Thủy lợi</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Facebook Page  Plugin SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="ZrIIUJAo"></script>
    <header>
        <a href="index.php"></a>
        <img src="images/logo.jpg" alt="logo"/>
        <div class="logo">
            <h1 class="logo-text"><a href="index.php">KHOA CÔNG NGHỆ THÔNG TIN</a></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="index.php">Trang chủ</a></li>
            <li>
                <a href="index.php">Giới thiệu</a>
                <ul style="left: 0px">
                    <li><a href="single.php">Lời chào mừng</a></li>
                    <li><a href="ctdaotao.php">Chương trình đào tạo</a></li>
                    <li><a href="hoptac.php">Hợp tác liên kết</a></li>
                </ul>
            </li>
            <li>
                <a href="index.php">Tin tức</a>
                <ul style="left: 0px">
                    <li><a href="sukien.php">Sự kiện </a></li>
                    <li><a href="baocse.php">Báo CSE </a></li>
                </ul>

            </li>
            <li>
                <a href="#">Tuyển sinh</a>
                <ul style="left: 0px">
                    <li><a href="#">Tư vấn tuyển sinh</a></li>
                    <li><a href="hocba/xet.php">Xét tuyển học bạ</a></li>

                </ul>
            </li>
            <li><a href="lienhe.php">Liên hệ</a></li>
            <li>
                <a href="#">
                <i class="fa fa-user"></i>
                Admin
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul style="left: 0px">
                    <li><a href="signin.php">Đăng nhập</a></li>
                    <li><a href="register.php">Đăng ký</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Post Slider-->
            <div class="post-slider">
                <h1 class="slider-title"></h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>
                <div class="post-wrapper">
                    <div class="post">
                        <img  src= "images/anh1.jpeg" alt="Chàng trai thủ khoa CSE" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="images/anh2.jpg" alt="Giới thiệu chương trình CNTT Việt-Nhật, Việt-Anh" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="images/anh3.jpg" alt="Lễ tốt nghiệp" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/122949925_2742813689334104_5633694154818547795_o.jpg?_nc_cat=110&ccb=2&_nc_sid=730e14&_nc_ohc=S3VRaBuKAfUAX8rsPj8&_nc_ht=scontent.fhph1-1.fna&oh=6d83c14a66882b86ecdce7162409bd2e&oe=5FD61949" alt="Trưởng khoa CNTT PGS.TS Nguyễn Thanh Tùng>" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="images/anh5.jpg" alt="Nữ sinh tiểu biểu trong cuộc thi Khoa học công nghệ" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="images/anh6.jpg" alt="Hội nghị khoa học sinh viên lần thứ 3" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="images/anh7.jpg" alt="Văn nghệ 20/11" class="slider-image">
                    </div>
                </div>
            </div>
        <!--//Post Slider-->
        
        <!--Conten-->
    <div class="content clearfix">
            <!--Main content-->
        <div class="main-content">
            <div class="post clearfix">
                <img src="images/giaoluu.jpg" alt="giao lưu" class="post-image">
                <div class="post-preview">
                    <h2><a href="giaoluu.php">Sinh viên Khoa CNTT giao lưu với công ty Qualica Nhật Bản </a></h2>
                    
                    <p class="preview-text">
                        (TLU) – Chiều ngày 23/04/2018, tại Trường Đại học Thủy lợi diễn ra buổi giao lưu giữa sinh viên Khoa CNTT với các lãnh đạo và nhân viên của công ty Qualica đang làm việc tại Nhật Bản.
                    </p>
                    <a href="giaoluu.php" class="btn read-more">Chi tiết</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="images/tsv.jpg" alt="chào tân" class="post-image">
                <div class="post-preview">
                    <h2><a href="tsv.php">Hàng trăm tân sinh viên k62 khoa CNTT nhập học </a></h2>
                    
                    <p class="preview-text">
                        (TLU) - Chiều nay hàng trăm Tân sinh viên khoa CNTT đến nhập học. Với sự chuẩn bị chu đáo của Nhà trường đã tạo được những ấn tượng ban đầu cho các tân sinh viên và phụ huynh sinh viên. 
                    </p>
                    <a href="tsv.php" class="btn read-more">Chi tiết</a>
                </div>
            </div>                    
            <div class="post clearfix">
                <img src="images/sv.jpg" alt="khởi nghiệp" class="post-image">
                <div class="post-preview">
                    <h2><a href="sv.php">Cuộc thi “Sinh viên với ý tưởng khởi nghiệp” năm 2020</a></h2>
                    
                    <p class="preview-text">
                        (TLU)-Căn cứ Quyết định số 1715/QĐ-BGDĐT ngày 29/6/2020 của Bộ trưởng Bộ Giáo dục và Đào tạo về việc ban hành Thể lệ Cuộc thi “Học sinh, sinh viên với ý tưởng khởi nghiệp” năm 2020 (SV_STARTUP-2020).
                    <a href="sv.php" class="btn read-more">Chi tiết</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="images/diemchuan.png" alt="Điểm chuẩn" class="post-image">
                <div class="post-preview">
                    <h2><a href="diemchuan.php">Khoa CNTT thông báo điểm chuẩn đào tạo hệ chính quy năm 2020 theo phương thức xét điểm thi THPT</a></h2>
                    
                    <p class="preview-text">
                        (TLU)- Sáng nay khoa CNTT đại học Thuỷ Lợi đã thông báo điểm chuẩn và kế hoạch xác nhận nhập học đại học hệ chính quy năm 2020 theo phương thức xét điểm thi THPT
                    </p>
                    <a href="diemchuan.php" class="btn read-more">Chi tiết</a>
                </div>
            </div>    
        </div>
            
            <!--// Main content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="?">
                    </form>
                </div>
                <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn/">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
            </div>
        </div>

    </div>
    <!--//Page Wrapper-->

    <!--Footer-->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
    
                <p>Khoa Công nghệ thông tin - Đại học Thủy lợi<br/>Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội.</p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; (+84)-024 3 5632211</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; vpkcntt@tlu.edu.vn</span>
                </div>
    
            </div>
            <div class="footer-section links">
                <h2>Bộ môn trung tâm</h2><br/>
                <ul>
                    <a href="cnpm.php"><li>Công nghệ phần mềm</li></a>
                    <a href="httt.php"><li>Hệ thống thông tin</li></a>
                    <a href="khmt.php"><li>Khoa học máy tính</li></a>
                    <a href="ktmt.php"><li>Kỹ thuật máy tính và mạng</li></a>
                    <a href="th.php"><li>Toán học</li></a>

                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Liên hệ văn phòng khoa</h2><br/>
                <form action="index.php" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Địa chỉ email của bạn...">
                    <textarea row="4" name="message" class="text-input contact-input" placeholder="Nội Dung..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            
        </div>
    </div>

    <!--//Footer-->

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Custom Script-->
    <script src="js/scripts.js"></script>

</body>
</html>