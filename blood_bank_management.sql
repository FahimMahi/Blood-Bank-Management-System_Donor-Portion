-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 04:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `appointment_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'Scheduled',
  `confirmation_code` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `donor_id`, `appointment_date`, `location`, `status`, `confirmation_code`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-05-20 14:05:00', 'Bashundhara', 'Completed', NULL, '2024-05-20 07:33:20', '2024-05-20 07:33:27'),
(4, 1, '2024-05-22 16:40:00', 'Bashundhara', 'Completed', NULL, '2024-05-20 10:40:47', '2024-05-20 10:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `donation_history`
--

CREATE TABLE `donation_history` (
  `donation_id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `donation_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `units_donated` decimal(5,2) NOT NULL,
  `certificate_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_history`
--

INSERT INTO `donation_history` (`donation_id`, `donor_id`, `donation_date`, `location`, `units_donated`, `certificate_url`, `created_at`) VALUES
(1, 1, '2024-05-20 14:05:00', 'Bashundhara', '1.00', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiSwcGb4puGAxU8hq8BHcjMC6cQh-wKegQIJhAD&url=https%3A%2F%2Fpicturedensity.com%2Fproduct%2Fblood-bank-certificate%2F&usg=AOvVaw2478P1xcOzRS5SOnzAl3-r&opi=89978449', '2024-05-20 08:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `blood_group` varchar(3) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `blood_group`, `date_of_birth`, `profile_picture`, `registration_date`) VALUES
(1, 'Tajbir', 'Ahammed', 'tajbir@gmail.com', '$2y$10$.jV0gDBLeroY1zk/qpZNeuHmHSjs0hM2YASkic67U.uNW2dwq7Hxe', '01755555555', 'O+', '2001-12-31', NULL, '2024-05-20 07:22:42'),
(4, 'Tajbir', 'Ahmed', 'tajbir1@gmail.com', '$2y$10$EzG3Me0r2WHxQ4X8DqQ7buhNsRpevTGFeOfGVTm5xhFQspfdKI7Tq', '01712345678', 'A+', '2001-12-31', NULL, '2024-05-20 09:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `location`, `description`, `created_at`) VALUES
(1, 'Bashundhara Donation', '2024-05-22 10:00:00', 'Bashundhara', 'Only for Bashundhara location... Everyone should donate..', '2024-05-20 07:52:56'),
(2, 'Mirpur Donation', '2024-05-22 12:00:00', 'Mirpur ', 'Only for Mirpur location... Everyone should donate..', '2024-05-20 07:52:56'),
(3, 'Jatrabari Donation', '2024-05-26 12:00:00', 'Jatrabari ', 'Only for Jatrabari  location... Everyone should donate..', '2024-05-20 07:52:56'),
(4, 'Gulshan Donation', '2024-06-26 12:00:00', 'Gulshan ', 'Only for Gulshan location... Everyone should donate..', '2024-05-20 07:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `event_participant_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `participation_status` varchar(20) DEFAULT 'Registered',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`event_participant_id`, `event_id`, `donor_id`, `participation_status`, `created_at`) VALUES
(1, 1, 1, 'Registered', '2024-05-20 07:54:21'),
(2, 2, 1, 'Registered', '2024-05-20 07:57:10'),
(3, 2, 4, 'Registered', '2024-05-20 09:08:35'),
(4, 3, 1, 'Registered', '2024-05-20 10:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `health_eligibility`
--

CREATE TABLE `health_eligibility` (
  `eligibility_id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `questionnaire` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `next_eligible_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `donor_id`, `message`, `type`, `is_read`, `created_at`) VALUES
(1, 1, 'Good.. you have donated once..', 'Donation', 1, '2024-05-20 07:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `reward_id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT 0,
  `reward_level` varchar(20) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`reward_id`, `donor_id`, `points`, `reward_level`, `last_updated`) VALUES
(1, 1, 10, '5', '2024-05-20 08:58:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `donation_history`
--
ALTER TABLE `donation_history`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`event_participant_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `health_eligibility`
--
ALTER TABLE `health_eligibility`
  ADD PRIMARY KEY (`eligibility_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`reward_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation_history`
--
ALTER TABLE `donation_history`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `event_participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `health_eligibility`
--
ALTER TABLE `health_eligibility`
  MODIFY `eligibility_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`);

--
-- Constraints for table `donation_history`
--
ALTER TABLE `donation_history`
  ADD CONSTRAINT `donation_history_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`);

--
-- Constraints for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD CONSTRAINT `event_participants_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `event_participants_ibfk_2` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`);

--
-- Constraints for table `health_eligibility`
--
ALTER TABLE `health_eligibility`
  ADD CONSTRAINT `health_eligibility_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`);

--
-- Constraints for table `rewards`
--
ALTER TABLE `rewards`
  ADD CONSTRAINT `rewards_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
