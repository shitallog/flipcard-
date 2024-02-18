-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 01:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filpcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'split', NULL, NULL),
(2, 'Toor', NULL, NULL),
(3, 'Moong Dal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_submissions`
--

CREATE TABLE `contact_form_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `frontusers`
--

CREATE TABLE `frontusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mailsettings`
--

CREATE TABLE `mailsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_transport` varchar(255) NOT NULL,
  `mail_host` varchar(255) NOT NULL,
  `mail_port` varchar(255) NOT NULL,
  `mail_username` varchar(255) NOT NULL,
  `mail_password` varchar(255) NOT NULL,
  `mail_encryption` varchar(255) NOT NULL,
  `mail_from` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailsettings`
--

INSERT INTO `mailsettings` (`id`, `mail_transport`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_from`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'smtp.mailtrap.io', '2525', 'ed3caa94a48fd1', 'baf29d92154c72', 'tls', 'ajayyadavexpo@gmail.com', '2024-02-17 05:30:55', '2024-02-17 05:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_24_052122_create_frontusers_table', 1),
(6, '2021_10_24_055150_create_permission_tables', 1),
(7, '2021_10_31_101342_create_posts_table', 1),
(8, '2022_05_01_060321_add_profile_to_users_table', 1),
(9, '2022_05_19_122208_create_mailsettings_table', 1),
(10, '2023_12_01_151207_create_categories_table', 1),
(11, '2023_12_01_151946_create_products_table', 1),
(12, '2024_01_19_142915_create_online_table', 1),
(13, '2024_01_19_200302_create_students_table', 1),
(14, '2024_01_19_210320_create_enquiries_table', 1),
(15, '2024_01_19_215606_create_contact_form_submissions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `adhar_number` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Post access', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(2, 'Post edit', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(3, 'Post create', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(4, 'Post delete', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(5, 'Role access', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(6, 'Role edit', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(7, 'Role create', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(8, 'Role delete', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(9, 'User access', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(10, 'User edit', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(11, 'User create', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(12, 'User delete', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(13, 'Permission access', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(14, 'Permission edit', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(15, 'Permission create', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(16, 'Permission delete', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(17, 'Mail access', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54'),
(18, 'Mail edit', 'web', '2024-02-17 05:30:54', '2024-02-17 05:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user_id`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Neque cupiditate similique debitis veniam assumenda sed voluptatem. Neque nemo natus consequatur eligendi et. Voluptatem sequi aut qui et quos.', 'Numquam aut et ea voluptatum magnam. Voluptatibus a non suscipit dicta. Est eaque laborum enim. Tenetur aut animi sunt nihil et tempora sequi vel.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(2, 'Hic nisi voluptas quaerat iure ducimus facilis. Quas nam atque repellat. Vel esse necessitatibus non et consequatur et neque. Labore labore modi ut rerum assumenda.', 'Consequatur consequatur quam architecto veritatis molestiae dolor doloribus labore. Vel quasi quia et odit aut sit est. Eveniet quod alias eum pariatur. Eveniet a dolor unde quibusdam.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(3, 'Sint itaque minus asperiores voluptatem in explicabo. Velit tenetur nostrum omnis ut et. Numquam facilis id inventore facere. Assumenda voluptatem itaque omnis eos sed voluptas.', 'Doloribus est nulla facere quis. Incidunt fugiat voluptatem id eum corporis. Iusto distinctio quidem vel et pariatur quae.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(4, 'Inventore qui fugiat qui voluptatem rerum eum nihil. Inventore sint suscipit enim tempora in quo natus. Placeat excepturi dolor ut provident sed rerum maiores. Id temporibus pariatur dolore sit eum.', 'Voluptatem dolores numquam aut unde. Qui autem natus consequatur in illo animi officiis. Ut qui aut voluptate iure. Perspiciatis quisquam non laborum debitis distinctio atque.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(5, 'Id est est qui hic voluptatem at. Enim voluptate nisi est ipsa molestiae rem sint. Sed et dolorem vero in.', 'Tempora aut dolores distinctio voluptatibus velit dolores. Eaque ut quia nostrum quasi quod. Et harum a est dolor voluptas in impedit a. Consequatur asperiores autem placeat cupiditate ut.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(6, 'Quis animi voluptatem est. Et aut laudantium quo laborum quis consequatur. Nemo consequatur impedit minima dolor molestias doloribus qui.', 'Dolore odit ut eum sed culpa ducimus earum. Molestiae dolor occaecati occaecati pariatur porro numquam voluptatem. Voluptatum veritatis adipisci libero sit ut et.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(7, 'Beatae impedit nam sunt adipisci culpa et doloribus. Iure ullam sunt reiciendis eaque. Possimus sequi id debitis esse cumque consequatur quibusdam nisi.', 'Enim ea voluptas doloribus ducimus. Iure qui nihil quia excepturi corrupti. Placeat placeat neque harum omnis. Omnis voluptatem veniam porro natus dolores et dolore.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(8, 'Similique mollitia quos quibusdam non laudantium in molestias. Fugiat aut officia qui quos. Laborum facere voluptatum voluptas dolorum consectetur nihil recusandae.', 'Aliquid ut quia dolor velit velit mollitia. Dolorem aut molestias et esse qui nemo. Illum ut sint possimus facere corrupti debitis. Voluptates hic libero assumenda et suscipit accusamus ducimus.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(9, 'Assumenda tempore voluptatem ipsa et omnis eveniet eos. Commodi nulla odit dolor eos. Iure omnis molestiae temporibus excepturi et culpa deserunt porro. Amet et dolor dolor tenetur debitis.', 'Aut laborum natus perspiciatis. Dolores maxime sit placeat cupiditate. Quis nemo quis cumque necessitatibus illum. Ipsam illo quisquam ab dolorum.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(10, 'Iusto et ut explicabo nihil dicta possimus. Cumque veniam nisi repellendus fuga aut aut corporis. Sint iure aliquam saepe omnis sunt cupiditate.', 'Qui ex consectetur deserunt dolores ut et reprehenderit. Aut repellendus est doloribus qui.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(11, 'Velit et numquam vel numquam modi id dolor. Dolorem et assumenda non voluptate doloremque omnis. Repellat dolores rerum consequatur. Optio impedit consequatur tenetur saepe cupiditate id veniam qui.', 'Ut labore ut quaerat. Voluptatem in quis et minus qui. Aliquam in praesentium cumque aut eligendi sit repellendus. Quia delectus quia earum tempora.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(12, 'Nesciunt non velit id quas. Provident eaque est natus laborum et esse. Ipsam ad vero natus quae non veritatis.', 'Voluptatibus a similique voluptatem non. Sunt et at veniam et. Sunt ratione a eaque incidunt quod temporibus.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(13, 'Molestias vitae aut nobis quia neque. Ut aspernatur eum at aut incidunt qui. Fuga aperiam quasi at dignissimos.', 'Est molestias accusantium tempore commodi consectetur soluta. Itaque consectetur molestiae amet neque unde enim tempore. Dolorem qui repellendus a qui sequi. Illo odio exercitationem voluptas.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(14, 'Repellendus occaecati labore modi quia libero. Ut aut excepturi cumque.', 'Amet laboriosam quidem eaque est. Ad quod maxime facere. Alias labore aut id aut aut placeat.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(15, 'Culpa incidunt dolorem saepe perferendis necessitatibus et. Rerum quasi officia temporibus nostrum. Quibusdam rem cumque praesentium voluptatem corrupti quis illum.', 'Deserunt quia nihil quaerat in excepturi sit. Est ut cumque totam molestias sed. Omnis at eligendi in qui minus et sint. Totam quia quo quia officiis sed ex.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(16, 'Alias error possimus totam. Sint ducimus itaque recusandae atque velit. Qui sit aspernatur aspernatur aut sed.', 'Minus odit sed expedita ullam rerum maxime earum itaque. Amet autem maiores aut quam quia nostrum. Optio sit vel facilis qui nostrum sit ratione et.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(17, 'Repellendus magni delectus repellendus repellat sapiente molestiae. Et ipsum et numquam facilis at inventore quia. Provident assumenda debitis nihil repudiandae non asperiores.', 'Rerum laudantium eligendi quos asperiores. Et neque soluta vel. Deleniti esse nam explicabo animi adipisci.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(18, 'Et repellendus voluptate et et sit. Sint quibusdam nostrum natus reprehenderit eum aut. Qui sunt a qui nihil recusandae.', 'Non cum adipisci qui occaecati ea earum. Porro doloribus aut odio sint exercitationem quisquam earum a. Dicta officia sed voluptas error nesciunt saepe. In deserunt commodi sequi ad fuga omnis.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(19, 'Eos rerum vel aut reprehenderit quas laboriosam voluptas. Ipsam eveniet tempora at sunt exercitationem similique eum earum. Quia molestiae sit aliquam.', 'Reiciendis saepe officia non aut natus et. Ipsa odio sit autem odio molestias sunt fugit eveniet. Similique hic et iure laboriosam nostrum amet minima.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(20, 'Veritatis consequuntur et sit sunt quibusdam dicta mollitia tempora. Maiores aspernatur non vero. Nobis vitae dolore est beatae. Ut consequatur earum eveniet quidem.', 'Quibusdam saepe alias accusantium dolores corporis tempore. Accusantium ipsam consectetur molestias. Non ullam officiis occaecati dolor dolor.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(21, 'Necessitatibus fugit aut dolore temporibus. Sed consequatur itaque qui officia molestiae aut dolore.', 'Sapiente non nulla voluptas similique quibusdam quo. Corrupti rem voluptas occaecati fugit incidunt voluptatem corporis. Libero sed nobis et beatae. Architecto eos suscipit est qui vitae accusantium facere harum.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(22, 'Veniam quasi minima et porro consequatur ut aut. Adipisci debitis repellat molestiae deserunt expedita excepturi eveniet hic. Laborum libero eius non numquam inventore.', 'Earum ipsa unde laborum sed nihil. Delectus veritatis dolorem ut aut. Aut recusandae eaque nihil non et commodi sint nihil. Repellat eum ut porro qui mollitia numquam optio.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(23, 'Ab dolorum rerum repellat accusantium. Dolores et voluptatem deserunt voluptates nisi et. Nam ut laboriosam debitis maxime et. Rerum a eos quo rerum accusamus ad consequatur.', 'Molestias itaque dolorem eum quas omnis quae adipisci. Eos officia ut impedit porro perspiciatis odio velit dolor. Natus sit deleniti nulla culpa unde sit blanditiis modi.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(24, 'Qui nostrum dicta aspernatur culpa. Odio quas rem reiciendis nam inventore. Consequuntur eaque nostrum numquam et. Quia est aspernatur eum qui.', 'Est sit suscipit quae laboriosam. Ullam quia quae et. Ut nihil nesciunt vel asperiores. A pariatur magni maxime culpa tempore qui consectetur.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(25, 'Quia consequatur qui quae. Fugiat delectus itaque aut laborum ea repudiandae enim quis. Ut non velit iusto voluptas.', 'Dolores doloribus in veniam atque corrupti nemo deleniti. Deleniti non tempore asperiores officiis. Accusantium rerum iure vel vitae sed ut. Provident occaecati quae vitae amet possimus. Culpa voluptas officia nesciunt recusandae omnis.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(26, 'Corrupti deserunt a amet necessitatibus architecto dolor illo. Nam incidunt dolore pariatur minus sapiente nobis praesentium minima. Iusto sequi est nihil aut et temporibus.', 'Consequatur maxime omnis qui unde aut doloremque. Quo fugit non necessitatibus modi itaque. Libero debitis voluptatem provident et ipsum facere.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(27, 'Et iste aut hic dolorem quam. Qui nam aspernatur voluptates. Dolorem possimus eos delectus recusandae. Ullam explicabo ut id ipsum atque. Cumque tempora alias ipsum dolor ipsam.', 'Quisquam pariatur quaerat voluptatem qui deserunt et voluptatem. Odit ut modi quasi iure. Repellat architecto ad qui. Soluta autem nihil consequuntur velit qui et sed.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(28, 'Consequuntur incidunt earum quia non. Qui occaecati sit rem omnis. Aut deleniti quos repellat perferendis iusto exercitationem.', 'Quas molestias deleniti molestias et provident. Accusantium illum veniam dolor. Est voluptatem consequuntur rem nihil tempora reiciendis. Id adipisci qui aut excepturi enim.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(29, 'Illum sint harum et fugit. Aut ipsa repellat officiis modi magnam. Enim dolorem dolor et unde.', 'Est ex qui assumenda perferendis. Architecto vitae in architecto. Consequuntur quod et nihil et eligendi ut.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(30, 'Quasi impedit qui occaecati voluptatem nam. Quas quas dolores quos neque velit. Facere cum dignissimos et perferendis consequuntur provident at.', 'Omnis ipsam ducimus tempora tenetur. Facilis inventore velit iusto odit sit est commodi. Rerum ab amet et magni quod aliquid. Unde omnis aut aut quaerat vel ut dicta reprehenderit.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(31, 'Deserunt est corporis est et officiis. Error voluptas et consequatur natus corporis. Nihil molestias sequi veniam.', 'Et atque aut quis fuga. Mollitia impedit voluptas dolor nihil velit.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(32, 'Adipisci facilis dolorum aut perspiciatis illum quam. Amet repudiandae in aut exercitationem qui et modi. Iste cum aut et assumenda at sint necessitatibus. Ut quam et et repudiandae eos.', 'Qui molestias esse facilis molestiae. Sed qui illo commodi dolorem ad deserunt aut. Qui eos id molestias et at.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(33, 'Aut quo repellendus rerum ea voluptates. Esse ratione qui amet optio. Sit ab aperiam consectetur veniam voluptate et.', 'Rerum odit sit laborum quos ut nam. Voluptatem suscipit reprehenderit mollitia repellat animi cupiditate quo perferendis. Ullam est alias ut numquam quia beatae.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(34, 'Eveniet nisi et molestiae eius minima labore ipsum. Non quia assumenda vel itaque repudiandae et exercitationem est. Voluptatum ipsa nemo quis qui dolor.', 'Non vel doloremque deserunt qui beatae nulla aperiam non. Et eos reiciendis voluptas ducimus aut rerum corporis. Odio similique amet et expedita quos omnis eum. Sint ut quaerat quisquam ut voluptatem dicta voluptates.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(35, 'Voluptas placeat voluptas velit molestiae. Magnam nesciunt ipsa explicabo ut sed culpa.', 'Totam beatae dolores sint sapiente. Aut dolores molestias minus sequi ea ducimus totam. Hic perferendis sequi exercitationem blanditiis quae rerum minus.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(36, 'Qui quos ipsum tempore nihil in et ut. Molestias repellat quisquam aut sunt facilis. Et enim voluptatum deserunt saepe laborum totam. Consequatur id adipisci quae dolores.', 'Est aspernatur quidem est quas sunt facilis rerum. Rerum nihil quo ut cupiditate veritatis quo. Explicabo doloremque rem omnis dolorem. Consequuntur et tenetur rerum.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(37, 'Minus nemo dolorum enim porro. Et sunt quis doloribus reprehenderit nam consectetur veniam ea. Quasi earum ratione modi voluptatem consectetur asperiores iste nam.', 'Hic accusantium non consectetur. Accusantium rem eligendi eius delectus harum. Aliquam amet nobis perferendis. Consectetur aut voluptatibus et ea et maiores non perspiciatis. Ea itaque aliquam ut culpa omnis numquam et.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(38, 'Optio ut amet quas qui. Veniam deleniti maiores voluptatem omnis velit est aperiam. Iusto labore qui dignissimos quaerat.', 'Eligendi magnam unde explicabo eos. Est voluptas voluptatum explicabo repellendus aliquam. Optio quidem nulla et.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(39, 'Dicta earum aspernatur laborum harum. Repellendus harum non ea atque atque labore amet voluptates. Aut aperiam amet at in aut suscipit.', 'Nobis rerum itaque eaque. Labore at accusantium reiciendis autem sed velit quo. Quod facilis fugit dolores.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(40, 'Quam aut laboriosam ad ipsum iste dolor. Accusamus aut assumenda minima sequi voluptate ducimus at ex. Veritatis rerum ut ut laudantium dolorum. Nam sunt labore placeat et.', 'Officia id rerum necessitatibus necessitatibus quas necessitatibus aut sed. Veritatis aliquid ullam eos natus. Neque facilis dolorem voluptatibus.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(41, 'Perferendis dolores natus omnis enim. Quos iste non id veniam. Pariatur veritatis necessitatibus minima et.', 'Quos non minus beatae ex ducimus qui. Consequatur perspiciatis corporis ut.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(42, 'Quis exercitationem voluptas dolor iure. Ut accusamus dolorum temporibus.', 'Qui tenetur ab earum voluptate mollitia sapiente. Delectus dolor vero ad quia minima. Quidem dolor beatae animi et consequatur maiores nulla. Et aut est ut enim et.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(43, 'Et rem et illo pariatur et hic est. Maxime voluptate velit inventore id laborum molestiae unde. Et iure omnis est deleniti.', 'Veniam velit saepe ut ratione perferendis modi. Accusantium rerum quibusdam beatae. Facere mollitia atque impedit quasi ut omnis.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(44, 'Non voluptatem nam voluptatem quibusdam nesciunt. Minus ea maiores quae aut. Eveniet rerum officia est eos est voluptatibus. Distinctio et quidem cupiditate quia omnis.', 'Aliquam ratione explicabo dolores excepturi. Cupiditate itaque quidem est quia voluptas rem mollitia. Nisi nemo delectus beatae corrupti. Reiciendis et sed quaerat voluptas incidunt sequi est.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(45, 'Molestias earum enim debitis sed quo quam quia. Dolores odio molestiae enim saepe tenetur enim et.', 'At qui vero consequuntur officiis iure tempore. Veniam id nulla voluptatum et voluptatibus. Id totam assumenda et nihil qui.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(46, 'Harum laboriosam non similique sunt. Eaque illo sed aperiam totam libero tempora voluptas. Esse velit et fugiat quo voluptates.', 'Facere a facilis eum expedita ad. Facere dicta possimus amet ea eius dolor. Sed est et nemo dolores quidem voluptas facere. Illum expedita repellat nostrum.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(47, 'Et rerum sed est nihil quisquam nemo dolor. Dolorem accusamus ea nostrum.', 'Recusandae nemo dolor quasi. Quae quae molestiae pariatur dicta fugit perspiciatis sit fuga. Fuga qui quae eos autem dolores odit voluptas.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(48, 'Rem porro sed nesciunt quo minus consequatur. Eveniet labore voluptatem natus.', 'Omnis quis maiores aut illum. Nemo non dolor est ab. Aut culpa qui aperiam nihil.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(49, 'Soluta quidem cum odio. Et quibusdam cumque sunt deserunt et ea itaque nemo. Sunt non quo exercitationem blanditiis non quo. Vel voluptatem vero sit dolor voluptatum.', 'Magni autem praesentium explicabo fugit. Delectus quaerat odio ut sapiente voluptatem odio non.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(50, 'Pariatur culpa vitae maiores quidem sit ab aliquam. Nihil voluptatem aut consectetur quia. Voluptas similique quod ratione.', 'Hic molestiae laborum voluptas. Quisquam officia atque reprehenderit voluptas velit dolores. Sunt voluptate alias expedita sunt ipsum et reprehenderit.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(51, 'Molestias sed quae cumque et quia velit. Voluptatem quia qui debitis consequuntur consequuntur rerum. Porro rem temporibus vitae sint molestias.', 'Praesentium quis necessitatibus rerum. Nam rerum neque dolor.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(52, 'Voluptas eligendi dolores pariatur dolor. In quibusdam tempora mollitia alias. Autem perspiciatis delectus ut et. Consequatur rerum dolores ut eveniet autem totam.', 'Non dolore velit aut ratione quae dolores doloremque praesentium. Expedita dignissimos sit aspernatur quisquam voluptate ut autem deleniti. Minus iste ea doloremque quia. Asperiores animi est omnis et tempore.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(53, 'Qui non saepe repudiandae quia vel. Quibusdam quia libero provident sit. Ut quam corrupti soluta. Ab et sed omnis corporis amet.', 'Reprehenderit atque exercitationem mollitia officiis omnis maxime ratione repellat. Dolorum sunt nemo totam cumque dolor mollitia. Officia repellat officia voluptates laboriosam inventore non dolorem odio.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(54, 'Molestias sed et corporis excepturi. Nihil expedita eligendi quas dolorum officia. Et consectetur et doloremque. Unde sint vel est porro dignissimos sit maxime.', 'Mollitia et modi ratione cupiditate explicabo. Quia voluptatum soluta iste quidem. Reiciendis et aspernatur exercitationem dolorem.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(55, 'Et nam doloribus et non. Rerum ut qui quo. Quaerat non possimus consequatur magni ipsum et quia deserunt. Quia et minima repellat est sunt. Sint quia nesciunt hic culpa incidunt.', 'Autem minus a dolorem maxime officiis sed. Voluptate omnis eum nisi nemo hic quia neque unde. Ut quis placeat esse distinctio et explicabo ut. Nemo molestiae facilis voluptatum sequi.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(56, 'Sunt hic nihil expedita sint beatae aut suscipit est. Qui distinctio voluptas quis iste dolore eos. Quia est ut tempore animi et. Non nobis voluptatem quisquam neque molestiae.', 'Aut et officia cupiditate inventore vero facilis inventore voluptates. Rerum enim ipsam et est possimus rerum quo. Voluptatem et tempora placeat. Dolorum autem magni illo cupiditate facilis nisi.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(57, 'Ut iure non dolor aut deleniti. Dolorem praesentium aliquid nam omnis voluptas natus.', 'Accusantium sit repellendus autem assumenda. Eum deserunt veritatis neque magnam iste aut voluptatum quas. Sint deserunt eligendi et nam dolorem vero ratione.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(58, 'Repudiandae id mollitia dicta omnis. Inventore excepturi et velit illum molestias. Ut fuga consequatur in quia perferendis deserunt. Modi possimus ut minima cumque corrupti voluptatem.', 'Qui laudantium dignissimos dolor quia quisquam animi et. Vel quam expedita beatae tempore qui cum laboriosam aspernatur. Eius minus quibusdam corrupti minima. Nisi et et expedita aliquid dignissimos libero illo eos.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(59, 'Eius asperiores ratione consequatur dolor. Quae architecto non ut quaerat.', 'Voluptatibus et ad accusamus et temporibus illo. Temporibus aut laboriosam sunt exercitationem ut illo consequatur. Non aut iste fuga velit sunt neque. Dolores ut eius voluptatibus ut.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(60, 'Quisquam velit fugiat fugiat aut occaecati. Quo voluptates itaque nam laboriosam. Ad incidunt ipsum quia cum aut. Quasi ea tempore cum officiis.', 'Non aut at autem odit. Enim suscipit aspernatur debitis ut facilis. Molestiae consequatur ipsum at sint unde similique. Dolore occaecati et maxime dolor accusantium expedita.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(61, 'Molestiae ea mollitia repudiandae laboriosam. Voluptate voluptatem reiciendis nihil sunt. Sunt ad excepturi veniam porro.', 'Laboriosam nemo sunt veritatis aut. Ex eius placeat laborum officiis rerum est ipsa. Repellendus ut velit laboriosam odio recusandae. Praesentium recusandae nobis ducimus voluptatum.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(62, 'Iste nobis et consequatur autem non corporis velit voluptas. Nihil velit est possimus et voluptas architecto libero. Qui nulla eius minus vel sint eos.', 'Repudiandae sint sed tempora incidunt assumenda sed voluptas. Quisquam dolorum explicabo reiciendis qui. Molestias debitis voluptatem sed ab. Voluptatibus omnis ullam in laboriosam quia cum animi.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(63, 'Soluta repudiandae et est eos explicabo modi officiis eos. Rerum ut voluptatem unde dolorem. Voluptatem recusandae ducimus iste aliquam.', 'Est accusamus quod vel cupiditate repellat. Exercitationem omnis laudantium dolor quae reprehenderit. Sed officiis veniam quasi ut mollitia est.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(64, 'Reprehenderit ipsam cumque aliquid enim. Rerum ut voluptatem non mollitia eos. Adipisci fugit modi quas iste vero aperiam.', 'Corporis et et iste debitis ut. Nemo voluptate accusantium quis. Consequatur ex culpa ipsam adipisci odit. Repellendus dolor voluptatum deserunt.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(65, 'Omnis fugiat architecto quia quam. Laudantium accusantium quidem amet et quam.', 'Doloremque enim eum qui rerum. Aspernatur molestiae sequi blanditiis. Aut et natus quidem blanditiis dicta rerum illo.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(66, 'Voluptas itaque neque deserunt aperiam nesciunt iste. Quis et velit aut. Aperiam ut pariatur rerum nihil voluptas. Vel dolor sint quis. Dolor fugiat voluptatibus excepturi magnam eum expedita cum.', 'Magni aut ut aut omnis reprehenderit. Vel ut expedita facilis ut sit nam in.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(67, 'Fugiat hic incidunt ipsa nesciunt. Officia id at consequatur quam eum. Corrupti error eos dolorem repellendus.', 'Fuga aut ut consectetur laudantium aliquid non. Perspiciatis facere hic provident soluta. Sint nulla quia numquam rerum.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(68, 'Qui aut ex maiores. Et voluptas quisquam qui magnam et iure accusantium. Incidunt dolor nemo dolorum dolorem ut quia consequuntur. Rerum omnis dolores sit repellendus asperiores quasi nemo.', 'Velit ut doloribus nobis aut vero. Ut est voluptatem nam rem. Saepe qui dolor amet consectetur consequuntur culpa non. Dolorem recusandae eum quo ea eum.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(69, 'Quam nemo illo tenetur ut vel id non. Ducimus sint sit in nihil quod quibusdam pariatur. Eum earum dolorem unde quam velit vero provident.', 'Qui consequuntur dolores quia eum. Et rem iure odit laudantium. Ea corporis placeat quisquam sunt asperiores dolorem nihil.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(70, 'Consequatur est debitis tempora exercitationem sed quibusdam. Aperiam sunt consequuntur ut exercitationem quia. Incidunt ea est ducimus qui.', 'Et quaerat culpa quidem earum et. Eius voluptatem minus necessitatibus ea.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(71, 'Qui ullam aliquid quos voluptatem fuga. Maxime ut aspernatur laudantium officia nostrum qui placeat. Cumque voluptatem odit blanditiis.', 'Sunt delectus quae vitae velit esse. Quisquam suscipit ad aut nostrum aut voluptas sapiente.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(72, 'Et aut nostrum voluptatibus qui. Beatae aliquid et minima odit voluptatem. Adipisci aliquam et culpa minus sunt. Ex debitis optio vel libero quidem consequatur.', 'Quis voluptas ab porro quia ut. Tenetur ut eum voluptatem sed ipsa quam ad. Molestiae tempore accusantium deserunt earum fuga consequuntur pariatur molestias. Molestias consequatur ex sunt reprehenderit.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(73, 'Et officiis dignissimos rerum. Est cum consequatur dolores impedit cum odio rerum. Quia a nihil fugiat ratione ipsum eius et beatae.', 'Dolorem voluptatum recusandae doloremque est eum. Nam velit enim eaque qui qui. Ipsa est exercitationem et quibusdam aut.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(74, 'Iste magnam repellendus sed eum laboriosam laudantium laboriosam. Id distinctio officiis possimus suscipit necessitatibus sint. Atque eius libero ea omnis veritatis laboriosam.', 'Non aut qui eum non quaerat. Aut minus occaecati aut explicabo atque maxime consequatur. Quia debitis odio quo cupiditate. Enim qui repudiandae deserunt neque in reiciendis facere.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(75, 'Velit dolorem maxime voluptas non non voluptate quam voluptatum. Deserunt occaecati minus error nulla itaque maxime et. Consequatur id ut alias minima eos quo sit ut.', 'Sunt assumenda consectetur odio tenetur. Voluptatem suscipit laudantium vel quo voluptate. Nemo molestiae nostrum ipsa dolores eum nisi dolorem quibusdam. Officiis voluptatibus illum quis eos accusantium corrupti vero.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(76, 'Corporis voluptatem nostrum quia id ex. Nam quia delectus fuga odit. Qui ratione quasi sint eum aut. Rerum error aut enim qui dolor.', 'Facere rem consectetur sunt rerum vel error. Eos voluptatem nobis dolorem. Placeat sunt repellat reiciendis. Voluptas qui et fugiat beatae quia ex illo.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(77, 'Nostrum velit aut itaque nulla libero. Magni possimus et quibusdam dignissimos nemo. Delectus ea eum maiores quia odit quam. Quis ut voluptas et. Ut quisquam iusto natus ducimus illum.', 'Qui quis laboriosam maxime adipisci unde. Odio sed quo quo voluptas amet. Ea nulla error adipisci aspernatur quia nostrum aut.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(78, 'Molestiae in dolore quo nam. Minus sit eum ratione quae quam a. Et eaque vel ea labore provident maxime.', 'Qui recusandae sed et expedita nobis ut. Et aliquam pariatur recusandae quia saepe consequatur iusto natus. Et sunt et rem velit.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(79, 'Optio distinctio consequatur corporis neque eum. Sed optio aut quisquam quibusdam. In quia molestias adipisci quod pariatur quo.', 'Laborum unde voluptatem labore. Error architecto velit adipisci aut.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(80, 'Cum quisquam fuga aut. Voluptates iusto illum odio non. Consequuntur earum voluptatum error magnam quisquam quasi tempore velit.', 'Tenetur voluptates minus consequatur consequatur. Inventore et dolor blanditiis debitis a maxime. Cumque magni omnis adipisci est distinctio. Assumenda perspiciatis officiis est possimus dolores.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(81, 'Numquam quas praesentium odit et et quo. Magni fugit soluta sunt unde hic earum impedit. Sit atque veritatis dolorum tenetur.', 'Doloremque sed amet eligendi consequatur maiores. Perspiciatis quae architecto deserunt odio. Aut vero sunt similique quia.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(82, 'Ratione officia voluptate nemo aut dolorem in aliquam. Non reprehenderit unde neque vel in voluptas ut. Numquam eum accusamus quis asperiores.', 'Provident eum eligendi eos et ullam ipsum fugiat. Soluta omnis eligendi rerum sit nemo voluptas labore.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(83, 'Nihil distinctio in pariatur aut dolores quam nisi. Placeat ipsam placeat quam non ducimus.', 'Est et reiciendis nostrum qui. Ipsum ut beatae rem quis ipsum. Explicabo odit adipisci saepe vel nemo magni. Omnis qui veniam dolore vel id asperiores et est.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(84, 'Officia qui molestias sit est nihil impedit dolore. Accusamus placeat deserunt maxime. Ut qui in sed et.', 'Consectetur velit alias voluptatem commodi architecto. Dolores esse culpa vel alias. Ut delectus libero autem et dolores. Cupiditate rerum explicabo est aperiam sit quasi quod.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(85, 'Iusto maiores quis sit quasi. Et soluta voluptatem repellendus eum rem corporis. Voluptas sint omnis cum et amet est qui.', 'Aut sequi ut praesentium laudantium officia in facilis. Optio corporis placeat quia non magni dicta explicabo neque. Est provident maiores et et cumque rerum ducimus.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(86, 'Consequatur perspiciatis doloribus aut. Cumque quis et consequatur debitis. Ducimus dolore possimus hic illo accusantium exercitationem sed. Qui nulla error et.', 'Modi velit hic minima alias. Ut sit et inventore molestiae. Explicabo necessitatibus ea nulla iure saepe ut. Id et qui repudiandae facere eum voluptatem asperiores.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(87, 'Vero est esse architecto. Maiores quae enim laborum qui illo. Sit maxime quidem voluptas assumenda.', 'Aliquam sit rerum ullam ipsum provident quis voluptatibus nostrum. Nihil ut fugit dolorum sapiente et sed repudiandae omnis. Ducimus ipsam sit provident et. Recusandae illum quia consequatur et.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(88, 'Ipsam dolor praesentium quo perspiciatis pariatur. Iusto veritatis est quibusdam repudiandae odio quia est. Quo illo at quis quo a. Eveniet quis earum unde autem.', 'Voluptas velit nemo qui dolorum sapiente minima. Tempora modi incidunt ab unde blanditiis. Error hic quia aut. Nemo quod est sed eum.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(89, 'Iste consequuntur odio et a vel ullam. Labore doloribus vitae beatae veniam eveniet sed eos. Necessitatibus ea alias cupiditate ex ipsa.', 'Voluptatem architecto excepturi exercitationem ad natus blanditiis in. Unde repellat doloribus voluptas et. Enim laborum velit rerum iste vel. Deserunt est ad alias autem.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(90, 'Et ut inventore quod ut corporis perferendis totam. Harum rerum ut ipsa sunt perspiciatis ut dolor. Dolor dolorem maiores ex blanditiis libero qui ut.', 'Voluptas consectetur praesentium tempore non error veniam natus. Distinctio a eius repudiandae et praesentium. Quis facilis ut iure odit accusamus sunt asperiores est. Aut eos doloremque hic et nisi dolores tempora eos.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(91, 'Eveniet hic aut minima qui quia nostrum laboriosam. Quisquam ratione inventore quo fugiat sunt eum magnam. Voluptas rem eos sed aut illum voluptatem autem.', 'Aut et consequatur ut natus nobis impedit non. Quod nihil nisi aspernatur. Facere ut eligendi perspiciatis maiores beatae. Et omnis in temporibus minus quis.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(92, 'Minus eligendi soluta eum excepturi. Qui velit molestiae dicta nam non quia. Odit excepturi sed aut sit exercitationem sed voluptates libero.', 'Facere in quaerat natus deleniti in aut aliquid. Minus temporibus reprehenderit facilis quam ipsam quibusdam qui. Eveniet velit assumenda ea nulla quaerat nesciunt.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(93, 'Sit quod sunt commodi. Aut aut reprehenderit id qui. Quaerat et voluptas beatae asperiores et officiis.', 'Omnis quam nulla voluptate. Dicta velit odio laboriosam laboriosam nisi quasi vero.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(94, 'Ut quisquam minus quia inventore. Ullam vero sunt eligendi rerum dolorum. Totam voluptatibus magnam est est optio sit. Temporibus dolorem dolorem sed earum sint.', 'Facilis eos in quos placeat quibusdam. Id voluptate minima tempora voluptatem ab. Est eos et libero ducimus adipisci.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(95, 'Optio eum labore qui praesentium cupiditate enim eum. Et sapiente sit aut. Corporis nobis sint excepturi quidem cupiditate.', 'Minus omnis nesciunt eos est. Consequatur est deleniti repellat quaerat et repellat eos. Sit vero ipsam quia quod delectus distinctio consectetur. Quis ea aut vitae similique.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(96, 'Sapiente molestiae dicta autem laboriosam molestias. Quae et culpa fuga alias qui eligendi iure. Quo officiis et vel sequi aut. Ut laudantium consequatur ut dicta ea.', 'Qui et autem sint vel. Laborum atque ex nihil et impedit consequatur dolor. Sapiente labore expedita eaque nihil id amet.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(97, 'Perspiciatis veniam dignissimos repellat ut ipsam aut sapiente adipisci. Velit quaerat neque adipisci praesentium eius ut. Ullam consequatur non exercitationem.', 'Porro voluptatum nihil amet quia quasi. Omnis quo nam temporibus aut aut molestiae dolore. Tempore sed pariatur harum veniam voluptas blanditiis et.', 2, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(98, 'Laborum recusandae animi veniam ipsum. Mollitia et eligendi magni incidunt. Nihil eos eos enim est quod.', 'Explicabo qui numquam ad dolores. Et placeat veniam et officiis et est maxime sunt. Nihil libero est et fugit alias. Autem ut dolor aut nulla officiis in dolorum.', 1, 1, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(99, 'Incidunt aut assumenda in accusantium nihil alias cupiditate laborum. In minima perferendis ut aut consequatur et.', 'Nihil placeat nam sunt et tempora qui. Consequatur cum tempora perspiciatis necessitatibus repellendus quibusdam. Eveniet qui libero minus et.', 1, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55'),
(100, 'Dolor ullam quo dolorem non ea. Numquam temporibus aut praesentium et corrupti. Illo nisi suscipit non nulla sequi.', 'Sed provident ea eius voluptas. Illo facilis voluptatem ex natus voluptatem id.', 2, 0, '2024-02-17 05:30:55', '2024-02-17 05:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `offer_price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` decimal(8,2) NOT NULL,
  `mrp` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `description`, `image`, `selling_price`, `offer_price`, `quantity`, `price`, `mrp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tata Sampann Red Masoor Dal (Split)', 1, 'For most Indians, comfort food is linked ', '20240217110316.jpg', 10.00, 10.00, 2, 100.00, 54.00, 1, '2024-02-17 05:33:16', '2024-02-17 05:33:16'),
(2, 'Tata Sampann Yellow Toor/Arhar Dal (Split)', 1, 'Flipkart endeavours to ensure that the sellers', '20240217110541.jpg', 10.00, 10.00, 3, 100.00, 54.00, 1, '2024-02-17 05:35:41', '2024-02-17 05:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-02-17 05:30:53', '2024-02-17 05:30:53'),
(2, 'writer', 'web', '2024-02-17 05:30:53', '2024-02-17 05:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `adhar_number` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'user.avif', NULL, '$2y$10$QypCVJZDUX0.iEd/eTdREe37RZ.Kx1eY0dP7Hb.a2cRoI3h2Ios5O', NULL, '2024-02-17 05:30:53', '2024-02-17 05:30:53'),
(2, 'writer', 'writer@writer.com', NULL, NULL, '$2y$10$1l88jmwV/BDbLzV4Q9uYuOxVgAtAlF5w5xSECUdUlj3Z.QibyAAWO', NULL, '2024-02-17 05:30:53', '2024-02-17 05:30:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_submissions`
--
ALTER TABLE `contact_form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontusers`
--
ALTER TABLE `frontusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontusers_email_unique` (`email`);

--
-- Indexes for table `mailsettings`
--
ALTER TABLE `mailsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_form_submissions`
--
ALTER TABLE `contact_form_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailsettings`
--
ALTER TABLE `mailsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
