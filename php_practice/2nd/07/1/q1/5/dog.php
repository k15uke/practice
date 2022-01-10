<?php

class Dog{
    private $name;
    private $age;
    private $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function showName(){
        echo '<p>'.$this->name.'</p>';
    }

    public function showProfile(){
        echo '<p>名前は'.$this->name.'です。年齢は'.$this->age. '歳です。犬種は'.$this->type . 'です</p>';
    }
}