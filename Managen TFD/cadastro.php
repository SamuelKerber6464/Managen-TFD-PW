<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">

  </head>

  <body>
    <div id="header">
      <a id="inicio" href="index.php">Início</a>
    </div>
    <div id="cont">
      <h1>Crie sua conta</h1>
      <input type="text" placeholder="Usuário" class="credenciais" id="user">
      <input type="password" placeholder="Senha" class="credenciais" id="pass">
      <input type="text" placeholder="Email" class="credenciais" id="email">
      <button id="botao2" type="submit" onClick="Cadastrar()">Cadastrar-se</button>
      <a class="texto">Quer entrar na sua conta?</a><a id="botao" href="login.php">Entrar</a>
      <a id="message"></a>
      </div>
    </body>
</html>