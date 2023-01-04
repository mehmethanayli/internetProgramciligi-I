-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 16:11:16
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veritabani2`
--

DELIMITER $$
--
-- Yordamlar
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `rapor_sp` ()  BEGIN
SELECT COUNT(gorev.id) INTO @gorevSayisi FROM gorev;
UPDATE rapor SET rapor.gorevSayisi=@gorevSayisi WHERE id=1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departman`
--

CREATE TABLE `departman` (
  `id` int(11) NOT NULL,
  `adi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `departman`
--

INSERT INTO `departman` (`id`, `adi`) VALUES
(1, 'İnsan Kaynakları'),
(2, 'Mali İşler'),
(3, 'Satın Alma'),
(4, 'Arge'),
(5, 'Arge'),
(6, 'Arge');

--
-- Tetikleyiciler `departman`
--
DELIMITER $$
CREATE TRIGGER `departmanRaporTrigger` AFTER INSERT ON `departman` FOR EACH ROW BEGIN
SELECT COUNT(departman.id) INTO @departmanSayisi FROM departman;
UPDATE rapor SET rapor.departmanSayisi=@departmanSayisi WHERE id=1;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorev`
--

CREATE TABLE `gorev` (
  `id` int(11) NOT NULL,
  `adi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gorev`
--

INSERT INTO `gorev` (`id`, `adi`) VALUES
(1, 'Müdür'),
(2, 'Müdür Yardımcısı'),
(3, 'Sekreter'),
(4, 'Aşçı'),
(5, 'Aşçı');

--
-- Tetikleyiciler `gorev`
--
DELIMITER $$
CREATE TRIGGER `gorevRaporTrigger` AFTER INSERT ON `gorev` FOR EACH ROW BEGIN
CALL rapor_sp();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `isim` varchar(100) NOT NULL,
  `soyisim` varchar(100) NOT NULL,
  `dogumYil` year(4) NOT NULL,
  `departmanID` int(11) NOT NULL,
  `gorevID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `isim`, `soyisim`, `dogumYil`, `departmanID`, `gorevID`, `createdAt`) VALUES
(1, 'Ahmet', 'Yılmaz', 1985, 1, 2, '2022-12-29 11:16:26'),
(2, 'Ayşenur', 'Yıldırım', 1990, 2, 2, '2022-12-29 11:16:26'),
(3, 'Arif', 'Yılmaz', 1993, 3, 1, '2022-12-29 11:17:03'),
(4, 'Ayşe', 'Yıldırım', 1995, 1, 3, '2022-12-29 11:17:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rapor`
--

CREATE TABLE `rapor` (
  `id` int(11) NOT NULL,
  `personelSayisi` int(11) NOT NULL,
  `gorevSayisi` int(11) NOT NULL,
  `departmanSayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `rapor`
--

INSERT INTO `rapor` (`id`, `personelSayisi`, `gorevSayisi`, `departmanSayisi`) VALUES
(1, 0, 5, 6);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `departman`
--
ALTER TABLE `departman`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gorev`
--
ALTER TABLE `gorev`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `departman`
--
ALTER TABLE `departman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `gorev`
--
ALTER TABLE `gorev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
