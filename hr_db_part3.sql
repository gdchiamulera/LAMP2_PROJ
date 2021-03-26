-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2021 at 01:01 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_db`
--
CREATE DATABASE IF NOT EXISTS `hr_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hr_db`;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees`
--

DROP TABLE IF EXISTS `hr_employees`;
CREATE TABLE `hr_employees` (
  `hr_id` int NOT NULL,
  `surname` varchar(50) NOT NULL,
  `givenName` varchar(50) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hireDate` date NOT NULL,
  `initialLevel` int NOT NULL,
  `isFullTime` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hr_employees`
--

INSERT INTO `hr_employees` (`hr_id`, `surname`, `givenName`, `birthDate`, `gender`, `hireDate`, `initialLevel`, `isFullTime`) VALUES
(401, 'Geddes', 'Georgianna', '1994-01-14', 'M', '2015-10-28', 2, 0),
(402, 'Pingree', 'Laine', '1996-09-05', 'M', '2007-01-03', 3, 0),
(403, 'Pekar', 'Tama', '1997-07-19', 'F', '2009-10-18', 1, 0),
(404, 'Roberie', 'Alejandro', '1999-07-09', 'M', '2014-01-20', 1, 0),
(405, 'Coby', 'Nancie', '1994-03-21', 'M', '1997-12-13', 7, 0),
(406, 'Redner', 'Gaylene', '1999-07-18', 'F', '2014-10-28', 7, 0),
(407, 'Wrona', 'Arden', '1995-05-11', 'M', '2016-11-25', 3, 0),
(408, 'Pepper', 'Bong', '2001-08-04', 'F', '2000-01-10', 4, 0),
(409, 'Noren', 'Bong', '1998-05-09', 'F', '2012-10-19', 5, 0),
(410, 'Klemp', 'Marquis', '2001-09-18', 'M', '2002-10-03', 6, 0),
(411, 'Mote', 'Larisa', '2000-12-03', 'M', '2015-08-06', 7, 0),
(412, 'Fleishman', 'Rubi', '1992-03-02', 'F', '2003-10-06', 4, 0),
(413, 'Schildgen', 'Dion', '1991-08-22', 'M', '1995-11-27', 1, 0),
(414, 'Badon', 'Maribel', '1992-11-09', 'F', '2018-09-13', 4, 0),
(415, 'Fetzer', 'Buffy', '1995-06-24', 'F', '2017-11-07', 9, 0),
(416, 'Mcnaught', 'Yuri', '1992-02-10', 'F', '2011-04-15', 1, 0),
(417, 'Byron', 'Luz', '1996-02-02', 'F', '2014-06-22', 6, 0),
(418, 'Guillemette', 'Margarete', '1999-04-25', 'M', '2017-11-24', 8, 0),
(419, 'Volkman', 'Sharie', '2001-09-20', 'F', '2008-12-18', 6, 0),
(420, 'Guillemette', 'Lloyd', '1996-03-21', 'F', '2015-11-01', 1, 0),
(421, 'Schewe', 'Elida', '1994-02-06', 'M', '2019-09-22', 7, 0),
(422, 'Fleishman', 'Sharie', '1992-06-03', 'F', '1992-03-03', 2, 0),
(423, 'Antes', 'Tyisha', '1999-10-18', 'M', '2007-06-13', 4, 0),
(424, 'Schildgen', 'Jeanice', '2000-11-24', 'M', '1998-11-16', 4, 0),
(425, 'Schildgen', 'Arden', '2001-07-28', 'M', '1991-05-03', 9, 0),
(426, 'Kazmierczak', 'Zonia', '1999-06-08', 'M', '2000-05-13', 8, 0),
(427, 'Serna', 'Nancie', '1994-06-21', 'F', '2007-06-10', 2, 0),
(428, 'Lupo', 'Margarete', '1992-02-08', 'M', '2014-12-04', 7, 0),
(429, 'Wiers', 'Johnathon', '1999-03-04', 'F', '1994-09-27', 7, 0),
(430, 'Mote', 'Raleigh', '1998-10-21', 'F', '2012-08-11', 9, 0),
(431, 'Pepper', 'Tama', '1996-10-10', 'M', '2005-07-20', 9, 0),
(432, 'Pecora', 'Lloyd', '2001-07-27', 'M', '1997-11-09', 8, 0),
(433, 'Volkman', 'Diego', '1997-09-19', 'F', '1994-01-06', 8, 0),
(434, 'Lupo', 'Elida', '1998-09-13', 'M', '2010-10-03', 3, 0),
(435, 'Motsinger', 'Raleigh', '1990-03-29', 'M', '2016-10-30', 4, 0),
(436, 'Schroeder', 'Augustine', '1998-04-06', 'M', '2014-09-17', 2, 0),
(437, 'Schroeder', 'Margarete', '1997-10-20', 'M', '2005-04-08', 9, 0),
(438, 'Byron', 'Camellia', '1998-11-04', 'F', '2009-08-05', 9, 0),
(439, 'Pekar', 'Sharie', '2001-06-04', 'F', '2014-10-06', 1, 0),
(440, 'Pekar', 'Rubi', '1994-07-22', 'F', '2002-03-04', 4, 0),
(441, 'Mcnaught', 'Becki', '1991-03-11', 'M', '2003-07-08', 4, 0),
(442, 'Schildgen', 'Rubi', '2000-05-11', 'F', '1991-09-25', 9, 0),
(443, 'Culton', 'Becki', '1990-11-02', 'M', '2016-11-01', 2, 0),
(444, 'Drews', 'Yuri', '1991-08-16', 'F', '1990-08-03', 7, 0),
(445, 'Pepper', 'Alejandro', '1992-05-15', 'M', '1999-12-13', 6, 0),
(446, 'Michaud', 'Qiana', '1999-02-12', 'M', '1993-08-06', 4, 0),
(447, 'Fleishman', 'Margherita', '1997-07-08', 'F', '2004-05-15', 1, 0),
(448, 'Mote', 'Margarett', '2001-06-15', 'M', '2019-09-21', 3, 0),
(449, 'Mongold', 'Lyndia', '1990-01-15', 'M', '1998-04-17', 4, 0),
(450, 'Badon', 'Becki', '1990-01-02', 'F', '1993-12-20', 7, 0),
(451, 'Buresh', 'Rubi', '1991-04-24', 'M', '2019-11-26', 4, 0),
(452, 'Drews', 'Thommy', '1997-10-30', 'F', '2017-09-11', 6, 0),
(453, 'Pekar', 'Johnathon', '1993-12-13', 'F', '2007-08-18', 1, 0),
(454, 'Roberie', 'Tama', '1991-08-22', 'M', '2017-05-01', 3, 0),
(455, 'Wiers', 'Anthony', '2000-06-26', 'M', '2004-11-11', 7, 0),
(456, 'Buresh', 'Georgianna', '1994-02-07', 'M', '2019-01-17', 1, 0),
(457, 'Latson', 'Johnathon', '1990-01-10', 'M', '2015-08-30', 9, 0),
(458, 'Motsinger', 'Marquis', '1996-01-17', 'F', '2006-01-02', 8, 0),
(459, 'Guillemette', 'Zonia', '1994-02-08', 'M', '2011-07-28', 3, 0),
(460, 'Kazmierczak', 'Zonia', '1995-07-29', 'M', '2005-01-05', 6, 0),
(461, 'Motsinger', 'Laine', '1991-01-03', 'M', '1991-10-23', 4, 0),
(462, 'Kazmierczak', 'Camellia', '1999-12-18', 'F', '2000-12-09', 7, 0),
(463, 'Grisby', 'Christeen', '1998-11-13', 'M', '2015-12-31', 7, 0),
(464, 'Redner', 'Buffy', '1990-12-08', 'F', '2004-04-05', 8, 0),
(465, 'Serna', 'Jeanice', '1991-08-31', 'M', '1999-06-28', 2, 0),
(466, 'Paris', 'Laine', '1997-03-10', 'M', '1999-12-30', 8, 0),
(467, 'Volkman', 'Laine', '1999-09-13', 'F', '1992-06-18', 8, 0),
(468, 'Mongold', 'Erasmo', '2000-12-22', 'M', '1992-08-10', 1, 0),
(469, 'Mote', 'Christeen', '1993-06-11', 'M', '2014-05-13', 8, 0),
(470, 'Lupo', 'Raleigh', '1993-10-27', 'F', '2002-09-27', 8, 0),
(471, 'Catt', 'Lawanda', '1997-08-23', 'M', '2000-08-14', 5, 0),
(472, 'Wrona', 'Gaylene', '1997-06-02', 'M', '2018-10-03', 8, 0),
(473, 'Schewe', 'Qiana', '2000-11-05', 'F', '2015-02-20', 4, 0),
(474, 'Kucera', 'Margarete', '1999-03-24', 'F', '1990-08-17', 8, 0),
(475, 'Stoval', 'Margherita', '1999-08-13', 'M', '2000-07-15', 5, 0),
(476, 'Pepper', 'Dion', '1996-09-13', 'M', '2019-03-25', 4, 0),
(477, 'Kucera', 'Lyndia', '1998-10-08', 'F', '2012-09-02', 7, 0),
(478, 'Wiers', 'Nancie', '1995-04-24', 'F', '1991-12-29', 2, 0),
(479, 'Mayoral', 'Joan', '1995-01-09', 'M', '2020-03-22', 4, 0),
(480, 'Guillemette', 'Qiana', '2001-08-06', 'F', '1990-09-10', 3, 0),
(481, 'Buresh', 'Bong', '1992-05-13', 'M', '1995-02-15', 9, 0),
(482, 'Buresh', 'Margarett', '1990-06-07', 'F', '2011-08-22', 8, 0),
(483, 'Pecora', 'Qiana', '1999-08-13', 'M', '2000-07-14', 2, 0),
(484, 'Michaud', 'Maribel', '2001-08-08', 'M', '1991-08-13', 6, 0),
(485, 'Latson', 'Diego', '1991-07-29', 'F', '1992-06-10', 6, 0),
(486, 'Serna', 'Bong', '1993-07-28', 'M', '1999-06-15', 1, 0),
(487, 'Mongold', 'Tyisha', '2000-01-30', 'M', '2006-11-01', 8, 0),
(488, 'Mote', 'Alejandro', '1991-11-09', 'F', '1991-04-25', 2, 0),
(489, 'Wiers', 'Margarett', '2001-03-08', 'F', '1993-09-09', 4, 0),
(490, 'Kazmierczak', 'Bong', '1994-04-18', 'M', '2006-02-09', 7, 0),
(491, 'Wrona', 'Lyndia', '2000-08-24', 'M', '1991-06-22', 9, 0),
(492, 'Badon', 'Anthony', '1990-06-14', 'F', '1994-07-14', 7, 0),
(493, 'Menjivar', 'Anthony', '1990-05-02', 'M', '2020-03-12', 6, 0),
(494, 'Catt', 'Blythe', '1991-04-24', 'M', '2006-07-10', 7, 0),
(495, 'Pekar', 'Nancie', '1998-09-19', 'F', '2005-10-30', 4, 0),
(496, 'Mote', 'Raleigh', '1993-10-29', 'F', '2006-03-11', 2, 0),
(497, 'Byron', 'Christeen', '1993-11-06', 'M', '2004-10-28', 2, 0),
(498, 'Block', 'Rebecka', '1996-09-20', 'F', '1999-07-26', 8, 0),
(499, 'Guillemette', 'Arden', '1991-01-27', 'M', '2005-11-28', 5, 0),
(500, 'Serna', 'Buffy', '1994-09-24', 'F', '1992-12-05', 4, 0),
(501, 'Howe', 'Stephania', '1994-03-05', 'M', '2018-04-12', 6, 0),
(502, 'Lupo', 'Clora', '2000-06-15', 'F', '2009-11-08', 4, 0),
(503, 'Wrona', 'Joan', '1998-07-14', 'M', '2005-03-08', 6, 0),
(504, 'Grisby', 'Margarete', '1996-11-09', 'M', '2004-11-05', 2, 0),
(505, 'Noren', 'Randy', '1998-02-04', 'M', '2019-09-22', 5, 0),
(506, 'Antes', 'Tama', '1996-06-15', 'F', '1996-12-22', 2, 0),
(507, 'Klemp', 'Lawanda', '1993-01-29', 'M', '2018-09-08', 7, 0),
(508, 'Antes', 'Nancie', '1998-07-02', 'F', '2007-08-01', 8, 0),
(509, 'Pekar', 'Johnathon', '2001-01-21', 'F', '2009-02-11', 4, 0),
(510, 'Mcnaught', 'Lloyd', '1998-12-06', 'M', '2007-03-13', 7, 0),
(511, 'Culton', 'Erasmo', '1997-04-13', 'F', '2008-11-18', 8, 0),
(512, 'Ramage', 'Dion', '1991-12-31', 'F', '2014-03-29', 9, 0),
(513, 'Michaud', 'Michele', '1998-03-18', 'M', '2010-05-30', 7, 0),
(514, 'Redner', 'Augustine', '1995-09-07', 'M', '1995-07-24', 6, 0),
(515, 'Lupo', 'Joan', '1992-10-07', 'M', '1993-07-28', 1, 0),
(516, 'Menjivar', 'Raleigh', '2001-03-28', 'M', '2004-05-23', 9, 0),
(517, 'Guillemette', 'Thommy', '2000-08-17', 'M', '1995-05-03', 7, 0),
(518, 'Serna', 'Maribel', '1996-03-02', 'M', '1998-03-01', 3, 0),
(519, 'Byron', 'Dion', '1991-09-04', 'M', '2019-08-05', 5, 0),
(520, 'Stoval', 'Elida', '1991-08-07', 'M', '2020-08-20', 2, 0),
(521, 'Mongold', 'Samatha', '1999-01-12', 'F', '1990-05-20', 8, 0),
(522, 'Badon', 'Luz', '1996-01-28', 'M', '2018-03-02', 2, 0),
(523, 'Wrona', 'Margarett', '1998-09-25', 'F', '2008-05-22', 6, 0),
(524, 'Wiers', 'Lloyd', '2001-12-24', 'M', '2018-12-09', 9, 0),
(525, 'Pekar', 'Margarete', '1995-10-10', 'F', '2002-07-20', 6, 0),
(526, 'Michaud', 'Arden', '1997-12-09', 'M', '1990-12-04', 3, 0),
(527, 'Klemp', 'Camellia', '1992-10-15', 'F', '2021-01-25', 3, 0),
(528, 'Serna', 'Yuri', '2000-08-24', 'M', '2014-04-21', 1, 0),
(529, 'Drews', 'Bong', '1999-05-29', 'F', '1995-03-01', 7, 0),
(530, 'Damron', 'Yuri', '1997-06-27', 'M', '2012-04-30', 3, 0),
(531, 'Lanz', 'Qiana', '1992-10-29', 'M', '2019-06-02', 3, 0),
(532, 'Wiers', 'Michele', '1994-12-14', 'M', '2007-04-01', 4, 0),
(533, 'Kazmierczak', 'Diego', '1990-03-04', 'F', '2004-08-19', 4, 0),
(534, 'Mongold', 'Stephania', '1990-09-10', 'M', '2018-12-26', 8, 0),
(535, 'Klemp', 'Joan', '1993-03-29', 'F', '1999-10-08', 7, 0),
(536, 'Wrona', 'Elroy', '1994-05-04', 'F', '2016-05-29', 5, 0),
(537, 'Buresh', 'Marquis', '1998-02-24', 'M', '1990-02-25', 3, 0),
(538, 'Paris', 'Margarett', '1994-12-19', 'F', '1999-04-29', 4, 0),
(539, 'Latson', 'Tyisha', '1995-02-25', 'F', '2003-12-10', 2, 0),
(540, 'Schildgen', 'Christeen', '1994-07-26', 'F', '1997-08-07', 6, 0),
(541, 'Michaud', 'Samatha', '1999-09-20', 'M', '2017-02-06', 5, 0),
(542, 'Fetzer', 'Stephania', '2000-01-07', 'M', '2019-09-19', 3, 0),
(543, 'Geddes', 'Rebecka', '1992-03-11', 'M', '2009-04-23', 2, 0),
(544, 'Motsinger', 'Leigha', '2001-07-05', 'M', '1999-03-04', 2, 0),
(545, 'Roberie', 'Sharie', '1993-08-28', 'M', '2018-03-08', 4, 0),
(546, 'Roberie', 'Tama', '1992-04-23', 'F', '2010-08-17', 1, 0),
(547, 'Kucera', 'Tama', '2000-07-25', 'F', '2002-04-16', 5, 0),
(548, 'Schroeder', 'Gaylene', '1996-12-26', 'M', '1996-12-09', 8, 0),
(549, 'Buresh', 'Clora', '1991-10-17', 'M', '1998-08-16', 8, 0),
(550, 'Geddes', 'Erasmo', '1995-09-13', 'F', '2004-01-12', 1, 0),
(551, 'Schewe', 'Jeanice', '1996-02-15', 'F', '1993-08-20', 7, 0),
(552, 'Catt', 'Alejandro', '1997-01-29', 'M', '2005-02-03', 1, 0),
(553, 'Stoval', 'Georgianna', '1995-08-20', 'M', '2011-06-14', 3, 0),
(554, 'Stoval', 'Stephania', '1999-03-05', 'M', '2010-04-04', 2, 0),
(555, 'Menjivar', 'Margarett', '1998-01-29', 'M', '2012-04-12', 6, 0),
(556, 'Block', 'Zonia', '1990-02-02', 'M', '2015-08-27', 1, 0),
(557, 'Schildgen', 'Tami', '1998-12-19', 'M', '1995-03-18', 6, 0),
(558, 'Motsinger', 'Marquis', '1992-03-12', 'M', '1991-07-17', 7, 0),
(559, 'Buresh', 'Arden', '1992-03-21', 'M', '1999-07-27', 6, 0),
(560, 'Klemp', 'Tami', '1999-09-26', 'F', '1991-01-09', 6, 0),
(561, 'Ramage', 'Dion', '1997-03-16', 'M', '2008-07-20', 1, 0),
(562, 'Mcnaught', 'Samatha', '1994-05-12', 'F', '2016-04-05', 4, 0),
(563, 'Howe', 'Christeen', '1997-06-19', 'M', '1994-09-25', 4, 0),
(564, 'Byron', 'Becki', '1993-01-02', 'M', '2011-11-22', 6, 0),
(565, 'Fleishman', 'Margarete', '1997-11-23', 'M', '1993-11-23', 8, 0),
(566, 'Howe', 'Johnathon', '1992-06-29', 'F', '1999-12-21', 1, 0),
(567, 'Block', 'Rebecka', '1996-10-22', 'F', '2000-12-28', 5, 0),
(568, 'Stoval', 'Marquis', '1998-09-19', 'M', '1990-11-07', 2, 0),
(569, 'Ramage', 'Clora', '1990-03-19', 'F', '1997-02-25', 7, 0),
(570, 'Mischke', 'Diego', '1994-06-12', 'M', '2015-08-26', 2, 0),
(571, 'Buresh', 'Dion', '2000-03-02', 'M', '2000-07-10', 9, 0),
(572, 'Roberie', 'Stephania', '1992-10-27', 'F', '1993-07-24', 1, 0),
(573, 'Fetzer', 'Margherita', '1993-05-11', 'F', '2000-03-14', 7, 0),
(574, 'Klemp', 'Samatha', '1990-01-06', 'M', '2002-05-05', 5, 0),
(575, 'Lanz', 'Buffy', '2000-03-18', 'F', '2010-05-01', 5, 0),
(576, 'Lupo', 'Joan', '1993-04-30', 'M', '2018-06-13', 9, 0),
(577, 'Fleishman', 'Clora', '1997-12-18', 'F', '2004-12-24', 5, 0),
(578, 'Klemp', 'Nancie', '1990-09-19', 'F', '2016-06-01', 5, 0),
(579, 'Fleishman', 'Tyisha', '1993-05-19', 'M', '1999-08-19', 5, 0),
(580, 'Schildgen', 'Georgianna', '1999-10-04', 'M', '2011-09-26', 3, 0),
(581, 'Wrona', 'Rubi', '1997-07-02', 'F', '2006-05-12', 6, 0),
(582, 'Schroeder', 'Dion', '2000-03-18', 'F', '1997-11-20', 7, 0),
(583, 'Mote', 'Rubi', '1994-06-01', 'F', '1999-04-16', 6, 0),
(584, 'Wiers', 'Joan', '1991-12-31', 'M', '2003-11-30', 5, 0),
(585, 'Motsinger', 'Leigha', '2001-10-31', 'F', '2005-03-27', 5, 0),
(586, 'Volkman', 'Anthony', '1995-12-12', 'M', '2006-05-01', 8, 0),
(587, 'Mayoral', 'Becki', '1992-10-24', 'F', '2002-04-05', 6, 0),
(588, 'Schewe', 'Rebecka', '1994-02-25', 'M', '1991-05-31', 6, 0),
(589, 'Menjivar', 'Laine', '1992-06-19', 'F', '2006-02-22', 2, 0),
(590, 'Buresh', 'Nancie', '1992-08-03', 'F', '2016-09-13', 7, 0),
(591, 'Grisby', 'Becki', '1997-11-18', 'F', '2015-02-03', 4, 0),
(592, 'Paris', 'Clora', '1995-08-05', 'M', '1998-03-03', 6, 0),
(593, 'Volkman', 'Bong', '1992-08-20', 'F', '1999-07-28', 5, 0),
(594, 'Mcnaught', 'Thomas', '1998-04-29', 'F', '2018-08-20', 9, 0),
(595, 'Wrona', 'Randy', '1998-07-28', 'M', '2006-07-28', 9, 0),
(596, 'Grisby', 'Tyisha', '2001-03-21', 'M', '2005-02-28', 1, 0),
(597, 'Buresh', 'Maribel', '1990-12-14', 'F', '2008-12-08', 5, 0),
(598, 'Michaud', 'Thomas', '1991-06-11', 'M', '2020-11-12', 4, 0),
(599, 'Motsinger', 'Blythe', '2001-05-25', 'F', '2017-01-01', 1, 0),
(600, 'Damron', 'Stephania', '2000-09-06', 'F', '2017-08-14', 3, 0),
(601, 'Lanz', 'Arden', '1992-12-17', 'F', '1994-09-06', 5, 0),
(602, 'Stoval', 'Christeen', '1993-10-08', 'M', '2010-06-06', 9, 0),
(603, 'Grumbles', 'Margarett', '2001-10-18', 'M', '2017-10-24', 9, 0),
(604, 'Schroeder', 'Becki', '2001-01-08', 'F', '2001-01-22', 5, 0),
(605, 'Grumbles', 'Margherita', '1996-09-07', 'F', '1996-12-13', 2, 0),
(606, 'Grisby', 'Tyisha', '1999-04-08', 'F', '2010-12-07', 9, 0),
(607, 'Fleishman', 'Camellia', '2001-05-31', 'F', '2002-02-16', 8, 0),
(608, 'Guillemette', 'Johnathon', '1992-05-12', 'M', '1992-09-18', 7, 0),
(609, 'Kucera', 'Georgianna', '1994-04-11', 'M', '2020-06-12', 8, 0),
(610, 'Catt', 'Clora', '2001-04-12', 'F', '2004-04-27', 7, 0),
(611, 'Schewe', 'Camellia', '1992-06-06', 'F', '2005-03-30', 9, 0),
(612, 'Mischke', 'Tami', '1994-12-09', 'F', '2019-12-26', 9, 0),
(613, 'Badon', 'Marquis', '1991-11-15', 'M', '2011-12-16', 8, 0),
(614, 'Lanz', 'Samatha', '1994-06-25', 'F', '2002-01-01', 5, 0),
(615, 'Ramage', 'Rubi', '1998-04-14', 'F', '2011-08-07', 3, 0),
(616, 'Guillemette', 'Lloyd', '1991-08-07', 'M', '1990-08-15', 6, 0),
(617, 'Redner', 'Erasmo', '1995-07-31', 'M', '1999-04-23', 8, 0),
(618, 'Mischke', 'Margherita', '1995-10-16', 'M', '2002-06-08', 6, 0),
(619, 'Kazmierczak', 'Luz', '1998-03-11', 'F', '1990-11-27', 6, 0),
(620, 'Noren', 'Thommy', '1996-02-05', 'M', '2005-04-05', 2, 0),
(621, 'Volkman', 'Christeen', '1996-11-09', 'M', '1996-01-09', 5, 0),
(622, 'Menjivar', 'Sharie', '1997-06-18', 'M', '2017-05-24', 9, 0),
(623, 'Catt', 'Arden', '1995-04-09', 'F', '2019-10-21', 7, 0),
(624, 'Grisby', 'Clora', '2000-11-06', 'M', '2017-04-17', 7, 0),
(625, 'Menjivar', 'Arden', '1997-01-27', 'M', '1995-03-22', 2, 0),
(626, 'Mote', 'Stephania', '1999-08-11', 'F', '2008-09-17', 9, 0),
(627, 'Lanz', 'Dion', '1993-10-27', 'F', '2019-09-28', 8, 0),
(628, 'Klemp', 'Lyndia', '1999-05-31', 'F', '1997-06-24', 4, 0),
(629, 'Michaud', 'Yuri', '1995-08-06', 'F', '2003-04-24', 4, 0),
(630, 'Paris', 'Blythe', '1998-02-03', 'M', '2019-07-14', 3, 0),
(631, 'Kazmierczak', 'Alejandro', '1990-02-19', 'F', '2009-02-02', 8, 0),
(632, 'Catt', 'Yuri', '1999-06-16', 'M', '1998-07-15', 2, 0),
(633, 'Schewe', 'Marquis', '1995-05-10', 'M', '2015-01-15', 2, 0),
(634, 'Guillemette', 'Buffy', '2000-02-19', 'F', '2011-09-17', 3, 0),
(635, 'Wiers', 'Diego', '1997-10-22', 'F', '1993-08-01', 9, 0),
(636, 'Center', 'Samatha', '1996-10-04', 'M', '1997-07-30', 1, 0),
(637, 'Coby', 'Thommy', '1997-04-08', 'M', '2009-10-29', 1, 0),
(638, 'Center', 'Gaylene', '1995-09-27', 'F', '2003-08-29', 8, 0),
(639, 'Stoval', 'Joan', '1994-06-14', 'M', '2019-05-28', 2, 0),
(640, 'Catt', 'Elroy', '1991-02-01', 'F', '2018-10-03', 5, 0),
(641, 'Pecora', 'Yuri', '1995-06-30', 'F', '2005-12-14', 8, 0),
(642, 'Grisby', 'Sharie', '1994-11-25', 'M', '2004-11-11', 2, 0),
(643, 'Geddes', 'Elida', '1995-05-08', 'M', '1992-07-28', 7, 0),
(644, 'Pecora', 'Tama', '1999-04-23', 'F', '1994-05-17', 7, 0),
(645, 'Center', 'Yuri', '1995-11-13', 'M', '2011-11-13', 5, 0),
(646, 'Motsinger', 'Laine', '1992-07-07', 'M', '1995-08-28', 2, 0),
(647, 'Pekar', 'Samatha', '1990-10-14', 'F', '1995-07-11', 4, 0),
(648, 'Mote', 'Georgianna', '1991-03-22', 'M', '1999-01-14', 1, 0),
(649, 'Serna', 'Dion', '1992-04-11', 'F', '1997-01-06', 2, 0),
(650, 'Schroeder', 'Diego', '1998-09-15', 'M', '2016-06-16', 6, 0),
(651, 'Pingree', 'Dion', '2002-01-08', 'F', '2006-10-26', 6, 0),
(652, 'Stoval', 'Qiana', '1993-10-28', 'F', '1992-07-05', 6, 0),
(653, 'Kazmierczak', 'Yuri', '1995-12-06', 'M', '2004-05-08', 8, 0),
(654, 'Schewe', 'Nancie', '1995-01-14', 'M', '2020-07-30', 1, 0),
(655, 'Block', 'Christeen', '1996-07-15', 'F', '2011-01-30', 8, 0),
(656, 'Volkman', 'Thomas', '1990-02-11', 'M', '2009-04-03', 1, 0),
(657, 'Mongold', 'Augustine', '1997-08-26', 'M', '1995-06-04', 8, 0),
(658, 'Geddes', 'Lawanda', '1990-09-13', 'F', '1992-04-01', 6, 0),
(659, 'Kazmierczak', 'Camellia', '2001-03-30', 'M', '2008-07-14', 2, 0),
(660, 'Schildgen', 'Alejandro', '1993-10-11', 'M', '1999-05-20', 3, 0),
(661, 'Catt', 'Camellia', '1996-01-12', 'M', '1994-09-08', 2, 0),
(662, 'Grumbles', 'Michele', '2000-08-02', 'M', '2005-11-12', 6, 0),
(663, 'Drews', 'Thomas', '1990-07-17', 'M', '1996-12-08', 4, 0),
(664, 'Kucera', 'Diego', '2001-05-31', 'M', '2007-03-31', 7, 0),
(665, 'Buresh', 'Qiana', '1996-11-02', 'M', '1992-09-12', 1, 0),
(666, 'Redner', 'Diego', '1999-02-03', 'F', '1993-09-13', 4, 0),
(667, 'Redner', 'Erasmo', '1992-07-19', 'M', '2020-10-04', 7, 0),
(668, 'Mongold', 'Elroy', '1993-03-14', 'F', '2006-08-20', 2, 0),
(669, 'Ramage', 'Thommy', '1994-01-08', 'M', '1993-02-02', 9, 0),
(670, 'Grisby', 'Bong', '1993-10-02', 'M', '2012-07-13', 1, 0),
(671, 'Mcnaught', 'Diego', '1991-03-20', 'F', '1994-11-26', 2, 0),
(672, 'Schroeder', 'Samatha', '1997-07-03', 'F', '2013-03-23', 4, 0),
(673, 'Block', 'Yuri', '1993-12-23', 'F', '1997-04-17', 2, 0),
(674, 'Antes', 'Elida', '1998-01-01', 'M', '1992-09-28', 7, 0),
(675, 'Pekar', 'Blythe', '1994-07-10', 'F', '1995-03-15', 9, 0),
(676, 'Howe', 'Tama', '2000-11-01', 'F', '1999-04-25', 7, 0),
(677, 'Lupo', 'Elida', '2000-07-28', 'F', '2008-02-10', 9, 0),
(678, 'Block', 'Sharie', '1999-01-18', 'M', '2012-05-05', 6, 0),
(679, 'Culton', 'Gaylene', '1998-06-14', 'M', '2013-06-13', 1, 0),
(680, 'Volkman', 'Qiana', '2001-03-09', 'M', '2004-05-28', 8, 0),
(681, 'Noren', 'Elroy', '1999-11-10', 'M', '2009-12-14', 8, 0),
(682, 'Pingree', 'Raleigh', '1999-01-06', 'F', '2016-07-13', 2, 0),
(683, 'Howe', 'Erasmo', '1990-11-19', 'F', '2010-05-05', 9, 0),
(684, 'Antes', 'Marquis', '1991-07-20', 'F', '1990-08-06', 1, 0),
(685, 'Kazmierczak', 'Tyisha', '1998-11-25', 'M', '1990-09-14', 5, 0),
(686, 'Redner', 'Arden', '1996-04-27', 'M', '2001-03-27', 9, 0),
(687, 'Pepper', 'Larisa', '2001-05-28', 'M', '2018-10-01', 5, 0),
(688, 'Mote', 'Yuri', '1999-02-07', 'F', '1997-05-07', 2, 0),
(689, 'Pingree', 'Arden', '2001-04-16', 'M', '2008-11-11', 4, 0),
(690, 'Schildgen', 'Georgianna', '1999-06-25', 'F', '2011-06-17', 3, 0),
(691, 'Mischke', 'Camellia', '1995-05-17', 'M', '1997-02-14', 3, 0),
(692, 'Pecora', 'Diego', '2000-07-09', 'F', '2005-09-14', 4, 0),
(693, 'Drews', 'Samatha', '1996-10-10', 'F', '1994-09-21', 9, 0),
(694, 'Guillemette', 'Nancie', '1998-06-09', 'M', '2005-12-03', 8, 0),
(695, 'Pingree', 'Lawanda', '1990-08-28', 'M', '1997-03-29', 3, 0),
(696, 'Motsinger', 'Blythe', '1998-10-01', 'M', '2012-12-02', 8, 0),
(697, 'Schroeder', 'Elroy', '1996-06-16', 'M', '2011-01-23', 6, 0),
(698, 'Byron', 'Johnathon', '1992-06-10', 'F', '1992-10-02', 4, 0),
(699, 'Stoval', 'Erasmo', '1998-04-22', 'F', '1998-03-28', 1, 0),
(700, 'Fleishman', 'Clora', '1990-06-11', 'F', '2020-06-01', 2, 0),
(701, 'Catt', 'Leigha', '2001-06-13', 'M', '1990-01-31', 4, 0),
(702, 'Latson', 'Jeanice', '1994-09-29', 'F', '2007-07-02', 1, 0),
(703, 'Grisby', 'Alejandro', '1995-09-23', 'M', '2008-08-06', 1, 0),
(704, 'Pekar', 'Joan', '1996-08-31', 'F', '2005-05-22', 3, 0),
(705, 'Grumbles', 'Camellia', '1993-10-21', 'F', '1993-11-04', 6, 0),
(706, 'Guillemette', 'Alejandro', '1990-10-03', 'F', '2011-03-25', 8, 0),
(707, 'Antes', 'Margarete', '1998-11-22', 'F', '1990-07-06', 2, 0),
(708, 'Damron', 'Randy', '1994-11-28', 'M', '2012-02-07', 6, 0),
(709, 'Pepper', 'Anthony', '1993-06-14', 'M', '2000-11-11', 7, 0),
(710, 'Catt', 'Samatha', '2000-09-24', 'F', '1997-01-14', 5, 0),
(711, 'Wiers', 'Elida', '1992-02-08', 'M', '1994-12-21', 4, 0),
(712, 'Grumbles', 'Erasmo', '2001-11-18', 'M', '1993-07-24', 4, 0),
(713, 'Stoval', 'Elroy', '2001-04-12', 'M', '2016-08-06', 9, 0),
(714, 'Redner', 'Joan', '1991-08-30', 'M', '1995-12-09', 2, 0),
(715, 'Pekar', 'Christeen', '1998-05-25', 'M', '2011-01-16', 6, 0),
(716, 'Antes', 'Dion', '1992-05-22', 'F', '1990-11-26', 4, 0),
(717, 'Paris', 'Joan', '1994-02-02', 'M', '2010-08-07', 1, 0),
(718, 'Drews', 'Thomas', '1995-08-02', 'F', '2013-04-27', 1, 0),
(719, 'Drews', 'Rubi', '2001-04-20', 'M', '2016-12-26', 9, 0),
(720, 'Badon', 'Raleigh', '1995-12-25', 'M', '2006-11-09', 8, 0),
(721, 'Kazmierczak', 'Augustine', '1998-11-10', 'F', '2015-08-13', 3, 0),
(722, 'Wiers', 'Thomas', '1999-02-04', 'F', '1997-08-07', 3, 0),
(723, 'Catt', 'Joan', '1990-09-15', 'F', '2006-07-08', 8, 0),
(724, 'Culton', 'Larisa', '1993-05-13', 'F', '2016-04-28', 8, 0),
(725, 'Pingree', 'Margarete', '1994-06-22', 'F', '2012-01-13', 6, 0),
(726, 'Byron', 'Tami', '1995-07-18', 'F', '2002-01-07', 8, 0),
(727, 'Kazmierczak', 'Joan', '1992-02-26', 'M', '2005-05-16', 4, 0),
(728, 'Stoval', 'Raleigh', '1991-06-17', 'M', '2011-02-01', 6, 0),
(729, 'Mote', 'Blythe', '1990-01-02', 'F', '2001-11-07', 3, 0),
(730, 'Menjivar', 'Qiana', '1996-06-04', 'M', '1990-02-10', 1, 0),
(731, 'Block', 'Michele', '1993-01-02', 'M', '1995-08-23', 7, 0),
(732, 'Motsinger', 'Raleigh', '1996-05-19', 'F', '1991-12-15', 9, 0),
(733, 'Drews', 'Georgianna', '1996-09-21', 'M', '1996-08-01', 7, 0),
(734, 'Drews', 'Margarete', '2001-03-03', 'F', '2004-05-23', 7, 0),
(735, 'Schewe', 'Johnathon', '1996-03-26', 'F', '1998-07-09', 3, 0),
(736, 'Mcnaught', 'Becki', '2001-01-16', 'F', '2020-09-11', 9, 0),
(737, 'Buresh', 'Rebecka', '1998-09-12', 'F', '2020-06-04', 2, 0),
(738, 'Grisby', 'Diego', '1997-08-03', 'M', '1990-12-08', 8, 0),
(739, 'Buresh', 'Leigha', '1999-11-19', 'F', '1994-09-01', 5, 0),
(740, 'Motsinger', 'Tama', '1997-03-14', 'M', '1997-11-23', 3, 0),
(741, 'Motsinger', 'Thomas', '1992-12-24', 'M', '2020-04-17', 3, 0),
(742, 'Kazmierczak', 'Rebecka', '1993-09-05', 'M', '2016-07-31', 8, 0),
(743, 'Fetzer', 'Laine', '1991-04-05', 'M', '1990-01-01', 5, 0),
(744, 'Badon', 'Jeanice', '1992-03-06', 'F', '2000-09-26', 9, 0),
(745, 'Noren', 'Yuri', '1995-11-22', 'F', '2001-09-18', 9, 0),
(746, 'Roberie', 'Joan', '1994-04-06', 'M', '2013-03-05', 6, 0),
(747, 'Paris', 'Arden', '1993-09-18', 'F', '1998-11-24', 1, 0),
(748, 'Center', 'Johnathon', '1997-03-10', 'M', '2013-06-20', 7, 0),
(749, 'Mote', 'Anthony', '1992-11-14', 'F', '1997-01-08', 7, 0),
(750, 'Pingree', 'Raleigh', '1993-04-04', 'M', '2006-05-31', 1, 0),
(751, 'Damron', 'Bong', '1998-08-31', 'F', '2008-11-12', 4, 0),
(752, 'Stoval', 'Arden', '1992-12-11', 'F', '1990-08-21', 5, 0),
(753, 'Schewe', 'Larisa', '1992-08-01', 'F', '1994-03-18', 6, 0),
(754, 'Pecora', 'Becki', '2000-09-11', 'M', '1993-04-24', 8, 0),
(755, 'Mayoral', 'Lawanda', '1998-03-31', 'F', '2004-06-22', 6, 0),
(756, 'Mcnaught', 'Randy', '1997-07-19', 'M', '1994-10-12', 9, 0),
(757, 'Wiers', 'Tyisha', '2001-04-30', 'F', '2000-12-30', 4, 0),
(758, 'Coby', 'Augustine', '1990-04-05', 'M', '2018-05-14', 9, 0),
(759, 'Wrona', 'Sharie', '2000-06-24', 'M', '1999-09-09', 9, 0),
(760, 'Buresh', 'Qiana', '1990-12-14', 'F', '2015-03-29', 4, 0),
(761, 'Guillemette', 'Lyndia', '1996-07-07', 'F', '2002-07-07', 1, 0),
(762, 'Geddes', 'Elida', '1994-09-23', 'F', '1990-06-21', 2, 0),
(763, 'Howe', 'Lloyd', '1998-03-27', 'M', '2017-03-29', 5, 0),
(764, 'Antes', 'Georgianna', '1992-11-20', 'M', '2010-06-09', 1, 0),
(765, 'Mcnaught', 'Bong', '1999-08-02', 'F', '2015-01-17', 7, 0),
(766, 'Ramage', 'Raleigh', '1992-12-13', 'M', '1991-09-10', 3, 0),
(767, 'Guillemette', 'Diego', '1993-06-06', 'F', '2017-06-18', 9, 0),
(768, 'Fetzer', 'Raleigh', '1997-06-16', 'M', '2014-11-26', 3, 0),
(769, 'Mote', 'Gaylene', '1990-09-23', 'F', '2018-12-13', 1, 0),
(770, 'Block', 'Thomas', '2001-07-02', 'M', '2010-01-09', 1, 0),
(771, 'Menjivar', 'Laine', '2001-12-08', 'M', '1993-07-19', 9, 0),
(772, 'Fetzer', 'Margarett', '1994-03-16', 'F', '2005-12-05', 6, 0),
(773, 'Ramage', 'Luz', '1999-10-23', 'F', '2008-04-03', 2, 0),
(774, 'Coby', 'Zonia', '1994-05-21', 'M', '2001-08-19', 1, 0),
(775, 'Klemp', 'Randy', '1992-02-13', 'F', '1996-10-07', 4, 0),
(776, 'Volkman', 'Yuri', '1994-12-28', 'F', '1991-08-04', 1, 0),
(777, 'Byron', 'Alejandro', '1991-05-15', 'M', '1992-01-07', 7, 0),
(778, 'Howe', 'Dion', '1997-04-28', 'F', '2005-10-08', 5, 0),
(779, 'Motsinger', 'Nancie', '1990-04-13', 'M', '2006-03-03', 1, 0),
(780, 'Redner', 'Jeanice', '2001-02-25', 'M', '1990-05-28', 6, 0),
(781, 'Kucera', 'Clora', '1994-10-10', 'M', '2004-06-04', 3, 0),
(782, 'Redner', 'Marquis', '1991-10-14', 'F', '1997-03-06', 1, 0),
(783, 'Culton', 'Larisa', '1990-01-01', 'M', '2008-09-23', 8, 0),
(784, 'Pecora', 'Bong', '1990-06-12', 'F', '2014-08-27', 7, 0),
(785, 'Menjivar', 'Arden', '1990-12-02', 'M', '2019-04-07', 1, 0),
(786, 'Schildgen', 'Becki', '1990-12-03', 'M', '2004-07-23', 9, 0),
(787, 'Grumbles', 'Jeanice', '2000-07-28', 'F', '2016-09-17', 5, 0),
(788, 'Kucera', 'Erasmo', '1996-02-27', 'F', '1996-01-11', 5, 0),
(789, 'Wiers', 'Joan', '1992-12-04', 'M', '2003-11-06', 5, 0),
(790, 'Volkman', 'Gaylene', '1999-02-20', 'M', '1991-03-07', 4, 0),
(791, 'Geddes', 'Elida', '1991-12-09', 'F', '2009-03-27', 4, 0),
(792, 'Pecora', 'Stephania', '1999-08-10', 'M', '1998-07-26', 7, 0),
(793, 'Fetzer', 'Stephania', '2000-05-31', 'M', '1998-06-13', 6, 0),
(794, 'Grumbles', 'Margarett', '1994-04-26', 'M', '1996-01-13', 1, 0),
(795, 'Roberie', 'Joan', '1995-12-27', 'F', '1993-01-09', 4, 0),
(796, 'Drews', 'Becki', '2000-05-10', 'M', '1994-03-07', 1, 0),
(797, 'Fleishman', 'Samatha', '1991-04-28', 'M', '2006-06-07', 3, 0),
(798, 'Howe', 'Johnathon', '1995-08-10', 'M', '2012-12-02', 8, 0),
(799, 'Kucera', 'Christeen', '1998-11-23', 'M', '2018-05-28', 4, 0),
(800, 'Byron', 'Tama', '1993-08-06', 'F', '2018-06-01', 4, 0),
(801, 'Marques', 'Daniele', '1986-12-04', 'F', '2006-07-07', 5, 0),
(802, 'Matheus', 'Daniele', '1985-07-07', 'M', '1985-07-07', 5, 0),
(803, 'Matheus Marques', 'Daniele', '1985-07-07', 'M', '1985-07-07', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE `salary` (
  `level` int NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`level`, `date_begin`, `date_end`, `salary`) VALUES
(1, '1900-01-01', '2017-12-31', '60000.00'),
(1, '2018-01-01', '2020-03-13', '61200.00'),
(1, '2020-03-14', '2020-12-31', '62730.00'),
(1, '2021-01-01', '2021-12-31', '63357.30'),
(2, '1900-01-01', '2017-12-31', '62000.00'),
(2, '2018-01-01', '2020-03-13', '63240.00'),
(2, '2020-03-14', '2020-12-31', '64821.00'),
(2, '2021-01-01', '2021-12-31', '65469.21'),
(3, '1900-01-01', '2017-12-31', '64000.00'),
(3, '2018-01-01', '2020-03-13', '65280.00'),
(3, '2020-03-14', '2020-12-31', '66912.00'),
(3, '2021-01-01', '2021-12-31', '67581.12'),
(4, '1900-01-01', '2017-12-31', '66000.00'),
(4, '2018-01-01', '2020-03-13', '67320.00'),
(4, '2020-03-14', '2020-12-31', '69003.00'),
(4, '2021-01-01', '2021-12-31', '69693.03'),
(5, '1900-01-01', '2017-12-31', '68000.00'),
(5, '2018-01-01', '2020-03-13', '69360.00'),
(5, '2020-03-14', '2020-12-31', '71094.00'),
(5, '2021-01-01', '2021-12-31', '71804.94'),
(6, '1900-01-01', '2017-12-31', '70000.00'),
(6, '2018-01-01', '2020-03-13', '71400.00'),
(6, '2020-03-14', '2020-12-31', '73185.00'),
(6, '2021-01-01', '2021-12-31', '73916.85'),
(7, '1900-01-01', '2017-12-31', '72000.00'),
(7, '2018-01-01', '2020-03-13', '73440.00'),
(7, '2020-03-14', '2020-12-31', '75276.00'),
(7, '2021-01-01', '2021-12-31', '76028.76'),
(8, '1900-01-01', '2017-12-31', '74000.00'),
(8, '2018-01-01', '2020-03-13', '75480.00'),
(8, '2020-03-14', '2020-12-31', '77367.00'),
(8, '2021-01-01', '2021-12-31', '78140.67'),
(9, '1900-01-01', '2017-12-31', '76000.00'),
(9, '2018-01-01', '2020-03-13', '77520.00'),
(9, '2020-03-14', '2020-12-31', '79458.00'),
(9, '2021-01-01', '2021-12-31', '80252.58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`) VALUES
('daniele', '123'),
('admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hr_employees`
--
ALTER TABLE `hr_employees`
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`level`,`date_begin`,`date_end`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `hr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=804;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;