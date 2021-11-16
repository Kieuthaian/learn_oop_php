<?php


Class cat {
    //Properties
    var $name = "Kitty";
    var $color = "yellow";
    var $age = 1;
}
$catA = new cat();
//echo "<pre>";
//print_r($catA);
//echo "</pre>";

echo "<br/>Name: " . $catA->name;
echo "<br/>Color: ". $catA->color;
echo "<br/>Age: " . $catA->age;