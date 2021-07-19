-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 08:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokedex`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE `abilities` (
  `Ability_name` char(15) NOT NULL DEFAULT '?',
  `Effect` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`Ability_name`, `Effect`) VALUES
('Big Pecks', 'Protects the Pokémon from Defense-lowering attacks.'),
('Blaze', 'Ups Fire moves in a pinch.'),
('Chlorophyll', 'Raises Speed in sunshine.'),
('Compound Eyes', 'Raises accuracy'),
('Guts', 'Ups Attack if suffering.'),
('Hustle', 'Trades accuracy for power.'),
('Intimidate', 'Lowers the foe\'s Attack.'),
('Keen Eye', 'Prevents loss of accuracy.'),
('Overgrow', 'Ups Grass moves in a pinch.'),
('Rain Dish', 'Slight HP recovery in rain.'),
('Run Away', 'Makes escaping easier.'),
('Shed Skin', 'Heals the body by shedding.'),
('Shield Dust', 'Prevents added effects.'),
('Sniper', 'Powers up moves if they become critical hits'),
('Solar Power', 'Boosts Sp. Atk, but lowers HP in sunshine.'),
('Swarm', 'Ups Bug moves in a pinch.'),
('Tangled Feet', 'Raises evasion if Pokémon is confused.'),
('Tinted Lens', 'oubles the power of this Pokémon\'s \"not very effective\" attacks.'),
('Torrent', 'Ups Water moves in a pinch.');

-- --------------------------------------------------------

--
-- Table structure for table `base_stats`
--

CREATE TABLE `base_stats` (
  `ID` int(11) NOT NULL,
  `HP` int(11) DEFAULT 10,
  `ATK` int(11) DEFAULT 10,
  `DEF` int(11) DEFAULT 10,
  `SPATK` int(11) DEFAULT 10,
  `SPDEF` int(11) DEFAULT 10,
  `SPD` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base_stats`
--

INSERT INTO `base_stats` (`ID`, `HP`, `ATK`, `DEF`, `SPATK`, `SPDEF`, `SPD`) VALUES
(1, 45, 49, 46, 65, 65, 45),
(2, 60, 62, 63, 80, 80, 60),
(3, 80, 82, 83, 100, 100, 80),
(4, 39, 52, 43, 60, 50, 65),
(5, 58, 63, 58, 80, 65, 80),
(6, 78, 84, 78, 109, 85, 100),
(7, 44, 48, 65, 50, 64, 43),
(8, 59, 63, 80, 65, 80, 58),
(9, 79, 83, 100, 85, 105, 78),
(10, 45, 30, 35, 20, 20, 45),
(11, 50, 20, 55, 25, 25, 30),
(12, 60, 45, 50, 90, 80, 70),
(13, 40, 35, 30, 20, 20, 50),
(14, 45, 25, 50, 25, 25, 35),
(15, 65, 80, 40, 45, 80, 75),
(16, 40, 45, 40, 35, 35, 56);

-- --------------------------------------------------------

--
-- Table structure for table `ev`
--

