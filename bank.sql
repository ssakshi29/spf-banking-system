CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Naruto', 'naruto@gmail.com', 50000),
(2, 'Itachi', 'itachi@gmail.com', 30000),
(3, 'Sasuke', 'sasuke@gmail.com', 40000),
(4, 'Sakura', 'sakura@gmail.com', 50000),
(5, 'Hinata', 'hinata@gmail.com', 40000),
(6, 'Kakashi', 'kakashi@gmail.com', 30000),
(7, 'Minato', 'minato@gmail.com', 50000),
(8, 'Jiraiya', 'jiraiya@gmail.com', 40000),
(9, 'Obito', 'obito@gmail.com', 50000),
(10,'Neji', 'neji@gmail.com', 50000);




CREATE TABLE `transaction` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
