-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 07:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `millionaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answerid` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `questid` int(11) NOT NULL,
  `num` int(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `answercorrect` varchar(100) NOT NULL,
  `mark` int(11) NOT NULL,
  `info` text NOT NULL,
  `usermark` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answerid`, `teacherid`, `examid`, `userid`, `questid`, `num`, `answer`, `answercorrect`, `mark`, `info`, `usermark`) VALUES
(21, 3, 1, 3, 1, 1, 'd', 'd', 2, 'donkey', 2),
(22, 3, 1, 3, 2, 2, 'c', 'c', 2, 'Ù‡Ù„Ø§', 2),
(23, 3, 1, 3, 3, 3, 'b', 'b', 2, 'cat', 2),
(24, 3, 1, 3, 4, 4, 'c', 'b', 2, 'hrjjj', 0),
(25, 3, 1, 3, 5, 5, 'd', 'c', 2, 'bnnnn', 0),
(31, 3, 1, 1, 1, 1, 'd', 'd', 2, 'donkey', 2),
(32, 3, 1, 1, 2, 2, 'c', 'c', 2, 'Ù‡Ù„Ø§', 2),
(33, 3, 1, 1, 3, 3, 'c', 'b', 2, 'cat', 0),
(34, 3, 1, 1, 4, 4, 'b', 'b', 2, 'hrjjj', 2),
(35, 3, 1, 1, 5, 5, 'c', 'c', 2, 'bnnnn', 2),
(36, 3, 1, 2, 1, 1, 'd', 'd', 2, 'donkey', 2),
(37, 3, 1, 2, 2, 2, 'c', 'c', 2, 'Ù‡Ù„Ø§', 2),
(38, 3, 1, 2, 3, 3, 'b', 'b', 2, 'cat', 2),
(39, 3, 1, 2, 4, 4, 'd', 'b', 2, 'hrjjj', 0),
(40, 3, 1, 2, 5, 5, 'd', 'c', 2, 'bnnnn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `examid` int(100) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `gradeid` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `examname` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `sho` int(4) NOT NULL,
  `unit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`examid`, `teacherid`, `subjectid`, `gradeid`, `term`, `num`, `examname`, `marks`, `sho`, `unit`) VALUES
(1, 3, 1, 1, 1, 1, 'Ø§ÙˆÙ„ Ø§Ù…ØªØ­Ø§Ù† new ex', 2, 1, 0),
(2, 3, 1, 1, 1, 2, 'Ø«Ø§Ù†Ù‰', 1, 0, 0),
(3, 3, 2, 1, 1, 3, 'new exam grade4', 2, 0, 0),
(4, 5, 2, 4, 1, 1, '1prep ex1', 2, 1, 0),
(5, 1, 2, 4, 1, 1, '1prep ex1', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gid` int(100) NOT NULL,
  `userid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `graid` int(4) NOT NULL,
  `subid` int(4) NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `prizes` int(10) NOT NULL,
  `b` int(4) NOT NULL,
  `c` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gid`, `userid`, `name`, `graid`, `subid`, `score`, `level`, `prizes`, `b`, `c`) VALUES
(1, 2, 'bbb', 0, 0, 60, 0, 0, 0, 0),
(2, 3, 'ccc', 0, 0, 70, 0, 0, 13, 0),
(3, 1, 'MR', 0, 0, 790, 0, 0, 15, 0),
(7, 8, 'qqqq', 0, 0, 30, 0, 0, 16, 0),
(8, 5, '13songaaaa', 0, 0, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `gradeid` int(11) NOT NULL,
  `gradename` varchar(255) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`gradeid`, `gradename`, `a`, `b`) VALUES
(1, 'Ø§Ù„ØµÙ Ø§Ù„Ø±Ø§Ø¨Ø¹ Ø§Ù„Ø§Ø¨ØªØ¯Ø§Ø¦Ù‰', 0, 0),
(2, 'Ø§Ù„ØµÙ Ø§Ù„Ø®Ø§Ù…Ø³ Ø§Ù„Ø§Ø¨ØªØ¯Ø§Ø¦Ù‰', 0, 0),
(3, 'Ø§Ù„ØµÙ Ø§Ù„Ø³Ø§Ø¯Ø³ Ø§Ù„Ø§Ø¨ØªØ¯Ø§Ø¦Ù‰', 0, 0),
(4, 'Ø§Ù„ØµÙ Ø§Ù„Ø§ÙˆÙ„ Ø§Ù„Ø§Ø¹Ø¯Ø§Ø¯Ù‰', 0, 0),
(5, 'Ø§Ù„ØµÙ Ø§Ù„Ø«Ø§Ù†Ù‰ Ø§Ù„Ø§Ø¹Ø¯Ø§Ø¯Ù‰', 0, 0),
(6, 'Ø§Ù„ØµÙ Ø§Ù„Ø«Ø§Ù„Ø« Ø§Ù„Ø§Ø¹Ø¯Ø§Ø¯Ù‰', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `imgid` int(100) NOT NULL,
  `postid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `imgn` varchar(255) NOT NULL,
  `a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`imgid`, `postid`, `userid`, `imgn`, `a`) VALUES
(24, 28, 1, '55.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(100) NOT NULL,
  `userid` int(20) NOT NULL,
  `user` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `userid`, `user`, `avatar`, `post`, `date`, `time`) VALUES
(28, 1, 'MR', 'FB_IMG_1460045176155.jpg', '  Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ…', '02Mar21', '18:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questid` int(100) NOT NULL,
  `teacherid` int(100) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `gradeid` int(100) NOT NULL,
  `termid` int(11) NOT NULL,
  `examid` int(100) NOT NULL,
  `questnum` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answera` varchar(255) NOT NULL,
  `answerb` varchar(255) NOT NULL,
  `answerc` varchar(255) NOT NULL,
  `answerd` varchar(255) NOT NULL,
  `answercorrect` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `a` int(100) NOT NULL,
  `b` int(100) NOT NULL,
  `c` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questid`, `teacherid`, `subjectid`, `gradeid`, `termid`, `examid`, `questnum`, `question`, `answera`, `answerb`, `answerc`, `answerd`, `answercorrect`, `info`, `a`, `b`, `c`) VALUES
