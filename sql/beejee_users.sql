

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `admin` (`id`, `name`, `hash`) VALUES
(9, 'test_user', 'new hash'),
(15, 'admin', '$2y$10$AwQ8CplyL7VialCN8ONC3uGucfnS13RM6XWuAVLjMiWhrOQrG/sU6'),


--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

