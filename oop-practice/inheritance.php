<?php

// Inhertance holo class ke extends kore kaj kora.
// ate kore extand kora class er shob porperty and mehod ai class use kora jay.

class Vehicle {

    public function display(){
        echo 'This is Vehicle';
    }
}


class Bus extends Vehicle{

    public function getName(){
        echo 'this is biplob';
    }
    
}

class Track extends Vehicle{

    public $name;
}

$bus = new Bus();
$bus->display();

echo "<br>";

$track = new Track();
$track->display();