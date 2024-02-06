<?php

$serveur = "mysql:host=mysql-sitewebpro.alwaysdata.net;dbname=sitewebpro_snowstorm";
$utilisateur = "345536";
$motDePasse = "ToutEstPasBonDansLePHP2024";
$connexion = new PDO($serveur,$utilisateur,$motDePasse);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT `prix` , `presentation` FROM `KEYBOARDS`";
$result = $connexion->query($sql);

$prixArray = array(); // Tableau pour stocker les prix
$presentationArray = array(); 
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $prixArray[] = $row['prix'];
    $presentationArray[] = $row['presentation'];
}

?>


<!DOCTYPE html>
<!-- Inclusion des feuilles de style et des polices -->
<html lang="fr">
<link rel="stylesheet" type="text/css" href="Assets/CSS/Style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js" async defer></script>


<head>
    <!-- Métadonnées de la page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Snowstorm - Galerie</title>
</head>

<header>
    <!-- En-tête du site avec le logo et la navigation -->
    <div>
        <img src="Assets/IMG/image 29.png" alt="Logo du site" class="logo">
    </div>
    <nav>
        <!-- Barre de navigation avec des liens vers différentes sections -->
        <ul class="nav-bar">
            <li><a href="index.html" class="brand">SNOWSTORM.GG</a></li>
            <li><a href="Panier.html"><img src="Assets/IMG/118089 1.png" class="opt"></a></li>
            <li><a href="Assets/Sous Dossier/Account/Account.php"><img src="Assets/IMG/profil 1.png" class="opt"></a></li>
            <li><img src="Assets/IMG/image 31.png" class="opt"></a></li>
        </ul>
        <ul class="nav-bar">
            <li><a href="Boutique.html" class="nav-but">NOS PRODUITS</a></li>
            <li><a href="Personnaliser.html" class="nav-but">PERSONNALISER</a></li>
            <li><a href="Galerie.html" class="nav-but">GALERIE</a></li>
            <li><a href="Support-Sav.html" class="nav-but">SUPPORT/SAV</a></li>
            <li><a href="FAQ.html" class="nav-but">FAQ</a></li>
            <li><a href="Contact.html" class="nav-but">CONTACT</a></li>
        </ul>
    </nav>
</header>

<body>
    <!-- Corps de la page avec le titre "GALERIE" et une grille d'images -->
    <h1> GALERIE </h1>
    <div class="wrapper">
        <div class="grideGalerie">
            <!-- Affichage des prix et présentations -->
            <?php for ($i = 0; $i < count($prixArray); $i++): ?>
                <div>
                    <img src="Assets/IMG/image_<?php echo $i + 37; ?>.png" style="width:50%"><p>Reference modèle</p>
                    <p>Prix : <?= $prixArray[$i] ?></p>
                    <p class="avis">Présentation : <?= $presentationArray[$i] ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </div>  
</body>

<footer class="footer">
    <!-- Pied de page avec des sections pour les informations et les liens -->
    <ul>
        <li><img src="/Assets/IMG/image 29.png" alt="logo" class="imgFooter"></li>
        <li><h3 class="brand">SNOWSTORM</h3></li>
    </ul>
    <ul>
        <!-- Sections pour les catégories, les informations, le compte utilisateur et les réseaux sociaux -->
        <h4>Catégories</h4>
        <li><a href="">Nouveautés</a></li>
        <li><a href="">Meilleures ventes</a></li>
        <li><a href="">Classiques</a></li>
        <li><a href="">Préfaits</a></li>
        <li><a href="">Personnaliser</a></li>
    </ul>
    <ul>
        <h4>Informations</h4>
        <li><a href="">Nous contacter</a></li>
        <li><a href="">Livraisons</a></li>
        <li><a href="">Mentions légales</a></li>
        <li><a href="">Confidentialité</a></li>
        <li><a href="tos.html">Conditions d'utilisation</a></li>
    </ul>
    <ul>
        <h4>Mon compte</h4>
        <li><a href="">Mes commandes</a></li>
        <li><a href="">Mes customs</a></li>
        <li><a href="">informations</a></li>
    </ul>
    <ul>
        <h4>Nos réseaux</h4>
        <div class="reseaux">
            <a href="https://www.facebook.com/" target="_blank">
                <li class="reseauLi"><img src="/Assets/IMG/image 33.png" alt="facebook"></li></a>
            <a href="https://twitter.com/" target="_blank">
                <li class="reseauLi"><img src="/Assets/IMG/image 34.png" alt="instagram"></li></a>
            <a href="https://www.youtube.com/" target="_blank">
                <li class="reseauLi"><img src="/Assets/IMG/image 32.png" alt="youtube"></li></a>
        </div>
    </ul>
</footer>
</html>
