<?php

require_once('./Animal.php');
require_once('./Dog.php');
require_once('./Cat.php');

$dog = new Dog('ぽち',5);
$cat = new Cat('たま',3);

$dog->showProfile();
$dog->run();
$dog->speak();
$cat->showProfile();
$cat->sleep();
$cat->speak();