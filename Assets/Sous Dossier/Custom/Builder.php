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
            <li><a href="../../../Default.html" class="nav-but">NOS PRODUITS</a></li>
            <li><a href="../../../Personnaliser.html" class="nav-but">PERSONNALISER</a></li>
            <li><a href="../../PHP\Galerie.php" class="nav-but">GALERIE</a></li>
            <li><a href="../../../Default.html" class="nav-but">SUPPORT/SAV</a></li>
            <li><a href="../../../FAQ.html" class="nav-but">FAQ</a></li>
            <li><a href="../../PHP/Contact.php" class="nav-but">CONTACT</a></li>
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
                    <a href="" class="suivant" style="margin-top: -10vw;">Suivant</a>
                </div>
            </div>
        </div>
        <div class="step step-2" data-step="2">
            <div class="steps">
                <!-- Section pour les étapes du processus -->
                <div class="uncomplete">
                    <a href="" class="para">1</a>
                </div>
                <p class="paraSelect">Étape 2 : Choix de la couleur</p>
                <div class="uncomplete">
                    <!-- Bloc indiquant les étapes complétées -->
                    <a href="#" class="para">3</a>
                    <a href="#" class="para">4</a>
                </div>
                <div class="saver">
                    <!-- Bouton pour sauvegarder la configuration -->
                    <a href="#" class="save">Sauvegarder ma configuration</a>
                </div>
            </div>
            <!-- Section pour le choix de la couleur de la base avec des boutons radio -->
            <div class="picBuilder">
                <!-- Section pour l'affichage de l'image de prévisualisation -->
                <img src="../../IMG/layout.png" width="754px" height="264px" style="visibility:hidden" alt="Preview">
            </div>
            <div class="key-container">
                <div class="key key1" id="key1"></div>
                <div class="key key1" id="key2" style="left: 608px;"></div>
                <div class="key key1" id="key3" style="left: 657px;"></div>
                <div class="key key1" id="key4" style="left: 706px;"></div>
                <div class="key key1" id="key5" style="left: 755px;"></div>
                <div class="key key1" id="key6" style="left: 804px;"></div>
                <div class="key key1" id="key7" style="left: 853px;"></div>
                <div class="key key1" id="key8" style="left: 902px;"></div>
                <div class="key key1" id="key9" style="left: 951px;"></div>
                <div class="key key1" id="key10" style="left: 1000px;"></div>
                <div class="key key1" id="key11" style="left: 1049px;"></div>
                <div class="key key1" id="key12" style="left: 1098px;"></div>
                <div class="key key1" id="key13" style="left: 1147px;"></div>
                <div class="key key1" id="key14" style="width: 98px; left: 1196px;"></div>
                <div class="key key2" id="key15" style="width: 74px;"></div>
                <div class="key key2" id="key16" style="left: 633px;"></div>
                <div class="key key2" id="key17" style="left: 682px;"></div>
                <div class="key key2" id="key18" style="left: 731px;"></div>
                <div class="key key2" id="key19" style="left: 780px;"></div>
                <div class="key key2" id="key20" style="left: 829px;"></div>
                <div class="key key2" id="key21" style="left: 878px;"></div>
                <div class="key key2" id="key22" style="left: 927px;"></div>
                <div class="key key2" id="key23" style="left: 976px;"></div>
                <div class="key key2" id="key24" style="left: 1025px;"></div>
                <div class="key key2" id="key25" style="left: 1074px;"></div>
                <div class="key key2" id="key26" style="left: 1123px;"></div>
                <div class="key key2" id="key27" style="left: 1172px;"></div>
                <div class="key key2" id="key28" style="width: 74px;left: 1221px;"></div>
                <div class="key key3" id="key29" style="width: 86px;"></div>
                <div class="key key3" id="key30" style="left: 645px;"></div>
                <div class="key key3" id="key31" style="left: 694px;"></div>
                <div class="key key3" id="key32" style="left: 743px;"></div>
                <div class="key key3" id="key33" style="left: 792px;"></div>
                <div class="key key3" id="key34" style="left: 841px;"></div>
                <div class="key key3" id="key35" style="left: 890px;"></div>
                <div class="key key3" id="key36" style="left: 939px;"></div>
                <div class="key key3" id="key37" style="left: 988px;"></div>
                <div class="key key3" id="key38" style="left: 1037px;"></div>
                <div class="key key3" id="key39" style="left: 1086px;"></div>
                <div class="key key3" id="key40" style="left: 1135px;"></div>
                <div class="key key3" id="key41" style="width: 110px; left: 1184px;"></div>
                <div class="key key4" id="key42" style="width: 98px;"></div>
                <div class="key key4" id="key43" style="left: 657px;"></div>
                <div class="key key4" id="key44" style="left: 706px;"></div>
                <div class="key key4" id="key45" style="left: 755px;"></div>
                <div class="key key4" id="key46" style="left: 804px;"></div>
                <div class="key key4" id="key47" style="left: 853px;"></div>
                <div class="key key4" id="key48" style="left: 902px;"></div>
                <div class="key key4" id="key49" style="left: 951px;"></div>
                <div class="key key4" id="key50" style="left: 1000px;"></div>
                <div class="key key4" id="key51" style="left: 1049px;"></div>
                <div class="key key4" id="key52" style="left: 1098px;"></div>
                <div class="key key4" id="key53" style="left: 1147px;"></div>
                <div class="key key4" id="key54" style="left: 1196px;"></div>
                <div class="key key4" id="key55" style="left: 1245px;"></div>
                <div class="key key5" id="key56"></div>
                <div class="key key5" id="key57" style="left: 608px;"></div>
                <div class="key key5" id="key58" style="left: 657px;"></div>
                <div class="key key5" id="key59" style="left: 706px;"></div>
                <div class="key key5" id="key60" style="left: 755px; width: 343px;"></div>
                <div class="key key5" id="key61" style="left: 1098px;"></div>
                <div class="key key5" id="key62" style="left: 1147px;"></div>
                <div class="key key5" id="key63" style="left: 1196px;"></div>
                <div class="key key5" id="key64" style="left: 1245px;"></div>
            </div>
            <div id="colorOptions">
                <div class="color-box" style="background-color: #E35656;"></div>
                <div class="color-box" style="background-color: #764848;"></div>
                <div class="color-box" style="background-color: #6CAB8D;"></div>
                <div class="color-box" style="background-color: #88EBD3;"></div>
                <div class="color-box" style="background-color: #4B74DD;"></div>
                <div class="color-box" style="background-color: #1E1AD8;"></div>
                <div class="color-box" style="background-color: #FFEE59;"></div>
                <div class="color-box" style="background-color: #FDF4A0;"></div>
                <div class="color-box" style="background-color: #FFFEFE;"></div>
                <div class="color-box" style="background-color: #6e6e6e;"></div>
            </div>
            <div>
                <button id="setColorButton" class="suivant" style="margin-left: 3vw;">Appliquer la couleur au clavier entier</button>
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
                        <td>information general</td>
                        <td>Désignation</td>
                        <td>$Désignation</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Marque</td>
                        <td>Content 2</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Modèle</td>
                        <td>Content 3</td>
                    </tr>
                    <tr>
                        <td>Content 4</td>
                        <td>Format</td>
                        <td>Content 4</td>
                    </tr>
                    <tr>
                        <td>Content 5</td>
                        <td>Compact</td>
                        <td>Content 5</td>
                    </tr>
                    <tr>
                        <td>Content 6</td>
                        <td>TKL</td>
                        <td>Content 6</td>
                    </tr>
                    <tr>
                        <td>Content 7</td>
                        <td>Norme du clavier</td>
                        <td>Content 7</td>
                    </tr>
                    <tr>
                        <td>Content 8</td>
                        <td>Localisation</td>
                        <td>Content 8</td>
                    </tr>
                    <tr>
                        <td>Content 9</td>
                        <td>Sans-fil</td>
                        <td>Content 9</td>
                    </tr>
                    <tr>
                        <td>Content 10</td>
                        <td>Interface avec l'ordinateur</td>
                        <td>Content 10</td>
                    </tr>
                    <tr>
                        <td>Content 11</td>
                        <td>Technologie de connexion du clavier</td>
                        <td>Content 11</td>
                    </tr>
                    <tr>
                        <td>Content 12</td>
                        <td>Type de touches</td>
                        <td>Content 12</td>
                    </tr>
                    <tr>
                        <td>Content 13</td>
                        <td>Type de switch</td>
                        <td>Content 13</td>
                    </tr>
                    <tr>
                        <td>Content 14</td>
                        <td>Clavier rétroéclairé</td>
                        <td>Content 14</td>
                    </tr>
                    <tr>
                        <td>Content 15</td>
                        <td>Rétroéclairage RGB</td>
                        <td>Content 15</td>
                    </tr>
                    <tr>
                        <td>Content 16</td>
                        <td>Touches macro</td>
                        <td>Content 16</td>
                    </tr>
                    <tr>
                        <td>Content 17</td>
                        <td>Touches multimédia</td>
                        <td>Content 17</td>
                    </tr>
                    <tr>
                        <td>Content 18</td>
                        <td>Pavé numérique</td>
                        <td>Content 18</td>
                    </tr>
                    <tr>
                        <td>Content 19</td>
                        <td>Couleur</td>
                        <td>Content 19</td>
                    </tr>
                    <tr>
                        <td>Content 20</td>
                        <td>Largeur</td>
                        <td>Content 20</td>
                    </tr>
                    <tr>
                        <td>Content 21</td>
                        <td>Hauteur</td>
                        <td>Content 21</td>
                    </tr>
                    <tr>
                        <td>Content 22</td>
                        <td>Profondeur</td>
                        <td>Content 22</td>
                    </tr>
                    <tr>
                        <td>Content 23</td>
                        <td>Poids</td>
                        <td>Content 23</td>
                    </tr>
                    <tr>
                        <td>Content 24</td>
                        <td>Type d'alimentation</td>
                        <td>Content 24</td>
                    </tr>
                    <tr>
                        <td>Content 25</td>
                        <td>OS supporté(s)</td>
                        <td>Content 25</td>
                    </tr>
                    <tr>
                        <td>Content 26</td>
                        <td>Utilisation</td>
                        <td>Content 26</td>
                    </tr>
                    <tr>
                        <td>Content 27</td>
                        <td>Garantie commerciale</td>
                        <td>Content 27</td>
                    </tr>
                    <tr>
                        <td>Content 28</td>
                        <td>Garantie légale</td>
                        <td>Content 28</td>
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
    </section>
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
<script src="../../JS/builder.js"></script>