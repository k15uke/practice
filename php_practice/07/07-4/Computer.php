<?php

class Computer implements Icomputer{
    public function playGame(){
        echo '<p>ゲームをする</p>';
    }

    public function browseWeb(){
        echo '<p>ウェブを閲覧する</p>';
    }
}