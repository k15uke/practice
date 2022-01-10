<?php

class PassengerPlane extends Airplane{

    public function fly(){
        echo '<p>乗客を乗せて目的地まで飛行します</p>';
    }

    public function carryPassengers(){
        echo '<p>乗客を目的地まで運びます</p>';
    }
}