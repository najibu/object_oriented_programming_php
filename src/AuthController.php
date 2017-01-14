<?php  

namespace Acme; 

class AuthController implements RespondsToUserRegistration  {
  protected $registration;

  public function __construct(RegisterUser $registration)
  {
    $this->registration = $registration;
  }

  public function register ()
  {
    $this->registration->execute([], $this);
  }

  public function UserRegisteredSuccefully()
  {
    var_dump("Created successfully. redirect somewhere.");
  }

  public function UserRegisteredFailed()
  {
    var_dump("Created unsuccessfully. redirect back .");
  }
}