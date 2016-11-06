<?php include("cabecalho.php");?>
<?php

include("banco-produto.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];
include("conecta.php");

if(insereProduto($conexao, $nome, $preco)){ ?>
    <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso</p>
<?php
    }else{
    $msg = mysqli_error($conexao)
    ?>
    <p class="text-danger"> O Produto <?= $nome;?> nao foi adicionado: <?= $msg?></p>
<?php
}
?>
<?php include("rodape.php");?>