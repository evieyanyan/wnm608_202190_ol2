-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2023-05-01 01:31:57
-- 服务器版本： 5.7.41-cll-lve
-- PHP 版本： 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yanyanevie_giftshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `giftshop`
--

CREATE TABLE `giftshop` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `giftshop`
--

INSERT INTO `giftshop` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_update`, `description`, `thumbnail`, `images`) VALUES
(1, 'KAHALA SHIRTS X NICK KUCHAR - \"HEAVY WATER\" ALOHA SHIRT', '', '', '48.00', 't-shirts', '2023-04-25 12:47:54', '2023-04-25 12:47:54', 'In Kuchar\'s words, \"With the \'Heavy Water\' concept I wanted to feature several of these iconic spots and pay homage to wave riders past and present—surfers catching waves at Sunset beach, the perfectly lined-up waves at second and third reef Pipeline, the riders dropping in at Waimea, and the magnificent wave at Pe\'ahi off in the distance. The loosely rendered sea spray above the wave\'s crest hints at those offshore wind days where the waves are glassy, lined up and all is right with the world.\" ', 'item1_thumbnail.jpeg', 'item1_1.jpeg,item1_2.jpeg,item1_3.jpeg'),
(2, 'Happy Shave Ice Water Bottle- Strawberry/Pineapple', '', '', '36.00', 'bottles', '2023-04-25 12:52:03', '2023-04-25 12:52:03', 'New Happy Haleiwa Shave Ice Water Bottle!  Double wall vacuum insulation protects temperatures for cold and hot beverages.  Eco-friendly, reduce the use of plastic bottles. Take this cute bottle with you everywhere!', 'item2_1.jpeg', 'item2_1.jpeg'),
(3, 'HURLEY PRO SUNSET BEACH X NICK KUCHAR TANK TOP', '', '', '34.00', 't-shirts', '2023-04-25 13:09:49', '2023-04-25 13:09:49', 'Ideally you’re wearing this tank on the beach at Sunset as you take in the Hurley Pro Sunset Beach — but no matter where you watch the event, it’s more fun to do it in exclusive event merch. The Everyday Washed Sunset Pro Tank Top features artwork Oahu based artist Nick Kuchar at left chest and back.', 'item3_1.jpeg', 'item3_1.jpeg,item3_2.jpeg,item3_3.jpeg'),
(4, 'SHEARWATER TEE SHIRT - WHITE\r\n', '', '', '27.00', 't-shirts', '2023-04-25 13:38:35', '2023-04-25 13:38:35', 'Our popular tee shirt design featuring Kailua sunshine, the Shearwater bird and beautiful Mokulua Islands printed on super comfy 100% Organic Cotton.  ', 'item4_1.jpeg', 'item4_1.jpeg, item4_2.jpeg, item4_3.jpeg'),
(5, 'Hawaiian Vacation\r\n', '', '', '24.00', 't-shirts', '2023-04-25 13:41:42', '2023-04-25 13:41:42', '100% Cotton \r\nClassic Fit', 'item5_1.jpeg', 'item5_1.jpeg,item5_2.jpeg'),
(6, 'Aloha Tote - Pineapple Love\r\n', '', '', '30.00', 'bags', '2023-04-25 13:44:19', '2023-04-25 13:44:19', 'A perfect tote to carry all your essentials \r\n\r\n100% Cotton \r\nSize: Height: 12 in (30.5 cm) \r\n         Width: 15 in (38.0 cm)\r\n         Gusset: 3.5 in (9.0 cm) \r\n         Handle Length: 14.5 in (37.0 cm) \r\nPrinted in Hawaii \r\nMade with Aloha', 'item6_1.jpeg', 'item6_1.jpeg,item6_2.jpeg'),
(7, 'Bottom Circle Bag - Surf\r\n', '', '', '32.00', 'bags', '2023-04-25 13:53:21', '2023-04-25 13:53:21', 'Super cute tote with a design on the bottom\r\n', 'item7_1.jpeg', '.jpegitem7_1.jpeg, item7_2.jpeg, item7_3.jpeg'),
(8, 'SHOP TEE\r\n', '', '', '35.00', 't-shirts', '2023-04-25 13:58:52', '2023-04-25 13:58:52', 'Our tee shirt featuring Nick Kuchar shop and gallery in sunny Kailua, Oahu. Hawaiian sailing canoe art on the front and our shop logo on the back. Printed on super comfy 100% Organic Cotton.  ', 'item8_1.jpeg', 'item8_1.jpeg,item8_2.jpeg,item8_3.jpeg,item8_4.jpeg'),
(9, 'SURFER TOWEL X NICK KUCHAR - DESTINATION\r\n', '', '', '36.00', 'towels', '2023-04-25 14:05:38', '2023-04-25 14:05:38', 'One of Nick\'s collaborations with Surfer Towel, \"Destination.\" Surfer Towel is the microfiber, light-weight, pack-down-small, camp, surf, yoga, everything towel.\r\nNick\'s Commentary: \"Some of my favorite travel prints designs are included on this towel.  I think of it as a fun way to view the islands through my eyes.\"', 'item9_1.jpeg', 'item9_1.jpeg,item9_2.jpeg,item9_3.jpeg,item9_4.jpeg'),
(10, 'Happy Shave Ice Water Bottle- Vanilla/Blue Hawaii', '', '', '37.00', 'bottles', '2023-04-25 14:11:07', '2023-04-25 14:11:07', 'New Happy Haleiwa Shave Ice Water Bottle!  Double wall vacuum insulation protects temperatures for cold and hot beverages.  Eco-friendly, reduce the use of plastic bottles. Take this cute bottle with you everywhere!\r\n', 'item11_1.jpeg', 'item11_1.jpeg'),
(11, 'Kuleaina Tropical HI Sand Free Towel\r\n', '', '', '28.00', 'towels', '2023-04-25 14:20:31', '2023-04-25 14:20:31', 'Kuleaina Hawaii\'s Sand Free Towels are perfect for a day at the beach or use as a lightweight compact blanket, the possibilities are endless.  Dual side printed to display whatever mood you are in.  Made with micro fiber suede.  Comes with a reuseable zippered carrying case with a wrist strap which can also be used to hold your wet items or everyday essentials.  Perfect for the beach with the mesh front to shake out all the unwanted sand easily.  Great gift for everyone or just a gift for yourself.  Get yours today!\r\n\r\n', 'item12_!.jpeg', 'item12_!.jpeg,item12_2.jpeg,item12_3.jpeg'),
(12, 'HAWAIIAN ISLANDS MAP -CANVAS BEACH TOTE BAG - MADE IN USA', '', '', '29.00', 'bags', '2023-04-25 14:21:51', '2023-04-25 14:21:51', 'Our Made in the USA Hawaiian Islands tote is perfect for carrying everything you need for a day in the sun.  Featuring the fabled mountains, craters and beaches of Hawaii, you can practically feel the trade winds emanating from this high quality cotton tote.  Great for holding your beach goodies, surf wax, pineapples, papayas and more! Available in Aqua/Deep Orange.\r\n', 'item10_1.jpeg', 'item10_1.jpeg,item10_2.jpeg,item10_3.jpeg');

--
-- 转储表的索引
--

--
-- 表的索引 `giftshop`
--
ALTER TABLE `giftshop`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `giftshop`
--
ALTER TABLE `giftshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
