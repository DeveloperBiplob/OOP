<?php

class Vehicle {
    
    public $name = 'Corola';
    public $color = 'Green';
    public $price;

    function set( string $name, string $color, int $price = 2000 ) : void
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function display() : void
    {
        echo "The name is: {$this->name} <br/>";
        echo "The color is: {$this->color} <br/>";
        echo "The price is: {$this->price} <br/>";
    }
}

$vehicle = new Vehicle();

// $vehicle->name = 'Bus';
// $vehicle->color = 'Green';

$vehicle->set('BMW', 'Red', 50000);
$vehicle->display();

echo "<br/>";

$obj = new Vehicle();
$obj->set('Toyota', 'Green', 20000);
$obj->display();


// akti class er multiple objet create kore reuseable korbe pari.
// kono boject er data onno object er datar sate concate hobe na.
// main class thik rekhe tar copy toyri hobe.