<?php

if (PHP_MAJOR_VERSION <8) {
    die('PHP version required >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';

new \aruka\App();

var_dump(\aruka\App::$app->getProperties());