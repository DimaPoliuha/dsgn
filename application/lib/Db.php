<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 26.05.2018
 * Time: 12:16
 */

namespace application\lib;

use PDO;

class Db{

    protected $db;

    public function __construct(){
        $path = 'application/config/db.php';
        if(file_exists($path)){
            $config = require_once $path;
        }
        $this->db = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
    }

    public function query($sql, $params = []){
        $stmt = $this->db->prepare($sql);
        if(!empty($params)){
            foreach ($params as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params = []){
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function col($sql, $params = []){
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

}