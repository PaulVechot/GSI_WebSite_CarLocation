<!-- On complete ici la page avec "parametre" manquant de la page index.fr -->

<?php $title = 'Location GSI - Accueil'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>


<?php ob_start(); ?>
<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
