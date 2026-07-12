<?php 

class User_Model extends Model{
    private static $token = '';

    private static function generateToken(){
        self::$token = bin2hex(random_bytes(15));
    }

    public function addUser($userData){
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $user = $ms->query('SELECT  * FROM users WHERE email = ' . $userData->email)->fetch_assoc();
        if($user){
            return;
        }
        self::generateToken();
        $ms->query('INSERT INTO user(name, email, password, token) VALUES (' . $userData->name . $userData->email . $userData->password . self::$token . ')');
        $ms->close();

        return [$userData->name, $userData->email];
    }

    public function checkUser($email){
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $user = $ms->query('SELECT name , email, image FROM users WHERE email = ' . $email)->fetch_assoc();

        if(!$user){
            $ms->close();
            return;
        }
        self::generateToken();
        $ms->query('UPDATE users SET token = ' . self::$token . ' WHERE email = ' . $user['email']);
        $ms->close();
        return $user;
    }

    public function logout(){
        
    }
}