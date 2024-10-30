CREATE TABLE IF NOT EXISTS `wc_lawful_cookie_consent` (
  `intid` int(11) NOT NULL AUTO_INCREMENT,
  `popbg` varchar(250) NOT NULL,
  `btnbg` varchar(250) NOT NULL,
  `btntxt` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `linkpage` varchar(200) NOT NULL,
  `eumessage` text NOT NULL,
  PRIMARY KEY (`intid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




INSERT INTO `wc_lawful_cookie_consent` (`intid`, `popbg`, `btnbg`, `btntxt`, `position`, `linkpage`, `eumessage`) VALUES
(1, '#000000', '#8ec760', '#ffffff', 'bottom-left', 'https://your-domain/cookies', 'This website uses cookies to ensure you get the best experience on our website.');


