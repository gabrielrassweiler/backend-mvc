<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <title>Backend MVC</title>
</head>

<body>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    body {
      text-align: center;
      position: absolute;
      width: 100%;
      background-color: #d9d9d9;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark p-3 mb-3 bg-dark" id="headerNav">
    <div class="container-fluid">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item">
          <a id="home" class="nav-link mx-2" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a id="pessoa" class="nav-link mx-2" href="index.php?classe=pessoa&metodo=listar">Pessoa</a>
        </li>
        <li class="nav-item">
          <a id="contato" class="nav-link mx-2" href="index.php?classe=contato&metodo=listar">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</body>

</html>

<?php

require_once 'vendor/autoload.php';

use backend\Controller\Controller;

(new Controller())->controleRotas();
