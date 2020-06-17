<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">


</head>
<body>

    <div class="container-fluid">
         <div class="col-md-3 col-xs-12" id="bglogin">
            <div id="login">
            <img id="logo" src="img/logo.png">
                <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" id="usuario" placeholder="Usuário" required><br>
                    <input type="password" class="form-control" id="senha" placeholder="Senha"><br>
                    <a href="#">Lembrar senha</a><br>
                    <input class="btn btn-success" type="submit" value="Entrar">
                    <button id="btncad" type="button" class="btn btn-danger">Cadastrar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>