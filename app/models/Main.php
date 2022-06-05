<?php

namespace app\models;

use aruka\Model;

class Main extends Model
{
    public function getName(): array
    {
        return R::findAll('name');
    }
}