<?php

// Static Method or Property
// static means global, je akta memori location use krobe.
// class er kono akta jayga theke jodi property er value chance kora hoy, shob jaygate change hoye jabe.

// static method or propery access korar jonno object create korte hoyna,
// direct class er name diye access kora jay. like - User::$name;

// class er modde static propery or method className::propertyname or methodName,
// and self::propertyName or methodName diye access korte pari.




class User 
{
    public static $name = 'Biplob';

    public function display()
    {
        echo User::$name;
        echo self::$name;
    }

    public static function message()
    {
        self::$name = "Biplob jabery";
        echo "This is our static message <br/>";
    }
}

echo User::$name;

$user = new User;
$user->display();

User::message();

echo User::$name;