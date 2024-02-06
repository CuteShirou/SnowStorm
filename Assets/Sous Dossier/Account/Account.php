<?php
require_once("BDDConnection.php");

// Check if the user is logged in
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: Login.php');
}

// Get the user's data from the database
$userId = $_SESSION["id"];
$query = $connexion->prepare("SELECT * FROM USERS WHERE id = :userId");
$query->bindParam(":userId", $userId, PDO::PARAM_STR);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../../CSS/Account.css">
<html>
<head>
    <title>User Account</title>
</head>
<body>
    <h2>User Information</h2>
    <div class="bg-white overflow-hidden shadow rounded-lg border">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                User Profile
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                This is some information about the user.
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
                        <?php echo $user["nom"]; ?></p>
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $user["mail"]; ?></p>
                    </dd>
                </div>
            </dl>
        </div>
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
        }
        if(isset($_POST['home'])) {
            header('Location: ../../../index.html'); 
        }
        ?>
    <!-- Add more HTML code here to display and manage the user's account -->
</body>
</html>