<?php
// Simuler des messages en utilisant un tableau
$messages = [
    ['user' => 'Alice', 'content' => 'Salut tout le monde !'],
    ['user' => 'Bob', 'content' => 'Bonjour Alice !'],
    ['user' => 'Eve', 'content' => 'Coucou !'],
    // Ajoutez d'autres messages ici
];

// Afficher les messages
foreach ($messages as $message) {
    echo '<div class="message">';
    echo '<strong>' . $message['user'] . ':</strong> ' . $message['content'];
    echo '</div>';
}
?>
