<?php 
    Class Router {
        public function route($uri){
            $uriParts = explode('/',$uri);
            $controller_name = $uriParts[3] !== '' ? ucfirst($uriParts[3]) : 'Animals';
            $action_name = 'default';

            $controller_file = $controller_name . '_Controller.php';
            $controller_path = '../app/Controller/' . $controller_file;
            if(file_exists($controller_path)){
                include $controller_path;
            }
            
            $controller_class = $controller_name . '_Controller';
            $controller_obj = new $controller_class;

            $controller_obj->$action_name();
        }
    }