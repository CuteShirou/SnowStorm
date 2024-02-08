<?php
// Inclure le fichier de connexion à la base de données
include('../Sous Dossier/Account/BDDConnection.php');
// Récupérer les données JSON envoyées depuis le client
$data = json_decode(file_get_contents("php://input"));

// Vérifier si les données sont valides
if ($data && isset($data->switch) && isset($data->backplateColor)) {
    // Récupérer les valeurs des choix de l'utilisateur
    $selectedSwitch = $data->switch;
    $selectedBackplateColor = $data->backplateColor;

    // Utiliser les valeurs pour effectuer une requête SQL et insérer les choix dans la base de données
    $sql = "INSERT INTO user_choices (switch, backplate_color) VALUES (:switch, :backplateColor)";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':switch', $selectedSwitch);
    $stmt->bindParam(':backplateColor', $selectedBackplateColor);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Retourner une réponse au client indiquant que les choix ont été enregistrés avec succès
        http_response_code(200);
        echo json_encode(array("message" => "Les choix de l'utilisateur ont été enregistrés avec succès."));
    } else {
        // Retourner une erreur si la requête a échoué
        http_response_code(500);
        echo json_encode(array("message" => "Une erreur est survenue lors de l'enregistrement des choix de l'utilisateur."));
    }
} else {
    // Retourner une erreur si les données JSON sont incorrectes ou manquantes
    http_response_code(400);
    echo json_encode(array("message" => "Les données JSON envoyées sont incorrectes ou incomplètes."));
}
?>