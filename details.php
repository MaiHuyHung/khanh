<?php
    include('lib_db.php');
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	if ($id <  1) return ;
    $sql = "select * from detail where id = {$id}";
	$detail_product = select_one($sql);

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
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/detail.css">
      	
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-top">
                <div class="logo">
                    <a href="index.php"><img src="images/tiki.png" alt=""></a>
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
                        <a href="list-product.php?id=<?php echo $category['id'] ?>&p=1">
                                                        <?php echo $category['name'] ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="sell-wrapper">
                    <div class="sell">
                            <span>
                                 <i class="fa-solid fa-shop"></i> Bán hàng cùng tiki
                            </span>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <div class='detail-top'>
        <div class='detail-container'>
            <div class='detail-item'>
                 <span>Trang chủ <i class="fa-solid fa-angle-right"></i></span>
            </div>
            <div class='detail-item'>
                 <span>Thực phẩm tươi</span>
            </div>
        </div>
    </div>
    <div class='detail-body'>
        <div class='detail-content'>
            <div class='detail-image'>
                <picture><img src="<?php echo $detail_product['image'] ?>" alt=""></picture>
            </div>
            <div class='divide'></div>
            <div class='detail-content'>
                <div class='title-content'>
                    <h4>
                        <div class='icon-content'>
                           <img src="images/tikingon.jpg" alt="Ảnh tikingon">
                           <?php echo $detail_product['title'] ?>
                        </div>
                    </h4>
                    <div class='body-content'>
                        <div class='left-content'>
                            <div class='price-and-discount'>
                                <div class='price-product'>
                                    <div class='current-price'><?php echo $detail_product['current_price'] ?></div>
                                    <div class='cost'><?php echo $detail_product['cost'] ?></div>
                                    <div class='discount-product'><?php echo $detail_product['discount'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='description-product'>Mô Tả Sản Phẩm:
                        <div class='description-content'>
                            <p><?php echo $detail_product['description'] ?></p>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </div>

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
</body>
</html>    	