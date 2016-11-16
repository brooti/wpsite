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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123321');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '5u~dwWDwG^d0oAV`:Ya*S0!+3kYV/m7=xtRa*xC>sEsO|RcV2EX]8gJ_f>NFEnC+');
define('SECURE_AUTH_KEY',  'WQD]aX0uF`}4 F1>R*#*<N{0|DZPEw]{3q4kBXrmn(4:|nw3$B HE5T<#ql8+]R]');
define('LOGGED_IN_KEY',    '^abo.dC`9s`TAmDRx<W11lT`=n90G:bFqQ{)$Uz@s>;mP5,M}/;7thR {Mt#zKL4');
define('NONCE_KEY',        '] X_kSL<@P@ jsHl?`_0IX3yPMFuimz&(SXcgDJO_KbNA)Bu;N6ua8^nWVR^x7u7');
define('AUTH_SALT',        'ZRVU:U9 ^_Byv%b)fkx`1t,]zA:bZO}Tb:1Lfrx%`aJQ<`5iJK~yeS!(<_us28M1');
define('SECURE_AUTH_SALT', 'e8D%IpuJ1(-b,kie.Ty03.I$<m3#2bcDN,6Nt_mXRzJL&`Zhe~$FFB?JD;vDD9 D');
define('LOGGED_IN_SALT',   'W^cr_2vT0${1G|0yYii`0:fJZBWk3p9YyG[g*t}J6z6[/I{ 2S@z}j7b:JqWb3GS');
define('NONCE_SALT',       '/0>6/bH<=wy&-y2!]b_xk/CkiL/WvJ9F6Y*JAzI^w,P06}Os0:g9jrjpP:SL[ubt');

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
