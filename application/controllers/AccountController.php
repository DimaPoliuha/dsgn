<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:07
 */

namespace application\controllers;

use application\core\Controller;
use const application\core\ROOT_URL;

class AccountController extends Controller {

//    public function before(){
//        $this->view->layout = 'custom';
//    }

    public function loginAction(){
//        $this->view->redirect('/' . ROOT_URL);
        if(!empty($_POST)){
//            $this->view->message('some status', 'some text');
            $this->view->location('/' . ROOT_URL);
        }
        $this->view->render('Log in');
    }

    public function registerAction(){
        //$this->view->layout = 'custom';
        $this->view->render('Register');
        //$this->view->path = 'test/test';
        //var_dump($this->route);
    }
}