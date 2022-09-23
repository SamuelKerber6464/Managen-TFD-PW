<?php
session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script async src="js/home.js" ></script>

    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/home.css">

  </head>

  <body>
    <div id="header">

      <a id="inicio" href="index.php">Início</a>

      <div class="dropdown">
        <button class="dropbtn">⮛</button> 
        <div class="dropdown-content">
          <a>Perfil</a>
          <a>Configurações</a>
          <a onclick="sair()">Sair</a>
        </div>
      </div>

    </div>
    <div id="cont">
      <h1 id="logado"></h1>
    </div>
    <div style="display: block">
      <ol class="list">
        <li class="content">
          <div id="plus">
            <img src="images/plus.png" >
          </div>
        </li>
        <li class="content">
          <div class="contdivimg">
          </div>
          <div class="contdivmisc">
            <a class="nomeemp">Restaurante Kerber</a>
          </div>
        </li>
      </ol>
    </div>
    <div id="newempbg">
      <div id="empscreen">
        <button class="empbot" id="criar">Criar</button>
        <button class="empbot" id="entrar">Entrar</button>
      </div>
    </div>
  </body>
</html>
