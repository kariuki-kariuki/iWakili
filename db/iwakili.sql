-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.byetcluster.com
-- Generation Time: Jan 24, 2023 at 04:22 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31360844_iwakili`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) NOT NULL,
  `answer_id` bigint(20) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `responder_id` bigint(20) NOT NULL,
  `answer` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer_id`, `question_id`, `responder_id`, `answer`, `date`) VALUES
(8, 40867642681, 7639911, 169102693602850682, 'Class was fine', '2022-03-24 17:04:16'),
(9, 4028, 7639911, 169102693602850682, 'It was awesome', '2022-03-24 17:05:22'),
(10, 22013, 7639911, 59480045654191606, 'Okay', '2022-03-24 18:43:29'),
(11, 51424475573, 4674390193, 59480045654191606, 'Yes it is working', '2022-03-24 19:38:49'),
(12, 5721, 41928384, 59480045654191606, 'Unless someone does something it will', '2022-03-24 20:32:54'),
(13, 274167440322, 8637415997, 169102693602850682, 'I will answer', '2022-03-24 23:28:02'),
(14, 3081120805152, 5211, 80085619227045, 'Through legal notice number 29 of 2009, the Attorney General delegated his powers of law revision to the National Council for Law Reporting. The Revision of the Laws Act is the Act of Parliament that gives the Attorney General power to revise the laws.', '2022-03-25 04:33:32'),
(15, 5311, 53231772, 80085619227045, 'At iW Law Firm we handle claims at all levels of litigation. Our areas of practice include Business Law, Employment and Labor Law, Intellectual Property/Technology Transactions, and Litigation.', '2022-03-25 04:34:52'),
(16, 4485816167083, 702, 80085619227045, 'We are committed to providing you with the most cost effective legal representation. We can arrange hourly, contingency, and  flat fee agreements.', '2022-03-25 04:37:08'),
(17, 803071, 79887786, 99744185689, 'Reach out to 0700000000 they will assist you in getting real estate lawyers.', '2022-03-25 04:37:44'),
(18, 533247332, 79887786, 59480045654191606, 'When it comes to property investment, it is easy to get caught up in the excitement of it all. We are here to keep you grounded without bursting your bubble.  Whether it is a commercial building, a multi-storey apartment or your dream home, we keep real estate real. We understand that conveyancing can be a confusing and daunting process. With our clear legal advice and guidance, you can rest easy knowing that a highly qualified team is in charge of your property transactions.  Our goal is to eliminate the worry, remove the risk and make the process simple so that you and your loved ones can enjoy your investment.', '2022-03-25 04:38:02'),
(19, 50066062, 8352533, 5336, 'The three factors that generally influence sentencing are the type of crime for which youâ€™ve been convicted, the sentencing guidelines and statutory recommendations for the crime, and your criminal history.', '2022-03-25 04:39:02'),
(20, 178661852, 7639911, 99744185689, 'Pretty Fine. Learning new stuff about Javascript', '2022-03-25 04:39:26'),
(21, 3705, 7332587444, 5336, 'The filing fee for a divorce petition is usually between $100 and $350 in most states. To file a response to a divorce petition, it costs an additional $100 â€“ $200.', '2022-03-25 04:40:05'),
(22, 1136, 41928384, 99744185689, 'Never. Laws are made to correct corruption instead', '2022-03-25 04:40:27'),
(23, 43455337, 8637415997, 99744185689, 'Yes Please! How can i help you', '2022-03-25 04:40:50'),
(24, 6888380, 6737, 5336, 'Identity theft is a form of stealing someoneâ€™s identity, where someone pretends to be someone else by assuming that personâ€™s identity. Most commonly, identities are taken in order to obtain credit, credit cards, steal money, apply for loans, establish accounts, or obtain a job.', '2022-03-25 04:44:59'),
(25, 240640401208, 9456, 5336, 'The FLSA establishes standards for full-time and part-time employees in the private sector as well as in Federal, State, and local governments. These standards include minimum wage, overtime pay, recordkeeping, and child labor.', '2022-03-25 04:45:49'),
(26, 4738205616533, 702, 99744185689, 'Different fees depending on the intensity of your case. Ranges from Kshs.5,000 lowest', '2022-03-25 04:46:48'),
(27, 737118, 52904, 5336, 'You should make sure that all property that is supposed to be included with the home is included on the contract (such as appliances), and you should inspect the damage report. Ideally you should consult an experienced property attorney to assist you with the process of buying a home.', '2022-03-25 04:47:00'),
(28, 442180455626, 2933623, 5336, 'When a person passes away who does not have a last will, that personâ€™s assets are distributed according to the laws of the state, not necessarily according to their wishes. Each state has different laws, but usually money and other assets pass to the deceased personâ€™s spouse.', '2022-03-25 04:48:29'),
(29, 15278530764, 5170254149, 5336, 'â€œReasonable visitationâ€ is usually ordered by a court when determining the visitation rights of a noncustodial parent. This allows the parents the flexibility to work out their own schedule or time and place.', '2022-03-25 05:17:40'),
(30, 320536, 542048342, 59480045654191606, 'We are good', '2022-03-25 05:31:07'),
(31, 610581031654, 53231772, 59480045654191606, 'We offer Tax laws advice', '2022-03-25 05:31:56'),
(32, 1600318765, 1012355, 99744185689, 'Hello from Abishag', '2022-03-25 05:35:22'),
(33, 21504303745, 1012355, 80085619227045, 'Hello', '2022-03-25 05:35:24'),
(34, 20062, 1012355, 5336, 'welcome,how can we help you', '2022-03-25 05:35:40'),
(35, 452206148, 67948, 80085619227045, 'In general, malpractice claims are adjudicated in state courts according to laws (e.g., kENYA), which typically require three elements for a successful claim: the patient suffered an adverse event; the provider caused the event due to action or inaction; and 3) the provider was negligent, which essentially entails showing that the provider took less care than that which is customarily practiced by the average member of the profession in good standing, given the circumstances of the doctor and the patient. Collectively, this three-part test of the validity of a malpractice claim is known as the â€œnegligence rule.â€ ', '2022-03-25 06:03:23'),
(36, 30062044864, 79887786, 82924833998495, 'test', '2022-03-25 06:46:29'),
(37, 2520788507, 7639911, 48316217666, 'vbnm', '2022-03-25 06:48:55'),
(38, 58352814507, 631867630, 80085619227045, 'Hope', '2022-03-25 06:49:09'),
(39, 6, 631867630, 9100547, 'Kariuki is following', '2022-03-25 06:49:22'),
(40, 8252, 631867630, 99744185689, 'Abishag is following', '2022-03-25 06:49:26'),
(41, 622173, 7639911, 82924833998495, 'Class was awesome', '2022-03-25 06:49:41'),
(42, 847544172167, 631867630, 82924833998495, 'Julius', '2022-03-25 06:50:13'),
(43, 1886316, 41928384, 9100547, 'Yes', '2022-03-25 06:50:26'),
(44, 25111, 6582082438, 80085619227045, 'Non-Disclosure Agreements (NDA) are confidential contracts legally binding on the parties and involve sharing of sensitive information.', '2022-03-28 19:13:45'),
(45, 2570024, 7639911, 68453800, 'Class was good. Thank you!', '2022-05-07 14:38:51'),
(46, 507716224, 4674390193, 6623, 'I am daniel', '2022-05-18 10:51:04'),
(47, 8484511, 7123940752, 61701, 'a lawyer is a person ...', '2022-05-20 12:01:08'),
(48, 3112, 7639911, 1763, 'its awesome', '2022-06-12 08:01:12'),
(49, 1386140624802, 7639911, 9398187834, 'good', '2022-08-01 16:56:19'),
(50, 213612828, 7332587444, 59480045654191606, 'I can hook you up with a lawyer', '2022-08-29 07:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `text` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `poster_id` bigint(20) NOT NULL,
  `question` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `poster_id`, `question`, `date`) VALUES
