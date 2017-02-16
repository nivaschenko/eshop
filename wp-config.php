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
		//    LOCAL    //
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
//define('DB_NAME', 'eshop');

/** Имя пользователя MySQL */
//define('DB_USER', 'eshop_user');

/** Пароль к базе данных MySQL */
//define('DB_PASSWORD', 'hazayErA');

/** Имя сервера MySQL */
//define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
//define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
//define('DB_COLLATE', '');

		//    STAGE    //
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u628518366_eshop');

/** Имя пользователя MySQL */
define('DB_USER', 'u628518366_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'TsKae91WGdAd');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.com.ua');

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
define('AUTH_KEY',         'S}tc_N,}/$7/}qQYR/Rfa3-7I0dZ&NS`I1(zXa2SMN1Rh|Pk9>9-/^vN0H4<|9fV');
define('SECURE_AUTH_KEY',  '{aH:EBs omV#H/@}4v7H[BO+hBGevOxt1zo.%jc%q6JWP|.ax)s=NA6`whq)$8-#');
define('LOGGED_IN_KEY',    '-/%DTKJ0eoRQKyVl+1OCJ9^IyD_qb&QeF)(,5R}=/D=whfD_)+urpb$Gf,,ChWBb');
define('NONCE_KEY',        'T]l?Vx%hzdW4gNI)SX6y8eTk?^:4|w5_He6!a>YYQHz}BdWM-poO(oE|I {@v:%r');
define('AUTH_SALT',        '}t/d31vaw%HF#miH1P{LUMWYH:]{zIhD(}~_k)<24cgkuwcT,,<./G>2jE>hL8Vn');
define('SECURE_AUTH_SALT', '`0,^:;xU.wKET=nuZKAaYBG2G]gFb!4)VtF(l31<NMRdE)Cy|Nf!sFtg 2Fa{<ls');
define('LOGGED_IN_SALT',   'w8k!q(ruh:V|ecl13S~KAg4|M~TU0MwA@PKr=)f H}~{7mj^%3+S*D]H?-Wx@EvW');
define('NONCE_SALT',       'JSOOhHW/7022=my>gK8qhb&kwOGx6> }@iu~+,2,y7i|Y/}}4Zkda?SYZM~Sq9b}');

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
