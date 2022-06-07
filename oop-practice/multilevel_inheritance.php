<?php

// Multilevel Inheritance -> class one ke class two inherite kore and
// class two ke abar class three inherite kore ai vabe cholte thakle take multilevel inheritance bole.

class One {

    public function dispaly()
    {
        echo "This is class One <br>";
    }
}

class Two extends One {

    public function getName(){
        echo "The name is Biplo <br>";
    }
}

class Three extends Two {

    public function getRoll()
    {
        echo "The roll is 202020 <br>";
    }
}

$three = new Three;

$three->dispaly();