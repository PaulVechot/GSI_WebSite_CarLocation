<!-- On complete ici la page avec "parametre" manquant de la page index.fr -->
<?php $title = 'Location GSI - Connexion'; ?>

<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/connexion.css"; ?>

<?php ob_start(); ?>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Connectez-vous!</h3>
              <form action="connexion.php?action=connexion" method="post">

                <!-- choix profil user -->
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="profil" id="particulier" autocomplete="off" checked> Particulier
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="profil" id="professionnel" autocomplete="off"> Professionnel
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="profil" id="administrateur" autocomplete="off"> Administrateur
                  </label>
                </div>
                  <!--petit espace pour aérer -->
                <br>
                <br>
                  <!-- mot de passe et connexion -->
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Adresse email</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Mode de passe</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Se souvenir du mot de passe</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="connexion">Connexion</button>
                <div class="text-center">
                  <a class="small" href="#">Mot de passe oublié?</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
