<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 13/11/16
 * Time: 20:54
 */
include ("conecta.php");
include ("banco-usuario.php");
include ("valida-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == null){
    $_SESSION["danger"] = "usuario ou senha invalido!";
    header("Location: index.php");
}else{
    $_SESSION["success"] = "usuario logado com sucesso!";
    logaUsuario($usuario["email"]);
    header("Location: index.php?login=1");
}
die();
