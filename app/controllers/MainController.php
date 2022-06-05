<?php

namespace app\controllers;

use aruka\Controller;

/** @property Main $model */
class MainController extends Controller
{

    public function indexAction()
    {
        $name = $this->model->getName();
        $this->setMeta('Main page', 'Description', 'Keywords' );
        $this->set(compact('name'));
    }
}