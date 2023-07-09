<?php
// Récupérer le message envoyé
$message = $_POST['message'];

// Validation et traitement supplémentaire

// Ajouter le nouveau message au tableau des messages
$messages[] = ['user' => 'Utilisateur', 'content' => $message];

// Sauvegarder les messages mis à jour

// Rediriger vers la page principale
header('Location: index1.php');
exit();
?>
