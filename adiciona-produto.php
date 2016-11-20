<?php

include("cabecalho.php");
include("banco-produto.php");
include("valida-usuario.php");

verificaUsuarioLogado();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];
if (array_key_exists('usado', $_POST)){
    $usado = "true";
}else{
    $usado = "false";
}

include("conecta.php");

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
    <p class="text-success text-center">Produto <?= $nome; ?>, no valor de R$<?= $preco; ?> adicionado com sucesso</p>
<?php
    }else{
    $msg = mysqli_error($conexao)
    ?>
    <p class="text-danger text-center"> O Produto <?= $nome;?> nao foi adicionado: <?= $msg?></p>
<?php
}
?>
<?php include("rodape.php");?>