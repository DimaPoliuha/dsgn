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

class Basket extends Model {

    public function orderAdd(){

        $params = [
            'account_id' => $_SESSION['account']['id'],
            'project_id' => $_POST['product_id'],
            'count' => $_POST['count'],
        ];
        $this->db = new Db();
        $this->db
            ->insert("account_id", "project_id", "count")
            ->into("orders")
            ->values(":account_id", ":project_id", ":count")
            ->execute($params);
        return $this->db->lastInsertId();
    }

    public function order($id){
        $this->db = new Db();
        return $this->db
            ->select('orders.id', 'accounts.login', 'accounts.email', 'projects.title', 'projects.price', 'orders.count')
            ->from('orders')
            ->innerJoin('accounts')
            ->on("orders.account_id", "=", "accounts.id")
            ->innerJoin('projects')
            ->on("orders.project_id", "=", "projects.id")
            ->where('orders.id', '=', $id)
            ->execute();
    }

    public function getOrders($accountId){
        $this->db = new Db();
        return $this->db
            ->select('projects.title', 'projects.price', 'orders.count')
            ->from('orders')
            ->innerJoin('projects')
            ->on("orders.project_id", "=", "projects.id")
            ->where('orders.account_id', '=', $accountId)
            ->execute();
    }

}