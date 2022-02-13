CREATE TABLE `comments` (

  `cid` int(11) NOT NULL,

  `username` varchar(255) NOT NULL,

  `date` datetime DEFAULT NULL,

  `message` varchar(255) DEFAULT NULL

);

INSERT INTO `comments` (`cid`, `username`, `date`, `message`) VALUES

(1, 'andin', '2022-01-28 18:22:41', '    ababababab'),

(2, 'blendi', '2022-01-28 18:23:15', '    dbdbdbdbdb');


CREATE TABLE `game` (

  `nickname` varchar(255) NOT NULL,

  `score` int(11) NOT NULL

);


CREATE TABLE `users` (

  `id` int(11) NOT NULL,

  `username` varchar(255) NOT NULL,

  `email` varchar(255) NOT NULL,

  `password` varchar(255) NOT NULL

);

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'andin', 'abudakova02@gmail.com', 'b29a0f60c24b0093cd8d24bb8ee30'),

(2, 'blendi', 'blendi.dedushaj1@gmail.com', '140a6e4da3ec91c8e8b7ceb8e1d2f0');



ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`,`username`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `comments`

  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;



ALTER TABLE `users`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

