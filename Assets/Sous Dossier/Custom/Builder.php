<php

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
    <title>Snowstorm - Builder</title>
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
    <!-- Corps de la page avec le titre "Référence modèle" et différentes sections pour le processus de personnalisation -->
    <h3>Référence modèle</h3>
    <div class="steps">
        <!-- Section pour les étapes du processus -->
        <p class="paraSelect">Étape 1 : Choix de la base</p>
        <div class="uncomplete">
            <!-- Bloc indiquant les étapes incomplètes -->
            <a href="" class="para">2</a>
            <a href="" class="para">3</a>
            <a href="" class="para">4</a>
        </div>
        <div class="saver">
            <!-- Bouton pour sauvegarder la configuration -->
            <a href="" class="save">Sauvegarder ma configuration</a>
        </div>
    </div>
    <div class="picBuilder">
        <!-- Section pour l'affichage de l'image de prévisualisation -->
        <img src="../../IMG/image 10.png" alt="Preview" class="picItself">
    </div>
    <div class="switch">
        <!-- Section pour le choix du switch avec une liste déroulante -->
        <p>Choix du switch</p>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <!-- Options de la liste déroulante pour les types de switch -->
                <a href="#">Cherry Red</a>
                <a href="#">Cherry Brown</a>
                <a href="#">Cherry Blue</a>
                <a href="#">Gateron Red</a>
                <a href="#">Gateron Brown</a>
                <a href="#">Gateron Blue</a>
                <a href="#">Gateron Green</a>
                <a href="#">Gateron Yellow</a>
                <a href="#">Gateron Black</a>
                <a href="#">Gateron Clear</a>
            </div>
        </div>
    </div>
    <!-- Section pour la sélection de la couleur de backplate avec des boutons radio -->
    <div class="backplate">
        <p>Couleur de backplate :</p>
            <label class="form-control">
                <input type="radio" name="radio" />
                Nom de la couleur + prix si frais supplémentaires
            </label>
            <label class="form-control">
                <input type="radio" name="radio" />
                Nom de la couleur + prix si frais supplémentaires
            </label>
            <label class="form-control">
                <input type="radio" name="radio" />
                Nom de la couleur + prix si frais supplémentaires
            </label>
            <label class="form-control">
                <input type="radio" name="radio" />
                Nom de la couleur + prix si frais supplémentaires
            </label>
            <label class="form-control">
                <input type="radio" name="radio" />
                Nom de la couleur + prix si frais supplémentaires
            </label>
            <label class="form-control">
                <input type="radio" name="radio" />
                Nom de la couleur + prix si frais supplémentaires
            </label>
    </div>
    <h1 id="productpres">Présentation Produit</h1>
    <div class="present">
        <div class="lineone">
            <img src="../../IMG/Rectangle 128.png" alt="Preview Clavier">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
        </div>
        <div class="linetwo">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
            <img src="../../IMG/Rectangle 129.png" alt="">
        </div>
    </div>
    <h1 class="productFiche">Fiche Produit</h1>
    <div class="ficheProduct">
        <h2>Responsive Table</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>.</th>
                    <th>.</th>
                    <th>.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>INFORMATIONS GENERALES</td>
                    <td>Désignation</td>
                    <td><?= $Designation ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Marque</td>
                    <td><?= $Marque ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Modèle</td>
                    <td><?= $Modele ?></td>
                </tr>
                <tr>
                    <td>FORMAT DU CLAVIER/td>
                    <td>Format</td>
                    <td><?= $Format ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Compact</td>
                    <td><?= $Compact ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>TKL</td>
                    <td><?= $TKL ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Norme du clavier</td>
                    <td><?= $NormeDuClavier ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Localisation</td>
                    <td><?= $Localisation ?></td>
                </tr>
                <tr>
                    <td>INTERFACE</td>
                    <td>Sans-fil</td>
                    <td><?= $SansFil ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Interface avec l'ordinateur</td>
                    <td><?= $Interface ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Technologie de connexion du clavier</td>
                    <td><?= $connexion ?></td>
                </tr>
                <tr>
                    <td>ERGONOMIE</td>
                    <td>Type de touches</td>
                    <td><?= $touches ?></td>
                </tr>
                <tr>
                    <td</td>
                    <td>Type de switch</td>
                    <td><?= $switch ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Clavier rétroéclairé</td>
                    <td><?= $retroeclaire ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Rétroéclairage RGB</td>
                    <td><?= $RGB ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Touches macro</td>
                    <td><?= $macro ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Touches multimédia</td>
                    <td><?= $multimedia ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pavé numérique</td>
                    <td><?= $PaveNumerique ?></td>
                </tr>
                <tr>
                    <td>CARACTERISTIQUES PHYSIQUES</td>
                    <td>Couleur</td>
                    <td><?= $Couleur ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Largeur</td>
                    <td><?= $Largeur ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hauteur</td>
                    <td><?= $Hauteur ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Profondeur</td>
                    <td><?= $Profondeur ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Poids</td>
                    <td><?= $Poids ?></td>
                </tr>
                <tr>
                    <td>ALIMENTATION</td>
                    <td>Type d'alimentation</td>
                    <td><?= $alimentation ?></td>
                </tr>
                <tr>
                    <td>COMPATIBILITE</td>
                    <td>OS supporté(s)</td>
                    <td><?= $OS ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Utilisation</td>
                    <td><?= $Utilisation ?></td>
                </tr>
                <tr>
                    <td>GARANTIES</td>
                    <td>Garantie commerciale</td>
                    <td><?= $GarantieCommerciale ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Garantie légale</td>
                    <td><?= $GarantieLegale ?></td>
                </tr>
                <tbody>
            </table>
        </div>
    </div>
    <div class="avisDiv">
        <div class="avisBlock">
            <div class="writter">
                <img class="profiles" src="../../IMG/profil 1-5.png" alt="ProfilUwU">
                <p>Jean-Michel Jarre</p>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="stars">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_5.svg" alt="fullstar">
            </div>
        </div>
        <div class="avisBlock">
            <div class="writter">
                <img class="profiles" src="../../IMG/profil 1-5.png" alt="ProfilUwU">
                <p>Jean-Marie Bigard</p>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="stars">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_5.svg" alt="fullstar">
            </div>
        </div>
        <div class="avisBlock">
            <div class="writter">
                <img class="profiles" src="../../IMG/profil 1-5.png" alt="ProfilUwU">
                <p>Peter Laposte</p>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="stars">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_5.svg" alt="fullstar">
            </div>
        </div>
        <div class="avisBlock">
            <div class="writter">
                <img class="profiles" src="../../IMG/profil 1-5.png" alt="ProfilUwU">
                <p>Marie Boite</p>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="stars">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_4.svg" alt="fullstar">
                <img src="../../IMG/Star_5.svg" alt="fullstar">
            </div>
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