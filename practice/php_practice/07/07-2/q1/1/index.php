<?php
require_once('./Animal.php');
require_once('./dog.php');
require_once('./Cat.php');

$animals = [
    new dog('ぽち', 5),
    new Cat('たま', 3),
    new Dog('ジョン', 7),
    new Cat('チャチャマル', 6),
];

foreach ($animals as $animal) {
    $animal->speak();
}
