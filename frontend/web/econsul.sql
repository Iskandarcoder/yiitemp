-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2018 г., 13:39
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `econsul`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anketa`
--

CREATE TABLE `anketa` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fam` varchar(25) DEFAULT NULL,
  `famk` varchar(25) DEFAULT NULL,
  `ism` varchar(25) DEFAULT NULL,
  `ismk` varchar(25) DEFAULT NULL,
  `sharif` varchar(25) DEFAULT NULL,
  `sharifk` varchar(25) DEFAULT NULL,
  `millat` varchar(20) DEFAULT NULL,
  `jins` varchar(20) DEFAULT NULL,
  `tugkun` date DEFAULT '9999-01-01',
  `tugjoy` varchar(64) DEFAULT NULL,
  `oila` varchar(40) DEFAULT NULL,
  `photo` blob,
  `tip` varchar(70) DEFAULT NULL,
  `seriya` varchar(15) DEFAULT NULL,
  `nomer` varchar(15) DEFAULT NULL,
  `vidan` date DEFAULT '9999-01-01',
  `srok` date DEFAULT '9999-01-01',
  `kem` varchar(64) DEFAULT NULL,
  `nima` varchar(30) DEFAULT NULL,
  `sabab` varchar(400) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `viloyat` varchar(32) DEFAULT NULL,
  `iviloyat` int(11) DEFAULT '0',
  `strana` varchar(64) DEFAULT NULL,
  `gorod` varchar(20) DEFAULT NULL,
  `kun` date DEFAULT '9999-01-01',
  `maqsad` varchar(100) DEFAULT NULL,
  `job` varchar(64) DEFAULT NULL,
  `vr_adress` varchar(64) DEFAULT NULL,
  `phone1` varchar(25) DEFAULT NULL,
  `vozvrat` date DEFAULT '9999-01-01',
  `fio_deti` varchar(64) DEFAULT NULL,
  `data_rojd` date DEFAULT '9999-01-01',
  `fio_deti2` varchar(64) DEFAULT NULL,
  `data_rojd2` date DEFAULT '9999-01-01',
  `fio_deti3` varchar(64) DEFAULT NULL,
  `data_rojd3` date DEFAULT '9999-01-01',
  `fio_otsa` varchar(64) DEFAULT NULL,
  `data_ro` date DEFAULT '9999-01-01',
  `mesto_ro` varchar(32) DEFAULT NULL,
  `adres_o` varchar(64) DEFAULT NULL,
  `mesto_rab_o` varchar(64) DEFAULT NULL,
  `dol_tel_o` varchar(64) DEFAULT NULL,
  `fio_mat` varchar(64) DEFAULT NULL,
  `data_rm` date DEFAULT '9999-01-01',
  `mesto_rm` varchar(32) DEFAULT NULL,
  `adres_m` varchar(64) DEFAULT NULL,
  `mesto_rab_m` varchar(64) DEFAULT NULL,
  `dol_tel_m` varchar(64) DEFAULT NULL,
  `fio_sup` varchar(64) DEFAULT NULL,
  `data_rs` date DEFAULT '9999-01-01',
  `mesto_rs` varchar(32) DEFAULT NULL,
  `adres_s` varchar(64) DEFAULT NULL,
  `mesto_rab_s` varchar(64) DEFAULT NULL,
  `dol_tel_s` varchar(64) DEFAULT NULL,
  `chk_pasport` int(1) NOT NULL DEFAULT '0',
  `chk_photo` int(1) NOT NULL DEFAULT '0',
  `chk_sert` int(1) NOT NULL DEFAULT '0',
  `chk_pmj` int(1) NOT NULL DEFAULT '0',
  `chk_potv` int(1) NOT NULL DEFAULT '0',
  `ielchixona` int(11) NOT NULL DEFAULT '0',
  `elchixona` varchar(64) NOT NULL DEFAULT '0',
  `issued` varchar(32) DEFAULT NULL,
  `data_reg` date DEFAULT '9999-01-01',
  `status` smallint(1) DEFAULT '0',
  `flag` tinyint(1) DEFAULT '0',
  `sert_sana` date DEFAULT '9999-01-01',
  `sert_raqam` varchar(15) DEFAULT NULL,
  `Consul` varchar(45) DEFAULT NULL,
  `Region_mvd` int(3) DEFAULT NULL,
  `Region_mvname` varchar(32) DEFAULT NULL,
  `user_mvd` varchar(16) DEFAULT NULL,
  `fio_mvd` varchar(32) DEFAULT NULL,
  `imvd` int(11) DEFAULT '0',
  `sana_mvd` date DEFAULT '9999-01-01',
  `msg_mvd` varchar(64) DEFAULT NULL,
  `oplata` varchar(12) DEFAULT '0.000',
  `rasxod` varchar(12) DEFAULT '0.000',
  `osnovanie` varchar(800) DEFAULT NULL,
  `Dol` varchar(64) DEFAULT NULL,
  `Fio` varchar(64) DEFAULT NULL,
  `isx_nomer` varchar(32) DEFAULT NULL,
  `mvreg_sana` date DEFAULT '9999-01-01',
  `date_to_mfa` date DEFAULT '9999-01-01',
  `isx_midpru` varchar(32) DEFAULT NULL,
  `penfil_kod` varchar(16) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `anketa1`
--

CREATE TABLE `anketa1` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fam` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ism` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `sharif` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `millat` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `jins` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `tugkun` date DEFAULT NULL,
  `tugjoy` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `oila` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `photo` blob,
  `tip` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `seriya` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `nomer` varchar(15) DEFAULT NULL,
  `vidan` date DEFAULT '0001-01-01',
  `srok` date DEFAULT '0001-01-01',
  `kem` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `nima` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `sabab` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `adress` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `strana` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `gorod` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `kun` date DEFAULT '0001-01-01',
  `maqsad` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `job` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `vr_adress` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `phone1` varchar(25) DEFAULT NULL,
  `vozvrat` date DEFAULT '0001-01-01',
  `fio_deti` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `data_rojd` date DEFAULT '0001-01-01',
  `fio_deti2` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `data_rojd2` date DEFAULT '0001-01-01',
  `fio_deti3` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `data_rojd3` date DEFAULT '0001-01-01',
  `fio_otsa` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `data_ro` date DEFAULT '0001-01-01',
  `mesto_ro` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `adres_o` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `mesto_rab_o` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `dol_tel_o` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `fio_mat` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `data_rm` date DEFAULT '0001-01-01',
  `mesto_rm` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `adres_m` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `mesto_rab_m` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `dol_tel_m` varchar(64) DEFAULT NULL,
  `fio_sup` varchar(64) DEFAULT NULL,
  `data_rs` date DEFAULT '0001-01-01',
  `mesto_rs` varchar(32) DEFAULT NULL,
  `adres_s` varchar(64) DEFAULT NULL,
  `mesto_rab_s` varchar(64) DEFAULT NULL,
  `dol_tel_s` varchar(64) DEFAULT NULL,
  `chk_pasport` tinyint(1) NOT NULL DEFAULT '0',
  `chk_photo` tinyint(1) NOT NULL DEFAULT '0',
  `chk_sert` tinyint(1) NOT NULL DEFAULT '0',
  `chk_pmj` tinyint(1) NOT NULL DEFAULT '0',
  `chk_potv` tinyint(1) NOT NULL DEFAULT '0',
  `ielchixona` int(11) NOT NULL DEFAULT '0',
  `elchixona` varchar(150) CHARACTER SET utf8 DEFAULT '0',
  `data_reg` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `flag` tinyint(1) DEFAULT '0',
  `sert_sana` date DEFAULT NULL,
  `sert_raqam` varchar(15) DEFAULT NULL,
  `Consul` varchar(45) DEFAULT NULL,
  `Region_mvd` int(3) DEFAULT NULL,
  `Region_mvname` varchar(32) DEFAULT NULL,
  `user_mvd` varchar(16) DEFAULT NULL,
  `fio_mvd` varchar(32) DEFAULT NULL,
  `sana_mvd` date DEFAULT NULL,
  `msg_mvd` varchar(64) DEFAULT NULL,
  `oplata` decimal(12,3) DEFAULT '0.000',
  `rasxod` decimal(12,3) DEFAULT '0.000',
  `osnovanie` varchar(64) DEFAULT NULL,
  `Dol` varchar(64) DEFAULT NULL,
  `Fio` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `anketa_new`
--

