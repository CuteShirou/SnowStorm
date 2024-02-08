<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<body>
<?php
// Paramètres de connexion à la base de données
$servername = "mysql:host=mysql-paul.alwaysdata.net;dbname=paul_ferran";
$username = "paul";
$password = "Polopauluap_1710";

try {
    $conn = new PDO($servername, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("USE paul_ferran");

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Parcourir les données postées
        foreach ($_POST as $key => $value) {
            // Vérifier si la clé commence par le préfixe nécessaire
            if (strpos($key, 'question_') === 0) {
                // Extraire l'ID de la question
                $questionID = substr($key, strlen('question_'));

                // Mettre à jour la base de données avec les nouvelles valeurs
                $sql = "UPDATE questionreponse SET
                        question = :question,
                        reponse1 = :reponse1,
                        reponse2 = :reponse2,
                        reponse3 = :reponse3,
                        reponse4 = :reponse4,
                        reponsejuste = :reponsejuste,
                        feedbacktrue = :feedbacktrue,
                        feedbackfalse = :feedbackfalse
                        WHERE ID = :questionID";

                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':question', $_POST['question_' . $questionID]);
                $stmt->bindParam(':reponse1', $_POST['reponse1_' . $questionID]);
                $stmt->bindParam(':reponse2', $_POST['reponse2_' . $questionID]);
                $stmt->bindParam(':reponse3', $_POST['reponse3_' . $questionID]);
                $stmt->bindParam(':reponse4', $_POST['reponse4_' . $questionID]);
                $stmt->bindParam(':reponsejuste', $_POST['reponsejuste' . $questionID]);
                $stmt->bindParam(':feedbacktrue', $_POST['feedbacktrue' . $questionID]);
                $stmt->bindParam(':feedbackfalse', $_POST['feedbackfalse' . $questionID]);
                $stmt->bindParam(':questionID', $questionID);

                $stmt->execute();
            }
        }

        // Rediriger l'utilisateur après la mise à jour
        header("Location: questionreponse.php");
        exit();
    } else {
        echo "Le formulaire n'a pas été soumis.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
</body>
</html>