<?php

namespace app\controllers;

use aruka\Controller;
use RedBeanPHP\R;

class MainController extends Controller
{

    public function indexAction()
    {
        $name = R::findAll('name');
        //debug($name);
        $this->setMeta('Main page', 'Description', 'Keywords' );
        $this->set(compact('names'));
    }
}