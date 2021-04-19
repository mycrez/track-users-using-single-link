
CREATE TABLE `wadmin` (
  `id` int(255) NOT NULL,
  `device` varchar(999) NOT NULL,
  `useragent` varchar(999) NOT NULL,
  `versions` varchar(999) NOT NULL,
  `latlong` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `wadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `wadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;