<?php

class Student
{
    public $name;
    public $roll;

    
    public function getName() : string
    {
        return $this->name;
    }

    
    public function getRoll() : ? int
    {
        return $this->roll;
    }

    public function display() : void
    {
        echo 'This Name is ' . $this->getName() . "<br>";
        echo 'This Roll is ' . $this->getRoll() . "<br>";
    }
}

$student = new Student();
$student->name = 'Biplob';
$student->roll = 6060;
echo $student->getName();
echo "<br>";
$student->display();

echo "<br>";

$std = new Student();
$std->name = 'Jabery';
echo $std->getName();
echo "<br>";
$std->display();