CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `period` int(2) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
