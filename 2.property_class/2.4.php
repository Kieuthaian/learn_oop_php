<?php
require_once "./Cat.class.php";
$catA = new cat();
$catA->setName('Mimi');
$catA->setColor('yellow');
$catA->setAge('2');
$catA->showInfo();

$catB = new cat();
$catB->setName('Tom');
$catB->setColor('brown');
$catB->setAge('3');
$catB->showInfo();