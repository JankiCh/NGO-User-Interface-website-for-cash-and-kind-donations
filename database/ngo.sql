-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 11:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `user_id` int(8) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `occupation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`user_id`, `name`, `email_id`, `phone`, `password`, `gender`, `occupation`) VALUES
(1, 'Annu Agarwal', 'anuu@gmail.com', '7278368628', '2be9bd7a3434f7038ca27d1918de58bd', 'notsay', 'employed for wages'),
(2, 'Divya sahu', 'divya12@gmail.com', '9437911967', '827ccb0eea8a706c4c34a16891f84e7b', 'other', 'selfemp'),
(3, 'divya saha', 'divya@gmail.com', '9437911966', '01cfcd4f6b8770febfb40cb906715822', 'female', 'student'),
(4, 'Queen Bye', 'queenbee@gmail.com', '3344556677', '81dc9bdb52d04dc20036dbd8313ed055', 'female', 'student'),
(5, 'richa agarwal', 'richa@gmail.com', '6666666666', '81dc9bdb52d04dc20036dbd8313ed055', 'notsay', 'empforwages'),
(6, 'Samal Xyz', 'samal@gmail.com', '8895862873', 'de95f93a358d33f0ff9f33ad72d1217f', 'male', 'selfemp'),
(7, 'Sarika Agarwal', 'sarika@gmail.com', '9903265566', '2be9bd7a3434f7038ca27d1918de58bd', 'female', 'homemaker'),
(8, 'shrushti agarwal', 'shrushti@gmail.com', '9819895944', 'eb9279982226a42afdf2860dbdc29b45', 'female', 'student'),
(11, 'Yash Agarwal', 'yashaga@gmail.com', '8877665544', '2be9bd7a3434f7038ca27d1918de58bd', 'male', 'student'),
(90, 'alok agarwal', 'alok@gmail.com', '2222222222', 'fa246d0262c3925617b0c72bb20eeb1d', 'male', 'selfemp'),
(91, 'Rachel Green', 'rachel@gmail.com', '5656343412', 'e9510081ac30ffa83f10b68cde1cac07', 'female', 'employed for wages'),
(92, 'Janki Chandiwala', 'janki@gmail.com', '6776766862', '6437dcb6542404b6a9fe7e2dd18787ff', 'female', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `ngoo`
--

CREATE TABLE `ngoo` (
  `user_id` int(8) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `password` varchar(55) DEFAULT NULL,
  `city` varchar(55) NOT NULL,
  `role` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `descr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngoo`
--

INSERT INTO `ngoo` (`user_id`, `name`, `email_id`, `phone`, `password`, `city`, `role`, `address`, `descr`) VALUES
(1, 'Promak Foundation', 'promak@gmail.com', '7865434443', 'no_password', 'Lucknow', 'underpriviledged_children', '100, House No H, Jankipuram Garden, Jankipuram, Lucknow, Uttar Pradesh 226021', 'PROMAK FOUNDATION is a voluntary organization promoted by like-minded Educationists, Doctors, Legal experts, Technocrats, Dynamic entrepreneurs, enthusiastic students and effervescent youth to bring a perceptible change in the present social set-up. It is an Endeavour for a better tomorrow. WE expresses the essence of living and upholds the need to appreciate the other man’s point of view and to show consideration for fellow human beings. It also holds that the welfare of an individual is ultimately dependent on the welfare of the society as a whole. PROMAK FOUNDATION has a commitment &amp; sensitivity about the social responsibilities in respect of development &amp; welfare deprived class of all categories like SC’s, ST’s OBC’s General, minorities, handicapped, street children and the less privileged section to provide the diagnostics, therapeutic rehabilitation follow up service for all above mentioned groups through network or Programme &amp; activities.'),
(100, 'Bhumi Foundation', 'bhumii@gmail.com', '8786424345', 'no_password', 'Chennai', 'community development', '3/2, Karpaga Vinayagar Koil Street, Alandur, Chennai – 600016, India', 'Bhumi is one of India’s largest independent and youth volunteer non-profit organisations.Bhumi was founded on August 15, 2006 by a small group of friends with a strong passion to change society today and build a better India for tomorrow. The organisation provides youngsters a platform to serve the society and bridges the gap between the educated and the uneducated.\r\nOur volunteers educate and mentor children from orphanages, slum and village community centres across the country to give them a better future, which will benefit them as well as our country. The learning experience is mutual – our volunteers gain perspective and the experience to mould themselves into tomorrow’s leaders.'),
(200, 'angel foundation', 'angelaxf@gmail.com', '7756378133', '56789', 'Delhi', 'underprivledged children', 'Mahakali ALM Park Vallabhai Patel Rd, MMRDA Colony, DN Nagar, Delhi-400093', 'Angel Xpress believes that an involved, educated adult can lead a child to discovering his or her own true potential and every child deserves that opportunity. Since our learners come from varied backgrounds, our concept-based approach creates a value-driven educational program. While building the basics of education is our prerogative, we also introduce values of being a good citizen. Childhood improvement programs, including personality and talent development, play a large role. It helps build an emotional and intellectual maturity in students, even as they acquire language skills – helping enjoy a joyful childhood.'),
(212, 'HelpSee India', 'helpsee@gmail.com', '9988123457', '77885', 'Kolkata', 'elderly', 'P-545 LakeRd Lake House, Kalighat Near Kamala Girls\' School, next to Udipi Home, Kolkata, West Bengal 700029', 'HelpSee conducts cataract eye surgeries with medical support of credible and competent eye hospitals and organizations. Under this program 450 cataract eye surgeries have been conducted annually. This has benefited more than 2000 elderly till date. This year, it aims to conduct close to 600 cataract surgeries across the country.'),
(524, 'Ichchha Ngo', 'ichchha@gmail.com', '9876512344', '12345', 'Mumbai', 'underprivileged children', 'Flat No. 103, 1st floor, Platinum Tower 7, D.N. Nagar Tiripati C.H.S.LTD, Village Andheri, Mumbai:400053.\r\n', 'ICHCHHA translates to desire. It defines the spirit that holds the organization together. It is the desire to learn, explore and grow. It is the desire to look within and change oneself. ICHCHHA is a community filled with change makers who constantly make the choice to be, and do more. Our community consists of the students that the organization stands to serve, the youth force that executes this dream and the families that support their dreams and aspirations. We are constantly learning and making memories together'),
(565, 'Goonji Foundation', 'goonjindia@gmail.com', '9453222787', '55555', 'Lucknow', 'community_development', '2/D Ghandi mahal, Hazrat ganji,Lucknow 2399900', 'Goonj aims to build an equitable relationship of strength, sustenance and dignity between the cities and villages using the under-utilized urban material as a tool to trigger development with dignity, across the country.'),
(688, 'Lakshamy Foundation', 'lakshamy@gmail.com', '6732898211', '12121', 'Delhi', 'community_development', 'B1/27A, Ground floor, Hauz Khas, New Delhi-110016.', 'Our purpose of existence is to enhance the lives of disadvantaged children and women, and to offer a positive direction and a healthier approach towards their life. Lakshyam continues to vow a credible, honest, transparent and accountable organization that devotes itself towards a privileged future for the not so priviledged ones'),
(756, 'Samarthan Trust', 'samarthan@gmail.com', '6799812325', '45454', 'Mumbai', 'disabled', '302/B wing managalya society, Off Marol Maroshi Rd, near SBI, Andheri East, Mumbai, Maharashtra 400059', 'Samarthanam Trust for the Disabled is a National Award winning NGO established in the year 1997 by Founder Managing Trustee Mahantesh G Kivadasannavar and his schoolmate and childhood friend, Late Sugur Paramashivaiah Nagesh.Samarthanam,one of the biggest NGOs in India, works for the empowerment of persons with disabilities and the underserved through its diverse initiatives focused on providing quality education, accommodation, nutritious food, vocational training and placement based rehabilitation. It facilitates opportunities to enable persons with disabilities and the underserved to keep pace with the rest of the society.Today, Samarthanam Trust stands to be a complete solution provider by supporting education and livelihood needs of persons with disabilities and those from underprivileged backgrounds. The organization also facilitates direct livelihood opportunities to hundreds of persons with disabilities and women in distress through its Social Enterprises.'),
(800, 'We make difference', 'wmdiff@gmail.com', '9871234567', '67231', 'Pune', 'community development', '2A Guru Krupa bldg, humman road, near mahavir metro station, pune-400675', 'We provide Holistic solution, individual care and attention, age transitional and customised programmes for children combined with a willingness to do whatever it takes, for as long as it takes is the WMD way. WMD mobilizes young leaders towards ensuring equitable outcomes for children in need of care and protection. Our long term goal is to change how both system and families care for and invest in children, and we target stable middle-class adult outcomes for all the children we work with.'),
(890, 'Karuna Foundation', 'karunaa@gmail.com', '7759035157', '90900', 'Banglore', 'animals', '9 sectorA-Pranii society, Edilstien road, Banglore', 'Our vision is a world, in which animals are appreciated and treated with respect according to their needs. In our work for animal welfare we focus on countries and regions with little protection for animals. All over the world animals are neglected, mistreated, abused and killed inhumanely. We aim to improve the situation for animals in the long-term i. e. by providing veterinary care, supporting animal sanctuaries and through our educational work. Therefore, we cooperate with local partner organisations and involve the people who are directly concerned.In emergency situations such as natural disasters or acute animal threats, we provide immediate assistance'),
(9990, 'Mahshal Ngo', 'mashal@gmail.com', '6744334233', 'no_password', 'Pune', 'community development', 'Malati Cooperative Housing Society, C-5, Senapati Bapat Rd, near Sahara Hotel, Shivajinagar, Pune, Maharashtra 411016', 'MASHAL, a non- governmental organization was conceived in the year 1985, by a group of like-minded people who believe in community development through people’s participation and recognize adequate shelter and a healthy living environment with access to services as a basic human right.'),
(10000, 'Niyatee Foundation', 'niyatee@gmail.com', '9870123654', 'no_password', 'Bhubaneswar', 'community development', 'MIG M, Plot No - 11/8,\r\nPanchasakha Nagar,Dumduma,\r\nBhubaneswar - 751019', 'We are a social development organization registered under Indian Trust Act and headquartered in Bhubaneswar, Odisha. Our journey started in the year 2012 with a humble initiative of employment generation among unemployed youth from the naxal affected districts of Odisha. With indomitable spirit to do good in the society and reducing the age old malaises afflicting our society we have grown manifold intervening into many critical issues as gender equality and women empowerment, skilling of unemployed/under employed youths, rural/urban sanitation etc. Our effort has been supported under corporate social responsibility by many corporates of repute, programmes of Government of Odisha and individual donations. Particularly our organization has made significant strides in building capacity among many Scheduled Castes (SCs), Scheduled Tribes (STs) and the marginalized section of the society to create livelihood and lead a dignified life. We have adopted and aligned to the seventeen sustainabl'),
(10001, 'Trishul NGO', 'trishul@gmail.com', '9898113327', 'no_password', 'Mumbai', 'women enpowerment', 'Ground, 131/4, Trishul Women Empowerment Program, Part After Welfare High School, Aram Nagar Rd, Aram Nagar Part 1, Versova, Andheri West, Mumbai, Maharashtra 400061', 'Trishul (NGO) is a Registered Charitable Organization (Non-Profit) working towards building self-sustainable communities through skill development, education, and livelihood programs in urban slums and economically weak rural villages in India. Core programs focus on Empowering Women through skill development and Empowering Girl Child and children through education, scholarships, and mentoring. We also support Women and Children through Health and Nutrition Programs.Trishul NGO as conducts workshops and Programs on POSH; Disaster Management; Team Building and Entrepreneurship etc.Environment Conservation through Up-cycle, Tree Plantation, Cleaning Forest Trails (Swachata Abhiyan), and Afforestation Projects.\r\nOver the last two decades, we have impacted and helped improve the quality of life for more than 50,000 families in the surrounding areas via several projects like Trishul Women Empowerment Program; Trishul Learning Centre; BMC Dattakbasti Program (hygiene and sanitation, waste ma');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_requirements`
--

