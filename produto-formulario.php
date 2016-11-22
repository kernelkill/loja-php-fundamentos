<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("valida-usuario.php");

verificaUsuarioLogado();
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao);
?>

    <h1>Formulario de Produto</h1>
    <form action="adiciona-produto.php" method="post">
        <table class="table">

            <?php include ("produto-formulario-base.php")?>

            <td>
                <input class="btn bg-primary" type="submit" value="Cadastrar">
            </td>
        </table>
    </form>
<?php include("rodape.php") ?>