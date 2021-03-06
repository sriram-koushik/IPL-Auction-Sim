-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2012 at 03:04 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `playerid` int(11) NOT NULL,
  `playername` varchar(25) NOT NULL,
  `type` varchar(3) NOT NULL,
  `owner` varchar(10) NOT NULL COMMENT 'the teamname of any of the teams',
  `price` bigint(20) NOT NULL,
  `status` varchar(4) NOT NULL,
  PRIMARY KEY (`playerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerid`, `playername`, `type`, `owner`, `price`, `status`) VALUES
(0, 'Sachin Tendulkar', 'bm', 'sigma1211', 8000000, 'sold'),
(1, 'Rahul Dravid', 'bm', 'team010121', 8000000, 'sold'),
(2, 'Virendar Sehwag', 'bm', 'gamma1211', 8000000, 'sold'),
(3, 'Gautam Gambhir', 'bm', 'lambda1211', 8000000, 'sold'),
(4, 'Sourav Ganguly', 'bm', 'omega1211', 8000000, 'sold'),
(5, 'Greme Smith', 'bm', 'alpha1211', 8000000, 'sold'),
(6, 'S.Fleming', 'bm', 'foreign212', 8000000, 'sold'),
(7, 'M.Jayavardane', 'bm', 'kappa1211', 8000000, 'sold'),
(8, 'Chris Gayle', 'bm', 'gamma1211', 8000000, 'sold'),
(9, 'Mathew Hayden', 'bm', 'foreign212', 8000000, 'sold'),
(10, 'Anil Kumble', 'bw', 'omega1211', 8000000, 'sold'),
(11, 'Lasith Malinga', 'bw', 'delta1211', 8000000, 'sold'),
(12, 'Muttiah Muralidharan', 'bw', 'epsilon121', 8000000, 'sold'),
(13, 'S.Pollock', 'bw', 'kappa1211', 8000000, 'sold'),
(14, 'S.Naraine', 'bw', 'lambda1211', 8000000, 'sold'),
(15, 'Shane Warne', 'bw', 'delta1211', 8000000, 'sold'),
(16, 'Glenn McGrath', 'bw', 'foreign212', 8000000, 'sold'),
(17, 'Brett Lee', 'bw', 'omicron121', 8000000, 'sold'),
(18, 'Dale Steyn', 'bw', 'beta1211', 8000000, 'sold'),
(19, 'Shane Bond', 'bw', 'delta1211', 8000000, 'sold'),
(20, 'Yuvraj Singh', 'ar', 'beta1211', 8000000, 'sold'),
(21, 'Irfan Pathan', 'ar', 'team010121', 8000000, 'sold'),
(22, 'J.Kallis', 'ar', 'lambda1211', 8000000, 'sold'),
(23, 'K.Pollard', 'ar', 'gamma1211', 8000000, 'sold'),
(24, 'D.Vettori', 'ar', 'delta1211', 8000000, 'sold'),
(25, 'M.S.Dhoni', 'wk', 'foreign112', 8000000, 'sold'),
(26, 'A.Gilchrist', 'wk', 'foreign212', 8000000, 'sold'),
(27, 'K.Sangakkara', 'wk', 'delta1211', 8000000, 'sold'),
(28, 'M.Boucher', 'wk', '', 8000000, 'avl'),
(29, 'AB de villers', 'wk', 'beta1211', 8000000, 'sold'),
(30, 'Rohit Sharma', 'bm', 'team010121', 6500000, 'sold'),
(31, 'C.Pujara', 'bm', 'omega1211', 6500000, 'sold'),
(32, 'Suresh Raina', 'bm', 'foreign212', 6500000, 'sold'),
(33, 'Subramaniam Badrinath', 'bm', 'epsilon121', 6500000, 'sold'),
(34, 'Virat Kohli', 'bm', 'foreign112', 6500000, 'sold'),
(35, 'Manoj Tiwary', 'bm', 'alpha1211', 6500000, 'sold'),
(36, 'D.Hussey', 'bm', 'alpha1211', 6500000, 'sold'),
(37, 'Ricky Pointing', 'bm', 'foreign212', 6500000, 'sold'),
(38, 'Michael Clarke', 'bm', 'delta1211', 6500000, 'sold'),
(39, 'Michael Hussey', 'bm', 'gamma1211', 6500000, 'sold'),
(40, 'David Warner', 'bm', 'lambda1211', 6500000, 'sold'),
(41, 'Darren Bravo', 'bm', 'sigma1211', 6500000, 'sold'),
(42, 'Ross Taylor', 'bm', 'kappa1211', 6500000, 'sold'),
(43, 'Jessie Ryder', 'bm', 'sigma1211', 6500000, 'sold'),
(44, 'V.V.S.Laxman', 'bm', '', 6500000, 'avl'),
(45, 'J.P.Duminy', 'bm', 'beta1211', 6500000, 'sold'),
(46, 'Hashim Amla', 'bm', '', 6500000, 'avl'),
(47, 'H.Gibbs', 'bm', '', 6500000, 'avl'),
(48, 'Kevin Pieterson', 'bm', 'foreign112', 6500000, 'sold'),
(49, 'Younis Khan', 'bm', '', 6500000, 'avl'),
(50, 'Mohammad Yousuf', 'bm', '', 6500000, 'avl'),
(51, 'A.Cook', 'bm', '', 6500000, 'avl'),
(52, 'Andrew Strauss', 'bm', 'epsilon121', 6500000, 'sold'),
(53, 'Tilakratne Dilshan', 'bm', '', 6500000, 'avl'),
(54, 'Faf  Du Plessis', 'bm', 'omicron121', 6500000, 'sold'),
(55, 'Tim Southee', 'bw', 'lambda1211', 6500000, 'sold'),
(56, 'M.Morkel', 'bw', 'epsilon121', 6500000, 'sold'),
(57, 'M.Nitini', 'bw', '', 6500000, 'avl'),
(58, 'Greame Swan', 'bw', '', 6500000, 'avl'),
(59, 'James Anderson', 'bw', '', 6500000, 'avl'),
(60, 'Ben Hilfenhaus', 'bw', 'omicron121', 6500000, 'sold'),
(61, 'Chaminda Vaas', 'bw', 'alpha1211', 6500000, 'sold'),
(62, 'A.Mishra', 'bw', '', 6500000, 'avl'),
(63, 'A.Nehra', 'bw', '', 6500000, 'avl'),
(64, 'B.Hogg', 'bw', '', 6500000, 'avl'),
(65, 'Praveen kumar', 'bw', '', 6500000, 'avl'),
(66, 'Zaheer Khan', 'bw', 'beta1211', 6500000, 'sold'),
(67, 'Ravichandran Ashwin', 'bw', 'omicron121', 6500000, 'sold'),
(68, 'Umesh Yadav', 'bw', '', 6500000, 'avl'),
(69, 'Nuwan Kulasekara', 'bw', '', 6500000, 'avl'),
(70, 'T.Perrera', 'bw', '', 6500000, 'avl'),
(71, 'Shaun Tait', 'bw', '', 6500000, 'avl'),
(72, 'Johan Botha', 'bw', '', 6500000, 'avl'),
(73, 'Pragyan Ojha', 'bw', '', 6500000, 'avl'),
(74, 'Ishant Sharma', 'bw', '', 6500000, 'avl'),
(75, 'R.P.Singh', 'bw', '', 6500000, 'avl'),
(76, 'K.Roach', 'bw', '', 6500000, 'avl'),
(77, 'Dirk Nannes', 'bw', '', 6500000, 'avl'),
(78, 'D.Bollinger', 'bw', 'gamma1211', 6500000, 'sold'),
(79, 'L.Balaji', 'bw', '', 6500000, 'avl'),
(80, 'P.Collingwood', 'ar', '', 6500000, 'avl'),
(81, 'A.Flintoff', 'ar', '', 6500000, 'avl'),
(82, 'J.Oram', 'ar', '', 6500000, 'avl'),
(83, 'D.Bravo', 'ar', 'sigma1211', 6500000, 'sold'),
(84, 'S.Watson', 'ar', '', 6500000, 'avl'),
(85, 'B.Hodge', 'ar', '', 6500000, 'avl'),
(86, 'Ravindra Jadeja', 'ar', 'omicron121', 6500000, 'sold'),
(87, 'Anjelo Mathews', 'ar', '', 6500000, 'avl'),
(88, 'Albie Morkel', 'ar', 'beta1211', 6500000, 'sold'),
(89, 'J.Kemp', 'ar', '', 6500000, 'avl'),
(90, 'C.White', 'ar', '', 6500000, 'avl'),
(91, 'Jaques Rudolph', 'ar', '', 6500000, 'avl'),
(92, 'Abdu Razzaq', 'ar', '', 6500000, 'avl'),
(93, 'S.Styris', 'ar', '', 6500000, 'avl'),
(94, 'Andrew Symonds', 'ar', '', 6500000, 'avl'),
(95, 'Dinesh Karthik', 'wk', 'alpha1211', 6500000, 'sold'),
(96, 'Parthiv Patel', 'wk', 'gamma1211', 6500000, 'sold'),
(97, 'B.Haddin', 'wk', 'kappa1211', 6500000, 'sold'),
(98, 'P.Jayawardane', 'wk', '', 6500000, 'avl'),
(99, 'M.Wade', 'wk', 'omicron121', 6500000, 'sold'),
(100, 'A.Mukund', 'bm', '', 4000000, 'avl'),
(101, 'Saurabh Tiwary', 'bm', '', 4000000, 'avl'),
(102, 'M.Vijay', 'bm', 'team010121', 4000000, 'sold'),
(103, 'George Bailey', 'bm', 'epsilon121', 4000000, 'sold'),
(104, 'A.Rahane', 'bm', 'lambda1211', 4000000, 'sold'),
(105, 'Wassim Jaffer', 'bm', '', 4000000, 'avl'),
(106, 'P.Valthaty', 'bm', 'sigma1211', 4000000, 'sold'),
(107, 'A.Prince', 'bm', '', 4000000, 'avl'),
(108, 'Venugopal Rao', 'bm', 'gamma1211', 4000000, 'sold'),
(109, 'Ramnaresh Sarwan', 'bm', 'foreign112', 4000000, 'sold'),
(110, 'Chanderpaul', 'bm', 'team010121', 4000000, 'sold'),
(111, 'M.Van Wyk', 'bm', '', 4000000, 'avl'),
(112, 'R.Peterson', 'bm', 'foreign212', 4000000, 'sold'),
(113, 'Richard Levi', 'bm', 'omicron121', 4000000, 'sold'),
(114, 'Owais Shah', 'bm', 'alpha1211', 4000000, 'sold'),
(115, 'Ravi Bopara', 'bm', 'omega1211', 4000000, 'sold'),
(116, 'Jonathan Trott', 'bm', '', 4000000, 'avl'),
(117, 'Luke Wright', 'bm', '', 4000000, 'avl'),
(118, 'U.Akmal', 'bm', 'omega1211', 4000000, 'sold'),
(119, 'T.Samaraveera', 'bm', '', 4000000, 'avl'),
(120, 'Tamim Iqbal', 'bm', '', 4000000, 'avl'),
(121, 'Aiden Blizzard', 'bm', '', 4000000, 'avl'),
(122, 'Colin Ingram', 'bm', '', 4000000, 'avl'),
(123, 'S.Arjun', 'bm', '', 4000000, 'avl'),
(124, 'Manish Pandey', 'bm', 'alpha1211', 4000000, 'sold'),
(125, 'M.Karthik', 'bw', 'foreign112', 4000000, 'sold'),
(126, 'Iqbal Abdulla', 'bw', 'team010121', 4000000, 'sold'),
(127, 'P.Chawla', 'bw', 'team010121', 4000000, 'sold'),
(128, 'Ashok Dinda', 'bw', 'foreign112', 4000000, 'sold'),
(129, 'Rahul Sharma', 'bw', '', 4000000, 'avl'),
(130, 'N.Bracken', 'bw', '', 4000000, 'avl'),
(131, 'A.Agarkar', 'bw', 'kappa1211', 4000000, 'sold'),
(132, 'Siddarth Trivedi', 'bw', '', 4000000, 'avl'),
(133, 'Ramesh Powar', 'bw', '', 4000000, 'avl'),
(134, 'Suraj Randiv', 'bw', '', 4000000, 'avl'),
(135, 'Harbhajan Singh', 'bw', 'foreign112', 4000000, 'sold'),
(136, 'Vinay Kumar', 'bw', '', 4000000, 'avl'),
(137, 'M.Kasprowicz', 'bw', '', 4000000, 'avl'),
(138, 'Peter Siddle', 'bw', '', 4000000, 'avl'),
(139, 'Stuart Broad', 'bw', 'epsilon121', 4000000, 'sold'),
(140, 'Monty Panesar', 'bw', '', 4000000, 'avl'),
(141, 'Tim Bresnan', 'bw', '', 4000000, 'avl'),
(142, 'Ajantha Mendis', 'bw', '', 4000000, 'avl'),
(143, 'Michell Jhonson', 'bw', 'sigma1211', 4000000, 'sold'),
(144, 'Wayne Parnell', 'bw', '', 4000000, 'avl'),
(145, 'R.Theron', 'bw', '', 4000000, 'avl'),
(146, 'Van Der Merwe', 'bw', '', 4000000, 'avl'),
(147, 'Tsotsobe', 'bw', '', 4000000, 'avl'),
(148, 'Stuart Clarke', 'bw', '', 4000000, 'avl'),
(149, 'R.Harris', 'bw', '', 4000000, 'avl'),
(150, 'Marlon Samuels', 'ar', 'epsilon121', 4000000, 'sold'),
(151, 'Sahib al Hassan', 'ar', 'omicron121', 4000000, 'sold'),
(152, 'Y.Pathan', 'ar', 'kappa1211', 4000000, 'sold'),
(153, 'D.Mascharenhas', 'ar', '', 4000000, 'avl'),
(154, 'Ryan ten Doeschate', 'ar', '', 4000000, 'avl'),
(155, 'A.Nayar', 'ar', '', 4000000, 'avl'),
(156, 'R.Satish', 'ar', '', 4000000, 'avl'),
(157, 'H.Badhani', 'ar', '', 4000000, 'avl'),
(158, 'Ganapathy Vignesh', 'ar', '', 4000000, 'avl'),
(159, 'J.Hopes', 'ar', '', 4000000, 'avl'),
(160, 'B.Aprajith', 'ar', '', 4000000, 'avl'),
(161, 'S.Afridi', 'ar', 'foreign112', 4000000, 'sold'),
(162, 'Dwayne Smith', 'ar', 'kappa1211', 4000000, 'sold'),
(163, 'Vernon Philander', 'ar', 'lambda1211', 4000000, 'sold'),
(164, 'J.Ontong', 'ar', '', 4000000, 'avl'),
(165, 'Naman Ojha', 'wk', '', 4000000, 'avl'),
(166, 'W.Saha', 'wk', '', 4000000, 'avl'),
(167, 'A.Rayudu', 'wk', 'sigma1211', 4000000, 'sold'),
(168, 'R.Uthappa', 'wk', 'epsilon121', 4000000, 'sold'),
(169, 'T.Birt', 'wk', '', 4000000, 'avl'),
(170, 'Shikar Dhawan', 'bm', 'lambda1211', 2000000, 'sold'),
(171, 'C.Ferguson', 'bm', '', 2000000, 'avl'),
(172, 'E.Morgan', 'bm', 'sigma1211', 2000000, 'sold'),
(173, 'Mohammad Ashraful', 'bm', 'epsilon121', 2000000, 'sold'),
(174, 'B.Chipli', 'bm', '', 2000000, 'avl'),
(175, 'Steven Smith', 'bm', 'team010121', 2000000, 'sold'),
(176, 'Misbah ul haq', 'bm', 'delta1211', 2000000, 'sold'),
(177, 'Marcus North', 'bm', '', 2000000, 'avl'),
(178, 'Peter Forest', 'bm', '', 2000000, 'avl'),
(179, 'Loots Bosman', 'bm', '', 2000000, 'avl'),
(180, 'A.Voges', 'bm', '', 2000000, 'avl'),
(181, 'Upul Tharanga', 'bm', 'omega1211', 2000000, 'sold'),
(182, 'Phil Jaques', 'bm', '', 2000000, 'avl'),
(183, 'K.Bharathwaite', 'bm', '', 2000000, 'avl'),
(184, 'Imran Farhat', 'bm', '', 2000000, 'avl'),
(185, 'Salman Butt', 'bm', 'kappa1211', 2000000, 'sold'),
(186, 'Shoaib Malik', 'bm', 'kappa1211', 2000000, 'sold'),
(187, 'Azaiz Cheema', 'bm', '', 2000000, 'avl'),
(188, 'K.Powell', 'bm', '', 2000000, 'avl'),
(189, 'M.Lumb', 'bm', '', 2000000, 'avl'),
(190, 'G.Manou', 'bm', '', 2000000, 'avl'),
(191, 'Mick Lewia', 'bm', '', 2000000, 'avl'),
(192, 'M.Kasi', 'bm', '', 2000000, 'avl'),
(193, 'Mohammed Kaif', 'bm', '', 2000000, 'avl'),
(194, 'Elton Chigumbura', 'bm', '', 2000000, 'avl'),
(195, 'K Cooper', 'bw', '', 2000000, 'avl'),
(196, 'D.Bracewell', 'bw', '', 2000000, 'avl'),
(197, 'Abhimanyu Mithun', 'bw', '', 2000000, 'avl'),
(198, 'I.Thahir', 'bw', '', 2000000, 'avl'),
(199, 'C.Langdevrt', 'bw', 'beta1211', 2000000, 'sold'),
(200, 'Varun Aaron', 'bw', 'sigma1211', 2000000, 'sold'),
(201, 'Abu Nechim', 'bw', '', 2000000, 'avl'),
(202, 'L.R.Shukla', 'bw', '', 2000000, 'avl'),
(203, 'V.Yomahesh', 'bw', '', 2000000, 'avl'),
(204, 'S.Jakati', 'bw', 'alpha1211', 2000000, 'sold'),
(205, 'Amit Singh', 'bw', '', 2000000, 'avl'),
(206, 'Fidel Edwards', 'bw', 'kappa1211', 2000000, 'sold'),
(207, 'R.Herath', 'bw', '', 2000000, 'avl'),
(208, 'Dan Christian', 'bw', '', 2000000, 'avl'),
(209, 'M.Guptil', 'bw', '', 2000000, 'avl'),
(210, 'D.Bracewell', 'bw', '', 2000000, 'avl'),
(211, 'Merchant De Lange', 'bw', '', 2000000, 'avl'),
(212, 'V.R.V.Singh', 'bw', '', 2000000, 'avl'),
(213, 'Michell Marsh', 'bw', '', 2000000, 'avl'),
(214, 'Joginder Sharma', 'bw', '', 2000000, 'avl'),
(215, 'F.Mahroof', 'bw', '', 2000000, 'avl'),
(216, 'Xavier Doherty', 'bw', '', 2000000, 'avl'),
(217, 'Shane Harwood', 'bw', 'kappa1211', 2000000, 'sold'),
(218, 'U.Welegedara', 'bw', '', 2000000, 'avl'),
(219, 'D.Fernando', 'bw', '', 2000000, 'avl'),
(220, 'Mashrafee Mortaza', 'ar', 'sigma1211', 2000000, 'sold'),
(221, 'J.Mendis', 'ar', 'epsilon121', 2000000, 'sold'),
(222, 'J.Hastings', 'ar', '', 2000000, 'avl'),
(223, 'S.Prasanna', 'ar', '', 2000000, 'avl'),
(224, 'Ryan Mclaren', 'ar', '', 2000000, 'avl'),
(225, 'A.Noffke', 'ar', '', 2000000, 'avl'),
(226, 'S.Senanayake', 'ar', 'alpha1211', 2000000, 'sold'),
(227, 'V.Zol', 'ar', '', 2000000, 'avl'),
(228, 'D.Sammy', 'ar', 'alpha1211', 2000000, 'sold'),
(229, 'M.Henriques', 'ar', '', 2000000, 'avl'),
(230, 'Kamran Akmal', 'wk', 'lambda1211', 2000000, 'sold'),
(231, 'D.Ramdin', 'wk', '', 2000000, 'avl'),
(232, 'M.Bisla', 'wk', '', 2000000, 'avl'),
(233, 'T.Paine', 'wk', '', 2000000, 'avl'),
(234, 'A.Puttick', 'wk', '', 2000000, 'avl'),
(235, 'A.Jhunjunwalla', 'bm', 'beta1211', 1000000, 'sold'),
(236, 'Anirudha Srikant', 'bm', 'gamma1211', 1000000, 'sold'),
(237, 'Unmukt Chand', 'bm', 'omicron121', 1000000, 'sold'),
(238, 'T.Suman', 'bm', 'beta1211', 1000000, 'sold'),
(239, 'Levrock', 'bm', '', 1000000, 'avl'),
(240, 'C.Silva', 'bm', '', 1000000, 'avl'),
(241, 'Kane Williamson', 'bm', '', 1000000, 'avl'),
(242, 'Jamie How', 'bm', '', 1000000, 'avl'),
(243, 'V. Van jaarsveld', 'bm', '', 1000000, 'avl'),
(244, 'Chamara Kapugadera', 'bm', 'epsilon121', 1000000, 'sold'),
(245, 'Peter Fulton', 'bm', '', 1000000, 'avl'),
(246, 'Kirk Edwards', 'bm', '', 1000000, 'avl'),
(247, 'D.Elgar', 'bm', '', 1000000, 'avl'),
(248, 'L.Simmons', 'bm', 'foreign112', 1000000, 'sold'),
(249, 'Mahammadullah', 'bm', '', 1000000, 'avl'),
(250, 'J.Bairstow', 'bm', '', 1000000, 'avl'),
(251, 'Sayeed Russel', 'bm', '', 1000000, 'avl'),
(252, 'Rubel Hossian', 'bm', '', 1000000, 'avl'),
(253, 'Shariar Nafees', 'bm', '', 1000000, 'avl'),
(254, 'Raqibul Hasan', 'bm', '', 1000000, 'avl'),
(255, 'Imrul Kayes', 'bm', 'beta1211', 1000000, 'sold'),
(256, 'C.Kieswetter', 'bm', 'delta1211', 1000000, 'sold'),
(257, 'B.Stokes', 'bm', '', 1000000, 'avl'),
(258, 'W.Riyaz', 'bm', '', 1000000, 'avl'),
(259, 'Junaid Khan', 'bm', '', 1000000, 'avl'),
(260, 'Paul Harris', 'bw', '', 1000000, 'avl'),
(261, 'Juan Theron', 'bw', '', 1000000, 'avl'),
(262, 'J.Patel', 'bw', 'foreign112', 1000000, 'sold'),
(263, 'N.McCullum', 'bw', 'beta1211', 1000000, 'sold'),
(264, 'Manpreet Gony', 'bw', '', 1000000, 'avl'),
(265, 'Sudeep Tyagi', 'bw', 'alpha1211', 1000000, 'sold'),
(266, 'Dhawal Kulkarni', 'bw', '', 1000000, 'avl'),
(267, 'A.Salvi', 'bw', '', 1000000, 'avl'),
(268, 'Daniel Flynn', 'bw', '', 1000000, 'avl'),
(269, 'S.Eranga', 'bw', '', 1000000, 'avl'),
(270, 'Dan Cullen', 'bw', '', 1000000, 'avl'),
(271, 'S.Lakmal', 'bw', 'team010121', 1000000, 'sold'),
(272, 'N.Butler', 'bw', 'team010121', 1000000, 'sold'),
(273, 'S.Sreeshanth', 'bw', 'gamma1211', 1000000, 'sold'),
(274, 'Devendra Bishoo', 'bw', 'sigma1211', 1000000, 'sold'),
(275, 'J.Krezja', 'ar', '', 1000000, 'avl'),
(276, 'N.Hauitz', 'ar', '', 1000000, 'avl'),
(277, 'Peter Mcglashan', 'ar', '', 1000000, 'avl'),
(278, 'Thilan Thushara', 'ar', '', 1000000, 'avl'),
(279, 'Nuwan Pradeep', 'ar', 'team010121', 1000000, 'sold'),
(280, 'S. Goswami', 'wk', '', 1000000, 'avl'),
(281, 'C.Baugh', 'wk', '', 1000000, 'avl'),
(282, 'T.Taibu', 'wk', '', 1000000, 'avl'),
(283, 'L.Ronchi', 'wk', '', 1000000, 'avl'),
(284, 'D.Chandhimal', 'wk', 'team010121', 1000000, 'sold');

