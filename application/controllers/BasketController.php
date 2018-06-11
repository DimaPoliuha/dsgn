<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:20
 */

namespace application\controllers;

use application\core\Controller;
use application\models\Admin;
use application\models\Main;

class BasketController extends Controller {

    public function ordersAction(){
        $vars = [
            'orders' => $this->model->getOrders($_SESSION['account']['id']),
        ];
        $this->view->render('Orders', $vars);
    }

    public function buyAction(){

        $id = $this->route['id'];
        $mainModel = new Main;
        $adminModel = new Admin();

        if(!empty($_POST)){
            $orderId = $this->model->orderAdd();
            $product = $mainModel->productData($id)[0];
            $order = $this->model->order($orderId)[0];
            mail($order['email'], 'Order from dsgn studio', 'Your order: Order id:' . $orderId . ', Product name: ' . $product['title'] . ', Product price: ' . $product['price'] . '$, Count of products: ' . $order['count'] . ', Total price: ' . ( $product['price'] * $order['count'] ) . '$');
            $this->view->message('Success', 'Order added, we will call you in 7 days.');
        }

        if(!$adminModel->isProductExists($id)){
            $this->view->errorCode(404);
        }

        $vars = [
            'product' => $mainModel->productData($id)[0],
        ];
        $this->view->render('Buy product', $vars);
    }

}