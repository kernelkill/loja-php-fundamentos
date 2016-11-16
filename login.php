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
    header("Location: index.php?login=0");
}else{
    logaUsuario($usuario["email"]);
    header("Location: index.php?login=1");
}
die();
