<?php

use aruka\Router;

Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);

// ^ - begin line
// & - end line
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);

// ?P<controller> - array with key сontroller
// a-z - all alphabet lettes
// - Underscore
// + - at least 1 character
// ? - / optional
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
