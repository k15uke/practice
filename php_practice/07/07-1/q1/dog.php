<?php

class Dog{
    private $name;
    private $age;

    public function setName($name){
        $this->name = $name;
    }
    
    public function setAge($age){
        $this->age = $age;
    }
 
    public function showName(){
        echo '<p>'.$this->name.'<p>';
    }

    public function showProfile(){
        echo '<p>名前は'.$this->name. 'です。年齢は'.
        $this->age.'歳です。';
    }
}