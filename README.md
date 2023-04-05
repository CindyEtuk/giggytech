# giggytech
CREATE TABLE IF NOT EXISTS `gtech` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`email` text NOT NULL,
	`number` int(14) NOT NULL,
	`comment` varchar(234) NOT NULL,
	
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `gtech` (`id`, `name`, `email`, `number`,`comment`) VALUES
(1, 'frank', 'frank@gmail.com', 0904820928, 'i want a website');