<?php 

namespace App\Controllers;

use App\Core\Validator;

class ContactController extends Controller
{

    public function index()
    {
        //Vérification de la validation du formulaire
        if (Validator::validatePost($_POST, ['name', 'email', 'subject', 'message'])) {
            //Récupération des données du formulaire 
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);
            //Création du content du form
            $emailContent = "Nom: $name\n";
            $emailContent .= "Email: $email\n";
            $emailContent .= "Sujet: $subject\n\n";
            $emailContent .= "Message:\n$message";
            header("Location: index.php"); 
            //Envoi de l'email 
             $to = "rivet.celia@gmail.com"; 
            $headers = "From: $email" . "\r\n" .
                       "Reply-To: $email" . "\r\n" .
                       "X-Mailer: PHP/" . phpversion();
             if (mail($to, $subject, $emailContent, $headers)) {
                // Si l'email est envoyé avec succès, rediriger avec un message de succès
                header("Location: index.php");
                exit;
            } else {
                // Si l'envoi de l'email échoue, signaler l'erreur
                $erreur = "Impossible d'envoyer le message. Veuillez réessayer plus tard.";
                $this->render('contact/contact', ["erreur" => $erreur]);
            }
        } else {
            //si un formulaire n'est pas rempli ou adresse mail invalide, on signale l'erreur
            $erreur = !empty($_POST) ? "Le formulaire n'a pas été correctement rempli" : "";
            $this->render('contact/contact', ["erreur" => $erreur]);
        }
    }
}