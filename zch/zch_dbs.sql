-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2026 at 09:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zch_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'zch-background', '', '{\"values\": [{\"value\": \"Teamwork\"}, {\"value\": \"Privacy\"}, {\"value\": \"Informed Consent\"}, {\"value\": \"Safety\"}, {\"value\": \"Integrity\"}, {\"value\": \"Reliability\"}, {\"value\": \"Equal Opportunities\"}, {\"value\": \"Confidentiality\"}, {\"value\": \"Veracity\"}, {\"value\": \"Infection Prevention\"}, {\"value\": \"Accountability\"}, {\"value\": \"Responsibility\"}], \"cta_text\": \"Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.\", \"cta_title\": \"Dedicated to Your Health & Well-being\", \"milestones\": [{\"icon\": \"fas fa-hospital\", \"year\": \"1930s\", \"title\": \"Hospital Established\", \"description\": \"Founded as a modest facility with 50 beds and basic medical services for the Zomba community.\"}, {\"icon\": \"fas fa-building\", \"year\": \"1950s\", \"title\": \"Major Expansion\", \"description\": \"Added a surgical wing and maternity department to meet growing regional healthcare demand.\"}, {\"icon\": \"fas fa-microscope\", \"year\": \"1980s\", \"title\": \"Modern Laboratory\", \"description\": \"Upgraded diagnostic facilities and laboratory equipment to support advanced clinical care.\"}, {\"icon\": \"fas fa-laptop-medical\", \"year\": \"2020s\", \"title\": \"Digital Transformation\", \"description\": \"Introduced electronic health records, telemedicine support, and modern hospital information systems.\"}], \"values_intro\": \"The principles that define our daily commitment to our patients and community.\", \"compass_items\": [{\"body\": \"To be a centre of excellence in the provision of tertiary health services using cutting-edge technology in the South Eastern Zone.\", \"icon\": \"fas fa-eye\", \"title\": \"Vision\"}, {\"body\": \"To provide specialised, quality tertiary healthcare services to patients and clients in the South Eastern Zone and beyond.\", \"icon\": \"fas fa-bullhorn\", \"title\": \"Mission\"}, {\"body\": \"Tertiary referral & teaching hospital responsible for specialised healthcare, emergency care, inpatient/outpatient services, medical training, research, and referral support to districts within the South Eastern Region of Malawi and beyond.\", \"icon\": \"fas fa-tasks\", \"title\": \"Mandate\"}], \"history_image\": \"images/about/1a.jpg\", \"training_image\": \"images/services/nu.jpg\", \"values_heading\": \"Core Values\", \"compass_heading\": \"Our Compass\", \"history_caption\": \"Early infrastructure of Zomba medical facilities foundation of care\", \"history_heading\": \"Our History & Legacy\", \"history_tagline\": \"Serving the Community Since 1930s.\", \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.services\", \"training_caption\": \"Nursing cohort, Zomba General Hospital - 1960s\", \"training_heading\": \"The Training School Legacy\", \"cta_button_1_text\": \"Get in Touch\", \"cta_button_2_text\": \"Our Services\", \"history_image_alt\": \"Zomba Central Hospital building\", \"milestones_heading\": \"Historic Milestones\", \"training_image_alt\": \"Nursing cohort, Zomba General Hospital - 1960s\", \"history_paragraph_1\": \"Zomba Central Hospital was established in the 1930s with a vision to provide quality healthcare services to the people of Zomba and surrounding districts. What started as a modest 50-bed facility has grown into a comprehensive healthcare institution serving thousands of patients every year.\", \"history_paragraph_2\": \"Over the decades, we have continued to evolve by adopting modern medical technologies and expanding our services to meet growing healthcare needs. Our commitment to excellence, compassion, and patient-centered care remains at the heart of everything we do.\", \"training_paragraph_1\": \"For generations, Zomba Central Hospital has been a cornerstone of health worker education in Malawi. Our training programmes have produced nurses, midwives, and clinical officers who serve communities across the country and beyond.\", \"training_paragraph_2\": \"Through partnerships with the Ministry of Health and academic institutions, we continue to strengthen practical training, mentorship, and professional development, ensuring that every cohort carries forward our standards of compassionate, competent care.\", \"history_highlight_text\": \"A referral centre and training hub supporting clinical education, specialist care, and national health priorities across Malawi.\", \"history_highlight_title\": \"Tertiary & Teaching Hospital:\"}', 1, '2026-06-14 01:13:48', '2026-06-14 01:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_pages`
--

CREATE TABLE `career_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_pages`
--

