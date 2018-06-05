<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 05.06.2018
 * Time: 0:02
 */

namespace application\models;

use application\core\Model;

class Admin extends Model {

    public $error;

    public function loginValidate($post){
        $path = "application/config/admin.php";
        if(file_exists($path)){
            $config = require_once $path;
            if($config['login'] != $post['login'] or $config['password'] != $post['password']){
                $this->error = 'Login or password uncorrect!';
                return false;
            }
            return true;
        }
        else{
            return false;
        }
    }

    public function productValidate($type){

        $titleLength = strlen($_POST['title']);
        $designerLength = strlen($_POST['designer']);
        $materialLength = strlen($_POST['material']);
        $typologyLength = strlen($_POST['typology']);
        $clientLength = strlen($_POST['client']);
        $descriptionLength = strlen($_POST['description']);

        if($titleLength < 3 or $titleLength > 15){
            $this->error = "Title must consist from 3 to 15 symbols";
            return false;
//        } else if($designerLength < 3 or $designerLength > 20){
//            $this->error = "Designer must consist from 3 to 20 symbols";
//            return false;
//        } else if($materialLength < 3 or $materialLength > 20){
//            $this->error = "Material must consist from 3 to 20 symbols";
//            return false;
//        } else if($typologyLength < 3 or $typologyLength > 20){
//            $this->error = "Typology must consist from 3 to 20 symbols";
//            return false;
//        } else if($clientLength < 3 or $clientLength > 20){
//            $this->error = "Client must consist from 3 to 20 symbols";
//            return false;
        } else if($descriptionLength > 300){
            $this->error = "Description must consist up to 300 symbols";
            return false;
        }
        if(empty($_FILES['img']['tmp_name']) and $type == 'add'){
            $this->error = "You must add image";
            return false;
        }
        return true;
    }

//    public function productAdd(){
//
//        $params = [
//            'title' => $_POST['title'],
//            'project_type_id' => $_POST['project_type'],
//            'year_id' => $_POST['year'],
//            'designer_id' => $_POST['designer'],
//            'typology_id' => $_POST['typology'],
//            'client_id' => $_POST['client'],
//            'description' => $_POST['description'],
//            'style_id' => $_POST['style'],
//        ];
//
//        $this->db
//            ->insert("title", "project_type_id", "year_id", "designer_id", "typology_id", "client_id", "description", "style_id")
//            ->into("projects")
//            ->values(":title", ":project_type_id", ":year_id", ":designer_id", ":typology_id", ":client_id", ":description", ":style_id")
//            ->execute($params);
//        return $this->db->lastInsertId();
//    }
}