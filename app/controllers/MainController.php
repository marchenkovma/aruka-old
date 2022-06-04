<?php

namespace app\controllers;

use aruka\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $names = ['Jonh', 'David', 'Maksim'];
        $this->setMeta('Main page', 'Description', 'Keywords' );
        $this->set(['names' => $names]);
    }
}