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

    public function getName()
    {
        return $this->name;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function setName($value)
    {
        return $this->name = $value;
    }

    public function setColor($value)
    {
        return $this->color = $value;
    }

    public function setAge($value)
    {
        return $this->age = $value;
    }

    public function showInfo() {
        echo "<br/>Name: " . $this->getName();
        echo "<br/>Color: " . $this->getColor();
        echo "<br/>Age: " . $this->getAge();
    }
}
