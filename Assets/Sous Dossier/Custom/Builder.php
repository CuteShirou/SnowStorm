<?php

include('../Account/BDDConnection.php');

$sql = "SELECT * FROM `KEYBOARDS` WHERE id=1";
$result = $connexion->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
    
function Bool($booleen) {
    if ($booleen == 1) {
        return "oui";
    } else {
        return "non";
    }
}

$Designation = $row['designation'];
$Marque = $row['marque'];
$Modele = $row['modele'];
$Format = $row['format'];
$Compact = Bool($row['compact']); //bool
$TKL = Bool($row['tkl']); //bool
$NormeDuClavier = $row['norme'];
$Localisation = $row['localisation'];
$SansFil = Bool($row['sansfil']); //bool
$Interface = $row['interface_Ordi'];
$TypeConnexion = $row['techno_Connexion_Clavier'];
$touches = $row['touches'];
$switch = $row['switch'];
$retroeclaire = $row['calvier_Retroeclaire'];
$RGB = $row['retroeclairage_RGB'];
$macro = $row['macro'];
$multimedia = $row['sansfil'];
$PaveNumerique = $row['pave_Numerique'];
$Couleur = $row['couleur'];
$Largeur = $row['largeur'];
$Hauteur = $row['hauteur'];
$Profondeur = $row['profondeur'];
$Poids = $row['poids'];
$alimentation = $row['alimentation'];
$ListOS = $row['OS'];
$Utilisation = $row['gamer'];
$GarantieCommerciale = $row['garantie_Commerciale'];
$GarantieLegale = $row['garantie_Legale'];
$presentation = $row['presentation'];

?>

<!DOCTYPE html>
<!-- Inclusion des feuilles de style et des polices -->
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../../CSS/builder.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js" async defer></script>

<head>
    <!-- Metadonnees de la page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Snowstorm - Builder</title>
</head>

<header>
    <!-- En-tete du site avec le logo et la navigation -->
    <div>
        <img src="../../IMG/image 29.png" alt="Logo du site" class="logo">
    </div>
    <nav>
        <!-- Barre de navigation avec des liens vers differentes sections -->
        <ul class="nav-bar">
            <li><a href="../../../index.html" class="brand">SNOWSTORM.GG</a></li>
            <li><a href="../../PHP/Panier.php"><img src="../../IMG/118089 1.png" class="opt"></a></li>
            <li><a href="../Account/Account.php"><img src="../../IMG/profil 1.png" class="opt"></a></li>
            <li><img src="../../IMG/image 31.png" class="opt"></a></li>
        </ul>
        <ul class="nav-bar">
            <li><a href="../../../Boutique.html" class="nav-but">NOS PRODUITS</a></li>
            <li><a href="../../../Personnaliser.html" class="nav-but">PERSONNALISER</a></li>
            <li><a href="../../../Galerie.php" class="nav-but">GALERIE</a></li>
            <li><a href="../../../Support-Sav.html" class="nav-but">SUPPORT/SAV</a></li>
            <li><a href="../../../FAQ.html" class="nav-but">FAQ</a></li>
            <li><a href="../../..//PHP/Contact.php" class="nav-but">CONTACT</a></li>
        </ul>
    </nav>
</header>

