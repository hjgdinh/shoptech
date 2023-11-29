-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql109.byetcluster.com
-- Generation Time: Nov 29, 2023 at 03:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezyro_35380159_do_an`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'laptop'),
(2, 'other'),
(3, 'dien thoai');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(10) NOT NULL,
  `ID_User` int(5) NOT NULL DEFAULT 0,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `ID_User`, `Name`, `Email`, `Phone`, `Description`) VALUES
(57, 52, 'hong nguyen', 'a@gmail.com', '01284897241', 'oke'),
(62, 69, 'hieu nguyen', 'nv@gmail.com', '039803704', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `User_Id` int(5) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` int(1) NOT NULL DEFAULT 0,
  `Pttt` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `Product_remaining` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `User_Id`, `Product_Id`, `Image`, `Name`, `Price`, `Quantity`, `Time`, `Status`, `Pttt`, `Product_remaining`) VALUES
(825, 58, 4, 'images/product/laptop/asus_tuf.jpg', 'Laptop Asus TUF Gaming FX5', '15990000', 3, '2023-11-20 13:59:48', 0, '1', ''),
(826, 52, 8, 'images/product/phukien/airpods_3.jpg', 'Tai nghe Bluetooth AirPods 3', '479000', 3, '2023-11-20 14:03:45', 1, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Product_Name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Image2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Category_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Product_Name`, `Price`, `Quantity`, `Image`, `Image2`, `Description`, `Category_Id`) VALUES
(2, 'Laptop Acer Aspire 7 Gaming A716', '15590000', 100, 'images/product/laptop/LapAcerAspire.jpg', 'https://cdn.tgdd.vn/Products/Images/44/268775/Slider/vi-vn-acer-aspire-7-gaming-a715-42g-r4xx-r5-nhqaysv008-4.jpg', '- Bạn nghĩ đến năm 2022 thì CPU Intel Gen 10 sẽ không đủ khả năng đáp ứng nhu cầu xử lý công việc? Laptop Acer Aspire 7 Gaming A715 75G 58U4 i5 với vẻ ngoài mạnh mẽ và cấu hình ấn tượng, hứa hẹn sẽ đem đến những giây phút chiến game hào hứng với mức giá dễ tiếp cận dành cho game thủ.<br>- Chiến game ổn định, mượt mà cùng dòng chip thế hệ 10 <br>- Laptop Acer Aspire mang trong mình CPU Intel Core i5 10300H kết hợp với card màn hình rời NVIDIA GTX 1650 4 GB, máy sẽ chạy thoải mái với tác vụ hằng ngày như Word, Excel,... nên mình sẽ thực hiện một số bài trải nghiệm thực tế, chơi thử một vài tựa game để xem chiếc máy này thể hiện như thế nào nhé.                                        ', 1),
(3, 'Laptop Lenovo IdeaPad 3 15IML05 ', '9190000', 90, 'images/product/laptop/lenovo_idea_pad.jpg', 'https://cdn.tgdd.vn/Products/Images/44/279905/Slider/vi-vn-lenovo-ideapad-3-15iml05-i3-81wb01dyvn-1.jpg', '- Thiết kế hiện đại, thanh lịch cùng những thông số kỹ thuật ổn định sẽ là các ưu điểm mà laptop Lenovo IdeaPad 3 15IML05 i3 sở hữu nhằm đáp ứng tốt mọi tác vụ học tập - văn phòng cơ bản cho học sinh, sinh viên hay nhân viên văn phòng. <br>• Bộ vi xử lý Intel Core i3 10110U cùng card tích hợp Intel UHD Graphics giải quyết mượt mà các tác vụ văn phòng nhẹ nhàng trên Microsoft Office.<br>• Laptop RAM 4 GB hỗ trợ nâng cấp tối đa 12 GB RAM mang đến khả năng đa nhiệm ổn định. Cải thiện tốc độ đọc, ghi nhờ ổ cứng 256 GB SSD.<br>• Laptop Lenovo IdeaPad màn hình 15.6 inch cùng tấm nền IPS cho góc nhìn rộng rãi. Công nghệ Anti Glare cho chất lượng hiển thị hình ảnh rõ nét, giảm thiểu hiện tượng bị chói.<br>• Dữ liệu cá nhân được bảo mật an toàn hơn nhờ công tắc khóa camera hiện đại cùng con chip TPM 2.0 được trang bị trên laptop.<br>• Đắm chìm vào không gian giải trí sống động trên laptop Lenovo với hệ thống âm thanh đa chiều từ công nghệ Dolby Audio.    ', 1),
(4, 'Laptop Asus TUF Gaming FX5', '15990000', 100, 'images/product/laptop/asus_tuf.jpg', 'https://cdn.tgdd.vn/Products/Images/44/279259/Slider/vi-vn-asus-tuf-gaming-fx506lhb-i5-hn188w-4.jpg', '- Nếu bạn đang tìm kiếm một chiếc laptop gaming nhưng vẫn sở hữu một mức giá phải chăng thì laptop Asus TUF Gaming FX506LHB i5 sẽ là sự lựa chọn đáng cân nhắc với card đồ họa rời NVIDIA GeForce GTX mạnh mẽ cùng phong cách thiết kế cứng cáp, độc đáo.<br> • Chạy mượt mà các ứng dụng văn phòng trên Word, Excel, PowerPoint,... đến chiến những con game đình đám nhờ bộ vi xử lý Intel Core i5 10300H kết hợp với card đồ họa rời NVIDIA GeForce GTX 1650 4 GB mạnh mẽ. <br>• Laptop Asus đa nhiệm mượt mà trên nhiều cửa sổ Chrome cùng lúc nhờ bộ nhớ RAM 8 GB, bên cạnh đó còn mang đến tốc độ khởi động máy và ứng dụng nhanh chóng với ổ cứng SSD 512 GB.   <br>• Laptop có kích thước màn hình 15.6 inch cùng tần số quét 144 Hz mang đến những trải nghiệm chiến game cực đỉnh, không bị giật lag hay xé hình khi chơi những tựa game có tốc độ cao.<br>• Laptop Asus TUF Gaming được bao bọc bởi lớp vỏ nhựa màu đen huyền bí, trọng lượng 2.3 kg cho phép bạn chiến game ở mọi không gian.<br>', 1),
(5, 'Laptop Acer Nitro 5 Gaming', '19190000', 216, 'images/product/laptop/acer_nitro.jpg', 'https://cdn.tgdd.vn/Products/Images/44/263980/Slider/vi-vn-acer-nitro-5-gaming-an515-45-r6ev-r5-nhqbmsv006-5.jpg', '- Phá cách với diện mạo mạnh mẽ đến từ laptop Acer Nitro 5 Gaming AN515 45 R6EV R5 5600H mang đến cho người dùng hiệu năng ổn định, hỗ trợ bạn trong mọi tác vụ hằng ngày hay chiến những trận game cực căng một cách mượt mà.<br>- Kiểu dáng nổi bật, thu hút mọi ánh nhìn<br>- Laptop Acer Nitro với tính bền bỉ vượt bậc khi được trang bị lớp vỏ nhựa chắc chắn cùng trọng lượng không quá nặng cho một chiếc laptop gaming 2.2 kg và dày 23.9 mm, sẵn sàng cùng bạn đi đến bất kỳ đâu, phục vụ tốt cho cả nhu cầu công việc hay giải trí, cho phép bạn chiến game ở khắp mọi nơi trong cuộc hành trình.', 1),
(6, 'Laptop Lenovo Gaming Legion 5', '33990000', 206, 'images/product/laptop/lenovo_gaming.jpg', 'https://cdn.tgdd.vn/Products/Images/44/272005/Slider/vi-vn-lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-3.jpg', '- Phong cách thiết kế độc đáo, trẻ trung cùng hiệu năng mạnh mẽ vượt trội của card màn hình NVIDIA RTX hội tụ trong chiếc laptop Lenovo Gaming Legion 5 15ITH6 i7 hứa hẹn sẽ cân mọi tựa game đình đám cũng như sẵn sàng hỗ trợ bạn xử lý các tác vụ nặng.<br>- Hiệu năng mạnh mẽ vượt trội cân mọi tác vụ <br>- Đầu tiên là đến với con game bắn súng quốc dân Battlefield 1, máy vận hành mượt mà với trung bình 75 FPS. Ở đây chúng ta sẽ thấy CPU Intel Core i7 11800H hiệu năng cao chỉ phải hoạt động tầm 42% công suất, card màn hình NVIDIA RTX 3050Ti cũng chỉ hơi mạnh hơn CPU một xíu với 69% công suất.', 1),
(7, 'Laptop Dell Gaming G15', '20990000', 316, 'images/product/laptop/dell_gaming.jpg', 'https://cdn.tgdd.vn/Products/Images/44/260170/Slider/dell-gaming-g15-5515-r5-p105f004cgr-01-1020x570.jpg', '- Mức giá dễ tiếp cận, thiết kế năng động, trẻ trung cùng hiệu năng mạnh mẽ đủ sức chiến các tựa game phổ biến là điều mà game thủ cần ở một chiếc laptop gaming, laptop Dell Gaming G15 5515 R5 (P105F004CGR) hoàn toàn có thể đáp ứng được những điều đó. <br>- Chơi game mượt mà cùng chip AMD<br>- Laptop Dell sở hữu CPU AMD Ryzen 5 5600H kết hợp với card đồ họa NVIDIA RTX 3050 4 GB giúp khả năng chơi game trơn tru. Trong lúc trải nghiệm, hầu hết khi chiến các tựa game trực tuyến như Liên Minh Huyền Thoại, CS:GO,... tình trạng giật lag thường xảy ra ở các dòng laptop gaming giá rẻ do máy thu bắt sóng internet yếu, tuy nhiên chiếc máy này đã vượt qua và chạy tốt, không ảnh hưởng đến trải nghiệm chơi game nhờ công nghệ Wi-Fi 6 (802.11ax).    ', 1),
(8, 'Tai nghe Bluetooth AirPods 3', '479000', 71, 'images/product/phukien/airpods_3.jpg', 'https://cdn.tgdd.vn/Products/Images/54/250701/airpods-3-hop-sac-khong-day-4.jpg', '- Kiểu dáng hiện đại, gọn đẹp, đeo thoải mái đến bất kỳ nơi nào. <br>- Âm thanh vòm sống động cùng Spatial audio và chip H1 mạnh mẽ.<br>- Kết nối không dây Bluetooth 5.0 mượt mà xa đến 10 m. <br>- Điều chỉnh âm thanh phù hợp ống tai của bạn nhờ hỗ trợ Adaptive EQ.<br>- Tai nghe cho thời gian nghe nhạc 6 giờ và thời gian sử dụng hộp sạc 24 giờ.<br>- Hỗ trợ sạc nhanh, cho thời gian sử dụng 1 giờ chỉ với 5 phút sạc.<br>- Hộp sạc hỗ trợ sạc không dây chuẩn Qi, tiện lợi khi sạc lại.<br>- Trang bị chuẩn chống nước IPX4, bảo vệ tai nghe an toàn dưới mưa nhỏ và mồ hôi.<br>- Sản phẩm chính hãng Apple, nguyên seal 100%.', 2),
(9, 'Bút cảm ứng Apple Pencil 2 MU8F2', '3110000', 730, 'images/product/phukien/apple_pencil_2.jpg', 'https://cdn.tgdd.vn/Products/Images/1882/237415/but-cam-ung-apple-pencil-2-apple-mu8f2-1-org.jpg', '- Thiết kế đơn giản tinh tế với gam màu trắng kích thước chiều dài 16.6 cm và trọng lượng 20.7 g.<br>- Kết nối không dây và được sạc bằng nam châm từ tính.<br>- Sạc pin ngay trên thiết bị Ipad, sạc đầy trong 45 phút, sử dụng đến 4 giờ.<br>- Công nghệ cảm ứng lực nhấn cho độ trễ thấp, độ nhạy và chính xác cao.<br>- Dễ dàng thao tác chuyển đổi công cụ bút bằng cảm ứng trên thân bút.', 2),
(10, 'Cáp Type-C 80 cm Apple MQ4', '1160000', 70, 'images/product/phukien/sac_typec.jpg', 'https://cdn.tgdd.vn/Products/Images/58/156780/cap-type-c-type-c-80cm-apple-mq4h2-3-org.jpg', '- Có khả năng truyền tải dữ liệu lên đến 40 Gbps và sạc với công suất tối đa 100W.- Kết nối tốt với adapter chuyển đổi, Macbook, Mac Mini,...<br>- Dây dài 0.8 m dễ dàng sự dụng mọi hoàn cảnh.<br>- 2 đầu Type-C có thể dùng để sạc thiết bị hay chia sẻ dữ liệu.<br>- Sản phẩm chính hãng nguyên seal 100%.', 2),
(11, 'Sạc 5W cho iPhone/iPad/iPod Trắng', '380000', 80, 'images/product/phukien/sac_5w.jpg', 'https://cdn.tgdd.vn/Products/Images/9499/229595/adapter-sac-5w-cho-iphone-ipad-ipod-apple-mgn13-1-org.jpg', '- Phù hợp với tất cả các dòng iPhone, iPad, iPod.<br>- Kết hợp thêm với dây cáp để sạc cho thiết bị khác.<br>- Đảm bảo 100% tương thích, không ảnh hưởng đến máy.<br>Sản phẩm chính hãng Apple, nguyên seal 100%.', 2),
(12, 'Sạc dự phòng Polymer 20.000 mAh', '950000', 50, 'https://cdn.tgdd.vn/Products/Images/57/229038/sac-du-phong-polymer-20000mah-type-c-xmobile-p69d-3-2.jpg\r\n', 'images/product/phukien/duphong_typec.jpg', '- Thiết kế đơn giản, màu đen thời thượng, phong cách<br>- Lớp vải Fabric phủ ngoài pin sạc dự phòng Polymer 20.000mAh Type C PD QC3.0 Xmobile PowerBox P69D đen tạo điểm nhấn sang trọng cho sản phẩm. Bên cạnh đó nó còn có tác dụng chống xước, chống bám vân tay, giữ cho sạc dự phòng luôn mới đẹp. Thiết kế cầm nắm gọn gàng, cất vào túi xách, tiện mang theo.<br>- Xmobile tích hợp cho sạc dự phòng 2 công nghệ hiện đại Power Delivery cho cổng kết nối Type C, Quick Charge 3.0 cho 2 cổng kết nối USB mang đến sự tương thích cao giữa thiết bị cần sạc và pin sạc dự phòng Xmobile, giúp sạc nhanh chóng, an toàn cho 3 thiết bị đồng thời.<br>- Khi sạc vào, bạn có sự lựa chọn giữa 2 cổng Micro USB và Type C (vừa là cổng sạc vào vừa là cổng sạc ra), sạc với adapter 5V - 2A cho thời gian đầy pin 13 - 14 tiếng.', 2),
(13, 'Tai nghe Bluetooth Kanen', '600000', 40, 'images/product/phukien/tainghe_kanen.jpg', 'https://cdn.tgdd.vn/Products/Images/54/202888/tai-nghe-bluetooth-kanen-k6-xam-gold-3-org.jpg', '- Thiết kế hiện đại, năng động, có thể gấp gọn khi không sử dụng.<br>- Khoảng cách kết nối xa đến 10 m qua công nghệ Bluetooth 4.1. <br>- Sử dụng liên tục trong 18 giờ, sạc đầy trong 2 giờ.<br>- Dễ dàng điều khiển qua giọng nói với Siri, Google Voice.', 2),
(14, 'Router Wifi chuẩn AC1200', '570000', 30, 'images/product/phukien/router_wf.jpg', 'https://cdn.tgdd.vn/Products/Images/4727/243589/bo-phat-wifi-router-chuan-ac1200-totolink-a720r-3-1-org.jpg', '- Router Wifi chuẩn AC1200 Totolink A710R Đen được làm từ chất liệu nhựa cứng cáp bảo vệ tốt các linh kiện bên trong, màu đen trung tính không quá nổi bật phù hợp lắp đặt ở nhiều không gian.<br>• Router giúp thiết bị kết nối một cách dễ dàng hơn nhờ được sử dụng băng tần kép chuẩn AC1200.<br>• Router Totolink sử dụng băng tầng kép với 300 Mbps trên băng tần 2.4 GHz và 867 Mbps trên băng tần 5 GHz giúp việc thu phát sóng rộng hơn, những thiết bị trong ngôi nhà của bạn đều thu được Wifi tốc độ cao.<br>• Công suất được khuếch đại lên tối đa, công nghệ Beamforming cải thiện hiệu suất Internet không dây và 4 anten 5dBi cho khả năng xuyên tường vượt trội, mở rộng độ phủ của sóng lên đến 20 m, bạn có thể kết nối Wifi ổn định ở bất kỳ vị trí trong căn hộ của mình.<br>• Router cho kết nối ổn định với số user truy cập tối đa là 60, thiết bị mạng này thích hợp với gia đình, văn phòng, quán ăn hay quán cà phê.<br>• Kết nối có dây với các thiết bị cực đơn giản thông qua 2 cổng LAN và 1 cổng WAN', 2),
(15, 'Bàn phím Gaming Asus TUF', '840000', 55, 'images/product/phukien/banphim_asus.jpg', 'https://cdn.tgdd.vn/Products/Images/4547/279466/co-day-gaming-asus-tuf-k1-2.jpg', '- Bàn phím có dây Gaming Asus TUF K1 với thiết kế có phần kê cổ tay tiện dụng, có thể tháo rời để mang lại sự thoải mái dài lâu.<br>• Bàn phím được trang bị các phím bấm có độ phản hồi êm ái với mỗi lần nhấn.<br>• Các phím bấm này được đặt trong một khung chống thấm nước 300 ml, được gia công bằng một lớp phủ chuyên dụng và được chứng nhận đáp ứng hoạt động trong môi trường khắc nghiệt.<br>• Bàn phím gaming được thiết kế với ghi nhận 19 phím bấm cùng lúc (NKRO), nhờ đó đảm bảo độ chính xác vượt trội và không bị bỏ lỡ lần nhấn phím nào.<br>• Bàn phím Asus có năm vùng chiếu sáng riêng biệt và các thanh RGB nổi bật ở cả hai bên bàn phím, người dùng có thể lựa chọn toàn bộ phổ màu để tùy chỉnh riêng từng vùng, nhờ đó giúp bạn điều khiển dàn máy của mình sáng theo đúng ý muốn.<br>• Núm chỉnh âm lượng chuyên dụng ở góc trên bên phải, Asus TUF K1 giúp bạn điều khiển âm thanh trong game một cách nhanh chóng và dễ dàng. Bạn có thể dễ dàng vặn núm mà vẫn bám sát từng hành động trên màn hình.<br>• Phần mềm ASUS Armoury Crate hợp nhất các cơ chế điều khiển hệ thống và đèn để bạn có thể nhanh chóng điều chỉnh các cài đặt thiết yếu trong một tiện ích duy nhất. ', 2),
(16, 'Điện thoại Samsung Galaxy S22', '27990000', 90, 'https://cdn.tgdd.vn/Products/Images/42/235838/Slider/2.ButSpen-1020x570.jpg', 'images/product/phone/samsung_galaxys22.jpg\r\n', '- Galaxy S22 Ultra 5G chiếc smartphone cao cấp nhất trong bộ 3 Galaxy S22 series mà Samsung đã cho ra mắt. Tích hợp bút S Pen hoàn hảo trong thân máy, trang bị vi xử lý mạnh mẽ cho các tác vụ sử dụng vô cùng mượt mà và nổi bật hơn với cụm camera không viền độc đáo mang đậm dấu ấn riêng.<br>- Sở hữu một diện mạo đầy nổi bật<br>- Galaxy S22 Ultra 5G được kế thừa form thiết kế từ những dòng Note trước đây của hãng đem đến cho bạn có cảm giác vừa mới lạ vừa hoài niệm. Trọng lượng của máy khoảng 228 g cho cảm giác cầm nắm đầm tay, khi cầm máy trần thì hơi có cảm giác dễ trượt<br>- Phần mặt lưng điện thoại được làm nhám nên hạn chế tốt việc bám dấu vân tay, có thiết kế cũng khá đơn giản nhưng vẫn toát lên vẻ sang trọng và cao cấp của chiếc máy. Cụm camera sau trên Galaxy S22 Ultra 5G được thiết kế trần tạo cảm giác gọn gàng và cũng tạo nên một điểm nhấn độc đáo cho chiếc máy.<br>- Có thể nói Galaxy S22 Ultra 5G chính là chiếc máy đầu tiên được tích hợp bút S Pen hoàn hảo trong một thân máy của dòng Galaxy S. Giờ đây, bạn có thể dễ dàng phác thảo, ghi chú lại những ý tưởng vô cùng nhanh chóng với độ trễ đã được cải thiện cho cảm giác viết vẽ vô cùng chân thật.', 3),
(17, 'Điện thoại Samsung Galaxy A13 4GB', '4390000', 77, 'https://cdn.tgdd.vn/Products/Images/42/262402/Slider/samsung-galaxy-a13-4g-pin-sac-1020x570.jpg', 'images/product/phone/ss_galaxya13.jpg', '- Nhằm mang trải nghiệm tốt hơn trên dòng sản phẩm giá rẻ, Samsung cho ra mắt Galaxy A13 4G với một hiệu năng ổn định, camera chụp ảnh sắc nét và viên pin khủng đáp ứng nhu cầu sử dụng cả ngày cho bạn cùng một mức giá trang bị cực kỳ phải chăng.<br>- Ngoại hình bóng bẩy<br>- Galaxy A13 có khung viền được hoàn thiện từ nhựa bóng mang đến cái nhìn mới mẻ, óng ánh khi cầm trên tay, tuy nhiên tình trạng bám dấu vân tay, mồ hôi vẫn sẽ xuất hiện trong lúc sử dụng, người dùng có thể trang bị ốp lưng cho máy nhằm khắc phục tình trạng trên cũng như hạn chế trầy xước trong lúc sử dụng.', 3),
(18, 'iPhone 13 Pro Max 128GB ', '28190000', 89, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-4-1.jpg', 'images/product/phone/iphone13.jpg', '- Điện thoại iPhone 13 Pro Max 128 GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.<br>- Thiết kế đẳng cấp hàng đầu<br>- iPhone mới kế thừa thiết kế đặc trưng từ iPhone 12 Pro Max khi sở hữu khung viền vuông vức, mặt lưng kính cùng màn hình tai thỏ tràn viền nằm ở phía trước.<br>- Điểm thay đổi dễ dàng nhận biết trên iPhone 13 Pro Max chính là kích thước của cảm biến camera sau được làm to hơn và để tăng độ nhận diện cho sản phẩm mới thì Apple cũng đã bổ sung một tùy chọn màu sắc Sierra Blue (màu xanh dương nhạt hơn so với Pacific Blue của iPhone 12 Pro Max).<br>- Máy vẫn tiếp tục sử dụng khung viền thép cao cấp cho khả năng chống trầy xước và va đập một cách vượt trội, kết hợp với khả năng kháng bụi, nước chuẩn IP68.', 3),
(19, 'Điện thoại Vivo Y15s ', '4390000', 87, 'images/product/phone/vivo_y15s.jpg', 'https://cdn.tgdd.vn/Products/Images/42/249720/Slider/vi-vn-vivo-y15s-2021-tongquan.jpg', '- Vivo vừa mang một chiến binh mới đến phân khúc tầm trung giá rẻ có tên Vivo Y15s, một sản phẩm sở hữu khá nhiều ưu điểm như thiết kế đẹp, màn hình lớn, camera kép, pin cực trâu và còn rất nhiều điều thú vị khác đang chờ đón bạn.<br>- Ngoại hình sang trọng, ấn tượng<br>- Vivo Y15s sở hữu nhiều điểm tương đồng với những \"người anh em\" Vivo Y15 của mình khi toàn bộ thân máy làm bằng Polymer cao cấp, thiết kế cong cạnh 3D và kiểu dáng mỏng nhẹ chỉ 8.28 mm đem lại cảm giác cầm máy trong tay khá thoải mái.<br>- Mặt lưng hoàn thiện với họa tiết kẻ sọc mờ với hai tùy chọn màu sắc Xanh Biển Sâu và Trắng có khả năng chuyển sáng xanh vô cùng đẹp mắt.', 3),
(20, 'OPPO Find X5 Pro 5G ', '30490000', 67, 'images/product/phone/oppo_findx5.jpg', 'https://cdn.tgdd.vn/Products/Images/42/250622/Slider/oppo-find-x5-pro637872833398214922.jpg', '- OPPO Find X5 Pro 5G có lẽ là cái tên sáng giá được xướng tên trong danh sách điện thoại có thiết kế ấn tượng trong năm 2022. Máy được hãng cho ra mắt với một diện mạo độc lạ chưa từng có, cùng với đó là những nâng cấp về chất lượng ở camera nhờ sự hợp tác với nhà sản xuất máy ảnh Hasselblad. <br>- Tỏa sáng với ngoại hình bắt mắt đầy sang trọng<br>- Điều làm mình mê hoặc ngay từ cái nhìn đầu tiên là mặt lưng hết sức bóng bẩy, với phiên bản màu đen thì mình hoàn toàn có thể sử dụng chiếc máy với công dụng tương tự như một chiếc gương soi tiện ích.', 3),
(21, 'Điện thoại Samsung Galaxy Z', '32990000', 86, 'images/product/phone/ss_galaxyz_fold3.jpg', 'https://cdn.tgdd.vn/Products/Images/42/226935/samsung-galaxy-z-fold-3-5-3.jpg', '- Samsung Galaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.<br>- Thiết kế nâng tầm smartphone màn hình gập<br>- Có thể thấy mẫu smartphone Galaxy Z Fold3 lần này vẫn giữ nguyên ngoại hình cùng cơ chế màn hình gập mở dạng quyển sách như của tiền nhiệm, \"hô biến\" chiếc smartphone thành một chiếc máy tính bảng mini một cách dễ dàng và ngược lại.       ', 3),
(70, 'Sạc USB Hydrus ACL2018', '140000', 79, 'images/product/phukien/sac_usbhydrus.jpg', 'https://cdn.tgdd.vn/Products/Images/9499/272201/adapter-sac-usb-hydrus-acl2018-2.jpg', '• Chất liệu vỏ được làm cách điện, an toàn khi thao tác cắm sạc, tích hợp chấu 2 chân gắn dễ dàng với nhiều ổ cắm tại nhà và công cộng.<br>\r\n\r\n• Đầu ra USB 5V - 2.4A là dạng cổng kết nối quen thuộc trên thị trường nên adapter sử dụng được với nhiều loại cáp sạc để nạp pin dễ dàng cho các dòng điện thoại, máy tính bảng, sạc dự phòng, tai nghe,...<br>\r\n\r\n• Khi điện thoại yếu pin, kết nối với adapter sạc và cáp sạc phù hợp sẽ giúp điện thoại được bổ sung năng lượng liên tục và đầy pin trong thời gian ngắn với dòng sạc tối đa 12 W.', 2),
(71, 'Tai nghe Bluetooth Mozard Flex4', '280000', 78, 'images/product/phukien/tainghe_mozard.jpg', 'https://cdn.tgdd.vn/Products/Images/54/206665/tai-nghe-bluetooth-mozard-flex4-den-xanh-2-org.jpg', 'Các phím trên tai nghe có các chức năng như:<br>\r\n- Nghe, nhận cuộc gọi.<br>\r\n\r\n- Phát, dừng chơi nhạc; tăng, giảm âm lượng.<br>\r\n\r\n- Bấm giữ nút tăng âm lượng để chuyển bài hát, bấm giữ nút giảm âm lượng để lùi bài hát.Trải nghiệm các cuộc đàm thoại nhẹ nhàng, rõ ràng với mic thoại tích hợp trên tai nghe.            ', 2),
(72, 'Loa vi tính Enkor E50', '420000', 59, 'images/product/phukien/loa_enkore50.jpeg', 'https://cdn.tgdd.vn/Products/Images/2162/212960/loa-vi-tinh-21-enkor-e50-den-2-2.jpeg', '- Thiết kế màu đen sang trọng, chất liệu chính là gỗ MDF (gỗ ép), loa vi tính Enkor E50 không chỉ giúp bạn tận hưởng âm nhạc mà còn làm nổi bật không gian nơi loa được bố trí.<br>\r\n- Thiết kế nhỏ gọn, chắc chắn với bộ 3 loa: 1 loa siêu trầm và 2 loa vệ tinh.<br>\r\n- Với tổng công suất 20 W, công suất loa siêu trầm 10 W, loa vệ tinh 5 W x 2 loa cho âm thanh lớn.<br>\r\n- Kết nối được với laptop, điện thoại, máy tính bảng để phát nhạc qua jack 3.5 mm.<br>\r\n- Tích hợp nút nguồn, tăng/giảm âm lượng, chỉnh bass theo nhu cầu.\r\n', 2),
(73, 'Webcam 1080P Asus C3', '750000', 90, 'images/product/phukien/webcam-asus-c3.jpg', 'https://cdn.tgdd.vn/Products/Images/4728/247710/webcam-1080p-asus-c3-den-2-2.jpg', '- Màu đen hiện đại, kích thước nhỏ gọn, dễ dùng<br>\r\n- Webcam 1080p Asus C3 Đen sử dụng để bàn hoặc gắn lên màn hình laptop, LCD hay PC của bạn với sự hỗ trợ của chân kẹp chắc chắn. Nhờ trọng lượng chỉ 104 g, webcam không gây áp lực gây hại lên các màn hình sử dụng, rất an toàn và tiện lợi.<br>\r\n- Ghi hình ở chuẩn Full HD 1920 x 1080 pixel, Asus C3 mang đến hình ảnh sắc nét trong chi tiết, tươi sáng ở màu sắc, không bị rung nhòe, thể hiện hình ảnh chân thực để cuộc giao tiếp video thêm sống động, gần gũi.    ', 2),
(74, 'Điện thoại Realme 9i', '4990000', 38, 'images/product/phone/realme-9i.jpg', 'https://cdn.tgdd.vn/Products/Images/42/275732/Slider/Realme9islide1-1020x570.jpg', '- Hiệu năng mạnh mẽ, vượt trội<br>\r\n- Điện thoại Realme 9i được trang bị chip Snapdragon 680 tích hợp tiến trình 6 nm tiên tiến, tốc độ xung nhịp lên đến 2.4 GHz mang lại hiệu năng ổn định cho các tác vụ cơ bản và cũng giảm thiểu mức tiêu thụ điện năng.<br>\r\n\r\n- Realme 9i hỗ trợ RAM 4 GB cho trải nghiệm máy với hiệu suất tốt, khả năng đa nhiệm ổn định. Với bộ nhớ trong 64 GB và hỗ trợ mở rộng dung lượng qua thẻ nhớ MicroSD tối đa 1 TB cho bạn có thể thoải mái lưu trữ những ứng dụng giải trí mà mình yêu thích.<br>\r\n\r\nĐo hiệu năng bằng phần mềm - Realme 9i\r\n\r\n- Đồng thời, với hệ điều hành Android 11 kết hợp cùng màn hình 90 Hz được trang bị trên điện thoại này thì chắc chắn không thể làm khó được các tác vụ cơ bản như mở, chuyển đổi giữa các ứng dụng giải trí như: Xem TikTok, YouTube, sử dụng Chrome,... giúp các thao tác có phản hồi nhanh chóng, mang lại trải nghiệm mượt mà cho người dùng.\r\n\r\n\r\n', 3),
(75, 'Điện thoại Samsung Galaxy A32', '5490000', 90, 'images/product/phone/samsung-galaxy-a32.jpg', 'https://cdn.tgdd.vn/Products/Images/42/234315/Slider/vi-vn-samsung-galaxy-a32-4g-cauhinh.jpg', '- Samsung Galaxy A32 4G là chiếc điện thoại thuộc phân khúc tầm trung nhưng sở hữu nhiều ưu điểm vượt trội về màn hình lớn sắc nét, bộ bốn camera 64 MP cùng vi xử lý hiệu năng cao và được bán ra với mức giá vô cùng tốt.<br>\r\n- Thiết kế thời thượng cùng màu sắc bắt mắt<br>\r\n- Samsung Galaxy A32 4G có mặt lưng nhựa cao cấp với thiết kế đơn giản, trang nhã, không chỉ giúp bảo vệ máy mà còn tăng độ bóng bẩy cho smartphone, mang đến vẻ ngoài đẳng cấp cho người sở hữu.', 3),
(76, 'Laptop LG Gram 16 2021 i7', '50890000', 30, 'images/product/laptop/lg-gram-16.jpg', 'https://cdn.tgdd.vn/Products/Images/44/238133/Slider/lg-gram-16-i7-16z90pgah75a5-120821-1115050.jpg', '- Với tính chất công việc cần di chuyển nhiều hay phải mang laptop đi làm thường xuyên, laptop LG Gram 16 2021 i7 (16Z90P-G.AH75A5) vừa mỏng nhẹ vừa có hiệu năng mạnh mẽ từ bộ vi xử lý Intel thế hệ 11 tân tiến sẽ là cộng sự tuyệt vời mà bạn luôn tìm kiếm bấy lâu nay.<br>\r\n- Thiết kế siêu gọn nhẹ, tính di động cao<br>\r\n- Vỏ của chiếc laptop này được làm từ hợp kim Nano Carbon - Magie cứng cáp, bền bỉ và mang đến sự sang trọng. Thiết kế bo thẳng 4 góc cộng với bản lề ẩn giúp hạn chế bị phân tâm, tăng khả năng tập trung vào công việc.<br>\r\n\r\n- Sở hữu trọng lượng 1.19 kg cùng với độ dày chỉ 16.8 mm cho kích thước 16 inch là một sự tối ưu vượt trội, bạn hoàn toàn có thể nâng máy bằng một tay hay để vừa balo, túi xách mang theo bên mình một cách nhẹ nhàng.', 1),
(77, 'Laptop Intel NUC M15 Kit', '34990000', 67, 'images/product/laptop/intel-nuc-m15.jpg', 'https://cdn.tgdd.vn/Products/Images/44/265019/Slider/vi-vn-intel-nuc-m15-i5-bbc510eauxbc1-2.jpg', '- Nếu bạn đang tìm kiếm một phiên bản laptop cao cấp sở hữu đầy đủ các tính năng vượt trội với cấu hình mạnh mẽ và phong cách thiết kế thời thượng, sang trọng, Intel NUC M15 i5 (BBC510EAUXBC1) sẽ là một sự lựa chọn sáng giá, đáp ứng mọi nhu cầu cần thiết cho người dùng.<br>\r\n- Thu hút mọi ánh nhìn với ngoại hình tối giản, thanh lịch<br>\r\n- Khoác lên mình vẻ ngoài tối giản nhưng không kém phần thời thượng với lớp vỏ kim loại cứng cáp cùng gam màu xám chủ đạo, laptop Intel NUC tạo nên một điểm nhấn đặc biệt làm nổi bật hơn hẳn mỗi khi nó xuất hiện ở bất kỳ không gian làm việc nào. Bề dày 14.9 mm và trọng lượng 1.65 kg vẫn có thể cất gọn gàng vào balo và đồng hành cùng người dùng đến những chuyến công tác xa.', 1),
(78, 'Laptop MSI Gaming GE66 Raider 11UG', '59990000', 50, 'images/product/laptop/msi-gaming-ge66.jpg', 'https://cdn.tgdd.vn/Products/Images/44/249152/Slider/vi-vn-msi-gaming-ge66-raider-11ug-i7-258vn-4.jpg', '- Vươn lên tầm cao mới cùng laptop MSI Gaming GE66 Raider 11UG i7 11800H (258VN) với thiết kế độc lạ, đem đến vô vàn tính năng cao, chinh phục mọi công việc khó nhằn hay chiến đấu cực đỉnh trên mọi chiến trường game. <br>\r\n- Bức phá sức mạnh nhờ chip Intel Gen 11 Core i7<br>\r\n- Phát huy tối đa hiệu suất trong công việc nhờ bộ vi xử lý Intel Core i7 Tiger Lake 11800H với 8 nhân 16 luồng, đạt tốc độ CPU 2.30 GHz và tối đa lên đến 4.6 GHz nhờ Turbo Boost, thỏa mãn bạn trong việc xử lý gọn nhẹ các tác vụ công việc từ văn phòng đến đồ hoạ nâng cao, chỉnh sửa hình ảnh phức tạp, kết xuất 3D,... không gì có thể cản trở hay chinh chiến đầy mạnh mẽ trong mọi trận chiến game.', 1),
(79, 'Laptop MSI Creator Z16P B12UGST', '78990000', 30, 'images/product/laptop/msi-creator-z16p.jpg', 'https://cdn.tgdd.vn/Products/Images/44/274777/Slider/vi-vn-msi-creator-z16p-b12ugst-i7-050vn-3.jpg', '- Tuyệt tác của sự hoàn mỹ trong thiết kế cùng cấu hình cực mạnh từ laptop CPU thế hệ 12 tạo nên chiếc laptop MSI Creator Z16P B12UGST (050VN). Sản phẩm là sự lựa chọn hoàn hảo cho người làm sáng tạo nghệ thuật, thiết kế đồ hoạ.<br>\r\n• Laptop MSI Creator mang trong mình cấu hình mạnh mẽ vượt trội của CPU Intel Core i7 12700H tiết kiệm điện năng hơn thế hệ cũ, kết hợp card màn hình rời NVIDIA RTX 3070Ti Max-Q 8 GB giúp xử lý trôi chảy các tác vụ trong thời gian ngắn, sẵn sàng chinh phục mọi thử thách sáng tạo, hoà mình vào không gian làm việc thăng hoa nhất.<br>\r\n\r\n• Laptop MSI được trang bị 32 GB RAM với dòng DDR5 thế hệ mới cho khả năng đa nhiệm thoải mái, hiệu suất ấn tượng, làm việc chuyên nghiệp không sợ tình trạng giật lag xảy ra. Bộ nhớ trong SSD 2 TB đem lại không gian lưu trữ rộng rãi, tốc độ truy xuất dữ liệu hay khởi động ứng dụng, laptop đều cực nhanh.<br>\r\n\r\n• Laptop màn hình cảm ứng 16 inch với độ phân giải QHD+ (2560 x 1600), tần số quét 165 Hz, 100% DCI-P3 mang lại chất lượng hiển thị sắc nét, màu sắc chuẩn xác phục vụ cho nhu cầu làm đồ hoạ nâng cao. Tấm nền IPS mở rộng góc nhìn người dùng lên đến 178 độ.<br>\r\n\r\n• Được hoàn thiện từ vỏ kim loại sang trọng, đẳng cấp tạo nên một sức hút mãnh liệt. Chiếc máy có trọng lượng 2.39 kg, độ mỏng 19 mm vừa vặn trong chiếc balo để mang theo bên người. <br>\r\n\r\n', 1),
(80, 'Điện thoại Samsung Galaxy S22+', '20990000', 68, 'images/product/phone/SamsungGalaxyS22+.jpg', 'https://cdn.tgdd.vn/Products/Images/42/271696/Slider/2.Thietke-1020x570.jpg', '- Samsung Galaxy S22+ 5G 128GB được Samsung cho ra mắt với với ngoại hình không có quá nhiều thay đổi nhưng được nâng cấp đáng kể về thông số cấu hình bên trong và thời gian sử dụng, chắc hẳn sẽ mang lại những trải nghiệm thú vị dành cho bạn.<br>\r\n- Galaxy S22+ 5G thiết kế bền bỉ với khung viền từ hợp kim Armor Aluminum cứng cáp, trang bị kính cường lực Gorilla Glass Victus+ giúp hạn chế trầy xước cho bạn thoải mái sử dụng thiết bị hơn khi sử dụng.', 3),
(81, 'Điện thoại Xiaomi 12', '15990000', 55, 'images/product/phone/xiaomi12.jpg', 'https://cdn.tgdd.vn/Products/Images/42/234621/Slider/Artboard6-1020x570.jpg', '- Điện thoại Xiaomi đang dần khẳng định chỗ đứng của mình trong phân khúc flagship bằng việc ra mắt Xiaomi 12 với bộ thông số ấn tượng, máy có một thiết kế gọn gàng, hiệu năng mạnh mẽ, màn hình hiển thị chi tiết cùng khả năng chụp ảnh sắc nét nhờ trang bị ống kính đến từ Sony.<br>\r\n- Cầm nắm cực kỳ thoải mái<br>\r\n- Ấn tượng đầu tiên khi mình nhìn điện thoại Xiaomi 12 là nó quá đẹp, các chi tiết được hoàn thiện một cách tỉ mỉ, cạnh viền được bo cong mềm mại và không thấy xuất hiện chi tiết thừa.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Lastname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Firstname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Level` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Lastname`, `Firstname`, `Gender`, `Email`, `Password`, `Address`, `Phone`, `Level`) VALUES
(50, 'admin', 'admin', 'Nam', 'admin@gmail.com', '982001', 'ha noi', '0395325351', 2),
(52, 'nguyen', 'hong', '', 'a@gmail.com', '1', 'hai phong', '01284897241', 0),
(58, 'nguyen', 'abc', '', 'c@gmail.com', '1', 'ha noi', '010284', 0),
(69, 'nguyen', 'hieu', 'Nam', 'nv@gmail.com', '123456', 'hai phong', '039803704', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_idc` (`ID_User`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_id` (`User_Id`),
  ADD KEY `product_id` (`Product_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `category_id` (`Category_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=827;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`User_Id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
