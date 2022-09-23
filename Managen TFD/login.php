

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
    <div id="header">
      <a id="inicio" href="../../index.php">Início</a>
    </div>
    <div id="cont">
      <h1>Entre na sua conta</h1>
      <form action="" id="formLogin">
        <input type="text" name="usuario" id="usuario" required class="credenciais"/>
        <input type="password" name="senha" id="senha" required class="credenciais"/>
        <input type="submit" id="botao">
        </form>
      <a class="texto">Não tem uma conta?</a><a id="botao" href="cadastro.php">Cadastrar-se</a>
        <div class="erro" style="display: none" id="message">
        </div>
  </body>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#formLogin").submit(function(event){
                $(".erro").hide();

                event.preventDefault();

                var usuario = $("#usuario").val();
                var senha = $("#senha").val();
                var retorno;
                var erro = false;

                $.ajax({
                    url: "app/usuario/doLogin",
                    data: {usuario: usuario, senha: senha},
                    dataType: "HTML",
                    type: "POST",
                    async: true,
                    beforeSend: function(){
                        $(".loading").show();
                    },
                    success: function(data){
                        retorno = data;
                    },
                    error: function(){
                        erro = true;
                    },
                    complete: function(){
                        $(".loading").hide();

                        if(erro) {
                            console.log("Erro");
                            mostrarMensagemErro("Encontramos um problema na requisição. Tente Mais tarde");
                            return;
                        };
                        console.log(retorno);
                        if(retorno == "true"){
                            console.log("OK");
                            location.href = "inicio.php";
                        }else{
                            mostrarMensagemErro("Usuario e/ou senha incorretos.");
                        }
                    }
                })
            });
        });

        var mostrarMensagemErro = function(message){
            $(".erro").html(message);
            $(".erro").show();
        }
    </script>
</body>
</html>