<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</nav></title>
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="5hLQAPhL"></script>

    <header>
        <a href="index.php"><img src="images/logo.jpg" alt="logo"/></a>
        <div class="logo">
            <h1 class="logo-text"><a href="index.php">KHOA CÔNG NGHỆ THÔNG TIN</a></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="index.php">Trang chủ</a></li>
            <li>
                <a href="#">Giới thiệu</a>
                <ul style="left: 0px">
                    <li><a href="single.php">Lời chào mừng</a></li>
                    <li><a href="ctdaotao.php">Chương trình đào tạo</a></li>
                    <li><a href="hoptac.php">Hợp tác liên kết</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Tin tức</a>
                <ul style="left: 0px">
                    <li><a href="sukien.php">Sự kiện </a></li>
                    <li><a href="baocse.php">Báo CSE </a></li>
                </ul>

            </li>
            <li>
                <a href="#">Tuyển sinh</a>
                <ul style="left: 0px">
                    <li><a href="#">Đề án tuyển sinh</a></li>
                    
                    <li><a href="#">Xét tuyển học bạ</a></li>

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
    <?php
        include("config.php");
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = md5[$password];

            $sql="SELECT * FROM users WHERE username = '$username' and password='$password'";
            $query = mysqli_query($connect, $sql);
            $num_row = mysqli_num_rows($query);
            if($num_row|=0){
                echo "Đăng nhập thành công";

            }else {
                echo "Đăng nhập thất bại";
            }
        }
    ?>
    <div class="auth-content">
        <form action="sign.php" method="post">
            <h2 class="form-title">Đăng nhập</h2>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" class="text-input">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-big">Submit</button>
            </div>
            <p>Hoặc <a href="register.php">Đăng ký</p>
        </form>
    </div>
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!--Custom Script-->
    <script src="js/scripts.js"></script>

</body>
</html>