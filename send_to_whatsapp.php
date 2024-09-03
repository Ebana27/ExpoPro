<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = urlencode($_POST['nom']);
    $email = urlencode($_POST['email']);
    $telephone = urlencode($_POST['telephone']);
    $niveau = urlencode($_POST['niveau']);
    $sujet = urlencode($_POST['sujet']);
    $description = urlencode($_POST['description']);

    // Construire le message
    $message = "Nom: " . $nom . "%0A";
    $message .= "Email: " . $email . "%0A";
    $message .= "Téléphone: " . $telephone . "%0A";
    $message .= "Niveau scolaire: " . $niveau . "%0A";
    $message .= "Sujet de l'exposé: " . $sujet . "%0A";
    $message .= "Description: " . $description;

    // Lien d'invitation du groupe WhatsApp
    $group_link = "https://chat.whatsapp.com/ton-lien-de-groupe"; // Remplace par le lien de ton groupe

    // Redirection vers WhatsApp
    header("Location: https://api.whatsapp.com/send?text=" . $message . "&link=" . $group_link);
    exit();
}
?>
