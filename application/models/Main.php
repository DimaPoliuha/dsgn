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

    public $formError;

    public function getIndex(){
        $path = 'application/views/main/index.php';
        if(file_exists($path)){
            $result = require_once $path;
            return $result;
        }
        return false;
    }

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

    public function contactValidate(){
        $nameLength = strlen($_POST['name']);
        $textLength = strlen($_POST['text']);
        if($nameLength < 3 or $nameLength > 20){
            $this->formError = "Name must consist from 3 to 20 symbols";
            return false;
        } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $this->formError = "Check e-mail";
            return false;
        } else if($textLength < 10 or $textLength > 1000){
            $this->formError = "Text must consist from 10 to 1000 symbols";
            return false;
        }
        return true;
    }

    public function getFooter(){
        $path = 'application/views/main/footer.php';
        if(file_exists($path)){
            $result = require_once $path;
            return $result;
        }
        return false;
    }
}