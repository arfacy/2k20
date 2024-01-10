-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Oca 2024, 14:03:41
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `2k20`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `foto`
--

CREATE TABLE `foto` (
  `foto_id` int(11) NOT NULL,
  `foto_uyeid` int(11) NOT NULL,
  `foto_yol` text NOT NULL,
  `foto_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `uye_id` int(11) NOT NULL,
  `uye_ad` varchar(100) NOT NULL,
  `uye_soyad` varchar(100) NOT NULL,
  `uye_ono` varchar(50) NOT NULL,
  `uye_okod` text NOT NULL,
  `uye_email` text NOT NULL,
  `uye_sifre` varchar(50) NOT NULL,
  `uye_onay` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`uye_id`, `uye_ad`, `uye_soyad`, `uye_ono`, `uye_okod`, `uye_email`, `uye_sifre`, `uye_onay`) VALUES
(1, 'Arif', 'Acay', '06', 'arfff', 'arifacay06@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazi`
--

CREATE TABLE `yazi` (
  `yazi_id` int(11) NOT NULL,
  `yazi_uyeid` int(11) NOT NULL,
  `yazi_yazanad` text NOT NULL,
  `yazi_yazansoyad` text NOT NULL,
  `yazi_text` text NOT NULL,
  `yazi_vurgu` enum('1','0') NOT NULL DEFAULT '0',
  `yazi_vurgurenk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `yazi`
--
ALTER TABLE `yazi`
  ADD PRIMARY KEY (`yazi_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `foto`
--
ALTER TABLE `foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- Tablo için AUTO_INCREMENT değeri `yazi`
--
ALTER TABLE `yazi`
  MODIFY `yazi_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
