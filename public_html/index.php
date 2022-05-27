<?php

if (PHP_MAJOR_VERSION < 8) {
    die('PHP version required >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';

new \aruka\App();

// echo \aruka\App::$app->getProperty('pagination');
// echo '<br>';
// \aruka\App::$app->setProperty('test', 'TEST');
// var_dump(\aruka\App::$app->getProperties());

throw new Exception('I have many error!');