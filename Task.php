<?php 

class Task {
  public $description;
  public $completed = false;

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$task = new Task('Learn OOP');

$task->complete();

var_dump($task->completed);

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

interface Animal {
  public function communicate();
  
}

class Dog implements Animal {
  public function communicate()
  {
    return "Bark";
  }
}

class Cat implements Animal {
  public function communicate()
  {
    return "Meow";
  }
}

interface Logger {
  public function execute($message);
}

class LogToFile implements Logger{
  public function execute($message)
  {
    var_dump("Log the message to a file: " . $message);
  }
}

class LogToDatabase  implements Logger {
  public function execute($message)
  {
    var_dump("Log the message to a database: " . $message);
  }
}

//...
class UsersController {
  protected $logger;
  public function __construct(Logger $logger)
  {
    $this->logger = $logger;
  }

  public function show()
  {
    $user = "Najibu Nsubuga";
    $this->logger->execute($user); 
  }
}

$controller = new UsersController(new LogToDatabase);

$controller->show(); 