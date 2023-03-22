-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-13 10:22:56
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

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
  `hh_img` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `hh_who` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `housee`
--

INSERT INTO `housee` (`hh_id`, `hh_name`, `hh_where`, `hh_address`, `hh_com`, `hh_price`, `water`, `light`, `inter`, `wash`, `ref`, `drink`, `tel`, `air`, `gas`, `bed`, `cloth`, `sofa`, `tach`, `pet`, `hh_img`, `hh_who`) VALUES
(30, '456', '清水區', '南屯區', '太子', '7000', 'true', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'true', 'true', 'true', 'false', 'false', NULL, '999'),
(31, '曾13', '南屯區', '永春南路61', '太子大街', '45600', 'true', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true', 'false', NULL, '999'),
(32, '11', '南屯區', '南屯區', '1234', '10000', 'true', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true', 'true', 'false', NULL, '999'),
(33, '456', '南屯區', '永春南路61', '1234', '10000', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '/images//000.jpg', '999'),
(34, '456', '清水區', '南屯區', '1234', '10000', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'images/000.jpg', '999'),
(35, '456', '清水區', '南屯區', '太子', '10000', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '', '456'),
(36, '曾', '清水區', '永春南路', '1234', '10000', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '', 'abc'),
(37, '太子大街501號房', '南屯區', '永春南路61巷12之20號', '太子嶺東大街', '8000', 'true', 'true', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'true', 'true', 'false', 'false', 'images/哈們.jpg', '0913');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `acc` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`acc`, `pass`, `name`, `mail`, `phone`) VALUES
('0913', '0913', '曾盟鈞', '789@456', 918091358),
('11', '11', '123', '123', 55555),
('123', '123', 'test', 'test@', 111),
('456', '456', '456', '789', 789),
('777', '777', '777', '777', 777),
('9', '9', '陳', '9@9', 999),
('998', '998', '曾', '777', 123),
('999', '999', '456', '123@123', 123),
('abc', 'abc', 'abc', 'abc@mail', 123456);

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `house`
--
ALTER TABLE `house`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `housee`
--
ALTER TABLE `housee`
  MODIFY `hh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
