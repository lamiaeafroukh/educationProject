<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>U DRIVE - Platforme d'appretissage du code routier</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link  href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">U DRIVE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <!-- <li><a href="courses.php">A Propos de Permis</a></li> -->
          <li class="dropdown"><a href="#" href="trainers.php"><span>Les Types De Permis</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="apermis.php">Les Permis De Catégorie A</a></li>   
               <li><a href="trainers.php">Les Permis De Catégorie B</a></li>
              <li><a href="#">Les Permis De Catégorie AM</a></li>
              <li><a href="#">Les Permis De Catégorie A1</a></li>
            
              <li><a href="#">Les Permis De Catégorie C</a></li>
              <li><a href="#">Les Permis De Catégorie D</a></li>
              <li><a href="#">Les Permis De Catégorie E B </a></li>
              <li><a href="#">Les Permis De Catégorie E C</a></li>
              <li><a href="#">Les Permis De Catégorie E D</a></li>
              </ul>
          </li>

              
          
<li class="dropdown"><a href="#"  href="events.php" ><span>Le Code De La Route</span> <i class="bi bi-chevron-down"></i></a>

  <ul>
    <li class="dropdown"><a href="#"><span>Signalisation</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="interdiction.php">Interdiction</a></li>
        <li><a href="events.php">Signalisation Verticale</a></li>
        <li><a href="#">Signalisation Horizontale</a></li>
        <li><a href="#">Danger</a></li>
        <li><a href="#">Obligation</a></li>
        <li><a href="#">Directions Routières</a></li>
        <li><a href="#">Temporaire</a></li>
        <li><a href="#">Lignes</a></li>
        <li><a href="#">Flèches</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Les Feux</span><i class="bi bi-chevron-right"></i></</a>
      <ul>
        <li><a href="interdiction.php">Feux Tricolors</a></li>
        <li><a href="#">Feux Ronds</a></li>
        <li><a href="#">Ligne D'effet</a></li>
        <li><a href="#">Feux et Forme De Flèche</a></li>
        <li><a href="#">Flèche Supplémentaire</a></li>
        <li><a href="#">Cas Particuliers</a></li>
        <li><a href="#">Feux avec panneaux</a></li>
        <li><a href="#">Feux Clignotants</a></li>
        <li><a href="#">Autres Feux</a></li>
      </ul>
  
    </li>
    <li class="dropdown" ><a href="#"><span>Les Priorites De Passage</span><i class="bi bi-chevron-right"></i></a>
     <ul>
        <li><a href="#">Priorité à droite</a></li>
        <li><a href="#">Cédez le Passage</a></li>
        <li><a href="#">Stop</a></li>
        <li><a href="#">priorité Ponctuelle</a></li>
        <li><a href="#">Caractère Prioritaire </a></li>
        <li><a href="#">Fin De Caractère Prioritaire </a></li>
        <li><a href="#">Carrefour à Sens Giratoire</a></li>
        <li><a href="#">Franchissement</a></li>
       

      </ul>
  
    </li>
    <li class="dropdown" ><a href="#"><span>L'Autoroute</span><i class="bi bi-chevron-right"></i></a>
     <ul>
        <li><a href="#">Vers L'Autoroute</a></li>
        <li><a href="#">Entrée</a></li>
        <li><a href="#">Caractéristiques</a></li>
        <li><a href="#">Régles de circulation</a></li>
        <li><a href="#">Arrêt-Stationnement</a></li>
        <li><a href="#">Intempéries</a></li>
        <li><a href="#">Bifurcation</a></li>
        <li><a href="#">Croisement et Jonction </a></li>
        <li><a href="#">Sortie</a></li>
        <li><a href="#">Route pour Automobiles</a></li>

      </ul>
  
    </li>
    <li><a href="#">L'Arrêt-Le Stationnement </a></li>
    <li><a href="#">La Vitesse </a></li>
    <li><a href="#">Les Régles de Circulation </a></li>
    <li><a href="#">Le Croisement-le Depassement </a></li>
    
    <li><a href="#">Les Accidents </a></li>
    <li><a href="#">Le Conducteur </a></li>
    <li><a href="#">Le vehicule </a></li>
  </ul>
</li>
         
         <li class="dropdown"><a href="#"><span>Pratique</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Tests</a></li>
              <li><a href="#">Vidéos éducatives</a></li>
              <li><a href="pneu.php">Fixer un pneu</a></li>
             
            </ul>
          </li> 
           <li><a   class="active"  href="pricing.php">Coût</a></li>  
           <li><a href="contact.php">Contact</a></li>
           <li class="dropdown" id="login">
        
       
          <a href="login.php"  ><span  class="fa fa-user fa-lg"></span></a>
          <!-- End Profile Iamge Icon -->
          
           <ul>
          <li><a href="deconnexion.php" ><span class="bi bi-door-open">&nbsp Logout</span></a></li></ul>
          </li>
        <li ><p class="smia"><span><?php 
        
        if(isset($_SESSION['nom'])){
   
                           echo  $_SESSION['nom']." ".$_SESSION['prenom'];
                          // echo $_SESSION['id_client']; id de client
                       }
   
          ?></span></p>
          </li>
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->




        

      </nav><!-- .navbar -->

      <!-- <a href="courses.php" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Coût</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="box">
              <h3>Gratuit</h3>
              <h4><sup>dhs</sup>0<span> / Mois</span></h4>
              <ul> 
                <li class="cld"><h4>UDRIVE</h4></li>
                <li class="cld">Formation Pratique 100%</li>
                <li class="cld">Commencer Votre mois Gratuit</li>
                <li  class="cld">Cours Gratuit en ligne comprend:</li>
                <ul >

                   <li class="grt">3-4 heures d'apprentissage</li>
                  <li class="grt">Obtenez de nouvelles compétences en toute sérénité.</li>
                <div class="btn-wrap">
                <a href="interdiction.php" class="btn-buy"> Commencer Maintenant </a>
              </div>
                </ul>
              </ul>
              
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>dhs</sup>200<span> / Mois</span></h4>
              <ul>
                <li>UDRIVE</li>
                <li class="cld">Vous avez atteint votre limite de cours gratuits</li>
                <li class="cld"> Voulez-Vous apprendre des cours gratuit?  </li>
                <li class="cld">devenir membre Premuim pour ajouter des cours gratuits </li>
                <li>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Essayer Premium</a>
              </div>
                      </li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Payer Maintenant</a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Udrive</h3>
            <p>
              Rue Irfane <br>
              Boukhalef, N° 535022<br>
              Maroc <br><br>
              <strong>Téléphone:</strong> +212 955488 55<br>
              <strong>Email:</strong>udrive@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About </a></li>
             
              <li><i class="bx bx-chevron-right"></i> <a href="#">Les Types De Permis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Coût</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Le Code De La Route</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pratique</a></li>
              
            </ul>
          </div>

          

         
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Joindre Notre Newsletter</h4>
            <p>Si vous voulez inscrire dans notre formation,rejoindre nous maintenant: </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>UDrive</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>