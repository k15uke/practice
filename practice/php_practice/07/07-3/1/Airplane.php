<?php

abstract class Airplane{
    protected $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function showType(){
        echo '<p>'.$this->type. '</p>';
    }
    abstract public function fly();
}