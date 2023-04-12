-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
-- 主機： mariadb
-- 產生時間： 2023 年 04 月 12 日 03:09
-- 伺服器版本： 10.7.4-MariaDB-1:10.7.4+maria~focal
-- PHP 版本： 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `rent`
--

-- --------------------------------------------------------

--
-- 資料表結構 `blacklist`
--

CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL,
  `category` int(100) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, '了解租屋黑市'),
(2, '最新消息');

-- --------------------------------------------------------

--
-- 資料表結構 `house`
--

CREATE TABLE `house` (
  `h_id` int(11) NOT NULL,
  `h_where` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `h_address` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `h_price` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `h_who` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `house`
--

INSERT INTO `house` (`h_id`, `h_where`, `h_address`, `h_price`, `h_who`) VALUES
(1, '', '', '', ''),
(2, '台中市', '清水讚讚', '每月5000NT', '123'),
(3, '台中市', '清水讚讚2', '每月5000NT2', '123'),
(4, '台中市', '清水讚讚3', '每月5000NT3', '123'),
(5, '台中市', '南屯區嶺東路1號', '每月6000NT', '9'),
(6, '台中市', '', '', '9'),
(7, '台中市', '', '', '9'),
(8, '台中市', '清水讚讚', '每月5000NT2', '9'),
(9, '台中市', '', '', '9'),
(10, '台中市', '', '', '9'),
(11, '台中市', '', '', '999'),
(12, '台中市', '南屯區', '10000', '999'),
(13, '台中市', '', '', '999'),
(14, '台中市', '', '', '999'),
(15, '台中市', '123', '45600', '999'),
(16, '台中市', '南屯區', '10000', '999'),
(17, '台中市', '南屯區', '45600', '456');

-- --------------------------------------------------------

--
-- 資料表結構 `housee`
--

CREATE TABLE `housee` (
  `hh_id` int(11) NOT NULL,
  `hh_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hh_where` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hh_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hh_com` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text NOT NULL,
  `hh_price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `water` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `light` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `inter` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `wash` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ref` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `drink` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `tel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `air` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `gas` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `bed` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `cloth` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `sofa` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `tach` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `pet` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'false',
  `parking` varchar(10) DEFAULT NULL,
  `square` float NOT NULL,
  `deposit` varchar(10) DEFAULT NULL,
  `min_rent` int(10) NOT NULL DEFAULT 1,
  `contact` varchar(200) DEFAULT NULL,
  `is_social_housing` int(10) NOT NULL DEFAULT 0,
  `hh_img` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `hh_who` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `google_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `housee`
--

INSERT INTO `housee` (`hh_id`, `hh_name`, `hh_where`, `hh_address`, `hh_com`, `description`, `hh_price`, `water`, `light`, `inter`, `wash`, `ref`, `drink`, `tel`, `air`, `gas`, `bed`, `cloth`, `sofa`, `tach`, `pet`, `parking`, `square`, `deposit`, `min_rent`, `contact`, `is_social_housing`, `hh_img`, `hh_who`, `google_map`) VALUES
(30, '456', '清水區', '南屯區', '太子', '', '7000', 'true', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'true', 'true', 'true', 'false', 'false', NULL, 0, NULL, 0, NULL, 0, NULL, '999', ''),
(31, '曾13', '南屯區', '永春南路61', '太子大街', '', '45600', 'true', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true', 'false', NULL, 0, NULL, 0, NULL, 0, NULL, '999', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.9533896300827!2d120.60929631481771!3d24.138274979765193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693e7daaa2d465%3A0x48b2f61f010788e3!2zNDA45Y-w5Lit5biC5Y2X5bGv5Y2A5rC45pil5Y2X6LevNjHomZ8!5e0!3m2!1szh-TW!2stw!4v1679577171689!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(32, '11', '南屯區', '南屯區', '1234', '', '10000', 'true', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true', 'true', 'false', NULL, 0, NULL, 0, NULL, 0, NULL, '999', ''),
(33, '456', '南屯區', '永春南路61', '1234', '', '10000', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, 0, NULL, 0, NULL, 0, '/images//000.jpg', '999', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.9533896300827!2d120.60929631481771!3d24.138274979765193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693e7daaa2d465%3A0x48b2f61f010788e3!2zNDA45Y-w5Lit5biC5Y2X5bGv5Y2A5rC45pil5Y2X6LevNjHomZ8!5e0!3m2!1szh-TW!2stw!4v1679577171689!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(34, '456', '清水區', '南屯區', '1234', '', '10000', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, 0, NULL, 0, NULL, 0, 'images/000.jpg', '999', ''),
(35, '456', '清水區', '南屯區', '太子', '', '10000', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, 0, NULL, 0, NULL, 0, '', '456', ''),
(36, '曾', '清水區', '永春南路', '1234', '', '10000', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, 0, NULL, 0, NULL, 0, '', 'abc', ''),
(37, '太子大街501號房', '南屯區', '永春南路61巷12之20號', '太子嶺東大街', '', '8000', 'true', 'true', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'true', 'true', 'false', 'false', NULL, 0, NULL, 0, NULL, 0, 'images/哈們.jpg', '0913', '');

-- --------------------------------------------------------

--
-- 資料表結構 `landlord_review`
--

CREATE TABLE `landlord_review` (
  `id` int(11) NOT NULL,
  `user` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `landlord` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `acc` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `public_benefit_lessor` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `is_public_benefit_lessor` tinyint(4) NOT NULL DEFAULT 0,
  `rental_certi` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `is_rental_certi` tinyint(4) NOT NULL DEFAULT 0,
  `is_admin` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`acc`, `pass`, `name`, `mail`, `phone`, `public_benefit_lessor`, `is_public_benefit_lessor`, `rental_certi`, `is_rental_certi`, `is_admin`) VALUES
('0913', '0913', '曾盟鈞', '789@456', 918091358, NULL, 0, NULL, 0, 0),
('11', '11', '123', '123', 55555, NULL, 0, NULL, 0, 0),
('123', '123', 'test', 'test@', 111, NULL, 0, NULL, 0, 0),
('456', '456', '456', '789', 789, NULL, 0, NULL, 0, 0),
('777', '777', '777', '777', 777, NULL, 0, NULL, 0, 0),
('9', '9', '陳', '9@9', 999, NULL, 0, NULL, 0, 0),
('998', '998', '曾', '777', 123, NULL, 0, NULL, 0, 0),
('999', '999', '456', '123@123', 123, NULL, 1, NULL, 1, 0),
('abc', 'abc', 'abc', 'abc@mail', 123456, NULL, 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `vrtime`
--

CREATE TABLE `vrtime` (
  `vr_who` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `vr_time` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `備註` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `vrtime`
--

INSERT INTO `vrtime` (`vr_who`, `vr_time`, `備註`) VALUES
('999', '', ''),
('9', '2022-11-08T10:18', ''),
('9', '2022-11-15T10:18', ''),
('999', '2022-11-23T16:14', ''),
('999', '2022-12-05T13:37', ''),
('456', '2022-12-07T18:18', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`h_id`);

--
-- 資料表索引 `housee`
--
ALTER TABLE `housee`
  ADD PRIMARY KEY (`hh_id`);

--
-- 資料表索引 `landlord_review`
--
ALTER TABLE `landlord_review`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`acc`);

--
-- 資料表索引 `vrtime`
--
ALTER TABLE `vrtime`
  ADD PRIMARY KEY (`vr_time`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `house`
--
ALTER TABLE `house`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `housee`
--
ALTER TABLE `housee`
  MODIFY `hh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `landlord_review`
--
ALTER TABLE `landlord_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
