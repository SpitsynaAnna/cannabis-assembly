<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cannabis-assembly' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'rootroot' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mAwFEqVNf3Sb)y)no1}oVGJv18pREof.DZ?/^N33R0Q</UCxQH!sCe7i$A`$N|AH' );
define( 'SECURE_AUTH_KEY',  ':oqHbK5cQZ_T6y$V158+gU4fDPeP* UWiCj>y,$N&a2(-HHE1H:{bM6-T8wy4hQf' );
define( 'LOGGED_IN_KEY',    '$93+Z,j dn60eM5RC-a5HXSdCCtC,fo_.AR&4Kim=]%44fJkstX|H@dVTnW0WF&+' );
define( 'NONCE_KEY',        'H)w(#QizHJARX>Zd]9>aZ/zpMo)~}23nJjWs`Y&Q]_B?| ciP/K1x9t<g-:X6w7|' );
define( 'AUTH_SALT',        'vb/1ogB.!.p_B<i6G/Sn37]RFd/*uNl3DN@w(YJ:~9q&Se)1, y4r(*TveemOw;}' );
define( 'SECURE_AUTH_SALT', '`~oDy[sqBbiUDTeXnj^V8az^;*;%u>#9M4C(?@!H%EME9oTDk,K3nv}/jt5,0_J]' );
define( 'LOGGED_IN_SALT',   '5u}`4rxCho{&iTH,5dq#6O./lOs6z$i1~&oxpKSV{Jv+Va7Bu]R^x;$^]Iv|w@`+' );
define( 'NONCE_SALT',       '],{.,w3_RvI(VR|M#;p7C)`2QlEf6NWH{iLM]bXiQ|tR!m>_d H^4D($+[KOKlf8' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
