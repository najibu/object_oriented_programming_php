<?php

// Age not static
class Person
{
    public $age = 1; // A persons age is unique to that person

    public function haveBirthday()
    {
        return $this->age++;
    }

    public function age()
    {
        return $this->age;
    }
}

$najibu = new Person;
$najibu->haveBirthday();
$najibu->haveBirthday();

$jane = new Person;
$jane->haveBirthday();

echo $najibu->age();
echo $jane->age();
