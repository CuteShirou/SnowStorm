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
  <form action="Register.php">
    <div class="container-register">
      <h1>S'enregrister</h1>
      <p>Pour crÃ©er un compte veuillez complÃ©ter le formulaire ci-dessous.</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Entrer Email" name="email" id="email" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer mot de passe" name="psw" id="psw" required>

      <label for="psw-repeat"><b>RÃ©pÃ©ter le mot de passe</b></label>
      <input type="password" placeholder="RÃ©pÃ©ter mot de passe" name="psw-repeat" id="psw-repeat" required>
      <hr>

      <label for="Nom"><b>Nom</b></label>
      <input type="text" placeholder="Entrer Nom" name="nom" id="nom" required>
      <hr>

      <label for="PrÃ©nom"><b>PrÃ©nom</b></label>
      <input type="text" placeholder="Entrer PrÃ©nom" name="prenom" id="prenom" required>
      <hr>
      
      <label for="PrÃ©nom"><b>Date de naissance</b></label>
      <input type="date" placeholder="Entrer Date de naissance" name="date" id="date" min="01/01/1900" max="" required>
      <hr>

      <p>Si vous crÃ©ez un compte vous Ãªtes alors en accord avec les <a href="#">conditions d'utilisation</a>.</p>
      <button type="submit" class="registerbtn">S'enregistrer</button>
    </div>

    <div class="container signin">
      <p>Vous avez dÃ©jà un compte ? <a href="#">Se connecter</a>.</p>
    </div>
  </form>
</body>
</html> 