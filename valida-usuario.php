<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/11/16
 * Time: 22:28
 */


session_start();
function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

//Aqui ele faz a verificaçao se o usuario esta com login feito
function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

//Verifica se usuario esta logado antes de deixar executar qualquer ação.
function verificaUsuarioLogado()
{
    if (!usuarioEstaLogado()) {
        header("Location:index.php?falhaDeSeguranca=true");
        die();
    }
}
//Aqui ele seta o cookie dando OK dizendo que usuario esta logado.
function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}
