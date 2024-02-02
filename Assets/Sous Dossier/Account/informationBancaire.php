<?php
    $serveur = "mysql-sitewebpro.alwaysdata.net";
    $utilisateur = "345536";
    $motDePasse = "ToutEstPasBonDansLePHP2024";
    $baseDeDonnees = "sitewebpro_snowstorm";
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }
?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/AccountGlobale.css">
  </head>
  <body>
    <form action="informationBanquere.php" method="post">
      <!-- Ajout d'un jeton CSRF pour protéger le formulaire -->
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
      <div class="container-register">
        <h1>adresse</h1>
        <p>veuillez renseigner vos informations pour la livraison ci-dessous.</p>
        <hr>

        <label for="numeroCarte"><b>numéro de la carte</b></label>
        <input type="number" placeholder="Entrer numéro de la carte" name="numeroCarte" id="PrennumeroCarteom" min="1000000000000000" max="9999999999999999"required>

        <label for="NomCarte"><b>Nom du detenteur</b></label>
        <input type="text" placeholder="Entrer Nom sur la carte" name="NomCarte" id="NomCarte" required>

        <label for="dateExpi"><b>date d'expiration</b></label>
        <input type="month" placeholder="Entrer date" name="Adresse" id="Adresse" min="01/01/1900" max="" required>
        <hr>

        <label for="cryptogramme"><b>cryptogramme de sécurité</b></label>
        <input type="number" placeholder="Entrer cryptogramme de sécurité" name="cryptogramme" id="cryptogramme">
        <hr>

        <label for="InfoPay"><b>enregistrer mes informations de payement</b></label>
        <input type="checkbox" placeholder="enregistrer mes informations de payement" name="InfoPay" id="InfoPay">
        <hr>

        <button type="submit" class="registerbtn">valider</button>
      </div>
    </form>
  </body>
</html>