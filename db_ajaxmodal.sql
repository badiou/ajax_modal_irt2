--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `position`, `office`, `age`, `salary`, `photo`) VALUES
(1, 'Tiger Wood', 'Accountant', 'Tokyo', 36, 5689, '01.jpg'),
(2, 'Mark Oto Ednalan', 'Chief Executive Officer (CEO)', 'London', 56, 5648, '02.jpg'),
(3, 'Jacob thompson', 'Junior Technical Author', 'San Francisco', 23, 5689, '03.jpg'),
(4, 'cylde Ednalan', 'Software Engineer', 'Olongapo', 23, 54654, '04.jpg'),
(5, 'Angelica Ramos', 'Software Engineer', 'San Francisco', 26, 5465, '05.jpg'),
(6, 'Airi Satou', 'Integration Specialist', 'New York', 53, 56465, '06.jpg'),
(8, 'Tiger Nixon', 'Software Engineer', 'London', 45, 456, '07.jpg'),
(9, 'Airi Satou', 'Pre-Sales Support', 'New York', 25, 4568, '08.jpg'),
(10, 'Angelica Ramos', 'Sales Assistant', 'New York', 45, 456, '09.jpg'),
(11, 'Ashton updated', 'Senior Javascript Developer', 'Olongapo', 45, 54565, '01.jpg'),
(12, 'Bradley Greer', 'Regional Director', 'San Francisco', 27, 5485, '02.jpg'),
(13, 'Brenden Wagner', 'Javascript Developer', 'San Francisco', 38, 65468, '03.jpg'),
(14, 'Brielle Williamson', 'Personnel Lead', 'Olongapo', 56, 354685, '04.jpg'),
(15, 'Bruno Nash', 'Customer Support', 'New York', 36, 65465, '05.jpg'),
(16, 'cairocoders', 'Sales Assistant', 'Sydney', 45, 56465, '06.jpg'),
(17, 'Zorita Serrano', 'Support Engineer', 'San Francisco', 38, 6548, '07.jpg'),
(18, 'Zenaida Frank', 'Chief Operating Officer (COO)', 'San Francisco', 39, 545, '08.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
