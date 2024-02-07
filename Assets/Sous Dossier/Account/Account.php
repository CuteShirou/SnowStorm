<?php
require_once("BDDConnection.php");

// Check if the user is logged in
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: Login.php');
    exit();
}

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
    <h2>INFORMATION USER</h2>
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
        <?php 
        if ($user['Administrateur'] == 1) {
            echo '<div>';
            echo '<form method="post">';
            echo '<input placeholder="Garantie Commerciale" name="gCom">';
            echo '<input type="submit" name="editGarantie" value="Editer Garantie">';
            echo '</form>';
            echo '</div>';
        }
        ?>
    </div>
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

    if ($user['Administrateur'] == 1 && isset($_POST['editGarantie'])) {
        if (!empty($_POST["gCom"])) {
            $gCom = htmlentities($_POST["gCom"], ENT_QUOTES, "UTF-8");
            $query3 = $connexion->prepare("UPDATE `KEYBOARDS` SET `garantie_Commerciale`=:gCom WHERE id='1'");
            $query3->bindParam(':gCom',$gCom , PDO::PARAM_STR);
            $query3->execute();
        }
    }
    ?>
</body>
</html>


