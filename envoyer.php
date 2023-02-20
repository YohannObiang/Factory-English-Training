<?php
if(isset($_POST['email'])) {
    $email_to = "votre-adresse-email@votre-domaine.com";
    $email_subject = "Nouveau message de formulaire de contact";
    $nom = $_POST['nom']; // Nom
    $email = $_POST['email']; // Adresse e-mail
    $message = $_POST['message']; // Message

    // Création de l'e-mail
    $email_message = "Détails du message ci-dessous :\n\n";
    $email_message .= "Nom : " . $nom . "\n";
    $email_message .= "Adresse e-mail : " . $email . "\n";
    $email_message .= "Message : \n" . $message . "\n\n";

    // En-têtes de l'e-mail
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // Envoi de l'e-mail
    mail($email_to, $email_subject, $email_message, $headers);
}
?>