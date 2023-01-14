-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 14 jan. 2023 à 14:27
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_membres`, `commentaire`, `id_article`) VALUES
(3, 4, 'Bonjour Azz Eddine', 1),
(6, 2, 'Super article :D', 2),
(8, 2, 'Intéressant', 3),
(9, 4, 'Bien tout ça', 4),
(10, 5, 'Top ton article :D', 2),
(11, 5, 'Un article au top continue comme ça :D', 1),
(12, 3, 'Wow PHP c\'est top !!', 1),
(21, 1, 'test', 31),
(22, 3, 'C\'est cool ça', 31),
(24, 9, 'Belle animation', 8),
(30, 3, 'Belles illustrations', 32),
(31, 3, 'Belles Illustrations', 31),
(32, 3, 'Wow', 31),
(34, 1, 'Merci (^-^)', 33),
(35, 5, 'Super beau le Logo', 33);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `role_user` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `role_user`) VALUES
(1, 'Admin Mao17', 'adminuser@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1),
(2, 'Loic84', 'test@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(3, 'Azzed16', 'azzed@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(4, 'Rakalen', 'raka@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(5, 'Mimi06', 'mimi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(6, 'kiki', 'kiki@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(9, 'Rafa12', 'rafa12@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(24, 'Goin12', 'goin12@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(25, 'May16', 'may16@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `work_type` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `date_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `work_type`, `image`, `date_post`) VALUES
(1, 'Décrypter le métier des designers web', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Développement web ', '../web/articles/article-1.webp', '2022-11-18 22:01:28'),
(2, 'Comment intégrer des modules dans votre site', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Développement web ', '../web/articles/article-2.webp', '2022-05-18 12:28:17'),
(3, 'Ajouter une barre de recherche en HTML et PHP', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Webdesign', '../web/articles/article-3.webp', '2022-11-12 22:01:35'),
(4, 'Créer des motif pour vos t-shirt sur illustrator', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Design', '../web/articles/article-4.webp', '2022-11-12 22:01:35'),
(5, 'Typographie : Les bonne polices pour un logo réussi test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.                                                                                                                                                                ', 'Typographie', '../web/articles/article-5.webp', '2022-11-12 22:01:35'),
(8, 'Comment créer des super animations fluide', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Illustration', '../web/articles/article-6.gif', '2022-11-17 16:32:20'),
(31, 'Les illustrations végétales et cosmiques de Comsika', 'La directrice artistique et l’illustratrice turque Princess Hıdır, diplômée en design graphique de l’Université de Marmara, crée pour l’EP “Cosmic Planta” d’Ozoyoun monde végétal en mutation.\r\n\r\nÀ la fois souterrain, céleste, ou encore sous-marin, le monde de la directrice artistique Princess Hıdır est habité de lueurs acidulées oranges, bleues et vertes… Dans le clip de l’EP “Cosmic Planta” d’Ozoyo, différentes espèces de plantes cohabitent, comme des cactus en floraison ou encore des champignons libérant leurs spores. Les illustrations sont animées par Görkem Topsakal. Situé sur une exoplanète dans une galaxie inconnue, ce monde mute suite à l’impact d’une météorite. Cette dernière a causé la dissémination d’un liquide aux propriétés d’altération génétique. Devenues sentientes à son contact, les plantes sont capables de se mouvoir et d’interagir. Six scènes animées de cet écosystème habillent les six chansons de l’EP dont la musique électronique invite à la contemplation. Puisant son inspiration dans la science-fiction, l’illustratrice crée aussi la pochette de l’album, ainsi que le macaron du disque vinyle. Ses illustrations animées s’intègrent à l’interface de Spotify à la lecture des chansons.                                                                                                                                                                                                                                                                                                                                                                        ', 'Illustration', '../web/articles/6391fab33a3137.87992861.webp', '2022-12-08 15:54:43'),
(33, 'Le tourisme spatial, revu et affiché par la SHIFT', 'De Jules Verne aux exploits de Philae, l\'exploration spatiale a toujours fait rêver. Le Jet Propulsion Laboratory fait partie des artisans de la conquête spatiale, grâce à des programmes comme Explorer, Voyager, Mars Odyssey, Galileo, et tous ces autres bras mécaniques qui sont allés explorer le cosmos pour nous. Le laboratoire californien comporte également un studio de design, qui a récemment produit une nouvelle série de posters. Entre imagerie de science-fiction et voyages d\'une autre époque, la série illustre l\'aube du tourisme spatial.', 'Design', '../web/articles/63b1c87425af87.48646509.gif', '2023-01-01 18:52:52');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(255) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `work_type` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `date_project` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `content`, `work_type`, `image`, `date_project`) VALUES
(1, 'PJ Studio Siteweb', 'Etiam orci ipsum, pellentesque quis suscipit vitae, tempor sit amet quam. Sed ac volutpat metus, ac tristique metus. Pellentesque suscipit ultricies eros at ultrices. ', 'Webdesign', '../web/projets/project-1.webp', 2018),
(2, 'Inno Jus d\'orange', 'Aenean vitae justo rutrum, iaculis velit non, sollicitudin risus. Integer nec tellus elit. Donec nec dapibus nunc. Vestibulum a dapibus enim.', 'Packaging', '../web/projets/project-2.webp', 2019),
(3, 'Upohat branding', 'Ut malesuada nec tortor vestibulum dapibus. Donec non purus posuere, eleifend sapien ac, semper sapien. Mauris viverra justo vel aliquet finibus.', 'Branding', '../web/projets/project-3.webp', 2020),
(4, 'Mendi illsutrations', 'Pellentesque sed suscipit mauris. Donec vestibulum sem eget blandit ornare. Etiam orci ipsum, pellentesque quis suscipit vitae. ', 'Illustration', '../web/projets/project-4.webp', 2021),
(5, 'Mouchi branding', 'Nulla sollicitudin ac dui vel dictum.\r\nPellentesque accumsan sem in pellentesque mollis. Phasellus et ligula faucibus, facilisis est et, tempor ex.', 'Branding', '../web/projets/project-5.webp', 2022),
(6, 'Schweiz branding', 'Aenean vitae justo rutrum, iaculis velit non, sollicitudin risus. Integer nec tellus elit. Donec nec dapibus nunc. Vestibulum a dapibus enim.', 'Branding', '../web/projets/project-6.webp', 2022);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_membres` (`id_membres`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_membres`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
