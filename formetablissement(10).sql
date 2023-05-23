-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 mai 2023 à 19:21
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formetablissement`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `adressIp` varchar(255) DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `users_id`, `objet`, `type`, `detail`, `adressIp`, `mac_address`, `created_at`, `updated_at`) VALUES
(4, 16, 'objet 1', 'Etablissement', 'detail 1', '196.64.33.62', '00-E0-4C-36-B0-26', '2023-05-17 08:09:34', '2023-05-17 08:09:34'),
(6, 3, 'jh', 'Direction provinciale', 'kjhkh', '160.177.24.33', '9C-29-76-52-3B-F3', '2023-05-18 10:13:17', '2023-05-18 10:13:17'),
(7, 334, 'les absence', 'Etablissement', 'a chaque fois si il y a des absences il faut contacter la famille', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-20 10:43:27', '2023-05-20 10:43:27'),
(10, 334, NULL, NULL, NULL, '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-20 10:54:14', '2023-05-20 10:54:14');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reclamation_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `short_description`, `content`, `date`, `created_at`, `updated_at`) VALUES
(3, 'مسابقة', 'م تنفيذ المسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11 في مختلف المؤسسات التعليمية الابتدائية بالتعاون بين الأكاديمية الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، وستقام الأطوار النهائية في مدينة تافراوت في الصيف المقبل.\n\n\n\n\n', 'مسابقة الوطنية لأولمبياد تيفيناغ ', 'تنزيلا للمذكرة الأكاديمية عدد 1862/23 بتاريخ 14 أبريل 2023، شهدت مختلف المؤسسات التعليمية الابتدائية التي عبرت عن المشاركة بدوائر الإقليم، تمرير الرائز الإقليمي للمسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11، في إطار الشراكة الثلاثية بين الأكاديمة الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، التي ستجرى أطوارها النهائية بين المتبارين من مختلف الأكاديميات الجهوية، بمدينة تافراوت الصيف المقبل.\nوتأتي هذه التظاهرة التربوية دعما لتدريس اللغة الأمازيغية وإذكاء لروح المنافسة بين المتعلمين، وفي إطار تفعيل الطابع الرسمي للغة والثقافة الأمازيغيتين.', '0001-12-12', '2023-05-11 14:15:50', '2023-05-11 14:15:50'),
(4, 'مسابقة', 'م تنفيذ المسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11 في مختلف المؤسسات التعليمية الابتدائية بالتعاون بين الأكاديمية الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، وستقام الأطوار النهائية في مدينة تافراوت في الصيف المقبل.\n\n\n\n\n', 'مسابقة الوطنية لأولمبياد تيفيناغ ', 'تنزيلا للمذكرة الأكاديمية عدد 1862/23 بتاريخ 14 أبريل 2023، شهدت مختلف المؤسسات التعليمية الابتدائية التي عبرت عن المشاركة بدوائر الإقليم، تمرير الرائز الإقليمي للمسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11، في إطار الشراكة الثلاثية بين الأكاديمة الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، التي ستجرى أطوارها النهائية بين المتبارين من مختلف الأكاديميات الجهوية، بمدينة تافراوت الصيف المقبل.\nوتأتي هذه التظاهرة التربوية دعما لتدريس اللغة الأمازيغية وإذكاء لروح المنافسة بين المتعلمين، وفي إطار تفعيل الطابع الرسمي للغة والثقافة الأمازيغيتين.', '2023-05-14', '2023-05-11 17:18:57', '2023-05-11 17:18:57'),
(5, 'ندوة', 'م تنفيذ المسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11 في مختلف المؤسسات التعليمية الابتدائية بالتعاون بين الأكاديمية الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، وستقام الأطوار النهائية في مدينة تافراوت في الصيف المقبل.\n\n\n\n\n', 'مسابقة الوطنية لأولمبياد تيفيناغ ', 'تنزيلا للمذكرة الأكاديمية عدد 1862/23 بتاريخ 14 أبريل 2023، شهدت مختلف المؤسسات التعليمية الابتدائية التي عبرت عن المشاركة بدوائر الإقليم، تمرير الرائز الإقليمي للمسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11، في إطار الشراكة الثلاثية بين الأكاديمة الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، التي ستجرى أطوارها النهائية بين المتبارين من مختلف الأكاديميات الجهوية، بمدينة تافراوت الصيف المقبل.\nوتأتي هذه التظاهرة التربوية دعما لتدريس اللغة الأمازيغية وإذكاء لروح المنافسة بين المتعلمين، وفي إطار تفعيل الطابع الرسمي للغة والثقافة الأمازيغيتين.', '2023-05-27', '2023-05-11 17:19:20', '2023-05-11 17:19:20'),
(6, 'حفلة', 'م تنفيذ المسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11 في مختلف المؤسسات التعليمية الابتدائية بالتعاون بين الأكاديمية الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، وستقام الأطوار النهائية في مدينة تافراوت في الصيف المقبل.\n\n\n\n\n', 'مسابقة الوطنية لأولمبياد تيفيناغ ', 'تنزيلا للمذكرة الأكاديمية عدد 1862/23 بتاريخ 14 أبريل 2023، شهدت مختلف المؤسسات التعليمية الابتدائية التي عبرت عن المشاركة بدوائر الإقليم، تمرير الرائز الإقليمي للمسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11، في إطار الشراكة الثلاثية بين الأكاديمة الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، التي ستجرى أطوارها النهائية بين المتبارين من مختلف الأكاديميات الجهوية، بمدينة تافراوت الصيف المقبل.\nوتأتي هذه التظاهرة التربوية دعما لتدريس اللغة الأمازيغية وإذكاء لروح المنافسة بين المتعلمين، وفي إطار تفعيل الطابع الرسمي للغة والثقافة الأمازيغيتين.', '2023-05-27', '2023-05-12 07:48:52', '2023-05-12 07:48:52'),
(7, 'اجتماع', 'م تنفيذ المسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11 في مختلف المؤسسات التعليمية الابتدائية بالتعاون بين الأكاديمية الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، وستقام الأطوار النهائية في مدينة تافراوت في الصيف المقبل.\n\n\n\n\n', 'مسابقة الوطنية لأولمبياد تيفيناغ ', 'تنزيلا للمذكرة الأكاديمية عدد 1862/23 بتاريخ 14 أبريل 2023، شهدت مختلف المؤسسات التعليمية الابتدائية التي عبرت عن المشاركة بدوائر الإقليم، تمرير الرائز الإقليمي للمسابقة الوطنية لأولمبياد تيفيناغ في دورتها 11، في إطار الشراكة الثلاثية بين الأكاديمة الجهوية للتربية والتكوين لجهة سوس ماسة والمعهد الملكي للثقافة الأمازيغية وجمعية فستفال تيفاوين، التي ستجرى أطوارها النهائية بين المتبارين من مختلف الأكاديميات الجهوية، بمدينة تافراوت الصيف المقبل.\nوتأتي هذه التظاهرة التربوية دعما لتدريس اللغة الأمازيغية وإذكاء لروح المنافسة بين المتعلمين، وفي إطار تفعيل الطابع الرسمي للغة والثقافة الأمازيغيتين.', '2023-05-02', '2023-05-12 07:49:39', '2023-05-12 07:49:39');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `event_id`, `path`, `name`, `created_at`, `updated_at`) VALUES
(8, 3, 'storage/images/0i4YDnaBtcLnNnVbn3NbMnHLyk2q0QPMUwXuVqTz.jpg', 'ADMIN SQUENCE DIAGRAMMME.png', '2023-05-11 14:15:50', '2023-05-11 14:15:50'),
(9, 3, 'storage/images/347578853_112251595207581_212833937289861888_n.jpg', 'adminsequence.png', '2023-05-11 14:15:50', '2023-05-11 14:15:50'),
(10, 3, 'storage/images/347788264_477643144545192_5731070950538623880_n.jpg', 'Capture d’écran 2023-05-01 123153.png', '2023-05-11 14:15:50', '2023-05-11 14:15:50'),
(11, 4, 'storage/images/0i4YDnaBtcLnNnVbn3NbMnHLyk2q0QPMUwXuVqTz.jpg', 'gantt.png', '2023-05-11 17:18:57', '2023-05-11 17:18:57'),
(12, 4, 'storage/images/347578853_112251595207581_212833937289861888_n.jpg', 'IMAGE.png', '2023-05-11 17:18:57', '2023-05-11 17:18:57'),
(13, 4, 'storage/images/347788264_477643144545192_5731070950538623880_n.jpg', 'imagea.jpeg', '2023-05-11 17:18:57', '2023-05-11 17:18:57'),
(14, 4, 'storage/images/348219564_1979176069122927_1521812992246711555_n.jpg', 'images.png', '2023-05-11 17:18:57', '2023-05-11 17:18:57'),
(15, 4, 'storage/images/348233956_761509829026419_6667707498527190695_n.jpg', 'logoDirection.jpg', '2023-05-11 17:18:57', '2023-05-11 17:18:57'),
(16, 5, 'storage/images/0i4YDnaBtcLnNnVbn3NbMnHLyk2q0QPMUwXuVqTz.jpg', 'imagea.jpeg', '2023-05-11 17:19:20', '2023-05-11 17:19:20'),
(17, 5, 'storage/images/images.png', 'images.png', '2023-05-11 17:19:20', '2023-05-11 17:19:20'),
(18, 6, 'storage/images/s1.jpg', 's1.jpg', '2023-05-12 07:48:52', '2023-05-12 07:48:52'),
(19, 6, 'storage/images/s2.jpg', 's2.jpg', '2023-05-12 07:48:52', '2023-05-12 07:48:52'),
(20, 6, 'storage/images/study2.jpg', 'study2.jpg', '2023-05-12 07:48:52', '2023-05-12 07:48:52'),
(21, 7, 'storage/images/favorite.png', 'favorite.png', '2023-05-12 07:49:39', '2023-05-12 07:49:39'),
(22, 7, 'storage/images/search.png', 'search.png', '2023-05-12 07:49:39', '2023-05-12 07:49:39'),
(23, 7, 'storage/images/index.png', 'index.png', '2023-05-12 07:49:39', '2023-05-12 07:49:39'),
(24, 7, 'storage/images/Acceuill.png', 'Acceuill.png', '2023-05-12 07:49:39', '2023-05-12 07:49:39'),
(25, 7, 'storage/images/register.png', 'register.png', '2023-05-12 07:49:39', '2023-05-12 07:49:39');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `content`, `created_at`, `read_at`) VALUES
(1, 1, 15, 'lk', '2023-05-04 09:23:23', NULL),
(2, 1, 15, 'lk', '2023-05-04 09:24:17', NULL),
(3, 1, 15, 'lk', '2023-05-04 09:24:23', NULL),
(4, 1, 15, 'lk', '2023-05-04 09:24:38', NULL),
(5, 1, 14, 'klk', '2023-05-04 09:39:21', NULL),
(6, 1, 14, 'lkjklj', '2023-05-04 09:41:00', NULL),
(7, 1, 14, 'kjlj', '2023-05-04 09:41:04', NULL),
(8, 15, 1, 'KLLH', '2023-05-04 09:42:28', '2023-05-10 18:52:39'),
(9, 15, 1, 'KJLJ9POML', '2023-05-04 09:42:36', '2023-05-10 18:52:39'),
(10, 15, 1, ',;', '2023-05-04 09:46:27', '2023-05-10 18:52:39'),
(11, 1, 15, 'lkjl', '2023-05-04 09:49:23', NULL),
(12, 15, 16, 'hi', '2023-05-04 09:51:21', NULL),
(13, 15, 17, 'salut', '2023-05-04 09:51:27', NULL),
(14, 228, 1, 'lkjljljlj', '2023-05-04 19:07:42', NULL),
(15, 233, 234, 'kjlkjlkjl', '2023-05-04 19:12:40', NULL),
(16, 233, 1, 'kjljlj', '2023-05-04 19:13:14', NULL),
(17, 1, 228, 'jhkh', '2023-05-04 19:14:08', NULL),
(18, 1, 228, 'salam nadiz', '2023-05-04 19:14:50', NULL),
(19, 1, 228, 'salam nadiz', '2023-05-04 19:14:51', NULL),
(20, 1, 228, 'salam nadiz', '2023-05-04 19:14:51', NULL),
(21, 2, 1, 'salut', '2023-05-05 06:57:36', '2023-05-10 19:49:20'),
(22, 1, 2, 'bonjour', '2023-05-05 06:58:33', '2023-05-07 21:32:46'),
(23, 2, 1, 'kljljljlj', '2023-05-07 16:38:01', '2023-05-10 19:49:20'),
(24, 2, 1, 'OPIPI', '2023-05-07 18:01:21', '2023-05-10 19:49:20'),
(25, 2, 1, 'kjlk', '2023-05-07 18:02:30', '2023-05-10 19:49:20'),
(26, 1, 2, 'cv monsieur', '2023-05-07 18:15:34', '2023-05-07 21:32:46'),
(27, 1, 2, 'oui cv', '2023-05-07 18:32:17', '2023-05-07 21:32:46'),
(28, 2, 1, 'bien merci', '2023-05-07 18:33:00', '2023-05-10 19:49:20'),
(29, 2, 4, 'S IL VOUS PLAIS IL FAUT QUE TU REGLER VOTRE P', '2023-05-10 15:23:38', NULL),
(30, 2, 1, 'hi cv cv cv', '2023-05-10 15:51:00', '2023-05-10 19:49:20'),
(31, 2, 1, 's il vous plais le taux d\'', '2023-05-10 15:52:17', '2023-05-10 19:49:20'),
(32, 2, 4, 'bon jour mosieur le diricteur s il vous plis j ai remarquer que le taux d.......', '2023-05-14 10:31:44', NULL),
(33, 1, 20, 'lkjlh', '2023-05-14 11:33:23', NULL),
(34, 1, 20, 'bonjour', '2023-05-14 12:34:33', NULL),
(35, 2, 3, 'lkjlkjlkjlkjlj', '2023-05-17 08:25:13', NULL),
(36, 2, 12, 'salut', '2023-05-22 21:04:20', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_11_23_102952_add_message', 1),
(6, '2023_04_13_114421_create_rapport_table', 1),
(7, '2023_04_13_123705_create_admins_table', 1),
(8, '2023_05_11_151400_create_events_table', 1),
(9, '2023_05_11_154645_create_images_table', 1),
(10, '2023_05_12_154300_create_Avis_table', 1),
(11, '2023_05_17_154845_create_Reclamation_table', 1),
(12, '2023_05_18_154646_create_documents_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `typeClass` varchar(255) DEFAULT NULL,
  `absenceFirstPrimaire` varchar(255) DEFAULT '0',
  `totalFirstPrimaire` int(11) DEFAULT 0,
  `absenceSecondPrimaire` int(11) DEFAULT 0,
  `totalSecondPrimaire` int(11) DEFAULT 0,
  `absenceThirdPrimaire` int(11) DEFAULT 0,
  `totalThirdPrimaire` int(11) DEFAULT 0,
  `absenceFourthPrimaire` int(11) DEFAULT 0,
  `totalFourthPrimaire` int(11) DEFAULT 0,
  `absenceFifthPrimaire` int(11) DEFAULT 0,
  `totalFifthPrimaire` int(11) DEFAULT 0,
  `absenceSixthPrimaire` int(11) DEFAULT 0,
  `totalSixthPrimaire` int(11) DEFAULT 0,
  `absenceFirstCollege` int(11) DEFAULT 0,
  `totalFirstCollege` int(11) DEFAULT 0,
  `absenceSecondCollege` int(11) DEFAULT 0,
  `totalSecondCollege` int(11) DEFAULT 0,
  `absenceThirdCollege` int(11) DEFAULT 0,
  `totalThirdCollege` int(11) DEFAULT 0,
  `absenceFirstLycee` int(11) DEFAULT 0,
  `totalFirstLycee` int(11) DEFAULT 0,
  `absenceSecondLycee` int(11) DEFAULT 0,
  `totalSecondLycee` int(11) DEFAULT 0,
  `absenceThirdLycee` int(11) DEFAULT 0,
  `totalThirdLycee` int(11) DEFAULT 0,
  `absenceFirstComptabiliteGeneral` int(11) DEFAULT 0,
  `totalFirstComptabiliteGeneral` int(11) DEFAULT 0,
  `absenceSecondComptabiliteGeneral` int(11) DEFAULT 0,
  `totalSecondComptabiliteGeneral` int(11) DEFAULT 0,
  `absenceFirstManagementCommercial` int(11) DEFAULT 0,
  `totalFirstManagementCommercial` int(11) DEFAULT 0,
  `absenceSecondManagementCommercial` int(11) DEFAULT 0,
  `totalSecondManagementCommercial` int(11) DEFAULT 0,
  `nbEmployee` int(11) DEFAULT NULL,
  `nbAbsenceEmployee` int(11) DEFAULT NULL,
  `nbRetardEmployee` int(11) DEFAULT NULL,
  `nbSeanceProgramme` int(11) DEFAULT NULL,
  `nbSeanceEffecuter` int(11) DEFAULT NULL,
  `nbSeanceComponser` int(11) DEFAULT NULL,
  `renionEffectuerConseilAdministratif` varchar(255) DEFAULT NULL,
  `renionEffectuerConseilsDepartementaux` varchar(255) DEFAULT NULL,
  `renionEffectuerConseilsPedagogiqueTa3limi` varchar(255) DEFAULT NULL,
  `renionEffectuerConseilsPedagogiqueTrbaoui` varchar(255) DEFAULT NULL,
  `renionEffectuerConseilDeGestion` varchar(255) DEFAULT NULL,
  `renionEffectuerAutreRenion` varchar(255) DEFAULT NULL,
  `renionEffectuerRien` varchar(255) DEFAULT NULL,
  `activiteEffectuerIntégrée` varchar(255) DEFAULT NULL,
  `activiteEffectuerParallel` varchar(255) DEFAULT NULL,
  `activiteEffectuerRien` varchar(255) DEFAULT NULL,
  `rapportActiviteEffectuer` varchar(255) DEFAULT NULL,
  `rapportVisit` varchar(255) DEFAULT NULL,
  `rapportAccidentScolaire` varchar(255) DEFAULT NULL,
  `different` varchar(255) DEFAULT NULL,
  `classInterieur` varchar(255) DEFAULT NULL,
  `inscritPetitDejeuner` int(11) DEFAULT NULL,
  `presentPetitDejeuner` int(11) DEFAULT NULL,
  `inscritDejeuner` int(11) DEFAULT NULL,
  `presentDejeuner` int(11) DEFAULT NULL,
  `inscritDinner` int(11) DEFAULT NULL,
  `presentDinner` int(11) DEFAULT NULL,
  `RespectProgrammeNutritional` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `presentRevision` int(11) DEFAULT NULL,
  `adressIp` varchar(255) DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id`, `users_id`, `date`, `typeClass`, `absenceFirstPrimaire`, `totalFirstPrimaire`, `absenceSecondPrimaire`, `totalSecondPrimaire`, `absenceThirdPrimaire`, `totalThirdPrimaire`, `absenceFourthPrimaire`, `totalFourthPrimaire`, `absenceFifthPrimaire`, `totalFifthPrimaire`, `absenceSixthPrimaire`, `totalSixthPrimaire`, `absenceFirstCollege`, `totalFirstCollege`, `absenceSecondCollege`, `totalSecondCollege`, `absenceThirdCollege`, `totalThirdCollege`, `absenceFirstLycee`, `totalFirstLycee`, `absenceSecondLycee`, `totalSecondLycee`, `absenceThirdLycee`, `totalThirdLycee`, `absenceFirstComptabiliteGeneral`, `totalFirstComptabiliteGeneral`, `absenceSecondComptabiliteGeneral`, `totalSecondComptabiliteGeneral`, `absenceFirstManagementCommercial`, `totalFirstManagementCommercial`, `absenceSecondManagementCommercial`, `totalSecondManagementCommercial`, `nbEmployee`, `nbAbsenceEmployee`, `nbRetardEmployee`, `nbSeanceProgramme`, `nbSeanceEffecuter`, `nbSeanceComponser`, `renionEffectuerConseilAdministratif`, `renionEffectuerConseilsDepartementaux`, `renionEffectuerConseilsPedagogiqueTa3limi`, `renionEffectuerConseilsPedagogiqueTrbaoui`, `renionEffectuerConseilDeGestion`, `renionEffectuerAutreRenion`, `renionEffectuerRien`, `activiteEffectuerIntégrée`, `activiteEffectuerParallel`, `activiteEffectuerRien`, `rapportActiviteEffectuer`, `rapportVisit`, `rapportAccidentScolaire`, `different`, `classInterieur`, `inscritPetitDejeuner`, `presentPetitDejeuner`, `inscritDejeuner`, `presentDejeuner`, `inscritDinner`, `presentDinner`, `RespectProgrammeNutritional`, `quality`, `quantity`, `presentRevision`, `adressIp`, `mac_address`, `created_at`, `updated_at`) VALUES
