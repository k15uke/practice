<?php

class SmartPhone extends Computer
{
    public function __construct()
    {
        parent::__construct('スマートフォン');
    }

    public function input()
    {
        echo '<p>タッチパネルディスプレイをタップして操作';
    }

    public function output(){
        echo '<p>タッチパネルディスプレイに出力';
    }
}
