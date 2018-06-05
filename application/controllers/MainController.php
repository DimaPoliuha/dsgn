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