
<?php $title = 'Location GSI - Inscription - Particulier'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/.css"; ?>

<?php ob_start(); ?>

</br>
</br>
<div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 600px;">
  	<h4 class="card-title mt-3 text-center">Créer un compte</h4>
  	<p class="text-center">Réservez dès maintenant avec votre compte gratuit</p>

      <form action="inscription.php?action=creation" method="post">
          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="nom" class="form-control" placeholder="Nom *" type="text" required pattern="^[A-Za-z '-]+$" maxlength="30">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="prenom" class="form-control" placeholder="Prénom *" type="text" required pattern="^[A-Za-z '-]+$" maxlength="30">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="dateNais" class="form-control" placeholder="Date de naissance *" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
               </div>
              <input name="email" class="form-control" placeholder="Adresse mail *" type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
  		  <div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
          <input name="adresse" class="form-control" placeholder="Adresse" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
  		      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
              </div>
              <input name="complementAdresse" class="form-control" placeholder="Complément d'adresse" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
          <input name="codePostal" class="form-control" placeholder="Code postal" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
          <input name="ville" class="form-control" placeholder="Ville" type="text">
          </div> <!-- form-group// -->

      <div class="form-group input-group">
      	<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
  		</div>
  		<select name="indicPays"class="custom-select" style="max-width: 120px;">
  		    <option selected="33">+33</option>
  		    <option value="34">+34</option>
  		    <option value="41">+41</option>
  		    <option value="39">+39</option>
          <option value="32">+32</option>
          <option value="352">+352</option>
          <option value="377">+377</option>
          <option value="49">+49</option>
  		</select>
      	<input name="tel" class="form-control" placeholder="Téléphone" type="text">
      </div> <!-- form-group// -->

      <div class="form-group input-group">
      	<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  		</div>
          <input name="motDePasse" class="form-control" placeholder="Mot de passe *" type="password">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
      	<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  		</div>
          <input name="motDePasse1" class="form-control" placeholder="Repéter mot de passe" type="password">
      </div> <!-- form-group// -->
     <!-- bouton de validation -->
      <div class="form-group">
        <button type="submit" name="valider" class="btn btn-primary btn-block">Création du compte  </button>
      </div> <!-- form-group// -->
      <p class="text-center">J'ai déjà un compte!<a href="connexion.php">  Connexion</a> </p>
  </form>
  </article>
</div>


<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
