<?php
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php"); ?>
    <!doctype html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--<link rel="stylesheet" href="css/loja.css">-->
        <link rel="stylesheet" href="css/form-login.css">
        <title>Loja</title>
    </head>
    <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Cadastro de Cliente</a></li>
                    <li><a href="produto-formulario.php">Cadastro de Produto</a></li>
                    <li><a href="produto-lista.php">Listar Produtos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="form-container">
        <div class="panel" id="form-box">
<?php mostraAlerta("success");
mostraAlerta("danger");
?>