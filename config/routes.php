<?php

use aruka\Router;

// ^ - begin line
// & - end line
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);