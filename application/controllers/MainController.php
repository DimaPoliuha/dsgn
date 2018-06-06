<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:20
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

    public function indexAction(){

        $vars = [
            'list' => $this->model->productsList(0, 8),
        ];

        $this->view->render('Home', $vars);
        $this->model->getIndex();
        $this->model->getStudio();
//        $this->model->getNews();
        $this->model->getFooter();
    }

    public function projectsAction(){
        $productsOnPage = 6;
        $pagination = new Pagination($this->route, $this->model->productsCount(), $productsOnPage);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->productsList($this->route, $productsOnPage),
        ];
        $this->view->render('Projects', $vars);
        if(!$this->model->getProjects()){
            $this->model->getProjects();
        }
//        $this->model->getFooter();
    }

    public function filterAction(){
        $vars = [
            'list' => $this->model->filterProductsList($this->route),
        ];
        if($this->route['filter'] > 4 or $this->route['filter'] < 1){
            $this->view->errorCode(404);
        }
        $this->view->render('Projects', $vars);
    }

    public function projectAction(){
        $id = $this->route['project'];
        $adminModel = new Admin();
        if(!$adminModel->isProductExists($id)){
            $this->view->errorCode(404);
        }
//        debug($this->model->productData($id));
//        debug($id);
        $vars = [
            'data' => $this->model->productData($id)[0],
        ];
        $this->view->render('Project', $vars);
        $this->model->getProject();
        $this->model->getFooter();
    }

    public function studioAction(){
        $this->view->render('Studio');
        $this->model->getStudio();
        $this->model->getFooter();
    }

    public function newsAction(){
        $this->view->render('News');
        $this->model->getNews();
        $this->model->getFooter();
    }

    public function contactAction(){
        if(!empty($_POST)){
            if(!$this->model->contactValidate()){
                $this->view->message('Error', $this->model->formError);
            }
            mail('7optimus7@ukr.net', 'Message from contact form', $_POST['name'] . ',' . $_POST['email'] . ',' . $_POST['text']);
            $this->view->message('Success!', 'Thanks, we will contact you in 7 days.');
        }
        $this->view->render('Contact us');
        $this->model->getContact();
        $this->model->getFooter();
    }

}