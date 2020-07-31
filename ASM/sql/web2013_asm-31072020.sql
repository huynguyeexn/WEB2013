-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for web2013_asm
CREATE DATABASE IF NOT EXISTS `web2013_asm` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `web2013_asm`;

-- Dumping structure for table web2013_asm.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table web2013_asm.brands: ~20 rows (approximately)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
REPLACE INTO `brands` (`brand_id`, `brand_name`) VALUES
	(1, 'Apple (iPhone)'),
	(2, 'Samsung'),
	(3, 'OPPO'),
	(4, 'Vsmart'),
	(5, 'Xiaomi'),
	(6, 'Realme'),
	(7, 'Vivo'),
	(8, 'Nokia'),
	(9, 'Huawei'),
	(10, 'Masstel'),
	(11, 'Itel'),
	(12, 'Energizer'),
	(13, 'Apple (Macbook)'),
	(14, 'Asus'),
	(15, 'Acer'),
	(16, 'Dell'),
	(17, 'HP'),
	(18, 'Lenovo'),
	(19, 'MSI'),
	(20, 'Masstel');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping structure for table web2013_asm.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table web2013_asm.categories: ~7 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`category_id`, `category_name`) VALUES
	(1, 'Điện Thoại'),
	(2, 'Laptop'),
	(3, 'Đồng hồ'),
	(4, 'Phụ kiện'),
	(5, 'Máy cũ'),
	(6, 'Máy tính bảng'),
	(7, 'Sim thẻ');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table web2013_asm.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `order_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `FK_user_id_orders` (`user_id`),
  CONSTRAINT `FK_user_id_orders` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table web2013_asm.orders: ~1 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` (`order_id`, `user_id`, `order_time`, `order_status`) VALUES
	(1, 1, '2020-07-29 15:40:45', 'Đang chờ');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table web2013_asm.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  KEY `FK_order_id_order_items` (`order_id`),
  KEY `FK_product_id_order_items` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table web2013_asm.order_items: ~2 rows (approximately)
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
REPLACE INTO `order_items` (`order_id`, `product_id`, `quantity`) VALUES
	(163, 1, 1),
	(1, 1, 4);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- Dumping structure for table web2013_asm.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `product_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `product_sale` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_destination` text COLLATE utf8_unicode_ci,
  `product_rating` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_images` text COLLATE utf8_unicode_ci,
  `product_quantity` int(11) DEFAULT NULL,
  `product_sold` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FK_products_categories` (`category_id`),
  KEY `FK_products_brands` (`brand_id`),
  CONSTRAINT `FK_products_brands` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  CONSTRAINT `FK_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=295 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table web2013_asm.products: ~147 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`product_id`, `product_name`, `product_price`, `product_sale`, `product_destination`, `product_rating`, `product_images`, `product_quantity`, `product_sold`, `category_id`, `brand_id`) VALUES
	(1, 'Dell Inspiron N3593C i3 1005G1/P75F013N93C', '11.590.000', '0', NULL, NULL, '637011994198240452_asus-vivobook-a412-dd.jpg', NULL, NULL, 2, 16),
	(2, 'Asus Vivibook A412DA-EK160T/R5-3500U', '14.490.000', '0', NULL, NULL, '637080249231935669_dell-vostro-v3590-den-dd.jpg', NULL, NULL, 2, 14),
	(3, 'HP 15s-fq1107TU/i3-1005G1', '10.690.000', '0', NULL, NULL, '637090855329028337_hp-14s-bac-dd.jpg', NULL, NULL, 2, 17),
	(4, 'Asus Vivobook X509FA-EJ871T/i3-8145U', '10.890.000', '0', NULL, NULL, '637102695580073962_hp-pavilion-14-ce-i5-1035g-vang-dd.jpg', NULL, NULL, 2, 14),
	(5, 'Asus Vivobook D509DA-EJ448T/R3 3200U', '10.790.000', '0', NULL, NULL, '637183901495990470_hp-348-g7-bac-dd.jpg', NULL, NULL, 2, 14),
	(6, 'HP 15s-fq0003TU/Pentium N5000', '7.990.000', '0', NULL, NULL, '637221317214614959_lenovo-ideapad-s145-bac-dd.jpg', NULL, NULL, 2, 17),
	(7, 'HP 15s-fq1109TU/i3-1005G1', '11.690.000', '0', NULL, NULL, '637224555186418627_asus-vivobook-d509-bac-dd.jpg', NULL, NULL, 2, 17),
	(8, 'Lenovo IdeaPad S145-15API/R5 3500U', '11.990.000', '0', NULL, NULL, '637224559757700958_asus-vivobook-x509-bac-dd (1).jpg', NULL, NULL, 2, 18),
	(9, 'HP Pavilion 14-ce3026TU/i5-1035G1', '16.990.000', '0', NULL, NULL, '637224559757700958_asus-vivobook-x509-bac-dd.jpg', NULL, NULL, 2, 17),
	(10, 'Asus Vivobook X509MA-BR272T/N4020', '6.990.000', '0', NULL, NULL, '637232326767288734_lenovo-ideapad-L340-den-dd.jpg', NULL, NULL, 2, 14),
	(11, 'HP 348 G7/i5-10210U', '15.690.000', '0', NULL, NULL, '637233230044441609_dell-inspiron-n3593c-den-dd.jpg', NULL, NULL, 2, 17),
	(12, 'Dell V3590 i5 10210U/P75F010N90B', '16.990.000', '0', NULL, NULL, '637266923419786995_hp-15s-fq-bac-dd (1).jpg', NULL, NULL, 2, 16),
	(13, 'HP 14s-dk1055au/R3 3250U', '9.990.000', '0', NULL, NULL, '637266923419786995_hp-15s-fq-bac-dd (2).jpg', NULL, NULL, 2, 17),
	(14, 'Lenovo Ideapad L340-15IRH/i5 9300H', '17.990.000', '0', NULL, NULL, '637266923419786995_hp-15s-fq-bac-dd.jpg', NULL, NULL, 2, 18),
	(15, 'Asus VivoBook M413IA-EK480T/R5-4500U', '15.490.000', '0', NULL, NULL, '637287832326544795_asus-vivobook-m413-bac-dd.jpg', NULL, NULL, 2, 14),
	(163, 'Samsung Galaxy A21s', '4.690.000', '3.940.000', NULL, NULL, '637267175905189165_SaS-A21s-den-dd.jpg', NULL, NULL, 1, 2),
	(164, 'Samsung Galaxy A11', '3.690.000', '3.100.000', NULL, NULL, '637267166321989432_SS-A11-xanh-dd.jpg', NULL, NULL, 1, 2),
	(165, 'Samsung Galaxy A51', '7.990.000', '6.700.000', NULL, NULL, '637196211716349641_ss-a51-xanh-dd.jpg', NULL, NULL, 1, 2),
	(166, 'Oppo A31 4GB-128GB', '4.490.000', '4.190.000', NULL, NULL, '636836629047810556_iphone-7-plus.jpg', NULL, NULL, 1, 3),
	(167, 'Samsung Galaxy A71', '10.490.000', '8.390.000', NULL, NULL, '637280764526193815_oppo-a31-4gb-dd.jpg', NULL, NULL, 1, 2),
	(168, 'Oppo A12 3GB-32GB', '2.990.000', '0', NULL, NULL, '637293809323803584_ss-a71-hong-2-dd.jpg', NULL, NULL, 1, 3),
	(169, 'Samsung Galaxy Note 10', '22.990.000', '0', NULL, NULL, '637233485239990594_oppo-a12-dd.jpg', NULL, NULL, 1, 2),
	(170, 'iPhone 11 Pro Max 64GB', '33.990.000', '28.990.000', NULL, NULL, '637009484555889036_SS-note-10-dd-1.jpg', NULL, NULL, 1, 1),
	(171, 'Oppo Reno3 8GB-128GB', '8.990.000', '7.490.000', NULL, NULL, '637037687757921048_11-pro-max-chung.jpg', NULL, NULL, 1, 3),
	(172, 'Vsmart Star 3 2GB - 16GB', '1.990.000', '1.840.000', NULL, NULL, '637236791683138737_reno-3-dd.jpg', NULL, NULL, 1, 4),
	(173, 'iPhone 11 64GB', '21.990.000', '19.990.000', NULL, NULL, '637235815905803516_vsmart-star-3-xanh-dd.jpg', NULL, NULL, 1, 1),
	(174, 'Samsung Galaxy A31', '6.490.000', '5.450.000', NULL, NULL, '637037651956109900_11-chung.jpg', NULL, NULL, 1, 2),
	(175, 'OPPO A92', '6.990.000', '6.490.000', NULL, NULL, '637267691826253744_sam-a31-xanh-dd.jpg', NULL, NULL, 1, 3),
	(176, 'Vivo Y11', '2.990.000', '0', NULL, NULL, '637296528611637586_oppo-a92-dd-1.jpg', NULL, NULL, 1, 7),
	(177, 'Oppo A12 4GB-64GB', '3.690.000', '0', NULL, NULL, '637128911562493418_vivo-y11-dd-tet.jpg', NULL, NULL, 1, 3),
	(178, 'Samsung Galaxy M31', '6.490.000', '5.690.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(179, 'Samsung Galaxy Note 10 Lite', '11.490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(180, 'Samsung Galaxy S20+', '23.990.000', '16.990.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(181, 'Vsmart Joy 3 4GB-64GB', '3.290.000', '2.990.000', NULL, NULL, NULL, NULL, NULL, 1, 4),
	(182, 'Vsmart Active 3 6GB-64GB', '3.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 4),
	(183, 'Vivo U10 4GB-64GB', '3.990.000', '3.790.000', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(184, 'OPPO Reno2 F', '8.990.000', '6.990.000', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(185, 'iPhone SE (2020) 64GB', '12.990.000', '12.490.000', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(186, 'Vsmart Joy 2+ 2GB-32GB', '1.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 4),
	(187, 'Realme C3 3GB-32GB', '2.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(188, 'Samsung Galaxy Z Flip', '36.000.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(189, 'Samsung Galaxy Note 10+', '26.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(190, 'iPhone 11 Pro 64GB', '30.990.000', '25.990.000', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(191, 'OPPO Find X2', '23.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(192, 'Huawei P40 Pro', '23.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(193, 'Samsung Galaxy S10', '20.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(194, 'iPhone Xs Max 64GB', '25.990.000', '20.990.000', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(195, 'Samsung Galaxy S20 Ultra', '29.990.000', '19.990.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(196, 'Samsung Galaxy S20', '21.490.000', '18.490.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(197, 'Huawei P40', '17.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(198, 'Samsung Galaxy S10e', '15.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(199, 'iPhone XR 64GB', '16.990.000', '15.990.000', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(200, 'Huawei P30 Pro', '14.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(201, 'Xiaomi Mi Note 10 Pro 8GB-256GB', '14.990.000', '13.990.000', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(202, 'Samsung Galaxy S10+ (128GB)', '18.990.000', '13.990.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(203, 'Oppo Reno3 Pro 8GB-256GB', '14.990.000', '11.490.000', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(204, 'Xiaomi Mi Note 10 Lite 8GB-128GB', '9.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(205, 'Samsung Galaxy A70', '9.290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(206, 'Huawei Nova 5T 8GB-128GB', '8.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(207, 'Xiaomi Mi 9T 128GB', '8.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(208, 'Samsung Galaxy A80', '14.990.000', '8.990.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(209, 'Oppo Reno', '12.990.000', '7.990.000', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(210, 'Realme 6 Pro 8GB-128GB', '7.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(211, 'Samsung Galaxy A50s', '6.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(212, 'Xiaomi Redmi Note 9 Pro 6GB-128GB Xanh', '6.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(213, 'Xiaomi Redmi Note 9 Pro 6GB-128GB', '6.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(214, 'Huawei Nova 7i', '6.990.000', '6.690.000', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(215, 'Realme XT 8GB-128GB', '7.990.000', '6.490.000', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(216, 'Vivo Y50 8GB - 128GB', '6.290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(217, 'Samsung Galaxy A30s', '6.290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(218, 'Realme 6 4GB-128GB', '5.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(219, 'Vivo S1 Pro 8GB-128GB', '6.990.000', '5.990.000', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(220, 'Huawei Y9s', '5.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(221, 'Xiaomi Redmi Note 8 Pro 6GB-128GB', '5.990.000', '5.690.000', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(222, 'Oppo A9 2020', '6.990.000', '5.490.000', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(223, 'Oppo A31 6GB-128GB', '5.290.000', '4.990.000', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(224, 'Huawei P30 Lite', '5.490.000', '4.990.000', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(225, 'Vivo Y30 4GB - 128GB', '4.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(226, 'Realme 5 Pro 4GB-128GB', '5.990.000', '4.990.000', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(227, 'Xiaomi Redmi Note 9 4GB-128GB', '4.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(228, 'Realme 6i 4GB-128GB', '4.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(229, 'Xiaomi Redmi Note 8 4GB-128GB', '4.990.000', '4.790.000', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(230, 'Vivo Y19 6GB -128GB', '4.990.000', '4.790.000', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(231, 'Samsung Galaxy M21', '5.490.000', '4.490.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(232, 'Realme 5 3GB-64GB', '3.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(233, 'Nokia 5.3 3GB - 64GB', '3.990.000', '3.690.000', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(234, 'Xiaomi Redmi 9 3GB-32GB', '3.590.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(235, 'Samsung Galaxy A20', '4.190.000', '3.560.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(236, 'Huawei Y6p', '3.490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(237, 'Huawei Y7 Pro (2019)', '3.490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 9),
	(238, 'Realme 5i 3GB-32GB', '3.290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(239, 'OPPO A5s', '3.290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(240, 'Samsung Galaxy A10s', '3.690.000', '3.140.000', NULL, NULL, NULL, NULL, NULL, 1, 2),
	(241, 'Xiaomi Redmi 8 4GB-64GB', '2.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(242, 'Realme 3 3GB-32GB', '2.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(243, 'Vivo Y1s 2GB-32GB', '2.690.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(244, 'Realme C11 2GB-32GB', '2.690.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(245, 'OPPO A1k', '2.690.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 3),
	(246, 'Realme C3i 2GB-32GB', '2.590.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 6),
	(247, 'Nokia 800 Tough', '2.490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(248, 'Vsmart Star 4 3GB-32GB', '2.490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 4),
	(249, 'Vivo Y91C 2GB-32GB', '2.390.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 7),
	(250, 'Nokia 3.2 3GB-32GB', '3.290.000', '2.290.000', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(251, 'Xiaomi Redmi 8A 2GB - 32GB', '2.290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(252, 'Nokia 2720 Flip 4G', '1.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(253, 'Xiaomi Redmi 9A 2GB-32GB', '1.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 5),
	(254, 'Nokia 3.2 2GB-16GB', '1.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(255, 'Nokia 2.3', '1.990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(256, 'Nokia 2.2 2GB/16GB', '1.990.000', '1.640.000', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(257, 'Vsmart Bee 3 2GB-16GB', '1.590.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 4),
	(258, 'Nokia 230 (Không thẻ nhớ)', '1.250.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(259, 'Masstel Hapi 10 Fami', '1.190.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(260, 'Nokia 3310', '1.059.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(261, 'Nokia 5310 (2020)', '999.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(262, 'Vsmart BEE 1GB-16GB', '990.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 4),
	(263, 'Energizer E241s', '890.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(264, 'Nokia 210 DS', '779.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(265, 'Masstel X1', '690.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(266, 'Nokia 150 DS (2020)', '659.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(267, 'Nokia N150', '649.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(268, 'Masstel Fami S2', '590.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(269, 'Energizer P20', '590.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(270, 'Masstel Fami P25', '590.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(271, 'Masstel Play Max', '490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(272, 'Energizer E100', '490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(273, 'Masstel Fami 12', '490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(274, 'Nokia 110 DS (2019)', '479.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(275, 'Masstel Izi 250', '400.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(276, 'Masstel Fami 9', '399.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(277, 'Itel It5092', '390.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(278, 'Nokia 105 DS (2019)', '369.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(279, 'Masstel Play Music', '360.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(280, 'Nokia 105 SS (2019)', '359.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 8),
	(281, 'Masstel Lux Mini', '339.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(282, 'Itel It2580', '320.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(283, 'Itel It6120', '300.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(284, 'Masstel Max R1', '299.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(285, 'Masstel iZi 206', '299.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(286, 'Energizer E12', '290.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 1),
	(287, 'Itel It5025', '260.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(288, 'Itel It2163', '210.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(289, 'Itel it2171', '210.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(290, 'Itel It2170', '200.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(291, 'Masstel Izi 112', '199.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(292, 'Masstel izi 120', '199.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 10),
	(293, 'Itel It2123V', '190.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 11),
	(294, 'Vsmart Live 4GB-64GB', '3.490.000', '0', NULL, NULL, NULL, NULL, NULL, 1, 4);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table web2013_asm.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_rank` int(11) NOT NULL DEFAULT '1',
  `user_fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_birthday` date DEFAULT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table web2013_asm.user: ~3 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`user_id`, `user_rank`, `user_fullname`, `user_birthday`, `user_phone`, `user_password`, `user_email`, `user_address`) VALUES
	(1, 9999, 'hui', '2001-07-20', '0909', '123', 'abc', '12'),
	(2, 1, '123', '2313-12-31', '123', '123', '231', '123'),
	(3, 1, '31231231', '2311-12-31', '123123123', '12312313', '1231231', '123123123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
