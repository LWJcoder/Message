create DATABASE SYL;
use SYL;


SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for messageBook
-- ----------------------------
DROP TABLE IF EXISTS `messageBook`;
CREATE TABLE `messageBook` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nickname` char(16) NOT NULL DEFAULT '',
`email` varchar(60) DEFAULT NULL,
`content` text NOT NULL,
`createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
`reply` text,
`replytime` datetime DEFAULT NULL,
`status` tinyint(1) unsigned DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;