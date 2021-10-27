<?php
    include('lib_db.php');
    $p = isset($_REQUEST["p"]) ? $_REQUEST["p"] * 1 : 1;
	if ( $p < 1) return ;
    $sql = "select * from product_category";
    $category_list = select_list($sql);

    $nop = 6;
    $offset = $nop * ($p-1);
    $sql = "select * from detail where category_id =1 limit {$nop} offset {$offset}";
    $manage_list = select_list($sql);

    
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
        <link rel="stylesheet" href="./css/manager.css"> 
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script> 	
        
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
        <div class="container-post">
            <h1 class='title-manager'>Trang quản lý sản phẩm</h1>
            <button type="button" class="btn btn-primary add-post-btn" data-toggle="modal" data-target="#addPostModal">
                Thêm bài
            </button>
            <div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="addPostModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPostModalLabel">Thêm bài</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="add-post.php" method="post"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="add-post-title">Title</label>
                                    <input type="text" class="form-control" id="add-post-title" name='add-post-title' placeholder="Enter title ...">
                                </div>
                                <div class="form-group">
                                    <label for="add-post-description">Description</label>
                                    <textarea class="form-control" id="add-post-description" name='add-post-description' placeholder="Enter description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="add-post-price">current_price</label>
                                    <textarea class="form-control" id="add-post-price" name='add-post-price' placeholder="Enter description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="add-post-cost">cost</label>
                                    <textarea class="form-control" id="add-post-cost" name='add-post-cost' placeholder="Enter description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="add-post-discount">discount</label>
                                    <textarea class="form-control" id="add-post-price" name='add-post-discount' placeholder="Enter description ..."></textarea>
                                </div>
                                <label for="add-post-category">Category</label>
                                <select class="form-control" id="add-post-category" name='add-post-category'>
                                    <?php foreach($category_list as $category){ ?>
                                        <option value="<?php echo $category["id"] ?>"><?php echo $category["name"] ?></option>
                                    <?php } ?>
                                </select></br>
                                <div class="form-group upload-btn-wrapper">
                                    <label for="add-post-feature-image">Ảnh:</label>
                                    <button class='upload-btn-custom'>Đẩy ảnh lên</button>
                                    <input type="file" id="add-post-feature-image" name='add-post-feature-image'>
                                    <img id='before-add-post-img' src='#' alt='No file chosen' class='img-upload'/>
                                </div></br>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Thêm bài</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Current_price</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category_id</th>
                        <th colspan="2">Manager</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($manage_list as $post){?>
                        <tr>
                            <th scope="row"><?php echo $post["id"] ?></th>
                            <td><?php echo $post["title"] ?></td>
                            <td><?php echo $post["description"] ?></td>
                            <td><?php echo $post["current_price"] ?></td>
                            <td><?php echo $post["cost"] ?></td>
                            <td><?php echo $post["discount"] ?></td>
                            <td><?php echo $post["image"] ?></td>
                            <td><?php echo $post["category_id"] ?></td>
                            <td>
                              <!-- truyen giá trị cho hàm showedit -->
                                <button class="btn btn-primary add-post-btn"
                                 onclick='showEditModal(`<?php echo $post["id"] ?>`,
                                 `<?php echo $post["title"] ?>`,
                                 `<?php echo $post["description"] ?>`,
                                 `<?php echo $post["current_price"] ?>`,
                                 `<?php echo $post["cost"] ?>`,
                                 `<?php echo $post["discount"] ?>`,
                                 `<?php echo $post["image"] ?>`,
                                 `<?php echo $post["category_id"] ?>`,
                                 )'>
                                    Sửa
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-primary add-post-btn" onclick='showDeleteModal(`<?php echo $post["id"] ?>`)'>    
                                    Xóa
                                </button>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
              <!-- modal-edit -->
            <div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="editPostModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPostModalLabel">Sửa bài</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hideEditModal()">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="edit-post.php" method="post"  enctype="multipart/form-data">
                                <input type='hidden' name='edit-post-id' id='edit-post-id'>
                                <div class="form-group">
                                    <label for="edit-post-title">Title</label>
                                    <input type="text" class="form-control" id="edit-post-title" name='edit-post-title' placeholder="Enter title ...">
                                </div>
                                <div class="form-group">
                                    <label for="edit-post-description">Description</label>
                                    <textarea class="form-control" id="edit-post-description" name='edit-post-description' placeholder="Enter description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-post-price">current_price</label>
                                    <textarea class="form-control" id="edit-post-price" name='edit-post-price' placeholder="Enter description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-post-cost">cost</label>
                                    <textarea class="form-control" id="edit-post-cost" name='edit-post-cost' placeholder="Enter description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-post-discount">discount</label>
                                    <textarea class="form-control" id="edit-post-discount" name='edit-post-discount' placeholder="Enter description ..."></textarea>
                                </div>
                                <label for="edit-post-category">Category</label>
                                <select class="form-control" id="edit-post-category" name='edit-post-category'>
                                    <?php foreach($category_list as $category){ ?>
                                        <option value="<?php echo $category["id"] ?>"><?php echo $category["name"] ?></option>
                                    <?php } ?>
                                </select></br>
                                <div class="form-group upload-btn-wrapper">
                                    <label for="edit-post-feature-image">ảnh:</label>
                                    <button class='upload-btn-custom'>Đẩy ảnh lên</button>
                                    <input type="file" id="edit-post-feature-image" name='edit-post-feature-image'>
                                    <img id='before-edit-post-img' src='#' alt='No file chosen' class='img-upload'/>
                                    <input type='hidden' id='edit-post-img-name' name='edit-post-img-name'/>
                                </div></br>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hideEditModal()">Đóng</button>
                                <button type="submit" class="btn btn-primary">Sửa Bài</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal delete -->
            <div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="deletePostModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deletePostModalLabel">Delete Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hideDeleteModal()">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class='delete-question'>Bạn có đồng ý xóa bài không ? </p>
                            <form action="delete-post.php" method="post"  enctype="multipart/form-data">
                                <input type='hidden' name='delete-post-id' id='delete-post-id'>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hideDeleteModal()">Đóng</button>
                                <button type="submit" class="btn btn-primary">Xóa Bài</button>
                            </form>
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
    </div>
</body>
<script src="js/modal.js"></script>
</html>