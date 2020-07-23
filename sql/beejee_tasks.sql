

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `exercice` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Devoir` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `exercice` (`id`, `Name`, `Email`, `Devoir`) VALUES
(1, 'test', 'test@test.com', 'test job'),


ALTER TABLE `exercice`
  ADD PRIMARY KEY (`id`),
  


ALTER TABLE `exercice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;



