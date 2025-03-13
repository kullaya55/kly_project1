-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 01:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'กุลญา', 'คำแปง', 'admin', '$2y$10$rOm7jIK4m11VVNGcm6NzOO0mzWw7oSrn5sxvrZDON5zecNrFlS0zW', 'superadmin', '2025-03-04 21:06:44', '2025-03-04 09:25:15', '2025-03-04 09:25:13'),
(3, 'หทัยรัตน์', 'ชุ่มเชื้อ', 'pupe', '$2y$10$1D3o2LCmZeukvw3Edp7Xc.kG1hp4d1t63m.qs0puHjAbfyMHOts8m', 'admin', '2025-03-04 21:02:36', '2025-03-04 10:27:02', '2025-03-04 10:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Php คืออะไร', 'ทำไมเราต้องเรียนภาษา PHP', 'PHP คือ ภาษาโปรแกรมฝั่งเซิร์ฟเวอร์ (Server-side Scripting Language) ที่ใช้กันอย่างแพร่หลายในการพัฒนาเว็บไซต์ โดยเฉพาะเว็บไซต์ที่มีการเชื่อมต่อฐานข้อมูล เช่น ระบบเว็บข่าว, ร้านค้าออนไลน์ (E-commerce), เว็บบอร์ด หรือระบบจัดการเนื้อหา (CMS) อย่าง WordPress ก็เขียนด้วย PHP', 'code.jpg', 'all,css', 'true', '2024-10-26 19:10:42', '2024-10-26 19:10:42'),
(2, 'Html คืออะไร', 'Html คือภาษาพื้นฐานสำหรับผู้ที่ต้องการสร้างเว็บไซต์', 'HTML ย่อมาจาก Hyper Text Markup Language คือภาษาคอมพิวเตอร์ที่ใช้ในการแสดงผลของเอกสารบน website หรือที่เราเรียกกันว่าเว็บเพจ ถูกพัฒนาและกำหนดมาตรฐานโดยองค์กร World Wide Web Consortium (W3C) และจากการพัฒนาทางด้าน Software ของ Microsoft ทำให้ภาษา HTML เป็นอีกภาษาหนึ่งที่ใช้เขียนโปรแกรมได้ หรือที่เรียกว่า HTML Application HTML เป็นภาษาประเภท Markup สำหรับการการสร้างเว็บเพจ โดยใช้ภาษา HTML สามารถทำโดยใช้โปรแกรม Text Editor ต่างๆ เช่น Notepad, Editplus หรือจะอาศัยโปรแกรมที่เป็นเครื่องมือช่วยสร้างเว็บเพจ เช่น Microsoft FrontPage, Dream Weaver ซึ่งอํานวยความสะดวกในการสร้างหน้า HTML ส่วนการเรียกใช้งานหรือทดสอบการทำงานของเอกสาร HTML จะใช้โปรแกรม web browser เช่น IE Microsoft Internet Explorer (IE), Mozilla Firefox, Safari, Opera, และ Netscape Navigator เป็นต้น\r\n\r\nคำที่ศัพท์ที่เกี่ยวข้องกับ HTML\r\nInternet เครือข่ายคอมพิวเตอร์ที่ใหญ่ที่สุดในโลก เกิดจากการเชื่อมโยงของเครือข่ายต่างๆ เข้าด้วยกัน\r\nHypertext รูปแบบเอกสารที่บรรจุการเชื่อมโยงไปยังเอกสารอื่นๆ ซึ่งสามารถใช้ข้อความ หรือรูป เป็นจุดเชื่อมโยง\r\nWWW ย่อจาก World Wide Web เป็นการสื่อสารด้วยการเชื่อมโยงเครือข่ายข่าวสารแบบใยแมงมุม(Web) แสดงผล ด้วยเอกสารไฮเปอร์เท็กซ์\r\nHTTP ย่อมาจาก Hypertext Transfer Protocol เป็นรูปแบบการสื่อสารที่ใช้ในการรับส่งข้อมูลไฮเปอร์เท็กซ์ในเครือข่าย อินเทอร์เน็ต\r\nWeb Browser โปรแกรมสำหรับแสดงผลหน้าเว็บ เช่น Internet Explorer, Mozilla Firefox และ Google Chrome เป็นต้น\r\nWeb Page หน้าเอกสารที่อยู่ในรูปของไฮเปอร์เท็กซ์', 'html.jpg', 'all, html', 'true', '2024-11-10 14:23:57', '2024-11-10 14:23:57'),
(3, 'JavaScript คืออะไร', 'เป็นภาษาโปรแกรมที่นักพัฒนาใช้ในการสร้างหน้าเว็บแบบอินเทอร์แอคทีฟ', 'JavaScript เป็นภาษาโปรแกรมที่นักพัฒนาใช้ในการสร้างหน้าเว็บแบบอินเทอร์แอคทีฟ ตั้งแต่การรีเฟรชฟีดสื่อโซเชียลไปจนถึงการแสดงภาพเคลื่อนไหวและแผนที่แบบอินเทอร์แอคทีฟ ฟังก์ชันของ JavaScript สามารถปรับปรุงประสบการณ์ที่ผู้ใช้จะได้รับจากการใช้งานเว็บไซต์ และในฐานะที่เป็นภาษาในการเขียนสคริปต์ฝั่งไคลเอ็นต์ จึงเป็นหนึ่งในเทคโนโลยีหลักของ World Wide Web ยกตัวอย่างเช่น เมื่อคุณท่องเว็บแล้วเห็นภาพสไลด์ เมนูดร็อปดาวน์แบบคลิกให้แสดงผล หรือสีองค์ประกอบที่เปลี่ยนแบบไดนามิกบนหน้าเว็บ นั่นคือคุณเห็นเอฟเฟกต์ของ JavaScript', 'javascript.jpg', 'all,javascript', 'true', '2024-11-22 16:51:50', '2024-11-22 16:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `detail`, `created_at`) VALUES
(1, 'kullaya', '0973266536', 'a@gmail.com', 'สนใจสมัครเรียน', '2025-03-03'),
(2, 'pupe', '0973266536', 'p@gmail.com', 'สนใจสมัครเรียนหลักสูตร MSC', '2025-03-03'),
(3, 'hddfsafd', '12554216', 'w@gmail.com', 'ksjdkfja;sdjflasdf', '2025-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
