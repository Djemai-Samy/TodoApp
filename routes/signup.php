<?php
  include_once "../controllers/UserController.php";


  if(isset($_POST['email'], $_POST['password'])){
    //Istancier la classe
    $user = new UserController($_POST['email'], $_POST['password']);

    if($user -> isDataValid()){
      //Todo: Tester si l'utilisateur s'est deja inscrit
      //ajouter le user dans la DB:
      if($user -> exist()){
        header('Location: /login?inscription=error&emailError=EmailExist');
        die();
      }
      $user -> signupUser();

    }else{
      $returnData = $user -> getErrors();
      header('Location: /login.php?inscription=error&' . $returnData);
    }

  }else{
    header('Location: /login.php');
  }


  //Exercice:
  // 1. Créer une classe 'UserController'.
  // 2. Constructeur(email, password)
  // 3. ajouter des méthodes:
  //  3.1. ajouter un Getter et setter pour email.
  //  3.2 isEmailValid: Tester si l'email possède un @ -> return boolean
  //  3.3 isPasswordValid: Tester si le mot de passe est non vide et sup. a 6 -> return boolean
  //  3.4 isDataValid: retourne si email valide ET password valide. -> return boolean
