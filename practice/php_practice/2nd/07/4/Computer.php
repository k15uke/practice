<?php

class Computer implements IComputer{

    public function playGame(){
        echo 'ゲームをする';
    }

    public function browseWeb(){
        echo 'ウェブを閲覧する';
    }
}