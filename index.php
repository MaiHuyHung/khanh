<?php
     include('lib_db.php');
     $sql = "select * from product_category";
     $product_category = select_list($sql);    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/teke.png" type="images/x-icon">
    <title>Tiki - Mua hàng online giá tốt, hàng chuẩn, ship nhanh</title>
               <!-- fontawesome-free-6 -->
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.min.css"> 
               <!-- bootstrap v.4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./css/style.css">  
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-top">
                <div class="logo">
                    <a href="#"><img src="images/tiki.png" alt=""></a>
                </div>
                <div class="category">
                    <div class="category-btn">
                        <i class="fa-solid fa-bars"></i>       
                    </div>
                    <div class="dropdown-menu">
                        <a href="#">Điện Thoại - Máy Tính Bảng </a>
                        <a href="#">Điện Tử - Điện Lạnh</a>
                        <a href="#">Phụ kiện - Thiết Bị Số</a>
                        <a href="#">Laptop - Thiết bị IT</a>
                        <a href="#">Máy Ảnh - Quay Phim</a>
                        <a href="#">Điện Gia Dụng</a>
                        <a href="#">Nhà Cửa Đời Sống</a>
                        <a href="#">Hàng Tiêu Dùng - Thực Phẩm</a>
                        <a href="#">Đồ chơi , Mẹ & Bé</a>
                        <a href="#">Làm Đẹp - Sức Khỏe</a>
                        <a href="#">Thời Trang - Phụ Kiện</a>
                        <a href="#">Thể Thao - Dã Ngoại</a>
                        <a href="#">Xe Máy , Ô tô , Xe Đạp</a>
                        <a href="#">Hàng quốc tế</a>
                        
                    </div> 
                    <div class="category-title">
                        <span>Danh mục sản phẩm <i class="fa-solid fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="search">
                    <input type='text' placeholder="Tìm danh mục sản phẩm hay thương hiệu mong muốn ...">
                    <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
                </div>
                <div class="user">
                    <div class="logo-user">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="login-user">
                        <p>
                            <span>
                                Đăng nhập /
                            </span>
                            <span>
                                Đăng ký
                            </span>
                        </p>
                        <span>
                            Tài khoản <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>
                </div>
                <div class="cart">
                    <div class="cart-logo">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div class="cart-notice">
                            <span>0</span>
                        </div>
                    </div>
                    <div class="cart-title">
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="logo-bot">
                    <a href="#">
                        <img src="images/freeship.png" alt="freeship">
                    </a>
                </div>
                <div class="food-category">
                    <?php foreach($product_category as $category){?>
                        <a href="/project/list-product.php?id=<?php echo $category['id'] ?>&p=1">
                                                        <?php echo $category['name'] ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="sell-wrapper">
                    <div class="sell">
                            <span>
                                 <i class="fa-solid fa-shop"></i> Bán hàng cùng tiki
                            <span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <!-- <span class="icon icon-prev">
                <i class="tikicon icon-arow-back"></i>
            </span> -->
            <div class="content-top">
                <div class="contentText">
                    <a href="#">Thịt, rau củ</a> 
                    <a href="#">Bách Hóa</a>
                    <a href="#">Nhà Cửa</a>
                    <a href="#">Thiết Bị Số</a>
                    <a href="#">Điện Thoại</a>
                    <a href="#">Mẹ & Bé</a>
                    <a href="#">Làm Đẹp</a>
                    <a href="#">Gia Dụng</a>
                    <a href="#">Thời trang nữ</a>
                    <a href="#">Thời trang nam</a>
                    <a href="#">Giày nữ</a>
                    <a href="#">Túi nữ</a>
                    <a href="#">Giày nam</a>
                    
                </div>
            </div>
            <!-- content images top -->
            <div class="main">
                <div class="content-img-top">
                    <div class="carouselss">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="10"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="11"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="12"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="13"></li>
                            </ol>
                            <div class="carousel-inner" id="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/banner-1.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-2.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-3.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-4.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-5.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-6.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-7.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-8.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-9.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-10.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-11.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-12.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-13.webp" images class="d-block w-100" alt="img not found">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner-14.webp" images class="d-block w-100" alt="img not found">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" id="cl-1" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" id="cl-2" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="banner-left">
                        <img src="images/img2.png" alt="" style="width: 408px; height: 274px;">
                    </div>
                </div>


                <!-- content images mid -->
                <div class="content-mid-one-top">
                    <img src="images/giasoc.svg" alt="">
                    <img width="21" src="images/dealFlashIcon.svg" alt="">
                    <img src="images/homnay.svg" alt="">
                </div>
                <div class="content-mid-one-product">
                        <a href="#"><img src="images/product1.jpg"
                                alt="Điện Thoại Samsung Galaxy A02s (4GB/64GB) - Hàng Chính Hãng"></a>
                        <a href="#"><img src="images/product2.png"
                                alt="Điện Thoại Samsung Galaxy Note 10 Plus (256GB/12GB) - Hàng Chính Hãng"></a>
                        <a href="#"><img src="images/product3.jpg"
                                alt="Webcam 2MP độ phân giải 1080P tương thích với máy tính/máy tính xách"></a>
                        <a href="#"><img src="images/product4.jpg" alt="Túi 46 Gói Nescafé Đậm Đà Hài Hòa (17g)"></a>
                        <a href="#"><img src="images/product5.jpg"
                                alt="Điện Thoại Samsung Galaxy Note 10 (8GB/256GB) - Hàng Chính Hãng"></a>
                        <a href="#"><img src="images/product6.jpg" alt="[Chỉ giao HN] - Kiwi xanh New Zealand - 1KG"></a>
                </div>
                <div class="content-mid-two">
                    <a href="#"><img src="images/giasochomnay.png" alt="" class="left"></a>
                    <a href="#"><img src="images/sansale.png" alt="" class="center"></a>
                    <a href="#"><img src="images/giamgia.png" alt="" class="right"></a>
                </div>
                
                <div class="content-mid-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href="#"><img src="images/tikingonpng.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikimagiamgia.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikidichvu.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikinow.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikiclub.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikicard.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikiuudaipng.png" alt=""></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="images/tikipro.png" alt=""></a>
                            </div>
                        </div>
                        <div class="row content">
                            <div class="col-sm">
                                <a href="#">Thịt rau,củ</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Mã Giảm giá</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Dịch vụ & Tiện ích</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Gói hội viên</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Giảm đến 50%</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Hoàn tiền</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Ưu Đãi thanh toán</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">Hẹn giao & lắp đặt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-mid-four">
                    <a href="#"><img src="images/hsbc.png" alt="https://tiki.vn/khuyen-mai/pns-uu-dai-hsbc"
                            class="left"></a>
                    <a href="#"><img src="images/momclub.png"
                            alt="https://tiki.vn/khuyen-mai/do-xin-cho-be-deal-hoi-cho-me?waypoint_id=mua-1-duoc-2"
                            class="mida"></a>
                    <a href="#"><img src="images/coupon.png"
                            alt="https://tiki.vn/khuyen-mai/yeu-bep-nghien-nha-giam-den-50-100-chinh-hang"
                            class="midb"></a>
                    <a href="#"><img src="images/sieudeal.png"
                            alt="https://tiki.vn/khuyen-mai/lam-dep-thoi-bao-sale-dien-dao?waypoint_id=donggia"
                            class="right"></a>
                </div>
                <div class="content-mid-five">
                    <div class="top-fame">
                        <img src="images/iconV.png" alt="" >
                        Thương Hiệu Chính Hãng
                        <a href="#">Xem Thêm</a>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner fame">
                            <div class="carousel-item active">
                                <div class="row content">
                                    <div class="col-sm left">
                                        <a href="#"><img class="d-block w-100" src="images/firstone.png"
                                                alt="First slide"></a>
                                    </div>
                                    <div class="col-sm right">
                                        <a href="#"><img class="d-block w-100" src="images/firsttwo.png"
                                                alt="First slide"></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row content">
                                    <div class="col-sm left">
                                        <a href="#"><img class="d-block w-100" src="images/secondone.png"
                                                alt="Second slide"></a>
                                    </div>
                                    <div class="col-sm right">
                                        <a href="#"><img class="d-block w-100" src="images/secondtwo.png"
                                                alt="Second slide"></a>
                                    </div>  
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row content">
                                    <div class="col-sm left">
                                        <a href="#"><img class="d-block w-100" src="images/thirdone.png"
                                                alt="Third slide"></a>
                                    </div>
                                    <div class="col-sm right">
                                        <a href="#"><img class="d-block w-100" src="images/thirdtwo.png"
                                                alt="Third slide"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row content">
                                    <div class="col-sm left">
                                        <a href="#"><img class="d-block w-100" src="images/fourthone.png"
                                                alt="Third slide"></a>
                                    </div>
                                    <div class="col-sm right">
                                        <a href="#"><img class="d-block w-100" src="images/fourthtwo.jpg"
                                                alt="Third slide"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" id="cl-1" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" id="cl-2" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="bot-fame">
                        <a href="#">
                            <div class="image-product">
                                <img src="images/botFame1.png" alt="">
                            </div>
                            <div class="infor-product">
                                <h6>Mua Là Có Quà</h6>
                            </div>
                        </a>
                        <a href="#">
                            <div class="image-product">
                                <img src="images/botFame2.png" alt="">
                            </div>
                            <div class="infor-product">
                                <h6>Tặng Coupon 50k</h6>
                            </div>
                        </a>   
                        <a href="#">
                            <div class="image-product">
                                <img src="images/botFame3.png" alt="">
                            </div>
                            <div class="infor-product">
                                <h6>Giảm sâu đến 49%</h6>
                            </div>
                        </a>   
                        <a href="#">
                            <div class="image-product">
                                <img src="images/botFame4.png" alt="">
                            </div>
                            <div class="infor-product">
                                <h6>Ưu đại đến 40%</h6>
                            </div>
                        </a>   
                        <a href="#">
                            <div class="image-product">
                                <img src="images/botFame5.png" alt="">
                            </div>
                            <div class="infor-product">
                                <h6>Mua 1 tặng 1</h6>
                            </div>
                        </a>
                        <a href="#">
                            <div class="image-product">
                                <img src="images/botFame6.png" alt="">
                            </div>
                            <div class="infor-product">
                                <h6>Freeship 50k</h6>
                            </div>
                        </a>              
                    </div>
                </div>
                <div class="sales-container-one">
                    <a href="#"><img src="images/cardbank.png" alt=""class="left"></a>
                    <a href="#"><img src="images/sales.png"alt=""class="mida"></a>
                    <a href="#"><img src="images/producnew.png"alt=""class="midb"></a>
                    <a href="#"><img src="images/beautyclub.png"alt=""class="right"></a>
                </div>

                <div class="content-mid-six">
                    <div class="category-hot">
                        <div class="category-header">Danh mục nổi bật</div>
                        <div class="category-content">
                            <div class="list-product">
                                <div class="product-item">
                                    <img src="images/tikingonpng.png" alt="Thực phẩm tươi Sống">
                                    <span>Thực Phẩm Tươi Sống</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/quabu.jpg" alt="Rau Củ Quả">
                                    <span>Rau Củ Quả</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/giaysnaker.jpg" alt="Giày Thể Thao Nam">
                                    <span>Giày Thể Thao Nam</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/balo.jpg" alt="balo">
                                    <span>Balo</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/dienthoai.jpg" alt="Điện Thoại Smartphone">
                                    <span>Điện thoại Smartphone</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/sachtuduy.jpg" alt="Sách tư duy-Kỹ năng Sống">
                                    <span>Sách tư duy - Kỹ năng Sống</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/noichien.jpg" alt="Nồi chiên">
                                    <span>Nồi chiên</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/chao.jpg" alt="Chảo các loại">
                                    <span>Chảo các loại</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/tieuthuyet.jpg" alt="Tiểu thuyết">
                                    <span>Tiểu thuyết</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/banghe.jpg" alt="Bàn ghế làm việc">
                                    <span>Bàn ghế làm việc</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/noi.jpg" alt="Nồi các loại">
                                    <span>Nồi các loại</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/truyenngan.jpg" alt="Truyện ngắn - Tản văn - Tạp...">
                                    <span>Truyện ngắn - Tản văn - Tạp...</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/phukiennhabep.jpg" alt="Phụ kiện nhà bếp khác">
                                    <span>Phụ kiện nhà bếp khác</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/kemboi.jpg" alt="Kem chống nắng">
                                    <span>Kem chống nắng</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/bookenglish.jpg" alt="Sách Học Tiếng Anh">
                                    <span>Sách Học Tiếng Anh</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/hopthucan.jpg" alt="Hộp đựng thức ăn">
                                    <span>Hộp đựng thức ăn</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/kemvasua.jpg" alt="kem và sữa dưỡng da">
                                    <span>Kem và sữa dưỡng da</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/botdanhrang.jpg" alt="Bàn chải đánh răng">
                                    <span>Bàn chải đánh răng</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/noicomdien.jpg" alt="Nồi cơm điện tử">
                                    <span>Nồi cơm điện tử</span>
                                </div>
                                <div class="product-item">
                                    <img src="images/tulanh.jpg" alt="Tủ lạnh">
                                    <span>Tủ lạnh</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                 
                <div class="content-mid-seven">
                    <div class="buy-trend">
                        <div class="title-buy-trend">
                            <div class="main-title">
                                <img src="images/crown.png" alt="">
                                <span><strong>Xu Hướng Mua Sắm</strong></span>
                            </div>
                            <a href="#">Xem Thêm</a>
                        </div>
                        <div class="buy-trend-wrapper">
                            <div class="buy-trend-content">
                                <div class="list-item">
                                    <a href="#" class="item-container">
                                        <div class="item-one">
                                            <span><strong>Sách tư duy - Kĩ năng sống</strong></span>
                                            <h2>Nhiều người xem </h2>
                                            <div class="list-image">
                                                <img src="images/top-trend1-1.jpg" alt="">
                                                <img src="images/top-trend-1-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item">
                                    <a href="#" class="item-container">
                                        <div class="item-one">
                                            <span><strong>Sách tư duy - Kĩ năng sống</strong></span>
                                            <h2>Nhiều người xem </h2>
                                            <div class="list-image">
                                                <img src="images/top-trend-2-1.png" alt="">
                                                <img src="images/top-trend-2-2.png" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item">
                                    <a href="#" class="item-container">
                                        <div class="item-one">
                                            <span><strong>Sách tư duy - Kĩ năng sống</strong></span>
                                            <h2>Nhiều người xem </h2>
                                            <div class="list-image">
                                                <img src="images/top-trend-3-1.png" alt="">
                                                <img src="images/top-trend-3-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item">
                                    <a href="#" class="item-container">
                                        <div class="item-one">
                                            <span><strong>Sách tư duy - Kĩ năng sống</strong></span>
                                            <h2>Nhiều người xem </h2>
                                            <div class="list-image">
                                                <img src="images/top-trend-4-1.jpg" alt="">
                                                <img src="images/top-trend-4-2.jpeg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sales-container-two">
                    <div class="list-sales">
                         <a href="#" class="item-sales">
                             <img src="images/sales-1.png" alt="">
                         </a>
                         <a href="#" class="item-sales">
                            <img src="images/sales-1.png" alt="">
                        </a>
                        <a href="#" class="item-sales">
                            <img src="images/sales-1.png" alt="">
                        </a>
                    </div>
                </div>
                </div>  
            </div>
        </div>
            <div class="content-today">
                <div class="content-mid-eight">
                    <div class="content-today-top">
                        <div class="suggest-today">
                            <span><strong>Gợi Ý Hôm Nay</strong></span>
                        </div>
                        <div class="list-suggest">
                            <div class="icon-suggest-next">
                                <img src="images/suggest1.png" class="image" alt="">
                                <div class="title-next">
                                    Dành cho bạn 
                                </div>
                            </div>
                            <div class="icon-suggest">
                                <img src="images/suggest2.png" class="image" alt="">
                                <div class="title-next">
                                Mua 1 Tặng 5 
                            </div>
                            </div>
                            <div class="icon-suggest">
                                <img src="images/suggest3.png" class="image" alt="">
                                <div class="title-next">
                                Deal Siêu Hot
                            </div>
                            </div>

                            <div class="icon-suggest">
                                <img src="images/suggest4.png" class="image" alt="">
                                <div class="title-next">
                                Rẻ vô đối 
                            </div>
                            </div>

                            <div class="icon-suggest">
                                <img src="images/suggest5.png" class="image" alt="">
                                <div class="title-next">
                                Đi chợ siêu Sale 
                            </div>
                            </div>

                            <div class="icon-suggest">
                                <img src="images/suggest6.png" class="image" alt="">
                                <div class="title-next">
                                Hàng Mới 
                            </div>
                            </div>

                            <div class="icon-suggest">
                                <img src="images/suggest7.png" class="image" alt="">
                                <div class="title-next">
                                Không giới hạn 
                            </div>
                            </div>

                            <div class="icon-suggest">
                                <img src="images/suggest8.png" class="image" alt="">
                                <div class="title-next">
                                Thời trang nữ 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body-suggest">
                    <div class="content-suggest">
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest1.jpg" alt="Túi vô hình cho nam">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Túi vô hình dành cho nam C-String Thong Underwear Briefs Panty Lingerie</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>154.000 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div  class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest2.jpg" alt="Gel bôi trơn">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Gel bôi trơn Durex Play Classic 50ml</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>67.000 đ</span>
                                            <div class="discount">
                                                -27%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest3.jpg" alt="Sản phẩm bóng nhỏ">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>sản phẩm bóng nhỏ dành cho trẻ em </span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>60.000 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest4.jpg" alt="Hip trainer Pelvic">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Hip Trainer Pelvic Floor Muscle Thigh Master Buttocks Exerciser</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>200.000 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                        <div  class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest5.jpg" alt="Máy Hấp thực Phẩm">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Máy Hấp thực phẩm Magic Korea A64 (500w) - Hàng chính hãng</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>358.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest6.jpg" alt="Nồi chiên không dầu điện tử">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Nồi chiên không dầu điện tử Lock&Block EJF357BLK (5.2 Lít) - Hàng chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>2.390.000 đ</span>
                                            <div class="discount">
                                                -53%
                                            </div>
                                        </div>
                                    </div>
                                </div>      
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest7.jpg" alt="Nước Tẩu trang">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Nước tẩy rửa trang làm sạch sâu cho da nhạy cảm Roche-Posay Micellar Water</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>355.000 đ</span>
                                            <div class="discount">
                                                -11%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest8.jpg" alt="Bóc dán">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Bóc dán công chúa - công chúa dịu dàng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>33.000 đ</span>
                                            <div class="discount">
                                                -27%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest9.jpg" alt="Điện thoại Iphone">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Điện thoại IPhone 11 64GB - Hàng chính hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>13.355.000 đ</span>
                                            <div class="discount">
                                                -13%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest10.jpg" alt="Điện thoại SamSung Galaxy M12">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Điện thoại SamSung Galaxy M12 (4GB/64GB) - Hàng chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>3.375.000 đ</span>
                                            <div class="discount">
                                                -18%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest11.jpg" alt="Nhà biệt thự">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Nhà biệt thự sang trong - nội thất châu âu mới mẻ phù hợp cho giói thượng lưu</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>3.200.358.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>  
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest12.png" alt="Máy xay sinh tố">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Máy xay sinh tố Đa năng Sunhouse Happytime HTĐ5113G (xanh) - Hàng chính Hãng</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>365.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest13.png" alt="Điện thoại SamSung">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>SamSung Galaxy Note 10+ (120GB/256GB) - Hàng chính Hãng</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>4.265.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest14.jpg" alt="sách">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span> Cuốn Sách Cây cam ngọt của tôi - Hàng chính Hãng</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>100.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest15.jpg" alt="Máy xay sinh tố">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Máy xay sinh tố Cầm tay  Locl&Lock EJJ321 (50W - 300ml) - Hàng chính Hãng</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>729.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest16.png" alt="Bút bi đầu deli">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Bút bi đầu deli - 0.5mm/0.7mm đầu bấm - mực xanh/đen/đỏ</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>1.000 đ</span>
                                            <div class="discount">
                                                -91%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/iteam-suggest17.jpg" alt="bàn làm việc ">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Bàn làm việc chân sắt - vàng nhạt - Hàng chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>238.000 đ</span>
                                            <div class="discount">
                                                -22%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest18.jpg" alt="Hộp khẩu trang">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Hộp mười cái khẩu trang VNN95 , 5 lớp có bông kháng khuẩn </span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>31.000 đ</span>
                                            <div class="discount">
                                                -31%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest19.png" alt="Bút kèm túi vải">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Bút Marker kèm theo túi vải 70806 nhiều màu - Hàng chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>315.000 đ</span>
                                            <div class="discount">
                                                -18%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest20.png" alt="Bộ dụng cụ học tập">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Bộ dụng cụ học tập gồm thước kẻ,bút chì, gọt bút,tẩy - Hàng chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>150.000 đ</span>
                                            <div class="discount">
                                                -11%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest21.png" alt="Điện  htoaij Iphone 11">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Điện thoại Iphone 11 64GB - Hàng chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>14.195.000 đ</span>
                                            <div class="discount">
                                                -40%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest22.png" alt="bàn Phím">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Bàn Phím Bluetooth Logitech K380 - Hàng Chính Hãng</span>
                                        </div>
                                        <div class="has-price-discount ">
                                            <span>590.000 đ</span>
                                            <div class="discount">
                                                -10%
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest23.png" alt="nồi chiên không dầu">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>Nồi chiên không dầu Philips HD 9200/90 - Hàng chính hãng</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>1.990.000 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                        </div>
                         <div class="product-suggest">
                            <a href="#" class="product-wrap">
                                <div class="item-suggest">
                                    <div class="thumbnail">
                                        <div class="style-thumbnail">
                                            <img src="images/item-suggest24.png" alt="khách sạn">
                                        </div>  
                                    </div>   
                                    <div class="info-suggest">
                                        <div class="name-item">
                                            <span>chuyến đi du lịch với view hướng ra biển , không gian thoáng , mát mẻ</span>
                                        </div>
                                        <div class="price-discount">
                                            <span><strong>2.355.900 đ</strong></span>
                                        </div>
                                    </div>  
                                </div>
                            </a>    
                         </div>
                    </div>
                    <a href=""><div class="view-more">Xem Thêm</div></a>
                  
                </div>
                
                
            </div>
        </div>
        <!-- content -->
        <div class="footer">
            <div class="footer-top">
                 <div class="footer-container">
                        <div class="footer-content-top" >
                            <h1>HỖ TRỢ KHÁCH HÀNG</h1>
                            <p class="hotline">"Hotline chăm sóc khách hàng:"
                                <a href="#">1900-6035</a>
                                <span class="small-text">(1000đ/phút , 8-21h kể cả t7, CN)</span>
                            </p>
                            <a href="#" class="small-text">Các câu hỏi thường gặp</a>
                            <a href="#" class="small-text">Gửi yêu cầu hỗ trợ</a>
                            <a href="#" class="small-text">Hướng dẫn đặt hàng</a>
                            <a href="#" class="small-text">Phương thức vận chuyển</a>
                            <a href="#" class="small-text">Chính sách đổi trả</a>
                            <a href="#" class="small-text">Hướng dãn trả góp</a>
                            <a href="#" class="small-text">Chính sách hàng nhập khẩu</a>
                            <p class="support-customer">"Hỗ trợ khách hàng:"<a href="#">hotro@tiki.vn</a></p>
                            <p class="support-customer">"Báo lỗi bảo mật:" <a href="#">security@tiki.vn</a></p>
                                
                        </div>
                        <div class="footer-content-top">
                            <h1>VỀ TIKI</h1>
                            <a href="#" class="small-text">Giới thiệu Tiki</a>
                            <a href="#" class="small-text">Tuyển Dụng</a>
                            <a href="#" class="small-text">Chính sách bảo mật thanh toán</a>
                            <a href="#" class="small-text">Chính sách bảo mật thông tin cá nhân</a>
                            <a href="#" class="small-text">Chính sách giải quyết khiếu nại</a>
                            <a href="#" class="small-text">Điều khoản sử dụng </a>
                            <a href="#" class="small-text">Giới thiệu Tiki xu</a>
                            <a href="#" class="small-text">Bán hàng doanh nghiệp</a>
                        </div>
                        <div class="footer-content-top">
                            <h1>HỢP TÁC LIÊN KẾT</h1>
                            <a href="#" class="small-text">Quy chế hoạt động sàn GDTMĐT</a>
                            <a href="#" class="small-text">Bán hàng cùng Tiki</a>
                        </div>
                        <div class="footer-content-top">
                            <h1>PHƯƠNG THỨC THANH TOÁN</h1>
                            <P>
                                <img class = "icon" src="images/visa.svg" alt="">
                                <img class = "icon" src="images/mastercard.svg" alt="">
                                <img class = "icon" src="images/cash.svg" alt="">
                                <img class = "icon" src="images/internet-banking.svg" alt="">
                                <img class = "icon" src="images/installment.svg" alt="">
                                <img class = "icon" src="images/jcb.svg" alt="">
                            </P>
                            <h1>DỊCH VỤ GIAO HÀNG </h1>
                            <a href="#"><img src="images/tikismart.webp" alt=""></a>
                        </div>
                        <div class="footer-content-top">
                            <h1>KẾT NỐI VỚI CHÚNG TÔI</h1>
                            <p>
                                <a href="#" class="icon" title="Facebook">
                                    <img src="images/fb.svg" alt="">
                                </a>
                                <a href="#" class="icon" title="Youtube">
                                    <img src="images/youtube.svg" alt="">
                                </a>
                                <a href="#" class="icon" title="Zalo">
                                    <img src="images/zalo.jpg" alt="">
                                </a>                                
                            </p>
                            <h1 class="download-title">TẢI ỨNG DỤNG ĐIỆN THOẠI</h1>
                            <p>
                                 <a href="#" class="icon">
                                    <img src="images/appstore.png" alt="" width="145">
                                </a>
                                <a href="#" class="icon">
                                    <img src="images/playstore.png" alt="" width="145">
                                </a> 
                            </p>
                        </div>
                 </div>
            </div>
            <div class="footer-mid">
                <div class="footer-content-mid">
                    <div class="address">
                        <div class="address-information">
                            <p class="address-title small-text">
                                <b>Địa chỉ văn phòng:</b>
                                52 Út Tịch ,Phường 4, Quận Tân Bình,thành phố Hồ Chí Minh
                            </p>
                            <p class="address-text small-text">
                                Tiki nhận đặt hàng trực tuyến và nhận giao hàng tận nơi , chưa hỗ trợ mua và nhận hàng trực tiếp tại van phòng hoặc trung tâm xử lý đơn hàng
                            </p>  
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </div>

      <!-- boostrap.js -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script> 
    <script src="js/bootstrap.min.js"></script>
        
</body>
</html>

