SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

CREATE TABLE `anxiety_exam` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `exam_marke` int(11) NOT NULL,
  `exam` text NOT NULL,
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `bike_exam` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `exam_mark` int(11) NOT NULL,
  `exam` text NOT NULL,
  `branch` text NOT NULL,
  `sname` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `childe_phobia_exam` (
  `id` int(11) NOT NULL,
  `exam_marke` int(11) NOT NULL,
  `exam` text NOT NULL,
  `names` int(11) NOT NULL,
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `complaints` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `complaint_number` int(11) NOT NULL DEFAULT 0,
  `center` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `health_facility` varchar(255) NOT NULL DEFAULT '',
  `phone_number` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `action` varchar(255) NOT NULL DEFAULT '',
  `process` varchar(255) NOT NULL DEFAULT '',
  `date_data_come` date NOT NULL DEFAULT current_timestamp(),
  `sender_name` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `consult_his_psychology` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `intro_consulation` text NOT NULL,
  `type_consulation` text NOT NULL,
  `actions` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `Physical_Examination` text NOT NULL,
  `lap` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  `medical` text NOT NULL,
  `quantity` text NOT NULL,
  `medical_number` text DEFAULT NULL,
  `appraisal` varchar(20) NOT NULL DEFAULT '',
  `recover` text NOT NULL DEFAULT '',
  `psyshological_diagnosis` text NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `download_form` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sender_name` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `step` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `eduction_session` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `phone` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `detals` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` timestamp NOT NULL DEFAULT current_timestamp(),
  `governorate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `emp_day_rebort` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `m_n_rebort_1_17` int(11) NOT NULL,
  `m_b_rebort_1_17` int(11) NOT NULL,
  `m_n_rebort_18` int(11) NOT NULL,
  `m_b_rebort_18` int(11) NOT NULL,
  `f_n_rebort_1_17` int(11) NOT NULL,
  `f_b_rebort_1_17` int(11) NOT NULL,
  `f_n_rebort_18` int(11) NOT NULL,
  `f_b_rebort_18` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `escort` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp(),
  `code` int(11) NOT NULL,
  `name` text NOT NULL,
  `brithday` date NOT NULL,
  `sex` varchar(20) NOT NULL,
  `place` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `evaluation_form` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `file` text NOT NULL,
  `month` varchar(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `evaluation_reply` (
  `id` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `file` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `month` varchar(10) NOT NULL,
  `complete_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `facebook` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `phone` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `detals` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `file` text NOT NULL,
  `step` text NOT NULL,
  `auth` varchar(5) NOT NULL DEFAULT 'False',
  `auth_date` date NOT NULL,
  `auth_user` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `send` varchar(5) NOT NULL,
  `message` varchar(5) NOT NULL DEFAULT 'False',
  `falidemessage` varchar(5) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `group_sessions` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `code` text NOT NULL,
  `problem_many` text NOT NULL,
  `section_name` text NOT NULL,
  `section_type` text NOT NULL,
  `projict` text NOT NULL,
  `attendance` int(11) NOT NULL,
  `techniques` text NOT NULL,
  `task_andduties` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `hamilton_exam` (
  `id` int(11) NOT NULL,
  `exam_mark` int(11) NOT NULL,
  `names` text NOT NULL,
  `branch` text NOT NULL,
  `sname` text NOT NULL,
  `all_exam` text NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text NOT NULL,
  `a8` text NOT NULL,
  `a9` text NOT NULL,
  `a10` text NOT NULL,
  `a11` text NOT NULL,
  `a12` text NOT NULL,
  `a13` text NOT NULL,
  `a14` text NOT NULL,
  `a15` text NOT NULL,
  `a16` text NOT NULL,
  `a17` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `hotline` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` int(11) NOT NULL,
  `brithday` date NOT NULL,
  `date` date NOT NULL,
  `phone` text DEFAULT NULL,
  `frome_time` time NOT NULL,
  `to_time` time NOT NULL,
  `brithday_blace` text NOT NULL DEFAULT '',
  `sex` text NOT NULL,
  `place` text NOT NULL,
  `social_status` text NOT NULL,
  `department` text NOT NULL DEFAULT '',
  `briefness` text NOT NULL,
  `plasce_from_come` text NOT NULL DEFAULT '',
  `becouse_come` text NOT NULL DEFAULT '',
  `date_come` date NOT NULL DEFAULT '0000-00-00',
  `studing` text NOT NULL,
  `work` text NOT NULL,
  `know_our` varchar(15) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `hotline_session` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `section_type` text NOT NULL,
  `detals` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `hotline_spf` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `individual_sessions` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `date` date NOT NULL,
  `section` text NOT NULL,
  `address` text NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `select_s` text NOT NULL,
  `agrat` text NOT NULL,
  `alasalib` text NOT NULL,
  `taks` text NOT NULL,
  `violense` text NOT NULL,
  `recover` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `inquiry_hotline` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `phone` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `inquiry` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `lap` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `branch` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `T_WBC` varchar(20) NOT NULL,
  `Neutrophil` varchar(20) NOT NULL,
  `Lymphocyte` varchar(20) NOT NULL,
  `Monocyte` varchar(20) NOT NULL,
  `Eosinophil` varchar(20) NOT NULL,
  `Basophil` varchar(20) NOT NULL,
  `Platelats` varchar(20) NOT NULL,
  `Hb` varchar(20) NOT NULL,
  `PCV` varchar(20) NOT NULL,
  `GPT` varchar(20) NOT NULL,
  `GOT` varchar(20) NOT NULL,
  `ALP` varchar(20) NOT NULL,
  `T_B` varchar(20) NOT NULL,
  `D_B` varchar(20) NOT NULL,
  `Urea` varchar(20) NOT NULL,
  `Creatinine` varchar(20) NOT NULL,
  `HBsAg` varchar(20) NOT NULL,
  `HIV1_2` varchar(20) NOT NULL,
  `Prolactine` varchar(20) NOT NULL,
  `HCVAb` varchar(20) NOT NULL,
  `TSH` varchar(20) NOT NULL,
  `FT3` varchar(20) NOT NULL,
  `FT4` varchar(20) NOT NULL,
  `RBS` varchar(20) NOT NULL,
  `FBS` varchar(20) NOT NULL,
  `HbA1C` varchar(20) NOT NULL,
  `Cocaine` varchar(20) NOT NULL,
  `Opiate` varchar(20) NOT NULL,
  `Morphine` varchar(20) NOT NULL,
  `Cannabis` varchar(20) NOT NULL,
  `Heroin` varchar(20) NOT NULL,
  `Benzodiazepine` varchar(20) NOT NULL,
  `Tramadol` varchar(20) NOT NULL,
  `Pethidine` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `mange_convert` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `type_con_from` text NOT NULL,
  `side_con_from` text NOT NULL,
  `project_name` text NOT NULL,
  `violense` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `mange_convert` varchar(50) NOT NULL DEFAULT '',
  `person_phone` int(11) NOT NULL DEFAULT 0,
  `person_name` text NOT NULL,
  `find` text NOT NULL,
  `side_con_to` text NOT NULL,
  `type_con_to` text NOT NULL,
  `type_con_out` text NOT NULL,
  `side_con_out` text NOT NULL,
  `type_con_come_out` text NOT NULL,
  `side_con_come_out` text NOT NULL,
  `sex_s` text NOT NULL DEFAULT '',
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `mange_convert_ex_side` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `mania_exam` (
  `id` int(11) NOT NULL,
  `names` int(11) NOT NULL,
  `exam_mark` int(11) NOT NULL,
  `exam` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `mmbi` (
  `id` int(11) NOT NULL,
  `s_k` int(11) NOT NULL,
  `h_i` int(11) NOT NULL,
  `h_s` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `m_f` int(11) NOT NULL,
  `s_i` int(11) NOT NULL,
  `b_a` int(11) NOT NULL,
  `b_t` int(11) NOT NULL,
  `m_a` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `u` text NOT NULL,
  `l` int(11) NOT NULL,
  `y` text NOT NULL,
  `names` int(11) NOT NULL,
  `v` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `b_d` int(11) NOT NULL,
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `new_eduction_session` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `detals` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `personality_exam` (
  `ID` int(11) NOT NULL,
  `S` int(11) NOT NULL,
  `exam` text NOT NULL,
  `names` int(11) NOT NULL,
  `A1` int(11) NOT NULL,
  `A2` int(11) NOT NULL,
  `A3` int(11) NOT NULL,
  `A4` int(11) NOT NULL,
  `A5` int(11) NOT NULL,
  `A6` int(11) NOT NULL,
  `A7` int(11) NOT NULL,
  `A8` int(11) NOT NULL,
  `A9` int(11) NOT NULL,
  `A10` int(11) NOT NULL,
  `A11` int(11) NOT NULL,
  `A12` int(11) NOT NULL,
  `A13` int(11) NOT NULL,
  `A14` int(11) NOT NULL,
  `branch` text NOT NULL,
  `sname` text NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pharmacy` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `voucher_number` varchar(255) DEFAULT NULL,
  `voucher_date` date DEFAULT NULL,
  `scientific_name` varchar(255) DEFAULT NULL,
  `commercial_name` varchar(255) DEFAULT NULL,
  `package_type` int(11) DEFAULT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_of_production` date NOT NULL,
  `expiration_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `residual` int(11) NOT NULL,
  `exporter` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'old',
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `psychiatristofstrike` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `note` text NOT NULL,
  `note1` text NOT NULL,
  `note2` text NOT NULL,
  `slide` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `psychiatrist_talk` (
  `branch` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `sick` longtext NOT NULL,
  `facilities` longtext NOT NULL,
  `date` date NOT NULL,
  `slide` longtext NOT NULL,
  `note` longtext NOT NULL,
  `note1` longtext NOT NULL,
  `note2` longtext NOT NULL,
  `psychological` longtext NOT NULL,
  `mental` longtext NOT NULL,
  `organic` longtext NOT NULL,
  `operation` longtext NOT NULL,
  `anothe` longtext NOT NULL,
  `father` longtext NOT NULL,
  `mather` longtext NOT NULL,
  `brothers` text NOT NULL,
  `famlt_sick` text NOT NULL,
  `famly_live` text NOT NULL,
  `famly_mony` text NOT NULL,
  `born` text NOT NULL,
  `releshinship_childern` text NOT NULL,
  `resinsh` text NOT NULL,
  `releshinship_ather` text NOT NULL,
  `problem` text NOT NULL,
  `studing_level` text NOT NULL,
  `releshinship_student` text NOT NULL,
  `work` text NOT NULL,
  `wife` text NOT NULL,
  `children` text NOT NULL,
  `releshinship_wife` text NOT NULL,
  `agitator` text NOT NULL,
  `ideas` text NOT NULL,
  `copyright` text NOT NULL,
  `releshinship` text NOT NULL,
  `activity` text NOT NULL,
  `adman` text NOT NULL,
  `violense` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp(),
  `session_goal` varchar(2000) DEFAULT NULL,
  `therapeutic_intervention` varchar(2000) DEFAULT NULL,
  `homework` varchar(2000) DEFAULT NULL,
  `improvement_percentage` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `psyshological` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `end_diagnosis` text NOT NULL,
  `visites` varchar(40) NOT NULL,
  `medical` text NOT NULL,
  `quantity` text NOT NULL,
  `summerie` text NOT NULL,
  `date` date NOT NULL,
  `Consciousness` text NOT NULL,
  `Orientations` text NOT NULL,
  `Attention_Concentration` text NOT NULL,
  `Memory` text NOT NULL,
  `Appearance` text NOT NULL,
  `Affect_Mood` text NOT NULL,
  `Suicide_Homicide` text NOT NULL,
  `Speech` text NOT NULL,
  `Thinking` text NOT NULL,
  `Perception` text NOT NULL,
  `Insight` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `psyshological` varchar(50) NOT NULL DEFAULT '',
  `lap` text NOT NULL,
  `sub_diagnosis` text NOT NULL,
  `medical_number` text NOT NULL DEFAULT '',
  `appraisal` varchar(20) NOT NULL DEFAULT '',
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `psyshological_visit_sleeping` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `date` date NOT NULL,
  `summerie` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pure_pharmacy` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `code` int(11) NOT NULL,
  `name` text NOT NULL,
  `quantity` text NOT NULL,
  `Epilepsy` text NOT NULL,
  `type` text NOT NULL,
  `record_type` varchar(255) NOT NULL DEFAULT 'new',
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `reevaluate_psychic` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `back_date` date NOT NULL,
  `evaluation` text NOT NULL,
  `summary` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `violense` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `type` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `sender_name` int(11) NOT NULL,
  `branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `request_name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `resption` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` bigint(20) NOT NULL,
  `brithday` date NOT NULL,
  `date` date NOT NULL,
  `phone` text NOT NULL,
  `brithday_blace` text NOT NULL DEFAULT '',
  `sex` text NOT NULL DEFAULT '',
  `place` text NOT NULL DEFAULT '',
  `social_status` text NOT NULL DEFAULT '',
  `department` text NOT NULL DEFAULT '',
  `isolation` text NOT NULL DEFAULT '',
  `villag` text NOT NULL DEFAULT '',
  `briefness` text NOT NULL DEFAULT '',
  `plasce_from_come` text NOT NULL DEFAULT '',
  `becouse_come` text NOT NULL DEFAULT '',
  `date_come` date DEFAULT '0000-00-00',
  `studing` text NOT NULL DEFAULT '',
  `identity` text NOT NULL DEFAULT '',
  `identity_number` bigint(20) NOT NULL DEFAULT 0,
  `identity_place` text NOT NULL DEFAULT '',
  `laying` text NOT NULL DEFAULT '',
  `brother` int(11) NOT NULL,
  `work` text NOT NULL DEFAULT '',
  `son` int(11) NOT NULL,
  `daughter` int(11) NOT NULL,
  `number_of_wife` int(11) NOT NULL,
  `age_when_married` int(11) NOT NULL,
  `sister` int(11) NOT NULL,
  `know_our` varchar(15) NOT NULL DEFAULT '',
  `sender_name` int(11) NOT NULL,
  `view` varchar(30) NOT NULL DEFAULT '',
  `project` text NOT NULL DEFAULT '',
  `ticket_number` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp(),
  `Disability` text NOT NULL DEFAULT '',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `return_pharmacy` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `number` bigint(20) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `reason` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `rule` (
  `id_rule` int(11) NOT NULL,
  `rule_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `sana` (
  `id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `code` int(11) NOT NULL,
  `date` date NOT NULL,
  `services` text NOT NULL,
  `Disability` text NOT NULL,
  `brithday` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `social_status` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `diagnosis` text NOT NULL,
  `type_con_from` varchar(100) NOT NULL,
  `side_con_from` varchar(100) NOT NULL,
  `type_con_to` varchar(100) NOT NULL,
  `side_con_to` varchar(100) NOT NULL,
  `branch` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `scientific_pharmacy_name` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `branch` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `project` text NOT NULL,
  `awarness` text NOT NULL,
  `theme` text NOT NULL,
  `date` date NOT NULL,
  `province` text NOT NULL,
  `code` int(11) NOT NULL,
  `list` text NOT NULL,
  `loction` text NOT NULL,
  `femal` int(11) NOT NULL,
  `girl` int(11) NOT NULL,
  `mene` int(11) NOT NULL,
  `boy` int(11) NOT NULL,
  `s_femal` int(11) NOT NULL,
  `s_girl` int(11) NOT NULL,
  `s_mene` int(11) NOT NULL,
  `s_boy` int(11) NOT NULL,
  `l_femal` int(11) NOT NULL,
  `l_girl` int(11) NOT NULL,
  `l_mene` int(11) NOT NULL,
  `l_boy` int(11) NOT NULL,
  `broj` text NOT NULL,
  `first_axis` text NOT NULL,
  `secnd_axis` text NOT NULL,
  `third_axis` text NOT NULL,
  `forth_axis` text NOT NULL,
  `fifth_axis` text NOT NULL,
  `axis_project` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `code1` text NOT NULL,
  `escort_code` text NOT NULL,
  `branch` int(11) NOT NULL,
  `number_session` text NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sleeping_afternoon` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `visites` text NOT NULL,
  `medicin_m` text NOT NULL,
  `hart_m` text NOT NULL,
  `heat_m` text NOT NULL,
  `breathe_m` text NOT NULL,
  `inside_m` text NOT NULL,
  `outside_m` text NOT NULL,
  `medical` text NOT NULL,
  `program` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `exit_date` date NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `sleeping_morning` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `visites` text NOT NULL,
  `medicin_m` text NOT NULL,
  `hart_m` text NOT NULL,
  `heat_m` text NOT NULL,
  `breathe_m` text NOT NULL,
  `inside_m` text NOT NULL,
  `outside_m` text NOT NULL,
  `medical` text NOT NULL,
  `program` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` int(11) NOT NULL,
  `exit_date` date NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `sleeping_night` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `visites` text NOT NULL,
  `medicin_m` text NOT NULL,
  `hart_m` text NOT NULL,
  `heat_m` text NOT NULL,
  `breathe_m` text NOT NULL,
  `inside_m` text NOT NULL,
  `outside_m` text NOT NULL,
  `medical` text NOT NULL,
  `program` text NOT NULL,
  `date` date NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `exit_date` date NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `social_concern_exam` (
  `id` int(11) NOT NULL,
  `exam_mark` int(11) NOT NULL,
  `reactivity` int(11) NOT NULL,
  `concern` int(11) NOT NULL,
  `accompanying_symptoms` int(11) NOT NULL,
  `names` int(11) NOT NULL,
  `branch` text NOT NULL,
  `sname` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `social_media_channels` (
  `id` int(11) NOT NULL,
  `code` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `city` varchar(255) NOT NULL,
  `inquiry_type` tinyint(4) NOT NULL,
  `channel_type` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `data_date_come` date NOT NULL,
  `service_type` tinyint(4) NOT NULL,
  `sender_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `social_phobia_exam` (
  `id` int(11) NOT NULL,
  `exam_mark` int(11) NOT NULL,
  `exam` text NOT NULL,
  `names` int(11) NOT NULL,
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `rule_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `branch_id` int(11) NOT NULL,
  `vacation` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `vacation_request` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `emp` int(11) NOT NULL,
  `date` date NOT NULL,
  `emp_ok` int(11) NOT NULL,
  `manger_branch_ok` int(11) NOT NULL,
  `manger_ok` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `date_data_code` date NOT NULL DEFAULT current_timestamp(),
  `sender_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `vist` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `code` int(11) NOT NULL,
  `father` text NOT NULL,
  `place` text NOT NULL,
  `phone` int(11) NOT NULL,
  `vist_number` int(11) NOT NULL,
  `brithday` int(11) NOT NULL,
  `vist` date NOT NULL,
  `know_our` text NOT NULL,
  `sender_name` int(11) NOT NULL,
  `date_data_come` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `week_evaluation_form` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `file` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `week_evaluation_reply` (
  `id` int(11) NOT NULL,
  `sender_name` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `file` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `anxiety_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bike_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `childe_phobia_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `consult_his_psychology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `download_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `eduction_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`);

ALTER TABLE `emp_day_rebort`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `escort`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `evaluation_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_name` (`sender_name`),
  ADD KEY `emp` (`emp`);

ALTER TABLE `evaluation_reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `facebook`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `group_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `hamilton_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `hotline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `hotline_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `hotline_spf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `individual_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `inquiry_hotline`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `lap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `mange_convert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `mange_convert_ex_side`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `mania_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `mmbi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `new_eduction_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_name` (`sender_name`),
  ADD KEY `branch` (`branch`);

ALTER TABLE `personality_exam`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `psychiatristofstrike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `psychiatrist_talk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `psyshological`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `psyshological_visit_sleeping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `pure_pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `reevaluate_psychic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `request_name`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `resption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `return_pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `return_pharmacy_ibfk_1` (`item_id`);

ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_rule`);

ALTER TABLE `sana`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `scientific_pharmacy_name`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `sleeping_afternoon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `sleeping_morning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `sleeping_night`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `social_concern_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `social_media_channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `social_phobia_exam`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_id` (`rule_id`),
  ADD KEY `branch_id` (`branch_id`);

ALTER TABLE `vacation_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `emp` (`emp`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `vist`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `week_evaluation_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp` (`emp`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `week_evaluation_reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `sender_name` (`sender_name`);

ALTER TABLE `anxiety_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

ALTER TABLE `bike_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `childe_phobia_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `complaints`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `consult_his_psychology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3117;

ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19360;

ALTER TABLE `download_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

ALTER TABLE `eduction_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5008;

ALTER TABLE `emp_day_rebort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14973;

ALTER TABLE `escort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16871;

ALTER TABLE `evaluation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

ALTER TABLE `evaluation_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;

ALTER TABLE `facebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

ALTER TABLE `group_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2640;

ALTER TABLE `hamilton_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

ALTER TABLE `hotline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7301;

ALTER TABLE `hotline_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `hotline_spf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1274;

ALTER TABLE `individual_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25822;

ALTER TABLE `inquiry_hotline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

ALTER TABLE `lap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1434;

ALTER TABLE `mange_convert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35350;

ALTER TABLE `mange_convert_ex_side`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

ALTER TABLE `mania_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

ALTER TABLE `mmbi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

ALTER TABLE `new_eduction_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `personality_exam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1130;

ALTER TABLE `psychiatristofstrike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

ALTER TABLE `psychiatrist_talk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8185;

ALTER TABLE `psyshological`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27800;

ALTER TABLE `psyshological_visit_sleeping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

ALTER TABLE `pure_pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24092;

ALTER TABLE `reevaluate_psychic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1378;

ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `request_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `resption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55732;

ALTER TABLE `return_pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

ALTER TABLE `sana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4201;

ALTER TABLE `scientific_pharmacy_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

ALTER TABLE `sleeping_afternoon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2328;

ALTER TABLE `sleeping_morning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2404;

ALTER TABLE `sleeping_night`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2292;

ALTER TABLE `social_concern_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `social_media_channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

ALTER TABLE `social_phobia_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

ALTER TABLE `vacation_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `vist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8937;

ALTER TABLE `week_evaluation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

ALTER TABLE `week_evaluation_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2161;

ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

ALTER TABLE `consult_his_psychology`
  ADD CONSTRAINT `consult_his_psychology_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `consult_his_psychology_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `download_form`
  ADD CONSTRAINT `download_form_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `download_form_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `eduction_session`
  ADD CONSTRAINT `eduction_session_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`);

ALTER TABLE `emp_day_rebort`
  ADD CONSTRAINT `emp_day_rebort_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `emp_day_rebort_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `escort`
  ADD CONSTRAINT `escort_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `escort_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `evaluation_form`
  ADD CONSTRAINT `evaluation_form_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `evaluation_form_ibfk_2` FOREIGN KEY (`emp`) REFERENCES `user` (`id`);

ALTER TABLE `evaluation_reply`
  ADD CONSTRAINT `evaluation_reply_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `forms`
  ADD CONSTRAINT `forms_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `forms_ibfk_3` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `group_sessions`
  ADD CONSTRAINT `group_sessions_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `group_sessions_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `hotline`
  ADD CONSTRAINT `hotline_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `hotline_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `hotline_session`
  ADD CONSTRAINT `hotline_session_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `hotline_session_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `hotline_spf`
  ADD CONSTRAINT `hotline_spf_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `hotline_spf_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `individual_sessions`
  ADD CONSTRAINT `individual_sessions_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `individual_sessions_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `lap`
  ADD CONSTRAINT `lap_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `lap_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `mange_convert`
  ADD CONSTRAINT `mange_convert_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `mange_convert_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `new_eduction_session`
  ADD CONSTRAINT `new_eduction_session_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `new_eduction_session_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`);

ALTER TABLE `psychiatristofstrike`
  ADD CONSTRAINT `psychiatristofstrike_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `psychiatristofstrike_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `psychiatrist_talk`
  ADD CONSTRAINT `psychiatrist_talk_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `psychiatrist_talk_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `psyshological`
  ADD CONSTRAINT `psyshological_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `psyshological_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `psyshological_visit_sleeping`
  ADD CONSTRAINT `psyshological_visit_sleeping_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `psyshological_visit_sleeping_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `pure_pharmacy`
  ADD CONSTRAINT `pure_pharmacy_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `pure_pharmacy_ibfk_3` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `reevaluate_psychic`
  ADD CONSTRAINT `reevaluate_psychic_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `reevaluate_psychic_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `resption`
  ADD CONSTRAINT `resption_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `resption_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `return_pharmacy`
  ADD CONSTRAINT `return_pharmacy_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `pharmacy` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `sleeping_afternoon`
  ADD CONSTRAINT `sleeping_afternoon_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `sleeping_morning`
  ADD CONSTRAINT `sleeping_morning_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `social_media_channels`
  ADD CONSTRAINT `social_media_channels_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`rule_id`) REFERENCES `rule` (`id_rule`);

ALTER TABLE `vacation_request`
  ADD CONSTRAINT `vacation_request_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `vacation_request_ibfk_2` FOREIGN KEY (`emp`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `vacation_request_ibfk_3` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

ALTER TABLE `week_evaluation_form`
  ADD CONSTRAINT `week_evaluation_form_ibfk_1` FOREIGN KEY (`emp`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `week_evaluation_form_ibfk_2` FOREIGN KEY (`sender_name`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO `branch` (`id`, `branch_name`) VALUES
(4, 'المركز الرئيسي صنعاء'),
(5, 'فرع اب'),
(6, 'فرع تعز'),
(7, 'مكتب تعز'),
(8, 'عدن');

INSERT INTO `rule` (`id_rule`, `rule_name`) VALUES
(1, 'none_active'),
(2, 'admin'),
(3, 'استقبال'),
(4, 'ادارة الحالة'),
(5, 'طبيب عام'),
(6, 'boss'),
(7, 'اخصائي نفسي'),
(8, 'رقود'),
(9, 'جلسات نوعيه'),
(10, 'مختبر'),
(11, 'صيدلية'),
(12, 'طبيب نفسي'),
(13, 'مدير مركز'),
(14, 'HR'),
(15, 'اخصائي نفسي و جلسات توعية'),
(16, 'الخط الساخن'),
(17, 'مشتريات'),
(18, 'استقبال و اخصائي نفسي'),
(19, 'مدير المراكز'),
(20, 'ادارة حالة و جلسات توعيه'),
(21, 'موظف'),
(22, 'مساعد مدير مشروع صنعاء'),
(23, 'مساعد مدير مشروع عدن'),
(24, 'رقابه  وتقييم'),
(25, 'جلسات توعية'),
(26, 'شكاوى');

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `rule_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `branch_id` int(11) NOT NULL,
  `vacation` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `username`, `password`, `rule_id`, `image`, `branch_id`, `vacation`, `type`) VALUES
(32, 'حذيفة صادق', 774808180, 'hothefa', '$2y$10$INWFPaMz31jsu3yXzV745.8n6dHmFj33mv3YUCVHmYch9veIeiW0O', 6, 'user.jpg', 6, 1, 'مركز'),
(43, 'د. علي يحيى حسين الصبري', 774470954, 'ali', '$2y$10$xD.tD/W88DWdQbF88AtsuOgmXQ/podtc7Bs0ayJuzkfmk0e.VSByu', 1, 'user.jpg', 5, 0, 'مركز'),
(44, 'د.مراد عبدالله صالح جارالله', 771839025, 'morad', '$2y$10$UdFjtoAK1S6owyw44tIQD.wxeEI7ydiaNRuY38x/2fAjQq5gEhGNu', 12, 'user.jpg', 5, 0, 'مركز'),
(45, 'تيسير يحيى امين البارق', 772663536, 'taysser', '$2y$10$nrzNuB4GA3rauCcjBH4V9Olkn1yy.OOaJDJjSawi43VVi8/QTJTEa', 7, 'user.jpg', 5, 0, 'مركز'),
(46, 'سميرة حمود ملهي الشهاري', 777386595, 'sameera', '$2y$10$Q0p9hJ6qN2fwfQ.XM.4iZuBGB65M4n5.PojazMsnlfWUtWlHoutp.', 15, 'user.jpg', 5, 0, 'مركز'),
(47, 'عفاف محمد احمد دبوان', 777521017, 'afaf', '$2y$10$/e.EwVBK.B7KS2q5ftmVOO9zlRtLAPmZXsHv73koHIsKKL9L.Dhf2', 4, 'user.jpg', 5, 0, 'مركز'),
(48, 'فضيلة محمد حسن الشعيبي', 777550068, 'fadila', '$2y$10$rR8jNPZ5iO9rXeojnX4PA.G2TTeN.ZEHXBr15CR6JV6qiM3oZ3/yG', 7, 'user.jpg', 5, 0, 'مركز'),
(49, 'أمة العليم عبدالله   الشامي', 770147028, 'amat', '$2y$10$DzUagSArNywQZZd3aQTj4OPcoPY7WIn3UumD9UjQIeLFPuwtnsLH6', 15, 'user.jpg', 5, 0, 'مركز'),
(50, 'اشجان عبده حمود الجلال', 771544525, 'ashgan', '$2y$10$/ufdEpIpgtrOQS1myAKGE.1YnCHd6hTp/G5BDLYyzAPse5rQxdDiK', 1, 'user.jpg', 5, 0, 'مركز'),
(51, 'خولة ثابت سالم الوصابي', 775897780, 'khowla', '$2y$10$hNMbp61MkUaxW6fxdSn.H.j6B6eXM1garHKdat46.zdW9Jv/9eFj.', 3, 'user.jpg', 5, 0, 'مركز'),
(52, 'الدكتور فؤاد', 777592624, 'fouad', '$2y$10$2F59WvI1rIGO9ocra.9XJes.SPGpZtmaXJEnTWO5NUGYHlVvPq4C2', 1, 'user.jpg', 5, 0, 'مركز'),
(53, 'إبراهيم قائد احمد خالد', 772759629, 'ibrahim', '$2y$10$WU0s3oQc.XhXY7htGoq/PeCwZMQ3zzB2V4ckxri9TG6CTDsVNpoMO', 13, 'user.jpg', 6, 0, 'مركز'),
(54, 'د.لمياء رشيد عبدالله حسان', 711218152, 'lamia', '$2y$10$1gzTN4GxQym7QHOtLKHxIOiUj5D0hxgN5tvlha/qSlnvg2LM4Ivgi', 5, 'user.jpg', 6, 0, 'مركز'),
(55, 'د.هنيه علي مهدي', 736419779, 'hania', '$2y$10$h.fP4za8JLbPnp6bKH7hD.CwdEETpoi6do1g0Fqahbwrp3si9em0i', 5, 'user.jpg', 6, 0, 'مركز'),
(56, 'د.عادل عبد السلام عبده ملهي', 771342722, 'adel', '$2y$10$8p96j/KUfithRqtPYQu0rOXVzYsBWYZIKLVefc4gHBwzDFRItNHsq', 12, 'user.jpg', 6, 0, 'مركز'),
(57, 'د.عبدالعزيز شايف شرف الحداد', 772193879, 'abdualaziz', '$2y$10$WvXFpqv88u0T277wjQOehemBY8Fei4vUMy7y0dnW.HY85Dn88RK/K', 12, 'user.jpg', 6, 0, 'مركز'),
(58, 'كرامه محمد منصور سنان', 737799883, 'kramah', '$2y$10$w/ZSAsoaDtANpxZSXqEtxuVgRCaUG5v/RD2286sJddDqvJTB0yt4.', 15, 'user.jpg', 6, 0, 'مركز'),
(59, 'لبنى عبد القاهر عبدالباقي المنيفي', 770317226, 'lubna', '$2y$10$o9.Cg9d8WUNooy1wcN1QYeS07cYVQUEyk9Bmedie0lmFaX8cBadke', 15, 'user.jpg', 6, 0, 'مركز'),
(60, 'هدى حسين علي السقاف', 774160064, 'huda', '$2y$10$e5kl1/ad6wBMTHyIZfLeUOFuiQhRxZm59HDrOu3i3Mc9XKdykL5Ia', 1, 'user.jpg', 6, 0, 'مركز'),
(61, 'فارس علي غالب البركاني', 777811830, 'fares', '$2y$10$DwRGU924vCl8zpQrZq.mGO.qDobjhM7oTRpVcshY4zhrKwbA00BU6', 11, 'user.jpg', 6, 0, 'مركز'),
(62, 'أسامة علي غالب حسان', 774734910, 'ossama', '$2y$10$DYmQ4Cyii6yzQUqQ5HjggusdEt3gIkKEAklJ4gHpqyX6HYcdxAbEW', 3, 'user.jpg', 6, 0, 'مركز'),
(63, 'اشجان سعيد هائل طارش', 773724850, 'ashgan tarsh', '$2y$10$wgs5WU8qZgOfIHDpakceseirKfPfqE/X/j9GzYv61HDTE84US940O', 8, 'user.jpg', 6, 0, 'مركز'),
(64, 'افراح علي محمد الأحمر', 770188342, 'afrah', '$2y$10$/2MlhXjhijH/ztK3E7PPQ.oIVlCXNDTnkh16ApJ.hVd7pne1TSL76', 8, 'user.jpg', 6, 0, 'مركز'),
(65, 'بسمة عاصم غالب عبده', 771536315, 'bassmah', '$2y$10$VIrUyCE8m2jQhOitWx0yxO2a7M7RBsx7XImyHiLE3SaCV8f0bzDu.', 8, 'user.jpg', 6, 0, 'مركز'),
(66, 'شيماء عبد الجبار حمود احمد', 716961935, 'shima,a', '$2y$10$s5v4YierMvW2wr5VO8OqFOtE3B637PMOGw0fGGwFkI0SOA73NbQCO', 8, 'user.jpg', 6, 0, 'مركز'),
(67, 'مشيرة مفرح علي مفرح', 739728097, 'mosheera', '$2y$10$nM2sDnZigDssJ4DZjmLycuFLYrZdhbTwkVTwfm4fW4W2ZCRaGsPgC', 8, 'user.jpg', 6, 0, 'مركز'),
(68, 'محمد حسن احمد ناجي', 770041940, 'mohammed', '$2y$10$dcRzupyEvry1EoJojJ3G9.hXTI4VAzY9K/bOyikqaFPqy31WM8sRK', 10, 'user.jpg', 6, 0, 'مركز'),
(69, 'توفيق العميسي', 771196976, 'tawfik', '$2y$10$1pijDQEwdj3cSQX0SNh0HOxQPs3fnUodoullB30Z6Dj/DxiS8YYe6', 11, 'user.jpg', 6, 0, 'مركز'),
(70, 'عرفات احمد علي السركال', 772891785, 'arafat', '$2y$10$HzNR4F2Z61YnfADrumwEauTe6JWaIR6lwmWEwZ5InINkEjZaCLDwy', 8, 'user.jpg', 5, 0, 'مركز'),
(71, 'سمر عبدالسلام', 774730188, 'Samar', '$2y$10$POvfvUvFoBQXizI59RlwKeShJ3/WEQUqDZbrSAePZx/H5/jYJCN6e', 14, 'user.jpg', 4, 0, 'مركز'),
(72, 'سالي', 771019115, 'sali', '$2y$10$ywKZ6iYiBWfi0tmsNwuuJecdgnuUAQxP9zR3krVDkKVUs/bcd.xj.', 8, 'user.jpg', 6, 0, 'مركز'),
(73, 'Lubna Hassan', 776770079, 'Lubna Hassan', '$2y$10$KyoH.CoozxfnNAiHx5lbYOb17MeHwqxjF8q03wmn..S3SgsT1dgYy', 2, 'user.jpg', 8, 0, 'مركز'),
(74, 'فاطمة محمد', 774649243, 'fatma', '$2y$10$G72jBN5GStOKuiQgnx/eb.KIjsFWgOv0jXL8n5C02il2PdXNVyldu', 16, 'user.jpg', 4, 0, 'مركز'),
(75, 'سامي الصلوي', 733637209, 'samee', '$2y$10$o13LLBzAfGGe/RQcl5ClY.O1CHsymeK6kbRQMQIK6ikB8FGmP7SfK', 18, 'user.jpg', 7, 0, 'مكتب'),
(76, 'سوسن  رشيد مثنى', 739881942, 'sosn', '$2y$10$V6ho8aAhK8kccRqfLJ.xL.ftCXNm/quHdVk6Dmr/ojqa.yULtZgB.', 20, 'user.jpg', 6, 0, 'مركز'),
(78, 'رضا', 772680468, 'rda', '$2y$10$Wy1WfMIbdIyMjUbg1v3NB.D.jL4zNNswYlfi2o3zhJb/kMq1al.ca', 8, 'user.jpg', 5, 0, 'مركز'),
(80, 'سهى السنحاني', 775070310, 'suha', '$2y$10$v7tAnG2REDpOoYmaXpwoLu5CpHQR.uW.IOYfdYSUVHgk9zDW3d1WK', 19, 'user.jpg', 4, 0, 'مركز'),
(81, 'شيماء الحاج', 773884410, 'shaima', '$2y$10$D0y049t2tkKkowop8vWmqOGfl.7F7lFaSPCEtvz2Mpw37W4h84WWq', 16, 'user.jpg', 4, 0, 'مركز'),
(82, 'شيماء الحاج', 774649242, 'shaima1', '$2y$10$7T/M5izXVG3x0TSScmruxevghX9cKSe8hGTyjsfR4Z7Dx30dU1mbe', 18, 'user.jpg', 4, 0, 'مكتب'),
(83, 'فاطمة محمد', 774649241, 'fatma1', '$2y$10$NbUV/GHuAUzfhfjvy.aileX4Y4RMylcXC6IbyacEyaMKMzMpiGEAK', 18, 'user.jpg', 4, 0, 'مكتب'),
(84, 'احمد ياسين', 774727964, 'ahmad', '$2y$10$ApJTv5bW9NXF1wbn/eZpueNjWMSpc1OuGvh6kgP8Tydzzd.wuONQS', 21, 'user.jpg', 6, 0, ''),
(85, 'اشواق منصور علي علي', 776696199, 'Ashwaq', '$2y$10$I4bYqD33TT6tDYMZtIned.o4P8x3qe.n21wATt3kn1xSBkmD8cgou', 21, 'user.jpg', 6, 0, ''),
(86, 'محمد عبدالرب نعمان البريهي', 775573411, 'al_boraihy', '$2y$10$K5JKvoQ.5qz8BGualkemhO76CzyXvbApaSNBzTFTvCNDrBK9VlRo6', 21, 'user.jpg', 6, 0, ''),
(87, 'شروق منصور علي العبسي', 779929291, 'shroq', '$2y$10$gfeJb8Q1y9vMEMCuQexXGutDPnnLKaf6aZ8wENi1/LyKuEe1jUV.e', 21, 'user.jpg', 6, 0, ''),
(88, 'هديل عصام محمد احمد', 776676561, 'hadel', '$2y$10$lA/ngJ.JLyLg/xpvLiFAiu.CUCKiO4xNkjE1R7s2tPQ0p/qwAy13K', 26, 'user.jpg', 4, 0, 'مركز'),
(89, 'اكرم عبدالعزيز احمد عثمان', 777142312, 'akram', '$2y$10$pPaZk90K5hiqy7hRJpbiueBsr5LPAZqt4ffgemuTy.Nuc4w70jEDi', 21, 'user.jpg', 6, 0, ''),
(90, 'عبدالسلام عبده حسين الغشم', 776677546, 'abdulsalam', '$2y$10$QEU/mVIVx7XIFqTr8/kn0O9fzEKFO8RyDgVEODyqjmCzlLG8YSX5a', 21, 'user.jpg', 6, 0, ''),
(91, 'منةالله عبده سلمان محمد', 775544231, 'mnh', '$2y$10$UsWx8i/MOIeSC6QvcioaNeJ2e4/X6pTtjq0TV0GiDmf16RGEpi6jW', 21, 'user.jpg', 6, 0, ''),
(92, 'منير احمد محمد عبدالرحمن', 776690812, 'Moner', '$2y$10$66n7p0hSSZqZVt3NFNJ87u7BjDdjFh0ZJt6M3XQWyX91iRJx12Hyu', 21, 'user.jpg', 6, 0, ''),
(93, 'محمد احمد عبدالله ناجي', 778899001, 'najy', '$2y$10$PO.fnlyYdngxzdnnKzfxYehGBclFAWAr0eLjJGQz2bOQSyiqTs4/2', 21, 'user.jpg', 6, 0, ''),
(94, 'عبده محمد عبده النهاري', 779975432, 'abduh', '$2y$10$pYjCcucf5fv8JxVszuxveuUQx2vWKrkNn019SGh/gMF0g4unH3tBy', 21, 'user.jpg', 7, 0, 'مركز'),
(95, 'وازع قائد سيف محمد', 775522123, 'waza', '$2y$10$kKan9DClhTVdGnlG0MtVa.oH3FV.381/Risq2URRguDeLoHZ/mYMe', 21, 'user.jpg', 6, 0, ''),
(96, 'كمال عادل عبدالمعطي يحيى', 770765433, 'kamal', '$2y$10$.gHMrjwEuvZIX9hGcx8dh.bkYsGglRoIvGKRCoPSi6Twv/ke4oUoK', 21, 'user.jpg', 4, 0, ''),
(97, 'وجدي جميل احمد محمد', 776544374, 'wajdi', '$2y$10$70Wej/MJyjNi8F8qhKXXaOmN/G4ok8hxu6VRukXTvzDzJb2TlEdsa', 21, 'user.jpg', 6, 0, ''),
(98, 'نجوى محمد علي راشد الحاشدي', 776554223, 'najwa', '$2y$10$jtE4DhI5k3BYy6Uqz/wVfOfXR318vyya1rFCslixrVWSsV7tDTFKq', 21, 'user.jpg', 6, 0, ''),
(99, 'مها سعيد احمد علي', 775643678, 'maha', '$2y$10$AVom0C5S6HcRR/dR5IavWO.gnL9JUnBE4G6jx9JH/467F09xx6d1e', 21, 'user.jpg', 6, 0, ''),
(100, 'محمد حمود سعيد الشرعبي', 778569456, 'alsharabi', '$2y$10$emeJaHUPUEXt.TxDrtN4U.XlX52a23iuK9AEpBaGGpQEBfudCuOq2', 21, 'user.jpg', 6, 0, ''),
(101, 'عبدالسلام عبده محمد عبدالرحمن', 775432123, 'abdusalam', '$2y$10$hsX13CDYDzLwgYzes6ezNeMjT6wOSMnNnNKhBrwajiqZlSunt3PXe', 21, 'user.jpg', 6, 0, ''),
(102, 'سمية احمد حميد السالمي', 776541224, 'sumaiah', '$2y$10$n4By7xjTYI7vfzEufDv9pOfRE4sOcRV.9w.qjQr6gV9JSQknXywEW', 21, 'user.jpg', 5, 0, 'مركز'),
(103, 'صادق حمود احمد المنعي', 776543123, 'sadeq', '$2y$10$Gg8MJoy7HH1/jvdKKiegAOOjUYYF5ImSmduZTUJ2gcpsUEQQV4.Rq', 25, 'user.jpg', 5, 0, 'مركز'),
(104, 'شادي علي حسن العواضي', 776655441, 'shady', '$2y$10$Le4LwUUq4kWY8at1OH1bPuUxrWqk2Gk1NWbzGEXvPVWfudpnouBB.', 21, 'user.jpg', 5, 0, 'مركز'),
(105, 'مهيوب احمد مهيوب ابلان', 775441231, 'mahyob', '$2y$10$cIwVoUVfsVr3VougkGZ8Qu2isIC.ewWly0dQh6TKnEdP1O7C4fQRW', 21, 'user.jpg', 5, 0, 'مركز'),
(106, 'نجود عبدالوهاب سلطان مهيوب', 778866991, 'njod', '$2y$10$iE0HIX3Vaq3mSYUb19qkjOx0r.HmQ6bLnaG4NjST305kYbDhQsOW2', 21, 'user.jpg', 5, 0, 'مركز'),
(107, 'قاسم محمد صالح قاسم', 776655932, 'qasm', '$2y$10$4D5qQtLmHF61nfJ./rxhUe6rqAbv4AT.FY2y2TpdLbCI7zHW0HY/2', 21, 'user.jpg', 5, 0, 'مركز'),
(108, 'ياسمين الشراعي', 772428763, 'yasmin', '$2y$10$8yP5xqbpgcOhHKW4qaH5/unNSo7vUMZfYjNrLuBTIPUhYWnE5/k6G', 8, 'user.jpg', 5, 0, ''),
(109, 'صيدلية مركز إب', 774808181, 'pharmacy', '$2y$10$bkCzWIqcCcToUicuGqSw8uzIfyV7PJeac/NmQSsdwpykw.AQNN8iS', 11, 'user.jpg', 5, 0, 'مركز'),
(110, 'داليا', 772131236, 'daliah', '$2y$10$ShCo176gYrmYrbrs6lysceL59WdmaH6jwmOid3od6TiFKUXDxxHfW', 13, 'user.jpg', 5, 0, ''),
(111, 'محمد عبدالرحمن علي حسن', 777710092, 'محمد', '$2y$10$sTNYbPSMmRlP7EEY9C73r.XOih3GACj05KAbcnE.FXomazIvaFVxe', 21, 'user.jpg', 5, 0, ''),
(112, 'زكاة قاسم غالب سيف', 777810092, 'zkah', '$2y$10$sk/mlXGKIHO80ECyBT5QpuWU4dd7ZWucGlOx/G2IXc5AM4mgozi0.', 21, 'user.jpg', 6, 0, ''),
(113, 'رياض', 775554190, 'riad', '$2y$10$Rmu4HyYk0jnzcwteKkJFWO7RWg1Q3KWtvBz4RrTxpaB6dQvQ9yDtS', 21, 'user.jpg', 4, 0, ''),
(114, 'هايل', 778256632, 'hail', '$2y$10$4GQd3Sj0FysdHsdMdH7s0u8qzFqQ4raQPcdEoJn4yMGE3NbVM7vjS', 21, 'user.jpg', 4, 0, ''),
(115, 'عبير الزليخي', 772079032, 'abir', '$2y$10$VhEYELNAsBt1ptmddBv5cuBL3Mnlw24ERU8v0dos/F/fa.gwmHpqm', 12, 'user.jpg', 8, 0, ''),
(116, 'نجوى فضل', 777152391, 'ngwa', '$2y$10$/.Rs/VNn0FKraNxAB27XiOWSR5PyPGX3iIFOBOHjq298usGoWuo.O', 12, 'user.jpg', 8, 0, ''),
(117, 'طلال العامري', 777901801, 'talal', '$2y$10$muQInWAhXAKnhk6Jkzs5eedVmcCnpwdipOaqU/NckWLwe2BcLCfze', 12, 'user.jpg', 8, 0, ''),
(118, 'ثابت قاسم', 773577550, 'thabit', '$2y$10$mOKyulQZl4SwtMKVq3374O88WiEYEccT3xOpoafg6iorol.pKAKIK', 5, 'user.jpg', 8, 0, ''),
(119, 'اماني محمد', 778440585, 'amani', '$2y$10$kO53vhC.KbdW6X8aLwtTTudFmzGI3SVz/OKSo1MWxpq0aO1DU7Foa', 5, 'user.jpg', 8, 0, ''),
(120, 'شكري محمد', 777392178, 'shwkri', '$2y$10$AsAhVBE2aGhBZyWjhPKMXeGy3cUsyaS2TcMDMNp3klkqcrZu.pwjq', 7, 'user.jpg', 8, 0, ''),
(121, 'عبد الحافظ عابد', 772597061, 'abduhafd', '$2y$10$adLnuUv13lfTFrqsZ4uZV.t8CGz5lZ1qeECa6eP5ZWGnd6CTj7Fga', 7, 'user.jpg', 8, 0, 'مركز'),
(122, 'نعمه محمد', 772388986, 'niema', '$2y$10$ojn2lt11V/I5iZtr.tg4b.Z6HrQkKxz6az469GOKQw56EH8LM1DIC', 4, 'user.jpg', 8, 0, 'مركز'),
(123, 'عادل فرحان', 771426148, 'adeel', '$2y$10$Og2fxUwHXu/JyaltIraByeeY3S/cRDcKO0HCyc6NPqYA/mZ6m6ysi', 9, 'user.jpg', 8, 0, 'مركز'),
(124, 'ميثاق سعيد', 776049219, 'methak', '$2y$10$u3Pm.99xJDswr7fIkfybkOtnZPPBHYeqdIdmirDZmJdJBGk5CNKia', 3, 'user.jpg', 8, 0, 'مركز'),
(125, 'فاطمه علي', 739230026, 'Fatimah', '$2y$10$DCcWwhNpuVhSI4ysm5m5QuvgRrTZI0F3TDrhvtCkqG6Uc/Pn7hjwe', 1, 'user.jpg', 8, 0, 'مركز'),
(126, 'عماد القدسي', 777961844, 'imad', '$2y$10$Io4MuZSJ3/wAh4qIZtyvze9mJrw9tBQ6uavzdtH8fDlGq5GDGdWam', 11, 'user.jpg', 8, 0, 'مركز'),
(127, 'اشرف', 774089535, 'ashraf', '$2y$10$lI74RsvesftWxJibjqbegu8PvARKFi7bFvQ0xVzINvIxiYbp2kt9u', 23, 'user.jpg', 4, 0, ''),
(128, 'امل  عبد الله', 772979205, 'amal', '$2y$10$YCtKXMzKeImCk7ab24ybNObKsF8bVUYOBK3vtTTANQ0jilKOSrE/y', 9, 'user.jpg', 5, 0, 'مركز'),
(129, 'موده', 778693582, 'modah', '$2y$10$qkbmudlCf1C7ORTvu4JIzOVzwB5FDvlSnPh6h5IvyNzmXAdl7Casq', 4, 'user.jpg', 8, 0, ''),
(130, 'سيناء احمد', 771960751, 'swe', '$2y$10$fhsUc6sCe/iFBnKB7EMtE.u5q0.WyRh1FB.Y/P5trqx02LJgtMODy', 9, 'user.jpg', 8, 0, ''),
(131, 'نهى الحيمي', 776427848, 'nuha', '$2y$10$7I1sdw/IqONAW0jzcktN2O37XcKHXF4vB0bkIoH3EXATDZTs1r3G2', 22, 'user.jpg', 4, 0, ''),
(132, 'ehsan', 730644252, 'ehsan', '$2y$10$X.TkwugLS3tykkSQ5NeP6.8JfJGesW9Ol4upU34RE0/3H8tlCRqEa', 12, 'user.jpg', 5, 0, ''),
(133, 'خولة حسين', 776696300, 'khulh', '$2y$10$nNSMHF5D6DhCZNT010PiQ.QmbaawwU8C4q87cdbtcLQTcRk73ECbi', 5, 'user.jpg', 5, 0, ''),
(134, 'ناسيم يحيى', 776696200, 'naseem', '$2y$10$8gh0W5merdkZ9NN1eLemFe2Mo2aGxqILgqgwv/tkyfFQMtesZGK8O', 16, 'user.jpg', 4, 0, ''),
(135, 'اشواق', 772635171, 'ashwq', '$2y$10$LS0C708N6CZGPpcpbvL1kugrcMExiEyzn0/dmYeu50IZbUNfz5KZm', 8, 'user.jpg', 5, 0, ''),
(136, 'هاجر الهمداني', 778465941, 'hajr', '$2y$10$dQEZEr6krNdKiFHqx3r9vOZ6zqw5Vy4mvEWmL8NVgari9mR64/Bau', 8, 'user.jpg', 5, 0, ''),
(137, 'كمال قطران', 776696311, 'kmal', '$2y$10$EQV78BLqUHYtYjnLv1aa/eG0sS6c57qDx66EpqP8J8EnNOT0sRoEq', 21, 'user.jpg', 5, 0, ''),
(138, 'سميرة', 779977182, 'samirh', '$2y$10$U6WRW5eKqtEVRC9hNJNrtufzWhH9LtqgSaFbHCJ0Oti6G8ZhEC9sS', 24, 'user.jpg', 4, 0, ''),
(139, 'platform', 774971307, 'platform', '$2y$10$0IRhdhYBnRgipTBQhrZSi.rcydpuNtuVPVGdNvLHyQVEQ4JlxrzSq', 2, '', 4, 5, ''),
(140, 'mazen', 777000000, 'mazen', '$2y$10$RYByw4TEXSP2.1.rhthgWeeqFEayoEghYg3pai7s.Af2z8wCycJhO', 12, 'user.jpg', 8, 0, 'مركز'),
(141, 'نظيرة قايد', 771674842, 'Nadhera', '$2y$10$MR32xbHv.4Fwlj.R32NDquhufLM87RLvkZmQWEgEIz0xxXxruZFAy', 7, 'user.jpg', 8, 0, ''),
(142, 'العنود حمود', 780094979, 'Alanood', '$2y$10$c1to1QR2lPCdf4AYVokVDufcXbZgkjUYW9zSO1EN79hSovwudW5Pe', 7, 'user.jpg', 8, 0, ''),
(143, 'أمنة عبدالحكيم', 775186829, 'Ammna', '$2y$10$zAlMAopta1hMAJfYQxskfO9FLz0K9H9ISXYsHo/JFuVMxKkMdGgsm', 8, 'user.jpg', 6, 0, ''),
(144, 'نعمة منذوق', 771894228, 'Neamah', '$2y$10$ivSm2C/Pg6eXKmOM19J5..bz.vH1e8FHExCuYln9YIzlH9NdwTAdy', 7, 'user.jpg', 8, 0, ''),
(145, 'أمة العليم الشامي', 770147020, 'Amat Alshami', '$2y$10$HH8RCfBgUby/yTRJW52gPu4FG32SOSj2rkaQOFG.f4E5p3SqY5PC.', 4, 'user.jpg', 5, 0, ''),
(146, 'مودة  الوصابي', 778693581, 'mawdah', '$2y$10$c3B3WBIKCMcwg08YG8OT0.BNIOKta4PgNreMr4NeKvSejpe0TkqTi', 23, 'user.jpg', 8, 0, ''),
(147, 'د.وليد عقلان', 737082750, 'Waleed', '$2y$10$sL9deminPSGpVWYxlGh.meddUZwDsLMCLqL35HOm.HSm2Q.w159AO', 12, 'user.jpg', 5, 0, ''),
(148, 'وئام عزالدين', 770478478, 'weam', '$2y$10$JtQIsHy/7DrfpfTSrNFGO.r9Q9/ZegOY4zO1vT/Y50V0L8NQPUY5C', 22, 'user.jpg', 4, 0, ''),
(149, 'الدكتور مراد جارالله', 771839026, 'murad', '$2y$10$jW.SdXkDceyXGFMmVNOB4ezg2DOzEyPrUKHos.qQrl3PVjwJAQsWS', 12, 'user.jpg', 5, 0, ''),
(150, 'أمة العليم الشامي -ادارة حالة', 777777777, 'amatt', '$2y$10$bwcGIrR7NWlndZ7AWwb8iexgIIayNdK5K9y4qaCFzjZRx11m4Sfh6', 4, 'user.jpg', 5, 0, ''),
(151, 'عفاف المنصوب', 778260452, 'afaf mansob', '$2y$10$QzXEIvslbV0TK11xgz54UeW5eCbZd9lOycRNrqkoJfqt/.GlKC8Tq', 7, 'user.jpg', 5, 0, ''),
(152, 'رقيه اسعد', 778046943, 'roqia', '$2y$10$mGoaeLel/Xqqx5GkiCPC/Or1udoNeQSdWs2ym46QUPfg50dYASH1W', 11, 'user.jpg', 5, 0, ''),
(153, 'نسيبة محمد', 782795498, 'nosibah', '$2y$10$7GsxjhCAhMSRKqDyx1ivL.MzIdJUzMO0OKLCf1esqdYqKS.l9MVpe', 8, 'user.jpg', 5, 0, ''),
(154, 'صباح  عمر', 733221343, 'sabah', '$2y$10$KKuAgGzmaLJrq0/tWy0RV.39lIESZ/mYxg0/K5Osh34SdwbwaWnWK', 9, 'user.jpg', 8, 0, 'مركز'),
(155, 'زهرة محمد', 774381977, 'zahra', '$2y$10$mMgLB/P7PU5S7Wr1maNdVOMyr.esKrBPP1Xp2XukBBgyQp6PY8cVm', 9, 'user.jpg', 8, 0, 'مركز'),
(156, 'غادة محمد', 770233834, 'ghadah', '$2y$10$ZC2.rDx8B2AyfQwyTYqdX.sOXkN3k/FZxMvuOv9ORWd0NZiYPPGti', 3, 'user.jpg', 8, 0, ''),
(157, 'وئام الشوذبي', 776251031, 'weam shodabi', '$2y$10$uFPzZSCehYQapPjSh/CF2u46wus2.NG1QykQCetZedMi5RET.7UCe', 4, 'user.jpg', 8, 0, ''),
(158, 'الدكتور طلال الشعبي', 777777001, 'talal shoabi', '$2y$10$/3nm2bH1BWb.nmQGk4FctOu3zNHon9qeoCeG.9F4mEmgQ8di/CVV6', 12, 'user.jpg', 8, 0, 'مركز'),
(159, 'مروى الجيلاني', 776654965, 'Marwa', '$2y$10$Ac8xIKlPgOe78THamDl.L.h9fZJcAgpoe1HE.6ppLKAJ.6LDORYNK', 22, 'user.jpg', 4, 0, '');