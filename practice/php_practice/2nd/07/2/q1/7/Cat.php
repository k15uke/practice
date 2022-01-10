<?php

class Cat extends Animal{
    public function __construct($name,$age){
        parent::__construct($name,$age);
    }

    public function sleep(){
        echo '<p>スースー</p>';
    }

    public function speak(){
        echo '<p>ニャー</p>';
    }
}