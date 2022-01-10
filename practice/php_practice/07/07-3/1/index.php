<?php

require_once('./Airplane.php');
require_once('./FighterAircraft.php');
require_once('PassengerPlane.php');

$fighter = new FighterAircraft('戦闘機');
$fighter->showType();
$fighter->fly();
$fighter->fight();

$plane = new PassengerPlane('旅客機');
$plane->showType();
$plane->fly();
$plane->carryPassengers();