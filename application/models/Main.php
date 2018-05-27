<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 26.05.2018
 * Time: 14:15
 */

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function getProjects(){
        $path = 'application/views/main/projects.php';
        if(file_exists($path)){
            $result = require_once $path;
            return $result;
        }
        return false;
    }

    public function getStudio(){
        $path = 'application/views/main/studio.php';
        if(file_exists($path)){
            $result = require_once $path;
            return $result;
        }
        return false;
    }

    public function getNews(){
        $path = 'application/views/main/news.php';
        if(file_exists($path)){
            $result = require_once $path;
            return $result;
        }
        return false;
    }

    public function getContact(){
        $path = 'application/views/main/contact.php';
        if(file_exists($path)){
            $result = require_once $path;
            return $result;
        }
        return false;
    }
}