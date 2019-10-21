-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2014 at 05:22 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oxford`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'makram', '123');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `link`, `place`, `id2`) VALUES
(7, 'photo/,.jpg', 'web', 5),
(8, 'photo/7.jpg', 'web', 6),
(9, 'photo/,.jpg', 'web', 7),
(10, 'photo/1456933_445911025520445_1699047408_n.jpg', 'web', 8);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(300) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `section` varchar(30) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

CREATE TABLE IF NOT EXISTS `comm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comme` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id2` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `perm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `comm`
--

INSERT INTO `comm` (`id`, `comme`, `name`, `id2`, `type`, `perm`) VALUES
(3, 'fffffffffffffffffffff', 'mohamed ali', 8, 'student', 1),
(4, 'makram webas', 'mohamed ali', 8, 'student', 1),
(5, 'hhhhhhhhhhhhh', 'mohamamed khaled', 7, 'student', 1),
(10, 'vvvvvvvvvv', 'mohamamed khaled', 7, 'student', 1),
(11, 'bbbbbbbbbbbbbbb', 'mohamamed khaled', 7, 'student', 1),
(12, 'v cxzs sd', 'mohamamed khaled', 7, 'student', 1),
(13, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'mohamamed khaled', 7, 'student', 1),
(14, 'mmmm', 'mohamamed khaled', 7, 'student', 1),
(15, 'nnnnnn', 'mohamamed khaled', 7, 'student', 1),
(16, 'nnnnnnn', 'mohamed', 16, 'teacher', 1),
(17, 'hhhhh', 'mohamed', 1, 'teacher', 1),
(18, 'fffffffffffff', 'mohamamed khaled', 1, 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `areacode` varchar(14) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `service` varchar(80) NOT NULL,
  `overall` varchar(80) NOT NULL,
  `responsive` varchar(80) NOT NULL,
  `kind` varchar(80) NOT NULL,
  `messege` varchar(7000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `last`, `gender`, `areacode`, `phone`, `email`, `service`, `overall`, `responsive`, `kind`, `messege`) VALUES
(13, 'mohamed', 'makram', 'Male', '7666', '9887', 'mohamedmakram362@yahoo.com', 'Very Satisfied', 'Somewhat Satisfied', 'Somewhat Satisfied', 'Somewhat Satisfied', 'nnnnnnnnnnn'),
(14, 'nm,gfg', 'gggg', 'Male', '434', '543', 'nsetansak30@yahoo.com', 'Very Satisfied', 'Very Satisfied', 'Very Satisfied', 'Very Satisfied', 'ggggggggg'),
(15, 'makram', 'makram', 'Male', 'makram', 'makram', 'mohamedmakram362@yahoo.com', 'Not Satisfied', 'Not Satisfied', 'Not Satisfied', 'Not Satisfied', 'makram'),
(16, 'ahmed', 'moaoaa', 'Male', '54', '3333', 'm.makram39@yahoo.com', 'Very Satisfied', 'Satisfied', 'Somewhat Satisfied', 'Not Satisfied', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb'),
(17, 'mohamed', 'gamal', 'Male', '333', '333333', 'mohamedmakram362@yahoo.com', 'Very Satisfied', 'Very Satisfied', 'Very Satisfied', 'Very Satisfied', 'there is no'),
(18, 'cccc', 'ccc', 'Male', '333', '444', 'mohamedmakram362@yahoo.com', 'Satisfied', 'Satisfied', 'Somewhat Satisfied', 'Satisfied', 'ddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'تطوير المواااقع'),
(2, 'icdl'),
(4, 'css'),
(5, 'css3'),
(6, 'android'),
(7, 'data structure'),
(8, 'asp.net'),
(9, 'icdl2'),
(10, 'icdl3'),
(11, 'icdl4');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `info` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `name`, `pic`, `info`) VALUES
(1, 'mohamed', 'photo/,.jpg', '<p>له انتاج عديد من الافلام العظيمه</p>'),
(2, 'لللللللللللل', 'photo/715.jpg', '<p>اااااااااااااااااااااااااااااااااااااااااااا</p>'),
(3, 'mkkkkkddddddddd', 'photo/', '<p>mmmmmmmmmmmmmm</p>');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `descr` varchar(7000) NOT NULL,
  `descr2` varchar(7000) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `title2`, `descr`, `descr2`, `id2`) VALUES
(6, 'hhhh', 'hhhhhhh', '<p>hhhhh</p>', '<p>hhhhh</p>', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lastoffers`
--

CREATE TABLE IF NOT EXISTS `lastoffers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `descr` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lastoffers`
--

