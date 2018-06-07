<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:13
 */

namespace application\core;

abstract class Controller{

    public $route;
    public $view;
    public $acl;

    public function __construct($route){
        $this->route = $route;
//        $_SESSION['authorize']['id'] = 1;
        if(!$this->checkAcl()){
            View::errorCode(403);
        }
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = 'application\models\\' . ucfirst($name);
        if(class_exists($path)){
            return new $path;
        }
    }

    public function checkAcl(){
        $path = 'application/acl/' . $this->route['controller'] . '.php';
        if(file_exists($path)){
            $this->acl = require_once $path;
        } else{
            $this->acl = require_once 'application/acl/acl.php';
        }
        if($this->isAcl('all')){
            return true;
        } elseif (isset($_SESSION['account']['id']) and $this->isAcl('authorize')){
            return true;
        } elseif (isset($_SESSION['admin']) and $this->isAcl('admin')){
            return true;
        }
        return false;
    }

    public function isAcl($key){
        return in_array($this->route['action'], $this->acl[$key]);
    }
}