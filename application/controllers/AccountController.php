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

    public function loginAction(){
        if(!empty($_POST)){
            if(!$this->model->validate(['login', 'password'])){
                $this->view->message('error', $this->model->error);
            }
            elseif (!$this->model->checkAccountData()){
                $this->view->message('error', $this->model->error);
            }
            elseif (!$this->model->checkStatus('login', $_POST['login'])){
                $this->view->message('error', $this->model->error);
            }
            $this->model->login();
            $this->view->location('/'.ROOT_URL.'account/profile');
        }
        $this->view->render('Log in');
    }

    public function registerAction(){
        if(!empty($_POST)){
            if(!$this->model->validate(['login', 'email', 'password'])){
                $this->view->message('error', $this->model->error);
            }
            elseif ($this->model->checkEmailExists()){
                $this->view->message('error', "This email has already taken");
            }
            elseif (!$this->model->checkLoginExists()){
                $this->view->message('error', $this->model->error);
            }
            $this->model->register();
            $this->view->message('success', 'Register success, confirm email.');
        }
        $this->view->render('Register');
    }

    public function confirmAction(){
        if(!$this->model->checkTokenExists($this->route['token'])){
            $this->view->redirect('/' . ROOT_URL . 'login');
        }
        $this->model->activate($this->route['token']);
        $this->view->redirect('/' . ROOT_URL . 'login');
        $this->view->message('success', 'Register finished!');
    }

    public function logoutAction(){
        unset($_SESSION['account']);
        $this->view->redirect('/' . ROOT_URL . 'login');
    }

    public function recoveryAction(){
        if(!empty($_POST)){
            if(!$this->model->validate(['email'])){
                $this->view->message('error', $this->model->error);
            }
            elseif (!$this->model->checkEmailExists()){
                $this->view->message('error', 'There are no such email');
            }
            elseif (!$this->model->checkStatus('email', $_POST['email'])){
                $this->view->message('error', $this->model->error);
            }
            $this->model->recovery();
            $this->view->message('success', 'Link was sent to your email.');
        }
        $this->view->render('Recover password');
    }

    public function resetAction(){
        if(!$this->model->checkTokenExists($this->route['token'])){
            $this->view->redirect('/' . ROOT_URL . 'account/recovery');
        }
        $this->model->reset($this->route['token']);

        $this->view->redirect('/' . ROOT_URL . 'login');
    }

    public function profileAction(){
        if(!empty($_POST)) {
            if (!$this->model->validate(['email'])) {
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->checkEmailExists();
            if (isset($id) and $id != null) {
                if ($id[0]['id'] != $_SESSION['account']['id']) {
                    $this->view->message('error', "This email has already taken");
                }
            }
            if(!empty($_POST['password'])){
                if(!$this->model->validate(['password'])){
                    $this->view->message('error', $this->model->error);
                }
            }
            $this->model->save();
            $this->view->message('success', "Saved");

        }
        $this->view->render('Profile');
    }
}