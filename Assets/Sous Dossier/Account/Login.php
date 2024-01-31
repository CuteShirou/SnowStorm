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
    <form action="Login.php">
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

          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="submit" value="Login">
        </div>

      </div>
    </form>
  </div>

  <div class="bottom-container">
    <div class="row">
      <div class="col">
        <a href="#" style="color:white" class="btn">S'enregistrer</a>
      </div>
      <div class="col">
        <a href="#" style="color:white" class="btn">Mot de passe oubliÃ©e ?</a>
      </div>
    </div>
  </div>
</body>
</html> 