-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 07:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `abhishekseller`
--

CREATE TABLE `abhishekseller` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abhishekseller`
--

INSERT INTO `abhishekseller` (`buyers`, `dates`, `title`) VALUES
('organizein', '17-01-2022', 'backend developer inphp');

-- --------------------------------------------------------

--
-- Table structure for table `aditya`
--

CREATE TABLE `aditya` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `statuses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adityabuyer`
--

CREATE TABLE `adityabuyer` (
  `id` int(11) NOT NULL,
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `morerequirement` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `statuses` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adityabuyer`
--

INSERT INTO `adityabuyer` (`id`, `buyers`, `dates`, `category`, `locations`, `morerequirement`, `budget`, `messages`, `title`, `statuses`) VALUES
(1, 'nikhil', '17-01-2022', 'Android Development', ' Pune', '                        i am interested in this internship .', '10000000', 'ok i am ready for work', 'android developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adityabuyerconnect`
--

CREATE TABLE `adityabuyerconnect` (
  `seller` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `statuses` int(2) DEFAULT 1,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adityabuyerconnect`
--

INSERT INTO `adityabuyerconnect` (`seller`, `dates`, `statuses`, `email`, `phoneno`, `title`) VALUES
('nikhil', '17-01-2022', 1, 'nikhil20@gmail.com', 2147483647, 'android developer');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('aditya', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `anandbuyer`
--

CREATE TABLE `anandbuyer` (
  `id` int(11) NOT NULL,
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `morerequirement` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `statuses` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anandbuyer`
--

INSERT INTO `anandbuyer` (`id`, `buyers`, `dates`, `category`, `locations`, `morerequirement`, `budget`, `messages`, `title`, `statuses`) VALUES
(1, 'radhika', '17-01-2022', 'Web development', ' Pune', '                        i am interested in your internship please gve me flexible work time and days.', '5000 /-', 'please give me oppertunity i will give my best.', 'PHP developer.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `anandbuyerconnect`
--

CREATE TABLE `anandbuyerconnect` (
  `seller` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `statuses` int(2) DEFAULT 1,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anandbuyerconnect`
--

INSERT INTO `anandbuyerconnect` (`seller`, `dates`, `statuses`, `email`, `phoneno`, `title`) VALUES
('radhika', '17-01-2022', 1, 'radhikasabde20@gmail.com', 2147483647, 'PHP developer.');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `industryrequirement` varchar(255) NOT NULL,
  `connectprofessional` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `buyername` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `title`, `requirement`, `industryrequirement`, `connectprofessional`, `location`, `date`, `buyername`, `status`) VALUES
(1, 'oracle developer', 'if u knows about sql , mysql then welcome.', 'web development', 'knows mysql , sql ', 'pune', '16-01-2022', 'shriram', 1),
(2, 'node js developer', 'interested in node js .', 'web development', 'knows node js', 'banglore', '16-01-2022', 'shriram', 1),
(3, 'android developer', 'interested in android then join with us.', 'android developer', 'knows about android studio , kotlin , java', 'pune', '17-01-2022', 'aditya', 1),
(4, 'PHP developer.', 'welcome to our industry in this we hire student for php developer internship in that we provide paid internship .', 'web development(backend development)', 'students knows about php , html , css', 'pune', '17-01-2022', 'anand', 1),
(5, 'backend developer inphp', 'we are introducing our internship program for php developer if you arre interested then join us.', 'web development', 'if you knows about php , html , css , javascript then you can  join with us.', 'pune', '17-01-2022', 'organizein', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kalyaniseller`
--

CREATE TABLE `kalyaniseller` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalyaniseller`
--

INSERT INTO `kalyaniseller` (`buyers`, `dates`, `title`) VALUES
('shriram', '16-01-2022', 'node js developer');

-- --------------------------------------------------------

--
-- Table structure for table `ketakiseller`
--

CREATE TABLE `ketakiseller` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketakiseller`
--

INSERT INTO `ketakiseller` (`buyers`, `dates`, `title`) VALUES
('shriram', '17-01-2022', 'oracle developer'),
('shriram', '17-01-2022', 'node js developer');

-- --------------------------------------------------------

--
-- Table structure for table `maharajseller`
--

CREATE TABLE `maharajseller` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maharajseller`
--

INSERT INTO `maharajseller` (`buyers`, `dates`, `title`) VALUES
('ketaki', '16-01-2022', 'php developer');

-- --------------------------------------------------------

--
-- Table structure for table `nikhilseller`
--

CREATE TABLE `nikhilseller` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nikhilseller`
--

INSERT INTO `nikhilseller` (`buyers`, `dates`, `title`) VALUES
('aditya', '17-01-2022', 'android developer');

-- --------------------------------------------------------

--
-- Table structure for table `organizeinbuyer`
--

CREATE TABLE `organizeinbuyer` (
  `id` int(11) NOT NULL,
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `morerequirement` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `statuses` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizeinbuyer`
--

INSERT INTO `organizeinbuyer` (`id`, `buyers`, `dates`, `category`, `locations`, `morerequirement`, `budget`, `messages`, `title`, `statuses`) VALUES
(1, 'abhishek', '17-01-2022', 'Web development', ' Pune', '                        please give me flexible work day which 5 day in week and flexible work hours. thank you.', '6000 ', 'i am interested in your internshipt please give me this oppertunity.', 'backend developer inphp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizeinbuyerconnect`
--

CREATE TABLE `organizeinbuyerconnect` (
  `seller` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `statuses` int(2) DEFAULT 1,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizeinbuyerconnect`
--

INSERT INTO `organizeinbuyerconnect` (`seller`, `dates`, `statuses`, `email`, `phoneno`, `title`) VALUES
('abhishek', '17-01-2022', 1, 'abhishek20@gmail.com', 2147483647, 'backend developer inphp');

-- --------------------------------------------------------

--
-- Table structure for table `radhikaseller`
--

CREATE TABLE `radhikaseller` (
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radhikaseller`
--

INSERT INTO `radhikaseller` (`buyers`, `dates`, `title`) VALUES
('anand', '17-01-2022', 'PHP developer.');

-- --------------------------------------------------------

--
-- Table structure for table `sellersignup`
--

CREATE TABLE `sellersignup` (
  `id` int(10) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `service` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellersignup`
--

INSERT INTO `sellersignup` (`id`, `username`, `email`, `phoneno`, `password`, `cpassword`, `service`, `location`) VALUES
(1, 'kalyani', 'kalyani20@gmail.com', 1234567890, '$2y$10$NoDqj2FJzscIjAgS0.uaYu.s/9iQDK5bTxQemeWf4l0yjpV9Ctl/2', 'a', 'softwear', ' pune'),
(2, 'maharaj', 'Adityasabde2002@gmail.com', 1234567891, '$2y$10$5VO6RSlpOGUDMbBQZ50F5.5JUPZjs3L9AF7ZlZHRTvrGX9by82aVy', 'a', 'softwear', ' pune'),
(5, 'ketaki', 'aditya.sabde20@vit.edu', 2147483647, '$2y$10$aCeCjCk0GzRDf4Eh0EG5yeaad/60xgBEtcm.3VZDfXvVNC78Ph/HW', 'a', 'softwear', ' pune'),
(6, 'nikhil', 'nikhil20@gmail.com', 2147483647, '$2y$10$yhc4qKKISOdPS.n05GDewe3Qn6e.bsAtvpSW1AKLGYpSwS3pJI0oW', 'a', 'software', ' pune'),
(7, 'radhika', 'radhikasabde20@gmail.com', 2147483647, '$2y$10$HHFMsiGVTzhrHYcnt87yTuAPkqzExI1lguQO0JFf8nFU63k5UKnbK', 'a', 'web based application', ' pune'),
(8, 'abhishek', 'abhishek20@gmail.com', 2147483647, '$2y$10$4IihQxQGF8Tj3P9cWSn8f.832d27Fo0gYh4jEt/ETZ1RvsswSauH6', 'a', 'software', ' pune');

-- --------------------------------------------------------

--
-- Table structure for table `shrirambuyer`
--

CREATE TABLE `shrirambuyer` (
  `id` int(11) NOT NULL,
  `buyers` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `morerequirement` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shrirambuyer`
--

INSERT INTO `shrirambuyer` (`id`, `buyers`, `dates`, `category`, `locations`, `morerequirement`, `budget`, `messages`, `title`) VALUES
(1, 'kalyani', '16-01-2022', 'Web development', ' Pune', '                        i am interested in your internship please give me an oppertunity.', '10000000', 'ok i am ready for work', 'node js developer'),
(5, 'ketaki', '17-01-2022', 'Web development', ' Pune', '                        asdfghjkla', '10000000', 'ok i am ready for work', 'oracle developer'),
(7, 'ketaki', '17-01-2022', 'Web development', ' Pune', '                        asd', '10000000', 'please', 'node js developer');

-- --------------------------------------------------------

--
-- Table structure for table `shrirambuyerconnect`
--

CREATE TABLE `shrirambuyerconnect` (
  `seller` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shrirambuyerconnect`
--

INSERT INTO `shrirambuyerconnect` (`seller`, `dates`, `email`, `phoneno`, `title`) VALUES
('kalyani', '16-01-2022', 'kalyani20@gmail.com', 1234567890, 'node js developer'),
('ketaki', '17-01-2022', 'aditya.sabde20@vit.edu', 2147483647, 'oracle developer');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `cpassword`, `phoneno`) VALUES
(1, 'shriram', 'shriram20@gmail.com', '$2y$10$fSm5Eq3w9x8ATlFiJkwksOacyYslsxB0tpf8PcRIax2uomkSfF0t2', 'a', 2147483647),
(2, 'aditya', 'aditya.sabde20@vit.edu', '$2y$10$ezwg2494D9JJ37sgjE19eeDFqWh/VHkt.g2qk4k3zmKyqRao5yjN.', 'a', 808),
(3, 'anand', 'anand20@gmail.com', '$2y$10$oyucbeP7hgP5NaUfwUluru/qa7DbVbB34fgL9jD0HN2UgQepa1AFK', 'a', 2147483647),
(4, 'organizein', 'organizein20@gmail.com', '$2y$10$RPbH0riST.LJnSXyrWAPAuUlZMjnZZYcWJU15Yi3RoH.WIyOCFxmm', 'a', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adityabuyer`
--
ALTER TABLE `adityabuyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anandbuyer`
--
ALTER TABLE `anandbuyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizeinbuyer`
--
ALTER TABLE `organizeinbuyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellersignup`
--
ALTER TABLE `sellersignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shrirambuyer`
--
ALTER TABLE `shrirambuyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adityabuyer`
--
ALTER TABLE `adityabuyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anandbuyer`
--
ALTER TABLE `anandbuyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organizeinbuyer`
--
ALTER TABLE `organizeinbuyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sellersignup`
--
ALTER TABLE `sellersignup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shrirambuyer`
--
ALTER TABLE `shrirambuyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
