<?php

// Instance of Operator diye amara check korte pari kono akta objet seta kon class object or instance.
class One
{
    public $name;
}

class Two 
{
    public $name;
}

$one = new One();
$two = new Two();


var_dump($one instanceof One);

if($one instanceof One){
    echo "This is a object of class One";
}else{
    echo "This is not a object of class One";
}