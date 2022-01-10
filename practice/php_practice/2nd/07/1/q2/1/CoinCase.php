<?php

class CoinCase
{
    private $coin_type = [
        500 =>0,
        100 =>0,
        50 =>0,
        10 =>0,
        5 =>0,
        1 =>0,
    ];

    public function addCoins($type,$num){
        if(!isset($this->coin_type[$type])){
            return;
        }
        $this->coin_type[$type] += $num;
    }

    public function getCount($type){
        if(!isset($this->coin_type[$type])){
            return 0;
        }
        return $this->coin_type[$type];
    }

    public function getAmount(){
        $sum = 0;
        foreach($this->coin_type as $k => $v){
            $sum += $k * $v;
        }
        return $sum;
    }

}