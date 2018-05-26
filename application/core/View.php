<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:34
 */

namespace application\core;

class View{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
        //debug($this->route);
        //debug($this->path);
    }

    public function render($title, $vars = []){
        extract($vars);
        $path = 'application/views/' . $this->path . '.php';
        if(file_exists($path)){
            ob_start();
            require_once $path;
            $content = ob_get_clean();
            $layoutPath = 'application/views/layouts/' . $this->layout . '.php';
            if(file_exists($layoutPath)) {
                require_once $layoutPath;
            }
        }
//          else{
//            echo 'view not found: ' . $this->path;
//        }
    }

    public function redirect($url){
        header('location: ' . $url);
    }

    public function message($status, $message)    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url)    {
        exit(json_encode(['url' => $url]));
    }

    public static function errorCode($code){
        http_response_code($code);
        $path = 'application/views/errors/' . $code . '.php';
        if (file_exists($path)){
            require_once $path;
        }
        exit;
    }

}