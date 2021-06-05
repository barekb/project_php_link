CREATE TABLE `user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nickname` varchar(255),
  `password` varchar(255)
);

CREATE TABLE `link` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `url` varchar(255),
  `desc` varchar(255),
  `userId` int
);

ALTER TABLE `link` ADD FOREIGN KEY (`userId`) REFERENCES `user` (`id`);