INSERT INTO `lastoffers` (`id`, `course`, `price`, `descr`) VALUES
(4, 'rr', '44', '				\r\n			gggggggggg   ');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `link`, `course`, `id2`) VALUES
(2, 'Gallery icdl1', 'library/gallery2_files.zip', 'icdl', 1),
(3, 'title', 'library/gallery2_files.rar', 'web develpment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idstu` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `idstu`, `idpost`) VALUES
(4, 7, 7),
(5, 7, 8),
(6, 7, 9),
(7, 3, 1),
(8, 7, 1),
(9, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(3000) NOT NULL,
  `descr2` varchar(3000) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `descr`, `descr2`, `id2`) VALUES
(18, 'ff', 'fff', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(2000) NOT NULL,
  `down` varchar(1000) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `down`, `id2`) VALUES
(1, '<p>هااااااااااااااااااااااى مكرم</p>', 'photo/', 1),
(2, '<p>ييييييييييييييييييييييييييييييييييييييييييييييي</p>', 'photo/11ty3.jpg', 1),
(3, '<p>لاااااااااااااااااااااا</p>', 'photo/294482_115512931892205_100003004974223_93603_148094663_n - Copy.jpg', 1),
(7, '<p>مكرررررررررررررررررررررررررررررررررررررررررررم</p>', 'gallery2_files.zip', 3),
(8, '<p>مكررررررررررررررررررررم2</p>', '', 3),
(9, 'cccccccccc', '1503890_540875566008128_1149547348_n.jpg', 3),
(10, 'hhhhhhhhhh', 'body.psd', 3),
(11, 'bbbbbbbbbb', '', 3),
(12, '', '', 3),
(13, 'hhhhhhh', '', 3),
(14, 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '', 3),
(15, '', '', 1),
(16, 'mmmm', '', 1),
(17, 'mmmmmm', '', 1),
(18, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prev`
--

CREATE TABLE IF NOT EXISTS `prev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `news` int(11) NOT NULL,
  `updatenews` int(11) NOT NULL,
  `addpicture` int(11) NOT NULL,
  `updatepicture` int(11) NOT NULL,
  `addtopics` int(11) NOT NULL,
  `updatetopic` int(11) NOT NULL,
  `addevent` int(11) NOT NULL,
  `addpart` int(11) NOT NULL,
  `addalbum` int(11) NOT NULL,
  `updateevent` int(11) NOT NULL,
  `updatepart` int(11) NOT NULL,
  `updatealbum` int(11) NOT NULL,
  `updatecontact` int(11) NOT NULL,
  `updateservice` int(11) NOT NULL,
  `updatecontrol` int(11) NOT NULL,
  `updatequestion` int(11) NOT NULL,
  `addtask` int(11) NOT NULL,
  `updatetask` int(11) NOT NULL,
  `updateans` int(11) NOT NULL,
  `addbooksec` int(11) NOT NULL,
  `addcourse` int(11) NOT NULL,
  `addcv` int(11) NOT NULL,
  `addlastoffers` int(11) NOT NULL,
  `addlibitem` int(11) NOT NULL,
  `addstudent` int(11) NOT NULL,
  `updatestudent` int(11) NOT NULL,
  `addstucourse` int(11) NOT NULL,
  `addtype` int(11) NOT NULL,
  `updatetype` int(11) NOT NULL,
  `updatestucourse` int(11) NOT NULL,
  `updatelastoffers` int(11) NOT NULL,
  `updatebooksec` int(11) NOT NULL,
  `updatecourse` int(11) NOT NULL,
  `reservecontrol2` int(11) NOT NULL,
  `updatelibitem` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `prev`
--

INSERT INTO `prev` (`id`, `username`, `password`, `type`, `news`, `updatenews`, `addpicture`, `updatepicture`, `addtopics`, `updatetopic`, `addevent`, `addpart`, `addalbum`, `updateevent`, `updatepart`, `updatealbum`, `updatecontact`, `updateservice`, `updatecontrol`, `updatequestion`, `addtask`, `updatetask`, `updateans`, `addbooksec`, `addcourse`, `addcv`, `addlastoffers`, `addlibitem`, `addstudent`, `updatestudent`, `addstucourse`, `addtype`, `updatetype`, `updatestucourse`, `updatelastoffers`, `updatebooksec`, `updatecourse`, `reservecontrol2`, `updatelibitem`) VALUES
(4, 'makram', '4', 'admin', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'mohamed', '7', 'teacher', 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 'fff', '4444', 'teacher', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proditem`
--

CREATE TABLE IF NOT EXISTS `proditem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` text NOT NULL,
  `place` varchar(1000) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `descr` mediumtext NOT NULL,
  `id2` int(11) NOT NULL,
  `down` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `proditem`
--

INSERT INTO `proditem` (`id`, `pic`, `place`, `name`, `descr`, `id2`, `down`) VALUES
(57, 'photo/1503890_540875566008128_1149547348_n.jpg', 'web', 'web static', 'له العديد من الامتيازات والامكانيات العظيمه', 1, 'photo/gallery2_files_2.rar');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodname` varchar(2000) NOT NULL,
  `id2` int(11) NOT NULL,
  `optione` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prodname`, `id2`, `optione`) VALUES
(9, 'web', 1, 'يظهر');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ques` varchar(400) NOT NULL,
  `ans` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `section` varchar(20) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `ques`, `ans`, `name`, `course`, `section`, `teacher`, `id2`) VALUES
(1, 'hellllllllo my teacher', '', 'mohamed ali', 'asp.net', 'B', 'ggg', 6),
(2, 'hhhhhhhhhhhh', '', 'mohamed ali', 'asp.net', 'B', 'ggg', 6),
(8, '<p>hhhhhhhhhhhhhhhhhhhhh</p>', '<p>nnnnnnnnnnnnggggggggg</p>', 'mohamamed khaled', 'تطوير المواااقع', 'V', 'mohamed gamal', 7);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `areacode` varchar(10) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `staddress` varchar(400) NOT NULL,
  `staddress2` varchar(400) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `month` varchar(20) NOT NULL,
  `day` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `fullname`, `lastname`, `gender`, `areacode`, `phone`, `zip`, `staddress`, `staddress2`, `city`, `state`, `country`, `month`, `day`, `year`, `email`, `course`) VALUES
(4, 'محمد', 'مكرم', 'Male', '010', '012345678', '11', 'ةخلهل', 'ةةبونل', 'بلبللال', 'للي', 'Angola', 'April', 5, 2009, 'mohamedmakram362@yahoo.com', 'Speaking');

-- --------------------------------------------------------

--
-- Table structure for table `resstu`
--

CREATE TABLE IF NOT EXISTS `resstu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `resstu`
--


-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(300) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `descr2` varchar(200) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `place`, `descr`, `descr2`, `id2`) VALUES
(2, 'hhhhhhh', 'ff', 'fffff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `permis` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `question`, `answer`, `place`, `date`, `time`, `permis`) VALUES
(5, '   ggggg', ' ffffff', '<p>wwwwwwww</p>', 'الانجليزية', '2013-11-25', '14 :11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(2000) NOT NULL,
  `descr` varchar(3000) NOT NULL,
  `descr2` varchar(3000) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `slider`
--


-- --------------------------------------------------------

--
-- Table structure for table `stucourse`
--

CREATE TABLE IF NOT EXISTS `stucourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(120) NOT NULL,
  `section` varchar(20) NOT NULL,
  `day` varchar(100) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `stucourse`
--

INSERT INTO `stucourse` (`id`, `course`, `section`, `day`, `teacher`, `id2`) VALUES
(1, 'asp.net', 'B', 'الاثنن والاربعاء', 'ggg', 6),
(6, 'تطوير المواااقع', 'V', 'الاثنن والاربعاء', 'mohamed gamal', 7),
(7, 'css3', 'V', 'gggggggggggggggggggggg', 'mohamed gamal', 7),
(8, 'android', 'V', 'hhhhhhh', 'mohamed gamal', 7),
(10, 'تطوير المواااقع', 'B', 'nn', 'محمد مكرم', 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `password`) VALUES
(5, 'mahmoud', 'makram', '6'),
(7, 'mohamamed khaled', 'mohamed', '1'),
(8, 'mohamed', 'gg', '55'),
(9, 'dd', 'dd', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(150) NOT NULL,
  `section` varchar(10) NOT NULL,
  `link` varchar(200) NOT NULL,
  `task` varchar(300) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `course`, `section`, `link`, `task`, `id2`) VALUES
(1, 'تطوير المواااقع', 'V', 'answers/gallery2_files.rar', 'من فضلك قم بعمل الواااااااجب', 0),
(2, 'تطوير المواااقع', 'V', 'answers/gallery2_files.rar', 'مكرم وبس يا مان', 0),
(3, 'icdl', 'V', 'questions/gallery2_files.rar', 'لا سبيل غير ذلك عزيزيى الطالب', 0),
(4, 'android', 'V', 'questions/gallery2_files.rar', 'مهم جدا جدا', 0),
(6, 'icdl', 'V', 'questions/gallery2_files.zip', 'اعمل الصح ', 0),
(7, 'css3', 'V', 'questions/gallery2_files.zip', 'رررررررر', 0),
(8, 'asp.net', 'B', 'questions/gallery2_files.rar', 'answer all question', 0),
(9, 'asp.net', 'V', 'questions/gallery2_files.rar', 'answer this', 0),
(10, 'تطوير المواااقع', 'V', 'questions/1533445_698441143533471_1785590387_n.jpg', 'hhhhhhhhhhhhhh', 6),
(12, 'تطوير المواااقع', 'V', 'questions/admcont.jpg', 'hhhhhhhhhhh', 8);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `username`, `password`) VALUES
(1, 'محمد مكرم', '0', '1234'),
(2, 'ggg', '0', '33333'),
(3, 'mohamed', 'makram', '333'),
(6, 'mohamed gamal', 'makram', '555'),
(8, 'ahmed fathy', 'ahmed', '5'),
(9, 'mohamed', 'mohamed', '7'),
(10, 'محمد جمال مكرم', 'fff', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `descr` varchar(6000) NOT NULL,
  `descr2` varchar(6000) NOT NULL,
  `link` varchar(300) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `topics`
--


-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typee` varchar(10) NOT NULL,
  `frome` varchar(25) NOT NULL,
  `too` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `typee`, `frome`, `too`) VALUES
(6, 'B', '1', '3'),
(7, 'v', '2', '4');