CREATE TABLE `ngo_requirements` (
  `user_id` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `brief` varchar(500) NOT NULL,
  `who` varchar(50) NOT NULL,
  `items` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_requirements`
--

INSERT INTO `ngo_requirements` (`user_id`, `email`, `name`, `title`, `brief`, `who`, `items`) VALUES
(1, 'ichchha@gmail.com', 'Ichchha Ngo', 'Help Children in need', 'We urge people to contribute as much as they can.', 'underpriviledged_children', ' Clothing and shoes,Food,Medicines,Hygiene essentials ,Toys,Stationery,'),
(2, 'angelaxf@gmail.com', 'angel foundation', 'Contribute towards child development', 'contribute any materials that can be used by children at our ngo', 'underpriviledged_children', ' Clothing and shoes,Food,Medicines,Hygiene essentials ,Toys,Stationery,'),
(16, 'helpsee@gmail.com', 'HelpSee India', 'Help people that have undergone surgery', 'Donate whatever little you can and help them live a better life.', 'elderly', ' Clothing and shoes,Food,Hygiene essentials ,Medicines,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ngoo`
--
ALTER TABLE `ngoo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ngo_requirements`
--
ALTER TABLE `ngo_requirements`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `ngoo`
--
ALTER TABLE `ngoo`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `ngo_requirements`
--
ALTER TABLE `ngo_requirements`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
