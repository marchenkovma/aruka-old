<?php

namespace app\controllers;

use aruka\Controller;
use RedBeanPHP\R;

/** @property Main $model */
class MainController extends Controller
{

    public function indexAction()
    {
        $name = $this->model->getName();
        $one_name = R::getRow('SELECT * FROM name WHERE id = 2')
        $this->setMeta('Main page', 'Description', 'Keywords' );
        $this->set(compact('name'));
    }
}