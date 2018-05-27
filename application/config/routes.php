<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 21:09
 */

return [

//    MainController

    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'projects' => [
        'controller' => 'main',
        'action' => 'projects'
    ],

    'studio' => [
        'controller' => 'main',
        'action' => 'studio'
    ],

    'news' => [
        'controller' => 'main',
        'action' => 'news'
    ],

    'contact' => [
        'controller' => 'main',
        'action' => 'contact'
    ],

//    AccountController

    'login' => [
        'controller' => 'account',
        'action' => 'login'
        ],

    'register' => [
        'controller' => 'account',
        'action' => 'register'
    ],

    'account/logout' => [
        'controller' => 'account',
        'action' => 'logout'
    ],

    'profile' => [
        'controller' => 'account',
        'action' => 'profile'
    ],

//    AdminController

    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login'
    ],

    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout'
    ],

    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add'
    ],

    'admin/edit' => [
        'controller' => 'admin',
        'action' => 'edit'
    ],

    'admin/delete' => [
        'controller' => 'admin',
        'action' => 'delete'
    ],

];