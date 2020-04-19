CREATE TABLE `users` (
  `user` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `username` (`user`)
);
