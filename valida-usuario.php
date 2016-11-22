<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/11/16
 * Time: 22:28
 */

//Aqui inicio minha sessão de usuario.
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
        $_SESSION["danger"] = "Voce nao tem acesso a essa funcionalidade";
        header("Location:index.php");
        die();
    }
}
//Aqui ele seta o cookie dando OK dizendo que usuario esta logado.
function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logout(){
    //Aqui fecho a sessão, destruo ela.
   session_destroy();
    //unset($_SESSION["usuario_logado"]);
    //Logo depois inicio ela novamente para que seja capturada na hora do logout
    session_start();
}