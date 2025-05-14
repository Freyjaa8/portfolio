<?php

$title = "Page de contact";
?>

<h1>Contact</h1>

<?php
// En cas de formulaire non valide, affichage d'une erreur.
if (!empty($erreur) ) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erreur; ?>
    </div>
<?php
}

// On affiche le formulaire;
include '../Views/includes/contact-form.php';