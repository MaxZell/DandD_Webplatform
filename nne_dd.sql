-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 11:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nne_dd`
--
CREATE DATABASE IF NOT EXISTS `nne_dd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nne_dd`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gamesessions`
--

DROP TABLE IF EXISTS `tbl_gamesessions`;
CREATE TABLE IF NOT EXISTS `tbl_gamesessions` (
  `session_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `session_name` varchar(255) NOT NULL,
  `FK_gamemaster_user_ID` int(10) UNSIGNED NOT NULL,
  `session_password` varchar(255) DEFAULT NULL COMMENT 'Unencrypted. When NULL, Session is pen without password.',
  `session_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`session_ID`),
  KEY `FK_Gamemaster_Gamesession` (`FK_gamemaster_user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbl_gamesessions`:
--   `FK_gamemaster_user_ID`
--       `tbl_users` -> `user_ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` text NOT NULL,
  `user_dateRegistered` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Automatically filled out.',
  `user_lastUpdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Automatically filled out.',
  `user_session_key` varchar(255) DEFAULT NULL,
  `user_session_valid_until` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `username` (`user_name`),
  UNIQUE KEY `session_key` (`user_session_key`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbl_users`:
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_gamesessions`
--

DROP TABLE IF EXISTS `tbl_users_gamesessions`;
CREATE TABLE IF NOT EXISTS `tbl_users_gamesessions` (
  `FK_user_ID` int(10) UNSIGNED NOT NULL,
  `FK_session_ID` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`FK_user_ID`,`FK_session_ID`),
  KEY `FK_session_ID` (`FK_session_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbl_users_gamesessions`:
--   `FK_user_ID`
--       `tbl_users` -> `user_ID`
--   `FK_session_ID`
--       `tbl_gamesessions` -> `session_ID`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_gamesessions`
--
ALTER TABLE `tbl_gamesessions`
  ADD CONSTRAINT `FK_Gamemaster_Gamesession` FOREIGN KEY (`FK_gamemaster_user_ID`) REFERENCES `tbl_users` (`user_ID`);

--
-- Constraints for table `tbl_users_gamesessions`
--
ALTER TABLE `tbl_users_gamesessions`
  ADD CONSTRAINT `tbl_users_gamesessions_ibfk_1` FOREIGN KEY (`FK_user_ID`) REFERENCES `tbl_users` (`user_ID`),
  ADD CONSTRAINT `tbl_users_gamesessions_ibfk_2` FOREIGN KEY (`FK_session_ID`) REFERENCES `tbl_gamesessions` (`session_ID`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table tbl_gamesessions
--

--
-- Metadata for table tbl_users
--

--
-- Metadata for table tbl_users_gamesessions
--

--
-- Metadata for database nne_dd
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
