<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public_html');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/aruka');
define("HELPERS", ROOT . '/vendor/aruka/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'aruka');
define("PATH", 'https://test.howto.by');
//define("PATH", 'http://aruka.loc');
define("ADMIN", PATH . '/admin');
// ?
define("NO_IMAGE", PATH . 'upload/no_image.jpg');


require_once ROOT . '/vendor/autoload.php';