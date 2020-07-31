-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 04:49 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS satweb;

USE satweb;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL,
  `question` varchar(10000) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `catagory` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `catagory`) VALUES
(1, 'Soham bought a basketball for 60 dollars that appreciates in price by 10 percent a year. what is the price after 2 years?', '$72.60', 'percent'),
(2, 'a book was on sale for 35% off last month (the books name was dove and serpent). After 8% sales tax the customer paid $12.50. What was the original price of the book? round your answer to the nearest cent.', '$17.81', 'percent'),
(3, 'in 2010 company a and company b had the same amount of sales. in the next 5 years company a\'s sales depreciated by 10% a year while company b remained the same. if company a\'s sales are now 100,000, what are the sales of company b? round to the nearest sale.', '169351', 'percent'),
(4, 'someone was out buying random stuff. At the time he paid $60 for the stuff. After 3 months he wanted to sell the stuff but when he went to sell it the stuff was only valued at $45. what was the percent loss in value in the last 3 months.', '25%', 'percent'),
(5, 'Some dude came across a million dollars on the street. when he went to the police to return the money as a reward he was given 8% of the amount he found on the ground. having come across such a large sum of money he chose to put 25% of the money into a savings account and use the rest on buying lottery tickets as he was feeling very lucky. in the lottery, he lost a third of the money he put in and after this, he chose to put the rest of the money into his bank. assuming he will be back to a hundred percent of the original money he had when he was given the money in 5 years, what is the interest rate of the bank? round to the nearest percent.', '6%', 'percent'),
(6, 'if a company depreciates at a rate of 6% a year for 5 years and then appreciates at a rate of 3% a year how many years until the company is back up to its original value? round to the nearest year.', '10', 'percent'),
(7, 'A completely made-up animal can reach a max speed of 250 mph when swimming at its fastest (the animal do be speedy). what is the speed of the animal in feet per second? (1 mile = 5280 feet) round to the nearest ft/sec', '367 ft/sec', 'conversions'),
(8, 'if the animal dove at this speed for a mile how many seconds did it take the animal? round to the nearest second.', '14.4 seconds', 'conversions'),
(9, '\\(5 = (x^2 - 3x + 2)/(x-2)\\)  <br>  solve for x', '6', 'functions'),
(12, '\\(x = \\frac{1}{3}y\\) <br> \\(y^2 + 3x = 2\\) <br> find all ordered pairs that satisfy this equation.', '(\\(\\frac{-2}{3}\\),-2),(\\(\\frac{1}{3}\\),1)', 'functions'),
(13, '\\((ax-4)(x+b) = 4x^2+cx +4\\) <br> what is the value of abc?', '32', 'functions'),
(14, '|2x+3| = 7<br> has solutions a and b. what is the value of |a-b|? ', '7', 'functions'),
(15, 'if (x+a) = 6 and (x-a) = 5 what is the value of \\((x^2-a^2)(x+a)\\)?', '180', 'functions'),
(16, 'write the equation of a circle if you know two three of the points on the circle are (0,0),(0,2), and (1,1).', '\\((x)^2 + (y-1)^2 = 1\\)', 'circle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
