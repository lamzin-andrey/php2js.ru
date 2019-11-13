<?php

require_once __DIR__ . '/custom.php';

define('SUMMER_TIME', 0);
define('APP_CACHE_FOLDER', __DIR__ . '/cache');
define('DB_DELTA_NOT_USE_TRIGGER', true);
define('DEV_MODE', true);
define('AUTH_COOKIE_NAME', 'bpuid');

define('SQL_EMPTY_STR', '\'\'');

//define('APP_COOKIE_NAME', 'apid');

if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) {
	define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
} else {
	define('DOC_ROOT', __DIR__ . '/../..');
}
define('ROOT', '/');
define('SCHEME', 'http://');



@date_default_timezone_set('Europe/Moscow');
