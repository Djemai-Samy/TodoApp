# Road map

On va créer une todo liste avec un système d'authentification.

## Base de donnée

Table: users: id, email, password, avatarURL, role DONE

Table: todos: id, contenu, date, isDone, auteurID DONE

## Page login

- Un formulaire pour s'inscrire DONE
- Script pour ajouter un user dans la base de données DONE

- formulaire de connection DONE
- script pour verifier si l'utilisateur a donné un email et password valide DONE
- Stocker les infos (id, email, avatar, role) quelque part: session DONE

- Mieux gerer les erreurs.

## Page Profil

- Afficher l'avatar de l'utilisateur, sinon afficher une image par défaut. DONE
- Un formulaire pour changer l'image de profil.DONE
- Un script (/routes/uploadAvatar.php), enregistre l'image, et met a jour l'utilisateur dans la base de données.DONE

Le todo: il faut TodoController, TodoModel.

- Un formulaire pour ajouter des taches. DONE
- script pour ajouter un todo dans la base données. DONE

- afficher la liste des taches de l'utilisateur. DONE
- Ajouter l'option pour valider une tache
- Ajouter l'option pour supprimer une tache

## Animer le bouton du menu
