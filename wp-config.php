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
define('DB_NAME', 'rcsc');

/** Имя пользователя MySQL */
define('DB_USER', 'rcsc_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'rcsc_admin');

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
define('AUTH_KEY',         'DG1h?q5*[l$#S[h;=x*(u;|+!B)>CpRa@C]mxd69b:9dojI!jz:0.~|Rye~Na]l|');
define('SECURE_AUTH_KEY',  '+0Ok}%NbvX)vJR}ii[H@-dZV#CkZ1EO#NR9b|b6GpFLtq {{I7[*f6fG;pi)^bU,');
define('LOGGED_IN_KEY',    'fRKTgluo4|8v4Nl?G+e~Vkm>dUuyjw`6`HAkQod0fB|pGp|)B_8+WJK8+QyOCvef');
define('NONCE_KEY',        'hFmdS=f}M-`nNZdelg{XOUe<yG(<L<NacWuB7JgMN7_+^ulB|l.H7d&qk+YqYX-_');
define('AUTH_SALT',        '2LPe%_@[~bMK#R5X0RE)[)gQ7j/j?!2!PBo&wn80sE#(JJglFlra/B3Ws?Ht%,mm');
define('SECURE_AUTH_SALT', '$0quHBy+S>iO.r:!Mvn]7hGDLtl|ybHke#g$kk/IVY9nAGvUE}](@<^Y!o. 1pW_');
define('LOGGED_IN_SALT',   'W*/i_`:=nR%NXWvQZDc~ Z_5IF;S <LC(^:;0Z;_jX{FGO87@:hcfX*RtpcG]7fY');
define('NONCE_SALT',       '<FFO>O1nHa6k$}rD+W_`;vGgkrGA^J@8]ih-(c4S<-*U=zMTiD_n;/1*dsrK>^30');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'rcsc_';

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
