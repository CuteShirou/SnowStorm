<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["mail"])) {
    } else {
        if (empty($_POST["mdp"])) {
        } else {
            if (empty($_POST["mdp2"]) or $_POST["mdp"]!=$_POST["mdp2"]){
            } else {
              if (empty($_POST["nom"])) {
              } else {
                if (empty($_POST["prenom"])) {
                  } else {
                    if (empty($_POST["dateNaissance"])) {
                      } else {
                        $Mail = htmlentities($_POST["mail"], ENT_QUOTES, "UTF-8");
                        $MDP = htmlentities($_POST["mdp"], ENT_QUOTES, "UTF-8");
                        $Nom = htmlentities($_POST["nom"], ENT_QUOTES, "UTF-8");
                        $Prenom = htmlentities($_POST["prenom"], ENT_QUOTES, "UTF-8");
                        $Naissance = htmlentities($_POST["dateNaissance"], ENT_QUOTES, "UTF-8");

                        include('BDDConnection.php');

                        $query = $connexion->prepare("INSERT INTO `USERS`(`id`, `nom`, `prenom`, `mail`, `mdp`, `date_de_naissance`) VALUES (NULL,:nom,:prenom,:mail,:mdp,:dateNaissance)");
                        $query->bindParam(':mail',$Mail , PDO::PARAM_STR);
                        $query->bindParam(':mdp',$MDP , PDO::PARAM_STR);
                        $query->bindParam(':nom',$Nom , PDO::PARAM_STR);
                        $query->bindParam(':prenom',$Prenom , PDO::PARAM_STR);
                        $query->bindParam(':dateNaissance',$Naissance , PDO::PARAM_STR);
                        $query->execute();

                        $query2 = $connexion->prepare("SELECT id FROM USERS WHERE USERS.mail=:mail AND USERS.mdp =:mdp");
                        $query2->bindParam(':mail',$Mail , PDO::PARAM_STR);
                        $query2->bindParam(':mdp',$MDP , PDO::PARAM_STR);
                        $query2->execute();

                        if ($query2->rowCount() == 1) {
                            $_SESSION['id'] = $query2->fetchColumn();
                            header('Location: Account.php');
                          } 
                        }
                    }
                }
            } 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../../CSS/AccountGlobale.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>S'enregistrer</title>
</head>

<body>
  <form method="post" action="Register.php">
    <div class="container-register">
      <h1>S'enregrister</h1>
      <p>Pour creer un compte veuillez completer le formulaire ci-dessous.</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Entrer Email" name="mail" id="email" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer mot de passe" name="mdp" id="psw" required>

      <label for="psw-repeat"><b>Repeter le mot de passe</b></label>
      <input type="password" placeholder="Repeter mot de passe" name="mdp2" id="psw-repeat" required>
      <hr>

      <label for="Nom"><b>Nom</b></label>
      <input type="text" placeholder="Entrer Nom" name="nom" id="nom" required>
      <hr>

      <label for="Prenom"><b>Prenom</b></label>
      <input type="text" placeholder="Entrer Prenom" name="prenom" id="prenom" required>
      <hr>
      
      <label for="DDN"><b>Date de naissance</b></label>
      <input type="date" placeholder="Entrer Date de naissance" name="dateNaissance" id="date" min="01/01/1900" max="" required>
      <hr>

      <p>Si vous creez un compte vous etes alors en accord avec les <a href="#">conditions d'utilisation</a>.</p>
      <button type="submit" name="submit" class="registerbtn">S'enregistrer</button>
    </div>

    <div class="container signin">
      <p>Vous avez deja un compte ? <a href="Login.php">Se connecter</a>.</p>
    </div>
  </form>
</body>
</html>