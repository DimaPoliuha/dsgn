<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 26.05.2018
 * Time: 14:19
 */

namespace application\core;

use application\lib\Db;

abstract class Model{
    public $db;

    public function __construct(){
        $this->db = new Db();
    }
}