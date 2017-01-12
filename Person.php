<?php 

Class Person {
  public $name;
  public $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function getAge()
  {
    return $this->age * 365;
  }

  public function setAge($age)
  {
    if ($age < 15) {
      throw new Exception("Person is not old enough");
    }
    $this->age = $age;
  }
}

$najibu = new Person('Najibu Nsubuga', 26);
$najibu->setAge(27);


var_dump($najibu->getAge());