<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Page de profil";
    include_once "./components/head.php";
  ?>
  <body>
    <?php
      include_once "./components/navbar.php";
    ?>
   
    <div class="profil-infos">
      <img id="avatar" src='<?= "/images/users/". $_SESSION['avatar'] ?>'> 
      <p><?= $_SESSION['email'] ?></p>

      <form action="/routes/uploadAvatar.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar" accept="image/png, image/jpeg" />
        <button type="submit">Enregistrer</button>
      </form>
    </div>

    <section>
      <h2>Todos</h2>
      <form action="/routes/addTodo.php" method="POST">
        <input type="text" name="todo" placeholder="Ajouter une tache" />
        <button>Ajouter +</button>
      </form>
    </section>

  </body>
</html>