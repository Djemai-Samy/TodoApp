<?php
class UserController{
  private $email;
  private $password;

  private const MIN_PASSWORD_LENGTH = 6;


  function __construct(string $email, string $password){

    $this -> email = $email;
    $this -> password = $password;

  }

  /**
   * Acceder a la valeur de l'email
   */
  public function getEmail() : string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  function isEmailValid() : bool{
    // trouver un moyen pour tester si une sous chaine est dans une chaine
    return filter_var($this -> email, FILTER_VALIDATE_EMAIL);
  }

  function isPasswordValid() : bool{
    //Teste si la taille password est sup. a 6 ou pas:
    return strlen($this -> password) >= self::MIN_PASSWORD_LENGTH;
  }

  function isDataValid() : bool{
    return $this -> isEmailValid() && $this -> isPasswordValid();
  }
}
