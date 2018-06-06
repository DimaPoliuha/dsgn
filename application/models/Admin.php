<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 05.06.2018
 * Time: 0:02
 */

namespace application\models;

use application\core\Model;
use application\lib\Db;
use Imagick;

class Admin extends Model {

    public $error;

    public function loginValidate(){
        $path = "application/config/admin.php";
        if(file_exists($path)){
            $config = require_once $path;
            if($config['login'] != $_POST['login'] or $config['password'] != $_POST['password']){
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
        $descriptionLength = strlen($_POST['description']);

        if($titleLength < 3 or $titleLength > 15){
            $this->error = "Title must consist from 3 to 15 symbols";
            return false;
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

    public function productAdd(){

        $params = [
            'title' => $_POST['title'],
            'project_type_id' => $_POST['project_type'],
            'year_id' => $_POST['year'],
            'designer_id' => $_POST['designer'],
            'typology_id' => $_POST['typology'],
            'client_id' => $_POST['client'],
            'description' => $_POST['description'],
            'style_id' => $_POST['style'],
        ];
        $this->db = new Db();
        $this->db
            ->insert("title", "project_type_id", "year_id", "designer_id", "typology_id", "client_id", "description", "style_id")
            ->into("projects")
            ->values(":title", ":project_type_id", ":year_id", ":designer_id", ":typology_id", ":client_id", ":description", ":style_id")
            ->execute($params);
        return $this->db->lastInsertId();
    }

    public function productUploadImage($id){
        $path = $_FILES['img']['tmp_name'];
//        $img = new Imagick($path);
//        $img->setImageCompressionQuality(80);
//        $img->writeImage('public/images/' . $id . '.png');
        move_uploaded_file($path, 'public/images/' . $id . '.png');
    }

    public function isProductExists($id){
        $this->db = new Db();
        return $this->db
            ->select('id')
            ->from('projects')
            ->where('id', '=', $id)
            ->execute();
    }

    public function deleteProduct($id){
        $this->db = new Db();
        $this->db
            ->delete("projects")
            ->where("id", "=", $id)
            ->execute();
        unlink('public/images/' . $id . '.png');
    }

    public function editProduct($id){
        $params = [
            'title' => $_POST['title'],
            'project_type_id' => $_POST['project_type'],
            'year_id' => $_POST['year'],
            'designer_id' => $_POST['designer'],
            'typology_id' => $_POST['typology'],
            'client_id' => $_POST['client'],
            'description' => $_POST['description'],
            'style_id' => $_POST['style'],
        ];
        $this->db = new Db();
        $this->db
            ->update("projects")
            ->set("title", ":title")
            ->set("project_type_id", ":project_type_id")
            ->set("year_id", ":year_id")
            ->set("designer_id", ":designer_id")
            ->set("typology_id", ":typology_id")
            ->set( "client_id", ":client_id")
            ->set("description", ":description")
            ->set("style_id", ":style_id")
            ->where("id", "=", $id)
            ->execute($params);
    }

    public function productData($id){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('projects')
            ->where('id', '=', $id)
            ->execute();
    }

    public function projectType(){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('project_type')
            ->execute();
    }

    public function year(){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('years')
            ->execute();
    }

    public function designer(){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('designers')
            ->execute();
    }

    public function typology(){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('typology')
            ->execute();
    }

    public function client(){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('clients')
            ->execute();
    }

    public function style(){
        $this->db = new Db();
        return $this->db
            ->select()
            ->from('style')
            ->execute();
    }
}