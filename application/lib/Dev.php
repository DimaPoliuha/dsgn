<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 20:39
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}