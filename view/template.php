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
  <link href= <?= $customPageStylesheet ?> rel="stylesheet">

</head>

<body>
<!-- Navbar pour les pages web du site.   Elle peut etre different selon ce qui est envoyé en parametre.-->
<?= $menu ?>
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
