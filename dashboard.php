<?php

    session_start();
    $id = $_SESSION['id']; 
    $first = $_SESSION['first'];
    $last = $_SESSION['last'];
    $type = $_SESSION['type'];
    $statut = $_SESSION['active'];
    $mail = $_SESSION['email'];
    if(!empty($id))
      {

      }
      else{header('location: login.php');}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Dashboard | <?php echo $first, " ", $last; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
      <?php
          if($statut==true)
            {
              if($type=="is_student")
                {
                  echo('<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">'.$first.' '.$last.' |CEFP</a>
                  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                      <a class="nav-link" href="logout.php">Se deconnecter</a>
                    </li>
                  </ul>
                </header>
                
                <div class="container-fluid">
                  <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                      <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                              <span data-feather="home"></span>
                              Dashboard
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="set_user.php">
                              <span data-feather="user"></span>
                              Informations Personnelles
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="set_passr.php">
                              <span data-feather="key"></span>
                              Changer mot de passe
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="deactivate.php">
                              <span data-feather="stop-circle"></span>
                              Désactiver son compte
                            </a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                              <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                          <div class="btn-group me-2">
                           
                          </div>
                          
                        </div>
                      </div>
                
                
                      <h2>Section title</h2>
                   
                      </div>
                    </main>
                  </div>
                </div>
                ');
                }


                elseif($type=="is_admin")
                {
                  echo('<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">'.$first.' '.$last.' |CEFP</a>
                  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                      <a class="nav-link" href="logout.php">Se deconnecter</a>
                    </li>
                  </ul>
                </header>
                
                <div class="container-fluid">
                  <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                      <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                              <span data-feather="home"></span>
                              Dashboard
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="set_user.php">
                              <span data-feather="user"></span>
                              Informations Personnelles
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="set_passr.php">
                              <span data-feather="key"></span>
                              Changer mot de passe
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="deactivate.php">
                              <span data-feather="stop-circle"></span>
                              Désactiver son compte
                            </a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                              <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                          <div class="btn-group me-2">
                           
                          </div>
                          
                        </div>
                      </div>
                
                
                      <h2></h2>
                      </main>
                  </div>
                </div>
                ');
                }
            
            }

          

            else
            {
              echo '<hr>Votre compte est désactivé</hr>';
            }
      ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
