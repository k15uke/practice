<?php

class TabletPC extends Computer{
    
    public function __construct()
    {
        parent::__construct('タブレットPC');    
    }

    public function input(){
        echo '<p>タッチパネルディスプレイをタップして操作';
    }

    public function output(){
        echo '<p>タッチパネルディスプレイに出力</p>';
    }
}