-- --------------------------------------------------------

--
-- Table structure for table `userdet`
--

CREATE TABLE IF NOT EXISTS `userdet` (
  `username` varchar(12) NOT NULL COMMENT 'username of each team',
  `password` varchar(6) NOT NULL COMMENT 'duh?',
  `amt` bigint(20) NOT NULL,
  `teamname` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdet`
--

INSERT INTO `userdet` (`username`, `password`, `amt`, `teamname`) VALUES
('alpha1211', 'qwerty', 1000000, 'team1'),
('beta1211', 'wertyu', 500000, 'team2'),
('delta1211', 'rtyuio', 500000, 'team3'),
('epsilon1211', 'yuiopa', 1500000, 'team4'),
('foreign11211', 'asdfgh', 7000000, 'team5'),
('foreign21211', 'sdfghj', 1000000, 'team6'),
('gamma1211', 'ertyui', 500000, 'team7'),
('kappa1211', 'opasdf', 1000000, 'team8'),
('lambda1211', 'tyuiop', 1000000, 'team9'),
('omega1211', 'uiopas', 17500000, 'team10'),
('omicron1211', 'pasdfg', 500000, 'team11'),
('sigma1211', 'iopasd', 3500000, 'team12'),
('team0101211', 'pasdfg', 5500000, 'team13'),
('team0111211', 'asdfgh', 50000000, 'team14'),
('team011211', 'qwerty', 50000000, 'team15'),
('team0121211', 'sdfghj', 50000000, 'team16'),
('team0131211', 'dfghjk', 50000000, 'team17'),
('team0141211', 'fghjkl', 50000000, 'team18'),
('team0151211', 'ghjklz', 50000000, 'team19'),
('team021211', 'wertyu', 50000000, 'team20'),
('team031211', 'ertyui', 50000000, 'team21'),
('team041211', 'rtyuio', 50000000, 'team22'),
('team051211', 'tyuiop', 50000000, 'team23'),
('team061211', 'yuiopa', 50000000, 'team24'),
('team071211', 'uiopas', 50000000, 'team25'),
('team081211', 'iopasd', 50000000, 'team26'),
('team091211', 'opasdf', 50000000, 'team27');
