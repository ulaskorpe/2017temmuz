-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Haz 2017, 10:08:39
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `orange_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departman`
--

CREATE TABLE `departman` (
  `id` int(11) NOT NULL,
  `departman_adi` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kurulus_tarihi` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `departman`
--

INSERT INTO `departman` (`id`, `departman_adi`, `kurulus_tarihi`, `created_at`, `updated_at`) VALUES
(1, 'proje geliştirme', 2008, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'muhasebe', 2005, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'hizmet', 2000, '2017-06-22 08:35:00', '2017-06-22 08:35:17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dosyalar`
--

CREATE TABLE `dosyalar` (
  `id` int(11) NOT NULL,
  `aciklama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personel_id` int(11) NOT NULL,
  `tarih` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `izinler`
--

CREATE TABLE `izinler` (
  `id` int(10) UNSIGNED NOT NULL,
  `personel_id` int(11) NOT NULL,
  `baslangic` int(11) NOT NULL,
  `bitis` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_06_20_122212_create_personels_table', 1),
(2, '2017_06_22_134315_izinler', 2),
(3, '2017_06_23_075137_dosyalar', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi_soyadi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorevi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giris_tarihi` int(11) NOT NULL,
  `departman_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `adi_soyadi`, `gorevi`, `giris_tarihi`, `departman_id`, `created_at`, `updated_at`) VALUES
(1, 'ulaş körpe', 'programcı', 2017, 1, '2017-06-11 21:00:00', '2017-06-22 09:30:59'),
(2, 'Göktuğ karakuş', 'muhasebe', 2010, 2, NULL, '2017-06-22 09:31:11'),
(6, 'duygu öner', 'grafiker', 2016, 1, '2017-06-21 10:11:43', '2017-06-22 09:37:41'),
(5, 'samet mehmet adıgüzel', 'çaycı-bulaşıkçı', 2012, 3, '2017-06-21 09:25:42', '2017-06-22 09:31:58'),
(7, 'mehmet kuşçu', 'programcı', 2017, 1, '2017-06-22 08:09:14', '2017-06-22 09:32:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'orangeTech5', 'info@orangetech.com5', '$2y$10$VD265CW9/2uPKKClX9hhSuLtyW8IexbyiqnADmFK8.3Hfx3eOUmd2', '1yXcH2RmkWAUWht1ZSW3vq5xepK6dMOH41x98SCUe8J0roBlGzHheA5yVy1D', '2017-06-22 05:36:09', '2017-06-22 11:53:47'),
(3, 'ulas korpe', 'ulaskorpe@gmail.com', '$2y$10$9h5ZmyKm9jvHkAZiUxgmcu774.gS8WTMnI66ZYQiPA9Q7ELa7M3YC', 'p4lL3Y1U9Xq2SIConWFgMAseUeApOWHsVWObi99k9MILmA63VJl1IVfkUmUs', '2017-06-22 06:44:03', '2017-06-23 06:12:02');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `departman`
--
ALTER TABLE `departman`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dosyalar`
--
ALTER TABLE `dosyalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `izinler`
--
ALTER TABLE `izinler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `departman`
--
ALTER TABLE `departman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `dosyalar`
--
ALTER TABLE `dosyalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `izinler`
--
ALTER TABLE `izinler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
