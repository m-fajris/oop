<?php

class Animal{

    public $legs = 2;
    public $cold_blooded = false;
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }


}

?>