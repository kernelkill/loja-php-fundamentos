<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 06/11/16
 * Time: 12:56
 */
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include("valida-usuario.php");

$id = $_POST['id'];
removeProduto($conexao,$id);
$_SESSION["success"] = "Produto removido com sucesso!";
header("Location: produto-lista.php");
die();
?>

