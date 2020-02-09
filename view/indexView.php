<!-- On complete ici la page index avec "parametre" manquant de la page index.fr -->

<?php $title = 'Location GSI - Accueil'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>
<?php $imageSize = "200px"; ?>

<?php ob_start(); ?>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <!-- Slide 1 - les images sont reliés au document image -->
       <div class="carousel-item active" style="background-image: url('public/image/accueil_slider/slide1.jpg')">
         <div class="carousel-caption d-none d-md-block">
           <h3>Location GSI</h3>
           <p>Meilleur rapport qualité prix sur toute l'ile de France</p>
         </div>
       </div>
       <!-- Slide 2 - les images sont reliés au document image -->
       <div class="carousel-item" style="background-image: url('public/image/accueil_slider/slide2.jpg')">
         <div class="carousel-caption d-none d-md-block">
           <h3>Offres diversifiées</h3>
           <p>Location GSI vous propose toutes les gammes de voitures pour répondre au mieux à vos besoins.</p>
         </div>
       </div>
       <!-- Slide 3 - les images sont reliés au document image -->
       <div class="carousel-item" style="background-image: url('public/image/accueil_slider/slide3.jpg')">
         <div class="carousel-caption d-none d-md-block">
           <h3>Large cible</h3>
           <p>Location GSI s'adresse à la fois aux professionnels et aux particuliers.</p>
         </div>
       </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
</header>

 <!-- Content -->
 <div class="container">

   <!-- Nos valeurs Section -->
     <h2><br><b></b>Nos Valeurs</b></h2></br></h2>
   </br>
   </br>
   <div class="row">
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <div class="mx-auto" style="width: <?= $imageSize ?>;">
           <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/satisfaction.svg" alt=""></a>
         </div>
         <div class="card-body">
           <h4 class="card-title">
            Satisfaction client
           </h4>
           <p class="card-text">Avec des indices toujours positifs, notre levier de différenciation le plus conséquent est la satisfaction de nos clients.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-1050">
         <div class="mx-auto" style="width: <?= $imageSize ?>;">
           <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/partner.svg" alt=""></a>
         </div>
         <div class="card-body">
           <h4 class="card-title">
            Responsabilité
           </h4>
           <p class="card-text">Une entreprise responsable toujours à l’écoute de ses clients.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <div class="mx-auto" style="width: <?= $imageSize ?>;">
           <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/value.svg" alt=""></a>
         </div>
         <div class="card-body">
           <h4 class="card-title">
             Qualité
           </h4>
           <p class="card-text">Un service de qualité et des voitures très bien entretenues</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <div class="mx-auto" style="width: <?= $imageSize ?>;">
           <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/map.svg" alt=""></a>
         </div>
         <div class="card-body">
           <h4 class="card-title">
             Proximité
           </h4>
           <p class="card-text">Avec une proposition de valeur diversifiée nous nous adressons à toute l’Île de France.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <div class="mx-auto" style="width: <?= $imageSize ?>;">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/respect.svg" alt="" ></a>
       </div>
         <div class="card-body">
           <h4 class="card-title">
            Respect
           </h4>
           <p class="card-text">Le respect de nos engagements induit la fidélité de nos clients.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <div class="mx-auto" style="width: <?= $imageSize ?>;">
           <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/solution.svg" alt=""></a>
         </div>
         <div class="card-body">
           <h4 class="card-title">
            Integrité
           </h4>
           <p class="card-text">Étant donné que notre première préoccupation est la qualité de notre offre et la satisfaction de nos clients notre pôle administratif offre un service professionnel et bien rodé.</p>
         </div>
       </div>
     </div>
   </div>
   <!-- Customer Review Section -->
     <h2><br><b></b>Retour d'utilisateur</b></h2></br></h2>
   </br>
   </br>
   <div class="row">
     <!-- Team Member 1 -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-0 shadow">
         <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
         <div class="card-body text-center">
           <h5 class="card-title mb-0">Jean Kevin</h5>
           <div class="card-text text-black-50">Les voitures trop bien et moi j'aime bien quand c'est trop bien! Vive Vroom</div>
         </div>
       </div>
     </div>
     <!-- Team Member 2 -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-0 shadow">
         <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
         <div class="card-body text-center">
           <h5 class="card-title mb-0">Adèle Dupuis</h5>
           <div class="card-text text-black-50">J'adore les voitures. Elle sont vraiment extraordinaire vivement que l'on puise aller sur la lune avec. Les voitures sont un grand pas pour l'homme et en tant que podologue je m'y connais! Vive les crepes</div>
         </div>
       </div>
     </div>
     <!-- Team Member 3 -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-0 shadow">
         <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
         <div class="card-body text-center">
           <h5 class="card-title mb-0">Jack Langue</h5>
           <div class="card-text text-black-50">Mon dieu! C'est vraiment super ce site, j'en ai parlé à toute ma famille. Merci encore Vroom!!</div>
         </div>
       </div>
     </div>
     <!-- Team Member 4 -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-0 shadow">
         <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
         <div class="card-body text-center">
           <h5 class="card-title mb-0">Lolita Bell</h5>
           <div class="card-text text-black-50">Super Site on trouve tout ce qu'il faut ou il faut! Bravo aux developpeurs</div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.row -->
  </div>
<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
