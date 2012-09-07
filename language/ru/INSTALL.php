<?php

// Translated into Russian by InquisitorEA (SporeEA@yandex.ru). All rights reserved © 2010-2012

$LNG['back']                  = 'Назад';
$LNG['continue']              = 'Дальше';
$LNG['continueUpgrade']       = 'Обновить';
$LNG['login']                 = 'Войти в админку';

$LNG['menu_intro']            = 'Описание';
$LNG['menu_install']          = 'Установка';
$LNG['menu_license']          = 'Лицензия';
$LNG['menu_upgrade']          = 'Обновление';

$LNG['title_install']         = 'Установщик';

$LNG['intro_lang']            = 'Язык';
$LNG['intro_install']         = 'Установить';
$LNG['intro_welcome']         = 'Добро пожаловать в 2Moons!';
$LNG['intro_text']            = '2Moons - один из лучших клонов OGame.<br>2Moons является самым стабильным и развивающимся движком из всех подобных XNova на данный момент. Мы надеемся, что 2Moons будет лучше, чем Вы ожидаете.<br><br>Если у Вас будут вопросы, консультируйтесь с нами.<br><br>2Moons является проектом с открытым кодом и распространяется под лицензией GNU GPL v3, ознакомиться с которой Вы можете в разделе Лицензия.<br><br>Перед установкой будет запущен небольшой тест на соответствие минимальным требованиям.';
$LNG['intro_upgrade_head']    = '2Moons уже установлена';
$LNG['intro_upgrade_text']    = '<p>Вы уже установили 2Moons и просто хотите её обновить?</p><p>Здесь вы можете обновить старую базу данных с помощью нескольких кликов.</p>';

$LNG['licence_head']          = 'Лицензионное соглашение';
$LNG['licence_desc']          = 'Пожалуйста, прочитайте лицензионное соглашение. Используйте полосу прокрутки для просмотра всего документа.';
$LNG['licence_accept']        = 'Вы согласны со всеми условиями лицензионного соглашения? Вы можете установить программное обеспечение, только если Вы принимаете условия лицензионного соглашения.';
$LNG['licence_need_accept']   = 'Для того, чтобы приступить к установке, Вы должны принять условия лицензионного соглашения.';

$LNG['req_head']              = 'Необходимые модули';
$LNG['req_desc']              = 'Перед продолжением установки 2Moons выполнит проверку файлов конфигурации Вашего сервера на соответствие необходимым требованиям использования 2Moons. Пожалуйста, прочитайте внимательно результаты и не продолжайте установку, пока проверка не будет пройдена по всем пунктам. Если Вы хотите использовать любую из функций перечисленных ниже модулей, Вы должны убедиться, что проверка пройдена.';
$LNG['reg_yes']               = 'Да';
$LNG['reg_no']                = 'Нет';
$LNG['reg_found']             = 'Да';
$LNG['reg_not_found']         = 'Нет';
$LNG['reg_writable']          = '(CHMOD 777)';
$LNG['reg_not_writable']      = 'Не установлены права на запись';
$LNG['reg_file']              = 'Файл &raquo;%s&laquo; доступен для записи?';
$LNG['reg_dir']               = 'Папка &raquo;%s&laquo; доступна для записи?';
$LNG['req_php_need']          = 'Установленная версия &raquo;PHP&laquo;';
$LNG['req_php_need_desc']     = '<strong>Необходимо</strong> — PHP является серверным языком, на котором написана игра. 2Moons работает без ограничений, используя версию PHP 5.2.5 и выше.';
$LNG['reg_gd_need']           = 'Установленная версия графической библиотеки &raquo;gdlib&laquo;';
$LNG['reg_gd_desc']           = '<strong>Рекомендуемо</strong> — Графическая библиотека &raquo;gdlib&laquo; отвечает за динамическую генерацию изображений. Без этой библиотеки не будет возможна работа некоторых функциональных возможностей программного обеспечения.';
$LNG['reg_mysqli_active']     = 'Поддержка расширения &raquo;MySQLi&laquo;';
$LNG['reg_mysqli_desc']       = '<strong>Необходимо</strong> — Вы должны обеспечить поддержку MySQLi в PHP. Если на Вашем сервере нет поддержки базы данных, то обратитесь к хостинг-провайдеру и попросите его установить поддержку базы данных MySQLi';
$LNG['reg_json_need']         = 'Расширение &raquo;JSON&laquo; доступно?';
$LNG['reg_iniset_need']       = 'Функция PHP &raquo;ini_set&laquo; активна?';
$LNG['reg_global_need']       = 'Параметр &raquo;register_globals&laquo; отключён?';
$LNG['reg_global_desc']       = '2Moons будет корректно работать, если этот параметр включён. Тем не менее, рекомендуется по соображениям безопасности, отключить register_globals в настройках PHP.';
$LNG['req_ftp_head']          = 'FTP';
$LNG['req_ftp_desc']          = 'Пожалуйста, введите Ваши данные FTP, чтобы установщик автоматически исправил ошибки. Кроме того, можно также вручную назначить разрешения на запись.';
$LNG['req_ftp_host']          = 'FTP хост';
$LNG['req_ftp_username']      = 'FTP логин';
$LNG['req_ftp_password']      = 'FTP пароль';
$LNG['req_ftp_dir']           = 'FTP путь к 2Moons';
$LNG['req_ftp_send']          = 'Установить права CHMOD 777';
$LNG['req_ftp_error_data']    = 'С предоставленными учетными данными не удалось подключиться к серверу FTP.';
$LNG['req_ftp_error_dir']     = 'Папка указана неверно.';

