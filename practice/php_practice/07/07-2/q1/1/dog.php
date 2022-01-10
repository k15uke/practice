<?php

class Dog extends Animal{

    public function __construct($name,$age){
        parent::__construct($name,$age);
    }


    public function run(){
        echo '<p>トコトコ</p>';
    }

    public function speak(){
        echo '<p>ワンワン</p>';
    }
}