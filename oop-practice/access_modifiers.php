<?php

# Private---//
// Private property or methods only nij class e access kora jay, class er bahire seta access kora jay na.
// inhetitance class o private property or method access korte pare na.

// class Student {

//     private $name;

//     public function display()
//     {
//         return $this->name = 'Imaran Hossain Biplob';
//     }
// }


// $student = new Student();

// echo $student->display();



#Protected ----//
// Protected property or methods nij class o inherited class use kora jay,
// but seta object create kore ba class er bhite use kora jayna.

class User {

    private $name = 'Imran Hossain Biplob';
    protected $roll = 2021502;

    public function display()
    {
        echo "The Name is: {$this->name} <br/>";
        echo "The Roll is: {$this->roll} <br/>";
    }
}


class Member extends User{


}


$member = new Member();

$member->display();



#Public---//
// public property or methods shob jaygate use kora jay.

class Bus {

    public $name = 'Big Bus';

    public function display()
    {
        echo "The Category is: {$this->name} <br/>";
    }
}

$bus = new Bus;

$bus->display();