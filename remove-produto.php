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

$id = $_POST['id'];
removeProduto($conexao,$id);
header("Location: produto-lista.php?removido=true");
die();
?>

