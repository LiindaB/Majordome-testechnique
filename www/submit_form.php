<?php
require 'database.php';

$civilite = $_POST['civilite'] ?? '';
$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$email = $_POST['email'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$message = $_POST['message'] ?? '';
$errors = [];

if (empty($nom) || empty($prenom)) {
    $errors[] = "Nom et prénom sont obligatoires.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Adresse e-mail invalide.";
}

if (empty($errors)) {
    $sql = "INSERT INTO contacts (civilite, nom, prenom, email, telephone, message) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$civilite, $nom, $prenom, $email, $telephone, $message]);

    echo "Merci ! Votre message a été enregistré.";
} else {
    echo " Erreurs :<br>";
    foreach ($errors as $e) {
        echo "- " . htmlspecialchars($e) . "<br>";
    }
}
