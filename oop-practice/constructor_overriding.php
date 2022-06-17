<?php

// Constructor Overriding

class User 
{
    public $name;
    public $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function display()
    {
        echo "This Name is : {$this->name} <br/>";
        echo "This Address is : {$this->address} <br/>";
    }
}


class Student extends User 
{
    public $roll;

    public function __construct(string $name, string $address, int $roll)
    {
        parent::__construct($name, $address); // parent construct e valu pass kore dische.
        $this->roll = $roll;
    }

    public function getRoll()
    {
        echo "This Roll is : {$this->roll} <br/>";
    }
}



$student = new Student('biplob', 'dhaka', 100);
$student->display();
$student->getRoll();