<?php include("cabecalho.php"); ?>
        <h1>Formulario de Produto</h1>
<form action="adiciona-produto.php  ">

    <table class="table">
    <tr>
        <td>Nome:</td>
        <td><input class="form-control" type="text" name="nome"></td>
    </tr>
    <tr>
        <td>Preço</td>
        <td><input class="form-control" type="number" name="preco"></td>
    </tr>
        <td>
            <input class="btn bg-primary" type="submit" value="Cadastrar">
        </td>
    </table>
</form>
<?php include("rodape.php") ?>