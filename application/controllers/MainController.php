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
        $result = $this->model->getNews();
        $vars = [
            'news' => $result,
        ];
        $this->view->render('Main page', $vars);
    }

    public function contactsAction(){
        $this->view->render('Contacts');
    }

}