<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 20:47
 */

namespace application\core;

const ROOT_URL = 'dsgn/';

class Router{

    protected $routes = [];
    protected $params = [];


    function __construct(){
        $path = 'application/config/routes.php';
        if (file_exists($path)){
            $arr = require_once $path;
            foreach ($arr as $key => $val){
                $this->add($key, $val);
            }
        }
        //debug($arr);
        //debug($this->routes);
    }

    public function add($route, $params){
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match(){
        $url = trim(substr($_SERVER['REQUEST_URI'], strlen(ROOT_URL)), '/');
        //debug($url);
        foreach ($this->routes as $route => $params) {
            if(preg_match($route, $url, $matches)){
                $this->params = $params;
                //debug($matches);
                return true;
            }
        }
        return false;
    }

    public function run(){
        if($this->match()){
            $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if(class_exists($path)){
                $action = $this->params['action'] . 'Action';
                if(method_exists($path, $action)){
                    $controller = new $path($this->params);
                    $controller->$action();
                } else{
                    View::errorCode(404);
//                    echo 'action not found';
                }
            } else{
                View::errorCode(404);
//                echo 'not found controller: ' . $path;
            }
            //echo '<p>controller: <b>' . $this->params['controller'] . '</b></p>';
            //echo '<p>action: <b>' . $this->params['action'] . '</b></p>';
        } else{
            View::errorCode(404);
//            echo 'route not found';
        }
    }
}