CREATE TABLE `ev` (
  `ID` int(11) NOT NULL,
  `HP` int(11) DEFAULT 0,
  `ATK` int(11) DEFAULT 0,
  `DEF` int(11) DEFAULT 0,
  `SPATK` int(11) DEFAULT 0,
  `SPDEF` int(11) DEFAULT 0,
  `SPD` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev`
--

INSERT INTO `ev` (`ID`, `HP`, `ATK`, `DEF`, `SPATK`, `SPDEF`, `SPD`) VALUES
(1, 0, 0, 0, 1, 0, 0),
(2, 0, 0, 0, 1, 1, 0),
(3, 0, 0, 0, 2, 1, 0),
(4, 0, 0, 0, 0, 0, 1),
(5, 0, 0, 0, 1, 0, 1),
(6, 0, 0, 0, 3, 0, 0),
(7, 0, 0, 1, 0, 0, 0),
(8, 0, 0, 1, 0, 1, 0),
(9, 0, 0, 0, 0, 3, 0),
(10, 1, 0, 0, 0, 0, 0),
(11, 0, 0, 2, 0, 0, 0),
(12, 0, 0, 0, 2, 1, 0),
(13, 0, 0, 0, 0, 0, 1),
(14, 0, 0, 2, 0, 0, 0),
(15, 0, 2, 0, 0, 1, 0),
(16, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `url`) VALUES
(1, 'https://cdn.bulbagarden.net/upload/thumb/2/21/001Bulbasaur.png/375px-001Bulbasaur.png'),
(2, 'https://cdn.bulbagarden.net/upload/thumb/7/73/002Ivysaur.png/375px-002Ivysaur.png'),
(3, 'https://cdn.bulbagarden.net/upload/thumb/a/ae/003Venusaur.png/375px-003Venusaur.png'),
(4, 'https://cdn.bulbagarden.net/upload/thumb/7/73/004Charmander.png/375px-004Charmander.png'),
(5, 'https://cdn.bulbagarden.net/upload/thumb/4/4a/005Charmeleon.png/375px-005Charmeleon.png'),
(6, 'https://cdn.bulbagarden.net/upload/thumb/7/7e/006Charizard.png/375px-006Charizard.png'),
(7, 'https://cdn.bulbagarden.net/upload/thumb/3/39/007Squirtle.png/375px-007Squirtle.png'),
(8, 'https://cdn.bulbagarden.net/upload/thumb/0/0c/008Wartortle.png/375px-008Wartortle.png'),
(9, 'https://cdn.bulbagarden.net/upload/thumb/0/02/009Blastoise.png/375px-009Blastoise.png'),
(10, 'https://cdn.bulbagarden.net/upload/thumb/5/5d/010Caterpie.png/375px-010Caterpie.png'),
(11, 'https://cdn.bulbagarden.net/upload/thumb/c/cd/011Metapod.png/375px-011Metapod.png'),
(12, 'https://cdn.bulbagarden.net/upload/thumb/d/d1/012Butterfree.png/375px-012Butterfree.png'),
(13, 'https://cdn.bulbagarden.net/upload/thumb/d/df/013Weedle.png/375px-013Weedle.png'),
(14, 'https://cdn.bulbagarden.net/upload/thumb/f/f0/014Kakuna.png/375px-014Kakuna.png'),
(15, 'https://cdn.bulbagarden.net/upload/thumb/6/61/015Beedrill.png/375px-015Beedrill.png'),
(16, 'https://cdn.bulbagarden.net/upload/thumb/5/55/016Pidgey.png/375px-016Pidgey.png');

-- --------------------------------------------------------

--
-- Table structure for table `moves_by_leveling`
--

CREATE TABLE `moves_by_leveling` (
  `ID` int(11) DEFAULT NULL,
  `MID` int(11) DEFAULT NULL,
  `Level` int(11) DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moves_by_leveling`
--

INSERT INTO `moves_by_leveling` (`ID`, `MID`, `Level`) VALUES
(1, 1, 1),
(1, 2, 1),
(4, 3, 1),
(4, 2, 1),
(7, 1, 1),
(7, 4, 1),
(10, 1, 1),
(13, 1, 1),
(1, 5, 10),
(4, 6, 10),
(7, 7, 10),
(11, 8, 1),
(14, 8, 1),
(12, 10, 8),
(13, 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `moves_by_tm_or_hm`
--

CREATE TABLE `moves_by_tm_or_hm` (
  `ID` int(11) DEFAULT NULL,
  `MID` int(11) DEFAULT NULL,
  `TM_or_HM` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moves_by_tm_or_hm`
--

INSERT INTO `moves_by_tm_or_hm` (`ID`, `MID`, `TM_or_HM`) VALUES
(3, 20, 'TM15'),
(6, 20, 'TM15'),
(9, 20, 'TM15'),
(12, 20, 'TM15'),
(15, 20, 'TM15'),
(4, 12, 'TM01'),
(5, 12, 'TM01'),
(6, 12, 'TM01'),
(7, 14, 'TM03'),
(8, 14, 'TM03'),
(9, 14, 'TM03'),
(7, 15, 'HM03'),
(8, 15, 'HM03'),
(9, 15, 'hM03'),
(3, 19, 'TM26'),
(1, 16, 'HM01');

-- --------------------------------------------------------

--
-- Table structure for table `moves_by_tutor`
--

CREATE TABLE `moves_by_tutor` (
  `ID` int(11) DEFAULT NULL,
  `MID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moves_by_tutor`
--

INSERT INTO `moves_by_tutor` (`ID`, `MID`) VALUES
(1, 21),
(2, 21),
(3, 21),
(4, 22),
(5, 22),
(6, 22),
(7, 23),
(8, 23),
(9, 23),
(16, 24);

-- --------------------------------------------------------

--
-- Table structure for table `move_descriptions`
--

CREATE TABLE `move_descriptions` (
  `MID` int(11) NOT NULL,
  `Moves_name` char(15) DEFAULT NULL,
  `Type` char(10) DEFAULT NULL,
  `Power` int(11) DEFAULT 10,
  `Accuracy` int(11) DEFAULT 100,
  `Details` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `move_descriptions`
--

INSERT INTO `move_descriptions` (`MID`, `Moves_name`, `Type`, `Power`, `Accuracy`, `Details`) VALUES
(1, 'Tackle', 'Normal', 35, 95, 'No extra effect.'),
(2, 'Growl', 'Normal', 0, 100, 'Lowers attack slightly.'),
(3, 'Scratch', 'Normal', 40, 100, 'No extra effect.'),
(4, 'Leer', 'Normal', 0, 100, 'Lowers defence slighly.'),
(5, 'Vine Whip', 'Grass', 35, 100, 'No extra effect.'),
(6, 'Ember', 'Fire', 40, 100, 'Small chance of burn.'),
(7, 'Water Gun', 'Water', 40, 100, 'No extra effect.'),
(8, 'Harden', 'Normal', 0, 0, 'Increases defenses slightly.'),
(9, 'Poison Powder', 'Poison', 0, 75, 'Poisons the enemy.'),
(10, 'Confusion', 'Psychic', 50, 100, 'Small chance of confusion.'),
(11, 'Twin Needle', 'Bug', 25, 100, 'May hit 2-5 times.'),
(12, 'Focus Puch', 'Fighting', 150, 100, 'Takes 2 turns to execute.'),
(13, 'Dragon Claw', 'Dragon', 85, 100, 'No extra effects.'),
(14, 'Water Pulse', 'Water', 65, 100, 'Small chance of confusing the enemy.'),
(15, 'Surf', 'Water', 95, 100, 'No extra effects.'),
(16, 'Cut', 'Normal', 50, 100, 'No extra effects.'),
(17, 'Rock Smash', 'Fighting', 35, 100, 'No extra effects.'),
(18, 'Aerial Ace', 'Flying', 65, 100, 'Never misses.'),
(19, 'Earthquake', 'Ground', 100, 100, 'Double damage to undergronud enemies'),
(20, 'Hyper Beam', 'Normal', 150, 100, 'Needs to recharge after use.'),
(21, 'Grass Pledge', 'Grass', 80, 100, 'Powers-up the other type pledge moves.'),
(22, 'Fire Pledge', 'Fire', 80, 100, 'Powers-up the other type pledge moves.'),
(23, 'Water Pledge', 'Water', 80, 100, 'Powers-up the other type pledge moves.'),
(24, 'Uproar', 'Normal', 80, 100, 'Does not allow sleep.');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `ID` int(11) NOT NULL DEFAULT 0,
  `Name` char(15) DEFAULT '?',
  `Type1` char(10) DEFAULT NULL,
  `Type2` char(10) DEFAULT NULL,
  `Ability1` char(15) DEFAULT NULL,
  `Ability2` char(15) DEFAULT NULL,
  `AbilityH` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`ID`, `Name`, `Type1`, `Type2`, `Ability1`, `Ability2`, `AbilityH`) VALUES
(1, 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', 'Chlorophyll', NULL),
(2, 'Ivysaur', 'Grass', 'Poison', 'Overgrow', 'Chlorophyll', NULL),
(3, 'Venusaur', 'Grass', 'Poison', 'Overgrow', 'Chlorophyll', NULL),
(4, 'Charmander', 'Fire', NULL, 'Blaze', 'Solar Power', NULL),
(5, 'Charmeleon', 'Fire', NULL, 'Blaze', 'Solar Power', NULL),
(6, 'Charizard', 'Fire', 'Flying', 'Blaze', 'Solar Power', NULL),
(7, 'Squirtle', 'Water', NULL, 'Torrent', 'Rain Dish', NULL),
(8, 'Wartortle', 'Water', NULL, 'Torrent', 'Rain Dish', NULL),
(9, 'Blastoise', 'Water', NULL, 'Torrent', 'Rain Dish', NULL),
(10, 'Caterpie', 'Bug', NULL, 'Shield Dust', 'Run Away', NULL),
(11, 'Metapod', 'Bug', NULL, 'Shed Skin', NULL, NULL),
(12, 'Butterfree', 'Bug', 'Flying', 'Compound Eyes', 'Tinted Lens', NULL),
(13, 'Weedle', 'Bug', 'Posion', 'Shield Dust', 'Run Away', NULL),
(14, 'Pidgey', 'Normal', 'Flying', 'Keen Eye', 'Tangled Feet', 'Big Pecks');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `Type` char(10) NOT NULL,
  `NOR` float(4,2) DEFAULT NULL,
  `FIR` float(4,2) DEFAULT NULL,
  `WAT` float(4,2) DEFAULT NULL,
  `ELE` float(4,2) DEFAULT NULL,
  `GRA` float(4,2) DEFAULT NULL,
  `ICE` float(4,2) DEFAULT NULL,
  `FIG` float(4,2) DEFAULT NULL,
  `POI` float(4,2) DEFAULT NULL,
  `GRO` float(4,2) DEFAULT NULL,
  `FLY` float(4,2) DEFAULT NULL,
  `PSY` float(4,2) DEFAULT NULL,
  `BUG` float(4,2) DEFAULT NULL,
  `ROC` float(4,2) DEFAULT NULL,
  `GHO` float(4,2) DEFAULT NULL,
  `DRA` float(4,2) DEFAULT NULL,
  `DAR` float(4,2) DEFAULT NULL,
  `STE` float(4,2) DEFAULT NULL,
  `FAI` float(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`Type`, `NOR`, `FIR`, `WAT`, `ELE`, `GRA`, `ICE`, `FIG`, `POI`, `GRO`, `FLY`, `PSY`, `BUG`, `ROC`, `GHO`, `DRA`, `DAR`, `STE`, `FAI`) VALUES
('Bug', 1.00, 0.50, 1.00, 1.00, 2.00, 1.00, 0.50, 0.50, 1.00, 0.50, 2.00, 1.00, 1.00, 0.50, 1.00, 2.00, 0.50, 0.50),
('Dark', 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 0.50, 1.00, 1.00, 1.00, 2.00, 1.00, 1.00, 2.00, 1.00, 0.50, 1.00, 0.50),
('Dragon', 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 2.00, 1.00, 0.50, 0.00),
('Electric', 1.00, 1.00, 2.00, 0.50, 0.50, 1.00, 1.00, 1.00, 0.00, 2.00, 1.00, 1.00, 1.00, 1.00, 0.50, 1.00, 1.00, 1.00),
('Fairy', 1.00, 0.50, 1.00, 1.00, 1.00, 1.00, 2.00, 0.50, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 2.00, 2.00, 0.50, 1.00),
('Fighting', 2.00, 1.00, 1.00, 1.00, 1.00, 2.00, 1.00, 0.50, 1.00, 0.50, 0.50, 0.50, 2.00, 0.00, 1.00, 2.00, 2.00, 0.50),
('Fire', 1.00, 0.50, 0.50, 1.00, 2.00, 2.00, 1.00, 1.00, 1.00, 1.00, 1.00, 2.00, 0.50, 1.00, 0.50, 1.00, 2.00, 1.00),
('Flying', 1.00, 1.00, 1.00, 0.50, 2.00, 1.00, 2.00, 1.00, 1.00, 1.00, 1.00, 2.00, 0.50, 1.00, 1.00, 1.00, 0.50, 1.00),
('Ghost', 0.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 2.00, 1.00, 1.00, 2.00, 1.00, 0.50, 1.00, 1.00),
('Grass', 1.00, 0.50, 2.00, 1.00, 0.50, 1.00, 1.00, 0.50, 2.00, 0.05, 1.00, 0.50, 2.00, 1.00, 0.50, 1.00, 0.50, 1.00),
('Ground', 1.00, 2.00, 1.00, 2.00, 0.50, 1.00, 1.00, 2.00, 1.00, 0.00, 1.00, 0.50, 2.00, 1.00, 1.00, 1.00, 2.00, 1.00),
('Ice', 1.00, 0.50, 0.50, 1.00, 2.00, 0.50, 1.00, 1.00, 2.00, 2.00, 1.00, 1.00, 1.00, 1.00, 2.00, 1.00, 0.50, 1.00),
('Normal', 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 0.50, 0.00, 1.00, 1.00, 0.50, 1.00),
('Poison', 1.00, 1.00, 1.00, 1.00, 2.00, 1.00, 1.00, 0.50, 0.05, 1.00, 1.00, 1.00, 0.50, 0.50, 1.00, 1.00, 0.00, 2.00),
('Psychic', 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 2.00, 2.00, 1.00, 1.00, 0.50, 1.00, 1.00, 1.00, 1.00, 0.00, 0.50, 1.00),
('Rock', 1.00, 2.00, 1.00, 1.00, 1.00, 2.00, 0.50, 1.00, 0.50, 2.00, 1.00, 2.00, 1.00, 1.00, 1.00, 1.00, 0.50, 1.00),
('Steel', 1.00, 0.50, 0.50, 0.50, 1.00, 2.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 2.00, 1.00, 1.00, 1.00, 0.50, 2.00),
('Water', 1.00, 2.00, 0.50, 1.00, 0.50, 1.00, 1.00, 1.00, 2.00, 1.00, 1.00, 1.00, 2.00, 1.00, 0.50, 1.00, 1.00, 1.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view`
-- (See below for the actual view)
--
CREATE TABLE `view` (
`name` char(15)
,`ID` int(11)
,`HP` int(11)
,`ATK` int(11)
,`DEF` int(11)
,`SPATK` int(11)
,`SPDEF` int(11)
,`SPD` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view`
--
DROP TABLE IF EXISTS `view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view`  AS  select `pokemon`.`Name` AS `name`,`base_stats`.`ID` AS `ID`,`base_stats`.`HP` AS `HP`,`base_stats`.`ATK` AS `ATK`,`base_stats`.`DEF` AS `DEF`,`base_stats`.`SPATK` AS `SPATK`,`base_stats`.`SPDEF` AS `SPDEF`,`base_stats`.`SPD` AS `SPD` from (`base_stats` left join `pokemon` on(`pokemon`.`ID` = `base_stats`.`ID`)) where `pokemon`.`AbilityH` is not null ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`Ability_name`);

--
-- Indexes for table `base_stats`
--
ALTER TABLE `base_stats`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ev`
--
ALTER TABLE `ev`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `move_descriptions`
--
ALTER TABLE `move_descriptions`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`Type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
