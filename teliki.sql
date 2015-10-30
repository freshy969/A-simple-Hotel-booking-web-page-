-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 18 Ιουν 2015 στις 17:36:39
-- Έκδοση διακομιστή: 5.6.24
-- Έκδοση PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `teliki`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `uid` int(11) NOT NULL,
  `hotelid` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `days` varchar(9) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `booking`
--

INSERT INTO `booking` (`uid`, `hotelid`, `roomid`, `days`, `bookid`) VALUES
(1, 2, 2, '1', 19);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `hotelid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `website` varchar(40) NOT NULL,
  `stars` double NOT NULL,
  `extras` text NOT NULL,
  `telephone` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `hotel`
--

INSERT INTO `hotel` (`hotelid`, `name`, `city`, `website`, `stars`, `extras`, `telephone`) VALUES
(1, 'Four Seasons', 'Paris', 'www.fourseasons.fr', 0, '1,059 guestrooms\r\n2 restaurants and 3 bars/lounges\r\nIndoor pool\r\nBreakfast available\r\nWiFi in the lobby\r\nHealth club\r\nSelf parking\r\nConference center\r\n24-hour front desk\r\nAir conditioning\r\nDaily housekeeping\r\nCar rentals on site', '55564516'),
(2, 'Grand Britain', 'London', 'www.grbritain.uk', 0, '1,059 guestrooms\r\n2 restaurants and 3 bars/lounges\r\nIndoor pool\r\nBreakfast available\r\nWiFi in the lobby\r\nHealth club\r\nSelf parking\r\nConference center\r\n24-hour front desk\r\nAir conditioning\r\nDaily housekeeping\r\nCar rentals on site', '12414254'),
(3, 'Ludwich', 'Berlin', 'www.ludwich.de', 0, '1,059 guestrooms\r\n2 restaurants and 3 bars/lounges\r\nIndoor pool\r\nBreakfast available\r\nWiFi in the lobby\r\nHealth club\r\nSelf parking\r\nConference center\r\n24-hour front desk\r\nAir conditioning\r\nDaily housekeeping\r\nCar rentals on site', '55565');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `offerid` int(11) NOT NULL,
  `hotelid` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `offers`
--

INSERT INTO `offers` (`offerid`, `hotelid`, `roomid`, `duration`, `price`) VALUES
(1, 2, 2, '5-7-15 10-5-15', 20);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `roomid` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `hotelid` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `available` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `rooms`
--

INSERT INTO `rooms` (`roomid`, `category`, `price`, `hotelid`, `number`, `available`, `name`) VALUES
(1, 'single bed', 15, 1, 30, '05/02', 'Four Seasons'),
(2, 'double bed', 50, 2, 30, '01/01', 'Grand Britain'),
(3, 'triple bed', 90, 1, 10, '25/06', 'Four Seasons'),
(4, 'triple bed', 90, 3, 55, '30/08', 'Ludwich');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(3) NOT NULL,
  `name` varchar(18) NOT NULL,
  `surname` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`uid`, `name`, `surname`, `email`, `sex`, `telephone`, `username`, `password`) VALUES
(1, 'john', 'georgiadis', 'skararms@hotmail.com', 'M', '2102928464', 'admin', '1234'),
(2, 'Maria', 'Palaiologou', 'origin@gmail.com', 'M', '2102928464', 'paparounas', '1234'),
(3, 'Panos', 'Katramis', 'panopap@gmail.com', 'F', '2102928464', 'Mari!', '1234');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`);

--
-- Ευρετήρια για πίνακα `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelid`);

--
-- Ευρετήρια για πίνακα `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offerid`);

--
-- Ευρετήρια για πίνακα `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomid`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT για πίνακα `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotelid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT για πίνακα `offers`
--
ALTER TABLE `offers`
  MODIFY `offerid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
