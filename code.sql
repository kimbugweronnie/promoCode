CREATE TABLE `promoCode` (
  `promoCode` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` bigint(20) NOT NULL,
  `Radius` bigint(20) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deactivated` tinyint(1) NOT NULL,
  `Expired` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promoCode`
--

INSERT INTO `promoCode` (`promoCode`, `Amount`, `Radius`, `location`, `Event`, `latitude`, `longtitude`, `Status`, `Deactivated`, `Expired`, `created_at`, `updated_at`) VALUES
('17A96S1', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:54:51', '2020-11-15 19:54:51'),
('2E2B32D', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 20:29:12', '2020-11-15 20:29:12'),
('2O4F3A5', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:45:33', '2020-11-15 19:45:33'),
('35AOF9S', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:32:04', '2020-11-15 19:32:04'),
('4DA53AA', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:53:28', '2020-11-15 19:53:28'),
('52EADE6', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:31:42', '2020-11-15 19:31:42'),
('63555B7', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:53:58', '2020-11-15 19:53:58'),
('6996A86', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:40:45', '2020-11-15 19:40:45'),
('6DS7SSA', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 20:25:18', '2020-11-15 20:25:18'),
('7ABFFA8', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 20:29:49', '2020-11-15 20:29:49'),
('86A943B', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:46:39', '2020-11-15 19:46:39'),
('9185BBE', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:32:05', '2020-11-15 19:32:05'),
('A278FE6', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:48:09', '2020-11-15 19:48:09'),
('A59FFBO', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:53:35', '2020-11-15 19:53:35'),
('AB63S1B', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:40:44', '2020-11-15 19:40:44'),
('AO3E5A1', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:32:06', '2020-11-15 19:32:06'),
('BA7A315', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:32:07', '2020-11-15 19:32:07'),
('BE4A4A2', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:48:37', '2020-11-15 19:48:37'),
('BO123SE', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:48:00', '2020-11-15 19:48:00'),
('DDAADA5', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:53:45', '2020-11-15 19:53:45'),
('E779BFD', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:47:01', '2020-11-15 19:47:01'),
('EAAD558', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:48:22', '2020-11-15 19:48:22'),
('EDOO43A', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:46:50', '2020-11-15 19:46:50'),
('ES24FAA', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:40:43', '2020-11-15 19:40:43'),
('ESF2S9A', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:54:43', '2020-11-15 19:54:43'),
('O26677S', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:46:32', '2020-11-15 19:46:32'),
('SDOA3AF', 1000, 4, 'Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda', 'Rolex Festival', 0.3359265, 32.5874571, 'Active', 0, 0, '2020-11-15 19:54:34', '2020-11-15 19:54:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promoCode`
--
ALTER TABLE `promoCode`
  ADD UNIQUE KEY `promocode_promocode_unique` (`promoCode`);