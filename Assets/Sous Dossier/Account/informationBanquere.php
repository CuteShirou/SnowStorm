<!DOCTYPE html>
<html lang="fr">
<title>Connexion</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="../../CSS/AccountGlobale.css">

<body>
  <form action="informationBanquere.php">
    <div class="container-register">
      <h1>adresse</h1>
      <p>veillez renseigner vos information pour la livraison ci-dessous.</p>
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

<?php
session_start();
include 'BDDConnection.php';
$bd = bdConnect(); //Connection a la base de donnee
if (isset($_SESSION['id'])) {
  
} else {
  (!empty($_POST))
};
?>