<?php
namespace Best\Shop\Models;

use Web\Engine\DB;

class AccountModel
{
    private $db;
    private $table_name;
    const USER_ADD = 'user add';
    const USER_AUTH = 'user auth';
    const ERROR = 'error';
    const USER_EXISTS = 'user exists';
    const AVATAR_UPDATED = 'avatar updated';

    function __construct()
    {
        $this->db = DB::getInstance();
        $this->table_name = 'users';
    }

    public function regUser($data)
    { 
        $sql = "SELECT login FROM $this->table_name WHERE login=:login";
        if ($this->db->selectByParam($sql, ['login'=>$data['login']])) {
            return self::USER_EXISTS;
        }

        $sql = "INSERT INTO $this->table_name (login, name, email, pwd, birthdate, sex, status) 
VALUES (:login, :name, :email, :pwd, :birthdate, :sex, :status)";
        $params = [
            'login'=> $data['login'],
            'name'=> $data['name'],
            'email'=> $data['email'],
            'pwd'=> password_hash($data['pwd'], PASSWORD_DEFAULT),
            'email'=> $data['email'],
            'birthdate'=> $data['birthdate'],
            'sex'=> $data['sex'],
            'status' => $data['status']            
        ];
        if (!$this->db->insertIntoTable($sql, $params)) {
            return self::ERROR;
        }
        return self::USER_ADD;
    }

    public function authUser($data)
    {
        session_start();
        $sql = "SELECT login, name, pwd, birthdate, sex, avatar FROM $this->table_name WHERE login=:login";

        $result = $this->db->selectByParam($sql, ['login'=>$data['login']]);
        if ($result) {
            if (password_verify($data['pwd'], $result['pwd'])) {
                $_SESSION['login'] = $data['login'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['birthdate'] = $result['birthdate'];
                $_SESSION['sex'] = $result['sex'];
                $_SESSION['avatar'] = $result['avatar'];
                return self::USER_AUTH;
            }
        }
        return self::ERROR;
    }

    public function updateUserAvatar($params)
    {
        $sql = "UPDATE users SET avatar=:avatar WHERE login=:login";
        if (!$this->db->insertIntoTable($sql, $params)) {
            return self::ERROR;
        }
        return self::AVATAR_UPDATED;
    }

}