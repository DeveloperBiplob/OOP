<?php

// Constant

// Constant er valu change kora jayna,
// aki name e akidik var constant call kora jayna.
// Constant akta static valu, jake pawar jonno object create kora lage na,
// direct class er name diye access kora jay. like - User::NAME;



class User
{
    const MESSAGE = 'Welcome to our Class';

    public $name = 'Imran';

    public function display()
    {
        // nij class e constant access korte hoy self::ConstantName use kore.
        // Or Class er name diye o access korte pari, User:: NAME; 
        // Selt::ConstantName inherited class kaj korbe na.
        echo self::MESSAGE;

        echo "This Name is: {$this->name} <br/>";
    }
}



echo User::MESSAGE;

$user = new User;
$user->display();


