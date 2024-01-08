-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 10:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(31, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70'),
(38, 'Đoàn Quang Minh', 'dqm', '202cb962ac59075b964b07152d234b70'),
(45, 'Nguyễn Thị Nga', 'ntn', '202cb962ac59075b964b07152d234b70'),
(46, 'Trương Cảnh Trường', 'Truong', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(49, 'Breakfast Combos', 'Food_Category_501.png', 'Yes', 'Yes'),
(50, 'Hamburgers', 'Food_Category_481.png', 'Yes', 'Yes'),
(51, 'Coffee', 'Food_Category_179.jpg', 'Yes', 'Yes'),
(52, 'Beverages', 'Food_Category_457.png', 'Yes', 'Yes'),
(53, 'Chicken, Nuggets & More', 'Food_Category_860.png', 'Yes', 'Yes'),
(54, 'Fries & Sides', 'Food_Category_254.png', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(62, 'Maple Bacon Chicken Croissant Combo', 'A juicy chicken breast, Applewood smoked bacon, and maple butter on a flaky croissant bun. A little sweet. A little savory. A lot good.', '22.00', 'Food_Name_402.png', 49, 'Yes', 'Yes'),
(63, 'Bacon, Egg & Cheese Biscuit Combo', 'A fresh-cracked grade A egg on a fluffy buttermilk biscuit with Applewood smoked bacon and melted American cheese. ', '22.00', 'Food_Name_8.png', 49, 'Yes', 'Yes'),
(64, 'Bacon, Egg & Swiss Croissant Combo', 'A freshly beaten egg and Applewood bacon topped with Swiss cream cheese sauce on a fluffy croissant', '22.00', 'Food_Name_2297.png', 49, 'Yes', 'Yes'),
(65, 'Homestyle French Toast Sticks Combo', 'Six sticks of soft, warm, homemade French toast even if you never lived with the person who made these great French toast sticks.', '23.00', 'Food_Name_345.png', 49, 'Yes', 'Yes'),
(66, 'Asiago Ranch Chicken Club Combo', 'A juicy chicken breast is topped with thick Applewood bacon, Asiago cheese, crispy lettuce, and tomatoes, all placed on a toast.', '23.00', 'Food_Name_174.png', 49, 'Yes', 'Yes'),
(67, 'Jr. Hamburger', 'Fresh, never frozen beef topped with pickles, onion, ketchup, and mustard on a toasted bun. It’s done just right, and just the right size.\r\n\r\n', '12.00', 'Food_Name_727.png', 50, 'Yes', 'Yes'),
(68, 'Jr. Cheeseburger', 'Fresh beef topped with cheese, pickles, onion, ketchup, and mustard on a toasted bun. It done just right, and just the right size.\r\n\r\n', '12.00', 'Food_Name_78.png', 50, 'Yes', 'Yes'),
(69, 'Jr. Cheeseburger Deluxe', 'Fresh beef topped with cheese, pickles, onions, tomatoes, crisp lettuce, ketchup, and mayo. It big flavor at a junior price.\r\n\r\n', '14.00', 'Food_Name_70.png', 50, 'Yes', 'Yes'),
(70, 'Bacon Double Stack', 'Two fresh cuts of beef, never frozen, Applewood smoked bacon, cheese, ketchup, mustard, pickles and onions.', '14.00', 'Food_Name_255.png', 50, 'Yes', 'Yes'),
(71, 'Big Bacon Classic', 'A quarter pound of fresh beef, Applewood bacon, American cheese, crisp lettuce, pickles, mayo and onions on a toast.', '16.00', 'Food_Name_87.png', 50, 'Yes', 'Yes'),
(72, 'Pretzel Bacon Pub Cheeseburger', 'A quarter of fresh beef and cheese sauce, Applewood bacon, honey mustard, deep-fried onions, pickles and a slice of muenster cheese', '16.00', 'Food_Name_443.png', 50, 'Yes', 'Yes'),
(73, 'Pretzel Bacon Pub Double', 'Half a pound of fresh beef, cheese sauce, Applewood bacon, deep-fried onion mustard, and a slice of muenster cheese', '16.00', 'Food_Name_440.png', 50, 'Yes', 'Yes'),
(74, 'Cold Brew Iced Coffee', 'Slow steeped, to be extra rich and super-smooth, then served over ice to be extra refreshing and invigorating.\r\n\r\n', '4.00', 'Food_Name_260.png', 51, 'Yes', 'Yes'),
(75, 'Vanilla Frosty-Ccino', 'Vanilla Frosty-Ccino smooth, cold-brewed coffee swirled with our legendary vanilla Frosty mix and served over ice.\r\n\r\n', '4.00', 'Food_Name_465.png', 51, 'Yes', 'Yes'),
(76, 'Chocolate Frosty-Ccino', 'Chocolate Frosty-Ccino smooth, cold-brewed coffee swirled with our legendary chocolate Frosty mix and served over ice.\r\n', '4.00', 'Food_Name_560.png', 51, 'Yes', 'Yes'),
(77, 'Regular Coffee', 'A blend of 100% Arabica beans from central and south America, medium-roasted to bring out all the best flavors.\r\n\r\n', '3.00', 'Food_Name_613.png', 51, 'Yes', 'Yes'),
(78, 'Blueberry Pomegranate Lemonade', 'Our all-natural Blueberry Pomegranate Lemonade combines the sweetness and sourness of blueberries and pomegranates.', '5.00', 'Food_Name_709.png', 52, 'Yes', 'Yes'),
(79, 'Pineapple Mango Lemonade', 'Pineapple mango lemonade mixed with a tropical blend of mango and pineapple. Gives a feeling of freshness', '5.00', 'Food_Name_660.png', 52, 'Yes', 'Yes'),
(80, 'All-Natural Lemonade', 'Real lemonade has no artificial ingredients or preservatives. Made from water, sugar, lemon juice, lime pulp', '5.00', 'Food_Name_666.png', 52, 'Yes', 'Yes'),
(81, 'Strawberry Lemonade', 'Our all-natural lemonade has a real strawberry flavor. Made with Water, Sugar, Lemon Juice, Lime Powder and Ice, Strawberry Puree', '5.00', 'Food_Name_53.png', 52, 'Yes', 'Yes'),
(82, 'Spicy Chicken Nuggets', '100% white chicken is breaded and spiced with spicy chili peppers with three dipping sauces including Buttermilk Ranch, BBQ, Sweet & Sour', '13.00', 'Food_Name_316.png', 53, 'Yes', 'Yes'),
(83, 'Chicken Nuggets', '100% white chicken braided to perfection with 3 dipping sauces including Buttermilk Ranch, BBQ, Sweet & Sour', '13.00', 'Food_Name_369.png', 53, 'Yes', 'Yes'),
(84, 'Classic Chicken Sandwich', 'Crispy chicken breast lightly breaded with crispy lettuce, tomato, mayo and pickles, all placed on a toast.', '14.00', 'Food_Name_679.png', 53, 'Yes', 'Yes'),
(85, 'Crispy Chicken BLT', 'Juicy white meat, lightly breaded and seasoned, topped with Applewood bacon, crisp lettuce, tomatoes, cheese and mayo.', '14.00', 'Food_Name_458.png', 53, 'Yes', 'Yes'),
(86, 'Pretzel Bacon Pub Classic Chicken', 'Lightly breaded chicken breast, cheese sauce, Applewood bacon, honey mustard, onion, pickles and a slice of muenster cheese', '15.00', 'Food_Name_724.png', 53, 'Yes', 'Yes'),
(87, 'Grilled Chicken Ranch Wrap', 'Sweet herb marinated chicken breast, shredded cheddar cheese and crispy romaine in creamy sauce, all wrapped in a tortilla', '13.00', 'Food_Name_487.png', 53, 'Yes', 'Yes'),
(88, 'Natural-Cut Fries', 'French Fries: Potatoes, Vegetable Oil (Soybean, Canola, and/or Cottonseed Oils), naturally cut sea salt, served hot and crispy.', '6.00', 'Food_Name_872.png', 54, 'Yes', 'Yes'),
(89, 'Ghost Pepper Fries', 'Our natural-cut, skin-on, sea-salted fries tossed in spicy ghost pepper sauce. If heat is your thing, these are your fries.\r\n\r\n', '6.00', 'Food_Name_624.png', 54, 'Yes', 'Yes'),
(90, 'Chili Cheese Fries', 'Our natural-cut, skin-on, sea-salted fries topped with our hearty chili and rich, creamy cheese sauce. Easy to love. Hard to beat.\r\n\r\n', '6.00', 'Food_Name_365.png', 54, 'Yes', 'Yes'),
(91, 'Bacon Cheese Baked Potato', 'Hot, tender potatoes topped with soft cream cheese sauce, shredded cheese, and even Applewood bacon.', '8.00', 'Food_Name_183.png', 54, 'Yes', 'Yes'),
(92, 'Chili & Cheese Baked Potato', 'Hot and fluffy potato topped with Wendy’s signature meaty, flavorful chili, rich, creamy cheese sauce, and shredded cheddar. \r\n\r\n', '8.00', 'Food_Name_776.png', 54, 'Yes', 'Yes'),
(93, 'Sour Cream And Chive Baked Potato', 'A hot, fluffy potato topped with the classic combination of chives, and sour cream. It’s a side, it’s a meal, it’s a potato’s potato. Potato.\r\n\r\n', '8.00', 'Food_Name_4995.png', 54, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(14, 'Pretzel Bacon Pub Classic Chicken', '15.00', 3, '45.00', '2023-05-12 10:23:07', 'Delivered', 'Nguyễn Thị Nga', '3575896956', 'testuser@gmail.com', '15/6/11 khu pho 8, phuong Binh Hung Hoa B, quan Binh Thuan'),
(29, 'Chili & Cheese Baked Potato', '8.00', 2, '16.00', '2023-05-26 08:29:46', 'Delivered', 'Trương Cảnh Trường', '7712675124', 'usertest@gmail.com', '15/6/11 khu pho 8, phuong Binh Hung Hoa B, quan Binh Chanh'),
(30, 'Blueberry Pomegranate Lemonade', '5.00', 2, '10.00', '2023-05-26 08:30:13', 'On Delivery', 'Đoàn Quang Minh', '7712675124', 'usertest@gmail.com', '15/6/11 khu pho 1\r\nasffafsfqsgfq'),
(32, 'Bacon, Egg & Cheese Biscuit Combo', '22.00', 2, '44.00', '2023-05-27 06:51:46', 'On Delivery', 'Nguoi dung', '7712675124', 'usertest@gmail.com', '15/6/11 khu pho 1\r\nasffafsfqsgfq'),
(37, 'Bacon Cheese Baked Potato', '8.00', 2, '16.00', '2023-05-27 08:07:29', 'Ordered', 'Trương Cảnh Trường', '7712675124', 'canhtruong365@gmail.com', '15/6/11 khu pho 8, phuong Binh Hung Hoa B, quan Binh Chanh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD CONSTRAINT `FK_Food_Category` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
