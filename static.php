<?php

// STATIC METHODS
// can be called directtly without creating an instance of the class first.
// Helps in redeclaring of class instances to objects. 
// static keyword is used on method and property/variable.

// STATIC PROPERTIES
// can be called directtly without creating an instance of the class first.
// Helps in redeclaring of class instances to objects.

class Greetings{

    // Static property
    public static $value = 3.14159;

    // Static methods
    public static function staticValue(){
        return self::$value;
        // return $this->value; //remove static keyword
    }

    public static function welcome($msg){
        echo $msg;
    }

    public static function addNumber($num1, $num2){
        return $num1 + $num2;
    }

    // construct
    public function __construct($num1, $num2)
    {
        echo self::addNumber($num1, $num2);
        // echo $this->addNumber($num1, $num2);
    }
}


// Children classes
class NewArea extends Greetings
{

    public static function addnewData($msg)
    {
        Greetings::welcome($msg);
        // self::welcome($msg);
        // echo parent::welcome($msg);
        // echo $this->welcome($msg); //remove static keyword
    }
}


echo "<br />";
Greetings::welcome("Welcome");
echo "<br />";
echo Greetings::$value;
echo "<br />";
echo Greetings::staticValue();
echo "<br />";
NewArea::welcome("Hello world, i am from New Aarea!");
echo "<br />";
echo Greetings::addNumber(30, 2);
echo "<br />";
new Greetings(30, 2); //using constructs
echo "<br />";
echo NewArea::addnewData("Hello world, i am from New Area!");
echo "<br />";

//Instead of
// $greetings = new Greetings();
// echo $greetings->value;
// echo "<br>";
// echo $greetings->staticValue();
// echo "<br>";
// echo $greetings->welcome("Hello world, i am from New Area!");
// echo "<br>";
// echo $greetings->addNumber(30, 2);
// echo "<br>";

// $newarea = new NewArea();
// echo $greetings->addnewData("Hello world, i am from New Area!");
// echo "<br>";
// $greetings = new Greetings(30, 2); //using constructs
// echo "<br>";
