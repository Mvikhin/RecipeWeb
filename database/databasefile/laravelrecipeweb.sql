-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 05:28 AM
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
-- Database: `laravelrecipeweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`) VALUES
(258, 'Acai Berries'),
(193, 'Active Dry Yeast'),
(186, 'Agar Agar'),
(315, 'Agar-Agar'),
(174, 'Agave Syrup'),
(348, 'Aioli'),
(342, 'Alfredo Sauce'),
(237, 'Allspice'),
(213, 'Almond Butter'),
(201, 'Almond Flour'),
(80, 'Almond Milk'),
(420, 'Almond Oil'),
(65, 'Almonds'),
(381, 'Anaheim Chilies'),
(390, 'Ancho Chili Powder'),
(129, 'Anchovies'),
(292, 'Anchovy Paste'),
(43, 'Apple'),
(121, 'Apple Cider'),
(114, 'Apple Cider Vinegar'),
(184, 'Arrowroot Powder'),
(151, 'Asafoetida'),
(64, 'Avocado'),
(411, 'Avocado Oil'),
(403, 'Avocado Salsa'),
(272, 'Bacon'),
(278, 'Bacon Lardons'),
(7, 'Baking Powder'),
(190, 'Baking Soda'),
(271, 'Balsamic Reduction'),
(112, 'Balsamic Vinegar'),
(44, 'Banana'),
(383, 'Banana Peppers'),
(351, 'Barbecue Glaze'),
(106, 'Barbecue Sauce'),
(38, 'Basil'),
(341, 'Basil Pesto'),
(301, 'Bass'),
(155, 'Bay Leaves'),
(344, 'Béchamel Sauce'),
(17, 'Beef'),
(89, 'Beef Broth'),
(428, 'Beef Tallow'),
(57, 'Bell Pepper'),
(374, 'Bell Peppers'),
(401, 'Black Bean Salsa'),
(225, 'Black Pepper'),
(255, 'Blackberries'),
(450, 'Blue Cheese'),
(335, 'Blue Cheese Dressing'),
(46, 'Blueberry'),
(195, 'Bread Flour'),
(444, 'Brie Cheese'),
(62, 'Broccoli'),
(223, 'Brown Rice Flour'),
(63, 'Brussels Sprouts'),
(210, 'Buckwheat Flour'),
(310, 'Burbot'),
(452, 'Burrata Cheese'),
(5, 'Butter'),
(92, 'Butter Milk'),
(424, 'Butter Oil'),
(53, 'Cabbage'),
(422, 'Cacao Butter'),
(334, 'Caesar Dressing'),
(364, 'Cajun Seasoning'),
(196, 'Cake Flour'),
(284, 'Calamari'),
(445, 'Camembert Cheese'),
(171, 'Candied Ginger'),
(131, 'Canned Salmon'),
(132, 'Canned Sardines'),
(125, 'Canned Tomatoes'),
(130, 'Canned Tuna'),
(97, 'Canola Oil'),
(128, 'Capers'),
(138, 'Caraway Seeds'),
(345, 'Carbonara Sauce'),
(149, 'Cardamom'),
(233, 'Cardamom Powder'),
(387, 'Caribbean Scotch Bonnet'),
(15, 'Carrot'),
(409, 'Carrot Relish'),
(391, 'Cascabel Chili Powder'),
(215, 'Cashew Butter'),
(430, 'Cashew Milk'),
(66, 'Cashews'),
(307, 'Catfish'),
(61, 'Cauliflower'),
(293, 'Caviar'),
(388, 'Cayenne'),
(141, 'Cayenne Pepper'),
(441, 'Cheddar Cheese'),
(21, 'Cheese'),
(220, 'Chia Meal'),
(421, 'Chia Seed Oil'),
(73, 'Chia Seeds'),
(16, 'Chicken'),
(87, 'Chicken Broth'),
(273, 'Chicken Sausage'),
(90, 'Chicken Stock'),
(203, 'Chickpea Flour'),
(158, 'Chiles Anchos'),
(159, 'Chiles Chipotles'),
(160, 'Chiles Guajillos'),
(142, 'Chili Flakes'),
(410, 'Chili Oil'),
(134, 'Chili Powder'),
(325, 'Chili Sauce'),
(349, 'Chimichurri'),
(365, 'Chinese Five Spice'),
(389, 'Chipotle Chili Powder'),
(380, 'Chipotle Peppers'),
(318, 'Chlorella'),
(169, 'Chocolate Chips'),
(279, 'Chorizo'),
(340, 'Cilantro Pesto'),
(29, 'Cinnamon'),
(235, 'Cinnamon Powder'),
(161, 'Cinnamon Sticks'),
(290, 'Clams'),
(429, 'Clarified Butter'),
(234, 'Clove Powder'),
(34, 'Cloves'),
(164, 'Cocoa Butter'),
(165, 'Cocoa Liquor'),
(9, 'Cocoa Powder'),
(52, 'Coconut'),
(433, 'Coconut Cream'),
(241, 'Coconut Flakes'),
(208, 'Coconut Flour'),
(77, 'Coconut Milk'),
(95, 'Coconut Oil'),
(222, 'Coconut Sugar'),
(308, 'Cod'),
(460, 'Colby Cheese'),
(137, 'Coriander'),
(204, 'Corn Flour'),
(418, 'Corn Oil'),
(402, 'Corn Salsa'),
(176, 'Corn Syrup'),
(28, 'Cornmeal'),
(27, 'Cornstarch'),
(458, 'Cotija Cheese'),
(287, 'Crab'),
(261, 'Cranberries'),
(439, 'Cream Cheese'),
(191, 'Cream of Tartar'),
(59, 'Cucumber'),
(270, 'Cucumber Pickles'),
(405, 'Cucumber Relish'),
(136, 'Cumin'),
(232, 'Cumin Powder'),
(260, 'Currants'),
(355, 'Curry Paste'),
(135, 'Curry Powder'),
(166, 'Dark Chocolate'),
(435, 'Double Cream'),
(253, 'Dragon Fruit'),
(156, 'Dried Chilies'),
(267, 'Durian'),
(60, 'Eggplant'),
(4, 'Eggs'),
(259, 'Elderberries'),
(461, 'Emmental Cheese'),
(180, 'Erythritol'),
(139, 'Fennel Seeds'),
(140, 'Fenugreek'),
(446, 'Feta Cheese'),
(20, 'Fish'),
(297, 'Fish Roe'),
(103, 'Fish Sauce'),
(74, 'Flax Seeds'),
(219, 'Flaxseed Meal'),
(413, 'Flaxseed Oil'),
(3, 'Flour'),
(453, 'Fontina Cheese'),
(379, 'Fresno Chili Peppers'),
(228, 'Garam Masala'),
(11, 'Garlic'),
(185, 'Gelatin'),
(101, 'Ghee'),
(386, 'Ghost Peppers'),
(33, 'Ginger'),
(231, 'Ginger Powder'),
(172, 'Ginger Syrup'),
(199, 'Gluten-Free Flour'),
(440, 'Goat Cheese'),
(326, 'Gochujang'),
(257, 'Goji Berries'),
(177, 'Golden Syrup'),
(463, 'Gorgonzola Cheese'),
(462, 'Gouda Cheese'),
(51, 'Grapes'),
(412, 'Grapeseed Oil'),
(377, 'Green Bell Peppers'),
(369, 'Green Chilies'),
(359, 'Green Curry Paste'),
(449, 'Gruyère Cheese'),
(394, 'Guacamole'),
(189, 'Guar Gum'),
(265, 'Guava'),
(371, 'Habaneros'),
(79, 'Half-and-Half'),
(302, 'Halibut'),
(367, 'Harissa'),
(385, 'Hatch Peppers'),
(454, 'Havarti Cheese'),
(218, 'Hazelnut Butter'),
(415, 'Hazelnut Oil'),
(70, 'Hazelnuts'),
(93, 'Heavy Butter'),
(78, 'Heavy Cream'),
(431, 'Hemp Milk'),
(221, 'Hemp Seeds'),
(339, 'Herbed Butter'),
(306, 'Herring'),
(314, 'Hijiki'),
(352, 'Hoisin Sauce'),
(23, 'Honey'),
(182, 'Honey Syrup'),
(143, 'Hot Paprika'),
(107, 'Hot Sauce'),
(357, 'Indian Curry Powder'),
(194, 'Instant Yeast'),
(337, 'Italian Dressing'),
(268, 'Jackfruit'),
(368, 'Jalapenos'),
(363, 'Jerk Seasoning'),
(243, 'Kaffir Lime Leaves'),
(55, 'Kale'),
(317, 'Kelp'),
(110, 'Ketchup'),
(316, 'Kombu'),
(262, 'Kumquat'),
(19, 'Lamb'),
(280, 'Lamb Sausage'),
(426, 'Lard'),
(246, 'Lavender'),
(41, 'Lemon'),
(244, 'Lemon Balm'),
(154, 'Lemon Grass'),
(118, 'Lemon Juice'),
(238, 'Lemon Zest'),
(56, 'Lettuce'),
(119, 'Lime Juice'),
(242, 'Lime Leaf'),
(239, 'Lime Zest'),
(282, 'Liver'),
(288, 'Lobster'),
(264, 'Lychee'),
(216, 'Macadamia Butter'),
(416, 'Macadamia Nut Oil'),
(356, 'Madras Curry Powder'),
(305, 'Mahi Mahi'),
(328, 'Malt Vinegar'),
(457, 'Manchego Cheese'),
(48, 'Mango'),
(249, 'Mango Powder'),
(173, 'Maple Syrup'),
(94, 'Margarine'),
(343, 'Marinara Sauce'),
(170, 'Marzipan'),
(437, 'Mascarpone'),
(109, 'Mayonnaise'),
(6, 'Milk'),
(167, 'Milk Chocolate'),
(245, 'Mint'),
(320, 'Miso Paste'),
(175, 'Molasses'),
(181, 'Monk Fruit Sweetener'),
(455, 'Monterey Jack Cheese'),
(442, 'Mozzarella Cheese'),
(256, 'Mulberries'),
(289, 'Mussels'),
(108, 'Mustard'),
(229, 'Mustard Powder'),
(148, 'Mustard Seeds'),
(465, 'Neufchatel Cheese'),
(312, 'Nori'),
(30, 'Nutmeg'),
(236, 'Nutmeg Powder'),
(202, 'Oat Flour'),
(83, 'Oat Milk'),
(285, 'Octopus'),
(10, 'Olive Oil'),
(127, 'Olives'),
(12, 'Onion'),
(406, 'Onion Relish'),
(42, 'Orange'),
(248, 'Orange Blossom Water'),
(120, 'Orange Juice'),
(240, 'Orange Zest'),
(37, 'Oregano'),
(324, 'Oyster Sauce'),
(378, 'Padrón Peppers'),
(423, 'Palm Oil'),
(266, 'Papaya'),
(31, 'Paprika'),
(447, 'Parmigiano Reggiano'),
(39, 'Parsley'),
(392, 'Pasilla Chili Powder'),
(197, 'Pastry Flour'),
(281, 'Pâté'),
(49, 'Peach'),
(214, 'Peanut Butter'),
(99, 'Peanut Oil'),
(69, 'Peanuts'),
(50, 'Pear'),
(24, 'Peas'),
(71, 'Pecans'),
(448, 'Pecorino Romano'),
(187, 'Pectin'),
(373, 'Peperoncini'),
(277, 'Pepperoni'),
(126, 'Pickles'),
(393, 'Pico de Gallo'),
(211, 'Pine Nuts'),
(47, 'Pineapple'),
(122, 'Pineapple Juice'),
(408, 'Pineapple Relish'),
(400, 'Pineapple Salsa'),
(68, 'Pistachios'),
(384, 'Poblano Peppers'),
(263, 'Pomegranate'),
(330, 'Ponzu Sauce'),
(163, 'Poppy Seeds'),
(18, 'Pork'),
(427, 'Pork Fat'),
(275, 'Pork Sausage'),
(14, 'Potato'),
(206, 'Potato Flour'),
(207, 'Potato Starch'),
(456, 'Provolone Cheese'),
(414, 'Pumpkin Seed Oil'),
(76, 'Pumpkin Seeds'),
(407, 'Radish Relish'),
(333, 'Ranch Dressing'),
(254, 'Raspberries'),
(376, 'Red Bell Peppers'),
(230, 'Red Chili Powder'),
(360, 'Red Curry Paste'),
(309, 'Red Snapper'),
(115, 'Red Wine Vinegar'),
(25, 'Rice'),
(417, 'Rice Bran Oil'),
(200, 'Rice Flour'),
(82, 'Rice Milk'),
(116, 'Rice Vinegar'),
(438, 'Ricotta Cheese'),
(451, 'Ricotta Salata'),
(36, 'Rosemary'),
(247, 'Rosewater'),
(150, 'Saffron'),
(40, 'Sage'),
(276, 'Salami'),
(300, 'Salmon'),
(398, 'Salsa Fresca'),
(397, 'Salsa Roja'),
(395, 'Salsa Verde'),
(2, 'Salt'),
(353, 'Sambal Oelek'),
(291, 'Scallops'),
(370, 'Scotch Bonnet Peppers'),
(311, 'Seaweed'),
(86, 'Seitan'),
(372, 'Serrano Peppers'),
(98, 'Sesame Oil'),
(146, 'Sesame Paste'),
(75, 'Sesame Seeds'),
(117, 'Sherry Vinegar'),
(382, 'Shishito Peppers'),
(425, 'Shortening'),
(329, 'Shoyu'),
(286, 'Shrimp'),
(436, 'Single Cream'),
(224, 'Sorghum Flour'),
(432, 'Soy Creamer'),
(81, 'Soy Milk'),
(104, 'Soy Sauce'),
(209, 'Spelt Flour'),
(399, 'Spicy Mango Salsa'),
(347, 'Spicy Mayo'),
(354, 'Spicy Teriyaki Sauce'),
(54, 'Spinach'),
(319, 'Spirulina'),
(283, 'Squid'),
(327, 'Sriracha'),
(152, 'Star Anise'),
(332, 'Steak Sauce'),
(178, 'Stevia'),
(464, 'Stilton Cheese'),
(45, 'Strawberry'),
(1, 'Sugar'),
(212, 'Sunflower Butter'),
(100, 'Sunflower Oil'),
(72, 'Sunflower Seeds'),
(145, 'Sweet Chili Sauce'),
(144, 'Sweet Paprika'),
(443, 'Swiss Cheese'),
(299, 'Swordfish'),
(250, 'Szechuan Peppercorns'),
(133, 'Taco Sauce'),
(147, 'Tahini'),
(459, 'Taleggio Cheese'),
(322, 'Tamari'),
(153, 'Tamarind Paste'),
(269, 'Tangerine'),
(205, 'Tapioca Flour'),
(183, 'Tapioca Starch'),
(331, 'Tartare Sauce'),
(85, 'Tempeh'),
(323, 'Teriyaki Sauce'),
(362, 'Thai Green Curry Paste'),
(361, 'Thai Red Curry Paste'),
(336, 'Thousand Island Dressing'),
(35, 'Thyme'),
(304, 'Tilapia'),
(84, 'Tofu'),
(396, 'Tomatillo Salsa'),
(157, 'Tomatillos'),
(13, 'Tomato'),
(346, 'Tomato Ketchup'),
(123, 'Tomato Paste'),
(404, 'Tomato Relish'),
(124, 'Tomato Sauce'),
(303, 'Trout'),
(294, 'Truffle'),
(102, 'Truffle Oil'),
(295, 'Truffle Salt'),
(298, 'Tuna'),
(274, 'Turkey Sausage'),
(32, 'Turmeric'),
(227, 'Turmeric Powder'),
(350, 'Tzatziki Sauce'),
(321, 'Umeboshi Paste'),
(8, 'Vanilla Extract'),
(162, 'Vanilla Pods'),
(88, 'Vegetable Broth'),
(96, 'Vegetable Oil'),
(91, 'Vegetable Stock'),
(338, 'Vinaigrette'),
(111, 'Vinegar'),
(313, 'Wakame'),
(217, 'Walnut Butter'),
(419, 'Walnut Oil'),
(67, 'Walnuts'),
(251, 'Wasabi'),
(296, 'Wasabi Paste'),
(26, 'Wheat Flour'),
(434, 'Whipping Cream'),
(168, 'White Chocolate'),
(226, 'White Pepper'),
(113, 'White Vinegar'),
(198, 'Whole Wheat Flour'),
(105, 'Worcestershire Sauce'),
(188, 'Xanthan Gum'),
(179, 'Xylitol'),
(192, 'Yeast'),
(375, 'Yellow Bell Peppers'),
(358, 'Yellow Curry Powder'),
(22, 'Yogurt'),
(252, 'Yuzu'),
(366, 'Za’atar'),
(58, 'Zucchini');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qty`
--

CREATE TABLE `qty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qty`
--

INSERT INTO `qty` (`id`, `name`) VALUES
(1, 'Teaspoon'),
(2, 'Tablespoon'),
(3, 'Cup'),
(4, 'Gram'),
(5, 'Kilogram'),
(6, 'Liter'),
(7, 'Milliliter'),
(8, 'Ounce');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `title`, `description`, `added_date`) VALUES
(1, 'Pancakes', 'Delicious Breakfast Pancakes', 'Fluffy pancakes made with basic ingredients like flour, eggs, and milk. Perfect for breakfast.', '2025-03-07 03:14:57'),
(2, 'Chocolate Cake', 'Rich and Moist Chocolate Cake', 'A rich and moist chocolate cake made with flour, sugar, cocoa powder, eggs, and butter.', '2025-03-07 03:14:57'),
(3, 'Apple Pie', 'Classic Apple Pie', 'A delicious homemade apple pie with a buttery, flaky crust and sweet, spiced apple filling. Perfect for dessert.', '2025-03-07 03:15:30'),
(4, 'Spaghetti Bolognese', 'Hearty Spaghetti Bolognese', 'A classic Italian dish with rich tomato sauce, minced beef, and spaghetti. A family favorite.', '2025-03-07 03:15:30'),
(5, 'Caesar Salad', 'Crispy Caesar Salad', 'Crispy Romaine lettuce tossed with homemade Caesar dressing, croutons, and parmesan cheese. A fresh and light salad.', '2025-03-07 03:15:30'),
(6, 'Lemonade', 'Refreshing Lemonade', 'A simple and refreshing lemonade made with fresh lemons, sugar, and water. A perfect summer drink.', '2025-03-07 03:15:30'),
(7, 'Chocolate Chip Cookies', 'Chewy Chocolate Chip Cookies', 'Delicious, chewy cookies filled with melted chocolate chips, perfect with a glass of milk.', '2025-03-07 03:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredient_qty`
--

