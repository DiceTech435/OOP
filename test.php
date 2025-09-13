<?php

// CLASS
class Fruit {

    // properties/variables
    public $name;
    public $color;



    // METHODS/FUNCTIONS
    // name, color
        public function set_fruit($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

    public function get_name(){
        return $this->name;
    }

    public function get_color(){
        return $this->color;
    }


    // DESTRUCTORS
    public function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
    }


}




// OBJECTS

//Methods
$apple = new Fruit("Apple", "Blue"); 
$banana = new Fruit("Banana", "Green");

echo $banana->name;
echo "<br />";

echo $banana->color;
echo "<br />";

echo $apple->name;
echo "<br />";

echo $apple->color;






