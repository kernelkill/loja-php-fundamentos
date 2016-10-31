<?php include("cabecalho.php"); ?>
        <h1>Formulario de Produto</h1>
<form action="adiciona-produto.php  ">
    Nome:
    <input type="text" name="nome">
    Preço
    <input type="number" name="preco">

    <input type="submit" value="Cadastrar">
</form>
<?php include("rodape.php") ?>