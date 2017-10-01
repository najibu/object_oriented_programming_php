<?php

use Acme\AuthController;
use Acme\RegisterUser;

$registration = new RegisterUser;
$authController = new AuthController($registration);

$authController->register();
