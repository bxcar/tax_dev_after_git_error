<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

 //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\tax_dev\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define( 'WP_HOME', 'http://192.168.0.98'); //101
define( 'WP_SITEURL', 'http://192.168.0.98');
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'tax_dev');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eiyj~;fx-&&]S5Q:h?32i=al NBVO8a-B*Qf%F2Gt[eM&)>Eq=sbe*f2pw.IzG^)');
define('SECURE_AUTH_KEY',  'a<97`w.hI./x_RQ7%$!Ij(YDaJ-4CgoREu6eA]6BL*Z13[)J23GM^.4]>E=fR+~~');
define('LOGGED_IN_KEY',    'v&*2p]I_iQ@1+Z Q1swoKxew7RWLGt0<r_cf9pw*a5Xd]?6G5*Q/2.8vceN0^lmQ');
define('NONCE_KEY',        'T`c<t_*;H0N9y3=vL?-DIWf4T1`(2^9DUX&zfh~D[RU=PIi2G,Zb;xeS&=z?Vpzx');
define('AUTH_SALT',        '4pq%q|H/Q[okVYs=qH8z*0xWm/d1KtY&_cAm^XgXT8yK!bQ{bS`G}fVQVvDg8+.<');
define('SECURE_AUTH_SALT', '`+V H{EvkusE<a_N)pTK${vZ0!W)`vw{KS^|U1hZis|3j[UQ!mo!YNxvQR^~osLY');
define('LOGGED_IN_SALT',   '5Tx726E&h7Re7-<$~kmnU&_<_vh&yS0E,cH 4Xm2qH_du /M7uLL +@Z{EP<;CWU');
define('NONCE_SALT',       'dqv(:sh%,;RRvam7Zw z+L3.dzzb5>H8-j[z)v5R19hm<%{Nu.5|&gQ)^ze)#1}5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

