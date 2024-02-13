-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 01:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `type`) VALUES
(1, 'troi@gmail.com', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `client_email` text NOT NULL,
  `unique_id` int(255) NOT NULL,
  `friend_id` int(255) NOT NULL,
  `connection` text NOT NULL,
  `agent_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`id`, `client_email`, `unique_id`, `friend_id`, `connection`, `agent_email`) VALUES
(35, 'jcyrus8588@gmail.com', 385797361, 258718260, 'friend', 'kkit8588@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `type`, `email`, `name`, `feedback`) VALUES
(13, 'Agent', 'kkit8588@gmail.com', 'kkit8588 Agent', 'asd'),
(14, 'Agent', 'kkit8588@gmail.com', 'kkit8588 Agent', 'hello admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` mediumblob NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `images_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `file_type`, `file_size`, `file_content`, `upload_date`, `images_id`) VALUES
(675, 'Steel_Brushed_Stainless.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(676, '_1.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(677, 'Blacktop_Old_01.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(678, 'Brick_Antique.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(679, 'Concrete_Tile.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(680, 'dkoak1.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(681, 'Field_Square_Tile.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(682, 'material_1.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(683, 'Metal_Corrugated_Shiny.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(684, 'Metal_Silver.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(685, 'Roofing_Shingles_GAF_Estates.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(686, 'Steel_Brushed_Stainless.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(687, 'Tile_Limestone_Large.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(688, 'Trim_mtl_0.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(689, 'Wood_Cherry_Original.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(690, 'Wood_Grain_Mahogony.jpg', '', 0, '', '2023-12-15 07:37:24', 1683313137),
(691, 'Roofing_Shingles_GAF_Estates.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(692, '_1.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(693, 'Blacktop_Old_01.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(694, 'Brick_Antique.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(695, 'Concrete_Tile.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(696, 'dkoak1.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(697, 'Field_Square_Tile.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(698, 'material_1.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(699, 'Metal_Corrugated_Shiny.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(700, 'Metal_Silver.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(701, 'Roofing_Shingles_GAF_Estates.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(702, 'Steel_Brushed_Stainless.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(703, 'Tile_Limestone_Large.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(704, 'Trim_mtl_0.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(705, 'Wood_Cherry_Original.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(706, 'Wood_Grain_Mahogony.jpg', '', 0, '', '2023-12-15 07:38:18', 418192369),
(707, 'Roofing_Shingles_GAF_Estates.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(708, '_1.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(709, 'Blacktop_Old_01.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(710, 'Brick_Antique.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(711, 'Concrete_Tile.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(712, 'dkoak1.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(713, 'Field_Square_Tile.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(714, 'material_1.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(715, 'Metal_Corrugated_Shiny.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(716, 'Metal_Silver.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(717, 'Roofing_Shingles_GAF_Estates.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(718, 'Steel_Brushed_Stainless.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(719, 'Tile_Limestone_Large.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(720, 'Trim_mtl_0.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(721, 'Wood_Cherry_Original.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(722, 'Wood_Grain_Mahogony.jpg', '', 0, '', '2023-12-15 07:41:16', 760928738),
(723, '3135715.png', '', 0, '', '2023-12-15 07:57:15', 1582990563),
(724, '3135715.png', '', 0, '', '2023-12-15 08:21:48', 809976362),
(725, '_1.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(726, 'Blacktop_Old_01.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(727, 'Brick_Antique.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(728, 'Concrete_Tile.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(729, 'dkoak1.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(730, 'Field_Square_Tile.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(731, 'material_1.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(732, 'Metal_Corrugated_Shiny.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(733, 'Metal_Silver.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(734, 'Roofing_Shingles_GAF_Estates.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(735, 'Steel_Brushed_Stainless.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(736, 'Tile_Limestone_Large.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(737, 'Trim_mtl_0.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(738, 'Wood_Cherry_Original.jpg', '', 0, '', '2023-12-15 08:21:48', 0),
(739, 'Wood_Grain_Mahogony.jpg', '', 0, '', '2023-12-15 08:21:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `notif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `notif`) VALUES
(74, 385797361, 258718260, 'asdasd', 'old'),
(75, 385797361, 258718260, 'asd', 'old'),
(76, 385797361, 258718260, 'asd', 'old'),
(77, 258718260, 385797361, 'asd', 'old'),
(78, 258718260, 385797361, 'asd', 'old'),
(79, 385797361, 258718260, 'asdddd', 'old'),
(80, 258718260, 385797361, 'asd', 'old'),
(81, 385797361, 258718260, 'asd', 'old'),
(82, 385797361, 258718260, 'asd', 'old'),
(83, 258718260, 385797361, 'asddd', 'old'),
(84, 385797361, 258718260, 'nagbayad na ako', 'old'),
(85, 258718260, 385797361, 'okay', 'old'),
(86, 258718260, 385797361, 'hey', 'old'),
(87, 385797361, 258718260, 'sap', 'old'),
(88, 385797361, 258718260, 'tropa', 'old'),
(89, 258718260, 385797361, 'ken?', 'old'),
(90, 385797361, 258718260, 'hello agent', 'old'),
(91, 258718260, 385797361, 'hi client', 'old');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `agent_email` text NOT NULL,
  `client_email` text NOT NULL,
  `payment_id` text NOT NULL,
  `payer_id` text NOT NULL,
  `payer_email` text NOT NULL,
  `amount` text NOT NULL,
  `currency` text NOT NULL,
  `payment_status` text NOT NULL,
  `title` text NOT NULL,
  `sqm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `agent_email`, `client_email`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `title`, `sqm`) VALUES
(3, '', '', 'PAYID-MVQK3AQ0TJ50275BG598863V', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '5000000.00', 'PHP', 'approved', 'New House', '250'),
(6, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MVRAASQ8TX281606D782590C', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '54653.00', 'PHP', 'approved', 'asd', ''),
(8, 'kkit8588@gmail.com', 'jcyrus8588@gmail.com', 'PAYID-MVS2C5A7L808875BD298431D', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '400000.00', 'PHP', 'approved', 'House For Sale', '250'),
(10, 'kkit8588@gmail.com', 'jcyrus8588@gmail.com', 'PAYID-MV35JKQ3FN80607S49645436', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(11, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36GKQ91256885BT9564251', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(12, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36GKQ91256885BT9564251', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(13, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36GKQ91256885BT9564251', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(14, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36GKQ91256885BT9564251', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(15, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36GKQ91256885BT9564251', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(16, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36GKQ91256885BT9564251', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '60000.00', 'PHP', 'approved', 'Title', '250'),
(17, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV36IFI9KX909016J4332630', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '12.00', 'PHP', 'approved', 'New', '250'),
(18, '', '', 'PAYID-MV36IFI9KX909016J4332630', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '12.00', 'PHP', 'approved', '', ''),
(19, '', '', 'PAYID-MV36IFI9KX909016J4332630', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '12.00', 'PHP', 'approved', '', ''),
(20, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV5HNVY7SS1675070011513V', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '10000.00', 'PHP', 'approved', 'Lot Videos', '1'),
(21, 'kkit8588@gmail.com', 'troilussedoguio@gmail.com', 'PAYID-MV5HSSQ8FK476727W876633D', 'LX5GZBWRC6D3G', 'sb-ndxbe3994757@business.example.com', '9000.00', 'PHP', 'approved', 'New Lot Videos', '1');

-- --------------------------------------------------------

--
-- Table structure for table `properties_tbl`
--

CREATE TABLE `properties_tbl` (
  `id` int(11) NOT NULL,
  `images_id` int(255) NOT NULL,
  `agent_email` text NOT NULL,
  `agent_name` text NOT NULL,
  `unique_id` int(255) NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `rs` text NOT NULL,
  `bhk` text NOT NULL,
  `area` int(11) NOT NULL,
  `status` text NOT NULL,
  `price` int(11) NOT NULL,
  `location` text NOT NULL,
  `propertyage` text NOT NULL,
  `swimmingpool` text NOT NULL,
  `parking` text NOT NULL,
  `gym` text NOT NULL,
  `thirdparty` text NOT NULL,
  `alivator` text NOT NULL,
  `cctv` text NOT NULL,
  `security` text NOT NULL,
  `diningcapacity` text NOT NULL,
  `churchtemple` text NOT NULL,
  `ci` text NOT NULL,
  `added_date` date NOT NULL DEFAULT current_timestamp(),
  `kitchen` text NOT NULL,
  `sqm` text NOT NULL,
  `bedroom` text NOT NULL,
  `bathroom` text NOT NULL,
  `balcony` text NOT NULL,
  `hall` text NOT NULL,
  `floor` text NOT NULL,
  `totalfloor` text NOT NULL,
  `threed` text NOT NULL,
  `qrimage` text NOT NULL,
  `qrnum` text NOT NULL,
  `filetype` text NOT NULL,
  `approval` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_tbl`
