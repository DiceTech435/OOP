<?php

require_once("class.php");

//INHERITANCE --- Inheritance/Abstract are desame thing.

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {

    // Weight is added and overridden as an inheriance from Fruit.
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function addition($num1, $num2) {
        echo "The sum number is " . $num1 + $num2. "<p>";
    }

    public function message() {
        return $this->intro();
    }

}

$strawberry = new Strawberry("Strawberry", "red", 50);

echo $strawberry->name ."<br />";
echo $strawberry->color ."<br />";
echo $strawberry->weight ."gram <p />";

$strawberry->addition(10, 5);
$strawberry->message();