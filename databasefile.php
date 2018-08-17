CREATE TABLE `register` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fname` varchar(20) DEFAULT NULL,
 `lname` varchar(20) DEFAULT NULL,
 `phone` int(10) DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 `password` varchar(20) DEFAULT NULL,
 `gender` varchar(1) DEFAULT NULL,
 `country` varchar(10) DEFAULT NULL,
 `skills` varchar(50) NOT NULL,
 `experience` int(10) NOT NULL,
 `Qualification` varchar(20) DEFAULT NULL,
 `filename` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8