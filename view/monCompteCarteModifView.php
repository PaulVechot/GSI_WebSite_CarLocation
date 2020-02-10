
<?php $title = 'Location GSI - Mon Compte'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/.css"; ?>

<?php ob_start(); ?>


</br>
</br>
<div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 600px;">
  	<h4 class="card-title mt-3 text-center">Information de carte</h4>

      <form method="post">
          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="card_name" class="form-control" value="<?php echo $resCard['card_name']?>" placeholder="<?php echo $resCard['card_name']?>"  type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="card_owner_name" class="form-control" value="<?php echo $resCard['card_owner_name']?>" placeholder="<?php echo $resCard['card_owner_name']?>" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="card_number" class="form-control" value="<?php echo $resCard['card_number']?>" placeholder="<?php echo $resCard['card_number']?>"  type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="card_csv" class="form-control" value="<?php echo $resCard['card_csv']?>" placeholder="<?php echo $resCard['card_csv']?>"  type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="card_expiration_month" class="form-control" <?php echo $resCard['card_expiration_month']?>" placeholder="<?php echo $resCard['card_expiration_month']?>"  type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="card_expiration_year" class="form-control" <?php echo $resCard['card_expiration_year']?>" placeholder="<?php echo $resCard['card_expiration_year']?>"  type="text">
          </div> <!-- form-group// -->


      <div class="form-group">
        <button type="submit" name="ajoutcarte" class="btn btn-primary btn-block">Ajouter carte </button>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
  </form>
  </article>


<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
