DataBase-Project--MyCovers

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 05, 2017 at 01:05 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MyCovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `Artists`
--

CREATE TABLE `Artists` (
  `artist_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Artists`
--

INSERT INTO `Artists` (`artist_id`, `name`) VALUES
(1, 'Oscar Isaac'),
(2, 'Anjan Dutta'),
(3, 'Manna Dey'),
(4, 'Kishore Kumar'),
(5, 'Mohammed Rafi'),
(6, 'Arijit Singh'),
(7, 'The Beatles'),
(8, 'Guns N\' Roses'),
(9, 'Ornob');

-- --------------------------------------------------------

--
-- Table structure for table `Songs`
--

CREATE TABLE `Songs` (
  `song_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `genre` varchar(45) NOT NULL,
  `language` varchar(45) DEFAULT NULL,
  `covered` varchar(4) DEFAULT NULL,
  `lyrics` varchar(200) DEFAULT NULL,
  `chords` varchar(200) DEFAULT NULL,
  `performance_key` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `songs`
--

INSERT INTO `Songs` (`song_id`, `title`, `artist_id`, `genre`, `language`, `covered`, `lyrics`, `chords`, `performance_key`) VALUES
(1, 'Hang Me, Oh Hang Me', 1, 'Folk ', 'English', 'Yes', 'https://www.musixmatch.com/lyrics/Oscar-Isaac/Hang-Me-Oh-Hang-Me', 'https://tabs.ultimate-guitar.com/o/oscar_isaac/hang_me_oh_hang_me_crd.htm', 'E'),
(2, 'The Death Of Queen Jane', 1, 'Folk', 'English', 'Yes', 'https://www.musixmatch.com/lyrics/Oscar-Isaac/The-Death-of-Queen-Jane', 'https://tabs.ultimate-guitar.com/o/oscar_isaac/the_death_of_queen_jane_ver3_crd.htm', 'A'),
(3, '500 Miles', 1, 'Folk', 'English', 'Yes', 'http://www.azlyrics.com/lyrics/justintimberlake/fivehundredmiles.html', 'https://tabs.ultimate-guitar.com/j/justin_timberlake/500_miles_crd.htm', 'G'),
(4, 'Hey Jude', 7, 'Rock', 'English', 'Yes', 'https://www.musixmatch.com/lyrics/The-Beatles/Hey-Jude-2', 'https://tabs.ultimate-guitar.com/t/the_beatles/hey_jude_crd.htm', 'E'),
(5, 'Blackbird', 7, 'Rock', 'English', 'Yes', 'http://www.azlyrics.com/lyrics/beatles/blackbird.html', 'https://tabs.ultimate-guitar.com/t/the_beatles/blackbird_ver5_tab.htm', 'G'),
(6, 'Let It Be', 7, 'Rock', 'English', 'Yes', 'https://tabs.ultimate-guitar.com/t/the_beatles/let_it_be_crd.htm', 'http://www.azlyrics.com/lyrics/beatles/letitbe.html', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artists`
--
ALTER TABLE `Artists`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `Artist Key_idx` (`artist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artists`
--
ALTER TABLE `Artists`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `Artist Key` FOREIGN KEY (`artist_id`) REFERENCES `Artists` (`artist_id`) ON UPDATE CASCADE;
