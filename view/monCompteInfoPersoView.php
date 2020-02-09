
<?php $title = 'Location GSI - Mon Compte'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/.css"; ?>

<?php ob_start(); ?>

</br>
</br>
<div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 600px;">
  	<h4 class="card-title mt-3 text-center">Info Personnel</h4>

      <form method="post">
          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="nom" class="form-control" value="<?php logger($resUser['user_name']."toto"); echo $resUser['user_name']?>" placeholder="<?php echo $resUser['user_name']?>" type="text" required pattern="^[A-Za-z '-]+$" maxlength="30" >
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="prenom" class="form-control" value="<?php logger($resUser['user_name']."toto"); echo $resUser['user_surname']?>" placeholder="<?php echo $resUser['user_surname']?>" type="text" required pattern="^[A-Za-z '-]+$" maxlength="30">
          </div> <!-- form-group// -->

        </br>
        </br>


          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="rs" class="form-control" value="<?php echo $resUser['user_rs']?>" placeholder="<?php echo $resUser['user_rs']?>" type="text" required pattern="^[A-Za-z '-]+$" maxlength="60">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
              <input name="birth_date" class="form-control" value="<?php echo $resUser['user_birth_date']?>" placeholder="<?php echo $resUser['user_birth_date']?>" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
               </div>
              <input name="email_client" class="form-control" value="<?php echo $resUser['user_email']?>" placeholder="<?php echo $resUser['user_email']?>" type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
  		  <div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
          <input name="adresse" class="form-control" value="<?php echo $resUser['user_adress']?>" placeholder="<?php echo $resUser['user_adress']?>" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
              <div class="input-group-prepend">
  		      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
              </div>
              <input name="complementAdresse" class="form-control" value="<?php echo $resUser['user_adress1']?>" placeholder="<?php echo $resUser['user_adress1']?>" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
          <input name="codePostal" class="form-control" value="<?php echo $resUser['user_district']?>" placeholder="<?php echo $resUser['user_district']?>" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
          <input name="ville" class="form-control" value="<?php echo $resUser['user_city']?>" placeholder="<?php echo $resUser['user_city']?>" type="text">
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
      	<input name="tel" class="form-control" value="<?php echo $resUser['user_phone']?>" placeholder="<?php echo $resUser['user_phone']?>" required pattern=".{10,}" type="text">
      </div> <!-- form-group// -->

      <div class="form-group input-group">
      	<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  		</div>
          <input name="motDePasse" class="form-control" placeholder="Mot de passe *" type="password" required pattern=".{6,}">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
      	<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  		</div>
          <input name="motDePasse1" class="form-control" placeholder="Repéter mot de passe*" type="password" required pattern=".{6,}" >
      </div> <!-- form-group// -->
     <!-- bouton de validation -->
      <div class="form-group">
        <button type="submit" name="modification" class="btn btn-primary btn-block">Modifier ces informations </button>

  </form>
  </article>
</div>


<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
