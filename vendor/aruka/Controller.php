<?php

namespace aruka;

abstract class Controller
{
    public function __construct(public $route = [])
    {
         
    }
}