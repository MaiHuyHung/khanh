<?php
    include('lib_db.php');
	include("util.php");
    $sql = "select * from detail";
    $post_list = select_list($sql);
    $all_post_list = select_list($sql);
    $sql = "select * from product_category";
    $category_list = select_list($sql);
    /*tìm id lớn nhất trong bảng*/
    $maxId = null;
    for ($i = 0; $i < count($post_list); $i++)
    {
        if ($maxId == null){
            $maxId = $post_list[$i]["id"];
        }
        else {
            if ($post_list[$i]["id"] > $maxId){
                $maxId = $post_list[$i]["id"];
            }
        }
    }
	$data = array();
    $id = $maxId + 1;
    $title = isset($_REQUEST["add-post-title"]) ? $_REQUEST["add-post-title"] : "No Title";
	$description = isset($_REQUEST["add-post-description"]) ? $_REQUEST["add-post-description"] : "No Description";
    $current_price = isset($_REQUEST["add-post-price"]) ? $_REQUEST["add-post-price"] : "No Current_price";
    $cost = isset($_REQUEST["add-post-cost"]) ? $_REQUEST["add-post-cost"] : "No cost";
    $discount = isset($_REQUEST["add-post-discount"]) ? $_REQUEST["add-post-discount"] : "No discount";
    $category_id = isset($_REQUEST["add-post-category"]) ? $_REQUEST["add-post-category"] : 0;
	$img = upload_file_by_name("add-post-feature-image");
	//echo "img=[{$img}]";exit();
    /*gán data cho các trường trong sql*/
	$data["id"] = $id;
	$data["title"] = $title;
	$data["description"] = $description;
    $data["current_price"] = $current_price;
    $data["cost"] = $cost;
    $data["discount"] = $discount;
	$data["category_id"] = $category_id;
	$data["image"] = $img;
	$tbl = "detail";
	$sql = data_to_sql_insert($tbl, $data);
	//print_r($sql);exit();
	$ret = exec_update($sql);
	//print_r($ret);exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                    <a href="#">cá hồi</a>
                    <a href="#">phô mai</a>
                    <a href="#">mozzarella</a>
                    <a href="#">bào sợi</a>
                    <a href="#">pizza4p</a>
                    <a href="#">rau củ quả</a>
                    <a href="#">thịt heo </a>
                    <a href="#">sầu riêng</a>
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
    <div class="container content">
        <div class="message-add-post">
            <p>
                Thêm bài thành công , quay về trang  <a href='/project/details.php?id=<?php echo $id ?>&category_id=<?php echo $category_id ?>'>chi tiết</a> hoặc quay về <a href='/project/manager.php'>Trang quản lý bài viết</a>
            </p>
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
    </div>
        
</body>>
</html>