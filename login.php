<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 13/11/16
 * Time: 20:54
 */
include('conecta.php');
include ('banco-usuario');

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
echo $usuario;

