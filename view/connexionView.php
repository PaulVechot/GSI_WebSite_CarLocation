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
              <form method="post">

                <!-- mot de passe et connexion -->
                <div class="form-label-group">
                  <input name="inputEmail" type="email" class="form-control" required>
                  <label for="inputEmail">Adresse email</label>
                </div>

                <div class="form-label-group">
                  <input name="inputPassword" type="password" class="form-control" required>
                  <label for="inputPassword">Mode de passe</label>
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
