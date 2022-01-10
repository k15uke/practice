<?php

class Animal
{
    private $name;
    private $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function showProfile(){
        echo '<p>名前は'.$this->name.'です。年齢は'.$this->age. '歳です。';
    }
}