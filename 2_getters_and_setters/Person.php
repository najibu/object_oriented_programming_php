<?php


class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Under age");
        }
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age * 365;
    }
}


$najibu = new Person('Najibu');
$najibu->setAge(27);

$najibu->age = 3;

var_dump($najibu->getAge());
