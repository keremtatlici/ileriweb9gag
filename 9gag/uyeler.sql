-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2018, 16:20:42
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyeler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_content` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `comment_owner` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `comment_post_title` varchar(255) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `comment_owner`, `comment_post_title`) VALUES
(1, 'dasdas', 'kerem ', ''),
(2, 'hadi dalalÄ±m', 'kerem ', ' ragnarlothbroks'),
(3, 'sdasdasd', 'kerem ', ' black and white ragnar'),
(4, 'NE MUTLU TÃœRKÃœM DÄ°YENE', 'kerem ', ' TÃ¼rk Askeri'),
(5, 'kartall\r\n', 'kerem ', ' eagleeeee'),
(6, 'shield', 'kerem ', ' ragnarlothbroks'),
(7, 'siyah beyaz', 'kerem ', ' black and white ragnar'),
(8, 'gÃ¼zel resim', 'kerem ', ' black and white ragnar'),
(9, ':D', 'kerem ', ' black and white ragnar'),
(10, 'yazÄ±k balÄ±ÄŸa', 'kerem ', ' eagleeeee'),
(11, 'eagle', 'kerem ', ' eagleeeee'),
(12, 'fish', 'kerem ', ' under water'),
(13, 'deneme', 'kerem ', ' eagleeeee'),
(14, 'ekle', 'kerem ', ' eagleeeee'),
(15, 'kaÃ§ com', 'kerem ', ' ragnarlothbroks'),
(16, 'kaÃ§ tane yorum\r\n', 'kerem ', ' eagleeeee'),
(17, 'kaÃ§ yorum var', 'kerem ', ' ragnarlothbroks'),
(18, '', 'kerem ', ' eagleeeee'),
(19, '17 com', 'kerem ', ' eagleeeee'),
(20, '2 com', 'kerem ', ' eagleeeee'),
(21, 'deneme', 'kerem ', ' eagleeeee'),
(22, '', 'kerem ', ' eagleeeee'),
(23, '', 'kerem ', ' eagleeeee'),
(24, 'selam', 'kerem ', ' dsasasadasd'),
(25, 'selam', 'kerem ', ' dsasasadasd'),
(26, 'kaÃ§ com', 'kerem ', ' ewqeqweq'),
(27, '13 comments', 'kerem ', ' eagleeeee'),
(28, '5 comments', 'kerem ', ' ragnarlothbroks'),
(29, '', 'kerem ', ' ragnarlothbroks'),
(30, 'yoruma yorum yok mu sitede :D', 'kerem ', ' sadas'),
(31, 'bir tane eksik sayÄ±yor sanki', 'kerem ', ' sadas'),
(32, 'ÅŸuan 3 yazmasÄ± gerek', 'kerem ', ' sadas'),
(33, 'ÅŸimdi 4 yazmasÄ± lazÄ±m', 'kerem ', ' sadas'),
(34, 'sorun Ã§Ã¶zÃ¼ldÃ¼ ÅŸimdi 5 yazarsa kesin', 'kerem ', ' sadas'),
(35, 'nature', 'kerem ', ' nature'),
(36, '.', 'kerem ', ' black and white ragnar'),
(37, '', 'kerem ', ' eagleeeee'),
(38, '', 'kerem ', ' ragnarlothbroks'),
(39, '', 'kerem ', ' black and white ragnar'),
(40, '', 'kerem ', ' black and white ragnar'),
(41, 'yorum', 'krm ', ' eagleeeee'),
(42, '.', 'krm ', ' TÃ¼rk Askeri'),
(43, 'Ã§', 'krm ', ' under water'),
(44, '.', 'krm ', ' carr'),
(45, '.', 'krm ', ' ewqeqweq'),
(46, 'mis', 'krm ', ' wallpapers'),
(47, '1', 'krm ', ' a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rating_info`
--

CREATE TABLE `rating_info` (
  `post_id` int(11) NOT NULL,
  `uye_id` int(11) NOT NULL,
  `rating_action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_data`
--

CREATE TABLE `uye_data` (
  `uye_id` int(11) NOT NULL,
  `uye_nickname` varchar(20) COLLATE utf32_turkish_ci NOT NULL,
  `uye_email` varchar(20) COLLATE utf32_turkish_ci NOT NULL,
  `uye_sifre` varchar(12) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `uye_data`
--

INSERT INTO `uye_data` (`uye_id`, `uye_nickname`, `uye_email`, `uye_sifre`) VALUES
(2, 'kerem', 'krmttlc@gmail.com', 'q1w2e3r4'),
(15, 'elif', 'elif_tatlici@gmail.c', '123'),
(16, 'krm', 'ttlc@gmail.com', '123'),
(17, 'ahmet', 'ahmet@hotmail.com', '123'),
(18, 'ghost of sparta', 'lagg.tvv@gmail.com', 'fakoberibak'),
(19, 'deneme', 'deneme@hotmail.com', 'deneme'),
(20, 'deneme', 'deneme@hotmail.com', 'uye_sifre'),
(21, 'ShakaBrah', 'ShakaBrah@hotmail.co', '1234'),
(22, 'bandilaz', 'cagatay_icoz@hotmail', '1925513a'),
(23, 'burak', 'burak@hotmail.com', 'burak123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_post`
--

CREATE TABLE `uye_post` (
  `post_id` int(111) NOT NULL,
  `post_owner_name` varchar(111) COLLATE utf32_turkish_ci NOT NULL,
  `post_name` varchar(111) COLLATE utf32_turkish_ci NOT NULL,
  `post_title` varchar(111) COLLATE utf32_turkish_ci NOT NULL,
  `post_like` int(255) NOT NULL,
  `post_comment` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `uye_post`
--

INSERT INTO `uye_post` (`post_id`, `post_owner_name`, `post_name`, `post_title`, `post_like`, `post_comment`) VALUES
(1, 'kerem', 'eagle-3714x2209-fish-hunt-sea-underwater-4k-7555.jpg', ' eagleeeee ', 7, 15),
(3, 'kerem', '589636.jpg', ' ragnarlothbroks ', 1, 7),
(4, 'kerem', '598955.jpg', ' black and white ragnar ', 2, 7),
(5, 'krm', 'Turk-askeri-4.jpg', ' TÃ¼rk Askeri ', 1, 2),
(6, 'krm', 'maxresdefault.jpg', ' under water ', 11, 2),
(7, 'kerem', '903476-best-ragnar-lodbrok-wallpapers-1920x1080-notebook.jpg', ' sadas ', 17, 5),
(8, 'burak', 'hd-nature-wallpaper-for-pc.jpg', ' nature ', 1, 1),
(12, 'burak', 'racing-car-bedroom-wallpaper (1).jpg', ' carr ', 0, 1),
(13, 'burak', '903489-large-ragnar-lodbrok-wallpapers-1920x1080.jpg', ' dsasasadasd ', 1, 1),
(18, 'burak', 'nature-wallpapers-free-download-1.jpg', ' wallpapers ', 1, 1),
(25, 'burak', 'Turk-askeri-2.jpg', ' a ', 1, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Tablo için indeksler `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `post_id` (`post_id`,`uye_id`);

--
-- Tablo için indeksler `uye_data`
--
ALTER TABLE `uye_data`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `uye_post`
--
ALTER TABLE `uye_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `uye_data`
--
ALTER TABLE `uye_data`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `uye_post`
--
ALTER TABLE `uye_post`
  MODIFY `post_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
