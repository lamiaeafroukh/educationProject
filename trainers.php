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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
          <li class="dropdown"><a href="#"  class="active"href="trainers.php"><span>Les Types De Permis</span> <i class="bi bi-chevron-down"></i></a>
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
    <li><a href="#">Les Feux</a></li>
    <li><a href="#">Les Priorites De Passage</a></li>
    <li><a href="#">L'Arret-Le Stationnement </a></li>
    <li><a href="#">La Vitesse </a></li>
    <li><a href="#">Les regles de Circulation </a></li>
    <li><a href="#">Le Croisement-le Depassement </a></li>
    <li><a href="#">L'Autoroute</a></li>
    <li><a href="#">Les Accidents </a></li>
    <li><a href="#">Le Conducteur </a></li>
    <li><a href="#">Le vehicule </a></li>
    </ul>
</li>
         
<li class="dropdown"><a href="#"><span>Pratique</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a    href="pricing.php">Coût</a></li> 
          <li><a href="contact.php">Contact</a></li>
          <li class="dropdown">
        <p><?php 
        
        if(isset($_SESSION['nom'])){
   
                           echo  $_SESSION['nom']." ".$_SESSION['prenom'];
                          // echo $_SESSION['id_client']; id de client
                       }
   
          ?></p>
       
          <a href="login.php" ><span class="bi bi-person"></span></a>
          <!-- End Profile Iamge Icon --> <ul>
          <li><a href="deconnexion.php" ><span class="bi bi-door-open"></span></a></li></ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="courses.php" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <main  class="mn" id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Qu’est-ce que le permis B pour conduire ?</h2>
        <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/Permis-de-conduire.jpeg" style="height: 50%;" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Les Permis De Catégorie B</h4>
                <!-- <span>Web Development</span> -->
                <p>
                  Le permis de conduire B est un document administratif qui autorise son titulaire 
                  à conduire certains types de véhicules motorisés sur la voie publique. Il s’agit 
                  d’une licence personnelle et non transférable et, bien qu’elle puisse être 
                  utilisée à l’étranger, elle est valable en soi dans le pays de délivrance.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/financer-permis-b-cpf-permis75.jpeg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Qui peut obtenir le permis B ?</h4>
                <!-- <span>Marketing</span> -->
                <p>
                  Toute personne née au Maroc ou étrangère, mais résidant légalement dans 
                  le pays, peut passer le test approprié pour obtenir cette certification,
                comme dans la plupart des pays, vous devez avoir au moins 18 ans pour passer ce test.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/veh.webp" style="height: 50%;" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Les véhicules que vous pouvez conduire avec ce permis au Maroc ?
                </h4>
                <!-- <span>Content</span> -->
                <p>
                  Véhicules avec remorques jusqu'à 750 kg CTP ou plus de 750 kg si la charge 
                  totale ne dépasse pas 3,5 tonnes, 
                  Véhicules forestiers à moteur jusqu'à 3,5 
                  tonnes et
                  Quadricycles lourds motorisés jusqu'à 125 cm³ et 550 kg. Tricycles 
                  motorisés de moins d'une tonne.

                </p>
               
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>UDRive</h3>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A Propos De permis</a></li>
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