<?php

namespace aruka;

class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Registry::getInstance();
    }

    protected function getParams()
    {
        
    }
}
