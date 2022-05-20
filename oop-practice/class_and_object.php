<?php

class Foo {
    
    public $color;

    function display(){
        echo 'Welcome to Bangladesh' . "<br/>";
    }

    function setColor( $color ) {
        return $this->color = $color;
    }

    function getColor(){
        return $this->color;
    }
}


$foo = new Foo();

$foo->display();

$foo->color = 'Green';
echo $foo->color;

echo $foo->getColor();

echo $foo->setColor('Red');