(1, 3, 1, 1, 1, 1, 2, '2+2=', '1', '2', '3', '4', 'd', 'donkey', 0, 0, 0),
(2, 3, 1, 1, 1, 1, 2, 'Ù…Ø§Ù„ÙˆÙ† Ø§Ù„Ø´Ø¬Ø±Ø©', 'Ø§Ø­Ù…Ø±', 'Ø§ØµÙØ±', 'Ø§Ø®Ø¶Ø± ', 'Ø§Ø²Ø±Ù‚', 'c', 'Ù‡Ù„Ø§', 0, 0, 0),
(3, 3, 1, 1, 1, 1, 1, 'where r u ?', 'zoo', 'school', 'cinema', 'robot', 'b', 'cat', 0, 0, 0),
(4, 3, 1, 1, 1, 1, 4, '5+7 =', '1', '12', '13', '14', 'b', 'hrjjj', 0, 0, 0),
(5, 3, 1, 1, 1, 1, 5, '2+4=', '1', '4', '6', '7', 'c', 'bnnnn', 0, 0, 0),
(6, 3, 1, 1, 1, 2, 1, 'gggggg', 'dd', 's', 's', 's', 'a', 'd', 0, 0, 0),
(7, 3, 1, 1, 1, 2, 2, 'nnn', 's', 's', 's', 's', 'a', '', 0, 0, 0),
(8, 1, 2, 4, 1, 5, 1, 'Samy has a new car .  ................ car is red .', 'his', 'him', 'her', 'me', 'a', 'ØµÙØ§Øª Ø§Ù„Ù…Ù„ÙƒÙŠÙ‡ he->his', 0, 0, 0),
(9, 1, 2, 4, 1, 5, 2, 'Hossam likes playing the drums in a .................. .', 'bank', 'sand', 'band', 'snow', 'c', 'band ÙØ±Ù‚Ø© Ù…ÙˆØ³ÙŠÙ‚ÙŠØ© ', 0, 0, 0),
(10, 1, 2, 4, 1, 5, 3, 'She likes ................mum.', 'his', 'she', 'him', 'her', 'd', 'she->her ØµÙØ§Øª Ù…Ù„ÙƒÙŠØ©', 0, 0, 0),
(11, 1, 2, 4, 1, 5, 4, 'Ali and .................. play chess together.', 'my', 'I', 'me', 'mine', 'b', 'Ø¶Ù…ÙŠØ± ÙØ§Ø¹Ù„ Ù‚Ø¨Ù„ Ø§Ù„ÙØ¹Ù„', 0, 0, 0),
(12, 1, 2, 4, 1, 5, 5, 'We .................go to school on Fridays.', 'never', 'often', 'ever', 'always', 'a', 'never ÙÙ‰ Ø§Ù„Ù†ÙÙ‰ ', 0, 0, 0),
(13, 1, 2, 4, 1, 5, 6, 'Do you ............... swim in the sea ?', 'always', 'never', 'ever', 'often', 'c', 'ever ÙÙ‰ Ø§Ù„Ø³Ø¤Ø§Ù„', 0, 0, 0),
(14, 1, 2, 4, 1, 5, 7, 'She never ........................... to cinema on Thursdays', 'go', 'goes', 'went', 'wants', 'b', 's/es --->he/she/it', 0, 0, 0),
(15, 1, 2, 4, 1, 5, 8, 'Brothers or sisters are the same age are called ........... .', 'twine', 'twins', 'towers', 'town', 'b', '', 0, 0, 0),
(16, 1, 2, 4, 1, 5, 9, 'I always play basketball â€¦â€¦â€¦.. Mondays', 'on', 'at', 'in', 'with', 'a', '', 0, 0, 0),
(17, 1, 2, 4, 1, 5, 10, '.................................my parents are doctors', 'Bath', 'Both', 'Every', 'Two', 'b', 'both ÙƒÙ„Ø§Ù‡Ù…Ø§', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultid` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `a` int(4) NOT NULL,
  `b` int(4) NOT NULL,
  `c` int(4) NOT NULL,
  `d` int(4) NOT NULL,
  `e` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultid`, `teacherid`, `examid`, `userid`, `mark`, `a`, `b`, `c`, `d`, `e`) VALUES