--

INSERT INTO `properties_tbl` (`id`, `images_id`, `agent_email`, `agent_name`, `unique_id`, `title`, `type`, `rs`, `bhk`, `area`, `status`, `price`, `location`, `propertyage`, `swimmingpool`, `parking`, `gym`, `thirdparty`, `alivator`, `cctv`, `security`, `diningcapacity`, `churchtemple`, `ci`, `added_date`, `kitchen`, `sqm`, `bedroom`, `bathroom`, `balcony`, `hall`, `floor`, `totalfloor`, `threed`, `qrimage`, `qrnum`, `filetype`, `approval`) VALUES
(403, 1156764645, '', '', 0, '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'apartment.dae', '1702637737.png', 'http://localhost/realestate/view.php?qrnum=1156764645', '', ''),
(404, 1405971874, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'asd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'apartment.dae', '1702637816.png', 'http://localhost/realestate/view.php?qrnum=1405971874', '', ''),
(405, 691425482, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'asd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', '', '../qrcode/1702638126.png', 'http://localhost/realestate/view.php?qrnum=691425482', '', ''),
(406, 798677495, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'ddd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', '', '../qrcode/1702638137.png', 'http://localhost/realestate/view.php?qrnum=798677495', '', ''),
(407, 1466487819, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'ddd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'apartment.dae', '../qrcode/1702638157.png', 'http://localhost/realestate/view.php?qrnum=1466487819', '', ''),
(408, 291366369, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'asdd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'screen-capture (1).webm', '../qrcode/1702638174.png', 'http://localhost/realestate/video.php?qrnum=291366369', '', ''),
(409, 366922036, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'asd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'screen-capture.webm', '../qrcode/1702638211.png', 'http://localhost/realestate/video.php?qrnum=366922036', '', ''),
(410, 1344978825, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'ddd', '', '', '', 0, 'Available', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'apartment.dae', '../qrcode/1702638231.png', 'http://localhost/realestate/view.php?qrnum=1344978825', '', 'approved'),
(411, 1608265796, 'kkit8588@gmail.com', 'kkit8588 Agent', 258718260, 'asdddd', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '', '', '', '', '', '', '', '', 'apartment.dae', '../qrcode/1702638250.png', 'http://localhost/realestate/view.php?qrnum=1608265796', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `textures`
--

CREATE TABLE `textures` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` mediumblob NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `images_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `verification` text NOT NULL,
  `profile` text NOT NULL,
  `gender` text NOT NULL,
  `bday` date NOT NULL,
  `address` text NOT NULL,
  `unique_id` int(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `email`, `phone`, `password`, `type`, `verification`, `profile`, `gender`, `bday`, `address`, `unique_id`, `status`) VALUES
(115, 'kkit8588 Agent', 'kkit8588@gmail.com', '09152287544', '$2y$10$FqEHSPaHmh9PcJafoJOD9ev4FXgviVvL4bcfxw0WWc8LoeDPoOuhq', 'Agent', 'registered', '3135715.png', 'Male', '2023-11-28', 'malabon langaray street', 258718260, 'Active now'),
(117, 'jcryrus client', 'jcryrus@gmail.com', '09152287544', '$2y$10$mlqxUCEL/hrpDvExtK7ok.byzvr0CxW3dWu2hYHYlpN6SZQ.szgku', 'Client', '', 'logo-removebg-preview.png', 'Male', '2023-11-28', 'malabon langaray street', 245641001, 'Active now'),
(118, 'jcyrus8588 Client', 'jcyrus8588@gmail.com', '09152287544', '$2y$10$HbtNWJIVD3RDqGgZjvwRPudB8q9bHZu7sncb/8sCECYfcBhNsL7Tu', 'Client', 'registered', 'sidebarlogo.png', 'Male', '2023-11-28', 'malabon langaray street', 385797361, 'Active now'),
(120, 'troilus CLient', 'troilussedoguio@gmail.com', '09666666666', '$2y$10$YDXx7uX2oSS0iP6RJG2FOeKBRsNGzTeJGpdNbV.KCNt0oD0Cuys/m', 'Client', 'registered', '3135715.png', 'Male', '2023-12-12', 'Address', 1683727530, 'Active now'),
(121, 'Admin', 'admin@gmail.com', '09152287544', '$2y$10$4jfGO9W0N0ftBn9mzZ10pu9aEPTDwLCm54gNNRTiCMbDahvLojhRG', 'Admin', 'registered', '3135715.png', 'Male', '2023-12-12', 'malabon langaray street', 261003488, 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_tbl`
--
ALTER TABLE `properties_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=740;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `properties_tbl`
--
ALTER TABLE `properties_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
