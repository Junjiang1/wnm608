-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2022-07-23 17:51:43
-- 服务器版本： 5.6.51-cll-lve
-- PHP 版本： 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `junjiang608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnall` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnall`, `images`) VALUES
(1, 'chia_seed', 'chuaseed853@gmail.com', 'www.chia_seed.com', 4, 'seeds', '2022-07-20 21:05:45', '2022-07-21 21:05:45', 'chia_seed', 'chia_seed.jpg', 'chia_seed.jpg'),
(2, 'matcha', 'matcha@gmail.com', 'match.com', 5, 'tea', '2022-07-12 21:09:18', '2022-07-21 21:09:18', 'macha is tea', 'macha.jpg', 'macha.jpg'),
(3, 'salmon', 'salmon@gmail.com', 'wwww.salmon.com', 5, 'fish', '2022-07-03 21:10:52', '2022-07-30 21:10:52', 'salmon', 'salmon.jpg', 'salmon.jpg'),
(4, 'acai', 'acai@gmail.com', 'wwww.acai.com', 9, 'fruit', '2022-07-20 21:13:11', '2022-07-21 21:13:11', 'acai is a fruit', 'acai.jpg', 'acai.jpg'),
(5, 'blueberry', 'blueberry@gmail.com', 'blueberry.com', 9, 'fruit', '2022-07-18 21:31:52', '2022-07-20 21:31:52', 'blueberry', 'blueberry.jpg', 'blueberry.jpg'),
(6, 'soybean', 'soybean@gmail.com', 'www.soybean.com', 12, 'vege.', '2022-07-19 21:32:43', '2022-07-20 21:32:44', 'soybean', 'soybean.jpg', 'soybean.jpg'),
(7, 'pecan', 'pecan@gmail.com', 'www.pecan.com', 4, 'nuts', '2022-07-20 21:05:45', '2022-07-21 21:05:45', 'pecan', 'pecan.jpg', 'pecan.jpg'),
(8, 'garlic', 'garlic@gmail.com', 'www.garlic.com', 12, 'vege', '2022-07-19 21:32:43', '2022-07-20 21:32:44', 'garlic', 'garlic.jpg', 'garlic.jpg'),
(9, 'cranberry', 'cranberry@gmail.com', 'cranberry.com', 9, 'fruit', '2022-07-18 21:31:52', '2022-07-20 21:31:52', 'cranberry', 'cranberry.jpg', 'cranberry.jpg'),
(10, 'lettuce', 'lettuce@gmail.com', 'www.lettuce.com', 4, 'vege', '2022-07-20 21:05:45', '2022-07-21 21:05:45', 'lettuce', 'lettuce.jpg', 'lettuce.jpg'),
(11, 'green_onino', 'green_onino@gmail.com', 'www.green_onino.com', 4, 'vege', '2022-07-20 21:05:45', '2022-07-21 21:05:45', 'green_onino', 'green_onino.jpg', 'green_onino.jpg'),
(12, 'tomato', 'tomato@gmail.com', 'www.tomato.com', 4, 'vege', '2022-07-20 21:05:45', '2022-07-21 21:05:45', 'tomato', 'tomato.jpg', 'tomato.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
