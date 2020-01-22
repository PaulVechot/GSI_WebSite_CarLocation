<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Bootstrap core CSS -->
  <link href="/GSI_WebSite_CarLocation/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <?php if (!empty($customPageStylesheet)) {?>
    <link href= <?= $customPageStylesheet ?> rel="stylesheet">
  <?php } ?>

</head>

<body>
<!-- Navbar pour les pages web du site. Elle peut etre different selon ce qui est envoyé en parametre. Si le menu n'a pas été déclaré alors on affiche celui de base-->

<?php if (empty($menu)) {?>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <!-- retour à la page principale -->
      <a class="navbar-brand" href="index.php">Location GSI</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <!-- Espace gestionnaire -->
          <li class="nav-item"><a class="nav-link" href="gestionnaire.php">Gestionnaire</a></li>

          <!-- Espace de reservation -->
          <li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>

          <!-- info entreprise -->
          <li class="nav-item"><a class="nav-link" href="nousConnaitre.php">Nous connaitre</a></li>

          <!-- Page de contact -->
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

          <!-- Page de inscription -->
          <li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>

          <!-- Page de connexion -->
          <li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>

        </ul>
      </div>
    </div>
  </nav>
<?php
}
?>

<!-- Reste du contenu de la page.-->
<?= $content ?>

<!--  Footer pour l'ensemble des pages du site -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/GSI_WebSite_CarLocation/public/vendor/jquery/jquery.min.js"></script>
  <script src="/GSI_WebSite_CarLocation/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
