-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Nov 20, 2012, 12:06 PM
-- 伺服器版本: 5.5.25
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 資料庫: `books`
--
CREATE DATABASE `books` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `books`;

-- --------------------------------------------------------

--
-- 資料表格式： `bookorder`
--

CREATE TABLE IF NOT EXISTS `bookorder` (
  `orderNo` int(11) NOT NULL AUTO_INCREMENT,
  `orderMemNo` smallint(6) NOT NULL DEFAULT '0',
  `orderTime` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `payStatus` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`orderNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 列出以下資料庫的數據： `bookorder`
--

INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`) VALUES
(1, 1, '2008-10-20 00:00:00', 'i750307@iii.org.tw', '0'),
(2, 1, '2008-10-20 00:00:00', 'i750307@iii.org.tw', '0'),
(3, 1, '2012-06-17 00:00:00', 'i750307@iii.org.tw', '0'),
(4, 1, '2012-06-17 00:00:00', 'i750307@iii.org.tw', '0'),
(5, 1, '2012-06-17 00:00:00', 'i750307@iii.org.tw', '0'),
(6, 2, '2012-06-17 00:00:00', 'amy@nctu.edu.tw', '0');

-- --------------------------------------------------------

--
-- 資料表格式： `discuss`
--

CREATE TABLE IF NOT EXISTS `discuss` (
  `discussNo` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` mediumtext NOT NULL,
  `memNo` int(10) NOT NULL,
  `issueDate` datetime NOT NULL,
  `replyCount` int(11) DEFAULT NULL,
  `lastReplyTime` datetime DEFAULT NULL,
  PRIMARY KEY (`discussNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 列出以下資料庫的數據： `discuss`
--

INSERT INTO `discuss` (`discussNo`, `title`, `content`, `memNo`, `issueDate`, `replyCount`, `lastReplyTime`) VALUES
(1, '請大家踴躍發表', '請大家踴躍發表', 1, '2006-11-25 22:29:52', 2, '2008-12-01 11:16:33'),
(2, '雁子的啟示', '讓我感受到與朋友互助的重要性', 2, '2006-11-27 02:11:39', 2, '2008-12-01 11:23:48');

-- --------------------------------------------------------

--
-- 資料表格式： `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `memName` varchar(10) DEFAULT NULL,
  `memId` varchar(8) DEFAULT NULL,
  `memPsw` varchar(8) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `memId` (`memId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 列出以下資料庫的數據： `member`
--

INSERT INTO `member` (`no`, `memName`, `memId`, `memPsw`, `email`, `sex`, `birthday`, `tel`) VALUES
(1, '董董', 'Sara', '111', 'i750307@iii.org.tw', '0', '1960-08-08', '03-4257383'),
(2, '婷婷', 'Amy', '111', 'amy@nctu.edu.tw', '0', '1998-01-01', '03-4257387'),
(3, '帥帥', 'Handsome', '111', 'handsome@gmail.com', '1', '1960-01-01', '0933168168');

-- --------------------------------------------------------

--
-- 資料表格式： `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `orderNo` int(11) NOT NULL DEFAULT '0',
  `productNo` smallint(6) NOT NULL DEFAULT '0',
  `quantity` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `orderitems`
--

INSERT INTO `orderitems` (`orderNo`, `productNo`, `quantity`) VALUES
(1, 2, 1),
(1, 4, 1),
(2, 3, 17),
(2, 6, 17),
(3, 1, 21),
(3, 3, 21),
(4, 1, 321),
(4, 3, 321),
(4, 6, 321),
(5, 3, 30),
(5, 6, 30),
(6, 1, 22),
(6, 2, 22),
(6, 4, 22);

-- --------------------------------------------------------

--
-- 資料表格式： `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `psn` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL DEFAULT '',
  `price` int(11) DEFAULT NULL,
  `author` varchar(15) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`psn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 列出以下資料庫的數據： `products`
--

INSERT INTO `products` (`psn`, `pname`, `price`, `author`, `pages`, `image`) VALUES
(1, 'PHP4+MySQL動態網頁入門實務', 110, '馬孝瑀', 600, '1.gif'),
(2, 'Acess2000 程式設計', 600, '郭尚君', 1100, '2.gif'),
(3, 'VisualC++ 入門進階', 510, '郭尚君', 1000, '3.gif'),
(4, 'Visio5.0輕鬆學習', 200, '位元文化', 470, '4.gif'),
(5, 'PHP祕笈', 600, '董董', 600, '5.gif'),
(6, '精通VB.NET完全手冊', 850, '王小明', 750, '6.gif'),
(7, 'JavaScript大絶招', 888, '董董', 666, '7.gif');

-- --------------------------------------------------------

--
-- 資料表格式： `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `discussNo` int(11) NOT NULL,
  `replyNo` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` mediumtext NOT NULL,
  `memNo` int(10) NOT NULL,
  `issueDate` datetime NOT NULL,
  PRIMARY KEY (`replyNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 列出以下資料庫的數據： `reply`
--

INSERT INTO `reply` (`discussNo`, `replyNo`, `title`, `content`, `memNo`, `issueDate`) VALUES
(1, 1, 'Re-請大家踴躍發言', '這真是個快樂園地', 2, '2006-11-27 08:42:42'),
(1, 2, 'Re-請大家踴躍發表', '彼此鼓勵,共同分享', 1, '2008-12-01 11:16:33'),
(2, 3, 'Re-雁子的啟示', '成功不必在我', 1, '2008-12-01 11:19:22'),
(2, 4, 'Re-雁子的啟示', '盡人事聽天命', 1, '2008-12-01 11:23:48');
