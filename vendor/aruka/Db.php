<?php

namespace aruka;

class Db {

    use TSingleton;

    private function __construct()
    {
        $db = require_once CONFIG . '/config_db.php'
    }

}