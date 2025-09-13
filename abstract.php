<?php

// ABSTRACT --- Abstract/Inheritance are desame thing but uses astract intead for (parent) class declaration
//when the parent class has a named method, but need its child class(es) to fill out the tasks.
//This is a class that contains atleast one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// ABSTRACT VS INTERFACE
// --abstract is used for (parent) class declaration
// --can have properties in (parent) class
// --can have construct in (parent) class
// --parent class method is public or protected
// --abstract keyword is necessary for (parent) class declaration
// --extends is used in children class(es)
// --return is used instead of echo if data type is specified (in children class).


// parent class
abstract class Car {

    public $name;
    public $number;

    public function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }

    //abstract :: a method declared, but not implemented in the code.
    // String data type
    abstract public function intro() : string;
    
    // Int data type
    abstract public function int() : int;

    // float, bool, array, object, callable, iterable

}


// children classes
class Audi extends Car {

    public function intro() : string 
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }

    public function int() : int
    {
        return $this->number;
    }
}

class Volvo extends Car {

    public function intro() : string 
    {
        return "Choose German quality! I'm an $this->name!";
    }

    public function int() : int
    {
        return $this->number;
    }
}

class Citroen extends Car {

    public function intro(): string 
    {
        return "French extravagance! I'm a $this->name!";
    }

    public function int(): int
    {
        return $this->number;
    }
}


// Create objects from the child classes
$audi = new Audi("Audi", 50);
$volvo = new Volvo("Volvo", 2);
$citroen = new Citroen("Citroen", 45);

// Get the values
echo $audi->intro() ."<br />";
echo $volvo->intro() ."<br />";
echo $citroen->intro() ."<br />";

echo $audi->int() ."<br />";
echo $volvo->int() ."<br />";
echo $citroen->int() ."<br />";

