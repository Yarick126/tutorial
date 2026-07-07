<?php 

class Animals_Controller extends Controller{

    function __construct(){
        $this->model = new Animals_Model();
        $this->view = new View(); 
    }
    public function default(){
        $this->view->generatePage('app/Model/Animals_Model.php', 
        [
            $this->model->get_all_animals(), 
            $this->model->get_amount_of_animals()
        ]);
    }
}
?>