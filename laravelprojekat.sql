-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 04:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelprojekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id_home` bigint(20) UNSIGNED NOT NULL,
  `team_id_away` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `stadium_id` bigint(20) UNSIGNED NOT NULL,
  `points_home` int(11) NOT NULL,
  `points_away` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `team_id_home`, `team_id_away`, `date`, `time`, `stadium_id`, `points_home`, `points_away`) VALUES
(1, 1, 2, '2020-05-05', '20:00:00', 1, 92, 78),
(2, 3, 4, '2020-05-07', '18:00:00', 3, 101, 99),
(3, 5, 6, '2020-05-08', '21:00:00', 5, 102, 85),
(4, 7, 8, '2020-05-10', '20:00:00', 7, 75, 80),
(5, 9, 10, '2020-05-10', '20:00:00', 9, 80, 100),
(6, 6, 5, '2020-05-06', '20:00:00', 6, 103, 125);

-- --------------------------------------------------------

--
-- Table structure for table `game_statistics`
--

CREATE TABLE `game_statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `team` enum('HOME','AWAY') COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_point_scored` int(11) NOT NULL,
  `two_point_shots` int(11) NOT NULL,
  `percentage_two_point` double(8,2) NOT NULL,
  `three_point_scored` int(11) NOT NULL,
  `three_point_shots` int(11) NOT NULL,
  `percentage_three_point` double(8,2) NOT NULL,
  `free_throw_scored` int(11) NOT NULL,
  `free_throw_shots` int(11) NOT NULL,
  `percentage_free_throw` double(8,2) NOT NULL,
  `fouls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_statistics`
--

INSERT INTO `game_statistics` (`id`, `game_id`, `team`, `two_point_scored`, `two_point_shots`, `percentage_two_point`, `three_point_scored`, `three_point_shots`, `percentage_three_point`, `free_throw_scored`, `free_throw_shots`, `percentage_free_throw`, `fouls`) VALUES
(1, 1, 'HOME', 20, 60, 30.00, 15, 45, 30.00, 7, 14, 50.00, 20),
(2, 1, 'AWAY', 20, 40, 50.00, 13, 26, 50.00, 9, 18, 50.00, 25),
(3, 2, 'HOME', 30, 50, 60.00, 10, 30, 30.00, 11, 22, 50.00, 17),
(4, 2, 'AWAY', 15, 45, 30.00, 20, 50, 40.00, 9, 27, 30.00, 18),
(5, 3, 'HOME', 27, 40, 67.50, 12, 20, 60.00, 12, 24, 50.00, 23),
(6, 3, 'AWAY', 10, 20, 50.00, 15, 32, 46.90, 20, 25, 80.00, 25),
(7, 4, 'HOME', 10, 20, 50.00, 14, 42, 30.00, 13, 26, 50.00, 24),
(8, 4, 'AWAY', 12, 36, 30.00, 15, 30, 50.00, 11, 22, 50.00, 27),
(9, 5, 'HOME', 10, 20, 50.00, 14, 42, 30.00, 18, 36, 50.00, 24),
(10, 5, 'AWAY', 22, 44, 50.00, 15, 30, 50.00, 11, 22, 50.00, 27),
(11, 6, 'HOME', 15, 58, 25.86, 19, 33, 57.58, 16, 22, 72.73, 17),
(12, 6, 'AWAY', 24, 49, 48.98, 20, 46, 43.48, 17, 25, 68.00, 27);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` int(11) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `password`, `years`, `team_id`, `img_url`, `remember_token`) VALUES
(1, 'Rob Pelinka', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 42, 1, '/img/lakers_manager.jpg', NULL),
(2, 'Danny Ainge', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 47, 2, '/img/atlanta_manager.jpg', NULL),
(3, 'Travis Schlenk', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 40, 3, '/img/boston_manager.jpg', NULL),
(4, 'Steve Kerr', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 40, 4, '/img/golden_state_manager.jpg', NULL),
(5, 'Koby Altman', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 35, 5, '/img/cleveland_manager.jpg', NULL),
(6, 'Erik Spoelstra', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 44, 6, '/img/miami_manager.jpg', NULL),
(7, 'Jim Boylen', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 41, 7, '/img/chicago_manager.jpg', NULL),
(8, 'Arturas Karnisovas', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 38, 8, '/img/denver_manager.jpg', NULL),
(9, 'Daryl Morey', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 40, 9, '/img/houston_manager.jpg', NULL),
(10, 'Vlade Divac', '$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 44, 10, '/img/sacramento_manager.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_03_145116_create_teams_table', 1),
(2, '2020_06_04_130355_create_positions_table', 1),
(3, '2020_06_04_132616_create_players_table', 1),
(4, '2020_06_04_142518_create_managers_table', 1),
(5, '2020_06_04_151028_create_standings_table', 1),
(6, '2020_06_04_171044_create_stadiums_table', 1),
(7, '2020_06_04_172432_create_transfers_table', 1),
(8, '2020_06_06_112712_create_games_table', 1),
(9, '2020_06_06_121818_create_player_statistics_table', 1),
(10, '2020_06_06_133956_create_game_statistics_table', 1),
(11, '2020_06_06_185227_create_schedule_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` int(11) NOT NULL,
  `height` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `avg_points` double(8,2) NOT NULL,
  `avg_assist` double(8,2) NOT NULL,
  `avg_rebounds` double(8,2) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` tinyint(1) NOT NULL,
  `sum` double(8,2) NOT NULL,
  `games_played` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `years`, `height`, `weight`, `avg_points`, `avg_assist`, `avg_rebounds`, `team_id`, `position_id`, `img_url`, `free`, `sum`, `games_played`) VALUES
(1, 'Quinn Cook', 24, 1.98, 85.00, 13.00, 6.00, 4.00, 1, 1, '/img/quinn_cook.png', 0, 23.00, 1),
(2, 'Alex Caruso', 22, 2.03, 88.00, 16.00, 4.00, 2.00, 1, 2, '/img/alex_caruso.png', 0, 22.00, 1),
(3, 'Devontae Cacok', 25, 2.06, 88.00, 20.00, 5.00, 4.00, 1, 3, '/img/devontae_cacok.png', 0, 29.00, 1),
(4, 'Avery Bradley', 23, 2.10, 90.00, 18.00, 4.00, 3.00, 1, 4, '/img/avery_bradley.png', 0, 25.00, 1),
(5, 'Kostas Antetokounmpo', 26, 2.12, 93.00, 25.00, 3.00, 8.00, 1, 5, '/img/kostas_antetokounmpo.png', 0, 36.00, 1),
(6, 'Charles Brown Jr.', 25, 1.97, 83.00, 9.00, 4.00, 1.00, 2, 1, '/img/charles_brown_jr.png', 0, 14.00, 1),
(7, 'Vince Carter', 43, 2.08, 85.00, 15.00, 6.00, 7.00, 2, 2, '/img/vince_carter.png', 0, 28.00, 1),
(8, 'John Collins', 26, 2.05, 87.50, 17.00, 2.00, 4.00, 2, 3, '/img/john_collins.png', 0, 23.00, 1),
(9, 'Deadre Bembry', 28, 2.07, 90.00, 17.00, 3.00, 7.00, 2, 4, '/img/deadre_bembry.png', 0, 27.00, 1),
(10, 'Clint Capela', 25, 2.13, 92.00, 20.00, 5.00, 11.00, 2, 5, '/img/clint_capela.png', 0, 36.00, 1),
(11, 'Carsen Edwards', 23, 1.91, 80.00, 15.00, 5.00, 2.00, 3, 1, '/img/carsen_edwards.png', 0, 22.00, 1),
(12, 'Javonte Green', 22, 1.98, 83.00, 18.00, 4.00, 3.00, 3, 2, '/img/javonte_green.png', 0, 25.00, 1),
(13, 'Jaylen Brown', 23, 2.03, 85.00, 25.00, 3.00, 4.00, 3, 3, '/img/jaylen_brown.png', 0, 32.00, 1),
(14, 'Enes Kanter', 26, 2.10, 95.00, 23.00, 4.00, 8.00, 3, 4, '/img/enes_kanter.png', 0, 35.00, 1),
(15, 'Tacko Fall', 25, 2.17, 99.00, 20.00, 4.00, 12.00, 3, 5, '/img/tacko_fall.png', 0, 36.00, 1),
(16, 'Stephen Curry', 24, 1.89, 81.00, 30.00, 9.00, 2.00, 4, 1, '/img/stephen_curry.png', 0, 41.00, 1),
(17, 'Damion Lee', 23, 1.93, 85.00, 13.00, 6.00, 4.00, 4, 2, '/img/damion_lee.png', 0, 23.00, 1),
(18, 'Klay Thompson', 25, 1.97, 88.00, 28.00, 7.00, 4.00, 4, 3, '/img/klay_thompson.png', 0, 39.00, 1),
(19, 'Alen Smailagic', 21, 2.08, 90.00, 12.00, 5.00, 6.00, 4, 4, '/img/alen_smailagic.png', 0, 23.00, 1),
(20, 'Dragan Bender', 23, 2.12, 98.00, 16.00, 4.00, 8.00, 4, 5, '/img/dragan_bender.png', 0, 28.00, 1),
(21, 'Darius Garland', 24, 1.92, 82.00, 13.50, 4.50, 3.00, 5, 1, '/img/darius_garland.png', 0, 21.00, 2),
(22, 'Matthew Dellavedova', 28, 1.93, 85.00, 15.50, 8.00, 6.50, 5, 2, '/img/matthew_dellavedova.png', 0, 30.00, 2),
(23, 'Dante Exum', 25, 2.00, 88.00, 16.50, 5.00, 6.00, 5, 3, '/img/dante_exum.png', 0, 27.50, 2),
(24, 'Kevin Love', 26, 2.06, 90.00, 15.50, 7.50, 7.00, 5, 4, '/img/kevin_love.png', 0, 30.00, 2),
(25, 'Andre Drummond', 26, 2.12, 97.00, 17.50, 3.50, 10.50, 5, 5, '/img/andre_drummond.png', 0, 31.50, 2),
(26, 'Goran Dragic', 25, 1.93, 81.00, 17.50, 6.50, 1.50, 6, 1, '/img/goran_dragic.png', 0, 25.50, 2),
(27, 'Tyler Herro', 26, 1.98, 87.00, 13.00, 4.50, 6.50, 6, 2, '/img/tyler_herro.png', 0, 24.00, 2),
(28, 'Jimmy Butler', 24, 2.02, 89.00, 19.50, 3.00, 4.50, 6, 3, '/img/jimmy_butler.png', 0, 27.00, 2),
(29, 'Jae Crowder', 28, 2.09, 99.00, 9.00, 5.50, 4.50, 6, 4, '/img/jae_crowder.png', 0, 19.00, 2),
(30, 'Bam Adebayo', 25, 2.15, 100.00, 11.00, 6.00, 5.50, 6, 5, '/img/bam_adebayo.png', 0, 22.50, 2),
(31, 'Kris Dunn', 23, 1.87, 81.00, 8.00, 5.00, 2.00, 7, 1, '/img/kris_dunn.png', 0, 15.00, 1),
(32, 'Ryan Arcidiacono', 22, 1.93, 83.00, 12.00, 5.00, 2.00, 7, 2, '/img/ryan_arcidiacono.png', 0, 19.00, 1),
(33, 'Zach LaVine', 24, 1.98, 86.00, 26.00, 5.00, 5.00, 7, 3, '/img/zach_lavine.png', 0, 36.00, 1),
(34, 'Cristiano Felicio', 26, 2.10, 96.00, 12.00, 2.00, 6.00, 7, 4, '/img/cristiano_felicio.png', 0, 20.00, 1),
(35, 'Daniel Gafford', 25, 2.16, 98.50, 17.00, 4.00, 8.00, 7, 5, '/img/daniel_gafford.png', 0, 29.00, 1),
(36, 'Monte Morris', 24, 1.87, 80.00, 16.00, 7.00, 1.00, 8, 1, '/img/monte_morris.png', 0, 24.00, 1),
(37, 'Will Barton', 26, 1.91, 83.00, 10.00, 4.00, 3.00, 8, 2, '/img/will_barton.png', 0, 17.00, 1),
(38, 'PJ Dozier', 23, 1.97, 89.00, 13.00, 3.00, 4.00, 8, 3, '/img/pj_dozier.png', 0, 20.00, 1),
(39, 'Paul Millsap', 30, 2.05, 95.00, 16.00, 3.00, 6.00, 8, 4, '/img/paul_millsap.png', 0, 25.00, 1),
(40, 'Nikola Jokic', 24, 2.10, 98.00, 25.00, 8.00, 9.00, 8, 5, '/img/nikola_jokic.png', 0, 42.00, 1),
(41, 'Eric Gordon', 24, 1.98, 85.00, 10.00, 5.00, 7.00, 9, 1, '/img/eric_gordon.png', 0, 22.00, 1),
(42, 'James Harden', 22, 2.03, 88.00, 10.00, 5.00, 7.00, 9, 2, '/img/james_harden.png', 0, 22.00, 1),
(43, 'Robert Covington', 25, 2.06, 88.00, 10.00, 5.00, 7.00, 9, 3, '/img/robert_covigton.png', 0, 22.00, 1),
(44, 'Jeff Green', 23, 2.10, 90.00, 10.00, 5.00, 7.00, 9, 4, '/img/jeff_green.png', 0, 22.00, 1),
(45, 'Tyson Chandler', 26, 2.12, 93.00, 10.00, 5.00, 7.00, 9, 5, '/img/tyson_chandler.png', 0, 22.00, 1),
(46, 'Yogi Ferrel', 23, 1.97, 83.00, 10.00, 5.00, 7.00, 10, 1, '/img/yogi_ferrel.png', 0, 22.00, 1),
(47, 'Bogdan Bogdanovic', 25, 2.08, 85.00, 10.00, 5.00, 7.00, 10, 2, '/img/bogdan_bogdanovic.png', 0, 22.00, 1),
(48, 'Kent Bazemore', 26, 2.05, 87.50, 10.00, 5.00, 7.00, 10, 3, '/img/kent_bazemore.png', 0, 22.00, 1),
(49, 'Nemanja Bjelica', 28, 2.07, 90.00, 10.00, 5.00, 7.00, 10, 4, '/img/nemanja_bjelica.png', 0, 22.00, 1),
(50, 'Alex Len', 25, 2.13, 92.00, 10.00, 5.00, 7.00, 10, 5, '/img/alex_len.png', 0, 22.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `player_statistics`
--

CREATE TABLE `player_statistics` (
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `rebounds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `player_statistics`
--

INSERT INTO `player_statistics` (`game_id`, `player_id`, `points`, `assists`, `rebounds`) VALUES
(1, 1, 13, 6, 4),
(1, 2, 16, 4, 2),
(1, 3, 20, 5, 4),
(1, 4, 18, 4, 3),
(1, 5, 25, 3, 8),
(1, 6, 9, 4, 1),
(1, 7, 15, 6, 7),
(1, 8, 17, 2, 4),
(1, 9, 17, 3, 7),
(1, 10, 20, 5, 11),
(2, 11, 15, 5, 2),
(2, 12, 18, 4, 3),
(2, 13, 25, 3, 4),
(2, 14, 23, 4, 8),
(2, 15, 20, 4, 12),
(2, 16, 30, 9, 2),
(2, 17, 13, 6, 4),
(2, 18, 28, 7, 4),
(2, 19, 12, 5, 6),
(2, 20, 16, 4, 8),
(3, 21, 13, 6, 4),
(3, 22, 20, 7, 2),
(3, 23, 22, 3, 4),
(3, 24, 23, 6, 7),
(3, 25, 24, 3, 10),
(3, 26, 26, 7, 2),
(3, 27, 12, 3, 2),
(3, 28, 25, 2, 4),
(3, 29, 10, 2, 8),
(3, 30, 12, 3, 7),
(4, 31, 8, 5, 2),
(4, 32, 12, 5, 2),
(4, 33, 26, 5, 5),
(4, 34, 12, 2, 6),
(4, 35, 17, 4, 8),
(4, 36, 16, 7, 1),
(4, 37, 10, 4, 3),
(4, 38, 13, 3, 4),
(4, 39, 16, 3, 6),
(4, 40, 25, 8, 9),
(5, 31, 10, 5, 2),
(5, 32, 10, 5, 2),
(5, 33, 10, 5, 5),
(5, 34, 10, 2, 6),
(5, 35, 10, 4, 8),
(5, 36, 10, 5, 7),
(5, 37, 10, 5, 7),
(5, 38, 10, 5, 7),
(5, 39, 10, 5, 7),
(5, 40, 10, 5, 7),
(6, 26, 9, 6, 1),
(6, 27, 14, 6, 11),
(6, 28, 14, 4, 5),
(6, 29, 8, 9, 1),
(6, 30, 10, 9, 4),
(6, 21, 14, 3, 2),
(6, 22, 11, 9, 11),
(6, 23, 11, 7, 8),
(6, 24, 8, 9, 7),
(6, 25, 11, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(1, 'Plejmejker'),
(2, 'Bek suter'),
(3, 'Krilo'),
(4, 'Krilni centar'),
(5, 'Centar');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id_home` bigint(20) UNSIGNED NOT NULL,
  `team_id_away` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `stadium_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `team_id_home`, `team_id_away`, `date`, `time`, `stadium_id`) VALUES
(1, 2, 1, '2020-05-07', '21:00:00', 2),
(2, 4, 3, '2020-07-08', '22:00:00', 4),
(4, 8, 7, '2020-05-09', '18:00:00', 8),
(5, 9, 10, '2020-08-08', '20:00:00', 9),
(6, 2, 1, '2020-07-12', '21:00:00', 2),
(7, 4, 3, '2020-06-08', '22:00:00', 4),
(8, 6, 5, '2020-10-06', '20:00:00', 6),
(9, 8, 7, '2020-06-21', '18:00:00', 8),
(10, 9, 10, '2020-05-18', '20:00:00', 9),
(11, 2, 1, '2020-08-07', '21:00:00', 2),
(12, 4, 3, '2020-07-15', '22:00:00', 4),
(13, 6, 5, '2020-07-26', '20:00:00', 6),
(14, 8, 7, '2020-08-09', '18:00:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`id`, `name`, `city`, `capacity`) VALUES
(1, 'Staples Center', 'Los Angeles', 18997),
(2, 'State Farm Arena', 'Atlanta', 19580),
(3, 'TD Garden', 'Boston', 22000),
(4, 'Chase Center', 'San Francisco', 21500),
(5, 'Rocket Mortgage FieldHouse', 'Cleveland', 20000),
(6, 'AmericanAirlines Arena', 'Miami', 23000),
(7, 'United Center', 'Chicago', 21700),
(8, 'Pepsi Center', 'Denver', 24000),
(9, 'Toyota Center', 'Houston', 22000),
(10, 'Golden 1 Center', 'Sacramento', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE `standings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `games_played` int(11) NOT NULL DEFAULT 0,
  `games_won` int(11) NOT NULL DEFAULT 0,
  `games_lost` int(11) NOT NULL DEFAULT 0,
  `scored_received` int(11) NOT NULL DEFAULT 0,
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`id`, `position`, `team_id`, `games_played`, `games_won`, `games_lost`, `scored_received`, `points`) VALUES
(11, 1, 5, 2, 2, 0, 39, 2),
(12, 2, 10, 1, 1, 0, 20, 1),
(13, 3, 1, 1, 1, 0, 14, 1),
(14, 4, 8, 1, 1, 0, 5, 1),
(15, 5, 3, 1, 1, 0, 2, 1),
(16, 6, 4, 1, 0, 1, -2, 0),
(17, 7, 7, 1, 0, 1, -5, 0),
(18, 8, 2, 1, 0, 1, -14, 0),
(19, 9, 9, 1, 0, 1, -20, 0),
(20, 10, 6, 2, 0, 2, -39, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `founded` year(4) NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `founded`, `img_url`) VALUES
(1, 'Los Angeles Lakers', 1947, '/img/lakers.png'),
(2, 'Atlanta Hawks', 1946, '/img/atlanta_hawks.png'),
(3, 'Boston Celtics', 1946, '/img/boston.png'),
(4, 'Golden State Warriors', 1943, '/img/golden_state.png'),
(5, 'Cleveland Cavaliers', 1948, '/img/cleveland.png'),
(6, 'Miami Heat', 1949, '/img/miami.png'),
(7, 'Chicago Bulls', 1950, '/img/chicago.png'),
(8, 'Denver Nuggets', 1939, '/img/denver.png'),
(9, 'Houston Rockets', 1945, '/img/houston.jpg'),
(10, 'Sacramento Kings', 1944, '/img/sacramento.png');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `team_id_from` bigint(20) UNSIGNED NOT NULL,
  `team_id_to` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `player_id`, `team_id_from`, `team_id_to`, `date`, `money`) VALUES
(1, 1, 3, 1, '2018-03-15', 3050000),
(2, 2, 4, 1, '2019-04-21', 10050000),
(3, 3, 5, 1, '2019-07-05', 3050000),
(4, 6, 7, 2, '2019-07-05', 4050000),
(5, 7, 8, 2, '2019-07-05', 5250000),
(6, 8, 9, 2, '2019-07-05', 3058000),
(7, 12, 1, 3, '2019-07-05', 1050000),
(8, 17, 2, 4, '2019-07-05', 8550000),
(9, 22, 1, 5, '2019-07-05', 7550000),
(10, 27, 2, 6, '2019-07-05', 2100000),
(11, 31, 6, 7, '2019-07-05', 3080000),
(12, 37, 6, 8, '2019-07-05', 3059000),
(13, 42, 10, 9, '2019-07-05', 1230000),
(14, 46, 8, 10, '2019-07-05', 3089000),
(15, 48, 9, 10, '2019-07-05', 9400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_team_id_home_foreign` (`team_id_home`),
  ADD KEY `games_team_id_away_foreign` (`team_id_away`),
  ADD KEY `games_stadium_id_foreign` (`stadium_id`);

--
-- Indexes for table `game_statistics`
--
ALTER TABLE `game_statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_statistics_game_id_foreign` (`game_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managers_name_unique` (`name`),
  ADD KEY `managers_team_id_foreign` (`team_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_team_id_foreign` (`team_id`),
  ADD KEY `players_position_id_foreign` (`position_id`);

--
-- Indexes for table `player_statistics`
--
ALTER TABLE `player_statistics`
  ADD KEY `player_statistics_game_id_foreign` (`game_id`),
  ADD KEY `player_statistics_player_id_foreign` (`player_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_team_id_home_foreign` (`team_id_home`),
  ADD KEY `schedule_team_id_away_foreign` (`team_id_away`),
  ADD KEY `schedule_stadium_id_foreign` (`stadium_id`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standings`
--
ALTER TABLE `standings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `standings_team_id_foreign` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transfers_player_id_foreign` (`player_id`),
  ADD KEY `transfers_team_id_from_foreign` (`team_id_from`),
  ADD KEY `transfers_team_id_to_foreign` (`team_id_to`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game_statistics`
--
ALTER TABLE `game_statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `standings`
--
ALTER TABLE `standings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_stadium_id_foreign` FOREIGN KEY (`stadium_id`) REFERENCES `stadiums` (`id`),
  ADD CONSTRAINT `games_team_id_away_foreign` FOREIGN KEY (`team_id_away`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `games_team_id_home_foreign` FOREIGN KEY (`team_id_home`) REFERENCES `teams` (`id`);

--
-- Constraints for table `game_statistics`
--
ALTER TABLE `game_statistics`
  ADD CONSTRAINT `game_statistics_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `player_statistics`
--
ALTER TABLE `player_statistics`
  ADD CONSTRAINT `player_statistics_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `player_statistics_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_stadium_id_foreign` FOREIGN KEY (`stadium_id`) REFERENCES `stadiums` (`id`),
  ADD CONSTRAINT `schedule_team_id_away_foreign` FOREIGN KEY (`team_id_away`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `schedule_team_id_home_foreign` FOREIGN KEY (`team_id_home`) REFERENCES `teams` (`id`);

--
-- Constraints for table `standings`
--
ALTER TABLE `standings`
  ADD CONSTRAINT `standings_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `transfers`
--
ALTER TABLE `transfers`
  ADD CONSTRAINT `transfers_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`),
  ADD CONSTRAINT `transfers_team_id_from_foreign` FOREIGN KEY (`team_id_from`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `transfers_team_id_to_foreign` FOREIGN KEY (`team_id_to`) REFERENCES `teams` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
