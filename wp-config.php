<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H}g`!&7`KO{yV}P8IdiZV:{P]_c~JyQU2F|RTQ0`ZriB.6i{HQV3HC1us/{(+UBK');
define('SECURE_AUTH_KEY',  '1e[W@~%4jVn+qlT+o dY1@^Qr)Z8#`)Y.I8+-M]9(>B$7_lLS8Ialf}?o0?_lAs*');
define('LOGGED_IN_KEY',    'MkiN+9fei,-R|c5sjX|Tm,]eDpL_YI9L7#tjfa4X_?U-Cvo(^rg~kG+|ok)is`1.');
define('NONCE_KEY',        'E*~J~?+`Q?Sm4nYfpIA+~qTyC-v7EN*U$n`.T9~b4kL<rvrQn|i7k/|1{AeqHdj[');
define('AUTH_SALT',        '}cPoaDg,/>L-hgY]kvo9B%x5h3MkKH3c~$/*Y~}/qH$0+5`/vk1;5{5M-$iDv%Ji');
define('SECURE_AUTH_SALT', ';B=XQPl{aS**RXf2y^!*3bEvEg|}&m/|M.LYf{HxMap/>(q[&Ibb6]COd^{Gi+]g');
define('LOGGED_IN_SALT',   '}l?) +P)q;$kV$-+L-eI6MTr:Kh,y<,xfu}CEXzs-|MJ9MhSBGdN-4+36h&K0%Kf');
define('NONCE_SALT',       '5p-Rw#z]alE5ivAg57Y2+3w-@3Tx7MF{E%/o~sgk|irq<[kBt8n xgsjM6-x-Vws');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
