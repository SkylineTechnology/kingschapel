-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 03:39 PM
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
-- Database: `kingschapeldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bid` int(11) NOT NULL,
  `subtext` varchar(200) NOT NULL,
  `maintext` varchar(200) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `link` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` varchar(20) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `img` varchar(100) NOT NULL,
  `author` varchar(60) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` datetime NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `blog_id` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(40) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `sn` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `contact_id` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_group`
--

CREATE TABLE `forum_group` (
  `group-id` int(11) NOT NULL,
  `dept_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `url` varchar(60) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hid` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `state` varchar(20) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
  `local_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `local_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`local_id`, `state_id`, `local_name`) VALUES
(1, 1, 'Aba South'),
(2, 1, 'Arochukwu'),
(3, 1, 'Bende'),
(4, 1, 'Ikwuano'),
(5, 1, 'Isiala Ngwa North'),
(6, 1, 'Isiala Ngwa South'),
(7, 1, 'Isuikwuato'),
(8, 1, 'Obi Ngwa'),
(9, 1, 'Ohafia'),
(10, 1, 'Osisioma'),
(11, 1, 'Ugwunagbo'),
(12, 1, 'Ukwa East'),
(13, 1, 'Ukwa West'),
(14, 1, 'Umuahia North'),
(15, 1, 'Umuahia South'),
(16, 1, 'Umu Nneochi'),
(17, 2, 'Fufure'),
(18, 2, 'Ganye'),
(19, 2, 'Gayuk'),
(20, 2, 'Gombi'),
(21, 2, 'Grie'),
(22, 2, 'Hong'),
(23, 2, 'Jada'),
(24, 2, 'Lamurde'),
(25, 2, 'Madagali'),
(26, 2, 'Maiha'),
(27, 2, 'Mayo Belwa'),
(28, 2, 'Michika'),
(29, 2, 'Mubi North'),
(30, 2, 'Mubi South'),
(31, 2, 'Numan'),
(32, 2, 'Shelleng'),
(33, 2, 'Song'),
(34, 2, 'Toungo'),
(35, 2, 'Yola North'),
(36, 2, 'Yola South'),
(37, 3, 'Eastern Obolo'),
(38, 3, 'Eket'),
(39, 3, 'Esit Eket'),
(40, 3, 'Essien Udim'),
(41, 3, 'Etim Ekpo'),
(42, 3, 'Etinan'),
(43, 3, 'Ibeno'),
(44, 3, 'Ibesikpo Asutan'),
(45, 3, 'Ibiono-Ibom'),
(46, 3, 'Ika'),
(47, 3, 'Ikono'),
(48, 3, 'Ikot Abasi'),
(49, 3, 'Ikot Ekpene'),
(50, 3, 'Ini'),
(51, 3, 'Itu'),
(52, 3, 'Mbo'),
(53, 3, 'Mkpat-Enin'),
(54, 3, 'Nsit-Atai'),
(55, 3, 'Nsit-Ibom'),
(56, 3, 'Nsit-Ubium'),
(57, 3, 'Obot Akara'),
(58, 3, 'Okobo'),
(59, 3, 'Onna'),
(60, 3, 'Oron'),
(61, 3, 'Oruk Anam'),
(62, 3, 'Udung-Uko'),
(63, 3, 'Ukanafun'),
(64, 3, 'Uruan'),
(65, 3, 'Urue-Offong/Oruko'),
(66, 3, 'Uyo'),
(67, 4, 'Anambra East'),
(68, 4, 'Anambra West'),
(69, 4, 'Anaocha'),
(70, 4, 'Awka North'),
(71, 4, 'Awka South'),
(72, 4, 'Ayamelum'),
(73, 4, 'Dunukofia'),
(74, 4, 'Ekwusigo'),
(75, 4, 'Idemili North'),
(76, 4, 'Idemili South'),
(77, 4, 'Ihiala'),
(78, 4, 'Njikoka'),
(79, 4, 'Nnewi North'),
(80, 4, 'Nnewi South'),
(81, 4, 'Ogbaru'),
(82, 4, 'Onitsha North'),
(83, 4, 'Onitsha South'),
(84, 4, 'Orumba North'),
(85, 4, 'Orumba South'),
(86, 4, 'Oyi'),
(87, 5, 'Bauchi'),
(88, 5, 'Bogoro'),
(89, 5, 'Damban'),
(90, 5, 'Darazo'),
(91, 5, 'Dass'),
(92, 5, 'Gamawa'),
(93, 5, 'Ganjuwa'),
(94, 5, 'Giade'),
(95, 5, 'Itas/Gadau'),
(96, 5, 'Jama\'are'),
(97, 5, 'Katagum'),
(98, 5, 'Kirfi'),
(99, 5, 'Misau'),
(100, 5, 'Ningi'),
(101, 5, 'Shira'),
(102, 5, 'Tafawa Balewa'),
(103, 5, 'Toro'),
(104, 5, 'Warji'),
(105, 5, 'Zaki'),
(106, 6, 'Ekeremor'),
(107, 6, 'Kolokuma/Opokuma'),
(108, 6, 'Nembe'),
(109, 6, 'Ogbia'),
(110, 6, 'Sagbama'),
(111, 6, 'Southern Ijaw'),
(112, 6, 'Yenagoa'),
(113, 7, 'Apa'),
(114, 7, 'Ado'),
(115, 7, 'Buruku'),
(116, 7, 'Gboko'),
(117, 7, 'Guma'),
(118, 7, 'Gwer East'),
(119, 7, 'Gwer West'),
(120, 7, 'Katsina-Ala'),
(121, 7, 'Konshisha'),
(122, 7, 'Kwande'),
(123, 7, 'Logo'),
(124, 7, 'Makurdi'),
(125, 7, 'Obi'),
(126, 7, 'Ogbadibo'),
(127, 7, 'Ohimini'),
(128, 7, 'Oju'),
(129, 7, 'Okpokwu'),
(130, 7, 'Oturkpo'),
(131, 7, 'Tarka'),
(132, 7, 'Ukum'),
(133, 7, 'Ushongo'),
(134, 7, 'Vandeikya'),
(135, 8, 'Askira/Uba'),
(136, 8, 'Bama'),
(137, 8, 'Bayo'),
(138, 8, 'Biu'),
(139, 8, 'Chibok'),
(140, 8, 'Damboa'),
(141, 8, 'Dikwa'),
(142, 8, 'Gubio'),
(143, 8, 'Guzamala'),
(144, 8, 'Gwoza'),
(145, 8, 'Hawul'),
(146, 8, 'Jere'),
(147, 8, 'Kaga'),
(148, 8, 'Kala/Balge'),
(149, 8, 'Konduga'),
(150, 8, 'Kukawa'),
(151, 8, 'Kwaya Kusar'),
(152, 8, 'Mafa'),
(153, 8, 'Magumeri'),
(154, 8, 'Maiduguri'),
(155, 8, 'Marte'),
(156, 8, 'Mobbar'),
(157, 8, 'Monguno'),
(158, 8, 'Ngala'),
(159, 8, 'Nganzai'),
(160, 8, 'Shani'),
(161, 9, 'Akamkpa'),
(162, 9, 'Akpabuyo'),
(163, 9, 'Bakassi'),
(164, 9, 'Bekwarra'),
(165, 9, 'Biase'),
(166, 9, 'Boki'),
(167, 9, 'Calabar Municipal'),
(168, 9, 'Calabar South'),
(169, 9, 'Etung'),
(170, 9, 'Ikom'),
(171, 9, 'Obanliku'),
(172, 9, 'Obubra'),
(173, 9, 'Obudu'),
(174, 9, 'Odukpani'),
(175, 9, 'Ogoja'),
(176, 9, 'Yakuur'),
(177, 9, 'Yala'),
(178, 10, 'Aniocha South'),
(179, 10, 'Bomadi'),
(180, 10, 'Burutu'),
(181, 10, 'Ethiope East'),
(182, 10, 'Ethiope West'),
(183, 10, 'Ika North East'),
(184, 10, 'Ika South'),
(185, 10, 'Isoko North'),
(186, 10, 'Isoko South'),
(187, 10, 'Ndokwa East'),
(188, 10, 'Ndokwa West'),
(189, 10, 'Okpe'),
(190, 10, 'Oshimili North'),
(191, 10, 'Oshimili South'),
(192, 10, 'Patani'),
(193, 10, 'Sapele'),
(194, 10, 'Udu'),
(195, 10, 'Ughelli North'),
(196, 10, 'Ughelli South'),
(197, 10, 'Ukwuani'),
(198, 10, 'Uvwie'),
(199, 10, 'Warri North'),
(200, 10, 'Warri South'),
(201, 10, 'Warri South West'),
(202, 11, 'Afikpo North'),
(203, 11, 'Afikpo South'),
(204, 11, 'Ebonyi'),
(205, 11, 'Ezza North'),
(206, 11, 'Ezza South'),
(207, 11, 'Ikwo'),
(208, 11, 'Ishielu'),
(209, 11, 'Ivo'),
(210, 11, 'Izzi'),
(211, 11, 'Ohaozara'),
(212, 11, 'Ohaukwu'),
(213, 11, 'Onicha'),
(214, 12, 'Egor'),
(215, 12, 'Esan Central'),
(216, 12, 'Esan North-East'),
(217, 12, 'Esan South-East'),
(218, 12, 'Esan West'),
(219, 12, 'Etsako Central'),
(220, 12, 'Etsako East'),
(221, 12, 'Etsako West'),
(222, 12, 'Igueben'),
(223, 12, 'Ikpoba Okha'),
(224, 12, 'Orhionmwon'),
(225, 12, 'Oredo'),
(226, 12, 'Ovia North-East'),
(227, 12, 'Ovia South-West'),
(228, 12, 'Owan East'),
(229, 12, 'Owan West'),
(230, 12, 'Uhunmwonde'),
(231, 13, 'Efon'),
(232, 13, 'Ekiti East'),
(233, 13, 'Ekiti South-West'),
(234, 13, 'Ekiti West'),
(235, 13, 'Emure'),
(236, 13, 'Gbonyin'),
(237, 13, 'Ido Osi'),
(238, 13, 'Ijero'),
(239, 13, 'Ikere'),
(240, 13, 'Ikole'),
(241, 13, 'Ilejemeje'),
(242, 13, 'Irepodun/Ifelodun'),
(243, 13, 'Ise/Orun'),
(244, 13, 'Moba'),
(245, 13, 'Oye'),
(246, 14, 'Awgu'),
(247, 14, 'Enugu East'),
(248, 14, 'Enugu North'),
(249, 14, 'Enugu South'),
(250, 14, 'Ezeagu'),
(251, 14, 'Igbo Etiti'),
(252, 14, 'Igbo Eze North'),
(253, 14, 'Igbo Eze South'),
(254, 14, 'Isi Uzo'),
(255, 14, 'Nkanu East'),
(256, 14, 'Nkanu West'),
(257, 14, 'Nsukka'),
(258, 14, 'Oji River'),
(259, 14, 'Udenu'),
(260, 14, 'Udi'),
(261, 14, 'Uzo Uwani'),
(262, 15, 'Bwari'),
(263, 15, 'Gwagwalada'),
(264, 15, 'Kuje'),
(265, 15, 'Kwali'),
(266, 15, 'Municipal Area Council'),
(267, 16, 'Balanga'),
(268, 16, 'Billiri'),
(269, 16, 'Dukku'),
(270, 16, 'Funakaye'),
(271, 16, 'Gombe'),
(272, 16, 'Kaltungo'),
(273, 16, 'Kwami'),
(274, 16, 'Nafada'),
(275, 16, 'Shongom'),
(276, 16, 'Yamaltu/Deba'),
(277, 17, 'Ahiazu Mbaise'),
(278, 17, 'Ehime Mbano'),
(279, 17, 'Ezinihitte'),
(280, 17, 'Ideato North'),
(281, 17, 'Ideato South'),
(282, 17, 'Ihitte/Uboma'),
(283, 17, 'Ikeduru'),
(284, 17, 'Isiala Mbano'),
(285, 17, 'Isu'),
(286, 17, 'Mbaitoli'),
(287, 17, 'Ngor Okpala'),
(288, 17, 'Njaba'),
(289, 17, 'Nkwerre'),
(290, 17, 'Nwangele'),
(291, 17, 'Obowo'),
(292, 17, 'Oguta'),
(293, 17, 'Ohaji/Egbema'),
(294, 17, 'Okigwe'),
(295, 17, 'Orlu'),
(296, 17, 'Orsu'),
(297, 17, 'Oru East'),
(298, 17, 'Oru West'),
(299, 17, 'Owerri Municipal'),
(300, 17, 'Owerri North'),
(301, 17, 'Owerri West'),
(302, 17, 'Unuimo'),
(303, 18, 'Babura'),
(304, 18, 'Biriniwa'),
(305, 18, 'Birnin Kudu'),
(306, 18, 'Buji'),
(307, 18, 'Dutse'),
(308, 18, 'Gagarawa'),
(309, 18, 'Garki'),
(310, 18, 'Gumel'),
(311, 18, 'Guri'),
(312, 18, 'Gwaram'),
(313, 18, 'Gwiwa'),
(314, 18, 'Hadejia'),
(315, 18, 'Jahun'),
(316, 18, 'Kafin Hausa'),
(317, 18, 'Kazaure'),
(318, 18, 'Kiri Kasama'),
(319, 18, 'Kiyawa'),
(320, 18, 'Kaugama'),
(321, 18, 'Maigatari'),
(322, 18, 'Malam Madori'),
(323, 18, 'Miga'),
(324, 18, 'Ringim'),
(325, 18, 'Roni'),
(326, 18, 'Sule Tankarkar'),
(327, 18, 'Taura'),
(328, 18, 'Yankwashi'),
(329, 19, 'Chikun'),
(330, 19, 'Giwa'),
(331, 19, 'Igabi'),
(332, 19, 'Ikara'),
(333, 19, 'Jaba'),
(334, 19, 'Jema\'a'),
(335, 19, 'Kachia'),
(336, 19, 'Kaduna North'),
(337, 19, 'Kaduna South'),
(338, 19, 'Kagarko'),
(339, 19, 'Kajuru'),
(340, 19, 'Kaura'),
(341, 19, 'Kauru'),
(342, 19, 'Kubau'),
(343, 19, 'Kudan'),
(344, 19, 'Lere'),
(345, 19, 'Makarfi'),
(346, 19, 'Sabon Gari'),
(347, 19, 'Sanga'),
(348, 19, 'Soba'),
(349, 19, 'Zangon Kataf'),
(350, 19, 'Zaria'),
(351, 20, 'Albasu'),
(352, 20, 'Bagwai'),
(353, 20, 'Bebeji'),
(354, 20, 'Bichi'),
(355, 20, 'Bunkure'),
(356, 20, 'Dala'),
(357, 20, 'Dambatta'),
(358, 20, 'Dawakin Kudu'),
(359, 20, 'Dawakin Tofa'),
(360, 20, 'Doguwa'),
(361, 20, 'Fagge'),
(362, 20, 'Gabasawa'),
(363, 20, 'Garko'),
(364, 20, 'Garun Mallam'),
(365, 20, 'Gaya'),
(366, 20, 'Gezawa'),
(367, 20, 'Gwale'),
(368, 20, 'Gwarzo'),
(369, 20, 'Kabo'),
(370, 20, 'Kano Municipal'),
(371, 20, 'Karaye'),
(372, 20, 'Kibiya'),
(373, 20, 'Kiru'),
(374, 20, 'Kumbotso'),
(375, 20, 'Kunchi'),
(376, 20, 'Kura'),
(377, 20, 'Madobi'),
(378, 20, 'Makoda'),
(379, 20, 'Minjibir'),
(380, 20, 'Nasarawa'),
(381, 20, 'Rano'),
(382, 20, 'Rimin Gado'),
(383, 20, 'Rogo'),
(384, 20, 'Shanono'),
(385, 20, 'Sumaila'),
(386, 20, 'Takai'),
(387, 20, 'Tarauni'),
(388, 20, 'Tofa'),
(389, 20, 'Tsanyawa'),
(390, 20, 'Tudun Wada'),
(391, 20, 'Ungogo'),
(392, 20, 'Warawa'),
(393, 20, 'Wudil'),
(394, 21, 'Batagarawa'),
(395, 21, 'Batsari'),
(396, 21, 'Baure'),
(397, 21, 'Bindawa'),
(398, 21, 'Charanchi'),
(399, 21, 'Dandume'),
(400, 21, 'Danja'),
(401, 21, 'Dan Musa'),
(402, 21, 'Daura'),
(403, 21, 'Dutsi'),
(404, 21, 'Dutsin Ma'),
(405, 21, 'Faskari'),
(406, 21, 'Funtua'),
(407, 21, 'Ingawa'),
(408, 21, 'Jibia'),
(409, 21, 'Kafur'),
(410, 21, 'Kaita'),
(411, 21, 'Kankara'),
(412, 21, 'Kankia'),
(413, 21, 'Katsina'),
(414, 21, 'Kurfi'),
(415, 21, 'Kusada'),
(416, 21, 'Mai\'Adua'),
(417, 21, 'Malumfashi'),
(418, 21, 'Mani'),
(419, 21, 'Mashi'),
(420, 21, 'Matazu'),
(421, 21, 'Musawa'),
(422, 21, 'Rimi'),
(423, 21, 'Sabuwa'),
(424, 21, 'Safana'),
(425, 21, 'Sandamu'),
(426, 21, 'Zango'),
(427, 22, 'Arewa Dandi'),
(428, 22, 'Argungu'),
(429, 22, 'Augie'),
(430, 22, 'Bagudo'),
(431, 22, 'Birnin Kebbi'),
(432, 22, 'Bunza'),
(433, 22, 'Dandi'),
(434, 22, 'Fakai'),
(435, 22, 'Gwandu'),
(436, 22, 'Jega'),
(437, 22, 'Kalgo'),
(438, 22, 'Koko/Besse'),
(439, 22, 'Maiyama'),
(440, 22, 'Ngaski'),
(441, 22, 'Sakaba'),
(442, 22, 'Shanga'),
(443, 22, 'Suru'),
(444, 22, 'Wasagu/Danko'),
(445, 22, 'Yauri'),
(446, 22, 'Zuru'),
(447, 23, 'Ajaokuta'),
(448, 23, 'Ankpa'),
(449, 23, 'Bassa'),
(450, 23, 'Dekina'),
(451, 23, 'Ibaji'),
(452, 23, 'Idah'),
(453, 23, 'Igalamela Odolu'),
(454, 23, 'Ijumu'),
(455, 23, 'Kabba/Bunu'),
(456, 23, 'Kogi'),
(457, 23, 'Lokoja'),
(458, 23, 'Mopa Muro'),
(459, 23, 'Ofu'),
(460, 23, 'Ogori/Magongo'),
(461, 23, 'Okehi'),
(462, 23, 'Okene'),
(463, 23, 'Olamaboro'),
(464, 23, 'Omala'),
(465, 23, 'Yagba East'),
(466, 23, 'Yagba West'),
(467, 24, 'Baruten'),
(468, 24, 'Edu'),
(469, 24, 'Ekiti'),
(470, 24, 'Ifelodun'),
(471, 24, 'Ilorin East'),
(472, 24, 'Ilorin South'),
(473, 24, 'Ilorin West'),
(474, 24, 'Irepodun'),
(475, 24, 'Isin'),
(476, 24, 'Kaiama'),
(477, 24, 'Moro'),
(478, 24, 'Offa'),
(479, 24, 'Oke Ero'),
(480, 24, 'Oyun'),
(481, 24, 'Pategi'),
(482, 25, 'Ajeromi-Ifelodun'),
(483, 25, 'Alimosho'),
(484, 25, 'Amuwo-Odofin'),
(485, 25, 'Apapa'),
(486, 25, 'Badagry'),
(487, 25, 'Epe'),
(488, 25, 'Eti Osa'),
(489, 25, 'Ibeju-Lekki'),
(490, 25, 'Ifako-Ijaiye'),
(491, 25, 'Ikeja'),
(492, 25, 'Ikorodu'),
(493, 25, 'Kosofe'),
(494, 25, 'Lagos Island'),
(495, 25, 'Lagos Mainland'),
(496, 25, 'Mushin'),
(497, 25, 'Ojo'),
(498, 25, 'Oshodi-Isolo'),
(499, 25, 'Shomolu'),
(500, 25, 'Surulere'),
(501, 26, 'Awe'),
(502, 26, 'Doma'),
(503, 26, 'Karu'),
(504, 26, 'Keana'),
(505, 26, 'Keffi'),
(506, 26, 'Kokona'),
(507, 26, 'Lafia'),
(508, 26, 'Nasarawa'),
(509, 26, 'Nasarawa Egon'),
(510, 26, 'Obi'),
(511, 26, 'Toto'),
(512, 26, 'Wamba'),
(513, 27, 'Agwara'),
(514, 27, 'Bida'),
(515, 27, 'Borgu'),
(516, 27, 'Bosso'),
(517, 27, 'Chanchaga'),
(518, 27, 'Edati'),
(519, 27, 'Gbako'),
(520, 27, 'Gurara'),
(521, 27, 'Katcha'),
(522, 27, 'Kontagora'),
(523, 27, 'Lapai'),
(524, 27, 'Lavun'),
(525, 27, 'Magama'),
(526, 27, 'Mariga'),
(527, 27, 'Mashegu'),
(528, 27, 'Mokwa'),
(529, 27, 'Moya'),
(530, 27, 'Paikoro'),
(531, 27, 'Rafi'),
(532, 27, 'Rijau'),
(533, 27, 'Shiroro'),
(534, 27, 'Suleja'),
(535, 27, 'Tafa'),
(536, 27, 'Wushishi'),
(537, 28, 'Abeokuta South'),
(538, 28, 'Ado-Odo/Ota'),
(539, 28, 'Egbado North'),
(540, 28, 'Egbado South'),
(541, 28, 'Ewekoro'),
(542, 28, 'Ifo'),
(543, 28, 'Ijebu East'),
(544, 28, 'Ijebu North'),
(545, 28, 'Ijebu North East'),
(546, 28, 'Ijebu Ode'),
(547, 28, 'Ikenne'),
(548, 28, 'Imeko Afon'),
(549, 28, 'Ipokia'),
(550, 28, 'Obafemi Owode'),
(551, 28, 'Odeda'),
(552, 28, 'Odogbolu'),
(553, 28, 'Ogun Waterside'),
(554, 28, 'Remo North'),
(555, 28, 'Shagamu'),
(556, 29, 'Akoko North-West'),
(557, 29, 'Akoko South-West'),
(558, 29, 'Akoko South-East'),
(559, 29, 'Akure North'),
(560, 29, 'Akure South'),
(561, 29, 'Ese Odo'),
(562, 29, 'Idanre'),
(563, 29, 'Ifedore'),
(564, 29, 'Ilaje'),
(565, 29, 'Ile Oluji/Okeigbo'),
(566, 29, 'Irele'),
(567, 29, 'Odigbo'),
(568, 29, 'Okitipupa'),
(569, 29, 'Ondo East'),
(570, 29, 'Ondo West'),
(571, 29, 'Ose'),
(572, 29, 'Owo'),
(573, 30, 'Atakunmosa West'),
(574, 30, 'Aiyedaade'),
(575, 30, 'Aiyedire'),
(576, 30, 'Boluwaduro'),
(577, 30, 'Boripe'),
(578, 30, 'Ede North'),
(579, 30, 'Ede South'),
(580, 30, 'Ife Central'),
(581, 30, 'Ife East'),
(582, 30, 'Ife North'),
(583, 30, 'Ife South'),
(584, 30, 'Egbedore'),
(585, 30, 'Ejigbo'),
(586, 30, 'Ifedayo'),
(587, 30, 'Ifelodun'),
(588, 30, 'Ila'),
(589, 30, 'Ilesa East'),
(590, 30, 'Ilesa West'),
(591, 30, 'Irepodun'),
(592, 30, 'Irewole'),
(593, 30, 'Isokan'),
(594, 30, 'Iwo'),
(595, 30, 'Obokun'),
(596, 30, 'Odo Otin'),
(597, 30, 'Ola Oluwa'),
(598, 30, 'Olorunda'),
(599, 30, 'Oriade'),
(600, 30, 'Orolu'),
(601, 30, 'Osogbo'),
(602, 31, 'Akinyele'),
(603, 31, 'Atiba'),
(604, 31, 'Atisbo'),
(605, 31, 'Egbeda'),
(606, 31, 'Ibadan North'),
(607, 31, 'Ibadan North-East'),
(608, 31, 'Ibadan North-West'),
(609, 31, 'Ibadan South-East'),
(610, 31, 'Ibadan South-West'),
(611, 31, 'Ibarapa Central'),
(612, 31, 'Ibarapa East'),
(613, 31, 'Ibarapa North'),
(614, 31, 'Ido'),
(615, 31, 'Irepo'),
(616, 31, 'Iseyin'),
(617, 31, 'Itesiwaju'),
(618, 31, 'Iwajowa'),
(619, 31, 'Kajola'),
(620, 31, 'Lagelu'),
(621, 31, 'Ogbomosho North'),
(622, 31, 'Ogbomosho South'),
(623, 31, 'Ogo Oluwa'),
(624, 31, 'Olorunsogo'),
(625, 31, 'Oluyole'),
(626, 31, 'Ona Ara'),
(627, 31, 'Orelope'),
(628, 31, 'Ori Ire'),
(629, 31, 'Oyo'),
(630, 31, 'Oyo East'),
(631, 31, 'Saki East'),
(632, 31, 'Saki West'),
(633, 31, 'Surulere'),
(634, 32, 'Barkin Ladi'),
(635, 32, 'Bassa'),
(636, 32, 'Jos East'),
(637, 32, 'Jos North'),
(638, 32, 'Jos South'),
(639, 32, 'Kanam'),
(640, 32, 'Kanke'),
(641, 32, 'Langtang South'),
(642, 32, 'Langtang North'),
(643, 32, 'Mangu'),
(644, 32, 'Mikang'),
(645, 32, 'Pankshin'),
(646, 32, 'Qua\'an Pan'),
(647, 32, 'Riyom'),
(648, 32, 'Shendam'),
(649, 32, 'Wase'),
(650, 33, 'Ahoada East'),
(651, 33, 'Ahoada West'),
(652, 33, 'Akuku-Toru'),
(653, 33, 'Andoni'),
(654, 33, 'Asari-Toru'),
(655, 33, 'Bonny'),
(656, 33, 'Degema'),
(657, 33, 'Eleme'),
(658, 33, 'Emuoha'),
(659, 33, 'Etche'),
(660, 33, 'Gokana'),
(661, 33, 'Ikwerre'),
(662, 33, 'Khana'),
(663, 33, 'Obio/Akpor'),
(664, 33, 'Ogba/Egbema/Ndoni'),
(665, 33, 'Ogu/Bolo'),
(666, 33, 'Okrika'),
(667, 33, 'Omuma'),
(668, 33, 'Opobo/Nkoro'),
(669, 33, 'Oyigbo'),
(670, 33, 'Port Harcourt'),
(671, 33, 'Tai'),
(672, 34, 'Bodinga'),
(673, 34, 'Dange Shuni'),
(674, 34, 'Gada'),
(675, 34, 'Goronyo'),
(676, 34, 'Gudu'),
(677, 34, 'Gwadabawa'),
(678, 34, 'Illela'),
(679, 34, 'Isa'),
(680, 34, 'Kebbe'),
(681, 34, 'Kware'),
(682, 34, 'Rabah'),
(683, 34, 'Sabon Birni'),
(684, 34, 'Shagari'),
(685, 34, 'Silame'),
(686, 34, 'Sokoto North'),
(687, 34, 'Sokoto South'),
(688, 34, 'Tambuwal'),
(689, 34, 'Tangaza'),
(690, 34, 'Tureta'),
(691, 34, 'Wamako'),
(692, 34, 'Wurno'),
(693, 34, 'Yabo'),
(694, 35, 'Bali'),
(695, 35, 'Donga'),
(696, 35, 'Gashaka'),
(697, 35, 'Gassol'),
(698, 35, 'Ibi'),
(699, 35, 'Jalingo'),
(700, 35, 'Karim Lamido'),
(701, 35, 'Kumi'),
(702, 35, 'Lau'),
(703, 35, 'Sardauna'),
(704, 35, 'Takum'),
(705, 35, 'Ussa'),
(706, 35, 'Wukari'),
(707, 35, 'Yorro'),
(708, 35, 'Zing'),
(709, 36, 'Bursari'),
(710, 36, 'Damaturu'),
(711, 36, 'Fika'),
(712, 36, 'Fune'),
(713, 36, 'Geidam'),
(714, 36, 'Gujba'),
(715, 36, 'Gulani'),
(716, 36, 'Jakusko'),
(717, 36, 'Karasuwa'),
(718, 36, 'Machina'),
(719, 36, 'Nangere'),
(720, 36, 'Nguru'),
(721, 36, 'Potiskum'),
(722, 36, 'Tarmuwa'),
(723, 36, 'Yunusari'),
(724, 36, 'Yusufari'),
(725, 37, 'Bakura'),
(726, 37, 'Birnin Magaji/Kiyaw'),
(727, 37, 'Bukkuyum'),
(728, 37, 'Bungudu'),
(729, 37, 'Gummi'),
(730, 37, 'Gusau'),
(731, 37, 'Kaura Namoda'),
(732, 37, 'Maradun'),
(733, 37, 'Maru'),
(734, 37, 'Shinkafi'),
(735, 37, 'Talata Mafara'),
(736, 37, 'Chafe'),
(737, 37, 'Zurmi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `status`) VALUES
('admin', 'a', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(8) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mediacomments`
--

