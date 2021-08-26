-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 25 2021 г., 13:02
-- Версия сервера: 10.4.20-MariaDB
-- Версия PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `markmedia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
                         `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `c_id`, `images`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
                                                                                                                            (11, 'Hanna Bennison: Everton break transfer record to sign Sweden international from Rosengard', 'Hanna Bennison has joined Everton on a four-year contract for a \"substantial six-figure sum\"; she is the third member of the Sweden team that won silver at the Olympic Games to join the club this summer, after Nathalie Bjorn and Anna Anvegard', '3', 'images/XSheE7rmq8mbv2xEnqwcpsYNFs5VSRPn9IA1neXy.jpg', NULL, NULL, '2021-08-24 12:01:50', '2021-08-24 12:01:50'),
                                                                                                                            (12, 'Chelsea transfer news: Davide Zappacosta returns to Atalanta, while Tiemoue Bakayoko nears AC Milan move', 'Davide Zappacosta was keen to return to Italy and has now secured permanent move to Atalanta; wing-back previously played for the Serie A side between 2011 and 2015; AC Milan identified Tiemoue Bakayoko as a transfer target in June; midfielder spent a season on loan at Milan in 2018-19', '3', 'images/1PmP7HIegBcOppySHfCCTFA0NwCw9WBZgAOojt5d.jpg', NULL, NULL, '2021-08-24 12:04:21', '2021-08-24 12:04:21'),
                                                                                                                            (13, 'Pape Matar Sarr: Tottenham agree £14.6m transfer deal with Metz as midfielder loaned back for season', 'Pape Matar Sarr to join Tottenham for €17m (£14.6m); 18-year-old will remain at Metz for rest of 2021-22 season; Sarr expected to attend Tottenham\'s game against Watford this weekend', '3', 'images/p150Ln3lOsYrqriirGXFYoOnWVjZQ80YYR4MAHzi.jpg', NULL, NULL, '2021-08-24 12:05:00', '2021-08-24 12:05:00'),
(14, 'Tottenham transfer news: Houssem Aouar a target and informal talks held with Lyon midfielder\'s representatives', 'Houssem Aouar is under contract with Lyon until the summer of 2023 but has been linked with a move to some of Europe\'s top clubs; Tottenham also keen to sign PSV\'s Noni Madueke, Wolves\' Adama Traore and Chelsea\'s Kurt Zouma and are close to completing a deal for Pape Matar Sarr from Metz', '3', 'images/ZGkskYjrEsu1EfWGQvSg2rsBhdgfrXvRKTU8OxsX.jpg', NULL, NULL, '2021-08-24 12:06:11', '2021-08-24 12:06:11'),
(15, 'Wales squad: Gareth Bale \'has got the bug back\' as Rob Page names 27 players for international break', 'George Thomas, Brennan Johnson and James Lawrence make Rob Page’s 27-man squad for Wales’ matches against Finland, Belarus and Estonia; watch Finland vs Wales live on Sky Sports Main Event from 4.55pm on Wednesday September 1, kick-off 5pm', '3', 'images/cTugxxpneRbcMkTopNuKeO5mVdPqCp5IZHpJEvih.jpg', NULL, NULL, '2021-08-24 12:06:56', '2021-08-24 12:06:56'),
(16, 'WhatsApp for Android Testing New Colour Scheme That Works With Both Dark, Light Themes', 'WhatsApp for Android is getting updated with a new colour scheme that is brighter over the existing one. The change is initially provided to beta testers for testing purposes. However, it would be available publicly if the testing goes fine (as per the required results). The new colour scheme is applicable to both light and dark themes of WhatsApp and can be noticed from any of the major interface elements, including the background and the send button. The new WhatsApp beta also brings back the creation date for groups.\r\n\r\nThe changes are initially available through WhatsApp for Android beta version 2.21.18.1, as initially reported by WhatsApp beta tracker WABetaInfo.', '1', 'images/GMngrcGKdSPmLjBjyNI2TNcttXRNA9XllGAPkjTV.webp', NULL, NULL, '2021-08-24 12:08:39', '2021-08-24 12:08:39'),
(17, 'Instagram Reportedly Working on Like Button for Stories', 'These likes will likely show up in a list format on Instagram\r\nThere is no clarity if the likes will be wiped away with the Story\r\nInstagram Stories may have a heart button on the bottom right corner\r\nInstagram is reportedly working on introducing the ability to like Instagram Stories. Up until now, there has been no such feature and users could only react to Stories, which shows up in their direct messages. The ‘Like\' button is expected to appear on the main Stories page and a user should be able to see the number of likes and the users who post them on a separate interface. It is reported that one user may be able to post multiple likes on one Instagram Story.\r\n\r\nNoted developer Alessandro Paluzzi tweeted that Instagram is working on the ability to like a Story. This feature is still under development, according to WhatsApp features tracker WABetaInfo, and cannot be viewed even in the latest public beta. There is no clarity on when this feature will be publicly available but the developers are said to be working on it.', '2', 'images/ijA0LnwAwCaFSPdl9jDupKdh70xoNuOY2FsG31kD.webp', NULL, NULL, '2021-08-24 12:09:49', '2021-08-24 12:09:49');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'MARKETING', NULL, NULL),
(2, 'TECHNOLOGY', NULL, NULL),
(3, 'NEWS', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message_content`, `created_at`, `updated_at`) VALUES
(1, 'imomimom', 'admin123@gmail.com', '946444287', 'THIS WEBSITE IS THE BEST ONE\r\n\'', NULL, NULL),
(2, 'imomimom', 'imommizahanov@gmail.com', '946444287', 'thank you too', NULL, NULL),
(3, 'imomxoja', 'admin123@gmail.com', '946444287', 'imomxoja   q d wgyxs', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
                              `id` int(10) UNSIGNED NOT NULL,
                              `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
                                                          (1, '2014_10_12_000000_create_users_table', 1),
                                                          (2, '2014_10_12_100000_create_password_resets_table', 1),
                                                          (3, '2019_08_19_000000_create_failed_jobs_table', 1),
                                                          (4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
                                                          (5, '2021_08_19_122914_create_blogs_table', 2),
                                                          (6, '2021_08_21_001618_create_category_table', 3),
                                                          (7, '2021_08_24_020013_crate_messages_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
                                   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email_verified_at` timestamp NULL DEFAULT NULL,
                         `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
    (1, 'Imom', 'imommizahanov@gmail.com', NULL, '$2y$10$xceD0GTzAp6OhOoDlc7.3us80umqBqJzQ9xDEiDK/k1J8D4xL1O3q', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
    ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
