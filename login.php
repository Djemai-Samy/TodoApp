<!DOCTYPE html>
<html lang="en">
<?php
  $title="Connexion";
  include_once "./components/head.php";
?>
  <body>
    <?php
      include_once "./components/navbar.php";
    ?>
    
    <h1>Se connecter</h1>

    <main>
      <section>
        <h2>Inscription</h2>
        <form action="/routes/signup.php" method="post">
          <input type="email" name="email" placeholder="john.doe@exemple.com" />
          <input type="password" name="password" placeholder="Mot de passe" />
          <button>Valider</button>
        </form>
      </section>
    </main>
    
  </body>
</html>