-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2023 at 04:39 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `created_at`, `updated_at`, `title`, `description`, `price`, `picture`, `user_id`, `city`, `status_id`) VALUES
(24, '2023-02-05 17:15:40', '2023-02-06 17:47:52', 'Toyota Celica VII (T230)2', '1Purple Edition 💜🔝Уникальная машина.\r\nСпек лист: для общего понимания пишу +/- и сколько это стоит.\r\n1. Мотор V6-3 литра (250 сил/350 крутящего) - 250 000+ пол года в сервисе. Езжу 2 года, лучше, быстрее, надёжнее родных. Было 6 Селик, знаю о чем говорю!\r\n2. Меха-5ст ,отлично подходит к мотору (30 000+установка).\r\n3. Колы Tein+XYZ Rally Spec (80-140 000)\r\n4. Салон 🔝очень хорошего качества. Алькантара/кожа (71 000) .Сиденья перед/зад, потолок, треугольники сзади, козырьки,стойки, элементы багажника.', '1100000', 'esmgU8VOJXHEY1DNh7hzi8GPo8AJeTmFVwDe4SUp.webp', 1, 'Краснодар1', 3),
(25, '2023-02-06 21:24:22', '2023-02-06 21:25:08', 'BMW 3 серии 320d VII (G2x)', 'Автомобиль в идеальном состоянии, как внешне так и технически. Дилерская машина, покупалась в модус Сочи. Крашенных элементов нет, Дтп нет, страховых расчетов нет, в мошеннических схемах не участвовала, залогов кредитов нет, юридически чистый автомобиль. Оригинальный пробег, 2 ключа, птс оригинал, собственник, владею автомобилем более 2 лет, покупал у знакомого на пробеге 7тысяч км. 123', '3250000', 'RmsC59v1LlPFRcDIcdrZaIbTBk3hO9GHpQ3UI8uK.webp', 2, 'Краснодар', 3),
(26, '2023-02-06 21:26:32', '2023-02-06 21:26:32', 'Volkswagen Golf II', 'Все вопросы по телефону, бита в переднюю часть, торг', '30000', '2Xkx1gEVrQNRldZhk6763TIciFbWqHhGuUZtfWeQ.webp', 2, 'Черняховск, Калининградская область', 3),
(27, '2023-02-06 21:28:31', '2023-02-06 21:28:31', 'Land Rover Range Rover IV', 'Авто в отличном состоянии, ухоженный , без вложений, полностью обслужен. ПТС оригинал два хозяина. Два ключа, Два комплекта оригинальных колёс R22 летние, R22 зимние, Панорамная крыша, пороги, память и вентиляция сидений, двойные стекла. Лобовое с подогревом(есть трещина). Пневма отлично поднимает и опускает.', '3950000', '51jmsVtAvxBx4sBGLbVYkuKyBA6ul8M3uID155qs.webp', 3, 'Славянск-на-Кубани', 3),
(28, '2023-02-06 21:31:43', '2023-02-06 21:31:43', 'Mercedes-Benz GLE Coupe 400 d II (C167)', 'Комплектация «GLE 400 d 4MATIC»:\r\nАнтиблокировочная система\r\nАнтипробуксовочная система\r\nСистема курсовой устойчивости\r\nСистема контроля слепых зон\r\nСистема помощи при экстренном торможении\r\nСистема предотвращения столкновения\r\nДатчик давления в шинах\r\nПодушки безопасности водителя\r\nПодушки безопасности пассажира\r\nБоковые передние подушки безопасности\r\nОконные шторки безопасности', '10500000', 'QuDOnlt0poFgAwUDh7oSajRoi1kfAWAwiRyt6P6y.webp', 3, 'Сочи, Краснодарский край', 3);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_15_192122_create_ads_table', 2),
(6, '2023_01_15_194031_create_statuses_table', 3),
(7, '2023_01_20_203715_add_phone_num_to_users', 4),
(8, '2023_01_20_222810_change_phone_num_type', 5),
(9, '2023_02_05_195508_change_description_length_in_ads_table', 6);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_num` char(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_num`) VALUES
(1, 'Stas1', 'warziher@yandex.ru', NULL, '$2y$10$qxWjhMWSaeUSZkjSPJpT5eQExgp6p5DZLJgUc1pj5ewtVT/wbieRy', 'DbmekEKkwq9gcGDve51nkmM2MR4OckgvAnqXmZa9pEuEjSWGJdEtZed2p1wr', '2023-01-18 19:44:28', '2023-02-06 20:13:30', '79877178413'),
(2, 'Станислав Коптелин', 'stan.koptelin@yandex.ru', NULL, '$2y$10$QwgN77tB5IrkS00IyVBMJOB6kjslI.4KiMeCNY/iABbaQKxHD7GWy', NULL, '2023-01-20 19:36:59', '2023-01-20 19:36:59', '72222222222'),
(3, 'Станислав К', 'stan.koptelin2101@yandex.ru', NULL, '$2y$10$vZKK.OO4RODBadXnxJBPqexl0Rflkf942WWWIw5cv2AfGn3zBPySG', NULL, '2023-01-20 19:43:41', '2023-01-20 19:43:41', '73333333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ads_title_index` (`title`),
  ADD KEY `ads_description_index` (`description`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
