-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 05:40 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twowheelss_2wheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `model_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 3,
  `no_of_reviews` int(11) NOT NULL DEFAULT 0,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_favourite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bike',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`id`, `name`, `company_id`, `model_year`, `model_id`, `images`, `description`, `engine_type`, `reg_city_id`, `additional_info`, `category`, `price`, `mileage`, `rating`, `no_of_reviews`, `body_type`, `seller_name`, `seller_phone`, `seller_comment`, `seller_address`, `for_favourite`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'fsd sfd', 12, '1955', 62, '[\"1629658326_0_abc.jpg\"]', 'hjkj', '2-stroke', 'Adda shaiwala', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 876, 87678, 5, 0, 'Sports Bike', 'uijhlkj', '98897', 'jkk', 'sfd', 'bike', 5, '2021-08-22 16:52:06', '2021-08-22 16:52:06'),
(2, 'fsd sdf', 12, '1955', 62, '[\"1629658326_0_abc.jpg\"]', 'hjkj', '2-stroke', 'Adda shaiwala', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 23432, 87678, 5, 0, 'Sports Bike', 'uijhlkj', '98897', 'jkk', 'sfd', 'bike', 5, '2021-08-22 16:52:06', '2021-08-22 16:52:06'),
(3, 'fsd eeee', 12, '1955', 62, '[\"1629658326_0_abc.jpg\"]', 'hjkj', '2-stroke', 'Adda shaiwala', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 3333, 87678, 5, 0, 'Sports Bike', 'uijhlkj', '98897', 'jkk', 'sfd', 'bike', 5, '2021-08-22 16:52:06', '2021-08-22 16:52:06'),
(4, 'fsd 2', 12, '1955', 62, '[\"1629658326_0_abc.jpg\"]', 'hjkj', '2-stroke', 'Adda shaiwala', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 44444, 87678, 5, 0, 'Sports Bike', 'uijhlkj', '98897', 'jkk', 'sfd', 'bike', 5, '2021-08-22 16:52:06', '2021-08-22 16:52:06'),
(5, 'fsd sfd', 6, '1955', 34, '[\"1630149776_0_about 1Capture.PNG\"]', 'xghjh', '2-stroke', 'Ahmedpur Lamma', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 76756, 76655, 5, 0, 'Chopper', 'asd', '67567', 'asddas', 'sfd', 'bike', 5, '2021-08-28 09:22:56', '2021-08-28 09:22:56'),
(6, 'New Honda CB 125F', 1, '2021', 2, '[\"1630826411_0_honda-cb-150.png\"]', 'Pakistan’s largest bike manufacturer, Atlas Honda, has launched 2021 CB 125F for its customers in Pakistan and to grab more market share. The bike has been launched in two different versions; basic and special edition.', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"Disc Brake\",\"Led Light\",\"0\"]', 'New Bike', 205500, 0, 5, 0, 'Standard', 'Honda', '03164361632', 'Easy to sell', 'Near Arfa careem tower House # 375', 'bike', 6, '2021-09-05 05:20:11', '2021-09-05 05:20:11'),
(7, 'Honda CD 70', 1, '1940', 1, '[\"1632042904_0_cd-70.jpg\"]', 'It would be fair enough to say that the new model Honda CD 70 2021 is the pioneer of high standard super economy 70cc bikes in Pakistan.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\", \"0\"]', 'New Bike', 86900, 80, 5, 0, 'Standard', 'abdullah', '923012468468', 'somewhere in lahore', 'somewhere in lahore', 'bike', 8, '2021-09-19 07:15:04', '2021-09-19 07:56:43'),
(8, 'Benelli TNT 150i', 11, '2021', 56, '[\"1632045340_0_Benelli_TNT_150.jpg\"]', 'Benelli has launched the much awaited Benelli TNT 150 in Pakistan. Benelli TNT 150i comes with 150 cc engine producing 14 HP_@_9000 RPM and 11.5 NM _@_ 7000. The engine is mated with the 5-speed transmission. Benelli TNT 150 2021 power to weight ratio is aesthetically managed to produce the better response for the riders. Benelli TNT 150 price in Pakistan is kept competitive to perform better against the other rival models available in Pakistan, Suzuki GS 150SE, Suzuki GR 150 and Honda CB 150F. Benelli TNT 150i is available in the price of 370000PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 440000, 45, 5, 0, 'Heavy Bike', 'abdullah', '03012000000', NULL, 'lahore', 'bike', 8, '2021-09-19 07:55:41', '2021-09-19 07:55:41'),
(9, 'Benelli TNT 600', 11, '2021', 59, '[\"1632050923_0_Benelli_TNT_600.jpg\"]', 'Benelli launched the much awaited Benelli TNT 600 in Pakistan. The price of TNT 600 is 1100000/ PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 1400000, 19, 5, 0, 'Heavy Bike', 'abdullah', '03000000000', NULL, 'lahore', 'bike', 8, '2021-09-19 09:28:43', '2021-09-19 09:28:43'),
(10, 'Yamaha YB 125Z-DX', 2, '2021', 7, '[\"1632051709_0_yb-100-zdx.jpg\"]', 'Yamaha YB 125Z-DX was designed in a straightforward and rugged design to cache into the conventional market of local consumers. Yamaha YBR 125Z-DX possesses the same engine as of Yamaha YBR 125. Yamaha YBR 125Z-DX has powerful shocks that are the key to a comfortable and smooth ride of this bike. The alluring speedometer has an and fuel indicator. The significantly broad and comfortable seat of Yamaha YBR 125Z-DX ensures good backbone support on long journeys.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 190000, 50, 5, 0, 'Standard', 'abdullah', '03000000000', NULL, 'lahore', 'bike', 8, '2021-09-19 09:41:49', '2021-09-19 09:41:49'),
(11, 'Yamaha YBR 125', 2, '2021', 7, '[\"1632053860_0_Yamaha_YBR125_2015.jpg\"]', 'Yamaha YBR 125 is a pioneer of a quality sports bike in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight, Yamaha Ybr 125 is worth every penny you spend. Yamaha Ybr 125cc possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go miles without worrying about refilling fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find used Yamaha Bikes on PakWheels listings.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 196000, 57, 5, 0, 'Sports Bike', 'abdullah', '0300000000', NULL, 'lahore', 'bike', 8, '2021-09-19 10:17:40', '2021-09-19 10:17:40'),
(12, 'Yamaha YZF-R3', 2, '2021', 11, '[\"1632054331_0_Yamaha_R3_2018.jpg\"]', 'Yamaha R series set the benchmark for the biking enthusiast to a whole new level. To provide with the ample thrust and dazzling looks Yamaha launched the YZF- R3 which is commonly known as Yamaha R3. Yamaha YZF R3 was launched to compete with the 300 cc entry-level sportbikes like Kawasaki have Ninja 300 in this segment. Check the prices and specs of Yamaha R3 in Pakistan on Pakwheels. You can also find the used Yamaha R3 on Pakwheels', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'New Bike', 3510000, 27, 5, 0, 'Heavy Bike', 'abdullah', '0300000000', NULL, 'lahore', 'bike', 8, '2021-09-19 10:25:31', '2021-09-19 10:25:31'),
(13, 'Road Prince RP 110', 6, '2021', 32, '[\"1632730647_0_Road_Prince_RP110.jpg\"]', 'Road Prince RP 110 is a reasonably priced bike with a powerful 110cc engine power. Road Prince is proud to present such a powerful bike while maintaining the price tag in times of high inflation.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'New Bike', 52000, 0, 3, 0, 'Standard', 'BikePro', '12345', 'yes ok', 'Near Arfa careem', 'bike', 9, '2021-09-27 06:17:27', '2021-09-27 06:17:27'),
(14, 'Road Prince Wego 150', 6, '1940', 33, '[\"1632730805_0_Wego_150.jpg\"]', 'Road Prince Wego is a pioneer of economical sports bikes in Pakistan', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'New Bike', 255000, 0, 3, 0, 'Standard', 'BikePro', '030067898', 'Easy to sell', 'Near Arfa careem Colony Street no 4', 'bike', 9, '2021-09-27 06:20:05', '2021-09-27 06:20:05'),
(15, 'Super Deluxe SP 70 2021', 8, '2021', 43, '[\"1632730856_0_super_power_cover.jpg\"]', NULL, '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'New Bike', 70000, 0, 3, 0, 'Standard', 'Abdulla', '03239121121', NULL, '234, Defence, Lahore', 'bike', 5, '2021-09-27 06:20:56', '2021-09-27 06:20:56'),
(16, 'Abdullah', 15, '2021', 78, '[\"1632730973_0_3.jpg\",\"1632730973_1_2.jpg\",\"1632730973_2_1.jpg\"]', 'Engine	Liquid-cooled, four-stroke single with DOHC and four valves	Displacement	883 cc Bore & Stroke	76.2 x 96.8 mm	Compression Ratio	9.0:1 Clutch	N/A	Transmission	5-speed Starting	electric/kickstart	Frame	Mild Steel-Tubular Frame, Circular Section, Cast Junctions Dimension (Lxwxh)	2185	Ground Clearance	140 mm Petrol Capacity	12.5 L	Tyre at Front	100 - 19 Tyre at Back	150 - 16	Dry Weight	247 KG', '4-stroke', 'Lahore', '[\"0\",\"0\",\"0\"]', 'New Bike', 2400000, 12, 3, 0, 'Standard', 'Abdullah', '00000000000', NULL, 'Mars', 'bike', 10, '2021-09-27 06:22:53', '2021-09-27 06:22:53'),
(17, 'Road Prince Robinson 150', 6, '2021', 37, '[\"1632730975_0_Road_Prince.jpg\"]', 'Road Prince is an organic home-grown brand that started off by three brothers who envisioned a motorcycle brand for Pakistan. The thought behind it was to create motor', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'New Bike', 270000, 0, 3, 0, 'Standard', 'BikePro', '031678456', 'Easy to sell', 'Near Arfa', 'bike', 9, '2021-09-27 06:22:55', '2021-09-27 06:22:55'),
(18, 'Super Power Leo 200 2021', 8, '2021', 44, '[\"1632731168_0_Super_Power_Leo_200.jpg\"]', 'Super Power Leo 200 comes with the powerful engine, alloy wheels, and sporty outlook.  Super Power has a contemporary and elegant design to allure young biker enthusiasts in the country. Super Power Leo 200 is also known as Loncin GP 200. The main difference between international and local variants is that in Pakistan it comes with 5-speed transmission while GP 200 comes in 6-speed transmission. Super Power Leo 200 has an overhead valve engine with a compression ratio of 9.2.1. The overall look of  Super Power Leo 200 is quite appealing. Super Power Leo 200 price in Pakistan is 2 lacs PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 200000, 0, 3, 0, 'Sports Bike', 'Abdulla', '03222229222', NULL, 'shop # 6, multan road, Lahore', 'bike', 5, '2021-09-27 06:26:08', '2021-09-27 06:26:08'),
(19, 'Road Prince RP 125 Euro II', 6, '2021', 35, '[\"1632731185_0_Road_Prince_RP125.jpg\"]', 'Best quality against honda and fuel average same vs honda Best quality against honda and fuel average same vs honda Best quality against honda and fuel average same vs honda Best quality against...', '4-stroke', 'Lahore', '[\"0\",\"0\",\"0\"]', 'New Bike', 77500, 0, 3, 0, 'Standard', 'BikePro', '03164361632', 'Easy to sell', 'Near Arfa careem', 'bike', 9, '2021-09-27 06:26:25', '2021-09-27 06:26:25'),
(20, 'Abdullah', 15, '2021', 80, '[\"1632731245_0_HARLEY-DAVIDSON-V-Rod_back.jpg\",\"1632731245_1_harley-davidson-v-rod_3.jpg\"]', 'Engine	4T Liquid-Cooled, Revolution, 60 Degree V-Twin	Displacement	1247 cc Bore & Stroke	100 x 72 mm	Compression Ratio	11.5:1 Clutch	Nine plate wet pressure	Transmission	5-speed Starting	Electric	Frame	Steel perimeter upper frame Dimension (Lxwxh)	2440	Ground Clearance	115 mm Petrol Capacity	18.9 L	Tyre at Front	120 - 19 Tyre at Back	240 - 18	Dry Weight	302 KG', '4-stroke', 'Lahore', '[\"0\",\"0\",\"0\"]', 'New Bike', 3400000, 18, 3, 0, 'Standard', 'Abdullah', '00000000000', NULL, 'Mars', 'bike', 10, '2021-09-27 06:27:25', '2021-09-27 06:27:25'),
(21, 'Unique Xtreme UD 70 2021', 10, '2021', 51, '[\"1632731389_0_Unique_UD70.jpg\"]', 'Unique Xtreme UD 70 proclaims to be a trustworthy road partner with multi-colour body graphics. Unique Xtreme UD 70 has a reasonable resale value in the used bike market. Unique Xtreme UD 70 is Equipped with Euro II technology which enhances the fuel economy of the motorcycle. Unique UD 70 is quite similar to other 70cc bikes available in the market. Unique UD 70 is available in black and red color.', '4-stroke', 'Lahore', '[\"0\",\"0\",\"0\"]', 'New Bike', 65000, 0, 3, 0, 'Standard', 'Abdullah', '0322334334', NULL, '128 CCA Phase 04 DHA', 'bike', 5, '2021-09-27 06:29:49', '2021-09-27 06:29:49'),
(22, 'Vespa Primavera 150 2021', 12, '2021', 61, '[\"1632732047_0_Vespa_Primavera.jpg\"]', 'Vespa is making a comeback in Pakistan with the Vespa Primavera 150. Vespa is an Italian icon that has made its mark in the automotive world throughout the globe. Vespa Primavera is launched in 4 colors Black, Red, Blue and White. Vespa Primavera 150 price in Pakistan is Rs. 299000 PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'New Bike', 299000, 0, 3, 0, 'Scooter', 'Abdullah', '03232239932', NULL, 'palaza 2, near Defence Housing Society', 'bike', 5, '2021-09-27 06:40:47', '2021-09-27 06:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `bike_categories`
--

CREATE TABLE `bike_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bike_models`
--

CREATE TABLE `bike_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `no_of_reviews` int(11) NOT NULL DEFAULT 0,
  `engine_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `displacement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bore_stroke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compression_ratio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clutch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bike_models`
--

INSERT INTO `bike_models` (`id`, `name`, `image`, `company_id`, `rating`, `no_of_reviews`, `engine_type`, `displacement`, `bore_stroke`, `compression_ratio`, `clutch`, `transmission`, `price`, `created_at`, `updated_at`) VALUES
(1, 'CD 70', 'bike.png', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(2, 'CB 150F', 'bike.png', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(3, 'Pridor', 'bike.png', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(4, 'CG 125 Deluxe', 'bike.png', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(5, 'CD 70 Dream', 'bike.png', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(6, 'CB 125F', 'bike.png', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(7, 'YBR 125', 'bike.png', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(8, 'YBR 125G', 'bike.png', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(9, 'YB 125Z', 'bike.png', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(10, 'Royale YB 100', 'bike.png', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(11, 'YZF-R6', 'bike.png', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(12, 'YZF-R1', 'bike.png', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(13, 'GS 150', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(14, 'GD 110S', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(15, 'GR 150', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(16, 'GS 150 SE', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(17, 'GSX-R600', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(18, 'Hayabusa', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(19, 'GD 110', 'bike.png', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(20, 'OW Ninja 250cc', 'bike.png', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(21, '150cc', 'bike.png', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(22, '70', 'bike.png', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(23, '125', 'bike.png', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(24, 'Lifan', 'bike.png', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(25, 'OW R3 250cc', 'bike.png', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(26, 'US 70', 'bike.png', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(27, 'US 125', 'bike.png', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(28, 'US 100', 'bike.png', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(29, 'US Scooty 100', 'bike.png', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(30, 'US 125 Deluxe', 'bike.png', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(31, 'US 150 Ultimate', 'bike.png', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(32, 'RP 70 Passion', 'bike.png', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(33, 'Wego 150', 'bike.png', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(34, 'RP 110', 'bike.png', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(35, 'RP 125 Euro II', 'bike.png', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(36, 'Bullet', 'bike.png', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(37, 'Robinson 150', 'bike.png', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(38, 'Ninja 250R', 'bike.png', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(39, 'GTO 125', 'bike.png', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(40, 'GTO 100', 'bike.png', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(41, 'GTO 110', 'bike.png', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(42, 'Ninja ZX-10R', 'bike.png', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(43, 'SP 70', 'bike.png', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(44, 'Leo 200', 'bike.png', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(45, 'SP 150 Archi', 'bike.png', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(46, 'SP-100', 'bike.png', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(47, 'PK 150 Archi', 'bike.png', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(48, 'Sultan SP 250', 'bike.png', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(49, 'Infinity 150', 'bike.png', 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(50, 'CDI SR-70CC EURO-2', 'bike.png', 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(51, 'Xtreme UD 70', 'bike.png', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(52, 'UD 100', 'bike.png', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(53, 'UD 125', 'bike.png', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(54, 'Crazer UD-150', 'bike.png', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(55, 'TNT 25', 'bike.png', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(56, 'TNT 150i', 'bike.png', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(57, '302 R', 'bike.png', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(58, '180S', 'bike.png', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(59, 'TNT 600', 'bike.png', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(60, 'TRK 251', 'bike.png', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(61, '150cc', 'bike.png', 12, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(62, 'PIAGGIO', 'bike.png', 12, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(63, 'P150x', 'bike.png', 12, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(64, 'KPR 200 Cruise', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(65, 'ZX 70 City Rider', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(66, 'Monster ZX 250-D', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(67, 'ZX 125', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(68, 'ZX 70 Thunder Plus', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(69, 'ZX 100 Power Max', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(70, 'ZX 125 Stallion', 'bike.png', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(71, 'Valentino 350', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(72, 'Skyline 250', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(73, 'Gladiator 200', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(74, 'Thunder 150', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(75, 'VALENTINO 150cc', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(76, 'ELIGATOR 250CC', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(77, 'Valentino 250', 'bike.png', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(78, 'Iron 883', 'bike.png', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(79, '883 Low', 'bike.png', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(80, 'Night Rod Special', 'bike.png', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(81, '1200 Custom', 'bike.png', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(82, '883 Custom', 'bike.png', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(83, 'Ultra Classic', 'bike.png', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `bike_reviews`
--

CREATE TABLE `bike_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_you_know` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` int(11) NOT NULL,
  `comfort` int(11) NOT NULL,
  `fuel_economy` int(11) NOT NULL,
  `performance` int(11) NOT NULL,
  `value_for_money` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'reytyte', 'eyrty', '1630151485_reytyte.jpg', '2021-08-28 09:51:25', '2021-08-28 09:51:25'),