CREATE TABLE `anketa_new` (
  `p_id` int(4) NOT NULL,
  `p_guid` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `p_dockind` int(11) DEFAULT '0',
  `p_division` int(11) NOT NULL DEFAULT '0',
  `p_citizen` int(11) DEFAULT NULL,
  `p_pk` int(14) DEFAULT NULL,
  `p_surnamec` varchar(75) CHARACTER SET cp1251 DEFAULT '',
  `p_namec` varchar(75) CHARACTER SET cp1251 DEFAULT '',
  `p_patronymc` varchar(75) CHARACTER SET cp1251 DEFAULT '',
  `p_surnamel` varchar(75) CHARACTER SET cp1251 NOT NULL,
  `p_namel` varchar(75) CHARACTER SET cp1251 NOT NULL,
  `p_patronyml` varchar(75) CHARACTER SET cp1251 NOT NULL,
  `p_birth` varchar(10) NOT NULL,
  `p_birthcomp` int(1) NOT NULL,
  `p_sex` int(2) DEFAULT '0',
  `p_nation` int(3) DEFAULT '0',
  `p_surnameold` varchar(75) DEFAULT '',
  `p_nameold` varchar(75) DEFAULT '',
  `p_patronymold` varchar(75) DEFAULT '',
  `p_countryb` int(4) NOT NULL,
  `p_regionb` int(2) DEFAULT NULL,
  `p_districtb` int(3) DEFAULT NULL,
  `p_birthb` varchar(60) CHARACTER SET cp1251 DEFAULT '',
  `p_birthe` varchar(60) CHARACTER SET latin1 DEFAULT '',
  `p_doctypeb` int(2) DEFAULT NULL,
  `p_seryb` varchar(15) CHARACTER SET cp1251 DEFAULT '',
  `p_numberb` varchar(15) CHARACTER SET cp1251 DEFAULT '',
  `p_datebegb` date DEFAULT NULL,
  `p_issuedbyb` varchar(150) DEFAULT '',
  `p_country` int(4) DEFAULT NULL,
  `p_region` int(2) DEFAULT NULL,
  `p_district` int(3) DEFAULT NULL,
  `p_place` int(3) DEFAULT NULL,
  `p_street` int(4) DEFAULT NULL,
  `p_certiftype` int(2) DEFAULT NULL,
  `p_house` varchar(100) CHARACTER SET cp1251 DEFAULT '',
  `p_korpus` varchar(5) CHARACTER SET cp1251 DEFAULT '',
  `p_flat` varchar(50) CHARACTER SET cp1251 DEFAULT '',
  `p_address` varchar(400) CHARACTER SET cp1251 DEFAULT '',
  `p_marital` int(2) DEFAULT NULL,
  `p_dateendb` date DEFAULT NULL,
  `p_countryout` int(4) DEFAULT NULL,
  `p_addressout` varchar(400) CHARACTER SET cp1251 DEFAULT '',
  `p_cause` int(11) NOT NULL,
  `p_reasonb` int(2) DEFAULT NULL,
  `p_reasonfull` varchar(400) CHARACTER SET cp1251 DEFAULT '',
  `p_dateout` date DEFAULT NULL,
  `p_dateenter` timestamp NULL DEFAULT NULL,
  `p_photo` mediumblob,
  `p_work` varchar(128) CHARACTER SET cp1251 DEFAULT '',
  `p_datesent` date DEFAULT NULL,
  `p_status` int(1) DEFAULT NULL,
  `p_lan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `anketa_new_copy1`
--

CREATE TABLE `anketa_new_copy1` (
  `p_id` int(4) NOT NULL,
  `p_guid` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `p_dockind` int(11) DEFAULT '0',
  `p_division` int(11) NOT NULL DEFAULT '0',
  `p_citizen` int(11) DEFAULT NULL,
  `p_pk` int(14) DEFAULT NULL,
  `p_surnamec` varchar(75) CHARACTER SET cp1251 DEFAULT '',
  `p_namec` varchar(75) CHARACTER SET cp1251 DEFAULT '',
  `p_patronymc` varchar(75) CHARACTER SET cp1251 DEFAULT '',
  `p_surnamel` varchar(75) CHARACTER SET cp1251 NOT NULL,
  `p_namel` varchar(75) CHARACTER SET cp1251 NOT NULL,
  `p_patronyml` varchar(75) CHARACTER SET cp1251 NOT NULL,
  `p_birth` varchar(10) NOT NULL,
  `p_birthcomp` int(1) NOT NULL,
  `p_sex` int(2) DEFAULT '0',
  `p_nation` int(3) DEFAULT '0',
  `p_surnameold` varchar(75) DEFAULT '',
  `p_nameold` varchar(75) DEFAULT '',
  `p_patronymold` varchar(75) DEFAULT '',
  `p_countryb` int(4) NOT NULL,
  `p_regionb` int(2) DEFAULT NULL,
  `p_districtb` int(3) DEFAULT NULL,
  `p_birthb` varchar(60) CHARACTER SET cp1251 DEFAULT '',
  `p_birthe` varchar(60) CHARACTER SET latin1 DEFAULT '',
  `p_doctypeb` int(2) DEFAULT NULL,
  `p_seryb` varchar(15) CHARACTER SET cp1251 DEFAULT '',
  `p_numberb` varchar(15) CHARACTER SET cp1251 DEFAULT '',
  `p_datebegb` date DEFAULT NULL,
  `p_issuedbyb` varchar(150) DEFAULT '',
  `p_country` int(4) DEFAULT NULL,
  `p_region` int(2) DEFAULT NULL,
  `p_district` int(3) DEFAULT NULL,
  `p_place` int(3) DEFAULT NULL,
  `p_street` int(4) DEFAULT NULL,
  `p_certiftype` int(2) DEFAULT NULL,
  `p_house` varchar(100) CHARACTER SET cp1251 DEFAULT '',
  `p_korpus` varchar(5) CHARACTER SET cp1251 DEFAULT '',
  `p_flat` varchar(50) CHARACTER SET cp1251 DEFAULT '',
  `p_address` varchar(400) CHARACTER SET cp1251 DEFAULT '',
  `p_marital` int(2) DEFAULT NULL,
  `p_dateendb` date DEFAULT NULL,
  `p_countryout` int(4) DEFAULT NULL,
  `p_addressout` varchar(400) CHARACTER SET cp1251 DEFAULT '',
  `p_cause` int(11) NOT NULL,
  `p_reasonb` int(2) DEFAULT NULL,
  `p_reasonfull` varchar(400) CHARACTER SET cp1251 DEFAULT '',
  `p_dateout` date DEFAULT NULL,
  `p_dateenter` timestamp NULL DEFAULT NULL,
  `p_photo` longblob,
  `p_work` varchar(128) CHARACTER SET cp1251 DEFAULT '',
  `p_datesent` date DEFAULT NULL,
  `p_status` int(1) DEFAULT NULL,
  `p_lan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `asosiy`
--

CREATE TABLE `asosiy` (
  `ID` int(11) NOT NULL,
  `REG_DATE` date DEFAULT NULL,
  `EMBASSY` int(11) DEFAULT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `SRC_REGNO` int(11) DEFAULT NULL,
  `STATE_ID` int(11) DEFAULT NULL,
  `FULL_NAME` varchar(80) DEFAULT NULL,
  `OTHER_NAME` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `TUG_JOYI` varchar(50) DEFAULT NULL,
  `POB` int(11) DEFAULT NULL,
  `SEX` char(1) DEFAULT NULL,
  `WORK_PLACE` varchar(100) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `MARITAL` int(11) DEFAULT NULL,
  `VISA_TYPE` int(11) DEFAULT NULL,
  `DATE_FROM` date DEFAULT NULL,
  `DATE_UPTO` date DEFAULT NULL,
  `FOREIGN_AD` varchar(50) DEFAULT NULL,
  `OFFENCE_TY` int(11) DEFAULT NULL,
  `REMARKS` varchar(200) DEFAULT NULL,
  `Q_MALUMOT` varchar(250) DEFAULT NULL,
  `FOTO` varchar(25) DEFAULT NULL,
  `XOLAT` int(11) DEFAULT NULL,
  `RASM` longtext,
  `PSP_SERIAL` varchar(7) DEFAULT NULL,
  `PSP_NUMBER` varchar(10) DEFAULT NULL,
  `PSP_AUTHOR` varchar(50) DEFAULT NULL,
  `PSP_ISSDAT` date DEFAULT NULL,
  `PSP_TERM` date DEFAULT NULL,
  `TULOV` double DEFAULT NULL,
  `FAKT_RAS` double DEFAULT NULL,
  `KOD1` int(11) DEFAULT NULL,
  `KOD2` varchar(10) DEFAULT NULL,
  `KOD3` int(11) DEFAULT NULL,
  `NOM_SPRAV` varchar(20) DEFAULT NULL,
  `YASH_VIL` int(11) DEFAULT NULL,
  `YASH_TUM` int(11) DEFAULT NULL,
  `REQ_TYPE` int(11) DEFAULT NULL,
  `KOX` int(11) DEFAULT NULL,
  `TASDIQ_S` char(1) DEFAULT NULL,
  `JAVOB` varchar(250) DEFAULT NULL,
  `J_DATA` date DEFAULT NULL,
  `ISSUE_DAT` date DEFAULT NULL,
  `EXPIRE_DAT` date DEFAULT NULL,
  `HAMROH` varchar(50) DEFAULT NULL,
  `SERT_RAQ` varchar(9) DEFAULT NULL,
  `HAMROH2` varchar(50) DEFAULT NULL,
  `HAMROH3` varchar(50) DEFAULT NULL,
  `DOC1` longtext,
  `DOC2` longtext,
  `DOC3` longtext,
  `KU_MVNOM` varchar(15) DEFAULT NULL,
  `KU_MVDAT` date DEFAULT NULL,
  `MVKU_NOM` varchar(15) DEFAULT NULL,
  `MVKU_DAT` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `bekor_sert`
--

CREATE TABLE `bekor_sert` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fio` varchar(64) CHARACTER SET cp1251 DEFAULT NULL,
  `sert_sana` date DEFAULT NULL,
  `sert_raqam` varchar(12) CHARACTER SET cp1251 DEFAULT NULL,
  `bekor_sana` date DEFAULT NULL,
  `sabab` varchar(128) CHARACTER SET cp1251 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `nomi` varchar(20) DEFAULT NULL,
  `text_com` text,
  `sana` datetime DEFAULT NULL,
  `moder` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `consuls`
--

CREATE TABLE `consuls` (
  `id` int(11) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `countryid` int(11) NOT NULL DEFAULT '0',
  `isadministrator` varchar(1) NOT NULL,
  `lastvisit` varchar(10) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `isactive` varchar(1) NOT NULL,
  `isdeleted` varchar(1) NOT NULL,
  `consulmustchangepassword` varchar(1) NOT NULL,
  `ischangepassword` varchar(1) NOT NULL,
  `identifier` int(11) DEFAULT NULL,
  `proxylocid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `email_address` varchar(150) DEFAULT NULL,
  `web` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `message` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `errorlog_php`
--

CREATE TABLE `errorlog_php` (
  `id` int(11) NOT NULL,
  `errdate` datetime DEFAULT NULL,
  `errno` smallint(6) DEFAULT NULL,
  `errfile` varchar(35) DEFAULT NULL,
  `errline` int(11) DEFAULT NULL,
  `descript` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `errorlog_php_copy1`
--

CREATE TABLE `errorlog_php_copy1` (
  `id` int(11) NOT NULL,
  `errdate` datetime DEFAULT NULL,
  `errno` smallint(6) DEFAULT NULL,
  `errfile` varchar(35) DEFAULT NULL,
  `errline` int(11) DEFAULT NULL,
  `descript` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `ips`
--

CREATE TABLE `ips` (
  `ip_id` int(11) NOT NULL,
  `ip_address` varchar(50) DEFAULT NULL COMMENT 'IP-адрес посетителя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `istrebovanie`
--

CREATE TABLE `istrebovanie` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fam` varchar(20) DEFAULT NULL,
  `ism` varchar(20) DEFAULT NULL,
  `sharif` varchar(20) DEFAULT NULL,
  `tugkun` date DEFAULT NULL,
  `tugjoy` varchar(64) DEFAULT NULL,
  `fuqaro` varchar(32) DEFAULT NULL,
  `millat` varchar(32) DEFAULT NULL,
  `istr` varchar(255) DEFAULT NULL,
  `maqsad` varchar(64) DEFAULT NULL,
  `adres` varchar(128) DEFAULT NULL,
  `fam_b` varchar(20) DEFAULT NULL,
  `ism_b` varchar(20) DEFAULT NULL,
  `sharif_b` varchar(20) DEFAULT NULL,
  `tugkun_b` date DEFAULT NULL,
  `tugjoy_b` varchar(64) DEFAULT NULL,
  `fuqaro_b` varchar(32) DEFAULT NULL,
  `qarindosh` varchar(32) DEFAULT NULL,
  `adres_q` varchar(64) DEFAULT NULL,
  `ielchixona` int(11) DEFAULT NULL,
  `elchixona` varchar(64) DEFAULT NULL,
  `issued` varchar(32) DEFAULT NULL,
  `data_reg` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `consul` varchar(45) DEFAULT NULL,
  `oplata` varchar(12) DEFAULT NULL,
  `rasxod` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `javob_mv`
--

CREATE TABLE `javob_mv` (
  `P_ID` int(11) NOT NULL,
  `P_DIVISION` int(4) DEFAULT NULL,
  `P_MIGUID` varchar(32) DEFAULT NULL,
  `P_SURNAMEL` varchar(50) DEFAULT NULL,
  `P_NAMEL` varchar(50) DEFAULT NULL,
  `P_BIRTH` datetime DEFAULT NULL,
  `P_DOCKIND` int(2) DEFAULT NULL,
  `P_DATEENTER` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `klients`
--

CREATE TABLE `klients` (
  `id` int(11) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `ism` varchar(32) DEFAULT NULL,
  `fam` varchar(32) DEFAULT NULL,
  `sana` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kons_uchet`
--

CREATE TABLE `kons_uchet` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fam` varchar(64) DEFAULT NULL,
  `fam_d` varchar(64) DEFAULT NULL,
  `ism` varchar(64) DEFAULT NULL,
  `sharif` varchar(64) DEFAULT NULL,
  `tugkun` date DEFAULT NULL,
  `tugjoy` varchar(64) DEFAULT NULL,
  `millat` varchar(64) DEFAULT NULL,
  `Oila` varchar(64) DEFAULT NULL,
  `fam_s` varchar(64) DEFAULT NULL,
  `photo` blob,
  `tip` varchar(64) DEFAULT NULL,
  `seriya` varchar(3) DEFAULT NULL,
  `nomer` varchar(12) DEFAULT NULL,
  `vidan` date DEFAULT NULL,
  `srok` date DEFAULT NULL,
  `kem_v` varchar(64) DEFAULT NULL,
  `deti1` varchar(64) DEFAULT NULL,
  `deti1_dat` date DEFAULT '0001-01-01',
  `deti2` varchar(64) DEFAULT NULL,
  `deti2_dat` date DEFAULT '0001-01-01',
  `deti3` varchar(32) DEFAULT NULL,
  `deti3_dat` date DEFAULT '0001-01-01',
  `kasb` varchar(200) DEFAULT NULL,
  `sabab` varchar(200) DEFAULT NULL,
  `uz_adress` varchar(200) DEFAULT NULL,
  `uz_ish` varchar(200) DEFAULT NULL,
  `uz_qar1` varchar(200) DEFAULT NULL,
  `uz_qar2` varchar(200) DEFAULT NULL,
  `uz_qar3` varchar(200) DEFAULT NULL,
  `uz_qar4` varchar(200) DEFAULT NULL,
  `chet_qar1` varchar(200) DEFAULT NULL,
  `chet_qar2` varchar(200) DEFAULT NULL,
  `chet_qar3` varchar(200) DEFAULT NULL,
  `chet_qar4` varchar(200) DEFAULT NULL,
  `chet_fuqaro` varchar(64) DEFAULT NULL,
  `chet_adress` varchar(200) DEFAULT NULL,
  `chet_tel` varchar(20) DEFAULT NULL,
  `elchixona` varchar(100) DEFAULT NULL,
  `ielchixona` int(11) DEFAULT NULL,
  `data_reg` date DEFAULT '0001-01-01',
  `consul` varchar(32) DEFAULT NULL,
  `p_almashish` varchar(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `oplata` varchar(12) DEFAULT NULL,
  `rasxod` varchar(12) DEFAULT NULL,
  `r_yozish_sana` date DEFAULT '0001-01-01',
  `r_olish_sana` date DEFAULT '0001-01-01',
  `r_olish_sabab` varchar(64) DEFAULT NULL,
  `msg` varchar(128) DEFAULT NULL,
  `msg_sana` date DEFAULT '0001-01-01',
  `stiker` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kus`
--

CREATE TABLE `kus` (
  `id` varchar(32) CHARACTER SET cp1251 NOT NULL,
  `reg_num` int(11) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `pinpp` varchar(14) CHARACTER SET cp1251 DEFAULT NULL,
  `surname_cyrillic` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `name_cyrillic` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `patronym_cyrillic` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `surname_latin` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `name_latin` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `patronym_latin` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `birth_date` varchar(10) CHARACTER SET cp1251 NOT NULL,
  `photo` longblob NOT NULL,
  `sex_id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `marital_status_id` int(11) DEFAULT NULL,
  `birth_country_id` int(11) NOT NULL,
  `birth_region_id` int(11) DEFAULT NULL,
  `birth_district_id` int(11) DEFAULT NULL,
  `birth_place_id` int(11) DEFAULT NULL,
  `birth_place_latin` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `doc_seria` varchar(12) CHARACTER SET cp1251 NOT NULL,
  `document_type_id` int(11) NOT NULL,
  `doc_number` varchar(20) CHARACTER SET cp1251 NOT NULL,
  `date_begin_document` datetime DEFAULT NULL,
  `date_endocument` datetime DEFAULT NULL,
  `document_div_id` int(11) DEFAULT NULL,
  `document_div_place` varchar(128) CHARACTER SET cp1251 DEFAULT NULL,
  `living_country_id` int(11) NOT NULL,
  `living_region_id` int(11) NOT NULL,
  `living_district_id` int(11) NOT NULL,
  `living_place_id` int(11) DEFAULT NULL,
  `living_street_id` int(11) DEFAULT NULL,
  `living_block` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `living_house` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `living_flat` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `living_place_latin` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `living_foreign_country_id` int(11) NOT NULL,
  `living_foreign_place` varchar(250) CHARACTER SET cp1251 NOT NULL,
  `begin_date` datetime NOT NULL,
  `arrival_date` datetime NOT NULL,
  `work_place` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `other_citizenship_id` int(11) DEFAULT NULL,
  `doc_adinfo` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `foundation_cons_acc` varchar(100) CHARACTER SET cp1251 DEFAULT NULL,
  `living_uzb_place` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `senstatus` int(1) NOT NULL,
  `endate` datetime DEFAULT NULL,
  `reason_id` int(11) DEFAULT NULL,
  `status` varchar(1) CHARACTER SET cp1251 DEFAULT NULL,
  `adinfo` varchar(1024) CHARACTER SET cp1251 DEFAULT NULL,
  `consular_account_type` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kus`
--

INSERT INTO `kus` (`id`, `reg_num`, `division_id`, `pinpp`, `surname_cyrillic`, `name_cyrillic`, `patronym_cyrillic`, `surname_latin`, `name_latin`, `patronym_latin`, `birth_date`, `photo`, `sex_id`, `nationality_id`, `marital_status_id`, `birth_country_id`, `birth_region_id`, `birth_district_id`, `birth_place_id`, `birth_place_latin`, `doc_seria`, `document_type_id`, `doc_number`, `date_begin_document`, `date_endocument`, `document_div_id`, `document_div_place`, `living_country_id`, `living_region_id`, `living_district_id`, `living_place_id`, `living_street_id`, `living_block`, `living_house`, `living_flat`, `living_place_latin`, `living_foreign_country_id`, `living_foreign_place`, `begin_date`, `arrival_date`, `work_place`, `other_citizenship_id`, `doc_adinfo`, `creation_date`, `foundation_cons_acc`, `living_uzb_place`, `senstatus`, `endate`, `reason_id`, `status`, `adinfo`, `consular_account_type`) VALUES
('1', 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 0x31, 1, 1, 1, 1, 1, 1, 1, '1', '1', 1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '1', 1, 1, 1, 1, 1, '1', '1', '1', '1', 1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 1, '1', '0000-00-00 00:00:00', '1', '1', 1, '0000-00-00 00:00:00', 1, '1', '1', 1),
('2', 2, 2, '2', '2', '2', '2', '2', '2', '2', '2', 0x32, 2, 2, 2, 2, 2, 2, 2, '2', '2', 2, '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '2', 2, 2, 2, 2, 2, '2', '2', '2', '2', 2, '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2', 2, '2', '0000-00-00 00:00:00', '2', '2', 2, '0000-00-00 00:00:00', 2, '2', '2', 2),
('3', 3, 3, '3', '3', '3', '3', '3', '3', '3', '3', 0x33, 3, 3, 3, 3, 3, 3, 3, '3', '3', 3, '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '3', 3, 3, 3, 3, 3, '3', '3', '3', '3', 3, '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3', 3, '3', '0000-00-00 00:00:00', '3', '3', 33, '0000-00-00 00:00:00', 3, '3', '3', 3),
('4', 4, 4, '4', '4', '4', '4', '4', '4', '4', '2018-01-19', 0x34, 4, 4, 4, 2, 1, 1, 1, '4', '4', 4, '4', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 4, '4', 4, 4, 4, 4, 4, '4', '4', '4', '4', 4, '4', '2018-01-19 00:00:00', '2018-01-19 00:00:00', '4', 4, '4', '2018-01-19 00:00:00', '4', '4', 4, '2018-01-19 00:00:00', 4, '4', '4', 4),
('5', 4, 4, '4', '4', '4', '4', '4', '4', '4', '2018-01-19', 0x34, 4, 4, 4, 2, 1, 1, 1, '4', '4', 4, '4', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 4, '4', 4, 4, 4, 4, 4, '4', '4', '4', '4', 4, '4', '2018-01-19 00:00:00', '0000-00-00 00:00:00', '4', 4, '4', '2018-01-19 00:00:00', '4', '4', 4, '2018-01-19 00:00:00', 4, '4', '4', 4),
('6', 1, 1, '1', '1', '1', '1', '1', '1', '1', '2018-01-19', 0x31, 1, 1, 1, 182, 182, 1, 1, '1', '1', 1, '1', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 1, '1', 1, 1, 1, 11, 1, '1', '11', '1', '1', 1, '1', '2018-01-19 00:00:00', '0000-00-00 00:00:00', '1', 1, '1', '2018-01-19 00:00:00', '1', '1', 1, '2018-01-19 00:00:00', 1, '1', '1', 1),
('7', 7, 7, '7', '7', '7', '7', '7', '7', '7', '2018-01-19', 0x37, 7, 7, 7, 2, 1, 1, 1, '7', '7', 7, '7', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 7, '7', 7, 7, 7, 7, 7, '7', '7', '7', '7', 7, '7', '2018-01-19 00:00:00', '0000-00-00 00:00:00', '7', 7, '7', '2018-01-19 00:00:00', '7', '7', 7, '2018-01-19 00:00:00', 7, '7', '7', 7),
('8', 8, 8, '8', '8', '8', '8', '8', '8', '8', '2018-01-19', 0x38, 8, 8, 8, 2, 1, 1, 1, '8', '8', 8, '8', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 8, '8', 8, 8, 8, 8, 8, '8', '8', '8', '8', 8, '8', '2018-01-19 00:00:00', '0000-00-00 00:00:00', '8', 8, '8', '2018-01-19 00:00:00', '8', '8', 8, '2018-01-19 00:00:00', 8, '8', '8', 8),
('9', 9, 9, '9', '9', '9', '9', '9', '9', '9', '2018-01-19', 0x39, 9, 9, 9, 2, 182, 1, 1, '9', '9', 9, '9', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 9, '9', 9, 9, 9, 9, 9, '9', '9', '9', '9', 9, '9', '2018-01-19 00:00:00', '2018-01-19 00:00:00', '9', 9, '9', '2018-01-19 00:00:00', '9', '9', 9, '2018-01-20 00:00:00', 9, '9', '9', 9),
('10', 1, 1, '1', '1', '1', '1', '1', '1', '1', '2018-01-19', 0x31, 1, 1, 1, 182, 1, 1, 1, '1', '1', 1, '1', '2018-01-19 00:00:00', '2018-01-19 00:00:00', 1, '1', 1, 1, 1, 1, 1, '1', '1', '1', '1', 1, '1', '2018-01-28 00:00:00', '2018-01-28 00:00:00', '1', 1, '1', '2018-01-19 00:00:00', '1', '1', 1, '2018-01-19 00:00:00', 1, '1', '1', 1),
('JUYTR1W6YZN5NUDMR6VXS2AXP4EYWEDU', 1, 2, '2', '2', '2', '2', '2', '2', '2', '2018-01-22', 0x32, 2, 2, 2, 2, 182, 1, 1, '2', '2', 2, '2', '2018-01-22 00:00:00', '2018-01-22 00:00:00', 2, '2', 2, 2, 2, 2, 2, '2', '2', '2', '2', 2, '2', '2018-01-22 00:00:00', '2018-01-22 00:00:00', '2', 2, '2', '2018-01-22 00:00:00', '2', '2', 2, '2018-01-22 00:00:00', 2, '2', '2', 2),
('UT2PUKX7Y9684XEGKYQ78DN3DNDCXRFQ', 9, 9, '9', '9', '9', '9', '9', '9', '9', '2018-01-22', 0x39, 9, 9, 9, 182, 182, 1, 1, '9', '9', 9, '9', '2018-01-22 00:00:00', '2018-01-22 00:00:00', 9, '9', 9, 9, 9, 9, 9, '9', '9', '9', '9', 9, '9', '2018-01-22 00:00:00', '2018-01-22 00:00:00', '9', 9, '9', '2018-01-22 00:00:00', '9', '9', 9, '2018-01-22 00:00:00', 9, '9', '9', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `kus_blob`
--

CREATE TABLE `kus_blob` (
  `id` varchar(32) NOT NULL,
  `copy_pass` mediumblob,
  `copy_mal` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kus_copy1`
--

CREATE TABLE `kus_copy1` (
  `id` varchar(32) CHARACTER SET cp1251 NOT NULL,
  `reg_num` int(11) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `pinpp` varchar(14) CHARACTER SET cp1251 DEFAULT NULL,
  `surname_cyrillic` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `name_cyrillic` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `patronym_cyrillic` varchar(50) CHARACTER SET cp1251 DEFAULT NULL,
  `surname_latin` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `name_latin` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `patronym_latin` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `birth_date` varchar(10) CHARACTER SET cp1251 NOT NULL,
  `photo` longblob,
  `sex_id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `marital_status_id` int(11) DEFAULT NULL,
  `birth_country_id` int(11) NOT NULL,
  `birth_region_id` int(11) DEFAULT NULL,
  `birth_district_id` int(11) DEFAULT NULL,
  `birth_place_id` int(11) DEFAULT NULL,
  `birth_place_latin` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `doc_seria` varchar(12) CHARACTER SET cp1251 NOT NULL,
  `document_type_id` int(11) NOT NULL,
  `doc_number` varchar(20) CHARACTER SET cp1251 NOT NULL,
  `date_begin_document` datetime DEFAULT NULL,
  `date_endocument` datetime DEFAULT NULL,
  `document_div_id` int(11) DEFAULT NULL,
  `document_div_place` varchar(128) CHARACTER SET cp1251 DEFAULT NULL,
  `living_country_id` int(11) NOT NULL,
  `living_region_id` int(11) NOT NULL,
  `living_district_id` int(11) NOT NULL,
  `living_place_id` int(11) DEFAULT NULL,
  `living_street_id` int(11) DEFAULT NULL,
  `living_block` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `living_house` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `living_flat` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `living_place_latin` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `living_foreign_country_id` int(11) NOT NULL,
  `living_foreign_place` varchar(250) NOT NULL,
  `begin_date` datetime NOT NULL,
  `arrival_date` datetime NOT NULL,
  `work_place` varchar(250) DEFAULT NULL,
  `other_citizenship_id` int(11) DEFAULT NULL,
  `doc_adinfo` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `foundation_cons_acc` varchar(100) CHARACTER SET cp1251 DEFAULT NULL,
  `living_uzb_place` varchar(250) CHARACTER SET cp1251 DEFAULT NULL,
  `senstatus` varchar(1) NOT NULL,
  `endate` datetime DEFAULT NULL,
  `reason_id` int(11) DEFAULT NULL,
  `status` varchar(1) CHARACTER SET cp1251 DEFAULT NULL,
  `adinfo` varchar(1024) CHARACTER SET cp1251 DEFAULT NULL,
  `consular_account_type` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `line`
--

CREATE TABLE `line` (
  `id` int(4) NOT NULL,
  `text` text,
  `fio` varchar(255) DEFAULT NULL,
  `davlat` varchar(55) DEFAULT NULL,
  `manzil` varchar(500) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `date_otv` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_davlat`
--

CREATE TABLE `l_davlat` (
  `ID` int(11) NOT NULL,
  `NOMI_UZB` varchar(100) DEFAULT NULL,
  `Q_NOMI_UZB` varchar(8) DEFAULT NULL,
  `NOMI_RUS` varchar(100) DEFAULT NULL,
  `Q_NOMI_RUS` varchar(8) DEFAULT NULL,
  `F_NOMI` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_dokument`
--

CREATE TABLE `l_dokument` (
  `ID` int(11) NOT NULL,
  `NOMI_UZB` varchar(60) DEFAULT NULL,
  `NOMI_RUS` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_dokument_copy1`
--

CREATE TABLE `l_dokument_copy1` (
  `ID` int(11) NOT NULL,
  `NOMI_UZB` varchar(60) DEFAULT NULL,
  `NOMI_RUS` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_elchixona`
--

CREATE TABLE `l_elchixona` (
  `id` int(11) NOT NULL,
  `KODST_ZU` int(11) DEFAULT NULL,
  `nomi_uzb` varchar(150) DEFAULT NULL,
  `nomi_rus` varchar(150) DEFAULT NULL,
  `visa_t` varchar(30) DEFAULT NULL,
  `visa_t1` varchar(30) DEFAULT NULL,
  `adress_p` varchar(80) DEFAULT NULL,
  `KOID` int(11) DEFAULT NULL,
  `issued` varchar(25) DEFAULT NULL,
  `dav_kodi` char(3) DEFAULT NULL,
  `adress` text,
  `telefon` varchar(150) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL,
  `web_site` varchar(50) DEFAULT NULL,
  `chasi` varchar(150) DEFAULT NULL,
  `Okrug` text
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_elchixona_ol`
--

CREATE TABLE `l_elchixona_ol` (
  `id` int(11) NOT NULL,
  `KODST_ZU` int(11) DEFAULT NULL,
  `nomi_uzb` varchar(150) DEFAULT NULL,
  `nomi_rus` varchar(150) DEFAULT NULL,
  `visa_t` varchar(30) DEFAULT NULL,
  `visa_t1` varchar(30) DEFAULT NULL,
  `adress_p` varchar(80) DEFAULT NULL,
  `KOID` int(11) DEFAULT NULL,
  `issued` varchar(25) DEFAULT NULL,
  `dav_kodi` char(3) DEFAULT NULL,
  `adress` text,
  `telefon` varchar(150) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL,
  `web_site` varchar(50) DEFAULT NULL,
  `chasi` varchar(150) DEFAULT NULL,
  `Okrug` text
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_oila`
--

CREATE TABLE `l_oila` (
  `ID` int(11) NOT NULL,
  `NOMI_UZB` varchar(40) DEFAULT NULL,
  `NOMI_RUS` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_operator`
--

CREATE TABLE `l_operator` (
  `ID` int(11) NOT NULL,
  `NOMI_UZB` varchar(25) DEFAULT NULL,
  `PASS` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_oy`
--

CREATE TABLE `l_oy` (
  `id` int(11) NOT NULL,
  `ctitle_uz` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctitle_ru` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctitle_fr` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `ctitle_is` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `proverka` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `l_oy_ol`
--

CREATE TABLE `l_oy_ol` (
  `id` int(11) NOT NULL,
  `ctitle_uz` varchar(8) DEFAULT NULL,
  `ctitle_ru` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `l_pol`
--

CREATE TABLE `l_pol` (
  `id` int(11) NOT NULL,
  `nomi_rus` varchar(20) DEFAULT NULL,
  `nomi_uz` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_pol_copy1`
--

CREATE TABLE `l_pol_copy1` (
  `id` int(11) NOT NULL,
  `nomi_rus` varchar(20) DEFAULT NULL,
  `nomi_uz` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_sabab`
--

CREATE TABLE `l_sabab` (
  `ID` int(11) NOT NULL,
  `NOMI_UZB` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `l_uslugi`
--

CREATE TABLE `l_uslugi` (
  `id` int(11) NOT NULL,
  `nomi_rus` varchar(254) DEFAULT NULL,
  `nomi_uzb` varchar(254) DEFAULT NULL,
  `sayt` varchar(150) DEFAULT NULL,
  `active` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `l_viloyat`
--

CREATE TABLE `l_viloyat` (
  `id` int(11) NOT NULL,
  `DAV_KODI` int(11) NOT NULL,
  `NOMI_UZB` varchar(25) DEFAULT NULL,
  `NOMI_RUS` varchar(25) DEFAULT NULL,
  `FTABN` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1516092161),
('m130524_201442_init', 1516092164);

-- --------------------------------------------------------

--
-- Структура таблицы `msg_anketa`
--

CREATE TABLE `msg_anketa` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `n_pasport` varchar(12) DEFAULT NULL,
  `msg` varchar(128) DEFAULT NULL,
  `consul` varchar(64) DEFAULT NULL,
  `sana` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `msg_ku`
--

CREATE TABLE `msg_ku` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `n_pasport` varchar(12) DEFAULT NULL,
  `msg` varchar(128) DEFAULT NULL,
  `consul` varchar(64) DEFAULT NULL,
  `sana` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `msg_tasdiq`
--

CREATE TABLE `msg_tasdiq` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `n_pasport` varchar(12) DEFAULT NULL,
  `msg` varchar(128) DEFAULT NULL,
  `consul` varchar(64) DEFAULT NULL,
  `sana` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `msg_vku`
--

CREATE TABLE `msg_vku` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `n_pasport` varchar(12) DEFAULT NULL,
  `msg` varchar(128) DEFAULT NULL,
  `consul` varchar(64) DEFAULT NULL,
  `sana` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `muammo`
--

CREATE TABLE `muammo` (
  `id` int(4) NOT NULL,
  `text` text,
  `fio` varchar(64) DEFAULT NULL,
  `davlat` varchar(64) DEFAULT NULL,
  `manzil` varchar(200) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `sana` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `sana_j` date DEFAULT NULL,
  `text_j` text
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `opros_j`
--

CREATE TABLE `opros_j` (
  `id` int(4) NOT NULL,
  `ip_out` varchar(15) DEFAULT NULL,
  `alo` tinyint(2) DEFAULT '0',
  `yahshi` tinyint(2) DEFAULT '0',
  `qoniqarli` tinyint(2) DEFAULT '0',
  `yomon` tinyint(2) DEFAULT '0',
  `ha` tinyint(2) DEFAULT '0',
  `yoq` tinyint(2) DEFAULT '0',
  `jtext` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `proxies`
--

CREATE TABLE `proxies` (
  `ID` int(4) NOT NULL,
  `Identifier` int(4) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Position` int(4) DEFAULT NULL,
  `IsDeleted` set('F','T') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sh_tasdiqlash`
--

CREATE TABLE `sh_tasdiqlash` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fam` varchar(20) DEFAULT NULL,
  `ism` varchar(20) DEFAULT NULL,
  `sharif` varchar(20) DEFAULT NULL,
  `tugkun` date DEFAULT NULL,
  `date_to_mfa` date DEFAULT '0001-01-01',
  `tugjoy` varchar(64) DEFAULT NULL,
  `photo` blob,
  `tip` varchar(40) DEFAULT NULL,
  `seriya` varchar(15) DEFAULT NULL,
  `nomer` varchar(15) DEFAULT NULL,
  `vidan` date DEFAULT '0001-01-01',
  `srok` date DEFAULT '0001-01-01',
  `kem` varchar(64) DEFAULT NULL,
  `nima` varchar(15) DEFAULT NULL,
  `sabab` varchar(255) DEFAULT NULL,
  `hujjat` varchar(255) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `isx_nomer` varchar(32) DEFAULT NULL,
  `isx_midpru` varchar(32) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `strana` varchar(64) DEFAULT NULL,
  `gorod` varchar(20) DEFAULT NULL,
  `kun` date DEFAULT '0001-01-01',
  `maqsad` varchar(64) DEFAULT NULL,
  `vr_adress` varchar(64) DEFAULT NULL,
  `phone1` varchar(25) DEFAULT NULL,
  `fio_deti` varchar(64) DEFAULT NULL,
  `data_rojd` date DEFAULT '0001-01-01',
  `fio_deti2` varchar(64) DEFAULT NULL,
  `data_rojd2` date DEFAULT '0001-01-01',
  `fio_deti3` varchar(64) DEFAULT NULL,
  `data_rojd3` date DEFAULT '0001-01-01',
  `chk_pasport` tinyint(1) DEFAULT NULL,
  `chk_photo` tinyint(1) DEFAULT NULL,
  `chk_pmj` tinyint(1) DEFAULT NULL,
  `chk_potv` tinyint(1) DEFAULT NULL,
  `ielchixona` int(11) DEFAULT NULL,
  `elchixona` varchar(64) DEFAULT NULL,
  `issued` varchar(32) DEFAULT NULL,
  `data_reg` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `Consul` varchar(45) DEFAULT NULL,
  `Region_mvd` int(3) DEFAULT NULL,
  `Region_mvname` varchar(32) DEFAULT NULL,
  `user_mvd` varchar(16) DEFAULT NULL,
  `fio_mvd` varchar(32) DEFAULT NULL,
  `sana_mvd` date DEFAULT '0001-01-01',
  `msg_mvd` varchar(255) DEFAULT NULL,
  `oplata` varchar(12) DEFAULT NULL,
  `rasxod` varchar(12) DEFAULT NULL,
  `osnovanie` varchar(255) DEFAULT NULL,
  `dol` varchar(64) DEFAULT NULL,
  `fio` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_certiftype`
--

CREATE TABLE `sp_certiftype` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_country`
--

CREATE TABLE `sp_country` (
  `sp_id` int(11) NOT NULL,
  `sp_name_cryl` varchar(100) DEFAULT NULL,
  `sp_name_ru` varchar(100) DEFAULT NULL,
  `sp_name_qrc` varchar(100) DEFAULT NULL,
  `sp_name_en` varchar(100) DEFAULT NULL,
  `sp_name_uz` varchar(100) DEFAULT NULL,
  `sp_name_qrl` varchar(100) DEFAULT NULL,
  `sp_idn` varchar(3) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idnold` varchar(3) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL,
  `sp_idnfirst` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sp_country`
--

INSERT INTO `sp_country` (`sp_id`, `sp_name_cryl`, `sp_name_ru`, `sp_name_qrc`, `sp_name_en`, `sp_name_uz`, `sp_name_qrl`, `sp_idn`, `sp_active`, `sp_dateenter`, `sp_scn`, `sp_idold`, `sp_idnold`, `sp_idfirst`, `sp_idnfirst`) VALUES
(182, 'Ўзбекитон', 'Узбекистан', NULL, 'Uzbekistan', 'O\'zbekiston', NULL, NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(2, 'Қозоғистон', 'Казакистан', NULL, 'Kazagistan', 'Qozog\'iston', NULL, NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sp_country_ol`
--

CREATE TABLE `sp_country_ol` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_district`
--

CREATE TABLE `sp_district` (
  `sp_id` bigint(20) NOT NULL,
  `sp_name_cryl` varchar(100) DEFAULT NULL,
  `sp_name_ru` varchar(100) DEFAULT NULL,
  `sp_name_qrc` varchar(100) DEFAULT NULL,
  `sp_name_en` varchar(100) DEFAULT NULL,
  `sp_name_uz` varchar(100) DEFAULT NULL,
  `sp_name_qrl` varchar(100) DEFAULT NULL,
  `sp_region` bigint(20) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sp_district`
--

INSERT INTO `sp_district` (`sp_id`, `sp_name_cryl`, `sp_name_ru`, `sp_name_qrc`, `sp_name_en`, `sp_name_uz`, `sp_name_qrl`, `sp_region`, `sp_active`, `sp_dateenter`, `sp_scn`, `sp_idold`, `sp_idfirst`) VALUES
(1, 'Чилонзор', 'Чиланзар', 'Шиланзар', 'Chilanzar', 'Chilonzor', NULL, 1, 0, '0000-00-00 00:00:00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sp_district_ol`
--

CREATE TABLE `sp_district_ol` (
  `sp_id` int(11) NOT NULL DEFAULT '0',
  `sp_region` int(11) DEFAULT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_division`
--

CREATE TABLE `sp_division` (
  `sp_id` int(11) NOT NULL,
  `sp_name_cryl` varchar(100) DEFAULT NULL,
  `sp_name_ru` varchar(100) DEFAULT NULL,
  `sp_name_qrc` varchar(100) DEFAULT NULL,
  `sp_name_en` varchar(100) DEFAULT NULL,
  `sp_name_uz` varchar(100) DEFAULT NULL,
  `sp_name_qrl` varchar(100) DEFAULT NULL,
  `sp_country` int(11) DEFAULT NULL,
  `sp_region` int(11) DEFAULT NULL,
  `sp_district` int(11) DEFAULT NULL,
  `sp_level` int(11) NOT NULL,
  `sp_code` int(11) DEFAULT NULL,
  `sp_isbio` int(11) NOT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_division_ol`
--

CREATE TABLE `sp_division_ol` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL,
  `sp_country` int(11) DEFAULT NULL,
  `sp_region` int(11) DEFAULT NULL,
  `sp_distric` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_doctype`
--

CREATE TABLE `sp_doctype` (
  `sp_id` int(11) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_doctype_ol`
--

CREATE TABLE `sp_doctype_ol` (
  `sp_id` int(11) NOT NULL DEFAULT '0',
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_fabula`
--

CREATE TABLE `sp_fabula` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_marital`
--

CREATE TABLE `sp_marital` (
  `sp_id` int(11) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_marital_ol`
--

CREATE TABLE `sp_marital_ol` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_nation`
--

CREATE TABLE `sp_nation` (
  `sp_id` int(11) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idn` varchar(3) DEFAULT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idnold` varchar(3) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL,
  `sp_idnfirst` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_nation_ol`
--

CREATE TABLE `sp_nation_ol` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_place`
--

CREATE TABLE `sp_place` (
  `sp_id` bigint(20) NOT NULL,
  `sp_name_cryl` varchar(100) DEFAULT NULL,
  `sp_name_ru` varchar(100) DEFAULT NULL,
  `sp_name_qrc` varchar(100) DEFAULT NULL,
  `sp_name_en` varchar(100) DEFAULT NULL,
  `sp_name_uz` varchar(100) DEFAULT NULL,
  `sp_name_qrl` varchar(100) DEFAULT NULL,
  `sp_region` bigint(20) DEFAULT NULL,
  `sp_district` bigint(20) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sp_place`
--

INSERT INTO `sp_place` (`sp_id`, `sp_name_cryl`, `sp_name_ru`, `sp_name_qrc`, `sp_name_en`, `sp_name_uz`, `sp_name_qrl`, `sp_region`, `sp_district`, `sp_active`, `sp_dateenter`, `sp_scn`, `sp_idold`, `sp_idfirst`) VALUES
(1, '15-даха', '15-квартал', '15-кварталлл', '15-place', '15-kvartal', NULL, NULL, NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sp_place_ol`
--

CREATE TABLE `sp_place_ol` (
  `sp_id` int(11) NOT NULL DEFAULT '0',
  `sp_name01` varchar(255) DEFAULT NULL,
  `sp_region` int(11) DEFAULT NULL,
  `sp_distric` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_reasonb`
--

CREATE TABLE `sp_reasonb` (
  `sp_id` int(11) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_reasonb_ol`
--

CREATE TABLE `sp_reasonb_ol` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_region`
--

CREATE TABLE `sp_region` (
  `sp_id` int(11) NOT NULL,
  `sp_name_cryl` varchar(100) DEFAULT NULL,
  `sp_name_ru` varchar(100) DEFAULT NULL,
  `sp_name_qrc` varchar(100) DEFAULT NULL,
  `sp_name_en` varchar(100) DEFAULT NULL,
  `sp_name_uz` varchar(100) DEFAULT NULL,
  `sp_name_qrl` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL,
  `sp_country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sp_region`
--

INSERT INTO `sp_region` (`sp_id`, `sp_name_cryl`, `sp_name_ru`, `sp_name_qrc`, `sp_name_en`, `sp_name_uz`, `sp_name_qrl`, `sp_active`, `sp_dateenter`, `sp_scn`, `sp_idold`, `sp_idfirst`, `sp_country_id`) VALUES
(182, 'Андижон', 'Андижан', NULL, NULL, 'Andijon', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL, 182),
(1, 'Тошкент', 'Ташкент', NULL, NULL, 'Toshkent', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL, 182);

-- --------------------------------------------------------

--
-- Структура таблицы `sp_region_copy1`
--

CREATE TABLE `sp_region_copy1` (
  `sp_id` int(11) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_sertcause`
--

CREATE TABLE `sp_sertcause` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL,
  `sp_name04` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_sex`
--

CREATE TABLE `sp_sex` (
  `sp_id` int(11) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) CHARACTER SET cp1251 DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_street`
--

CREATE TABLE `sp_street` (
  `sp_id` bigint(20) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_region` bigint(20) DEFAULT NULL,
  `sp_district` bigint(20) DEFAULT NULL,
  `sp_place` bigint(20) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_street_copy1`
--

CREATE TABLE `sp_street_copy1` (
  `sp_id` bigint(20) NOT NULL,
  `sp_name00` varchar(100) DEFAULT NULL,
  `sp_name01` varchar(100) DEFAULT NULL,
  `sp_name02` varchar(100) DEFAULT NULL,
  `sp_name03` varchar(100) DEFAULT NULL,
  `sp_name04` varchar(100) DEFAULT NULL,
  `sp_name05` varchar(100) DEFAULT NULL,
  `sp_region` bigint(20) DEFAULT NULL,
  `sp_district` bigint(20) DEFAULT NULL,
  `sp_place` bigint(20) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sp_street_ol`
--

CREATE TABLE `sp_street_ol` (
  `sp_id` int(11) NOT NULL,
  `sp_name01` varchar(255) DEFAULT NULL,
  `sp_region` int(11) DEFAULT NULL,
  `sp_distric` int(11) DEFAULT NULL,
  `sp_place` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'qujTODXho3RuqbxnO5eucrM6UmmnVMRH', '$2y$13$BqeQLJvrkBHFYtsPLl7dTu6NSBM0lvP8UzOuuZt8YGS38bnTBTp8K', NULL, '', 10, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `name_embassy` varchar(64) DEFAULT NULL,
  `fam` varchar(20) DEFAULT NULL,
  `ism` varchar(20) DEFAULT NULL,
  `sharif` varchar(20) DEFAULT NULL,
  `login` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT NULL,
  `kokonsul` int(11) DEFAULT '0',
  `LastVisit` varchar(25) DEFAULT NULL,
  `IsActive` varchar(1) DEFAULT '1',
  `Access` varchar(1) DEFAULT '1',
  `isAdmin` varchar(1) DEFAULT '0',
  `mvd` varchar(1) DEFAULT '0',
  `goroembassy` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_mv`
--

CREATE TABLE `users_mv` (
  `id` int(11) NOT NULL,
  `fIO` varchar(64) DEFAULT NULL,
  `login` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT NULL,
  `LastVisit` varchar(25) DEFAULT NULL,
  `IsActive` varchar(1) DEFAULT '1',
  `isAdmin` varchar(1) DEFAULT '0',
  `srok` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_mvcopy1`
--

CREATE TABLE `users_mvcopy1` (
  `id` int(11) NOT NULL,
  `fIO` varchar(64) DEFAULT NULL,
  `login` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT NULL,
  `LastVisit` varchar(25) DEFAULT NULL,
  `IsActive` varchar(1) DEFAULT '1',
  `isAdmin` varchar(1) DEFAULT '0',
  `srok` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `usl_key`
--

CREATE TABLE `usl_key` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `famism` varchar(64) DEFAULT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `usl_key_copy1`
--

CREATE TABLE `usl_key_copy1` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `famism` varchar(64) DEFAULT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `visits`
--

CREATE TABLE `visits` (
  `visit_id` int(11) NOT NULL,
  `date` date DEFAULT NULL COMMENT 'дата визита',
  `hosts` int(12) DEFAULT NULL COMMENT 'количество хостов (уникальных посещений)',
  `views` int(12) DEFAULT NULL COMMENT 'количество хитов(просмотров страниц)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `visits_copy1`
--

CREATE TABLE `visits_copy1` (
  `visit_id` int(11) NOT NULL,
  `date` date DEFAULT NULL COMMENT 'дата визита',
  `hosts` int(12) DEFAULT NULL COMMENT 'количество хостов (уникальных посещений)',
  `views` int(12) DEFAULT NULL COMMENT 'количество хитов(просмотров страниц)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `vkons_uchet`
--

CREATE TABLE `vkons_uchet` (
  `id` int(11) NOT NULL,
  `barcode` varchar(12) DEFAULT NULL,
  `fam` varchar(50) DEFAULT NULL,
  `fam_d` varchar(50) DEFAULT NULL,
  `ism` varchar(50) DEFAULT NULL,
  `sharif` varchar(50) DEFAULT NULL,
  `tugkun` date DEFAULT NULL,
  `tugjoy` varchar(64) DEFAULT NULL,
  `millat` varchar(50) DEFAULT NULL,
  `photo` blob,
  `tip` varchar(60) DEFAULT NULL,
  `seriya` varchar(4) DEFAULT NULL,
  `nomer` varchar(15) DEFAULT NULL,
  `vidan` date DEFAULT NULL,
  `srok` date DEFAULT NULL,
  `kem_v` varchar(200) DEFAULT NULL,
  `deti1` varchar(200) DEFAULT NULL,
  `deti1_dat` date DEFAULT '0001-01-01',
  `deti2` varchar(200) DEFAULT NULL,
  `deti2_dat` date DEFAULT '0001-01-01',
  `ish` varchar(200) DEFAULT NULL,
  `oquv_m` varchar(200) DEFAULT NULL,
  `kelgan_s` date DEFAULT '0001-01-01',
  `sabab` varchar(200) DEFAULT NULL,
  `org` varchar(200) DEFAULT NULL,
  `tel` varchar(14) DEFAULT NULL,
  `uz_adress` varchar(200) DEFAULT NULL,
  `chet_tel` varchar(14) DEFAULT NULL,
  `chet_adress` varchar(200) DEFAULT NULL,
  `kasb` varchar(200) DEFAULT NULL,
  `elchixona` varchar(200) DEFAULT NULL,
  `ielchixona` int(11) DEFAULT NULL,
  `data_reg` date DEFAULT NULL,
  `consul` varchar(32) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `r_yozish_sana` date DEFAULT '0001-01-01',
  `r_olish_sana` date DEFAULT '0001-01-01',
  `r_olish_sabab` varchar(200) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL,
  `msg_sana` date DEFAULT '0001-01-01'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `vkus`
--

CREATE TABLE `vkus` (
  `id` varchar(32) NOT NULL,
  `reg_num` varchar(15) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `pinpp` varchar(14) DEFAULT NULL,
  `surname_cyrillic` varchar(50) DEFAULT NULL,
  `name_cyrillic` varchar(50) DEFAULT NULL,
  `patronym_cyrillic` varchar(50) DEFAULT NULL,
  `surname_latin` varchar(50) NOT NULL,
  `name_latin` varchar(50) NOT NULL,
  `patronym_latin` varchar(50) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `photo` longblob NOT NULL,
  `sex_id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `marital_status_id` int(11) DEFAULT NULL,
  `birth_country_id` int(11) NOT NULL,
  `birth_region_id` int(11) DEFAULT NULL,
  `birth_district_id` int(11) DEFAULT NULL,
  `birth_place_id` int(11) DEFAULT NULL,
  `birth_place_latin` varchar(250) DEFAULT NULL,
  `document_type_id` int(11) NOT NULL,
  `doc_seria` varchar(12) NOT NULL,
  `doc_number` varchar(20) NOT NULL,
  `date_begin_document` datetime NOT NULL,
  `date_endocument` datetime DEFAULT NULL,
  `document_div_id` int(11) DEFAULT NULL,
  `document_div_place` varchar(128) DEFAULT NULL,
  `living_country_id` int(11) NOT NULL,
  `living_region_id` int(11) NOT NULL,
  `living_district_id` int(11) NOT NULL,
  `living_place_id` int(11) DEFAULT NULL,
  `living_street_id` int(11) DEFAULT NULL,
  `living_block` varchar(20) DEFAULT NULL,
  `living_house` varchar(20) DEFAULT NULL,
  `living_flat` varchar(20) DEFAULT NULL,
  `living_place_latin` varchar(250) DEFAULT NULL,
  `living_foreign_country_id` int(11) NOT NULL,
  `living_foreign_place` varchar(250) NOT NULL,
  `begin_date` datetime NOT NULL,
  `arrival_date` datetime NOT NULL,
  `work_place` varchar(250) DEFAULT NULL,
  `other_citizenship_id` int(11) DEFAULT NULL,
  `doc_adinfo` varchar(250) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `foundation_cons_acc` varchar(100) DEFAULT NULL,
  `living_uzb_place` varchar(250) DEFAULT NULL,
  `senstatus` varchar(1) NOT NULL,
  `endate` datetime DEFAULT NULL,
  `reason_id` int(11) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `adinfo` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `vku_kart`
--

CREATE TABLE `vku_kart` (
  `id` int(4) NOT NULL,
  `elchihona_k` int(2) DEFAULT NULL,
  `elchihona_tn_uz` varchar(64) DEFAULT NULL,
  `elchihona_tn1_uz` varchar(64) DEFAULT NULL,
  `elchihona_qn_uz` varchar(128) DEFAULT NULL,
  `elchihona_tn_rus` varchar(64) DEFAULT NULL,
  `elchihona_tn1_rus` varchar(64) DEFAULT NULL,
  `elchihona_qn_rus` varchar(128) DEFAULT NULL,
  `ish_vaqti_uz` varchar(64) DEFAULT NULL,
  `ish_vaqti_c_uz` varchar(32) DEFAULT NULL,
  `ish_vaqti_rus` varchar(64) DEFAULT NULL,
  `ish_vaqti_c_rus` varchar(32) DEFAULT NULL,
  `tel` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `adres` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `vku_kart_ol`
--

CREATE TABLE `vku_kart_ol` (
  `id` int(4) NOT NULL,
  `elchihona_k` int(2) DEFAULT NULL,
  `elchihona_tn_uz` varchar(64) DEFAULT NULL,
  `elchihona_tn1_uz` varchar(64) DEFAULT NULL,
  `elchihona_qn_uz` varchar(128) DEFAULT NULL,
  `elchihona_tn_rus` varchar(64) DEFAULT NULL,
  `elchihona_tn1_rus` varchar(64) DEFAULT NULL,
  `elchihona_qn_rus` varchar(128) DEFAULT NULL,
  `ish_vaqti_uz` varchar(64) DEFAULT NULL,
  `ish_vaqti_c_uz` varchar(32) DEFAULT NULL,
  `ish_vaqti_rus` varchar(64) DEFAULT NULL,
  `ish_vaqti_c_rus` varchar(32) DEFAULT NULL,
  `tel` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `adres` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `iusl` varchar(6) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `rating` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bark` (`barcode`),
  ADD KEY `fam` (`fam`),
  ADD KEY `ism` (`ism`),
  ADD KEY `vil` (`iviloyat`),
  ADD KEY `strana` (`strana`),
  ADD KEY `elchixona` (`ielchixona`);

--
-- Индексы таблицы `anketa1`
--
ALTER TABLE `anketa1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anketa_new`
--
ALTER TABLE `anketa_new`
  ADD PRIMARY KEY (`p_id`);

--
-- Индексы таблицы `anketa_new_copy1`
--
ALTER TABLE `anketa_new_copy1`
  ADD PRIMARY KEY (`p_id`);

--
-- Индексы таблицы `asosiy`
--
ALTER TABLE `asosiy`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `bekor_sert`
--
ALTER TABLE `bekor_sert`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `consuls`
--
ALTER TABLE `consuls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `errorlog_php`
--
ALTER TABLE `errorlog_php`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inerrline` (`errline`),
  ADD KEY `inerrtext` (`descript`),
  ADD KEY `date` (`errdate`);

--
-- Индексы таблицы `errorlog_php_copy1`
--
ALTER TABLE `errorlog_php_copy1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inerrline` (`errline`),
  ADD KEY `inerrtext` (`descript`),
  ADD KEY `date` (`errdate`);

--
-- Индексы таблицы `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`ip_id`);

--
-- Индексы таблицы `istrebovanie`
--
ALTER TABLE `istrebovanie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `javob_mv`
--
ALTER TABLE `javob_mv`
  ADD PRIMARY KEY (`P_ID`);

--
-- Индексы таблицы `klients`
--
ALTER TABLE `klients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kons_uchet`
--
ALTER TABLE `kons_uchet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kus`
--
ALTER TABLE `kus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kus_blob`
--
ALTER TABLE `kus_blob`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kus_copy1`
--
ALTER TABLE `kus_copy1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npass` (`davlat`);

--
-- Индексы таблицы `l_davlat`
--
ALTER TABLE `l_davlat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `nmr` (`NOMI_RUS`);

--
-- Индексы таблицы `l_dokument`
--
ALTER TABLE `l_dokument`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `l_dokument_copy1`
--
ALTER TABLE `l_dokument_copy1`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `l_elchixona`
--
ALTER TABLE `l_elchixona`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_elchixona_ol`
--
ALTER TABLE `l_elchixona_ol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_oila`
--
ALTER TABLE `l_oila`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `l_operator`
--
ALTER TABLE `l_operator`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `l_oy`
--
ALTER TABLE `l_oy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_oy_ol`
--
ALTER TABLE `l_oy_ol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_pol`
--
ALTER TABLE `l_pol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_pol_copy1`
--
ALTER TABLE `l_pol_copy1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_sabab`
--
ALTER TABLE `l_sabab`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `l_uslugi`
--
ALTER TABLE `l_uslugi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `l_viloyat`
--
ALTER TABLE `l_viloyat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `msg_anketa`
--
ALTER TABLE `msg_anketa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npass` (`n_pasport`);

--
-- Индексы таблицы `msg_ku`
--
ALTER TABLE `msg_ku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npass` (`n_pasport`);

--
-- Индексы таблицы `msg_tasdiq`
--
ALTER TABLE `msg_tasdiq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npass` (`n_pasport`);

--
-- Индексы таблицы `msg_vku`
--
ALTER TABLE `msg_vku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npass` (`n_pasport`);

--
-- Индексы таблицы `muammo`
--
ALTER TABLE `muammo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npass` (`davlat`);

--
-- Индексы таблицы `opros_j`
--
ALTER TABLE `opros_j`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `proxies`
--
ALTER TABLE `proxies`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CK_Proxies_Name` (`Name`);

--
-- Индексы таблицы `sh_tasdiqlash`
--
ALTER TABLE `sh_tasdiqlash`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sp_certiftype`
--
ALTER TABLE `sp_certiftype`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_country`
--
ALTER TABLE `sp_country`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_country_ol`
--
ALTER TABLE `sp_country_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_district`
--
ALTER TABLE `sp_district`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_district_ol`
--
ALTER TABLE `sp_district_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_division`
--
ALTER TABLE `sp_division`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_division_ol`
--
ALTER TABLE `sp_division_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_doctype`
--
ALTER TABLE `sp_doctype`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_doctype_ol`
--
ALTER TABLE `sp_doctype_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_fabula`
--
ALTER TABLE `sp_fabula`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_marital`
--
ALTER TABLE `sp_marital`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_marital_ol`
--
ALTER TABLE `sp_marital_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_nation`
--
ALTER TABLE `sp_nation`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_nation_ol`
--
ALTER TABLE `sp_nation_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_place`
--
ALTER TABLE `sp_place`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_place_ol`
--
ALTER TABLE `sp_place_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_reasonb`
--
ALTER TABLE `sp_reasonb`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_reasonb_ol`
--
ALTER TABLE `sp_reasonb_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_region_copy1`
--
ALTER TABLE `sp_region_copy1`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_sertcause`
--
ALTER TABLE `sp_sertcause`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_sex`
--
ALTER TABLE `sp_sex`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_street`
--
ALTER TABLE `sp_street`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_street_copy1`
--
ALTER TABLE `sp_street_copy1`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `sp_street_ol`
--
ALTER TABLE `sp_street_ol`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

--
-- Индексы таблицы `users_mv`
--
ALTER TABLE `users_mv`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_mvcopy1`
--
ALTER TABLE `users_mvcopy1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usl_key`
--
ALTER TABLE `usl_key`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usl_key_copy1`
--
ALTER TABLE `usl_key_copy1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`visit_id`);

--
-- Индексы таблицы `visits_copy1`
--
ALTER TABLE `visits_copy1`
  ADD PRIMARY KEY (`visit_id`);

--
-- Индексы таблицы `vkons_uchet`
--
ALTER TABLE `vkons_uchet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vkus`
--
ALTER TABLE `vkus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vku_kart`
--
ALTER TABLE `vku_kart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vku_kart_ol`
--
ALTER TABLE `vku_kart_ol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `anketa1`
--
ALTER TABLE `anketa1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `anketa_new`
--
ALTER TABLE `anketa_new`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `anketa_new_copy1`
--
ALTER TABLE `anketa_new_copy1`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `asosiy`
--
ALTER TABLE `asosiy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `bekor_sert`
--
ALTER TABLE `bekor_sert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `errorlog_php`
--
ALTER TABLE `errorlog_php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `errorlog_php_copy1`
--
ALTER TABLE `errorlog_php_copy1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `ips`
--
ALTER TABLE `ips`
  MODIFY `ip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `istrebovanie`
--
ALTER TABLE `istrebovanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `javob_mv`
--
ALTER TABLE `javob_mv`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `klients`
--
ALTER TABLE `klients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `kons_uchet`
--
ALTER TABLE `kons_uchet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `line`
--
ALTER TABLE `line`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_davlat`
--
ALTER TABLE `l_davlat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_dokument`
--
ALTER TABLE `l_dokument`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_dokument_copy1`
--
ALTER TABLE `l_dokument_copy1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_elchixona`
--
ALTER TABLE `l_elchixona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_elchixona_ol`
--
ALTER TABLE `l_elchixona_ol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_oila`
--
ALTER TABLE `l_oila`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_operator`
--
ALTER TABLE `l_operator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_oy`
--
ALTER TABLE `l_oy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_oy_ol`
--
ALTER TABLE `l_oy_ol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_pol`
--
ALTER TABLE `l_pol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_pol_copy1`
--
ALTER TABLE `l_pol_copy1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_sabab`
--
ALTER TABLE `l_sabab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_uslugi`
--
ALTER TABLE `l_uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `l_viloyat`
--
ALTER TABLE `l_viloyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `msg_anketa`
--
ALTER TABLE `msg_anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `msg_ku`
--
ALTER TABLE `msg_ku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `msg_tasdiq`
--
ALTER TABLE `msg_tasdiq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `msg_vku`
--
ALTER TABLE `msg_vku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `muammo`
--
ALTER TABLE `muammo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `opros_j`
--
ALTER TABLE `opros_j`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `sh_tasdiqlash`
--
ALTER TABLE `sh_tasdiqlash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users_mv`
--
ALTER TABLE `users_mv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users_mvcopy1`
--
ALTER TABLE `users_mvcopy1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `visits`
--
ALTER TABLE `visits`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `visits_copy1`
--
ALTER TABLE `visits_copy1`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `vkons_uchet`
--
ALTER TABLE `vkons_uchet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `vku_kart`
--
ALTER TABLE `vku_kart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `vku_kart_ol`
--
ALTER TABLE `vku_kart_ol`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