$LNG['step1_head']            = 'Настройка доступа к базе данных';
$LNG['step1_desc']            = '2Moons может быть установлена на Вашем сервере, но Вы должны указать настройки доступа к базе данных. Если Вы не знаете настройки доступа для подключения к базе данных, узнайте их у Вашего хостинг-провайдера или связитесь с технической поддержкой 2Moons для консультации. При вводе данных, пожалуйста, проверьте их внимательно, прежде чем продолжить.';
$LNG['step1_mysql_server']    = 'Имя сервера базы данных';
$LNG['step1_mysql_port']      = 'Порт сервера базы данных';
$LNG['step1_mysql_dbuser']    = 'Логин пользователя базы данных';
$LNG['step1_mysql_dbpass']    = 'Пароль пользователя базы данных';
$LNG['step1_mysql_dbname']    = 'Название базы данных';
$LNG['step1_mysql_prefix']    = 'Префикс таблиц';

$LNG['step2_prefix_invalid']  = 'Префикс базы данных должен содержать только алфавитно-цифровые символы и знак подчеркивания.';
$LNG['step2_db_no_dbname']    = 'Имя базы данных не указано.';
$LNG['step2_db_too_long']     = 'Указанный префикс таблиц слишком длинный. Максимальная длина составляет 36 символов.';
$LNG['step2_db_con_fail']     = 'Нет соединения с базой данных. Подробная информация указана ниже.';
$LNG['step2_config_exists']   = 'config.php уже существует.';
$LNG['step2_conf_op_fail']    = 'Для config.php не были установлены права на запись.';
$LNG['step2_conf_create']     = 'config.php создан.';
$LNG['step2_db_done']         = 'Подключение к базе данных установлено.';

$LNG['step3_head']            = 'Создание таблиц базы данных';
$LNG['step3_desc']            = 'Таблицы базы данных созданы и заполнены. Переходите к следующему шагу, чтобы завершить установку 2Moons.';
$LNG['step3_db_error']        = 'Не удалось создать следующие таблицы в базе данных:';

$LNG['step4_head']            = 'Создание Администратора';
$LNG['step4_desc']            = 'Для создания учетной записи Администратора, пожалуйста, введите логин, пароль и адрес электронной почты.';
$LNG['step4_admin_name']      = 'Логин:';
$LNG['step4_admin_name_desc'] = 'От 3 до 20 символов.';
$LNG['step4_admin_pass']      = 'Пароль:';
$LNG['step4_admin_pass_desc'] = 'От 6 до 30 символов.';
$LNG['step4_admin_mail']      = 'Адрес электронной почты:';

$LNG['step6_head']            = 'Поздравляем!';
$LNG['step6_desc']            = 'Вы установили 2Moons.';
$LNG['step6_info_head']       = 'Начните использовать 2Moons.';
$LNG['step6_info_additional'] = 'Если Вы нажмёте на кнопку ниже, Вы будете перенаправлены в панель Администратора. Потратьте некоторое время на ознакомление с доступными настройками.<br/><br/><strong>Пожалуйста, удалите файл &raquo;includes/ENABLE_INSTALL_TOOL&laquo; или переименуйте его, прежде чем использовать игру. Пока этот файл существует, Ваша игра подвергается потенциальному риску взлома!</strong>';

$LNG['sql_close_reason']      = 'Сервер в данный момент недоступен';
$LNG['sql_welcome']           = 'Добро пожаловать в 2Moons v';
?>