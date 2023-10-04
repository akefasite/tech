<?php

class Calculator {
    public function addNumbers($a, $b) {
        return $a + $b;
    }

    public function addNumbersThree($a, $b, $c) {
        return $a + $b + $c;
    }
}

/* Function Overriding Example*/
class ParentClass {
    public function showMessage() {
        echo "This is the parent class.\n";
    }
}

class ChildClass extends ParentClass {
    public function showMessage() {
        echo "This is the child class.\n";
    }
}

/*Function Overloading Example*/
$calculator = new Calculator();
echo "Function Overloading Example:\n";
echo "Adding two numbers: " . $calculator->addNumbers(5, 10) . "\n";
echo "Adding three numbers: " . $calculator->addNumbersThree(5, 10, 15) . "\n\n";

/* Function Overriding Example*/
echo "Function Overriding Example:\n";
$parent = new ParentClass();
$child = new ChildClass();
$parent->showMessage();
$child->showMessage();








?>