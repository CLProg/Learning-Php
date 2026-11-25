<?php
//Encapsulation
class Dog {
    public function makeSound(){
        echo "Bark!";
        return $this->makeAction();
    }// public class can use outside class

    private function makeAction(){
        echo PHP_EOL;
        echo "Barking!";
    }//private class can use within class
}

$dog = new Dog; //this called Object Instance
$dog->makeSound();// this called Method call (->) called Object Operator