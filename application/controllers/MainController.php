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
        $this->model->getIndex();
        if(!$this->model->getProjects()){
            $this->model->getProjects();
        }
        $this->model->getStudio();
        $this->model->getNews();
        $this->model->getContact();
        $this->model->getFooter();
    }

    public function projectsAction(){
        $this->view->render('Projects');
        if(!$this->model->getProjects()){
            $this->model->getProjects();
        }
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
        $this->view->render('Contact us');
        $this->model->getContact();
        $this->model->getFooter();
    }

}