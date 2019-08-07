-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `homeworkphp`
--

DELIMITER $$
--
-- 程序
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `creatcommodity` (`n` INT)  BEGIN

set@i=1;
while @i<=n do
	INSERT INTO `commodity` (`cid`, `cPicture`, `cName`, `cPrice`) VALUES (NULL, concat('icon',@i), concat('commodity',@i),cast(ceiling(rand() * 1000) as int));
    set@i = @i+1;
end while;


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `commodity`
--

CREATE TABLE `commodity` (
  `cid` int(255) NOT NULL,
  `cPicture` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cPrice` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `commodity`
--

INSERT INTO `commodity` (`cid`, `cPicture`, `cName`, `cPrice`) VALUES
(1, 'icon1.png', 'commodity1', 677),
(2, 'icon2.png', 'commodity2', 588),
(3, 'icon3.png', 'commodity3', 907),
(4, 'icon4.png', 'commodity4', 772),
(5, 'icon5.png', 'commodity5', 139),
(6, 'icon6.png', 'commodity6', 377),
(7, 'icon7.png', 'commodity7', 470),
(8, 'icon8.png', 'commodity8', 216),
(9, 'icon9.png', 'commodity9', 672),
(10, 'icon10.png', 'commodity10', 710),
(11, 'icon11.png', 'commodity11', 535),
(12, 'icon12.png', 'commodity12', 542),
(13, 'icon13.png', 'commodity13', 104),
(14, 'icon14.png', 'commodity14', 894);

-- --------------------------------------------------------

--
-- 資料表結構 `userinfo`
--

CREATE TABLE `userinfo` (
  `account` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `passWord` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `userinfo`
--

INSERT INTO `userinfo` (`account`, `userName`, `passWord`) VALUES
('demo', 'Sleigh_Lai', 'demo'),
('demo1', 'Jonas_Lin', 'demo1');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`cid`);

--
-- 資料表索引 `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`account`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `commodity`
--
ALTER TABLE `commodity`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
