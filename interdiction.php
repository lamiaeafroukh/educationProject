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
          <!-- <li><a class="active"   href="courses.php">A Propos de Permis</a></li> -->
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
        <h2>INTERDICTION</h2>
        <p>Un panneau d'interdiction doit être respecté à la lettre. Son message est simple et sans équivoque. Il est utilisé dans le but de faire respecter les restrictions répertoriées dans le Code de la route. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="assets/img/interdictionc.jpg" class="img-fluid" alt="">
            <h3>Panneau d'interdiction : caractéristiques générales</h3>
            <p>
                Le panneau d'interdiction se caractérise par sa forme ronde à fond blanc bordé de rouge. Quelques exceptions ont des fonds différents comme le rouge du panneau sens interdit ou le bleu de l'interdiction de stationner.
            </p>
            <h3>Caractéristiques</h3>
            
              <ul><i class="bi bi-check-circle" style="color: #83C5BE;"></i>&nbsp Les panneaux d'interdiction annoncent une obligation ou une interdiction. Ils peuvent interdire une manœuvre, imposer une limitation de vitesse, bloquer l'accès à une voie ou à une catégorie de véhicules.</ul>
              <Ul><i class="bi bi-check-circle" style="color: #83C5BE;" ></i>&nbsp Vous pouvez trouver des panneaux d'interdiction de chaque côté de la chaussée.</Ul>
              <ul><i class="bi bi-check-circle" style="color: #83C5BE;"></i>&nbsp Le début de l'interdiction commence à la hauteur du panneau routier, lorsqu'il n'est pas complété par un panonceau de distance.</ul>
              <ul><i class="bi bi-check-circle" style="color: #83C5BE;"></i>&nbsp L'effet se termine à la prochaine intersection ou avec un deuxième panneau barré de noir qui marque la fin de l'interdiction.</ul>
              <ul><i class="bi bi-check-circle" style="color: #83C5BE;"></i>&nbsp Lorsque deux panneaux d'interdiction se superposent, il est nécessaire de prendre en compte chaque panneau séparément.</ul>

              <h3>Les types d'interdiction</h3> <br>
            <h4><i class="bi bi-check-circle" style="color: #83C5BE;"></i>  Interdiction de stationnement</h4>
            <p><h5>Interdiction de stationner :</h5>
              <img src="assets/img/stationner.gif" style="height: 5%; width: 20%;" alt=""><br>
              un panneau rond et à bordure rouge. Son fond est bleu barré de rouge. À partir de son implantation, il est interdit de garer votre véhicule sur la chaussée ou l'accotement. Une ligne jaune discontinue au sol correspond au même signal. Vous pouvez vous arrêter, mais en aucun cas quitter votre voiture sous peine de contravention. L'interdiction prend fin à la prochaine intersection ou au panneau de fin d'interdiction. Si un panonceau précise les règles, il s'agit alors d'un stationnement réglementé selon le Code de la route.
          </p>
          <p><h5>Arrêt interdit :</h5>
            <img src="assets/img/Arrêt.png" style="height: 5%; width: 20%;" alt=""><br>
            identique, mais barré d'une croix rouge. Dans ce cas, l'arrêt et le stationnement sont impossibles. L'interdiction est toujours valable du côté de l'implantation du panneau et jusqu'à la prochaine intersection. La ligne continue jaune formule le même interdit.
        </p>
        <h4><i class="bi bi-check-circle" style="color: #83C5BE;"></i>  Interdiction de sens de Circulation </h4>
            <p><h5>panneau d'accès interdit :</h5>
              <img src="assets/img/accesinterdit.jpg" style="height: 10%; width: 30%;" alt=""><br>
              lorsque le panneau d'interdiction est vide à l’intérieur, il annonce une circulation impossible dans les deux sens. C'est le panneau B0. Il est assez rare et se trouve souvent à l'entrée de routes privées ou forestières dont il interdit l'accès. Cela peut ne concerner qu'une certaine catégorie de véhicules (polluants ou trop lourds).
          </p>
          <p><h5>Sens interdit :</h5>
            <img src="assets/img/sensinterdit.png" style="height: 6%; width: 18%;" alt=""><br>
            lorsqu'une route est à sens unique, c'est toujours pour des raisons de sécurité. Vous n'avez pas le droit de vous engager dans la voie. Le panneau de sens interdit est implanté à l'entrée de la voie. Il est de type B1 et est reconnaissable avec sa barre horizontale blanche sur fond rouge. Le but est de garantir une meilleure fluidité de la circulation. En cas de non-respect, une amende forfaitaire vous coûtera 135 euros. Sur l'autoroute, ce panneau prévient contre un risque de circulation à contresens qui est une erreur lourde de conséquences.
        </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Panneau</h5>
              <p><a href="#">rond</a></p>
            </div>

           <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Utilisation</h5>
              <p>Interdiction et restriction</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Types</h5>
              <p>3 </p> </div>
              <h3>Panneaux d'interdiction</h3>
              <img src="assets/img/interdvert.jpeg" style="height: fit-content;" class="fluid" alt="">
           
                       <!-- HNAYA ILA BGHINA NZIDU CHI 7AJJA W SF -->      
               <!-- <div class="container" data-aos="fade-up">
                <div class="row">
                  <div class="col-lg-8">
                    <h3>Panneaux d'interdiction</h3> -->
                    
                    
                    <!-- <p>
                        Le panneau d'interdiction se caractérise par sa forme ronde à fond blanc bordé de rouge. Quelques exceptions ont des fonds différents comme le rouge du panneau sens interdit ou le bleu de l'interdiction de stationner.
                    </p>-->
                  </div>  

           

          </div>
          
      
        </div>

      </div>
    

    <!-- ======= Cource Details Tabs Section ======= -->
    <!-- <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>End Cource Details Tabs Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
            
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