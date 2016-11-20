<?php
include("valida-usuario.php");
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 19/11/16
 * Time: 14:32
 */
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login: Loja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form-login.css">
</head>
<body>
<div id="form-container">
    <div class="panel" id="form-box">
        <form action="login.php" method="post">
            <h1 class="text-center">Login</h1>

            <div class="form-group">
                <label class="sr-only" for="login">Usuário</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Seu login ou email">
                </div>
            </div>

            <div class="form-group">
                <label class="sr-only" for="senha">Senha</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" value="Logar" class="btn btn-success form-control">
            </div>
            <div class="form-group">
                Não é registrado? <a href="cadastro.html">Crie uma conta</a>.
            </div>
        </form>
    </div>
</div>
</body>
</html>
