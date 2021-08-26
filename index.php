<?php

require_once 'Number.php';

?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>FIND MY OPERATOR</title> 

    <!-- Bootstrap CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
<link rel="stylesheet" href="main.css">    

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
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">FIND MY OPERATOR</h3>

    </div>
  </header>
  
  <main class="px-3">
      <h1>Découvrez votre opérateur mobile</h1>
    <p class="lead">Grâce à ce programme, découvrez l'opérateur de votre numéro téléphone en inscrivant votre numéro</p>
  </main>
  <form class="row g-3" action="index.php" method="POST">
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Découvre ton opérateur téléphonique">
    </div>
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Entrez le numero</label>
    </div>
    <div class="col-auto">
        <input type="number" class="form-control" id="inputPassword2" name="numero" placeholder="Entre le numero " required="required">
        <button type="submit" name="valider" class="btn btn-primary mb-3">Valider</button>
    </div>

    <!-- Sécurité pour le input du formulaire -->
    <?php 
    
        if (isset($_POST['valider'])) { // Si le button submit est défini

          if (isset($_POST['numero'])) { // Si la variable global $_POST['numero'] est définie

              if (!empty($_POST['numero'])) { // Si la variable glogbal $_POST['numero'] n'est pas vide

                  // Tant que l'utilisateur va entrer un nombre de caractère inférieur à 10
                  while (strlen($_POST['numero']) < 10) {
                    
                    echo '<div class="alert alert-danger"><p class="lead">Minimum 10 chiffres s\'il vous plait</p></div>';
                    break;

                  }

                  // Tant que l'utilisateur va entrer un nombre de caractère supérieur à 10
                  while ( strlen($_POST['numero']) > 10) {

                    echo '<div class="alert alert-danger"><p class="lead">Vous avez depassé les 10. <br> Veuillez recomencer s\'il vous plait</p></div>';
                    break;

                  }

                  // Tant que l'utilisateur va respecter les 10 caractère demandé
                  while (strlen($_POST['numero']) === 10) {
                    echo '<div class="alert alert-success"><p class="lead">Vous avez entrez les 10 chiffres<p></div>';
                    break;
                  }
              }
              
          }

        }
    
    ?>
  </form>
  <footer class="mt-auto text-white-50">
    <p>Copyright 2021 made by HELIOS64</p>
  </footer>
</div>
    
  </body>
</html>