(2, 'jlkhjlkh', 'jhkjlkjas ldafjsfjjdflahsdf ao fsdkhjhkjlkjas ldafjsfjjdflahsdf ao fsdkh', '1632051799_jlkhjlkh.PNG', '2021-09-19 09:43:19', '2021-09-19 09:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Honda', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(2, 'Yamaha', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(3, 'Sazuki', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(4, 'Chinese Bike', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(5, 'United', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(6, 'Road Prince', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(7, 'Kawasaki', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(8, 'Super Power', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(9, 'Hi Speed', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(10, 'Unique', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(11, 'Benelli', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(12, 'Vespa', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(13, 'ZXMCO', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(14, 'Sigma', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(15, 'Harley Davidson', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(16, 'asdawsd', '2021-08-28 09:48:39', '2021-08-28 09:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_16_154422_create_bikes_table', 1),
(5, '2021_06_16_154512_create_bike_categories_table', 1),
(6, '2021_06_16_155540_create_products_table', 1),
(7, '2021_07_26_174703_create_blogs_table', 1),
(8, '2021_07_29_145345_create_contact_us_table', 1),
(9, '2021_07_29_151413_create_newsletters_table', 1),
(10, '2021_07_29_163208_create_bike_reviews_table', 1),
(11, '2021_07_30_182624_create_companies_table', 1),
(12, '2021_07_30_183049_create_bike_models_table', 1),
(13, '2021_07_31_143757_create_product_categories_table', 1),
(14, '2021_08_01_174740_create_wishlists_table', 1),
(15, '2021_08_02_084137_create_orders_table', 1),
(16, '2021_08_02_111322_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ammount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `city_id`, `comment`, `user_id`, `vendor_id`, `total_ammount`, `total_quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asd asd', '3463456345', '128 CCA Phase 04 DHA', 409, NULL, 5, '[8]', '1000', '1', 'Pending', '2021-09-20 06:26:42', '2021-09-20 06:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_ammount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `vendor_id`, `unit_price`, `quantity`, `total_ammount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 8, 1000, 1, 1000, 'pending', '2021-09-20 06:26:42', '2021-09-20 06:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity_available` int(11) NOT NULL DEFAULT 1,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for_favourite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity_available`, `brand`, `condition`, `category_id`, `images`, `seller_name`, `seller_phone`, `seller_address`, `for_favourite`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Carrera German Engineered Polish & Wax', 'German engineered polish and wax. Clean all the dirt and camouflage the scratch in your vehicle’s paint Shine without harming your vehicle’s paint Easy to use and carry Efficient and value for money Long-lasting shine.', 1000, 10, 'Honda', 'Good', 2, '[\"1632052846_0_1.jpg\",\"1632052846_1_2.jpg\"]', 'Abdulla', '03212112133', 'shop # 32, ghazi chowk, Lahore', 'product', 8, '2021-09-19 10:00:46', '2021-09-19 10:00:46'),
(2, 'Land Cruiser V8 Toyota Genuine Front Brake Pads', 'The top-quality formulation for your car to pedal feel from the very first stop, with less noise, dust and fade, along with increased stopping power.', 14000, 5, 'Honda', 'New', 1, '[\"1632053595_0_toyota-land-cruiser-v8-toyota-genuine-front-brake-pads-55143402.jpg\"]', 'Abdullah', '0323787688', 'shop 5, DHA Mall', 'product', 8, '2021-09-19 10:13:15', '2021-09-19 10:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tyre', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(2, 'Polish', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(3, 'Car Shampoo', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(4, 'Bumper', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(5, 'Side Mirror', '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(6, 'Disc', '2021-08-11 10:00:02', '2021-08-11 10:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_post_bike` int(11) NOT NULL DEFAULT 0,
  `no_of_post_product` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user_profile.png',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `gender`, `date_of_birth`, `no_of_post_bike`, `no_of_post_product`, `image`, `phone`, `address`, `country`, `city`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ABC', 'admin@gmail.com', NULL, 'admin', 'Admin', NULL, '2021-01-01', 0, 0, 'user_profile.png', '123123123', 'asd', NULL, NULL, NULL, '2021-08-11 10:00:02', '2021-08-11 10:00:02'),
(2, 'MUHAMMAD ABDULLAH ARSHAD', 'abdullah308@gmail.com', NULL, '$2y$10$cFyh0nyilt4/Q6JJF4LM/.cpF1WnFflMvcwXhRqIXAr81xEGJfLzK', 'Non-Dealer', NULL, NULL, 0, 0, 'user_profile.png', '03075143141', 'abdullah', NULL, NULL, NULL, '2021-08-13 16:06:00', '2021-08-13 16:06:00'),
(3, 'MUHAMMAD ABDULLAH ARSHAD', 'abdullaharshad308@gmail.com', NULL, '$2y$10$a1Krnl75k.XlT4OKIUCWme.hJqVrjF7/rFiq4M2s7P1jDp01r1OoO', 'Non-Dealer', NULL, NULL, 0, 0, 'user_profile.png', '03075143141', 'Abdullah street, dogar chowk, lahore', NULL, NULL, NULL, '2021-08-22 15:35:18', '2021-08-22 15:35:18'),
(4, 'ahmed', 'ahmed222@gmail.com', NULL, '$2y$10$UUThdkUJbJKl/lBRRiCyaOWcna6W1UtS1wKrxbWyBqYdXdr6Rk1pK', 'Dealer', NULL, NULL, 0, 0, 'user_profile.png', '03876298369', 'hkgdskfsgakd', NULL, NULL, NULL, '2021-08-22 16:36:59', '2021-08-22 16:36:59'),
(5, 'asd asd', 'hamza.idenbrid@gmail.com', NULL, '$2y$10$CdBVSLCW5qoZvk7o1lD7Eu1OBTYaW3KYCjJERtWwNVZiaMS0a1PRO', 'Dealer', NULL, NULL, 6, 0, 'user_profile.png', '3463456345', '128 CCA Phase 04 DHA', NULL, NULL, NULL, '2021-08-22 16:47:35', '2021-09-27 06:40:47'),
(6, 'Muhammad Ahmad', 'ahmad.idenbrid@gmail.com', NULL, '$2y$10$ycz/mKRwzO4HR6rOwVQxhO1oTA453X.JxGCZx7ByDXNtx8AhdWbI2', 'Dealer', 'Male', '1996-12-11', 1, 0, 'user_profile.png', '03164361632', 'Near Arfa careem tower House # 375', 'Pakistan', NULL, NULL, '2021-09-05 05:11:36', '2021-09-05 08:54:33'),
(7, 'Документ номер WLR1157113WLR2 подготовлен. Смотрите документ12 далее на странице http://apple.com', 'nikitinavikalhs@mail.ru', NULL, '$2y$10$DPxL73.9JkfcPU3o5m9oqOsijNrKQ5iRl8COO4E.IotmnRqCl0V8O', 'Non-Dealer', NULL, NULL, 0, 0, 'user_profile.png', 'nikitinavikalhs@mail.ru', 'Almanya nrw', NULL, NULL, NULL, '2021-09-07 20:29:10', '2021-09-07 20:29:10'),
(8, 'ali', 'fireludo2@gmail.com', NULL, '$2y$10$jNZgl0O/aPqOHldH/DmjN.z4aTPJ88ZFFfrx2GODAesY7JBV/bsw2', 'Dealer', NULL, NULL, 6, 0, 'user_profile.png', '3057659213', 'H90', NULL, NULL, NULL, '2021-09-19 06:59:48', '2021-09-19 10:25:31'),
(9, 'BikesPro', 'bikespro@gmail.com', NULL, '$2y$10$QN1KL3.k835Zo6YEb2kCqe0s/w8.gaCtmF4xQvGJRSdMqwSQrMWGO', 'Dealer', NULL, NULL, 4, 0, 'user_profile.png', '111111123333', 'Near Arfa careem', NULL, NULL, NULL, '2021-09-27 06:15:04', '2021-09-27 06:26:25'),
(10, 'Mr. Martian', 'waleed.idenbrid@gmail.com', NULL, '$2y$10$dUzXh2A2j2GUwST/03i3pu2ubh7LyV2yrENqZ4tdngYfC0SSOkN.G', 'Dealer', NULL, NULL, 2, 0, 'user_profile.png', '00000000000', 'Mars', NULL, NULL, NULL, '2021-09-27 06:16:41', '2021-09-27 06:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_or_bike_id` int(11) NOT NULL,
  `for_favourite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_or_bike_id`, `for_favourite`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 'bike', '2021-08-28 09:43:59', '2021-08-28 09:43:59'),
(2, 5, 2, 'product', '2021-09-19 11:58:03', '2021-09-19 11:58:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_categories`
--
ALTER TABLE `bike_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_models`
--
ALTER TABLE `bike_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_reviews`
--
ALTER TABLE `bike_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bike_categories`
--
ALTER TABLE `bike_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bike_models`
--
ALTER TABLE `bike_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `bike_reviews`
--
ALTER TABLE `bike_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
