-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 23 2022 г., 18:25
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `supreme`
--

-- --------------------------------------------------------

--
-- Структура таблицы `constructions`
--

CREATE TABLE `constructions` (
  `id` int(32) NOT NULL,
  `const_type` char(32) DEFAULT NULL,
  `fract` char(32) DEFAULT NULL,
  `name` char(32) DEFAULT NULL,
  `tech_lvl` varchar(32) DEFAULT NULL,
  `hp` char(32) DEFAULT NULL,
  `hp_reg` char(32) DEFAULT NULL,
  `en_cost` char(32) DEFAULT NULL,
  `mass_cost` char(32) DEFAULT NULL,
  `time_cost` char(32) DEFAULT NULL,
  `reclaim_hp` char(32) DEFAULT NULL,
  `reclaim_amount` char(32) DEFAULT NULL,
  `en_storage` char(32) DEFAULT NULL,
  `mass_storage` char(32) DEFAULT NULL,
  `explosion_damage` char(32) DEFAULT NULL,
  `explosion_radius` char(32) DEFAULT NULL,
  `build_ability` char(32) DEFAULT NULL,
  `direct_vision` char(32) DEFAULT NULL,
  `radar` char(32) DEFAULT NULL,
  `sonar` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `constructions_req`
--

CREATE TABLE `constructions_req` (
  `id` int(32) NOT NULL,
  `const_type` char(32) DEFAULT NULL,
  `fract` char(32) DEFAULT NULL,
  `name` char(32) DEFAULT NULL,
  `tech_lvl` varchar(32) DEFAULT NULL,
  `hp` char(32) DEFAULT NULL,
  `hp_reg` char(32) DEFAULT NULL,
  `en_cost` char(32) DEFAULT NULL,
  `mass_cost` char(32) DEFAULT NULL,
  `time_cost` char(32) DEFAULT NULL,
  `reclaim_hp` char(32) DEFAULT NULL,
  `reclaim_amount` char(32) DEFAULT NULL,
  `en_storage` char(32) DEFAULT NULL,
  `mass_storage` char(32) DEFAULT NULL,
  `explosion_damage` char(32) DEFAULT NULL,
  `explosion_radius` char(32) DEFAULT NULL,
  `build_ability` char(32) DEFAULT NULL,
  `direct_vision` char(32) DEFAULT NULL,
  `radar` char(32) DEFAULT NULL,
  `sonar` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `unites`
--

CREATE TABLE `unites` (
  `id` int(32) NOT NULL,
  `unit_type` varchar(64) DEFAULT NULL,
  `fraction` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `avatar` varchar(256) DEFAULT NULL,
  `tech_lvl` int(8) DEFAULT NULL,
  `hp` int(32) DEFAULT NULL,
  `hp_reg` int(32) DEFAULT NULL,
  `mass_cost` int(32) DEFAULT NULL,
  `en_cost` int(32) DEFAULT NULL,
  `time_cost` int(32) DEFAULT NULL,
  `move_speed` int(32) DEFAULT NULL,
  `rotate_speed` int(32) DEFAULT NULL,
  `direct_vision` int(32) DEFAULT NULL,
  `radar` int(32) DEFAULT NULL,
  `sonar` int(32) DEFAULT NULL,
  `exp_1` int(32) DEFAULT NULL,
  `exp_2` int(32) DEFAULT NULL,
  `exp_3` int(32) DEFAULT NULL,
  `exp_4` int(32) DEFAULT NULL,
  `exp_5` int(32) DEFAULT NULL,
  `hp_1` int(32) DEFAULT NULL,
  `hp_2` int(32) DEFAULT NULL,
  `hp_3` int(32) DEFAULT NULL,
  `hp_4` int(32) DEFAULT NULL,
  `hp_5` int(32) DEFAULT NULL,
  `reg_1` int(32) DEFAULT NULL,
  `reg_2` int(32) DEFAULT NULL,
  `reg_3` int(32) DEFAULT NULL,
  `reg_4` int(32) DEFAULT NULL,
  `reg_5` int(32) DEFAULT NULL,
  `en_speed` int(32) DEFAULT NULL,
  `mass_speed` int(32) DEFAULT NULL,
  `reclaim_amount` int(32) DEFAULT NULL,
  `reclaim_hp` int(32) DEFAULT NULL,
  `en_storage` int(32) DEFAULT NULL,
  `mass_storage` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `unites`
--

INSERT INTO `unites` (`id`, `unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `reclaim_amount`, `reclaim_hp`, `en_storage`, `mass_storage`) VALUES
(1, 'ground', 'UEF', 'eff', NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(2, 'sacu', 'CYBRAN', 'sac', NULL, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'naval', 'SERAPHIM', 'csaqe', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(7, 'sacu', 'UEF', 'erteq', 'uploads/1665480056veles.jpg', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'naval', 'SERAPHIM', 'sera', NULL, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(34, 'acu', 'AEON', 'aeon', NULL, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(38, 'sacu', 'AEON', 'asd', NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'acu', 'AEON', 'Андрей', 'uploads/1665479007veles.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(40, 'engineer', 'CYBRAN', 'adewq', 'uploads/1665479802Screenshot_1.png', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(41, 'ground', 'UEF', 'weqrt', '', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `unites_req`
--

CREATE TABLE `unites_req` (
  `id` int(32) NOT NULL,
  `unit_type` varchar(64) DEFAULT NULL,
  `fraction` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `avatar` varchar(256) DEFAULT NULL,
  `tech_lvl` int(8) DEFAULT NULL,
  `hp` int(32) DEFAULT NULL,
  `hp_reg` int(32) DEFAULT NULL,
  `mass_cost` int(32) DEFAULT NULL,
  `en_cost` int(32) DEFAULT NULL,
  `time_cost` int(32) DEFAULT NULL,
  `move_speed` int(32) DEFAULT NULL,
  `rotate_speed` int(32) DEFAULT NULL,
  `direct_vision` int(32) DEFAULT NULL,
  `radar` int(32) DEFAULT NULL,
  `sonar` int(32) DEFAULT NULL,
  `exp_1` int(32) DEFAULT NULL,
  `exp_2` int(32) DEFAULT NULL,
  `exp_3` int(32) DEFAULT NULL,
  `exp_4` int(32) DEFAULT NULL,
  `exp_5` int(32) DEFAULT NULL,
  `hp_1` int(32) DEFAULT NULL,
  `hp_2` int(32) DEFAULT NULL,
  `hp_3` int(32) DEFAULT NULL,
  `hp_4` int(32) DEFAULT NULL,
  `hp_5` int(32) DEFAULT NULL,
  `reg_1` int(32) DEFAULT NULL,
  `reg_2` int(32) DEFAULT NULL,
  `reg_3` int(32) DEFAULT NULL,
  `reg_4` int(32) DEFAULT NULL,
  `reg_5` int(32) DEFAULT NULL,
  `en_speed` int(32) DEFAULT NULL,
  `mass_speed` int(32) DEFAULT NULL,
  `reclaim_amount` int(32) DEFAULT NULL,
  `reclaim_hp` int(32) DEFAULT NULL,
  `en_storage` int(32) DEFAULT NULL,
  `mass_storage` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `unites_req`
--

INSERT INTO `unites_req` (`id`, `unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `reclaim_amount`, `reclaim_hp`, `en_storage`, `mass_storage`) VALUES
(5, 'air', 'UEF', 'easd', NULL, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(16) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `login` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email_confirmed` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`, `email_confirmed`) VALUES
(1, '', 'localGod', 'a99394188b196a6eba5f6d1f5898267f', NULL),
(2, '', 'concernedPerson', '56c20b87e94acd62dd22e84bb1ed819f', NULL),
(134, 'veleskamisama@bk.ru', 'qwe', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_safe`
--

CREATE TABLE `users_safe` (
  `id` int(16) NOT NULL,
  `login` varchar(32) NOT NULL,
  `login_id` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users_safe`
--

INSERT INTO `users_safe` (`id`, `login`, `login_id`) VALUES
(1, 'localGod', NULL),
(2, 'concernedPerson', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `constructions`
--
ALTER TABLE `constructions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `constructions_req`
--
ALTER TABLE `constructions_req`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `unites`
--
ALTER TABLE `unites`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `unites_req`
--
ALTER TABLE `unites_req`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_safe`
--
ALTER TABLE `users_safe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `constructions`
--
ALTER TABLE `constructions`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `constructions_req`
--
ALTER TABLE `constructions_req`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `unites`
--
ALTER TABLE `unites`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `unites_req`
--
ALTER TABLE `unites_req`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT для таблицы `users_safe`
--
ALTER TABLE `users_safe`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_safe`
--
ALTER TABLE `users_safe`
  ADD CONSTRAINT `users_safe_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
