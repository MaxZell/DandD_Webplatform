-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 10:51 AM
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
  `Session_FK_gamemaster_user_ID` int(10) UNSIGNED NOT NULL,
  `session_password` varchar(255) DEFAULT NULL COMMENT 'Unencrypted. When NULL, Session is pen without password.',
  `session_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`session_ID`),
  KEY `FK_Gamemaster_Gamesession` (`Session_FK_gamemaster_user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbl_gamesessions`:
--   `Session_FK_gamemaster_user_ID`
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
  UNIQUE KEY `session_key` (`user_session_key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbl_users`:
--

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_ID`, `user_name`, `user_password`, `user_dateRegistered`, `user_lastUpdate`, `user_session_key`, `user_session_valid_until`) VALUES
(2, 'Admin1', '$2y$10$hFlXHOuzK/3BBPwiboV3g.Y4cxlWz9IW19LJ9wnK9XY/loOWUq.hS', '2020-10-02 07:12:47', '2020-10-02 07:12:47', NULL, NULL),
(3, 'admin2', '$2y$10$qYE/dlOnyQngFWFd1KarXedDC8gWAyDCY0swbMn1ZWfVl2J0AW9Li', '2020-10-02 07:15:22', '2020-10-02 07:15:22', NULL, NULL),
(4, 'admin1-1', '$2y$10$GuZMAyFqO0VXDXPtrL46D.NAOPToivBolb5hdk/Z076iVn/PWXrgC', '2020-10-02 07:19:17', '2020-10-02 07:19:17', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_gamesessions`
--
ALTER TABLE `tbl_gamesessions`
  ADD CONSTRAINT `FK_Gamemaster_Gamesession` FOREIGN KEY (`Session_FK_gamemaster_user_ID`) REFERENCES `tbl_users` (`user_ID`);


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
-- Metadata for database nne_dd
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
