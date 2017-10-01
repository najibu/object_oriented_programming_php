<?php

use Acme\Business;
use Acme\Staff;
use Acme\Users\Person;

$najibu = new Person('Najibu Nsubuga');
$staff = new Staff([$najibu]);
$najcasts = new Business($staff);

$najcasts->hire(new Person('Jane Doe'));

var_dump($najcasts->getStaffMembers());
