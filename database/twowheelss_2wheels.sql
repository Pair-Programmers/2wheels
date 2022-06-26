-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2022 at 12:25 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.4.29

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
  `model_year` int(11) NOT NULL,
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
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
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

INSERT INTO `bikes` (`id`, `name`, `company_id`, `model_year`, `model_id`, `images`, `description`, `engine_type`, `reg_city_id`, `additional_info`, `category`, `price`, `mileage`, `rating`, `no_of_reviews`, `body_type`, `is_active`, `seller_name`, `seller_phone`, `seller_comment`, `seller_address`, `for_favourite`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'Honda CB 150F 2021', 1, 2021, 2, '[\"1630826411_0_honda-cb-150.png\"]', 'Pakistan’s largest bike manufacturer, Atlas Honda, has launched 2021 CB 125F for its customers in Pakistan and to grab more market share. The bike has been launched in two different versions; basic and special edition.', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"Disc Brake\",\"Led Light\",\"0\"]', 'New Bike', 205500, 0, 5, 0, 'Standard', 1, 'Honda', '03164361632', 'Easy to sell', 'Near Arfa careem tower House # 375', 'bike', 6, '2021-09-05 05:20:11', '2022-05-08 06:24:21'),
(7, 'Honda CD 70 1940', 1, 1940, 1, '[\"1632042904_0_cd-70.jpg\"]', 'It would be fair enough to say that the new model Honda CD 70 2021 is the pioneer of high standard super economy 70cc bikes in Pakistan.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\", \"0\"]', 'New Bike', 86900, 80, 5, 0, 'Standard', 1, 'abdullah', '923012468468', 'somewhere in lahore', 'somewhere in lahore', 'bike', 8, '2021-09-19 07:15:04', '2022-05-08 06:24:21'),
(8, 'Benelli TNT 150i 2021', 11, 2021, 56, '[\"1632045340_0_Benelli_TNT_150.jpg\"]', 'Benelli has launched the much awaited Benelli TNT 150 in Pakistan. Benelli TNT 150i comes with 150 cc engine producing 14 HP_@_9000 RPM and 11.5 NM _@_ 7000. The engine is mated with the 5-speed transmission. Benelli TNT 150 2021 power to weight ratio is aesthetically managed to produce the better response for the riders. Benelli TNT 150 price in Pakistan is kept competitive to perform better against the other rival models available in Pakistan, Suzuki GS 150SE, Suzuki GR 150 and Honda CB 150F. Benelli TNT 150i is available in the price of 370000PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 440000, 45, 5, 0, 'Heavy Bike', 1, 'abdullah', '03012000000', NULL, 'lahore', 'bike', 8, '2021-09-19 07:55:41', '2022-05-08 06:24:21'),
(9, 'Benelli TNT 600 2021', 11, 2021, 59, '[\"1632050923_0_Benelli_TNT_600.jpg\"]', 'Benelli launched the much awaited Benelli TNT 600 in Pakistan. The price of TNT 600 is 1100000/ PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 1400000, 19, 5, 0, 'Heavy Bike', 1, 'abdullah', '03000000000', NULL, 'lahore', 'bike', 8, '2021-09-19 09:28:43', '2022-05-08 06:24:21'),
(10, 'Yamaha YBR 125 2021', 2, 2021, 7, '[\"1632051709_0_yb-100-zdx.jpg\"]', 'Yamaha YB 125Z-DX was designed in a straightforward and rugged design to cache into the conventional market of local consumers. Yamaha YBR 125Z-DX possesses the same engine as of Yamaha YBR 125. Yamaha YBR 125Z-DX has powerful shocks that are the key to a comfortable and smooth ride of this bike. The alluring speedometer has an and fuel indicator. The significantly broad and comfortable seat of Yamaha YBR 125Z-DX ensures good backbone support on long journeys.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 190000, 50, 5, 0, 'Standard', 1, 'abdullah', '03000000000', NULL, 'lahore', 'bike', 8, '2021-09-19 09:41:49', '2022-05-08 06:24:21'),
(11, 'Yamaha YBR 125 2021', 2, 2021, 7, '[\"1632053860_0_Yamaha_YBR125_2015.jpg\"]', 'Yamaha YBR 125 is a pioneer of a quality sports bike in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight, Yamaha Ybr 125 is worth every penny you spend. Yamaha Ybr 125cc possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go miles without worrying about refilling fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find used Yamaha Bikes on PakWheels listings.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 196000, 57, 5, 0, 'Sports Bike', 1, 'abdullah', '0300000000', NULL, 'lahore', 'bike', 8, '2021-09-19 10:17:40', '2022-05-08 06:24:21'),
(12, 'Yamaha YZF-R6 2021', 2, 2021, 11, '[\"1632054331_0_Yamaha_R3_2018.jpg\"]', 'Yamaha R series set the benchmark for the biking enthusiast to a whole new level. To provide with the ample thrust and dazzling looks Yamaha launched the YZF- R3 which is commonly known as Yamaha R3. Yamaha YZF R3 was launched to compete with the 300 cc entry-level sportbikes like Kawasaki have Ninja 300 in this segment. Check the prices and specs of Yamaha R3 in Pakistan on Pakwheels. You can also find the used Yamaha R3 on Pakwheels', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 3510000, 27, 5, 0, 'Heavy Bike', 1, 'abdullah', '0300000000', NULL, 'lahore', 'bike', 8, '2021-09-19 10:25:31', '2022-05-08 06:24:21'),
(13, 'Road Prince RP 70 Passion 2021', 6, 2021, 32, '[\"1632730647_0_Road_Prince_RP110.jpg\"]', 'Road Prince RP 110 is a reasonably priced bike with a powerful 110cc engine power. Road Prince is proud to present such a powerful bike while maintaining the price tag in times of high inflation.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 52000, 0, 3, 0, 'Standard', 1, 'BikePro', '12345', 'yes ok', 'Near Arfa careem', 'bike', 9, '2021-09-27 06:17:27', '2022-05-08 06:24:21'),
(14, 'Road Prince Wego 150 1940', 6, 1940, 33, '[\"1646032553_0_Screenshot (1).png\"]', 'Road Prince Wego is a pioneer of economical sports bikes in Pakistan', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\",\"0\"]', 'New Bike', 255000, 0, 3, 0, 'Standard', 1, 'BikePro', '030067898', 'Easy to sell', 'Near Arfa careem Colony Street no 4', 'bike', 1, '2021-09-27 06:20:05', '2022-05-08 06:24:21'),
(15, 'Super Power SP 70 2021', 8, 2021, 43, '[\"1632730856_0_super_power_cover.jpg\"]', NULL, '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 70000, 0, 3, 0, 'Standard', 1, 'Abdulla', '03239121121', NULL, '234, Defence, Lahore', 'bike', 5, '2021-09-27 06:20:56', '2022-05-08 06:24:21'),
(16, 'Harley Davidson Iron 883 2021', 15, 2021, 78, '[\"1632730973_0_3.jpg\",\"1632730973_1_2.jpg\",\"1632730973_2_1.jpg\"]', 'Engine	Liquid-cooled, four-stroke single with DOHC and four valves	Displacement	883 cc Bore & Stroke	76.2 x 96.8 mm	Compression Ratio	9.0:1 Clutch	N/A	Transmission	5-speed Starting	electric/kickstart	Frame	Mild Steel-Tubular Frame, Circular Section, Cast Junctions Dimension (Lxwxh)	2185	Ground Clearance	140 mm Petrol Capacity	12.5 L	Tyre at Front	100 - 19 Tyre at Back	150 - 16	Dry Weight	247 KG', '4-stroke', 'Lahore', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 2400000, 12, 1, 1, 'Standard', 1, 'Abdullah', '00000000000', NULL, 'Mars', 'bike', 10, '2021-09-27 06:22:53', '2022-05-08 06:24:21'),
(17, 'Road Prince Robinson 150 2021', 6, 2021, 37, '[\"1632730975_0_Road_Prince.jpg\"]', 'Road Prince is an organic home-grown brand that started off by three brothers who envisioned a motorcycle brand for Pakistan. The thought behind it was to create motor', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 270000, 0, 3, 0, 'Standard', 1, 'BikePro', '031678456', 'Easy to sell', 'Near Arfa', 'bike', 9, '2021-09-27 06:22:55', '2022-05-08 06:24:21'),
(18, 'Super Power Leo 200 2021', 8, 2021, 44, '[\"1632731168_0_Super_Power_Leo_200.jpg\"]', 'Super Power Leo 200 comes with the powerful engine, alloy wheels, and sporty outlook.  Super Power has a contemporary and elegant design to allure young biker enthusiasts in the country. Super Power Leo 200 is also known as Loncin GP 200. The main difference between international and local variants is that in Pakistan it comes with 5-speed transmission while GP 200 comes in 6-speed transmission. Super Power Leo 200 has an overhead valve engine with a compression ratio of 9.2.1. The overall look of  Super Power Leo 200 is quite appealing. Super Power Leo 200 price in Pakistan is 2 lacs PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 200000, 0, 3, 0, 'Sports Bike', 1, 'Abdulla', '03222229222', NULL, 'shop # 6, multan road, Lahore', 'bike', 5, '2021-09-27 06:26:08', '2021-09-27 06:26:08'),
(19, 'Road Prince RP 125 Euro II 2021', 6, 2021, 35, '[\"1632731185_0_Road_Prince_RP125.jpg\"]', 'Best quality against honda and fuel average same vs honda Best quality against honda and fuel average same vs honda Best quality against honda and fuel average same vs honda Best quality against...', '4-stroke', 'Lahore', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 77500, 0, 3, 0, 'Standard', 1, 'BikePro', '03164361632', 'Easy to sell', 'Near Arfa careem', 'bike', 9, '2021-09-27 06:26:25', '2022-05-08 06:24:21'),
(20, 'Harley Davidson Night Rod Special 2021', 15, 2021, 80, '[\"1632731245_0_HARLEY-DAVIDSON-V-Rod_back.jpg\",\"1632731245_1_harley-davidson-v-rod_3.jpg\"]', 'Engine	4T Liquid-Cooled, Revolution, 60 Degree V-Twin	Displacement	1247 cc Bore & Stroke	100 x 72 mm	Compression Ratio	11.5:1 Clutch	Nine plate wet pressure	Transmission	5-speed Starting	Electric	Frame	Steel perimeter upper frame Dimension (Lxwxh)	2440	Ground Clearance	115 mm Petrol Capacity	18.9 L	Tyre at Front	120 - 19 Tyre at Back	240 - 18	Dry Weight	302 KG', '4-stroke', 'Lahore', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 3400000, 18, 3, 0, 'Standard', 1, 'Abdullah', '00000000000', NULL, 'Mars', 'bike', 10, '2021-09-27 06:27:25', '2022-05-08 06:24:21'),
(21, 'Unique Xtreme UD 70 2021', 10, 2021, 51, '[\"1632731389_0_Unique_UD70.jpg\"]', 'Unique Xtreme UD 70 proclaims to be a trustworthy road partner with multi-colour body graphics. Unique Xtreme UD 70 has a reasonable resale value in the used bike market. Unique Xtreme UD 70 is Equipped with Euro II technology which enhances the fuel economy of the motorcycle. Unique UD 70 is quite similar to other 70cc bikes available in the market. Unique UD 70 is available in black and red color.', '4-stroke', 'Lahore', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 65000, 0, 3, 0, 'Standard', 1, 'Abdullah', '0322334334', NULL, '128 CCA Phase 04 DHA', 'bike', 5, '2021-09-27 06:29:49', '2021-09-27 06:29:49'),
(22, 'Vespa 150cc 2021', 12, 2021, 61, '[\"1632732047_0_Vespa_Primavera.jpg\"]', 'Vespa is making a comeback in Pakistan with the Vespa Primavera 150. Vespa is an Italian icon that has made its mark in the automotive world throughout the globe. Vespa Primavera is launched in 4 colors Black, Red, Blue and White. Vespa Primavera 150 price in Pakistan is Rs. 299000 PKR.', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'New Bike', 299000, 0, 4, 3, 'Scooter', 1, 'Abdullah', '03232239932', NULL, 'palaza 2, near Defence Housing Society', 'bike', 5, '2021-09-27 06:40:47', '2022-05-08 06:24:21'),
(23, 'Super Power SP 70 1983', 8, 1983, 43, '[\"1641149853_0_b.jpg\"]', 'Et voluptatem ullam', '4-stroke', 'Allahabad', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'Used Bike', 95000, 3, 3, 0, 'Trail', 1, 'Nathaniel Baxter', '25', 'Consequatur exceptur', 'In quaerat sapiente', 'bike', 11, '2022-01-02 13:57:33', '2022-05-08 06:24:21'),
(24, 'Honda CB 150F 2002', 1, 2002, 2, '[\"1641149912_0_b2.jpg\"]', 'Officia et consequat', '2-stroke', 'Kallur kot', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\",\"Wind Shield\"]', 'Used Bike', 70000, 74, 3, 0, 'Sports Bike', 1, 'Katelyn Oliver', '2', 'Illo lorem modi et e', 'Id rerum provident', 'bike', 11, '2022-01-02 13:58:32', '2022-05-08 06:24:21'),
(25, 'Yamaha YBR 125 1971', 2, 1971, 7, '[\"1641149945_0_RED_Prana1.jpg\"]', 'Ad inventore iusto e', '2-stroke', 'Kamalia musa', '[\"0\",\"0\",\"0\",\"0\"]', 'New Bike', 120000, 86, 3, 0, 'Standard', 1, 'Oliver Crane', '41', 'Culpa minima accusa', 'Quam animi architec', 'bike', 1, '2022-01-02 13:59:05', '2022-05-08 06:24:21'),
(26, 'Chinese Bike OW Ninja 250cc 1972', 4, 1972, 20, '[\"1641150036_0_RED_Prana1.jpg\"]', 'Ut consequuntur quod', '4-stroke', 'Jalalpur Jattan', '[\"0\",\"Anti Theft Lock\",\"0\",\"Disc Brake\",\"0\",\"Wind Shield\"]', 'Used Bike', 300000, 71, 3, 0, 'Heavy Bike', 1, 'Drew Cunningham', '92', 'Aut perferendis do o', 'Consequatur molestia', 'bike', 11, '2022-01-02 14:00:36', '2022-05-08 06:24:21'),
(27, 'Kawasaki Ninja 250R 2015', 7, 2015, 38, '[\"1641150089_0_svm-prana-elite-640.jpg\"]', 'Consequat Mollitia', '4-stroke', 'Hattian', '[\"0\",\"0\",\"Disc Brake\",\"Led Light\",\"0\"]', 'Used Bike', 505000, 88, 3, 0, 'Heavy Bike', 1, 'Rylee Glass', '80', 'Facere aliqua Aute', 'Eius nostrum repudia', 'bike', 11, '2022-01-02 14:01:29', '2022-05-08 06:24:21'),
(28, 'Chinese Bike OW Ninja 250cc 2014', 4, 2014, 20, '[\"1641151331_0_yamaha-bike-500x500.png\"]', 'Voluptatem est et d', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"Disc Brake\",\"Led Light\",\"0\"]', 'Used Bike', 2715555, 4955, 3, 0, 'Sports Bike', 1, 'Raven Goodwin', '45', 'Dolor fugit saepe d', 'Laborum eveniet min', 'bike', 11, '2022-01-02 14:22:11', '2022-05-08 06:24:21'),
(29, 'Unique Xtreme UD 70 2015', 10, 2015, 51, '[\"1643034347_0_Unique-UD-70-New-Model-Bike.jpg\"]', 'This bike is in very good condition with geniune spareparts.', '2-stroke', 'Hub-Balochistan', '[\"0\",\"0\",\"0\",\"Wind Shield\"]', 'Used Bike', 80000, 20, 3, 0, 'Standard', 1, 'iftikhar', '03148144141', 'anyone interested then please call me', 'killi mullazai kuchlak quetta', 'bike', 12, '2022-01-24 13:25:47', '2022-05-08 06:24:21'),
(30, 'Honda CD 70 2021', 1, 2021, 1, '[\"1643988828_0_Capture.PNG\"]', 'Bike for sale for further details please contact me.', '2-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'Used Bike', 25000, 0, 3, 0, 'Standard', 1, 'Malik Saefy', '3081412511', 'new bike in good condition', 'faisalAbad', 'bike', 12, '2022-02-04 14:33:49', '2022-05-08 06:24:21'),
(31, 'Honda CD 70 2021', 1, 2021, 1, '[\"1643988857_0_Capture.PNG\"]', 'Bike for sale for further details please contact me.', '2-stroke', 'Un-Registered', '[\"0\",\"0\",\"0\"]', 'Used Bike', 25000, 0, 3, 0, 'Standard', 1, 'Malik Saefy', '3081412511', 'new bike in good condition', 'faisalAbad', 'bike', 12, '2022-02-04 14:34:17', '2022-05-08 06:24:21'),
(32, 'Honda CG 125 Deluxe 2018', 1, 2018, 4, '[\"1645615587_0_hondacg2.webp\"]', 'Honda CG125 in good condition', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 91000, 2000, 3, 0, 'Standard', 1, 'MurtazaBaloch', '923334738913', 'for good deal please contact', 'multan road lahore', 'bike', 14, '2022-02-23 10:26:27', '2022-05-08 06:24:21'),
(33, 'Honda CG 125 Deluxe 2002', 1, 2002, 4, '[\"1645617358_0_hond21.webp\",\"1645617358_1_honda22.webp\",\"1645617358_2_honda23.webp\",\"1645617358_3_honda24.webp\",\"1645617358_4_honda25.webp\",\"1645617359_5_honda26.webp\"]', 'honda 2002model۔orignal book۔orignal number plate۔jenuine tanky tapy', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 85000, 3000, 3, 0, 'Standard', 1, 'Sardar Mudassir', '923335796978', 'need cash good condition', 'dhoke sayedan rawalpindi', 'bike', 15, '2022-02-23 10:55:59', '2022-05-08 06:24:21'),
(34, 'Honda CD 70 1994', 1, 1994, 1, '[\"1645617559_0_Capture1.PNG\"]', 'Restored in Genuine Honda Spare Parts Brand New Engine Just 690KM Driven Used with Extreme Care Antique Bike & Only for Vintage Bike Lover\'s Bike ownership is on my Name If anyone interested contact me on my Cell number & plz don\'t make foolish offers.  JazakALLAH', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 68000, 690, 3, 0, 'Standard', 1, 'Zain Shah', '923201411512', 'Good Condition', 'Al Faisal Town, Lahore', 'bike', 16, '2022-02-23 10:59:19', '2022-05-08 06:24:21'),
(35, 'Honda CG 125 Deluxe 2019', 1, 2019, 4, '[\"1645618871_0_honda31.webp\",\"1645618871_1_honda32.webp\",\"1645618871_2_honda33.webp\",\"1645618871_3_honda34.webp\",\"1645618871_4_honda35.webp\",\"1645618871_5_honda36.webp\"]', 'bht kam chala howa ha only 2450 killometer chala howa ha rate final', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 145000, 2450, 3, 0, 'Standard', 1, 'Omer sheikh', '923328666694', 'honda 125 2019 november self start low millage', 'faisalabad punjab', 'bike', 17, '2022-02-23 11:21:11', '2022-05-08 06:24:21'),
(36, 'Honda CG 125 Deluxe 2020', 1, 2020, 4, '[\"1645620997_0_honda41.webp\",\"1645620997_1_honda42.webp\",\"1645620997_2_honda43.webp\",\"1645620997_3_honda44.webp\",\"1645620997_4_honda45.webp\"]', 'need money rate fully final', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 112000, 2600, 3, 0, 'Standard', 1, 'faizanAhmad', '923117517162', 'price final', 'faisalabad punjab', 'bike', 19, '2022-02-23 11:56:37', '2022-05-08 06:24:21'),
(37, 'Honda CD 70 2021', 1, 2021, 1, '[\"1645622130_0_sheikh.jpg\"]', 'Honda CD-70 Only 30-35 days use Registered 2022 2022 Patta Almost Zero meter Saaf Seesha bike 125 Leni he islie sell kr raha hun', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 98000, 7, 3, 0, 'Standard', 1, 'Sheikh', '923107867266', NULL, 'Shah Latif Town, Karachi', 'bike', 18, '2022-02-23 12:15:30', '2022-05-08 06:24:21'),
(38, 'Honda CD 70 2019', 1, 2019, 1, '[\"1645622511_0_mumtazjamil.jpg\"]', 'Honda CD (View phone number) model Total genuine  Sub kuch  original hai koi aik cheez Bhi change nhi hoi  10/10 condition hain kisi kasam ka koi kaam nhi hony wala  Battery new dalwai hai khali 32000 km chali hoi hai Single hand used  All documents available  Location Lahore canal bank cooperative housing society (Gulbahar), near thokar niaz baig, Lahore.  Berae meherbani khali serious log rabta keren dealer hazraat se mazarat.', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 75000, 3200, 3, 0, 'Standard', 1, 'Mumtaz Jamil', '923003399751', NULL, 'Lahore Canal Bank Cooperative Housing Society, Lahore', 'bike', 20, '2022-02-23 12:21:51', '2022-05-08 06:24:21'),
(39, 'Honda CD 70 2019', 1, 2019, 1, '[\"1645623008_0_shahid2.jpg\"]', 'honda 70 model 2019 total 100% geniune condition home use bohat kam use ki hai sirf 17500 km chali hai 125 le lia hai is liay sale kr raha hoon bike main koi bhi kaam nahi honay wala just buy and drive all orignal document and smart card available', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 76000, 17500, 3, 0, 'Standard', 1, 'shahid', '923219466441', NULL, 'Township, Lahore', 'bike', 21, '2022-02-23 12:30:08', '2022-05-08 06:24:21'),
(40, 'Honda CB 125F 2021', 1, 2021, 6, '[\"1645623226_0_honda52.webp\",\"1645623226_1_honda53.webp\",\"1645623226_2_honda54.webp\"]', 'yes bcoz i purchased a new', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 129500, 1245, 3, 0, 'Standard', 1, 'imran sahir', '923005280547', 'for good deal please contact', 'Rahmat colony lahore', 'bike', 22, '2022-02-23 12:33:46', '2022-05-08 06:24:21'),
(41, 'Honda CD 70 2016', 1, 2016, 1, '[\"1645623564_0_Ibrahim.jpg\"]', 'all docoments clear', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 60000, 18000, 3, 0, 'Standard', 1, 'Ibrahim', '923244329630', NULL, 'Ferozepur Road, Lahore', 'bike', 23, '2022-02-23 12:39:24', '2022-05-08 06:24:21'),
(42, 'Honda CB 125F 2021', 1, 2021, 6, '[\"1645624157_0_honda61.webp\",\"1645624157_1_honda62.webp\",\"1645624157_2_honda63.webp\"]', 'I want sale bike honda 125 black colour  First hand  Condition 9/10 Documents clear Bike is original condition Exchange Cd 70  Suzuki bike', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 122000, 5835, 3, 0, 'Standard', 1, 'bhatti', '923334113889', 'good condition, exchange possible', 'shadbagh lahore', 'bike', 24, '2022-02-23 12:49:17', '2022-05-08 06:24:21'),
(43, 'Honda CD 70 2015', 1, 2015, 1, '[\"1645624168_0_Rajpootbhai.jpg\"]', 'new tyer new rim like aa new bike first hand use no any work required.', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 55000, 21000, 3, 0, 'Standard', 1, 'Rajpoot Bhai', '923084173231', NULL, 'Paragon City, Lahore', 'bike', 25, '2022-02-23 12:49:28', '2022-05-08 06:24:21'),
(44, 'Honda CB 150F 2021', 1, 2021, 2, '[\"1645624858_0_honda71.webp\",\"1645624858_1_honda72.webp\",\"1645624858_2_honda73.webp\",\"1645624858_3_honda74.webp\",\"1645624858_4_honda75.webp\"]', 'new honda 125 only 2300km drive bilkul new jesa open leter he jo le ga us k name ka nmber lge ga prize almost final he', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 140000, 2300, 3, 0, 'Standard', 1, 'mehar jawad', '923156593160', 'for good deal please contact', 'kasur punjab', 'bike', 26, '2022-02-23 13:00:58', '2022-05-08 06:24:21'),
(45, 'Honda CD 70 2017', 1, 2017, 1, '[\"1645625032_0_Haziq.jpg\"]', 'honda (View phone number) model tanky tapy 2016 k hien soundless engine condition normel he orignol copy or complete file he urgent sale sode baaz bnday door rahien serious buyers zroorat mand hazraat rabta krien shukriya', '2-stroke', 'Karachi', '[\"0\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 50000, 18000, 3, 0, 'Standard', 1, 'Haziq', '923230000333', NULL, 'Karachi', 'bike', 27, '2022-02-23 13:03:52', '2022-05-08 06:24:21'),
(46, 'Honda CG 125 Deluxe 2021', 1, 2021, 4, '[\"1645625648_0_honda81.webp\",\"1645625648_1_honda82.webp\",\"1645625648_2_honda83.webp\",\"1645625648_3_honda84.webp\"]', 'honda +923094192258 orignal  one hand use injan k koi kam nahi hona wala  jis bhai my lena hu rabta karn  chaska stay away', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 130000, 3456, 3, 0, 'Standard', 1, 'hamza', '923094192258', 'for good deal please contact', 'township lahore', 'bike', 28, '2022-02-23 13:14:08', '2022-05-08 06:24:21'),
(47, 'Honda CD 70 2014', 1, 2014, 1, '[\"1645625780_0_malikabbas.jpg\"]', 'serious log rabta karen chaska party door rahe', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 46500, 20000, 3, 0, 'Standard', 1, 'Malik Abbas', '923027091851', NULL, 'Karachi', 'bike', 29, '2022-02-23 13:16:20', '2022-05-08 06:24:21'),
(48, 'Honda CD 70 2018', 1, 2018, 1, '[\"1645626214_0_Hussnain.jpg\"]', 'Honda 70 Good condition one hand use Faisalabad ka number ha 2018 modal complete dacomints koi ksi kism ka kam ni hony wala engine 100%  perfect location jhng rod  ayub research', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 67000, 18000, 3, 0, 'Standard', 1, 'Hussnain', '923127869300', NULL, 'Karachi', 'bike', 30, '2022-02-23 13:23:34', '2022-05-08 06:24:21'),
(49, 'Honda CB 125F 2020', 1, 2020, 6, '[\"1645626399_0_honda91.webp\",\"1645626399_1_honda92.webp\",\"1645626399_2_honda93.webp\",\"1645626399_3_honda94.webp\",\"1645626399_4_hondacg2.webp\"]', 'bike all oky ha condition brand new', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 100000, 55182, 3, 0, 'Standard', 1, 'haseeb', '923239569247', 'for good deal please contact', 'daska punjab', 'bike', 31, '2022-02-23 13:26:39', '2022-05-08 06:24:21'),
(50, 'Honda CD 70 2021', 1, 2021, 1, '[\"1645626511_0_Zainmubeen.jpg\"]', 'Honda cd 70 Full lush Condition Number laga hova hai. .  Sir 6 hazar kilometers chali hai. .  Original document or copy bhe hai. . .', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 83000, 6000, 3, 0, 'Standard', 1, 'Zain Mubeen', '923059281779', NULL, 'Karachi', 'bike', 32, '2022-02-23 13:28:31', '2022-05-08 06:24:21'),
(51, 'Honda CD 70 2016', 1, 2016, 1, '[\"1645626767_0_fahad.jpg\"]', 'honda CD (View phone number) model look like zero metrer condition 9/10', '2-stroke', 'Islamabad', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 75000, 17000, 3, 0, 'Standard', 1, 'Fahad', '923326681019', NULL, 'Islamabad', 'bike', 33, '2022-02-23 13:32:48', '2022-05-08 06:24:21'),
(52, 'Honda CB 125F 2014', 1, 2014, 6, '[\"1645627099_0_honda101.webp\",\"1645627099_1_honda102.webp\",\"1645627099_2_honda103.webp\"]', 'Honda 125 model 14 good condition  mardan number hai Blue color hai  bike bilkul ok hai location shewa adda', '2-stroke', 'Peshawar', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 70000, 76543, 3, 0, 'Standard', 1, 'iqrar khan', '923405564316', 'for good deal please contact', 'swabi', 'bike', 34, '2022-02-23 13:38:19', '2022-05-08 06:24:21'),
(53, 'Honda CD 70 2015', 1, 2015, 1, '[\"1645627393_0_kamran.jpg\"]', 'Honda 70 bai capy latr bi ok ha f. ka nabr ha', '2-stroke', 'Rawalpindi', '[\"0\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 52000, 19000, 3, 0, 'Standard', 1, 'Kamran', '923143923119', NULL, 'Rawalpindi', 'bike', 35, '2022-02-23 13:43:13', '2022-05-08 06:24:21'),
(54, 'Honda CD 70 2008', 1, 2008, 1, '[\"1645627765_0_usman.jpg\"]', 'Honda cd70 red color Faisalabad number good condition new tyer dono new original Honda ki head light new bettry osaka ki new horn recently engine overall krwaya hai new chain seet honda company sy only serious buyers call me plz chaska party and deelar plz add sty away', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 41000, 19000, 3, 0, 'Standard', 1, 'USman', '923067813431', NULL, 'Karachi', 'bike', 36, '2022-02-23 13:49:25', '2022-05-08 06:24:21'),
(55, 'Honda CD 70 2016', 1, 2016, 1, '[\"1645628192_0_haji.jpg\"]', 'Honda 70  copy later file complete', '2-stroke', 'Lahore', '[\"0\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 50000, 16000, 3, 0, 'Standard', 1, 'Haji Sab', '923467230286', NULL, 'Lahore', 'bike', 37, '2022-02-23 13:56:32', '2022-05-08 06:24:21'),
(56, 'Honda CD 70 2014', 1, 2014, 1, '[\"1645628460_0_electronic.jpg\"]', '1 Hand used  Honda cd 70  red color', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 55000, 21000, 3, 0, 'Standard', 1, 'BI Electronic', '923139744866', NULL, 'Lahore', 'bike', 38, '2022-02-23 14:01:00', '2022-05-08 06:24:21'),
(57, 'Honda CD 70 2021', 1, 2021, 1, '[\"1645628741_0_hamza.jpg\"]', 'applied for h no nhi laga  7200 km chli h totally genuine h please call kry jis ny b leni ho', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 79000, 7200, 3, 0, 'Standard', 1, 'Ali Hamza', '923477071780', NULL, 'Lahore', 'bike', 39, '2022-02-23 14:05:41', '2022-05-08 06:24:21'),
(58, 'Honda CD 70 2021', 1, 2021, 1, '[\"1645629161_0_atifmehmod.jpg\"]', 'Honda (View phone number) model Just 8000km used With flash light Genuine owner Copy amd letter pad original Lush condition', '2-stroke', 'Lahore', '[\"0\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 88000, 8000, 3, 0, 'Standard', 1, 'Atif Mehmood', '923177018640', NULL, 'Lahore', 'bike', 40, '2022-02-23 14:12:41', '2022-05-08 06:24:21'),
(59, 'Honda CD 70 2021', 1, 2021, 1, '[\"1645629450_0_malikimran.jpg\"]', '2021 honda70 bilkol ok ha 10.10', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 84000, 16000, 3, 0, 'Standard', 1, 'Malik Imran', '923480823980', NULL, 'Lahore', 'bike', 41, '2022-02-23 14:17:30', '2022-05-08 06:24:21'),
(60, 'Honda CD 70 2004', 1, 2004, 1, '[\"1645672489_0_bilalsheikh.jpg\"]', 'all ok hai koi msla nhi all genuine hai a to z if u r interested call me', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 35000, 25000, 3, 0, 'Standard', 1, 'Bilal Shiekh', '923044100433', NULL, 'Thokar Niaz Baig, Lahore', 'bike', 42, '2022-02-24 02:14:49', '2022-05-08 06:24:21'),
(61, 'Honda CD 70 2010', 1, 2010, 1, '[\"1645672814_0_kashif2.jpg\"]', 'copy file clear ha . . engine b thk ha garari set new ha tanki tape orginal ha tyer murgad new han sirf paiso ki zarorat ha', '2-stroke', 'Lahore', '[\"0\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 38500, 22000, 3, 0, 'Standard', 1, 'Kashif', '923134464943', NULL, 'Youhanabad,Lahore,Punjab', 'bike', 43, '2022-02-24 02:20:14', '2022-05-08 06:24:21'),
(62, 'Honda CD 70 2016', 1, 2016, 1, '[\"1645673174_0_sohail.jpg\"]', '2016 Red honda 70 used bike', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 49500, 23000, 3, 0, 'Standard', 1, 'Sohail', '923248473129', NULL, 'DHA Phase 3, Lahore', 'bike', 44, '2022-02-24 02:26:14', '2022-05-08 06:24:21'),
(63, 'Honda CD 70 2017', 1, 2017, 1, '[\"1645673465_0_qasimawan.jpg\"]', 'Paiso ki emergency zrort hy dacoment all oky Hy Lush condition hy', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 45000, 24000, 3, 0, 'Standard', 1, 'Qasim Awan', '923004446607', NULL, 'Elite Town, Lahore', 'bike', 45, '2022-02-24 02:31:05', '2022-05-08 06:24:21'),
(64, 'Honda CD 70 2006', 1, 2006, 1, '[\"1645674545_0_muhammadtayyab.jpg\"]', 'docoments sab ok h mobile number', '2-stroke', 'Lahore', '[\"0\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 35000, 25000, 3, 0, 'Standard', 1, 'Muhammad tayyab', '923214667713', NULL, 'DHA 9 Town, Lahore', 'bike', 46, '2022-02-24 02:49:05', '2022-05-08 06:24:21'),
(65, 'Unique Xtreme UD 70 2021', 10, 2021, 51, '[\"1645689585_0_unique11.webp\",\"1645689585_1_unique12.webp\",\"1645689585_2_unique13.webp\",\"1645689585_3_unique14.webp\"]', 'February 2021 ki registration hai, 1st owner, complete documents, cplc clear. Location: Al-Noor block 19 F. B. Area.', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 56000, 3000, 3, 0, 'Standard', 1, 'wajahat zia', '923322457942', 'for good deal please contact', 'anchli karachi sindh', 'bike', 47, '2022-02-24 06:59:45', '2022-05-08 06:24:21'),
(66, 'Unique Xtreme UD 70 2020', 10, 2020, 51, '[\"1645690520_0_unique21.webp\",\"1645690520_1_unique22.webp\",\"1645690520_2_unique23.webp\",\"1645690520_3_unique24.webp\",\"1645690520_4_unique25.webp\"]', 'unique 70cc march model 2020 fine condition first owner just buy and ride  new chain spoket new barrings new break shoe new tyres and tubes meter or indicators b rkhe hwe hain 47000 se kam walo k liye muazrat replay b nhi dia jaega', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 50000, 5564, 3, 0, 'Standard', 1, 'Ali Abbas', '923178955317', 'for good deal please contact', 'liaqat abbad karachi', 'bike', 48, '2022-02-24 07:15:20', '2022-05-08 06:24:21'),
(67, 'Unique Xtreme UD 70 2014', 10, 2014, 51, '[\"1645710568_0_unique31.webp\",\"1645710568_1_unique32.webp\",\"1645710568_2_unique33.webp\"]', 'number laga hua hy dg khan ka hy', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 25000, 6748, 3, 0, 'Standard', 1, 'khan', '923493625419', 'Unique 70 2014 good condition 9 of 10 condition', 'kot addu', 'bike', 49, '2022-02-24 12:49:28', '2022-05-08 06:24:21'),
(68, 'Unique Xtreme UD 70 2008', 10, 2008, 51, '[\"1645712172_0_unique41.webp\"]', 'Good Condition of bike no need of work every thing is ok', '2-stroke', 'Hayatabad', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 27000, 65632, 3, 0, 'Standard', 1, 'abdul wadood', '923352860457', 'for good deal please contact', 'hyderabad', 'bike', 50, '2022-02-24 13:16:12', '2022-05-08 06:24:21'),
(69, 'Unique Xtreme UD 70 2020', 10, 2020, 51, '[\"1645713025_0_unique51.webp\",\"1645713025_1_unique52.webp\",\"1645713025_2_unique53.webp\",\"1645713025_3_unique54.webp\",\"1645713025_4_unique55.webp\"]', 'Unique 2020 model. .  open voucher. .  12/12/2020 ko nikli hue hai. .  10 by 10 condition. . .  full ok hai bike. .  no bargaining no exchange. .  Price final hai. .', '2-stroke', 'Peshawar', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 45000, 2000, 3, 0, 'Standard', 1, 'ahsan ahmad khattak', '923499022201', 'fresh conidition 2020', 'manshera khaber pakhtun khwa', 'bike', 51, '2022-02-24 13:30:25', '2022-05-08 06:24:21'),
(70, 'Unique UD 100 2013', 10, 2013, 52, '[\"1645713770_0_unique61.webp\",\"1645713770_1_unique62.webp\",\"1645713770_2_unique63.webp\",\"1645713770_3_unique65.webp\"]', 'Unique 100cc 2013 in excellent condition. no work is required. 1 owner.', '2-stroke', 'Karachi', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 60000, 3792, 3, 0, 'Standard', 1, 'rumman khan', '923432236708', 'Unique 100cc Model 2013', 'ancholi', 'bike', 52, '2022-02-24 13:42:50', '2022-05-08 06:24:21'),
(71, 'Super Power SP 70 2021', 8, 2021, 43, '[\"1645726376_0_superroad11.webp\"]', 'Cash 67900 without registration.             (Easy installment available)                   Advance (View phone number) stallment 3500 /4000/ 4500 /5000 only for only Malir Shah Faisal korangi Karachi', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 67500, 0, 3, 0, 'Standard', 1, 'Hassan', '923129242856', 'for good deal please contact', 'Malir, karachi, sindh', 'bike', 53, '2022-02-24 17:12:56', '2022-05-08 06:24:21'),
(72, 'Unique Xtreme UD 70 2021', 10, 2021, 51, '[\"1645727844_0_unique d2.webp\"]', 'Cash 65000 Only Cash with out Registrations                           (        Easy On installments Available.      ).        Advance 20000 / 15000/ 10000/ installments 5000/ per month Only For Only Malir , shah Faisal and Korangi', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 70000, 0, 3, 0, 'Standard', 1, 'hassan', '923129242856', 'Unique, Super Power, Super Star, Bionic and Union Star', 'Malir, karachi,sindh', 'bike', 54, '2022-02-24 17:37:24', '2022-05-08 06:24:21'),
(73, 'Super Power SP 70 2021', 8, 2021, 43, '[\"1645728955_0_superroad11.webp\"]', '68900 Cash With Out registration             ( Easy installment available).              Advance 15000/20000/25000/30000.  Installment 3500/4000/4500/5000 Only only for Malir Shah Faisal colony and korangi available', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"0\"]', 'Used Bike', 68900, 0, 3, 0, 'Standard', 1, 'Hassan', '923129242856', 'Rs 68,900 Share button favoriteIconUnselected Super power. Super Star Union star unique bike cash and installment av', 'Malir, karachi, sindh', 'bike', 54, '2022-02-24 17:55:55', '2022-05-08 06:24:21'),
(74, 'Honda CB 150F 2017', 1, 2017, 2, '[\"1645873160_0_228190255-800x600.png\"]', 'parts of this bike easily found from market', '2-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 86000, 7, 3, 0, 'Sports Bike', 1, 'Ahmad', '03230470703', NULL, 'G.T Road , lahore cantt.', 'bike', 55, '2022-02-26 09:59:20', '2022-05-08 06:24:21'),
(75, 'Honda CD 70 1940', 1, 1940, 1, '[\"1646014122_0_228190255-800x600.png\"]', 'i want  this bike', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 100000, 2, 3, 0, 'Standard', 1, 'Ahmad', '03230470703', 'he is good guy', 'G.T Road , lahore cantt.', 'bike', 56, '2022-02-28 01:08:42', '2022-05-08 06:24:21'),
(76, 'Honda CD 70 2021', 1, 2021, 1, '[\"1646033731_0_download (1).png\"]', 'iousuehfiusgd', '4-stroke', 'Un-Registered', '[\"0\",\"0\",\"Disc Brake\",\"0\"]', 'Used Bike', 50000, 47, 3, 0, 'Standard', 1, 'abdullah', '03075143141', 'jhrhgfdkjb', 'nsnbdkfjhbdjksbfvs', 'bike', 57, '2022-02-28 06:35:31', '2022-05-08 06:24:21'),
(77, 'Honda CD 70 2018', 1, 2018, 1, '[\"1653899478_0_IMG_0004.JPG\"]', NULL, '4-stroke', 'Lahore', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\",\"Wind Shield\"]', 'Used Bike', 45000, 10000, 3, 0, 'Standard', 1, 'mustansar', '03124334928', 'bike is in good condition', 'jhdjsbkzvbkj ndcx', 'bike', 60, '2022-05-30 06:31:19', '2022-05-30 06:31:19'),
(78, 'Yamaha YBR 125 1940', 2, 1940, 7, '[\"1653899827_0_Suzuki bikes.jpg\"]', 'bgdmhfkhgq', '4-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 50000, 5000, 3, 0, 'Standard', 1, 'mustansar', '03124334928', 'bike is in good condition', 'sjdgfgisdfkdak', 'bike', 60, '2022-05-30 06:37:07', '2022-06-25 16:56:16'),
(79, 'Honda CD 70 2019', 1, 2019, 1, '[\"1656228855_0_20200226_183115.jpg\"]', 'NoWork Required', '2-stroke', 'Un-Registered', '[\"0\",\"Anti Theft Lock\",\"0\",\"Led Light\",\"0\"]', 'Used Bike', 65000, 456, 3, 0, 'Standard', 1, 'iftikhar', '03148144141', 'no one', 'qeutta', 'bike', 12, '2022-06-26 05:34:15', '2022-06-26 05:34:15');

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
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petrol_capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_average` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dry_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ground_clearance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wheel_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tyre_at_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tyre_at_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `torque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bike_models`
--

INSERT INTO `bike_models` (`id`, `name`, `image`, `company_id`, `rating`, `no_of_reviews`, `engine_type`, `displacement`, `bore_stroke`, `compression_ratio`, `clutch`, `transmission`, `price`, `body_type`, `created_at`, `updated_at`, `dimension`, `starting`, `top_speed`, `petrol_capacity`, `fuel_average`, `dry_weight`, `frame`, `ground_clearance`, `wheel_size`, `tyre_at_back`, `tyre_at_front`, `horsepower`, `torque`) VALUES
(1, 'CD 70', '[\"1632042904_0_cd-70.jpg\"]', 1, 5, 1, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-12 11:45:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'CB 150F', '[\"1630826411_0_honda-cb-150.png\"]', 1, 5, 0, '2-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Pridor', '[\"bike.JPG\"]', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'CG 125 Deluxe', '[\"bike.JPG\"]', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'CD 70 Dream', '[\"bike.JPG\"]', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'CB 125F', '[\"bike.JPG\"]', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'YBR 125', '[\"1632053860_0_Yamaha_YBR125_2015.jpg\"]', 2, 5, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Sports Bike', '2021-08-11 10:00:02', '2021-10-09 10:07:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'YBR 125G', '[\"bike.JPG\"]', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'YB 125Z', '[\"bike.JPG\"]', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Royale YB 100', '[\"bike.JPG\"]', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'YZF-R6', '[\"1632054331_0_Yamaha_R3_2018.jpg\"]', 2, 5, 1, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Heavy Bike', '2021-08-11 10:00:02', '2021-10-09 10:23:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'YZF-R1', '[\"bike.JPG\"]', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'GS 150', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'GD 110S', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'GR 150', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'GS 150 SE', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'GSX-R600', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Hayabusa', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'GD 110', '[\"bike.JPG\"]', 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'OW Ninja 250cc', '[\"bike.JPG\"]', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '150cc', '[\"bike.JPG\"]', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '70', '[\"bike.JPG\"]', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '125', '[\"bike.JPG\"]', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Lifan', '[\"bike.JPG\"]', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'OW R3 250cc', '[\"bike.JPG\"]', 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'US 70', '[\"bike.JPG\"]', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'US 125', '[\"bike.JPG\"]', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'US 100', '[\"bike.JPG\"]', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'US Scooty 100', '[\"bike.JPG\"]', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'US 125 Deluxe', '[\"bike.JPG\"]', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'US 150 Ultimate', '[\"bike.JPG\"]', 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'RP 70 Passion', '[\"1632730647_0_Road_Prince_RP110.jpg\"]', 6, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Wego 150', '[\"1632730805_0_Wego_150.jpg\"]', 6, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'RP 110', '[\"bike.JPG\"]', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'RP 125 Euro II', '[\"1632731185_0_Road_Prince_RP125.jpg\"]', 6, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Bullet', '[\"bike.JPG\"]', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Robinson 150', '[\"1632730975_0_Road_Prince.jpg\"]', 6, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Ninja 250R', '[\"bike.JPG\"]', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'GTO 125', '[\"bike.JPG\"]', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'GTO 100', '[\"bike.JPG\"]', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'GTO 110', '[\"bike.JPG\"]', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Ninja ZX-10R', '[\"bike.JPG\"]', 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'SP 70', '[\"1632730856_0_super_power_cover.jpg\"]', 8, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Leo 200', '[\"1632731168_0_Super_Power_Leo_200.jpg\"]', 8, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Sports Bike', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'SP 150 Archi', '[\"bike.JPG\"]', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'SP-100', '[\"bike.JPG\"]', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'PK 150 Archi', '[\"bike.JPG\"]', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Sultan SP 250', '[\"bike.JPG\"]', 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Infinity 150', '[\"bike.JPG\"]', 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'CDI SR-70CC EURO-2', '[\"bike.JPG\"]', 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Xtreme UD 70', '[\"1632731389_0_Unique_UD70.jpg\"]', 10, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'UD 100', '[\"bike.JPG\"]', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'UD 125', '[\"bike.JPG\"]', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Crazer UD-150', '[\"bike.JPG\"]', 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'TNT 25', '[\"bike.JPG\"]', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'TNT 150i', '[\"1632045340_0_Benelli_TNT_150.jpg\"]', 11, 5, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Heavy Bike', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '302 R', '[\"bike.JPG\"]', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '180S', '[\"bike.JPG\"]', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'TNT 600', '[\"1632050923_0_Benelli_TNT_600.jpg\"]', 11, 5, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Heavy Bike', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'TRK 251', '[\"bike.JPG\"]', 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '150cc', '[\"1632732047_0_Vespa_Primavera.jpg\"]', 12, 4, 3, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Scooter', '2021-08-11 10:00:02', '2021-10-12 12:53:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'PIAGGIO', '[\"bike.JPG\"]', 12, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'P150x', '[\"bike.JPG\"]', 12, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'KPR 200 Cruise', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'ZX 70 City Rider', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Monster ZX 250-D', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'ZX 125', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'ZX 70 Thunder Plus', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'ZX 100 Power Max', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'ZX 125 Stallion', '[\"bike.JPG\"]', 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Valentino 350', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Skyline 250', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Gladiator 200', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Thunder 150', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'VALENTINO 150cc', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'ELIGATOR 250CC', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Valentino 250', '[\"bike.JPG\"]', 14, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Iron 883', '[\"1632730973_0_3.jpg\",\"1632730973_1_2.jpg\",\"1632730973_2_1.jpg\"]', 15, 1, 1, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-12 12:36:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, '883 Low', '[\"bike.JPG\"]', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Night Rod Special', '[\"1632731245_0_HARLEY-DAVIDSON-V-Rod_back.jpg\",\"1632731245_1_harley-davidson-v-rod_3.jpg\"]', 15, 3, 0, '4-stroke', NULL, NULL, NULL, NULL, NULL, NULL, 'Standard', '2021-08-11 10:00:02', '2021-10-09 09:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, '1200 Custom', '[\"bike.JPG\"]', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, '883 Custom', '[\"bike.JPG\"]', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Ultra Classic', '[\"bike.JPG\"]', 15, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-11 10:00:02', '2021-08-11 10:00:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `bike_reviews`
--

INSERT INTO `bike_reviews` (`id`, `title`, `user_id`, `model_id`, `company_id`, `model_year`, `comment`, `how_you_know`, `style`, `comfort`, `fuel_economy`, `performance`, `value_for_money`, `created_at`, `updated_at`) VALUES
(1, 'sadf asd', '5', '11', '1', '2009', 'asdfdsaf', 'I owned this bike.', 5, 4, 3, 4, 3, '2021-10-09 10:23:45', '2021-10-09 10:23:45'),
(2, 'fdsf', '5', '1', '1', '2010', 'sdf', 'I owned this bike.', 1, 1, 3, 3, 3, '2021-10-12 11:45:38', '2021-10-12 11:45:38'),
(3, 'dsf', '5', '61', '12', '2021', 'asd', 'I did not own this bike, but have driven this bike.', 3, 2, 2, 2, 2, '2021-10-12 12:22:54', '2021-10-12 12:22:54'),
(4, 'asd', '5', '78', '15', '2008', 'asd', 'I did not own this bike, but have driven this bike.', 3, 3, 2, 2, 2, '2021-10-12 12:36:00', '2021-10-12 12:36:00'),
(5, 'df', '5', '61', '12', '2021', 'sdf', 'I owned this bike.', 2, 3, 3, 3, 2, '2021-10-12 12:38:06', '2021-10-12 12:38:06'),
(6, 'asd', '5', '61', '12', '2021', 'asd', 'I have neither owned nor driven this bike.', 5, 5, 5, 5, 5, '2021-10-12 12:53:52', '2021-10-12 12:53:52');

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
(15, 'Harley Davidson', '2021-08-11 10:00:02', '2021-08-11 10:00:02');

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

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Melissa Berger', 'ryvegu@mailinator.com', '28', 'Labore et ut ut numq', 'Velit impedit vel n', '2021-10-13 10:44:20', '2021-10-13 10:44:20'),
(2, 'Gray Bell', 'xynutisuce@mailinator.com', '91', 'Cillum quia mollitia', 'Non doloremque quide', '2021-10-13 10:45:06', '2021-10-13 10:45:06'),
(3, 'Bruno Bradshaw', 'likod@mailinator.com', '51', 'Do sint tempore eo', 'Aliquip exercitation', '2021-10-13 10:45:44', '2021-10-13 10:45:44'),
(4, 'Mike Moore', 'no-replyGabs@gmail.com', '88315743734', 'Increase sales for twowheelss.com', 'Good Day \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Moore\r\n \r\nmike@strictlydigital.net', '2022-01-11 12:39:41', '2022-01-11 12:39:41'),
(5, 'Mike Quincy', 'no-replyGabs@gmail.com', '87917588866', 'Competitors not playing the SEO game fair?', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-01-12 03:57:48', '2022-01-12 03:57:48'),
(6, 'Eddieguant', 'sabrina.potzmader@yahoo.de', '85996893724', 'Commencer a gagner de 12100 EUR par jour', 'Revenu passif avant 18200 EUR dans la semaine >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&93=00&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-17 21:48:09', '2022-01-17 21:48:09'),
(7, 'Eddieguant', 'sabrina.potzmader@yahoo.de', '85371628639', 'Commencer a gagner de 12100 EUR par jour', 'Revenu passif avant 18200 EUR dans la semaine >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&93=00&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-17 21:48:11', '2022-01-17 21:48:11'),
(8, 'Eddieguant', 'sabrina.potzmader@yahoo.de', '87565966454', 'Commencer a gagner de 12100 EUR par jour', 'Revenu passif avant 18200 EUR dans la semaine >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&93=00&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-17 21:48:12', '2022-01-17 21:48:12'),
(9, 'Eddieguant', 'sabrina.potzmader@yahoo.de', '86421578616', 'Commencer a gagner de 12100 EUR par jour', 'Revenu passif avant 18200 EUR dans la semaine >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&93=00&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-17 21:48:13', '2022-01-17 21:48:13'),
(10, 'Eddieguant', 'sabrina.potzmader@yahoo.de', '84778883866', 'Commencer a gagner de 12100 EUR par jour', 'Revenu passif avant 18200 EUR dans la semaine >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&93=00&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-17 21:48:15', '2022-01-17 21:48:15'),
(11, 'Bah- Mbi', 'hrhmbambi@gmail.com', '86872538919', 'Product and business cooperation', 'Attn. Director, \r\n \r\nI am interested in your products and line of business. \r\n \r\nPlease do not hesitate to contact me if you will need a financial partner and investor. \r\n \r\nKindly send reply to hrhbah-mbi@aghemfondom.com \r\n \r\nRegards, \r\n \r\nHRH Bah- Mbi', '2022-01-25 06:56:34', '2022-01-25 06:56:34'),
(12, 'Mike Dodson', 'no-replyGabs@gmail.com', '85654751124', 'Competitors not playing the SEO game fair?', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-02-09 03:55:06', '2022-02-09 03:55:06'),
(13, 'Mike Jackson', 'no-replyGabs@gmail.com', '89174913412', 'Competitors not playing the SEO game fair?', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-03-12 10:23:16', '2022-03-12 10:23:16'),
(14, 'Michaeldar', 'chubenkodaniiaz+21vs@mail.ru', '85773361597', 'Hello world', 'twowheelss.com uriefeodeighrkfldjiijofofjmvkdnsisdiehiusfiajfhweiuioidjsjsbfiadjasifaijdfifijsaaiwghifadja', '2022-03-22 13:24:27', '2022-03-22 13:24:27'),
(15, 'Hermanjorma', 'monikabeetz@freenet.de', '86946822474', 'Your Forex income from$390978', 'Quick earnings on Cryptocurrency from $386769 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24-3?29528   <<<<<<<<<<<', '2022-03-28 03:07:48', '2022-03-28 03:07:48'),
(16, 'Hermanjorma', 'monikabeetz@freenet.de', '87663543595', 'Your Forex income from$390978', 'Quick earnings on Cryptocurrency from $386769 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24-3?29528   <<<<<<<<<<<', '2022-03-28 03:07:49', '2022-03-28 03:07:49'),
(17, 'Hermanjorma', 'monikabeetz@freenet.de', '85557835832', 'Your Forex income from$390978', 'Quick earnings on Cryptocurrency from $386769 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24-3?29528   <<<<<<<<<<<', '2022-03-28 03:07:50', '2022-03-28 03:07:50'),
(18, 'Hermanjorma', 'monikabeetz@freenet.de', '88426692669', 'Your Forex income from$390978', 'Quick earnings on Cryptocurrency from $386769 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24-3?29528   <<<<<<<<<<<', '2022-03-28 03:07:50', '2022-03-28 03:07:50'),
(19, 'Hermanjorma', 'monikabeetz@freenet.de', '85286911956', 'Your Forex income from$390978', 'Quick earnings on Cryptocurrency from $386769 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24-3?29528   <<<<<<<<<<<', '2022-03-28 03:07:51', '2022-03-28 03:07:51'),
(20, 'Gale', 'gale', '+1 304-873-4360', '31 March 2022', 'It is with sad regret to inform you DataList.biz is shutting down on 31 March 2022. \r\n\r\nWe have made available databases per country for all companies available.. \r\n\r\nYou can view our samples and download databases instantly on our website DataList.biz', '2022-03-28 20:52:10', '2022-03-28 20:52:10'),
(21, 'DavidSat', 'mmmeela@yahoo.de', '81951978994', 'Nouveaux revenus a partir de 1500 euros par jour', 'Gains a partir de 1500 euros par jour >>>>>>>>>>>>>>  https://telegra.ph/Derni%C3%A8res-nouvelles--Alors-que-les-prix-augmentent-les-Europ%C3%A9ens-commencent-%C3%A0-arr%C3%AAter-de-fumer-en-masse-et-gagnent-en-plus-%C3%A0-par-04-01-2?cwq   <<<<<<<<<<<', '2022-04-02 01:34:08', '2022-04-02 01:34:08'),
(22, 'DavidSat', 'mmmeela@yahoo.de', '81596458628', 'Nouveaux revenus a partir de 1500 euros par jour', 'Gains a partir de 1500 euros par jour >>>>>>>>>>>>>>  https://telegra.ph/Derni%C3%A8res-nouvelles--Alors-que-les-prix-augmentent-les-Europ%C3%A9ens-commencent-%C3%A0-arr%C3%AAter-de-fumer-en-masse-et-gagnent-en-plus-%C3%A0-par-04-01-2?cwq   <<<<<<<<<<<', '2022-04-02 01:34:09', '2022-04-02 01:34:09'),
(23, 'DavidSat', 'mmmeela@yahoo.de', '87565958564', 'Nouveaux revenus a partir de 1500 euros par jour', 'Gains a partir de 1500 euros par jour >>>>>>>>>>>>>>  https://telegra.ph/Derni%C3%A8res-nouvelles--Alors-que-les-prix-augmentent-les-Europ%C3%A9ens-commencent-%C3%A0-arr%C3%AAter-de-fumer-en-masse-et-gagnent-en-plus-%C3%A0-par-04-01-2?cwq   <<<<<<<<<<<', '2022-04-02 01:34:10', '2022-04-02 01:34:10'),
(24, 'DavidSat', 'mmmeela@yahoo.de', '88894546499', 'Nouveaux revenus a partir de 1500 euros par jour', 'Gains a partir de 1500 euros par jour >>>>>>>>>>>>>>  https://telegra.ph/Derni%C3%A8res-nouvelles--Alors-que-les-prix-augmentent-les-Europ%C3%A9ens-commencent-%C3%A0-arr%C3%AAter-de-fumer-en-masse-et-gagnent-en-plus-%C3%A0-par-04-01-2?cwq   <<<<<<<<<<<', '2022-04-02 01:34:10', '2022-04-02 01:34:10'),
(25, 'DavidSat', 'mmmeela@yahoo.de', '88334877845', 'Nouveaux revenus a partir de 1500 euros par jour', 'Gains a partir de 1500 euros par jour >>>>>>>>>>>>>>  https://telegra.ph/Derni%C3%A8res-nouvelles--Alors-que-les-prix-augmentent-les-Europ%C3%A9ens-commencent-%C3%A0-arr%C3%AAter-de-fumer-en-masse-et-gagnent-en-plus-%C3%A0-par-04-01-2?cwq   <<<<<<<<<<<', '2022-04-02 01:34:11', '2022-04-02 01:34:11'),
(26, 'Flynn', 'flynn@topdatalist.com', 'NA', 'TopDataList.com Shutting Down', 'Hello.\r\n\r\nIt is with sad regret to inform you TopDataList.com is shutting down.\r\n\r\nWe have made all our databases available for you for a once off fee.\r\n\r\nVisit us on TopDataList.com', '2022-04-20 10:18:01', '2022-04-20 10:18:01'),
(27, 'Yvette', 'yvette@customdata.me', '905-389-7840', 'Leads for your business', 'Hello, from CustomData.me we are a provider of unique databases that could help your business.\r\n\r\nPlease visit us at CustomData.me to see if we can help you.\r\n\r\nRegards,\r\nYvette', '2022-05-04 17:13:28', '2022-05-04 17:13:28'),
(28, 'abdullah', 'abdullaharshad308@yahoo.com', '3075143141', 'missing details', 'dajk,gflkdshfklghvvliusduhbfkj', '2022-05-08 17:34:34', '2022-05-08 17:34:34'),
(29, 'GradyDit', 'shazbell95@hotmail.com', '85473944143', 'FROM $1000 FOR 10 MINUTES!', 'FROM $1500 IN 15 MINUTES! https://1300usd-for-10-minutes.blogspot.tw/2022/05/how-to-earn-1300-in-10-minutes.html?yes1165690', '2022-05-11 21:23:20', '2022-05-11 21:23:20'),
(30, 'GradyDit', 'shazbell95@hotmail.com', '86325542638', 'FROM $1000 FOR 10 MINUTES!', 'FROM $1500 IN 15 MINUTES! https://1300usd-for-10-minutes.blogspot.tw/2022/05/how-to-earn-1300-in-10-minutes.html?yes1165690', '2022-05-11 21:23:20', '2022-05-11 21:23:20'),
(31, 'GradyDit', 'shazbell95@hotmail.com', '86442523122', 'FROM $1000 FOR 10 MINUTES!', 'FROM $1500 IN 15 MINUTES! https://1300usd-for-10-minutes.blogspot.tw/2022/05/how-to-earn-1300-in-10-minutes.html?yes1165690', '2022-05-11 21:23:21', '2022-05-11 21:23:21'),
(32, 'GradyDit', 'shazbell95@hotmail.com', '83551116711', 'FROM $1000 FOR 10 MINUTES!', 'FROM $1500 IN 15 MINUTES! https://1300usd-for-10-minutes.blogspot.tw/2022/05/how-to-earn-1300-in-10-minutes.html?yes1165690', '2022-05-11 21:23:22', '2022-05-11 21:23:22'),
(33, 'GradyDit', 'shazbell95@hotmail.com', '85789971915', 'FROM $1000 FOR 10 MINUTES!', 'FROM $1500 IN 15 MINUTES! https://1300usd-for-10-minutes.blogspot.tw/2022/05/how-to-earn-1300-in-10-minutes.html?yes1165690', '2022-05-11 21:23:23', '2022-05-11 21:23:23'),
(34, 'abdullah', 'abdullaharshad308@gmail.com', '3075143141', 'checking   777', 'ok msg send ho raha', '2022-05-13 18:02:28', '2022-05-13 18:02:28'),
(35, 'Sophie', 'sophie@topdatalist.com', 'NA', 'It is with sad regret to inform you TopDataList.com is shutting down.', 'Hi, It is with sad regret to inform you TopDataList.com is shutting down.\r\n\r\nWe are ceasing operations on TopDataList.com and have made our leads available at a $149 once off fee.\r\n\r\nVisit us on TopDataList.com\r\nRegards,\r\nSophie', '2022-05-19 11:05:13', '2022-05-19 11:05:13'),
(36, 'Lesley', 'lesley@customdatabases.org', 'NA', 'Leads for sale', 'Your go-to source for leads. We can provide business to business and business to consumer leads, custom-tailored to your needs.\r\n\r\nCustomDatabases.org', '2022-05-19 12:59:07', '2022-05-19 12:59:07');

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
(16, '2021_08_02_111322_create_order_details_table', 1),
(17, '2022_01_02_171502_add_remaining_attributes_in_models', 2),
(18, '2016_09_12_99999_create_visitlogs_table', 3),
(19, '2022_05_08_054747_add_coloumn_is_active_in_bikes', 3);

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
(4, 'ABDULLAH ', 'abdullah1@gmail.com', NULL, '$2y$10$UUThdkUJbJKl/lBRRiCyaOWcna6W1UtS1wKrxbWyBqYdXdr6Rk1pK', 'Dealer', NULL, NULL, 0, 0, 'user_profile.png', '03876298369', 'hkgdskfsgakd', NULL, NULL, NULL, '2021-08-22 16:36:59', '2021-08-22 16:36:59'),
(5, 'asd asd', 'abdullah2@gmail.com', NULL, '$2y$10$CdBVSLCW5qoZvk7o1lD7Eu1OBTYaW3KYCjJERtWwNVZiaMS0a1PRO', 'Dealer', NULL, NULL, 6, 0, 'user_profile.png', '3463456345', '128 CCA Phase 04 DHA', NULL, NULL, NULL, '2021-08-22 16:47:35', '2021-09-27 06:40:47'),
(6, 'Muhammad ABDULLAH ', 'abdullah3@gmail.com', NULL, '$2y$10$ycz/mKRwzO4HR6rOwVQxhO1oTA453X.JxGCZx7ByDXNtx8AhdWbI2', 'Dealer', 'Male', '1996-12-11', 1, 0, 'user_profile.png', '03164361632', 'Near Arfa careem tower House # 375', 'Pakistan', NULL, NULL, '2021-09-05 05:11:36', '2021-09-05 08:54:33'),
(7, 'Документ номер WLR1157113WLR2 подготовлен. Смотрите документ12 далее на странице http://apple.com', 'abdullah4@gmail.com', NULL, '$2y$10$DPxL73.9JkfcPU3o5m9oqOsijNrKQ5iRl8COO4E.IotmnRqCl0V8O', 'Non-Dealer', NULL, NULL, 0, 0, 'user_profile.png', 'nikitinavikalhs@mail.ru', 'Almanya nrw', NULL, NULL, NULL, '2021-09-07 20:29:10', '2021-09-07 20:29:10'),
(8, 'ABDULLAH ', 'abdullah5@gmail.com', NULL, '$2y$10$jNZgl0O/aPqOHldH/DmjN.z4aTPJ88ZFFfrx2GODAesY7JBV/bsw2', 'Dealer', NULL, NULL, 6, 0, 'user_profile.png', '3057659213', 'H90', NULL, NULL, NULL, '2021-09-19 06:59:48', '2021-09-19 10:25:31'),
(9, 'BikesPro', 'bikespro@gmail.com', NULL, '$2y$10$QN1KL3.k835Zo6YEb2kCqe0s/w8.gaCtmF4xQvGJRSdMqwSQrMWGO', 'Dealer', NULL, NULL, 4, 0, 'user_profile.png', '111111123333', 'Near Arfa careem', NULL, NULL, NULL, '2021-09-27 06:15:04', '2021-09-27 06:26:25'),
(10, 'ABDULLAH 2', 'abdullah6@gmail.com', NULL, '$2y$10$dUzXh2A2j2GUwST/03i3pu2ubh7LyV2yrENqZ4tdngYfC0SSOkN.G', 'Dealer', NULL, NULL, 2, 0, 'user_profile.png', '00000000000', 'Mars', NULL, NULL, NULL, '2021-09-27 06:16:41', '2021-09-27 06:27:25'),
(11, 'Kamal Fuentes', 'toji@mailinator.com', NULL, '$2y$10$CKRqZm59f3Pla2Lj9JzkN.yrjGQvKqBwYTmkSeroa3KOR83egc9hG', 'Dealer', NULL, NULL, 6, 0, 'user_profile.png', '93', 'Occaecat modi perfer', NULL, NULL, NULL, '2022-01-02 13:56:34', '2022-01-02 14:22:11'),
(12, 'iftikhar', 's2017065035@umt.edu.pk', NULL, '$2y$10$f6dwn1Lkwh2ubDlo.Pwi8uhlmnPYjk2kS6waiVKPdh18APELwasfW', 'Dealer', NULL, NULL, 4, 0, 'user_profile.png', '03148144141', 'killi Mullazai KUCHLAK Quetta', NULL, NULL, NULL, '2022-01-24 13:13:20', '2022-06-26 05:34:16'),
(13, 'Ahsan', 'ahsan@gmail.com', NULL, '$2y$10$Q7JvS1uFDMQlLefOv4rLaure.R3qngjsnRSVp3FXS4TWhBWAjRPli', 'Non-Dealer', NULL, NULL, 0, 0, 'user_profile.png', '03124334928', 'State life society', NULL, NULL, NULL, '2022-02-22 09:48:20', '2022-02-22 09:48:20'),
(14, 'MurtazaBaloch', 'Murtaza.Baloch@gmail.com.pk', NULL, '$2y$10$cy.k1EG1TSoiuoiaCGAIZuDcNLBa2u7IAhybPvOTKzO5zjpuoTnt2', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923334738913', 'Multan Road Lahore', NULL, NULL, NULL, '2022-02-23 10:16:32', '2022-02-23 10:26:27'),
(15, 'SardarMudassir', 'sardar.mudassir@gmail.com.pk', NULL, '$2y$10$87ln6Nxe68Qb7nFCaJDx7.rYuZ9GFOJLYBPWFt7YSkOAv4cMWzRPC', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923335796978', 'dhoke sayedan rawapindi', NULL, NULL, NULL, '2022-02-23 10:39:15', '2022-02-23 10:55:59'),
(16, 'zain Shah', 'zainshah@gmail.com', NULL, '$2y$10$GCjqQXiPwUYGyhswJBEl/uG8zrMmhBqhx0iqXVmA6zMTdztGrNcwi', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923201411512', 'Al Faisal Town,Lahore,Punjab', NULL, NULL, NULL, '2022-02-23 10:43:51', '2022-02-23 10:59:19'),
(17, 'Omer Sheikh', 'omer.shiekh@gmail.com.pk', NULL, '$2y$10$96mPCcHVa6ZUxyS2kqH/2uVpNccSilkHjstlMRy4Y5ViHJVe9VsOK', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923328666694', 'Fasailabad punjab', NULL, NULL, NULL, '2022-02-23 11:10:49', '2022-02-23 11:21:11'),
(18, 'Mohammad', 'mohammad@gmail.com', NULL, '$2y$10$O37Ip6BWFZ/QMTAguUMb5eHYsWUEpvsITyozTYvHOdrollbk2GgoC', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923404559278', 'Nicholson Road,Lahore,Punjab', NULL, NULL, NULL, '2022-02-23 11:15:33', '2022-02-23 12:15:30'),
(19, 'FaizanAhmad', 'faizan.ahmad@gmail.com.pk', NULL, '$2y$10$JxpkOvhRMIQiCrPD2/dLVeO8jO4cOZqxaueoDecYB3JR2P32LapkO', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923117517162', 'Fasailabad punjab', NULL, NULL, NULL, '2022-02-23 11:49:45', '2022-02-23 11:56:37'),
(20, 'Mumtaz Jamil', 'mumtazjamil@gmail.com', NULL, '$2y$10$2hasC5cMVOtRpSTmjOd4OeL2SRBB1aFfI5lyfnOfDDvlv.o7P9X2.', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923003399751', 'Lahore Canal Bank Cooperative Housing Society, Lahore', NULL, NULL, NULL, '2022-02-23 12:18:32', '2022-02-23 12:21:51'),
(21, 'shahid', 'shahid@gmail.com', NULL, '$2y$10$PFo57h1URYC7D3Obm6KAGeQuVTzJFkvVI7CE6FlmST.KoY/b1/E3W', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923219466441', 'Township, Lahore', NULL, NULL, NULL, '2022-02-23 12:25:59', '2022-02-23 12:30:08'),
(22, 'Imran Sahir', 'imran.sahir@gmail.com.pk', NULL, '$2y$10$UHp4ya7pRjQLHPnz2rLYhei6J0fQNEVXDDXet8IxQceGZZ0uiKIei', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923005280547', 'Rahmat Colony, Lahore', NULL, NULL, NULL, '2022-02-23 12:27:10', '2022-02-23 12:33:46'),
(23, 'Ibrahim', 'ibrahim@gmail.com', NULL, '$2y$10$SwrHJB2oDwctYs901CvYke6y78M9XcLhi36X8HvZ2nQCBYV6KLJ4q', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923244329630', 'Ferozepur Road, Lahore', NULL, NULL, NULL, '2022-02-23 12:35:56', '2022-02-23 12:39:24'),
(24, 'Bhatti', 'Bhatti@gmail.com.pk', NULL, '$2y$10$w0AeFem2jn4wDBP42mBpPO9l1l3XJXNitT56boLJL4jmuqqcQc3.i', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923334113889', 'shadbagh lahore punjab', NULL, NULL, NULL, '2022-02-23 12:43:05', '2022-02-23 12:49:17'),
(25, 'Shabbir', 'shabbir@outlook.com', NULL, '$2y$10$KZXiD9biaHZcVT0cWh5TKOm1qsEjqmOe8tGbPxYUHULTlFoJVoQdK', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923084173231', 'Paragon City, Lahore', NULL, NULL, NULL, '2022-02-23 12:45:14', '2022-02-23 12:49:28'),
(26, 'Mehar Jawad', 'mehar.jawad@gmail.com.pk', NULL, '$2y$10$vQWsrTyMqKBDNKLamxeug.DbudERorN5lf.j3TyHr..4j02q/JRxm', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923156593160', 'kasur punjab', NULL, NULL, NULL, '2022-02-23 12:56:35', '2022-02-23 13:00:58'),
(27, 'Haziq', 'Haziq@yahoo.com', NULL, '$2y$10$fHVjcbSGga78N3huR25ep.yBvQwM7Vo5ngybIaGOKvfZrYoRQXi8C', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923230000333', 'Faisalabad', NULL, NULL, NULL, '2022-02-23 12:58:44', '2022-02-23 13:03:52'),
(28, 'Hamza', 'hamza@gmail.com.pk', NULL, '$2y$10$de1d4E281.LahENXyPiwhulyUQLgkjh82rKjBmNXAsvgJM19edWP6', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923094192258', 'township lahore', NULL, NULL, NULL, '2022-02-23 13:10:05', '2022-02-23 13:14:08'),
(29, 'Malik Abbas', 'Malikabbas@yahoo.com', NULL, '$2y$10$o35gu44fynBQcibg1u.yuuLSWnquQz9B.Pk1Qv.TE6f1G1l/3qes.', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923027091851', 'Karachi', NULL, NULL, NULL, '2022-02-23 13:12:43', '2022-02-23 13:16:20'),
(30, 'Hussnain', 'Hussnain@yahoo.com', NULL, '$2y$10$L2SwvkDadE/5Vm4cYn6O/.G6e.6x4wGQxg/S/Oz11.C3GAiCJaO7C', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923127869300', 'Karachi', NULL, NULL, NULL, '2022-02-23 13:20:53', '2022-02-23 13:23:34'),
(31, 'haseeb', 'haseeb@gmail.com.pk', NULL, '$2y$10$LzJ6cThVIYXgDdOvh0AkQ.e0OEmthIBbO4sBMr6uBFKOxA1gbIbsC', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923239569247', 'daska punjab', NULL, NULL, NULL, '2022-02-23 13:21:47', '2022-02-23 13:26:39'),
(32, 'Zain Mubeen', 'Zainmubeen@gmail.com', NULL, '$2y$10$sMGwLEWZ3yIpamSRDZiOCO.1mMSdZf5R/o7QsmrjGZ9R46wyw1iXy', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923059281779', 'Karachi', NULL, NULL, NULL, '2022-02-23 13:26:08', '2022-02-23 13:28:31'),
(33, 'Fahad', 'fahad@yahoo.com', NULL, '$2y$10$SwtNaePnjPlMJ3UjoSYSRe5EyBpV0ebO.ucRpv6k/FINtDoOETkSq', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923326681019', 'Lahore', NULL, NULL, NULL, '2022-02-23 13:30:21', '2022-02-23 13:32:48'),
(34, 'iqrar khan', 'iqrar.khan@gmail.com.pk', NULL, '$2y$10$PUXR7xzUVj3ubhB6t6nLTOHgFbw3MMI63/2tO3U1DbyOY5KzcjoWK', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923405564316', 'swabi', NULL, NULL, NULL, '2022-02-23 13:33:47', '2022-02-23 13:38:19'),
(35, 'kamran', 'kamran@yahoo.com', NULL, '$2y$10$vDzjiEiBTsyPxAVZ8dchQeuS8LnvyLnUw.mqwbanMg4jrSQf58yhO', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923143923119', 'Rawalpindi', NULL, NULL, NULL, '2022-02-23 13:40:45', '2022-02-23 13:43:13'),
(36, 'Usman', 'usman@gmail.com', NULL, '$2y$10$jWarlAoO8hVR8udkpHZUbubdPxTi8poCtunxRkkaLiYICU/NunSOW', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923067813431', 'Karachi', NULL, NULL, NULL, '2022-02-23 13:45:15', '2022-02-23 13:49:25'),
(37, 'Haji Sab', 'haji@yahoo.com', NULL, '$2y$10$ErcQUgQSTERgxBQa3aFWjebjUfKINjXpErxVtcEHBRUuhDLOdPHve', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923467230286', 'Lahore', NULL, NULL, NULL, '2022-02-23 13:54:01', '2022-02-23 13:56:32'),
(38, 'Bl electronic', 'bielectronics@yahoo.com', NULL, '$2y$10$uXTJqfzWvSdeIrRnGvzOzeIb2UNcHDLDf0HVFytWT5NTV0SOVz2K2', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923139744866', 'Lahore', NULL, NULL, NULL, '2022-02-23 13:58:29', '2022-02-23 14:01:00'),
(39, 'Ali Hamza', 'hamza@gmail.com', NULL, '$2y$10$oJQyUq8FGN2gxPC4Hvi5KOR990QNnCOJ8eKENfZlBEdGBlbwKEvT6', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923477071780', 'Lahore', NULL, NULL, NULL, '2022-02-23 14:03:45', '2022-02-23 14:05:41'),
(40, 'Atif Mehmood', 'atifmehmood@yahoo.com', NULL, '$2y$10$d.D7TxnfpA9qbc5k8zF8pOSK4ALD/6ILPhhK2hYnA/HCoWHcBm1xS', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923177018640', 'Lahore', NULL, NULL, NULL, '2022-02-23 14:09:11', '2022-02-23 14:12:41'),
(41, 'Malik Imran', 'imran@yahoo.com', NULL, '$2y$10$SIK4C.yxo5MvNjgFBxvICunpEnis/Bx3I5c3xQEwLG8kjHgYHJ6dO', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923480823980', 'Karachi', NULL, NULL, NULL, '2022-02-23 14:15:16', '2022-02-23 14:17:30'),
(42, 'Bilal Shiekh', 'bilal@gmail.com', NULL, '$2y$10$zOkR5r1M9wXry4W2Ng6Cu.e6C2jdcq6HSCu8Rz6ozDQ4CaQ/M/cJi', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923044100433', 'Thokar Niaz Baig, Lahore', NULL, NULL, NULL, '2022-02-24 02:12:12', '2022-02-24 02:14:49'),
(43, 'Kashif', 'kashif@yahoo.com', NULL, '$2y$10$rvvQ9gzl9dZZPMIap4CegOC8Kcp6q.V8nUBNT5oJklYVKSKeU6scq', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923134464943', 'Youhanabad, Lahore', NULL, NULL, NULL, '2022-02-24 02:17:05', '2022-02-24 02:20:14'),
(44, 'Sohail', 'sohail@yahoo.com', NULL, '$2y$10$abVbQNJvZjd7SEFQiYm7vuiX4v4ihk2nx4UYMlL1DBS2XSdFGmQ2.', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923248473129', 'DHA Phase 3, Lahore', NULL, NULL, NULL, '2022-02-24 02:23:26', '2022-02-24 02:26:14'),
(45, 'Qasim Awan', 'Qasim@gmail.com', NULL, '$2y$10$UQWk6fsq4rF6G6JsWeCa3uLoPdNi0E/AAPUyTdtnounC1aF1P/bDm', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923004446607', 'Elite Town, Lahore', NULL, NULL, NULL, '2022-02-24 02:28:27', '2022-02-24 02:31:05'),
(46, 'Muhammad Tayyab', 'Tayyab@yahoo.com', NULL, '$2y$10$NWuTo/ACTMvQvjEqch2i2OUXIS2Ry6eZ/QJmBmCTv/Ce8f.QEwFxK', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923214667713', 'DHA 9 Town, Lahore', NULL, NULL, NULL, '2022-02-24 02:46:29', '2022-02-24 02:49:05'),
(47, 'wajahat zia', 'wajahat.zia@gmail.com.pk', NULL, '$2y$10$pTc5nddiNqWF87tkb1rgReOyfkDJiSFaGLrdCWdlluIETw1.DscJO', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923322457942', 'ancholi karachi sindh', NULL, NULL, NULL, '2022-02-24 06:55:15', '2022-02-24 06:59:45'),
(48, 'Ali Abbas', 'ali.abbas@gmail.com.pk', NULL, '$2y$10$0Zdv.5zut3mUKsfK9hDcKO.Az5Vs/GN4ixux1VuUXSq83Lb51uk12', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923178955317', 'liaqat abad karachi', NULL, NULL, NULL, '2022-02-24 07:11:48', '2022-02-24 07:15:20'),
(49, 'khan', 'khan@gmail.com.pk', NULL, '$2y$10$8OdfmNxf8SPdpXyBa34S3eU01odOofnorWiD1yYDZoyxyl6Z6TqoC', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923493625419', 'kot addu', NULL, NULL, NULL, '2022-02-24 07:23:15', '2022-02-24 12:49:28'),
(50, 'Abdul Wadood', 'abdul.wadood@gmail.com.pk', NULL, '$2y$10$Z5PNDLxU9kjo5oB8EPZoHO9W1Wnv/3H01vT7TIXwj1d/wwpJYfg5y', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923352860457', 'hyderabad', NULL, NULL, NULL, '2022-02-24 13:09:44', '2022-02-24 13:16:12'),
(51, 'Ahsan Ahsan khattak', 'ahsan.khattak@gmail.com.pk', NULL, '$2y$10$LaHP31n55w.ply/zp5ifOOge0ql0hGj37G.pmDOqJT9nallk2C8U2', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923499022201', 'manshera khyber pakhtunkhua', NULL, NULL, NULL, '2022-02-24 13:24:15', '2022-02-24 13:30:25'),
(52, 'Rumman khan', 'rumman.khan@gmail.com.pk', NULL, '$2y$10$Oy.g/46mklAhi5rjJzKzWe4oEKPkvmzHN6LPHE6PwTLnyS0YzpDPO', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923432236708', 'ancholi karachi', NULL, NULL, NULL, '2022-02-24 13:38:26', '2022-02-24 13:42:50'),
(53, 'Hassan', 'hassan@gmail.com.pk', NULL, '$2y$10$MfMSuoXbPmI9VD0qYrC78ekjlJjQPTTfeYYf6.Z6sZ6vOvCWrFHt6', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '923129242856', 'Malir, karachi, sindh', NULL, NULL, NULL, '2022-02-24 17:08:10', '2022-02-24 17:12:56'),
(54, 'Hassan dealer', 'hassan.dealer@gmail.com.pk', NULL, '$2y$10$lPUDGT0Q63S70dMZO6KKfOSF4CgOJuhoeZFcN2yzutppcXIRJUPE2', 'Dealer', NULL, NULL, 2, 0, 'user_profile.png', '923129242856', 'Malir, karachi, sindh', NULL, NULL, NULL, '2022-02-24 17:31:18', '2022-02-24 17:55:55'),
(55, 'Ahmad', 'ahmadaali@gmail.com', NULL, '$2y$10$S4v.9FTwsqPGhHq.RmVpYORPOWGbK4wDEl4SN1RbsF7dUwJyMAIVS', 'Non-Dealer', NULL, NULL, 1, 0, 'user_profile.png', '03230976534', 'G.T Road , lahore cantt.', NULL, NULL, NULL, '2022-02-26 09:50:05', '2022-02-26 09:59:20'),
(56, 'Atif', 'ajfakf@gmail.com', NULL, '$2y$10$E6PhcqVCyYB6oUg3.3sHHeanpB2qE2.kVfMbIscaV606GgE2vZqHW', 'Dealer', NULL, NULL, 1, 0, 'user_profile.png', '03243456789', 'wahadat road lahore', NULL, NULL, NULL, '2022-02-28 01:02:02', '2022-02-28 01:08:42'),
(57, 'Abdullah', 'abdullaharshad308@icloud.com', NULL, '$2y$10$E9Ybczi617rrU9a2d4QvzulJhD17VwGfYlIgJxZjT3Yta2MluCJp2', 'Dealer', NULL, NULL, 1, 0, 'user_profile.png', '03124334928', 'umt road', NULL, NULL, NULL, '2022-02-28 06:25:35', '2022-02-28 06:35:31'),
(58, 'abdullaha', 'admin111@gmail.com', NULL, '$2y$10$W3f4R1pGtBc/PmoaRuhdXeWxBvzlnKJ9w3/YQqEXVQNRzuNIbjpY.', 'Non-Dealer', NULL, NULL, 0, 0, 'user_profile.png', '03004858871', 'state life', NULL, NULL, NULL, '2022-04-26 08:18:44', '2022-04-26 08:18:44'),
(59, 'Ahmad Ali f', 'ajfldk@gmail.com', NULL, '$2y$10$I5kC7b8.Zry77lmqoTkBE.q6SZK7bfrFdgEDAMkbGfdZzQJtEEi..', 'Dealer', NULL, NULL, 0, 0, 'user_profile.png', '24kjhhjklhlkjhjklhdf dajlkfhdaskljfh ajfhasdlkjf', 'lf;adsjfnldsh fsahl', NULL, NULL, NULL, '2022-05-24 02:42:04', '2022-05-24 02:42:04'),
(60, 'Mustansar Ali Khan', 'mustansaralikhan@gmail.com', NULL, '$2y$10$X3OGWJrYrMc25VK8IbqKMeFCviQ.bosC8NQg6kAiev50tYPHBXpw6', 'Non-Dealer', NULL, NULL, 2, 0, 'user_profile.png', '03001234567', 'umt, lahore', NULL, NULL, NULL, '2022-05-30 06:18:44', '2022-05-30 06:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `visitlogs`
--

CREATE TABLE `visitlogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0.0.0',
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitlogs`
--

INSERT INTO `visitlogs` (`id`, `ip`, `browser`, `os`, `user_id`, `user_name`, `country_code`, `country_name`, `region_name`, `city`, `zip_code`, `time_zone`, `latitude`, `longitude`, `is_banned`, `created_at`, `updated_at`) VALUES
(1, '223.29.229.134', 'Chrome (101.0.4951.54)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 06:24:21', '2022-05-08 06:25:41'),
(2, '69.160.160.53', 'Chrome (80.0.3987.132)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 07:16:24', '2022-05-08 07:16:27'),
(3, '51.222.253.6', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 09:57:44', '2022-06-25 10:12:35'),
(4, '51.222.253.1', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 12:06:00', '2022-06-17 22:05:46'),
(5, '51.222.253.8', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 12:06:33', '2022-06-25 09:53:55'),
(6, '103.148.154.134', 'Chrome (101.0.4951.67)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 17:21:25', '2022-05-14 17:11:18'),
(7, '51.222.253.2', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 17:58:16', '2022-06-25 22:17:02'),
(8, '51.222.253.20', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 21:46:41', '2022-06-12 18:28:35'),
(9, '66.249.66.46', 'Chrome (99.0.4844.84)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-08 23:38:39', '2022-05-08 23:39:04'),
(10, '51.222.253.17', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 06:21:03', '2022-06-12 18:55:30'),
(11, '51.222.253.19', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 06:28:46', '2022-06-25 05:57:06'),
(12, '51.222.253.4', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 08:38:29', '2022-06-25 12:24:20'),
(13, '51.222.253.18', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 12:26:40', '2022-06-12 23:36:42'),
(14, '51.222.253.5', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 16:12:33', '2022-06-12 23:29:20'),
(15, '51.222.253.3', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 16:18:40', '2022-06-25 05:22:40'),
(16, '51.222.253.16', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 16:32:04', '2022-06-16 22:36:14'),
(17, '162.144.233.222', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-09 17:31:37', '2022-05-09 17:31:37'),
(18, '66.249.66.59', 'GoogleBot (2.1)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-10 01:43:10', '2022-05-10 01:43:10'),
(19, '66.249.66.61', 'Chrome (99.0.4844.84)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-10 01:43:10', '2022-05-10 01:43:10'),
(20, '51.222.253.14', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-10 05:05:00', '2022-06-25 05:14:44'),
(21, '51.222.253.7', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-10 05:59:39', '2022-06-15 15:21:09'),
(22, '51.222.253.15', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-10 07:29:22', '2022-06-25 05:31:44'),
(23, '45.133.172.156', 'Chrome (67.0.3396.79)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 01:48:17', '2022-05-11 01:48:17'),
(24, '51.222.253.12', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 04:53:51', '2022-06-15 23:44:33'),
(25, '199.188.200.106', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 07:06:00', '2022-05-11 07:06:00'),
(26, '130.255.166.158', 'Chrome (91.0.4472.114)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 09:35:57', '2022-05-11 09:35:57'),
(27, '103.125.176.16', 'Chrome (101.0.4951.41)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 10:39:18', '2022-05-11 10:43:07'),
(28, '51.222.253.13', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 11:43:26', '2022-06-17 22:37:43'),
(29, '20.119.200.224', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 13:22:17', '2022-05-11 13:22:57'),
(30, '170.83.178.17', 'Firefox (61.0)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 00:59:18', '2022-05-12 00:59:18'),
(31, '157.55.39.96', 'Bing Bot (2.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 02:52:15', '2022-05-12 02:52:15'),
(32, '20.213.35.161', 'Firefox (72.0)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 10:09:02', '2022-06-24 13:48:36'),
(33, '87.11.61.76', 'Chrome (42.0.2311.90)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 10:37:08', '2022-05-12 10:37:08'),
(34, '40.88.21.235', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 15:18:28', '2022-06-25 09:54:08'),
(35, '51.222.253.9', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 15:23:29', '2022-06-25 10:04:19'),
(36, '108.179.253.215', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-12 21:25:47', '2022-05-12 21:25:47'),
(37, '20.230.150.231', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-13 02:56:10', '2022-05-13 02:56:12'),
(38, '51.222.253.11', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-13 10:41:22', '2022-06-15 23:04:11'),
(39, '54.149.8.82', 'Chrome (66.0.3359.181)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 02:02:25', '2022-05-14 02:02:29'),
(40, '35.88.17.203', 'Chrome (68.0.3440.106)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 02:02:32', '2022-05-14 02:02:32'),
(41, '40.83.0.16', 'Chrome (95.0.4638.69)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 02:12:30', '2022-05-14 02:12:30'),
(42, '84.17.52.9', 'Chrome (67.0.3396.99)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 03:39:58', '2022-05-14 03:39:58'),
(43, '185.195.24.52', 'Internet Explorer (8.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 08:54:26', '2022-05-14 08:54:26'),
(44, '162.214.80.37', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 13:23:11', '2022-05-14 13:23:11'),
(45, '95.181.238.53', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 15:53:01', '2022-05-14 16:29:29'),
(46, '66.249.64.168', 'Chrome (99.0.4844.84)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-14 21:50:42', '2022-05-21 20:13:26'),
(47, '65.21.206.43', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 03:22:04', '2022-05-15 03:22:04'),
(48, '45.129.18.118', 'Chrome (35.0.1916.47)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 04:44:42', '2022-05-15 04:44:42'),
(49, '17.121.114.107', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 04:57:15', '2022-05-15 04:57:15'),
(50, '173.208.228.218', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 05:28:09', '2022-05-15 05:29:37'),
(51, '17.121.115.225', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 05:31:46', '2022-05-15 05:31:46'),
(52, '17.121.115.88', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 05:57:40', '2022-05-15 05:57:40'),
(53, '17.121.112.14', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 06:54:02', '2022-05-15 06:54:02'),
(54, '17.121.114.20', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 13:26:28', '2022-05-15 13:26:28'),
(55, '17.121.114.157', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 14:04:00', '2022-05-15 14:04:00'),
(56, '87.250.224.42', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-15 14:33:26', '2022-06-08 14:49:04'),
(57, '20.106.97.238', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-16 02:49:51', '2022-06-18 07:10:15'),
(58, '207.46.13.18', 'Bing Bot (2.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-16 03:31:00', '2022-06-13 02:22:40'),
(59, '198.251.78.149', 'Chrome (60.0.3112.107)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-16 11:16:28', '2022-05-18 14:23:39'),
(60, '138.199.26.74', 'Opera (53.0.2907.99)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-16 18:00:16', '2022-05-16 18:00:16'),
(61, '95.161.221.200', 'Chrome (98.0.4758.119)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-17 02:44:58', '2022-05-17 02:44:58'),
(62, '51.222.253.10', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-17 06:40:33', '2022-06-15 23:10:42'),
(63, '193.122.2.181', 'Chrome (88.0.4240.193)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-17 19:07:32', '2022-05-17 19:07:35'),
(64, '119.160.57.183', 'Chrome (94.0.4606.85)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-17 21:30:48', '2022-05-17 21:30:48'),
(65, '20.74.247.69', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-18 04:24:41', '2022-05-18 04:24:41'),
(66, '94.247.172.129', 'Mozilla (5.0)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-18 08:54:19', '2022-06-03 01:50:41'),
(67, '69.160.160.58', 'Chrome (80.0.3987.163)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-18 10:44:32', '2022-05-18 10:44:35'),
(68, '27.32.42.109', 'iPhone (15.3)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-18 20:48:52', '2022-05-18 20:48:52'),
(69, '120.18.9.70', 'iPhone (15.3)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 00:33:28', '2022-05-19 00:33:28'),
(70, '1.145.38.2', 'iPhone (15.3)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 04:48:18', '2022-05-19 04:48:18'),
(71, '154.54.249.195', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 05:49:39', '2022-06-09 01:10:34'),
(72, '27.34.59.208', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 06:00:48', '2022-05-19 06:00:51'),
(73, '120.17.66.206', 'iPhone (15.3)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 06:17:46', '2022-05-19 06:17:46'),
(74, '130.255.166.82', 'Chrome (91.0.4472.114)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 09:46:20', '2022-05-19 09:46:20'),
(75, '51.178.17.192', 'Chrome (96.0.4664.45)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-19 19:03:24', '2022-05-19 19:03:24'),
(76, '205.210.31.155', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 05:06:33', '2022-05-20 05:06:33'),
(77, '69.160.160.55', 'Chrome (81.0.4044.92)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 11:36:47', '2022-05-20 11:36:50'),
(78, '198.235.24.161', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 12:51:10', '2022-05-20 12:51:10'),
(79, '17.121.114.224', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 16:26:23', '2022-05-20 16:26:23'),
(80, '17.121.114.91', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 16:44:13', '2022-05-20 16:44:13'),
(81, '17.121.113.177', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 17:07:44', '2022-05-20 17:07:44'),
(82, '172.245.120.35', 'Internet Explorer (9.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-20 19:48:02', '2022-05-20 19:48:02'),
(83, '72.13.46.5', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 05:21:40', '2022-05-21 05:21:40'),
(84, '72.255.43.36', 'Chrome (101.0.4951.67)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 09:40:00', '2022-05-21 09:40:00'),
(85, '72.255.43.36', 'Chrome (101.0.4951.67)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 09:40:00', '2022-05-21 09:40:00'),
(86, '72.255.43.36', 'Chrome (101.0.4951.67)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 09:40:00', '2022-05-21 09:40:00'),
(87, '66.249.64.113', 'GoogleBot (2.1)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 14:12:33', '2022-05-21 14:12:33'),
(88, '69.160.160.61', 'Chrome (92.0.4515.107)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 14:22:45', '2022-05-21 14:22:47'),
(89, '203.101.188.46', 'Chrome (101.0.4951.61)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 17:35:08', '2022-05-21 17:35:08'),
(90, '66.249.64.170', 'GoogleBot (2.1)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 20:13:13', '2022-05-21 20:13:13'),
(91, '107.173.211.195', 'Chrome (66.0.3359.181)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 22:01:34', '2022-05-21 22:01:34'),
(92, '35.245.82.188', 'Chrome (101.0.4951.64)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 22:37:24', '2022-05-21 22:38:15'),
(93, '35.245.82.188', 'Chrome (101.0.4951.64)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 22:37:24', '2022-05-21 22:37:24'),
(94, '216.81.94.69', 'Chrome (101.0.4951.64)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-21 22:37:25', '2022-05-21 22:37:25'),
(95, '45.129.18.72', 'Chrome (35.0.1916.47)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 02:54:52', '2022-05-22 02:54:52'),
(96, '20.248.171.167', 'Chrome (78.0.3904.108)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 03:39:44', '2022-05-22 03:39:49'),
(97, '205.210.31.135', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 05:30:21', '2022-05-22 05:30:21'),
(98, '223.29.229.151', 'Chrome (101.0.4951.67)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 07:46:46', '2022-05-22 07:47:44'),
(99, '65.21.206.45', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 07:48:30', '2022-06-09 11:33:30'),
(100, '20.219.132.5', 'Chrome (80.0.3987.149)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 09:50:30', '2022-05-22 09:50:33'),
(101, '46.101.63.152', 'Chrome (74.0.3729.169)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 10:17:59', '2022-05-22 10:17:59'),
(102, '34.101.250.120', 'Chrome (78.0.3904.108)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 12:53:09', '2022-05-22 12:53:14'),
(103, '184.94.240.88', 'Firefox (53.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 14:19:27', '2022-05-23 12:20:45'),
(104, '5.45.207.153', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 16:20:57', '2022-05-22 16:20:57'),
(105, '20.213.148.236', 'Chrome (76.0.3809.132)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 16:46:10', '2022-05-22 16:46:14'),
(106, '20.211.113.28', 'Chrome (76.0.3809.132)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 20:13:53', '2022-05-22 20:13:57'),
(107, '157.245.71.118', 'Chrome (37.0.2049.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-22 21:09:55', '2022-05-22 21:09:55'),
(108, '66.249.64.111', 'Chrome (99.0.4844.84)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 01:58:18', '2022-05-23 01:58:18'),
(109, '93.159.230.83', 'Chrome (71.0.3578.98)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 06:21:43', '2022-05-23 06:21:43'),
(110, '5.45.207.131', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 12:05:23', '2022-06-26 00:00:26'),
(111, '191.101.217.249', 'Chrome (68.0.3440.75)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 12:41:27', '2022-05-23 12:41:27'),
(112, '198.235.24.30', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 13:35:49', '2022-05-23 13:35:49'),
(113, '124.220.171.34', 'Chrome (81.0.4044.138)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 19:04:37', '2022-05-23 19:04:43'),
(114, '124.223.197.100', 'Chrome (81.0.4044.138)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 21:04:03', '2022-05-23 21:11:02'),
(115, '124.221.230.151', 'Chrome (81.0.4044.138)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 22:21:28', '2022-05-23 22:31:46'),
(116, '138.199.63.52', 'Chrome (67.0.3396.87)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-23 23:52:39', '2022-05-23 23:52:39'),
(117, '185.181.60.12', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-24 01:08:52', '2022-05-24 01:08:52'),
(118, '101.53.242.98', 'Chrome (102.0.0.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-24 02:38:08', '2022-06-11 11:50:17'),
(119, '207.241.231.148', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-24 12:50:13', '2022-05-24 12:50:13'),
(120, '205.210.31.139', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-25 12:09:10', '2022-05-25 12:09:10'),
(121, '205.210.31.18', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-25 12:31:38', '2022-05-25 12:31:38'),
(122, '167.235.242.114', 'iPhone (unknown)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-25 23:21:54', '2022-05-25 23:21:54'),
(123, '20.191.45.212', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-26 01:44:25', '2022-05-28 18:03:46'),
(124, '40.122.206.21', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-26 07:51:21', '2022-05-26 07:52:09'),
(125, '69.160.160.60', 'Chrome (92.0.4515.107)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-26 09:44:59', '2022-05-26 09:45:02'),
(126, '64.246.165.140', 'Firefox (59.0)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-27 01:57:55', '2022-05-27 01:57:55'),
(127, '130.255.166.213', 'Chrome (91.0.4472.114)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-27 13:53:14', '2022-05-27 13:53:14'),
(128, '66.249.66.44', 'Chrome (101.0.4951.64)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 01:23:53', '2022-05-28 01:23:53'),
(129, '17.121.114.175', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 03:00:31', '2022-05-28 03:00:31'),
(130, '17.121.112.170', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 03:31:53', '2022-05-28 03:31:53'),
(131, '17.121.114.131', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 03:37:23', '2022-05-28 03:37:23'),
(132, '17.121.114.253', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 03:51:09', '2022-05-28 03:51:09'),
(133, '17.121.114.205', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 04:05:31', '2022-05-28 04:05:31'),
(134, '17.121.112.38', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 04:11:15', '2022-05-28 04:11:15'),
(135, '17.121.115.23', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 04:26:02', '2022-05-28 04:26:02'),
(136, '36.255.45.232', 'Chrome (101.0.4951.61)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 09:05:39', '2022-05-28 09:05:39'),
(137, '119.160.64.244', 'Chrome (101.0.4951.61)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 11:20:56', '2022-05-28 11:20:56'),
(138, '5.255.253.179', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-28 23:53:52', '2022-06-03 16:33:19'),
(139, '65.21.206.42', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 01:31:00', '2022-05-29 01:31:00'),
(140, '129.233.182.209', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 07:58:42', '2022-05-29 07:58:42'),
(141, '20.216.41.52', 'Firefox (52.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 15:39:22', '2022-05-29 15:39:40'),
(142, '205.210.31.138', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 15:46:18', '2022-05-29 15:46:18'),
(143, '173.208.149.114', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 16:06:52', '2022-05-29 16:14:19'),
(144, '87.250.224.174', 'Chrome (81.0.4044.268)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 17:24:14', '2022-05-29 17:24:14'),
(145, '205.210.31.11', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 18:22:19', '2022-05-29 18:22:19'),
(146, '5.255.253.140', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-29 21:50:24', '2022-05-29 21:50:24'),
(147, '111.119.187.40', 'Chrome (102.0.5005.62)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-30 06:12:27', '2022-05-30 06:12:51'),
(148, '23.99.197.177', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-30 06:40:25', '2022-05-30 06:40:27'),
(149, '162.142.125.222', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 07:27:30', '2022-06-01 07:27:30'),
(150, '66.249.72.88', 'Chrome (101.0.4951.64)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 10:00:46', '2022-06-01 10:00:46'),
(151, '66.249.72.80', 'Chrome (99.0.4844.84)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 10:02:55', '2022-06-01 10:02:55'),
(152, '66.249.72.84', 'GoogleBot (2.1)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 10:02:56', '2022-06-01 10:02:56'),
(153, '192.3.12.158', 'Chrome (68.0.3475.63)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 13:43:49', '2022-06-01 13:43:49'),
(154, '192.222.213.100', 'Chrome (101.0.4951.67)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 14:45:21', '2022-06-01 14:45:21'),
(155, '75.119.140.110', 'Chrome (81.0.4044.129)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 22:19:39', '2022-06-01 22:19:39'),
(156, '64.225.51.10', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-01 23:51:31', '2022-06-01 23:51:31'),
(157, '69.160.160.56', 'Chrome (81.0.4044.92)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-02 06:46:35', '2022-06-02 06:46:38'),
(158, '151.106.11.188', 'Chrome (67.0.3396.99)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-02 10:11:19', '2022-06-02 10:11:19'),
(159, '150.249.214.251', 'Chrome (74.0.3729.169)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-02 12:41:15', '2022-06-02 12:41:15'),
(160, '40.115.90.109', 'Chrome (78.0.3904.108)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-02 15:12:37', '2022-06-02 15:12:41'),
(161, '20.218.80.10', 'Firefox (72.0)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-03 09:19:28', '2022-06-03 09:19:35'),
(162, '17.121.115.181', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-04 03:43:12', '2022-06-04 03:43:12'),
(163, '17.121.112.165', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-04 03:51:22', '2022-06-04 03:51:22'),
(164, '17.121.112.254', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-04 04:16:50', '2022-06-04 04:16:50'),
(165, '17.121.112.43', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-04 05:06:50', '2022-06-04 05:06:50'),
(166, '93.158.90.71', 'Chrome (91.0.4472.114)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-04 16:59:16', '2022-06-04 16:59:16'),
(167, '134.122.8.190', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-05 16:45:31', '2022-06-05 16:45:31'),
(168, '41.141.23.116', 'Chrome (101.0.4951.64)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-05 17:42:48', '2022-06-05 17:42:48'),
(169, '49.36.233.100', 'Chrome (101.0.4951.64)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-05 17:43:17', '2022-06-05 17:43:17'),
(170, '134.209.33.120', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-05 17:57:13', '2022-06-05 17:57:13'),
(171, '130.61.226.117', 'Chrome (39.0.2171.95)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-05 20:56:12', '2022-06-05 20:56:12'),
(172, '202.142.179.66', 'Chrome (102.0.5005.61)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-06 09:41:04', '2022-06-06 09:41:04'),
(173, '27.42.81.41', 'Internet Explorer (7.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-06 10:43:58', '2022-06-06 10:48:00'),
(174, '119.123.94.229', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 01:49:56', '2022-06-07 01:51:25'),
(175, '205.210.31.144', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 04:01:21', '2022-06-07 04:01:21'),
(176, '198.235.24.11', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 11:44:24', '2022-06-07 11:44:24'),
(204, '205.210.31.132', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 11:53:30', '2022-06-11 11:53:30'),
(177, '180.163.220.68', 'Opera (537.36)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 13:25:16', '2022-06-07 13:25:16'),
(178, '180.163.220.4', 'Opera (537.36)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 13:25:31', '2022-06-07 13:25:31'),
(179, '27.115.124.45', 'Opera (537.36)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 13:26:46', '2022-06-07 13:27:32'),
(180, '114.119.145.79', 'Android (7.0)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-07 17:06:55', '2022-06-07 17:06:55'),
(181, '195.181.161.8', 'Chrome (67.0.3396.79)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-08 03:48:01', '2022-06-08 03:48:01'),
(182, '10.113.7.4', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-08 05:01:35', '2022-06-08 05:01:35'),
(183, '20.90.50.39', 'Chrome (81.0.4044.129)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-08 23:50:50', '2022-06-08 23:50:50'),
(184, '66.249.66.196', 'Chrome (102.0.5005.61)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-09 08:31:37', '2022-06-09 08:31:37'),
(185, '65.21.206.46', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-09 14:48:37', '2022-06-09 14:48:37'),
(186, '119.160.56.244', 'Chrome (92.0.4515.166)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-09 15:08:07', '2022-06-09 15:08:07'),
(187, '205.210.31.35', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 06:37:11', '2022-06-10 06:37:11'),
(188, '103.152.101.30', 'iPhone (15.4)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 18:02:50', '2022-06-10 18:02:50'),
(189, '207.46.13.214', 'Bing Bot (2.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 19:01:55', '2022-06-10 19:01:55'),
(190, '17.121.112.178', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 21:00:49', '2022-06-10 21:00:49'),
(191, '17.121.114.87', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 21:13:45', '2022-06-10 21:13:45'),
(192, '17.121.113.178', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 21:43:15', '2022-06-10 21:43:15'),
(193, '42.236.10.106', 'Opera (537.36)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 21:55:53', '2022-06-10 21:55:58'),
(194, '42.236.10.93', 'Opera (537.36)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 21:56:15', '2022-06-10 21:56:15'),
(195, '17.121.114.209', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 22:51:32', '2022-06-10 22:51:32'),
(196, '17.121.114.195', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 23:04:49', '2022-06-10 23:04:49'),
(197, '17.121.114.73', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-10 23:58:36', '2022-06-10 23:58:36'),
(198, '5.255.253.167', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 00:52:09', '2022-06-11 00:52:09'),
(199, '188.126.94.212', 'Edge (16.16299)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 02:04:08', '2022-06-11 02:04:08'),
(200, '1.116.195.130', 'Chrome (40.0.2214.93)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 06:41:02', '2022-06-11 06:41:02'),
(201, '17.121.112.85', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 07:10:01', '2022-06-11 07:10:01'),
(202, '17.121.114.153', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 07:48:11', '2022-06-11 07:48:11'),
(203, '94.158.36.183', 'Chrome (71.0.3578.98)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 10:39:37', '2022-06-11 10:39:37'),
(205, '38.18.51.163', 'Chrome (95.0.4638.69)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 12:20:22', '2022-06-11 12:20:22'),
(206, '198.235.24.33', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 16:16:16', '2022-06-11 16:16:16'),
(207, '176.100.8.204', 'Chrome (71.0.3578.98)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 20:30:24', '2022-06-11 20:30:24'),
(208, '74.208.50.87', 'Firefox (89.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-11 22:24:40', '2022-06-11 22:24:40'),
(209, '198.235.24.151', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 08:08:32', '2022-06-12 08:08:32'),
(210, '95.211.187.223', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 11:26:00', '2022-06-12 11:34:05'),
(211, '65.154.226.170', 'Chrome (76.0.3809.71)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 11:26:07', '2022-06-12 11:26:07'),
(212, '133.242.174.119', 'Android (2.2)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 13:25:14', '2022-06-12 13:25:14'),
(213, '133.242.140.127', 'Android (2.2)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 13:25:15', '2022-06-12 13:25:15'),
(214, '162.218.222.210', 'Chrome (81.0.4044.129)', 'Linux', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 14:07:25', '2022-06-12 14:07:25'),
(215, '111.119.187.60', 'Chrome (102.0.0.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 15:10:46', '2022-06-12 15:10:46'),
(216, '42.192.37.168', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 16:14:40', '2022-06-12 16:14:40'),
(217, '185.27.99.146', 'Chrome (91.0.4472.114)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-12 22:06:24', '2022-06-12 22:06:24'),
(218, '79.104.53.14', 'Firefox (59.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-13 06:49:13', '2022-06-13 06:49:13'),
(219, '61.164.47.194', 'Chrome (63.0.3239.108)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-13 18:41:32', '2022-06-13 19:47:07'),
(220, '87.249.132.174', 'Chrome (49.0.2623.112)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 02:33:50', '2022-06-14 02:33:50'),
(221, '205.210.31.30', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 02:48:19', '2022-06-14 02:48:19'),
(222, '151.106.120.184', 'Chrome (100.0.4896.88)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 05:18:14', '2022-06-14 05:18:15'),
(223, '151.106.120.184', 'Chrome (100.0.4896.88)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 05:18:14', '2022-06-14 05:18:14'),
(224, '151.106.120.184', 'Chrome (100.0.4896.88)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 05:18:14', '2022-06-14 05:18:14'),
(225, '151.106.120.184', 'iPhone (10.0)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 05:18:14', '2022-06-14 05:18:14'),
(226, '198.235.24.16', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 07:58:02', '2022-06-14 07:58:02'),
(227, '45.129.18.192', 'Chrome (51.0.2704.84)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-14 12:00:56', '2022-06-14 12:00:56'),
(228, '191.101.217.119', 'Chrome (90.0.4430.86)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-15 04:19:33', '2022-06-15 04:19:33'),
(229, '45.129.18.156', 'Chrome (51.0.2704.84)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-15 15:39:03', '2022-06-15 15:39:03'),
(230, '114.119.145.78', 'Android (7.0)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-15 16:07:14', '2022-06-15 16:07:14'),
(231, '207.46.13.169', 'Bing Bot (2.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-15 18:56:58', '2022-06-15 18:56:58'),
(232, '84.17.43.165', 'Chrome (67.0.3396.99)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-15 23:51:32', '2022-06-15 23:51:32'),
(233, '66.249.66.43', 'Chrome (99.0.4844.84)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 03:16:23', '2022-06-16 13:52:30'),
(234, '66.249.66.49', 'GoogleBot (2.1)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 04:06:09', '2022-06-16 04:06:09'),
(235, '64.246.187.42', 'Firefox (59.0)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 10:46:04', '2022-06-16 10:46:04'),
(236, '66.249.66.86', 'GoogleBot (2.1)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 13:52:12', '2022-06-16 13:52:32'),
(237, '198.235.24.150', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 19:55:11', '2022-06-16 19:55:11'),
(238, '45.129.18.236', 'Chrome (51.0.2704.84)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 21:57:44', '2022-06-16 21:57:44'),
(239, '205.210.31.31', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-16 22:04:55', '2022-06-16 22:04:55'),
(240, '137.184.49.251', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 01:11:51', '2022-06-17 01:11:51'),
(241, '198.235.24.3', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 04:06:58', '2022-06-17 04:06:58'),
(242, '185.181.60.189', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 08:09:45', '2022-06-17 08:09:45'),
(243, '182.187.105.101', 'Chrome (102.0.0.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 13:46:28', '2022-06-17 13:46:28'),
(244, '172.16.2.36', 'Chrome (102.0.0.0)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 14:19:21', '2022-06-17 14:19:21'),
(245, '205.210.31.33', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 15:56:57', '2022-06-17 15:56:57'),
(246, '117.136.46.229', 'iPhone (unknown)', 'iPhone', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-17 23:47:51', '2022-06-17 23:47:51'),
(247, '37.19.217.217', 'Opera (53.0.2907.99)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-18 03:33:57', '2022-06-18 03:33:57'),
(248, '58.27.204.94', 'Chrome (102.0.0.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-18 13:11:28', '2022-06-25 08:18:31'),
(249, '139.135.38.41', 'Chrome (102.0.0.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 07:31:43', '2022-06-24 07:31:43'),
(250, '157.55.39.118', 'Bing Bot (2.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 14:52:07', '2022-06-25 14:17:11'),
(251, '103.148.154.130', 'Chrome (102.0.0.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 16:03:25', '2022-06-24 16:36:20'),
(252, '20.121.113.229', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 17:11:49', '2022-06-24 17:11:51'),
(253, '119.160.99.23', 'Chrome (101.0.0.0)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 18:12:39', '2022-06-24 18:12:40'),
(254, '17.121.113.22', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 22:33:03', '2022-06-24 22:33:03'),
(255, '17.121.112.110', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 23:02:21', '2022-06-24 23:02:21'),
(256, '17.121.113.227', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 23:08:31', '2022-06-24 23:08:31'),
(257, '17.121.112.111', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 23:19:53', '2022-06-24 23:19:53'),
(258, '17.121.112.10', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 23:38:14', '2022-06-24 23:38:14'),
(259, '17.121.113.204', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 00:13:16', '2022-06-25 00:13:16'),
(260, '17.121.113.6', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 00:40:22', '2022-06-25 00:40:22'),
(261, '17.121.114.121', 'Safari (13.1.1)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 00:56:34', '2022-06-25 00:56:34'),
(262, '198.235.24.8', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 03:49:01', '2022-06-25 03:49:01'),
(263, '195.78.54.25', 'Chrome (68.0.3440.75)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 04:13:02', '2022-06-25 04:13:02'),
(264, '84.17.48.96', 'Chrome (65.0.3325.146)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 05:37:05', '2022-06-25 05:37:05'),
(265, '182.52.129.41', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:05:36', '2022-06-25 08:05:36'),
(266, '147.192.92.233', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:05:46', '2022-06-25 08:05:46'),
(267, '61.75.223.158', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:06:21', '2022-06-25 08:06:21'),
(268, '110.4.145.243', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:06:29', '2022-06-25 08:06:29'),
(269, '164.70.213.241', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:06:38', '2022-06-25 08:06:38'),
(270, '110.93.223.108', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:06:45', '2022-06-25 08:06:45'),
(271, '112.169.183.24', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:06:49', '2022-06-25 08:06:49'),
(272, '112.214.166.19', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:06:57', '2022-06-25 08:06:57'),
(273, '5.133.227.226', 'Internet Explorer (6.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 08:07:08', '2022-06-25 08:07:08'),
(274, '34.136.122.225', 'Chrome (99.0.4844.84)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 09:01:25', '2022-06-25 09:01:25'),
(275, '205.210.31.10', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 10:33:46', '2022-06-25 10:33:46'),
(276, '66.249.66.10', 'Chrome (102.0.5005.115)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 11:23:01', '2022-06-25 19:12:28'),
(277, '154.54.249.202', 'Mozilla (5.0)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 12:11:56', '2022-06-25 12:12:54'),
(278, '193.149.176.68', 'Edge (12.246)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 12:33:48', '2022-06-25 12:33:51'),
(279, '205.210.31.136', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 13:56:52', '2022-06-25 13:56:52'),
(280, '198.235.24.20', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 15:24:20', '2022-06-26 04:15:46'),
(281, '111.119.183.6', 'Firefox (100.0)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 15:55:52', '2022-06-25 15:55:52'),
(282, '196.242.178.120', 'Chrome (69.0.3444.0)', 'Apple', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-25 21:43:36', '2022-06-25 21:43:36'),
(283, '205.210.31.142', 'unknown (unknown)', 'unknown', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-26 02:08:40', '2022-06-26 02:08:40'),
(284, '185.181.61.24', 'Chrome (91.0.4472.114)', 'Windows', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-26 02:21:50', '2022-06-26 02:21:50'),
(285, '124.126.78.176', 'Chrome (88.0.4472.114)', 'Android', '0', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-26 04:57:15', '2022-06-26 04:57:15'),
(286, '111.119.183.37', 'Firefox (101.0)', 'Windows', '12', 'iftikhar s2017065035@umt.edu.pk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-26 05:27:13', '2022-06-26 06:01:33');

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
(2, 5, 2, 'product', '2021-09-19 11:58:03', '2021-09-19 11:58:03'),
(3, 5, 19, 'bike', '2021-10-09 05:26:07', '2021-10-09 05:26:07'),
(4, 5, 1, 'product', '2021-10-09 05:33:41', '2021-10-09 05:33:41'),
(5, 5, 17, 'bike', '2021-10-09 05:37:57', '2021-10-09 05:37:57');

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
-- Indexes for table `visitlogs`
--
ALTER TABLE `visitlogs`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `visitlogs`
--
ALTER TABLE `visitlogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
