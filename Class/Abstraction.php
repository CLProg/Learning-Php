<?php

abstract class Abstraction{// when you use Abstarct Class you can't make a object using this
    abstract public function name();
    abstract public function age();
}

class PersonMale Extends Abstraction{
    public function name(){
        echo "Boy Name ";
    }
    public function age(){
        echo "18 y/o";
    }
}

class PersonFemale Extends Abstraction{
    public function name(){
        echo "Girl Name ";
    }
    public function age(){
        echo "20 y/o";
    }
}

$boy = new PersonMale;
$girl = new PersonFemale;

$boy->name();
$boy->age();
echo PHP_EOL;
$girl->name();
$girl->age();