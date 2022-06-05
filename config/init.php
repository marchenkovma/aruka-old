<?php

define("DEBUG", 0);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public_html');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/aruka');
define("HELPERS", ROOT . '/vendor/aruka/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'aruka');
define("PROTOCOL", 'https://');
//define("PATH", PROTOCOL . 'test.howto.by');
define("PATH", 'http://aruka.loc');
define("ADMIN", PATH . '/admin');
// ?
define("NO_IMAGE", PATH . 'upload/no_image.jpg');
define("EXCEPTION", 'Exception');

require_once ROOT . '/vendor/autoload.php';