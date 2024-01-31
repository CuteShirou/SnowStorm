<form action="Register.php">
  <div class="container-register">
    <h1>S'enregrister</h1>
    <p>Pour créer un compte veuillez compléter le formulaire ci-dessous.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Entrer Email" name="email" id="email" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer mot de passe" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Répéter le mot de passe</b></label>
    <input type="password" placeholder="Répéter mot de passe" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <label for="Nom"><b>Nom</b></label>
    <input type="text" placeholder="Entrer Nom" name="nom" id="nom" required>
    <hr>

    <label for="Prénom"><b>Prénom</b></label>
    <input type="text" placeholder="Entrer Prénom" name="prenom" id="prenom" required>
    <hr>
    
    <label for="Prénom"><b>Date de naissance</b></label>
    <input type="date" placeholder="Entrer Date de naissance" name="date" id="date" min="01/01/1900" max="" required>
    <hr>

    <p>Si vous créez un compte vous êtes alors en accord avec les <a href="#">conditions d'utilisation</a>.</p>
    <button type="submit" class="registerbtn">S'enregistrer</button>
  </div>

  <div class="container signin">
    <p>Vous avez déjà un compte ? <a href="#">Se connecter</a>.</p>
  </div>
</form>