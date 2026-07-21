<?php 

class User_Model extends Model{
    private static $token = '';

    private static function generateToken(){
        self::$token = bin2hex(random_bytes(15));
    }

    public function addUser($userData){
        if(!$userData){
            return;
        }
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $user = $ms->query("SELECT  * FROM users WHERE email = '" . $userData->email . "'")->fetch_assoc();
        if($user){
            return;
        }
        self::generateToken();
        $ms->query("INSERT INTO users(name, email, password, token) VALUES ('" . $userData->name . "' ," . "'" . $userData->email . "' , " . "'" . $userData->password . "' , " . "'" . self::$token . "')");
        $ms->close();

        return [$userData->name, $userData->email, self::$token];
    }

    public function checkUser($userData){
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $user = $ms->query("SELECT name , email, image, password FROM users WHERE email = '" . $userData[0] . "'")->fetch_assoc();
        if(!$user){
            $ms->close();
            return;
        }
        if(!password_verify($_POST['password'], $user['password'])){
            $ms->close();
            return;
        }
        self::generateToken();
        $ms->query("UPDATE users SET token = '" . self::$token . "' WHERE email = '" . $user['email'] . "'");
        $ms->close();
        return [$user, self::$token];
    }

    public function logout(){
        
    }
}