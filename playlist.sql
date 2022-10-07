-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 06:49 অপরাহ্ণ
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `filelist`
--

CREATE TABLE `filelist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `playcount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filelist`
--

INSERT INTO `filelist` (`id`, `user_id`, `title`, `catagory`, `file`, `playcount`) VALUES
(1, 12, 'kon tuje ak', 'others', 'https://www.youtube.com/embed/atVof3pjT-I', 4),
(2, 12, 'kon tuje ak', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/atVof3pjT-I', 4),
(3, 12, 'roke na roke', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/ucMJu94UpTM', 2),
(4, 12, 'hamsafar', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/8v-TWxPWIWc', 10),
(5, 12, 'hello hi', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/1YBl3Zbt80A', 1),
(6, 12, 'tamma tamma', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/EEX_XM6SxmY', 0),
(7, 12, 'at last try that ', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/XLIIikOTOLM', 0),
(8, 15, 'yea khoda', 'Love / Relationship songs', 'https://www.youtube.com/embed/9BWNft9Z4qo', 0),
(9, 15, 'yea khoda', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/9BWNft9Z4qo', 0),
(10, 12, 'kon tuje', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/atVof3pjT-I', 4),
(11, 12, 'family prayer song', 'Songs about Family', 'https://www.youtube.com/embed/4-vS0Q34oH4', 4),
(15, 12, 'A thousand years', 'Songs about nature, places, animals', 'https://www.youtube.com/embed/HnImthnsU7w', 1),
(16, 12, 'Love the way you lie', 'Songs about nature, places, animals', 'https://www.youtube.com/embed/FqNc2cLFfBA', 0),
(17, 12, 'Song about Mother', 'Songs about people', 'https://www.youtube.com/embed/3V4PM1oL7Xs', 3),
(18, 12, 'Fathers Love', 'Songs about people', 'https://www.youtube.com/embed/ALrJ17qKpHg', 0),
(20, 12, 'Machine Learning Supervise Data 2nd ', 'Tutorials', 'https://www.youtube.com/embed/fd6kQQEbq2Q?list=PLzVF1nAqI9VmKRcgzZX0L0diFoApovY88', 9),
(22, 19, 'test', 'others', 'https://www.youtube.com/embed/lMJh3aAziZM', 0),
(24, 12, 'oniket prantor', 'Sad, lonely, or reflective songs', 'https://www.youtube.com/embed/6AV79jD6Mro', 0),
(28, 12, 'my heart will go on', 'Love / Relationship songs', 'https://www.youtube.com/embed/Qz3lwXEGWIM?list=RDm_uWS6K-VF8', 28),
(30, 12, 'edfdfgd', 'others', 'https://www.youtube.com/embed/HMn3Fmcmf_U\" frameborder=', 0),
(31, 12, 'Aise muje na tum dakho', 'Love / Relationship songs', 'https://www.youtube.com/embed/Rw2EbBSnhio', 33),
(32, 12, 'Salam alayka', 'others', 'https://www.youtube.com/embed/G9o2eKHHoeI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shareinfo`
--

CREATE TABLE `shareinfo` (
  `shareid` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `share_code` varchar(100) NOT NULL,
  `value` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shareinfo`
--

INSERT INTO `shareinfo` (`shareid`, `user_id`, `share_code`, `value`) VALUES
(1, 12, '5915b06572b61', 1),
(2, 3, '5915c6c64c5ff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'r', 'r', 'c4ca4238a0b923820dcc509a6f75849b', 'r@gmail.com'),
(2, 'Rabbani', 'b', 'a87ff679a2f3e71d9181a67b7542122c', 'rrwsersrsar@gmail.com'),
(3, 'ripon', 'ripon', '81dc9bdb52d04dc20036dbd8313ed055', 'ripon@gmail.com'),
(4, 'rabbay', 'rabbay', '81dc9bdb52d04dc20036dbd8313ed055', 'rabbay@gmail.com'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(8, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(9, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(10, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(11, 'r', 'r', 'b59c67bf196a4758191e42f76670ceba', 'r@gmail.com'),
(12, 'Rabbani Sarkar', 'r', 'b59c67bf196a4758191e42f76670ceba', 'r@gmail.com'),
(13, 'r', 'rr', '4b43b0aee35624cd95b910189b3dc231', 'r'),
(14, 'r', 'rrr', 'b59c67bf196a4758191e42f76670ceba', 'rr@gmail.com'),
(15, 'nafiz', 'nafiz', '9ff172c37219bb425b1fa1200c6a8645', 'nafiz@gmail.com'),
(16, 'Mou', 'MOu', '25f9e794323b453885f5181f1b624d0b', 'nurunnaharmou9@gmail.com'),
(17, 'rakib', 'rakib', 'c4ca4238a0b923820dcc509a6f75849b', 'rakib@gmail.com'),
(18, 'mou1', 'mou1', 'c20ad4d76fe97759aa27a0c99bff6710', 'mou@gmail.com'),
(19, 'sam', 'sam', 'c4ca4238a0b923820dcc509a6f75849b', 'sam@gmail.com'),
(20, 'vut', 'hello', '5d41402abc4b2a76b9719d911017c592', 'pias@pias.me');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filelist`
--
ALTER TABLE `filelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shareinfo`
--
ALTER TABLE `shareinfo`
  ADD PRIMARY KEY (`shareid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filelist`
--
ALTER TABLE `filelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `shareinfo`
--
ALTER TABLE `shareinfo`
  MODIFY `shareid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
