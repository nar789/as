-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 17-11-26 15:07
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 7.0.0p1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `iop7720`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `no` int(11) NOT NULL,
  `pfurl` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `prob` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `as_user`
--

CREATE TABLE IF NOT EXISTS `as_user` (
  `no` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `pfimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `as_user2`
--

CREATE TABLE IF NOT EXISTS `as_user2` (
  `no` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `pfimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `as_user3`
--

CREATE TABLE IF NOT EXISTS `as_user3` (
  `no` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `pfimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `as_user4`
--

CREATE TABLE IF NOT EXISTS `as_user4` (
  `no` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `pfimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `as_user`
--
ALTER TABLE `as_user`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `as_user2`
--
ALTER TABLE `as_user2`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `as_user3`
--
ALTER TABLE `as_user3`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `as_user4`
--
ALTER TABLE `as_user4`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `ad`
--
ALTER TABLE `ad`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- 테이블의 AUTO_INCREMENT `as_user`
--
ALTER TABLE `as_user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- 테이블의 AUTO_INCREMENT `as_user2`
--
ALTER TABLE `as_user2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- 테이블의 AUTO_INCREMENT `as_user3`
--
ALTER TABLE `as_user3`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- 테이블의 AUTO_INCREMENT `as_user4`
--
ALTER TABLE `as_user4`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
