<?php

namespace app\controllers;

use aruka\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $this->setMeta('Main page', 'Description', 'Keywords' );
    }
}