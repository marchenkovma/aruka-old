<?php

if (PHP_MAJOR_VERSION <8) {
    die('PHP version required >= 8');
}
else {
    echo 'PHP version OK!';
}

require_once dirname(__DIR__) . '/config/init.php';

new \aruka\App();

vardump(\aruka\App:$app->getProperties());