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

      <label for="Prenom"><b>Prenom</b></label>
      <input type="text" placeholder="Entrer Prenom" name="Prenom" id="Prenom" required>

      <label for="Nom"><b>Nom</b></label>
      <input type="Nom" placeholder="Entrer Nom" name="Nom" id="Nom" required>

      <label for="Adresse"><b>Adresse</b></label>
      <input type="text" placeholder="Entrer Adresse" name="Adresse" id="Adresse" required>
      <hr>

      <label for="Adresse2"><b>Adresse 2</b></label>
      <input type="text" placeholder="Entrer Adresse 2" name="Adresse2" id="Adresse2">
      <hr>

      <label for="Code Postal"><b>Code Postal</b></label>
      <input type="text" placeholder="Entrer Code Postal" name="Code Postal" id="Code Postal" required>
      <hr>
      
      <label for="Ville"><b>Ville</b></label>
      <input type="text" placeholder="Entrer Ville" name="Ville" id="Ville" min="01/01/1900" max="" required>
      <hr>

      <label for="Pays"><b>Pays</b></label>
      <input type="Pays" placeholder="Entrer Pays" name="Pays" id="Pays">
      <hr>

      <label for="infSup"><b>informations supplÃ©mentaires</b></label>
      <input type="text" placeholder="Entrer informations supplémentaires" name="infSup" id="infSup">
      <hr>
      
      <label for="Ville"><b>Ville</b></label>
      <input type="text" placeholder="Entrer Ville" name="date" id="Ville" required>
      <hr>

      <button type="submit" class="registerbtn">valider</button>
    </div>
  </form>
</body>
</html> 