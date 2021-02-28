CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `login` varchar(25) NOT NULL,
    `password` varchar(255) NOT NULL,
    `money` int(25) NOT NULL
);


INSERT INTO `users` (`id`, `login`, `password`, `money`) VALUES
    (1,'admin','9e38e8d688743e0d07d669a1fcbcd35b',500);