CREATE TABLE `recipe_ingredient_qty` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `qty_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_ingredient_qty`
--

INSERT INTO `recipe_ingredient_qty` (`id`, `recipe_id`, `ingredient_id`, `qty_id`, `amount`) VALUES
(1, 1, 3, 3, 2.00),
(2, 1, 1, 2, 2.00),
(3, 1, 4, 2, 2.00),
(4, 1, 6, 3, 1.50),
(5, 1, 5, 3, 0.50),
(6, 1, 7, 2, 2.00),
(7, 1, 8, 1, 1.00),
(8, 2, 3, 3, 1.50),
(9, 2, 9, 3, 0.50),
(10, 2, 1, 3, 1.00),
(11, 2, 4, 2, 2.00),
(12, 2, 5, 3, 0.50),
(13, 2, 7, 2, 1.00),
(14, 2, 8, 1, 1.00),
(15, 2, 6, 3, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_name` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qty`
--
ALTER TABLE `qty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_ingredient_qty`
--
ALTER TABLE `recipe_ingredient_qty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_ingredient_qty_ibfk_1` (`recipe_id`),
  ADD KEY `recipe_ingredient_qty_ibfk_2` (`ingredient_id`),
  ADD KEY `recipe_ingredient_qty_ibfk_3` (`qty_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=745;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qty`
--
ALTER TABLE `qty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipe_ingredient_qty`
--
ALTER TABLE `recipe_ingredient_qty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe_ingredient_qty`
--
ALTER TABLE `recipe_ingredient_qty`
  ADD CONSTRAINT `recipe_ingredient_qty_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipe_ingredient_qty_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipe_ingredient_qty_ibfk_3` FOREIGN KEY (`qty_id`) REFERENCES `qty` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
