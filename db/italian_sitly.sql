-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 12:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `italian_sitly`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadditionallanguages`
--

CREATE TABLE `tbadditionallanguages` (
  `id` int(11) NOT NULL,
  `LanguageRefUserID` varchar(512) NOT NULL,
  `Language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadditionallanguages`
--

INSERT INTO `tbadditionallanguages` (`id`, `LanguageRefUserID`, `Language`) VALUES
(1, '2', 'en-EN'),
(2, '2', 'en-EN'),
(3, '2', 'en-EN'),
(4, '2', 'de-DE'),
(5, '2', 'sp-SP'),
(6, '2', 'fr-FR'),
(7, '2', 'en-EN'),
(8, '2', 'de-DE'),
(9, '2', 'sp-SP'),
(10, '2', 'fr-FR'),
(11, '2', 'en-EN'),
(12, '2', 'de-DE'),
(13, '2', 'sp-SP'),
(14, '2', 'fr-FR'),
(15, '3', 'en-EN'),
(16, '4', 'en-EN'),
(17, '4', 'de-DE'),
(18, '4', 'lv-LV');

-- --------------------------------------------------------

--
-- Table structure for table `tbads`
--

CREATE TABLE `tbads` (
  `id` int(11) NOT NULL,
  `AdRefUserID` varchar(512) NOT NULL,
  `AdRefType` int(11) NOT NULL,
  `AdStartDate` date DEFAULT NULL,
  `AdEndDate` date DEFAULT NULL,
  `AdScheduleRefType` int(11) NOT NULL,
  `AdScheduleOnMondayMorning` varchar(1) NOT NULL,
  `AdScheduleOnMondayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnMondayEvening` varchar(1) NOT NULL,
  `AdScheduleOnTuesdayMorning` varchar(1) NOT NULL,
  `AdScheduleOnTuesdayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnTuesdayEvening` varchar(1) NOT NULL,
  `AdScheduleOnWednesdayMorning` varchar(1) NOT NULL,
  `AdScheduleOnWednesdayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnWednesdayEvening` varchar(1) NOT NULL,
  `AdScheduleOnThursdayMorning` varchar(1) NOT NULL,
  `AdScheduleOnThursdayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnThursdayEvening` varchar(1) NOT NULL,
  `AdScheduleOnFridayMorning` varchar(1) NOT NULL,
  `AdScheduleOnFridayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnFridayEvening` varchar(1) NOT NULL,
  `AdScheduleOnSaturdayMorning` varchar(1) NOT NULL,
  `AdScheduleOnSaturdayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnSaturdayEvening` varchar(1) NOT NULL,
  `AdScheduleOnSundayMorning` varchar(1) NOT NULL,
  `AdScheduleOnSundayAfternoon` varchar(1) NOT NULL,
  `AdScheduleOnSundayEvening` varchar(1) NOT NULL,
  `AdAfterSchool` varchar(1) NOT NULL,
  `AdChoreGroceries` varchar(1) NOT NULL,
  `AdChoreCooking` varchar(1) NOT NULL,
  `AdChoreDriving` varchar(1) NOT NULL,
  `AdChoreLightHouse` varchar(1) NOT NULL,
  `AdChoreHomework` varchar(1) NOT NULL,
  `AdChoreStudyHelpCompulsory` varchar(1) NOT NULL,
  `AdChoreStudyHelpSpecialized` varchar(1) NOT NULL,
  `AdRefPriceRange` int(11) NOT NULL,
  `AdExperienceYears` varchar(5) NOT NULL,
  `AdChildrenMaxNumber` varchar(10) NOT NULL,
  `AdChildrenWithSpecialNeeds` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbads`
--

