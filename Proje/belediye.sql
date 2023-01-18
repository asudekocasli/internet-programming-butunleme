-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 15:17:05
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `belediye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisanlar`
--

CREATE TABLE `calisanlar` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(30) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `calisanlar`
--

INSERT INTO `calisanlar` (`id`, `adsoyad`, `telefon`, `email`) VALUES
(1, 'Ahmet Genç', '05432385231', 'ahmet123@email.com'),
(2, 'Sıla Akdeniz', '05325123287', 'sılaakdeniz@emial.com'),
(3, 'Hilal Seven', '05532711124', 'hllseven@email.com'),
(4, 'Serdar Aksu', '05387461263', 'serdaraksu@email.com'),
(5, 'Rüya Çelebi', '05459870008', 'rüyacelebi@email.com'),
(6, 'Emre Dinçer', '05550125671', 'emredincer@email.com'),
(7, 'Deniz Yazıcı', '05307834254', 'denizyazici@email.com'),
(8, 'Mert Can', '05359822167', 'mertcannn@email.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `etkinlikid` int(30) NOT NULL,
  `etkinlikad` varchar(30) NOT NULL,
  `etkinlikyer` varchar(30) NOT NULL,
  `etkinlikzaman` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`etkinlikid`, `etkinlikad`, `etkinlikyer`, `etkinlikzaman`) VALUES
(1, 'Fidan Dikme', 'Balıkesir/Bandırma', 2023),
(2, 'Sörf', 'Balıkesir/Ayvalık', 2023),
(3, 'Kitap Dağıtma', 'Balıkesir/Merkez', 2023),
(4, 'Voleybol', 'Balıkesir/Bandırma', 2023);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(30) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `konu` varchar(35) NOT NULL,
  `mesaj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `email`, `konu`, `mesaj`) VALUES
(1, 'Ali Kılıç', '05554231932', 'alikilic@email.com', 'İnternet Altyapısı', 'Ev internetimi kullanırken sorun yaşıyorum.'),
(3, 'Beyza Kaplan', '05302310022', 'beyzakpln@email.com', 'Üst geçit', 'Evimin önündeki caddeden karşıya geçemiyorum.'),
(4, 'İlayda Kahraman', '05512190021', 'ilaydaaa@email.com', 'Yol', 'Okula gidebilmek için yol yapılmasını istiyorum.'),
(5, 'İlayda Kahraman', '05512190021', 'ilaydaaa@email.com', 'Yol', 'Okula gidebilmek için yol yapılmasını istiyorum.'),
(6, 'İlayda Kahraman', '05512190021', 'ilaydaaa@email.com', 'Yol', 'Okula gidebilmek için yol yapılmasını istiyorum.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calisanlar`
--
ALTER TABLE `calisanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`etkinlikid`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisanlar`
--
ALTER TABLE `calisanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `etkinlikid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
