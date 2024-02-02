<?php
    $serveur = "mysql:host=mysql-sitewebpro.alwaysdata.net;dbname=sitewebpro_snowstorm";
    $utilisateur = "345536";
    $motDePasse = "ToutEstPasBonDansLePHP2024";
    $connexion = new PDO($serveur,$utilisateur,$motDePasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>