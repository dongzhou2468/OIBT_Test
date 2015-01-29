-- phpMyAdmin SQL Dump
-- version 4.2.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-12-08 16:52:38
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oibt`
--

-- --------------------------------------------------------

--
-- 表的结构 `apps`
--

CREATE TABLE IF NOT EXISTS `apps` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `dscp` text,
  `version` varchar(20) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `apkurl` varchar(50) DEFAULT NULL,
  `imgurl` varchar(50) DEFAULT NULL,
  `ISV` varchar(20) DEFAULT NULL,
  `dltimes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `apps`
--

INSERT INTO `apps` (`id`, `name`, `type`, `dscp`, `version`, `size`, `apkurl`, `imgurl`, `ISV`, `dltimes`) VALUES
(1, '斗地主电视比赛', '特色视频', '看斗地主比赛的独家应用！', '1.0', 7802, 'resources/doudizhudianshibisai.apk', 'res/img/index/doudizhudianshibisai.png', '开发者平台', 231),
(2, '网络测速', '系统工具', '1、智能检测，电视网络速度一目了然2、提升20%在线直播、在线视频观看速度3、智能为在线游戏网络提升速度30%', '1.0.1', 730, 'resources/wangluocesu.apk', 'res/img/index/wangluocesu.png', '小麻雀工作室', 3707),
(3, '百度音乐', '音乐相关', '百度音乐电台，精心为您推荐好歌，打开即能听，解决您不知道听什么的困惑。', '1.0.21', 3420, 'resources/baiduyinyue.apk', 'res/img/index/baiduyinyue.png', '开发者平台', 1518),
(4, '狼和狐狸', '教育学习', '从前，有一只狼和狐狸住在一起，狼经常欺负它，叫狐狸去给它找吃的，不给它找狼就要吃了它，狐狸没办法只好去给它找。', '1.2.5', 25743, 'resources/langhehuli.apk', 'res/img/index/langhehuli.png', '开发者平台', 297);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
