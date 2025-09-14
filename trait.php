<?php

// TRAITS
// helps solve a child class inheriting multiple/more than one behaviours (parents).
// helps solve other children classes inheriting  one behaviours (parents).
// This helps reduce code duplication, bcos there is no need to redeclare the same method over and over again.

//1--parent class
trait Message1 
{
    public function msg1()
    {
        echo "OOP is fun!";
    }

    // addition
    public function addnumber($num1, $num2)
    {
        return $num1 + $num2;
    }

    // multiplication
    public function multiplynumber($num1, $num2)
    {
        return $num1 * $num2;
    }
}


//2--parent class
trait Message2
{
    public function msg2()
    {
        echo "OOP reduces duplication!!";
    }

}



//1--child class
class Welcome 
{
    use Message1, Message2;
    // use Message1;
    // use Message2;

}

//2--child class
class TestingClass
{
    use Message1;
}

$obj = new Welcome();
$obj->msg1();
echo "<br />";
echo $obj->addnumber(10, 20) ."<br />";
echo $obj->multiplynumber(10, 20) ."<br />";
echo "<br />";
$obj->msg2();
echo "<br />";

$obj2 = new TestingClass();
$obj2->msg1();
echo "<br />";
echo $obj2->addnumber(10, 20) ."<br />";
echo $obj2->multiplynumber(10, 20) ."<br />";