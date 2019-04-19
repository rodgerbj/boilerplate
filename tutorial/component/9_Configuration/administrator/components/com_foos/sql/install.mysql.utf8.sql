CREATE TABLE IF NOT EXISTS `#__foos_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__foos_details` (`name`) VALUES
('Nina'),
('Astrid'),
('Elmar');
