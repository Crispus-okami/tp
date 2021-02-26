<?php

session_start();
    $id = $_SESSION['id']; 
    $first = $_SESSION['first'];
    $last = $_SESSION['last'];
    $type = $_SESSION['type'];
    $statut = $_SESSION['active'];
    $mail = $_SESSION['email'];
   

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>Accueil</title>
</head>

<body>


  <header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>CEFP
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="container">

          <ul class="navbar-nav">

            <li class="nav-item active">
              <a href="index.html" class="nav-link">Accueil</a>
            </li>

              <li class="nav-item active">
              <a href="#cont" class="nav-link">Contacts</a>
            </li>

                <?php

                    if(!empty($id))
                        {
                            echo('  <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">'.$first.'</a>
                          </li>
                          
                          <li class="nav-item">
                            <a href="logout.php" class="nav-link">Se déconnecter</a>
                          </li>');
                        }
                        else{
                            echo('  <li class="nav-item">
                            <a href="register.php" class="nav-link">s\'iscrire</a>
                          </li>');
                          echo('  <li class="nav-item">
                          <a href="login.php" class="nav-link">Se connnecter</a>
                        </li>');
                        }
                
                ?>
          

            </li>

          </ul>

        </div>
      </div>

    </nav>

  </header>

  <div class="container">
    <div class="row">
      <div id="carouselExampleCaptions" class="carousel slide col-md-12" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white bg-dark">
              <h5>Faites nous confiance</h5>
              <p>Nous offrons un enseignement de qualité.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white bg-dark">
              <h5>Du professionalisme</h5>
              <p>Nous sommes la relève.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white bg-dark">
              <h5>Originalité</h5>
              <p>Nos diplome son reconnus.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom"></center>1⃣Expertise maritime
        </h5>
        <p class="text-justify">
        1⃣Expertise maritime, Import -Export, Économie maritime, Transit international, logistique, Consignation maritime, Magasinage, Technicien Enleveur portuaire, commerce international et Entrepreneuriat appliqué 
coût:
100mille francs  
Cours accéléré: 3mois
 Cours normal:6mois
+ 3 mois de stage auprès des commissionnaires agréés en douane, les sociétés de transit et les entreprises d'import- export partenaires.
        </p>
         <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a> 
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>2⃣Billetterie, Tourisme
        </h5>
        <p class="text-justify">
        
        2⃣Billetterie, Tourisme, Assurance, hôtesse, et Gestion des Agences de voyage +( AMADEUS et GALILEO)
Bonus: Gestion des structures de transfert d'argent et DHl
coût 150mille francs
Possibilité de passer l Examen IATA 
Durée 6 mois.
+ 3 mois de Stage dans les agences de voyage du group Bos corporation et autres agences de voyage au Bénin et au Togo.
Stage dans les compagnies aériennes pour les titulaires du BAC.
(option disponible en cours du jour et en cours du soir )

        
        </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>3⃣Auxiliaire de Banque, Assurance
        </h5>
        <p class="text-justify">3⃣Auxiliaire de Banque, Assurance, d'institutions de microfinance, du marché financier et Trading
Coût: 150mille francs
Durée: 6mois + 3mois de stage dans les institutions de microfinance et dans certaines Banques.
Filière très porteuse
(option disponible en cours du soir )
        </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>
      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>
4⃣Tourisme, Hôtellerie
        </h5>
        <p class="text-justify">événementielle,hôtesse,Gouvernance  et organisateur de mariage
Possibilité de passer les examens nationaux: CAP et DT ou BAC.
coût 200mille francs
CAP: 250mille francs 
Durée 6mois +3mois de stage dans les hôtel et restaurant.
Possibilité d'insertion</p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>5⃣Qualification professionnelle aux métiers de délégation médicale
        </h5>
        <p class="text-justify">5⃣Qualification professionnelle aux métiers de délégation médicale
Coût: 150mille francs
Auxiliaire en pharmacie 
coût 120mille francs
Durée 6mois
+ 3 mois de Stage
Possibilité d'insertion.
(option disponible en cours du jour et en cours du soir )
        </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>
      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>6️⃣Esthétique Cosmétique
        </h5>
        <p class="text-justify">6️⃣Esthétique Cosmétique, Beauté, Bien-être massage, make up, Nouage  de foulard, Onglerie et soins de visage 
Coût: 250 mille francs 
Durée: 09 mois plus 03 mois de stage dans les prestigieuses structures d'esthétique et de massage au Bénin et en Europe.
Filière très porteuse.
(Option disponible en cours du jour et du soir)
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>
7️⃣Sécrétariat Bureautique
        </h5>
        <p class="text-justify">
7️⃣Sécrétariat Bureautique, Bilingue, juridique, Comptable, Médical et Assistant de Direction, caissière, guichetier et comptable
coût 120mille francs
Durée 6mois
Stage garanti plus recrutement des meilleurs .

  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>8️⃣ Audiovisuel: Cadrage professionnel
        </h5>
        <p class="text-justify">

        8️⃣ Audiovisuel: Cadrage professionnel, prise de vue, photojournalisme, shooting, montage et post-production 
Durée 06mois plus 03 mois de stage
Coût 250mille francs
Filière très porteuse 
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>9️⃣Informatique d'entreprise
        </h5>
        <p class="text-justify">9️⃣Informatique d'entreprise, PAO, OPS, Perfecto, Sage Saari, photoshop, publisher, inDesign et Graphisme
coût 150mille francs
Durée 6mois.
+ 3 mois de Stage.
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>1⃣0️⃣Création de site internet
        </h5>
        <p class="text-justify">1⃣0️⃣Création de site internet, Graphic Design, Développement d'application web, mobile et gaming, marketing digital e-commerce, community manager, social media marketing, gestion de projet web
Coût: 300mille francs 
Durée: 09 mois plus 03 mois de stage ou d'incubation 

  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>1️⃣1️⃣ Génie informatique
        </h5>
        <p class="text-justify">
1️⃣1️⃣ Génie informatique: Maintenance informatique,Réseau Réparation des téléphones  Portables, installation des antennes paraboliques et des caméras de surveillance 200mille francs
Durée 6mois+3 mois de Stage pratique.
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>

      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>1️⃣2⃣Electricité bâtiment
        </h5>
        <p class="text-justify">
1️⃣2⃣Electricité bâtiment, Froid, Climatisation et Énergie renouvelable( panneaux solaires)
coût 200 mille francs
Durée 9 mois +3 mois stage pratique sur le terrain et dans nos structures de froid 
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>


      <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>3⃣ Sérigraphie Manuelle
        </h5>
        <p class="text-justify">
        1️⃣3⃣ Sérigraphie Manuelle, Mécanique et Digitale
Coût: 150 mille francs
Durée 6mois plus 3mois de stage pratique 
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>


    <div class="col-md-6">
        <br>
        <h5 class="alert alert-primary text-center">
          <center><img src="img/2.png" class="card-img-bottom" width="540px" height="359.25px"></center>1️⃣4️⃣Menuiserie Aluminium
        </h5>
        <p class="text-justify">
        1️⃣4️⃣Menuiserie Aluminium( vitrier)miroiterie aluminium, baies vitrées,pose de châssis Nacos, rampe escalier porte à la française et à l'anglais.
Durée: 09 mois + 3 mois de stage riche en pratique. 
Coût 150mille francs 
Formation hautement pratique. 
  </p>
        <a href="register.php" class="btn btn-info btn-block btn-lg" role="button">S'inscrire</a>
      </div>
       
               
      </div>
   
   <div class="row" id="cont">
   
   <div class="col-md-3"><h3>1⃣Siège du group Bos Corporation</h3>
                        <h4>ADRESSE</h4>
                        <p>Cotonou, en face du CEG Ste rita Immeuble avant L'Office du BAC en venant de Canal Olympia  
</p>
</div>

<div class="col-md-3"><h3>1⃣Siège du group Bos Corporation</h3>
                        <h4>ADRESSE</h4>
                        <p>3⃣ Godomey, derrière le CEG Godomey, rue de L'Eglise Union Renaissance D'hommes en Christ,  1er Immeuble à 4 étages à gauche 
</p>
</div>

<div class="col-md-3"><h3>1⃣Siège du group Bos Corporation</h3>
                        <h4>ADRESSE</h4>
                        <p>2⃣ Calavi zopah immeuble en face de CARDER 
</p>
</div>

<div class="col-md-3"><h3>Contacts</h3>
                        <ul>
                            <li>00229 97669598</li>
                            <li>00229 97011698</li>
                            <li>00229 60428176</li>
                            <li>00229 69709595</li>
                            <li>00229 91260707</li>
                            <li>+33 767394980</li>
                            <li>cefplesavoirfaire@gmail.com</li>
                        <ul>
   
   </div>

</div>    
  


 



</body>



</html>