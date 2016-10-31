<?php include("cabecalho.php");?>
<?php

function insereProduto($conexao,$nome, $preco){
    $query = "insert into produtos (nome, preco) VALUES ('{$nome}', {$preco})";
    return  mysqli_query($conexao, $query);
}
$conexao = mysqli_connect('127.0.0.1', 'root', 'root', 'loja');

$nome = $_GET["nome"];
$preco = $_GET["preco"];

if (insereProduto($nome, $preco)){ ?>
    <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso</p>
<?php }else{ ?>
    <p class="text-danger"> O Produto <?= $nome; ?> nao foi adicionado</p>
    <?php
}
?>
<?php include("rodape.php");?>