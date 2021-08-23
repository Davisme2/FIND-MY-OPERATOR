<?php

require_once 'numerotation.poo.php';

$_POST = new Numero(array(
  'number' => []
));

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
        <?php  echo $form->input('number'); ?> 
    </div>
    <div class="col-auto">
        <?php  echo $form->submit(); ?>
    </div>
  </form>

  <footer class="mt-auto text-white-50">
    <p>Copyright 2021 made by HELIOS64</p>
  </footer>
</div>


    
  </body>
</html>
