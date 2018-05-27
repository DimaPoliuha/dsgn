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

    public function getNews(){
        $result = $this->db->select('title', 'description')->from('news')->execute();
        return $result;
    }
}