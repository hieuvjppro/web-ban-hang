<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/products.css">
    <link rel="stylesheet" href="../../cosmetic/css/tin-tuc/tintuc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../cosmetic/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tin Tức</title>
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


    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4">
                <!-- ---------------------
                --------------------------- -->
                

                <!-- ---------------------
                --------------------------- -->

                <div class="row" style="margin-top: 50px;">
                    <div class="baiviet">
                        <h5>BÀI VIẾT MỚI</h5>
                    </div>
                </div>


                <div class="row">
                    <div class="out">

                        <table>
                            <tr>
                                <td>
                                    <img src="../../cosmetic/css/tin-tuc/img/anh1.jpg" alt="">
                                </td>
                                <td>
                                    <p><b>Cách chọn kem chống nắng tốt phù hợp an toàn với từng loại da</b>
Kem chống nắng là vật dụng quan trọng giúp bảo vệ làn da dưới sự tác động của tia cực tím hạn chế lão hóa sạm da và tàn nhang hiệu quả. </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../cosmetic/css/tin-tuc/img/anh2.jpg" alt="">
                                </td>
                                <td>
                                    <p><b>Thương hiệu White Repe cam kết bảo vệ làn da cho phụ nữ Việt</b>
White Repe đặt mục tiêu trở thành người bạn đồng hành để hoàn thiện vẻ đẹp bằng chính giá trị bên trong cho phụ nữ Việt. </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../cosmetic/css/tin-tuc/img/anh3.jpg" alt="">
                                </td>
                                <td>
                                    <p><b>Những yếu tố giúp Skin1004 chinh phục khách hàng Việt</b>
Các sản phẩm Skin1004 đáp ứng tiêu chí lựa chọn mỹ phẩm của chị em như thành phần thiên nhiên, không gây kích ứng da và đa dạng sản phẩm.  </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../cosmetic/css/tin-tuc/img/anh4.jpg" alt="">
                                </td>
                                <td>
                                    <p><b>Thương hiệu mỹ phẩm Ayana ra mắt tại Việt Nam</b>
Ayana mong muốn sẽ trở thành người bạn đồng hành của phụ nữ Việt trong hành trình chăm sóc sắc đẹp.  </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../cosmetic/css/tin-tuc/img/anh5.jpg" alt="">
                                </td>
                                <td>
                                    <p><b>Ba mẫu kem chống nắng được ưa chuộng của The Saem</b>
Ba mẫu kem chống nắng hồng, xanh, vàng của The Saem phù hợp với nhiều loại da khác nhau, được ưa chuộng vì sự lành tính, dễ sử dụng.  </p>
                                </td>
                            </tr>


                        </table>



                    </div>
                </div>

            </div>


            <div class="col-md-8">
                <div class="row">



                    <div class="card" style="width: 14rem;">
                        <img src="../../cosmetic/css/tin-tuc/img/anh6.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">TOP 10 THƯƠNG HIỆU MỸ PHẨM NỔI TIẾNG NHẤT TRÊN THẾ GIỚI</p>
                            <p class="gach"></p>
                            <p class="nho">Mà muốn đạt được vẻ đẹp hoàn hảo thì không thể thiếu đi sự hỗ trợ đắc lực của những món đồ trang điểm chất lượng đến từ những thương hiệu mỹ phẩm nổi tiếng.Hãy cùng Vận Chuyển Siêu Tốc  điểm qua top 10 thương hiệu mỹ phẩm tốt trên thế giới để chọn được những loại mỹ phẩm tốt nhất cho mình bạn nhé!</p>
                            <p class="ngay"> <img src="../../cosmetic/css/tin-tuc/img/k.jpg" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../cosmetic/css/tin-tuc/img/anh7.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">MUA 1 TẶNG NHIỀU – SĂN DEAL SIÊU KHỦNG</p>
                            <p class="gach"></p>
                            <p class="nho">Mua 1 tặng 1 là xưa rồi, bây giờ chúng tui “chơi lớn” hẳn MUA 1 TẶNG NHIỀU đi kèm GIẢM GIÁ LÊN TỚI 30% nữa cơ!!! Đảm bảo deal cực xịn vì toàn sản phẩm hot hit, quà tặng đi kèm cũng sang xịn mịn không kém, tính ra hời dã man luôn ý.
Mời các bác xem kỹ từng ảnh để không bỏ lỡ deal này nhaaa.</p>
                            <p class="ngay"> <img src="../../cosmetic/css/tin-tuc/img/k.jpg" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../cosmetic/css/tin-tuc/img/anh8.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Rosé chia sẻ lý do gắn bó với Sulwhasoo - thương hiệu làm đẹp cao cấp hàng đầu Hàn Quốc</p>
                            <p class="gach"></p>
                            <p class="nho">Cô là khách hàng trung thành của thương hiệu mỹ phẩm toàn cầu này và đặc biệt là của First Care Activating Serum</p>
                            <p class="ngay"> <img src="../../cosmetic/css/tin-tuc/img/k.jpg" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../cosmetic/css/tin-tuc/img/anh9.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Dior - Thương Hiệu Mỹ Phẩm Xa Xỉ Nước Pháp </p>
                            <p class="gach"></p>
                            <p class="nho">Dior là một thương hiệu mỹ phẩm và thời trang của Pháp, với các sản phẩm chăm sóc da và trang điểm chất lượng cao. Thương hiệu này nổi tiếng với các sản phẩm son môi và nước hoa, và đang tập trung vào phát triển các sản phẩm tự nhiên và đồng thời mở rộng thị trường sang các nước khác.</p>
                            <p class="ngay"> <img src="../../cosmetic/css/tin-tuc/img/k.jpg" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../cosmetic/css/tin-tuc/img/anh10.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Top 5 thương hiệu mỹ phẩm chăm sóc da tốt được đánh giá cao</p>
                            <p class="gach"></p>
                            <p class="nho">Shiseido là một trong những thương hiệu làm đẹp lâu đời nhất trên thế giới,luôn mang đến nguồn cảm hứng bằng những sáng kiến và sáng tạo ra các sản phẩm có giá trị vượt thời gian, là thương hiệu tiên phong trong lĩnh vực làm đẹp và chăm sóc da.
                             The Face Shop mở cửa hàng thứ 100 tại Hàn Quốc và là tập đoàn mỹ phẩm lớn thứ ba tại đất nước này...
                            </p>
                            <p class="ngay"> <img src="../../cosmetic/css/tin-tuc/img/k.jpg" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../cosmetic/css/tin-tuc/img/anh11.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">10 Hãng Mỹ Phẩm Việt Nam Tốt Nhất "Mệnh Danh Làn Gió Xanh"</p>
                            <p class="gach"></p>
                            <p class="nho">Mỹ phẩm Việt Nam ngày nay đã có thể cạnh tranh với các thương hiệu nổi tiếng trên thế giới về cả chất lượng và mẫu mã.

Thay cho việc gửi gắm niềm tin ở các thương hiệu nước ngoài, nhiều người ủng hộ các thương hiệu nội địa vì loại mỹ phẩm trong nước không chỉ có giá cả hợp lý mà còn được sản xuất dựa trên sự am hiểu về đặc điểm con người và khí hậu Việt Nam.

Trong bài viết này, hãy cùng Cỏ Mềm khám phá top 10 các hãng mỹ phẩm nổi tiếng tại việt nam và được người dùng nhiều nhất hiện nay nhé!</p>
                            <p class="ngay"> <img src="../../cosmetic/css/tin-tuc/img/k.jpg" alt=""> </p>

                        </div>
                    </div>
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