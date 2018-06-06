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
use application\lib\Pagination;
use application\models\Main;

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
            if(!$this->model->loginValidate()){
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

    public function productsAction(){
        $mainModel = new Main;
        $productsOnPage = 100;
        $pagination = new Pagination($this->route, $mainModel->productsCount(), $productsOnPage);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->productsList($this->route, $productsOnPage),
        ];
        $this->view->render('Projects', $vars);
    }

    public function addAction(){
        if(!empty($_POST)){
            if(!$this->model->productValidate('add')){
                $this->view->message('Error', $this->model->error);
            }
            $id = $this->model->productAdd();
            $this->model->productUploadImage($id);
            $this->view->message('Success', 'Product added, id: ' . $id);
        }
        $vars = [
            'project_type' => $this->model->projectType(),
            'year' => $this->model->year(),
            'designer' => $this->model->designer(),
            'typology' => $this->model->typology(),
            'client' => $this->model->client(),
            'style' => $this->model->style(),
        ];
        $this->view->render('Add product', $vars);
    }

    public function editAction(){
        $id = $this->route['id'];
        if(!$this->model->isProductExists($id)){
            $this->view->errorCode(404);
        }
        if(!empty($_POST)){
            if(!$this->model->productValidate('edit')){
                $this->view->message('Error', $this->model->error);
            }
            $this->model->editProduct($id);
            if($_FILES['img']['tmp_name']){
                $this->model->productUploadImage($id);
            }
            $this->view->message('Success', 'Product edited');
        }
        $vars = [
            'data' => $this->model->productData($id)[0],
            'project_type' => $this->model->projectType(),
            'year' => $this->model->year(),
            'designer' => $this->model->designer(),
            'typology' => $this->model->typology(),
            'client' => $this->model->client(),
            'style' => $this->model->style(),
        ];
        $this->view->render('Edit product', $vars);
    }

    public function deleteAction(){
        $id = $this->route['id'];
        if(!$this->model->isProductExists($id)){
            $this->view->errorCode(404);
        }
        $this->model->deleteProduct($id);
        $this->view->redirect('/' . ROOT_URL . 'admin/products');
    }
}