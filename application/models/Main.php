<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 26.05.2018
 * Time: 14:15
 */

namespace application\models;

use application\core\Model;
use application\lib\Db;

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
            $result = require $path;
            return $result;
        }
        return false;
    }

    public function getProject(){
        $path = 'application/views/main/project.php';
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

    public function productsCount(){
        $this->db = new Db();
        return count($this->db
            ->select()
            ->from('projects')
            ->execute());
    }

    public function productData($id){
        $this->db = new Db();
        return $this->db
            ->select('projects.id', 'projects.title', 'project_type.type', 'years.year', 'designers.surname', 'designers.name', 'typology.type', 'clients.cl_surname', 'clients.cl_name', 'projects.description', 'style.style', 'projects.price')
            ->from('projects')
            ->innerJoin('project_type')
            ->on("projects.project_type_id", "=", "project_type.id")
            ->innerJoin('years')
            ->on("projects.year_id", "=", "years.id")
            ->innerJoin('designers')
            ->on("projects.designer_id", "=", "designers.id")
            ->innerJoin('typology')
            ->on("projects.typology_id", "=", "typology.id")
            ->innerJoin('clients')
            ->on("projects.client_id", "=", "clients.id")
            ->innerJoin('style')
            ->on("projects.style_id", "=", "style.id")
            ->where('projects.id', '=', $id)
            ->execute();
    }

    public function filterProductsList($route){
        $this->db = new Db();
//        debug($route['filter']);
        return $this->db
            ->select('projects.id', 'projects.title', 'project_type.type', 'years.year', 'designers.surname', 'designers.name', 'typology.type', 'clients.cl_surname', 'clients.cl_name', 'projects.description', 'style.style', 'projects.price')
            ->from('projects')
            ->innerJoin('project_type')
            ->on("projects.project_type_id", "=", "project_type.id")
            ->innerJoin('years')
            ->on("projects.year_id", "=", "years.id")
            ->innerJoin('designers')
            ->on("projects.designer_id", "=", "designers.id")
            ->innerJoin('typology')
            ->on("projects.typology_id", "=", "typology.id")
            ->innerJoin('clients')
            ->on("projects.client_id", "=", "clients.id")
            ->innerJoin('style')
            ->on("projects.style_id", "=", "style.id")
            ->where('projects.project_type_id', '=', $route['filter'])
            ->execute();
    }

    public function productsList($route, $max){
        $start = (($route['page'] ?? 1) - 1) * $max;
        $this->db = new Db();
        return $this->db
            ->select('projects.id', 'projects.title', 'project_type.type', 'years.year', 'designers.surname', 'designers.name', 'typology.type', 'clients.cl_surname', 'clients.cl_name', 'projects.description', 'style.style', 'projects.price')
            ->from('projects')
            ->innerJoin('project_type')
            ->on("projects.project_type_id", "=", "project_type.id")
            ->innerJoin('years')
            ->on("projects.year_id", "=", "years.id")
            ->innerJoin('designers')
            ->on("projects.designer_id", "=", "designers.id")
            ->innerJoin('typology')
            ->on("projects.typology_id", "=", "typology.id")
            ->innerJoin('clients')
            ->on("projects.client_id", "=", "clients.id")
            ->innerJoin('style')
            ->on("projects.style_id", "=", "style.id")
            ->limit($start)
            ->limit($max)
            ->execute();
    }

}