-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 05:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medassure`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_master`
--

CREATE TABLE `tbl_country_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_country_master`
--

INSERT INTO `tbl_country_master` (`id`, `name`, `short_name`, `code`, `status`, `created_by`, `created_on`) VALUES
(1, 'Afghanistan', 'AF', '+93', 1, 1, 1743564794),
(2, 'Albania', 'AL', '+355', 1, 1, 1743564794),
(3, 'Algeria', 'DZ', '+213', 1, 1, 1743564794),
(4, 'American Samoa', 'AS', '+1 684', 1, 1, 1743564794),
(5, 'Andorra', 'AD', '+376', 1, 1, 1743564794),
(6, 'Angola', 'AO', '+244', 1, 1, 1743564794),
(7, 'Anguilla', 'AI', '+1 264', 1, 1, 1743564794),
(8, 'Antarctica', 'AQ', '+672', 1, 1, 1743564794),
(9, 'Antigua and Barbuda', 'AG', '+1 268', 1, 1, 1743564794),
(10, 'Argentina', 'AR', '+54', 1, 1, 1743564794),
(11, 'Armenia', 'AM', '+374', 1, 1, 1743564794),
(12, 'Aruba', 'AW', '+297', 1, 1, 1743564794),
(13, 'Australia', 'AU', '+61', 1, 1, 1743564794),
(14, 'Austria', 'AT', '+43', 1, 1, 1743564794),
(15, 'Azerbaijan', 'AZ', '+994', 1, 1, 1743564794),
(16, 'Bahamas', 'BS', '+1 242', 1, 1, 1743564794),
(17, 'Bahrain', 'BH', '+973', 1, 1, 1743564794),
(18, 'Bangladesh', 'BD', '+880', 1, 1, 1743564794),
(19, 'Barbados', 'BB', '+1 246', 1, 1, 1743564794),
(20, 'Belarus', 'BY', '+375', 1, 1, 1743564794),
(21, 'Belgium', 'BE', '+32', 1, 1, 1743564794),
(22, 'Belize', 'BZ', '+501', 1, 1, 1743564794),
(23, 'Benin', 'BJ', '+229', 1, 1, 1743564794),
(24, 'Bermuda', 'BM', '+1 441', 1, 1, 1743564794),
(25, 'Bhutan', 'BT', '+975', 1, 1, 1743564794),
(26, 'Bolivia', 'BO', '+591', 1, 1, 1743564794),
(27, 'Bosnia and Herzegovina', 'BA', '+387', 1, 1, 1743564794),
(28, 'Botswana', 'BW', '+267', 1, 1, 1743564794),
(29, 'Brazil', 'BR', '+55', 1, 1, 1743564794),
(30, 'British Indian Ocean Territory', 'IO', '+246', 1, 1, 1743564794),
(31, 'British Virgin Islands', 'VG', '+1 284', 1, 1, 1743564794),
(32, 'Brunei', 'BN', '+673', 1, 1, 1743564794),
(33, 'Bulgaria', 'BG', '+359', 1, 1, 1743564794),
(34, 'Burkina Faso', 'BF', '+226', 1, 1, 1743564794),
(35, 'Burundi', 'BI', '+257', 1, 1, 1743564794),
(36, 'Cambodia', 'KH', '+855', 1, 1, 1743564794),
(37, 'Cameroon', 'CM', '+237', 1, 1, 1743564794),
(38, 'Canada', 'CA', '+1', 1, 1, 1743564794),
(39, 'Cape Verde', 'CV', '+238', 1, 1, 1743564794),
(40, 'Cayman Islands', 'KY', '+1 345', 1, 1, 1743564794),
(41, 'Central African Republic', 'CF', '+236', 1, 1, 1743564794),
(42, 'Chad', 'TD', '+235', 1, 1, 1743564794),
(43, 'Chile', 'CL', '+56', 1, 1, 1743564794),
(44, 'China', 'CN', '+86', 1, 1, 1743564794),
(45, 'Christmas Island', 'CX', '+61', 1, 1, 1743564794),
(46, 'Cocos Islands', 'CC', '+61', 1, 1, 1743564794),
(47, 'Colombia', 'CO', '+57', 1, 1, 1743564794),
(48, 'Comoros', 'KM', '+269', 1, 1, 1743564794),
(49, 'Cook Islands', 'CK', '+682', 1, 1, 1743564794),
(50, 'Costa Rica', 'CR', '+506', 1, 1, 1743564794),
(51, 'Croatia', 'HR', '+385', 1, 1, 1743564794),
(52, 'Cuba', 'CU', '+53', 1, 1, 1743564794),
(53, 'Curacao', 'CW', '+599', 1, 1, 1743564794),
(54, 'Cyprus', 'CY', '+357', 1, 1, 1743564794),
(55, 'Czech Republic', 'CZ', '+420', 1, 1, 1743564794),
(56, 'Democratic Republic of the Congo', 'CD', '+243', 1, 1, 1743564794),
(57, 'Denmark', 'DK', '+45', 1, 1, 1743564794),
(58, 'Djibouti', 'DJ', '+253', 1, 1, 1743564794),
(59, 'Dominica', 'DM', '+1 767', 1, 1, 1743564794),
(60, 'Dominican Republic', 'DO', '+1 809', 1, 1, 1743564794),
(61, 'East Timor', 'TL', '+670', 1, 1, 1743564794),
(62, 'Ecuador', 'EC', '+593', 1, 1, 1743564794),
(63, 'Egypt', 'EG', '+20', 1, 1, 1743564794),
(64, 'El Salvador', 'SV', '+503', 1, 1, 1743564794),
(65, 'Equatorial Guinea', 'GQ', '+240', 1, 1, 1743564794),
(66, 'Eritrea', 'ER', '+291', 1, 1, 1743564794),
(67, 'Estonia', 'EE', '+372', 1, 1, 1743564794),
(68, 'Eswatini', 'SZ', '+268', 1, 1, 1743564794),
(69, 'Ethiopia', 'ET', '+251', 1, 1, 1743564794),
(70, 'Falkland Islands', 'FK', '+500', 1, 1, 1743564794),
(71, 'Faroe Islands', 'FO', '+298', 1, 1, 1743564794),
(72, 'Fiji', 'FJ', '+679', 1, 1, 1743564794),
(73, 'Finland', 'FI', '+358', 1, 1, 1743564794),
(74, 'France', 'FR', '+33', 1, 1, 1743564794),
(75, 'French Polynesia', 'PF', '+689', 1, 1, 1743564794),
(76, 'Gabon', 'GA', '+241', 1, 1, 1743564794),
(77, 'Gambia', 'GM', '+220', 1, 1, 1743564794),
(78, 'Georgia', 'GE', '+995', 1, 1, 1743564794),
(79, 'Germany', 'DE', '+49', 1, 1, 1743564794),
(80, 'Ghana', 'GH', '+233', 1, 1, 1743564794),
(81, 'Gibraltar', 'GI', '+350', 1, 1, 1743564794),
(82, 'Greece', 'GR', '+30', 1, 1, 1743564794),
(83, 'Greenland', 'GL', '+299', 1, 1, 1743564794),
(84, 'Grenada', 'GD', '+1 473', 1, 1, 1743564794),
(85, 'Guam', 'GU', '+1 671', 1, 1, 1743564794),
(86, 'Guatemala', 'GT', '+502', 1, 1, 1743564794),
(87, 'Guernsey', 'GG', '+44', 1, 1, 1743564794),
(88, 'Guinea', 'GN', '+224', 1, 1, 1743564794),
(89, 'Guinea-Bissau', 'GW', '+245', 1, 1, 1743564794),
(90, 'Guyana', 'GY', '+592', 1, 1, 1743564794),
(91, 'Haiti', 'HT', '+509', 1, 1, 1743564794),
(92, 'Honduras', 'HN', '+504', 1, 1, 1743564794),
(93, 'Hong Kong', 'HK', '+852', 1, 1, 1743564794),
(94, 'Hungary', 'HU', '+36', 1, 1, 1743564794),
(95, 'Iceland', 'IS', '+354', 1, 1, 1743564794),
(96, 'India', 'IN', '+91', 1, 1, 1743564794),
(97, 'Indonesia', 'ID', '+62', 1, 1, 1743564794),
(98, 'Iran', 'IR', '+98', 1, 1, 1743564794),
(99, 'Iraq', 'IQ', '+964', 1, 1, 1743564794),
(100, 'Ireland', 'IE', '+353', 1, 1, 1743564794),
(101, 'Isle of Man', 'IM', '+44', 1, 1, 1743564794),
(102, 'Israel', 'IL', '+972', 1, 1, 1743564794),
(103, 'Italy', 'IT', '+39', 1, 1, 1743564794),
(104, 'Ivory Coast', 'CI', '+225', 1, 1, 1743564794),
(105, 'Jamaica', 'JM', '+1 876', 1, 1, 1743564794),
(106, 'Japan', 'JP', '+81', 1, 1, 1743564794),
(107, 'Jersey', 'JE', '+44', 1, 1, 1743564794),
(108, 'Jordan', 'JO', '+962', 1, 1, 1743564794),
(109, 'Kazakhstan', 'KZ', '+7', 1, 1, 1743564794),
(110, 'Kenya', 'KE', '+254', 1, 1, 1743564794),
(111, 'Kiribati', 'KI', '+686', 1, 1, 1743564794),
(112, 'Kosovo', 'XK', '+383', 1, 1, 1743564794),
(113, 'Kuwait', 'KW', '+965', 1, 1, 1743564794),
(114, 'Kyrgyzstan', 'KG', '+996', 1, 1, 1743564794),
(115, 'Laos', 'LA', '+856', 1, 1, 1743564794),
(116, 'Latvia', 'LV', '+371', 1, 1, 1743564794),
(117, 'Lebanon', 'LB', '+961', 1, 1, 1743564794),
(118, 'Lesotho', 'LS', '+266', 1, 1, 1743564794),
(119, 'Liberia', 'LR', '+231', 1, 1, 1743564794),
(120, 'Libya', 'LY', '+218', 1, 1, 1743564794),
(121, 'Liechtenstein', 'LI', '+423', 1, 1, 1743564794),
(122, 'Lithuania', 'LT', '+370', 1, 1, 1743564794),
(123, 'Luxembourg', 'LU', '+352', 1, 1, 1743564794),
(124, 'Macau', 'MO', '+853', 1, 1, 1743564794),
(125, 'Madagascar', 'MG', '+261', 1, 1, 1743564794),
(126, 'Malawi', 'MW', '+265', 1, 1, 1743564794),
(127, 'Malaysia', 'MY', '+60', 1, 1, 1743564794),
(128, 'Maldives', 'MV', '+960', 1, 1, 1743564794),
(129, 'Mali', 'ML', '+223', 1, 1, 1743564794),
(130, 'Malta', 'MT', '+356', 1, 1, 1743564794),
(131, 'Marshall Islands', 'MH', '+692', 1, 1, 1743564794),
(132, 'Mauritania', 'MR', '+222', 1, 1, 1743564794),
(133, 'Mauritius', 'MU', '+230', 1, 1, 1743564794),
(134, 'Mayotte', 'YT', '+262', 1, 1, 1743564794),
(135, 'Mexico', 'MX', '+52', 1, 1, 1743564794),
(136, 'Micronesia', 'FM', '+691', 1, 1, 1743564794),
(137, 'Moldova', 'MD', '+373', 1, 1, 1743564794),
(138, 'Monaco', 'MC', '+377', 1, 1, 1743564794),
(139, 'Mongolia', 'MN', '+976', 1, 1, 1743564794),
(140, 'Montenegro', 'ME', '+382', 1, 1, 1743564794),
(141, 'Montserrat', 'MS', '+1 664', 1, 1, 1743564794),
(142, 'Morocco', 'MA', '+212', 1, 1, 1743564794),
(143, 'Mozambique', 'MZ', '+258', 1, 1, 1743564794),
(144, 'Myanmar', 'MM', '+95', 1, 1, 1743564794),
(145, 'Namibia', 'NA', '+264', 1, 1, 1743564794),
(146, 'Nauru', 'NR', '+674', 1, 1, 1743564794),
(147, 'Nepal', 'NP', '+977', 1, 1, 1743564794),
(148, 'Netherlands', 'NL', '+31', 1, 1, 1743564794),
(149, 'New Caledonia', 'NC', '+687', 1, 1, 1743564794),
(150, 'New Zealand', 'NZ', '+64', 1, 1, 1743564794),
(151, 'Nicaragua', 'NI', '+505', 1, 1, 1743564794),
(152, 'Niger', 'NE', '+227', 1, 1, 1743564794),
(153, 'Nigeria', 'NG', '+234', 1, 1, 1743564794),
(154, 'Niue', 'NU', '+683', 1, 1, 1743564794),
(155, 'North Korea', 'KP', '+850', 1, 1, 1743564794),
(156, 'North Macedonia', 'MK', '+389', 1, 1, 1743564794),
(157, 'Northern Mariana Islands', 'MP', '+1 670', 1, 1, 1743564794),
(158, 'Norway', 'NO', '+47', 1, 1, 1743564794),
(159, 'Oman', 'OM', '+968', 1, 1, 1743564794),
(160, 'Pakistan', 'PK', '+92', 1, 1, 1743564794),
(161, 'Palau', 'PW', '+680', 1, 1, 1743564794),
(162, 'Palestine', 'PS', '+970', 1, 1, 1743564794),
(163, 'Panama', 'PA', '+507', 1, 1, 1743564794),
(164, 'Papua New Guinea', 'PG', '+675', 1, 1, 1743564794),
(165, 'Paraguay', 'PY', '+595', 1, 1, 1743564794),
(166, 'Peru', 'PE', '+51', 1, 1, 1743564794),
(167, 'Philippines', 'PH', '+63', 1, 1, 1743564794),
(168, 'Pitcairn', 'PN', '+64', 1, 1, 1743564794),
(169, 'Poland', 'PL', '+48', 1, 1, 1743564794),
(170, 'Portugal', 'PT', '+351', 1, 1, 1743564794),
(171, 'Puerto Rico', 'PR', '+1 787', 1, 1, 1743564794),
(172, 'Qatar', 'QA', '+974', 1, 1, 1743564794),
(173, 'Republic of the Congo', 'CG', '+242', 1, 1, 1743564794),
(174, 'Reunion', 'RE', '+262', 1, 1, 1743564794),
(175, 'Romania', 'RO', '+40', 1, 1, 1743564794),
(176, 'Russia', 'RU', '+7', 1, 1, 1743564794),
(177, 'Rwanda', 'RW', '+250', 1, 1, 1743564794),
(178, 'Saint Barthelemy', 'BL', '+590', 1, 1, 1743564794),
(179, 'Saint Helena', 'SH', '+290', 1, 1, 1743564794),
(180, 'Saint Kitts and Nevis', 'KN', '+1 869', 1, 1, 1743564794),
(181, 'Saint Lucia', 'LC', '+1 758', 1, 1, 1743564794),
(182, 'Saint Martin', 'MF', '+590', 1, 1, 1743564794),
(183, 'Saint Pierre and Miquelon', 'PM', '+508', 1, 1, 1743564794),
(184, 'Saint Vincent and the Grenadines', 'VC', '+1 784', 1, 1, 1743564794),
(185, 'Samoa', 'WS', '+685', 1, 1, 1743564794),
(186, 'San Marino', 'SM', '+378', 1, 1, 1743564794),
(187, 'Sao Tome and Principe', 'ST', '+239', 1, 1, 1743564794),
(188, 'Saudi Arabia', 'SA', '+966', 1, 1, 1743564794),
(189, 'Senegal', 'SN', '+221', 1, 1, 1743564794),
(190, 'Serbia', 'RS', '+381', 1, 1, 1743564794),
(191, 'Seychelles', 'SC', '+248', 1, 1, 1743564794),
(192, 'Sierra Leone', 'SL', '+232', 1, 1, 1743564794),
(193, 'Singapore', 'SG', '+65', 1, 1, 1743564794),
(194, 'Sint Maarten', 'SX', '+1 721', 1, 1, 1743564794),
(195, 'Slovakia', 'SK', '+421', 1, 1, 1743564794),
(196, 'Slovenia', 'SI', '+386', 1, 1, 1743564794),
(197, 'Solomon Islands', 'SB', '+677', 1, 1, 1743564794),
(198, 'Somalia', 'SO', '+252', 1, 1, 1743564794),
(199, 'South Africa', 'ZA', '+27', 1, 1, 1743564794),
(200, 'South Korea', 'KR', '+82', 1, 1, 1743564794),
(201, 'South Sudan', 'SS', '+211', 1, 1, 1743564794),
(202, 'Spain', 'ES', '+34', 1, 1, 1743564794),
(203, 'Sri Lanka', 'LK', '+94', 1, 1, 1743564794),
(204, 'Sudan', 'SD', '+249', 1, 1, 1743564794),
(205, 'Suriname', 'SR', '+597', 1, 1, 1743564794),
(206, 'Svalbard and Jan Mayen', 'SJ', '+47', 1, 1, 1743564794),
(207, 'Sweden', 'SE', '+46', 1, 1, 1743564794),
(208, 'Switzerland', 'CH', '+41', 1, 1, 1743564794),
(209, 'Syria', 'SY', '+963', 1, 1, 1743564794),
(210, 'Taiwan', 'TW', '+886', 1, 1, 1743564794),
(211, 'Tajikistan', 'TJ', '+992', 1, 1, 1743564794),
(212, 'Tanzania', 'TZ', '+255', 1, 1, 1743564794),
(213, 'Thailand', 'TH', '+66', 1, 1, 1743564794),
(214, 'Togo', 'TG', '+228', 1, 1, 1743564794),
(215, 'Tokelau', 'TK', '+690', 1, 1, 1743564794),
(216, 'Tonga', 'TO', '+676', 1, 1, 1743564794),
(217, 'Trinidad and Tobago', 'TT', '+1 868', 1, 1, 1743564794),
(218, 'Tunisia', 'TN', '+216', 1, 1, 1743564794),
(219, 'Turkey', 'TR', '+90', 1, 1, 1743564794),
(220, 'Turkmenistan', 'TM', '+993', 1, 1, 1743564794),
(221, 'Turks and Caicos Islands', 'TC', '+1 649', 1, 1, 1743564794),
(222, 'Tuvalu', 'TV', '+688', 1, 1, 1743564794),
(223, 'U.S. Virgin Islands', 'VI', '+1 340', 1, 1, 1743564794),
(224, 'Uganda', 'UG', '+256', 1, 1, 1743564794),
(225, 'Ukraine', 'UA', '+380', 1, 1, 1743564794),
(226, 'United Arab Emirates', 'AE', '+971', 1, 1, 1743564794),
(227, 'United Kingdom', 'GB', '+44', 1, 1, 1743564794),
(228, 'United States', 'US', '+1', 1, 1, 1743564794),
(229, 'Uruguay', 'UY', '+598', 1, 1, 1743564794),
(230, 'Uzbekistan', 'UZ', '+998', 1, 1, 1743564794),
(231, 'Vanuatu', 'VU', '+678', 1, 1, 1743564794),
(232, 'Vatican', 'VA', '+379', 1, 1, 1743564794),
(233, 'Venezuela', 'VE', '+58', 1, 1, 1743564794),
(234, 'Vietnam', 'VN', '+84', 1, 1, 1743564794),
(235, 'Wallis and Futuna', 'WF', '+681', 1, 1, 1743564794),
(236, 'Western Sahara', 'EH', '+212', 1, 1, 1743564794),
(237, 'Yemen', 'YE', '+967', 1, 1, 1743564794),
(238, 'Zambia', 'ZM', '+260', 1, 1, 1743564794),
(239, 'Zimbabwe', 'ZW', '+263', 1, 1, 1743564794);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
