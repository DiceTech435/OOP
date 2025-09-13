<?php

// STATIC METHODS
// can be called directtly without creating an instance of the class first.
// Helps in redeclaring of class instances to objects. 

// STATIC PROPERTIES
// can be called directtly without creating an instance of the class first.
// Helps in redeclaring of class instances to objects. 

class Greetings{

    // Static property
    public static $value = 3.14159;

    // Static method
    public static function staticValue(){
        return self::$value;
    }

    public static function welcome($msg){
        echo $msg;
    }

    public static function addNumber($num1, $num2){
        return $num1 + $num2;
    }

    public function __construct($num1, $num2)
    {
        echo self::addNumber($num1, $num2);
    }
}


// Children classes
class NewArea extends Greetings
{
    public static function addnewData($msg)
    {
        Greetings::welcome($msg);
        // self::welcome($msg);
        // parent::$value;
    }
}


// Greetings::welcome();
echo Greetings::$value;
echo Greetings::$staticValue();
echo NewArea::welcome("Hello world, i am from New Aarea!");
Greetings::addNumber(30, 2);
echo NewArea::addnewData("Hello world, i am from New Area!");
new Greetings(30, 2);  //using constructs

//Instead of
echo $greetings->value;
echo "<br>";
echo $greetings->staticValue();
echo "<br>";
echo $greetings->welcome("Hello world, i am from New Area!");
echo "<br>";
echo $greetings->addNumber(30, 2);
echo "<br>";

// $newarea = new NewArea();
echo $greetings->addnewData("Hello world, i am from New Area!");
echo "<br>";
$greetings = new Greetings(30, 2); //using constructs
echo "<br>";
