<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formata.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        iframe{
            position: fixed;
            top: 30%;
            left:20%;
        }
        body{
            background-color: lightblue;
            text-align: center;
        }
        nav{
            text-align: center;
        }
        iframe{
            z-index: 2;
        }
        </style>
        
</head>
<body>
     
<?php

 echo"
 <nav>
 <h1> Bem-vindo  ".$_SESSION['login']."</h1>
 <ul class='nav nav-tabs'>
  <li class='nav-item'>
  <a class='nav-link' <a href='index.php'> Início </a>
  </li>
  <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Usuário</a>
    <div class='dropdown-menu'>
      <a class='dropdown-item' href='causu.php' target='bibli'> Cadastro</a>
      <a class='dropdown-item' href='cousu.php' target='bibli'> Consulta </a>
      <a class='dropdown-item' href='upusu1.php' target='bibli'> Atualização </a>
      <a class='dropdown-item' href='delusu1.php' target='bibli'> Apagar </a>
    </li>
    </div>
    <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Material</a>
    <div class='dropdown-menu'>
      <a class='dropdown-item' href='cama.php' target='bibli'> Cadastro</a>
      <a class='dropdown-item' href='coma.php' target='bibli'> Consulta</a>
      <a class='dropdown-item' href='upma1.php' target='bibli'> Atualização </a>
      <a class='dropdown-item' href='delma1.php' target='bibli'> Apagar </a>
    </li>
    </div>
    <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Empréstimos</a>
    <div class='dropdown-menu'>
      <a class='dropdown-item' href='emprestimo.php' target='bibli'>Emprestar</a>
      <a class='dropdown-item' href='devolver.php' target='bibli'>Devolver</a>
    </li>
  <li class='nav-item'>
    <a class='nav-link' href='?logout'>Fazer logout!</a>
  </li>
</ul>
 </nav>
 ";

?>
<main>
<iframe width="1000" height="700" src="biblioteca.jpg" name="bibli" frameborder="0" allowfullscreen>

</iframe>

<main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>