<?php 
class Animals_Model extends Model {

    public function get_all_animals(){
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $bd_res = $ms->query('SELECT * FROM animals')->fetch_all();
        $ms->close();
        return $bd_res;
    }

    public function get_amount_of_animals(){
        $ms = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA,DB_PORT);
        $bd_res = $ms->query('SELECT COUNT(idanimals) FROM animals')->fetch_assoc();
        $ms->close();
        return $bd_res;
    }
}