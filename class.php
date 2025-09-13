<?php
// class, inheritance, abstract, interface, static, trait, namespace

// CLASS
// FINAL KEYWORD- for classes, properties or methods
// final --prevents class inheritance, or to restrict method and property overriding.
class Fruit {

    // properties/variables
    public $name;
    public $color;


    // CONSTRUCTORS -- Wroks when it is passed into an object from a class
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
    }

    // METHODS/FUNCTIONS
    // name
        // public function set_name($name){
        //     $this->name = $name;
        // }

    public function get_name(){
        return $this->name;
    }


    // color
        // public function set_color($color){
        //     $this->color = $color;
        // }

    public function get_color(){
        return $this->color;
    }


    // DESTRUCTORS -- works when the script is done executing. The object/class construct must exist/ be passed.
    public function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
    }
    


};




// OBJECTS - create an instance of the class

// //Class/Methods
// //1.
// $apple = new Fruit();        
// $apple->set_name("Apple");
// $apple->set_color("Blue");

// // 2.
// $banana = new Fruit();               
// $banana->set_name("Banana");
// $banana->set_color("Green");

// echo $apple->get_name();
// echo "<br />";
// echo $apple->get_color();
// echo "<br /> <br />";
// echo $banana->get_name();
// echo "<br />";
// echo $banana->get_color();
// echo "<br />";


//CONSTRUCTORS
$apple = new Fruit("Apple", "Blue");
$banana = new Fruit("Banana", "Green"); 

echo $banana->name;
echo "<br />";

echo $banana->color;
echo "<br />";

echo $apple->name;
echo "<br />";

echo $apple->color ."<p>";;




// ACCESS MODIFIERS for properties or methods
// public -default- property or method can be accessed from everywhere.
// protected -property or method can be accessed within the class and by classes classes derived from that class.
// private -property or method can ONLY be accessed within the class.

