<?php

class FighterAircraft extends Airplane{
    public function fly(){
        echo '<p>攻撃に出るために飛行します</p>';
    }

    public function fight(){
        echo '<p>戦闘します</p>';
    }
}