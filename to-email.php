<?php
if (!isset($_POST['submit'])) {
    echo "error: Vous avez besoin d'envoyer un mail";
}
$name = $_POST['nom'];
$client_mail = $_POST['client_mail'];
$message = $_POST['message'];
$contact = $_POST['contact'];

#Première  validation
if (empty($name) || empty('$client_mail')) {
    echo "Le nom et le mail son bien envoyer";
    exit;
}

$email_from = 'digitalakeng@gmail.com'; #Il s'agit de votre mail 
$email_subject = 'Votre mail a bien été envoyer!';
$email_body = "Vous avez réçu un message de la part de l'utilisateur $name. \n".
"adresse email: $client_mail\n".
"Ici est le message de: \n $message".
"Ici est son numéro: \n $contact".

$to = "digitalakeng@gmail.com";
$header = "From: $email_from \r \n";

#Envoyer le mail

mail($to,$email_subject,$email_body,$header);


header("location:index.html");
?>
