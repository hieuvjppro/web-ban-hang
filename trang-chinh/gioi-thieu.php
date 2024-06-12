<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Giới Thiệu</title>
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







    <div class="container-fluid" style="background-color: white;">
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
    
    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-4">
            <img src="../../cosmetic/cosmetic/css/trang-chu/img/anhshop.jpg" alt="" style = "width:100%;">
        </div>
        <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-12">
                        <h2>GIỚI THIỆU CHUNG VỀ HKT COSMETIC</h2>
                        <p style = "text-align:justify;">HKT COSMETIC - là một trang web bán hàng mỹ phẩm hàng đầu, nơi bạn có thể khám phá và mua sắm những sản phẩm làm đẹp chất lượng hàng đầu từ khắp nơi trên thế giới. Với một đội ngũ chuyên gia trong lĩnh vực làm đẹp và thương mại điện tử, chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm an toàn, thuận tiện và đáng tin cậy.Tại HKT COSMETIC, sứ mệnh của chúng tôi là giúp bạn tự tin hơn và cảm thấy tốt về bản thân mình thông qua việc cung cấp những sản phẩm mỹ phẩm và chăm sóc cá nhân tốt nhất. <br> <br>

                        Chúng tôi không chỉ cung cấp sản phẩm chất lượng, mà còn cung cấp kiến thức và hướng dẫn để bạn có thể làm đẹp một cách thông minh và hiệu quả. HKT COSMETIC tự hào mang đến sự đa dạng về sản phẩm mỹ phẩm, từ kem dưỡng da, trang điểm, chăm sóc tóc, đến sản phẩm chăm sóc cơ thể. Chúng tôi cung cấp các thương hiệu nổi tiếng và sản phẩm mới nhất để bạn luôn cảm thấy hài lòng với lựa chọn của mình. Hãy tham gia cùng chúng tôi tại HKT COSMETIC và khám phá thế giới làm đẹp với những sản phẩm tuyệt vời và dịch vụ chuyên nghiệp. Chúng tôi sẵn sàng đồng hành cùng bạn trên hành trình chăm sóc và nâng tầm vẻ đẹp của bạn.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                        <h4>CÁC CHI NHÁNH CỦA HKT COSMETIC</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" style=" border-right:double #c30005 5px">
            <b>CN1: 171 P. Vệ Hồ, Xuân La, Tây Hồ, Hà Nội</b><br>
            <p style = "text-align:justify;margin-top:10px;">Năm ra đời của trang web bán hàng mỹ phẩm HKT COSMETIC là 2022. HKT COSMETIC được thành lập và phát triển vào một thời điểm thúc đẩy bởi nhu cầu ngày càng tăng về việc mua sắm mỹ phẩm trực tuyến và tìm kiếm các sản phẩm làm đẹp chất lượng. Thương hiệu này được tạo ra bởi một đội ngũ các chuyên gia và người đam mê về làm đẹp, kết hợp kiến thức sâu rộng về mỹ phẩm và kinh nghiệm trong lĩnh vực thương mại điện tử. Từ năm 2020 đến nay, HKT COSMETIC đã phát triển và cung cấp dịch vụ mua sắm mỹ phẩm chất lượng cho hàng ngàn khách hàng và trở thành một địa chỉ đáng tin cậy trong ngành làm đẹp trực tuyến.</p>
            </div>
            <div class="col-sm-6">
            <b>CN2: 128 Nguyễn Chế Nghĩa - Phường Tân Bình - Tp Hải Dương </b><br>
            <p style = "text-align:justify;margin-top:10px;">Năm 2022 cũng đánh dấu bước khởi đầu thú vị của HKT COSMETIC trong việc đáp ứng nhu cầu đa dạng của khách hàng về làm đẹp. Trong một thời kỳ nhiều thách thức và thay đổi, chúng tôi đã không ngừng nâng cao và hoàn thiện trang web để mang đến trải nghiệm mua sắm trực tuyến tốt nhất.

Chúng tôi tự hào về sự phát triển và sự tin tưởng của khách hàng dành cho HKT COSMETIC trong suốt thời gian qua. Sứ mệnh của chúng tôi là tiếp tục mang đến cho bạn những sản phẩm mỹ phẩm chất lượng, giúp bạn tự tin và thể hiện vẻ đẹp riêng của mình. Chúng tôi cam kết luôn lắng nghe ý kiến của khách hàng và không ngừng cải thiện để đáp ứng và vượt qua kỳ vọng của bạn. Cảm ơn bạn đã đồng hành cùng HKT COSMETIC trong hành trình làm đẹp và tự tin hơn!</p>
            </div>
        </div>

        </div>
        </div> <br><br>


        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/freeship.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Miễn phí giao hàng</b> <br>  
                    Shop miễn phí giao hàng cho tất cả các đơn hàng trên 2.000.000 VNĐ. Giao hàng nhanh chóng và đảm bảo hàng nguyên vẹn cho quý khách !</div>
                </div><br>
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/new.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Sản phẩm mới 100%</b> <br>  
Sản phẩm tại shop đảm bảo là sản phẩm mới 100% và được nhập khẩu từ các nhãn hàng uy tín trên toàn quốc và trên thế giới.</div>
                </div><br>
                <div class="row">
                <div class="col-sm-2"><img src="../css/trang-chu/img/chinhhang.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Hàng chính hãng</b> <br>  
                    Sản phẩm tại shop đảm bảo là sản phẩm chính hãng và được nhập khẩu từ các nhãn hàng uy tín trên toàn quốc và trên thế giới.</div>
                </div><br>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/doitra.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Đổi trả trong vòng 7 ngày</b> <br>  
Shop có chính sách đổi trả trong vòng 7 ngày đối với những khách hàng có nhu cầu đổi trả sản phẩm 1 cách nhanh chóng và tận tình</div>
                </div><br>
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/cskh.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Chăm sóc khách hàng</b> <br>  
Chế độ chăm sóc khách hàng tại shop tận tình , nhiệt tình hỗ trợ và phục vụ quý khách chu đáo.Đáp ứng nhu cầu của mọi khách hàng ! </div>
                </div><br>
                <div class="row">
                <div class="col-sm-2"><img src="../css/trang-chu/img/thanhtoan.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Thanh toán đa dạng</b> <br>  
Thanh toán tại shop đa dạng bằng cách trả tiền mặt hoặc sử dụng các loại thẻ như : VISA, MASTER CARD , ....</div>
                </div><br>
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