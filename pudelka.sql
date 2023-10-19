-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Paź 2023, 12:27
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pudelka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `galeria`
--

CREATE TABLE `galeria` (
  `text` text NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `border_color` varchar(255) NOT NULL,
  `border_radius` int(255) NOT NULL,
  `border_width` int(255) NOT NULL,
  `font_size` int(255) NOT NULL,
  `border_style` text NOT NULL,
  `text_align` text NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `text_shadow_width` int(255) NOT NULL,
  `text_shadow_height` int(255) NOT NULL,
  `textblur` int(255) NOT NULL,
  `text_shadow_color` varchar(255) NOT NULL,
  `border_shadow_width` int(255) NOT NULL,
  `border_shadow_height` int(255) NOT NULL,
  `borderblur` int(255) NOT NULL,
  `border_shadow_color` varchar(255) NOT NULL,
  `font_family` text NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `galeria`
--

INSERT INTO `galeria` (`text`, `bg_color`, `border_color`, `border_radius`, `border_width`, `font_size`, `border_style`, `text_align`, `text_color`, `text_shadow_width`, `text_shadow_height`, `textblur`, `text_shadow_color`, `border_shadow_width`, `border_shadow_height`, `borderblur`, `border_shadow_color`, `font_family`, `id`) VALUES
('dasdad', '#c3cca8', '#3c7e20', 71, 28, 42, 'dashed', 'right', '#596d82', 12, 12, 18, '#469c40', 22, 25, 39, '#111b64', 'Arial, Helvetica, sans-serif', 1),
('', '#4d909d', '#5e1dd7', 50, 50, 42, 'groove', 'left', '#b23434', 17, 18, 10, '#000000', 37, 22, 19, '#ff1f1f', 'Times New Roman', 2),
('all', '#cdc6c6', '#251b37', 50, 55, 42, 'none', 'left', '#c7ffc8', 11, 12, 18, '#37274e', 39, 16, 42, '#e3ca87', 'Arial, Helvetica, sans-serif', 3),
('adad', '#ff6666', '#251b37', 78, 18, 58, 'groove', 'center', '#000000', 17, 17, 17, '#745353', 42, 39, 40, '#d24b4b', 'Times New Roman', 4),
('', '#ffcaca', '#251b37', 10, 10, 12, 'none', 'left', '#000000', 10, 10, 10, '#000000', 10, 10, 10, '#000000', '', 5),
('daksda', '#b91d1d', '#6a31d3', 77, 36, 48, 'solid', 'center', '#4b80b9', 17, 18, 16, '#000000', 41, 39, 27, '#9b2c2c', 'Times New Roman', 6),
('-czesc', '#ffcaca', '#251b37', 50, 50, 42, 'none', 'left', '#000000', 10, 10, 10, '#000000', 10, 10, 10, '#000000', '', 7),
('-nasdinasd', '#cfb4b4', '#251b37', 50, 50, 42, 'groove', 'left', '#000000', 10, 10, 10, '#000000', 10, 10, 10, '#000000', '', 8),
('-', '#df5d5d', '#251b37', 50, 50, 42, 'none', 'left', '#000000', 10, 10, 10, '#000000', 22, 34, 10, '#000000', '', 9);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