INSERT INTO `career_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Careers ', 'careers', NULL, '{\"archived\": [{\"file\": null, \"grade\": \"Grade L\", \"title\": \"Pharmacist - Q3 2025\", \"search\": \"pharmacist archived\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 41, \"publishDate\": \"2025-07-10\", \"archivedDate\": \"2025-10-01\"}, {\"file\": null, \"grade\": \"Grade K\", \"title\": \"Radiographer - Q2 2025\", \"search\": \"radiographer archived\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 38, \"publishDate\": \"2025-04-05\", \"archivedDate\": \"2025-08-15\"}], \"advertised\": [{\"file\": null, \"grade\": \"Grade M\", \"title\": \"Registered Nurse - Maternity Ward\", \"search\": \"nurse maternity ward registered\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 45, \"publishDate\": \"2026-06-15\", \"archivedDate\": null}, {\"file\": null, \"grade\": \"Grade L\", \"title\": \"Clinical Officer - Emergency Unit\", \"search\": \"clinical officer emergency\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 32, \"publishDate\": \"2026-06-10\", \"archivedDate\": null}, {\"file\": null, \"grade\": \"Grade K\", \"title\": \"Laboratory Technician\", \"search\": \"laboratory technician diagnostics\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 21, \"publishDate\": \"2026-05-28\", \"archivedDate\": null}], \"hero_title\": \"Career Opportunities at Zomba Central Hospital\", \"shortlisted\": [{\"file\": null, \"grade\": \"Grade M\", \"title\": \"Shortlisted - Registered Nurse (Dec 2025)\", \"search\": \"shortlisted nurse december\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 67, \"publishDate\": \"2025-12-20\", \"archivedDate\": null}], \"appointments\": [{\"file\": null, \"grade\": \"All Grades\", \"title\": \"Appointment Notice - New Staff Intake Q1 2026\", \"search\": \"appointment staff intake 2026\", \"file_url\": \"#\", \"location\": \"Zomba Central Hospital\", \"downloads\": 89, \"publishDate\": \"2026-01-15\", \"archivedDate\": null}], \"instructions\": [{\"file\": null, \"grade\": \"All Grades\", \"title\": \"Application Guidelines for Health Service Commission\", \"search\": \"application guidelines health service commission\", \"file_url\": \"#\", \"location\": \"National\", \"downloads\": 156, \"publishDate\": \"2026-01-01\", \"archivedDate\": null}], \"hero_description\": \"Explore current job openings, view shortlisted candidates, appointment notices, and access archived vacancies from the Health Service Commission.\"}', 1, '2026-07-21 06:09:06', '2026-07-21 15:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Surgical ', 'surgical', NULL, '{\"faqs\": [{\"answer\": \"Start at Outpatient or Emergency triage for assessment. You will then be directed to the appropriate specialist department.\", \"question\": \"Which Department Should I Visit First?\"}, {\"answer\": \"Some clinics accept direct visits, while others require referral from a clinician. Reception will guide you on arrival.\", \"question\": \"Do I Need A Referral For Specialist Clinics?\"}], \"hero_alt\": \"Surgical team\", \"hero_text\": \"Safe, specialist, and patient-centered surgical care delivered by experienced multidisciplinary teams.\", \"sub_units\": [{\"name\": \"Operating Theatre\", \"slug\": \"operating-theatre\", \"text\": \"Our Operating Theatre is a state-of-the-art surgical facility equipped with modern technology and staffed by experienced surgical teams to perform a wide range of operative procedures safely and efficiently.\", \"hours\": \"Monday - Friday: 7:00 AM - 6:00 PM<br>Saturday: 8:00 AM - 2:00 PM<br>Sunday: Emergency Surgeries Only\", \"image\": \"images/services/service-five.jpg\", \"title\": \"Operating Theatre - Overview\", \"units\": [{\"unit\": \"General Surgery\"}, {\"unit\": \"Orthopedic Surgery\"}, {\"unit\": \"ENT Surgery\"}, {\"unit\": \"Urology\"}, {\"unit\": \"Anesthesia & Recovery\"}], \"contact\": \"+265 (0) 1 526 266<br>theatre@zch@health.gov.mw\", \"summary\": \"The Surgical Department provides safe, specialized care across multiple units, including General Surgery, Orthopedics, ENT, and Urology. Our team works with modern theatre protocols and post-operative support to improve patient outcomes.\", \"hero_alt\": \"Operating theatre care team\", \"services\": [{\"service\": \"General Surgical Procedures\"}, {\"service\": \"Orthopedic Surgeries\"}, {\"service\": \"Gynecological Surgeries\"}, {\"service\": \"Urological Surgeries\"}, {\"service\": \"ENT Surgeries\"}, {\"service\": \"Ophthalmic Surgeries\"}, {\"service\": \"Emergency Surgeries\"}, {\"service\": \"Minimally Invasive Surgeries\"}, {\"service\": \"Anesthesia Services\"}, {\"service\": \"Post-Operative Recovery Care\"}, {\"service\": \"Sterilization & Infection Control\"}, {\"service\": \"Advanced Surgical Equipment\"}], \"hero_text\": \"Safe, specialist, and patient-centered surgical care delivered by experienced multidisciplinary teams.\", \"image_alt\": \"Operating theatre care team\", \"hero_image\": \"images/services/service-five.jpg\", \"hero_title\": \"Surgical Department\", \"units_title\": \"Units Under Surgical Department\"}, {\"name\": \"Urology\", \"slug\": \"urology\", \"text\": \"The Urology department specializes in diagnosing and treating conditions of the urinary tract and male reproductive system.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday & Public Holidays: Emergency Only\", \"image\": \"images/services/service-four.jpg\", \"title\": \"Urology - Overview\", \"units\": [{\"unit\": \"Urology Clinic\"}, {\"unit\": \"Minor Procedures\"}, {\"unit\": \"Follow-up Care\"}], \"contact\": \"+265 (0) 1 526 266<br>urology@zch@health.gov.mw\", \"summary\": \"Urology services focus on diagnosis, treatment, and follow-up for urinary tract and male reproductive health conditions.\", \"hero_alt\": \"Urology care services\", \"services\": [{\"service\": \"Kidney Stone Treatment\"}, {\"service\": \"Prostate Care\"}, {\"service\": \"Urinary Tract Infections\"}, {\"service\": \"Bladder Disorder Management\"}, {\"service\": \"Male Infertility Treatment\"}, {\"service\": \"Urological Surgery\"}, {\"service\": \"Cystoscopy Procedures\"}, {\"service\": \"Pediatric Urology\"}], \"hero_text\": \"Safe, specialist, and patient-centered surgical care delivered by experienced multidisciplinary teams.\", \"image_alt\": \"Urology care services\", \"hero_image\": \"images/services/service-four.jpg\", \"hero_title\": \"Surgical Department\", \"units_title\": \"Units Under Surgical Department\"}, {\"name\": \"Dental Care\", \"slug\": \"dental-care\", \"text\": \"Our Dental Care department provides comprehensive oral health services for patients of all ages.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday & Public Holidays: Emergency Only\", \"image\": \"images/services/service-three.jpg\", \"title\": \"Dental Care - Overview\", \"units\": [{\"unit\": \"Dental Clinic\"}, {\"unit\": \"Surgery Support\"}, {\"unit\": \"Pediatric Dentistry\"}], \"contact\": \"+265 (0) 1 526 266<br>dental@zch@health.gov.mw\", \"summary\": \"Dental services support oral health, preventive care, and essential treatment for patients of all ages.\", \"hero_alt\": \"Dental care services\", \"services\": [{\"service\": \"Routine Dental Checkups\"}, {\"service\": \"Tooth Extractions\"}, {\"service\": \"Root Canal Treatment\"}, {\"service\": \"Dental Surgery\"}, {\"service\": \"Teeth Cleaning & Whitening\"}, {\"service\": \"Orthodontics\"}, {\"service\": \"Pediatric Dentistry\"}, {\"service\": \"Emergency Dental Care\"}], \"hero_text\": \"Safe, specialist, and patient-centered surgical care delivered by experienced multidisciplinary teams.\", \"image_alt\": \"Dental care services\", \"hero_image\": \"images/services/service-three.jpg\", \"hero_title\": \"Surgical Department\", \"units_title\": \"Units Under Surgical Department\"}, {\"name\": \"Orthopedic\", \"slug\": \"orthopedic\", \"text\": \"The Orthopedic department provides surgical and non-surgical care for musculoskeletal conditions.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday & Public Holidays: Emergency Only\", \"image\": \"images/services/service-two.jpg\", \"title\": \"Orthopedic - Overview\", \"units\": [{\"unit\": \"Orthopedic Ward\"}, {\"unit\": \"Trauma Care\"}, {\"unit\": \"Physiotherapy Support\"}], \"contact\": \"+265 (0) 1 526 266<br>orthopedic@zch@health.gov.mw\", \"summary\": \"Orthopedic care focuses on bones, joints, muscles, and rehabilitation after trauma or surgery.\", \"hero_alt\": \"Orthopedic care services\", \"services\": [{\"service\": \"Fracture Treatment\"}, {\"service\": \"Joint Replacement Surgery\"}, {\"service\": \"Sports Injury Management\"}, {\"service\": \"Arthritis Treatment\"}, {\"service\": \"Spine Surgery\"}, {\"service\": \"Physiotherapy Services\"}, {\"service\": \"Pediatric Orthopedics\"}, {\"service\": \"Trauma Care\"}], \"hero_text\": \"Safe, specialist, and patient-centered surgical care delivered by experienced multidisciplinary teams.\", \"image_alt\": \"Orthopedic care services\", \"hero_image\": \"images/services/service-two.jpg\", \"hero_title\": \"Surgical Department\", \"units_title\": \"Units Under Surgical Department\"}, {\"name\": \"Surgery\", \"slug\": \"surgery\", \"text\": \"Our Surgery department performs various surgical procedures using modern techniques.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-one.jpg\", \"title\": \"Surgery - Overview\", \"units\": [{\"unit\": \"General Surgery\"}, {\"unit\": \"Operating Theatre\"}, {\"unit\": \"Recovery\"}], \"contact\": \"+265 (0) 1 526 266<br>surgery@zch@health.gov.mw\", \"summary\": \"Surgery services provide consultation, operation, and follow-up care across a wide range of procedures.\", \"hero_alt\": \"Surgery department services\", \"services\": [{\"service\": \"General Surgery\"}, {\"service\": \"Minimally Invasive Surgery\"}, {\"service\": \"Emergency Surgery\"}, {\"service\": \"Pre-Operative Assessment\"}, {\"service\": \"Post-Operative Care\"}, {\"service\": \"Surgical Consultation\"}, {\"service\": \"Wound Management\"}, {\"service\": \"Specialized Procedures\"}], \"hero_text\": \"Safe, specialist, and patient-centered surgical care delivered by experienced multidisciplinary teams.\", \"image_alt\": \"Surgery department services\", \"hero_image\": \"images/services/service-one.jpg\", \"hero_title\": \"Surgical Department\", \"units_title\": \"Units Under Surgical Department\"}], \"hero_image\": \"images/gallery/gallery-04.jpg\", \"hero_title\": \"Surgical Department\", \"page_title\": \"SURGICAL DEPARTMENT MALAWI\", \"hero_kicker\": \"Zomba Central Hospital\", \"overview_units\": [{\"unit\": \"General Surgery\"}, {\"unit\": \"Orthopedic Surgery\"}, {\"unit\": \"ENT Surgery\"}, {\"unit\": \"Urology\"}, {\"unit\": \"Anesthesia & Recovery\"}], \"sidebar_heading\": \"Surgical Department\", \"overview_heading\": \"Units Under Surgical Department\", \"overview_summary\": \"The Surgical Department provides safe, specialized care across multiple units, including General Surgery, Orthopedics, ENT, and Urology. Our team works with modern theatre protocols and post-operative support to improve patient outcomes.\"}', 1, 1, '2026-07-20 16:03:15', '2026-07-20 19:01:05'),
(2, 'Maternal & Child', 'maternal-child', NULL, '{\"faqs\": [{\"answer\": \"Book antenatal care as early as possible, ideally as soon as pregnancy is confirmed, so the team can monitor and support you properly.\", \"question\": \"When should I start antenatal care?\"}, {\"answer\": \"Bring your appointment card, previous notes, and any current medication list. Reception will guide you if it\'s your first visit.\", \"question\": \"What should I bring for a clinic visit?\"}], \"hero_alt\": \"Maternal and child care team\", \"hero_text\": \"Compassionate maternal, newborn, and child care from pregnancy through early childhood follow-up.\", \"sub_units\": [{\"name\": \"Antenatal Clinic\", \"slug\": \"antenatal\", \"text\": \"Antenatal services provide routine checkups, risk screening, and maternal education to support healthy pregnancies.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 12:00 PM<br>Sunday: Emergency Only\", \"image\": null, \"title\": \"Antenatal Clinic - Overview\", \"units\": [{\"unit\": \"Antenatal Clinic\"}, {\"unit\": \"Labour Ward\"}, {\"unit\": \"Maternity Ward\"}, {\"unit\": \"Postnatal Clinic\"}, {\"unit\": \"Nursery and Kangaroo Care\"}, {\"unit\": \"Pediatrics\"}, {\"unit\": \"Obs & Gynaecology\"}], \"contact\": \"+265 (0) 1 526 266<br>maternal@zch@health.gov.mw\", \"summary\": \"This department supports women, newborns, and children through the full continuum of care, from antenatal clinics to pediatric monitoring.\", \"hero_alt\": \"Maternal and child care team\", \"services\": [{\"service\": \"Routine Antenatal Visits\"}, {\"service\": \"Maternal Risk Screening\"}, {\"service\": \"Blood Pressure Monitoring\"}, {\"service\": \"Ultrasound Referral Support\"}, {\"service\": \"Nutrition and Counseling\"}, {\"service\": \"Birth Preparedness\"}, {\"service\": \"PMTCT Education\"}, {\"service\": \"Referral for High-Risk Pregnancies\"}], \"hero_text\": \"Compassionate maternal, newborn, and child care from pregnancy through early childhood follow-up.\", \"image_alt\": \"Antenatal clinic services\", \"hero_image\": \"images/services/mt1.jpg\", \"hero_title\": \"Maternal & Child Department\", \"units_title\": \"Units Under Maternal & Child Department\"}, {\"name\": \"Labour Ward\", \"slug\": \"labour-ward\", \"text\": \"The Labour Ward offers continuous monitoring and skilled delivery support, including emergency response for high-risk labor cases.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/gallery/gallery-04.jpg\", \"title\": \"Labour Ward - Overview\", \"units\": [{\"unit\": \"Delivery Room\"}, {\"unit\": \"Observation Area\"}, {\"unit\": \"Referral Support\"}], \"contact\": \"+265 (0) 1 526 266<br>labour@zch@health.gov.mw\", \"summary\": \"Labour ward care focuses on safe delivery, emergency obstetric response, and close maternal monitoring.\", \"hero_alt\": \"Labour ward support\", \"services\": [{\"service\": \"Labor Monitoring\"}, {\"service\": \"Emergency Delivery Support\"}, {\"service\": \"Fetal Assessment\"}, {\"service\": \"Maternal Observation\"}, {\"service\": \"Delivery Assistance\"}, {\"service\": \"Referral Coordination\"}], \"hero_text\": \"Compassionate maternal, newborn, and child care from pregnancy through early childhood follow-up.\", \"image_alt\": \"Labour ward support team\", \"hero_image\": \"images/services/mt.jpg\", \"hero_title\": \"Maternal & Child Department\", \"units_title\": \"Units Under Maternal & Child Department\"}, {\"name\": \"Maternity Ward\", \"slug\": \"maternity-ward\", \"text\": \"Our Maternity unit delivers comprehensive care from admission to discharge with focused support for mothers and newborns.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 12:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/gallery/gallery-01.jpg\", \"title\": \"Maternity Ward - Overview\", \"units\": [{\"unit\": \"Maternity Ward\"}, {\"unit\": \"Discharge Desk\"}, {\"unit\": \"Mother and Baby Follow-up\"}], \"contact\": \"+265 (0) 1 526 266<br>maternity@zch@health.gov.mw\", \"summary\": \"Maternity ward services ensure safe postpartum recovery and newborn transition support.\", \"hero_alt\": \"Maternity ward care\", \"services\": [{\"service\": \"Admission and Discharge Care\"}, {\"service\": \"Post-Delivery Monitoring\"}, {\"service\": \"Maternal Education\"}, {\"service\": \"Newborn Observation\"}, {\"service\": \"Breastfeeding Support\"}, {\"service\": \"Family Counseling\"}], \"hero_text\": \"Compassionate maternal, newborn, and child care from pregnancy through early childhood follow-up.\", \"image_alt\": \"Maternity care services\", \"hero_image\": \"images/services/mt.jpg\", \"hero_title\": \"Maternal & Child Department\", \"units_title\": \"Units Under Maternal & Child Department\"}, {\"name\": \"Postnatal Clinic\", \"slug\": \"postnatal\", \"text\": \"Postnatal care includes mother and baby follow-up, recovery monitoring, breastfeeding support, and counseling after delivery.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 12:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/gallery/gallery-02.jpg\", \"title\": \"Postnatal Clinic - Overview\", \"units\": [{\"unit\": \"Postnatal Clinic\"}, {\"unit\": \"Breastfeeding Support\"}, {\"unit\": \"Family Planning Support\"}], \"contact\": \"+265 (0) 1 526 266<br>postnatal@zch@health.gov.mw\", \"summary\": \"Postnatal care protects the health of mothers and newborns after delivery through follow-up and counseling.\", \"hero_alt\": \"Postnatal follow-up care\", \"services\": [{\"service\": \"Mother Follow-up Visits\"}, {\"service\": \"Baby Weight Checks\"}, {\"service\": \"Breastfeeding Support\"}, {\"service\": \"Post-Delivery Counseling\"}, {\"service\": \"Recovery Monitoring\"}, {\"service\": \"Family Planning Guidance\"}], \"hero_text\": \"Compassionate maternal, newborn, and child care from pregnancy through early childhood follow-up.\", \"image_alt\": \"Postnatal follow-up care\", \"hero_image\": \"images/gallery/gallery-02.jpg\", \"hero_title\": \"Maternal & Child Department\", \"units_title\": \"Units Under Maternal & Child Department\"}, {\"name\": \"Nursery & Kangaroo Care\", \"slug\": \"nursery-kangaroo\", \"text\": \"Kangaroo Care supports newborn stability through skin-to-skin contact, thermal regulation, feeding support, and close observation for low birth weight babies.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/kangroo.jpg\", \"title\": \"Nursery & Kangaroo Care - Overview\", \"units\": [{\"unit\": \"Nursery\"}, {\"unit\": \"Kangaroo Care\"}, {\"unit\": \"Newborn Observation\"}], \"contact\": \"+265 (0) 1 526 266<br>nursery@zch@health.gov.mw\", \"summary\": \"Nursery and kangaroo care provide essential early newborn support for babies requiring extra observation and warmth.\", \"hero_alt\": \"Kangaroo care support\", \"services\": [{\"service\": \"Skin-to-Skin Support\"}, {\"service\": \"Thermal Regulation\"}, {\"service\": \"Feeding Assistance\"}, {\"service\": \"Low Birth Weight Monitoring\"}, {\"service\": \"Newborn Observation\"}, {\"service\": \"Parent Education\"}], \"hero_text\": \"Compassionate maternal, newborn, and child care from pregnancy through early childhood follow-up.\", \"image_alt\": \"Kangaroo care support\", \"hero_image\": \"images/services/kangroo.jpg\", \"hero_title\": \"Maternal & Child Department\", \"units_title\": \"Units Under Maternal & Child Department\"}], \"hero_image\": \"images/services/mt1.jpg\", \"hero_title\": \"Maternal & Child Department\", \"page_title\": \"MATERNAL & CHILD DEPARTMENT\", \"hero_kicker\": \"Zomba Central Hospital\", \"overview_units\": [\"Anderson Department\", \"Yesan Mphiningo\", {\"unit\": \"Maternity Ward\"}, {\"unit\": \"Postnatal Clinic\"}, {\"unit\": \"Nursery and Kangaroo Care\"}, {\"unit\": \"Pediatrics\"}, {\"unit\": \"Obs & Gynaecology\"}, \"Andeoshuh\"], \"sidebar_heading\": \"Maternal & Child Department\", \"overview_heading\": \"Units Under Maternal & Child Department\", \"overview_summary\": \"This department supports women, newborns, and children through the full continuum of care, from antenatal clinics to pediatric monitoring.\"}', 1, 2, '2026-07-20 16:03:15', '2026-07-20 17:52:01'),
(3, 'Diagnostic', 'diagnostic', NULL, '{\"faqs\": [{\"answer\": \"Turnaround depends on the test type, but urgent results are prioritized and shared with the clinical team as soon as they are verified.\", \"question\": \"How long do test results take?\"}, {\"answer\": \"Most imaging services are accessed through a clinician\'s request. Reception will direct you to the correct unit on arrival.\", \"question\": \"Do I need a referral for imaging?\"}], \"hero_alt\": \"Diagnostic laboratory services\", \"hero_text\": \"Timely and accurate laboratory and imaging services that support safe clinical decision-making.\", \"sub_units\": [{\"name\": \"Laboratory\", \"slug\": \"laboratory\", \"text\": \"Laboratory services support diagnosis through timely testing, quality assurance, and reliable reporting for inpatient and outpatient care.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/1doctor-lab-3a.jpg\", \"title\": \"Laboratory - Overview\", \"units\": [{\"unit\": \"Laboratory\"}, {\"unit\": \"Radiology\"}, {\"unit\": \"Endoscopy\"}, {\"unit\": \"Sample Collection\"}, {\"unit\": \"Blood Bank Support\"}], \"contact\": \"+265 (0) 1 526 266<br>diagnostic@zch@health.gov.mw\", \"summary\": \"The Diagnostic Department delivers reliable test results and imaging services that guide timely clinical decisions and treatment planning.\", \"hero_alt\": \"Diagnostic laboratory services\", \"services\": [{\"service\": \"Clinical Chemistry\"}, {\"service\": \"Hematology\"}, {\"service\": \"Microbiology\"}, {\"service\": \"Sample Processing\"}, {\"service\": \"Result Verification\"}, {\"service\": \"Quality Control\"}, {\"service\": \"Emergency Test Support\"}, {\"service\": \"Referral Testing Coordination\"}], \"hero_text\": \"Timely and accurate laboratory and imaging services that support safe clinical decision-making.\", \"image_alt\": \"Laboratory diagnostic services\", \"hero_image\": \"images/services/1doctor-lab-3a.jpg\", \"hero_title\": \"Diagnostic Department\", \"units_title\": \"Units Under Diagnostic Department\"}, {\"name\": \"Radiology\", \"slug\": \"radiology\", \"text\": \"Radiology delivers imaging services to support clinical decisions, including routine scans and urgent diagnostic imaging.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-three.jpg\", \"title\": \"Radiology - Overview\", \"units\": [{\"unit\": \"X-ray\"}, {\"unit\": \"Ultrasound\"}, {\"unit\": \"Radiology Reporting\"}], \"contact\": \"+265 (0) 1 526 266<br>radiology@zch@health.gov.mw\", \"summary\": \"Radiology supports diagnosis and treatment planning through imaging that is reviewed and reported by the clinical team.\", \"hero_alt\": \"Radiology imaging services\", \"services\": [{\"service\": \"X-ray Imaging\"}, {\"service\": \"Ultrasound Services\"}, {\"service\": \"Radiology Reporting\"}, {\"service\": \"Urgent Imaging Support\"}, {\"service\": \"Referral Imaging Coordination\"}], \"hero_text\": \"Timely and accurate laboratory and imaging services that support safe clinical decision-making.\", \"image_alt\": \"Radiology imaging services\", \"hero_image\": \"images/services/doctor-lab-1a.jpg\", \"hero_title\": \"Diagnostic Department\", \"units_title\": \"Units Under Diagnostic Department\"}, {\"name\": \"Endoscopy\", \"slug\": \"endoscopy\", \"text\": \"Endoscopy services provide minimally invasive internal examinations for early detection, diagnosis, and guided intervention.\", \"hours\": \"Monday - Friday: 8:00 AM - 4:00 PM<br>Saturday: 8:00 AM - 12:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-fivea.jpg\", \"title\": \"Endoscopy - Overview\", \"units\": [{\"unit\": \"Endoscopy Suite\"}, {\"unit\": \"Recovery Observation\"}, {\"unit\": \"Referral Coordination\"}], \"contact\": \"+265 (0) 1 526 266<br>endoscopy@zch@health.gov.mw\", \"summary\": \"Endoscopy helps clinicians inspect internal structures and provide targeted interventions where required.\", \"hero_alt\": \"Endoscopy services\", \"services\": [{\"service\": \"Diagnostic Endoscopy\"}, {\"service\": \"Minimally Invasive Examination\"}, {\"service\": \"Procedure Preparation\"}, {\"service\": \"Specimen Support\"}, {\"service\": \"Post-Procedure Observation\"}], \"hero_text\": \"Timely and accurate laboratory and imaging services that support safe clinical decision-making.\", \"image_alt\": \"Endoscopy services\", \"hero_image\": \"images/services/service-fivea.jpg\", \"hero_title\": \"Diagnostic Department\", \"units_title\": \"Units Under Diagnostic Department\"}, {\"name\": \"Sample Collection\", \"slug\": \"sample-collection\", \"text\": \"Sample collection ensures proper patient identification, specimen handling, and transportation for dependable test results.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-one.jpg\", \"title\": \"Sample Collection - Overview\", \"units\": [{\"unit\": \"Collection Desk\"}, {\"unit\": \"Lab Reception\"}, {\"unit\": \"Transport Support\"}], \"contact\": \"+265 (0) 1 526 266<br>samples@zch@health.gov.mw\", \"summary\": \"Sample collection supports the rest of the department by ensuring specimens are collected and handled correctly.\", \"hero_alt\": \"Sample collection services\", \"services\": [{\"service\": \"Specimen Registration\"}, {\"service\": \"Blood Sample Collection\"}, {\"service\": \"Transport Preparation\"}, {\"service\": \"Patient Identification\"}, {\"service\": \"Quality Handling\"}], \"hero_text\": \"Timely and accurate laboratory and imaging services that support safe clinical decision-making.\", \"image_alt\": \"Sample collection services\", \"hero_image\": \"images/services/service-one.jpg\", \"hero_title\": \"Diagnostic Department\", \"units_title\": \"Units Under Diagnostic Department\"}, {\"name\": \"Blood Bank Support\", \"slug\": \"blood-bank\", \"text\": \"Blood bank support provides safe storage, testing coordination, and transfusion support for patients who need blood products.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/service-two.jpg\", \"title\": \"Blood Bank Support - Overview\", \"units\": [{\"unit\": \"Blood Bank\"}, {\"unit\": \"Transfusion Support\"}, {\"unit\": \"Emergency Coordination\"}], \"contact\": \"+265 (0) 1 526 266<br>bloodbank@zch@health.gov.mw\", \"summary\": \"Blood bank support ensures safe transfusion processes and emergency blood availability for patient care.\", \"hero_alt\": \"Blood bank support\", \"services\": [{\"service\": \"Blood Grouping\"}, {\"service\": \"Cross Matching\"}, {\"service\": \"Inventory Support\"}, {\"service\": \"Transfusion Coordination\"}, {\"service\": \"Emergency Supply Support\"}], \"hero_text\": \"Timely and accurate laboratory and imaging services that support safe clinical decision-making.\", \"image_alt\": \"Blood bank support\", \"hero_image\": \"images/services/service-two.jpg\", \"hero_title\": \"Diagnostic Department\", \"units_title\": \"Units Under Diagnostic Department\"}], \"hero_image\": \"images/services/1doctor-lab-3a.jpg\", \"hero_title\": \"Diagnostic Department\", \"page_title\": \"DIAGNOSTIC DEPARTMENT\", \"hero_kicker\": \"Zomba Central Hospital\", \"overview_units\": [{\"unit\": \"Laboratory\"}, {\"unit\": \"Radiology\"}, {\"unit\": \"Endoscopy\"}, {\"unit\": \"Sample Collection\"}, {\"unit\": \"Blood Bank Support\"}], \"sidebar_heading\": \"Diagnostic Department\", \"overview_heading\": \"Units Under Diagnostic Department\", \"overview_summary\": \"The Diagnostic Department delivers reliable test results and imaging services that guide timely clinical decisions and treatment planning.\"}', 1, 3, '2026-07-20 16:03:15', '2026-07-20 17:20:28'),
(4, 'Emergency', 'emergency', NULL, '{\"faqs\": [{\"answer\": \"Come immediately for chest pain, severe bleeding, breathing difficulty, loss of consciousness, major trauma, or any life-threatening condition.\", \"question\": \"When should I come to the emergency department?\"}, {\"answer\": \"After triage, patients are directed to resuscitation, observation, minor theatre, ICU coordination, or specialist referral depending on severity.\", \"question\": \"What happens after triage?\"}], \"hero_alt\": \"Emergency response team\", \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"sub_units\": [{\"name\": \"Triage Unit\", \"slug\": \"triage\", \"text\": \"Immediate triage and life-saving interventions help stabilize patients quickly and route them to the right level of care.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/1sliderslider-bg-1a.jpg\", \"title\": \"Triage Unit - Overview\", \"units\": [{\"unit\": \"Triage Unit\"}, {\"unit\": \"Resuscitation Area\"}, {\"unit\": \"Observation Beds\"}, {\"unit\": \"Emergency Minor Theatre\"}, {\"unit\": \"ICU Coordination\"}, {\"unit\": \"Ambulance and Referral Desk\"}], \"contact\": \"+265 (0) 1 526 266<br>emergency@zch@health.gov.mw\", \"summary\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"hero_alt\": \"Emergency response team\", \"services\": [{\"service\": \"Immediate Triage Assessment\"}, {\"service\": \"Life-Saving Interventions\"}, {\"service\": \"Vital Signs Monitoring\"}, {\"service\": \"Rapid Patient Prioritization\"}, {\"service\": \"Referral to Specialist Care\"}, {\"service\": \"Emergency Communication Support\"}, {\"service\": \"Acute Stabilization\"}, {\"service\": \"Family Update Coordination\"}], \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"image_alt\": \"Emergency triage services\", \"hero_image\": \"images/services/1sliderslider-bg-1a.jpg\", \"hero_title\": \"Emergency Department\", \"units_title\": \"Units Under Emergency Department\"}, {\"name\": \"Resuscitation Area\", \"slug\": \"resuscitation\", \"text\": \"The resuscitation area is equipped for immediate stabilization of critically ill patients requiring urgent intervention.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/service-two.jpg\", \"title\": \"Resuscitation Area - Overview\", \"units\": [{\"unit\": \"Resuscitation Bay\"}, {\"unit\": \"Critical Monitoring\"}, {\"unit\": \"Referral Support\"}], \"contact\": \"+265 (0) 1 526 266<br>resuscitation@zch@health.gov.mw\", \"summary\": \"The resuscitation area stabilizes the most critical patients before transfer to ICU, theatre, or another ward.\", \"hero_alt\": \"Emergency resuscitation care\", \"services\": [{\"service\": \"Airway Support\"}, {\"service\": \"Breathing Support\"}, {\"service\": \"Circulation Support\"}, {\"service\": \"Shock Management\"}, {\"service\": \"Urgent Procedures\"}, {\"service\": \"Critical Monitoring\"}], \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"image_alt\": \"Resuscitation care services\", \"hero_image\": \"images/services/service-two.jpg\", \"hero_title\": \"Emergency Department\", \"units_title\": \"Units Under Emergency Department\"}, {\"name\": \"Observation Beds\", \"slug\": \"observation\", \"text\": \"Observation beds provide short-term monitoring for patients who need continued review before discharge or admission.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/service-one1.jpg\", \"title\": \"Observation Beds - Overview\", \"units\": [{\"unit\": \"Observation Ward\"}, {\"unit\": \"Monitoring Desk\"}, {\"unit\": \"Discharge Review\"}], \"contact\": \"+265 (0) 1 526 266<br>observation@zch@health.gov.mw\", \"summary\": \"Observation beds are used for patients who require ongoing review but do not yet need full admission.\", \"hero_alt\": \"Observation beds\", \"services\": [{\"service\": \"Short-Term Monitoring\"}, {\"service\": \"Repeat Vital Signs\"}, {\"service\": \"Pain Control\"}, {\"service\": \"Treatment Review\"}, {\"service\": \"Discharge Preparation\"}], \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"image_alt\": \"Observation bed services\", \"hero_image\": \"images/services/service-one1.jpg\", \"hero_title\": \"Emergency Department\", \"units_title\": \"Units Under Emergency Department\"}, {\"name\": \"Emergency Minor Theatre\", \"slug\": \"minor-theatre\", \"text\": \"The emergency minor theatre handles urgent procedures that can be completed safely without full theatre admission.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/service-five.jpg\", \"title\": \"Emergency Minor Theatre - Overview\", \"units\": [{\"unit\": \"Minor Theatre\"}, {\"unit\": \"Procedure Support\"}, {\"unit\": \"Sterile Preparation\"}], \"contact\": \"+265 (0) 1 526 266<br>minor.theatre@zch@health.gov.mw\", \"summary\": \"The minor theatre supports urgent procedures and reduces delays for emergency patients requiring prompt intervention.\", \"hero_alt\": \"Emergency minor theatre\", \"services\": [{\"service\": \"Minor Surgical Procedures\"}, {\"service\": \"Wound Suturing\"}, {\"service\": \"Dressing and Cleaning\"}, {\"service\": \"Urgent Procedure Support\"}, {\"service\": \"Procedure Prep\"}], \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"image_alt\": \"Emergency minor theatre services\", \"hero_image\": \"images/services/service-five.jpg\", \"hero_title\": \"Emergency Department\", \"units_title\": \"Units Under Emergency Department\"}, {\"name\": \"ICU Coordination\", \"slug\": \"icu\", \"text\": \"ICU coordination links emergency patients with critical care teams when advanced monitoring and support are required.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/service-two1a.jpg\", \"title\": \"ICU Coordination - Overview\", \"units\": [{\"unit\": \"ICU Coordination Desk\"}, {\"unit\": \"Critical Care Handover\"}, {\"unit\": \"Transport Support\"}], \"contact\": \"+265 (0) 1 526 266<br>icu@zch@health.gov.mw\", \"summary\": \"ICU coordination ensures seamless transfer of critically ill patients into advanced care settings.\", \"hero_alt\": \"ICU coordination\", \"services\": [{\"service\": \"Critical Care Referral\"}, {\"service\": \"Intensive Monitoring\"}, {\"service\": \"Bed Coordination\"}, {\"service\": \"Ventilation Support Referral\"}, {\"service\": \"Specialist Handover\"}], \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"image_alt\": \"ICU coordination services\", \"hero_image\": \"images/services/service-two1a.jpg\", \"hero_title\": \"Emergency Department\", \"units_title\": \"Units Under Emergency Department\"}, {\"name\": \"Ambulance & Referral Desk\", \"slug\": \"referral-desk\", \"text\": \"The referral desk coordinates incoming ambulance cases, outbound transfers, and links patients to specialist services.\", \"hours\": \"24 Hours Daily\", \"image\": \"images/services/1doctor-lab-3a.jpg\", \"title\": \"Ambulance & Referral Desk - Overview\", \"units\": [{\"unit\": \"Referral Desk\"}, {\"unit\": \"Ambulance Support\"}, {\"unit\": \"Transfer Coordination\"}], \"contact\": \"+265 (0) 1 526 266<br>referrals@zch@health.gov.mw\", \"summary\": \"The referral desk manages transfers into and out of the emergency department and keeps the patient flow moving.\", \"hero_alt\": \"Ambulance and referral desk\", \"services\": [{\"service\": \"Ambulance Coordination\"}, {\"service\": \"Patient Transfer\"}, {\"service\": \"Referral Handling\"}, {\"service\": \"Call Logging\"}, {\"service\": \"Specialist Handover\"}], \"hero_text\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\", \"image_alt\": \"Ambulance and referral desk\", \"hero_image\": \"images/services/1doctor-lab-3a.jpg\", \"hero_title\": \"Emergency Department\", \"units_title\": \"Units Under Emergency Department\"}], \"hero_image\": \"images/services/1sliderslider-bg-1a.jpg\", \"hero_title\": \"Emergency Department\", \"page_title\": \"EMERGENCY DEPARTMENT\", \"hero_kicker\": \"Zomba Central Hospital\", \"overview_units\": [{\"unit\": \"Triage Unit\"}, {\"unit\": \"Resuscitation Area\"}, {\"unit\": \"Observation Beds\"}, {\"unit\": \"Emergency Minor Theatre\"}, {\"unit\": \"ICU Coordination\"}, {\"unit\": \"Ambulance and Referral Desk\"}], \"sidebar_heading\": \"Emergency Department\", \"overview_heading\": \"Units Under Emergency Department\", \"overview_summary\": \"The Emergency Department operates 24/7 for trauma, acute illness, and urgent stabilization, with fast triage and specialist referral pathways.\"}', 1, 4, '2026-07-20 16:03:15', '2026-07-20 17:20:52'),
(5, 'Medical', 'medical', NULL, '{\"faqs\": [{\"answer\": \"General medicine handles a wide range of adult illnesses, including infections, chronic disease follow-up, and referral coordination when specialist care is needed.\", \"question\": \"What conditions are handled in general medicine?\"}, {\"answer\": \"Some clinics may require referral or an initial review in general medicine. Reception will guide you to the correct unit.\", \"question\": \"Can I visit the specialist clinics directly?\"}], \"hero_alt\": \"Medical department clinical care\", \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"sub_units\": [{\"name\": \"General Medicine\", \"slug\": \"general-medicine\", \"text\": \"General Medicine provides broad adult medical care for acute and chronic illness with coordinated specialist referrals when needed.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-one.jpg\", \"title\": \"General Medicine - Overview\", \"units\": [{\"unit\": \"Internal Medicine\"}, {\"unit\": \"Cardiology\"}, {\"unit\": \"Neurology\"}, {\"unit\": \"TB & Respiratory Clinic\"}, {\"unit\": \"Eye Clinic\"}, {\"unit\": \"Skin Clinic\"}, {\"unit\": \"Physiotherapy\"}, {\"unit\": \"Pharmacy\"}, {\"unit\": \"Palliative Care\"}], \"contact\": \"+265 (0) 1 526 266<br>medical@zch@health.gov.mw\", \"summary\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"hero_alt\": \"Medical department clinical care\", \"services\": [{\"service\": \"Acute Medical Assessment\"}, {\"service\": \"Chronic Disease Follow-up\"}, {\"service\": \"Inpatient Ward Reviews\"}, {\"service\": \"Outpatient Consultations\"}, {\"service\": \"Referral Coordination\"}, {\"service\": \"Medication Review\"}, {\"service\": \"Discharge Planning\"}, {\"service\": \"Patient Education\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"General medicine services\", \"hero_image\": \"images/services/service-one.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Cardiology\", \"slug\": \"cardiology\", \"text\": \"Cardiology services support heart health through risk evaluation, clinical management, and ongoing monitoring of cardiac conditions.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-one.jpg\", \"title\": \"Cardiology - Overview\", \"units\": [{\"unit\": \"Cardiology Clinic\"}, {\"unit\": \"Cardiac Follow-up\"}, {\"unit\": \"Referral Support\"}], \"contact\": \"+265 (0) 1 526 266<br>cardiology@zch@health.gov.mw\", \"summary\": \"Cardiology manages heart-related illnesses and supports follow-up care for patients with cardiovascular conditions.\", \"hero_alt\": \"Cardiology care services\", \"services\": [{\"service\": \"Heart Risk Assessment\"}, {\"service\": \"Blood Pressure Monitoring\"}, {\"service\": \"Cardiac Follow-up\"}, {\"service\": \"Referral for Specialist Review\"}, {\"service\": \"Medication Counseling\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Cardiology services\", \"hero_image\": \"images/services/service-one.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Neurology\", \"slug\": \"neurology\", \"text\": \"Neurology services assess and manage disorders of the brain, spinal cord, and nerves through specialist consultation and follow-up.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-one1.jpg\", \"title\": \"Neurology - Overview\", \"units\": [{\"unit\": \"Neurology Clinic\"}, {\"unit\": \"Stroke Follow-up\"}, {\"unit\": \"Seizure Review\"}], \"contact\": \"+265 (0) 1 526 266<br>neurology@zch@health.gov.mw\", \"summary\": \"Neurology services help diagnose and manage disorders of the nervous system with specialist follow-up.\", \"hero_alt\": \"Neurology care services\", \"services\": [{\"service\": \"Neurological Assessment\"}, {\"service\": \"Stroke Follow-up\"}, {\"service\": \"Seizure Management\"}, {\"service\": \"Nerve Disorder Review\"}, {\"service\": \"Referral Coordination\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Neurology care services\", \"hero_image\": \"images/services/service-one1.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"TB & Respiratory Clinic\", \"slug\": \"tb-respiratory\", \"text\": \"TB and Respiratory services focus on screening, treatment, and follow-up for pulmonary infections and chronic breathing disorders.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-one.jpg\", \"title\": \"TB & Respiratory Clinic - Overview\", \"units\": [{\"unit\": \"TB Clinic\"}, {\"unit\": \"Respiratory Clinic\"}, {\"unit\": \"Medication Follow-up\"}], \"contact\": \"+265 (0) 1 526 266<br>tb@zch@health.gov.mw\", \"summary\": \"TB and respiratory care supports diagnosis, treatment, and follow-up for breathing and pulmonary conditions.\", \"hero_alt\": \"TB and respiratory clinic\", \"services\": [{\"service\": \"TB Screening\"}, {\"service\": \"Respiratory Assessment\"}, {\"service\": \"Medication Follow-up\"}, {\"service\": \"Patient Counseling\"}, {\"service\": \"Referral Support\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"TB and respiratory care services\", \"hero_image\": \"images/services/service-one.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Skin Clinic\", \"slug\": \"skin-clinic\", \"text\": \"The Skin Clinic provides diagnosis and treatment for common and complex dermatological conditions with outpatient follow-up.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-three1a.jpg\", \"title\": \"Skin Clinic - Overview\", \"units\": [{\"unit\": \"Skin Clinic\"}, {\"unit\": \"Outpatient Review\"}, {\"unit\": \"Referral Support\"}], \"contact\": \"+265 (0) 1 526 266<br>skin@zch@health.gov.mw\", \"summary\": \"Skin clinic services provide outpatient diagnosis and treatment for skin-related conditions.\", \"hero_alt\": \"Skin clinic services\", \"services\": [{\"service\": \"Dermatology Consultations\"}, {\"service\": \"Skin Condition Treatment\"}, {\"service\": \"Follow-up Review\"}, {\"service\": \"Patient Education\"}, {\"service\": \"Referral Coordination\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Skin clinic services\", \"hero_image\": \"images/services/service-three1a.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Eye Clinic\", \"slug\": \"eye-clinic\", \"text\": \"Eye Clinic services include routine visual assessment, treatment of eye conditions, and referral for specialist procedures when needed.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-three.jpg\", \"title\": \"Eye Clinic - Overview\", \"units\": [{\"unit\": \"Eye Clinic\"}, {\"unit\": \"Visual Assessment\"}, {\"unit\": \"Referral Support\"}], \"contact\": \"+265 (0) 1 526 266<br>eye@zch@health.gov.mw\", \"summary\": \"The Eye Clinic supports visual health through assessment, treatment, and appropriate referral.\", \"hero_alt\": \"Eye clinic services\", \"services\": [{\"service\": \"Visual Assessment\"}, {\"service\": \"Eye Condition Treatment\"}, {\"service\": \"Glasses/Referral Advice\"}, {\"service\": \"Patient Follow-up\"}, {\"service\": \"Specialist Referral\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Eye clinic care\", \"hero_image\": \"images/services/service-three.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Physiotherapy\", \"slug\": \"physiotherapy\", \"text\": \"Physiotherapy supports rehabilitation, mobility restoration, and pain reduction after surgery, injury, or chronic illness.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-two.jpg\", \"title\": \"Physiotherapy - Overview\", \"units\": [{\"unit\": \"Physiotherapy Clinic\"}, {\"unit\": \"Rehabilitation Support\"}, {\"unit\": \"Mobility Follow-up\"}], \"contact\": \"+265 (0) 1 526 266<br>physio@zch@health.gov.mw\", \"summary\": \"Physiotherapy helps restore movement and reduce pain for patients recovering from injury, illness, or surgery.\", \"hero_alt\": \"Physiotherapy services\", \"services\": [{\"service\": \"Mobility Rehabilitation\"}, {\"service\": \"Pain Reduction\"}, {\"service\": \"Exercise Therapy\"}, {\"service\": \"Post-Surgery Recovery\"}, {\"service\": \"Injury Support\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Physiotherapy rehabilitation\", \"hero_image\": \"images/services/service-two.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Pharmacy\", \"slug\": \"pharmacy\", \"text\": \"Pharmacy services ensure safe dispensing, medication counseling, and treatment support aligned with clinical care plans.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": null, \"title\": \"Pharmacy - Overview\", \"units\": [{\"unit\": \"Pharmacy Counter\"}, {\"unit\": \"Dispensing Desk\"}, {\"unit\": \"Medication Counseling\"}], \"contact\": \"+265 (0) 1 526 266<br>pharmacy@zch@health.gov.mw\", \"summary\": \"Pharmacy ensures patients receive the right medications with safe counseling and treatment support.\", \"hero_alt\": \"Hospital pharmacy services\", \"services\": [{\"service\": \"Safe Dispensing\"}, {\"service\": \"Medication Counseling\"}, {\"service\": \"Prescription Review\"}, {\"service\": \"Stock Support\"}, {\"service\": \"Patient Education\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Hospital pharmacy services\", \"hero_image\": null, \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}, {\"name\": \"Palliative Care\", \"slug\": \"palliative-care\", \"text\": \"Palliative Care improves quality of life through pain relief, symptom management, and psychosocial support for patients and families.\", \"hours\": \"Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM<br>Sunday: Emergency Only\", \"image\": \"images/services/service-five.jpg\", \"title\": \"Palliative Care - Overview\", \"units\": [{\"unit\": \"Palliative Care Team\"}, {\"unit\": \"Symptom Support\"}, {\"unit\": \"Counseling Desk\"}], \"contact\": \"+265 (0) 1 526 266<br>palliative@zch@health.gov.mw\", \"summary\": \"Palliative care supports quality of life through compassionate symptom control and family-centered care.\", \"hero_alt\": \"Palliative care support\", \"services\": [{\"service\": \"Pain Relief\"}, {\"service\": \"Symptom Management\"}, {\"service\": \"Family Counseling\"}, {\"service\": \"Psychosocial Support\"}, {\"service\": \"End-of-Life Care\"}], \"hero_text\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\", \"image_alt\": \"Palliative care support\", \"hero_image\": \"images/services/service-five.jpg\", \"hero_title\": \"Medical Department\", \"units_title\": \"Units Under Medical Department\"}], \"hero_image\": \"images/services/service-one.jpg\", \"hero_title\": \"Medical Department\", \"page_title\": \"MEDICAL DEPARTMENT\", \"hero_kicker\": \"Zomba Central Hospital\", \"overview_units\": [{\"unit\": \"Internal Medicine\"}, {\"unit\": \"Cardiology\"}, {\"unit\": \"Neurology\"}, {\"unit\": \"TB & Respiratory Clinic\"}, {\"unit\": \"Eye Clinic\"}, {\"unit\": \"Skin Clinic\"}, {\"unit\": \"Physiotherapy\"}, {\"unit\": \"Pharmacy\"}, {\"unit\": \"Palliative Care\"}], \"sidebar_heading\": \"Medical Department\", \"overview_heading\": \"Units Under Medical Department\", \"overview_summary\": \"The Medical Department provides inpatient and outpatient care for acute and chronic conditions, supported by specialist clinics and multidisciplinary teams.\"}', 1, 5, '2026-07-20 16:03:15', '2026-07-20 17:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `downloads_pages`
--

CREATE TABLE `downloads_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads_pages`
--

INSERT INTO `downloads_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Downloads', 'downloads', NULL, '{\"documents\": [{\"date\": \"2026-04-12\", \"file\": null, \"type\": \"Form\", \"title\": \"Patient Registration Form\", \"category\": \"forms\", \"file_url\": \"#\", \"description\": \"Printable form for outpatient and inpatient registration.\"}, {\"date\": \"2026-03-02\", \"file\": null, \"type\": \"Guide\", \"title\": \"Visiting Hours Guide\", \"category\": \"guides\", \"file_url\": \"#\", \"description\": \"Updated visitor access policy and ward-specific hours.\"}, {\"date\": \"2026-02-16\", \"file\": null, \"type\": \"Patient Info\", \"title\": \"Maternal Care Information Pack\", \"category\": \"patient-info\", \"file_url\": \"#\", \"description\": \"Information for antenatal, delivery, and postnatal care pathways.\"}, {\"date\": \"2026-01-25\", \"file\": null, \"type\": \"Form\", \"title\": \"Laboratory Request Form\", \"category\": \"forms\", \"file_url\": \"#\", \"description\": \"Standard request form for laboratory and diagnostics services.\"}, {\"date\": \"2025-12-10\", \"file\": null, \"type\": \"Policy\", \"title\": \"Infection Prevention Policy\", \"category\": \"policies\", \"file_url\": \"#\", \"description\": \"Hospital policy on hygiene, PPE, and infection control protocols.\"}, {\"date\": \"2025-11-08\", \"file\": null, \"type\": \"Guide\", \"title\": \"Emergency Preparedness Checklist\", \"category\": \"guides\", \"file_url\": \"#\", \"description\": \"Preparedness checklist for emergency response and referrals.\"}], \"hero_text\": \"Find official forms, service guides, policy documents, and patient information resources.\", \"categories\": [{\"id\": \"all\", \"name\": \"All Documents\", \"description\": \"Browse all available downloadable resources below.\"}, {\"id\": \"forms\", \"name\": \"Forms\", \"description\": \"Official forms used across departments and services.\"}, {\"id\": \"guides\", \"name\": \"Service Guides\", \"description\": \"Patient and service process guides for quick reference.\"}, {\"id\": \"policies\", \"name\": \"Policies\", \"description\": \"Policy documents and official operating standards.\"}, {\"id\": \"patient-info\", \"name\": \"Patient Information\", \"description\": \"Educational resources for patients and guardians.\"}], \"hero_title\": \"Downloads Library\"}', 1, '2026-07-20 23:44:37', '2026-07-21 00:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `events_pages`
--

CREATE TABLE `events_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events_pages`
--

INSERT INTO `events_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Events Calendar', 'events', NULL, '{\"events\": [{\"date\": \"2026-01-10\", \"type\": \"Planning\", \"image\": \"images/gallery/gallery-04a1.jpg\", \"title\": \"New Year Health Planning \", \"venue\": \"Main Board Room\", \"image_alt\": \"New Year Health Planning\", \"description\": \"Annual planning for service readiness, departmental priorities, and hospital performance targets.\"}, {\"date\": \"2026-03-18\", \"type\": \"Outreach\", \"image\": \"images/services/nu.jpg\", \"title\": \"Maternal & Child Outreach Day\", \"venue\": \"Maternity Wing\", \"image_alt\": \"Maternal & Child Outreach Day\", \"description\": \"Community maternal and newborn health awareness, education, and referral support activities.\"}, {\"date\": \"2026-05-22\", \"type\": \"Clinic\", \"image\": \"images/services/service-three.jpg\", \"title\": \"Diagnostic Open Clinic\", \"venue\": \"Diagnostics Block\", \"image_alt\": \"Diagnostic Open Clinic\", \"description\": \"Public diagnostic screening, guidance, and counselling support for patients and families.\"}, {\"date\": \"2026-07-09\", \"type\": \"Training\", \"image\": \"images/facilities/ambulance.jpg\", \"title\": \"Emergency Simulation Drill\", \"venue\": \"Emergency Unit\", \"image_alt\": \"Emergency Simulation Drill\", \"description\": \"Emergency and ICU rapid response drill involving multidisciplinary teams and readiness checks.\"}, {\"date\": \"2026-10-16\", \"type\": \"Conference\", \"image\": \"images/services/service-one1.jpg\", \"title\": \"Medical Review Conference\", \"venue\": \"Conference Hall\", \"image_alt\": \"Medical Review Conference\", \"description\": \"A medical case review and care quality improvement session for clinical teams and department leads.\"}], \"cta_text\": \"Contact the hospital for official information on upcoming outreach activities, clinics, awareness events, and public health engagements.\", \"cta_title\": \"Need details on a hospital programme or campaign?\", \"hero_text\": \"Track outreach campaigns, specialist clinics, awareness drives, and staff development events across the year.\", \"hero_title\": \"Hospital Events & Public Health Calendar\", \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.news\", \"cta_button_1_text\": \"Contact Us\", \"cta_button_2_text\": \"Latest News\"}', 1, '2026-07-20 23:44:38', '2026-07-21 00:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Our Facilities', 'our-facilities', '', '{\"eyebrow\": \"Zomba Central Hospital\", \"checklist\": [{\"item\": \"Safe and supportive inpatient spaces\"}, {\"item\": \"Rapid emergency and diagnostic access\"}, {\"item\": \"Visitor-friendly convenience features\"}], \"hero_text\": \"Our facilities support safe, efficient, and compassionate healthcare delivery. From emergency response and diagnostic services to patient wards and visitor amenities, each space is built to improve the care experience for patients, guardians, and staff.\", \"facilities\": [{\"tag\": \"Patient Care\", \"icon\": \"fas fa-bed\", \"image\": \"images/facilities/wads.jpg\", \"title\": \"Modern Wards\", \"description\": \"Comfortable inpatient wards designed for safe recovery, attentive nursing support, and dignified care.\"}, {\"tag\": \"24/7 Response\", \"icon\": \"fas fa-ambulance\", \"image\": \"images/facilities/ambulance.jpg\", \"title\": \"Emergency Services\", \"description\": \"Round-the-clock emergency care with rapid triage, dedicated teams, and essential lifesaving equipment.\"}, {\"tag\": \"Diagnostics\", \"icon\": \"fas fa-x-ray\", \"image\": \"images/facilities/theater.jpg\", \"title\": \"Advanced Imaging\", \"description\": \"Imaging support that helps clinicians make timely, accurate decisions for treatment and follow-up care.\"}, {\"tag\": \"Testing\", \"icon\": \"fas fa-flask\", \"image\": \"images/facilities/lab.jpg\", \"title\": \"Laboratory\", \"description\": \"A dependable diagnostic laboratory focused on accurate results, efficient processing, and patient safety.\"}, {\"tag\": \"Convenience\", \"icon\": \"fas fa-parking\", \"image\": \"images/facilities/packing.jpg\", \"title\": \"Parking Facility\", \"description\": \"Accessible parking spaces that make hospital visits easier for patients, guardians, and other visitors.\"}, {\"tag\": \"Connected\", \"icon\": \"fas fa-wifi\", \"image\": \"images/facilities/Free-wifi.png\", \"title\": \"Free WiFi\", \"description\": \"Complimentary internet access in key public areas to support communication, updates, and convenience.\"}], \"highlights\": [{\"label\": \"Emergency Support\", \"value\": \"24/7\"}, {\"label\": \"Core Patient Facilities\", \"value\": \"6+\"}, {\"label\": \"Care Environment\", \"value\": \"Safe\"}], \"panel_text\": \"Clean environments, accessible support areas, responsive service points, and essential amenities that help make every hospital visit more reassuring.\", \"hero_heading\": \"Designed for quality care, comfort, and confidence.\", \"summary_text\": \"Zomba Central Hospital continues to improve its care environment so that patients receive timely support, staff work effectively, and visitors can navigate the hospital with greater ease.\", \"panel_heading\": \"What patients and visitors can expect\", \"section_intro\": \"Every area is planned to strengthen patient safety, improve workflow for healthcare teams, and create a more welcoming experience across the hospital campus.\", \"section_heading\": \"Essential facilities that support better care\", \"summary_heading\": \"Built to serve the community with dignity and efficiency\", \"summary_button_url\": \"frontend.contact\", \"summary_button_text\": \"Contact The Hospital\"}', 1, '2026-06-14 01:13:48', '2026-06-14 01:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Frequently Asked Questions', 'faq', '', '{\"items\": [{\"answer\": \"Zomba Central Hospital provides specialised and general healthcare services including emergency care, surgery, maternity services, paediatrics, orthopaedic care, laboratory services, radiology, outpatient services, and inpatient care.\", \"question\": \"What services does Zomba Central Hospital provide?\"}, {\"answer\": \"Zomba Central Hospital is located in Zomba City, Malawi, serving patients from the Eastern Region and surrounding districts.\", \"question\": \"Where is Zomba Central Hospital located?\"}, {\"answer\": \"Yes. The hospital provides 24/7 emergency and critical healthcare services, including ambulance and emergency response support.\", \"question\": \"Does the hospital operate 24 hours a day?\"}, {\"answer\": \"Patients and visitors can contact the hospital through the official phone numbers, email addresses, or by visiting the hospital administration offices during working hours.\", \"question\": \"How can I contact Zomba Central Hospital?\"}, {\"answer\": \"Yes. Zomba Central Hospital provides emergency ambulance and patient transfer services for urgent medical cases and referrals.\", \"question\": \"Does the hospital provide ambulance services?\"}, {\"answer\": \"Yes. The hospital has qualified specialists in areas such as paediatrics, obstetrics and gynaecology, orthopaedics, surgery, nutrition, and internal medicine.\", \"question\": \"Are specialist doctors available at the hospital?\"}, {\"answer\": \"Yes. Patients can schedule appointments for consultations, specialist clinics, and follow-up visits through the hospital booking procedures.\", \"question\": \"Can patients book appointments in advance?\"}, {\"answer\": \"Yes. The hospital serves as a referral hospital and accepts patients referred from district hospitals, clinics, and other healthcare facilities.\", \"question\": \"Does ZCH accept referrals from other hospitals?\"}, {\"answer\": \"Patients are encouraged to bring identification documents, health records, referral letters if any, and prescribed medications when visiting the hospital.\", \"question\": \"What should patients bring when visiting?\"}, {\"answer\": \"Yes. Zomba Central Hospital offers antenatal care, maternity services, postnatal care, neonatal care, immunisation services, and paediatric healthcare services.\", \"question\": \"Does the hospital provide maternity services?\"}], \"eyebrow\": \"Help Centre\", \"hero_text\": \"Find helpful information about hospital services, contact options, appointments, emergency support, and what to expect when visiting Zomba Central Hospital.\", \"side_text\": \"Browse the most common questions below or contact the hospital directly if you need support that is specific to your visit or referral.\", \"highlights\": [{\"label\": \"Common Questions\", \"value\": \"10\"}, {\"label\": \"Emergency Care\", \"value\": \"24/7\"}, {\"label\": \"Helpful Answers\", \"value\": \"Fast\"}], \"side_points\": [\"[object Object]\", {\"point\": \"Useful information on appointments and referrals\"}, {\"point\": \"Easy access to support and contact options\"}], \"hero_heading\": \"Quick answers for patients, guardians, and visitors.\", \"side_heading\": \"Need help quickly?\", \"support_text\": \"If your question is not covered here, our team is ready to help with appointment guidance, patient enquiries, and general hospital information.\", \"content_intro\": \"This page is designed to make it easier for patients and families to get key information before visiting the hospital or accessing care.\", \"content_heading\": \"Answers to the questions we hear most often\", \"support_heading\": \"Still need assistance?\", \"support_button_url\": \"frontend.contact\", \"support_button_text\": \"Get In Touch\"}', 1, '2026-06-14 01:13:48', '2026-06-14 02:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `footer_pages`
--

CREATE TABLE `footer_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_pages`
--

INSERT INTO `footer_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Main Footer', 'main-footer', NULL, '{\"about\": {\"logo\": \"images/logo4.png\", \"logo_alt\": \"medic\", \"description\": \"ADADA Leading the way in medical excellence. Trusted by the community for over 50 years. We are committed to providing quality healthcare services to all.\", \"social_links\": [{\"url\": \"https://facebook.com/themefisher\", \"icon\": \"fab fa-facebook-f\", \"label\": \"facebook\"}, {\"url\": \"https://twitter.com/themefisher\", \"icon\": \"fab fa-twitter\", \"label\": \"twitter\"}, {\"url\": \"https://instagram.com/themefisher\", \"icon\": \"fab fa-instagram\", \"label\": \"instagram\"}, {\"url\": \"https://github.com/themefisher\", \"icon\": \"fab fa-github\", \"label\": \"github\"}], \"contact_items\": [{\"href\": null, \"icon\": \"fas fa-map-marker-alt\", \"text\": \"Zomba Central Hospital, P.O Box 21, Zomba, Malawi\\nEastern Africa\"}, {\"href\": \"mailto:zch@zomba.mw\", \"icon\": \"far fa-envelope\", \"text\": \"zch@zomba.mw\"}, {\"href\": null, \"icon\": \"fas fa-phone\", \"text\": \"(265) 999\"}]}, \"bottom\": {\"links\": [{\"url\": \"/\", \"label\": \"HOME\"}, {\"url\": \"/about\", \"label\": \"About\"}, {\"url\": \"/contact\", \"label\": \"CONTACT\"}], \"copyright\": \"&copy; Copyright 2026. Designed &amp; Developed by <a href=\\\"https://themefisher.com/\\\">Dep. of E-Government</a>\"}, \"ombudsman\": {\"icon\": \"fas fa-headset\", \"title\": \"Ombudsman\", \"description\": \"If not satisfied with the service, contact our ombudsman for help, complaints, or follow-up on service delivery concerns.\", \"contact_items\": [{\"icon\": \"fas fa-phone-volume\", \"text\": \"+265 (0) 887 682 856 (Toll Free)\"}, {\"icon\": \"fas fa-envelope\", \"text\": \"zchombudsman@gmail.com\"}]}, \"quick_links\": {\"icon\": \"fas fa-link\", \"items\": [{\"url\": \"/\", \"label\": \"Home\"}, {\"url\": \"/news\", \"label\": \"News & Ads\"}, {\"url\": \"/about\", \"label\": \"Our History\"}, {\"url\": \"/departments\", \"label\": \"Departments\"}, {\"url\": \"/vacancies\", \"label\": \"Careers\"}, {\"url\": \"/doctors\", \"label\": \"Our Doctors\"}], \"title\": \"Quick Links\"}, \"visitor_counter\": {\"icon\": \"fas fa-users\", \"note\": \"Counts are stored in this browser and styled to match your reference card.\", \"word\": \"Visitors\", \"title\": \"Visitor Counter\"}}', 1, '2026-07-21 17:27:43', '2026-07-21 17:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_pages`
--

CREATE TABLE `gallery_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_pages`
--

INSERT INTO `gallery_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Gallery', 'gallery', NULL, '{\"audio\": [{\"icon\": \"fas fa-microphone-alt\", \"title\": \"From crisis to smile\", \"author\": \"Grace M.\", \"category\": \"Patient Voices\", \"duration\": \"2:15 min\", \"audio_url\": \"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3\", \"description\": \"Grace shares how pediatric care saved her daughter during a severe malaria crisis.\"}, {\"icon\": \"fas fa-hands-helping\", \"title\": \"Maternity Moments\", \"author\": \"Sr. Mary M.\", \"category\": \"Patient Voices\", \"duration\": \"3:02 min\", \"audio_url\": \"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3\", \"description\": \"Senior nurse Mary reflects on compassionate delivery care and healthy newborns.\"}, {\"icon\": \"fas fa-brain\", \"title\": \"Mind & Soul\", \"author\": \"Counsellor Hastings\", \"category\": \"Health Talks\", \"duration\": \"2:48 min\", \"audio_url\": \"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3\", \"description\": \"Mental health support, stigma reduction, and recovery journeys at Zomba Central Hospital.\"}, {\"icon\": \"fas fa-band-aid\", \"title\": \"Second Chance After Surgery\", \"author\": \"John P.\", \"category\": \"Patient Voices\", \"duration\": \"2:30 min\", \"audio_url\": \"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-4.mp3\", \"description\": \"John narrates his surgery recovery and the post-op care he received from the surgical ward.\"}, {\"icon\": \"fas fa-apple-alt\", \"title\": \"Living Well with Diabetes\", \"author\": \"Health Ed. Thandi\", \"category\": \"Health Talks\", \"duration\": \"3:15 min\", \"audio_url\": \"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3\", \"description\": \"Practical nutrition tips and chronic care guidance for patients living with diabetes.\"}, {\"icon\": \"fas fa-truck-medical\", \"title\": \"Reaching Remote Villages\", \"author\": \"Outreach Team\", \"category\": \"Staff Sessions\", \"duration\": \"2:55 min\", \"audio_url\": \"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-6.mp3\", \"description\": \"Hear from our outreach lead about vaccine drives and preventive care in rural communities.\"}], \"photos\": [{\"image\": \"images/gallery/gallery-01a.jpg\", \"title\": \"Facility 01\", \"image_alt\": \"Facility 01\", \"full_image\": \"images/gallery/gallery-01a.jpg\", \"description\": \"A closer look at one of the hospital spaces that supports daily patient care and service delivery.\"}, {\"image\": \"images/gallery/gallery-02a1.jpg\", \"title\": \"Facility 02\", \"image_alt\": \"Facility 02\", \"full_image\": \"images/gallery/gallery-02a1.jpg\", \"description\": \"A gallery view highlighting infrastructure and surroundings across the Zomba Central Hospital campus.\"}, {\"image\": \"images/gallery/gallery-03a1.jpg\", \"title\": \"Facility 03\", \"image_alt\": \"Facility 03\", \"full_image\": \"images/gallery/gallery-03a.jpg\", \"description\": \"Visual moments from our clinical environment, showing the spaces where services are delivered.\"}, {\"image\": \"images/gallery/gallery-04a1.jpg\", \"title\": \"Facility 04\", \"image_alt\": \"Facility 04\", \"full_image\": \"images/gallery/gallery-04a1.jpg\", \"description\": \"A snapshot of hospital infrastructure that reflects our commitment to care, safety, and access.\"}, {\"image\": \"images/gallery/gallery-07a.jpg\", \"title\": \"Facility 05\", \"image_alt\": \"Facility 05\", \"full_image\": \"images/gallery/gallery-05a.jpg\", \"description\": \"Images that capture more of the hospital environment, facilities, and day-to-day care settings.\"}, {\"image\": \"images/gallery/gallery-06a.jpg\", \"title\": \"Facility 06\", \"image_alt\": \"Facility 06\", \"full_image\": \"images/gallery/gallery-06a.jpg\", \"description\": \"Another selected view from the hospital showing service areas and facility presentation.\"}], \"videos\": [{\"type\": \"Hospital Update\", \"title\": \"Hospital Orientation\", \"embed_url\": \"https://www.youtube.com/embed/tgbNymZ7vqY\", \"description\": \"Overview of patient care services and pathways at ZCH.\"}, {\"type\": \"Public Health\", \"title\": \"Maternal & Child Awareness\", \"embed_url\": \"https://www.youtube.com/embed/ysz5S6PUM-U\", \"description\": \"Community education for maternal and newborn health.\"}, {\"type\": \"Emergency\", \"title\": \"Emergency Response Readiness\", \"embed_url\": \"https://www.youtube.com/embed/ScMzIvxBSi4\", \"description\": \"Inside our emergency and ICU preparedness drills.\"}, {\"type\": \"Diagnostics\", \"title\": \"Diagnostic Services Spotlight\", \"embed_url\": \"https://www.youtube.com/embed/jNQXAC9IVRw\", \"description\": \"How lab and imaging teams support faster diagnosis.\"}], \"audio_hero_text\": \"Listen to patient stories, staff reflections, health tips, and inspiring updates from our hospital community.\", \"photos_cta_text\": \"You can continue browsing our resource centre through videos, audio features, and contact channels for more official hospital information.\", \"videos_cta_text\": \"Visit our other resource pages for photos, news, and community updates, or contact the hospital for official information.\", \"audio_hero_title\": \"Audio Gallery\", \"photos_cta_title\": \"Want to explore more hospital updates?\", \"photos_hero_text\": \"Explore selected images of hospital spaces, service areas, and facilities that reflect the care environment and daily life at Zomba Central Hospital.\", \"videos_cta_title\": \"Need more updates from the hospital?\", \"videos_hero_text\": \"Watch health awareness features, department highlights, community outreach updates, and public service announcements from Zomba Central Hospital.\", \"photos_hero_title\": \"Collected Shots of Our Hospital\", \"videos_hero_title\": \"Official Video Archive\"}', 1, '2026-07-20 23:44:39', '2026-07-20 23:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `header_pages`
--

CREATE TABLE `header_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_pages`
--

INSERT INTO `header_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Main Header', 'main-header', NULL, '{\"logo\": {\"alt\": \"Zomba Central Hospital\", \"image\": \"images/logoAQ.png\"}, \"contact\": {\"email\": \"zch@zomba.mw\", \"phone\": \"+265 (0) 887 682 856\", \"email_label\": \"Email\", \"phone_label\": \"Call Now\", \"appointment_url\": \"/appointment\", \"appointment_text\": \"Appointment\"}, \"top_bar\": {\"emergency_text\": \"24/7 Emergency Services Available \", \"emergency_label\": \"Emergency\", \"emergency_phone\": \"999\", \"toll_free_label\": \"Toll Free\", \"toll_free_phone\": \"+265 (0) 887 682 856\"}, \"nav_items\": [{\"url\": \"/\", \"label\": \"HOME\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"#\", \"label\": \"ABOUT US\", \"children\": [{\"url\": \"/about\", \"label\": \"ZCH Background\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/management\", \"label\": \"Hospital Management\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/structure\", \"label\": \"Organisational Structure\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/faq\", \"label\": \"FAQ\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/organogram\", \"label\": \"Organogram\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/facilities\", \"label\": \"Our Facilities\", \"children\": [], \"open_new_tab\": false}], \"open_new_tab\": false}, {\"url\": \"#\", \"type\": \"departments\", \"label\": \"DEPARTMENTS\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/services\", \"label\": \"SERVICES\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"#\", \"label\": \"MEDICAL TEAM\", \"children\": [{\"url\": \"/management\", \"label\": \"Top Hospital Management\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/doctors\", \"label\": \"Specialist Doctors\", \"children\": [], \"open_new_tab\": false}], \"open_new_tab\": false}, {\"url\": \"#\", \"label\": \"RESOURCE CENTER\", \"children\": [{\"url\": \"/news\", \"label\": \"Latest News\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"#\", \"label\": \"Gallery\", \"children\": [{\"url\": \"/photos\", \"label\": \"Photos\", \"children\": []}, {\"url\": \"/videos\", \"label\": \"Videos\", \"children\": []}, {\"url\": \"/audio\", \"label\": \"Audio Clips\", \"children\": []}], \"open_new_tab\": false}, {\"url\": \"/downloads\", \"label\": \"Downloads\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"/events\", \"label\": \"Events Calendar\", \"children\": [], \"open_new_tab\": false}, {\"url\": \"#\", \"label\": \"Careers\", \"children\": [{\"url\": \"/vacancies\", \"label\": \"View Vacancies\", \"children\": []}, {\"url\": \"/online-application\", \"label\": \"Online Job Application\", \"children\": []}], \"open_new_tab\": false}, {\"url\": \"/testimonials\", \"label\": \"Patient Testimonials\", \"children\": [], \"open_new_tab\": false}], \"open_new_tab\": false}, {\"url\": \"https://mail.boma.gov.mw/\", \"label\": \"BOMA-MAIL\", \"children\": [], \"open_new_tab\": true}, {\"url\": \"/contact\", \"label\": \"CONTACT\", \"children\": [], \"open_new_tab\": false}], \"search_placeholder\": \"Search...\"}', 1, '2026-07-21 17:05:10', '2026-07-21 17:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Home Page',
  `sliders` json DEFAULT NULL,
  `cta_blocks` json DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_paragraph_1` text COLLATE utf8mb4_unicode_ci,
  `about_paragraph_2` text COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats` json DEFAULT NULL,
  `leadership_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leadership_highlight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leadership_intro` text COLLATE utf8mb4_unicode_ci,
  `leaders` json DEFAULT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_highlight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_intro` text COLLATE utf8mb4_unicode_ci,
  `news_items` json DEFAULT NULL,
  `partners_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partners_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partners` json DEFAULT NULL,
  `bottom_cta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_cta_text` text COLLATE utf8mb4_unicode_ci,
  `bottom_cta_button_1_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_cta_button_1_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_cta_button_2_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_cta_button_2_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_cta_background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `title`, `sliders`, `cta_blocks`, `about_title`, `about_subtitle`, `about_paragraph_1`, `about_paragraph_2`, `about_image`, `about_button_url`, `stats`, `leadership_title`, `leadership_highlight`, `leadership_intro`, `leaders`, `news_title`, `news_highlight`, `news_intro`, `news_items`, `partners_title`, `partners_subtitle`, `partners`, `bottom_cta_title`, `bottom_cta_text`, `bottom_cta_button_1_text`, `bottom_cta_button_1_url`, `bottom_cta_button_2_text`, `bottom_cta_button_2_url`, `bottom_cta_background_image`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', '[{\"title\": \"World-Class Health in Zomba\", \"subtitle\": \"Providing compassionate care and advanced medical treatment to the community. Your health is our priority\", \"css_class\": \"slide1\", \"is_active\": true, \"button_url\": \"frontend.about\", \"button_text\": \"explore\", \"background_image\": \"images/slider/slider-bg-1p.jpg\"}, {\"title\": \"We Care About Your Health\", \"subtitle\": \"We believe that healthcare is more than treatment -it is about listening, caring, supporting, and restoring hope\", \"css_class\": null, \"is_active\": true, \"button_url\": \"frontend.about\", \"button_text\": \"ABOUT US\", \"background_image\": \"images/slider/slider-bg-1a.jpg\"}, {\"title\": \"Best Medical Services\", \"subtitle\": \"With experienced healthcare professionals, modern medical facilities, and a patient-centered approach,.\", \"css_class\": null, \"is_active\": true, \"button_url\": \"frontend.services\", \"button_text\": \"SERVICES\", \"background_image\": \"images/slider/slider-bg-3o.jpg\"}]', '[{\"body\": \"24/7 emergency response for accidents, trauma, and urgent medical care.\", \"icon\": \"fa fa-phone\", \"type\": \"emergency\", \"phone\": \"+265 999\", \"title\": \"Emergency & Ambulance\", \"phone_link\": \"tel:+265999\"}, {\"body\": \"Maternity, Pediatrics, Surgery, and Outpatient services led by dedicated clinical teams.\", \"icon\": \"fa fa-stethoscope\", \"type\": \"departments\", \"title\": \"Key Departments\", \"button_url\": \"frontend.services\", \"button_text\": \"View Services\"}, {\"icon\": \"fa fa-hourglass-o\", \"type\": \"hours\", \"hours\": [{\"time\": \"08:00 - 17:00\", \"label\": \"Outpatient (Mon - Fri)\"}, {\"time\": \"08:00 - 12:00\", \"label\": \"Weekend Clinic (Sat)\"}, {\"time\": \"24 Hours\", \"label\": \"Emergency Department\"}], \"title\": \"Clinic & Visiting Hours\"}]', 'About Zomba Central Hospital', 'Serving the Community Since the 1930s', 'Zomba Central Hospital was established in the 1930s with a vision to provide quality healthcare services to the people of Zomba and surrounding districts. What started as a modest 50-bed facility has grown into a comprehensive healthcare institution serving thousands of patients every year.', 'Over the decades, we have continued to evolve by adopting modern medical technologies and expanding our services to meet growing healthcare needs. Our commitment to excellence, compassion, and patient-centered care remains strong.', 'images/about/1a.jpg', 'frontend.about', '[{\"icon\": \"fas fa-calendar-alt\", \"label\": \"Years of Service\", \"value\": \"90+\"}, {\"icon\": \"fas fa-users\", \"label\": \"Staff Members\", \"value\": \"500+\"}, {\"icon\": \"fas fa-bed\", \"label\": \"Hospital Beds\", \"value\": \"150+\"}, {\"icon\": \"fas fa-smile\", \"label\": \"Patients Served Annually\", \"value\": \"10K+\"}]', 'Hospital', 'Leadership', 'Meet the visionary leaders driving excellence, innovation, and compassionate care at Zomba Central Hospital.\nOur dedicated leadership team is committed to strengthening healthcare delivery, advancing medical services, and ensuring patient-centered care for every individual we serve.\nThrough professionalism, integrity, and strategic direction, they continue to shape the hospital into a trusted center of excellence in healthcare, research, and community service across Malawi.', '[{\"name\": \"Dr. Soulos Nyirenda\", \"image\": \"images/services/service-one1.jpg\", \"tab_id\": \"dormitory\", \"tab_label\": \"Hospital Director General\", \"button_url\": \"frontend.services\", \"paragraphs\": [\"Dr. Soulos Nyirenda is a Malawian medical doctor and public health administrator serving as Director General of Zomba Central Hospital, one of Malawi\'s largest tertiary referral hospitals. He is known for improving hospital operations, patient care delivery, and system-wide efficiency in Southern Malawi.\", \"He leads medical, administrative, and infrastructure functions for a referral network serving over four million people, while strengthening partnerships with the Ministry of Health and key international health programs.\"], \"button_text\": \"Read more\", \"bullet_points\": [\"Focus areas: hospital management, public health systems, and medical service delivery.\", \"Supports expansion of specialized services including surgical, pediatric, and obstetric care.\", \"Strengthens Zomba Central Hospital\'s teaching and research role within Malawi\'s referral network.\"]}, {\"name\": \"Dr.Delia Munthali Mabedi\", \"image\": \"images/services/service-three1a.jpg\", \"tab_id\": \"orthopedic\", \"tab_label\": \"Deputy Hospital Director\", \"button_url\": \"frontend.services\", \"paragraphs\": [\"Dr. Delia Munthali Mabedi is a Malawian physician and anesthesiologist serving as Deputy Hospital Director and Anesthetic Consultant at Zomba Central Hospital. She is recognized as one of Malawi\'s leading voices in anesthesia, intensive care, and perioperative patient safety.\", \"With training in medicine, anesthesia, and critical care, she combines hospital leadership with specialist clinical oversight, supporting service quality, workforce development, and safer surgical outcomes across Southern Malawi.\"], \"button_text\": \"Read more\", \"bullet_points\": [\"Focus areas: anesthesia, intensive care, perioperative medicine, and patient safety.\", \"Leadership: founding chairperson and former first female chairperson of the Society of Anaesthesiologists of Malawi.\", \"Advocates mentorship, protocol-driven care, and stronger national capacity in surgical and critical care services.\"]}, {\"name\": \"Mrs. Judith Chirwa\", \"image\": \"images/services/service-two1a.jpg\", \"tab_id\": \"sonogram\", \"tab_label\": \"Deputy Director, Nursing Dept\", \"button_url\": \"frontend.services\", \"paragraphs\": [\"Mrs. Judith Chirwa is a senior Malawian nurse and healthcare administrator serving as Deputy Director of the Nursing Department at Zomba Central Hospital. She is recognized for leadership in nursing management, clinical coordination, and patient care quality improvement.\", \"She oversees nursing operations across high-demand service areas, supports workforce planning and in-service training, and helps align hospital nursing systems with Malawi\'s national public health priorities.\"], \"button_text\": \"Read more\", \"bullet_points\": [\"Focus areas: nursing management, patient safety, and continuous professional development.\", \"Supports care delivery across internal medicine, pediatrics, surgery, and maternity services.\", \"Contributes to national goals on maternal health, infection control, and strengthened nursing practice.\"]}]', 'Latest', 'News', 'Stay updated with the latest announcements, hospital milestones, service updates, and public health information from Zomba Central Hospital and our partners.', '[{\"url\": \"frontend.news\", \"type\": \"news\", \"image\": \"images/blog/5a1a.jpg\", \"title\": \"Improving Emergency and Surgical Care Delivery\", \"excerpt\": \"Zomba Central Hospital continues to modernize urgent and specialist care pathways for better outcomes.\", \"category\": \"Latest News\"}, {\"url\": \"frontend.news\", \"type\": \"news\", \"image\": \"images/blog/7a1.jpg\", \"title\": \"Maternal and Child Health Services Expanded\", \"excerpt\": \"New service improvements support safer maternity care and stronger pediatric follow-up programs.\", \"category\": \"Latest News\"}, {\"url\": \"https://web.facebook.com/malawigovernment/?ref=embed_page#\", \"type\": \"facebook\", \"title\": \"Follow ZCH on Facebook\", \"excerpt\": \"View official announcements, public notices, and updates from the Malawi Government page.\", \"category\": \"Social Updates\", \"facebook_title\": \"Follow Us on Facebook\", \"facebook_embed_url\": \"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmalawigovernment%2F&tabs=timeline&width=340&height=700&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId\"}]', 'OUR PARTNERS', 'Collaborating with institutions and partners to deliver national impact.', '[{\"url\": \"www.malawi.gov.mw\", \"logo\": \"images/partners/gov.jpg\", \"name\": \"Ministry of Health\"}, {\"url\": \"www.malawi.gov.mw\", \"logo\": \"images/partners/giz1.jpg\", \"name\": \"GIZ Malawi\"}, {\"url\": \"www.malawi.gov.mw\", \"logo\": \"images/partners/medical.jpg\", \"name\": \"Medical Council of Malawi\"}, {\"url\": \"www.malawi.gov.mw\", \"logo\": \"images/partners/reunion.jpg\", \"name\": \"Réunion Médicale\"}, {\"url\": \"www.malawi.gov.mw\", \"logo\": \"images/partners/unima1.jpg\", \"name\": \"University of Malawi\"}, {\"url\": \"www.malawi.gov.mw\", \"logo\": \"images/partners/council.jpg\", \"name\": \"Zomba City Council\"}]', 'Dedicated to Your Health & Well-being', 'Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.', 'Get in Touch', 'frontend.contact', 'Our Services', 'frontend.services', 'images/background/appoinment.jpg', '2026-06-04 23:48:46', '2026-06-14 00:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Latest News', 'latest-news', NULL, '{\"tags\": [{\"name\": \"Dental\"}, {\"name\": \"Root\"}, {\"name\": \"Clean\"}, {\"name\": \"Rehabilitation\"}, {\"name\": \"Surgery\"}, {\"name\": \"Doctor\"}, {\"name\": \"Pediatric\"}], \"articles\": [{\"date\": null, \"meta\": \"Featured article / Zomba Central Hospital\", \"slug\": null, \"image\": \"images/news/news2.jpg\", \"title\": \"Doctors seeks refurbishes maternity HDU at Zomba Central Hospital ASASADA\", \"author\": null, \"content\": \"Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\\nStandard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\\nStandard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\\nStandard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\\nStandard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\", \"excerpt\": \"Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\", \"image_alt\": \"Standard Bank HDU handover\", \"read_more_url\": \"#\"}, {\"date\": null, \"meta\": \"Featured article / Zomba Central Hospital\", \"slug\": null, \"image\": \"images/news/news1.jpg\", \"title\": \"Standard Bank refurbishes maternity HDU at Zomba Central Hospital\", \"author\": null, \"content\": null, \"excerpt\": \"Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital. The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.\", \"image_alt\": \"Standard Bank HDU handover\", \"read_more_url\": \"#\"}, {\"date\": null, \"meta\": \"By James Anderson / 08 January 2020\", \"slug\": null, \"image\": \"images/blog/5a.jpg\", \"title\": \"To support patients recovery and improve their experiences of care.\", \"author\": null, \"content\": null, \"excerpt\": \"Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\", \"image_alt\": null, \"read_more_url\": \"#\"}, {\"date\": null, \"meta\": \"By Garry Moe / 12 January 2020\", \"slug\": null, \"image\": \"images/blog/6a.jpg\", \"title\": \"A lesson in Surgery Preparedness - From Hurricane Season\", \"author\": null, \"content\": null, \"excerpt\": \"Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\", \"image_alt\": null, \"read_more_url\": \"#\"}, {\"date\": null, \"meta\": \"By Garry Moe / 12 January 2020\", \"slug\": null, \"image\": \"images/blog/7a.jpg\", \"title\": \"A lesson in Surgery Preparedness - From Hurricane Season\", \"author\": null, \"content\": null, \"excerpt\": \"Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\", \"image_alt\": null, \"read_more_url\": \"#\"}, {\"date\": null, \"meta\": \"By Luis Morris / 25 January 2020\", \"slug\": null, \"image\": \"images/blog/8a.jpg\", \"title\": \"To support patients recovery and improve their experiences of care.\", \"author\": null, \"content\": null, \"excerpt\": \"Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\", \"image_alt\": null, \"read_more_url\": \"#\"}], \"cta_text\": \"Our doors are always open for those in need of compassionate and professional healthcare.\", \"cta_title\": \"Dedicated to Your Health & Well-being\", \"categories\": [{\"name\": \"Alumni\", \"count\": 20}, {\"name\": \"Psycology\", \"count\": 4}, {\"name\": \"Sonogram\", \"count\": 2}, {\"name\": \"x-ray\", \"count\": 9}, {\"name\": \"Dental\", \"count\": 2}], \"recent_posts\": [{\"date\": \"Featured Story\", \"link\": \"#\", \"image\": \"images/news/news1.jpg\", \"title\": \"Standard Bank refurbishes maternity HDU...\"}, {\"date\": \"May 25, 2026\", \"link\": \"#\", \"image\": \"images/blog/6a.jpg\", \"title\": \"Wondering if interior design is dying...\"}, {\"date\": \"May 20, 2019\", \"link\": \"#\", \"image\": \"images/blog/7a.jpg\", \"title\": \"Low cost interior designing ideas for...\"}], \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.services\", \"page_description\": \"Stay updated with the latest news and announcements from Zomba Central Hospital.\", \"cta_button_1_text\": \"Get in Touch\", \"cta_button_2_text\": \"Our Services\", \"page_heading_label\": \"Latest\", \"page_heading_highlight\": \"News\"}', 1, '2026-07-20 23:44:37', '2026-07-21 01:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Hospital Management', 'hospital-management', '', '{\"cta_text\": \"Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.\", \"deputies\": [{\"alt\": \"Deputy Hospital Director\", \"name\": \"Dr. Delia Munthali Mabedi \", \"role\": \"Deputy Hospital Director\", \"image\": \"images/team/d1.webp\"}, {\"alt\": \"Deputy Director\", \"name\": \"Dr. Jessica Chakwana\", \"role\": \"Deputy Director\", \"image\": \"images/team/d3.jpg\"}], \"lead_alt\": \"Hospital Director General\", \"cta_title\": \"Dedicated to Your Health & Well-being\", \"lead_name\": \"Dr. Saulos Nyirenda\", \"lead_role\": \"Hospital Director General\", \"lead_image\": \"images/team/doctormw-2a.jpg\", \"team_intro\": \"Our diverse team of medical and administrative professionals.\", \"board_intro\": \"The executive leadership overseeing the strategic direction of ZCH.\", \"team_heading\": \"Senior Management Team\", \"team_members\": [{\"alt\": \"Chief Nursing Officer\", \"name\": \"Mrs. Grace Banda\", \"role\": \"Chief Nursing Officer\", \"image\": \"images/team/d4.jpg\"}, {\"alt\": \"Hospital Administrator\", \"name\": \"Mr. John Phiri\", \"role\": \"Hospital Administrator\", \"image\": \"images/team/doctor-2.jpg\"}, {\"alt\": \"Chief Finance Officer\", \"name\": \"Ms. Mary Kachale\", \"role\": \"Chief Finance Officer\", \"image\": \"images/team/d3.jpg\"}, {\"alt\": \"Human Resource Officer\", \"name\": \"Mr. Chipembo Soko\", \"role\": \"Human Resource Officer\", \"image\": \"images/team/doctor-lab-1.jpg\"}, {\"alt\": \"Procurement Officer\", \"name\": \"Mr. David Mzere\", \"role\": \"Procurement Officer\", \"image\": \"images/team/d4.jpg\"}, {\"alt\": \"Public Relations Officer\", \"name\": \"Mrs. Catherine Phiri\", \"role\": \"Public Relations Officer\", \"image\": \"images/team/doctor-lab-3.jpg\"}], \"board_heading\": \"Board of Directors\", \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.facilities\", \"cta_button_1_text\": \"Get in Touch\", \"cta_button_2_text\": \"Our Facilities\"}', 1, '2026-06-14 01:13:48', '2026-06-14 01:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_06_05_000001_create_home_pages_table', 2),
(5, '2026_06_14_030850_create_abouts_table', 3),
(6, '2026_06_14_030850_create_facilities_table', 3),
(7, '2026_06_14_030850_create_faqs_table', 3),
(8, '2026_06_14_030850_create_management_table', 3),
(9, '2026_06_14_030850_create_organograms_table', 3),
(10, '2026_06_14_030850_create_structures_table', 3),
(11, '2026_06_14_060001_add_content_data_to_about_dropdown_tables', 4),
(12, '2026_07_20_000001_create_departments_table', 5),
(13, '2026_07_20_000002_create_service_pages_table', 6),
(14, '2026_07_20_000003_create_specialist_doctors_table', 7),
(15, '2026_07_20_000004_create_latest_news_table', 8),
(16, '2026_07_20_000005_create_downloads_pages_table', 9),
(17, '2026_07_20_000006_create_events_pages_table', 10),
(18, '2026_07_20_000007_create_testimonial_pages_table', 11),
(19, '2026_07_20_000008_create_gallery_pages_table', 12),
(20, '2026_07_21_000001_create_career_pages_table', 13),
(21, '2026_07_21_000002_create_online_application_pages_table', 14),
(22, '2026_07_21_000003_create_header_pages_table', 15),
(23, '2026_07_21_000004_create_footer_pages_table', 16),
(24, '2026_07_21_000005_add_role_to_users_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `online_application_pages`
--

CREATE TABLE `online_application_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_application_pages`
--

INSERT INTO `online_application_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Online Application', 'online-application', NULL, '{\"genders\": {\"Male\": \"Male\", \"Female\": \"Female\"}, \"breadcrumb\": \"Online Job Application\", \"card_title\": \"Zomba Central Hospital\", \"departments\": {\"Finance\": \"Finance\", \"Nursing\": \"Nursing\", \"Pharmacy\": \"Pharmacy\", \"Laboratory\": \"Laboratory\", \"Administration\": \"Administration\", \"ICT Department\": \"ICT Department\", \"Human Resources\": \"Human Resources\", \"Clinical Services\": \"Clinical Services\"}, \"footer_note\": \"© 2026 Zomba Central Hospital. All Rights Reserved.\", \"banner_title\": \"Online Job Application\", \"card_subtitle\": \"Online Job Application Form\", \"declaration_text\": \"I confirm that the information provided in this application form is accurate and complete to the best of my knowledge.\", \"employment_types\": {\"Contract\": \"Contract\", \"Full-Time\": \"Full-Time\", \"Part-Time\": \"Part-Time\", \"Internship\": \"Internship\"}, \"section_personal\": \"Personal Information\", \"section_position\": \"Position Applying For\", \"section_documents\": \"Upload Supporting Documents\", \"section_education\": \"Education & Qualifications\", \"submit_button_text\": \"Submit Application\", \"section_declaration\": \"Declaration\"}', 1, '2026-07-21 16:09:24', '2026-07-21 16:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `organograms`
--

CREATE TABLE `organograms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organograms`
--

INSERT INTO `organograms` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Organogram', 'organogram', '', '{\"intro\": \"Our structured approach to healthcare management and clinical excellence.\", \"heading\": \"ZCH Organogram\", \"cta_text\": \"Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.\", \"chart_alt\": \"ZCH Organisational Chart\", \"cta_title\": \"Dedicated to Your Health & Well-being\", \"chart_image\": \"images/gallery/organogram1.png\", \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.services\", \"cta_button_1_text\": \"Get in Touch\", \"cta_button_2_text\": \"Our Services\"}', 1, '2026-06-14 01:13:48', '2026-06-14 01:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_pages`
--

CREATE TABLE `service_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_pages`
--

INSERT INTO `service_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Services ', 'services', NULL, '{\"cards\": [{\"icon\": \"fas fa-briefcase-medical\", \"link\": \"contact.html\", \"delay\": \"0ms\", \"image\": \"images/services/service-foura.jpg\", \"title\": \"Emergency Care\", \"duration\": \"1200ms\", \"image_alt\": \"Emergency Care team responding quickly\", \"link_text\": \"Read More\", \"description\": \"24/7 emergency stabilization and urgent treatment for trauma, severe infections, breathing distress, and critical medical events.\"}, {\"icon\": \"fas fa-user-md\", \"link\": \"departments.html#surgical\", \"delay\": \"100ms\", \"image\": \"images/services/service-fivea.jpg\", \"title\": \"Operation & Surgery\", \"duration\": \"1200ms\", \"image_alt\": \"Operation and Surgery unit\", \"link_text\": \"Read More\", \"description\": \"Safe surgical procedures with pre-operative evaluation, modern theatre protocols, and structured post-operative recovery support.\"}, {\"icon\": \"fas fa-stethoscope\", \"link\": \"appointment.html\", \"delay\": \"200ms\", \"image\": \"images/slider/slider-bg-1a.jpg\", \"title\": \"Outdoor Checkup\", \"duration\": \"1200ms\", \"image_alt\": \"Outdoor checkup consultation\", \"link_text\": \"Read More\", \"description\": \"Daily outpatient reviews for adults and children including clinical assessment, routine diagnostics, and follow-up care planning.\"}, {\"icon\": \"fas fa-ambulance\", \"link\": \"contact.html\", \"delay\": \"300ms\", \"image\": \"images/services/slider-bg-1c.jpg\", \"title\": \"Ambulance Service\", \"duration\": \"1200ms\", \"image_alt\": \"Ambulance transport service\", \"link_text\": \"Read More\", \"description\": \"Rapid transport for emergencies and referrals, with in-transit monitoring and communication to prepare receiving teams.\"}, {\"icon\": \"fas fa-pills\", \"link\": \"departments.html#medical\", \"delay\": \"400ms\", \"image\": \"images/team/doctor-lab-3a1.jpg\", \"title\": \"Medicine & Pharmacy\", \"duration\": \"1200ms\", \"image_alt\": \"Medicine and pharmacy dispensing\", \"link_text\": \"Read More\", \"description\": \"Reliable access to prescribed medicines, dosage counseling, and medication safety guidance by licensed pharmacy staff.\"}, {\"icon\": \"fas fa-vial\", \"link\": \"departments.html#diagnostic\", \"delay\": \"500ms\", \"image\": \"images/team/1doctor-lab-3a.jpg\", \"title\": \"Blood Testing\", \"duration\": \"1200ms\", \"image_alt\": \"Blood testing in a laboratory\", \"link_text\": \"Read More\", \"description\": \"Comprehensive lab testing with timely reporting for full blood count, infection screens, and treatment response tracking.\"}], \"cta_heading\": \"Need Immediate Medical Support?\", \"cta_button_url\": \"appointment.html\", \"cta_button_text\": \"Book Appointment\", \"cta_description\": \"Our emergency and outpatient teams are available to guide you quickly to the right service.\", \"page_description\": \"From emergency response to diagnostics and pharmacy support, our hospital provides integrated medical services focused on fast access, accurate treatment, and compassionate care for every patient.\", \"page_heading_label\": \"Our Services \", \"page_heading_title\": \"Excellent\", \"page_heading_highlight\": \"Medical Services \"}', 1, '2026-07-20 16:29:39', '2026-07-20 17:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C0SR7ML8frlywqDL19YkE5MV4uyn5mzUZFrdQ2ph', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:152.0) Gecko/20100101 Firefox/152.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiTU5mMTJHa1FrR3d4OTRPZENJWjg3MndhNGRWZ2VIOWlDZXVGbDhPSiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly96Y2gudGVzdC9hZG1pbi91c2VycyI7czo1OiJyb3V0ZSI7czozNjoiZmlsYW1lbnQuYWRtaW4ucmVzb3VyY2VzLnVzZXJzLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjQ6Ijk4ZmQwMmE0ZTdiMDU2NzQyMWE3YTdiNzlkMzA4MjdkMTdhMWU4ZjQ4YmFlNzNlMTcyMGRmODgzMjNlYzI1NTIiO3M6NjoidGFibGVzIjthOjIwOntzOjQwOiJlYWI5YjU4YmYxZDU4MGU1ZTdkZjUzMzc0NThkZjAwNV9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiaXNfcHVibGlzaGVkIjtzOjU6ImxhYmVsIjtzOjk6IlB1Ymxpc2hlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImQ1N2VhY2Q4MWFjNjMyNjgwMmM1ODc3ZjRmMThkOGI3X2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjQ6IlNsdWciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiMWQ3MDFkYzRhNTMxMWJjM2I3NThiNDU5NGMxNTE5ZDVfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InNsdWciO3M6NToibGFiZWwiO3M6NDoiU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI2MDc0YmM1ZWRjZmY0ZjYxOGFkMzU2MmU4MWVhODU5NF9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiaXNfcHVibGlzaGVkIjtzOjU6ImxhYmVsIjtzOjk6IlB1Ymxpc2hlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjI3ZDU4ZjE0NDNkZDgxODI5Y2Q5ZTk2ODFiZjU5NjMwX2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjQ6IlNsdWciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZDU0YWJiOGUxNzcyNDU3YTlkMTM4YmU2NDc3YjY5ZjRfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InNsdWciO3M6NToibGFiZWwiO3M6NDoiU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIyZGZmY2FjYWVlZmE5YWRhYzNmZGFlY2QzYmJlY2JlNF9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiaXNfcHVibGlzaGVkIjtzOjU6ImxhYmVsIjtzOjk6IlB1Ymxpc2hlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImFhNmY5NzE1ZjEwYjZjNjE1NTdjNWRkNWJjMmE4ZjY5X2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjQ6IlNsdWciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiN2NjOTk3NThkYmExMWUyYTY3Y2VlNGNlYTUzMzcyMmZfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InNsdWciO3M6NToibGFiZWwiO3M6NDoiU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIzZjg5MTJjOTc0NWRlNDkyOWNlODc2MDFjZTRlMjE3YV9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiaXNfcHVibGlzaGVkIjtzOjU6ImxhYmVsIjtzOjk6IlB1Ymxpc2hlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjA0NjA5Nzc1NjBmNjFkODk2NWY5Yjc4N2Y1MDI5NDM2X2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjQ6IlNsdWciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiY2VkN2Q0NGFlZTMwMDFmODZkYjU0OGU5ZWI4Nzg5NThfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InNsdWciO3M6NToibGFiZWwiO3M6NDoiU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI5MTIzNTRhN2ZiNWU4MmVhMDhlY2MzZTMzNDgwZjFjMF9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiaXNfcHVibGlzaGVkIjtzOjU6ImxhYmVsIjtzOjk6IlB1Ymxpc2hlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImNhMWU2YzgxZTNhMzJmNDViNmY5YjhjMDZkMGYzM2UyX2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjQ6IlNsdWciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiNWM2Y2NiYTRmODVlN2UzMjE0NTU0MWU5YmUwMDgxZjVfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InNsdWciO3M6NToibGFiZWwiO3M6NDoiU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI0OTFmYTNlODIwMTY3ZGNjYjkwNzhiNDQ4ODI1MDhiOV9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiaXNfcHVibGlzaGVkIjtzOjU6ImxhYmVsIjtzOjk6IlB1Ymxpc2hlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImMyY2ExMmYwZGY2YjgyNDYwOGE1OTViZWFhY2Q3NjQ5X2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjQ6IlNsdWciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZTBkMGEzMWI0ZDhhZjE2YWFmMmYwMTY3NmZkOTEwYTFfY29sdW1ucyI7YTo1OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InNsdWciO3M6NToibGFiZWwiO3M6NDoiU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJzb3J0X29yZGVyIjtzOjU6ImxhYmVsIjtzOjEwOiJTb3J0IG9yZGVyIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiNjdmYjk3OWJhMzk1MjRlMzAzM2I2ZmQyYTYyZmIyM2JfY29sdW1ucyI7YToyOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6NToiVGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJlNjQ0ODMzZjRlNGUwODcxMjMxNWRhNzFiMzNmYWNkMl9jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJhdmF0YXIiO3M6NToibGFiZWwiO3M6NToiUGhvdG8iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6NDoiTmFtZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiZW1haWwiO3M6NToibGFiZWwiO3M6NToiRW1haWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InJvbGUiO3M6NToibGFiZWwiO3M6NDoiUm9sZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiaXNfYWN0aXZlIjtzOjU6ImxhYmVsIjtzOjY6IkFjdGl2ZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6NzoiQ3JlYXRlZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fXM6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1784669626);

-- --------------------------------------------------------

--
-- Table structure for table `specialist_doctors`
--

CREATE TABLE `specialist_doctors` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialist_doctors`
--

INSERT INTO `specialist_doctors` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Doctors', 'specialist-doctors ', NULL, '{\"doctors\": [{\"alt\": \"doctor\", \"name\": \"Dr. Soulos Nyirenda\", \"image\": \"images/team/doctor-2.jpg\", \"specialty\": \"Urology Specialist\"}, {\"alt\": \"doctor\", \"name\": \"Dr. Jessica Chakwana\", \"image\": \"images/team/doctor-lab-3.jpg\", \"specialty\": \"Pediatrics Specialist\"}, {\"alt\": \"doctor\", \"name\": \"Dr. Delia Munthali Mabedi\", \"image\": \"images/team/doctor-lab-3.jpg\", \"specialty\": \"ICU Specialist\"}, {\"alt\": \"doctor\", \"name\": \"Dr. Maranatha Banda\", \"image\": \"images/team/doctor-2.jpg\", \"specialty\": \"General Medicine\"}, {\"alt\": \"doctor\", \"name\": \"DR. Andyone E-Gov\", \"image\": \"images/team/doctor-lab-3.jpg\", \"specialty\": \"Software Developer\"}, {\"alt\": \"doctor\", \"name\": \"Dr. Dzuze\", \"image\": \"images/team/event-2.jpg\", \"specialty\": \"Chief Medical Officer\"}, {\"alt\": \"doctor\", \"name\": \"Mr. Chipembo Soko\", \"image\": \"images/team/doctor-2.jpg\", \"specialty\": \"Radiology Specialist\"}, {\"alt\": \"doctor\", \"name\": \"Dr. Maguy Kabeya\", \"image\": \"images/team/doctor-lab-3.jpg\", \"specialty\": \"Obs & Gynaecology\"}, {\"alt\": \"doctor\", \"name\": \"Dr. Olaf Bach\", \"image\": \"images/team/event-2.jpg\", \"specialty\": \"Orthopedic Surgeon\"}], \"cta_text\": \"Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.\", \"cta_title\": \"Dedicated to Your Health & Well-being\", \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.services\", \"page_description\": \"Meet our experienced medical professionals dedicated to quality patient care.\", \"cta_button_1_text\": \"Get in Touch\", \"cta_button_2_text\": \"Our Services\", \"page_heading_label\": \"Our Expert\", \"page_heading_highlight\": \"Doctors\"}', 1, '2026-07-20 19:14:04', '2026-07-20 19:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Organisational Structure', 'organisational-structure', '', '{\"intro\": \"Our structured approach to healthcare management and clinical excellence.\", \"heading\": \"ZCH Organisational Structure\", \"cta_text\": \"Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.\", \"chart_alt\": \"ZCH Organisational Chart\", \"cta_title\": \"Dedicated to Your Health & Well-being\", \"chart_image\": \"images/gallery/structure.jpg\", \"cta_button_1_url\": \"frontend.contact\", \"cta_button_2_url\": \"frontend.services\", \"cta_button_1_text\": \"Get in Touch\", \"cta_button_2_text\": \"Our Services\"}', 1, '2026-06-14 01:13:48', '2026-06-14 01:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_pages`
--

CREATE TABLE `testimonial_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `content_data` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_pages`
--

INSERT INTO `testimonial_pages` (`id`, `title`, `slug`, `content_html`, `content_data`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Patient Testimonials', 'testimonials', NULL, '{\"note_text\": \"Zomba Central Hospital, your health, our commitment. #HealingWithDignity\", \"page_heading\": \"Testimonials\", \"testimonials\": [{\"tag\": \"Maternity & Childbirth\", \"date\": \"March 2025\", \"name\": \"Esther Banda\", \"text\": \"The maternity team at Zomba Central Hospital treated me like family. During my delivery, the nurses were so encouraging and professional. I felt safe and cared for every step of the way. My baby boy arrived healthy, and I\'ll forever be grateful.\", \"rating\": 5, \"initials\": \"EB\"}, {\"tag\": \"General Surgery\", \"date\": \"January 2025\", \"name\": \"John Phiri\", \"text\": \"After my hernia surgery, I was nervous about recovery, but the surgical ward staff were exceptional. They explained everything, managed my pain with care, and followed up even after discharge. Truly world-class dedication.\", \"rating\": 5, \"initials\": \"JP\"}, {\"tag\": \"Pediatrics (Mother)\", \"date\": \"December 2024\", \"name\": \"Grace Mwale\", \"text\": \"My 3-year-old daughter had severe malaria. The pediatric team worked tirelessly, day and night. They not only saved her life but also comforted me as a worried mother. The new children\'s wing is a blessing for Zomba.\", \"rating\": 5, \"initials\": \"GM\"}, {\"tag\": \"Chronic Care / Diabetes\", \"date\": \"February 2025\", \"name\": \"Davie Likongwe\", \"text\": \"Living with diabetes requires constant monitoring. The outpatient clinic at Zomba Central Hospital made managing my condition easier. The staff are respectful, medication is consistently available, and the health talks changed my lifestyle.\", \"rating\": 5, \"initials\": \"DL\"}, {\"tag\": \"Emergency & Trauma\", \"date\": \"November 2024\", \"name\": \"Ruth Nkhoma\", \"text\": \"I was rushed to the emergency department after a road accident. The trauma team acted swiftly, with compassion and skill. Thanks to their fast decision-making and the modern equipment, I recovered faster than expected. Asante sana!\", \"rating\": 5, \"initials\": \"RN\"}, {\"tag\": \"Mental Health & Counseling\", \"date\": \"April 2025\", \"name\": \"Hastings Maluwa\", \"text\": \"Seeking mental health support was never easy for me. But the counseling unit at Zomba Central Hospital is a safe haven. The therapists listened without judgment and guided me back to stability. I\'m living proof that healing starts here.\", \"rating\": 4, \"initials\": \"HM\"}], \"eyebrow_label\": \"genuine voices\", \"page_description\": \"Stories of care, healing, and hope from our patients and families. These experiences reflect the dedication of our teams across maternity, surgery, pediatrics, emergency care, chronic care, and counseling services at Zomba Central Hospital.\"}', 1, '2026-07-20 23:44:39', '2026-07-21 00:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'viewer',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `avatar`, `is_active`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'super_admin', NULL, 1, 'admin@zch.gov.mw', NULL, '$2y$12$re2cAMz76RRZpC/y6r9iMeEnCbsszeny6MCwyZmoPlZBIrMN8KtB2', NULL, '2026-06-04 09:42:11', '2026-07-21 19:25:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `career_pages`
--
ALTER TABLE `career_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `career_pages_slug_unique` (`slug`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_slug_unique` (`slug`);

--
-- Indexes for table `downloads_pages`
--
ALTER TABLE `downloads_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `downloads_pages_slug_unique` (`slug`);

--
-- Indexes for table `events_pages`
--
ALTER TABLE `events_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_pages_slug_unique` (`slug`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faqs_slug_unique` (`slug`);

--
-- Indexes for table `footer_pages`
--
ALTER TABLE `footer_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `footer_pages_slug_unique` (`slug`);

--
-- Indexes for table `gallery_pages`
--
ALTER TABLE `gallery_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gallery_pages_slug_unique` (`slug`);

--
-- Indexes for table `header_pages`
--
ALTER TABLE `header_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `header_pages_slug_unique` (`slug`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `latest_news_slug_unique` (`slug`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `management_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_application_pages`
--
ALTER TABLE `online_application_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `online_application_pages_slug_unique` (`slug`);

--
-- Indexes for table `organograms`
--
ALTER TABLE `organograms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organograms_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `service_pages`
--
ALTER TABLE `service_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_pages_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `specialist_doctors`
--
ALTER TABLE `specialist_doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `specialist_doctors_slug_unique` (`slug`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `structures_slug_unique` (`slug`);

--
-- Indexes for table `testimonial_pages`
--
ALTER TABLE `testimonial_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_pages_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_pages`
--
ALTER TABLE `career_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `downloads_pages`
--
ALTER TABLE `downloads_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_pages`
--
ALTER TABLE `events_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_pages`
--
ALTER TABLE `footer_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_pages`
--
ALTER TABLE `gallery_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_pages`
--
ALTER TABLE `header_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `online_application_pages`
--
ALTER TABLE `online_application_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organograms`
--
ALTER TABLE `organograms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_pages`
--
ALTER TABLE `service_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialist_doctors`
--
ALTER TABLE `specialist_doctors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial_pages`
--
ALTER TABLE `testimonial_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
