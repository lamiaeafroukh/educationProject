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
    <li class="dropdown" ><a href="#"><span>Les Feux</span><i class="bi bi-chevron-right"></i></a>
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
              <li><a href="#">Fixer un pneu</a></li>
             
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>SIGNALISATION VERTICALE</h2>
        <p>La signalisation verticale est un outil précieux qui 
          vous donne toutes les informations en hauteur pour vous 
          déplacer le mieux possible.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/ll.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Signalisation Verticale</a></h5>
                <p class="fst-italic text-center">lunettes de sécurité obligatoires</p>
                <p class="card-text">
                  Lors de chaque déplacement, les usagers croisent des panneaux de
                   signalisation, aussi nommés “éléments de signalisation verticale”. 
                   Ce type de signalisation répond à trois missions fondamentales :
                   <ul class="sgn">
                   <li><a href="#" >avertir des dangers à l'aide des panneaux triangulaires</a></li>
                   <li><a href="#" >signaler une interdiction ou une obligation à l'aide des panneaux ronds</a></li>
                   <li><a href="#" >donner des indications et des informations lors d'un trajet</a></li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <!-- <div id="im" class="card-img">
                <img    src="assets/img/dn.png" alt="...">
              </div> -->
              <div class="card-body">
                <h5 class="card-title"><a href="">Tout sur la signalisation verticale</a></h5>
               
                <p class="card-text">
                  <p class="pag"><span>C</span>e signalement peut prendre diverses formes. 
                    Il est en général présenté avec des croquis 
                  qui annoncent aux conducteurs l’existence d’un obstacle, 
                  la priorité sur les voiries ou une limitation de vitesse:</p>
                  <ul>
                  <li>Tout d’abord, si le panneau est en forme de triangle, il avertit 
                  la présence d’un danger. Ces signalisations se manifestent le plus 
                  souvent sous forme de pictogramme schématisé.</li>
                  
                  <li>Elles peuvent montrer un écoulement de terrain, passage d’animaux 
                  sauvages et tant d’autres. Dans le cas où le fond est de couleur 
                  jaune à bord rouge, le signal informe des travaux temporaires. 
                  Les signalisations rondes avec un contour rouge à fond blanc 
                  désignent les prohibitions sur certains types de chaussée.</li>

                  <li>Si la base est de coloris blanc marqué de noir, il communique
                   la fin de l’interdit. D’ailleurs, la balise peut renseigner 
                   le conducteur sur les zones de stationnement. Ce dernier peut
                    garer son auto s’il est en face d’un panneau circulaire avec un 
                    arrière-plan bleu, barré et encerclé de rouge. Par contre, 
                    les signalisations carrées signifient aux gens l’existence d’un 
                    restaurant ou d’un parking.</li>
                  </ul>
                  </p>
              </div>
            </div>

          </div>

<div class="dv">  <h4>Les Panneaux De Signaliation Verticale </h4></div>
          <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">
      
              <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                    <img class="pann" src="assets/img/panneaux-de-signalisation-routiere-a-imprimer-29.jpeg"  class="img-fluid" alt="">
                    <div class="member-content">
                     
                      <p>
                        Panneau de succession de virages premier à gauche
                      </p>
                      
                    </div>
                  </div>
                </div>
                
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  
                  <div class="member">
                    <img class="pann" src="assets/img/pp.jpeg" class="img-fluid" alt="">
                    <div class="member-content">
                      
                      <!-- <span>Marketing</span> -->
                      <p>
                        Panneau de succession de virages premier à droite
                      </p>
                        
                    </div>
                  </div>
                </div>
      
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                    <img class="pann"  src="assets/img/pl.jpeg" class="img-fluid" alt="">
                    <div class="member-content">
                      
                      <!-- <span>Content</span> -->
                      <p>
                        Panneau de signalisation de danger
      
                      </p>
                      
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section>







          <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">
      
              <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                    <img  class="pann" src="assets/img/pz.jpeg"  class="img-fluid" alt="">
                    <div class="member-content">
                     
                      <p>
                        Panneau de signalisation de vent latéral
                      </p>
                      
                    </div>
                  </div>
                </div>
                
                
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  
                  <div class="member">
                    <img class="pann" src="assets/img/pw.jpeg" class="img-fluid" alt="">
                    <div class="member-content">
                      
                      <!-- <span>Marketing</span> -->
                      <p>
                        Panneau risque de chutes de pierres
                      </p>
                        
                    </div>
                  </div>
                </div>
      
               <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                    <img class="pann"  src="assets/img/py.jpeg" class="img-fluid" alt="">
                    <div class="member-content">
                      
                      <!-- <span>Content</span> -->
                      <p>
                        Panneau de passage pour piétons
      
                      </p>
                      
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section>


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