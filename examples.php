<?php 

use Acme\Staff;
use Acme\Business;
use Acme\Users\Person;

$najibu = new Person('Najibu Nsubuga');

$staff = new Staff([$najibu]);

$najibu_tech = new Business($staff);

$najibu_tech->hire(new Person('Jane Doe'));

var_dump($najibu_tech->getStaffMembers());