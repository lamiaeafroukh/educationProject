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
          <li><a class="active"   href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <!-- <li><a href="courses.php">à Propos</a></li> -->
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
        <li><a href="events.php">Feux Ronds</a></li>
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
              <li class="dropdown"><a href="pneu.php"><span>Maintenance de la voiture</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
          <li><a href="pneu.php">Maintenance des pneus</a></li>
          <li><a href="#">maintenance des lumières</a></li>
          <li><a href="#">maintenance du moteur</a></li>
          
        </ul>
            </li>
             
            </ul>
          </li> 
          <li><a    href="pricing.php">Coût</a></li>    
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Driving Tomorrow</h1>
      <h2>Tu viens d'avoir 18 ans et tu veux conduire ?</h2>
      <a href="courses.php" class="btn-get-started">Commencer</a>
    </div>
  </section><!-- End Hero -->

  <main  class="mn" id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/Homepic.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>U DRIVE est une platforme d'apprentissage du code routier</h3>
            <p class="fst-italic">
              Avoir son auto-école à proximité sans devoir se déplacer
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Apprenez le code routier</li>
              <li><i class="bi bi-check-circle"></i> Être plus familier avec les véhicules</li>
              <li><i class="bi bi-check-circle"></i> Devenir plus vigilant aux accidents de la routes</li>
            </ul>
            <p>
              L'accecibilité de nos cours vous aidera à obtenir votre permis de conduite
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Etudiants</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Cours</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
            <p>Quiz</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Vidéos</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi U DRIVE ?</h3>
              <p>
               l'accecibilité et la facilité d'apprentissage est notre premier but.
               On vise à aider cette nouvelle génération à apprendre le code routier et Être plus sensible au dangers de la route , ainsi qu'être comfortable à conduire en les évitant.
              </p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Education</h4>
                    <p>Tout les cours qui concernent le code routier ainsi que des vidéos d'apprentissage</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>sensibilisation</h4>
                    <p>Mettre en clair les dangers de la route et donner des solutions pour les éviter</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Accecibilité</h4>
                    <p>Cette platforme est accecible pour tous et dans n'importe quel endroi du monde</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section>End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cours</h2>
          <p>Cours Populaire</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/interdiction.png"   class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Signalisation</h4>
                  <p class="price">$10</p>
                </div>

                <h3><a href="interdiction.php">Interdiction</a></h3>
                <p>quelles sont les paneaux d'interdictions et quelle sont leurs types</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

         

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/change" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Circulation</h4>
                  <p class="price">$18</p>
                </div>

                <h3><a href="course-details.php">Changement de direction</a></h3>
                <p>Quoi faire en changeant de direction, et quand on peut le faire</p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->
 <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/ll.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Signalisation</h4>
                  <p class="price">$15</p>
                </div>

                <h3><a href="events.php">Signalisation Verticale</a></h3>
                <p>signification de chaque panneau et son importance</p>
               
              </div>
            </div>
          </div> <!-- End Course Item-->
        </div>

      </div>
   <!-- </section> End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <!-- <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Trainers Section -->

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