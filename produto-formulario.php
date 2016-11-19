<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("valida-usuario.php");

verificaUsuarioLogado();
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