(7, 7639911, 169102693602850682, 'How was class', '2022-03-24 17:04:03'),
(8, 4674390193, 59480045654191606, 'How was class again', '2022-03-24 19:38:37'),
(9, 41928384, 59480045654191606, 'Will Law ever be corrupt ', '2022-03-24 20:32:20'),
(10, 8637415997, 169102693602850682, 'Some answwer this', '2022-03-24 23:27:16'),
(11, 5211, 80085619227045, 'Where does the National Council for Law Reporting (NCLR) obtain the mandate to revise and publish the laws of Kenya?', '2022-03-25 04:33:12'),
(12, 53231772, 80085619227045, 'What types of cases does your law firm handle?', '2022-03-25 04:34:16'),
(13, 79887786, 99744185689, 'How can I access real estate lawyers?', '2022-03-25 04:34:53'),
(14, 702, 80085619227045, 'What will the legal fees cost me?', '2022-03-25 04:36:53'),
(15, 5170254149, 5336, 'Are you required to go to court if you breach a contract?', '2022-03-25 04:37:06'),
(16, 8352533, 5336, '. How is sentencing for a criminal offense decided?', '2022-03-25 04:38:12'),
(17, 7332587444, 5336, 'How much does it cost to file for divorce?', '2022-03-25 04:39:41'),
(18, 6737, 5336, 'What exactly is identity theft?', '2022-03-25 04:44:37'),
(19, 9456, 5336, ' What is the Fair Labor Standards Act (FLSA)?', '2022-03-25 04:45:26'),
(20, 52904, 5336, 'What should I make sure of when I am buying a home?', '2022-03-25 04:46:42'),
(21, 2933623, 5336, ' What happens if a person dies without a last will?', '2022-03-25 04:48:01'),
(22, 542048342, 59480045654191606, 'Hello Terminators', '2022-03-25 05:30:49'),
(23, 1012355, 59480045654191606, 'Hello guys', '2022-03-25 05:35:03'),
(24, 67948, 80085619227045, 'What are the models or theories relating to medical negligence or malpractice?', '2022-03-25 06:02:06'),
(25, 631867630, 9100547, 'How many are following', '2022-03-25 06:48:56'),
(26, 6582082438, 80085619227045, 'What Is a Non-Disclosure Agreement?', '2022-03-28 19:13:02'),
(27, 1530, 59480045654191606, 'Where can I find a divorce lawyer?', '2022-04-07 16:02:17'),
(28, 7123940752, 61701, 'who is a lawyer', '2022-05-20 12:00:22'),
(29, 886, 9398187834, 'How are ypu ??', '2022-08-01 16:56:10'),
(30, 19512, 59480045654191606, 'Can you help with accident case?', '2022-08-29 07:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `full_name`, `password`, `date`) VALUES
(1, 59480045654191606, 'emkay', 'Martin Kariuki', '123', '2022-03-22 08:45:42'),
(2, 96465630428, 'Amaitha', 'Abishag Maitha', '1234', '2022-03-22 11:45:00'),
(3, 169102693602850682, 'Hope', 'Hope Pete', '1234', '2022-03-24 13:57:25'),
(4, 266862670504, 'Hope', 'Hope Pete', '36833615', '2022-03-25 04:28:45'),
(5, 80085619227045, 'Achieng', 'Hope Pete', '123456', '2022-03-25 04:29:15'),
(6, 5336, 'isoo', 'isaac kiptoo', '1234', '2022-03-25 04:31:07'),
(7, 99744185689, 'pmaitha', 'Pendo Maitha', 'myme', '2022-03-25 04:32:53'),
(8, 82924833998495, 'njmwas', 'Julius', 'Testing', '2022-03-25 06:44:42'),
(9, 9100547, 'Kariuki', 'Martin Kariuki Kariuki', '12345', '2022-03-25 06:46:49'),
(10, 43213491671919, 'fk', 'Faith Kilonzi', 'Kenya#2020', '2022-03-25 06:47:04'),
(11, 48316217666, 'test', 'test', 'test', '2022-03-25 06:47:46'),
(12, 421979901759, 'bobo', 'Beatrice ', 'thogori', '2022-03-25 06:47:51'),
(13, 785077575608480, 'odu', 'samuel odak', '123456789', '2022-03-29 10:08:07'),
(14, 24944653, 'sam', 'sam', '123456789', '2022-04-05 10:33:47'),
(15, 27041966, 'nnnnnnn', 'nnn', 'nnnnnnn', '2022-04-05 12:40:54'),
(16, 2358900205, 'dddddddd', 'ddddddd', 'ddddddd', '2022-04-07 15:40:50'),
(17, 86552780, 'sammyboy', 'samuel odak', 'odak', '2022-04-16 06:32:13'),
(18, 68453800, 'Akan', 'Charles', '1234@me', '2022-05-07 14:36:21'),
(19, 6623, 'daniel', 'daniel', '1234', '2022-05-18 10:49:52'),
(20, 7560, 'kariuki', 'kariuki', '1234', '2022-05-20 11:56:21'),
(21, 625756926, 'kariuki', 'kariuki', '1234', '2022-05-20 11:56:22'),
(22, 61701, 'she', 'charity ', '1234', '2022-05-20 11:58:04'),
(23, 1763, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhav', '2022-06-12 07:59:22'),
(24, 431995118, 'rxh xgv', 'xbfnbzdfv', 't hxvftbj', '2022-06-12 14:55:47'),
(25, 2858552, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhavp10', '2022-07-05 13:08:11'),
(26, 688910448999637, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhav', '2022-07-11 15:08:04'),
(27, 1651580121, 'san', 'Sancheet Walekar', '1234', '2022-07-12 13:47:41'),
(28, 717416254, 'cdv', 'cdv', '123456789', '2022-07-13 04:30:38'),
(29, 922068723132660, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhav', '2022-07-29 14:07:08'),
(30, 94540150008881, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhav', '2022-07-29 14:09:31'),
(31, 11880927, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhav', '2022-07-29 14:13:30'),
(32, 91494, 'sancheet', 'sancheet', 'borivali', '2022-07-29 14:15:02'),
(33, 36926234414467, 'vaibhavp10', 'vaibhavpawaskar', 'vaibhav', '2022-08-01 16:29:31'),
(34, 1083028183, 'aditya', 'Aditya', 'aditya', '2022-08-01 16:49:07'),
(35, 9398187834, 'rohit', 'Rohit', 'rohit', '2022-08-01 16:54:02'),
(36, 50765865788595, '<a href=\"google.com\">david</a>', 'david kamau', 'neems', '2022-10-17 18:12:44'),
(37, 52328, 'hhh', 'nnn', 'fff', '2022-11-10 09:54:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_id` (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `responder_id` (`responder_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `poster_id` (`poster_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
