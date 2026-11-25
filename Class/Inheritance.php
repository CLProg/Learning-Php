<?php

class Action {
    public function makeAction(){
        echo "Running ";
    }
    public function distance(){
        echo "50km/s";
    }
}

class Person Extends Action{
    public function walking(){
    echo "John David Elizalde is ";
    }
}

$action = new Action;
$person = new Person;

$person->walking();
$person->makeAction();
$person->distance();