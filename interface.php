<?php

// INTERFACE
// Helps specify what methods a class should implement.
// Makes it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it's referred to as 'Polymorphism'.

//  INTERFACE Vs ABSTRACT
// --interface is used for for (parent) class declaration
// --cannot have properties in (parent) class
// --can have construct in (parent) class
// --parent class method must be public
// --abstract keyword is not necessary for (parent) class declaration
// --implements is used in children class(es)
// --return is used instead of echo if data type is specified (in children class).

// E.g:
interface interfaceName {
    public function someMethod();
    public function someMethod2($name, $color);
    public function someMethod3() : string;
}


// parent class
interface Animal {

    public function makeSound();
    // public function action();
};

// children classes
class Cat implements Animal {
    public function makeSound()
    {
        echo "Meow";
    }

    public function action() : string
    {
        return "Cat is eating";
    }
}

class Dog implements Animal {
    public function makeSound()
    {
        echo "Woof";
    }

    public function action() : string
    {
        return "Dog is barking";
    }
}

class Mouse implements Animal {
    public function makeSound()
    {
        echo "Squeak";
    }

    public function action() : string
    {
        return "Dog is crying";
    }
}

// make instance of the class
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

// add object to an array
$animals = array($cat, $dog, $mouse);

// loop
foreach($animals as $animal){
    $animal->makeSound();
    echo "<br/>";
    echo $animal->action();
    echo "<p/>";
};