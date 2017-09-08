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
define('DB_NAME', 'new');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!IP6jI!(D7n.m<01WQxas<^x/ooHhZL-tr=eT`Yt]O2g;Ch.dDz$)w>4z/mcsKnc');
define('SECURE_AUTH_KEY',  's0a|)QCssYLJq7C#@^}uzG6`B+z|)~%?1gT9,pHz_?Y|m7@tL-t()VUTcT93IKE1');
define('LOGGED_IN_KEY',    '-X:pZ?3dU1#SZf#y3/!%@-l^E~%#m_QxQo(iu,l-z4W)Y7GnS3^|Hw (J3+CE*~2');
define('NONCE_KEY',        'b a9K@<g?-.1x @(a#M?mDe&@<iF,bBBx06vd9Hp4Q6J0W0FqGx2Jk/j#MRafj-2');
define('AUTH_SALT',        'j.m~%E kv{8Sw`;3cUz4;E6}]>2_{|.L;<Kl$Uo?kah5b^N qoFv/{DhHcnbJ.yp');
define('SECURE_AUTH_SALT', 'x,,0k%5b-TKKEKL@6VgRRi,brttF7%?3X$Kk96|&hqMMF*Xv.-7kxI}<YqRB%Krk');
define('LOGGED_IN_SALT',   '-z9^Y:/~[LWNlw%d1O.2N[9ibG{`KeHu?6.~l&yr%WJcXQ0aviI]<E0 v;#nUuD!');
define('NONCE_SALT',       'u!H4Vb](;a ol7xa}Rj6N=oaOzgHx#/pI,5J7}QNPILb@ .8S ` V9,~Dhh+I2]]');

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