(4, 3, 1, 3, 6, 0, 0, 0, 0, 0),
(6, 3, 1, 1, 8, 0, 0, 0, 0, 0),
(7, 3, 1, 2, 6, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `subjectname`, `a`, `b`) VALUES
(1, 'Ø§Ù„Ù„ØºØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©', 0, 0),
(2, 'Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ©', 0, 0),
(3, 'Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠØ§Øª', 0, 0),
(4, 'Ø§Ù„Ø¹Ù„ÙˆÙ…', 0, 0),
(5, 'Ø§Ù„Ø¯Ø±Ø§Ø³Ø§Øª Ø§Ù„Ø§Ø¬ØªÙ…Ø§Ø¹ÙŠØ©', 0, 0),
(6, 'Ø§Ù„ÙƒÙ…Ø¨ÙŠÙˆØªØ±', 0, 0),
(7, 'Ø§Ù„ØªØ±Ø¨ÙŠØ© Ø§Ù„Ø¯ÙŠÙ†ÙŠØ©', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `userid` int(100) NOT NULL,
  `userfname` varchar(255) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(4) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `timeregister` varchar(11) NOT NULL,
  `online` int(11) NOT NULL,
  `grade` varchar(4) NOT NULL,
  `tsub` varchar(200) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`userid`, `userfname`, `username`, `password`, `email`, `level`, `gender`, `avatar`, `bg`, `timeregister`, `online`, `grade`, `tsub`, `about`) VALUES
(1, 'MR', 'aaa', '123', 'aaaaa@aa.com', 1, '1 ', 'FB_IMG_1460045176155.jpg', 'ba.jpg', '2021-01-29', 1, '', 'Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ©', 'ÙˆÙ‚Ù„ Ø±Ø¨ Ø²Ø¯Ù†ÙŠ Ø¹Ù„Ù…Ø§ '),
(2, 'bbb', 'bbb', '123', 'bb@ff.com', 0, '2', 'female.jpg', 'ba.jpg', '2021-01-29', 1, '', '', ''),
(3, 'ccccc', 'ccc', '123', 'cc@ff.com', 1, '2', '2.jpg', 'ba.jpg', '2021-01-29', 1, '', ' write bbbbbbsubject  ', ' write something about you '),
(4, 'ddd', 'ddd', '123', 'dd@b.com', 0, '1 ', 'male.jpg', 'ba.jpg', '2021-02-07', 0, '1 ', '', ''),
(5, '13songaaaa', 'eee', '123', 'bbff@ff.com', 1, '2', 'FB_IMG_1462140517607.jpg', 'ba.jpg', '2021-02-07', 1, '1 ', 'bbbb', 'ccccccccc'),
(6, 'fff', 'fff', '123', 'ff@ff.com', 1, '1 ', 'male.jpg', 'ba.jpg', '2021-02-07', 0, '1 ', '', ''),
(7, 'ggg', 'ggg', '123', 'aaggaaa@aa.com', 1, '2', 'female.jpg', 'ba.jpg', '2021-02-07', 0, '', '', ''),
(8, 'qqqq', 'qqq', '123', 'a@asa.com', 1, '1 ', 'male.jpg', 'ba.jpg', '2021-03-11', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uzrid` int(11) NOT NULL,
  `uzrname` varchar(20) NOT NULL,
  `a` int(3) NOT NULL,
  `b` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uzrid`, `uzrname`, `a`, `b`) VALUES
(0, 'omar', 0, 0),
(0, 'mm', 0, 0),
(3, 'xx', 0, 0),
(4, 'cz', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answerid`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`gradeid`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `examid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `gradeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `imgid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
