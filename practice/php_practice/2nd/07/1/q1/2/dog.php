<?php

class Dog{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function showName(){
        echo '<p>'.$this->name.'</p>';
    }
}