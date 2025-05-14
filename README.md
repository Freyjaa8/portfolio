****************************** Modifications apportées : **************************

- Nouvelle fonctionnalité : Page de contact

	=> Création d'un nouveau Controller : ContactController qui rend la vue contact. Dans ce controlleur : Utilisation de la class "Validator" et de sa méthode "validatePost) pour vérifier que tous les champs obligatoires sont remplis (seul le prénom est optionnel).Ensuite, récupération en POST des données du formulaire (en utilisant htmlspecialchars pour la sécurité). Si tout est ok : envoi de mail via la fonction php mailto() et redirection vers la page d'accueil, sinon une erreur est levée puis passée à la vue. 

	=> Création d'un "contact-form" : création dans le dossier "includes" dans les vues du contact-form comprenant tous les champs de formulaire pour la page contact. Champs : nom, prénom (optionnel), email, sujet du message (select), message (textarea).

	=> Création de la vue "contact.php" dans un dossier "contact". La vue comprend un titre et une logique d'affichage pour le message d'erreur en cas de formulaire non correctement rempli. Il inclut le contact-form.

- Ajout d'un lien vers la page "contact" dans la barre de navigation. 
