-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 05:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `current_price` varchar(15) NOT NULL,
  `cost` varchar(15) NOT NULL,
  `discount` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `title`, `image`, `current_price`, `cost`, `discount`, `description`, `category_id`) VALUES
(2, '\"[Chỉ giao HCM] Ba Chỉ Heo Có Da DTP -1KG\"', 'images/detail1.jpg', '115.000 đ', '200.000đ', '-43%', 'Ba rọi heo là khúc thịt nằm ở tảng bụng của heo, đã được loại bỏ xương sườn hoàn toàn, chỉ còn phần sụn mềm. Khúc thịt này gọi là ba rọi vì khi cắt ngang sẽ thấy được thịt và mỡ xen kẽ 3 lớp với nhau, đây là thịt ba rọi loại A hảo hạng vì tỷ lệ nạc rất cao nhưng vẫn giữ được độ mềm ngon và vị thơm béo của miếng thịt. Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 1),
(1, 'Sườn sụn non heo Ba Lan - 500g', 'images/detail2.jpg', '99.000 đ', '135.000đ', '-27%', 'Rã đông tự nhiên từ 20-25 phút. Chế biến trước khi dùng: xào, kho, rang, hầm nấu canh hoặc chế biến các món tùy thích. Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu.', 1),
(4, '[Chỉ giao HCM]-Rau muống(1kg)-được bán bởi TiKiNgon', 'images/detail3.jpg', '28.000 đ', '39.000đ', '-28%', 'Rau muống là loại giống cây thân thảo, mọc bò trên mặt nước hoặc trên đất bùn. Rau muống có thân dài, rỗng. Với giống rau muống mọc bò dưới nước, tại mỗi khớp sẽ có rễ ngắn bám xung quanh thân cây. Giá trị dinh dưỡng có trong rau muống gồm có vitamin A, B, C, canxi, phospho, các chất dinh dưỡng và đặc biệt là hàm lượng chất sắt dồi dào, phù hợp với những người có thể trạng thiếu sắt, muốn bổ sung thêm sắt.', 1),
(3, '[Chỉ giao TPHCM] Sườn non heo DTP - 2kg', 'images/detail4.jpg', '139.000 đ', '210.000đ', '-34%', 'Ba rọi heo là khúc thịt nằm ở tảng bụng của heo, đã được loại bỏ xương sườn hoàn toàn, chỉ còn phần sụn mềm. Khúc thịt này gọi là ba rọi vì khi cắt ngang sẽ thấy được thịt và mỡ xen kẽ 3 lớp với nhau, đây là thịt ba rọi loại A hảo hạng vì tỷ lệ nạc rất cao nhưng vẫn giữ được độ mềm ngon và vị thơm béo của miếng thịt. Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 2),
(14, '[Chỉ giao HCM] Thịt Heo Xay DTP - 500Gr', 'images/detail5.jpg', '75.000 đ', '120.000đ', '-38%', 'Thịt xay từ nạc dăm heo\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 2),
(15, '[Chỉ giao HCM] Nạc Đùi Heo DTP - 1KG', 'images/detail6.jpg', '75.000 đ', '220.000đ', '-45%', 'Nạc đùi heo được lọc từ hai bên đùi heo, đã lọc bỏ xương, da và mỡ thừa. Khúc thịt đùi heo chất lượng cao có tỷ lệ nạc nhiều, mềm mại, mùi thơm và vị ngọt đặc trư', 2),
(25, 'Lạp Xưởng Tươi Cai Lậy 500gr', 'images/detail7.jpg', '109.000 đ', '320.000đ', '-38%', 'LẠP XƯỞNG TƯƠI CAI LẬY ️ Được nhập trực tiếp từ bếp 20 năm kinh nghiệm lạp xưởng tươi . Cam kết chất lượng 100% không phẩm màu hoá chất nên khách vui lòng bảo quản tủ mát 2 tuần hoặc tủ đông để được lâu hơn ạ . màu hồng và mùi thơm của lạp xưởng là từ rượu mai quế lộ . Sự khác biệt tạo nên hương vị đặc trưng của lạp xưởng ngon là đây .', 3),
(26, 'Bánh mì tươi đặc ruột - 5 ổ/ gói', 'images/detail8.jpg', '45.000 đ', '49.000đ', '-8%', 'Bánh mì tại Vua Cua là loại bánh mì chiên đặc biệt, được làm thủ công 100% tại bếp trung tâm với công thức đặc biệt, cùng những nguyên liệu chất lượng nhất tạo nên loại bánh mì được thực khách cực kì yêu thích tại Vua Cua.', 3),
(5, '[Chỉ giao TPHCM]-chanh bông tím Bến tre nhiều nước', 'images/detail9.jpg', '28.000 đ', '119.000đ', '-76%', 'Công dụng:\r\nChứa rất nhiều hợp chất Phytochemica, axit Phonolic và Flavonoid. Các chất này sẽ chống lại các tế bào ung thư, ngăn không cho chúng phát triển\r\nHỗ trợ tiêu hóa\r\nPhương pháp giảm cân tự nhiên\r\nTốt cho phụ nữ mang thai', 1),
(6, '[Chỉ giao HCM] - Cà rốt - được bán bởi TikiNGON', 'images/detail10.jpg', '42.000 đ', '55.000đ', '-24%', 'Cà rốt chứa hàm lượng vitamin A, C, canxi, sắt và chất xơ dồi dào mang đến rất nhiều lợi ích cho sức khỏe. Thực phẩm này bắt đầu được biết đến vào những năm 900 trước Công nguyên và đang được ưa chuộng trên toàn cầu.', 1),
(7, '[Chỉ giao HCM] - Bí Đao (trái 400gr - 600gr) - được bán bởi TikiNGON ', 'images/detail11.jpg', '18.000 đ', '23.000đ', '-22%', 'Bí đao có thể cung cấp được lượng vitamin C cũng như vitamin B2 đáng kể cho cơ thể. Không chỉ vậy, trong bí đao còn có chứa hàm lượng chất xơ, kẽm, sắt, phốt pho, kali, các loại vitamin và khoáng chất khác cũng mang lại rất nhiều lợi ích cho sức khỏe.', 1),
(12, '[chỉ giao TPHCM]-sầu riêng rì 6 nguyên múi 500gr', 'images/detail13.jpg', '159.000 đ', '169.000đ', '-6%', 'Sầu Riêng Ri6 được tách từ trái tươi 100% . Đã chọn lọc múi để đóng hộp . Trước khi giao hàng đã cấp đông nhanh để tránh trường hợp shipper giao hàng nắng nóng sầu riêng tươi nên rất dễ bị hư hỏng ạ .', 1),
(13, '[Chỉ giao HCM] Đùi Tỏi Gà DTP - 1KG', 'images/detail14.jpg', '75.000 đ', '110.000 đ', '-32%', 'à phần đùi đã được lọc bỏ phần ức trên chỉ còn lại phần đùi nên rất dễ sử dụng và chế biến nhiều món ăn vô cùng hấp dẫn', 1),
(14, '[Chỉ giao HCM] Thịt Heo Xay DTP - 500Gr', 'images/detail5.jpg', '75.000 đ', '120.000đ', '-38%', 'Thịt xay từ nạc dăm heo\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 2),
(15, '[Chỉ giao HCM] Nạc Đùi Heo DTP - 1KG', 'images/detail6.jpg', '75.000 đ', '220.000đ', '-45%', 'Nạc đùi heo được lọc từ hai bên đùi heo, đã lọc bỏ xương, da và mỡ thừa. Khúc thịt đùi heo chất lượng cao có tỷ lệ nạc nhiều, mềm mại, mùi thơm và vị ngọt đặc trư', 2),
(16, 'Bắp Giò Heo AsterLAM 500g - Cắt khoanh 2cm', 'images/detail15.jpg', '59.000 đ', '100.000 đ', '-48%', 'Bắp Giò Heo AsterLAM 500g được nhập khẩu trực tiếp từ Đức. Hộp sản phẩm 500g đóng gói chân không đảm bảo an toàn vệ sinh thực phẩm', 2),
(17, '[Chỉ giao HCM] - BA RỌI HEO CÓ DA RÚT SƯỜN ', 'images/detail16.jpg', '75.000 đ', '90.000đ', '-17%', 'Ba rọi heo rút sườn là phần thịt ở hai bên sườn heo. Thông thường, ba rọi rút sườn gồm 5 lớp: lớp da ngoài cùng, lớp mỡ, lớp thịt mỏng, lớp mỡ và cuối cùng là lớp thịt dày. Lớp thịt dày cuối cùng thường có xương sườn và phần xương sườn được rút ra nên gọi là ba rọi rút sườn. Phần thịt rút sườn ăn rất giòn, ngậy và ngon.', 2),
(27, 'No Title', '', 'No Current_pric', 'No cost', 'No di', 'No Description', 0),
(28, 'No Title', '', 'No Current_pric', 'No cost', 'No di', 'No Description', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(16) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(32) NOT NULL,
  `image` text NOT NULL,
  `category_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `category_id`) VALUES
(2, '[Chỉ giao TPHCM] Ba chỉ heo có da DTP - 1kg ', '115.000 đ', 'images/chuyen-muc2.jpg', 1),
(3, '[Chỉ giao TPHCM] Sườn non heo DTP - 2kg', '139.000 đ', 'images/chuyen-muc3.png', 2),
(4, '[Chỉ giao TPHCM] Rau muống(1kg)-được bán bởi Tiki', '28.000 đ', 'images/chuyen-muc4.png', 1),
(1, 'Sườn sụn non heo ba lan(3kg) - được bán bởi Tikingon', '99.000 đ', 'images/chuyen-muc1.png', 1),
(5, '[Chỉ giao TPHCM]-chanh bông tím Bến tre nhiều nước', '26.000 đ', 'images/chuyen-muc51.png', 1),
(6, '[Chỉ giao TPHCM]-cà rốt được bán bởi tiki ngon', '42.000 đ', 'images/chuyen-muc6.png', 1),
(7, '[Chỉ giao TPHCM]-Bí đao(trái 400gr - 600gr) được bán bởi tikingon', '18.000 đ', 'images/chuyen-muc7.png', 1),
(8, '[chỉ giao TPHCM]-khoai tây (1kg)-được bán bởi Tikingon', '39.500 đ', 'images/chuyen-muc8.png', 1),
(9, '[chỉ giao TPHCM]-bắp cải (1kg)-được bán bởi Tikingon', '26.500 đ', 'images/chuyen-muc9.png', 1),
(10, '[chỉ giao TPHCM]-rau dền (1kg)-được bán bởi Tikingon', '28.000 đ', 'images/chuyen-muc10.png', 1),
(11, '[chỉ giao TPHCM]-cải bẹ xanh(1kg)-được bán bởi Tikingon', '159.000 đ', 'images/chuyen-muc11.png', 1),
(12, '[chỉ giao TPHCM]-sầu riêng rì 6 nguyên múi 500gr', '159.000 đ', 'images/chuyen-muc12.png', 1),
(13, '[chỉ giao TPHCM]-đùi tỏi gà DTP - 1kg-được bán bởi Tikingon ', '75.500 đ', 'images/chuyen-muc13.png', 1),
(14, '[chỉ giao TPHCM] Thịt heo xay DTP tươi sạch - 500gr', '75.000 đ', 'images/chuyen-muc14.png', 2),
(15, '[Chỉ giao TPHCM]-nạc đùi heo tươi sạch DTP (1kg)', '75.000 đ', 'images/chuyen-muc15.png', 2),
(16, 'bắp giò heo AsterLam tươi sống 500g-cắt khoanh 2cm', '59.000 đ', 'images/chuyen-muc16.png', 2),
(17, '[chỉ giao TPHCM]-ba rọi heo có da rút sườn-[giao siêu tốc]', '75.000 đ', 'images/chuyen-muc17.png', 2),
(18, '[chỉ giao TPHCM] cốt lết heo cắt lát DTP-(1kg)', '199.000 đ', 'images/chuyen-muc18.png', 2),
(19, 'thịt ba rọi rút sườn góc bếp bà béo được nhập khẩu từ nga', '128.150 đ', 'images/chuyen-muc19.png', 2),
(20, '[Chỉ giao TPHCM] thịt thăn ngoại bò úc - 500gr', '217.000 đ', 'images/chuyen-muc20.png', 2),
(21, '[Chỉ giao TPHCM] sườn sụn heo đưa từ mỹ tươi rói - 1kg', '118.000 đ', 'images/chuyen-muc21.png', 2),
(22, '[Chỉ giao TPHCM] sườn heo mỹ - 1kg - được bản bởi Tikingon', '200.000 đ', 'images/chuyen-muc22.png', 2),
(23, '[Chỉ giao TPHCM] thịt vịt cỏ quê (vịt nuôi thả ăn đồng tại khánh hòa)', '120.000', 'images/chuyen-muc23.png', 2),
(24, '[Chỉ giao TPHCM] - đùi gà đông lạnh 500gr - bán bởi Tikingon', '49.000 đ', 'images/chuyen-muc24.png', 2),
(25, 'Lạp xưởng tươi cai lạy 500gr [hàng Việt Nam chất lượng cao]', '109.000 đ', 'images/chuyen-muc25.png', 3),
(26, 'Bánh mì tươi đặc ruột - 5 ổ/gói - được bán bởi Tikingon', '45.000 đ', 'images/chuyen-muc26.png', 3),
(27, '[Chỉ giao TPHCM] bánh bao xá xíu trứng muối 4000 LC 4C ST', '42.600 đ', 'images/chuyen-muc27.png', 3),
(28, '[Chỉ giao TPHCM] bánh bao nhân thịt trứng cút 4000 LC 4C ', '42.600 đ', 'images/chuyen-muc28.png', 3),
(29, '[Chỉ giao TPHCM] 1 KG cá ngừ ồ phú yên tươi IQF-được bán bởi Tikingon', '89.000 đ', 'images/chuyen-muc29.png', 3),
(30, '[Chỉ giao TPHCM] cá viên GT LC 500G 80V - được bán bởi Tikingon', '38.000 đ', 'images/chuyen-muc30.png', 3),
(31, '[Chỉ giao TPHCM] bánh bao nhân trứng muối phô mai LC 400G 4C', '42.600 đ', 'images/chuyen-muc31.png', 3),
(32, '(Chỉ giao TPHCM) 20 cái bánh bột lọc bọc tôm đặc sản huế', '88.000 đ', 'images/chuyen-muc32.png', 3),
(33, '[Chỉ giao TPHCM] bánh bao nhân kim sa SLL-được bán bởi Tikingon ', '39.200 đ', 'images/chuyen-muc33.png', 3),
(34, '[Chỉ giao TPHCM] bánh bao hải sản( túi 4 cái )-đảm bảo ngon', '137.000 đ', 'images/chuyen-muc34.png', 3),
(35, '[Chỉ giao TPHCM] Kho cá lóc 1 nắng 500G-đảm bảo ngon ', '110.600 đ', 'images/chuyen-muc35.png', 3),
(36, '[Chỉ giao TPHCM] Trứng gà non (hộp 500g)-được bán bởi Tikingon', '55.000 đ', 'images/chuyen-muc36.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(16) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(1, 'Tất cả Thịt rau củ'),
(2, 'thịt'),
(3, 'hàng đông lạnh'),
(4, 'trái cây'),
(5, 'hải sản'),
(6, 'gạo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
