<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/trang-chu/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Proxima">
</head>
<body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../css/trang-chu/plugin/js/owl.carousel.min.js"></script>


    <div id="header">
            <div id="header-first">
                <div id="header-contact">
                    <ul class="follow-contact">
                        <li><p>Theo dõi qua:</p></li>
                        <li><a href="" class="ti-facebook"></a></li>
                        <li><a href="" class="ti-instagram"></a></li>
                        <li><a href="" class="ti-email"></a></li>
                        <li><a href="" class="ti-headphone-alt"></a></li>
                        <li><a href="" class="ti-github"></a></li>
                    </ul>
                </div>
                <div id="header-logo">
                    <a href="" class="header-logo"> HKT COSMETIC</a>
                    <p class="header-sologan">SKINCARE</p>
                </div>
                <div class="user-account">
                    <div class="sign-btn">
                        <?php
                            session_start();
                            if(!isset($_SESSION['user'])){
                        ?>
                        <a class="signup-btn" href="../../cosmetic/tai-khoan/dang-nhap.php"><span>Đăng nhập</span> </a>
                        <?php }else{ ?>
                        <a  class="signup-btn" href="../../cosmetic/tai-khoan/thong-tin-tk.php"><span><?=$_SESSION['user']['ho_ten'] ?> </span></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="header-second">
                <div class="task-bar">
                    <ul class="nav">
                        <li><a href="">Trang Chủ</a></li>
                        <li><a href="danh-sach-sp.php">Sản Phẩm</a></li>
                        <li><a href="gioi-thieu.php">Giới Thiệu</a></li>
                        <li><a href="tin-tuc.php">Tin Tức</a></li>
                        <li><a href="lien-he.php">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>


    <div id="body">
        <div style="position: relative; 
  margin-top: 170px; left: 17%;"  class="img-banner">
            <img src="../css/trang-chu/img/banersale.webp" alt="">
        </div>
    </div>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2> SẢN PHẨM NỔI BẬT </h2>
                </div>
            </div>
        </div>
    </div>


    <?php
        require_once ('../admin/dao/hang-hoa.php');
        $items = hang_hoa_noi_bat();
    
    ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">

                <?php 
                    foreach($items as $item){
                        extract($item);
                    
                ?>
                    <div class="item">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="../../cosmetic/css/admin/images/products/<?=$hinh?>" alt="ds"></a>
                    </div>
                <?php }?>


                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 300px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2>KEM CHỐNG NẮNG
                    </h2>
                </div>
            </div>
        </div>
    </div>

                    <?php
                        $items = hang_hoa_select_all_kemchongnang();
                    ?>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <?php foreach($items as $item){ 
                extract($item);
                ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img class="card-img-top" src="../../cosmetic/css/admin/images/products/<?=$hinh?>" alt="Card image top"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?=$ten_hh?></h5>
                        <p class="card-subtitle"><?=number_format($don_gia-($don_gia*$giam_gia/100)) ?> VNĐ</p>

                    </div>
                </div>
            </div>
            <?php } ?>
            

        </div>
    </div>
    

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
               <a href="danh-sach-sp.php"><button type="button" class="btn btn-outline-dark">Tất cả</button></a>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 300px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2>KEM DƯỠNG ẨM
                    </h2>
                </div>
            </div>
        </div>
    </div>
                     <?php
                        $items = hang_hoa_select_all_kemduongam();
                    ?>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <?php foreach($items as $item){ 
                extract($item);
                ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img class="card-img-top" src="../../cosmetic/css/admin/images/products/<?=$hinh?>" alt="Card image top"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?=$ten_hh?></h5>
                        <p class="card-subtitle"><?=number_format($don_gia-($don_gia*$giam_gia/100)) ?> VNĐ</p>

                    </div>
                </div>
            </div>
            <?php } ?>
            

        </div>
    </div>

    <div class="container" style="margin-top: 300px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2>SẢN PHẨM BÁN CHẠY
                    </h2>
                </div>
            </div>
        </div>
    </div>
                     <?php
                        $items = hang_hoa_ban_chay();
                    ?>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <?php foreach($items as $item){ 
                extract($item);
                ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img class="card-img-top" src="../../cosmetic/css/admin/images/products/<?=$hinh?>" alt="Card image top"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?=$ten_hh?></h5>
                        <p class="card-subtitle"><?=number_format($don_gia-($don_gia*$giam_gia/100)) ?> VNĐ</p>

                    </div>
                </div>
            </div>
            <?php } ?>
            

        </div>
    </div>
    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                            <img src="../css/trang-chu/img/logo-footer.png" alt="" style ="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5 style="color: white">HỖ TRỢ KHÁCH HÀNG</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 style="color: white">HỆ THỐNG SHOWROOM</h5>
                    </div>
                    <div class="col-md-3">
                        <h5 style="color: white">NHẬN THÔNG BÁO TỪ CHÚNG TÔI</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                     Chúng tôi cùng bạn khám phá những sự thật về chăm sóc da, chia sẻ câu chuyện thực tế giúp bạn đến gần hơn với làn da khỏe đẹp của chính mình.
                
                                        Cảm ơn bạn đã lựa chọn HKT Cosmetic! <br><br>
                                    </p>
                                </li>
                                <li><i style="color: white"  class="fa fa-facebook "></i>
                                    <i style="color: white" class="fa fa-firefox"></i>
                                    <i style="color: white" class="fa fa-pinterest-p"></i>
                                    <i style="color: white" class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul style="color: white">

                                <li>
                                    <p>Chính sách bảo mật</p>
                                </li>
                                <li>
                                    <p>Chính sách chung</p>
                                </li>
                                <li>
                                    <p>Các hình thức thanh toán</p>
                                </li>
                                <li>
                                    <p>Điều khoản mua hàng</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p style="color: white; font-weight: bold;">HÀ NỘI</p>
                                    <p>171 P.Vệ Hồ - Xuân La - Hà Nội</p>
                                    <p>45A Phú Diễn -  Bắc Từ Liêm - Hà Nội</p>
                                </li>
                                <li>
                                    <p style="color: white; font-weight: bold;">HẢI DƯƠNG</p>
                                    <p>128 Nguyễn Chế Nghĩa - Phường Tân Bình - Tp Hải Dương</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để nhận được các thông tin từ chúng tôi.</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>




    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>