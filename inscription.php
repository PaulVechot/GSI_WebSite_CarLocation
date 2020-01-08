<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Location GSI</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/bootstrap/jquery/jquery.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="css/inscription.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <!-- retour à la page principale -->
      <a class="navbar-brand" href="index.html">Location GSI</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <!-- Espace gestionnaire -->
            <a class="nav-link" href="about.html">Gestionnaire</a>
          </li>
          <li class="nav-item">
            <!-- Espace de reservation -->
            <a class="nav-link" href="services.html">Reservation</a>
          </li>
          <li class="nav-item">
             <!-- info entreprise -->
            <a class="nav-link" href="services.html">Nous connaitre</a>
          </li>
          <li class="nav-item">
            <!-- Page de contact -->
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
             <!-- Page de inscription -->
            <a class="nav-link" href="inscription.html">Inscription</a>
          </li>
          <li class="nav-item">
             <!-- Page de connexion -->
            <a class="nav-link" href="connexion.html">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>






<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Créer un compte</h4>
	<p class="text-center">Réservez dès maintenant avec votre compte gratuit</p>

    <form>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
             </div>
            <input name="nom" class="form-control" placeholder="Nom *" type="text">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
             </div>
            <input name="prenom" class="form-control" placeholder="Prénom *" type="text">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
             </div>
            <input name="" class="form-control" placeholder="Date de naissance *" type="text">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
             </div>
            <input name="" class="form-control" placeholder="Adresse mail *" type="email">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Adresse" type="text">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="" class="form-control" placeholder="Complément d'adresse" type="text">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Code postal" type="text">
        </div> <!-- form-group// -->

        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Ville" type="text">
        </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+33</option>
		    <option value="1">+34</option>
		    <option value="2">+41</option>
		    <option value="3">+39</option>
            <option value="3">+32</option>
            <option value="3">+352</option>
            <option value="3">+377</option>
            <option value="3">+49</option>
		</select>
    	<input name="" class="form-control" placeholder="Téléphone" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Mot de passe" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repéter mot de passe" type="password">
    </div> <!-- form-group// -->
   <!-- bouton de validation -->
    <div class="form-group">
        <button type="submit" name="valider" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->
    <p class="text-center">Have an account? <a href="">Log In</a> </p>
</form>
</article>
</div>


<?php
include('model/connexionBDD.php');


if (isset ($_POST['valider'])){
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $c->exec("INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES('',$nom, $prenom,'','','')");
            }

?>

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>