(4, 3, '2023-04-21', 'PRIMAIRE', '45', 78, 55, 78, 55, 90, 55, 0, 55, 89, 55, 99, 9, 90, 78, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'OUI', 'OUI', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2023-05-11 07:03:03', '2023-05-04 07:53:36'),
(5, 251, '2023-04-19', 'SECONDAIRE QUALIFIANT', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 44, 44, 78, 23, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'NON', 'NON', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2023-05-11 07:03:03', '2023-05-04 07:53:36'),
(6, 1, '2023-04-19', 'PRIMAIRE', '1', 3, 1, 2, 1, 2, 1, 0, 2, 0, 2, 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 0, 0, 0, 3, '0', '0', 'oui', 'oui', 'oui', '0', '0', 'oui', 'oui', '0', 'rapport1', 'rapport2', 'IO', 'rapport3', 'oui', 2, 4, 2, 2, 7, 1, 1, 5, 2, 3, '105.67.2.241', '9C-29-76-52-3B-F3', '2023-05-11 07:03:03', '2023-05-08 05:27:38'),
(7, 1, '2023-04-26', 'PRIMAIRE', '200', 0, 1, 1, 3, 0, 1, 0, 1, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 3, 1, 2, 'oui', 'oui', 'oui', '0', '0', 'oui', '0', '0', 'oui', '0', 'rapport1', 'rapport2', 'rapport3', 'rapport4', 'oui', 2, 2, 2, 0, 1, 1, 1, 2, 3, 2, '105.67.2.241', '9C-29-76-52-3B-F3', '2023-05-11 07:03:03', '2023-05-08 05:28:48'),
(9, 228, '2023-05-27', 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 3, 2, 2, 2, 3, 0, 2, 2, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 1, 2, 1, 0, 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'oui', 'non', 'non', 'iu', 'oiu', 'oiu', 'oi', 'oui', 0, 1, 0, 0, 0, 0, 0, 5, 0, 3, '105.67.129.196', '86-91-1F-11-9B-4B', '2023-05-11 07:03:03', '2023-05-04 07:03:03'),
(23, 228, '2023-05-04', 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 0, 0, 1, 1, 1, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 1, 0, 3, 1, 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'oui', 'non', 'non', 'o', 'uop', 'pou', 'uop', 'oui', 2, 3, 3, 3, 1, 2, 1, 2, 2, 0, '41.143.85.124', '00-E0-4C-36-B0-26', '2023-05-11 07:03:03', '2023-05-04 07:03:03'),
(25, 233, '2023-05-25', 'BTS + SECONDAIRE QUALIFIANT', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2, 2, 2, 1, 1, 2, 3, 3, 2, 2, 2, 2, 2, 1, 2, 2, 3, '0', '0', '0', '0', '0', '0', '0', '0', 'oui', '0', 'rapport1', 'rapport2', 'rapport3', 'rapport4', 'oui', 1, 3, 1, 1, 2, 2, 1, 3, 4, 0, '105.67.2.241', '9C-29-76-52-3B-F3', '2023-05-12 07:03:03', '2023-05-08 05:34:17'),
(27, 229, '2023-05-27', 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 1, 1, 1, 2, 1, 2, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2, 0, 2, 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'oui', 'non', 'non', 'rapport 1', 'rapport 1', 'rapport 1', 'rapport 1', 'oui', 4, 2, 1, 0, 2, 2, 1, 2, 2, 1, '105.67.0.253', '9C-29-76-52-3B-F3', '2023-05-13 07:03:03', '2023-05-07 15:18:57'),
(28, 1, '2023-05-18', 'PRIMAIRE', '2', 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 'non', 'non', 'non', 'oui', 'oui', 'non', 'non', 'oui', 'non', 'non', 'RAP1', 'RAP11', 'RAP1', 'RAP1', 'non', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, '105.67.133.131', '9C-29-76-52-3B-F3', '2023-05-23 08:49:14', '2023-05-23 08:49:14');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `CNI` varchar(255) DEFAULT NULL,
  `ll_com` varchar(255) DEFAULT NULL,
  `NOM_ETABL` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `adressIp` varchar(255) DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `users_id`, `first_name`, `last_name`, `CNI`, `ll_com`, `NOM_ETABL`, `phone`, `content`, `adressIp`, `mac_address`, `created_at`, `updated_at`, `status`) VALUES
(2, 3, 'Irwin', 'Bogisichll', 'klj', NULL, 'Irwin Bogisichll', '0614288077', 'jlj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 18:10:42', '2023-05-17 18:10:42', 1),
(3, 3, 'Irwin', 'Bogisichll', 'lmk', NULL, 'mlk', 'mlk', 'lm', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 18:23:42', '2023-05-17 18:23:42', 0),
(5, 3, 'Irwin', 'Bogisichll', 'klj', NULL, 'lkj', 'lkj', 'ljk', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 18:30:47', '2023-05-17 18:30:47', 0),
(6, 3, 'Irwin', 'Bogisichll', 'kj', NULL, 'k', 'kj', 'kj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 18:40:45', '2023-05-17 18:40:45', 0),
(8, 3, 'Irwin', 'Bogisichll', 'klj', NULL, 'Irwin Bogisichll', '0614288077', 'jlj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:10:42', '2023-05-17 17:10:42', 1),
(9, 3, 'Irwin', 'Bogisichll', 'lmk', NULL, 'mlk', 'mlk', 'lm', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:23:42', '2023-05-17 17:23:42', 0),
(10, 3, 'Irwin', 'Bogisichll', 'klj', NULL, 'lkj', 'lkj', 'ljk', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:30:47', '2023-05-17 17:30:47', 0),
(11, 3, 'Irwin', 'Bogisichll', 'kj', NULL, 'k', 'kj', 'kj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:40:45', '2023-05-17 17:40:45', 0),
(12, 3, 'Irwin', 'Bogisichll', 'klj1', NULL, 'Irwin Bogisichll', '0614288077', 'jlj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:10:42', '2023-05-17 17:10:42', 1),
(13, 3, 'Irwin', 'Bogisichll', 'lmk1', NULL, 'mlk', 'mlk', 'lm', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:23:42', '2023-05-17 17:23:42', 1),
(14, 3, 'Irwin', 'Bogisichll', 'klj1', NULL, 'lkj', 'lkj', 'ljk', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:30:47', '2023-05-17 17:30:47', 1),
(15, 3, 'Irwin', 'Bogisichll', 'kj1', NULL, 'k', 'kj', 'kj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:40:45', '2023-05-17 17:40:45', 1),
(16, 3, 'Irwin', 'Bogisichll', 'klj2', NULL, 'Irwin Bogisichll', '0614288077', 'jlj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:10:42', '2023-05-17 17:10:42', 2),
(17, 3, 'Irwin', 'Bogisichll', 'lmk2', NULL, 'mlk', 'mlk', 'lm', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:23:42', '2023-05-17 17:23:42', 2),
(18, 3, 'Irwin', 'Bogisichll', 'klj2', NULL, 'lkj', 'lkj', 'ljk', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:30:47', '2023-05-17 17:30:47', 2),
(19, 3, 'Irwin', 'Bogisichll', 'kj2', NULL, 'k', 'kj', 'kj', '105.66.130.146', '9C-29-76-52-3B-F3', '2023-05-17 17:40:45', '2023-05-17 17:40:45', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CD_ETAB` varchar(255) DEFAULT NULL,
  `NOM_ETABL` varchar(255) DEFAULT NULL,
  `NOM_ETABA` varchar(255) DEFAULT NULL,
  `la_com` varchar(255) DEFAULT NULL,
  `ll_com` varchar(255) DEFAULT NULL,
  `typeEtab` varchar(255) DEFAULT NULL,
  `LL_CYCLE` varchar(255) DEFAULT NULL,
  `LA_CYCLE` varchar(255) DEFAULT NULL,
  `NetabFr` varchar(255) DEFAULT NULL,
  `CD_GIPE` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `CD_ETAB`, `NOM_ETABL`, `NOM_ETABA`, `la_com`, `ll_com`, `typeEtab`, `LL_CYCLE`, `LA_CYCLE`, `NetabFr`, `CD_GIPE`, `password`, `image`, `role`, `created_at`, `updated_at`) VALUES
(1, '16698Z', 'ECOLE LALLA MERIEME', 'م. للا مريم', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P01', 'd3z326ti', 'images/IMAGE.png', 'user', NULL, '2023-05-23 08:46:32'),
(2, '16699A', 'ECOLE 18 NOVEMBRE', 'م. 18 نونبر', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P02', 'password1', '/images/oUfIDvPYSk3pO72ULs6SObXZe7cp75PPWiYFcnBk.jpg', 'admin', NULL, '2023-05-18 18:32:10'),
(3, '16700B', 'ECOLE BIR ANZARANE', 'م. بئر انزران', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P03', 'password1', 'images/IMAGE.png', 'visiteur', NULL, '2023-05-19 20:54:00'),
(4, '16701C', 'LYCEE COLLEGIAL IBN ROCHD', 'الثانوية الاعدادية ابن رشد', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73700P04', 'ohguq1ik', '', '', NULL, '2023-05-01 08:44:22'),
(5, '16702D', 'ECOLE HASSAN I', 'م. الحسن الاول', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P05', 'un9yvapt', '', '', NULL, '2023-04-26 15:30:20'),
(6, '16703E', 'ECOLE AIN EZZARKA', 'م. العين الزرقاء', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P07', 'password', '', '', NULL, NULL),
(7, '16704F', 'ECOLE ALMOKHTAR ASSOUSSI', 'م. المختار السوسي', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P06', 'password', '', '', NULL, NULL),
(8, '16706H', 'ECOLE AL WAFA', 'م. الوفاء', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P12', 'yjy6pqji', '', '', NULL, '2023-05-22 20:25:30'),
(9, '16707J', 'ECOLE EL YAAKOUBI', 'م. اليعقوبي', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P10', 'password', '', '', NULL, NULL),
(10, '16708K', 'ECOLE MOULAY EZZINE', 'م. مولاي الزين', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P11', 'password', '', '', NULL, NULL),
(11, '16709L', 'ECOLE MOHAMED V', 'م. محمد الخامس', 'تافراوت (البلدية)', 'Tafraout (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73511P01', 'password', '', '', NULL, NULL),
(12, '16712P', 'ECOLE MOHAMED VI TALAINT', 'م. محمد السادس تالعينت', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73713P04', 'password', '', '', NULL, NULL),
(13, '16716U', 'SS ALLOUZ UNITE ADAY', 'م.م اللوز فرعية اداي', 'تافراوت (البلدية)', 'Tafraout (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73511P02', 'password', '', '', NULL, NULL),
(14, '16851R', 'EC TARSOUAT CENTRE TARSOUAT', 'م.ج تارسواط مركزية تارسواط', 'تارسوات', 'Tarsouat', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73519P01', 'password', '', '', NULL, NULL),
(15, '16856W', 'EC SIDI AISSA CENTRE IZERBI', 'م.ج سيدي عيسى مركزية ازربي', 'تارسوات', 'Tarsouat', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73100P06', 'password', '', '', NULL, NULL),
(16, '16863D', 'SS IDRISS II CENTRE TASSRIRT', 'م.م ادريس الثاني مركزية تاسريرت', 'تاسريرت', 'Tassrirt', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73517P01', 'password', '', '', NULL, NULL),
(17, '16864E', 'SS IDRISS II UNITE TIZARKIN', 'م.م ادريس الثاني فرعية تزركين', 'تاسريرت', 'Tassrirt', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73517P01', 'password', '', '', NULL, NULL),
(18, '16866G', 'SS IDRISS II UNITE AYIRD', 'م.م ادريس الثاني فرعية ايغد', 'تاسريرت', 'Tassrirt', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73517P01', 'password', '', '', NULL, NULL),
(19, '16868J', 'SS IDRISS II UNITE TALATE ZOUGARTE', 'م.م  ادريس الثاني فرعية تلات زكاغت', 'تاسريرت', 'Tassrirt', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73517p01', 'password', '', '', NULL, NULL),
(20, '16871M', 'EC ELHOUDAYGUI CENTRE AFELLA IGHIR', 'م.ج الحضيكي مركز افلا اغير', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73505P01', 'password', '', 'user', NULL, NULL),
(21, '16873P', 'SS SAADIYINE UNITE AIT BOUNOUH', 'م.م السعديين فرعية ايت بنوح', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', 'user', NULL, NULL),
(22, '16877U', 'SS SAADIYINE UNITE TAGMOUT', 'م.م السعديين فرعية تكموت', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(23, '16878V', 'SS SAADIYINE UNITE AOUKLID', 'م.م السعديين فرعية اوكليض', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(24, '16879W', 'SS SAADIYINE CENTRE TIMAGICHT', 'م.م السعديين مركزية تيمكيشت', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '', 'password', '', 'user', NULL, NULL),
(25, '16881Y', 'EC TAHALA CENTRE TAHALA', 'م.ج تهالة مركز تهالة', 'ايريغ  نتاهلة', 'Irigh N\'Tahala', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73507P01', 'password', '', '', NULL, NULL),
(26, '16888F', 'SS ALMOKHTAR ASSOUSSI CENTRE AIT OUAFQA', 'م.م المختار السوسي مركزية ايت وافقا', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73509P01', 'password', '', 'user', NULL, NULL),
(27, '16889G', 'SS BAKAR HOUCINE BEN HAISSON UNITE AGNI DIANE', 'م.م بكار حسين بن حيسون فرعية اكني اديان', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73460P21', 'password', '', 'user', NULL, NULL),
(28, '16890H', 'SS ALMOKHTAR ASSOUSSI UNITE TAFOUGAGHT', 'م.م المختار السوسي فرعية تافكاغت', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(29, '16891J', 'SS ALABDARI UNITE TIZI NTAWIT', 'م.م العبدري فرعية تزي نتاويت', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73509P02', 'password', '', 'user', NULL, NULL),
(30, '16892K', 'SS BAKAR HOUCINE BEN HAISSON UNITE SLATE', 'م.م بكار حسين بن حيسون فرعية سلات', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '16892K', 'password', '', 'user', NULL, NULL),
(31, '16893L', 'SS ALABDARI CENTRE IGUILIZ', 'م.م العبدري مركزية اكيليز', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73509P02', 'password', '', 'user', NULL, NULL),
(32, '16894M', 'SS ALABDARI UNITE MESTALAT', 'م.م العبدري فرعية مستلات', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73509P02', 'password', '', 'user', NULL, NULL),
(33, '16895N', 'SS BAKAR HOUCINE BEN HAISSON CENTRE ANAMER IGHECHA', 'م.م بكار حسين بن حيسون مركزية انامر اغشان', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460P21', 'password', '', 'user', NULL, NULL),
(34, '16896P', 'SS ALMOKHTAR ASSOUSSI UNITE AGUERD OUFKIR', 'م.م المختار السوسي فرعية اكرض افقير', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(35, '16897R', 'SS ALABDARI UNITE TIZORZINE', 'م.م العبدري فرعية تيزورزين', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73509P02', 'password', '', 'user', NULL, NULL),
(36, '16898S', 'SS AL ADARISSA CENTRE DOUGADIR', 'م.م الادارسة مركزية الدوكادير', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73213P01', 'password', '', 'user', NULL, NULL),
(37, '16899T', 'SS AL ADARISSA UNITE TAYOUT', 'م.م الادارسة فرعية تيوت', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73213P01', 'password', '', 'user', NULL, NULL),
(38, '16900U', 'SS AL ADARISSA UNITE YOUSGAGHT', 'م.م الادارسة فرعية يوسكاغت', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(39, '16901V', 'EC ALMASSIRA ALKHADRA CENTRE ADAY', 'م.ج المسيرة الخضراء مركز أداي', 'اثنين أداي', 'Tnine Aday', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73105P02', 'password', '', '', NULL, NULL),
(40, '16903X', 'EC ALMASSIRA ALKHADRA ANNEXE TANOUT', 'م.ج المسيرة الخضراء ملحقة تنوت', 'اثنين أداي', 'Tnine Aday', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(41, '16904Y', 'EC ALMASSIRA ALKHADRA ANNEXE TINIT', 'م.ج المسيرة الخضراء ملحقة تينيت', 'اثنين أداي', 'Tnine Aday', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(42, '16905Z', 'EC ALMASSIRA ALKHADRA ANNEXE AGDIM', 'م.ج المسيرة الخضراء ملحقة اكديم', 'اثنين أداي', 'Tnine Aday', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(43, '16912G', 'EC ABDELMOUMEN CENTRE ANZI', 'م.ج عبد المومن مركز انزي', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73105P01', 'password', '', 'user', NULL, NULL),
(44, '16913H', 'SS LAHOUCINE BEN BIROUK BEN AABLA CENTRE DAR LARBA', 'م.م الحسين بن بيروك بن عبلا مركزية دار الاربعاء', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460p26', 'password', '', 'user', NULL, NULL),
(45, '16916L', 'SS ACHNIT AHMED BEN BELAID UNITE IGROUMA', 'م.م اشنيط احمد بن بلعيد فرعية اكروما', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(46, '16917M', 'SS ALHOUDA CENTRE IMI OUGNI', 'م.م الهدى مركزية امي اوكني', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73215P01', 'password', '', 'user', NULL, NULL),
(47, '16918N', 'SS ALHOUDA UNITE TAMDGNOUT', 'م.م الهدى فرعية تمدكنوت', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(48, '16921S', 'EC LALLA ASMAE TIGHMI CENTRE TIGHMI', 'م.ج للااسماء تيغمي المركز', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73113P01', 'password', '', '', NULL, NULL),
(49, '16923U', 'EC LALLA ASMAE TIGHMI ANNEXE AFA OUZOUR', 'م.ج للااسماء تيغمي ملحقة افاوزور', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(50, '16926X', 'SS 20 OUT UNITE TIWARGANE', 'م.م 20 غشت فرعية تيواركان', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73113P02', 'password', '', '', NULL, NULL),
(51, '16927Y', 'SS ACHNIT AHMED BEN BELAID CENTRE INJJARN', 'م.م اشنيط احمد بن بلعيد مركزية انجارن', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '', 'password', '', 'user', NULL, NULL),
(52, '16928Z', 'SS LAHOUCINE BEN BIROUK BEN AABLA UNITE DIRANE', 'م.م الحسين بن بيروك بن عبلا فرعية الديران', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '928Z000', 'password', '', 'user', NULL, NULL),
(53, '16930B', 'SS 20 AOUT CENTRE AMASSINE', 'م.م 20 غشت مركزية اماسين', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73217P01', 'password', '', '', NULL, NULL),
(54, '16931C', 'SS 20 AOUT UNITE TASSAOUNT', 'م.م 20 غشت فرعية تساونت', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(55, '16932D', 'SS 20 AOUT UNITE TINIREN', 'م.م 20 غشت فرعية تينيرن', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '932d000', 'password', '', '', NULL, NULL),
(56, '16933E', 'SS 20 AOUT UNITE ID BAHA', 'م.م 20 غشت فرعية ادباها', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '933e000', 'password', '', '', NULL, NULL),
(57, '16934F', 'SS ALLAL BEN ABDELLAH CENTRE TILOGASSE', 'م.م علال ابن عبد الله مركزية تلوكاس', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '16934F', 'password', '', '', NULL, NULL),
(58, '16935G', 'SS ALLAL BEN ABDELLAH UNITE TASSILA', 'م.م علال ابن عبد الله فرعية تاسيلا', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73111p01', 'password', '', '', NULL, NULL),
(59, '16936H', 'SS AHMED BAHNINI CENTRE TAGHZOUT', 'م.م احمد باحنيني مركزية تاغزوت', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73111p03', 'password', '', '', NULL, NULL),
(60, '16937J', 'SS AHMED BAHNINI UNITE AIT IHYA', 'م.م احمد باحنيني فرعية ايت احيا', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(61, '16938K', 'SS AHMED BAHNINI UNITE AZILLAL', 'م.م احمد باحنيني فرعية ازيلال', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(62, '16939L', 'SS AHMED BEN BOUJMAA CENTRE TINKTTOF', 'م.م احمد بن بوجمعة مركزية تنكطوف', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73111p02', 'password', '', '', NULL, NULL),
(63, '16940M', 'SS ALMOUTANABBI CENTRE AIT WIDIRN', 'م.م المتنبي مركزية ايت وديرن', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73100P07', 'password', '', '', NULL, NULL),
(64, '16941N', 'SS AHMED BEN BOUJMAA UNITE AGRD NTMZGUID', 'م.م احمد بن بوجمعة فرعية اكرض نتمزكيد', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(65, '16943R', 'SS ALHOUDA UNITE AIT BAZI', 'م.م الهدى فرعية ايت بازي', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(66, '16946U', 'SS AZZOHOR CENTRE ANMESS', 'م.م الزهور مركزية انمس', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73100P13', 'password', '', '', NULL, NULL),
(67, '16947V', 'SS AZZOHOR UNITE FOUALOUSS', 'م.م الزهور فرعية فوالوس', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '1963V', 'password', '', '', NULL, NULL),
(68, '16948W', 'SS AZZOHOR UNITE AGRD NDRISS', 'م.م الزهور فرعية اكرض ندريس', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(69, '16949X', 'SS AZZOHOR UNITE TIMZGOU', 'م.م الزهور فرعية تمزكو', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(70, '16950Y', 'SS AZZOHOR UNITE AGRD OUMGDOUL', 'م.م الزهور فرعية اكرض امكدول', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(71, '16951Z', 'SS AZZOHOR UNITE INAJAREN', 'م.م الزهور فرعية انجارن', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(72, '16952A', 'SS ABDELLAH BNO YASSIN CENTRE IDA OUSMLAL', 'م.م عبد الله ابن ياسين مركزية اداوسملال', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73119P01', 'password', '', '', NULL, NULL),
(73, '16953B', 'SS ABDELLAH BNO YASSIN UNITE TAZIMAMTE', 'م.م عبد الله ابن ياسين فرعية تازمامت', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(74, '16954C', 'SS ABDELLAH BNO YASSIN UNITE TAKATART', 'م.م عبد الله ابن ياسين فرعية تكاترت', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(75, '16955D', 'SS ALWAHDA CENTRE DOUTIZI', 'م.م الوحدة مركزية دوتيزي', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460P06', 'password', '', '', NULL, NULL),
(76, '16956E', 'SS ALWAHDA UNITE ANAMRE  WASSIF', 'م.م الوحدة فرعية انامر واسيف', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(77, '16957F', 'SS ALWAHDA UNITE AIT ADIA', 'م.م الوحدة فرعية ايت عضيا', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(78, '16958G', 'SS ANNOUR CENTRE TIDLI', 'م.م النور مركزية تيدلي', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73100P08', 'password', '', '', NULL, NULL),
(79, '16959H', 'SS ANNOUR UNITE TIZOUGHRANE', 'م.م النور فرعية تيزوغران', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(80, '16960J', 'SS ANNOUR UNITE TAGHZEFT', 'م.م النور فرعية تاغزيفت', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73460p10', 'password', '', '', NULL, NULL),
(81, '16961K', 'SS alwahda UNITE AZOUR OULILI', 'م.م الوحدة فرعية ازور اوليلي', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73460P10', 'password', '', '', NULL, NULL),
(82, '16962L', 'SS ANNOUR UNITE TIDLI NAIT AABBAS', 'م.م النور فرعية تيدلي نايت عباس', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(83, '16963M', 'SS ALBAYROUNI CENTRE IGHIR MOUSS', 'م.م البيروني مركزية اغير موس', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73915P08', 'password', '', 'user', NULL, NULL),
(84, '16964N', 'SS MOHAMED SALEM CENTRE TIZGUI', 'م.م محمد سالم مركزية تيزكي', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460P23', 'password', '', 'user', NULL, NULL),
(85, '16965P', 'SS ALBAYROUNI UNITE ALKOUZ', 'م.م البيروني فرعية الكوز', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '965P000', 'password', '', 'user', NULL, NULL),
(86, '16967S', 'SS ALBAYROUNI UNITE IGOUJJIMNE', 'م.م البيروني فرعية اكجيمن', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '967S000', 'password', '', 'user', NULL, NULL),
(87, '16968T', 'SS MOHAMED SALEM UNITE TAOURIRT NALI NZKRI', 'م.م محمد سالم فرعية توريرت نعلي نزكري', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73460P23', 'password', '', 'user', NULL, NULL),
(88, '16969U', 'SS ALBAYROUNI UNITE IGHALNE', 'م.م البيروني فرعية اغالن', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(89, '16970V', 'SS 6 NOVEMBRE CENTRE TIFERMITE', 'م.م 6 نونبر مركزية تيفرميت', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73121P01', 'password', '', '', NULL, NULL),
(90, '16971W', 'SS 6 NOVEMBRE UNITE AIT SALAH', 'م.م 6 نونبر فرعية ايت صالح', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(91, '16972X', 'SS ALBAYROUNI UNITE ROKENE', 'م.م البيروني فرعية الركن', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '972X000', 'password', '', 'user', NULL, NULL),
(92, '16973Y', 'SS AHMED CHAWKI CENTRE TAKATARTE', 'م.م احمد شوقي مركزية تكترت', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73121P02', 'password', '', '', NULL, NULL),
(93, '16974Z', 'SS AHMED CHAWKI UNITE TICHKI', 'م.م احمد شوقي فرعية تيشكي', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '974Z000', 'password', '', '', NULL, NULL),
(94, '16975A', 'SS AHMED CHAWKI UNITE INOUKRANE', 'م.م احمد شوقي فرعية انكران', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(95, '16977C', 'SS TAKDDOM CENTRE TLAT IDAGOUGMAR', 'م.م التقدم مركزية تلاتاء اداكوكمار', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73121P03', 'password', '', '', NULL, NULL),
(96, '16978D', 'SS TAKDDOM UNITE IDSLIMANE', 'م.م التقدم فرعية ادسليمان', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(97, '16979E', 'SS TAKDDOM UNITE ISSGUIOUAR', 'م.م التقدم فرعية اسكيوار', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(98, '16980F', 'SS LALLA MARYAM CENTRE ZAOUIT', 'م.م للا مريم مركزية الزاويت', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73123P01', 'password', '', '', NULL, NULL),
(99, '16981G', 'SS LALLA MARYAM UNITE TIOUANAMANE', 'م.م للا مريم فرعية توانمان', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(100, '16982H', 'SS LALLA MARYAM UNITE ILIGHE', 'م.م للا مريم فرعية اليغ', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(101, '16983J', 'SS LALLA MARYAM UNITE AL KASBA', 'م.م للا مريم فرعية القصبة', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(102, '16984K', 'SS LALLA MARYAM UNITE ELFAHM', 'م.م للا مريم فرعية الفهم', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(103, '16985L', 'SS MLY RACHID CENTRE TOUMANAR', 'م.م مولاي رشيد مركزية تومنار', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73100P09', 'password', '', '', NULL, NULL),
(104, '16986M', 'SS MLY RACHID UNITE AGOUJGAL', 'م.م مولاي رشيد فرعية اكوجكال', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(105, '16987N', 'SS MLY RACHID UNITE TACHTAKET', 'م.م مولاي رشيد فرعية تشتاكيت', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(106, '16988P', 'SS MLY RACHID UNITE IMJGAGUEN', 'م.م مولاي رشيد فرعية امجكاكن', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(107, '17101M', 'SS SAKIA HAMRA CENTRE AIT WIDERNE', 'م.م الساقية الحمراء مركزية ايت ودرن', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73705P01', 'password', '', '', NULL, NULL),
(108, '17104R', 'SS SAKIA HAMRA UNITE BOKOURA', 'م.م الساقية الحمراء فرعية بوكورة', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', 'BRHM0001', 'password', '', '', NULL, NULL),
(109, '17105S', 'EC RASMOUKA ANNEXE BNO TACHAFIN', 'م.ج رسموكة ملحقة ابن تاشفين', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '73705P02', 'password', '', '', NULL, NULL),
(110, '17106T', 'SS SAD BNO TACHAFIN UNITE IKLALEN', 'م.م سد ابن تاشفين فرعية اقلالن', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(111, '17109W', 'SS KHALED BNO LWALID CENTRE TAGOUDIRT', 'م.م خالد بن الوليد مركزية تكديرت', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73100P11', 'password', '', '', NULL, NULL),
(112, '17110X', 'SS KHALED BNO LWALID UNITE TOUBZIGT', 'م.م خالد بن الوليد فرعية توبزيكت', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(113, '17111Y', 'SS KHALED BNO LWALID UNITE BOUTERGUI', 'م.م خالد بن الوليد فرعية بوتركي', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(114, '17112Z', 'SS SAKIA HAMRA UNITE KSBAT BELLOUCH', 'م.م الساقية الحمراء فرعية قصبة بلوش', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', 'BRHM0002', 'password', '', '', NULL, NULL),
(115, '17117E', 'SS MLY YOUSSEF CENTRE EL MAADER EL KABIR', 'م.م مولاي يوسف مركزية المعدر الكبير', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73711P01', 'password', '', '', NULL, NULL),
(116, '17118F', 'SS MLY YOUSSEF UNITE SIDI ALI', 'م.م مولاي يوسف فرعية سيدي علي', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(117, '17119G', 'SS MANSOUR BRAHIM BEN BLAID UNITE LAAZIB', 'م.م منصور ابراهيم بن بلعيد فرعية العزيب', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(118, '17120H', 'SS MLY YOUSSEF UNITE TIBOUZAR', 'م.م مولاي يوسف فرعية تيبوزار', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(119, '17121J', 'SS MLY YOUSSEF UNITE KASBAT  AAROUS', 'م.م مولاي يوسف فرعية قصبة اعروص', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(120, '17122K', 'SS MLY YOUSSEF UNITE DCHIRA', 'م.م مولاي يوسف فرعية الدشيرة', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(121, '17123L', 'SS MANSOUR BRAHIM BEN BLAID CENTRE OULAD NOUMER', 'م.م منصور ابراهيم بن بلعيد مركزية اولاد النومر', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460p17', 'password', '', '', NULL, NULL),
(122, '17124M', 'SS MANSOUR BRAHIM BEN BLAID UNITE LGRARA', 'م.م منصور ابراهيم بن بلعيد فرعية الكرارة', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(123, '17125N', 'SS MLY YOUSSEF UNITE ELMARS', 'م.م مولاي يوسف فرعية المرس', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(124, '17126P', 'SS ANNASR CENTRE AIT OUMRIBT', 'م.م النصر مركزية ايت امريبط', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73711P03', 'password', '', '', NULL, NULL),
(125, '17127R', 'SS ANNASR UNITE IZOUIKA', 'م.م النصر فرعية ازويكا', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(126, '17128S', 'SS SALAH ADDINE ALAYOUBI CENTRE IGHREM', 'م.م صلاح الدين الايوبي مركزية اغرم', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73713P01', 'password', '', '', NULL, NULL),
(127, '17129T', 'SS SALAH ADDINE ALAYOUBI UNITE AIT TALB YAHYA', 'م.م صلاح الدين الايوبي فرعية ايت الطالب يحيى', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(128, '17130U', 'SS SALAH ADDINE ALAYOUBI UNITE IDALI OUSAID', 'م.م صلاح الدين الايوبي فرعية اد علي وسعيد', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73713P01', 'password', '', '', NULL, NULL),
(129, '17131V', 'SS SALAH ADDINE ALAYOUBI UNITE OUAALGA', 'م.م صلاح الدين الايوبي فرعية وعلكة', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73713P01', 'password', '', '', NULL, NULL),
(130, '17132W', 'SS IBN BATTOTA CENTRE  REGGADA', 'م.م ابن بطوطة مركزية الركادة', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73713P02', 'password', '', '', NULL, NULL),
(131, '17133X', 'SS ABDERRAHIM BOAABID CENTRE IGHBOULA', 'م.م عبد الرحيم بوعبيد مركزية اغبولا', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460p18', 'password', '', '', NULL, NULL),
(132, '17134Y', 'SS IBN BATTOTA UNITE BOUSSANSAR', 'م.م ابن بطوطة فرعية بوصنصار', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(133, '17135Z', 'SS IBN BATTOTA UNITE LKSAIB', 'م.م ابن بطوطة فرعية لكصايب', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(134, '17136A', 'SS ABDERRAHIM BOAABID UNITE SANTEL', 'م.م عبد الرحيم بوعبيد فرعية سنطيل', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(135, '17137B', 'SS OTMAN IBN AFFAN CENTRE LAHFAYAR', 'م.م عثمان ابن عفان مركزية الحفاير', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73713P03', 'password', '', '', NULL, NULL),
(136, '17138C', 'SS OTMAN IBN AFFAN UNITE IDA OSMLAL', 'م.م عثمان ابن عفان فرعية اداوسملال', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(137, '17139D', 'SS OTMAN IBN AFFAN UNITE AGADIR MASMAR', 'م.م عثمان ابن عفان فرعية اكادير مسمار', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(138, '17140E', 'SS ALFAJR CENTRE AGUERD', 'م.م الفجر مركزية اكرض', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73231P01', 'password', '', '', NULL, NULL),
(139, '17141F', 'SS ALFAJR UNITE ER WAISS', 'م.م الفجر فرعية الروايس', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(140, '17142G', 'SS ALFAJR UNITE TALLOUST', 'م.م الفجر فرعية تالوست', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(141, '17143H', 'SS ALFAJR UNITE DOUAR CHIKH', 'م.م الفجر فرعية دوار الشيخ', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(142, '17144J', 'SS ALFAJR UNITE IMETDI', 'م.م الفجر فرعية امتضي', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(143, '17145K', 'SS ABDELLAH GUENNOUN CENTRE LBAIRE', 'م.م عبد الله كنون مركزية البير', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73231P02', 'password', '', '', NULL, NULL),
(144, '17146L', 'SS ABDELLAH GUENNOUN UNITE EL FRAIRINA', 'م.م عبد الله كنون فرعية الفريرينة', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(145, '17147M', 'SS ABDELLAH GUENNOUN UNITE IDGH', 'م.م عبد الله كنون فرعية ادغ', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73231P02', 'password', '', '', NULL, NULL),
(146, '17148N', 'EC SIDI BOUABDLI CENTRE SIDI BOUABDLI', 'م.ج سيدي بوعبدلي', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73715P03', 'password', '', '', NULL, NULL),
(147, '17149P', 'EC SIDI BOUABDLI ANNEXE ID LAHCEN', 'م.ج سيدي بوعبدلي ملحقة ادالحسن', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(148, '17151S', 'SS ALMAJD CENTRE TIMJADE', 'م.م المجد مركزية تيمجاض', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73715p05', 'password', '', '', NULL, NULL),
(149, '17152T', 'SS ALMAJD UNITE TISGHARINE', 'م.م المجد فرعية تيسغارين', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73715P05', 'password', '', '', NULL, NULL),
(150, '17153U', 'SS ALMAJD UNITE IDOUMSKINE', 'م.م المجد فرعية ادومسكين', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73715P05', 'password', '', '', NULL, NULL),
(151, '17154V', 'SS ABO HASSOUN ESSAMLALI CENTRE TAFRAOUT AIT DAOUD', 'م.م ابو حسون السملالي مركزية تافراوت ايت داود', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73715P04', 'password', '', '', NULL, NULL),
(152, '17155W', 'SS ABO HASSOUN ESSAMLALI UNITE AZILAL', 'م.م ابو حسون السملالي فرعيىة ازيلال', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(153, '17156X', 'SS ALKARM CENTRE AGHMMOUR', 'م.م الكرم مركزية اغمور', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460P14', 'password', '', '', NULL, NULL),
(154, '17157Y', 'SS ALKARM UNITE ID BOUNIK', 'م.م الكرم فرعية ادبونيك', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73460P14', 'password', '', '', NULL, NULL),
(155, '17158Z', 'SS ABO HASSOUN ESSAMLALI UNITE ID HAMMOU IHIA', 'م.م ابو حسون السملالي فرعيىة ادهمو ايحيا', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(156, '17159A', 'SS ABO HASSOUN ESSAMLALI UNITE ID MOUSSA', 'م.م ابو حسون السملالي فرعيىة ادموسى', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(157, '17160B', 'SS AL INBIAAT CENTRE BOUADANE', 'م.م الانبعاث مركزية بوضان', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73715P01', 'password', '', '', NULL, NULL),
(158, '17161C', 'SS AL INBIAAT UNITE LARJAME', 'م.م الانبعاث فرعية لارجام', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(159, '17162D', 'SS LAHCEN BOUNAMANI UNITE IMATRZEN', 'م.م الحسن البونعماني فرعية اماترزن', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(160, '17163E', 'SS LAHCEN BOUNAMANI UNITE TLAT WOUCHEN', 'م.م الحسن البونعماني فرعية تلات ووشن', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(161, '17164F', 'SS LAHCEN BOUNAMANI CENTRE BOUNAAMANE', 'م.م الحسن البونعماني مركزية بونعمان', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73715P02', 'password', '', '', NULL, NULL),
(162, '17165G', 'SS HASSAN 2 CENTRE TAGOUNZA', 'م.م الحسن الثاني مركزية تكنسة', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460p08', 'password', '', '', NULL, NULL),
(163, '17166H', 'SS HASSAN 2 UNITE IDOUJEDDA', 'م.م الحسن الثاني فرعية ادوجدة', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(164, '17167J', 'SS AL INBIAAT UNITE AL MOURABITINE', 'م.م الانبعاث فرعية المرابطين', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(165, '17168K', 'SS HASSAN 2 UNITE IDMBAREK', 'م.م الحسن الثاني فرعية ادمبارك', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(166, '17169L', 'SS ALJAHED CENTRE AGADIR OUFALA', 'م.م الجاحظ مركز اكادير اوفلا', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73915P04', 'password', '', '', NULL, NULL),
(167, '17170M', 'SS ALJAHED UNITE ISSIL', 'م.م الجاحظ فرعية اسيل', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(168, '17171N', 'SS ALJAHED UNITE BOUALOUS', 'م.م الجاحظ فرعية بوالوس', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(169, '17172P', 'SS ALJAHED UNITE AGADIR IZDAR', 'م.م الجاحظ فرعية اكادير ازدار', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73915P04', 'password', '', '', NULL, NULL),
(170, '17173R', 'SS ASSANABIL CENTRE IGALFEN', 'م.م السنابل مركزية اكالفن', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73233P01', 'password', '', '', NULL, NULL),
(171, '17174S', 'SS ASSANABIL UNITE TAOURIRT', 'م.م السنابل فرعية توريرت', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(172, '17175T', 'SS ASSANABIL UNITE AGADIR ZOUGAREN', 'م.م السنابل فرعية اكادير زكاغن', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(173, '17176U', 'SS ASSANABIL UNITE OUTGHOUSS', 'م.م السنابل فرعية اوتغوس', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '17176U', 'password', '', '', NULL, NULL),
(174, '17177V', 'SS ARGANE CENTRE SIDI BLAL', 'م.م اركان مركزية سيدي بلال', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73233P02', 'password', '', '', NULL, NULL),
(175, '17178W', 'SS ARGANE UNITE AIT ILLISS', 'م.م اركان فرعية ايت اليس', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(176, '17179X', 'SS ARGANE UNITE ID IICH', 'م.م اركان فرعية ادعيش', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(177, '17181Z', 'SS ARGANE UNITE TUAG', 'م.م اركان فرعية تياك', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(178, '17182A', 'EC IBN KHALDOUN CENTRE OUIJJANE', 'م.ج ابن خلدون مركز وجان', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73719P01', 'password', '', '', NULL, NULL),
(179, '17183B', 'EC IBN KHALDOUN ANNEXE ID ABD ELQADER', 'م.ج ابن خلدون ملحقة ادعبدالقادر', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(180, '17185D', 'SS ANNAKHIL CENTRE ASSAKA', 'م.م النخيل مركزية اسكا', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73719P02', 'password', '', '', NULL, NULL),
(181, '17186E', 'SS ANNAKHIL UNITE MIGHRMANE', 'م.م النخيل فرعية ميغرمان', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(182, '17187F', 'SS ANNAKHIL UNITE MIRA', 'م.م النخيل فرعية ميرة', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(183, '17188G', 'SS ANNAKHIL UNITE LGSAIB', 'م.م النخيل فرعية لكصايب', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(184, '17189H', 'SS ANNAKHIL UNITE L AINE', 'م.م النخيل فرعية العين', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(185, '17190J', 'SS ANNAKHIL UNITE ANO NAADOU', 'م.م النخيل فرعية انو نعدو', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(186, '17192L', 'EC IBN KHALDOUN ANNEXE OUCHANE', 'م.ج ابن خلدون ملحقة اوشان', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(187, '17193M', 'EC IBN KHALDOUN ANNEXE TADARTE', 'م.ج ابن خلدون ملحقة تدارت', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(188, '17195P', 'SS IBNOU SINAA CENTRE AMARAR', 'م.م ابن سيناء مركزية امراغ', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73721P01', 'password', '', '', NULL, NULL),
(189, '17196R', 'SS IBNOU SINAA UNITE TADOUART', 'م.م ابن سيناء فرعية تدوارت', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(190, '17197S', 'SS MOHAMED VI IDERK CENTRE IDERK', 'م.م محمد السادس ادرق مركزية ادرق', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73721P02', 'password', '', '', NULL, NULL),
(191, '17198T', 'SS SOUSS ALAALIMA CENTRE ZAOUITE', 'م.م سوس العالمة مركزية الزاوية', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460P19', 'password', '', '', NULL, NULL),
(192, '17199U', 'SS SOUSS ALAALIMA UNITE IDOU LAHIANE', 'م.م سوس العالمة فرعية ادولحيان', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(193, '17200V', 'SS SOUSS ALAALIMA UNITE OUKANE', 'م.م سوس العالمة فرعية اوكان', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(194, '17201W', 'SS SOUSS ALAALIMA UNITE SIDI BOUNOUAR', 'م.م سوس العالمة فرعية سيدي بونوار', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(195, '17202X', 'SS MOHAMED VI IDERK UNITE ANFOUD', 'م.م محمد السادس ادرق فرعية انفود', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(196, '17203Y', 'SS IBNOU SINAA UNITE LAAOUINA', 'م.م ابن سيناء فرعية العوينة', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(197, '17204Z', 'SS IBNOU SINAA UNITE SIDI DAOUD', 'م.م ابن سيناء فرعية سيدي داود', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(198, '17205A', 'ECOLE AHMED BELLAFRIJ', 'م. احمد بلا فريج', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73460P24', 'password', '', '', NULL, NULL),
(199, '17206B', 'SS IBNOU ALHAITAM CENTRE ELGAADA IDOUBIDA', 'م.م ابن الهيثم مركزية الكعدة ادوبيضة', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73721P04', 'password', '', '', NULL, NULL),
(200, '17207C', 'SS IBNOU SINAA UNITE IGRAR', 'م.م ابن سيناء فرعية اكرار', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(201, '17208D', 'SS IBNOU ALHAITAM UNITE ALOUK EL GAADA', 'م.م ابن الهيثم فرعية اعلوك الكعدة', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', 'BZKF E2', 'password', '', '', NULL, NULL),
(202, '17209E', 'SS SOUSS ALAALIMA UNITE AL FID', 'م.م سوس العالمة فرعية الفيض', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(203, '17213J', 'ECOLE ALBASSATINE', 'م. البساتين', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73237P01', 'password', '', '', NULL, NULL),
(204, '17214K', 'SS IBNOU SINAA UNITE ATEBANE', 'م.م ابن سيناء فرعية اتبان', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(205, '17215L', 'SS JABIR IBN HAYAN CENTRE BOUZERZ', 'م.م جابر بن حيان مركزية بوزرز', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73305P01', 'password', '', '', NULL, NULL),
(206, '17217N', 'SS JABIR IBN HAYAN UNITE TAMLALTE', 'م.م جابر بن حيان فرعية تملالت', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73305P01', 'password', '', '', NULL, NULL),
(207, '17218P', 'SS ABDELKARIM ELKHATABI CENTRE BOUZGUER', 'م.م عبدالكريم الخطابي مركزية بوزكر', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73305P06', 'password', '', '', NULL, NULL),
(208, '17219R', 'SS ABDELKARIM ELKHATABI UNITE IGOURDANE', 'م.م عبدالكريم الخطابي فرعية اكورضان', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '17219R', 'password', '', '', NULL, NULL),
(209, '17220S', 'SS ABDELKARIM ELKHATABI UNITE L MSSIDRA', 'م.م عبدالكريم الخطابي فرعية المسديرة', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(210, '17221T', 'SS ABDELKARIM ELKHATABI UNITE TEKEN IZDAR', 'م.م عبدالكريم الخطابي فرعية تكن ازدار', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(211, '17222U', 'SS ABDELKARIM ELKHATABI UNITE AMAN MANSSOUR', 'م.م عبدالكريم الخطابي فرعية امان منصور', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(212, '17223V', 'SS 11 JANVIER CENTRE KRAIMA', 'م.م 11 يناير مركزية الكريمة', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73305P03', 'password', '', '', NULL, NULL),
(213, '17224W', 'SS MOHAMED BEN EL HACHEMI CENTRE ICHAFODN', 'م.م محمد بن الهاشمي مركزية اشافوطن', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73460P20', 'password', '', '', NULL, NULL),
(214, '17225X', 'SS MOHAMED BEN EL HACHEMI UNITE LAMKAYM', 'م.م محمد بن الهاشمي فرعية لمكايم', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(215, '17226Y', 'SS MOHAMED BEN EL HACHEMI UNITE SIDI BOULFDAYL', 'م.م محمد بن الهاشمي فرعية سيدي بولفضايل', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(216, '17227Z', 'SS 11 JANVIER UNITE ID BIHI ALI', 'م.م 11 يناير فرعية ادبيهي علي', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(217, '17228A', 'SS 11 JANVIER UNITE ID HAMOU OMAR', 'م.م 11 يناير فرعية اد همو عمر', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(218, '17229B', 'EC SAHEL CENTRE SAHEL', 'م.ج الساحل مركز الساحل', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73305P04', 'password', '', '', NULL, NULL),
(219, '17230C', 'EC SAHEL ANNEXE IFRDA', 'م.ج الساحل ملحقة افردا', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '73305P07', 'password', '', '', NULL, NULL),
(220, '17234G', 'SS JABIR IBN HAYAN UNITE SIHBE', 'م.م جابر بن حيان فرعية السهب', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73305P05', 'password', '', '', NULL, NULL),
(221, '17235H', 'SS JABIR IBN HAYAN UNITE BOUTZLAFTE', 'م.م جابر بن حيان فرعية بوتزلافت', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(222, '17236J', 'SS JABIR IBN HAYAN UNITE IGRAR', 'م.م جابر بن حيان فرعية اكرار', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(223, '17237K', 'SS TAHER ESSAMLALI CENTRE YOUGUITE', 'م.م الطاهر السملالي مركزية يوكيت', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '73100P12', 'password', '', '', NULL, NULL),
(224, '17238L', 'SS TAHER ESSAMLALI UNITE L MSITE', 'م.م الطاهر السملالي فرعية المسيت', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73100P12', 'password', '', '', NULL, NULL),
(225, '17239M', 'SS TAHER ESSAMLALI UNITE GRAYZIME', 'م.م الطاهر السملالي فرعية كرايزيم', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73100P12', 'password', '', '', NULL, NULL),
(226, '17241P', 'LYCEE COLLEGIAL MOULAY RACHID', 'الثانوية الاعدادية مولاي رشيد', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73700S01', 'password', '', '', NULL, NULL),
(227, '17242R', 'LYCEE QUALIFIANT AL WAHDA', 'الثانوية التاهيلية الوحدة', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73700S03', 'password', '', '', NULL, NULL),
(228, '17246V', 'LYCEE QUALIFIANT MOHAMMED EL JAZOULI', 'الثانوية التاهيلية محمد الجزولي', 'انزي', 'Anzi', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73105S01', 'password12SS', '', '', NULL, '2023-05-04 18:32:27'),
(229, '17246V', 'LYCEE QUALIFIANT MOHAMMED EL JAZOULI', 'الثانوية التاهيلية محمد الجزولي', 'انزي', 'Anzi', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73105S01', 'password', '', '', NULL, NULL),
(230, '17248X', 'LYCEE QUALIFIANT IBN KHALDOUNE', 'الثانوية التاهيلية ابن خلدون', 'بونعمان', 'Bounaamane', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73715S01', 'password', '', '', NULL, NULL),
(231, '17248X', 'LYCEE QUALIFIANT IBN KHALDOUNE', 'الثانوية التاهيلية ابن خلدون', 'بونعمان', 'Bounaamane', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73715S01', 'password', '', '', NULL, NULL),
(232, '17251A', 'LYCEE COLLEGIAL AZZAITOUNE', 'الثانوية الاعدادية الزيتون', 'الركادة', 'Reggada', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73713S01', 'password', '', '', NULL, NULL),
(233, '17253C', 'LYCEE QUALIFIANT AL MASSIRA AL KHADRA', 'الثانوية التأهيلية المسيرة الخضراء', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'BTS', 'شهادة التقني العالي', 'Lycée Enseignement Général & Technique', '73700S02', 'password', '', 'user', NULL, NULL),
(234, '17253C', 'LYCEE QUALIFIANT AL MASSIRA AL KHADRA', 'الثانوية التأهيلية المسيرة الخضراء', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général & Technique', '73700S02', 'password', '', '', NULL, NULL),
(235, '17254D', 'LYCEE TECHNIQUE IBN SOULAYMANE ARRASSMOUKI', 'الثانوية التقنية ابن سليمان الرسموكي', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général & Technique', '73700S05', 'password', '', '', NULL, NULL),
(236, '17256F', 'LYCEE QUALIFIANT HASSAN II', 'الثانوية التاهيلية الحسن الثاني', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73700S04', 'password', '', '', NULL, NULL),
(237, '17257G', 'LYCEE COLLEGIAL AL ATLAS', 'الثانوية الاعدادية الاطلس', 'تافراوت (البلدية)', 'Tafraout (Mun.)', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73511S01', 'password', '', '', NULL, NULL),
(238, '17258H', 'LYCEE QUALIFIANT SIDI OUAGAG', 'الثانوية التاهيلية سيدي وكاك', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73721S01', 'password', '', '', NULL, NULL),
(239, '17258H', 'LYCEE QUALIFIANT SIDI OUAGAG', 'الثانوية التاهيلية سيدي وكاك', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73721S01', 'password', '', '', NULL, NULL);
INSERT INTO `users` (`id`, `CD_ETAB`, `NOM_ETABL`, `NOM_ETABA`, `la_com`, `ll_com`, `typeEtab`, `LL_CYCLE`, `LA_CYCLE`, `NetabFr`, `CD_GIPE`, `password`, `image`, `role`, `created_at`, `updated_at`) VALUES
(240, '18295K', 'DIRECTION PROVINCIALE DE TIZNIT', 'المديرية الاقليمية بتيزنيت', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Délégation', '73700A01', 'password', '', '', NULL, NULL),
(241, '18732K', 'SS ALBAYROUNI UNITE AIT DAOUD', 'م.م البيروني فرعية ايت داود', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(242, '18734M', 'LYCEE QUALIFIANT ASSALAM', 'الثانوية التأهيلية السلام', 'الركادة', 'Reggada', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73713S02', 'password', '', '', NULL, NULL),
(243, '19521T', 'SS IDRISS II UNITE TIGNATINE', 'م.م ادريس الثاني فرعية تكناتين', 'تاسريرت', 'Tassrirt', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73517P01', 'password', '', '', NULL, NULL),
(244, '19522U', 'SS ALMOUTANABBI UNITE TIZI NDAWBDI', 'م.م المتنبي فرعية تيزي نداوبدي', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(245, '19523V', 'SS AHMED BEN BOUJMAA UNITE AGRD OUDAD', 'م.م احمد بن بوجمعة فرعية اكرض اوضاض', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(246, '19525X', 'SS ANNOUR UNITE TIZI NTKIDA', 'م.م النور فرعية تيزي نتكضا', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(247, '19530C', 'SS ALWAHDA UNITE TIZI OUNBED', 'م.م الوحدة فرعية تيزي انبد', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(248, '19531D', 'SS 6 NOVEMBRE UNITE AIT HAMOU', 'م.م 6 نونبر فرعية ايت همو', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(249, '19533F', 'SS ABDELLAH BNO YASSIN UNITE TALBORJT', 'م.م عبد الله ابن ياسين فرعية تالبرجت', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(250, '19537K', 'EC SAHEL ANNEXE OUCHANE', 'م.ج الساحل ملحقة اوشان', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(251, '19538L', 'LYCEE QUALIFIANT MEHDI BEN BERKA', 'الثانوية التاهيلية المهدي بن بركة', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73711S01', 'password', '', '', NULL, NULL),
(252, '19538L', 'LYCEE QUALIFIANT MEHDI BEN BERKA', 'الثانوية التاهيلية المهدي بن بركة', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73711S01', 'password', '', '', NULL, NULL),
(253, '20061E', 'SS ALMOUTANABBI UNITE AGUENI NTIZKTE', 'م.م المتنبي فرعية اكني نتيزكت', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(254, '20062F', 'SS ALKARM UNITE ID SAID', 'م.م الكرم فرعية اد سعيد', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73460P14', 'password', '', '', NULL, NULL),
(255, '20340H', 'EC IBN KHALDOUN ANNEXE ID LMQDEM', 'م.ج ابن خلدون ملحقة اد المقدم', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(256, '20709J', 'SS AHMED BEN BOUJMAA UNITE SAGOU', 'م.م احمد بن بوجمعة فرعية ساكو', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(257, '20710K', 'SS Alwahda NUNITE ASOUL', 'م.م الوحدة فرعية اسول', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(258, '20711L', 'SS TAKDDOM UNITE KERDOUS', 'م.م التقدم فرعية كردوس', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(259, '20720W', 'EC ALMASSIRA ALKHADRA ANNEXE AIT ZAAL', 'م.ج المسيرة الخضراء ملحقة ايت الزعل', 'اثنين أداي', 'Tnine Aday', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(260, '20721X', 'SS ALMOKHTAR ASSOUSSI UNITE AMALOU SRAG', 'م.م المختار السوسي فرعية املو اسرك', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(261, '20725B', 'SS TAKDDOM UNITE AGRD NTSGDLT', 'م.م التقدم فرعية اكرض نتسكدلت', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(262, '20726C', 'SS 6 NOVEMBRE UNITE TAMAGOUSTE', 'م.م 6 نونبر فرعية تمكوست', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(263, '20728E', 'LYCEE COLLEGIAL MOHAMED EL BAKALI', 'الثانوية الإعدادية محمد البقالي', 'تيزغران', 'Tizoughrane', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73024S01', 'password', '', '', NULL, NULL),
(264, '20729F', 'SS AL INBIAAT UNITE ID HMALA', 'م.م الانبعاث فرعية ادهملا', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(265, '20730G', 'SS IBN BATTOTA UNITE IBN HOMAN', 'م.م ابن بطوطة فرعية ابن حمان', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '730G00', 'password', '', '', NULL, NULL),
(266, '20734L', 'LYCEE COLLEGIAL RASSMOUKA', 'الثانوية الاعدادية رسموكة', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73037s01', 'password', '', '', NULL, NULL),
(267, '20735M', 'LYCEE COLLEGIAL OMAR BEN CHAMSI', 'الثانوية الاعدادية عمر بن شمسي', 'ويجان', 'Ouijjane', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73042S01', 'password', '', '', NULL, NULL),
(268, '20739S', 'LYCEE QUALIFIANT ERRAZI', 'الثانوية التأهيلية الرازي', 'تيغمي', 'Tighmi', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73022S01', 'password', '', '', NULL, NULL),
(269, '20739S', 'LYCEE QUALIFIANT ERRAZI', 'الثانوية التأهيلية الرازي', 'تيغمي', 'Tighmi', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73022S01', 'password', '', '', NULL, NULL),
(270, '20741U', 'LYCEE QUALIFIANT BRAHIM OUAKHZANE', 'الثانوية التأهيلية ابراهيم وخزان', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73044s01', 'password', '', '', NULL, NULL),
(271, '20741U', 'LYCEE QUALIFIANT BRAHIM OUAKHZANE', 'الثانوية التأهيلية ابراهيم وخزان', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73044s01', 'password', '', '', NULL, NULL),
(272, '21357N', 'LYCEE COLLEGIAL AL ATLAS ANNEXE TARSOUAT', 'الثانوية الإعدادية الأطلس ملحقة تارسواط', 'تارسوات', 'Tarsouat', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Collège Enseignement Général', '73014s01', 'password', '', '', NULL, NULL),
(273, '21358P', 'LYCEE QUALIFIANT MOHAMMED EL JAZOULI ANNEXE AIT AH', 'الثانوية التأهيلية محمد الجزولي ملحقة أيت أحمد', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Lycée Enseignement Général', '73023s01', '', '', '', NULL, NULL),
(274, '21362U', 'ECOLE AL MOUSTAKBAL', 'م. المستقبل', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P13', 'password', '', '', NULL, NULL),
(275, '21367Z', 'SS IDRISS II UNITE AMALOU OU DRAR', 'م.م ادريس الثاني فرعية امالو اودرار', 'تاسريرت', 'Tassrirt', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73517p01', 'password', '', '', NULL, NULL),
(276, '21368A', 'SS SAADIYINE UNITE INLIOUA', 'م.م السعديين فرعية اينلوى', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'admin', NULL, NULL),
(277, '21369B', 'SS SAADIYINE UNITE TIMKIYTE', 'م.م السعديين فرعية تمقييت', 'أفلا  اغير', 'Afella Ighir', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(278, '21370C', 'SS LAHOUCINE BEN BIROUK BEN AABLA UNITE AGRD OUABD', 'م.م الحسين بن بيروك بن عبلا فرعية اكرض وعبدي', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(279, '21372E', 'SS ACHNIT AHMED BEN BELAID UNITE TOUSLANE', 'م.م اشنيط احمد بن بلعيد فرعية توسلان', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(280, '21373F', 'SS AHMED BEN BOUJMAA UNITE AGNI MECHGHAOU', 'م.م احمد بن بوجمعة فرعية اكني مشغاو', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(281, '21375H', 'SS ANNOUR UNITE TALIWA', 'م.م النور فرعية تلوا', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(282, '21377K', 'SS ALBAYROUNI UNITE AIT ELKASSEM', 'م.م البيروني فرعية ايت القاسم', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(283, '21378L', 'SS ALBAYROUNI UNITE TIWISSENE', 'م.م البيروني فرعية توسين', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(284, '21379M', 'SS 6 NOVEMBRE UNITE AGOLAY', 'م.م 6 نونبر فرعية اكلوي', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(285, '21389Y', 'EC RASMOUKA ANNEXE ELMAHJOUB', 'م.ج رسموكة ملحقة المحجوب', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(286, '21390Z', 'SS KHALED BNO LWALID UNITE TACHOUARIT', 'م.م خالد بن الوليد فرعية تشوريت', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(287, '21392B', 'EC IBN KHALDOUN ANNEXE TAMALOUT', 'م.ج ابن خلدون ملحقة تمالوت', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(288, '21393C', 'SS ANNAKHIL UNITE AOURIRE', 'م.م النخيل فرعية اورير', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(289, '21394D', 'ECOLE MOULAY EZZINE ANNEXE IDERK OUAARABEN', 'م. مولاي الزين ملحقة ادرق واعرابن', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '394D000', 'password', '', '', NULL, NULL),
(290, '21395E', 'SS ABDELKARIM ELKHATABI UNITE BIFISSANE', 'م.م عبدالكريم الخطابي فرعية بيفيسان', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '21395E', 'password', '', '', NULL, NULL),
(291, '22765U', 'SS ANNOUR UNITE TAMGRET NAIT AABAS', 'م.م النور فرعية تمكرض نايت عباس', 'تيزغران', 'Tizoughrane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(292, '22776F', 'SS ACHNIT AHMED BEN BELAID UNITE AIT LJIYAR', 'م.م اشنيط احمد بن بلعيد فرعية ايت الجيار', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(293, '22777G', 'SS 20 AOUT UNITE IGHIR WASAADIWN', 'م.م 20 غشت  فرعية اغير واسعديون', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73113P02', 'password', '', '', NULL, NULL),
(294, '22778H', 'SS ALLAL BEN ABDELLAH UNITE AIT HAMOUCHE', 'م.م علال ابن عبد الله فرعية ايت هموش', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73111P01', 'password', '', '', NULL, NULL),
(295, '22779J', 'SS ALMOUTANABBI UNITE AGUERGUEM', 'م.م المتنبي فرعية اكركم', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(296, '22781L', 'SS ALBAYROUNI UNITE AGARD IFARD', 'م.م البيروني فرعية اكرض افرض', 'أيت ايسافن', 'Ait Issafen', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '781L000', 'password', '', 'user', NULL, NULL),
(297, '22789V', 'SS ABDELLAH GUENNOUN UNITE IDBOUZID', 'م.م عبد الله كنون فرعية ادبوزيد', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73231P02', 'password', '', '', NULL, NULL),
(298, '22793Z', 'SS HASSAN 2 UNITE MAGUER', 'م.م الحسن الثاني فرعية ماكر', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(299, '22795B', 'SS JABIR IBN HAYAN UNITE ADOUAR NSALEH', 'م.م جابر بن حيان فرعية ادوار نصالح', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(300, '22797D', 'EC LALLA ASMAE TIGHMI ANNEXE TIZI ISLANE', 'م.ج للااسماء تيغمي ملحقة تيزي اسلان', 'تيغمي', 'Tighmi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(301, '22799F', 'SS ANNAKHIL UNITE IDMSSAIDE', 'م.م النخيل فرعية اد مسيعيد', 'ويجان', 'Ouijjane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(302, '22800G', 'SS ARGANE UNITE ELMAHMADI', 'م.م اركان فرعية المحمادي', 'بونعمان', 'Bounaamane', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(303, '22802J', 'LYCEE QUALIFIANT IDRISS II', 'الثانوية التأهيلية ادريس الثاني', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73018s02', 'password', '', 'user', NULL, NULL),
(304, '22802J', 'LYCEE QUALIFIANT IDRISS II', 'الثانوية التأهيلية ادريس الثاني', 'أيت وافقا', 'Ait Ouafqa', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Lycée Enseignement Général', '73018s02', 'password', '', 'user', NULL, NULL),
(305, '22963J', 'ECOLE IBNO HAZM', 'م. ابن حزم', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P14', 'password', '', '', NULL, NULL),
(306, '22966M', 'SS ACHNIT AHMED BEN BELAID UNITE IMTCHANE', 'م.م اشنيط احمد بن بلعيد فرعية امتشان', 'انزي', 'Anzi', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', 'user', NULL, NULL),
(307, '22972U', 'SS ABO HASSOUN ESSAMLALI UNITE ID BOUHREIA', 'م.م ابو حسون السملالي فرعيىة ادبوهرية', 'سيدي بوعبد اللي', 'Sidi Bouabdelli', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '73715P04', 'password', '', '', NULL, NULL),
(308, '22973V', 'SS IBNOU ALHAITAM UNITE ID AISSA', 'م.م ابن الهيثم فرعية ادعيسى', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(309, '22975X', 'LYCEE QUALIFIANT MOHAMMED EL JAZOULI ANNEXE TNINE', 'الثانوية التأهيلية محمد الجزولي ملحقة اثنين أداي', 'اثنين أداي', 'Tnine Aday', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Lycée Enseignement Général', '73019s01', 'password', '', '', NULL, NULL),
(310, '23549W', 'SS ALLAL BEN ABDELLAH UNITE AIT MOUSSA OHAMOU', 'م.م علال ابن عبد الله فرعية ايت موسى اوحمو', 'اربعاء أيت أحمد', 'Arbaa Ait Ahmed', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(311, '23551Y', 'ECOLE EL YAAKOUBI ANNEXE ID CHOUBANE', 'م. اليعقوبي ملحقة ادشوبان', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Annexe Ecole Autonome', '', 'password', '', '', NULL, NULL),
(312, '23552Z', 'SS MOHAMED VI IDERK UNITE AFOUD NTKIDA', 'م.م محمد السادس ادرق فرعية افود نتكضا', 'اثنين اكلو', 'Tnine Aglou', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '23552z', 'password', '', '', NULL, NULL),
(313, '23775S', 'LYCEE COLLEGIAL AFELLA IGHIR', 'الثانوية الإعدادية افلا اغير', 'أفلا  اغير', 'Afella Ighir', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73016s01', 'password', '', 'user', NULL, NULL),
(314, '23776T', 'LYCEE COLLEGIAL IMAM MALIK', 'الثانوية الاعدادية الامام مالك', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73700s07', 'password', '', '', NULL, NULL),
(315, '23778V', 'LYCEE QUALIFIANT BRAHIM OUAKHZANE ANNEXE BOUZERZ', 'الثانوية التأهيلية ابراهيم وخزان ملحقة بوزرز', 'أربعاء الساحل', 'Arbaa Sahel', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Lycée Enseignement Général', '73044s02', 'password', '', '', NULL, NULL),
(316, '23782Z', 'SS TAKDDOM UNITE IMOUCHIWN', 'م.م التقدم فرعية امشيون', 'إد او كوكمار', 'Ida Ou Gougmar', 'Public', 'PRIMAIRE', 'الابتدائي', 'Satellite', '', 'password', '', '', NULL, NULL),
(317, '23976K', 'LYCEE QUALIFIANT MEHDI BEN BERKA ANNEXE ZOUIKA', 'الثانوية التأهيلية المهدي بن بركة ملحقة زويكا', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Lycée Enseignement Général', '73038s02', 'password', '', '', NULL, NULL),
(318, '24261V', 'LYCEE COLLEGIAL IBN MAJA', 'الثانوية الاعدادية ابن ماجة', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73700S08', 'password', '', '', NULL, NULL),
(319, '24262W', 'LYCEE QUALIFIANT MEHDI BEN BERKA ANNEXE OULED NOUM', 'الثانوية التأهيلية المهدي بن بركة ملحقة اولاد النو', 'المعدر الكبير', 'El Maader El Kabir', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Lycée Enseignement Général', '73038s03', 'password', '', '', NULL, NULL),
(320, '24263X', 'LYCEE COLLEGIAL AL ATLAS ANNEXE TAHALA', 'الثانوية الاعدادية الاطلس ملحقة تهالة', 'ايريغ  نتاهلة', 'Irigh N\'Tahala', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Collège Enseignement Général', '73045s01', 'password', '', '', NULL, NULL),
(321, '24264Y', 'SS ALLOUZ CENTRE TIFRADINE', 'م.م اللوز مركزية  تفراضن', 'تافراوت (البلدية)', 'Tafraout (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Secteur Scolaire Centre', '', 'password', '', '', NULL, NULL),
(322, '24265Z', 'LYCEE QUALIFIANT NOUVEAU LYCEE', 'الثانوية التاهيلية الجديدة', 'تافراوت (البلدية)', 'Tafraout (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73511S02', 'password', '', '', NULL, NULL),
(323, '25707S', 'LYCEE QUALIFIANT ERRAZI ANNEXE SIDI AHMED OU MOUSS', 'الثانوية التأهيلية الرازي ملحقة سيدي احمد اوموسى', 'سيدي أحمد أو موسى', 'Sidi Ahmed Ou Moussa', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Annexe Lycée Enseignement Général', '73027S01', 'password', '', '', NULL, NULL),
(324, '25939U', 'EC RASMOUKA CENTRE RASMOUKA', 'م.ج رسموكة مركز رسموكة', 'أربعاء رسموكة', 'Arbaa Rasmouka', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '73705P03', 'password', '', '', NULL, NULL),
(325, '26031U', 'ECOLE AL IRFANE', 'م. العرفان', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '73700P15', 'password', '', '', NULL, NULL),
(326, '26033W', 'LYCEE COLLEGIAL ANNOUR', 'الثانوية الإعدادية النور', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE-COLLEGIAL', 'الثانوي الاعدادي', 'Collège Enseignement Général', '73700S10', 'password', '', '', NULL, NULL),
(327, '26036Z', 'LYCEE QUALIFIANT ARGANE', 'الثانوية التأهيلية أركان', 'تزنيت (البلدية)', 'Tiznit (Mun.)', 'Public', 'SECONDAIRE QUALIFIANT', 'الثانوي التأهيلي', 'Lycée Enseignement Général', '73700S11', 'password', '', '', NULL, NULL),
(328, '26632X', 'EC AMMELNE', 'م.ج املن', 'املن', 'Ammelne', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '', 'password', '', 'user', NULL, NULL),
(329, '27486A', 'EC TAFRAOUT EL MOULOUD', 'م.ج تافراوت المولود', 'تفراوت المولود', 'Tafraout El Mouloud', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole communale', '', 'password', '', '', NULL, NULL),
(330, '27710U', 'ECOLE AL FADILA', 'مدرسة الفضيلة', 'الركادة', 'Reggada', 'Public', 'PRIMAIRE', 'الابتدائي', 'Ecole Autonome', '', 'password', '', '', NULL, NULL),
(331, '123456789', '123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qRQjhfmh0FfJpOapTMGq9.RouWZT/EqaQv/XBmpdRCt3VezqV9pxi', NULL, 'visiteur', '2023-05-20 09:39:26', '2023-05-20 09:39:26'),
(332, 'rolerolerole', 'rolerolerole', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$mIqpivCHOyQBstoEdpsP0eyNlMD7qAsUwHShE2cFa0Xe/qrYyUpJ6', NULL, 'visiteur', '2023-05-20 09:42:06', '2023-05-20 09:42:06'),
(333, 'rolerolerole1', 'rolerolerole1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$dBf5uppoz./eayYyxyGLfemCohoc6F6nWW8Wp5xNxNw.BV0mb0q0.', NULL, 'visiteur', '2023-05-20 09:43:18', '2023-05-20 09:43:18'),
(334, 'rolerolerole2', 'rolerolerole2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$1SdaBLgK79TjOuxLfWW.fOojcCZMOaKj2peqDthaezh6fN8SuUwIC', NULL, 'visiteur', '2023-05-20 09:43:50', '2023-05-20 09:43:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avis_users_id_foreign` (`users_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_reclamation_id_foreign` (`reclamation_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_event_id_foreign` (`event_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from` (`from_id`),
  ADD KEY `to` (`to_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rapport_users_id_foreign` (`users_id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reclamation_users_id_foreign` (`users_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_reclamation_id_foreign` FOREIGN KEY (`reclamation_id`) REFERENCES `reclamation` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `from` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `to` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `rapport_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
