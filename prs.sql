-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2023 at 05:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(190) NOT NULL,
  `username` varchar(190) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Ahmad', 'ahmad9923', 'ahmadmiraj@gmail.com', '$2y$10$olFFnM6wrRrVSq9hFdb27ex2bsZ1T6AzgbhInwDB6uxb8TIulVzKS'),
(2, 'Ajmal', 'ahmaad923', 'ahmadiraj@gmail.com', '$2y$10$jh35FS6AK1mZ.NH4Q4ZdW.U9BrWOGv4BjFFjMysUTi52PNAwlrf6u'),
(3, 'Ajmal', 'ajmal9923', 'ajmal9923@gmail.com', '$2y$10$TnjL6EWPtAcXOyUbIRTvY.R/pLBrDIOnyPvjyXKb6BbiXkeyY3HpC'),
(6, 'Omid', 'omid9923', 'omid@gmail.com', '$2y$10$upxOQEfsXyTwibhnAwBdsOuajead41cVGgEsTmDsaf1uCbPO3VKfW'),
(12, 'Osman', 'osman023', 'osman23@gmail.com', '$2y$10$Mqovdnk23O9y86tTQmqHvuLmwPRQxrkAUjajUS3a2mYw3s.z.9Jpm'),
(15, 'Osman', 'ahmaad923932', 'omi9923d@gmail.com', '$2y$10$HSZOTmZhW0imJ0E0m23/HOhuHJCr.bi9sd9xLQ9zoGEZTpIQv3bjy'),
(16, 'Mohib', 'mohib', 'mohib@gmail.com', '$2y$10$WLUvgTd1AofDsTVD.Aw2mush3..tAeTcYum/8XRWyzaPPCc2OK1qq'),
(17, 'Akram', 'akram0229', 'akram00003@gmail.com', '$2y$10$LosdOfirRU0pfyaAc/mytO2unFNpkbskNQvzcyCu46V5uIYWIfM6C'),
(18, 'Osmdkfjksdf', 'omksdfj293923', 'omkisdjfkdj@gmail.com', '$2y$10$rQ/xZx0lMdhlC6OaD3fzheMpbWR2CFHKYBRh9qEFwENul2eXdjiFS'),
(19, 'Ladiwd', 'ladiid923', 'liadjflsd@gmail.com', '$2y$10$vadAcXSUY1Q0EVY/HQtsZ.6CLv9CUakzP8lXwmR0meqXtNHT6Pt2a'),
(20, 'Akram', 'lskdjflk923', 'kskdfjk@gmail.com', '$2y$10$cQKlrVTGDEPymEPvhBQ3PeMusuvtEdpqa429baqL/igd9CZvFeEIG'),
(21, 'ldkiwkd', 'lksdjf29329', 'klsdjf2@gmail.com', '$2y$10$frvbaWh.wfqI9LaUYl4Z0esI1RbPZP4PyZvu212xJlGA4F8x.af.S'),
(22, 'Akram', 'akram9932', 'akram923992@gmail.com', '$2y$10$i2m9.BiVoudVWS8THkIp.uHrG4//jwG0g4ngxlzlv2SAG9XU9egCW'),
(23, 'Ahmad', 'ahmad9', 'ahmad@gmail.com', '$2y$10$J3lw3/iRxKuLyUA0a8kVDuJnKHj8UT0FR8MVDu0jKlSUDHa5cVxVe'),
(24, 'Akram', 'akram002', 'akram@gmail.com', '$2y$10$ku.dSwrbOWfqRA7TsAYd7.KEAI36pBKTuKFmt/ABrYxeadT3qOHdy'),
(25, 'Nasrat', 'nasrat002', 'nasrat@gmail.com', '$2y$10$cD29WV6iCYbIKpZkw/8ku.gG9LOj4TPcCGAiq1NrM59yzIFMBKOcW'),
(26, 'Noor', 'noor002', 'noor@gmail.com', '$2y$10$S.MsjoLyUbSTsd5R24AbauIne4fPKjd.fT95pJXCZm6cekXAeTmmC'),
(27, 'Omid', 'omid0002', 'omid2022@gmail.com', '$2y$10$D2r856WdH/ezPQS6Mv7bauK48B2dfOOJF5/eNdkBMLYLwMaYnGwym'),
(28, 'Akram', 'akram0020', 'akramjan@gmail.com', '$2y$10$IkPsIo4D00TGZQstu0LKne5uosDRZ7I5kWi6NcBAGmW9YkZylwlX6'),
(29, 'Rahmat', 'rahmat023', 'rahmat@gamil.com', '$2y$10$.Rsy/j08F4ntNpKuk.KoU./XtxxBv4ff.JOttkg5BvW4bU2Ba8Sdy'),
(30, 'Osman', 'osman9923', 'osman@gmail.com', '$2y$10$Uq1ZnvCLBLP71wN2GZFyf.SOBx9wSsaeXZtpHveD.E10sZqbTELem'),
(31, 'Ahmad', 'ahmad992393', 'ahmamiraj@gmail.com', '$2y$10$WOLAWF0wZ1cqiw0K6DTaoe3kDn5bkXhIzI6/aqJ.fOnr6DJrLysLu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
