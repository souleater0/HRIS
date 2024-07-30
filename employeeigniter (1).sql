-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 10:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_tbl`
--

CREATE TABLE `country_tbl` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `country_tbl`
--

INSERT INTO `country_tbl` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`id`, `department_name`, `added_on`) VALUES
(7, 'MARKETING', '2024-07-23 12:21:22'),
(8, 'ECXPERIENCE', '2024-07-23 12:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `employeestatus_tbl`
--

CREATE TABLE `employeestatus_tbl` (
  `id` int(11) NOT NULL,
  `employeestatus_name` varchar(100) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeestatus_tbl`
--

INSERT INTO `employeestatus_tbl` (`id`, `employeestatus_name`, `added_on`) VALUES
(1, 'ACTIVE', '2024-07-19 13:17:53'),
(2, 'RESIGNED', '2024-07-23 20:27:00'),
(3, 'TERMINATED', '2024-07-23 20:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `leavetype_tbl`
--

CREATE TABLE `leavetype_tbl` (
  `id` int(11) NOT NULL,
  `leavetype_name` varchar(250) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leavetype_tbl`
--

INSERT INTO `leavetype_tbl` (`id`, `leavetype_name`, `added_on`) VALUES
(3, 'PATERNITY LEAVEs', '2024-07-23 12:19:08'),
(4, 'VACATION LEAVE', '2024-07-23 10:28:39'),
(5, 'SICK LEAVE', '2024-07-23 10:28:45'),
(6, 'BREAVEMENT LEAVE', '2024-07-23 10:28:58'),
(7, 'EMERGENCY LEAVE', '2024-07-23 10:29:15'),
(8, 'AUTORIZE ABSENT', '2024-07-23 10:29:27'),
(9, 'SICK LEAVE', '2024-07-23 12:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE `leave_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `leave_reason` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `applied_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`id`, `staff_id`, `leave_reason`, `description`, `status`, `leave_from`, `leave_to`, `leave_type_id`, `updated_on`, `applied_on`) VALUES
(1, 2, 'Sick', 'Not feeling well enough to join', 1, '2021-01-15', '2021-01-17', 0, '0000-00-00', '2021-01-15'),
(2, 5, 'Casual Leave', 'been working for full hours since last month, got to free my mind for few days', 1, '2021-05-28', '2021-05-29', 0, '0000-00-00', '2021-05-27'),
(3, 6, 'Day Off', 'Requesting for a day off as I need to join my pal\'s wedding!', 1, '2021-05-28', '2021-05-29', 0, '0000-00-00', '2021-05-27'),
(4, 3, 'Casual Leave', 'for vacation, rest, and family events', 2, '2021-05-30', '2021-06-06', 0, '0000-00-00', '2021-05-27'),
(5, 9, 'Quarantine', 'i need to quarantine myself for few weeks as i got some symptoms of covid-19', 1, '2021-05-28', '2021-06-11', 0, '0000-00-00', '2021-05-27'),
(6, 16, 'natatae', 'ewananana', 0, '2024-07-20', '2024-08-08', 0, '0000-00-00', '2024-07-20'),
(7, 16, 'natatae ulitttttttt', 'hehehhe', 1, '2024-07-02', '2024-01-01', 0, '0000-00-00', '2024-07-22'),
(8, 16, 'rerwer', 'dasdasdasdasdasd', 0, '2024-01-01', '2025-02-02', 0, '0000-00-00', '2024-07-23'),
(9, 16, 'l;kjlkl', 'sdsadasdas', 0, '2024-07-03', '2024-01-01', 0, '0000-00-00', '2024-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `lob_tbl`
--

CREATE TABLE `lob_tbl` (
  `id` int(11) NOT NULL,
  `lob_name` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lob_tbl`
--

INSERT INTO `lob_tbl` (`id`, `lob_name`, `added_on`) VALUES
(3, 'sample lang ito', '2024-07-22 13:18:21'),
(5, 'janitor', '2024-07-22 13:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'password0101', 1, 1),
(2, 'steven@gmail.com', '7444440001', 2, 1),
(3, 'tatiana@gmail.com', '7402222220', 2, 1),
(4, 'christine@gmail.com', '8888877777', 2, 1),
(5, 'liam@gmail.com', '7410233333', 2, 1),
(6, 'barnes@gmail.com', '1010101010', 2, 1),
(7, 'samuel@gmail.com', '7410000010', 2, 1),
(8, 'markh@gmail.com', '7070707069', 2, 1),
(9, 'angela@gmail.com', '7417417417', 2, 1),
(10, 'dsa@dadas.com', '', 2, 1),
(11, 'dsa@dadas.com', '091111111222', 2, 1),
(12, 'dsa@dadas.com', '091111111222', 2, 1),
(13, 'dsa@dadas.com', '091111111222', 2, 1),
(14, 'dsa@dadas.com', '091111111222', 2, 1),
(16, 'sample', 'sample', 2, 1),
(17, 'sample@sample.com', '091111111222', 2, 1),
(18, 'dsa@dadas.com', '091111111222', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `modeofpayroll_tbl`
--

CREATE TABLE `modeofpayroll_tbl` (
  `id` int(11) NOT NULL,
  `modeofpayroll_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modeofpayroll_tbl`
--

INSERT INTO `modeofpayroll_tbl` (`id`, `modeofpayroll_name`, `added_on`) VALUES
(1, 'gcash', '2024-07-18 13:14:39'),
(2, 'bcd', '2024-07-18 13:14:43'),
(3, '0', '2024-07-18 13:16:35'),
(4, 'bdo111', '2024-07-18 13:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `position_tbl`
--

CREATE TABLE `position_tbl` (
  `id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position_tbl`
--

INSERT INTO `position_tbl` (`id`, `position_name`, `added_on`) VALUES
(1, 'sample1ss', '2024-07-23 12:04:13'),
(2, 'CSA-RUBICON', '2024-07-27 03:28:19'),
(3, '', '2024-07-18 13:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `salary_tbl`
--

CREATE TABLE `salary_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `basic_salary` bigint(20) NOT NULL,
  `allowance` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salary_tbl`
--

INSERT INTO `salary_tbl` (`id`, `staff_id`, `basic_salary`, `allowance`, `total`, `added_by`, `updated_on`, `added_on`) VALUES
(1, 2, 14000, 0, 14000, 1, '0000-00-00', '2021-05-02 08:23:30'),
(2, 3, 9100, 300, 9400, 1, '0000-00-00', '2021-04-28 02:39:23'),
(3, 4, 4950, 0, 4950, 1, '0000-00-00', '2021-04-30 07:38:02'),
(4, 5, 6100, 250, 6350, 1, '0000-00-00', '2021-04-30 13:57:02'),
(5, 9, 4750, 190, 4940, 1, '0000-00-00', '2021-05-27 17:31:05'),
(6, 2, 15000, 0, 15000, 1, '0000-00-00', '2024-07-17 05:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `staff_name` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `emp_position_id` int(10) NOT NULL,
  `lob_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `address` text DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `pic` varchar(150) NOT NULL DEFAULT 'default-pic.jpg',
  `emp_sssid` varchar(50) NOT NULL,
  `emp_phic` varchar(50) NOT NULL,
  `emp_pagibig` varchar(50) DEFAULT NULL,
  `emp_tin` varchar(50) NOT NULL,
  `emp_bankacct` varchar(255) NOT NULL,
  `emp_modeofpayroll_id` int(11) NOT NULL,
  `emp_status_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`id`, `emp_id`, `staff_name`, `gender`, `emp_position_id`, `lob_id`, `email`, `mobile`, `dob`, `doj`, `address`, `department_id`, `pic`, `emp_sssid`, `emp_phic`, `emp_pagibig`, `emp_tin`, `emp_bankacct`, `emp_modeofpayroll_id`, `emp_status_id`, `added_by`, `updated_on`, `added_on`) VALUES
(2, '', 'Steven Askew', 'Male', 0, 0, 'steven@gmail.com', 7444440001, '1990-02-18', '2020-11-27', '3721  Hill Croft Farm Road', 1, 'smportrait.jpg', '', '', '', '', '', 0, 0, 0, '0000-00-00', '2021-05-27 15:37:03'),
(3, '', 'Tatiana Breit', 'Female', 0, 0, 'tatiana@gmail.com', 7402222220, '1994-10-14', '2021-02-21', '3397  Happy Hollow Road', 2, 'prtwm.jpg', '', '', '', '', '', 0, 0, 0, '0000-00-00', '2021-05-27 15:37:16'),
(4, '', 'Christine Moore', 'Female', 0, 0, 'christine@gmail.com', 8888877777, '1994-08-01', '2020-01-15', '4047  Timbercrest Road', 3, 'christen-freeimg.jpg', '', '', '', '', '', 0, 0, 0, '0000-00-00', '2021-05-27 15:31:20'),
(5, '', 'Liam Moore', 'Male', 0, 0, 'liam@gmail.com', 7410233333, '1994-12-02', '2021-04-04', '3474  Viking Drive', 4, '7002489_preview.jpg', '', '', '', '', '', 0, 0, 1, '0000-00-00', '2021-05-27 13:55:22'),
(6, '', 'George J Barnes', 'Male', 0, 0, 'barnes@gmail.com', 1010101010, '1988-02-03', '2021-01-13', '3079  Chardonnay Drive', 2, 'skport.jpg', '', '', '', '', '', 0, 0, 1, '0000-00-00', '2021-05-27 15:28:48'),
(7, '', 'Samuel Huntsman', 'Male', 0, 0, 'samuel@gmail.com', 7410000010, '1991-12-28', '2021-04-25', '2315  Cherry Tree Drive', 5, 'dportrait.jpg', '', '', '', '', '', 0, 0, 1, '0000-00-00', '2021-05-27 16:52:18'),
(8, '', 'Mark Heiden', 'Male', 0, 0, 'markh@gmail.com', 7070707069, '1990-02-12', '2021-02-04', '2190  Laurel Lane', 2, 'pauptr.jpg', '', '', '', '', '', 0, 0, 1, '0000-00-00', '2021-05-27 16:53:57'),
(9, '', 'Angela Bridges', 'Female', 0, 0, 'angela@gmail.com', 7417417417, '1992-02-11', '2021-03-05', '3538 Melville Street', 6, 'sm-freeimg.jpg', '', '', '', '', '', 0, 0, 1, '0000-00-00', '2021-05-27 17:29:36'),
(10, '', 'sampleee', 'Male', 0, 0, 'dsa@dadas.com', 0, '1999-01-01', '2024-01-01', 'dasdasdasdasdasdasddsadssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1, 'default-pic.jpg', '', '', '', '', '', 0, 0, 1, '0000-00-00', '2024-07-19 12:19:22'),
(16, '23021504', 'Abindan Marlouxss', 'Male', 1, 0, 'sample@sample.com', 910101, '1999-01-01', '2021-01-01', 'dasdasdasdasdasdasdas', 6, 'depositphotos_151307636-stock-illustration-vape-e-liquid-e-juice-transformed5.jpeg', '0010101010', '55454242', '3333333', '0111101010', '101047575757', 2, 1, 0, '0000-00-00', '2024-07-20 12:12:38'),
(17, '0101111', 'sampleee', 'Male', 1, 5, 'sample@sample.com', 91111111222, '2000-01-01', '2002-01-01', 'tedfdsfdsfdsfdsfdsf', 3, 'depositphotos_151307636-stock-illustration-vape-e-liquid-e-juice-transformed6.jpeg', '0010101010', '55454242', '', '0111101010', '101047575757', 3, 1, 0, '0000-00-00', '2024-07-22 13:54:42'),
(18, '230629446', 'sampleee', 'Female', 1, 3, 'dsa@dadas.com', 91111111222, '2021-01-01', '2024-01-01', 'DASDASDASDASD', 7, 'viber_image_2024-07-13_11-24-41-357.jpg', '0010101010', '55454242', '3333333', '0111101010', '101047575757', 1, 2, 0, '0000-00-00', '2024-07-27 04:09:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_tbl`
--
ALTER TABLE `country_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeestatus_tbl`
--
ALTER TABLE `employeestatus_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavetype_tbl`
--
ALTER TABLE `leavetype_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lob_tbl`
--
ALTER TABLE `lob_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modeofpayroll_tbl`
--
ALTER TABLE `modeofpayroll_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position_tbl`
--
ALTER TABLE `position_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_tbl`
--
ALTER TABLE `country_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employeestatus_tbl`
--
ALTER TABLE `employeestatus_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leavetype_tbl`
--
ALTER TABLE `leavetype_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lob_tbl`
--
ALTER TABLE `lob_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `modeofpayroll_tbl`
--
ALTER TABLE `modeofpayroll_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `position_tbl`
--
ALTER TABLE `position_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
