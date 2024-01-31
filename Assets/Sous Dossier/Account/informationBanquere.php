<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title>Connexion</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../../CSS/AccountGlobale.css">

<body>
  <form action="Register.php">
    <div class="container-register">
      <h1>adresse</h1>
      <p>veillez renseigner vos information pour la livraison ci-dessous.</p>
      <hr>

      <label for="numeroCarte"><b>numÃ©ro de la carte</b></label>
      <input type="number" placeholder="Entrer Prenom" name="numeroCarte" id="PrennumeroCarteom" required>

      <label for="NomCarte"><b>Nom du detenteur</b></label>
      <input type="text" placeholder="Entrer Nom sur la carte" name="NomCarte" id="NomCarte" required>

      <label for="Adresse"><b>Adresse</b></label>
      <input type="month" placeholder="Entrer date" name="Adresse" id="Adresse" min="01/01/1900" max="" required>
      <hr>

      <label for="cryptogramme"><b>cryptogramme de sÃ©curitÃ©</b></label>
      <input type="number" placeholder="Entrer cryptogramme de sÃ©curitÃ©" name="cryptogramme" id="cryptogramme">
      <hr>

      <label for="InfoPay"><b>enregistrer mes informations de payement</b></label>
      <input type="checkbox" placeholder="enregistrer mes informations de payement" name="InfoPay" id="InfoPay">
      <hr>

      <button type="submit" class="registerbtn">valider</button>
    </div>
  </form>
</body>
</html>