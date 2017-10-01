<?php


class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        return $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$najibu = new Person('Najibu Nsubuga');
$staff = new Staff([$najibu]);
$najcasts = new Business($staff);

$najcasts->hire(new Person('Jane Doe'));

var_dump($najcasts->getStaffMembers());
