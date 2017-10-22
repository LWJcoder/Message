use SYL;
CREATE TABLE user(
  `uid` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nickname` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `createtime` INT(10) unsigned NOT NULL,
  `level` TINYINT(1) unsigned DEFAULT '0'
)ENGINE=MyISAM CHARSET=utf8 AUTO_INCREMENT=1;

---INSERT INTO user(nickname, password, createtime, level)    values( 'shiyanlou','21232f297a57a5a743894a0e4a801fc3', 1423018916, 9);