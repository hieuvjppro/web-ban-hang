<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../cosmetic/css/danh-sach-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../cosmetic/css/danh-sach-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../cosmetic/css/danh-sach-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/ihover-gh-pages/src/ihover.css">
    <link rel="stylesheet" href="../css/ihover-gh-pages/src/ihover.min.css">
    <title>Sản Phẩm</title>
    <style>
        .sanpham{
            position:relative;
        }
        .sanpham:hover img{
            opacity: 0.4;
            transform: scale(1.05);
            transition: all 0.5s;
        }
        .sanpham .chi-tiet{
            position:absolute;
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: black;

        }
        .sanpham:hover .chi-tiet{
            opacity: 1;
            font-weight:bold;
            z-index:1;

        }
        .chi-tiet{
            background-color: #313a40;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            font-family: "Roboto Condensed", sans-serif;

        }
        
        .sanpham .hang-moi{
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            font-family: "Roboto Condensed", sans-serif;
            width: 80px;
            display: block;
            background: #f7941d;
            background: linear-gradient(#f7941d 0,#f7941d 100%);
            box-shadow: 0 3px 10px -5px #000;
            top: 10px;
            right: 10px;
        }
        .item{
            position:relative;
        }
        .item .noi-bat{
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            transform: rotate(45deg);
            font-family: "Roboto Condensed", sans-serif;
            width: 50px;
            display: block;
            background: #f7941d;
            background: linear-gradient(#f7941d 0,#f7941d 100%);
            box-shadow: 0 3px 10px -5px #000;
            top: 15px;
            right: 20px;
        }
        strong {
            color: black;
        }

        li {
            list-style: none;
        }

        
    </style>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../cosmetic/css/danh-sach-sp/plugin/js/owl.carousel.min.js"></script>


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
            <div class="col-md-12" style="background-color: rgba(245, 245, 245, 1);">
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


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><span>TRANG CHỦ </span> / SẢN PHẨM</p>
                </div>
            </div>
           
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-left: 0px;margin-top: 42px;">

                <div class="row" style="
    margin-left: 0px;
">                  
                    <!-- Tìm kiếm theo tên sản phẩm -->
                    <form action="tim-kiem-theo-ten.php" method="post">

                    <div class="serch">
                        <input type="text" placeholder="Tìm kiếm..." name="keywords">
                        <button type="submit" name="search-keywords"><i class="fa fa-search" style="font-size:20px;color:rgb(255, 255, 255)"></i></button>
                    </div>
                    </form>
                </div>
                <div class="row" style="
    margin-left: 0px;
">

                    <!-- CODE PHP DANH MỤC -->
                    <?php
                        require_once ('../../cosmetic/admin/dao/loai-hang.php');
                        extract($_REQUEST);
                        $items = loai_hang_select_all();
                    ?>
                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                        <ul class="list-group">
                            <li class="list-group-item active">DANH MỤC</li>
                            <?php foreach($items as $item){
                                extract($item);
                                ?>
                            <a href="sp-cung-loai.php?ma_loai=<?=$ma_loai?>"><li class="list-group-item"><?=$ten_loai?></li></a> 
                            <?php } ?>
                        </ul>

                    </div>

                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                        <ul class="list-group">
                            <!-- CODE PHP SẢN PHẨM BÁN CHẠY -->
                        <?php
                            require_once ('../../cosmetic/admin/dao/hang-hoa.php');
                            extract($_REQUEST);
                            $items = hang_hoa_sale();
                        
                        ?>
                            <li class="list-group-item active">SẢN PHẨM SALE UP 10 - 50%</li>
                            <?php foreach($items as $item){
                                extract($item);
                                ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-4"><a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>&ma_loai=<?=$ma_loai?>"><img style="width:80px;" src="../../cosmetic/css/admin/images/products/<?=$hinh?>" alt=""></a></div>
                                    <div class="col-sm-8"><?=$ten_hh?><br><br><b><?=number_format($don_gia-($don_gia*$giam_gia/100))?> VNĐ</b></div>
                                </div>
                            </li>



                            <?php } ?>
                        </ul>

                    </div>


                </div>


            </div>

            <!-- Sản phẩm nó nằm ở đây -->
            <div class="col-md-9">

            <!-- CODE PHP DANH SÁCH SẢN PHẨM -->
            <?php
                $items = hang_hoa_select_all_price();
                foreach($items as $item){
                    extract($item);

            ?>
                <div class="sanpham">
                <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><span class="chi-tiet">CHI TIẾT</span></a>
                   
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img  src="../../cosmetic/css/admin/images/products/<?=$hinh?>" alt=""><span class='hang-moi'>Hàng mới</span></a>
                    <div class="glow-wrap">
    <i class="glow"></i>
  </div>
                    <div class="text">
                        <div class="price">
                            <?=number_format($don_gia - $don_gia*($giam_gia/100))?> VNĐ <span style = "color:grey;font-size:14px;margin-left:40px;"><strike><?=number_format($don_gia)?> VNĐ</strike></span>
                        </div>
                        <div class="name">
                           <?=$ten_hh?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            
                                                          
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