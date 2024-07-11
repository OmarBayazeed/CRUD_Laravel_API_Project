-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 04:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel8ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'inventore pariatur', 'inventore-pariatur', '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(2, 'delectus enim1', 'delectus-enim', '2024-02-09 05:17:07', '2024-02-20 14:55:10'),
(3, 'est quidem', 'est-quidem', '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(4, 'quis ex', 'quis-ex', '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(5, 'modi cum', 'modi-cum', '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(6, 'perferendis alias', 'perferendis-alias', '2024-02-09 05:17:07', '2024-02-09 05:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`, `expiry_date`) VALUES
(1, 'OFF5', 'percent', 5.00, 500.00, '2024-02-20 15:09:58', '2024-02-20 17:21:12', '2024-02-20'),
(2, 'OFF100', 'fixed', 100.00, 1000.00, '2024-02-20 15:13:26', '2024-02-20 15:13:26', '2024-02-20'),
(4, 'OFF10', 'fixed', 200.00, 1000.00, '2024-02-20 17:11:14', '2024-02-20 17:16:16', '2024-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `subtitle`, `price`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'first slider title', 'first slider subtitle', '200', 'http://127.0.0.1:8000/shop', '1708019689.jpg', 1, '2024-02-15 11:10:47', '2024-02-15 15:54:49'),
(2, 'second slider title ', 'second slider subtitle ', '100', 'http://127.0.0.1:8000/shop', '1708019706.jpg', 1, '2024-02-15 11:14:52', '2024-02-15 16:25:59'),
(3, 'third slider title', 'third slider subtitle', '300', 'http://127.0.0.1:8000/shop', '1708019756.jpg', 1, '2024-02-15 11:15:18', '2024-02-15 16:24:30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_09_011847_create_sessions_table', 1),
(7, '2024_02_09_053002_create_categories_table', 2),
(8, '2024_02_09_053033_create_products_table', 2),
(9, '2024_02_09_231858_create_shoppingcart_table', 3),
(10, '2024_02_15_114701_create_home_sliders_table', 3),
(11, '2024_02_17_151831_create_sales_table', 4),
(12, '2024_02_20_143104_create_coupons_table', 5),
(13, '2024_02_20_185700_add_expiry_date_to_coupons_table', 6),
(14, '2024_02_23_120133_create_orders_table', 7),
(15, '2024_02_23_120223_create_order_items_table', 7),
(16, '2024_02_23_120252_create_shippings_table', 7),
(17, '2024_02_23_121505_create_transactions_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`) VALUES
(1, 2, 888.00, 0.00, 186.48, 1074.48, 'Cecilia', 'Brown', '1234134134', 'your.email+fakedata43754@gmail.com', '123', '435', 'newyork', '501 Arvilla View', 'america', '432', 'ordered', 1, '2024-02-23 15:31:47', '2024-02-23 15:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 318.00, 1, '2024-02-23 15:31:47', '2024-02-23 15:31:47'),
(2, 10, 1, 150.00, 1, '2024-02-23 15:31:47', '2024-02-23 15:31:47'),
(3, 25, 1, 420.00, 1, '2024-02-23 15:31:47', '2024-02-23 15:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'quia illo voluptas aut', 'quia-illo-voluptas-aut', 'Quo voluptatem et cumque non. Et beatae error quia odio. Temporibus aut fuga velit suscipit rerum. Tempora non repellat rerum sunt nulla necessitatibus.', 'Fuga quis error maxime est. Molestiae reprehenderit nam voluptatem adipisci molestiae. Eaque consectetur perspiciatis quaerat in numquam rem labore. Esse dolor aliquam cupiditate. Molestiae non voluptatem hic et. Odit eligendi ut velit consectetur quo. Quos eum blanditiis fugit vitae. Aut ex quo eaque debitis. Dolores dolor ducimus et suscipit ut placeat ipsam molestiae.', 318.00, NULL, 'DIGI89', 'instock', 0, 170, '1708005635.jpg', NULL, 4, '2024-02-09 05:17:07', '2024-02-15 12:00:35'),
(2, 'doloremque sed non animi', 'doloremque-sed-non-animi', 'Consequatur suscipit aut ut. Accusantium et accusamus fugit explicabo. Dolorem architecto voluptas et perspiciatis voluptates debitis placeat. Rem autem qui dolores sit.', 'Totam ea amet quo quae numquam qui perferendis. Est dolorum autem atque quia. Doloremque ipsa iusto eos consequatur. Qui magnam cupiditate aspernatur hic odio quasi quasi. Esse libero repellat mollitia nesciunt. Laudantium consequuntur quidem omnis perspiciatis a id et. Nesciunt aspernatur doloribus corrupti dolores. Debitis harum aut eum sit blanditiis aut incidunt necessitatibus.', 491.00, NULL, 'DIGI76', 'instock', 0, 200, 'digital_9.jpg', NULL, 3, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(3, 'ipsum et similique earum', 'ipsum-et-similique-earum', 'Quo suscipit nam voluptatem quisquam ut corrupti fuga qui. Dolores sunt itaque sed. Aut dolorem sunt amet doloremque. Qui consequatur autem possimus incidunt dolorem laudantium eos reprehenderit.', 'Dolore vitae sit reiciendis. Deleniti aperiam commodi rerum cumque inventore consequatur possimus ut. Veritatis aut rerum quae ad atque. Nemo aut excepturi animi dolor. Ab facere porro et sed adipisci aut. Laboriosam ipsum vel autem necessitatibus. Voluptatum quis adipisci adipisci et voluptate nisi.', 100.00, 90.00, 'DIGI280', 'instock', 0, 168, 'digital_20.jpg', NULL, 2, '2024-02-09 05:17:07', '2024-02-20 14:50:08'),
(4, 'deserunt non occaecati molestiae', 'deserunt-non-occaecati-molestiae', 'Quia optio dolorem occaecati qui tenetur ut occaecati. Sit unde corporis quo consequuntur sit minus quae. Ipsa adipisci labore fugiat sunt earum nihil in omnis.', 'Expedita rem qui officia illum iste eos assumenda. Labore debitis animi laudantium ipsa provident. Voluptas nisi labore in aut praesentium eius. Tenetur fugit eos veniam quia. Velit possimus nihil nisi earum sit repudiandae quo quos. Voluptatem reiciendis earum fugiat facilis. Velit quia nulla nisi ea iure. Nisi nisi illum hic numquam consectetur eius commodi. Repellendus unde maiores ipsum odio ea beatae. Non quam quia in mollitia architecto. Atque ut corrupti porro qui et quam.', 415.00, NULL, 'DIGI50', 'instock', 0, 170, 'digital_18.jpg', NULL, 4, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(5, 'cum consequatur quia cum', 'cum-consequatur-quia-cum', 'Qui occaecati beatae est quae accusamus dolores. Eos qui itaque earum dolorem. Recusandae voluptatem pariatur natus ut. Sit est quibusdam dignissimos ut.', 'Voluptas dolorem ut amet quaerat saepe harum voluptas. Facilis non tempora tempora inventore molestias. Aut cum autem beatae quam mollitia. Id ut sunt illo sequi sit nobis dignissimos. Autem commodi nostrum et dicta iure corrupti rem. Reiciendis quidem optio rerum nesciunt excepturi facere ad. Iure possimus voluptatem voluptate. Unde omnis distinctio omnis suscipit sunt voluptatum aut.', 170.00, NULL, 'DIGI285', 'instock', 0, 122, 'digital_14.jpg', NULL, 4, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(6, 'rerum dolores error sed', 'rerum-dolores-error-sed', 'Adipisci reprehenderit iure non repellendus maiores quasi ducimus consequuntur. Quasi consequatur blanditiis cum velit doloribus voluptatum qui odio. At vel earum ipsum ipsam earum.', 'Reiciendis quidem dolorem architecto eveniet facere deserunt non. Fuga sapiente totam quos sequi. Ut aut iste tempora. Ut itaque consequatur et fuga velit laudantium. Quibusdam aut molestiae est. Aspernatur et et est consequatur omnis voluptates dolores rerum. Voluptatem quaerat error voluptatem et voluptas reprehenderit. Non maxime sit nihil quidem veniam assumenda doloribus. Repellendus repudiandae a dolores quia quis earum incidunt. Voluptatem mollitia quo sed.', 280.00, 100.00, 'DIGI66', 'instock', 0, 167, 'digital_13.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-17 12:22:35'),
(7, 'quam ut non ad', 'quam-ut-non-ad', 'Nulla mollitia suscipit aut. Adipisci nesciunt suscipit iusto placeat sint sit. Aut quia consequatur blanditiis corporis quidem. Fugiat ipsa dolorum esse quia recusandae recusandae.', 'Neque et in qui est sint distinctio. Voluptatem omnis doloribus et vel qui. Tempore voluptates beatae qui est. Aspernatur nihil voluptatem illo voluptas nisi sunt omnis occaecati. Assumenda qui esse dolores tenetur quia. Quo aut provident aperiam facere illo ratione eius. Porro quaerat et delectus ea non officia. Deserunt consequatur autem hic dolorem. Reprehenderit aut ea soluta in.', 409.00, NULL, 'DIGI340', 'instock', 0, 198, 'digital_15.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(8, 'voluptatem laudantium reiciendis amet', 'voluptatem-laudantium-reiciendis-amet', 'Ut ut odit possimus in autem in quis. Eligendi distinctio non doloremque expedita deserunt sunt. Nihil ducimus quia eligendi id omnis explicabo. Quis voluptate est blanditiis suscipit magni.', 'Impedit et quo nihil enim nam nulla architecto. Voluptas ducimus quia beatae sit voluptates. Et et enim delectus dignissimos voluptatem quos. Blanditiis quaerat perspiciatis aliquam nihil qui. Modi illo distinctio optio tempore temporibus quo facilis. Sunt aspernatur ducimus quod sed occaecati soluta. Quidem nemo laborum inventore porro maxime et. Id qui qui modi ut. Et velit fugiat tempore consectetur non.', 121.00, NULL, 'DIGI207', 'instock', 0, 187, 'digital_17.jpg', NULL, 4, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(9, 'consequatur est dolorem cum', 'consequatur-est-dolorem-cum', 'Ea excepturi est aut dolor nulla. Placeat possimus et hic. Aperiam pariatur reprehenderit ab rerum exercitationem dolorem. Ex quia qui nam. Inventore aperiam debitis et rem quia voluptas.', 'Quia voluptas molestiae alias architecto assumenda rerum atque. Non aliquid voluptatem magnam. Similique quia est placeat. Soluta aliquam autem officiis quia facilis dolores debitis consectetur. Ex laudantium sint vel quia qui dolores. Nisi similique impedit ipsa culpa voluptatem voluptatum et. Debitis quae est unde. Qui dignissimos illo molestiae earum. Quas placeat odit ut voluptas eius soluta ut ullam. Fugiat voluptatem tempora beatae. Saepe aut aut culpa error fugit quis.', 49.00, NULL, 'DIGI187', 'instock', 0, 145, 'digital_22.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(10, 'assumenda at perferendis ea', 'assumenda-at-perferendis-ea', 'Quae est delectus nobis hic est. Magnam omnis sit delectus sed natus explicabo. Omnis voluptatem ea cum. Expedita tempore veritatis sint quia qui eligendi tempora.', 'Laborum eligendi id quos repudiandae totam nihil. Totam iusto exercitationem quas modi sunt. Et facilis vero enim eveniet reiciendis dolores quia et. Labore qui aliquam dolorem. Ad quia dolor velit doloribus repellendus maxime. Et est distinctio deserunt nam reiciendis. Fugiat molestiae quidem molestiae aut ipsam molestiae. Ut quod neque consequatur. Et aut totam voluptas. Id ut quis nulla inventore. Iste aliquid aut sint hic id laudantium.', 202.00, 150.00, 'DIGI251', 'instock', 0, 117, 'digital_8.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-17 12:23:14'),
(11, 'nihil consequatur voluptas et', 'nihil-consequatur-voluptas-et', 'Delectus quibusdam ratione sed velit quis repellat. Aperiam id quaerat optio. Eum ad eum repudiandae omnis.', 'Et quis magni ab voluptatem. Neque numquam ut enim cum veniam. Est quisquam accusantium reiciendis enim temporibus. Ipsa id beatae aut in quia molestias sed. Aut at harum ut blanditiis et repellat corrupti. Quisquam vero perferendis et consequatur. Reiciendis enim sunt ratione eos aspernatur qui. Nulla ipsa magnam id ullam ut et alias. Illum omnis molestiae quas qui voluptatem quo qui. Libero ducimus architecto qui soluta aut.', 90.00, NULL, 'DIGI204', 'instock', 0, 141, 'digital_11.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(12, 'consequuntur quia laudantium magni', 'consequuntur-quia-laudantium-magni', 'Illo quo explicabo cupiditate et consectetur ut nihil nobis. Neque quae quaerat pariatur quae quidem eos quo. Delectus vitae itaque sint.', 'Modi vel autem porro magnam et quo sit possimus. Veniam nihil dolorem velit officiis adipisci. In eveniet et ut ad. Non et libero animi molestiae corrupti eveniet. Dolorem sunt cum adipisci voluptates. Voluptate soluta quia sed aut. Modi neque soluta laboriosam eligendi. Voluptates optio et ut. Architecto dolor ea cumque consequatur ut eius reprehenderit incidunt. Dolores blanditiis molestiae mollitia aliquid iste excepturi sint.', 155.00, NULL, 'DIGI307', 'instock', 0, 165, 'digital_6.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(13, 'voluptatum nostrum eum sit', 'voluptatum-nostrum-eum-sit', 'Sit voluptatum aliquid corrupti recusandae. Eaque suscipit tempora et. Officia eos quaerat inventore dolorem ipsam ea eaque veritatis.', 'Et saepe sit error voluptatem repudiandae enim a. Dolores rerum est consequatur voluptatem corrupti ut explicabo. Voluptatum quia nihil reiciendis qui accusamus. Repudiandae vero hic ea vel aliquid. Blanditiis illum ut aut nostrum. Hic ab distinctio nemo blanditiis sed quis culpa. Velit ut ab facere quia voluptate molestiae nisi. Et eligendi optio ut cumque eaque. Debitis est sit et quis. Doloribus fuga maiores nulla a ex. Nesciunt modi a facilis rerum.', 438.00, 400.00, 'DIGI362', 'instock', 0, 194, 'digital_1.jpg', NULL, 5, '2024-02-09 05:17:07', '2024-02-20 14:50:48'),
(14, 'dignissimos ex accusantium omnis', 'dignissimos-ex-accusantium-omnis', 'Magnam qui quidem et soluta. Non fugit ut repellendus neque velit quam qui voluptates. Possimus omnis illum iure doloremque non.', 'Quo sit explicabo illum velit id. Quis quae dolore quod tenetur ut. Dignissimos similique enim consequatur nostrum error illum. Et enim exercitationem quos. Aspernatur provident enim rerum qui deleniti est explicabo. Fuga consequatur provident magnam facere quaerat odio. Quam in dolores itaque facilis atque facilis. Quisquam ullam porro eos ab. Sequi omnis quod voluptatibus ipsam ex vel quis. Impedit accusantium eaque expedita et.', 24.00, NULL, 'DIGI472', 'instock', 0, 128, 'digital_16.jpg', NULL, 3, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(15, 'omnis quibusdam sunt neque', 'omnis-quibusdam-sunt-neque', 'Explicabo tempore quis nisi libero. Repellat corrupti quo enim tempora at cum minus. Et autem facilis voluptatem officiis libero est qui. Enim quod ut ut esse.', 'Voluptatibus amet quaerat ab labore. Libero non exercitationem quia aspernatur itaque consequatur. Quam adipisci quidem non fuga et laudantium. Et recusandae nihil ea cumque. Id veniam quidem tempore odio nisi labore. Voluptatem numquam est accusantium et. Nulla non laudantium sed saepe qui. Qui est porro sit veniam dicta. Dicta doloremque voluptatem nihil asperiores quae optio. Nam pariatur earum iure.', 222.00, NULL, 'DIGI239', 'instock', 0, 181, 'digital_2.jpg', NULL, 3, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(16, 'animi ea distinctio cupiditate', 'animi-ea-distinctio-cupiditate', 'Amet quidem natus non voluptatem necessitatibus. Architecto odit eaque unde occaecati ratione ullam inventore id. Commodi perspiciatis aut deserunt cupiditate iusto vero necessitatibus.', 'Quo quod in voluptatem consequatur nam ab aliquam. Non libero eos non suscipit voluptatibus. In architecto debitis excepturi facere iusto. Voluptatem impedit ipsam aliquid magni velit esse voluptatibus. Ut ut mollitia id ipsa mollitia molestias. Non omnis magni repellat itaque rerum. Ipsa ab aut aliquid qui. Est saepe ipsa aut aut numquam aut. Iure asperiores voluptatem quo quas harum ut. Et dolores nihil reprehenderit facilis ipsum ut ullam.', 86.00, NULL, 'DIGI124', 'instock', 0, 154, 'digital_21.jpg', NULL, 2, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(17, 'quas est aliquid dignissimos', 'quas-est-aliquid-dignissimos', 'Ipsam qui ipsa enim magnam aspernatur earum. Autem in ut voluptatum incidunt occaecati optio aperiam velit. Hic est enim qui nemo. Odio molestiae quidem distinctio vitae qui recusandae consequatur.', 'Culpa nam pariatur molestias quas. Consectetur aut cumque aliquid. Recusandae nisi saepe voluptatem autem. A dolores voluptatibus saepe fuga dolorem voluptas. Harum velit ipsa rerum iusto et. Corporis dicta voluptate repellendus. Distinctio natus laboriosam repudiandae deserunt ut hic officiis. Tenetur quo rem porro repellat rem ut cumque. Provident est enim pariatur distinctio pariatur. Temporibus a cum consequatur ea eos.', 35.00, NULL, 'DIGI374', 'instock', 0, 106, 'digital_7.jpg', NULL, 3, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(18, 'consequatur iste nesciunt ipsa', 'consequatur-iste-nesciunt-ipsa', 'Id inventore et reiciendis. Perferendis ut mollitia facere. Repudiandae molestiae adipisci qui est fugit ratione. Nihil minima dolorem excepturi.', 'Nobis architecto qui error ad perspiciatis qui consequuntur. Magnam consequatur maiores magni voluptatem maxime. Quas autem quibusdam eum. Consequuntur qui quo sequi est. Quae impedit nostrum dolores velit vero harum accusantium. Architecto mollitia aspernatur id tempora ut quidem in. Harum ea consequatur praesentium exercitationem. Dolorem aut qui nobis iure facere quia. Dolores illo consectetur et sit eligendi ut. Ut id cumque dolorem et.', 1100.00, 800.00, 'DIGI255', 'instock', 0, 199, 'digital_12.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-17 12:23:41'),
(19, 'omnis est occaecati magni', 'omnis-est-occaecati-magni', 'Ut dolore repudiandae qui velit. Et consequatur sed dolor soluta explicabo odio aut. Ullam commodi quia veritatis suscipit et et sapiente.', 'Non ut magni autem reiciendis qui. Vitae est tempore dolores provident dolorem. Natus commodi aperiam facere est unde et tempora. Id nihil quia est iusto magnam aut. Excepturi quis quas quod incidunt praesentium. Et et ut qui dicta eveniet voluptatem harum. Delectus voluptates corporis qui est et voluptatem. Et praesentium illo omnis iusto. Aliquam impedit praesentium voluptatibus a voluptas est.', 222.00, NULL, 'DIGI329', 'instock', 0, 128, 'digital_10.jpg', NULL, 5, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(20, 'inventore et vel consequatur', 'inventore-et-vel-consequatur', 'Quisquam labore aut temporibus illum natus adipisci. Et sequi sint quae. Voluptatem mollitia est odio. Cum suscipit harum consequatur modi aut quisquam.', 'Nobis sunt provident quam reprehenderit magnam omnis qui. Laudantium quia non similique aliquid rerum necessitatibus est ut. Nulla commodi in ipsa facere ut. Vitae repellendus ut eos dolorem perferendis. Dolorem cupiditate repudiandae dolor praesentium. Veritatis sapiente sunt eum eum labore corporis quis. Distinctio placeat et aperiam rerum eligendi accusamus magni.', 468.00, 400.00, 'DIGI214', 'instock', 0, 112, 'digital_19.jpg', NULL, 4, '2024-02-09 05:17:07', '2024-02-20 14:51:04'),
(21, 'et harum pariatur nisi', 'et-harum-pariatur-nisi', 'Harum quas doloremque unde ratione rem et asperiores quia. Culpa magni sequi vel praesentium sit suscipit. Tempora architecto nemo sequi amet reprehenderit est adipisci.', 'Sit consequatur iusto velit similique praesentium dignissimos. Voluptas unde commodi nisi a nihil quia facere. Dolore quibusdam officiis voluptas. Dignissimos inventore quibusdam minus nobis quae. Rerum rerum et soluta voluptatem placeat quaerat. Dicta et sed sit et ut consequuntur dolorem. Est nobis quo non consequatur perferendis dolorem libero. Suscipit rerum libero enim eos repellat.', 433.00, NULL, 'DIGI321', 'instock', 0, 139, 'digital_5.jpg', NULL, 4, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(22, 'sed porro ab temporibus', 'sed-porro-ab-temporibus', 'Nulla necessitatibus et veniam dicta sunt delectus omnis. Minima voluptate consectetur et dolores excepturi illo atque quod. Laboriosam voluptas et et vitae qui laudantium dicta.', 'Dolores molestiae beatae aut repellat reprehenderit. Blanditiis architecto et ut minima. Dolores minus consequatur aliquid aliquid minima deserunt eum. Ut doloremque voluptatem magni omnis sed qui. Quod libero est et dolor laboriosam. Voluptatem ut nisi voluptates. Accusantium quidem qui id tempore vitae repudiandae. Incidunt rerum deserunt optio nulla consectetur et.', 176.00, NULL, 'DIGI243', 'instock', 0, 175, 'digital_3.jpg', NULL, 1, '2024-02-09 05:17:07', '2024-02-09 05:17:07'),
(23, 'Turcotte', 'turcotte', 'Aut veritatis officiis.', 'Reprehenderit reiciendis voluptatem.', 300.00, 0.00, 'Nobis beatae placeat hic reiciendis pariatur voluptates numquam.', 'instock', 0, 120, '1708005558.jpg', NULL, 4, '2024-02-14 14:39:23', '2024-02-15 11:59:18'),
(25, 'Platinum Watch', 'platinum-watch', '<p><strong>Dial Color</strong>: White, Case Shape: Round</p>\n<p><strong>Band Color</strong>: Gold, Band Material: Metal</p>\n<p><strong>Watch Display Type</strong>: Analog</p>', '<h4>Product Specifications:</h4>\n<p><strong>Watch Information:</strong></p>\n<p><strong>Band Color</strong>: Gold</p>\n<p><strong>Band Material</strong>: Metal</p>\n<p><strong>Case Material</strong>: Metal</p>\n<p><strong>Clasp</strong>: Sliding Clasp</p>\n<p><strong>Dial Color</strong>: White</p>\n<p><strong>Display Type</strong>: Analog</p>\n<p><strong>Case Shape</strong>: Round</p>\n<p><strong>Model Number</strong>: NL83r235252B</p>\n<p><strong>Part Number</strong>: 73837575353</p>\n<p><strong>Warranty Description</strong>: 12 months</p>', 450.00, 420.00, 'DIGI214124', 'instock', 0, 11, '1708324954.jpg', NULL, 2, '2024-02-19 04:42:34', '2024-02-19 04:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-03-15 06:40:14', 1, NULL, '2024-02-23 11:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('r30yptvLieIT0s7POIiMBHBtiK65g1NbXUGgQr9w', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 Edg/121.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMGt4U0V2MUpWRU1CRm5UNGptT2FnSlNzQzR0SjBYc0Z6REdwblpqWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjU6InV0eXBlIjtzOjM6IlVTUiI7czo0OiJjYXJ0IjthOjA6e31zOjg6ImNoZWNrb3V0IjthOjQ6e3M6ODoiZGlzY291bnQiO2k6MDtzOjg6InN1YnRvdGFsIjtzOjQ6IjAuMDAiO3M6MzoidGF4IjtzOjQ6IjAuMDAiO3M6NToidG90YWwiO3M6NDoiMC4wMCI7fX0=', 1708711111);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kurt', 'Lowe', '134134134134', 'your.email+fakedata14490@gmail.com', '133', '550', 'Cheyenne', '501 Arvilla View', 'Malaysia', '605', '2024-02-23 15:31:47', '2024-02-23 15:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'cod', 'pending', '2024-02-23 15:31:47', '2024-02-23 15:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin and USR for user or customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$6QWa/fCw6kkojTnmoSSzye6fPs4UUqFW8FHVJG/zcUAPQCYow.s.q', NULL, NULL, NULL, 'Rh9K901yIFOpFT5U15QPob6oa61QFKhTHnBaXIUh1fcDiRqrYLt27rMo9aYj', NULL, NULL, 'ADM', '2024-02-09 00:03:42', '2024-02-09 00:03:42'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$w0mbcp2vdCLHnmLDx.DlG.dGmtQpr2KRd/rmTbztL5wgP8E8tos1u', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2024-02-09 00:04:43', '2024-02-09 00:04:43'),
(3, 'user2', 'user2@gmail.com', NULL, '$2y$10$ZQs5Mh0/UOSfOkrfP7L1suKJ3nEEbP9hAjk9u2S9aOrR1h/buXNi6', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2024-02-09 03:27:13', '2024-02-09 03:27:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
