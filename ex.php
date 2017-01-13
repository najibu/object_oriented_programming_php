<?php 

class Math {
  public static function add(...$nums)
  {
    return array_sum($nums);
  } 
}

// echo Math::add(1,2,3,4);

class Person {
  public $age = 1;

  public function haveBirthday()
  {
    return  $age++;
  }

  public function age()
  {
    return $this->age;
  }
}

// $najibu = new Person;
// $najibu->haveBirthday();
// $najibu->haveBirthday();
 
// echo $najibu->age();

// $sham = new Person;
// $sham->haveBirthday();

// echo $sham->age();

class BankAccount {
  const TAX = .09;
}

echo BankAccount::TAX;