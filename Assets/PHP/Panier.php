<?
function panierEstVide() {
    // Vous devez inclure ici la logique pour vérifier si le panier est vide
    // Par exemple, vous pouvez vérifier si la session panier est vide
    // Si votre panier est stocké dans une session nommée "panier", vous pouvez utiliser :
    return empty($_SESSION['panier']);
}

// Redirige vers la page de commande si le panier n'est pas vide
function redirigerVersCommande() {
    header("Location: Commande.php");
    exit;
}

// Vérifie si le panier est vide lorsque le bouton "Passer la commande" est cliqué
if (isset($_POST['passer_commande'])) {
    if (panierEstVide()) {
        // Si le panier est vide, afficher un message d'erreur
        echo "<script>alert('Panier vide');</script>";
    } else {
        // Si le panier n'est pas vide, rediriger vers la page de commande
        redirigerVersCommande();
    }
}
?>
<!DOCTYPE html>
<!-- Inclusion des feuilles de style et des polices -->
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="../JS/Panier.js"></script>

<head>
    <!-- Métadonnées de la page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Snowstorm - PANIER</title>
</head>

<header>
    <!-- En-tête du site avec le logo et la navigation -->
    <div>
        <img src="../IMG/image 29.png" alt="Logo du site" class="logo">
    </div>
    <nav>
        <!-- Barre de navigation avec des liens vers différentes sections -->
        <ul class="nav-bar">
            <li><a href="../../index.html" class="brand">SNOWSTORM.GG</a></li>
            <li><a href="Panier.php"><img src="../IMG/118089 1.png" class="opt"></a></li>
            <li><a href="../Sous Dossier/Account/Account.php"><img src="../IMG/profil 1.png" class="opt"></a></li>
            <li><img src="../IMG/image 31.png" class="opt"></a></li>
        </ul>
        <ul class="nav-bar">
            <li><a href="../../Boutique.html" class="nav-but">NOS PRODUITS</a></li>
            <li><a href="../../Personnaliser.html" class="nav-but">PERSONNALISER</a></li>
            <li><a href="Galerie.php" class="nav-but">GALERIE</a></li>
            <li><a href="../../Support-Sav.html" class="nav-but">SUPPORT/SAV</a></li>
            <li><a href="../../FAQ.html" class="nav-but">FAQ</a></li>
            <li><a href="Contact.php" class="nav-but">CONTACT</a></li>
        </ul>
    </nav>
</header>

<body>
    <h1> PANIER </h1>
    <table class="table">
        <thead>
            <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
        </thead>
        <tbody id="cart-tablebody"></tbody>
    </table>
    
    <p>Sous total : <span class="subtotal"></span>€</p>
    
    <button id="confirm-command">Passer la commande</button>
</body>

<footer class="footer">
    <ul>
        <li><img src="../IMG/image 29.png" alt="logo" class="imgFooter"></li>
        <li><h3 class="brand">SNOWSTORM</h3></li>
    </ul>
    <ul>
        <h4>Catégories</h4>
        <li><a href="#">Nouveautés</a></li>
        <li><a href="#">Meilleures ventes</a></li>
        <li><a href="#">Classiques</a></li>
        <li><a href="#">Préfaits</a></li>
        <li><a href="#">Personnaliser</a></li>
    </ul>
    <ul>
        <h4>Informations</h4>
        <li><a href="#">Nous contacter</a></li>
        <li><a href="#">Livraisons</a></li>
        <li><a href="#">Mentions légales</a></li>
        <li><a href="#">Confidentialité</a></li>
        <li><a href="../../tos.html">Conditions d'utilisation</a></li>
    </ul>
    <ul>
        <h4>Mon compte</h4>
        <li><a href="#">Mes commandes</a></li>
        <li><a href="#">Mes customs</a></li>
        <li><a href="#">informations</a></li>
    </ul>
    <ul>
        <h4>Nos réseaux</h4>
        <div class="reseaux">
            <li class="reseauLi"><img src="../IMG/image 33.png" alt="facebook"></li>
            <li class="reseauLi"><img src="../IMG/image 34.png" alt="instagram"></li>
            <li class="reseauLi"><img src="../IMG/image 32.png" alt="youtube"></li>
        </div>
    </ul>
</footer>