<?php

require_once('./Dog.php');

$dog = new Dog('柴犬');
$dog->setName('ぽち');
$dog->showName();
$dog->setAge(5);
$dog->showProfile();

