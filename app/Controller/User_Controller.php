<?php 

class User_Controller extends Controller {

    function __construct(){
        $this->model = new User_Model();
        $this->view = new View();
    }
    public function default(){
       $this->view->generatePage('profile-template.php');
    }

    public function signIn(){
        $this->view->generatePage('sign-in-template.php');
    }

    public function signUp(){
        $this->view->generatePage('sign-up-template.php');
    }
}