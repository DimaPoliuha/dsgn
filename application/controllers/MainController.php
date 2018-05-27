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
//        $result = $this->model->getNews();
//        $vars = [
//            'news' => $result,
//        ];
//        $this->view->render('Main page', $vars);
        $this->view->render('Main');
    }

    public function projectsAction(){
        $this->view->render('Projects');
    }

    public function studioAction(){
        $this->view->render('Studio');
    }

    public function newsAction(){
        $this->view->render('News');
    }

    public function contactAction(){
        $this->view->render('Contact us');
    }

}