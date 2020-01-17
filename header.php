<?php
  session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i>Accueil</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="matiere.php"><i class="fa fa-book"></i> Matieres</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="tuteur.php"><i class="fa fa-leaf"></i>Tuteurs</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="avis.php"><i class="fa fa-comments"></i>Avis</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="planning.php"><i class="fa fa-table"></i> Planning</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-in"></i>
              Login
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="inscription.php"><i class="fa fa-sign-"></i>Inscription</a>
              <a class="dropdown-item" href="login.php"><i class="fa fa-sign-in"></i>Connexion</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i>
              <?php 
                 if (isset($_SESSION['login'])){
                   echo "<span>".$_SESSION['login']."</span>"; 
                 }
             
              ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="login.php"><i class="fa fa-about"></i>Modifier profil</a>
              <?php 
               if ( isset($_SESSION['droits'])=="prof" ){
                  echo "<a class= \"dropdown-item\" href=\"valider.php\"><i class=\"fa\"></i>";
                  echo "<span>Valider un groupe(Prof)</span>"; 
                  echo "</a>";
               }
              ?>

              <a class="dropdown-item" href="deconnexion.php"><i class="fa fa-sign-out"></i>Deconnexion</a>
              <a class="dropdown-item" href="login.php"><i class="fa fa-about"></i>A propos</a>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<!--/.Navbar-->
<?php
include('connexion.php');
?>