CREATE TABLE `mediacomments` (
  `comment_id` int(11) NOT NULL,
  `media_id` varchar(30) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `date` datetime NOT NULL,
  `fullname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberid` varchar(30) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `mstatus` varchar(8) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `state` varchar(40) NOT NULL,
  `lga` varchar(80) NOT NULL,
  `res_address` text NOT NULL,
  `date` date NOT NULL,
  `dept` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg-id` int(11) NOT NULL,
  `sender_id` varchar(60) NOT NULL,
  `receiver_id` varchar(60) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE `newslatter` (
  `sn` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `prt_id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prayer_line`
--

CREATE TABLE `prayer_line` (
  `prayer_id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `prayer_rqst` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `prog-id` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog-id`, `image`, `topic`, `date`, `time`, `address`, `type`) VALUES
('PROG-523108200810', 'art1_08102020055231.jpg', 'Annual Thanksgiving/6th Anniversary', '2019-12-01', '08:30:am', '<p>Ajaji Cloister Road, Off St. Bridges Road Asaba, Delta State</p>\r\n', 'event'),
('PROG-535708200810', 'art1_08102020055357.JPG', 'Partners Conference', '2019-12-07', '10:00:am', '<p>Ajaji Cloister Road, Off St. Bridges Road Asaba, Delta State</p>\r\n', 'event'),
('PROG-552608200810', 'art1_08102020055526.jpg', 'Healing &amp; Deliverance Service', '2020-12-09', '10:00:am', '<p>Ajaji Cloister Road, Off St. Bridges Road Asaba, Delta State</p>\r\n', 'event'),
('PROG-563808200810', 'art1_08102020055638.jpg', 'Ogwashi-Uku Crusade', '2020-12-20', '16:00:pm', '<p>Ajaji Cloister Road, Off St. Bridges Road Asaba, Delta State</p>\r\n', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `url` varchar(60) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `url`, `comment`, `date`, `status`) VALUES
(3, 'pic1_09102020164704.jpg', 'pro', '2020-09-10 16:47:04', 'NO'),
(4, 'pic1_09102020164736.jpg', '2', '2020-09-10 16:47:36', 'NO'),
(5, 'pic1_09102020164751.jpg', '3', '2020-09-10 16:47:51', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sn` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `status` varchar(5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `name`) VALUES
(1, 'Abia State'),
(2, 'Adamawa State'),
(3, 'Akwa Ibom State'),
(4, 'Anambra State'),
(5, 'Bauchi State'),
(6, 'Bayelsa State'),
(7, 'Benue State'),
(8, 'Borno State'),
(9, 'Cross River State'),
(10, 'Delta State'),
(11, 'Ebonyi State'),
(12, 'Edo State'),
(13, 'Ekiti State'),
(14, 'Enugu State'),
(15, 'FCT'),
(16, 'Gombe State'),
(17, 'Imo State'),
(18, 'Jigawa State'),
(19, 'Kaduna State'),
(20, 'Kano State'),
(21, 'Katsina State'),
(22, 'Kebbi State'),
(23, 'Kogi State'),
(24, 'Kwara State'),
(25, 'Lagos State'),
(26, 'Nasarawa State'),
(27, 'Niger State'),
(28, 'Ogun State'),
(29, 'Ondo State'),
(30, 'Osun State'),
(31, 'Oyo State'),
(32, 'Plateau State'),
(33, 'Rivers State'),
(34, 'Sokoto State'),
(35, 'Taraba State'),
(36, 'Yobe State'),
(37, 'Zamfara State');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` varchar(30) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `testimony` text NOT NULL,
  `img_url` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `tid` int(11) NOT NULL,
  `url` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `forum_group`
--
ALTER TABLE `forum_group`
  ADD PRIMARY KEY (`group-id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`local_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `mediacomments`
--
ALTER TABLE `mediacomments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg-id`);

--
-- Indexes for table `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`prt_id`);

--
-- Indexes for table `prayer_line`
--
ALTER TABLE `prayer_line`
  ADD PRIMARY KEY (`prayer_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`prog-id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forum_group`
--
ALTER TABLE `forum_group`
  MODIFY `group-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;

--
-- AUTO_INCREMENT for table `mediacomments`
--
ALTER TABLE `mediacomments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `prt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prayer_line`
--
ALTER TABLE `prayer_line`
  MODIFY `prayer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
