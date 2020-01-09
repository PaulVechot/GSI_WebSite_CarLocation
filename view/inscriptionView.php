
<?php $title = 'Location GSI - Inscription'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/inscription.css"; ?>

<?php ob_start(); ?>
<div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 600px;">
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
<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
