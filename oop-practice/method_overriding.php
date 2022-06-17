<?php
#Method Overriding----//
// Parent class e kono method jodi abar child class call kora hoy,
// ta hole take method voerriding bola hoy, same name e class chil class e call korle.



class User 
{

    public $name;
    public $address;

    public function set(string $name, string $address) : void
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function display()
    {
        echo "Name is {$this->name} <br/>";
        echo "Address is {$this->address} <br/>";
        echo "Good By <br/>";
    }
}


class Student extends User 
{
    public $roll;

    public function set(string $name, string $address, int $roll = NULL) : void
    {
        // $this->name = $name;
        // $this->address = $address;
        parent::set($name, $address);
        $this->roll = $roll;
    }

    // method overriding. cause this method is already exist in parent class.
    public function display()
    {
        echo "This is Student Information <br/>";
        echo "Roll is :{$this->roll} <br/>";
        // echo "Name is {$this->name} <br/>";
        // echo "Address is {$this->address} <br/>";

        // parent er display method er shob pawar jonno ai vabe call korlei hoy.
        parent::display();
    }
}


class Teacher extends User
{
    public function display()
    {
        echo "This is Teacher Information <br/>";
        parent::display();
    }
}



$student = new Student;
$student->set('jone', 'dhaka', 10);
$student->display();

echo "<br/>";

$teacher = new Teacher;
$teacher->set('biplob', 'comilla');
$teacher->display();