<?php

class cat
{
    //Properties
    public $name;
    public $color;
    public $age;

    //Method
    public function getColor()
    {
//        echo "<pre>";
//        print_r($this);
//        echo "</pre>";
        return $this->color;
    }
    public function getName() {
        return $this->name;
    }


    public function  getAge() {
        return $this->age;
    }

    public function setName($value)
    {
        return $this->name = $value;
    }

    public function setColor($value) {
        return $this->color = $value;
    }

    public function setAge($value) {
        return $this->age = $value;
    }
}

$catA = new cat();
$catA->setName('Mimi');
$catA->setColor('yellow');
$catA->setAge('2');
//echo "<pre>";
//print_r($catA);
//echo "</pre>";

echo "<br/>Name: " . $catA->getName();
echo "<br/>Color: " . $catA->getColor();
echo "<br/>Age: " . $catA->getAge();

$catB = new cat();
$catB->setName('Tom');
$catB->setColor('brown');
$catB->setAge('3');

echo "<br/>Name: " . $catB->getName();
echo "<br/>Color: " . $catB->getColor();
echo "<br/>Age: " . $catB->getAge();