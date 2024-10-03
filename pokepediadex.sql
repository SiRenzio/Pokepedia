-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokepediadex`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokedex`
--

CREATE TABLE `pokedex` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type1` varchar(10) NOT NULL,
  `type2` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `mega_evolves` varchar(5) NOT NULL,
  `next_evolution` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pokedex`
--

INSERT INTO `pokedex` (`id`, `name`, `type1`, `type2`, `description`, `weight`, `height`, `mega_evolves`, `next_evolution`) VALUES
(1, 'Bulbasa', 'Grass', 'Poison', 'Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the suns rays, the seed grows progressively larger.', 15, 26, 'FALSE', 'Ivysaur'),
(2, 'Ivysaur', 'Grass', 'Poison', 'There is a bud on this Pokémon\'s back. To support its weight, Ivysaur\'s legs and trunk grow thick and strong. If it starts spending more time lying in the sunlight, it\'s a sign that the bud will bloom into a large flower soon.', 29, 39, 'FALSE', 'Venusaur'),
(3, 'Venusaur', 'Grass', 'Poison', 'There is a large flower on Venusaur\'s back. The flower is said to take on vivid colors if it gets plenty of nutrition and sunlight. The flower\'s aroma soothes the emotions of people.', 221, 79, 'TRUE', 'None'),
(4, 'Charmander', 'Fire', 'None', 'The flame that burns at the tip of its tail is an indication of its emotions. The flame wavers when Charmander is enjoying itself. If the Pokémon becomes enraged, the flame burns fiercely.', 19, 24, 'FALSE', 'Charmeleon'),
(5, 'Charmeleon', 'Fire', 'None', 'Charmeleon mercilessly destroys its foes using its sharp claws. If it encounters a strong foe, it turns aggressive. In this excited state, the flame at the tip of its tail flares with a bluish white color.', 42, 43, 'FALSE', 'Charizard'),
(6, 'Charizard', 'Fire', 'Flying', 'Charizard flies around the sky in search of powerful opponents. It breathes fire of such great heat that it melts anything. However, it never turns its fiery breath on any opponent weaker than itself.', 200, 67, 'TRUE', 'None'),
(7, 'Squirtle', 'Water', 'None', 'Squirtle\'s shell is not merely used for protection. The shell\'s rounded shape and the grooves on its surface help minimize resistance in water, enabling this Pokémon to swim at high speeds.', 20, 0, 'FALSE', 'Wartortle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokedex`
--
ALTER TABLE `pokedex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokedex`
--
ALTER TABLE `pokedex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
