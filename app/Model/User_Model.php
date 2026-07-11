<?php 

class User_Model extends Model{
    private $token = '';

    private static function generateToken(){
        self::$token = bin2hex(random_bytes(15));
        return self::$token;
    }

    public function addUser($userData){
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $ms->query('INSERT INTO user(name, email, password, token) VALUES (' . $userData->name . $userData->email . $userData->password . User_Model::generateToken() . ')');
        $ms->close();
    }

    public function checkUser(){

    }

    public function logout(){
        
    }
}