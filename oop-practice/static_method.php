<?php

// Static Methods
// static method or propery object er upor defended na,
// ata holo self defended. ti $this key word diye ata ke access kora jayna.
// $this always akta object ke mark kore, 

# NOn-static propery use case in Static property----
// Static method er modde jodi Non-static kono property ke use korte chai,
// ta hole oi stataci method er modde class er kata objet create kore use korte hobe.
// Example - $obj = new User; | echo "Name is : {$obj->name}";

class User
{
    public $name = 'Biplob';
    public static $message = 'This is static message';

    public static function display()
    {
        echo "Welcome to our class <br/>";
        // echo "Name is : {$this->name}"; // this diye access kroa jayna.

        $obj = new User; // aivabe static method er modde object create kore use krote pari.
        echo "Name is : {$obj->name} <br/>"; 

        echo User::$message; // or self::$message

    }
}

// User::display();

$user = new User;
$user->display();