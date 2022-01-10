-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-08 05:45:20
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- テーブルのデータのダンプ `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"urattei\",\"table\":\"users\"},{\"db\":\"urattei\",\"table\":\"likedislike\"},{\"db\":\"urattei\",\"table\":\"posts\"}]');

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- テーブルのデータのダンプ `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-01-08 04:45:15', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"ja\"}');

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- テーブルのインデックス `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- テーブルのインデックス `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- テーブルのインデックス `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- テーブルのインデックス `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- テーブルのインデックス `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- テーブルのインデックス `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- テーブルのインデックス `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- テーブルのインデックス `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- テーブルのインデックス `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- テーブルのインデックス `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- テーブルのインデックス `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- テーブルのインデックス `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- テーブルのインデックス `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- テーブルのインデックス `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- テーブルのインデックス `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- テーブルのインデックス `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- テーブルのインデックス `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- データベース: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- データベース: `todo`
--
CREATE DATABASE IF NOT EXISTS `todo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `todo`;

-- --------------------------------------------------------

--
-- テーブルの構造 `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `finished_date` date DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `create_date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `create_date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `family_name`, `first_name`, `is_admin`, `is_deleted`, `create_date_time`, `update_date_time`) VALUES
(1, 'test1', '$2y$10$eSePpwz2hteTQZNXO1BvFeI.VCSGF/YqGdpZda/sHQDQWzAJoehYi', 'テスト', '花子', 0, 0, '2021-12-04 11:58:31', '2021-12-04 11:58:31'),
(2, 'test2', '$2y$10$btIzYtozzeEJ2J53ZU/Qz.YBK61RilXtGcVJkrZfz1r/fS8R72F.i', 'テスト', '太郎', 0, 0, '2021-12-04 11:58:31', '2021-12-04 11:58:31');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- データベース: `urattei`
--
CREATE DATABASE IF NOT EXISTS `urattei` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `urattei`;

-- --------------------------------------------------------

--
-- テーブルの構造 `likedislike`
--

CREATE TABLE `likedislike` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `likes` int(11) DEFAULT 0,
  `dislikes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `likedislike`
--

