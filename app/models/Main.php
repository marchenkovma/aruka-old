<?php

namespace app\models;

use aruka\Model;
use RebBeanPHP\R;

class Main extends Model
{
    public function getName(): array
    {
        return R::findAll('name');
    }
}