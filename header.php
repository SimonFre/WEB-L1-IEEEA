<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Titre du site</title>

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/cosmo.css" /> <!-- Bootstrap theme -->

  <!-- Jquery 3.3.1  -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  			  crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- <link rel="stylesheet" href="./css/main.css" /> -->

</head>

<body>
  <nav class="navbar navbar-default" style="border-radius:0px;"> <!-- navbar-fixed-top -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="search.php">Rechercher une annonce</a></li>
        <li><a href="depo.php">Déposer une annonce</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION['email'])) {
          echo '<li><a href="./account.php"><span class="glyphicon glyphicon-user"></span> Mon compte</a></li>
                <li><a href="./include/logout_inc.php"> Se déconnecter</a></li>';
        } else {
          echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>';
        }
        ?>
      </ul>
    </div>
  </nav>

  <div class="main-container">
    <div class="container">
