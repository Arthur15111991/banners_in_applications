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
define('DB_NAME', 'wordpress_drum');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '369970');

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
define('AUTH_KEY',         '}ZUf<TuI%HsoE5yCg+iu]1@l:Zv_2tTM6[;dn[4j]&;zr{_b~Ne_&V9 )by1g{N-');
define('SECURE_AUTH_KEY',  'a[pVTTV6&f{~`|SF,YgRfrqNI-+o:`(Sg !W :#(:4PY%YrDI7Jq~gvO[(7_py!N');
define('LOGGED_IN_KEY',    '3UAc!}BH~}yMp1`N D6D[>)i*tB*|!Z|GB7~2#bLfD_FPgMDX7DK67I=VcrX]BF6');
define('NONCE_KEY',        'JLu %&0o[NJGh%h*;lF)=4YoD9PLqAPaP*V[Ii_<y~EvAU]#bJ>hG0V}^dg<V^#b');
define('AUTH_SALT',        'YL!J{yBq:d<atO#nx{m({>]&7AFmnahhv9cucd}VkR1cpBQEe32knwvB6bo@yl}x');
define('SECURE_AUTH_SALT', 'mG|6K33^9=czWxgh4Mr0pI(@9P-{N|p6ziafNvtQKd~S,0u}.J2fXJ,$W(X&xm,@');
define('LOGGED_IN_SALT',   '{;gzolX-cEmKz=4e[KfaS}k.S,7sUQ*U#.Ni1VYKoPqit8 W?Uvegg/*!L}6zArx');
define('NONCE_SALT',       'OsXxK4J}:SI#zp_i[yabvlqRIl6Vf#8L?7F(~(kL+l%?#$zNGk!AFW)^ vRvVw4x');

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
