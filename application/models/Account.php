<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 19:00
 */

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Account extends Model {

    public $error;

    public function checkAccountData(){
        $params = [
            'login' => $_POST['login'],
        ];
        $this->db = new Db();
//        debug($params);
        $hash = $this->db
            ->select('password')
            ->from('accounts')
            ->where('login', '=', ":login")
            ->execute($params);
//        debug($hash);
        if(!$hash or !password_verify($_POST['password'], $hash[0]['password'])){
            $this->error = 'Login or password uncorrect';
            return false;
        }
        return true;
    }

    public function checkStatus($type, $data){
        $params = [
            $type => $data,
        ];
        $this->db = new Db();
        $status = $this->db
            ->select('status')
            ->from('accounts')
            ->where($type, '=', ":".$type)
            ->execute($params);
        if($status[0]['status'] != 1){
            $this->error = 'Account is not confirmed. Please, check your email';
            return false;
        }
        return true;
    }

    public function login(){
        $params = [
            'login' => $_POST['login'],
        ];
        $this->db = new Db();
        $data = $this->db
            ->select()
            ->from('accounts')
            ->where('login', '=', ":login")
            ->execute($params);
        $_SESSION['account'] = $data[0];
    }

    public function validate($input){
        $rules = [
            'login' => [
                'pattern' => '#^[a-z0-9]{3,15}$#',
                'message' => 'Invalid login ([a-z0-9]{3,15})'
            ],
            'email' => [
                'pattern' => '#^([a-z0-9_.-]{1,20}+)@([a-z0-9_.-]+)\.([a-z\.]{2,10})$#',
                'message' => 'Invalid email'
            ],
            'password' => [
                'pattern' => '#^[a-z0-9]{6,31}$#',
                'message' => 'Invalid password ([a-z0-9]{6,31})'
            ],
        ];
        foreach ($input as $item) {
            if(!isset($_POST[$item]) or !preg_match($rules[$item]['pattern'], $_POST[$item])){
                $this->error = $rules[$item]['message'];
                return false;
            }
        }
        return true;
    }

    public function checkEmailExists(){
        $params = [
            'email' => $_POST['email'],
        ];
        $this->db = new Db();
        return $this->db
            ->select('id')
            ->from('accounts')
            ->where('email', '=', ":email")
            ->execute($params);
    }

    public function checkLoginExists(){
        $params = [
            'login' => $_POST['login'],
        ];
        $this->db = new Db();
        if($this->db
            ->select('id')
            ->from('accounts')
            ->where('login', '=', ":login")
            ->execute($params)){
            $this->error = 'This login has already taken';
            return false;
        }
        return true;
    }

    public function register(){
        $token = $this->createToken();
        $params = [
            'login' => $_POST['login'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
            'token' => $token,
            'status' => 0
        ];
        $this->db = new Db();
        $this->db
            ->insert("email", "login", "password", "token", "status")
            ->into("accounts")
            ->values(":email", ":login", ":password", ":token", ":status")
            ->execute($params);
        mail($_POST['email'], 'Register', 'Confirm: http://localhost/dsgn/account/confirm/'.$token);
    }

    public function createToken(){
        return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 30)), 0, 30);
    }

    public function checkTokenExists($token){
        $params = [
            'token' => $token,
        ];
        $this->db = new Db();
        return $this->db
            ->select('id')
            ->from('accounts')
            ->where('token', '=', ":token")
            ->execute($params);
    }

    public function activate($token){
        $params = [
            'token' => $token,
            'status' => 1,
            'checkedToken' => ''
        ];
        $this->db = new Db();
        $this->db
            ->update("accounts")
            ->set("status", ":status")
            ->set('token', ':checkedToken')
            ->where("token", "=", ':token')
            ->execute($params);
    }

    public function recovery(){
        $token = $this->createToken();
        $params = [
            'email' => $_POST['email'],
            'token' => $token,
        ];
        $this->db = new Db();
        $this->db
            ->update("accounts")
            ->set("token", ":token")
            ->where("email", '=', ':email')
            ->execute($params);
        mail($_POST['email'], 'Recovery password', 'Confirm: http://localhost/dsgn/account/reset/'.$token);
    }

    public function reset($token){
        $newPass = $this->createToken();

        $params = [
            'token' => $token,
            'password' => $newPass,
        ];
        $this->db = new Db();
        $this->db
            ->update("accounts")
            ->set('password', ':password')
            ->where("token", "=", ':token')
            ->execute($params);

        $params = [
            'password' => $newPass,
        ];

        $this->db = new Db();
        $mail = $this->db
            ->select('email')
            ->from('accounts')
            ->where('password', '=', ":password")
            ->execute($params);

        $params = [
            'token' => $token,
            'checkedToken' => '',
            'password' => password_hash($newPass, PASSWORD_BCRYPT),
        ];
        $this->db = new Db();
        $this->db
            ->update("accounts")
            ->set('token', ':checkedToken')
            ->set('password', ':password')
            ->where("token", "=", ':token')
            ->execute($params);
        mail($mail[0]['email'], 'New password', 'Password: '.$newPass);
    }

    public function save(){
        $params = [
            'id' => $_SESSION['account']['id'],
            'email' => $_POST['email'],
        ];
        $this->db = new Db();
        if(!empty($_POST['password'])){
            $params['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $this->db
                ->update("accounts")
                ->set("email", ":email")
                ->set('password', ':password')
                ->where("id", "=", ':id')
                ->execute($params);
        }
        else{
            $this->db
                ->update("accounts")
                ->set("email", ":email")
                ->where("id", "=", ':id')
                ->execute($params);
        }
        foreach ($params as $key => $val) {
            $_SESSION['account'][$key] = $val;
        }
    }

}