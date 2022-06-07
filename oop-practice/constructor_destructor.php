<?php

// Constructor -> jokhn kono class instance create kori tokhon e constructor call hoy.
// Destructor -> jokhon kono kono class er kaj ses hoye jay. mane r kono kaj nei, exgiquation ses hoy tokhon e destructor class hoy. 

class Student {

    public $name;
    public $age;

    // public function __construct()
    // {
    //     $this->name = 'jone doe';
    // }

    // Constructor parameter pass---//
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        return "This Name is {$this->name} <br> This Age is {$this->age}.";
    }


    // Destructor---//
    // sokol method and porerty er kaj ses howar por destructor call hobe.
    
    public function __destruct()
    {
        echo "<br> All work has been done";
    }

}

// $student = new Student();

// parameter pass
$student = new Student('biplob', 2020);

echo $student->display();