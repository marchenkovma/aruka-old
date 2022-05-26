<?php

namespace aruka;

trait TSingleton
{
    private static ?self $instance = null;
    
    // Protect from create through new TSingleton
    private function __construct () {}

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }
}