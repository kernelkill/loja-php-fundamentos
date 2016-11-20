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
    $_SESSION["danger"] = "Usuario ou senha invalido!";
    header("Location: ind.php");
}else{
    $_SESSION["success"] = "Usuario logado com sucesso!";
    logaUsuario($usuario["email"]);
    header("Location: ind.php");
}
die();
