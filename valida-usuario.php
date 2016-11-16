<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/11/16
 * Time: 22:28
 */

//Verifica se usuario esta logado antes de qualquer ação.
function verificaUsuarioLogado()
{
    if (!isset($_COOKIE["usuario_logado"])) {
        header("Location:index.php?falhaDeSeguranca=true");
        die();
    }
}
