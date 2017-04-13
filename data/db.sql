CREATE TABLE `menu` (
`id` int(5) NOT NULL auto_increment,
`name` varchar(255),
`label` varchar(255),
`route` varchar(255),
`action` varchar(255) NULL,
PRIMARY KEY(`id`)
) DEFAULT CHARSET=utf8;

INSERT INTO `menu` VALUES (1, 'home', 'Home', 'home', '');
INSERT INTO `menu` VALUES (2, 'hey', 'Hey', 'application', 'hey');
INSERT INTO `menu` VALUES (3, 'heydb', 'DB', 'application', 'db');