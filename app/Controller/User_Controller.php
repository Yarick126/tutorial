<?php 

class User_Controller extends Controller {


    function __construct(){
        $this->model = new User_Model();
        $this->view = new View();
    }
    public function default(){

    }
    public function login(){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['password'])){
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
        if(isset($email) && isset($password)){
            $userData = $this->model->checkUser([$email, $password]);
        }
        if($userData)
            $this->view->generatePage('profile-template.php',$userData);
        else
            $this->view->generatePage('sign-in-template.php', 'Wrong password or email!');
    }
    public function register(){
        $userData = new stdClass();
        if(isset($_POST['name'])){
            $userData->name = $_POST['name'];
        }
        if(isset($_POST['email'])){
            $userData->email = $_POST['email'];
        }
        if(isset($_POST['password'])){
            $userData->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
       $this->view->generatePage('profile-template.php',$this->model->addUser($userData));
    }
    public function signInForm(){
        $this->view->generatePage('sign-in-template.php');
    }

    public function signUpForm(){
        $this->view->generatePage('sign-up-template.php');
    }
}