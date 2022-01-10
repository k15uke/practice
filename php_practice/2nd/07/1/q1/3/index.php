<?php

require_once('./Dog.php');

$dog = new Dog();
$dog->setName('ぽち');
$dog->showName();

$dog->setAge(5);
$dog->showProfile();