<body>
    <section>
        <div class="step step-1" data-step="1">
            <!-- Corps de la page avec le titre "Référence modèle" et différentes sections pour le processus de personnalisation -->
            <h3>Référence modèle</h3>
            <div class="steps">
                <!-- Section pour les étapes du processus -->
                <p class="paraSelect">Étape 1 : Choix de la base</p>
                <div class="uncomplete">
                    <!-- Bloc indiquant les étapes incomplètes -->
                    <a href="#" class="para">2</a>
                    <a href="#" class="para">3</a>
                    <a href="#" class="para">4</a>
                </div>
                <div class="saver">
                    <!-- Bouton pour sauvegarder la configuration -->
                    <a href="#" class="save">Sauvegarder ma configuration</a>
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
                <div class="backSuiv">
                    <div class="colorChoice">
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
                    <a href="" class="suivant">Suivant</a>
                </div>
            </div>
        </div>
        <div class="step step-2" data-step="2">
            <div class="steps">
                <!-- Section pour les étapes du processus -->
                <p class="para">Étape 1 : Choix de la base</p>
                <div class="complete">
                    <!-- Bloc indiquant les étapes complétées -->
                    <a href="#" class="para">2</a>
                    <a href="#" class="para">3</a>
                    <a href="#" class="para">4</a>
                </div>
                <div class="saver">
                    <!-- Bouton pour sauvegarder la configuration -->
                    <a href="#" class="save">Sauvegarder ma configuration</a>
                </div>
            </div>
            <!-- Section pour le choix de la couleur de la base avec des boutons radio -->
            <div class="baseColor">
                <p>Choix de la couleur de la base :</p>
                <div class="colorChoice">
                    <label class="form-control">
                        <input type="radio" name="baseRadio" />
                        Couleur 1
                    </label>
                    <label class="form-control">
                        <input type="radio" name="baseRadio" />
                        Couleur 2
                    </label>
                    <label class="form-control">
                        <input type="radio" name="baseRadio" />
                        Couleur 3
                    </label>
                    <!-- Ajoutez autant d'options que nécessaire -->
                </div>
                <a href="" class="suivant">Suivant</a>
            </div>
        </div>

        <h1 id="productpres">Présentation Produit</h1>
        <div class="present">
            <div class="lineone">
                <img src="../../IMG/Rectangle 128.png" alt="Preview Clavier">
                <p><td><?= $presentation ?></td></p>
            </div>
            <div class="linetwo">
                <p><td><?= $presentation ?></td></p>
                <img src="../../IMG/Rectangle 129.png" alt="">
            </div>
        </div>
    </section>
    <section>
    <div class="steps">
        <!-- Section pour les etapes du processus -->
        <p class="para">etape 1 : Choix de la base</p>
        <div class="complete">
            <!-- Bloc indiquant les etapes completees -->
            <a href="#" class="para">2</a>
            <a href="#" class="para">3</a>
            <a href="#" class="para">4</a>
        </div>
        <div class="saver">
            <!-- Bouton pour sauvegarder la configuration -->
            <a href="#" class="save">Sauvegarder ma configuration</a>
        </div>
    </div>
    <!-- Section pour le choix de la couleur de la base avec des boutons radio -->
    <div class="baseColor">
        <p>Choix de la couleur de la base :</p>
        <div class="colorChoice">
            <label class="form-control">
                <input type="radio" name="baseRadio" />
                Couleur 1
            </label>
            <label class="form-control">
                <input type="radio" name="baseRadio" />
                Couleur 2
            </label>
            <label class="form-control">
                <input type="radio" name="baseRadio" />
                Couleur 3
            </label>
            <!-- Ajoutez autant d'options que necessaire -->
        </div>
        <a href="#" class="suivant" onclick="goToStep(2)">Suivant</a>
    </div>
    </section>

    <h1 class="productFiche">Fiche Produit</h1>
    <div class="ficheProduct">
        <h2>Fiche Produit</h2>
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
                    <td>Designation</td>
                    <td><?= $Designation ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Marque</td>
                    <td><?= $Marque ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Modele</td>
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
                    <td><?= $TypeConnexion ?></td>
                </tr>
                <tr>
                    <td>ERGONOMIE</td>
                    <td>Type de touches</td>
                    <td><?= $touches ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Type de switch</td>
                    <td><?= $switch ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Clavier retroeclaire</td>
                    <td><?= $retroeclaire ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Retroeclairage RGB</td>
                    <td><?= $RGB ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Touches macro</td>
                    <td><?= $macro ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Touches multimedia</td>
                    <td><?= $multimedia ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pave numerique</td>
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
                    <td>OS supporte(s)</td>
                    <td><?= $ListOS ?></td>
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
                    <td>Garantie legale</td>
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
        <h4>Categories</h4>
        <li><a href="#">Nouveautes</a></li>
        <li><a href="#">Meilleures ventes</a></li>
        <li><a href="#">Classiques</a></li>
        <li><a href="#">Prefaits</a></li>
        <li><a href="#">Personnaliser</a></li>
    </ul>
    <ul>
        <h4>Informations</h4>
        <li><a href="#">Nous contacter</a></li>
        <li><a href="#">Livraisons</a></li>
        <li><a href="#">Mentions legales</a></li>
        <li><a href="#">Confidentialite</a></li>
        <li><a href="../../../tos.html">Conditions d'utilisation</a></li>
    </ul>
    <ul>
        <h4>Mon compte</h4>
        <li><a href="#">Mes commandes</a></li>
        <li><a href="#">Mes customs</a></li>
        <li><a href="#">informations</a></li>
    </ul>
    <ul>
        <h4>Nos reseaux</h4>
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
<script src="../../JS/builder.js"></script>