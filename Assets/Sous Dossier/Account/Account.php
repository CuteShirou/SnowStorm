<?php
require_once("BDDConnection.php");

// Check if the user is logged in
session_start();
if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
    exit;
}

// Get the user's data from the database
$userId = $_SESSION["userId"];
$query = "SELECT * FROM users WHERE id = :userId";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":userId", $userId);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Display the user's data
echo "Welcome, " . $user["username"] . "!<br>";
echo "Email: " . $user["email"] . "<br>";
echo "First Name: " . $user["first_name"] . "<br>";
echo "Last Name: " . $user["last_name"] . "<br>";

// Add more code here to display and manage the user's account

?>
<!DOCTYPE html>
<html>
<head>
    <title>User Account</title>
</head>
<body>
    <h1>User Account</h1>
    <h2>User Information</h2>
    <p>Welcome, <?php echo $user["username"]; ?>!</p>
    <p>Email: <?php echo $user["email"]; ?></p>
    <p>First Name: <?php echo $user["first_name"]; ?></p>
    <p>Last Name: <?php echo $user["last_name"]; ?></p>
    <!-- Add more HTML code here to display and manage the user's account -->
</body>
</html>