<?php
if (!isset($_POST['submit'])) {
    echo "error: Vous avez besoin d'envoyer un mail";
}
$name = $_POST['nom'];
$client_mail = $_POST['client_mail'];
// $message = $_POST['message'];

#Première  validation
if (empty($name) || empty('$client_mail')) {
    echo "Le nom et le mail son bien envoyer";
    exit;
}

$email_from = 'digitalakeng@gmail.com'; #Il s'agit de votre mail 
$email_subject = 'Nouvel envoie soumise!';
$email_body = "Vous avez réçu un message de la part de l'utilisateur $name. \n".
"adresse email: $client_mail\n".
// "Ici est le message de: \n $message".

$to = "digitalakeng@gmail.com";
$header = "From: $email_from \r \n";

#Envoyer le mail

mail($to,$email_subject,$email_body,$header);

// function IsInjected($str)
// {
//     $injections = array('(\n+)',
//            '(\r+)',
//            '(\t+)',
//            '(%0A+)',
//            '(%0D+)',
//            '(%08+)',
//            '(%09+)'
//            );
               
//     $inject = join('|', $injections);
//     $inject = "/$inject/i";
    
//     if(preg_match($inject,$str))
//     {
//       return true;
//     }
//     else
//     {
//       return false;
//     }
// }

// if(IsInjected($client_email))
// {
//     echo "Bad email value!";
//     exit;
// }

header("location:index.html");
?>
