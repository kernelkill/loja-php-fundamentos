<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 13/11/16
 * Time: 20:54
 */
require_once ("conecta.php");
require_once ("banco-usuario.php");
require_once ("valida-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == null){
    $_SESSION["danger"] = "Usuario ou senha invalido!";
    header("Location: index.php");
}else{
    $_SESSION["success"] = "Usuario logado com sucesso!";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();