INSERT INTO `tbads` (`id`, `AdRefUserID`, `AdRefType`, `AdStartDate`, `AdEndDate`, `AdScheduleRefType`, `AdScheduleOnMondayMorning`, `AdScheduleOnMondayAfternoon`, `AdScheduleOnMondayEvening`, `AdScheduleOnTuesdayMorning`, `AdScheduleOnTuesdayAfternoon`, `AdScheduleOnTuesdayEvening`, `AdScheduleOnWednesdayMorning`, `AdScheduleOnWednesdayAfternoon`, `AdScheduleOnWednesdayEvening`, `AdScheduleOnThursdayMorning`, `AdScheduleOnThursdayAfternoon`, `AdScheduleOnThursdayEvening`, `AdScheduleOnFridayMorning`, `AdScheduleOnFridayAfternoon`, `AdScheduleOnFridayEvening`, `AdScheduleOnSaturdayMorning`, `AdScheduleOnSaturdayAfternoon`, `AdScheduleOnSaturdayEvening`, `AdScheduleOnSundayMorning`, `AdScheduleOnSundayAfternoon`, `AdScheduleOnSundayEvening`, `AdAfterSchool`, `AdChoreGroceries`, `AdChoreCooking`, `AdChoreDriving`, `AdChoreLightHouse`, `AdChoreHomework`, `AdChoreStudyHelpCompulsory`, `AdChoreStudyHelpSpecialized`, `AdRefPriceRange`, `AdExperienceYears`, `AdChildrenMaxNumber`, `AdChildrenWithSpecialNeeds`) VALUES
(1, '1', 1, '2021-05-16', '2021-09-18', 2, '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '0', 5, '', '', ''),
(2, '2', 2, NULL, NULL, 3, '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', 2, '5+', '4+', '0'),
(3, '2', 2, NULL, NULL, 3, '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', 2, '5+', '4+', '0'),
(4, '3', 2, NULL, NULL, 2, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '1', '0', '0', 6, '5+', '4+', '0'),
(5, '4', 2, NULL, NULL, 2, '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '0', '0', 3, '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbadsagerangeexperiences`
--

CREATE TABLE `tbadsagerangeexperiences` (
  `id` int(11) NOT NULL,
  `AdsRangeRefAdID` varchar(30) NOT NULL,
  `AdsRangeRefAgeRange` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadsagerangeexperiences`
--

INSERT INTO `tbadsagerangeexperiences` (`id`, `AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES
(1, '2', '1'),
(2, '2', '2'),
(3, '2', '3'),
(4, '2', '4'),
(5, '2', '5'),
(6, '2', '6'),
(7, '2', '7'),
(8, '3', '1'),
(9, '3', '2'),
(10, '3', '3'),
(11, '3', '4'),
(12, '3', '5'),
(13, '3', '6'),
(14, '3', '7'),
(15, '4', '1'),
(16, '4', '4'),
(17, '4', '5'),
(18, '4', '6'),
(19, '5', '2'),
(20, '5', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbageranges`
--

CREATE TABLE `tbageranges` (
  `id` int(11) NOT NULL,
  `RangeName` varchar(50) NOT NULL,
  `RangeMin` int(11) NOT NULL,
  `RangeMax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbageranges`
--

INSERT INTO `tbageranges` (`id`, `RangeName`, `RangeMin`, `RangeMax`) VALUES
(1, 'Babies', 0, 1),
(2, 'Toddlers', 1, 3),
(3, 'Kindergarteners', 4, 6),
(4, 'Students', 7, 11),
(5, 'Teenagers', 12, 19),
(6, 'College', 20, 25),
(7, 'Adult', 26, 999);

-- --------------------------------------------------------

--
-- Table structure for table `tbbabyexpec`
--

CREATE TABLE `tbbabyexpec` (
  `id` int(11) NOT NULL,
  `BabyExpecRefUserID` varchar(512) NOT NULL,
  `BabyExpecDate` date NOT NULL,
  `BabyExpecSpecialNeeds` tinyint(1) NOT NULL,
  `BabyExpecSpecialNeedsDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbbabyexpec`
--

INSERT INTO `tbbabyexpec` (`id`, `BabyExpecRefUserID`, `BabyExpecDate`, `BabyExpecSpecialNeeds`, `BabyExpecSpecialNeedsDescription`) VALUES
(1, '1', '2021-09-18', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbchildren`
--

CREATE TABLE `tbchildren` (
  `id` int(11) NOT NULL,
  `ChildRefUserID` varchar(512) NOT NULL,
  `ChildGender` varchar(5) NOT NULL,
  `ChildBirthDate` date NOT NULL,
  `ChildSpecialNeeds` tinyint(1) NOT NULL,
  `ChildSpecialNeedsDescription` text NOT NULL,
  `ChildIsCalm` tinyint(1) NOT NULL,
  `ChildIsQuiet` tinyint(1) NOT NULL,
  `ChildIsCreative` tinyint(1) NOT NULL,
  `ChildIsCurios` tinyint(1) NOT NULL,
  `ChildIsEnergetic` tinyint(1) NOT NULL,
  `ChildIsTalkative` tinyint(1) NOT NULL,
  `ChildIsSporty` tinyint(1) NOT NULL,
  `ChildIsFunny` tinyint(1) NOT NULL,
  `ChildIsStubborn` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbchildren`
--

INSERT INTO `tbchildren` (`id`, `ChildRefUserID`, `ChildGender`, `ChildBirthDate`, `ChildSpecialNeeds`, `ChildSpecialNeedsDescription`, `ChildIsCalm`, `ChildIsQuiet`, `ChildIsCreative`, `ChildIsCurios`, `ChildIsEnergetic`, `ChildIsTalkative`, `ChildIsSporty`, `ChildIsFunny`, `ChildIsStubborn`) VALUES
(1, '1', 'girl', '2013-09-13', 1, 'Good girl', 0, 0, 0, 0, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tboccupations`
--

CREATE TABLE `tboccupations` (
  `id` int(11) NOT NULL,
  `OccupationName` varchar(100) NOT NULL,
  `OccupationIsEmployed` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tboccupations`
--

INSERT INTO `tboccupations` (`id`, `OccupationName`, `OccupationIsEmployed`) VALUES
(1, 'In Highschool', '0'),
(2, 'Student', '0'),
(3, 'Employee', '0'),
(4, 'Unemployed', '0'),
(5, 'Stay-at-home mom/dad', '0'),
(6, 'Retired', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbpriceranges`
--

CREATE TABLE `tbpriceranges` (
  `RangeID` int(11) NOT NULL,
  `RangeName` varchar(100) NOT NULL,
  `RangeMin` int(11) NOT NULL,
  `RangeMax` int(11) NOT NULL,
  `RangeUndefined` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpriceranges`
--

INSERT INTO `tbpriceranges` (`RangeID`, `RangeName`, `RangeMin`, `RangeMax`, `RangeUndefined`) VALUES
(1, '<4', 0, 3, 0),
(2, '4-6', 4, 6, 0),
(3, '7-8', 7, 8, 0),
(4, '9-10', 9, 10, 0),
(5, '>10', 11, 99, 0),
(6, 'Negotiable', 0, 99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbreferences`
--

CREATE TABLE `tbreferences` (
  `id` int(11) NOT NULL,
  `ReferenceRefAdID` varchar(30) NOT NULL,
  `ReferenceDescription` varchar(512) NOT NULL,
  `ReferenceDocumentPath` varchar(515) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbreferences`
--

INSERT INTO `tbreferences` (`id`, `ReferenceRefAdID`, `ReferenceDescription`, `ReferenceDocumentPath`) VALUES
(1, '5', 'ddsd', 'uploads/doc/20210518013801.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbuserpersonaldata`
--

CREATE TABLE `tbuserpersonaldata` (
  `id` int(11) NOT NULL,
  `UserDataRefUserID` varchar(512) NOT NULL,
  `UserDataGender` varchar(6) NOT NULL,
  `UserDataBirthDate` date NOT NULL,
  `UserDataAddressCity` varchar(512) NOT NULL,
  `UserDataAddressStreet` varchar(512) NOT NULL,
  `UserDataAddressNumber` varchar(32) NOT NULL,
  `UserDataSelfDescription` text NOT NULL,
  `UserDataLanguage` varchar(5) NOT NULL,
  `UserDataFacebookVerified` varchar(1) NOT NULL,
  `UserDataProfileImagePath` varchar(512) NOT NULL,
  `UserDataProfileVideoSelfiePath` varchar(512) NOT NULL,
  `UserDataDescribeTags` text NOT NULL,
  `UserDataIsSmoker` varchar(1) NOT NULL,
  `UserDataRefOccupation` varchar(5) NOT NULL,
  `UserDataFirstAidCertificate` varchar(1) NOT NULL,
  `UserDataGoodbehaviourCertificate` varchar(1) NOT NULL,
  `UserDataDriversLicense` varchar(1) NOT NULL,
  `UserDataHaveACar` varchar(1) NOT NULL,
  `UserDataPediatricUnblocking` varchar(1) NOT NULL,
  `UserDataCriminalRecord` varchar(1) NOT NULL,
  `UserDataGoodAtTags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuserpersonaldata`
--

INSERT INTO `tbuserpersonaldata` (`id`, `UserDataRefUserID`, `UserDataGender`, `UserDataBirthDate`, `UserDataAddressCity`, `UserDataAddressStreet`, `UserDataAddressNumber`, `UserDataSelfDescription`, `UserDataLanguage`, `UserDataFacebookVerified`, `UserDataProfileImagePath`, `UserDataProfileVideoSelfiePath`, `UserDataDescribeTags`, `UserDataIsSmoker`, `UserDataRefOccupation`, `UserDataFirstAidCertificate`, `UserDataGoodbehaviourCertificate`, `UserDataDriversLicense`, `UserDataHaveACar`, `UserDataPediatricUnblocking`, `UserDataCriminalRecord`, `UserDataGoodAtTags`) VALUES
(1, '1', 'Female', '1984-06-12', 'canary', 'island', '25', 'Good and professional developer', 'sp-SP', '0', 'uploads/img/20210516073653.png', 'uploads/video/20210516073653.mp4', '', '', '', '', '', '', '', '', '', ''),
(2, '2', 'Female', '1991-02-19', 'ert', 'island', '23', 'df', 'it-IT', '0', 'uploads/img/20210517061951.jpg', 'uploads/video/20210517061951.mp4', 'Patient;Kind;Talkative', '1', '5', '1', '1', '1', '1', '1', '1', ';Arts & crafts;Music;Baking;Sports;Games;Storytelling & reading'),
(3, '3', 'Female', '1993-09-19', 'forlì', 'ss', '20', 'Good Client for Daniel', 'it-IT', '0', 'uploads/img/20210517100320.png', 'uploads/video/20210517100320.mp4', 'Patient;Funny;Talkative', '0', '3', '0', '0', '1', '1', '0', '0', ';Arts & crafts;Music;Sports'),
(4, '4', 'Female', '1990-10-20', 'canary', 'island', '22', 'dfs', 'fr-FR', '0', '', '', 'Kind', '1', '2', '0', '0', '1', '1', '0', '0', 'Storytelling & reading');

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `UserID` int(11) NOT NULL,
  `UserFirstName` varchar(100) NOT NULL,
  `UserLastName` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `UserPasswordHash` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`UserID`, `UserFirstName`, `UserLastName`, `email`, `UserPasswordHash`) VALUES
(1, 'Daniel', 'Ramos', 'daniel@test.com', '$2y$10$8R9s2uaRWsKZ83EdNeiP2OW..m/KZ6JzU6FGnwZ8a5yDRWueF/70S'),
(2, 'elisa', 'www', 'elisa@test.com', '$2y$10$4GBmdYOdT53xsHi8TAS1HeGF30viGBY9E4x/9XQYLoChJwnscE2Xe'),
(3, 'Elisa', 'Sasa', 'elisa@gmail.com', '$2y$10$3n6l7clQD1HsM/nZlSlU9eHwLN69hbF2UA651/WaMEit.PJenh.bO'),
(4, 'tess', 'test', 'superadmin@gmail.com', '$2y$10$593OJFHqwDRV1D50ZBgMNOSY4la8RbVxIGWUHF5qRhv/rbPx6inBW'),
(5, 'sd', 'as', 'JAMESJOHNSON1112020@outlook.com', '$2y$10$B0mNyCzegDhOUeXTqCJfSutsS5aCoHmcKkW2iUNMCZif/3RdMoQia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadditionallanguages`
--
ALTER TABLE `tbadditionallanguages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbads`
--
ALTER TABLE `tbads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbadsagerangeexperiences`
--
ALTER TABLE `tbadsagerangeexperiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbageranges`
--
ALTER TABLE `tbageranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbbabyexpec`
--
ALTER TABLE `tbbabyexpec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbchildren`
--
ALTER TABLE `tbchildren`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tboccupations`
--
ALTER TABLE `tboccupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpriceranges`
--
ALTER TABLE `tbpriceranges`
  ADD PRIMARY KEY (`RangeID`);

--
-- Indexes for table `tbreferences`
--
ALTER TABLE `tbreferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuserpersonaldata`
--
ALTER TABLE `tbuserpersonaldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadditionallanguages`
--
ALTER TABLE `tbadditionallanguages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbads`
--
ALTER TABLE `tbads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbadsagerangeexperiences`
--
ALTER TABLE `tbadsagerangeexperiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbageranges`
--
ALTER TABLE `tbageranges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbbabyexpec`
--
ALTER TABLE `tbbabyexpec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbchildren`
--
ALTER TABLE `tbchildren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tboccupations`
--
ALTER TABLE `tboccupations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbpriceranges`
--
ALTER TABLE `tbpriceranges`
  MODIFY `RangeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbreferences`
--
ALTER TABLE `tbreferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbuserpersonaldata`
--
ALTER TABLE `tbuserpersonaldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
