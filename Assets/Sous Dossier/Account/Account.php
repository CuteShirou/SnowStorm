<?php
// Inclure le fichier de connexion à la base de données
require_once("BDDConnection.php");

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header('Location: Login.php');
    exit();
}

// Récupérer les informations de l'utilisateur depuis la base de données
$userId = $_SESSION["id"];
$query = $connexion->prepare("SELECT * FROM USERS WHERE id = :userId");
$query->bindParam(":userId", $userId, PDO::PARAM_STR);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Snowstorm - Compte Utilisateur</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Account.css">
</head>
<body>
    <h2>INFORMATION UTILISATEUR</h2>
    <div class="bg-white overflow-hidden shadow rounded-lg border">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Profil Utilisateur
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Ce sont les informations personnelles du compte.
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Prénom
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $user["prenom"]; ?>
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Nom
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $user["nom"]; ?>
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $user["mail"]; ?>
                    </dd>
                </div>
            </dl>
        </div>

        <!-- Affichage des formulaires d'édition si l'utilisateur est administrateur -->
        <?php 
        if ($user['Administrateur'] == 1) {

            // Récupérer les noms de colonnes de la table 'KEYBOARDS'
            $query_columns = $connexion->query("SHOW COLUMNS FROM `KEYBOARDS`");
            $columns = $query_columns->fetchAll(PDO::FETCH_COLUMN);

            // Supprimer la première colonne (id) si nécessaire
            if (($key = array_search('id', $columns)) !== false) {
                unset($columns[$key]);
            }

            // Affichage des formulaires d'édition pour chaque colonne
            foreach ($columns as $column) {
                echo '<div>';
                echo '<form method="post">';
                echo '<input placeholder="' . $column . '" name="' . $column . '">';
                echo '<input type="submit" name="edit' . ucfirst($column) . '" value="Editer ' . $column . '">';
                echo '</form>';
                echo '</div>';
            }
        }
        ?>
    </div>

    <!-- Formulaire de déconnexion -->
    <form method="post">
        <input class="disconnect" type="submit" name="deco" value="DECONNEXION" class="buttons"/>
        <input class="menu" type="submit" name="home" value="HOME" class="buttons"/>
    </form>
    
    <?php 
    if(isset($_POST['deco'])) {
        session_unset();         
        session_destroy();
        unset($_SESSION['id']);
        header('Location: ../../../index.html');
        exit();
    }
    
    if(isset($_POST['home'])) {
        header('Location: ../../../index.html'); 
        exit();
    }

    // Traitement des formulaires d'édition si l'utilisateur est administrateur
    if ($user['Administrateur'] == 1) {
        foreach ($columns as $column) {
            if (isset($_POST['edit' . ucfirst($column)])) {
                if (!empty($_POST[$column])) {
                    $value = htmlentities($_POST[$column], ENT_QUOTES, "UTF-8");
                    $query3 = $connexion->prepare("UPDATE `KEYBOARDS` SET `$column`=:value WHERE id='$idkey'");
                    $query3->bindParam(':value', $value, PDO::PARAM_STR);
                    $query3->execute();
                }
            }
        }
    }
    ?>
</body>
</html>