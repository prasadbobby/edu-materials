-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 01:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `comments`) VALUES
(1, 'rxtcvygbhj', '56789', 'sedrtfygh@wefg.cth', 'retfygbhjnkm'),
(2, 'Jjwjw', '9467667', 'jskdk@gmail.com', 'Hibyhere'),
(3, 'Hari', '87689', 'hjakj@gmail.com', 'yfyshgajsa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `email`, `comments`) VALUES
(1, 'uhvjk,', '9876', 'uhgv@fhjj.com', 'ujsmxn'),
(2, 'Sandhya', '6302042437', 'samdhyajuluri@gmail.com', 'Great work'),
(3, 'hgtdhtfj', '7857548758698', 'ghfhjgj@gmail.com', 'hgtdfythfygjgjgjgkgkuhkj'),
(4, 'Gana sai', '8885533354', 'ganapeela@gmail.com', 'ok'),
(5, 'hi', '89689987', 'ghgkuhj@gmail.com', 'jhygjg'),
(6, 'Madanapu Sai Aishwarya', '9398465449', 'aishwaryamdp1969@gmail.com', 'Super website i have ever seen... The way it will be used by the users will be appreciable in the future.'),
(7, 'kopparthi jaya kumari', '8074641278', 'jayakumari.8019@gmail.com', 'marvelous'),
(8, 'uhhbu', '76987', 'vbh@hmail.com', 'uyygyuyh'),
(9, 'Nazeera Sheik', '6303723986', 'Nazeerashaik61@gmail.com', 'this one is going to be a miracle'),
(10, 'Hari', '87989', 'gjh@gmail.com', 'hdgasj'),
(11, 'D. Shahida Banu', '9787273627', 'shahidaa77@gmail.com', 'ytdftyhgyvjhIgshsah');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `message`, `status`, `date`) VALUES
(3, 'Hi there', 'Hello, this is Bobby here. testing this app', 1, '2020-05-12 01:40:10'),
(4, 'Hi This is Bobby', 'testing app', 1, '2020-05-12 01:43:07'),
(5, '', '', 1, '2020-05-24 01:49:01'),
(6, 'hello', 'testing with hello', 1, '2020-05-24 02:30:50'),
(7, 'hiii ', 'hii how are you', 1, '2020-05-30 09:34:43'),
(8, 'Hi', 'Hey ', 1, '2020-06-02 08:51:34'),
(10, 'hubhed', 'yuguijh', 1, '2020-06-27 07:53:35'),
(12, 'This is 2-1 results', 'https://manabadi.com thius is the website', 1, '2020-07-03 02:14:38'),
(13, '', 'hi', 1, '2020-07-18 05:04:32'),
(14, '', 'welcome', 0, '2020-07-18 05:05:02'),
(15, 'welcome', 'hi', 1, '2020-07-18 05:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `email`, `image`) VALUES
(2, 'priyanka D', '104741658110412374328', 'priyanka980611@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GhUgxjGybqkx4YDZ6_Zul8TXL2AWVKdE_TYu71S=s96-c'),
(3, 'prasad bobby', '103659212741915078722', 'prasadbobby057@gmail.com', 'https://lh3.googleusercontent.com/-biat70QD5UE/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmsfNOQ29BcytzRlRDbvav74AjY0g/s96-c/photo.jpg'),
(4, 'DAMPANABOINA RAJESH', '104153606080163779996', 'rajesh.dampanaboina@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjxoOwyYzlKXliWutX02JIj1QrJqqcNUcbArnFA=s96-c'),
(5, 'Lakshmi Lahari_046', '109401300690188987230', 'laharikowru@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GheTiyHopDt_ENKk4MJ_gOOFxqpoQwBLtD1srok=s96-c'),
(6, 'ramakrishna chellaboina', '112802737029284610856', 'chellaboinaramakrishna@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GiBXWDhS1QxaPtEZx-ohk5Qo2xP8gvqMEzYumSu=s96-c'),
(7, 'MANDA.SATYA SAITHI', '117653080777982373685', 's160610@rguktsklm.ac.in', 'https://lh3.googleusercontent.com/-Mg1QpkKDmMg/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclbIxAnyR4nLXc25SSuYP0iQUNvYQ/s96-c/photo.jpg'),
(8, 'PULAGALA.RANI lagala.r', '112721456718491569649', 's160363@rguktsklm.ac.in', 'https://lh3.googleusercontent.com/-ZsksjAGUY54/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckpP44Y4a9Y_IQOKUOFjcmP61jtkQ/s96-c/photo.jpg'),
(10, 'SivaJi', '100393885041180668896', 'gubbalasivaji7@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GgeHU8TZsq_jbWXR24_e5Q-BblwjMGt0MjGlOQOeg=s96-c'),
(12, 'Jaya Krishna', '108931013040396796924', 'jayakrishna0005@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GiuZAV8L-e3-WPOWb2riwCq-9aHyepOwtp9pe0ZxA=s96-c'),
(13, 'Sandhya Juluri', '116205826358427785952', 'samdhyajuluri@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjPyBb7gqieNzLfjIA8RP5VprFYHTqvxTzRP6vZ=s96-c'),
(14, 'Nishigandha Patil', '104582422672429403050', 'nishigandhavpatil1998@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14Gg6c9My_iSC5SU93jI0yA-CC1dN_w3KvSaqUpdT=s96-c'),
(15, 'Prasad Bobby', '116911493717729573933', 'knvdurgaprasad610@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14Gj00WcqP9QzWprBQ5sfY-CfL0hIzOiKxvWEITS2Og=s96-c'),
(16, 'mummana balakrishna', '112915103647771337237', 'mbalakrishna96@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GiljdhMl0gjKLflPq43-AmOKxiWupvFlKmYoMRQWQ=s96-c'),
(17, 'Swaroop Vavilapalli', '104070012448559009288', 'vavilapalliswaroop@gmail.com', 'https://lh6.googleusercontent.com/-lP3L8o_OpWg/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnQnK37csjk0WfSP_tXu_khwwQmvA/s96-c/photo.jpg'),
(18, '199P5A0503 Naga Venkata Durga Prasad Kowru', '108274866125468617986', '199p5a0503.dnre@apssdc.info', 'https://lh3.googleusercontent.com/a-/AOh14Gh2VSZ-H5olHGFF88sKnnRAkW9BRJHXgQ48UfCe=s96-c'),
(19, 'pavanivarma nadimpalli', '105271034054454798572', 'pavaninadimpalli34@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjHdmgVy40QnKnpYH7xi7SxpsIa9oDX51VFi8_y2g=s96-c'),
(20, 'Madanapu Aishwarya', '114444860224045647411', 'aishwaryamdp1969@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GgRYN_PI5Sg08vVk74L5-fx64XP7rSGuyfQG81E=s96-c'),
(21, 'jaya kumari', '113753002151425999381', 'jayakumari.8019@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GgTczhZrG9Nw8XyX1RHglyog7sj_psvONo23MlhYQ=s96-c'),
(22, 'Nazeera Sheik', '108543757856781279806', 'nazeerashaik61@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GhhrqrpYsdBo_-rhG6nxiqIC93DGAnbdc9DXZNMMg=s96-c'),
(23, 'Gy Reddy', '105721605777713290165', 'gyreddy2328@gmail.com', 'https://lh6.googleusercontent.com/-NstQVuEczn8/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuck5lIKbpDzVVbuQOyLbcp576or9Sw/s96-c/photo.jpg'),
(24, 'Hari Krishna Biyyala', '101304992685909057089', 'biyyalaharikrishnawork@gmail.com', 'https://lh4.googleusercontent.com/-a5rmj2685Ws/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucm__pkivtifzGPs81uPkwuE-7Zh3w/s96-c/photo.jpg'),
(25, 'shahida banu', '112902438675904176644', 'shahidabanu256@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GhcpALfZoQjZwN9AqruMZVq3vFV9aodUd0ItNkmyw=s96-c'),
(26, 'Gayatri Devi Mandavelli', '113211344248470553236', 'gayatrimandavelli2000@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GhaASAbTffAhxqvAW7aF6diHtqhKcAtldhXEViaww=s96-c'),
(27, 'ganesh subbu', '109854545658716528627', 'ganig38@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GiL2x3a3oOQs0KwKHq8-z4oUzG1L1DBeqb5B8aEKQ=s96-c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
