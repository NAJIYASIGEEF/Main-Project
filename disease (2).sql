-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 06:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `disease`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `userid` int(20) NOT NULL,
  `date_time` varchar(20) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `reply_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `userid`, `date_time`, `doc_id`, `reply`, `reply_date`) VALUES
(1, 'hai doctor', 1, '2023-05-20 06:05:40', 2, 'hai jerin', '2023-05-20 06:05:53'),
(2, 'need help', 1, '2023-05-20 06:05:37', 1, '', ''),
(3, 'good evening doctor\r\n', 1, '2023-05-20 15:05:18', 2, '', ''),
(4, 'hai liya doctor', 1, '2023-05-21 12:05:50', 7, '', ''),
(5, 'hai liya doctor', 1, '2023-05-21 12:05:32', 7, '', ''),
(6, 'hello doctor', 1, '2023-05-21 14:05:40', 6, '', ''),
(7, 'hi', 1, '2023-05-21 16:05:24', 7, 'how can help you', '2023-05-21 16:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease` varchar(100) NOT NULL,
  `doctors` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `precaution` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `disease`, `doctors`, `description`, `precaution`) VALUES
(2, 'Osteoarthristis', '2', '', ''),
(3, 'Alcoholic hepatitis', '', '', ''),
(4, 'Drug Reaction', '', '', ''),
(5, 'Common Cold', '', '', ''),
(6, 'Typhoid', '', '', ''),
(7, '(vertigo) Paroymsal  Positional Vertigo', '', '', ''),
(8, 'Migraine', '', '', ''),
(9, 'Tuberculosis', '', '', ''),
(10, 'Hyperthyroidism', '', '', ''),
(11, 'Dengue', '5', 'Dengue (break-bone fever) is a viral infection that spreads from mosquitoes to people. It is more common in tropical and subtropical climates. Most people who get dengue wont have symptoms. But for those that do, the most common symptoms are high fever, headache, body aches, nausea and rash.', 'Prevent mosquito habitats,Keep your doors and windows closed as much as possible, or invest in insect screens,Protect your skin from mosquito bites,Avoid visiting areas prone to mosquitoes,Be vigilant'),
(12, 'Dimorphic hemmorhoids(piles)', '', '', ''),
(13, 'Malaria', '', '', ''),
(14, 'Hepatitis E', '', '', ''),
(15, 'Psoriasis', '4', '', ''),
(16, 'hepatitis A', '', '', ''),
(17, 'Jaundice', '', '', ''),
(18, 'Diabetes', '', '', ''),
(19, 'Cervical spondylosis', '', '', ''),
(20, 'Hepatitis C', '', '', ''),
(21, 'Peptic ulcer disease', '', '', ''),
(22, 'Chicken pox', '', '', ''),
(23, 'Chronic cholestasis', '', '', ''),
(24, 'Pneumonia', '', '', ''),
(25, 'Hypertension', '', '', ''),
(26, 'Varicose veins', '', '', ''),
(27, 'Hypoglycemia', '', '', ''),
(28, 'Arthritis', '', '', ''),
(29, 'Bronchial Asthma', '', '', ''),
(30, 'Hypothyroidism', '', '', ''),
(31, 'Hepatitis B', '', '', ''),
(32, 'Hepatitis D', '', '', ''),
(33, 'Impetigo', '', '', ''),
(34, 'GERD', '', '', ''),
(35, 'Paralysis (brain hemorrhage)', '', '', ''),
(36, 'Heart attack', '', '', ''),
(37, 'Gastroenteritis', '', '', ''),
(38, 'Acne', '', '', ''),
(39, 'Urinary tract infection', '', '', ''),
(40, 'AIDS', '', '', ''),
(41, 'Fungal infection', '', '', ''),
(42, 'Allergy', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `place`, `phone`, `specialization`, `experience`, `password`, `photo`) VALUES
(1, 'Laura Norda', 'laura@gmail.com', 'kochi', '7355612288', '6', '4', '123', '2023-05-21-11-04-26team1.jpg'),
(2, 'Chris', 'chris@gmail.com', 'kochi', '8745298724', '6', '2', '123', '2023-05-21-11-05-10team-1.jpg'),
(3, 'Joel', 'joel@gmail.com', 'kollam', '7355612258', '4', '5', '123', '2023-05-21-11-05-43team2.jpg'),
(4, 'Don', 'don@gmail.com', 'London', '7355612258', '4', '4', '123', '2023-05-21-11-06-14team4.jpg'),
(5, 'Monica', 'monica@gmail.com', 'London', '7355612258', '11', '10', '123', '2023-05-21-11-07-06team3.jpg'),
(6, 'jesbin', 'jes@gmail.com', 'kochi', '8745298724', '5', '7', '123', '2023-05-21-11-08-09team-3.jpg'),
(7, 'Liya', 'liya@gmail.com', 'kochi', '7355612280', '5', '4', '123', '2023-05-21-11-09-15team-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1603221127, 1165073805, 'hai sir'),
(2, 1603221127, 1165073805, 'nthada jesbine'),
(3, 1165073805, 1603221127, 'onula rosha'),
(4, 1603221127, 1165073805, 'nee ennu varum jesbine'),
(5, 1165073805, 1603221127, 'njn sunday varam');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `result`, `user_id`, `date`) VALUES
(1, '', 1, '2023-05-19 01:00:50'),
(2, 'GERD\n', 1, '2023-05-19 01:01:28'),
(3, '', 1, '2023-05-19 01:02:26'),
(4, 'Peptic ulcer diseae\n', 1, '2023-05-19 07:23:17'),
(5, '', 1, '2023-05-19 07:23:30'),
(6, 'GERD\n', 1, '2023-05-19 07:40:40'),
(7, 'Tuberculosis\n', 1, '2023-05-19 07:40:55'),
(8, 'Drug Reaction\n', 1, '2023-05-19 07:41:48'),
(9, 'Common Cold\n', 1, '2023-05-19 08:05:05'),
(10, 'Fungal infection\n', 1, '2023-05-19 10:52:23'),
(11, 'AIDS\n', 1, '2023-05-19 10:53:31'),
(12, 'Migraine\n', 1, '2023-05-19 10:54:17'),
(13, 'Fungal infection\n', 1, '2023-05-20 07:20:22'),
(14, 'GERD\n', 1, '2023-05-20 07:21:18'),
(15, 'Drug Reaction\n', 1, '2023-05-20 07:23:28'),
(16, 'Dengue\n', 1, '2023-05-21 12:10:08'),
(17, 'Dengue\n', 1, '2023-05-21 01:20:38'),
(18, 'Dengue\n', 1, '2023-05-21 02:37:20'),
(19, 'Dengue\n', 1, '2023-05-21 02:39:20'),
(20, 'Dengue\n', 1, '2023-05-21 02:49:33'),
(21, 'Dengue\n', 1, '2023-05-21 02:51:10'),
(22, 'Dengue\n', 1, '2023-05-21 02:51:45'),
(23, 'Dengue\n', 1, '2023-05-21 02:52:21'),
(24, 'Dengue\n', 1, '2023-05-21 02:53:07'),
(25, 'Dengue\n', 1, '2023-05-21 02:56:17'),
(26, 'Dengue\n', 1, '2023-05-21 02:57:06'),
(27, 'Dengue\n', 1, '2023-05-21 02:57:51'),
(28, 'Dengue\n', 1, '2023-05-21 02:58:02'),
(29, 'Dengue\n', 1, '2023-05-21 03:05:56'),
(30, 'Dengue\n', 1, '2023-05-21 03:12:12'),
(31, 'Dengue\n', 1, '2023-05-21 03:13:02'),
(32, 'Dengue\n', 1, '2023-05-21 03:13:51'),
(33, 'Dengue\n', 1, '2023-05-21 03:14:12'),
(34, 'Dengue\n', 1, '2023-05-21 03:14:25'),
(35, 'Dengue\n', 1, '2023-05-21 03:15:00'),
(36, 'Dengue\n', 1, '2023-05-21 03:16:54'),
(37, 'Dengue\n', 1, '2023-05-21 03:17:28'),
(38, 'Dengue\n', 1, '2023-05-21 03:17:33'),
(39, 'Dengue\n', 1, '2023-05-21 03:19:11'),
(40, 'Dengue\n', 1, '2023-05-21 03:19:40'),
(41, 'Dengue\n', 1, '2023-05-21 03:20:35'),
(42, 'Dengue\n', 1, '2023-05-21 03:20:58'),
(43, 'Dengue\n', 1, '2023-05-21 04:04:29'),
(44, 'Dengue\n', 1, '2023-05-21 04:04:59'),
(45, 'Dengue\n', 1, '2023-05-21 04:05:32'),
(46, 'Dengue\n', 1, '2023-05-21 05:36:09'),
(47, 'Dengue\n', 1, '2023-05-21 07:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE IF NOT EXISTS `specialization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specialization` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `specialization`) VALUES
(2, 'Orthopedic Specialist'),
(3, 'Gastroenterologist'),
(4, 'Dermatologist'),
(5, 'General physician'),
(6, 'Neurologist'),
(7, 'Endocrinologist'),
(8, 'Infectious disease doctor'),
(9, 'Hepatologist'),
(10, 'Pulmonologist'),
(11, 'cardiologist'),
(12, 'Vascular surgeon'),
(13, 'Rheumatologist'),
(14, 'Neurosurgeon'),
(15, 'urologist'),
(16, 'Internist'),
(17, 'Allergist');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Symptom_1` varchar(100) DEFAULT NULL,
  `Symptom_2` varchar(100) DEFAULT NULL,
  `Symptom_3` varchar(100) DEFAULT NULL,
  `Symptom_4` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `Symptom_1`, `Symptom_2`, `Symptom_3`, `Symptom_4`) VALUES
(2, 'itching', 'skin rash', 'nodal skin eruptions', 'dischromic  patches'),
(3, 'continuous sneezing', 'shivering', 'chills', 'watering from eyes'),
(4, 'stomach pain', 'acidity', 'ulcers on tongue', 'vomiting'),
(5, 'acidity', 'ulcers on tongue', 'vomiting', 'cough'),
(6, 'vomiting', 'vomiting', 'yellowish skin', 'nausea'),
(7, 'skin rash', 'yellowish skin', 'nausea', 'loss of appetite'),
(8, 'indigestion', 'stomach pain', 'stomach pain', 'burning micturition'),
(9, 'muscle wasting', 'loss of appetite', 'burning micturition', 'spotting  urination'),
(10, 'fatigue', 'indigestion', 'abdominal pain', 'passage of gases'),
(11, 'weight loss', 'patches in throat', 'loss of appetite', 'abdominal pain'),
(12, 'cough', 'weight loss', 'high fever', 'extra marital contacts'),
(13, 'headache', 'restlessness', 'restlessness', 'lethargy'),
(14, 'chest pain', 'sunken eyes', 'lethargy', 'irregular sugar level'),
(15, 'back pain', 'cough', 'dehydration', 'diarrhoea'),
(16, 'weakness in limbs', 'high fever', 'breathlessness', 'breathlessness'),
(17, 'chills', 'chest pain', 'dizziness', 'family history'),
(18, 'joint pain', 'dizziness', 'loss of balance', 'loss of balance'),
(19, 'yellowish skin', 'headache', 'headache', 'lack of concentration'),
(20, 'constipation', 'weakness in limbs', 'blurred and distorted vision', 'blurred and distorted vision'),
(21, 'pain during bowel movements', 'neck pain', 'neck pain', 'excessive hunger'),
(22, 'cramps', 'fatigue', 'weakness of one body side', 'dizziness'),
(23, 'weight gain', 'chills', 'fatigue', 'altered sensorium'),
(24, 'mood swings', 'joint pain', 'weight loss', 'weight loss'),
(25, 'neck pain', 'lethargy', 'sweating', 'high fever'),
(26, 'muscle weakness', 'nausea', 'joint pain', 'sweating'),
(27, 'stiff neck', 'abdominal pain', 'dark urine', 'headache'),
(28, 'burning micturition', 'pain during bowel movements', 'swelling of stomach', 'fatigue'),
(29, 'high fever', 'pain in anal region', 'cough', 'dark urine'),
(30, '', 'breathlessness', 'pain in anal region', 'yellowish skin'),
(31, '', 'cramps', 'bloody stool', 'yellowing of eyes'),
(32, '', 'bruising', 'bruising', 'swelling of stomach'),
(33, '', 'weight gain', 'obesity', 'distention of abdomen'),
(34, '', 'cold hands and feets', 'cold hands and feets', 'bloody stool'),
(35, '', 'mood swings', 'mood swings', 'irritation in anus'),
(36, '', 'anxiety', 'anxiety', 'chest pain'),
(37, '', 'knee pain', 'knee pain', 'obesity'),
(38, '', 'stiff neck', 'hip joint pain', 'swollen legs'),
(39, '', 'swelling joints', 'swelling joints', 'mood swings'),
(40, '', 'pus filled pimples', 'movement stiffness', 'restlessness'),
(41, '', 'bladder discomfort', 'spinning movements', 'hip joint pain'),
(42, '', 'skin peeling', 'blackheads', 'swelling joints');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `place`) VALUES
(1, 'jeirn', 'j@gmail.com', '9865986589', '123', 'Pathanamthitta');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