INSERT INTO `likedislike` (`id`, `post_id`, `user_id`, `likes`, `dislikes`) VALUES
(209, 66, 5, 0, NULL),
(210, 66, 5, 0, NULL),
(211, 66, 5, 0, NULL),
(212, 66, 5, -2, 0),
(213, 66, 5, 0, NULL),
(214, 66, 5, -3, 0),
(215, 66, 5, 0, NULL),
(216, 66, 5, -4, 0),
(217, 66, 5, -3, 0),
(218, 66, 5, -2, 0),
(219, 66, 5, -1, 0),
(220, 66, 5, 0, 0),
(221, 66, 5, -1, 0),
(222, 66, 5, 0, NULL),
(223, 66, 5, 0, 0),
(224, 66, 5, -1, 0),
(225, 66, 5, 0, 0),
(226, 66, 5, -1, 0),
(227, 66, 5, 0, 0),
(228, 66, 5, 0, NULL),
(229, 66, 5, 0, NULL),
(230, 66, 5, 0, NULL),
(231, 66, 5, -1, 0),
(232, 66, 5, 0, 0),
(233, 162, 5, -1, 0),
(234, 162, 5, 0, 0),
(235, 162, 5, -1, 0),
(236, 162, 5, 0, 0),
(237, 162, 5, 1, 0),
(238, 162, 5, 0, 0),
(239, 162, 5, 1, 0),
(240, 162, 5, 0, 0),
(241, 162, 5, 0, NULL),
(242, 162, 5, 0, NULL),
(243, 162, 5, 1, 0),
(244, 162, 5, 0, 0),
(245, 163, 5, 1, 0),
(246, 163, 5, 0, 0),
(247, 163, 5, 0, NULL),
(248, 163, 5, 0, NULL),
(249, 164, 7, 0, NULL),
(250, 164, 7, 0, NULL),
(251, 164, 7, 0, NULL),
(252, 164, 7, 0, NULL),
(253, 164, 7, 0, NULL),
(254, 163, 7, 0, NULL),
(255, 163, 7, 0, NULL),
(256, 163, 7, 0, NULL),
(257, 163, 7, 0, NULL),
(258, 163, 7, 0, NULL),
(259, 162, 5, 0, NULL),
(260, 162, 5, 0, NULL),
(261, 162, 5, 1, 0),
(262, 162, 5, 0, 0),
(263, 162, 5, 1, 0),
(264, 162, 5, 0, 0),
(265, 162, 5, 0, NULL),
(266, 162, 5, 0, NULL),
(267, 162, 5, 1, 0),
(268, 162, 5, 0, 0),
(269, 162, 5, 1, 0),
(270, 162, 5, 0, 0),
(271, 162, 7, 1, 0),
(272, 162, 7, 0, 0),
(273, 162, 7, 0, NULL),
(274, 162, 7, 0, NULL),
(275, 165, 7, 0, NULL),
(276, 166, 7, 1, 0),
(277, 162, 7, 1, 0),
(278, 162, 7, 0, NULL),
(279, 162, 7, 0, NULL),
(280, 162, 7, 0, 0),
(281, 166, 7, 0, NULL),
(282, 166, 9, 0, 0),
(283, 166, 9, 1, 0),
(284, 166, 9, 0, NULL),
(285, 166, 9, 0, NULL),
(286, 166, 9, 0, NULL),
(287, 166, 9, 0, NULL),
(288, 166, 9, 0, NULL),
(289, 162, 9, 1, 0),
(290, 162, 9, 0, 0),
(291, 162, 9, 0, NULL),
(292, 162, 9, 0, NULL),
(293, 166, 9, 0, 0),
(294, 166, 9, 1, 0),
(295, 166, 9, 0, 0),
(296, 166, 9, 1, 0),
(297, 166, 9, 0, 0),
(298, 167, 5, 1, 0),
(299, 169, 5, 1, 0),
(300, 169, 5, 0, 0),
(301, 169, 5, 0, NULL),
(302, 169, 5, 0, NULL),
(303, 169, 5, 0, NULL),
(304, 169, 5, 0, NULL),
(305, 167, 5, 0, 0),
(306, 167, 5, 1, 0),
(307, 167, 5, 0, 0),
(308, 167, 5, 1, 0),
(309, 167, 5, 0, 0),
(310, 167, 5, 1, 0),
(311, 167, 5, 0, 0),
(312, 167, 5, 0, NULL),
(313, 167, 5, 0, NULL),
(314, 167, 5, 1, 0),
(315, 167, 5, 0, 0),
(316, 167, 5, 1, 0),
(317, 167, 5, 0, 0),
(318, 167, 5, 1, 0),
(319, 167, 5, 0, 0),
(320, 170, 5, 1, 0),
(321, 170, 5, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `text` varchar(512) NOT NULL,
  `likes` int(11) DEFAULT 0,
  `dislikes` int(11) DEFAULT 0,
  `posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(100) DEFAULT '0',
  `is_deleted` int(11) DEFAULT 0,
  `edit_date` timestamp NULL DEFAULT current_timestamp(),
  `reply` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `name`, `text`, `likes`, `dislikes`, `posted`, `photo`, `is_deleted`, `edit_date`, `reply`) VALUES
(66, 5, 'test', 'edwed', 0, -9, '2022-01-04 05:57:46', '1.jpg', 1, '2022-01-04 05:57:46', 0),
(67, 5, 'test', 'うぇｆうぇ', 0, 1, '2022-01-04 05:59:44', '0', 1, '2022-01-04 05:59:44', 0),
(68, 5, 'test', 'うぇ', 2, 0, '2022-01-04 05:59:59', '0', 1, '2022-01-04 05:59:59', 0),
(69, 5, 'test', 'てｓｔ', 2, 8, '2022-01-04 06:07:27', 'スクリーンショット (1).png', 1, '2022-01-04 06:07:27', 0),
(70, 5, 'test', 'っっっっｔ', 1, 1, '2022-01-04 06:40:56', 'スクリーンショット (1).png', 1, '2022-01-04 06:40:56', 0),
(71, 5, 'test', 'れｆれｆ', 1, 1, '2022-01-04 06:42:57', 'スクリーンショット (1).png', 1, '2022-01-04 06:42:57', 2),
(72, 5, 'test', 'ｒｔｇｔｒｇｔｇ', 0, 1, '2022-01-04 06:43:01', '0', 1, '2022-01-04 06:43:01', 0),
(73, 5, 'test', '課題のおおいSNS', 2, 2, '2022-01-04 06:43:10', '0', 1, '2022-01-04 06:43:10', 0),
(74, 5, 'test', 'ｒｇｒふぇｗｆれ', 1, 1, '2022-01-05 05:27:32', 'スクリーンショット (1).png', 1, '2022-01-05 05:27:32', 0),
(75, 5, 'test', 'てｓｔ', 1, 2, '2022-01-05 05:30:12', '0', 1, '2022-01-05 05:30:12', 0),
(76, 5, 'test', 'てすとてすと', 1, 3, '2022-01-05 05:31:30', '0', 1, '2022-01-05 05:31:30', 0),
(77, 5, 'test', 'ｔｇｒっｂｔｇ', 10, 6, '2022-01-05 05:32:45', '20220105063245-スクリーンショット (1).png', 1, '2022-01-05 05:32:45', 0),
(78, 5, 'test', 'っっっｇ', 0, 0, '2022-01-05 06:40:24', '0', 1, '2022-01-05 06:40:24', 0),
(79, 5, 'test', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ', 0, 0, '2022-01-06 02:03:27', '0', 1, '2022-01-06 02:03:27', 0),
(80, 5, 'test', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ', 0, 0, '2022-01-06 02:04:35', '0', 1, '2022-01-06 02:04:35', 0),
(81, 5, 'test', '', 1, 0, '2022-01-06 02:55:13', '20220106035513-スクリーンショット (2).png', 1, '2022-01-06 02:55:13', 0),
(82, 5, 'test', 'ｔｇｒ', 1, 0, '2022-01-06 05:19:36', '0', 1, '2022-01-06 05:19:36', 0),
(83, 5, 'test', 'てｓｔ', 1, 0, '2022-01-06 05:20:38', '0', 1, '2022-01-06 05:20:38', 0),
(84, 5, 'test', 'ｔｒｇ', 1, 0, '2022-01-06 05:21:18', '0', 1, '2022-01-06 05:21:18', 0),
(85, 5, 'test', 'っっっっｒ', 5, 1, '2022-01-06 05:26:31', '0', 1, '2022-01-06 05:26:31', 0),
(86, 5, 'test', '4fr', 0, 0, '2022-01-06 05:32:59', '0', 1, '2022-01-06 05:32:59', 0),
(87, 5, 'test', 'tttt', 0, 0, '2022-01-06 05:42:35', '0', 1, '2022-01-06 05:42:35', 0),
(88, 5, 'test', 'かんせい！', 0, 0, '2022-01-06 06:01:16', '20220106070116-スクリーンショット (2).png', 1, '2022-01-06 06:01:16', 0),
(89, 5, 'test', 'ああああああああああああ', 0, 0, '2022-01-06 06:02:56', '20220106070256-スクリーンショット (2).png', 1, '2022-01-06 06:02:56', 0),
(90, 5, 'test', 'っっっっっっっっっっｒ', 0, 0, '2022-01-06 06:07:55', '0', 1, '2022-01-06 06:07:55', 0),
(91, 5, 'test', 'あああ', 0, 0, '2022-01-07 02:36:01', '0', 1, '2022-01-07 02:36:01', 0),
(92, 5, 'test', '                                                    &gt;&gt;70                                                ', 0, 0, '2022-01-07 02:50:12', '0', 1, '2022-01-07 02:50:12', NULL),
(93, 5, 'test', '                                                    &gt;&gt;70                                                ', 0, 0, '2022-01-07 02:50:57', '0', 1, '2022-01-07 02:50:57', NULL),
(94, 5, 'test', '&gt;&gt;                                   ', 0, 0, '2022-01-07 02:51:25', '0', 1, '2022-01-07 02:51:25', NULL),
(95, 5, 'test', '                                                    &gt;&gt;70                                                ', 0, 0, '2022-01-07 02:51:50', '0', 1, '2022-01-07 02:51:50', NULL),
(96, 5, 'test', '                                                    &gt;&gt;70                                                ', 0, 0, '2022-01-07 02:51:59', '0', 1, '2022-01-07 02:51:59', NULL),
(97, 5, 'test', '                                                    &gt;&gt;69                                                ', 0, 0, '2022-01-07 02:55:44', '0', 1, '2022-01-07 02:55:44', NULL),
(98, 5, 'test', '                                                    &gt;&gt;69                                                ', 0, 0, '2022-01-07 02:55:54', '0', 1, '2022-01-07 02:55:54', NULL),
(99, 5, 'test', '                                                ', 0, 0, '2022-01-07 02:57:08', '0', 1, '2022-01-07 02:57:08', NULL),
(100, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 03:33:33', '0', 1, '2022-01-07 03:33:33', NULL),
(101, 5, 'test', '                                                    &gt;&gt;100                                                ', 0, 0, '2022-01-07 03:33:46', '0', 1, '2022-01-07 03:33:46', NULL),
(102, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 03:35:06', '0', 1, '2022-01-07 03:35:06', NULL),
(103, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 03:37:34', '0', 1, '2022-01-07 03:37:34', NULL),
(104, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:45:35', '0', 1, '2022-01-07 03:45:35', NULL),
(105, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:46:10', '0', 1, '2022-01-07 03:46:10', NULL),
(106, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:50:49', '0', 1, '2022-01-07 03:50:49', NULL),
(107, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:52:05', '0', 1, '2022-01-07 03:52:05', NULL),
(108, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:54:18', '0', 1, '2022-01-07 03:54:18', NULL),
(109, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:54:39', '0', 1, '2022-01-07 03:54:39', NULL),
(110, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:55:08', '0', 1, '2022-01-07 03:55:08', NULL),
(111, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:55:13', '0', 1, '2022-01-07 03:55:13', NULL),
(112, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:56:56', '0', 1, '2022-01-07 03:56:56', NULL),
(113, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:57:10', '0', 1, '2022-01-07 03:57:10', NULL),
(114, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:57:17', '0', 1, '2022-01-07 03:57:17', NULL),
(115, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:57:26', '0', 1, '2022-01-07 03:57:26', NULL),
(116, 5, 'test', '                                                    &gt;&gt;103                                                ', 0, 0, '2022-01-07 03:57:31', '0', 1, '2022-01-07 03:57:31', NULL),
(117, 5, 'test', '                                                    &gt;&gt;114                                                ', 0, 0, '2022-01-07 04:01:19', '0', 1, '2022-01-07 04:01:19', NULL),
(118, 5, 'test', '                                                                          ', 0, 0, '2022-01-07 04:01:23', '0', 1, '2022-01-07 04:01:23', NULL),
(119, 5, 'test', '                                                                          ', 0, 0, '2022-01-07 04:01:29', '0', 1, '2022-01-07 04:01:29', NULL),
(120, 5, 'test', '                                                                          ', 0, 0, '2022-01-07 04:01:40', '0', 1, '2022-01-07 04:01:40', NULL),
(121, 5, 'test', '                                                    &gt;&gt;114                                                ', 0, 0, '2022-01-07 04:01:42', '0', 1, '2022-01-07 04:01:42', NULL),
(122, 5, 'test', '                                                    &gt;&gt;114                                                ', 0, 0, '2022-01-07 04:01:53', '0', 1, '2022-01-07 04:01:53', NULL),
(123, 5, 'test', '                                                    &gt;&gt;114                                                ', 0, 0, '2022-01-07 04:01:58', '0', 1, '2022-01-07 04:01:58', NULL),
(124, 5, 'test', '                                                    &gt;&gt;114                                                ', 0, 0, '2022-01-07 04:02:19', '0', 1, '2022-01-07 04:02:19', NULL),
(125, 5, 'test', '                                                                             ', 0, 0, '2022-01-07 04:02:21', '0', 1, '2022-01-07 04:02:21', NULL),
(126, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:02:41', '0', 1, '2022-01-07 04:02:41', NULL),
(127, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:04:07', '0', 1, '2022-01-07 04:04:07', NULL),
(128, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:04:17', '0', 1, '2022-01-07 04:04:17', NULL),
(129, 5, 'test', '                                                                   ', 0, 0, '2022-01-07 04:04:20', '0', 1, '2022-01-07 04:04:20', NULL),
(130, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:10:17', '0', 1, '2022-01-07 04:10:17', NULL),
(131, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:10:19', '0', 1, '2022-01-07 04:10:19', NULL),
(132, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:10:20', '0', 1, '2022-01-07 04:10:20', NULL),
(133, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:12:01', '0', 1, '2022-01-07 04:12:01', NULL),
(134, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:14:30', '0', 1, '2022-01-07 04:14:30', NULL),
(135, 5, 'test', '                                                    &gt;&gt;125                                                ', 0, 0, '2022-01-07 04:15:43', '0', 1, '2022-01-07 04:15:43', NULL),
(136, 5, 'test', '                                                    &gt;&gt;135                                                ', 0, 0, '2022-01-07 04:15:47', '0', 1, '2022-01-07 04:15:47', NULL),
(137, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 04:20:13', '0', 1, '2022-01-07 04:20:13', 0),
(138, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 04:20:25', '0', 1, '2022-01-07 04:20:25', 0),
(139, 5, 'test', '                                                erf', 0, 0, '2022-01-07 04:30:09', '0', 1, '2022-01-07 04:30:09', 0),
(140, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 04:34:30', '0', 1, '2022-01-07 04:34:30', 0),
(141, 5, 'test', '                                                ewfwef', 0, 0, '2022-01-07 04:34:50', '0', 1, '2022-01-07 04:34:50', 0),
(142, 5, 'test', '                                                    &gt;&gt;140                                                ', 0, 0, '2022-01-07 04:36:21', '0', 1, '2022-01-07 04:36:21', 0),
(143, 5, 'test', '                                                    &gt;&gt;140                                                ', 0, 0, '2022-01-07 04:37:37', '0', 1, '2022-01-07 04:37:37', 0),
(144, 5, 'test', '                                                45tt54', 0, 0, '2022-01-07 04:37:43', '0', 1, '2022-01-07 04:37:43', 0),
(145, 5, 'test', '                                                    &gt;&gt;140                                                ', 0, 0, '2022-01-07 04:39:08', '0', 1, '2022-01-07 04:39:08', 0),
(146, 5, 'test', '                                                    &gt;&gt;140                                                ', 0, 0, '2022-01-07 04:39:22', '0', 1, '2022-01-07 04:39:22', 0),
(147, 5, 'test', '                                                    &gt;&gt;140                                                ', 0, 0, '2022-01-07 04:50:20', '0', 1, '2022-01-07 04:50:20', 0),
(148, 5, 'test', '                                                    &gt;&gt;140                          aaa                      ', 0, 0, '2022-01-07 04:50:26', '0', 1, '2022-01-07 04:50:26', 0),
(149, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 04:51:14', '0', 1, '2022-01-07 04:51:14', 0),
(150, 5, 'test', '                                                    &gt;&gt;71                                                ', 0, 0, '2022-01-07 04:51:18', '0', 1, '2022-01-07 04:51:18', 0),
(151, 5, 'test', '                                                tretgr', 0, 0, '2022-01-07 05:23:01', '0', 1, '2022-01-07 05:23:01', 0),
(152, 5, 'test', '                                                4gtg', 0, 0, '2022-01-07 05:23:23', '0', 1, '2022-01-07 05:23:23', 0),
(153, 5, 'test', '                                                4gtg', 0, 0, '2022-01-07 05:24:34', '0', 1, '2022-01-07 05:24:34', 0),
(154, 5, 'test', '                                                4gtg', 0, 0, '2022-01-07 05:24:57', '0', 1, '2022-01-07 05:24:57', 0),
(155, 5, 'test', '                                                rgew', 0, 0, '2022-01-07 05:25:03', '0', 1, '2022-01-07 05:25:03', 0),
(156, 5, 'test', '                                                erf', 0, 0, '2022-01-07 05:25:34', '0', 1, '2022-01-07 05:25:34', 0),
(157, 5, 'test', '                                                tr', 0, 0, '2022-01-07 05:26:16', '0', 1, '2022-01-07 05:26:16', 0),
(158, 5, 'test', '                                                rtg', 0, 0, '2022-01-07 05:26:36', '0', 1, '2022-01-07 05:26:36', 0),
(159, 5, 'test', '                                                namae', -4, 0, '2022-01-07 05:29:43', '20220107062943-スクリーンショット (2).png', 1, '2022-01-07 05:29:43', 0),
(160, 6, '2', '                                                2', 0, 0, '2022-01-07 05:31:54', '0', 1, '2022-01-07 05:31:54', 0),
(161, 6, '2', '                                                ', -11, -5, '2022-01-07 05:32:25', '20220107063225-スクリーンショット (2).png', 1, '2022-01-07 05:32:25', 0),
(162, 5, 'test', '                                                ', 0, 0, '2022-01-07 05:48:04', '20220107064804-スクリーンショット (1).png', 0, '2022-01-07 05:48:04', 0),
(163, 5, 'test', 'jCOMはクソです', 0, -5, '2022-01-07 05:48:34', '20220107064834-スクリーンショット (2).png', 1, '2022-01-07 05:48:34', 0),
(164, 7, '６', '                                                てすと', 0, -5, '2022-01-07 05:49:08', '20220107064908-スクリーンショット (12).png', 1, '2022-01-07 05:49:08', 0),
(165, 7, '６', '                                                jcomくそくらえ', 0, 1, '2022-01-07 05:53:41', '20220107065341-スクリーンショット (2).png', 1, '2022-01-07 05:53:41', 0),
(166, 7, '６', '                                               jcomくそくらえ', 0, 0, '2022-01-07 05:56:18', '20220107065618-スクリーンショット (2).png', 0, '2022-01-07 05:56:18', 0),
(167, 9, '7', '画像を添付できます。', 1, 1, '2022-01-07 06:21:15', '20220107072115-スクリーンショット (20).png', 0, '2022-01-07 06:21:15', 0),
(168, 5, 'test', '                                                tesuto', 0, 0, '2022-01-07 06:21:47', '0', 1, '2022-01-07 06:21:47', 0),
(169, 5, 'test', '                                                tesuto', 0, 0, '2022-01-07 06:21:52', '0', 1, '2022-01-07 06:21:52', 0),
(170, 5, 'test', ' aaaaaaaaaaaaaaa', 0, 0, '2022-01-08 04:01:10', '20220108050110-スクリーンショット (2).png', 1, '2022-01-08 04:01:10', 1),
(171, 5, 'test', '                                                    &gt;&gt;170               eee                                 ', 0, 1, '2022-01-08 04:01:55', '0', 0, '2022-01-08 04:01:55', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(256) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `posts` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `create_date`, `posts`) VALUES
(5, 'test', '1', '$2y$10$OoxeUZcJscGisBNzvfXG8OLqFQsyqpbZZVOav4ENUdcMag9Xt8KyO', '2022-01-07 05:26:36', 1),
(7, '６', '６', '$2y$10$hgWvy9cChlqogeH47AAxFOtCltdxqIeAkHtv5HfUHBKatj5j/ry/e', '2022-01-07 05:48:58', NULL),
(8, '6', '6', '$2y$10$5eSwTVG.eBuN2LQoigh/Xu2DucGBjoO0R/aBCKJ8GkqYbkYT0reCG', '2022-01-07 05:53:15', NULL),
(9, '7', '7', '$2y$10$F15sO0QVUyFPwsGpX9Lg.uMep7JinJyZuOMhCd/Jfnn2iNpKUyvY.', '2022-01-07 06:01:49', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `likedislike`
--
ALTER TABLE `likedislike`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `likedislike`
--
ALTER TABLE `likedislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- テーブルの AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
