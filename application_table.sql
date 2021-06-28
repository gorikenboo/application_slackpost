-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 28 日 07:13
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `application_form`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `application_table`
--

CREATE TABLE `application_table` (
  `id` int(12) NOT NULL,
  `char_sei` varchar(128) NOT NULL,
  `char_mei` varchar(128) NOT NULL,
  `kana_sei` varchar(128) NOT NULL,
  `kana_mei` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `affiliation` varchar(128) NOT NULL,
  `target_for` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `problem` varchar(128) NOT NULL,
  `pffp_name` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `application_table`
--

INSERT INTO `application_table` (`id`, `char_sei`, `char_mei`, `kana_sei`, `kana_mei`, `mail`, `affiliation`, `target_for`, `contents`, `problem`, `pffp_name`, `created_at`, `updated_at`) VALUES
(7, 'あ', 'あ', 'あ', 'あ', 'aaa@test', 'あ', 'あ', 'あ', 'あ', '', '2021-06-26 13:28:18', '2021-06-26 13:28:18'),
(8, 'あ', 'あ', 'あ', 'あ', 'aaa@test', 'あ', 'あ', 'あ', 'あ', '', '2021-06-26 13:41:06', '2021-06-26 13:41:06'),
(9, 'あ', 'あ', 'あ', 'あ', 'aaa@test', 'あ', 'あ', 'あ', 'あ', '', '2021-06-26 14:19:18', '2021-06-26 14:19:18'),
(10, '古賀', '一成', 'コガ', 'イッセイ', 'aaa@test', '九大', '学生', '物理', '真面目に聞いてくれない', '', '2021-06-27 16:02:46', '2021-06-27 16:02:46'),
(16, '吉田', 'くん', 'ヨシダ', 'クン', 'yosida@test', '鷹の爪団', 'フィリップ、菩薩峠', '世界征服について', '誰も話を聞いてくれない', 'デラックスファイター', '2021-06-28 13:24:41', '2021-06-28 13:26:34');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `application_table`
--
ALTER TABLE `application_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `application_table`
--
ALTER TABLE `application_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
