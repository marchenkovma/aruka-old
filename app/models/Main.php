<?php

namespace app\models;

use aruka\Model;

class Main extends Model
{
    public function getNames(): array
    {
        return R::findAll('name');
    }
}