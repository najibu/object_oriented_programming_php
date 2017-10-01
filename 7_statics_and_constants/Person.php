<?php

class Person
{
    public static $age = 1; // A persons age is unique to that person

    public function haveBirthday()
    {
        return static::$age++;
    }
}


$najibu = new Person;
$najibu->haveBirthday();
$najibu->haveBirthday();

$jane = new Person;
$jane->haveBirthday();

echo Person::$age;
