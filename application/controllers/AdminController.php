<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:32
 */

namespace application\controllers;

use application\core\Controller;
use const application\core\ROOT_URL;

class AdminController extends Controller {

    public function __construct($route){
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction(){
        if(isset($_SESSION['admin'])){
            $this->view->redirect('/' . ROOT_URL . 'admin/add');
        }

        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('Error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('/' . ROOT_URL . 'admin/add');
        }
        $this->view->render('Log in');
    }

    public function logoutAction(){
        unset($_SESSION['admin']);
        $this->view->redirect('/' . ROOT_URL . 'admin/login');
    }

    public function postsAction(){
        $this->view->render('Posts');
    }

    public function addAction(){
        if(!empty($_POST)){
            if(!$this->model->productValidate('add')){
                $this->view->message('Error', $this->model->error);
            }
//            $id = $this->model->productAdd();
            $id = true;
            $this->view->message('Success', 'Product added, id: ' . $id);
        }
        $this->view->render('Add product');
    }

    public function editAction(){
        if(!empty($_POST)){
            if(!$this->model->productValidate('edit')){
                $this->view->message('Error', $this->model->error);
            }
            $this->view->message('Success', 'Product edited');
        }
        $this->view->render('Edit product');
    }

    function deleteAction(){
        $this->view->render('Delete');
    }
}