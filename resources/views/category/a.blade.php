CREATE TABLE `nbt_tps_forms` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`form` varchar(100) NOT NULL DEFAULT '',
`data` text NOT NULL,
`date` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
