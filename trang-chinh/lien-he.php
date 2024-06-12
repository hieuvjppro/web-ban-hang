<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../cosmetic/css/lien-he/products.css">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Liên Hệ</title>
</head>

<style>
    strong {
            color: black;
        }

        li {
            list-style: none;
        }

</style>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../cosmetic/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgba(245, 245, 245, 1);text-align: center">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../cosmetic/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../cosmetic/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgba(245, 245, 245, 1);text-align: center">
                <div class="logo">
                <a href="index.php"><img src="../../cosmetic/css/danh-sach-sp/img/y.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgba(245, 245, 245, 1);text-align: center">

                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $sl;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                    <ul>
                        <li><p style="color: black;font-size: 14px;">GIỎ HÀNG</p></li>
                       <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-basket" style="font-size:28px;color: black"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>




    






    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>



    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.655070024996!2d105.7600142150131!3d21.046483185988805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c3ce577141%3A0xb1a1ac92701777bc!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUw6BpIG5ndXnDqm4gdsOgIE3DtGkgdHLGsOG7nW5nIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1671540684108!5m2!1svi!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

                        

    <div class="container-fluid now2" style="margin-top: 70px; background-color: black">
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