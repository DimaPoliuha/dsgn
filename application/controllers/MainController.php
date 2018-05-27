<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:20
 */

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction(){
//        $vars = [
//            'projects' => $result,
//        ];
//        $this->view->render('Home', $vars);
        $this->view->render('Home');
        if(!$this->model->getProjects()){
            $this->model->getProjects();
        }
        $this->model->getStudio();
        $this->model->getNews();
        $this->model->getContact();
    }

    public function projectsAction(){
        $this->view->render('Projects');
        if(!$this->model->getProjects()){
            $this->model->getProjects();
        }
    }

    public function studioAction(){
        $this->view->render('Studio');
        $this->model->getStudio();
    }

    public function newsAction(){
        $this->view->render('News');
        $this->model->getNews();
    }

    public function contactAction(){
        $this->view->render('Contact us');
        $this->model->getContact();
    }

}