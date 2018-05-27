<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:32
 */

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {

    public function loginAction(){
        if(!empty($_POST)){
            $this->view->location('/' . ROOT_URL);
        }
        $this->view->render('Log in');
    }

    public function logoutAction(){
        $this->view->render('Logout');
    }

    public function addAction(){
        $this->view->render('Add');
    }

    public function editAction(){
        $this->view->render('Edit');
    }

    function deleteAction(){
        $this->view->render('Delete');
    }
}