<?php
session_start();
if (isset($_POST["connect"])){
    if(empty($_POST["mail"])){
    } else {
        if(empty($_POST["mdp"])){
        } else {
            $Mail = htmlentities($_POST["mail"], ENT_QUOTES, "UTF-8");
            $MDP = htmlentities($_POST["mdp"], ENT_QUOTES, "UTF-8");

            include('BDDConnection.php');

            $query = $connexion->prepare("SELECT id FROM USERS WHERE USERS.mail=:mail AND USERS.mdp =:mdp");
            $query->bindParam(':mail',$Mail , PDO::PARAM_STR);
            $query->bindParam(':mdp',$MDP , PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() == 1) {
                $_SESSION['id'] = $query->fetchColumn();
                header('Location: ../../../Index.html');
            } 
        }
    }
} else {
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
    <title>Snowstorm</title>
</head>

<body>
  <div class="container-login">
    <form action="Login.php" method="post">
      <div class="row">
        <h2 style="text-align:center">Se connecter avec Google ou manuellement</h2>

        <div class="col">
          <a href="#" class="google btn">
            <i class="fa fa-google fa-fw"></i> Se connecter avec Google
          </a>
        </div>

        <div class="col">
          <div class="hide-md-lg">
            <p>Se connecter manuellement : </p>
          </div>
          
            <input type="email" placeholder="Email" name="mail">
            <input type="password" placeholder="Mot de passe" name="mdp">
            <input type="submit" name="connect" value="Se connecter">

        </div>

      </div>
    </form>
  </div>

  <div class="bottom-container">
    <div class="row">
      <div class="col">
        <a href="Register.php" style="color:white" class="btn">S'enregistrer</a>
      </div>
      <div class="col">
        <a href="#" style="color:white" class="btn">Mot de passe oublier ?</a>
      </div>
    </div>
  </div>
</body>
</html> 