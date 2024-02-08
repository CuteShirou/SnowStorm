<?php
include('../Sous Dossier/Account/BDDConnection.php');
?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
<link rel="stylesheet" type="text/css" href="../CSS/Contact.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js" async defer></script>

<head>
    <!-- Métadonnées de la page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Snowstorm - Contact</title>
</head>

<header>
    <!-- En-tête du site avec le logo et la navigation -->
    <div>
        <img src="../IMG/image 29.png" alt="Logo du site" class="logo">
    </div>
    <nav>
        <!-- Barre de navigation avec des liens vers différentes sections -->
        <ul class="nav-bar">
            <li><a href="../../../index.html" class="brand">SNOWSTORM.GG</a></li>
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
    <div class="container">
        <form action="Contact.php" class="formul">
        
            <input type="text" id="fname" name="Prénom" placeholder="Prénom">
        
            <input type="text" id="lname" name="Nom" placeholder="Nom">
        
            <input type="email" id="email" name="email" placeholder="Email">
        
            <textarea id="subject" name="subject" placeholder="Message..." style="height:200px"></textarea>
        
            <input type="submit" value="Envoyé">
        
        </form>
    </div> 
</body>

<footer class="footer">
    <ul>
        <li><img src="/Assets/IMG/image 29.png" alt="logo" class="imgFooter"></li>
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
            <li class="reseauLi"><img src="/Assets/IMG/image 33.png" alt="facebook"></li>
            <li class="reseauLi"><img src="/Assets/IMG/image 34.png" alt="instagram"></li>
            <li class="reseauLi"><img src="/Assets/IMG/image 32.png" alt="youtube"></li>
        </div>
    </ul>
</footer>