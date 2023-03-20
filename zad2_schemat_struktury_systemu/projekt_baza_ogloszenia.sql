-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Mar 2023, 18:42
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_baza_ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `katalog`
--

CREATE TABLE `katalog` (
  `IDkatalog` int(11) NOT NULL,
  `IDuzytkownik` int(11) NOT NULL,
  `IDrola` int(11) NOT NULL,
  `data_nadania` datetime NOT NULL DEFAULT current_timestamp(),
  `data_odebrania` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `katalog`
--

INSERT INTO `katalog` (`IDkatalog`, `IDuzytkownik`, `IDrola`, `data_nadania`, `data_odebrania`) VALUES
(95, 1, 1, '2023-03-20 18:36:31', '0000-00-00 00:00:00'),
(105, 211, 2, '2023-03-20 18:36:31', '0000-00-00 00:00:00'),
(106, 212, 2, '2023-03-20 18:36:31', '0000-00-00 00:00:00'),
(107, 213, 2, '2023-03-20 18:36:31', '0000-00-00 00:00:00'),
(108, 214, 2, '2023-03-20 18:36:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_ogloszen`
--

CREATE TABLE `kat_ogloszen` (
  `IDkategoria` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `data_wpisu` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kat_ogloszen`
--

INSERT INTO `kat_ogloszen` (`IDkategoria`, `nazwa`, `data_wpisu`) VALUES
(1, 'Motoryzacja', '2022-12-30 17:42:09'),
(2, 'Elektronika', '2022-12-18 12:45:11'),
(3, 'Ubrania', '2022-12-18 12:45:11'),
(4, 'Nieruchomości', '2022-12-18 12:45:41'),
(5, 'Meble', '2022-12-18 12:46:03'),
(6, 'Sport', '2022-12-18 12:46:10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `IDkomentarz` int(11) NOT NULL,
  `IDuzytkownik` int(11) NOT NULL,
  `IDogloszenie` int(11) NOT NULL,
  `komentarz` text COLLATE utf8_polish_ci NOT NULL,
  `ocena` int(11) NOT NULL,
  `data_wpisu` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`IDkomentarz`, `IDuzytkownik`, `IDogloszenie`, `komentarz`, `ocena`, `data_wpisu`) VALUES
(119, 213, 100, 'Fajny samochód.', 5, '2023-01-08 11:17:47'),
(120, 213, 101, 'Ładny telefon.', 5, '2023-01-08 11:18:08'),
(121, 212, 104, '', 4, '2023-01-08 11:18:40'),
(122, 212, 101, '', 4, '2023-01-08 11:18:51'),
(123, 211, 104, 'Bardzo fajny samochód.', 5, '2023-01-08 11:19:31'),
(124, 211, 103, '', 3, '2023-01-08 11:19:43'),
(125, 211, 104, '', 5, '2023-01-08 12:02:31'),
(126, 213, 103, '', 4, '2023-01-08 12:19:24'),
(127, 214, 100, 'Dobrze', 4, '2023-01-12 18:15:42');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `IDogloszenie` int(11) NOT NULL,
  `IDuzytkownik` int(11) NOT NULL,
  `IDkategoria` int(11) NOT NULL,
  `tytul` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `srednia_ocen` float NOT NULL,
  `data_utworzenia` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`IDogloszenie`, `IDuzytkownik`, `IDkategoria`, `tytul`, `opis`, `cena`, `srednia_ocen`, `data_utworzenia`) VALUES
(100, 211, 1, 'Sprzedam samochód', 'Mam do sprzedania samochód z 2021 roku.', 80000, 4.5, '2023-01-08 10:55:40'),
(101, 211, 2, 'Sprzedam telefon', 'Mam do sprzedania telefon Samsung Galaxy S22.', 4000, 4.5, '2023-01-08 10:56:25'),
(102, 212, 1, 'Sprzedam auto', 'Mam do sprzedania samochód w kolorze niebieskim.', 70000, 0, '2023-01-08 10:57:48'),
(103, 212, 2, 'Sprzedam smartfon', 'Mam do sprzedania telefon Xiaomi Mi 12T w kolorze czarnym.', 3000, 3.5, '2023-01-08 11:13:19'),
(104, 213, 1, 'Sprzedam Fiat Tipo', 'Sprzedam Fiata Tipo z 2021 roku.', 65000, 4.7, '2023-01-08 11:16:20'),
(108, 214, 1, 'Moje ogłoszenie 1', 'Sprzedam samochod', 50000, 0, '2023-01-12 18:12:04');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `IDrola` int(11) NOT NULL,
  `rola` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `czy_aktywna` tinyint(1) NOT NULL,
  `data_wpisu` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`IDrola`, `rola`, `czy_aktywna`, `data_wpisu`) VALUES
(1, 'admin', 1, '2022-11-17 11:47:26'),
(2, 'user', 1, '2022-12-13 19:00:12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `IDuzytkownik` int(11) NOT NULL,
  `IDkto_utworzyl` int(11) NOT NULL,
  `data_utworzenia` datetime NOT NULL DEFAULT current_timestamp(),
  `IDkto_zmodyfikowal` int(11) NOT NULL,
  `data_modyfikacji` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `login` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `numer_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`IDuzytkownik`, `IDkto_utworzyl`, `data_utworzenia`, `IDkto_zmodyfikowal`, `data_modyfikacji`, `login`, `haslo`, `email`, `imie`, `nazwisko`, `miasto`, `numer_tel`) VALUES
(1, 1, '2023-01-04 12:39:45', 1, '2023-01-04 17:34:21', 'admin', '$2y$10$dBNAxZDqjEJ.K7OBB0Ijqe9E9FW8/zeFMBqJL2dnrFInVp1pyVSoG', 'admin.admin@wp.pl', 'Admin', 'Administrator', 'Katowice', 112234455),
(211, 211, '2023-01-08 10:48:35', 211, '2023-01-08 10:48:35', 'maciej', '$2y$10$CPL55s6ga.rk7DgMySWmy.U3aliLmwsqQEVBvZPwcJRrmW1LGXCvO', 'maciej.maciej@wp.pl', 'Maciej', 'Gol', 'Sosnowiec', 223345566),
(212, 212, '2023-01-08 10:49:51', 212, '2023-01-08 10:49:51', 'michal', '$2y$10$9gF5YNE.iB6vM0g591UzVupF10KkYx1yvTwEQ.tfGHGSMqPzbjB/W', 'michal.michal@op.pl', 'Michał', 'Kowalski', 'Katowice', 887765544),
(213, 213, '2023-01-08 10:50:47', 1, '2023-01-08 12:36:50', 'jan', '$2y$10$q4uwzDV31aXsZ/fbQSbVYeyyzjpdy43f0DmYhI.nTkV0dVBa1urX.', 'jan.jan@wp.pl', 'Jan', 'Nowak', 'Wrocław', 665579933),
(214, 214, '2023-01-12 18:10:53', 1, '2023-01-12 19:21:01', 'michal1', '$2y$10$EfSUsGzqLQg7As4l4Vn8oeS8E8bx9.lFbqOFACe3ohSy5nwHP3qI6', 'michal.michal@wp.pl', 'Michał', 'Kowalski', 'Sosnowiec', 223345566);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `IDzdjecie` int(11) NOT NULL,
  `IDogloszenie` int(11) NOT NULL,
  `zdjecie` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`IDzdjecie`, `IDogloszenie`, `zdjecie`) VALUES
(85, 100, '3.jpg'),
(86, 101, 'samsung.jpg'),
(87, 102, '4.jpg'),
(88, 103, 'xiaomi.jpg'),
(89, 104, 'Fiat_tipo.jpg'),
(93, 108, '1.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`IDkatalog`),
  ADD KEY `IDuzytkownik` (`IDuzytkownik`),
  ADD KEY `IDrola` (`IDrola`);

--
-- Indeksy dla tabeli `kat_ogloszen`
--
ALTER TABLE `kat_ogloszen`
  ADD PRIMARY KEY (`IDkategoria`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`IDkomentarz`),
  ADD KEY `IDuzytkownik` (`IDuzytkownik`),
  ADD KEY `IDogloszenie` (`IDogloszenie`);

--
-- Indeksy dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`IDogloszenie`),
  ADD KEY `ogloszenia_ibfk_1` (`IDkategoria`),
  ADD KEY `ogloszenia_ibfk_2` (`IDuzytkownik`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`IDrola`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`IDuzytkownik`),
  ADD KEY `uzytkownicy_ibfk_1` (`IDkto_utworzyl`),
  ADD KEY `IDkto_zmodyfikowal` (`IDkto_zmodyfikowal`);

--
-- Indeksy dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`IDzdjecie`),
  ADD KEY `IDogloszenie` (`IDogloszenie`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `katalog`
--
ALTER TABLE `katalog`
  MODIFY `IDkatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT dla tabeli `kat_ogloszen`
--
ALTER TABLE `kat_ogloszen`
  MODIFY `IDkategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `IDkomentarz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `IDogloszenie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `IDrola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `IDuzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `IDzdjecie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`IDuzytkownik`) REFERENCES `uzytkownicy` (`IDuzytkownik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `katalog_ibfk_2` FOREIGN KEY (`IDrola`) REFERENCES `role` (`IDrola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_ibfk_1` FOREIGN KEY (`IDuzytkownik`) REFERENCES `uzytkownicy` (`IDuzytkownik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentarze_ibfk_2` FOREIGN KEY (`IDogloszenie`) REFERENCES `ogloszenia` (`IDogloszenie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD CONSTRAINT `ogloszenia_ibfk_1` FOREIGN KEY (`IDkategoria`) REFERENCES `kat_ogloszen` (`IDkategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ogloszenia_ibfk_2` FOREIGN KEY (`IDuzytkownik`) REFERENCES `uzytkownicy` (`IDuzytkownik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD CONSTRAINT `zdjecia_ibfk_1` FOREIGN KEY (`IDogloszenie`) REFERENCES `ogloszenia` (`IDogloszenie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
