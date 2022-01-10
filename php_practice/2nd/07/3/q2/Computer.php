<?php

abstract class Computer{
    public $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function showType(){
        echo '<p>コンピュータの種類:'.$this->type . '</p>';
    }

    abstract public function input();

    abstract public function output();

    public function communication(){
        echo '<p>インターネットで通信</p>';
    }
}